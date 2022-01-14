<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\CarrinhoRepository")
 * @ORM\Table(name="carrinho")
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

    /**
     * @ORM\Column(type="string", length=20, nullable=false)
     */
    private $estado;

    public function __construct()
    {
        $this->carrinho_produto = new ArrayCollection();
        $this->setEstado('Recebido');
    }

    public function getCarrinhoProduto()
    {
        return $this->carrinho_produto;
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

    public function setValorTotal(float $valor_total): self
    {
        $this->valor_total = $valor_total;
        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(?string $estado): self
    {
        //A ideia é começar com Recebido e apenas aceitar um destes estados
        $possible_estados = array(
            'Recebido', //Default
            'Aprovado', //Quando o administrador aceita o pedido
            'Pendente', //Quando o pedido está para distribuição
            'Entregue', //Quando o pedido está entregue
            'Cancelado',
        );
        in_array($estado, $possible_estados) ? $this->estado = $estado : $this->estado = null;
        return $this;
    }
}
