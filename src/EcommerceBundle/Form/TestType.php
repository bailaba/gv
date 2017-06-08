<?php

namespace EcommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\LanguageType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class TestType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
         $builder->add('baila')
                 ->add('youba',DateType::class,['label' =>'Date de naissance'])
                 ->add('youba',LanguageType::class)
                 ->add('Envoyer', \Symfony\Component\Form\Extension\Core\Type\SubmitType::class);
    }
    
    public function getName()
    {
        return 'ecommercebundle_test';
    }
}

