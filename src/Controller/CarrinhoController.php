<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\User;
use App\Entity\Produto;
use App\Entity\Carrinho;
use App\Entity\CarrinhoProduto;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityNotFoundException;

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
            return $this->render('carrinho.html', ['carrinho' => $carrinho]);
        }
        // Se não houver carrinho criado em sessão, crio uma mensagem para o utilizador que será renderizada através do ficheiro messages.html
        $this->addFlash('warning', "Não existe nenhum carrinho ativo!");
        // Redireciono o utilizador para os produtos
        return $this->redirectToRoute('produtos');
    }


    // Função para adicionar um produto ao carrinho
    #[Route('/carrinho/add/{id}', name: 'add_carrinho', methods: ['POST', 'GET'])]
    public function add_carrinho(Session $session, EntityManagerInterface $em, int $id): Response
    {
        try
        {
            $p = $em->getRepository(Produto::class)->find($id);
            if(!$p)
                throw new EntityNotFoundException('Produto não existe');
        }
        catch(EntityNotFoundException $e)
        {
            $this->addFlash('danger', $e->getMessage());
            return $this->redirectToRoute('produtos');
        }
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
        }
        // Se já houver um carrinho criado na sessão
        else
        {
            // Obtenho-o
            $carrinho = $session->get('carrinho');
            // Verifico se o produto a adicionar já existe no carrinho
            if(array_key_exists($p->getNome(), $carrinho))
            {
                //Se o utilizador quiser mais do que o stock, notificar o utilizador e voltar para produtos
                if($p->getStock() == $carrinho[$p->getNome()]['quantidade'])
                {
                    $this->addFlash('info', sprintf("O nosso stock de %s é %d, não podemos fornecer-lhe mais", $p->getNome(), $p->getStock()));
                    return $this->redirectToRoute('produtos');
                }
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
        $this->addFlash('success', sprintf("Adicionado 1 %s de %s ao seu carrinho", $p->getUnidade()->getNome(), $p->getNome()));
        // Gravo a sessão
        $session->save();
        // Redireciono o utilizador para a página de produtos
        return $this->redirectToRoute('produtos');
    }


    // Função para remover um produto do carrinho
    #[Route('/carrinho/remove/{id}', name: 'remove_carrinho', methods: ['GET', 'POST'])]
    public function remove_carrinho(Session $session, EntityManagerInterface $em, int $id): Response
    {
        try
        {
            $p = $em->getRepository(Produto::class)->find($id);
            if(!$p)
                throw new EntityNotFoundException('Produto não existe');
        }
        catch(EntityNotFoundException $e)
        {
            $this->addFlash('danger', $e->getMessage());
            return $this->redirectToRoute('produtos');
        }
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
            $this->addFlash("danger", sprintf("O carrinho não tem %s", $p->getNome()));
            // Redireciono-o para a página de produtos
            return $this->redirectToRoute('produtos');
        }
        // Se a quantidade deste produto no carrinho for 1
        if($carrinho[$p->getNome()]['quantidade'] == 1)
        {
            // Elimino o produto do carrinho
            unset($carrinho[$p->getNome()]);
            // Notifico o utilizador que ficou sem este produto no carrinho
            $this->addFlash('info', sprintf("Ficou sem %s no carrinho", $p->getNome()));
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
        $session->save();
        // Notifico o utilizador que foi diminuída a quantidade de produto no carrinho
        $this->addFlash("success", sprintf("Retirado 1 %s de %s do carrinho", $p->getUnidade()->getNome(), $p->getNome()));
        // Redireciono o utilizador para a página de produtos
        return $this->redirectToRoute('produtos');
    }


    //Função para gravar o carrinho na base de dados
    #[Route('/carrinho/gravar', name: 'grava_carrinho')]
    public function grava_carrinho(Session $session, EntityManagerInterface $em): Response
    {
        try
        {
            //Obtenho o carrinho na sessão
            $carrinho = $session->get('carrinho');
            //Descubro qual é o utilizador
            $user = $em->getRepository(User::class)->find($carrinho['user_id']);
            //Crio um novo objeto Carrinho
            $new_carrinho = new Carrinho();
            //Defino a data de compra do carrinho a partir da data no carrinho da sessão
            $new_carrinho->setDataCompra(date_create_from_format("Y/m/d", $carrinho['data_compra']));
            //Defino o utilizador dono do carrinho na sessão
            $new_carrinho->setUser($user);
            //Defino o valor total a partir do carrinho na sessão
            $new_carrinho->setValorTotal($carrinho['valor_total']);
            //Percorro o carrinho à procura de arrays(produtos)
            foreach($carrinho as $key => $value)
            {
                //Por cada produto no carrinho
                if(is_array($value))
                {
                    //Crio uma linha de carrinho
                    $cp = new CarrinhoProduto();
                    //Obtenho o produto da base de dados
                    $produto = $em->getRepository(Produto::class)->findOneBy(['nome' => $key]);
                    //Se a quantidade no carrinho for superior ao stock do produto
                    if($produto->getStock() < $value['quantidade'])
                    {
                        //Obtenho a diferença entre a quantidade no carrinho e o stock do produto
                        $diferenca_qtd = $value['quantidade'] - $produto->getStock();
                        //Mudo a quantidade no carrinho para o stock do produto
                        $value['quantidade'] = $produto->getStock();
                        //Calculo o valor da diferença
                        $diferenca_valor = round(($value['preco_unitario'] * $diferenca_qtd), PHP_ROUND_HALF_UP);
                        //E atualizo o valor total do carrinho diminuindo a diferença de valor
                        $new_carrinho->setValorTotal(round($carrinho['valor_total'] - $diferenca_valor), PHP_ROUND_HALF_UP);
                        //Informo o utilizador de que a quantidade foi alterada no carrinho
                        $this->addFlash('warning', sprintf('Tinha %d %ss de %s no seu carrinho mas de momento só podemos entregar-lhe %d', $value['quantidade']+$diferenca_qtd, $produto->getUnidade()->getNome(), $produto->getNome(), $produto->getStock()));
                    }
                    //Defino os atributos da linha do carrinho
                    $cp->setQuantidade($value['quantidade']);
                    $cp->setPrecoUnitario($value['preco_unitario']);
                    $cp->setProduto($produto);
                    $cp->setCarrinho($new_carrinho);
                    //Abato o stock ao produto
                    $produto->setStock($produto->getStock()-$value['quantidade']);
                    //Dou ordem para persistir na base de dados a linha do carrinho
                    $em->persist($cp);
                }
            }
            //Dou ordem para persistir o carrinho na base de dados
            $em->persist($new_carrinho);
            //Gravo todas as alterações na base de dados
            $em->flush();
            //Removo o carrinho da sessão e gravo-a
            $session->remove('carrinho');
            $session->save();
            //Informo o utilizador e redireciono-o para a dashboard
            $this->addFlash('success', 'Encomenda realizada!');
            return $this->redirectToRoute('dashboard');
        }
        catch(Exception $e)
        {
            $this->addFlash('danger', $e->getMessage());
            return $this->redirectToRoute('index');
        }
    }


    //Função para cancelar o carrinho atual
    #[Route('/carrinho/cancelar', name: 'cancela_carrinho')]
    public function cancela_carrinho(Session $session): Response
    {
        try
        {
            //Removo o carrinho da sessão e gravo-a
            $session->remove('carrinho');
            $session->save();
            //Informo o utilizador que o carrinho foi eliminado e redireciono-o para produtos
            $this->addFlash('success', 'Eliminado carrinho');
            return $this->redirectToRoute('produtos');
        }
        catch(Exception $e)
        {
            $this->addFlash('danger', $e->getMessage());
            return $this->redirectToRoute('index');
        }
    }
}