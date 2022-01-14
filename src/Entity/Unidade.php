<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\UnidadeRepository")
 */
class Unidade
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
     * @ORM\OneToMany(targetEntity=Produto::class, mappedBy="unidade")
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

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;
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
        if(!$this->produtos->contains($produto))
        {
            $this->produtos[] = $produto;
            $produto->setUnidade($this);
        }
        return $this;
    }

    public function removeProduto(Produto $produto): self
    {
        if($this->produtos->removeElement($produto))
        {
            // set the owning side to null (unless already changed)
            if($produto->getUnidade() === $this)
                $produto->setUnidade(null);
        }
        return $this;
    }
}
