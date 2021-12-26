<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Produto;
use App\Entity\Unidade;
use App\Form\ProdutoForm;

use App\Service\FileUploader;

class ProdutoController extends AbstractController
{
    #[Route('/produtos', name: 'produtos')]
    public function index(EntityManagerInterface $em): Response
    {
        // Obtenho todos os produtos da base de dados
        $produtos = $em->getRepository(Produto::class)->findAll();
        // Renderizo o documento produtos.html passando os produtos obtidos na variável $produtos
        return $this->render('produtos.html', [
            'produtos' => $produtos,
            'url' => $_SERVER['REQUEST_URI'],
        ]);
    }

    #[Route('/produto/add', name: 'add_produto')]
    public function add_produto(EntityManagerInterface $em, Request $request, FileUploader $fileUploader): Response
    {
        // Crio um novo produto
        $produto = new Produto();
        // Crio um formulário de produto e associo-o ao objeto produto
        $form = $this->createForm(ProdutoForm::class, $produto);
        // Obtenho o request
        $form->handleRequest($request);
        // Se o formulário for submetido e válido
        if($form->isSubmitted() && $form->isValid())
        {
            // Obtenho o ficheiro do formulário
            $file = $form->get('foto')->getData();
            // Populizo o produto com os dados do formulário
            $produto = $form->getData();
            // Se tiver sido carregado um ficheiro
            if($file)
            {
                // Chamo o método de upload para gravar o ficheiro no sistema de ficheiros
                $filename = $fileUploader->upload($file, $produto->getNome());
                // Defino o campo foto do produto com a foto que foi carregada
                $produto->setFoto($filename);
            }
            // Gravo o produto na base de dados
            $em->persist($produto);
            $em->flush();
            // Redireciono para a página de produtos
            return $this->redirectToRoute('produtos');
        }
        // Se o request for um GET ou o formulário não estiver válido, renderizo o documento produto.html e passo-lhe o formulário
        return $this->renderForm('produto.html', ['form' => $form]);
    }
}
