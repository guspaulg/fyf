<?php

/* FfDemoBundle:Default:cuentas.html.twig */
class __TwigTemplate_8b82bea586b0795e6d38296753c077370b2e6bd3b4b1208ac331e00117be7184 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/estilos.css"), "html", null, true);
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
\t  \t\t\t<a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("Formulario", array("slug" => ""));
        echo "\">
\t\t\t\t  Matricula
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<div class=\"boton\">
\t  \t\t\t<a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("Vencer", array("slug" => ""));
        echo "\">
\t\t\t\t  Vencimiento Prox.
\t\t\t\t</a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"boton\">
\t  \t\t\t<a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("Busqueda", array("slug" => ""));
        echo "\">
\t\t\t\t  busqueda
\t\t\t\t</a>
\t\t\t</div>\t

\t\t\t<div class=\"boton\">
\t  \t\t\t<a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("estadistica", array("slug" => ""));
        echo "\">
\t\t\t\t  Estadisticas
\t\t\t\t</a>
\t\t\t</div>\t

\t\t\t<div class=\"boton\">
\t  \t\t\t<a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("Cuentas", array("slug" => ""));
        echo "\">
\t\t\t\t  Cuentas
\t\t\t\t</a>
\t\t\t</div>\t

\t\t\t<div id=\"cuadro3\">

\t\t\t\t<div class=\"sub_boton\">
\t\t  \t\t\t<a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("Salida", array("slug" => ""));
        echo "\">
\t\t\t\t\t  Salidas
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<div class=\"sub_boton\">
\t\t  \t\t\t<a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("Ingreso", array("slug" => ""));
        echo "\">
\t\t\t\t\t  Ingresos
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<div class=\"sub_boton\">
\t\t  \t\t\t<a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("Salida", array("slug" => ""));
        echo "\">
\t\t\t\t\t  Cuadro de Salidas
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<div class=\"sub_boton\">
\t\t  \t\t\t<a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("Ingreso", array("slug" => ""));
        echo "\">
\t\t\t\t\t  Cuadro de Ingresos
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<div class=\"sub_boton\">
\t\t  \t\t\t<a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("Salida", array("slug" => ""));
        echo "\">
\t\t\t\t\t  Cuadro Total
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t

\t\t\t</div>

  \t\t</div>
    
\t    <div id=\"cuadro2\">


\t    \t<table align=\"center\">\t\t
\t\t       \t
\t\t       \t<div id=\"texto\">Nuestros Alumnos de  Cumpleaños:</div> <br/> <br/><br/> <br/>
\t\t   \t  \t<img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/cumple.png"), "html", null, true);
        echo "\" />

\t\t\t\t";
        // line 103
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")));
        foreach ($context['_seq'] as $context["_key"] => $context["cumple"]) {
            // line 104
            echo "\t\t\t\t\t
\t\t\t\t    ";
            // line 105
            if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["cumple"]) ? $context["cumple"] : $this->getContext($context, "cumple")), "cumple"), "m") == twig_date_format_filter($this->env, "now", "m"))) {
                // line 106
                echo "\t\t\t\t\t    ";
                if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["cumple"]) ? $context["cumple"] : $this->getContext($context, "cumple")), "cumple"), "d") == twig_date_format_filter($this->env, "now", "d"))) {
                    // line 107
                    echo "
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t<td class=\"fila_1_c\">";
                    // line 110
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cumple"]) ? $context["cumple"] : $this->getContext($context, "cumple")), "apellidop"), "html", null, true);
                    echo " </td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td class=\"fila_1_c\">";
                    // line 112
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cumple"]) ? $context["cumple"] : $this->getContext($context, "cumple")), "apellidom"), "html", null, true);
                    echo " </td>

\t\t\t\t\t\t\t\t<td class=\"fila_2_c\">";
                    // line 114
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cumple"]) ? $context["cumple"] : $this->getContext($context, "cumple")), "nombre"), "html", null, true);
                    echo " </td>

\t\t\t\t\t\t\t\t<td class=\"fila_3\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 117
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("alumno", array("id" => $this->getAttribute((isset($context["cumple"]) ? $context["cumple"] : $this->getContext($context, "cumple")), "id"))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 118
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/icon-lupa.png"), "html", null, true);
                    echo "\" width=\"20\" height=\"20\"/> 
\t\t\t\t\t\t\t\t\t</a>\t
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
                }
                // line 124
                echo "\t\t\t\t\t";
            }
            // line 125
            echo "
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cumple'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "\t\t\t</table><br>

