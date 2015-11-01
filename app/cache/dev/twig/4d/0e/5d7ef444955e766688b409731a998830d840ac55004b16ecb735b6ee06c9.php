<?php

/* FfDemoBundle:Default:Salidas.html.twig */
class __TwigTemplate_4d0e5d7ef444955e766688b409731a998830d840ac55004b16ecb735b6ee06c9 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/estadistica.css"), "html", null, true);
        echo "\" rel = \"stylesheet\" type = \"text/css\"  />

<script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/new.js"), "html", null, true);
        echo "\" ></script> 


</head>

<body>




  <div id=\"footer_arriba\">
  \t<img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/logo3.png"), "html", null, true);
        echo "\" />
  </div>

  
  
  <div id=\"cuadro_cont\">

  \t\t<div id=\"cuadro1\">
  \t\t\t
    \t\t\t<div class=\"boton\">
                  <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("ff_demo_homepage", array("slug" => ""));
        echo "\">
                    Volver Principal
                  </a>
          </div>

  \t\t</div>
    
\t    <div id=\"cuadro2\">

          <div id=\"cuadro_centrado\">

                ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                      ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                   
                      <div class=\"titulo_form\"> INGRESAR LA SALIDA DE DINERO</div>
                               
                ";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

          

                <div class=\"titulo_form\"> SALIDAS DE DINERO DEL DIA DE HOY</div>

                <table class=\"tabla\">

                          <tr>

                                <td class=\"campos\"> Descripcion <td/>
                                <td class=\"campos_2\"> Monto </td>
                                <td class=\"campos_2\"> Encargado</td>
                                <td class=\"campos_2\"> Fecha</td>
                                <td class=\"campos_2\"> Hora</td>

                          </tr>  

                    ";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 65
            echo "                      ";
            if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "fecha"), "m") == twig_date_format_filter($this->env, "now", "m"))) {
                // line 66
                echo "                        ";
                if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "fecha"), "d") == twig_date_format_filter($this->env, "now", "d"))) {
                    // line 67
                    echo "
                            <tr>

                                <td class=\"campo\"> ";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "descrip"), "html", null, true);
                    echo " <td/>
                                <td class=\"campo_2\"> S/. ";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "monto"), "html", null, true);
                    echo " </td>
                                ";
                    // line 72
                    if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "persona") == "1")) {
                        // line 73
                        echo "                                  <td class=\"campo_2\">Dandy</td>
                                ";
                    }
                    // line 75
                    echo "                                ";
                    if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "persona") == "2")) {
                        // line 76
                        echo "                                  <td class=\"campo_2\">Jose</td>
                                ";
                    }
                    // line 78
                    echo "                                <td class=\"campo_2\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "fecha"), "d/m/Y"), "html", null, true);
                    echo " </td>
                                <td class=\"campo_2\">";
                    // line 79
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "hora"), " g:ia"), "html", null, true);
                    echo " </td>

                            </tr>

                        ";
                }
                // line 84
                echo "                      ";
            }
            // line 85
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "
                </table>

        </div>

\t\t\t
\t\t</div>
\t</div>
  

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "FfDemoBundle:Default:Salidas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 86,  157 => 85,  154 => 84,  146 => 79,  141 => 78,  137 => 76,  134 => 75,  130 => 73,  128 => 72,  124 => 71,  120 => 70,  115 => 67,  112 => 66,  109 => 65,  105 => 64,  84 => 46,  77 => 42,  73 => 41,  59 => 30,  46 => 20,  32 => 9,  27 => 7,  19 => 1,);
    }
}
