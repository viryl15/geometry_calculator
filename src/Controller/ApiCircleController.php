<?php

namespace App\Controller;

use App\Entity\Circle;
use App\Repository\CircleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ApiCircleController extends AbstractController
{
    /**
     * @Route("/api/circle/{radius}", name="app_api_circle", methods={"GET"})
     */
    public function index(Request $request): JsonResponse
    {
        $radius = (float)$request->attributes->all()['radius'];
        $circle = new Circle($radius);
        // dump($circle);
        return $this->json([
            'type' => $circle->getType(),
            'radius' => $circle->getRadius(),
            'surface' => $circle->getSurface(),
            'circumference' => $circle->getCircumference(),
        ]);
    }
}
