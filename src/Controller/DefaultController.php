<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Medicament;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index(): Response
    {
        $medicament = $this->getDoctrine()->getRepository(Medicament::class)->findAll();

        return $this->render('default/index.html.twig', [
            'medicaments' => $medicament
        ]);
    }
}
