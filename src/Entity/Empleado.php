<?php

namespace App\Entity;

use App\Repository\EmpleadoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EmpleadoRepository::class)
 */
class Empleado
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
    private $nombre;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $apellido;

    /**
     * @ORM\Column(type="date")
     */
    private $fechaDeNacimiento;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $rol;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $usuarioIngreso;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $contrasenaIngreso;

    /**
     * @ORM\Column(type="integer")
     */
    private $identificadorJefe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellido(): ?string
    {
        return $this->apellido;
    }

    public function setApellido(string $apellido): self
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function getFechaDeNacimiento(): ?\DateTimeInterface
    {
        return $this->fechaDeNacimiento;
    }

    public function setFechaDeNacimiento(\DateTimeInterface $fechaDeNacimiento): self
    {
        $this->fechaDeNacimiento = $fechaDeNacimiento;

        return $this;
    }

    public function getRol(): ?string
    {
        return $this->rol;
    }

    public function setRol(string $rol): self
    {
        $this->rol = $rol;

        return $this;
    }

    public function getUsuarioIngreso(): ?string
    {
        return $this->usuarioIngreso;
    }

    public function setUsuarioIngreso(string $usuarioIngreso): self
    {
        $this->usuarioIngreso = $usuarioIngreso;

        return $this;
    }

    public function getContrasenaIngreso(): ?string
    {
        return $this->contrasenaIngreso;
    }

    public function setContrasenaIngreso(string $contrasenaIngreso): self
    {
        $this->contrasenaIngreso = $contrasenaIngreso;

        return $this;
    }

    public function getIdentificadorJefe(): ?int
    {
        return $this->identificadorJefe;
    }

    public function setIdentificadorJefe(int $identificadorJefe): self
    {
        $this->identificadorJefe = $identificadorJefe;

        return $this;
    }
}
