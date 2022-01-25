<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

use App\Entity\User;
use App\Entity\Produto;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

use App\Form\SignupForm;
use App\Form\ContactForm;

use App\Controller\MailerController;

use Symfony\Component\Mailer\MailerInterface;

use App\Service\MailSender;
use DateTime;

class Controller extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('index.html', ['url' => $_SERVER['REQUEST_URI']]);
    }

    // Função para tratar do login no site
    #[Route('/login', name: 'login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Obtenho algum erro de autenticação que tenha ocorrido
        $error = $authenticationUtils->getLastAuthenticationError();
        // Se tiver ocorrido algum erro de autenticação adiciono uma mensagem de informação ao utilizador
        if($error)
            $this->addFlash('danger', $error->getMessageKey());
        // Obtenho o último user com que o utilizador se autenticou para pré preencher o formulário
        $lastUsername = $authenticationUtils->getLastUsername();
        if($this->isGranted('ROLE_ADMIN'))
            return $this->redirect('admin_index');
        // Renderizo o documento login.html passando o último utilizador que se autenticou para pré preencher o formulário
        return $this->render('login.html', [
            'last_username' => $lastUsername,
        ]);
    }


    //Função para tratar do processo de registar um novo utilizador
    #[Route('/registar', name: 'signup', methods: ['GET', 'POST'])]
    public function signup(
        Request $request,
        ManagerRegistry $doctrine,
        EntityManagerInterface $em,
        UserPasswordHasherInterface $passwordHasher,
        ): Response
    {
        // Crio um utilizador User
        $user = new User();
        // Crio um formulario baseado na classe SignupForm associado ao utilizador
        $form = $this->createForm(SignupForm::class, $user);
        // Processo o formulário quando o request for POST
        $form->handleRequest($request);
        // Se o formulário for submetido e válido
        if($form->isSubmitted() && $form->isValid())
        {
            // Coloco os dados do formulário no utilizador
            $user = $form->getData();
            // Obtenho o campo de confirmação de password para validar
            $pass2 = $form->get('password2')->getData();
            // Verifico se já existe algum utilizador registado com o e-mail introduzido no formulário
            $utilizador = $doctrine->getRepository(User::class)->findOneBy(['email' => $user->getEmail()]);
            if($utilizador)
            {
                // Se o e-mail já estiver registado, crio uma mensagem para o utilizador que será renderizada no ficheiro messages.html
                $this->addFlash('danger', 'Já existe um utilizador registado com o endereço '.$user->getEmail());
                // E volto a renderizar a mesma página
                return $this->renderForm('signup.html', ['form' => $form]);
            }
            // Verifico se as passwords introduzidas são diferentes
            if($user->getPassword() != $pass2)
            {
                // Se forem diferentes, crio uma mensagem para o utilizador que será renderizada no ficheiro messages.html
                $this->addFlash('danger', 'As passwords introduzidas não coincidem');
                // E volto a renderizar a mesma página
                return $this->renderForm('signup.html', ['form' => $form]);
            }
            // Encripto/hash a password
            $user->setPassword($passwordHasher->hashPassword($user, $user->getPassword()));
            $user->setRoles(['ROLE_USER']);
            $user->setAtivo(true);
            // Gravo o utilizador na base de dados
            $em->persist($user);
            $em->flush();
            // Crio uma mensagem de sucesso que será renderizada no ficheiro messages.html
            $this->addFlash('success', 'Utilizador '.$user->getEmail().' criado com sucesso');
            // Redireciono o utilizador para a página de login
            return $this->redirect('login');
        }
        // Se o request for um GET, é renderizado o ficheiro signup.html, passando o formulário para renderizar
        return $this->renderForm('signup.html', ['form' => $form]);
    }


    // Função para renderizar a página de "onde estamos"
    #[Route('/where-we-are', name: 'whereweare', methods: 'GET')]
    public function whereweare()
    {
        return $this->render('whereweare.html');
    }

    //Função para renderizar a página de "quem somos"
    #[Route('/who-we-are', name: 'whoweare', methods: 'GET')]
    public function whoweare()
    {
        return $this->render('whoweare.html');
    }


    //Função para renderizar a página de contacto (formulário de contacto)
    #[Route('/contact-us', name: 'contactus', methods: ['GET', 'POST'])]
    public function contactus(Request $request, MailerInterface $mailerInterface)
    {
        $referer = $request->server->get('HTTP_REFERER');
        //Crio o formulário a partir da classe
        $form = $this->createForm(ContactForm::class);
        if($this->getUser())
        {
            $form->setData([
                'nome_proprio' => $this->getUser()->getNomeProprio(),
                'nome_apelido' => $this->getUser()->getNomeApelido(),
                'email' => $this->getUser()->getEmail(),
            ]);
        }
        //Recebo o request feito sobre o formulário
        $form->handleRequest($request);
        //Se o formulário for submetido e válido
        if($form->isSubmitted() && $form->isValid())
        {
            //Obtenho os dados dele
            $dados = $form->getData();
            //Crio um objeto de data com a data que o formulário tem escondida
            $data_contacto = new DateTime(date_format($dados['data_contacto'],'d-m-Y'));
            //Crio um array para receber o/os contactos que o utilizador deixou
            $contactos = array();
            if(isset($dados['telefone']) && !empty($dados['telefone']))
                $contactos['telefone'] = $dados['telefone'];
            if(isset($dados['email']) && !empty($dados['email']))
                $contactos['email'] = $dados['email'];
            //Crio um objeto da minha classe que cria/envia e-mails
            $mailer = new MailSender(
                $dados['nome_proprio'],
                $dados['nome_apelido'],
                $contactos,
                $dados['mensagem'],
                $data_contacto,
                array_key_exists('email', $contactos) ? $contactos['email'] : null,
                anexo: isset($dados['anexo']) ? $dados['anexo'] : null,
            );
            $mailer->criarEmail($mailerInterface);
            $this->addFlash('success', "Obrigado pelo seu contacto, merecerá toda a nossa atenção e reponderemos com a máxima brevidade");
            return $this->redirect($referer);
        }
        return $this->renderForm('contactus.html', ['form' => $form]);
    }
}
