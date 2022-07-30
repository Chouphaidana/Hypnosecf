<?php

namespace App\Controller;

use App\Classe\Cart;
use App\Repository\BedRoomRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    #[Route('/compte/panier', name: "cart_index")]
    public function index(BedRoomRepository $bedRoomRepository,SessionInterface $session,):Response
    {
        $bedRoom = $bedRoomRepository->findAll();

        $panier = $session->get('panier', []);
        $panierWithData[] = [];

        foreach ($panier as $id => $quantity) {
            $panierWithData[] =
                [
                    'product' => $bedRoomRepository->findAll(),
                    'quantity' => $quantity
                ];
        }

        unset($panierWithData[0]);
        dd($panierWithData);

        return $this->render('cart/index.html.twig', [
            'items' => $panierWithData
        ]);
    }



    #[Route('/compte/panier/add/{id})', name: '/compte/cart_add')]


    public function add($id,SessionInterface $session )
    {

     $panier = $session->get('panier',[]);

         if(!empty($panier[$id])) {
             $panier[$id]++;
         } else {
             $panier[$id] = 1;
         }


         $session->set('panier', $panier);
         dd($panier);


         return $this->redirectToRoute('/compte/panier/cart_add{id}/index.html.twig');
    }
}
