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

\t\t<link href = \"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("//cdn.datatables.net/1.10.9/css/jquery.dataTables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" >


\t<script src = \"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://code.jquery.com/jquery.js"), "html", null, true);
        echo "\"></script>
\t<script src = \"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

\t<script src = \"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("//code.jquery.com/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>

\t<script src = \"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("//cdn.datatables.net/1.10.9/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>

\t<script type=\"text/javascript\">

\t\$(document).ready( function () {
    \$('#mitabla\t').DataTable({
    \tScrolly: 40,

    });\t
\t} );

\t</script>

</head>

<body>


\t<nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container-fluid\">
      \t<a href=\"http://www.incuba.pe\"><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/logo4.png"), "html", null, true);
        echo "\" class=\"logo\"></a>
        <div class=\"navbar-header\">
          <a class=\"navbar-brand\" href=\"";
        // line 42
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
        // line 56
        echo $this->env->getExtension('routing')->getPath("Formulario", array("slug" => ""));
        echo "\"  >Matricular</a></li>

            <li><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("Vencer", array("slug" => ""));
        echo "\">Vencimientos</a></li>
\t\t\t
\t\t\t<li><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("estadistica", array("slug" => ""));
        echo "\">Reportes</a></li>
          </ul>
        
        </div>
        <div class=\"col-sm-9 col-sm-offset-3 col-md-7 col-md-offset-2 main\">
 

        
        ";
        // line 68
        $context["haycumple"] = 0;
        // line 69
        echo "
      \t";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")));
        foreach ($context['_seq'] as $context["_key"] => $context["cumple"]) {
            // line 71
            echo "\t\t\t\t
\t\t    ";
            // line 72
            if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["cumple"]) ? $context["cumple"] : $this->getContext($context, "cumple")), "cumple"), "m") == twig_date_format_filter($this->env, "now", "m"))) {
                // line 73
                echo "\t\t\t    ";
                if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["cumple"]) ? $context["cumple"] : $this->getContext($context, "cumple")), "cumple"), "d") == twig_date_format_filter($this->env, "now", "d"))) {
                    // line 74
                    echo "
\t\t\t    \t";
                    // line 75
                    $context["haycumple"] = 1;
                    // line 76
                    echo "\t\t\t\t\t
\t\t\t\t";
                }
                // line 78
                echo "\t\t\t";
            }
            // line 79
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cumple'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "
\t\t<div class=\"table-responsive\">
\t\t";
        // line 83
        if (((isset($context["haycumple"]) ? $context["haycumple"] : $this->getContext($context, "haycumple")) == 1)) {
            // line 84
            echo "
          <h2 class=\"sub-header\">Feliz Cumpleaños</h2>
          <table class=\"table\">
                  
                ";
            // line 88
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")));
            foreach ($context['_seq'] as $context["_key"] => $context["cumple"]) {
                // line 89
                echo "\t\t\t\t\t
\t\t\t\t    ";
                // line 90
                if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["cumple"]) ? $context["cumple"] : $this->getContext($context, "cumple")), "cumple"), "m") == twig_date_format_filter($this->env, "now", "m"))) {
                    // line 91
                    echo "\t\t\t\t\t    ";
                    if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["cumple"]) ? $context["cumple"] : $this->getContext($context, "cumple")), "cumple"), "d") == twig_date_format_filter($this->env, "now", "d"))) {
                        // line 92
                        echo "
\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t<td class=\"fila_1_c\">";
                        // line 95
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cumple"]) ? $context["cumple"] : $this->getContext($context, "cumple")), "apellidop"), "html", null, true);
                        echo " </td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td class=\"fila_1_c\">";
                        // line 97
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cumple"]) ? $context["cumple"] : $this->getContext($context, "cumple")), "apellidom"), "html", null, true);
                        echo " </td>

\t\t\t\t\t\t\t\t<td class=\"fila_2_c\">";
                        // line 99
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cumple"]) ? $context["cumple"] : $this->getContext($context, "cumple")), "nombre"), "html", null, true);
                        echo " </td>

\t\t\t\t\t\t\t\t<td class=\"\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 102
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("alumno", array("id" => $this->getAttribute((isset($context["cumple"]) ? $context["cumple"] : $this->getContext($context, "cumple")), "id"))), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 103
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/icon-lupa.png"), "html", null, true);
                        echo "\" width=\"20\" height=\"20\"/> 
\t\t\t\t\t\t\t\t\t</a>\t
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
                    }
                    // line 109
                    echo "\t\t\t\t\t";
                }
                // line 110
                echo "
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cumple'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "
            </table>
        ";
        }
        // line 115
        echo "

            <h2 class=\"sub-header\">Relación de Alumnos</h2>


            <table class=\"table table-striped\" id=\"mitabla\">
              <thead>
                <tr>
                  <th>Dni</th>
                  <th>Apellido Paterno</th>
                  <th>Apellido Materno</th>
                  <th>Nombres</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                
                  

                \t";
        // line 134
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 135
            echo "\t\t\t\t<tr>
