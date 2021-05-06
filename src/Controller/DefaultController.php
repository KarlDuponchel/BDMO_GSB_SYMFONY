<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Medicament;
use App\Entity\Excipient;
use App\Entity\Laboratoire;
use App\Entity\FamilleMedicament;
use App\Form\ExcipientType;
use App\Form\MedicamentType;
use App\Form\MedicamentModificationType;
use App\Form\LaboratoireType;
use App\Form\FamilleMedicamentType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FormType;

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
	
	public function ajoutExicpient(Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$excipient = new Excipient();
		$form = $this->createForm(ExcipientType::class, $excipient);
		
		if($request->isMethod('POST') && $form->handleRequest($request)->isValid()){
			$em->persist($excipient);
			$em->flush();
			return $this->redirectToRoute('index');
		}
		
	return $this->render('ajoutExcipient.html.twig', ['form' => $form->createView()
	]);
	}
	
	public function ajoutMedicament(Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$medicament = new Medicament();
		$form = $this->createForm(MedicamentType::class, $medicament);
		
		if($request->isMethod('POST') && $form->handleRequest($request)->isValid()){
			$em->persist($medicament);
			$em->flush();
			return $this->redirectToRoute('index');
	}
	
	return $this->render('ajout.html.twig', ['form' => $form->createView()
	]);
	}
	
	public function modifMedicament($depotlegal, Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		//On récupère le dépot légal du médicament
		$medicament = $em->getRepository(Medicament::class)->find($depotlegal);
		
		if ($medicament ===null ){
			throw new NotFoundHttpException("Le médicament ".$depotlegal." n'existe pas.");
		}

		$form = $this->createForm(MedicamentModificationType::class, $medicament);
		if ($request->isMethod('POST')) {
			$form->handleRequest($request);
			if ($form->isValid()) {
				$em->persist($medicament);
				$em->flush();
				$request->getSession()->getFlashBag()->add('notice', 'Medicament bien enregistrée.');
				return $this->redirectToRoute('index');
				//return $this->redirectToRoute('SiteAMA_plateforme_detail', array('id' => $medicament->getId()));
			}
		}
		return $this->render('modifMedicament.html.twig', array('medicament'=>$medicament, 'form' => $form->createView(),));
	}
	
	
	public function detailsmedoc($depotlegal)
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
	
	public function ajoutLaboratoire(Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$laboratoire = new Laboratoire();
		$form = $this->createForm(LaboratoireType::class, $laboratoire);
		
		if($request->isMethod('POST') && $form->handleRequest($request)->isValid()){
			$em->persist($laboratoire);
			$em->flush();
			return $this->redirectToRoute('index');
		}
		
	return $this->render('ajoutLaboratoire.html.twig', ['form' => $form->createView()
	]);
	}
	
	public function ajoutFamilleMedicament(Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$famMedicament = new FamilleMedicament();
		$form = $this->createForm(FamilleMedicamentType::class, $famMedicament);
		
		if($request->isMethod('POST') && $form->handleRequest($request)->isValid()){
			$em->persist($famMedicament);
			$em->flush();
			return $this->redirectToRoute('index');
		}
		
	return $this->render('ajoutFamilleMedicament.html.twig', ['form' => $form->createView()
	]);
	}
 
}
