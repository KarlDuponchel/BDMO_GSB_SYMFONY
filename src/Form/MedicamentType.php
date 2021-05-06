<?php

namespace App\Form;

use App\Entity\Medicament;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

use App\Entity\Excipient;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class MedicamentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('medDepotlegal', TextType::class)
            ->add('famCode', TextType::class)
            //->add('labId')
            ->add('medNomcommercial', TextType::class)
            ->add('medPrix',NumberType::class)
            ->add('medEffets', TextareaType::class)
            ->add('medComposition', TextareaType::class)
            ->add('medContreindic', TextareaType::class)
            ->add('medQuantite', TextType::class)
            ->add('excId', TextType::class);
			/*->add('excId', EntityType::class, [
				'class' => Excipient::class,
				'choice_label' => 'excId', ]);*/

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Medicament::class,
        ]);
    }
}
