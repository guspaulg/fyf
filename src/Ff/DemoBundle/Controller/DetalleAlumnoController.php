<?php

namespace Ff\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ff\DemoBundle\Form\TareaType;
use Ff\DemoBundle\Form\Tarea2Type;
use Ff\DemoBundle\Entity\Tarea;
use Ff\DemoBundle\Entity\Tarea2;
use Ff\DemoBundle\Entity\Alumnos\Alumno;
use Ff\DemoBundle\Entity\AlumnoPago;
use Ff\DemoBundle\Entity\Muaythai;
use Ff\DemoBundle\Entity\Jjb;
use Ff\DemoBundle\Entity\Judo;
use Ff\DemoBundle\Entity\Mma;
use Ff\DemoBundle\Entity\Box;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Ff\DemoBundle\Entity\Boxandfitness;

class DetalleAlumnoController extends Controller
{

	    public function mostrar_alumnoAction(Request $request , $id){

                $alumno = $this-> getDoctrine()
                    ->getRepository('Ff\DemoBundle\Entity\Alumnos\Alumno')
                    ->find($id);

                $alumnop = $this-> getDoctrine()
                    ->getRepository('Ff\DemoBundle\Entity\AlumnoPago')
                    ->findBy(
                        array('idalumno'  => $id),
                        array('id' => 'DESC')
                    );

                $tarea2 = new Tarea2();
                $tarea2->setFechaInicio(new \DateTime('now'));
                $tarea2->setFechaFinal(new \DateTime('now'));
                $form = $this->createForm(new Tarea2Type(), $tarea2); 
                $form->handleRequest($request);


                if ($form->isValid())
                {   
                    // **** actualizo la fecha final en alumnos

                    $em= $this->getDoctrine()->getManager();
                    $alumnoaux = $em->getRepository('Ff\DemoBundle\Entity\Alumnos\Alumno')->find($id);
                    $alumnoaux->setFechaFinal($tarea2->getFechafinal());
                    $em->flush();

                    // **** ingreso en AlumnosPagos ***********

                    $vecestotales=0;
                    
                    while($tarea2->getFechaFinal()>$tarea2->getFechaInicio()){
                        date_add($tarea2->getFechaInicio(), date_interval_create_from_date_string('1 days'));
                        $vecestotales= $vecestotales+1;
                    }
                    $diasaumentados=$vecestotales;
                    $vecestotales=$vecestotales/7;
                    $vecestotales=$vecestotales*$tarea2->getVeces();
                    $vecestotales= (int)$vecestotales;

                    while($diasaumentados>0){
                        date_add($tarea2->getFechaInicio(), date_interval_create_from_date_string('-1 days'));
                        $diasaumentados=$diasaumentados-1;
                    }

                    $pagos= new AlumnoPago();
                    $pagos->setIdalumno($id);
                    $pagos->setPrecio($tarea2->getPrecio());
                    $pagos->setFechaFinal($tarea2->getFechaFinal());
                    $pagos->setFechaInicio($tarea2->getFechaInicio());
                    $pagos->setDisciplina($tarea2->getDisciplina());
                    $pagos->setDisciplina2($tarea2->getDisciplina2());
                    $pagos->SetTipodepago($tarea2->getTipodepago());
                    $pagos->SetVeces($tarea2->getVeces());
                    $pagos->setVecesasistencia(0);
                    $pagos->setVecestotales($vecestotales);

                    $em_pago = $this->getDoctrine()->getManager();
                    $em_pago->persist($pagos);
                    $em_pago->flush();

                     //***** Ingreso en las tablas de disciplina

                    if($tarea2->getDisciplina()== 'Box'){ $d = new Box();} 
                    
                    if($tarea2->getDisciplina()== 'Thai'){ $d = new Muaythai();}

                    if($tarea2->getDisciplina()== 'Mma'){ $d = new Mma(); }

                    if($tarea2->getDisciplina()== 'Box-fit'){ $d = new Boxandfitness(); }
                    
                    if($tarea2->getDisciplina()== 'Judo'){ $d = new Judo();} 

                    $d->setFechaInicio($tarea2->getFechaInicio());
                    $d->setPrecio($tarea2->getPrecio());
                    $d->setSexo('3');
                    $d->SetVeces($tarea2->getVeces());
                    $d->SetIdpago($pagos->getId());

                    $em_d = $this->getDoctrine()->getManager();
                    $em_d->persist($d);
                    $em_d->flush();      
                   


                    //*** termino de ingresar los datos *****

                    $alumno = $this-> getDoctrine()
                    ->getRepository('Ff\DemoBundle\Entity\Alumnos\Alumno')
                    ->find($id);

                    $alumnop = $this-> getDoctrine()
                        ->getRepository('Ff\DemoBundle\Entity\AlumnoPago')
                        ->findBy(
                            array('idalumno'  => $id),
                            array('id' => 'DESC')
                        ); 

                    return $this->render('FfDemoBundle:Default:alumno.html.twig', array(
                    'form' => $form->createView(),'alumno' => $alumno,'alumnop' => $alumnop, 'id' => $id));

                }


                return $this->render('FfDemoBundle:Default:alumno.html.twig', array(
                    'form' => $form->createView(),'alumno' => $alumno,'alumnop' => $alumnop, 'id' => $id));
        }

