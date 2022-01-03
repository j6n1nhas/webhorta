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
use Exception;

class CarrinhoController extends AbstractController
{
    // Função para renderizar o carrinho
    #[Route('/carrinho', name: 'carrinho', methods: 'GET')]
    public function carrinho(Session $session): Response
    {
        // Verifico se existe um carrinho na sessão
        if($session->has('carrinho'))
        {
            $carrinho = $session->get('carrinho');
            //dd($carrinho);
            return $this->render('carrinho.html', ['carrinho' => $carrinho]);
        }
        // Se não houver carrinho criado em sessão, crio uma mensagem para o utilizador que será renderizada através do ficheiro messages.html
        $this->addFlash('warning', "Não existe nenhum carrinho ativo!");
        // Redireciono o utilizador para os produtos
        return $this->redirectToRoute('produtos');
    }


    // Função para adicionar um produto ao carrinho
    #[Route('/carrinho/add/{id}', name: 'add_carrinho', methods: ['POST', 'GET'])]
    public function add_carrinho(Session $session, Produto $p): Response
    {
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
                        'preco_unitario' => $p->getPrecoUnitario(),
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
        // Redireciono o utilizador para a página de produtos
        return $this->redirectToRoute('produtos');
    }


    // Função para remover um produto do carrinho
    #[Route('/carrinho/remove/{id}', name: 'remove_carrinho', methods: ['GET', 'POST'])]
    public function remove_carrinho(Session $session, Produto $p): Response
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
        // Redireciono o utilizador para a página de produtos
        return $this->redirectToRoute('produtos');
    }


    #[Route('/carrinho/gravar', name: 'grava_carrinho')]
    public function grava_carrinho(Session $session, EntityManagerInterface $em): Response
    {
        try
        {
            $carrinho = $session->get('carrinho');
        }
        catch(Exception $e)
        {
            $this->addFlash('danger', $e->getMessage());
            return $this->redirectToRoute('index');
        }
        dump($session);
        return new Response("Gravar carrinho");
    }


    #[Route('/carrinho/cancelar', name: 'cancela_carrinho')]
    public function cancela_carrinho(Session $session, EntityManagerInterface $em): Response
    {
        try
        {
            $carrinho = $session->get('carrinho');
            $session->remove('carrinho');
            $session->save();
            $this->addFlash('success', 'Eliminado carrinho');
            return $this->redirectToRoute('carrinho');
        }
        catch(Exception $e)
        {
            $this->addFlash('danger', $e->getMessage());
            return $this->redirectToRoute('index');
        }
    }
}