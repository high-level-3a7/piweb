<?php

namespace App\Controller;

use App\Entity\Abonnement;
use App\Form\Abonnement1Type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AbonnementFrontController extends AbstractController
{
    /**
     * @Route("/AbonnementFront", name="abonnement_front_index", methods={"GET"})
     */
    public function index(): Response
    {
        $abonnements = $this->getDoctrine()
            ->getRepository(Abonnement::class)
            ->findAll();

        return $this->render('abonnement_front/index.html.twig', [
            'abonnements' => $abonnements,
        ]);
    }


}
