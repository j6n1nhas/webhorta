<?php
namespace App\Controller;

use App\Entity\Carrinho;
use App\Entity\Produto;
use App\Entity\Unidade;
use App\Entity\User;
use App\Entity\CarrinhoProduto;

use App\Form\CarrinhoForm;
use App\Form\ProdutoForm;
use App\Form\UnidadeForm;
use App\Service\FileUploader;
use Doctrine\DBAL\Exception\ForeignKeyConstraintViolationException;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityNotFoundException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'admin_index')]
    public function admin_index(EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $produtos = $em->getRepository(Produto::class)->findAll();
        $carrinhos = $em->getRepository(Carrinho::class)->findAll();
        $unidades = $em->getRepository(Unidade::class)->findAll();
        $utilizadores = $em->getRepository(User::class)->findAll();
        return $this->render('admin_index.html', [
            'produtos'=> $produtos,
            'carrinhos' => $carrinhos,
            'unidades' => $unidades,
            'utilizadores' => $utilizadores,
        ]);
    }

    #[Route('/admin/produtos/add', name: 'admin_produto_add', methods: ['GET', 'POST'])]
    public function add_produto(EntityManagerInterface $em, Request $request, FileUploader $fileUploader): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
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
            $unidade = $produto->getUnidade();
            $unidade->addProduto($produto);
            $em->flush();
            // Redireciono para a página de produtos
            $this->addFlash('success', 'Adicionado produto '.$produto->getNome().' com sucesso');
            return $this->redirectToRoute('admin_index');
        }
        // Se o request for um GET ou o formulário não estiver válido, renderizo o documento produto.html e passo-lhe o formulário
        return $this->renderForm('produto.html', ['form' => $form]);
    }


    #[Route('/admin/produtos/{id<\d+>}', name: 'admin_produto_edit', methods: ['GET', 'POST'])]
    public function edit_produto(EntityManagerInterface $em, FileUploader $fu, Request $request, int $id)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        try
        {
            $produto = $em->getRepository(Produto::class)->find($id);
            if($produto === null)
                throw $this->createNotFoundException('Produto com id='.$id.' não existe');
        }
        catch(EntityNotFoundException $e)
        {
            $this->addFlash('danger', $e->getMessage());
            return $this->redirectToRoute('admin_index');
        }
        $form = $this->createForm(ProdutoForm::class, $produto);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $foto = $form->get('foto')->getData();
            $produto = $form->getData();
            if($foto)
            {
                $filename = $fu->upload($foto, $produto->getNome());
                $produto->setFoto($filename);
            }
            $em->flush();
            $this->addFlash('success', 'Produto '.$produto->getNome().' alterado com sucesso');
            return $this->redirectToRoute('admin_index');
        }
        return $this->renderForm('produto.html', ['form' => $form]);
    }

    #[Route('/admin/produtos/delete/{id<\d+>}', name: 'admin_produto_delete', methods: 'GET')]
    public function delete_produto(EntityManagerInterface $em, $id)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        try
        {
            //Tento obter o produto, se não encontrar levanto uma exceção apropriada
            $produto = $em->getRepository(Produto::class)->find($id);
            if(!$produto)
                throw new EntityNotFoundException('Produto não encontrado');
            //Tento remover o produto da base de dados
            $em->remove($produto);
            $em->flush();
            //Em caso de sucesso, informo o administrador e volto à página admin_index
            $this->addFlash('success', 'Produto '.$produto->getNome().' apagado');
            return $this->redirectToRoute('admin_index');
        }
        catch(EntityNotFoundException $e)
        {
            $this->addFlash('danger', $e->getMessage());
            return $this->redirectToRoute('admin_index');
        }
        //Se o produto estiver referenciado noutras relações
        catch(ForeignKeyConstraintViolationException $e)
        {
            //Obtenho as linhas dos carrinhos onde ele se encontra
            $carrinhos = $em->getRepository(CarrinhoProduto::class)->findBy(['produto' => $produto]);
            //Crio um array com os ids dos carrinhos em que se o produto se encontra
            $c = array_map(fn($carrinho):int => $carrinho->getCarrinho()->getId(), $carrinhos);
            //Transformo numa string
            $carrinhos = (string)implode(', ', $c);
            //Apresento a informação ao administrador e volto à página admin_index
            $this->addFlash('danger', 'Não é possível apagar '.$produto->getNome());
            $this->addFlash('danger', 'Encontra-se referenciado nos carrinhos '.$carrinhos);
            return $this->redirectToRoute('admin_index');
        }
    }

    #[Route('/admin/unidades/add', name: 'admin_unidade_add', methods: ['GET', 'POST'])]
    public function add_unidade(EntityManagerInterface $em, Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $unidade = new Unidade();
        $form = $this->createForm(UnidadeForm::class, $unidade);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $unidade = $form->getData();
            $em->persist($unidade);
            $em->flush();
            $this->addFlash('success', 'Unidade '.$unidade->getNome().' criada com sucesso');
            return $this->redirectToRoute('admin_index');
        }
        return $this->renderForm('unidade.html', ['form' => $form]);
    }

    #[Route('/admin/unidades/{id<\d+>}', name: 'admin_unidade_edit', methods: ['GET', 'POST'])]
    public function edit_unidade(EntityManagerInterface $em, Request $request, int $id)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        try
        {
            $unidade = $em->getRepository(Unidade::class)->find($id);
            if(!$unidade)
                throw new EntityNotFoundException('Unidade com id='.$id.' não existe');
        }
        catch(EntityNotFoundException $e)
        {
            $this->addFlash('danger', $e->getMessage());
            return $this->redirectToRoute('admin_index');
        }
        $form = $this->createForm(UnidadeForm::class, $unidade);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $unidade = $form->getData();
            $em->persist($unidade);
            $em->flush();
            $this->addFlash('success', 'Unidade '.$unidade->getNome().' alterada com sucesso');
            return $this->redirectToRoute('admin_index');
        }
        return $this->renderForm('unidade.html', ['form' => $form]);
    }

    #[Route('/admin/carrinho/{id<\d+>}', name: 'admin_carrinho_edit', methods: ['GET', 'POST'])]
    public function edit_carrinho(EntityManagerInterface $em, Request $request, int $id)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        try
        {
            $carrinho = $em->getRepository(Carrinho::class)->find($id);
            if(!$carrinho)
                throw new EntityNotFoundException('Carrinho com o id='.$id.' não existe');
            $form = $this->createForm(CarrinhoForm::class, $carrinho);
            $referer = $request->server->get('HTTP_REFERER');
            if($form->isSubmitted() && $form->isValid())
            {
                $carrinho = $form->getData();
                $em->flush();
                $this->addFlash('success', 'Carrinho atualizado');
                return $this->redirectToRoute('admin_index');
            }
            return $this->renderForm('carrinho.html', [
                'form' => $form,
            ]);
        }
        catch(EntityNotFoundException $e)
        {
            $this->addFlash('danger', $e->getMessage());
            return $this->redirectToRoute('admin_index');
        }

    }

    #[Route('/admin/utilizadores/{id}', name: 'admin_utilizador_edit', methods: ['GET', 'POST'])]
    public function edit_utilizador(EntityManagerInterface $em, Request $request, string $id)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
    }
}