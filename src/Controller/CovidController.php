<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CovidController extends AbstractController
{
    #[Route('/covid', name: 'app_covid')]
    public function index(): Response
    {
        return $this->render('covid/index.html.twig', [
            'controller_name' => 'CovidController',
        ]);
    }
}
