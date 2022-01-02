<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag;
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

use App\Service\MailSender;

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

    /**
     * Função para tratar do processo de registar um novo utilizador
     */
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

    // Função para renderizar o carrinho
    #[Route('/carrinho', name: 'carrinho', methods: 'GET')]
    public function carrinho(Request $request, Session $session)
    {
        // Verifico se existe um carrinho na sessão
        if($session->has('carrinho'))
        {
            $carrinho = $session->get('carrinho');
            dd($carrinho);
            return $this->render('carrinho.html', ['carrinho' => $carrinho]);
        }
        // Se não houver carrinho criado em sessão, crio uma mensagem para o utilizador que será renderizada através do ficheiro messages.html
        $this->addFlash('warning', "Não existe nenhum carrinho ativo!");
        // Redireciono o utilizador para os produtos
        return $this->redirectToRoute('produtos');
    }

    // Função para adicionar um produto ao carrinho
    #[Route('/carrinho/add/{id}', name: 'add_carrinho', methods: ['POST', 'GET'])]
    public function add_carrinho(Session $session, Produto $produto, EntityManagerInterface $em)
    {
        // Obtenho o produto a adicionar da base de dados
        $p = $em->getRepository(Produto::class)->find($produto);
        // Se a sessão não tiver ainda um carrinho guardado/criado
        if(!$session->has('carrinho'))
        {
            // Crio a estrutura de um carrinho novo e incluo logo o produto em questão
            $carrinho = array(
                'data_compra' => date('Y/m/d'),
                'valor_total' => $p->getPrecoUnitario(),
                'user_id' => $this->getUser()->getId(),
                $p->getNome() => array(
                    'quantidade' => 1,
                    'preco_unitario' => $p->getPrecoUnitario(),
                    'unidade' => $p->getUnidade()->getNome(),
                ),
            );
            // Crio o carrinho na sessão
            $session->set('carrinho', $carrinho);
            //dd($session);
            // Crio uma mensagem de sucesso para o utilizador que será renderizada através do ficheiro mesages.html
            $this->addFlash('success', "Adicionado 1 ".$p->getUnidade()->getNome()." de ".$p->getNome()." ao seu carrinho");
            // Redireciono o utilizador para a página de produtos
            return $this->redirectToRoute('produtos');
        }
        // Se já houver um carrinho criado na sessão
        else
        {
            // Obtenho-o
            $carrinho = $session->get('carrinho');
            // Verifico se o produto a adicionar já existe no carrinho
            if(array_key_exists($p->getNome(), $carrinho))
            {
                // Incremento a quantidade
                $carrinho[$p->getNome()]['quantidade'] += 1;
                // Atualizo o valor total da encomenda
                round(($carrinho['valor_total'] += $p->getPrecoUnitario()), 2, PHP_ROUND_HALF_UP);
            }
            // Se o carrinho ainda não tiver este produto
            else
            {
                // Crio a estrutura do produto que quero que o carrinho tenha
                $array_produto = array(
                    $p->getNome() => [
                        'quantidade' => 1,
                        'preco_unit' => $p->getPrecoUnitario(),
                        'unidade' => $p->getUnidade()->getNome(),
                    ],
                );
                // Uno o produto ao carrinho
                $carrinho = array_merge($carrinho, $array_produto);
                // Atualizo o valor total do carrinho
                round(($carrinho['valor_total'] += $p->getPrecoUnitario()), 2, PHP_ROUND_HALF_UP);
            }
        }
        // Defino o carrinho na sessão
        $session->set('carrinho', $carrinho);
        // Crio uma mensagem de sucesso para o utilizador que será renderizada através do ficheiro messages.html
        $this->addFlash('success', "Adicionado 1 ".$p->getUnidade()->getNome()." de ".$p->getNome()." ao seu carrinho");
        // Gravo a sessão
        $session->save();
        dd($session, $carrinho);
        // Redireciono o utilizador para a página de produtos
        return $this->redirectToRoute('produtos');
    }

    // Função para remover um produto do carrinho
    #[Route('/carrinho/remove/{id}', name: 'remove_carrinho', methods: ['GET', 'POST'])]
    public function remove_carrinho(Session $session, Produto $produto, EntityManagerInterface $em)
    {
        // Se a sessão não tiver carrinho criado
        if(!$session->has('carrinho'))
        {
            // Informo o utilizador
            $this->addFlash('danger', "Ainda não tem um carrinho criado");
            // Redireciono-o para a página de produtos
            return $this->redirectToRoute('produtos');
        }
        // Obtenho o carrinho da sessão
        $carrinho = $session->get('carrinho');
        // Obtenho o produto da base de dados
        $p = $em->getRepository(Produto::class)->find($produto);
        // Se o produto não existir no carrinho
        if(!array_key_exists($p->getNome(), $carrinho))
        {
            // Notifico o utilizador
            $this->addFlash("danger", "O carrinho não tem ".$p->getNome());
            // Redireciono-o para a página de produtos
            return $this->redirectToRoute('produtos');
        }
        // Se a quantidade deste produto no carrinho for 1
        if($carrinho[$p->getNome()]['quantidade'] == 1)
        {
            // Elimino o produto do carrinho
            unset($carrinho[$p->getNome()]);
            // Notifico o utilizador que ficou sem este produto no carrinho
            $this->addFlash('info', "Ficou sem ".$p->getNome()." no carrinho");
        }
        // Se a quantidade deste produto no carrinho for superior a 1, diminuo 1 à quantidade existente
        elseif($carrinho[$p->getNome()]['quantidade'] > 1)
            $carrinho[$p->getNome()]['quantidade'] -= 1;
        // Atualizo o valor total do carrinho
        round(($carrinho['valor_total'] -= $p->getPrecoUnitario()), 2, PHP_ROUND_HALF_UP);
        // Se o valor total do carrinho estiver a zero
        if($carrinho['valor_total'] == 0)
        {
            // Removo o carrinho da sessão
            $session->remove('carrinho');
            // Notifico o utilizador que o carrinho ficou vazio
            $this->addFlash('info', 'Ficou sem produtos no carrinho');
        }
        // Se o valor total do carrinho for diferente de zero, atualizo o carrinho na sessão
        else
            $session->set('carrinho', $carrinho);
        // Notifico o utilizador que foi diminuída a quantidade de produto no carrinho
        $this->addFlash("success", "Retirado 1 ".$p->getUnidade()->getNome()." de ".$p->getNome()." do carrinho");
        dd($session);
        // Redireciono o utilizador para a página de produtos
        return $this->redirectToRoute('produtos');
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
    public function contactus(Request $request)
    {
        $form = $this->createForm(ContactForm::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $dados = $form->getData();
            $data_contacto = date_parse_from_format('Y/m/d', $dados['data_contacto']);
            dd($dados);
            //$meio = $dados['']
            $mailer = new MailSender($dados);
            dd($data_contacto);
            $mailer->setDataEnvio($dados['data_contacto']);
            $this->addFlash('success', "Formulário válido");
            //return $this->redirectToRoute('sendemail');
        }
        return $this->renderForm('contactus.html', ['form' => $form]);
    }
}
