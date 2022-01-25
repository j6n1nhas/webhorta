<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Carrinho;
use App\Entity\CarrinhoProduto;

use App\Form\SignupForm;
use Doctrine\ORM\EntityNotFoundException;
use Exception;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\Exception\UserNotFoundException;

class UserController extends AbstractController
{
    #[Route('/dashboard', name: 'dashboard', methods: ['GET', 'POST'])]
    public function dashboard(
        Request $request,
        EntityManagerInterface $em,
        UserPasswordHasherInterface $passwordHasher,
    ): Response
    {
        try
        {
            //Negar o acesso a utilizadores não autenticados
            $this->denyAccessUnlessGranted('ROLE_USER');
            //Obtenho o id do utilizador atual para filtrar os carrinhos dele
            $user_id = $this->getUser()->getId();
            //Obtenho o utilizador atual
            $utilizador = $this->getUser();
            //Crio um formulário com o utilizador atual associado
            $form = $this->createForm(SignupForm::class, $utilizador, ['registar' => false,]);
            //Faço uma query para obter os carrinhos deste utilizador e atribuo à variável carrinhos
            $carrinhos = $em->createQuery('SELECT c FROM App\Entity\Carrinho c WHERE c.user = ?1 ORDER BY c.data_compra DESC');
            $carrinhos->setParameter(1, $user_id);
            $carrinhos = $carrinhos->getResult();
            //Submeto o formulário e verifico se é válido
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid())
            {
                //Descarrego os dados do formulário para o utilizador
                $utilizador = $form->getData();
                //Se a password tiver sido alterada, corro o algoritmo de hash
                if(isset($form['password']) && !empty($form['password']))
                    $utilizador->setPassword($passwordHasher->hashPassword($utilizador, $form['password']->getData()));
                //Gravo as alterações na base de dados
                $em->flush();
                //Notifico o utilizador e redireciono-o para a dashboard
                $this->addFlash('success', 'Registo atualizado com sucesso');
                return $this->redirectToRoute('dashboard', ['user' => $utilizador->getNomeProprio()."-".$utilizador->getNomeApelido()]);
            }
            //Se o utilizador não existir, levanto uma exceção apropriada
            if(!$utilizador)
                throw new UserNotFoundException('Utilizador não registado');
            //Renderizo a página, com o formulário e as variáveis
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
        }
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