<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NoshotelsController extends AbstractController
{
    #[Route('/noshotels', name: 'app_noshotels')]
    public function index(): Response
    {
        return $this->render('noshotels/index.html.twig', [
            'controller_name' => 'NoshotelsController',
        ]);
    }
}
