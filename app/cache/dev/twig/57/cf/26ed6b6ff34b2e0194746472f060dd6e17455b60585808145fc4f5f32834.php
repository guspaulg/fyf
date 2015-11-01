<?php

/* FfDemoBundle:Default:verificacion.html.twig */
class __TwigTemplate_57cf26ed6b6ff34b2e0194746472f060dd6e17455b60585808145fc4f5f32834 extends Twig_Template
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
  \t\t
  \t\t</div>
    
\t    <div id=\"cuadro2\">

\t    \t\t<div class=\"nombre\">
\t\t    \t<p>Se agrego un nuevo alumno en FIGTH FITNESS</p>
\t\t    \t</div>

\t\t    \t<div class=\"datos\">
\t\t    \t\tAlumno : ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["apellidop"]) ? $context["apellidop"] : $this->getContext($context, "apellidop")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["apellidom"]) ? $context["apellidom"] : $this->getContext($context, "apellidom")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")), "html", null, true);
        echo " <br>
\t\t    \t\t";
        // line 38
        if (((isset($context["disciplina"]) ? $context["disciplina"] : $this->getContext($context, "disciplina")) == 1)) {
            // line 39
            echo "\t\t    \t\t\tDisciplina : Muay Thai <br> 
\t\t\t\t\t";
        }
        // line 41
        echo "\t\t\t\t\t";
        if (((isset($context["disciplina"]) ? $context["disciplina"] : $this->getContext($context, "disciplina")) == 2)) {
            // line 42
            echo "\t\t    \t\t\tDisciplina : Jiu Jitsu <br> 
\t\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t\t";
        if (((isset($context["disciplina"]) ? $context["disciplina"] : $this->getContext($context, "disciplina")) == 3)) {
            // line 45
            echo "\t\t    \t\t\tDisciplina : Judo<br> 
\t\t\t\t\t";
        }
        // line 47
        echo "\t\t\t\t\t";
        if (((isset($context["disciplina"]) ? $context["disciplina"] : $this->getContext($context, "disciplina")) == 4)) {
            // line 48
            echo "\t\t    \t\t\tDisciplina : MMA <br> 
\t\t\t\t\t";
        }
        // line 50
        echo "\t\t\t\t\t";
        if (((isset($context["disciplina"]) ? $context["disciplina"] : $this->getContext($context, "disciplina")) == 5)) {
            // line 51
            echo "\t\t    \t\t\tDisciplina : Box<br> 
\t\t\t\t\t";
        }
        // line 53
        echo "\t\t    \t\tNumero de veces: ";
        echo twig_escape_filter($this->env, (isset($context["veces"]) ? $context["veces"] : $this->getContext($context, "veces")), "html", null, true);
        echo " por semana <br>
\t\t    \t\tNumero total de clases : ";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["vecestotales"]) ? $context["vecestotales"] : $this->getContext($context, "vecestotales")), "html", null, true);
        echo "<br>
\t\t    \t\tMonto a pagar : ";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["precio"]) ? $context["precio"] : $this->getContext($context, "precio")), "html", null, true);
        echo "<br><br><br>
\t\t    \t</div>\t

\t\t    \t<div class=\"boton\">
                \t<a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("ff_demo_homepage", array("slug" => ""));
        echo "\">
                  \t\tVolver Principal
                \t</a>
            \t</div>  

\t\t    \t
\t\t\t
\t\t</div>
\t</div>
  

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "FfDemoBundle:Default:verificacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 59,  114 => 55,  110 => 54,  105 => 53,  101 => 51,  98 => 50,  94 => 48,  91 => 47,  87 => 45,  84 => 44,  80 => 42,  77 => 41,  73 => 39,  71 => 38,  63 => 37,  41 => 18,  27 => 7,  19 => 1,);
    }
}
