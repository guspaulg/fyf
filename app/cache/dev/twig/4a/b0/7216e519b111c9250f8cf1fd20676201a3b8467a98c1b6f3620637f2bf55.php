<?php

/* FfDemoBundle:Default:rematricula.html.twig */
class __TwigTemplate_4ab07216e519b111c9250f8cf1fd20676201a3b8467a98c1b6f3620637f2bf55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>

<title>Fight and Fitness</title>  

    <Link  href = \"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/detalle_alumno.css"), "html", null, true);
        echo "\" rel = \"stylesheet\" type = \"text/css\"  />

    title>Fight and Fitness</title>


    <link href = \"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link href = \"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/lomio.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" >
    <link href = \"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" >

    <script src = \"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://code.jquery.com/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src = \"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

</head>

<body>

    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container-fluid\">
        <a href=\"http://www.incuba.pe\"><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/logo4.png"), "html", null, true);
        echo "\" class=\"logo\"></a>
        <div class=\"navbar-header\">
          <a class=\"navbar-brand\" href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("logout", array("slug" => ""));
        echo "\" >Cerrar Sesión</a>
        </div>
        
      </div>
    </nav>

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-3 col-md-2 sidebar\">
                  <ul class=\"nav nav-sidebar\">
                        <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("ff_demo_homepage", array("slug" => ""));
        echo "\">Inicio <span class=\"sr-only\">(current)</span></a></li>
                        
                        <li><a href= \"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("Formulario", array("slug" => ""));
        echo "\"  >Matricular</a></li>

                        <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("Vencer", array("slug" => ""));
        echo "\">Vencimientos</a></li>
                        <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("estadistica", array("slug" => ""));
        echo "\">Reportes</a></li>
                        <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("Busqueda", array("slug" => ""));
        echo "\">Busqueda</a></li>
                  </ul>
            
            </div>

            <div class=\"col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-2 main\">

                <div id=\"cuadro2\">

                <div>
                    <div id=\"texto\">Pago al día</div> 
                    <div id=\"verde\"></div> 
                </div>
                
                <div>
                    <div id=\"texto\">Pago por vencer</div>
                    <div id=\"rojo\"></div> 
                </div>
              
                <div>
                    <div id=\"texto\">Pago Vencido</div>
                    <div id=\"negro\"></div> 
                </div>  
                <br><br>

                <a title=\"MATRICULAR\" href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rematricula", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">  
                    <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/boton_1.png"), "html", null, true);
        echo "\"/>
                </a>

                
                <a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("alumno2", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\"> 
                    <img title=\"ASISTENCIA\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/boton_3.png"), "html", null, true);
        echo "\" />
                </a>    

                <a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editar", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">  
                    <img title=\"EDITAR ALUMNO\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/boton_5.png"), "html", null, true);
        echo "\" />
                </a>

                <div class=\"nombre\">
                
                    <p>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "apellidop"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "apellidom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "nombre"), "html", null, true);
        echo "
                    
                    ";
        // line 85
        if ((twig_date_converter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "fechafinal")) > twig_date_converter($this->env))) {
            // line 86
            echo "                            
                            ";
            // line 87
            if ((twig_date_converter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "fechafinal")) < twig_date_converter($this->env, "+14days"))) {
                // line 88
                echo "
                                <div id=\"rojo\"></div> 

                            ";
            } else {
                // line 91
                echo "  

                                <div id=\"verde\"> </div> 

                            ";
            }
            // line 96
            echo "
                        ";
        }
        // line 98
        echo "
                        ";
        // line 99
        if ((twig_date_converter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "fechafinal")) < twig_date_converter($this->env))) {
            // line 100
            echo "                            <div id=\"negro\"> </div> 
                    
                    ";
        }
        // line 103
        echo "
                    </p>

                    <br>
                </div>

                <hr>

                <div>
                    <div id=\"casistencia\">
                        <div  class=\"datos\">
                            Asistencias a la fecha
                        </div>
                        <div class=\"asistencia\">
                            ";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "vecesasistencia"), "html", null, true);
        echo "
                        </div>

                    </div> 

                    <div id=\"casistencia2\">
                        <div class=\"datos\">
                            de un total de:
                        </div>
                        <div class=\"asistencia\">
                            ";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "vecestotales"), "html", null, true);
        echo "
                        </div>

                    </div> 

                </div>

                <div class=\"datos\">
                    <p>
                        Dni: ";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "dni"), "html", null, true);
        echo " <br>
                        Télefono Fijo: ";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "telefonof"), "html", null, true);
        echo " <br>
                        Télefono Celular: ";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "telefonoc"), "html", null, true);
        echo " <br>
                        Correo: ";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "email"), "html", null, true);
        echo " <br>
                        Cumpleaños: ";
        // line 140
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "cumple"), "m/d/Y"), "html", null, true);
        echo " <br>
                    </p> 
                </div><hr>

                <div class=\"datos3\">

                    <table align=\"center\">
                        <div class=\"nombre\"> Historial del Alumno</div> <br>
                        <tr>
                            <td class=\"fila1\"> Fecha inicio</td>
                            <td class=\"fila1\"> Fecha Final</td>
                            <td class=\"fila1\"> Disciplina</td>
                            <td class=\"fila2\"> Precio</td>
                            <td class=\"fila1\"> T.Pago </td>
                        </tr>

                        
                            ";
        // line 157
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 158
            echo "
                                <tr>

                                    <td class=\"datos\"> ";
            // line 161
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "fechainicio"), "d/m/Y"), "html", null, true);
            echo "</td>
                                    <td class=\"datos\"> ";
            // line 162
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "fechafinal"), "d/m/Y"), "html", null, true);
            echo "</td>
                                    ";
            // line 163
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "disciplina") == "1")) {
                // line 164
                echo "                                    <td class=\"datos\">Muaythai</td>
                                    ";
            }
            // line 166
            echo "                                    ";
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "disciplina") == "2")) {
                // line 167
                echo "                                    <td class=\"datos\">Jiu Jitsu</td>
                                    ";
            }
            // line 169
            echo "                                    ";
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "disciplina") == "3")) {
                // line 170
                echo "                                    <td class=\"datos\">Judo</td>
                                    ";
            }
            // line 172
            echo "                                    ";
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "disciplina") == "4")) {
                // line 173
                echo "                                    <td class=\"datos\">MMA</td>
                                    ";
            }
            // line 175
            echo "                                    ";
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "disciplina") == "5")) {
                // line 176
                echo "                                    <td class=\"datos\">Box</td>
                                    ";
            }
            // line 178
            echo "                                    <td class=\"datos\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "precio"), "html", null, true);
            echo "</td>
                                    ";
            // line 179
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "tipodepago") == "1")) {
                // line 180
                echo "                                    <td class=\"datos\">Efectivo</td>
                                    ";
            }
            // line 182
            echo "                                    ";
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "tipodepago") == "2")) {
                // line 183
                echo "                                    <td class=\"datos\">Tarjeta</td>
                                    ";
            }
            // line 185
            echo "
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "
                        

                    </table>


                    </div>  
            
                </div>



            </div>  





            <div class=\"col-sm-5 col-sm-offset-1 col-md-5 main\">

                ";
        // line 208
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 209
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
             
                <div class=\"titulo_form\"> Nueva Matricula del Alumno:

                

                </div>
                         
                ";
        // line 217
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

            </div>

        </div>
    </div>        



</body>


</html>";
    }

    public function getTemplateName()
    {
        return "FfDemoBundle:Default:rematricula.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 217,  383 => 209,  379 => 208,  357 => 188,  349 => 185,  345 => 183,  342 => 182,  338 => 180,  336 => 179,  331 => 178,  327 => 176,  324 => 175,  320 => 173,  317 => 172,  313 => 170,  310 => 169,  306 => 167,  303 => 166,  299 => 164,  297 => 163,  293 => 162,  289 => 161,  284 => 158,  280 => 157,  260 => 140,  256 => 139,  252 => 138,  248 => 137,  244 => 136,  232 => 127,  219 => 117,  203 => 103,  198 => 100,  196 => 99,  193 => 98,  189 => 96,  182 => 91,  176 => 88,  174 => 87,  171 => 86,  169 => 85,  160 => 83,  152 => 78,  148 => 77,  142 => 74,  138 => 73,  131 => 69,  127 => 68,  99 => 43,  95 => 42,  91 => 41,  86 => 39,  81 => 37,  68 => 27,  63 => 25,  52 => 17,  48 => 16,  43 => 14,  39 => 13,  35 => 12,  27 => 7,  19 => 1,);
    }
}
