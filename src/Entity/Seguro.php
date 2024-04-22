<?php

namespace App\Entity;

use App\Repository\SeguroRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SeguroRepository::class)]
class Seguro
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_seguro = null;

    #[ORM\Column(length: 30)]
    private ?string $descripcion = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdSeguro(): ?int
    {
        return $this->id_seguro;
    }

    public function setIdSeguro(int $id_seguro): static
    {
        $this->id_seguro = $id_seguro;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): static
    {
        $this->descripcion = $descripcion;

        return $this;
    }
}
