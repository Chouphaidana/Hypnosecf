<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LesMaldivesController extends AbstractController
{
    #[Route('/lesmaldives', name: 'app_les_maldives')]
    public function index(): Response
    {
        return $this->render('les_maldives/index.html.twig', [
            'controller_name' => 'LesMaldivesController',
        ]);
    }
}