\t\t\t\t\t
\t\t\t\t";
            // line 137
            if ((twig_date_converter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "fechafinal")) > twig_date_converter($this->env))) {
                // line 138
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 139
                if ((twig_date_converter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "fechafinal")) < twig_date_converter($this->env, "+14days"))) {
                    // line 140
                    echo "\t\t\t\t\t\t\t<td class=\"fila_1_r\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "dni"), "html", null, true);
                    echo " </td>

\t\t\t\t\t\t\t<td class=\"fila_1_r\">";
                    // line 142
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "apellidop"), "html", null, true);
                    echo " </td>
\t\t\t\t
\t\t\t\t\t\t\t<td class=\"fila_1_r\">";
                    // line 144
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "apellidom"), "html", null, true);
                    echo " </td>

\t\t\t\t\t\t\t<td class=\"fila_2_r\">";
                    // line 146
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "nombre"), "html", null, true);
                    echo "</td> 

\t\t\t\t\t\t";
                } else {
                    // line 148
                    echo "\t
\t\t\t\t\t\t\t<td class=\"fila_1_v\">";
                    // line 149
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "dni"), "html", null, true);
                    echo " </td>

\t\t\t\t\t\t\t<td class=\"fila_1_v\">";
                    // line 151
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "apellidop"), "html", null, true);
                    echo " </td>
\t\t\t\t
\t\t\t\t\t\t\t<td class=\"fila_1_v\">";
                    // line 153
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "apellidom"), "html", null, true);
                    echo " </td>

\t\t\t\t\t\t\t<td class=\"fila_2_v\">";
                    // line 155
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "nombre"), "html", null, true);
                    echo "</td>

\t\t\t\t\t\t";
                }
                // line 158
                echo "
\t\t\t\t";
            }
            // line 160
            echo "
\t\t\t\t";
            // line 161
            if ((twig_date_converter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "fechafinal")) < twig_date_converter($this->env))) {
                // line 162
                echo "
\t\t\t\t\t\t\t<td class=\"fila_1_n\">";
                // line 163
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "dni"), "html", null, true);
                echo " </td>

\t\t\t\t\t\t\t<td class=\"fila_1_n\">";
                // line 165
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "apellidop"), "html", null, true);
                echo " </td>
\t\t\t\t
\t\t\t\t\t\t\t<td class=\"fila_1_n\">";
                // line 167
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "apellidom"), "html", null, true);
                echo " </td>

\t\t\t\t\t\t\t<td class=\"fila_2_n\">";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "nombre"), "html", null, true);
                echo "</td>
\t\t\t\t\t
\t\t\t\t";
            }
            // line 172
            echo "




\t\t\t\t\t<td class=\"\">
\t\t\t\t\t\t<a href=\"";
            // line 178
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("alumno", array("id" => $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "id"))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<img src=\"";
            // line 179
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
        // line 185
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
        return array (  375 => 185,  363 => 179,  359 => 178,  351 => 172,  345 => 169,  340 => 167,  335 => 165,  330 => 163,  327 => 162,  325 => 161,  322 => 160,  318 => 158,  312 => 155,  307 => 153,  302 => 151,  297 => 149,  294 => 148,  288 => 146,  283 => 144,  278 => 142,  272 => 140,  270 => 139,  267 => 138,  265 => 137,  261 => 135,  257 => 134,  236 => 115,  231 => 112,  224 => 110,  221 => 109,  212 => 103,  208 => 102,  202 => 99,  197 => 97,  192 => 95,  187 => 92,  184 => 91,  182 => 90,  179 => 89,  175 => 88,  169 => 84,  167 => 83,  163 => 81,  156 => 79,  153 => 78,  149 => 76,  147 => 75,  144 => 74,  141 => 73,  139 => 72,  136 => 71,  132 => 70,  129 => 69,  127 => 68,  116 => 60,  111 => 58,  106 => 56,  89 => 42,  84 => 40,  61 => 20,  56 => 18,  51 => 16,  47 => 15,  41 => 12,  36 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }
}
