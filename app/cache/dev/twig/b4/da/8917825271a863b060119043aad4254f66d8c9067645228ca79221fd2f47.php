<?php

/* FfDemoBundle:Default:alumno.html.twig */
class __TwigTemplate_b4da8917825271a863b060119043aad4254f66d8c9067645228ca79221fd2f47 extends Twig_Template
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

\t<Link  href = \"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/detalle_alumno.css"), "html", null, true);
        echo "\" rel = \"stylesheet\" type = \"text/css\"  />

\ttitle>Fight and Fitness</title>


 \t<link href = \"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
\t<link href = \"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/lomio.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" >
\t<link href = \"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" >

\t<script src = \"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://code.jquery.com/jquery.js"), "html", null, true);
        echo "\"></script>
\t<script src = \"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

\t\t<script type=\"text/javascript\">

\t    function mostrar(){
\t        document.getElementById('rematricula').style.display='block';
\t    }
\t    function mostrar2(){
\t        document.getElementById('rematricula').style.display='none';
\t    }

\t</script>

</head>

<body>

\t<nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container-fluid\">
      \t<a href=\"http://www.incuba.pe\"><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/logo4.png"), "html", null, true);
        echo "\" class=\"logo\"></a>
        <div class=\"navbar-header\">
          <a class=\"navbar-brand\" href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("logout", array("slug" => ""));
        echo "\" >Cerrar Sesión</a>
        </div>
        
      </div>
    </nav>

    <div class=\"container-fluid\">
      \t<div class=\"row\">
\t        <div class=\"col-sm-3 col-md-2 sidebar\">
\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("ff_demo_homepage", array("slug" => ""));
        echo "\">Inicio <span class=\"sr-only\">(current)</span></a></li>
\t\t\t            
\t\t\t            <li><a href= \"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("Formulario", array("slug" => ""));
        echo "\"  >Matricular</a></li>
\t\t\t            <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("Vencer", array("slug" => ""));
        echo "\">Vencimientos</a></li>
\t\t\t            <li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("estadistica", array("slug" => ""));
        echo "\">Reportes</a></li>
\t\t          </ul>
\t        
\t        </div>

\t        <div class=\"col-md-5 col-md-offset-2\">

\t        \t<div id=\"cuadro2\">

\t    \t\t<a title=\"ASISTENCIA\" href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asistencia", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"aimagen\">\t
\t    \t\t\t<img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/asistencia.png"), "html", null, true);
        echo "\"/>
\t    \t\t</a>
\t\t\t\t
\t\t\t\t<a title=\"EDITAR\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editar", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"aimagen\">\t
\t    \t\t\t<img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/actualizar.png"), "html", null, true);
        echo "\"/>
\t    \t\t</a>

\t    \t\t<a title=\"MATRICULAR\" href=\"#\" class=\"aimagen\" onclick=\"mostrar()\">\t
\t    \t\t\t<img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/rematricula.png"), "html", null, true);
        echo "\"/>
\t    \t\t</a>
\t\t    \t
\t\t    \t<div class=\"espacio\">
\t\t    \t\t";
        // line 74
        if (($this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "path") == "general.png")) {
            // line 75
            echo "\t\t\t    \t\t<div class=\"col-md-5\">
\t\t\t    \t\t\t<img class=\"foto\" src=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("fotos/" . $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "path")) . "")), "html", null, true);
            echo "\"/>\t
\t\t\t    \t\t</div>
\t\t\t    \t";
        } else {
            // line 79
            echo "\t\t\t    \t\t<div class=\"col-md-5\">
\t\t\t    \t\t\t<img class=\"foto\" src=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((((("fotos/" . $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "id")) . ".") . $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "path")) . "")), "html", null, true);
            echo "\"/>\t
\t\t\t    \t\t</div>
\t\t\t    \t";
        }
        // line 83
        echo "
\t\t    \t\t<div class=\"col-md-7\">
\t\t\t    \t\t<div class=\"nombre\">
\t\t\t    \t\t
\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t";
        // line 89
        if ((twig_date_converter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "fechafinal")) > twig_date_converter($this->env))) {
            // line 90
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 91
            if ((twig_date_converter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "fechafinal")) < twig_date_converter($this->env, "+10days"))) {
                // line 92
                echo "
\t\t\t\t\t\t\t\t\t<div class=\"fila_1_r\"> ";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "apellidop"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "apellidom"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "nombre"), "html", null, true);
                echo " </div> 

\t\t\t\t\t\t\t\t\t";
            } else {
                // line 95
                echo "\t

\t\t\t\t\t\t\t\t\t<div class=\"fila_1_v\"> ";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "apellidop"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "apellidom"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "nombre"), "html", null, true);
                echo " </div> 

\t\t\t\t\t\t\t\t\t";
            }
            // line 100
            echo "
\t\t\t\t\t\t\t";
        }
        // line 102
        echo "
