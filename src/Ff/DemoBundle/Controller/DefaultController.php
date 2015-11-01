<?php

namespace Ff\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ff\DemoBundle\Form\TareaType;
use Ff\DemoBundle\Form\SalidasType;
use Ff\DemoBundle\Form\IngresosType;
use Ff\DemoBundle\Entity\Tarea;
use Ff\DemoBundle\Entity\Alumnos\Alumno;
use Ff\DemoBundle\Entity\AlumnoPago;
use Ff\DemoBundle\Entity\Muaythai;
use Ff\DemoBundle\Entity\Jjb;
use Ff\DemoBundle\Entity\Judo;
use Ff\DemoBundle\Entity\Mma;
use Ff\DemoBundle\Entity\Box;
use Ff\DemoBundle\Entity\Salidas;
use Ff\DemoBundle\Entity\Ingresos;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Session\Session;  

class DefaultController extends Controller 
{
    

    //******con este controlador muestro la pantalla principal**********

    public function mostrarAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT a
               FROM FfDemoBundle:Alumnos\Alumno a
               ORDER BY a.apellidop ASC'
        );
         
        $resultado= $query->getResult();
        	
    	if (!$resultado) {
        	throw $this->createNotFoundException(
            	'No se encontraron alumnos'
        	);
    	}


    	return $this->render('FfDemoBundle:Default:index.html.twig', array(
            'resultado' => $resultado, ));
    }

//.................................................................




//******con este controlador muestro la pantalla principal con los botones de cuentas**********

    public function mostrarcuentasAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT a
               FROM FfDemoBundle:Alumnos\Alumno a
               ORDER BY a.apellidop ASC'
        );
         
        $resultado= $query->getResult();
            
        if (!$resultado) {
            throw $this->createNotFoundException(
                'No se encontraron alumnos'
            );
        }


        return $this->render('FfDemoBundle:Default:cuentas.html.twig', array(
            'resultado' => $resultado, ));
    }

//.................................................................


//******con este controlador muestro la gente que esta por vencer**********

    public function mostrar_vencerAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT a
               FROM FfDemoBundle:Alumnos\Alumno a
               ORDER BY a.apellidop ASC'
        );
         
        $resultado= $query->getResult();
            
        if (!$resultado) {
            throw $this->createNotFoundException(
                'No se encontraron alumnos'
            );
        }


        return $this->render('FfDemoBundle:Default:vencer.html.twig', array(
            'resultado' => $resultado, ));
    }

//.................................................................

    
    //**********este es el controlador para el formulario de ingreso de Salidas*******


    public function mostrar_IngresarSalidaAction(Request $request) 
    {
     


        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT a
               FROM FfDemoBundle:Salidas a
               ORDER BY a.id ASC'
        );
         
        $resultado= $query->getResult();
            
        if (!$resultado) {
            throw $this->createNotFoundException(
                'No se encontraron alumnos'
            );
        }


        $tarea = new Salidas();
       
        $tarea->setFecha(new \DateTime('now'));

        $tarea->setHora(new \DateTime('now'));
        
        $form = $this->createForm(new SalidasType(), $tarea); 


        $form->handleRequest($request);

        if ($form->isValid())
        {   


            $salidas = new Salidas();
            $salidas->setDescrip($tarea->getDescrip());
            $salidas->setFecha($tarea->getFecha());
            $salidas->setMonto($tarea->getMonto());
            $salidas->setPersona($tarea->getPersona());
            $salidas->setHora($tarea->getHora());
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($salidas);
            $em->flush();

            //.....nos retorna a la misma pagina

            $em2 = $this->getDoctrine()->getManager();
            $query = $em2->createQuery(
                'SELECT a
                   FROM FfDemoBundle:Salidas a
                   ORDER BY a.id ASC'
            );
            
            $resultado2= $query->getResult();

            $tarea2 = new Salidas();
            $tarea2->setFecha(new \DateTime('now'));
            $tarea2->setHora(new \DateTime('now'));
            $form2 = $this->createForm(new SalidasType(), $tarea2); 

            return $this->render('FfDemoBundle:Default:Salidas.html.twig', array(
                'form' => $form2->createView(),'resultado' => $resultado2,));

        }
       
        return $this->render('FfDemoBundle:Default:Salidas.html.twig', array(
            'form' => $form->createView(),'resultado' => $resultado,));
        

    }


    //**********este es el controlador para el formulario de ingreso de entradas*******


    public function mostrar_IngresarIngresoAction(Request $request) 
    {
        $tarea = new Ingresos();
       
        $tarea->setFecha(new \DateTime('now'));

        $tarea->setHora(new \DateTime('now'));
        
        $form = $this->createForm(new IngresosType(), $tarea); 


        $form->handleRequest($request);

        if ($form->isValid())
        {   


            $ingresos = new Ingresos();
            $ingresos->setDescrip($tarea->getDescrip());
            $ingresos->setFecha($tarea->getFecha());
            $ingresos->setMonto($tarea->getMonto());
            $ingresos->setPersona($tarea->getPersona());
            $ingresos->setHora($tarea->getHora());
            $ingresos->setConcepto($tarea->getConcepto());
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($ingresos);
            $em->flush();


            //.....nos retorna a la pagina de inicio
                
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery(
                'SELECT a
                   FROM FfDemoBundle:Alumnos\Alumno a
                   ORDER BY a.apellidop ASC'
            );
             
            $resultado= $query->getResult();
                
            if (!$resultado) {
                throw $this->createNotFoundException(
                    'No se encontraron alumnos'
            );
        }


        return $this->render('FfDemoBundle:Default:index.html.twig', array(
            'resultado' => $resultado, ));

        }
       

       return $this->render('FfDemoBundle:Default:ingresos.html.twig', array(
            'form' => $form->createView(),));
        

    }



}
