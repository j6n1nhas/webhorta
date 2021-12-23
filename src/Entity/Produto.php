<?php

namespace App\Entity;

use App\Repository\ProdutoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProdutoRepository::class)
 */
class Produto
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $nome;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $descricao;

    /**
     * @ORM\Column(type="float")
     */
    private $preco_unitario;

    /**
     * @ORM\Column(type="float")
     */
    private $stock;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $foto;

    /**
     * @ORM\ManyToOne(targetEntity=Unidade::class, inversedBy="produtos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $unidade;

    /**
     * @ORM\ManyToMany(targetEntity=Carrinho::class, mappedBy="produtos")
     */
    private $carrinhos;

    public function __construct()
    {
        $this->carrinhos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;
        return $this;
    }

    public function getDescricao(): ?string
    {
        return $this->descricao;
    }

    public function setDescricao(?string $descricao): self
    {
        $this->descricao = $descricao;
        return $this;
    }

    public function getPrecoUnitario(): ?float
    {
        return $this->preco_unitario;
    }

    public function setPrecoUnitario(float $preco_unitario): self
    {
        $this->preco_unitario = $preco_unitario;
        return $this;
    }

    public function getStock(): ?float
    {
        return $this->stock;
    }

    public function setStock(float $stock): self
    {
        $this->stock = $stock;
        return $this;
    }

    public function getFoto(): ?string
    {
        return $this->foto;
    }

    public function setFoto(?string $foto): self
    {
        $this->foto = $foto;
        return $this;
    }

    public function getUnidade(): ?Unidade
    {
        return $this->unidade;
    }

    public function setUnidade(?Unidade $unidade): self
    {
        $this->unidade = $unidade;
        return $this;
    }

    /**
     * @return Collection|Carrinho[]
     */
    public function getCarrinhos(): Collection
    {
        return $this->carrinhos;
    }

    public function addCarrinho(Carrinho $carrinho): self
    {
        if (!$this->carrinhos->contains($carrinho)) {
            $this->carrinhos[] = $carrinho;
            $carrinho->addProduto($this);
        }
        return $this;
    }

    public function removeCarrinho(Carrinho $carrinho): self
    {
        if ($this->carrinhos->removeElement($carrinho)) {
            $carrinho->removeProduto($this);
        }
        return $this;
    }
}
