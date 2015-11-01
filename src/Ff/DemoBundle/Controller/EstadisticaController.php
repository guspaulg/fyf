<?php

namespace Ff\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ff\DemoBundle\Form\Tarea3Type;
use Ff\DemoBundle\Entity\Tarea3;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Ff\DemoBundle\Entity\Muaythai;
use Ff\DemoBundle\Entity\Jjb;
use Ff\DemoBundle\Entity\Judo;
use Ff\DemoBundle\Entity\Mma;
use Ff\DemoBundle\Entity\Box;
use Ff\DemoBundle\Entity\Boxandfitness;

class EstadisticaController extends Controller
{
	public function mostrar_formularioAction(Request $request){

		$tarea3 = new tarea3();
		$tarea3->setFechaInicio(new \DateTime('now'));
        $tarea3->setFechaFinal(new \DateTime('now'));
        $form = $this->createForm(new Tarea3Type(), $tarea3);

        $muay=null;
        $boxand=null;
        $box=null;
        $judo=null;
        $mma=null;
        $fechai=null;
        $fechaf=null;	

        $form->handleRequest($request);

        if ($form->isValid()){

        	$muay = $this-> getDoctrine()
                        ->getRepository('Ff\DemoBundle\Entity\Muaythai')
                        ->findALL();

            $boxand = $this-> getDoctrine()
                        ->getRepository('Ff\DemoBundle\Entity\Boxandfitness')
                        ->findALL();

            $box = $this-> getDoctrine()
                        ->getRepository('Ff\DemoBundle\Entity\Box')
                        ->findALL();

            $mma = $this-> getDoctrine()
                        ->getRepository('Ff\DemoBundle\Entity\Mma')
                        ->findALL();    

            $judo = $this-> getDoctrine()
                        ->getRepository('Ff\DemoBundle\Entity\Judo')
                        ->findALL();           

            $fechai= $tarea3->getFechaInicio();            
            $fechaf= $tarea3->getFechaFinal(); 




        	return $this->render('FfDemoBundle:Default:estadistica.html.twig', array(
            'form' => $form->createView(),'muay'=> $muay,'boxand'=> $boxand, 'box' => $box, 'mma'=>$mma, 'judo'=>$judo, 
            'fechai'=> $fechai,'fechaf'=> $fechaf,
            ));
        }
        return $this->render('FfDemoBundle:Default:estadistica.html.twig', array(
            'form' => $form->createView(),'muay'=> $muay,'boxand'=> $boxand, 'box' => $box, 'mma'=>$mma, 'judo'=>$judo, 
            'fechai'=> $fechai,'fechaf'=> $fechaf,
            ));

	}




}