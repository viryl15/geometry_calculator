<?php

namespace App\Controller;

use App\Entity\Triangle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ApiTriangleController extends AbstractController
{
    /**
     * @Route("/api/triangle/{a}/{base}/{c}/{height}", name="app_api_triangle", methods={"GET"})
     */
    public function index(Request $request): JsonResponse
    {
        $params = $request->attributes->all();
        $triangle = new Triangle($params['a'], $params['base'], $params['c'], $params['height']);
        return $this->json([
            'type' => $triangle->getType(),
            'a' => $triangle->getA(),
            'base' => $triangle->getBase(),
            'c' => $triangle->getC(),
            'height' => $triangle->getHeight(),
            'surface' => $triangle->getSurface(),
            'circumference' => $triangle->getCircumference()
        ]);
    }
}
