<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use App\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Medicament;
use App\Entity\Outils;
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

    public function detailsmedoc($depotlegal, Request $request): Response
    {
      //On récupère l'entity manager
      $em = $this->getDoctrine()->getManager();
      //On récupère le respository
      $respository =$em->getRepository(Medicament::class);
      //On récupère l'entité correspondante à l'id passé en paramètre
      $medicament = $respository->find($depotlegal);

      return $this->render('default/detailsmedoc.html.twig', [
          'medicaments' => $medicament
      ]);
    }
    public function supprimersmedoc($depotlegal, Request $request): Response
    {
      //On récupère l'entity manager
      $em = $this->getDoctrine()->getManager();
      //On récupère le respository
      $respository =$em->getRepository(Medicament::class);
      //On récupère l'entité correspondante à l'id passé en paramètre
      $medicament = $respository->find($depotlegal);
        return $this->render('default/suppmedoc.html.twig', [
            'medicaments' => $medicament
        ]);

    }
}
