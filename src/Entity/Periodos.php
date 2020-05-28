<?php

namespace App\Entity;

use App\Repository\PeriodosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PeriodosRepository::class)
 */
class Periodos
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $descripcion;

    /**
     * @ORM\Column(type="integer")
     */
    private $montoBase;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getMontoBase(): ?int
    {
        return $this->montoBase;
    }

    public function setMontoBase(int $montoBase): self
    {
        $this->montoBase = $montoBase;

        return $this;
    }
}
