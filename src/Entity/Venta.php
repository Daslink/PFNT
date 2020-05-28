<?php

namespace App\Entity;

use App\Repository\VentaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VentaRepository::class)
 */
class Venta
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
    private $idVendedor;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $idPeriodo;

    /**
     * @ORM\Column(type="integer")
     */
    private $valorVenta;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdVendedor(): ?int
    {
        return $this->idVendedor;
    }

    public function setIdVendedor(int $idVendedor): self
    {
        $this->idVendedor = $idVendedor;

        return $this;
    }

    public function getIdPeriodo(): ?string
    {
        return $this->idPeriodo;
    }

    public function setIdPeriodo(string $idPeriodo): self
    {
        $this->idPeriodo = $idPeriodo;

        return $this;
    }

    public function getValorVenta(): ?int
    {
        return $this->valorVenta;
    }

    public function setValorVenta(int $valorVenta): self
    {
        $this->valorVenta = $valorVenta;

        return $this;
    }
}
