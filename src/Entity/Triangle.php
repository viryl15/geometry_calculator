<?php

namespace App\Entity;

use App\Repository\TriangleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TriangleRepository::class)
 */
class Triangle extends GeometryFigure
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $a;

    /**
     * @ORM\Column(type="float")
     */
    private $base;

    /**
     * @ORM\Column(type="float")
     */
    private $c;

    /**
     * @ORM\Column(type="float")
     */
    private $height;

    public function __construct($a, $base, $c, $height)
    {
        parent::__construct('triangle', $this->surface($base, $height), $this->circumference($a, $base, $c));
        $this->a = $a;
        $this->base = $base;
        $this->c = $c;
        $this->height = $height;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getA(): ?float
    {
        return $this->a;
    }

    public function setA(float $a): self
    {
        $this->a = $a;

        return $this;
    }

    public function getBase(): ?float
    {
        return $this->base;
    }

    public function setBase(float $base): self
    {
        $this->base = $base;

        return $this;
    }

    public function getC(): ?float
    {
        return $this->c;
    }

    public function setC(float $c): self
    {
        $this->c = $c;

        return $this;
    }

    public function getHeight(): ?float
    {
        return $this->height;
    }

    public function setHeight(float $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function surface($base, $height)
    {
        return ($base * $height) / 2;
    }

    public function circumference($a, $base, $c)
    {
        return $a + $base + $c;
    }
}
