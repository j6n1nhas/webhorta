<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

use App\Entity\User;
use App\Entity\Produto;
use App\Entity\Carrinho;
use App\Entity\CarrinhoProduto;

use App\Form\SignupForm;
use App\Repository\CarrinhoRepository;
use Doctrine\ORM\EntityNotFoundException;
use Doctrine\Persistence\ManagerRegistry;
use Exception;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\Exception\UserNotFoundException;

class UserController extends AbstractController
{
    #[Route('/dashboard', name: 'dashboard', methods: 'GET')]
    public function dashboard(
        Request $request,
        EntityManagerInterface $em,
        UserPasswordHasherInterface $passwordHasher,
    ): Response
    {
        // TODO: FAZER A LÓGICA PARA A ALTERAÇÃO DE CAMPOS DO UTILIZADOR
        try
        {
            $this->denyAccessUnlessGranted('ROLE_USER');
            $user_id = $this->getUser()->getId();
            $utilizador = $this->getUser();
            $form = $this->createForm(SignupForm::class, $utilizador);
            $carrinhos = $em->getRepository(Carrinho::class)->findBy(['user' => $user_id]);
            /*
            if($request->isMethod('POST'))
            {
                foreach($form->getData() as $field => $data)
                {
                    dd($form);
                    if($field->isDisabled() || $data === null)
                        $form->remove($field);
                    else
                        $field->setData($data);
                }
                $form->submit($request->request->all(), false);
                $em->flush();
                $this->addFlash('success', 'Registo alterado com sucesso');
                return $this->redirectToRoute('dashboard', ['user' => $utilizador->getNomeProprio()."-".$utilizador->getNomeApelido()]);
            }
            */
            /*
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid())
            {
                $utilizador = $form->getData();
                if($utilizador->getPassword() !== null)
                    $utilizador->setPassword($passwordHasher->hashPassword($utilizador, $utilizador->getPassword()));
                $em->flush();
                $this->addFlash('success', 'Registo atualizado com sucesso');
                return $this->redirectToRoute('dashboard', ['user' => $utilizador->getNomeProprio()."-".$utilizador->getNomeApelido()]);
            }*/
            if(!$utilizador)
                throw new UserNotFoundException('Utilizador não registado');
            return $this->renderForm('dashboard.html', [
                'utilizador' => $utilizador,
                'form' => $form,
                'carrinhos' => $carrinhos,
            ]);
        }
        catch(UserNotFoundException $e)
        {
            $this->addFlash('danger', $e->getMessage());
            return $this->redirectToRoute('produtos');
        }/*
        catch(Exception $e)
        {
            $this->addFlash('warning', $e->getMessage());
            return $this->redirectToRoute('index');
        }*/
    }

    #[Route('/dashboard/carrinho/{id}', name: 'show_sell', methods: 'GET')]
    public function show_sell(EntityManagerInterface $em, Request $request, int $id): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        try
        {
            $carrinho = $em->getRepository(Carrinho::class)->find($id);
            $linhas_carrinho = $em->getRepository(CarrinhoProduto::class)->findBy(['carrinho' => $id]);
            if($carrinho === null || $linhas_carrinho === null)
                throw new EntityNotFoundException('Carrinho não encontrado');
        }
        catch(EntityNotFoundException $e)
        {
            $this->addFlash('danger', $e->getMessage());
            return $this->redirectToRoute('dashboard');
        }
        return $this->render('carrinho.html', [
            'carrinho' => $carrinho,
            'linhas_carrinho' => $linhas_carrinho,
            'referer' => $request->server->get('HTTP_REFERER'),
        ]);
    }
}