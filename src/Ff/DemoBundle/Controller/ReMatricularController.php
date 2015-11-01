<?php

namespace Ff\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ff\DemoBundle\Form\TareaType;
use Ff\DemoBundle\Form\tarea2Type;
use Ff\DemoBundle\Entity\Tarea;
use Ff\DemoBundle\Entity\tarea2;
use Ff\DemoBundle\Entity\Alumnos\Alumno;
use Ff\DemoBundle\Entity\AlumnoPago;
use Ff\DemoBundle\Entity\Muaythai;
use Ff\DemoBundle\Entity\Jjb;
use Ff\DemoBundle\Entity\Judo;
use Ff\DemoBundle\Entity\Mma;
use Ff\DemoBundle\Entity\Box;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ReMatricularController extends Controller
{

	public function mostrar_formulario_rematriculaAction(Request $request, $id){


            $tarea2 = new tarea2();
       
            $tarea2->setFechaInicio(new \DateTime('now'));

            $tarea2->setFechaFinal(new \DateTime('now'));
            
            $form = $this->createForm(new tarea2Type(), $tarea2); 


            $form->handleRequest($request);

            $alumno = $this-> getDoctrine()
                        ->getRepository('Ff\DemoBundle\Entity\Alumnos\Alumno')
                        ->find($id);


            $apellidop=$alumno->getApellidop();
            $apellidom=$alumno->getApellidom();
            $nombre=$alumno->getNombre();




            

            if ($form->isValid())
            {   
                // ingreso de la fecha en la tabla de alumnos

                $em8= $this->getDoctrine()->getManager();
                $alumnoaux = $em8->getRepository('Ff\DemoBundle\Entity\Alumnos\Alumno')->find($id);

                $alumnoaux->setFechaFinal($tarea2->getFechaFinal());
                $em8->flush();


                // primer ingreso en las tablas de disciplina

                 if($tarea2->getDisciplina()== 1){
                    $var= new Muaythai();
                }

                if($tarea2->getDisciplina()== 2){
                    $var = new Jjb();
                }
                
                if($tarea2->getDisciplina()== 3){
                    $var = new Judo();
                }

                if($tarea2->getDisciplina()== 4){
                    $var = new Mma();
                }

                if($tarea2->getDisciplina()== 5){
                    $var = new Box();

                }
                $var->setFechaInicio($tarea2->getFechaInicio());
                $var->setPrecio($tarea2->getPrecio());
                $var->setSexo('3');
                $var->SetVeces($tarea2->getVeces());
                $var->SetIdpago(0);

                $em1 = $this->getDoctrine()->getManager();
                $em1->persist($var);
                $em1->flush();


                // ingreso los datos en la tabla de alumno pagos


                $pagos= new AlumnoPago();
                $pagos->setFechaInicio($tarea2->getFechaInicio());
                $pagos->setIdalumno($id);
                $pagos->setPrecio($tarea2->getPrecio());
                $pagos->setFechaFinal($tarea2->getFechaFinal());
                $pagos->setDisciplina($tarea2->getDisciplina());
                $pagos->SetTipodepago($tarea2->getTipodepago());
                $pagos->SetVeces($tarea2->getVeces());
                $pagos->setVecesasistencia(0);
                $pagos->setVecestotales(0);

                $em3 = $this->getDoctrine()->getManager();
                $em3->persist($pagos);
                $em3->flush();

                        $vecestotales=0;
                        while($tarea2->getFechaFinal()>$tarea2->getFechaInicio()){
                            date_add($tarea2->getFechaInicio(), date_interval_create_from_date_string('1 days'));
                            $vecestotales= $vecestotales+1;
                        }
                        $vecestotales=$vecestotales/7;
                        $vecestotales=$vecestotales*$tarea2->getVeces();
                        $vecestotales= (int)$vecestotales;
               
                $em4 = $this->getDoctrine()->getManager();
                    $query = $em4->createQuery(
                    'SELECT  MAX(a.id) FROM FfDemoBundle:AlumnoPago a WHERE a.idalumno='.$id.'');  

                $consulta = $query->getResult();
                $idaux=  $consulta[0][1];


                $em5= $this->getDoctrine()->getManager();
                $alumnoaux = $em5->getRepository('Ff\DemoBundle\Entity\AlumnoPago')->find($idaux);

                $alumnoaux->setVecestotales($vecestotales);

                $em5->flush();


                // segundo ingreso en disciplinas *************************************************

                if($tarea2->getDisciplina()== 1){

                    $em6 = $this->getDoctrine()->getManager();
                    $query = $em6->createQuery(
                    'SELECT  MAX(a.id) FROM FfDemoBundle:Muaythai a');  
                    $consulta = $query->getResult();
                    $id_encontrado=  $consulta[0][1];

                    $em7= $this->getDoctrine()->getManager();
                    $dis = $em5->getRepository('Ff\DemoBundle\Entity\Muaythai')->find($id_encontrado);
                }

                if($tarea2->getDisciplina()== 2){

                    $em6 = $this->getDoctrine()->getManager();
                    $query = $em6->createQuery(
                    'SELECT  MAX(a.id) FROM FfDemoBundle:Jjb a');  
                    $consulta = $query->getResult();
                    $id_encontrado=  $consulta[0][1];

                    $em7= $this->getDoctrine()->getManager();
                    $dis = $em5->getRepository('Ff\DemoBundle\Entity\Jjb')->find($id_encontrado);
                }
            
                if($tarea2->getDisciplina()== 3){
                    
                    $em6 = $this->getDoctrine()->getManager();
                    $query = $em6->createQuery(
                    'SELECT  MAX(a.id) FROM FfDemoBundle:Judo a');  
                    $consulta = $query->getResult();
                    $id_encontrado=  $consulta[0][1];

                    $em7= $this->getDoctrine()->getManager();
                    $dis= $em5->getRepository('Ff\DemoBundle\Entity\Judo')->find($id_encontrado);

                }

                if($tarea2->getDisciplina()== 4){
                    
                    $em6 = $this->getDoctrine()->getManager();
                    $query = $em6->createQuery(
                    'SELECT  MAX(a.id) FROM FfDemoBundle:Mma a');  
                    $consulta = $query->getResult();
                    $id_encontrado=  $consulta[0][1];

                    $em7= $this->getDoctrine()->getManager();
                    $dis= $em5->getRepository('Ff\DemoBundle\Entity\Mma')->find($id_encontrado);

                }

                if($tarea2->getDisciplina()== 5){
                    
                    $em6 = $this->getDoctrine()->getManager();
                    $query = $em6->createQuery(
                    'SELECT  MAX(a.id) FROM FfDemoBundle:Box a');  
                    $consulta = $query->getResult();
                    $id_encontrado=  $consulta[0][1];

                    $em7= $this->getDoctrine()->getManager();
                    $dis = $em5->getRepository('Ff\DemoBundle\Entity\Box')->find($id_encontrado);

                }
               

                $dis->SetIdpago($idaux);
                $em7->flush();

                            

                return $this->render('FfDemoBundle:Default:verificacionRematricula.html.twig',  array(
                'apellidop' => $apellidop, 'apellidom' => $apellidom, 'nombre' => $nombre,
                ));

            }


            $alumno = $this-> getDoctrine()
                ->getRepository('Ff\DemoBundle\Entity\Alumnos\Alumno')
                ->find($id);

            $alumnop = $this-> getDoctrine()
                ->getRepository('Ff\DemoBundle\Entity\AlumnoPago')
                ->findBy( array('idalumno'  => $id), array('id' => 'DESC') );



       
            return $this->render('FfDemoBundle:Default:rematricula.html.twig', array(
            'form' => $form->createView(),'alumno' => $alumno, 'alumnop' => $alumnop,'id' => $id ));
        }


}