\t\t\t\t\t\t\t";
        // line 103
        if ((twig_date_converter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "fechafinal")) < twig_date_converter($this->env))) {
            // line 104
            echo "
\t\t\t\t\t\t\t\t\t<div class=\"fila_1_n\"> ";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "apellidop"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "apellidom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "nombre"), "html", null, true);
            echo " </div> 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        }
        // line 108
        echo "
\t\t\t\t    \t</div>

\t\t\t\t    \t<div class=\"datos2\">
\t\t\t\t\t    \t<p>
\t\t\t\t\t    \t\tDni: ";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "dni"), "html", null, true);
        echo " <br>
\t\t\t\t\t    \t\tTélefono Fijo: ";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "telefonof"), "html", null, true);
        echo " <br>
\t\t\t\t\t    \t\tTélefono Celular: ";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "telefonoc"), "html", null, true);
        echo " <br>
\t\t\t\t\t    \t\tCorreo: ";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "email"), "html", null, true);
        echo " <br>
\t\t\t\t\t    \t\tCumpleaños: ";
        // line 117
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "cumple"), "m/d/Y"), "html", null, true);
        echo " <br>
\t\t\t\t\t    \t</p> 
\t\t\t\t    \t</div>
\t\t\t\t    </div>
\t\t\t\t</div>


\t\t    \t<hr>

\t\t    \t<div>
\t\t    \t\t<div id=\"casistencia\">
\t\t    \t\t\t<div  class=\"datos\">
\t\t    \t\t\t\tAsistencias a la fecha
\t\t    \t\t\t</div>
\t\t    \t\t\t<div class=\"asistencia\">
\t\t    \t\t\t\t";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "vecesasistencia"), "html", null, true);
        echo "
\t\t    \t\t\t</div>

\t\t    \t\t</div> 

\t\t    \t\t<div id=\"casistencia2\">
\t\t    \t\t\t<div class=\"datos\">
\t\t    \t\t\t\tde un total de:
\t\t    \t\t\t</div>
\t\t    \t\t\t<div class=\"asistencia\">
\t\t    \t\t\t\t";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "vecestotales"), "html", null, true);
        echo "
\t\t    \t\t\t</div>

\t\t    \t\t</div> 

\t\t    \t</div>

\t\t    \t

\t\t    \t<h2 class=\"sub-header\">Historial de Matrículas</h2>
         \t\t<div class=\"table-responsive\">

\t\t\t    \t<table class=\"table table-striped\">

\t\t              \t<thead>
\t\t\t                <tr>
\t\t\t                  <th>Fecha Inicio</th>
\t\t\t                  <th>Feha Final</th>
\t\t\t                  <th>Disciplina</th>
\t\t\t                  <th>Precio</th>
\t\t\t                  <th>Tipo Pago</th>
\t\t\t                </tr>
\t\t              \t</thead>

\t\t              \t<tbody>
\t                
\t\t              \t\t";
        // line 168
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 169
            echo "
\t\t\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t\t\t<td > ";
            // line 172
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "fechainicio"), "d/m/Y"), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t\t\t<td > ";
            // line 174
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "fechafinal"), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t
";
            // line 176
            if (((((($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "disciplina") == "1") || ($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "disciplina") == "2")) || ($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "disciplina") == "3")) || ($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "disciplina") == "4")) || ($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "disciplina") == "5"))) {
                // line 177
                echo "
\t";
                // line 178
                if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "disciplina") == "1")) {
                    echo "  ";
                    $context["disciplina"] = "Muay thai";
                    echo " ";
                }
                // line 179
                echo "\t";
                if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "disciplina") == "2")) {
                    echo "  ";
                    $context["disciplina"] = "Jiu Jitsu";
                    echo " ";
                }
                // line 180
                echo "\t";
                if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "disciplina") == "3")) {
                    echo "  ";
                    $context["disciplina"] = "Judo";
                    echo " ";
                }
                // line 181
                echo "\t";
                if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "disciplina") == "4")) {
                    echo "  ";
                    $context["disciplina"] = "Mma";
                    echo " ";
                }
                // line 182
                echo "\t";
                if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "disciplina") == "5")) {
                    echo "  ";
                    $context["disciplina"] = "Box";
                    echo " ";
                }
                // line 183
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
";
            } else {
                // line 185
                echo "
\t";
                // line 186
                $context["disciplina"] = $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "disciplina");
                echo " 

";
            }
            // line 189
            echo "


