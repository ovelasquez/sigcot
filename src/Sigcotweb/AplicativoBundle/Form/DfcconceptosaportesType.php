<?php

namespace Sigcotweb\AplicativoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DfcconceptosaportesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('monto')
            ->add('titulo')
            ->add('descripcion')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sigcotweb\AplicativoBundle\Entity\Dfcconceptosaportes'
        ));
    }

    public function getName()
    {
        return 'sigcotweb_aplicativobundle_dfcconceptosaportestype';
    }
}
