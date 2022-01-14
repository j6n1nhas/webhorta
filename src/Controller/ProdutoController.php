<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Produto;

class ProdutoController extends AbstractController
{
    #[Route('/produtos', name: 'produtos', methods: 'GET')]
    public function index(EntityManagerInterface $em): Response
    {
        // Obtenho todos os produtos da base de dados
        $produtos = $em->getRepository(Produto::class)->findAll();
        // Renderizo o documento produtos.html passando os produtos obtidos na variável $produtos
        return $this->render('produtos.html', [
            'produtos' => $produtos,
        ]);
    }
}