\t\t\t\t\t\t\t\t\t\t";
            // line 192
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "disciplina2") == "nulo")) {
                // line 193
                echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 194
                echo twig_escape_filter($this->env, (isset($context["disciplina"]) ? $context["disciplina"] : $this->getContext($context, "disciplina")), "html", null, true);
                echo " </td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 197
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
                // line 198
                if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "disciplina2") == "")) {
                    // line 199
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                    echo twig_escape_filter($this->env, (isset($context["disciplina"]) ? $context["disciplina"] : $this->getContext($context, "disciplina")), "html", null, true);
                    echo " </td>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 201
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 202
                    echo twig_escape_filter($this->env, (isset($context["disciplina"]) ? $context["disciplina"] : $this->getContext($context, "disciplina")), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "disciplina2"), "html", null, true);
                    echo " </td>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 204
                echo "
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 206
            echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td> ";
            // line 207
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "precio"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t";
            // line 208
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "tipodepago") == "1")) {
                // line 209
                echo "\t\t\t\t\t\t\t\t\t\t<td>Efectivo</td>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 211
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "tipodepago") == "2")) {
                // line 212
                echo "\t\t\t\t\t\t\t\t\t\t<td >Tarjeta</td>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 214
            echo "
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "\t\t\t                


\t\t              \t</tbody>
\t\t            </table>

\t\t        </div>


      \t\t</div>
    \t</div> 




    \t<div class=\"col-md-3 nuevamatricula\" id=\"rematricula\">

            ";
        // line 234
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 235
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
         
            <div class=\"nuevamatriculatext\"> Nueva Matricula del Alumno: </div>

            <div>
            \t</br>
            \t<div>
                    <div class=\"col-sm-4\"> 
                    Inicio
                    </div>
                    <div class=\"col-sm-8\"> 
                    ";
        // line 246
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_inicio"), 'errors');
        echo "
                    ";
        // line 247
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_inicio"), 'widget', array("attr" => array("class" => "form-group", "type" => "datetime")));
        echo "
                    </div>
                </div>
                </br></br>

                <div>
                    <div class=\"col-sm-4\"> 
                    Inicio
                    </div>
                    <div class=\"col-sm-8\"> 
                    ";
        // line 257
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_final"), 'errors');
        echo "
                    ";
        // line 258
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_final"), 'widget', array("attr" => array("class" => "form-group", "type" => "datetime")));
        echo "
                    </div>
                </div>

                <div>
\t                <div class=\"col-sm-6\">
\t                    ";
        // line 264
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "veces"), 'label');
        echo "
\t                </div>
\t                <div class=\"col-sm-6\">
\t                    ";
        // line 267
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "veces"), 'errors');
        echo "
\t                    ";
        // line 268
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "veces"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t                </div>
                </div>
                </br></br></br></br>
                <div>
                \t<div class=\"col-sm-6\">
                    Disciplina
                    </div>
                    <div class=\"col-sm-6\">
                    ";
        // line 277
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disciplina"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                </br> </br>
                <div>
                    <div class=\"col-sm-6\">
                    Disciplina Sec
                    </div>
                    <div class=\"col-sm-6\">
                    ";
        // line 286
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disciplina2"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                </br></br></br>

                <div>
                    ";
        // line 292
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipodepago"), 'errors');
        echo "
                    ";
        // line 293
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipodepago"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
\t\t\t\t</br>                
                <div>
                    ";
        // line 297
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precio"), 'errors');
        echo "
                    ";
        // line 298
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precio"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "S/. Monto en soles")));
        echo "
                </div>
                </br>
                <div class=\"col-sm-5\">
                 ";
        // line 302
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matricular"), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
                </div> 

                <div class=\"col-sm-5 btn btn-primary rojop\" onclick=\"mostrar2()\">
                 Cancelar
                </div>  

            </div>
                     
            ";
        // line 311
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

        </div>
























    </div>\t    

 </div> 
  
  

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "FfDemoBundle:Default:alumno.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  596 => 311,  584 => 302,  577 => 298,  573 => 297,  566 => 293,  562 => 292,  553 => 286,  541 => 277,  529 => 268,  525 => 267,  519 => 264,  510 => 258,  506 => 257,  493 => 247,  489 => 246,  475 => 235,  471 => 234,  452 => 217,  444 => 214,  440 => 212,  437 => 211,  433 => 209,  431 => 208,  427 => 207,  424 => 206,  420 => 204,  413 => 202,  410 => 201,  404 => 199,  402 => 198,  399 => 197,  393 => 194,  390 => 193,  388 => 192,  383 => 189,  377 => 186,  374 => 185,  370 => 183,  363 => 182,  356 => 181,  349 => 180,  342 => 179,  336 => 178,  333 => 177,  331 => 176,  326 => 174,  321 => 172,  316 => 169,  312 => 168,  283 => 142,  270 => 132,  252 => 117,  248 => 116,  244 => 115,  240 => 114,  236 => 113,  229 => 108,  219 => 105,  216 => 104,  214 => 103,  211 => 102,  207 => 100,  197 => 97,  193 => 95,  183 => 93,  180 => 92,  178 => 91,  175 => 90,  173 => 89,  165 => 83,  159 => 80,  156 => 79,  150 => 76,  147 => 75,  145 => 74,  138 => 70,  131 => 66,  127 => 65,  121 => 62,  117 => 61,  105 => 52,  101 => 51,  97 => 50,  92 => 48,  79 => 38,  74 => 36,  52 => 17,  48 => 16,  43 => 14,  39 => 13,  35 => 12,  27 => 7,  19 => 1,);
    }
}
