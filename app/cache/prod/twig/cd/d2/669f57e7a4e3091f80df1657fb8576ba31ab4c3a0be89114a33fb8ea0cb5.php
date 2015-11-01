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
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>

<title>Fight and Fitness</title>

<Link  href = \"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/busqueda.css"), "html", null, true);
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

          ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
             
                <div class=\"titulo_form\"> BUSCAR ALUMNOS EN FIGHT FITNESS</div>
                         
          ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
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
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alumno"]) ? $context["alumno"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 57
            echo "        <tr>
          <td class=\"fila_1\">";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "apellidop"), "html", null, true);
            echo " </td>
        
          <td class=\"fila_1\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "apellidom"), "html", null, true);
            echo " </td>

          <td class=\"fila_2\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "nombre"), "html", null, true);
            echo "</td>

          
          <td class=\"fila_3\">
            <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("alumno", array("id" => $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "id"))), "html", null, true);
            echo "\">
              <img src=\"";
            // line 67
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
        // line 73
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
        return array (  932 => 421,  921 => 412,  918 => 411,  916 => 410,  913 => 409,  905 => 403,  899 => 400,  893 => 397,  887 => 394,  881 => 391,  875 => 388,  869 => 385,  860 => 378,  854 => 377,  851 => 376,  845 => 372,  838 => 370,  835 => 369,  833 => 368,  830 => 367,  828 => 366,  824 => 364,  817 => 362,  814 => 361,  812 => 360,  809 => 359,  807 => 358,  804 => 357,  797 => 354,  794 => 353,  792 => 352,  789 => 351,  787 => 350,  783 => 348,  780 => 347,  777 => 346,  773 => 345,  770 => 344,  767 => 343,  764 => 342,  761 => 341,  758 => 340,  755 => 339,  752 => 338,  750 => 337,  747 => 336,  738 => 329,  732 => 326,  726 => 323,  720 => 320,  714 => 317,  708 => 314,  702 => 311,  693 => 304,  687 => 303,  684 => 302,  678 => 298,  671 => 296,  668 => 295,  666 => 294,  663 => 293,  661 => 292,  657 => 290,  650 => 288,  647 => 287,  645 => 286,  642 => 285,  640 => 284,  637 => 283,  630 => 280,  627 => 279,  625 => 278,  622 => 277,  620 => 276,  616 => 274,  613 => 273,  610 => 272,  606 => 271,  603 => 270,  600 => 269,  597 => 268,  594 => 267,  591 => 266,  588 => 265,  585 => 264,  583 => 263,  580 => 262,  574 => 258,  568 => 255,  562 => 252,  556 => 249,  550 => 246,  544 => 243,  538 => 240,  529 => 233,  523 => 232,  520 => 231,  514 => 227,  507 => 225,  504 => 224,  502 => 223,  499 => 222,  497 => 221,  493 => 219,  486 => 217,  483 => 216,  481 => 215,  478 => 214,  476 => 213,  473 => 212,  466 => 209,  463 => 208,  458 => 206,  456 => 205,  452 => 203,  449 => 202,  446 => 201,  442 => 200,  439 => 199,  436 => 198,  433 => 197,  424 => 194,  421 => 193,  419 => 192,  416 => 191,  403 => 183,  397 => 180,  391 => 177,  385 => 174,  373 => 168,  364 => 161,  358 => 160,  349 => 155,  342 => 153,  339 => 152,  334 => 150,  332 => 149,  328 => 147,  321 => 145,  318 => 144,  316 => 143,  313 => 142,  311 => 141,  308 => 140,  301 => 137,  296 => 135,  287 => 131,  284 => 130,  281 => 129,  277 => 128,  274 => 127,  271 => 126,  262 => 123,  259 => 122,  256 => 121,  251 => 119,  245 => 115,  233 => 109,  197 => 87,  191 => 86,  188 => 85,  175 => 79,  172 => 78,  170 => 77,  167 => 76,  165 => 75,  161 => 73,  146 => 68,  134 => 63,  120 => 57,  104 => 58,  74 => 41,  304 => 170,  300 => 168,  297 => 167,  293 => 134,  291 => 133,  286 => 163,  282 => 161,  279 => 160,  275 => 158,  272 => 157,  265 => 124,  261 => 152,  248 => 147,  244 => 146,  239 => 112,  215 => 100,  211 => 124,  207 => 123,  174 => 102,  153 => 85,  148 => 83,  137 => 73,  129 => 61,  126 => 60,  124 => 59,  97 => 56,  110 => 54,  84 => 44,  77 => 41,  58 => 29,  127 => 72,  118 => 66,  114 => 62,  83 => 51,  480 => 162,  474 => 161,  469 => 158,  461 => 207,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 196,  427 => 195,  423 => 142,  413 => 134,  409 => 186,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 171,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 159,  341 => 105,  337 => 151,  322 => 101,  314 => 99,  312 => 173,  309 => 97,  305 => 95,  298 => 136,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 125,  264 => 84,  258 => 151,  252 => 148,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 53,  61 => 13,  273 => 96,  269 => 94,  254 => 120,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 142,  230 => 82,  227 => 106,  224 => 71,  221 => 103,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 62,  119 => 42,  108 => 62,  102 => 32,  71 => 39,  67 => 15,  63 => 37,  59 => 30,  47 => 21,  94 => 48,  89 => 47,  85 => 25,  79 => 50,  75 => 40,  68 => 14,  56 => 9,  50 => 10,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 88,  156 => 66,  151 => 70,  142 => 59,  138 => 76,  136 => 56,  123 => 47,  121 => 66,  117 => 56,  115 => 68,  105 => 53,  101 => 57,  91 => 47,  69 => 25,  62 => 23,  49 => 19,  38 => 6,  28 => 3,  87 => 46,  72 => 16,  66 => 24,  55 => 15,  41 => 18,  29 => 3,  26 => 6,  98 => 50,  93 => 48,  88 => 6,  78 => 21,  46 => 20,  43 => 6,  40 => 8,  32 => 9,  44 => 12,  35 => 5,  31 => 5,  24 => 3,  22 => 2,  27 => 7,  25 => 3,  21 => 2,  19 => 1,  209 => 97,  203 => 122,  199 => 121,  193 => 73,  189 => 71,  187 => 112,  182 => 81,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 71,  149 => 69,  147 => 58,  144 => 67,  141 => 66,  133 => 55,  130 => 41,  125 => 67,  122 => 43,  116 => 41,  112 => 42,  109 => 60,  106 => 33,  103 => 62,  99 => 31,  95 => 49,  92 => 48,  86 => 54,  82 => 44,  80 => 42,  73 => 39,  64 => 17,  60 => 13,  57 => 11,  54 => 28,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 10,  30 => 7,);
    }
}
