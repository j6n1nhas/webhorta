<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

use App\Entity\User;
use App\Form\SignupForm;

class Controller extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('index.html', ['url' => $_SERVER['REQUEST_URI']]);
    }

    #[Route('/login', name: 'login', methods: ['GET', 'POST'])]
    public function login(Request $request, ManagerRegistry $doctrine, SessionInterface $session): Response
    {
        if($request->getMethod() == 'GET')
            return $this->render('login.html');
        else
        {
            $username = $request->get('_email');
            $password = $request->get('_password');
            $users = $doctrine->getRepository(User::class);
            $users->findBy([
                'email' => $username,
                'password' => $password,
            ]);
            if(!$users)
                return new Response("Não existe esse utilizador");
            else
                return new Response("Utilizador encontrado");
        }
    }
/*
    #[Route('/logout', name: 'logout')]
    public function logout(SessionInterface $session): Response
    {
        $session->get('user');
        $session->remove('user');
        return $this->redirect('index');
    }
*/
    #[Route('/signup', name: 'signup', methods: ['GET', 'POST'])]
    public function signup(
        Request $request,
        ManagerRegistry $doctrine,
        AuthenticationUtils $authenticationUtils,
        UserPasswordHasherInterface $passwordHasher,
        ): Response
    {
        $user = new User();
        $form = $this->createForm(SignupForm::class, $user);
        if($request->getMethod() == 'GET')
            return $this->renderForm('register.html', [
                'url' => $_SERVER['REQUEST_URI'],
                'form' => $form,
            ]);
        else
        {
            $user = new User();
            $username = $request->get('email');
            $password = $request->get('password1');
            $password = $passwordHasher->hashPassword($user, $password);
            $repo = $doctrine->getRepository(User::class);
            $repo->findOneBy([
                'email' => $username,
                'password' => $password,
            ]);
            if(!$repo)
            {
                $nome_proprio = $request->get('nome_proprio');
                $nome_apelido = $request->get('nome_apelido');
                $morada = $request->get('morada');
                $cod_postal = $request->get('cod_postal');
                $user->setPassword($password);
                $user->setEmail($username);
                $user->setNomeProprio($nome_proprio);
                $user->setNomeApelido($nome_apelido);
                $user->setMorada($morada);
                $user->setCodPostal($cod_postal);
                $em = $doctrine->getManager();
                $em->persist($user);
                $em->flush();
                $this->redirect('produtos');
            }
            else
                return new Response("Já existe um utilizador registado com o email ".$username);
        }
    }
}

