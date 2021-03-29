<?php

namespace App\Controller;

use App\Entity\Utilisateur;
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

        //A FINIR
    public function Utilisateur(): Response
    {
        $Util = $this->getDoctrine()->getRepository(Utilisateur::class)->find(1);

        return $this->render('default/index.html.twig', [
            'util'=>$Util
        ]);
    }
}
