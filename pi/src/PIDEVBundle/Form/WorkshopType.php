<?php

namespace PIDEVBundle\Form;

use blackknight467\StarRatingBundle\Form\RatingType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WorkshopType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('nom')
            ->add('prix')
            ->add('rating', RatingType::class, [
                //...
                'stars' => 4,
                //...
            ])
            ->add('capacite')
            ->add('description')
            ->add('idUser')
            ->add('ajouter',SubmitType::class)
            ->add('salle',EntityType::class, array ('class' =>'PIDEVBundle\Entity\Salle','choice_label' =>'nom'  , 'multiple' =>false))



            ->add('idSession',EntityType::class, array ('class' =>'PIDEVBundle\Entity\Session','choice_label' =>'titre' , 'multiple' =>false
            ))
            ->add('idtypework',EntityType::class, array(
                'class' => 'PIDEVBundle\Entity\TypeWorkshop',
                'choice_label' => 'nom',
                'multiple' => false
            ));

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PIDEVBundle\Entity\Workshop'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'pidevbundle_workshop';
    }


}
