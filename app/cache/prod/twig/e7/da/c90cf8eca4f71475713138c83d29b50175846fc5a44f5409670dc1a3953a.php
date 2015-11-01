<?php

/* FfDemoBundle:Default:verificacionRematricula.html.twig */
class __TwigTemplate_e7dac90cf8eca4f71475713138c83d29b50175846fc5a44f5409670dc1a3953a extends Twig_Template
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
\t\t    \t<p>Se Matriculo con exito nuevamente al alumno:</p>
\t\t    \t</div>

\t\t    \t<div class=\"datos\">
\t\t    \t\tAlumno : ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["apellidop"]) ? $context["apellidop"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["apellidom"]) ? $context["apellidom"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : null), "html", null, true);
        echo " <br><br>
\t\t    \t</div>\t

\t\t    \t<div class=\"boton\">
                \t<a href=\"";
        // line 41
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
        return "FfDemoBundle:Default:verificacionRematricula.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 41,  304 => 170,  300 => 168,  297 => 167,  293 => 165,  291 => 164,  286 => 163,  282 => 161,  279 => 160,  275 => 158,  272 => 157,  265 => 154,  261 => 152,  248 => 147,  244 => 146,  239 => 143,  215 => 125,  211 => 124,  207 => 123,  174 => 102,  153 => 85,  148 => 83,  137 => 76,  129 => 72,  126 => 71,  124 => 70,  97 => 59,  110 => 54,  84 => 44,  77 => 41,  58 => 29,  127 => 72,  118 => 66,  114 => 55,  83 => 51,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 173,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 155,  264 => 84,  258 => 151,  252 => 148,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 63,  61 => 13,  273 => 96,  269 => 94,  254 => 149,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 142,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 73,  119 => 42,  108 => 62,  102 => 32,  71 => 39,  67 => 15,  63 => 37,  59 => 30,  47 => 21,  94 => 48,  89 => 44,  85 => 25,  79 => 50,  75 => 40,  68 => 14,  56 => 9,  50 => 10,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 88,  156 => 66,  151 => 84,  142 => 59,  138 => 76,  136 => 56,  123 => 47,  121 => 59,  117 => 44,  115 => 68,  105 => 53,  101 => 51,  91 => 47,  69 => 25,  62 => 23,  49 => 19,  38 => 6,  28 => 3,  87 => 45,  72 => 16,  66 => 24,  55 => 15,  41 => 18,  29 => 3,  26 => 6,  98 => 50,  93 => 58,  88 => 6,  78 => 21,  46 => 20,  43 => 6,  40 => 8,  32 => 9,  44 => 12,  35 => 5,  31 => 5,  24 => 3,  22 => 2,  27 => 7,  25 => 3,  21 => 2,  19 => 1,  209 => 82,  203 => 122,  199 => 121,  193 => 73,  189 => 71,  187 => 112,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 81,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 62,  99 => 31,  95 => 28,  92 => 55,  86 => 54,  82 => 53,  80 => 42,  73 => 39,  64 => 17,  60 => 13,  57 => 11,  54 => 28,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 10,  30 => 7,);
    }
}
