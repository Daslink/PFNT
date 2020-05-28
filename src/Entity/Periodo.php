<?php

namespace App\Entity;

use App\Repository\PeriodoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PeriodoRepository::class)
 */
class Periodo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
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
