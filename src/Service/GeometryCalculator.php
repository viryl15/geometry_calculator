<?php

namespace App\Service;

use App\Entity\GeometryFigure;

class GeometryCalculator
{
    /**
     * @param $geometryFigures is an GeometryFigure's array
     * i use an array to allow the user to pass more than two GeometryFigures
     */
    public function sumOfAreas($geometryFigures): float
    {
        $sum = 0.0;
        foreach ($geometryFigures as $geometryFigure) {
            if ($geometryFigure instanceof GeometryFigure) {
                $sum += $geometryFigure->getSurface();
            }
        }

        return $sum;
    }

    /**
     * @param $geometryFigures is an GeometryFigure's array
     * i use an array to allow the user to pass more than two GeometryFigures
     */
    public function sumOfCircumference($geometryFigures): float
    {
        $sum = 0.0;
        foreach ($geometryFigures as $geometryFigure) {
            if ($geometryFigure instanceof GeometryFigure) {
                $sum += $geometryFigure->getCircumference();
            }
        }

        return $sum;
    }
}
