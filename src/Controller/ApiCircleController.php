<?php

namespace App\Controller;

use App\Entity\Circle;
use App\Entity\Triangle;
use App\Repository\CircleRepository;
use App\Service\GeometryCalculator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ApiCircleController extends AbstractController
{
    /**
     * @Route("/api/circle/{radius<\d+>}", name="app_api_circle", methods={"GET"})
     */
    public function index($radius): JsonResponse
    {
        $circle = new Circle($radius);

        return $this->json([
            'type' => $circle->getType(),
            'radius' => $circle->getRadius(),
            'surface' => $circle->getSurface(),
            'circumference' => $circle->getCircumference(),
        ]);
    }

    /**
     * @Route("/api/geometry/areas-sum", name="app_api_areas", methods={"GET"})
     */
    public function areas(GeometryCalculator $geometryCalculator): JsonResponse
    {
        $circle = new Circle(4);
        $triangle = new Triangle(3, 4, 5, 3);

        return $this->json([
            'areas-sum' => $geometryCalculator->sumOfAreas([$circle, $triangle]),
        ]);
    }


    /**
     * @Route("/api/geometry/circumferences-sum", name="app_api_areas", methods={"GET"})
     */
    public function circumferences(GeometryCalculator $geometryCalculator): JsonResponse
    {
        $circle = new Circle(4);
        $triangle = new Triangle(3, 4, 5, 3);

        return $this->json([
            'circumferences-sum' => $geometryCalculator->sumOfCircumference([$circle, $triangle]),
        ]);
    }
}
