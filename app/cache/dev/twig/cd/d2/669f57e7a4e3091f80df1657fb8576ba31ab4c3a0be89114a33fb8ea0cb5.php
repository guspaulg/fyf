<?php

/* FfDemoBundle:Default:busqueda2.html.twig */
class __TwigTemplate_cdd2669f57e7a4e3091f80df1657fb8576ba31ab4c3a0be89114a33fb8ea0cb5 extends Twig_Template
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
        echo "<html>
<head>

<title>Fight and Fitness</title>

<Link  href = \"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/busqueda.css"), "html", null, true);
        echo "\" rel = \"stylesheet\" type = \"text/css\"  />

<script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/new.js"), "html", null, true);
        echo "\" ></script> 


</head>

<body>




  <div id=\"footer_arriba\">
  \t<img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/logo3.png"), "html", null, true);
        echo "\" />
  </div>

  
  
  <div id=\"cuadro_cont\">

  \t\t<div id=\"cuadro1\">
  \t\t\t
  \t\t\t<div class=\"boton\">
                <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("ff_demo_homepage", array("slug" => ""));
        echo "\">
                  Volver Principal
                </a>
            </div>

  \t\t</div>
    
\t    <div id=\"cuadro2\">

          ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
             
                <div class=\"titulo_form\"> BUSCAR ALUMNOS EN FIGHT FITNESS</div>
                         
          ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

          <table align=\"center\">

        <tr>
          <td class=\"fila1\"> APELLIDOS</td>
          <td class=\"fila1\"> APELLIDOS</td>
          <td class=\"fila2\"> NOMBRES</td>
          <td class=\"fila3\"> </td>
          <td class=\"fila3\"> </td>
        </tr>

        ";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 56
            echo "        <tr>
          <td class=\"fila_1\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "apellidop"), "html", null, true);
            echo " </td>
        
          <td class=\"fila_1\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "apellidom"), "html", null, true);
            echo " </td>

          <td class=\"fila_2\">";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "nombre"), "html", null, true);
            echo "</td>

          
          <td class=\"fila_3\">
            <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("alumno", array("id" => $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "id"))), "html", null, true);
            echo "\">
              <img src=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/icon-lupa.png"), "html", null, true);
            echo "\" width=\"20\" height=\"20\"/> 
            </a>  
          </td>
        </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "



      </table>


\t\t\t
\t\t</div>
\t</div>
  

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "FfDemoBundle:Default:busqueda2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 72,  124 => 66,  120 => 65,  113 => 61,  108 => 59,  103 => 57,  100 => 56,  96 => 55,  81 => 43,  74 => 39,  70 => 38,  58 => 29,  45 => 19,  31 => 8,  26 => 6,  19 => 1,);
    }
}
