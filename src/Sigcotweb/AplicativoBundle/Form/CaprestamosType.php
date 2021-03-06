<?php

namespace Sigcotweb\AplicativoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CaprestamosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('monto', 'money')
            ->add('fecha')
            ->add('numaportes')
            ->add('interes')
            ->add('cooperativista')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sigcotweb\AplicativoBundle\Entity\Caprestamos'
        ));
    }

    public function getName()
    {
        return 'sigcotweb_aplicativobundle_caprestamostype';
    }
}
