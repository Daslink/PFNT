<?php

namespace App\Entity;

use App\Repository\OrdenRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrdenRepository::class)
 */
class Orden
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $idEmpleado;

    /**
     * @ORM\Column(type="integer")
     */
    private $idProducto;

    /**
     * @ORM\Column(type="integer")
     */
    private $puntos;

    /**
     * @ORM\Column(type="smallint")
     */
    private $cantidad;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $estado;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEmpleado(): ?int
    {
        return $this->idEmpleado;
    }

    public function setIdEmpleado(int $idEmpleado): self
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    public function getIdProducto(): ?int
    {
        return $this->idProducto;
    }

    public function setIdProducto(int $idProducto): self
    {
        $this->idProducto = $idProducto;

        return $this;
    }

    public function getPuntos(): ?int
    {
        return $this->puntos;
    }

    public function setPuntos(int $puntos): self
    {
        $this->puntos = $puntos;

        return $this;
    }

    public function getCantidad(): ?int
    {
        return $this->cantidad;
    }

    public function setCantidad(int $cantidad): self
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): self
    {
        $this->estado = $estado;

        return $this;
    }
}
