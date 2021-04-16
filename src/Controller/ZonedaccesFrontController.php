<?php

namespace App\Controller;

use App\Entity\Zonedacces;
use App\Form\Zonedacces1Type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ZonedaccesFrontController extends AbstractController
{
    /**
     * @Route("/ZonefrontIndex", name="zonedacces_front_index", methods={"GET"})
     */
    public function index(): Response
    {
        $zonedacces = $this->getDoctrine()
            ->getRepository(Zonedacces::class)
            ->findAll();

        return $this->render('zonedacces_front/index.html.twig', [
            'zonedacces' => $zonedacces,
        ]);
    }

}
