<?php

namespace App\Entity;

use App\Repository\CircleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CircleRepository::class)
 */
class Circle extends GeometryFigure
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
    private $radius;

    public function __construct($radius)
    {
        parent::__construct('circle', $this->surface($radius), $this->circumference($radius));
        $this->radius = $radius;
        $this->diameter = $this->diameter($radius);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRadius(): ?float
    {
        return $this->radius;
    }

    public function setRadius(float $radius): self
    {
        $this->radius = $radius;

        return $this;
    }

    public function surface($radius)
    {
        return pow($radius, 2) * pi();
    }

    public function diameter($radius)
    {
        return $radius * 2;
    }

    public function circumference($radius)
    {
        return $this->diameter($radius) * pi();
    }
}
