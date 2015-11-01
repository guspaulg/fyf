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
use Ff\DemoBundle\Entity\Boxandfitness;
use Ff\DemoBundle\Entity\Salidas;
use Ff\DemoBundle\Entity\Ingresos;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Session\Session;  

class MatricularController extends Controller 
{


/* ****************************
 *
 * Con este controlador agrego los alumnos nuevos
 * hay ingresos en tres tablas, Alumnos, AlumnosPagos
 * y la tabla de la disciplina
 *
 * ****************************
 */


    public function mostrar_formularioAction(Request $request) 
    {
    	$tarea = new Tarea();
       
        $tarea->setFechaInicio(new \DateTime('now'));

        $tarea->setFechaFinal(new \DateTime('now'));
        
        $form = $this->createForm(new TareaType(), $tarea);	


        $form->handleRequest($request);

        if ($form->isValid())
        {	
        	//***** Insertar datos en la tabla de alumno

            $alumno = new Alumno();
        	$alumno->setApellidop($tarea->getApellidop());
            $alumno->setApellidom($tarea->getApellidom());
        	$alumno->setNombre($tarea->getNombre());
            $alumno->setEmail($tarea->getEmail());
            $alumno->setCumple($tarea->getCumple());
        	$alumno->setDni($tarea->getDni());
            $alumno->setSexo($tarea->getSexo());
        	$alumno->setTelefonof($tarea->getTelefonof());
            $alumno->setTelefonoc($tarea->getTelefonoc());
            $alumno->setFechaFinal($tarea->getFechaFinal());
            $alumno->setFechaFinal($tarea->getFechaFinal());

            $alumno->setFile($tarea->getFile());

            $em_alumno = $this->getDoctrine()->getManager();
            $em_alumno->persist($alumno);
            $em_alumno->flush();


            //***** Insertar datos en la tabla de alumno pagos

            $vecestotales=0;
            $aux=$tarea->getFechaInicio();
            while($tarea->getFechaFinal()>$aux)
            {
                date_add($aux, date_interval_create_from_date_string('1 days'));
                $vecestotales= $vecestotales+1;
            }
            $diasaumentados=$vecestotales;
            while($diasaumentados>0){
                date_add($aux, date_interval_create_from_date_string('-1 days'));
                $diasaumentados=$diasaumentados-1;
            }
            $vecestotales=$vecestotales/7;
            $vecestotales=$vecestotales*$tarea->getVeces();
            $vecestotales= (int)$vecestotales;

            $pagos= new AlumnoPago();
            $pagos->setIdalumno($alumno->getId());
            $pagos->setPrecio($tarea->getPrecio());
            $pagos->setFechaInicio($tarea->getFechaInicio());
            $pagos->setFechaFinal($tarea->getFechaFinal());
            $pagos->setDisciplina($tarea->getDisciplina());
            $pagos->setDisciplina2($tarea->getDisciplina2());
            $pagos->SetTipodepago($tarea->getTipodepago());
            $pagos->SetVeces($tarea->getVeces());
            $pagos->setVecesasistencia(0);
            $pagos->setVecestotales($vecestotales);       

            $em_pago = $this->getDoctrine()->getManager();
            $em_pago->persist($pagos);
            $em_pago->flush();

            //***** Ingreso en las tablas de disciplina

            if($tarea->getDisciplina()== 'Box'){ $d = new Box();} 
            
            if($tarea->getDisciplina()== 'Thai'){ $d = new Muaythai();}

            if($tarea->getDisciplina()== 'Mma'){ $d = new Mma(); }

            if($tarea->getDisciplina()== 'Box-fit'){ $d = new Boxandfitness(); }
            
            if($tarea->getDisciplina()== 'Judo'){ $d = new Judo();} 

            $d->setFechaInicio($tarea->getFechaInicio());
            $d->setPrecio($tarea->getPrecio());
            $d->setSexo($tarea->getSexo());
            $d->SetVeces($tarea->getVeces());
            $d->SetIdpago($pagos->getId());

            $em_d = $this->getDoctrine()->getManager();
            $em_d->persist($d);
            $em_d->flush();      


            // ***** Resultado Luego de agregar con exito el alumno

            return $this->redirect($this->generateUrl('alumno',array('id' => $alumno->getId())));

        }
       
       return $this->render('FfDemoBundle:Default:Formulario.html.twig', array(
            'form' => $form->createView(),));
        
    }


}