<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $price = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $decript = null;

    #[ORM\Column(length: 255)]
    private ?string $urlimg = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getDecript(): ?string
    {
        return $this->decript;
    }

    public function setDecript(string $decript): static
    {
        $this->decript = $decript;

        return $this;
    }

    public function getUrlimg(): ?string
    {
        return $this->urlimg;
    }

    public function setUrlimg(string $urlimg): static
    {
        $this->urlimg = $urlimg;

        return $this;
    }
}
