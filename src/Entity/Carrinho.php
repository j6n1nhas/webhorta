<?php

namespace App\Entity;

use App\Repository\CarrinhoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CarrinhoRepository::class)
 */
class Carrinho
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $data_compra;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="carrinhos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="float")
     */
    private $valor_total;

    /**
     * @ORM\ManyToMany(targetEntity=Produto::class, inversedBy="carrinhos")
     * @JoinTable(name="carrinho_produto",
     *      joinColumns={@JoinColumn(name="produto_id", referecedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="carrinho_id", referencedColunmName="id")}
     * )
     */
    private $produtos;

    public function __construct()
    {
        $this->produtos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDataCompra(): ?\DateTimeInterface
    {
        return $this->data_compra;
    }

    public function setDataCompra(\DateTimeInterface $data_compra): self
    {
        $this->data_compra = $data_compra;
        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function getValorTotal(): ?float
    {
        return $this->valor_total;
    }

    /*
    public function setValorTotal(float $valor_total): self
    {
        $this->valor_total = $valor_total;
        return $this;
    }
    */
    public function setValorTotal(): self
    {
        $vt = 0.0;
        foreach($this->getProdutos() as $produto)
            $vt += $produto->getPrecoUnitario();
        $this->valor_total = $vt;
        return $this;
    }

    /**
     * @return Collection|Produto[]
     */
    public function getProdutos(): Collection
    {
        return $this->produtos;
    }

    public function addProduto(Produto $produto): self
    {
        if (!$this->produtos->contains($produto))
            $this->produtos[] = $produto;
        return $this;
    }

    public function removeProduto(Produto $produto): self
    {
        $this->produtos->removeElement($produto);
        return $this;
    }
}
