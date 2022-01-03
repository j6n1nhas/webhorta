<?php

namespace App\Entity;

use App\Repository\CarrinhoProdutoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CarrinhoProdutoRepository::class)
 */
class CarrinhoProduto
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantidade;

    /**
     * @ORM\ManyToOne(targetEntity=Carrinho::class, inversedBy="carrinho_produto")
     * @ORM\JoinColumn(nullable=false)
     */
    private $carrinho;

    /**
     * @ORM\ManyToOne(targetEntity=Produto::class, inversedBy="produto_carrinho")
     * @ORM\JoinColumn(nullable=false)
     */
    private $produto;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantidade(): ?int
    {
        return $this->quantidade;
    }

    public function setQuantidade(int $quantidade): self
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCarrinho()
    {
        return $this->carrinho;
    }

    /**
     * @param mixed $carrinho
     */
    public function setCarrinho($carrinho): void
    {
        $this->carrinho = $carrinho;
    }

    /**
     * @return mixed
     */
    public function getProduto()
    {
        return $this->produto;
    }

    /**
     * @param mixed $produto
     */
    public function setProduto($produto): void
    {
        $this->produto = $produto;
    }
}
