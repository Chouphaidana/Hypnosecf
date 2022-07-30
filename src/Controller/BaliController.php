<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaliController extends AbstractController
{
    #[Route('/bali', name: 'app_bali')]
    public function index(): Response
    {
        return $this->render('bali/index.html.twig', [
            'controller_name' => 'BaliController',
        ]);
    }
}
