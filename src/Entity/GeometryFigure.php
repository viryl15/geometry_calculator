<?php

namespace App\Entity;

use App\Repository\GeometryFigureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GeometryFigureRepository::class)
 */
class GeometryFigure
{
    /**
     * @ORM\Column(type="string", length=10)
     */
    private $type;

    /**
     * @ORM\Column(type="float")
     */
    private $surface;

    /**
     * @ORM\Column(type="float")
     */
    private $circumference;

    public function __construct($type, $surface, $circumference)
    {
        $this->type = $type;
        $this->surface = $surface;
        $this->circumference = $circumference;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getSurface(): ?float
    {
        return $this->surface;
    }

    public function setSurface(float $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    public function getCircumference(): ?float
    {
        return $this->circumference;
    }

    public function setCircumference(float $circumference): self
    {
        $this->circumference = $circumference;

        return $this;
    }
}
