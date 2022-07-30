<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VeniseController extends AbstractController
{
    #[Route('/venise', name: 'app_venise')]
    public function index(): Response
    {
        return $this->render('venise/index.html.twig', [
            'controller_name' => 'VeniseController',
        ]);
    }
}
