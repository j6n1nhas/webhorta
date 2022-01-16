<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CarrinhoProdutoRepository")
 * @ORM\Table(name="carrinho_produto")
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
     * @ORM\ManyToOne(targetEntity="Carrinho", inversedBy="carrinho_produto")
     * @ORM\JoinColumn(nullable=false)
     */
    private $carrinho;

    /**
     * @ORM\ManyToOne(targetEntity="Produto")
     * @ORM\JoinColumn(nullable=false)
     */
    private $produto;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $preco_unitario;

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
    public function getCarrinho(): ?Carrinho
    {
        return $this->carrinho;
    }

    /**
     * @param mixed $carrinho
     */
    public function setCarrinho(?Carrinho $carrinho): self
    {
        $this->carrinho = $carrinho;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProduto(): ?Produto
    {
        return $this->produto;
    }

    /**
     * @param mixed $produto
     */
    public function setProduto(?Produto $produto): self
    {
        $this->produto = $produto;
        return $this;
    }

    public function getPrecoUnitario(): ?float
    {
        return $this->preco_unitario;
    }

    public function setPrecoUnitario(?float $preco_unitario): self
    {
        $this->preco_unitario = $preco_unitario;
        return $this;
    }
}
