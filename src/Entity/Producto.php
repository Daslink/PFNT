<?php

namespace App\Entity;

use App\Repository\ProductoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductoRepository::class)
 */
class Producto
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
     * @ORM\Column(type="text")
     */
    private $descripcion;

    /**
     * @ORM\Column(type="text")
     */
    private $imagenURL;

    /**
     * @ORM\Column(type="integer")
     */
    private $puntosRedimir;

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

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getImagenURL(): ?string
    {
        return $this->imagenURL;
    }

    public function setImagenURL(string $imagenURL): self
    {
        $this->imagenURL = $imagenURL;

        return $this;
    }

    public function getPuntosRedimir(): ?int
    {
        return $this->puntosRedimir;
    }

    public function setPuntosRedimir(int $puntosRedimir): self
    {
        $this->puntosRedimir = $puntosRedimir;

        return $this;
    }
}