        public function mostrar_alumno_asistenciaAction($id){

                $alumno = $this-> getDoctrine()
                    ->getRepository('Ff\DemoBundle\Entity\Alumnos\Alumno')
                    ->find($id);

                $alumnop = $this-> getDoctrine()
                    ->getRepository('Ff\DemoBundle\Entity\AlumnoPago')
                    ->findBy(
                        array('idalumno'  => $id),
                        array('id' => 'DESC')
                    );

                /////*****************************************************************
                    
                $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery(
                    'SELECT  MAX(a.id) FROM FfDemoBundle:AlumnoPago a WHERE a.idalumno='.$id.'');  

                $consulta = $query->getResult();
                $idUltPago=  $consulta[0][1];


                $em2 = $this->getDoctrine()->getManager();
                $alumnop1 = $em2->getRepository('Ff\DemoBundle\Entity\AlumnoPago')->find($idUltPago);
                    

                $asistencia = $alumnop1->getVecesasistencia();

                $asistencia = $asistencia + 1;

                $alumnop1->setVecesasistencia($asistencia);

                $em2->flush();
                      
                return $this->redirect($this->generateUrl('alumno',array('id' => $id)));
        }


        /* aqui empieza el controlador que edita los datos del alumno

        *************************
        ************************
        *************************


        */





