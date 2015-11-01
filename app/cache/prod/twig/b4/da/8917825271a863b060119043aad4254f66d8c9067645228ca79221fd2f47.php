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

<Link  href = \"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/detalle_alumno.css"), "html", null, true);
        echo "\" rel = \"stylesheet\" type = \"text/css\"  />


</head>

<body>




  <div id=\"footer_arriba\">
  \t<img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/logo3.png"), "html", null, true);
        echo "\" />
  </div>

  
  
  <div id=\"cuadro_cont\">

  \t\t<div id=\"cuadro1\">
  \t\t\t
  \t\t\t<div class=\"boton\">
                <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("ff_demo_homepage", array("slug" => ""));
        echo "\">
                  Volver Principal
                </a>
            </div>

  \t\t</div>
    
\t    <div id=\"cuadro2\">

\t    \t\t<div>
\t\t       \t\t<div id=\"texto\">Pago al día</div> 
\t\t       \t  \t<div id=\"verde\"></div> 
\t\t   \t  \t</div>
\t\t      \t
\t\t        <div>
\t\t       \t\t<div id=\"texto\">Pago por vencer</div>
\t\t          \t<div id=\"rojo\"></div> 
\t\t      \t</div>
\t\t      
\t\t      \t<div>
\t\t       \t  \t<div id=\"texto\">Pago Vencido</div>
\t\t       \t\t<div id=\"negro\"></div> 
\t\t      \t</div>\t
\t\t        <br><br>

\t    \t\t<a title=\"MATRICULAR\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rematricula", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">\t
\t    \t\t\t<img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/boton_1.png"), "html", null, true);
        echo "\"/>
\t    \t\t</a>

\t    \t\t
\t    \t\t<a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("alumno2", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">\t
\t    \t\t\t<img title=\"ASISTENCIA\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/boton_3.png"), "html", null, true);
        echo "\" />
\t    \t\t</a>\t

\t    \t\t<a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editar", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">\t
\t    \t\t\t<img title=\"EDITAR ALUMNO\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/boton_5.png"), "html", null, true);
        echo "\" />
\t    \t\t</a>

\t    \t\t<div class=\"nombre\">
\t    \t\t
\t\t    \t\t<p>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "apellidop"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "apellidom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "nombre"), "html", null, true);
        echo "
\t\t    \t\t
\t\t    \t\t";
        // line 70
        if ((twig_date_converter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "fechafinal")) > twig_date_converter($this->env))) {
            // line 71
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 72
            if ((twig_date_converter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "fechafinal")) < twig_date_converter($this->env, "+14days"))) {
                // line 73
                echo "
\t\t\t\t\t\t\t\t<div id=\"rojo\"></div> 

\t\t\t\t\t\t\t";
            } else {
                // line 76
                echo "\t

\t\t\t\t\t\t\t\t<div id=\"verde\"> </div> 

\t\t\t\t\t\t\t";
            }
            // line 81
            echo "
\t\t\t\t\t\t";
        }
        // line 83
        echo "
\t\t\t\t\t\t";
        // line 84
        if ((twig_date_converter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "fechafinal")) < twig_date_converter($this->env))) {
            // line 85
            echo "\t\t\t\t\t\t\t<div id=\"negro\"> </div> 
\t\t\t\t\t
\t\t\t\t\t";
        }
        // line 88
        echo "
\t\t\t\t\t</p>

\t\t\t\t<br>
\t\t    \t</div>

\t\t    \t<hr>

\t\t    \t<div>
\t\t    \t\t<div id=\"casistencia\">
\t\t    \t\t\t<div  class=\"datos\">
\t\t    \t\t\t\tAsistencias a la fecha
\t\t    \t\t\t</div>
\t\t    \t\t\t<div class=\"asistencia\">
\t\t    \t\t\t\t";
        // line 102
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
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "vecestotales"), "html", null, true);
        echo "
\t\t    \t\t\t</div>

\t\t    \t\t</div> 

\t\t    \t</div>

\t\t    \t<div class=\"datos\">
\t\t\t    \t<p>
\t\t\t    \t\tDni: ";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "dni"), "html", null, true);
        echo " <br>
