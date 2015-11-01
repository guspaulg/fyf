<?php

/* FfDemoBundle:Default:index.html.twig */
class __TwigTemplate_a7bb587a44a190ce7dcab2283933769e11ebcf0664e85aa6b79fd590c97f57c3 extends Twig_Template
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

\t<title>Fight and Fitness</title>


 \t<link href = \"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
\t<link href = \"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/lomio.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" >
\t<link href = \"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" >

\t<script src = \"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://code.jquery.com/jquery.js"), "html", null, true);
        echo "\"></script>
\t<script src = \"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>


</head>

<body>


\t<nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container-fluid\">
      \t<a href=\"http://www.incuba.pe\"><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/logo4.png"), "html", null, true);
        echo "\" class=\"logo\"></a>
        <div class=\"navbar-header\">
          <a class=\"navbar-brand\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("logout", array("slug" => ""));
        echo "\" >Cerrar Sesión</a>
        </div>
        
      </div>
    </nav>


    <div class=\"container-fluid\">
      <div class=\"row\">
        <div class=\"col-sm-3 col-md-2 sidebar\">
          <ul class=\"nav nav-sidebar\">
            
            <li class=\"active\"><a href=\"#\">Inicio <span class=\"sr-only\">(current)</span></a></li>
            
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
        <div class=\"col-sm-9 col-sm-offset-3 col-md-7 col-md-offset-2 main\">
 

          

          <h2 class=\"sub-header\"></br></br>Feliz Cumpleaños</h2>
          <div class=\"table-responsive\">


          \t<table class=\"table table-striped\">
              <thead>
                <tr>
                  <th>Apellido P.</th>
                  <th>Apellido M.</th>
                  <th>Nombres</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                
                  

                ";
        // line 69
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")));
        foreach ($context['_seq'] as $context["_key"] => $context["cumple"]) {
            // line 70
            echo "\t\t\t\t\t
\t\t\t\t    ";
            // line 71
            if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["cumple"]) ? $context["cumple"] : $this->getContext($context, "cumple")), "cumple"), "m") == twig_date_format_filter($this->env, "now", "m"))) {
                // line 72
                echo "\t\t\t\t\t    ";
                if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["cumple"]) ? $context["cumple"] : $this->getContext($context, "cumple")), "cumple"), "d") == twig_date_format_filter($this->env, "now", "d"))) {
                    // line 73
                    echo "
\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t<td class=\"fila_1_c\">";
                    // line 76
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cumple"]) ? $context["cumple"] : $this->getContext($context, "cumple")), "apellidop"), "html", null, true);
                    echo " </td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td class=\"fila_1_c\">";
                    // line 78
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cumple"]) ? $context["cumple"] : $this->getContext($context, "cumple")), "apellidom"), "html", null, true);
                    echo " </td>

\t\t\t\t\t\t\t\t<td class=\"fila_2_c\">";
                    // line 80
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cumple"]) ? $context["cumple"] : $this->getContext($context, "cumple")), "nombre"), "html", null, true);
                    echo " </td>

\t\t\t\t\t\t\t\t<td class=\"fila_3\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 83
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("alumno", array("id" => $this->getAttribute((isset($context["cumple"]) ? $context["cumple"] : $this->getContext($context, "cumple")), "id"))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 84
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/icon-lupa.png"), "html", null, true);
                    echo "\" width=\"20\" height=\"20\"/> 
\t\t\t\t\t\t\t\t\t</a>\t
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
                }
                // line 90
                echo "\t\t\t\t\t";
            }
            // line 91
            echo "
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cumple'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "

              </tbody>
            </table>


            <h2 class=\"sub-header\">Relación de Alumnos</h2>


            <table class=\"table table-striped\">
              <thead>
                <tr>
                  <th>Apellido P.</th>
                  <th>Apellido M.</th>
                  <th>Nombres</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                
                  

                \t";
        // line 115
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 116
            echo "\t\t\t\t<tr>
\t\t\t\t\t
\t\t\t\t";
            // line 118
            if ((twig_date_converter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "fechafinal")) > twig_date_converter($this->env))) {
                // line 119
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 120
                if ((twig_date_converter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "fechafinal")) < twig_date_converter($this->env, "+14days"))) {
                    // line 121
                    echo "
\t\t\t\t\t\t\t<td class=\"fila_1_r\">";
                    // line 122
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "apellidop"), "html", null, true);
                    echo " </td>
\t\t\t\t
\t\t\t\t\t\t\t<td class=\"fila_1_r\">";
                    // line 124
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "apellidom"), "html", null, true);
                    echo " </td>

\t\t\t\t\t\t\t<td class=\"fila_2_r\">";
                    // line 126
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "nombre"), "html", null, true);
                    echo "</td> 

\t\t\t\t\t\t";
                } else {
                    // line 128
                    echo "\t

\t\t\t\t\t\t\t<td class=\"fila_1_v\">";
                    // line 130
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "apellidop"), "html", null, true);
                    echo " </td>
\t\t\t\t
\t\t\t\t\t\t\t<td class=\"fila_1_v\">";
                    // line 132
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "apellidom"), "html", null, true);
                    echo " </td>

\t\t\t\t\t\t\t<td class=\"fila_2_v\">";
                    // line 134
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "nombre"), "html", null, true);
                    echo "</td>

\t\t\t\t\t\t";
                }
                // line 137
                echo "
\t\t\t\t";
            }
            // line 139
            echo "
\t\t\t\t";
            // line 140
            if ((twig_date_converter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "fechafinal")) < twig_date_converter($this->env))) {
                // line 141
                echo "
\t\t\t\t\t\t\t<td class=\"fila_1_n\">";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "apellidop"), "html", null, true);
                echo " </td>
\t\t\t\t
\t\t\t\t\t\t\t<td class=\"fila_1_n\">";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "apellidom"), "html", null, true);
                echo " </td>

\t\t\t\t\t\t\t<td class=\"fila_2_n\">";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "nombre"), "html", null, true);
                echo "</td>
\t\t\t\t\t
\t\t\t\t";
            }
            // line 149
            echo "




\t\t\t\t\t<td class=\"fila_3\">
\t\t\t\t\t\t<a href=\"";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("alumno", array("id" => $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "id"))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<img src=\"";
            // line 156
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
        // line 162
        echo "

              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  


</body>
</html>";
    }

    public function getTemplateName()
    {
        return "FfDemoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 162,  296 => 156,  292 => 155,  284 => 149,  278 => 146,  273 => 144,  268 => 142,  265 => 141,  263 => 140,  260 => 139,  256 => 137,  250 => 134,  245 => 132,  240 => 130,  236 => 128,  230 => 126,  225 => 124,  220 => 122,  217 => 121,  215 => 120,  212 => 119,  210 => 118,  206 => 116,  202 => 115,  178 => 93,  171 => 91,  168 => 90,  159 => 84,  155 => 83,  149 => 80,  144 => 78,  139 => 76,  134 => 73,  131 => 72,  129 => 71,  126 => 70,  122 => 69,  93 => 43,  89 => 42,  85 => 41,  80 => 39,  63 => 25,  58 => 23,  45 => 13,  41 => 12,  36 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }
}
