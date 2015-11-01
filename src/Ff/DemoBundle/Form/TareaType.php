<?php

namespace Ff\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TareaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('apellidop',null, array('label' =>'Apellido Paterno',))
            ->add('apellidom',null, array('label' =>'Apellido Materno',))
            ->add('nombre',null, array('label' =>'Nombre Completo',))
            ->add('email',null,array('label' =>'Correo Electronico',))
            ->add('cumple','birthday')
            ->add('dni')
            ->add('telefonoc',null, array('label' =>' Numero Celular',))
            ->add('telefonof',null, array('label' =>'Numero Fijo',))

            ->add('sexo', 'choice', array(
            'choices' => array('1' => 'Mujer', '2' => 'Hombre'),
            ))

           ->add('disciplina' , 
                  'choice', 
                   array('choices' => array('Box' => 'Box', 'Thai' => 'Muay thai', 'Mma' => 'Mma', 
                   'Box-fit' => 'Box and fitness','Judo' => 'Judo'),'label'=>'Tipo de Pago'
            ))

            ->add('disciplina2' , 
                  'choice', 
                   array('choices' => array('nulo'=>'Nulo','Box' => 'Box', 'Thai' => 'Muay thai', 'Mma' => 'Mma', 
                   'Box-fit' => 'Box-fit','Judo' => 'Judo'),'label'=>'Tipo de Pago'
            ))

            ->add('fecha_inicio','date')

            ->add('fecha_final','date')

            ->add('tipodepago' , 
                  'choice', 
                   array('choices' => array('1' => 'efectivo', '2' => 'tarjeta',),'label'=>'Tipo de Pago',
            ))

            ->add('veces', 'choice', array(
            'choices' => array('1' => '1 día por semana', '2' => '2 días por semanas' , '3' => '3 días por semanas', '4' => '4 días por semanas', '5' => '5 días por semanas', '6' => '6días por semanas',),'label'=>'Dias por semana',
            ))

            ->add('precio')

            ->add('file','file', array('required' => false ,))


            ->add('matricular', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ff\DemoBundle\Entity\Tarea'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ff_demobundle_tarea';
    }
}