\t\t\t    \t\tTélefono Fijo: ";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "telefonof"), "html", null, true);
        echo " <br>
\t\t\t    \t\tTélefono Celular: ";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "telefonoc"), "html", null, true);
        echo " <br>
\t\t\t    \t\tCorreo: ";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "email"), "html", null, true);
        echo " <br>
\t\t\t    \t\tCumpleaños: ";
        // line 125
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "cumple"), "m/d/Y"), "html", null, true);
        echo " <br>
\t\t\t    \t</p> 
\t\t    \t</div><hr>

\t\t    \t<div class=\"datos3\">

\t\t    \t\t<table align=\"center\">
\t\t    \t\t\t<div class=\"nombre\"> Historial del Alumno</div> <br>
\t\t    \t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"fila1\"> Fecha inicio</td>
\t\t\t\t\t\t\t<td class=\"fila1\"> Fecha Final</td>
\t\t\t\t\t\t\t<td class=\"fila1\"> Disciplina</td>
\t\t\t\t\t\t\t<td class=\"fila2\"> Precio</td>
\t\t\t\t\t\t\t<td class=\"fila1\"> T.Pago </td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 142
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 143
            echo "
\t\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t\t<td class=\"datos\"> ";
            // line 146
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "fechainicio"), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"datos\"> ";
            // line 147
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "fechafinal"), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t";
            // line 148
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "disciplina") == "1")) {
                // line 149
                echo "\t\t\t\t\t\t\t\t\t<td class=\"datos\">Muaythai</td>
\t\t\t\t\t\t\t\t\t";
            }
            // line 151
            echo "\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "disciplina") == "2")) {
                // line 152
                echo "\t\t\t\t\t\t\t\t\t<td class=\"datos\">Jiu Jitsu</td>
\t\t\t\t\t\t\t\t\t";
            }
            // line 154
            echo "\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "disciplina") == "3")) {
                // line 155
                echo "\t\t\t\t\t\t\t\t\t<td class=\"datos\">Judo</td>
\t\t\t\t\t\t\t\t\t";
            }
            // line 157
            echo "\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "disciplina") == "4")) {
                // line 158
                echo "\t\t\t\t\t\t\t\t\t<td class=\"datos\">MMA</td>
\t\t\t\t\t\t\t\t\t";
            }
            // line 160
            echo "\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "disciplina") == "5")) {
                // line 161
                echo "\t\t\t\t\t\t\t\t\t<td class=\"datos\">Box</td>
\t\t\t\t\t\t\t\t\t";
            }
            // line 163
            echo "\t\t\t\t\t\t\t\t\t<td class=\"datos\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "precio"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t";
            // line 164
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "tipodepago") == "1")) {
                // line 165
                echo "\t\t\t\t\t\t\t\t\t<td class=\"datos\">Efectivo</td>
\t\t\t\t\t\t\t\t\t";
            }
            // line 167
            echo "\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "tipodepago") == "2")) {
                // line 168
                echo "\t\t\t\t\t\t\t\t\t<td class=\"datos\">Tarjeta</td>
\t\t\t\t\t\t\t\t\t";
            }
            // line 170
            echo "
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "
\t\t\t\t\t\t

\t\t    \t\t</table>


\t\t    \t</div>\t
\t\t\t
\t\t</div>
\t</div>
  

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
        return array (  312 => 173,  304 => 170,  300 => 168,  297 => 167,  293 => 165,  291 => 164,  286 => 163,  282 => 161,  279 => 160,  275 => 158,  272 => 157,  268 => 155,  265 => 154,  261 => 152,  258 => 151,  254 => 149,  252 => 148,  248 => 147,  244 => 146,  239 => 143,  235 => 142,  215 => 125,  211 => 124,  207 => 123,  203 => 122,  199 => 121,  187 => 112,  174 => 102,  158 => 88,  153 => 85,  151 => 84,  148 => 83,  144 => 81,  137 => 76,  131 => 73,  129 => 72,  126 => 71,  124 => 70,  115 => 68,  107 => 63,  103 => 62,  97 => 59,  93 => 58,  86 => 54,  82 => 53,  54 => 28,  41 => 18,  27 => 7,  19 => 1,);
    }
}
