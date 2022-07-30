<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SalzbourgController extends AbstractController
{
    #[Route('/salzbourg', name: 'app_salzbourg')]
    public function index(): Response
    {
        return $this->render('salzbourg/index.html.twig', [
            'controller_name' => 'SalzbourgController',
        ]);
    }
}
