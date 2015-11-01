<?php

namespace Ff\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SalidasType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('descrip',null, array('label' =>'Descripcion',))
            ->add('fecha','date')
            ->add('monto')
            ->add('persona', 'choice', array('choices' => array('1' => 'Dandy', '2' => 'jose',),'label'=>'Responsable'))
            ->add('hora','time')
            ->add('Ingresar Salida de Dinero', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ff\DemoBundle\Entity\Salidas'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ff_demobundle_salidas';
    }
}
