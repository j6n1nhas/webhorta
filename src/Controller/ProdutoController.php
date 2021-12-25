<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

use App\Entity\Produto;
use App\Entity\Unidade;


class ProdutoController extends AbstractController
{
    #[Route('/produtos', name: 'produtos')]
    public function index(ManagerRegistry $doctrine): Response
    {
        // Obtenho todos os produtos da base de dados
        $produtos = $doctrine->getRepository(Produto::class)->findAll();
        // Renderizo o documento produtos.html passando os produtos obtidos na variável $produtos
        return $this->render('produtos.html', [
            'produtos' => $produtos,
            'url' => $_SERVER['REQUEST_URI'],
        ]);
    }

    #[Route('/produto', name: 'criar_produto')]
    public function criar_produto(ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();  # em = Entity Manager
        $unidade = $doctrine->getRepository(Unidade::class)->find(1);
        $produto = new Produto();
        $produto->setNome('Batata');
        $produto->setPrecoUnitario(0.59);
        $produto->setStock(170.0);
        $produto->setDescricao("Batata nova");
        $produto->setFoto('');
        $produto->setUnidade($unidade);
        $em->persist($produto);
        $em->flush();
        return new Response("Criado objeto ".$produto->getNome());
    }
}
