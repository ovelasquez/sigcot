<?php

namespace Sigcotweb\AplicativoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CooperativistasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('usuario')
            ->add('clave')
            ->add('nombre')
            ->add('apellido')
            ->add('cinum')
            ->add('rifnum')
            ->add('direccion')
            ->add('telefonos')
            ->add('foto', 'file', array('required' => false))
            ->add('ciarc', 'file', array('required' => false))
            ->add('rifarc', 'file', array('required' => false))
            ->add('dccargo')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sigcotweb\AplicativoBundle\Entity\Cooperativistas'
        ));
    }

    public function getName()
    {
        return 'sigcotweb_aplicativobundle_cooperativistastype';
    }
}
