<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

use App\Controller\Controller;

class MailerController extends AbstractController
{
    #[Route('/contact-us/send-email', name: 'sendemail', methods: ['GET', 'POST'])]
    public function sendEmail(Request $request, MailerInterface $mailer)
    {
        if($request->getMethod() == 'POST')
        {
            $dados = $request;
            $email = (new Email())
                ->from('jp_ramos_jr@sapo.pt')
                ->to('jp.ramos.jr.78@gmail.com')
                ->subject('Teste')
                ->text('Este é um e-mail de teste')
                ->html('<p>Uma linha em formato <em>HTML</em></p>');
            $mailer->send($email);
            $this->addFlash('success', 'Enviado e-mail com sucesso');
            return $this->redirectToRoute('index');
        }
        else
            return $this->render('contactus.html');
    }
}