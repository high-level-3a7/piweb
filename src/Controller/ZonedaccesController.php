<?php

namespace App\Controller;

use App\Entity\Zonedacces;
use App\Form\ZonedaccesType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/zonedacces")
 */
class ZonedaccesController extends AbstractController
{
    /**
     * @Route("/", name="zonedacces_index", methods={"GET"})
     */
    public function index(): Response
    {
        $zonedacces = $this->getDoctrine()
            ->getRepository(Zonedacces::class)
            ->findAll();

        return $this->render('zonedacces/index.html.twig', [
            'zonedacces' => $zonedacces,
        ]);
    }

    /**
     * @Route("/new", name="zonedacces_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $zonedacce = new Zonedacces();
        $form = $this->createForm(ZonedaccesType::class, $zonedacce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($zonedacce);
            $entityManager->flush();

            return $this->redirectToRoute('zonedacces_index');
        }

        return $this->render('zonedacces/new.html.twig', [
            'zonedacce' => $zonedacce,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idzone}", name="zonedacces_show", methods={"GET"})
     */
    public function show(Zonedacces $zonedacce): Response
    {
        return $this->render('zonedacces/show.html.twig', [
            'zonedacce' => $zonedacce,
        ]);
    }

    /**
     * @Route("/{idzone}/edit", name="zonedacces_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Zonedacces $zonedacce): Response
    {
        $form = $this->createForm(ZonedaccesType::class, $zonedacce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('zonedacces_index');
        }

        return $this->render('zonedacces/edit.html.twig', [
            'zonedacce' => $zonedacce,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idzone}", name="zonedacces_delete", methods={"POST"})
     */
    public function delete(Request $request, Zonedacces $zonedacce): Response
    {
        if ($this->isCsrfTokenValid('delete'.$zonedacce->getIdzone(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($zonedacce);
            $entityManager->flush();
        }

        return $this->redirectToRoute('zonedacces_index');
    }
}
