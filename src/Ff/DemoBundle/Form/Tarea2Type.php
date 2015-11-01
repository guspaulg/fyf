<?php

namespace Ff\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Tarea2Type extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('disciplina' , 
                  'choice', 
                   array('choices' => array('Box' => 'Box', 'Thai' => 'Muay thai', 'Mma' => 'Mma', 
                   'Box-fit' => 'Box and fitness','Judo' => 'Judo'),'label'=>'Tipo de Pago'
            ))

            ->add('disciplina2' , 
                  'choice', 
                   array('choices' => array('nulo'=>'Nulo','Box' => 'Box', 'Thai' => 'Muay thai', 'Mma' => 'Mma', 
                   '4' => 'Box-fit','Judo' => 'Judo'),'label'=>'Tipo de Pago'
            ))

            ->add('fecha_inicio','date')

            ->add('fecha_final','date')

            ->add('precio')

            ->add('tipodepago' , 
                  'choice', 
                   array('choices' => array('1' => 'Efectivo', '2' => 'Tarjeta',),'label'=>'Tipo de Pago',
            ))
            
            ->add('veces', 'choice', array(
            'choices' => array('1' => '1 día por semana', '2' => '2 días por semanas' , '3' => '3 días por semanas', '4' => '4 días por semanas', '5' => '5 días por semanas', '6' => '6días por semanas',),'label'=>'Dias por semana',
            ))

            ->add('matricular', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ff\DemoBundle\Entity\Tarea2'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ff_demobundle_tarea2';
    }
}