        public function editarAction(Request $request, $id){

            $em = $this->getDoctrine()->getManager();
            $alumno = $em->getRepository('Ff\DemoBundle\Entity\Alumnos\Alumno')->find($id);

            $apellidop=$alumno->getApellidop();
            $apellidom=$alumno->getApellidom();
            $nombre=$alumno->getNombre();

            $alumnop = $this-> getDoctrine()
                    ->getRepository('Ff\DemoBundle\Entity\AlumnoPago')
                    ->findBy(
                        array('idalumno'  => $id),
                        array('id' => 'DESC')
                    );

            //************************************************************************
                    
            $em1 = $this->getDoctrine()->getManager();
                    $query = $em1->createQuery(
                    'SELECT  MAX(a.id) FROM FfDemoBundle:AlumnoPago a WHERE a.idalumno='.$id.'');  

                $consulta = $query->getResult();
                $idUltPago=  $consulta[0][1];


            $em2 = $this->getDoctrine()->getManager();
            $alumnop1 = $em2->getRepository('Ff\DemoBundle\Entity\AlumnoPago')->find($idUltPago);

            //***********************************************************************  

            $tarea = new Tarea();
            $tarea->setNombre($alumno->getNombre());
            $tarea->setApellidop($alumno->getApellidop());
            $tarea->setApellidom($alumno->getApellidom());
            $tarea->setDni($alumno->getDni());
            $tarea->setTelefonoc($alumno->getTelefonoc());
            $tarea->setTelefonof($alumno->getTelefonof()); 
            $tarea->setEmail($alumno->getEmail()); 
            $tarea->setCumple($alumno->getCumple()); 
            $tarea->setSexo($alumno->getSexo());
            $tarea->setDisciplina($alumnop1->getDisciplina());
            $tarea->setDisciplina2($alumnop1->getDisciplina2());
            $var = $alumnop1->getDisciplina();
            $tarea->setFechaFinal($alumnop1->getFechafinal());
            $tarea->setFechaInicio($alumnop1->getFechainicio());
            $tarea->setPrecio($alumnop1->getPrecio());
            $tarea->SetTipodepago($alumnop1->getTipodepago());
            $tarea->SetVeces($alumnop1->getVeces());
            
            $form = $this->createForm(new TareaType(), $tarea); 
            $form->handleRequest($request);

            if ($form->isValid())
            {
                $alumno->setNombre($tarea->getNombre());
                $alumno->setApellidop($tarea->getApellidop());
                $alumno->setApellidom($tarea->getApellidom());
                $alumno->setDni($tarea->getDni());
                $alumno->setTelefonoc($tarea->getTelefonoc());
                $alumno->setEmail($tarea->getEmail()); 
                $alumno->setCumple($tarea->getCumple());
                $alumno->setTelefonof($tarea->getTelefonof()); 
                $alumno->setFechafinal($tarea->getFechaFinal());
                $alumno->setFile($tarea->getFile());
                $alumnop1->setDisciplina($tarea->getDisciplina());
                $alumnop1->setDisciplina2($tarea->getDisciplina2());
                $alumnop1->SetVeces($tarea->getVeces());



                $em->flush();
                $em2->flush();

                //***********************************************************************

                    $em4 = $this->getDoctrine()->getManager();
                     
                    if( ($var== 1)||($var=='Thai') ){     
                         $query = $em4->createQuery(
                         'SELECT  MAX(a.id) FROM FfDemoBundle:Muaythai a WHERE a.idpago='.$idUltPago.''); 
                         $consulta= $query->getResult();
                         $auxid=$consulta[0][1];

                         $em5 = $this->getDoctrine()->getManager();
                         $disciplina = $em5->getRepository('Ff\DemoBundle\Entity\Muaythai')->find($auxid);
                    }

                    if ($var== 2) {
                         $query = $em4->createQuery(
                        'SELECT  MAX(a.id) FROM FfDemoBundle:Jjb a WHERE a.idpago='.$idUltPago.''); 
                         $consulta= $query->getResult();
                         $auxid=$consulta[0][1];

                         $em5 = $this->getDoctrine()->getManager();
                         $disciplina = $em5->getRepository('Ff\DemoBundle\Entity\Jjb')->find($auxid);
                    }
                    
                    if( ($var== 3) || ($var=='Judo') ){
                         $query = $em4->createQuery(
                        'SELECT  MAX(a.id) FROM FfDemoBundle:Judo a WHERE a.idpago='.$idUltPago.'');
                         $consulta= $query->getResult();
                         $auxid=$consulta[0][1];

                         $em5 = $this->getDoctrine()->getManager();
                         $disciplina = $em5->getRepository('Ff\DemoBundle\Entity\Judo')->find($auxid);
                    }

                    if( ($var == 4)||($var=='Mma') ){
                         $query = $em4->createQuery(
                        'SELECT  MAX(a.id) FROM FfDemoBundle:Mma a WHERE a.idpago='.$idUltPago.''); 
                         $consulta= $query->getResult();
                         $auxid=$consulta[0][1];

                         $em5 = $this->getDoctrine()->getManager();
                         $disciplina = $em5->getRepository('Ff\DemoBundle\Entity\Mma')->find($auxid);
                    }

                    if( ($var== 5)||($var=='Box') ){
                         $query = $em4->createQuery(
                        'SELECT  MAX(a.id) FROM FfDemoBundle:Box a WHERE a.idpago='.$idUltPago.''); 
                         $consulta= $query->getResult();
                         $auxid=$consulta[0][1];

                         $em5 = $this->getDoctrine()->getManager();
                         $disciplina = $em5->getRepository('Ff\DemoBundle\Entity\box')->find($auxid);

                    }

                    if($var=='Box-fit'){
                         $query = $em4->createQuery(
                        'SELECT  MAX(a.id) FROM FfDemoBundle:Boxandfitness a WHERE a.idpago='.$idUltPago.''); 
                         $consulta= $query->getResult();
                         $auxid=$consulta[0][1];

                         $em5 = $this->getDoctrine()->getManager();
                         $disciplina = $em5->getRepository('Ff\DemoBundle\Entity\Boxandfitness')->find($auxid);

                    }

                   
                       
                    if($var== $tarea->getDisciplina() ){ 

                        $disciplina->SetPrecio($tarea->getPrecio());
                        $disciplina->SetFechainicio($tarea->getFechaInicio());
                        $disciplina->SetSexo($tarea->getSexo());
                        $em5->flush();
                    }
                    else{

                        $disciplina->SetPrecio(0);
                        $disciplina->setSexo(4);
                        $em5->flush();


                        if($tarea->getDisciplina()== 'Thai'){
                            $var= new Muaythai();
                        }
                        if($tarea->getDisciplina()== 'Box-fit'){
                            $var = new Boxandfitness();
                        }
                        if($tarea->getDisciplina()== 'Judo'){
                            $var = new Judo();
                        }
                        if($tarea->getDisciplina()== 'Mma'){
                            $var = new Mma();
                        }
                        if($tarea->getDisciplina()== 'Box'){
                            $var = new Box();
                        }
                            $var->setFechaInicio($tarea->getFechaInicio());
                            $var->setPrecio($tarea->getPrecio());
                            $var->setSexo($tarea->getSexo());
                            $var->SetVeces($tarea->getVeces());
                            $var->SetIdpago($idUltPago);

                            $em6 = $this->getDoctrine()->getManager();
                            $em6->persist($var);
                            $em6->flush();

                    }
                


                    //******************************************************

                    $vecestotales=0;
                        while($tarea->getFechaFinal()>$tarea->getFechaInicio()){
                            date_add($tarea->getFechaInicio(), date_interval_create_from_date_string('1 days'));
                            $vecestotales= $vecestotales+1;
                        }
                        $vecestotales=$vecestotales/7;
                        $vecestotales=$vecestotales*$tarea->getVeces();
                        $vecestotales= (int)$vecestotales;


                $em3= $this->getDoctrine()->getManager();
                $alumnoaux = $em3->getRepository('Ff\DemoBundle\Entity\AlumnoPago')->find($idUltPago);

                $alumnoaux->setVecestotales($vecestotales);

                $em3->flush();

                return $this->redirect($this->generateUrl('alumno',array('id' => $id)));
                
            }
        return $this->render('FfDemoBundle:Default:editar.html.twig', array(
            'form' => $form->createView(),'apellidop' => $apellidop, 'apellidom' => $apellidom, 'nombre' => $nombre,));

        }

}
