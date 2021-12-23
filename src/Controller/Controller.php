<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

use App\Entity\User;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

use App\Form\SignupForm;

class Controller extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        $utilizador = $em->getRepository(User::class)->find($user);
        if($utilizador)
        {
            if($utilizador->getId() == 1)
            {
                $utilizador->setRoles(['ROLE_ADMIN']);
                $em->persist($utilizador);
                $em->flush();
            }
        }
        return $this->render('index.html', ['url' => $_SERVER['REQUEST_URI']]);
    }

    #[Route('/login', name: 'login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        if($error)
            $this->addFlash('danger', $error->getMessageKey());
        $lastUsername = $authenticationUtils->getLastUsername();
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
}