\t      \t
\t      \t<table align=\"center\">

\t      \t<div id=\"texto\">Relacion completa de Alumnos:</div> <br/> <br/><br/> <br/>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"fila1\"> APELLIDOS</td>
\t\t\t\t\t<td class=\"fila1\"> APELLIDOS</td>
\t\t\t\t\t<td class=\"fila2\"> NOMBRES</td>
\t\t\t\t\t<td class=\"fila3\"> </td>
\t\t\t\t\t<td class=\"fila3\"> </td>
\t\t\t\t</tr>

\t\t\t\t";
        // line 141
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 142
            echo "\t\t\t\t<tr>
\t\t\t\t\t
\t\t\t\t";
            // line 144
            if ((twig_date_converter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "fechafinal")) > twig_date_converter($this->env))) {
                // line 145
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 146
                if ((twig_date_converter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "fechafinal")) < twig_date_converter($this->env, "+14days"))) {
                    // line 147
                    echo "
\t\t\t\t\t\t\t<td class=\"fila_1_r\">";
                    // line 148
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "apellidop"), "html", null, true);
                    echo " </td>
\t\t\t\t
\t\t\t\t\t\t\t<td class=\"fila_1_r\">";
                    // line 150
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "apellidom"), "html", null, true);
                    echo " </td>

\t\t\t\t\t\t\t<td class=\"fila_2_r\">";
                    // line 152
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "nombre"), "html", null, true);
                    echo "</td> 

\t\t\t\t\t\t";
                } else {
                    // line 154
                    echo "\t

\t\t\t\t\t\t\t<td class=\"fila_1_v\">";
                    // line 156
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "apellidop"), "html", null, true);
                    echo " </td>
\t\t\t\t
\t\t\t\t\t\t\t<td class=\"fila_1_v\">";
                    // line 158
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "apellidom"), "html", null, true);
                    echo " </td>

\t\t\t\t\t\t\t<td class=\"fila_2_v\">";
                    // line 160
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "nombre"), "html", null, true);
                    echo "</td>

\t\t\t\t\t\t";
                }
                // line 163
                echo "
\t\t\t\t";
            }
            // line 165
            echo "
\t\t\t\t";
            // line 166
            if ((twig_date_converter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "fechafinal")) < twig_date_converter($this->env))) {
                // line 167
                echo "
\t\t\t\t\t\t\t<td class=\"fila_1_n\">";
                // line 168
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "apellidop"), "html", null, true);
                echo " </td>
\t\t\t\t
\t\t\t\t\t\t\t<td class=\"fila_1_n\">";
                // line 170
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "apellidom"), "html", null, true);
                echo " </td>

\t\t\t\t\t\t\t<td class=\"fila_2_n\">";
                // line 172
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "nombre"), "html", null, true);
                echo "</td>
\t\t\t\t\t
\t\t\t\t";
            }
            // line 175
            echo "




\t\t\t\t\t<td class=\"fila_3\">
\t\t\t\t\t\t<a href=\"";
            // line 181
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("alumno", array("id" => $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "id"))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<img src=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/icon-lupa.png"), "html", null, true);
            echo "\" width=\"20\" height=\"20\"/> 
\t\t\t\t\t\t</a>\t
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "\t\t\t</table>

\t\t\t
\t\t</div>
\t</div>
  

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "FfDemoBundle:Default:cuentas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 188,  328 => 182,  324 => 181,  316 => 175,  310 => 172,  305 => 170,  300 => 168,  297 => 167,  295 => 166,  292 => 165,  288 => 163,  282 => 160,  277 => 158,  272 => 156,  268 => 154,  262 => 152,  257 => 150,  252 => 148,  249 => 147,  247 => 146,  244 => 145,  242 => 144,  238 => 142,  234 => 141,  218 => 127,  211 => 125,  208 => 124,  199 => 118,  195 => 117,  189 => 114,  184 => 112,  179 => 110,  174 => 107,  171 => 106,  169 => 105,  166 => 104,  162 => 103,  157 => 101,  137 => 84,  128 => 78,  119 => 72,  110 => 66,  101 => 60,  90 => 52,  81 => 46,  72 => 40,  63 => 34,  54 => 28,  41 => 18,  27 => 7,  19 => 1,);
    }
}
