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

class UserController extends AbstractController
{
    #[Route('/dashboard/{user}', name: 'dashboard', methods: 'GET')]
    public function dashboard($user)
    {
        $utilizador = $this->getUser()->getNomeProprio();
        return new Response($utilizador);
    }
}