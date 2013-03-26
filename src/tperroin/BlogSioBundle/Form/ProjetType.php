<?php

namespace tperroin\BlogSioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProjetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('auteur')
            ->add('contenu')
            ->add('teaser')
            ->add('titre')
            ->add('image')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'tperroin\BlogSioBundle\Entity\Projet'
        ));
    }

    public function getName()
    {
        return 'tperroin_blogsiobundle_projettype';
    }
}
