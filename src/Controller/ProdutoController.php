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
        // Obtenho todos os produtos com stock da base de dados
        $produtos = $em->createQuery('SELECT p FROM App\Entity\Produto p WHERE p.stock>0')->getResult();
        // Renderizo o documento produtos.html passando os produtos obtidos na variável $produtos
        return $this->render('produtos.html', [
            'produtos' => $produtos,
        ]);
    }
}
