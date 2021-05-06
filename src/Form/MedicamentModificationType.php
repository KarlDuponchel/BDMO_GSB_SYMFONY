<?php

namespace App\Form;

use App\Entity\Medicament;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MedicamentModificationType extends AbstractType
{
   /* public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('medDepotlegal')
            ->add('famCode')
            ->add('labId')
            ->add('medNomcommercial')
            ->add('medPrix')
            ->add('medEffets')
            ->add('medComposition')
            ->add('medContreindic')
            ->add('medQuantite')
            ->add('excId')
        ;
    }*/
	
	public function getParent()
	{
		return MedicamentType::class;
	}

   /* public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Medicament::class,
        ]);
    }*/
}
