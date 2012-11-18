<?php

namespace Sigcotweb\AplicativoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DcactivosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tipo')
            ->add('marca')
            ->add('modelo')
            ->add('anio')
            ->add('placa')
            ->add('cooperativista')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sigcotweb\AplicativoBundle\Entity\Dcactivos'
        ));
    }

    public function getName()
    {
        return 'sigcotweb_aplicativobundle_dcactivostype';
    }
}
