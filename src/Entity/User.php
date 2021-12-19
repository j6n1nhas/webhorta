<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $nome_proprio;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $nome_apelido;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $morada;

    /**
     * @ORM\Column(type="string", length=8, nullable=true)
     */
    private $cod_postal;

    /**
     * @ORM\OneToMany(targetEntity=Carrinho::class, mappedBy="user")
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getNomeProprio(): ?string
    {
        return $this->nome_proprio;
    }

    public function setNomeProprio(string $nome_proprio): self
    {
        $this->nome_proprio = $nome_proprio;

        return $this;
    }

    public function getNomeApelido(): ?string
    {
        return $this->nome_apelido;
    }

    public function setNomeApelido(string $nome_apelido): self
    {
        $this->nome_apelido = $nome_apelido;

        return $this;
    }

    public function getMorada(): ?string
    {
        return $this->morada;
    }

    public function setMorada(?string $morada): self
    {
        $this->morada = $morada;

        return $this;
    }

    public function getCodPostal(): ?string
    {
        return $this->cod_postal;
    }

    public function setCodPostal(?string $cod_postal): self
    {
        $this->cod_postal = $cod_postal;

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
            $carrinho->setUser($this);
        }

        return $this;
    }

    public function removeCarrinho(Carrinho $carrinho): self
    {
        if ($this->carrinhos->removeElement($carrinho)) {
            // set the owning side to null (unless already changed)
            if ($carrinho->getUser() === $this) {
                $carrinho->setUser(null);
            }
        }

        return $this;
    }
}
