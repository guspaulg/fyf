<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ff\\DemoBundle\\Controller\\LoginController::entrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ff_demo_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ff\\DemoBundle\\Controller\\DefaultController::mostrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/generalinicio',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Vencer' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ff\\DemoBundle\\Controller\\DefaultController::mostrar_vencerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/generalvencer/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Formulario' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ff\\DemoBundle\\Controller\\MatricularController::mostrar_formularioAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/generalformulario/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Cuentas' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ff\\DemoBundle\\Controller\\DefaultController::mostrarcuentasAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/generalcuentas/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Salida' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ff\\DemoBundle\\Controller\\DefaultController::mostrar_IngresarSalidaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/generalsalida/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Ingreso' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ff\\DemoBundle\\Controller\\DefaultController::mostrar_IngresarIngresoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/generalingreso/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'alumno' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ff\\DemoBundle\\Controller\\DetalleAlumnoController::mostrar_alumnoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/generalalumno',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'asistencia' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ff\\DemoBundle\\Controller\\DetalleAlumnoController::mostrar_alumno_asistenciaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/generalalumno2',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ff\\DemoBundle\\Controller\\DetalleAlumnoController::editarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admineditar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'estadistica' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ff\\DemoBundle\\Controller\\EstadisticaController::mostrar_formularioAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/generalestadistica/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Busqueda' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ff\\DemoBundle\\Controller\\BusquedaController::mostrar_formularioAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/generalbusqueda/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
