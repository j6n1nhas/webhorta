<?php

namespace App\Entity;

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
     * @ORM\OneToMany(targetEntity=CarrinhoProduto::class, mappedBy="carrinho")
     */
    private $carrinho_produto;

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

    public function setValorTotal(float $valor_total): self
    {
        $this->valor_total = $valor_total;
        return $this;
    }
}
