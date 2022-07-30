<?php

namespace App\Controller;


use App\Repository\BedRoomRepository;
use App\Repository\RoomRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservationController extends AbstractController
{
    #[Route('/compte/reservation', name: 'app_reservation')]
    public function index(BedRoomRepository $bedRoomRepository,RoomRepository $roomRepository):Response
    {
        $bedRoom = $bedRoomRepository->findAll();
        $room = $roomRepository->findAll();

        return $this->render('reservation/index.html.twig', [
            'chambres' =>$bedRoom,
            'hotels'=>$room,
        ]);
    }
}
