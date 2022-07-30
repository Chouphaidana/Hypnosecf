<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MarrakechController extends AbstractController
{
    #[Route('/marrakech', name: 'app_marrakech')]
    public function index(): Response
    {
        return $this->render('marrakech/index.html.twig', [
            'controller_name' => 'MarrakechController',
        ]);
    }
}
