<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'Ff\\DemoBundle\\Controller\\LoginController::entrarAction',  '_route' => 'login',);
            }

            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

        }

        if (0 === strpos($pathinfo, '/general')) {
            // ff_demo_homepage
            if ($pathinfo === '/generalinicio') {
                return array (  '_controller' => 'Ff\\DemoBundle\\Controller\\DefaultController::mostrarAction',  '_route' => 'ff_demo_homepage',);
            }

            // Vencer
            if (rtrim($pathinfo, '/') === '/generalvencer') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Vencer');
                }

                return array (  '_controller' => 'Ff\\DemoBundle\\Controller\\DefaultController::mostrar_vencerAction',  '_route' => 'Vencer',);
            }

            // Formulario
            if (rtrim($pathinfo, '/') === '/generalformulario') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Formulario');
                }

                return array (  '_controller' => 'Ff\\DemoBundle\\Controller\\MatricularController::mostrar_formularioAction',  '_route' => 'Formulario',);
            }

            // Cuentas
            if (rtrim($pathinfo, '/') === '/generalcuentas') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Cuentas');
                }

                return array (  '_controller' => 'Ff\\DemoBundle\\Controller\\DefaultController::mostrarcuentasAction',  '_route' => 'Cuentas',);
            }

            // Salida
            if (rtrim($pathinfo, '/') === '/generalsalida') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Salida');
                }

                return array (  '_controller' => 'Ff\\DemoBundle\\Controller\\DefaultController::mostrar_IngresarSalidaAction',  '_route' => 'Salida',);
            }

            // Ingreso
            if (rtrim($pathinfo, '/') === '/generalingreso') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Ingreso');
                }

                return array (  '_controller' => 'Ff\\DemoBundle\\Controller\\DefaultController::mostrar_IngresarIngresoAction',  '_route' => 'Ingreso',);
            }

            if (0 === strpos($pathinfo, '/generalalumno')) {
                // alumno
                if (preg_match('#^/generalalumno/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'alumno')), array (  '_controller' => 'Ff\\DemoBundle\\Controller\\DetalleAlumnoController::mostrar_alumnoAction',));
                }

                // asistencia
                if (0 === strpos($pathinfo, '/generalalumno2') && preg_match('#^/generalalumno2/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'asistencia')), array (  '_controller' => 'Ff\\DemoBundle\\Controller\\DetalleAlumnoController::mostrar_alumno_asistenciaAction',));
                }

            }

        }

        // editar
        if (0 === strpos($pathinfo, '/admineditar') && preg_match('#^/admineditar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editar')), array (  '_controller' => 'Ff\\DemoBundle\\Controller\\DetalleAlumnoController::editarAction',));
        }

        if (0 === strpos($pathinfo, '/general')) {
            // estadistica
            if (rtrim($pathinfo, '/') === '/generalestadistica') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'estadistica');
                }

                return array (  '_controller' => 'Ff\\DemoBundle\\Controller\\EstadisticaController::mostrar_formularioAction',  '_route' => 'estadistica',);
            }

            // Busqueda
            if (rtrim($pathinfo, '/') === '/generalbusqueda') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Busqueda');
                }

                return array (  '_controller' => 'Ff\\DemoBundle\\Controller\\BusquedaController::mostrar_formularioAction',  '_route' => 'Busqueda',);
            }

        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
