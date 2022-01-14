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
use Exception;
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
        //Obtenho todos os produtos
        $produtos = $em->getRepository(Produto::class)->findAll();
        //Obtenho todos os carrinhos ordenados descendentemente pela data de compra
        $carrinhos = $em->createQuery(
            'SELECT c FROM App\Entity\Carrinho c ORDER BY c.data_compra DESC'
        )->getResult();
        //Obtenho todas as unidades
        $unidades = $em->getRepository(Unidade::class)->findAll();
        //Obtenho todos os utilizadores
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
    public function edit_produto(EntityManagerInterface $em, FileUploader $fu, Request $request, int $id): Response
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
    public function delete_produto(EntityManagerInterface $em, $id): Response
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
    public function add_unidade(EntityManagerInterface $em, Request $request): Response
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
    public function edit_unidade(EntityManagerInterface $em, Request $request, int $id): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        try
        {
            //Tento obter a unidade pelo id e se não existir levanto a exceção apropriada
            $unidade = $em->getRepository(Unidade::class)->find($id);
            if(!$unidade)
                throw new EntityNotFoundException('Unidade com id='.$id.' não existe');
        }
        catch(EntityNotFoundException $e)
        {
            //Se a unidade não existir, capto a mensagem passada, informo o administrador e volto à página admin_index
            $this->addFlash('danger', $e->getMessage());
            return $this->redirectToRoute('admin_index');
        }
        //Crio o formulário de edição associando o objeto a este
        $form = $this->createForm(UnidadeForm::class, $unidade);
        //Guardo o nome antigo da unidade
        $old_name = $unidade->getNome();
        //Verifico que request foi feito e se o formulário foi submetido e é válido
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $produtos = $form->getData()->getProdutos();
            foreach($produtos as $produto)
                $unidade->addProduto($produto);
            //Faço as alterações na base de dados
            $em->flush();
            //Informo o administrador da alteração e redireciono para a página admin_index
            $this->addFlash('success', sprintf('Unidade %s alterada com sucesso para %s', $old_name, $unidade->getNome()));
            return $this->redirectToRoute('admin_index');
        }
        //Se o request for um GET, então renderizo o documento unidade.html e passo-lhe o formulário
        return $this->renderForm('unidade.html', ['form' => $form]);
    }

    #[Route('/admin/unidades/delete/{id<\d+>}', name: 'admin_unidade_delete', methods: 'GET')]
    public function delete_unidade(EntityManagerInterface $em, int $id): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        try
        {
            //Tento obter a unidade, se não encontrar levanto uma exceção apropriada
            $unidade = $em->getRepository(Unidade::class)->find($id);
            if(!$unidade)
                throw new EntityNotFoundException('Unidade não encontrada');
            //Tento remover o produto da base de dados
            $em->remove($unidade);
            $em->flush();
            //Em caso de sucesso, informo o administrador e volto à página admin_index
            $this->addFlash('success', 'Unidade '.$unidade->getNome().' apagada');
            return $this->redirectToRoute('admin_index');
        }
        catch(EntityNotFoundException $e)
        {
            $this->addFlash('danger', $e->getMessage());
            return $this->redirectToRoute('admin_index');
        }
        //Se a unidade estiver referenciada em algum produto
        catch(ForeignKeyConstraintViolationException $e)
        {
            //Obtenho os produtos onde ela se encontra
            $produtos = $em->getRepository(Produto::class)->findBy(['unidade' => $unidade]);
            //Crio um array com os seus nomes
            $produtos = array_map(fn($produto) => $produto->getNome(), $produtos);
            //Transformo-o numa string separada por vírgulas
            $produtos = implode(', ', $produtos);
            //Informo o administrador e volto à página admin_index
            $this->addFlash('danger', 'Não é possível apagar '.$unidade->getNome());
            $this->addFlash('danger', sprintf('Encontra-se referenciado nos produtos %s', $produtos));
            return $this->redirectToRoute('admin_index');
        }
    }

    #[Route('/admin/carrinho/{id<\d+>}', name: 'admin_carrinho_edit', methods: ['GET', 'POST'])]
    public function edit_carrinho(EntityManagerInterface $em, Request $request, int $id): Response
    {
        //Nego o acesso a não administradores
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        try
        {
            $referer = $request->server->get('HTTP_REFERER');
            //Tento obter o carrinho e levanto uma exceção apropriada caso não encontre
            $carrinho = $em->getRepository(Carrinho::class)->find($id);
            if(!$carrinho)
                throw new EntityNotFoundException(sprintf("Carrinho com o id %d não existe", $id));
            //Verifico se passei a variável estado no request
            if($request->query->has('estados') && $request->query->get('estados') == true)
            {
                $estados = true;
                //Para que o formulário seja criado com apenas o campo estado
                $form = $this->createForm(
                    CarrinhoForm::class,
                    $carrinho, [
                        'label' => 'Alterar estado',
                        'estados' => true,
                    ],
                );
            }
            //Se a variável estado não tiver sido passada no request crio um formulário com todos os campos
            else
            {
                $estados = false;
                $linhas_carrinho = $em->getRepository(CarrinhoProduto::class)->findBy(['carrinho' => $carrinho]);
                $form = $this->createForm(
                    CarrinhoForm::class,
                    $carrinho, [
                        'label' => 'Alterar',
                        'estados' => false,
                    ],
                );
            }
            //Agarro o request para verificar se é um POST
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid())
            {
                //Se o formulário for submetido e estiver válido, faço as alterações na base de dados
                $em->flush();
                //Informo o administrador e redireciono de novo para a página admin_index
                $this->addFlash('success', 'Carrinho atualizado');
                return $this->redirectToRoute('admin_index');
            }
            if($estados)
                return $this->renderForm('carrinho.html', ['form' => $form]);
            return $this->renderForm('carrinho.html', [
                'carrinho' => $carrinho,
                'referer' => $referer,
                'linhas_carrinho' => $linhas_carrinho,
            ]);
        }
        catch(EntityNotFoundException $e)
        {
            $this->addFlash('danger', $e->getMessage());
            return $this->redirectToRoute('admin_index');
        }
        catch(Exception $e)
        {
            $this->addFlash('danger', $e->getMessage());
            return $this->redirectToRoute('admin_index');
        }
    }

    #[Route('/admin/utilizadores/{id}', name: 'admin_utilizador_edit', methods: ['GET', 'POST'])]
    public function edit_utilizador(EntityManagerInterface $em, Request $request, string $id): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
    }
}