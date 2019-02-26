<?php

namespace PIDEVBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EvenementType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('dateebut')->add('dateFin')
            ->add('nom')->add('prix')->add('description')

            ->add('salle',EntityType::class, array(
                'class' =>'PIDEVBundle\Entity\Salle','choice_label' =>'nom' , 'multiple' =>false

            ))
            ->add('categorie',EntityType::class, array(
                'class' =>'PIDEVBundle\Entity\Categorie','choice_label' =>'type' , 'multiple' =>false

            ))


        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PIDEVBundle\Entity\Evenement'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'pidevbundle_evenement';
    }


}
