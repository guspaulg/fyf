<?php

/* FfDemoBundle:Default:editar.html.twig */
class __TwigTemplate_6c573996b7533b1bfd7dcab16980d02fdd913d80ef81e88363b0ff7c34d8314c extends Twig_Template
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


<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/new.js"), "html", null, true);
        echo "\" ></script>
 




</head>

<body>

<div id=\"footer_arriba\">
    <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/logo3.png"), "html", null, true);
        echo "\" />
</div>

 <div id=\"cuadro_cont\">

        <div id=\"cuadro1\">
            
            <div class=\"boton\">
                <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("ff_demo_homepage", array("slug" => ""));
        echo "\">
                  Volver Principal
                </a>
            </div>     
        </div>
    
        <div id=\"cuadro_2\">


    
            ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
             
                <div class=\"titulo_form\"> Editar los datos de ";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["apellidop"]) ? $context["apellidop"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["apellidom"]) ? $context["apellidom"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : null), "html", null, true);
        echo " </div>
                         
            ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

        </div>

        <br><br>
    </div>


    </div>

</body>


</html>";
    }

    public function getTemplateName()
    {
        return "FfDemoBundle:Default:editar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 29,  127 => 72,  118 => 66,  114 => 65,  83 => 51,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 74,  119 => 42,  108 => 62,  102 => 32,  71 => 39,  67 => 15,  63 => 15,  59 => 30,  47 => 21,  94 => 56,  89 => 44,  85 => 25,  79 => 50,  75 => 40,  68 => 14,  56 => 9,  50 => 10,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 76,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  62 => 23,  49 => 19,  38 => 6,  28 => 3,  87 => 53,  72 => 16,  66 => 24,  55 => 15,  41 => 18,  29 => 3,  26 => 6,  98 => 58,  93 => 28,  88 => 6,  78 => 21,  46 => 20,  43 => 6,  40 => 8,  32 => 9,  44 => 12,  35 => 5,  31 => 5,  24 => 3,  22 => 2,  27 => 7,  25 => 3,  21 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 60,  99 => 31,  95 => 28,  92 => 55,  86 => 28,  82 => 44,  80 => 42,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 28,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 10,  30 => 7,);
    }
}
