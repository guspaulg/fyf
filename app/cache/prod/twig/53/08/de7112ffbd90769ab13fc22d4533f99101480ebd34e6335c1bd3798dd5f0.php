<?php

/* FfDemoBundle:Default:vencer.html.twig */
class __TwigTemplate_5308de7112ffbd90769ab13fc22d4533f99101480ebd34e6335c1bd3798dd5f0 extends Twig_Template
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
                <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("ff_demo_homepage", array("slug" => ""));
        echo "\">
                  Volver Principal
                </a>
            </div>

  \t\t</div>
    
\t    <div id=\"cuadro2\">


\t    \t<div id=\"texto\">Vencimiento de menbresia a 5 dias o menos:</div> <br/> <br/><br/> <br/>

\t      \t<table align=\"center\">

\t\t\t\t<tr>
\t\t\t\t\t<td class=\"fila1\"> APELLIDOS</td>
\t\t\t\t\t<td class=\"fila1\"> APELLIDOS</td>
\t\t\t\t\t<td class=\"fila2\"> NOMBRES</td>
\t\t\t\t\t<td class=\"fila3\"> </td>
\t\t\t\t\t<td class=\"fila3\"> </td>
\t\t\t\t</tr>

\t\t\t\t";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 51
            echo "\t\t\t\t
\t\t\t\t\t
\t\t\t\t";
            // line 53
            if ((twig_date_converter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "fechafinal")) > twig_date_converter($this->env))) {
                // line 54
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 55
                if ((twig_date_converter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "fechafinal")) < twig_date_converter($this->env, "+5days"))) {
                    // line 56
                    echo "
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"fila_1_r\">";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "apellidop"), "html", null, true);
                    echo " </td>
\t\t\t\t\t
\t\t\t\t\t\t\t\t<td class=\"fila_1_r\">";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "apellidom"), "html", null, true);
                    echo " </td>

\t\t\t\t\t\t\t\t<td class=\"fila_2_r\">";
                    // line 62
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "nombre"), "html", null, true);
                    echo "</td> 

\t\t\t\t\t\t\t\t<td class=\"fila_3\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 65
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("alumno", array("id" => $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "id"))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 66
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/icon-lupa.png"), "html", null, true);
                    echo "\" width=\"20\" height=\"20\"/> 
\t\t\t\t\t\t\t\t\t</a>\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t";
                }
                // line 72
                echo "
\t\t\t\t";
            }
            // line 74
            echo "
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t\t\t</table>

\t\t\t
\t\t</div>
\t</div>
  

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "FfDemoBundle:Default:vencer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 76,  131 => 74,  127 => 72,  118 => 66,  114 => 65,  108 => 62,  103 => 60,  98 => 58,  94 => 56,  92 => 55,  89 => 54,  87 => 53,  83 => 51,  79 => 50,  54 => 28,  41 => 18,  27 => 7,  19 => 1,);
    }
}
