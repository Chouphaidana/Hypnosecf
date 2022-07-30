<?php

namespace App\Classe;

use App\Repository\BedRoomRepository;
use App\Repository\RoomRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class Cart
{
    private SessionInterface $session;

    /**
     * @param $session
     */
    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    public function add($id)
{
    $this->session->set('cart',[
        ['id'=>$id,
        'quantity'=>1
    ]
    ]);
}
}