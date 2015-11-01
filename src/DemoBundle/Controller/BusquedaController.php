<?php

namespace Ff\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ff\DemoBundle\Form\Tarea4Type;
use Ff\DemoBundle\Entity\Tarea4;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;  

class BusquedaController extends Controller 
{
	//**********este es el controlador para la busqueda*******


    public function mostrar_formularioAction(Request $request) 
    {
             $tarea4 = new tarea4();
             $form = $this->createForm(new Tarea4Type(), $tarea4);    
             $form->handleRequest($request);

             if ($form->isValid())
             {   
                       

                        $alumno = $this-> getDoctrine()
                            ->getRepository('Ff\DemoBundle\Entity\Alumnos\Alumno')
                            ->findByApellidop($tarea4->getApellidop());

                        return $this->render('FfDemoBundle:Default:busqueda2.html.twig', array(
                    'form' => $form->createView(), 'alumno' => $alumno,));

             }   
              return $this->render('FfDemoBundle:Default:busqueda.html.twig', array(
            'form' => $form->createView(),));

    }

  

   
    
}
