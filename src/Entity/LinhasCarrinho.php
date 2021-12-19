<?php

namespace App\Entity;

use App\Repository\LinhasCarrinhoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LinhasCarrinhoRepository::class)
 */
class LinhasCarrinho
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }
}
