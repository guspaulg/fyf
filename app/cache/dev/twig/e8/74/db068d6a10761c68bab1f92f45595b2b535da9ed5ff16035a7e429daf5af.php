<?php

/* FfDemoBundle:Default:estadistica.html.twig */
class __TwigTemplate_e874db068d6a10761c68bab1f92f45595b2b535da9ed5ff16035a7e429daf5af extends Twig_Template
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

    <title>Peru Fight academy </title>

    <link href = \"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link href = \"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/lomio.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" >
    <link href = \"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" >

    <script src = \"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://code.jquery.com/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src = \"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <Link  href = \"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/estilos.css"), "html", null, true);
        echo "\" rel = \"stylesheet\" type = \"text/css\"  />

</head>

<body>

    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
          <div class=\"container-fluid\">
            <a href=\"http://www.incuba.pe\"><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/logo4.png"), "html", null, true);
        echo "\" class=\"logo\"></a>
            <div class=\"navbar-header\">
              <a class=\"navbar-brand\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("logout", array("slug" => ""));
        echo "\" >Cerrar Sesión</a>
            </div>
            
          </div>
    </nav>

    <div class=\"container-fluid\">
      <div class=\"row\">
        <div class=\"col-sm-3 col-md-2 sidebar\">
          <ul class=\"nav nav-sidebar\">
            
            
            <li class=\"active\"><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("ff_demo_homepage", array("slug" => ""));
        echo "\">Inicio <span class=\"sr-only\">(current)</span></a></li>
            
            <li><a href= \"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("Formulario", array("slug" => ""));
        echo "\"  >Matricular</a></li>

            <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("Vencer", array("slug" => ""));
        echo "\">Vencimientos</a></li>
      
            <li><a href=\"#\">Reportes</a></li>

          </ul>
        
        </div>

        <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">

            ";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
   
            ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "



          ";
        // line 56
        $context["matHombres"] = 0;
        // line 57
        echo "          ";
        $context["matMujeres"] = 0;
        // line 58
        echo "          ";
        $context["matReno"] = 0;
        // line 59
        echo "          ";
        $context["montoHombres"] = 0;
        // line 60
        echo "          ";
        $context["montoMujeres"] = 0;
        // line 61
        echo "          ";
        $context["montoReno"] = 0;
        // line 62
        echo "          ";
        $context["ingreso1"] = 0;
        // line 63
        echo "
          ";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["muay"]) ? $context["muay"] : $this->getContext($context, "muay")));
        foreach ($context['_seq'] as $context["_key"] => $context["muay1"]) {
            // line 65
            echo "                ";
            if (($this->getAttribute((isset($context["muay1"]) ? $context["muay1"] : $this->getContext($context, "muay1")), "fechainicio") >= (isset($context["fechai"]) ? $context["fechai"] : $this->getContext($context, "fechai")))) {
                // line 66
                echo "                    ";
                if (($this->getAttribute((isset($context["muay1"]) ? $context["muay1"] : $this->getContext($context, "muay1")), "fechainicio") <= (isset($context["fechaf"]) ? $context["fechaf"] : $this->getContext($context, "fechaf")))) {
                    // line 67
                    echo "

                            ";
                    // line 69
                    if (($this->getAttribute((isset($context["muay1"]) ? $context["muay1"] : $this->getContext($context, "muay1")), "sexo") == 1)) {
                        // line 70
                        echo "
                                  ";
                        // line 71
                        $context["matMujeres"] = (1 + (isset($context["matMujeres"]) ? $context["matMujeres"] : $this->getContext($context, "matMujeres")));
                        // line 72
                        echo "                                  ";
                        $context["montoMujeres"] = ($this->getAttribute((isset($context["muay1"]) ? $context["muay1"] : $this->getContext($context, "muay1")), "precio") + (isset($context["montoMujeres"]) ? $context["montoMujeres"] : $this->getContext($context, "montoMujeres")));
                        // line 73
                        echo "                                  ";
                        $context["ingreso1"] = ($this->getAttribute((isset($context["muay1"]) ? $context["muay1"] : $this->getContext($context, "muay1")), "precio") + (isset($context["ingreso1"]) ? $context["ingreso1"] : $this->getContext($context, "ingreso1")));
                        echo "  

                            ";
                    }
                    // line 76
                    echo "
                            ";
                    // line 77
                    if (($this->getAttribute((isset($context["muay1"]) ? $context["muay1"] : $this->getContext($context, "muay1")), "sexo") == 2)) {
                        // line 78
                        echo "
                                  ";
                        // line 79
                        $context["matHombres"] = (1 + (isset($context["matHombres"]) ? $context["matHombres"] : $this->getContext($context, "matHombres")));
                        // line 80
                        echo "                                  ";
                        $context["montoHombres"] = ($this->getAttribute((isset($context["muay1"]) ? $context["muay1"] : $this->getContext($context, "muay1")), "precio") + (isset($context["montoHombres"]) ? $context["montoHombres"] : $this->getContext($context, "montoHombres")));
                        // line 81
                        echo "                                  ";
                        $context["ingreso1"] = ($this->getAttribute((isset($context["muay1"]) ? $context["muay1"] : $this->getContext($context, "muay1")), "precio") + (isset($context["ingreso1"]) ? $context["ingreso1"] : $this->getContext($context, "ingreso1")));
                        echo "  

                            ";
                    }
                    // line 83
                    echo "     

                            ";
                    // line 85
                    if (($this->getAttribute((isset($context["muay1"]) ? $context["muay1"] : $this->getContext($context, "muay1")), "sexo") == 3)) {
                        // line 86
                        echo "
                                  ";
                        // line 87
                        $context["matReno"] = (1 + (isset($context["matReno"]) ? $context["matReno"] : $this->getContext($context, "matReno")));
                        // line 88
                        echo "                                  ";
                        $context["montoReno"] = ($this->getAttribute((isset($context["muay1"]) ? $context["muay1"] : $this->getContext($context, "muay1")), "precio") + (isset($context["montoReno"]) ? $context["montoReno"] : $this->getContext($context, "montoReno")));
                        // line 89
                        echo "                                  ";
                        $context["ingreso1"] = ($this->getAttribute((isset($context["muay1"]) ? $context["muay1"] : $this->getContext($context, "muay1")), "precio") + (isset($context["ingreso1"]) ? $context["ingreso1"] : $this->getContext($context, "ingreso1")));
                        echo "  

                            ";
                    }
                    // line 91
                    echo "  


                    ";
                }
                // line 95
                echo "                ";
            }
            // line 96
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['muay1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                      <th> </th>
                      <th>Nuev. Matr. V.</th>
                      <th>Nuev. Matr. M.</th>
                      <th>Matr. Renovadas</th>
                      <th>Monto Matr. V.</th>
                      <th>Monto Matr. M.</th>
                      <th>Monto Renovadas</th>
                      <th>Monto Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <th> Muay thai</th>
                      <th class=\"asul\">";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["matHombres"]) ? $context["matHombres"] : $this->getContext($context, "matHombres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["matMujeres"]) ? $context["matMujeres"] : $this->getContext($context, "matMujeres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["matReno"]) ? $context["matReno"] : $this->getContext($context, "matReno")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["montoHombres"]) ? $context["montoHombres"] : $this->getContext($context, "montoHombres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["montoMujeres"]) ? $context["montoMujeres"] : $this->getContext($context, "montoMujeres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["montoReno"]) ? $context["montoReno"] : $this->getContext($context, "montoReno")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["ingreso1"]) ? $context["ingreso1"] : $this->getContext($context, "ingreso1")), "html", null, true);
        echo "</th>
                    </tr>
                
";
        // line 124
        echo "
          ";
        // line 125
        $context["matHombres"] = 0;
        // line 126
        echo "          ";
        $context["matMujeres"] = 0;
        // line 127
        echo "          ";
        $context["matReno"] = 0;
        // line 128
        echo "          ";
        $context["montoHombres"] = 0;
        // line 129
        echo "          ";
        $context["montoMujeres"] = 0;
        // line 130
        echo "          ";
        $context["montoReno"] = 0;
        // line 131
        echo "          ";
        $context["ingreso2"] = 0;
        // line 132
        echo "
          ";
        // line 133
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["boxand"]) ? $context["boxand"] : $this->getContext($context, "boxand")));
        foreach ($context['_seq'] as $context["_key"] => $context["jiu1"]) {
            // line 134
            echo "                ";
            if (($this->getAttribute((isset($context["jiu1"]) ? $context["jiu1"] : $this->getContext($context, "jiu1")), "fechainicio") >= (isset($context["fechai"]) ? $context["fechai"] : $this->getContext($context, "fechai")))) {
                // line 135
                echo "                    ";
                if (($this->getAttribute((isset($context["jiu1"]) ? $context["jiu1"] : $this->getContext($context, "jiu1")), "fechainicio") <= (isset($context["fechaf"]) ? $context["fechaf"] : $this->getContext($context, "fechaf")))) {
                    // line 136
                    echo "

                            ";
                    // line 138
                    if (($this->getAttribute((isset($context["jiu1"]) ? $context["jiu1"] : $this->getContext($context, "jiu1")), "sexo") == 1)) {
                        // line 139
                        echo "
                                  ";
                        // line 140
                        $context["matMujeres"] = (1 + (isset($context["matMujeres"]) ? $context["matMujeres"] : $this->getContext($context, "matMujeres")));
                        // line 141
                        echo "                                  ";
                        $context["montoMujeres"] = ($this->getAttribute((isset($context["jiu1"]) ? $context["jiu1"] : $this->getContext($context, "jiu1")), "precio") + (isset($context["montoMujeres"]) ? $context["montoMujeres"] : $this->getContext($context, "montoMujeres")));
                        // line 142
                        echo "                                  ";
                        $context["ingreso2"] = ($this->getAttribute((isset($context["jiu1"]) ? $context["jiu1"] : $this->getContext($context, "jiu1")), "precio") + (isset($context["ingreso2"]) ? $context["ingreso2"] : $this->getContext($context, "ingreso2")));
                        echo "  

                            ";
                    }
                    // line 145
                    echo "
                            ";
                    // line 146
                    if (($this->getAttribute((isset($context["jiu1"]) ? $context["jiu1"] : $this->getContext($context, "jiu1")), "sexo") == 2)) {
                        // line 147
                        echo "
                                  ";
                        // line 148
                        $context["matHombres"] = (1 + (isset($context["matHombres"]) ? $context["matHombres"] : $this->getContext($context, "matHombres")));
                        // line 149
                        echo "                                  ";
                        $context["montoHombres"] = ($this->getAttribute((isset($context["jiu1"]) ? $context["jiu1"] : $this->getContext($context, "jiu1")), "precio") + (isset($context["montoHombres"]) ? $context["montoHombres"] : $this->getContext($context, "montoHombres")));
                        // line 150
                        echo "                                  ";
                        $context["ingreso2"] = ($this->getAttribute((isset($context["jiu1"]) ? $context["jiu1"] : $this->getContext($context, "jiu1")), "precio") + (isset($context["ingreso2"]) ? $context["ingreso2"] : $this->getContext($context, "ingreso2")));
                        echo "  

                            ";
                    }
                    // line 152
                    echo "     

                            ";
                    // line 154
                    if (($this->getAttribute((isset($context["jiu1"]) ? $context["jiu1"] : $this->getContext($context, "jiu1")), "sexo") == 3)) {
                        // line 155
                        echo "
                                  ";
                        // line 156
                        $context["matReno"] = (1 + (isset($context["matReno"]) ? $context["matReno"] : $this->getContext($context, "matReno")));
                        // line 157
                        echo "                                  ";
                        $context["montoReno"] = ($this->getAttribute((isset($context["jiu1"]) ? $context["jiu1"] : $this->getContext($context, "jiu1")), "precio") + (isset($context["montoReno"]) ? $context["montoReno"] : $this->getContext($context, "montoReno")));
                        // line 158
                        echo "                                  ";
                        $context["ingreso2"] = ($this->getAttribute((isset($context["jiu1"]) ? $context["jiu1"] : $this->getContext($context, "jiu1")), "precio") + (isset($context["ingreso2"]) ? $context["ingreso2"] : $this->getContext($context, "ingreso2")));
                        echo "  

                            ";
                    }
                    // line 160
                    echo "  


                    ";
                }
                // line 164
                echo "                ";
            }
            // line 165
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jiu1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "

                    <tr>
                      <th> Box and fitness</th>
                      <th class=\"asul\">";
        // line 170
        echo twig_escape_filter($this->env, (isset($context["matHombres"]) ? $context["matHombres"] : $this->getContext($context, "matHombres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["matMujeres"]) ? $context["matMujeres"] : $this->getContext($context, "matMujeres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">";
        // line 172
        echo twig_escape_filter($this->env, (isset($context["matReno"]) ? $context["matReno"] : $this->getContext($context, "matReno")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 173
        echo twig_escape_filter($this->env, (isset($context["montoHombres"]) ? $context["montoHombres"] : $this->getContext($context, "montoHombres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["montoMujeres"]) ? $context["montoMujeres"] : $this->getContext($context, "montoMujeres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["montoReno"]) ? $context["montoReno"] : $this->getContext($context, "montoReno")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 176
        echo twig_escape_filter($this->env, (isset($context["ingreso2"]) ? $context["ingreso2"] : $this->getContext($context, "ingreso2")), "html", null, true);
        echo "</th>
                    </tr>


";
        // line 181
        echo "
          ";
        // line 182
        $context["matHombres"] = 0;
        // line 183
        echo "          ";
        $context["matMujeres"] = 0;
        // line 184
        echo "          ";
        $context["matReno"] = 0;
        // line 185
        echo "          ";
        $context["montoHombres"] = 0;
        // line 186
        echo "          ";
        $context["montoMujeres"] = 0;
        // line 187
        echo "          ";
        $context["montoReno"] = 0;
        // line 188
        echo "          ";
        $context["ingreso3"] = 0;
        // line 189
        echo "
          ";
        // line 190
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["box"]) ? $context["box"] : $this->getContext($context, "box")));
        foreach ($context['_seq'] as $context["_key"] => $context["box1"]) {
            // line 191
            echo "                ";
            if (($this->getAttribute((isset($context["box1"]) ? $context["box1"] : $this->getContext($context, "box1")), "fechainicio") >= (isset($context["fechai"]) ? $context["fechai"] : $this->getContext($context, "fechai")))) {
                // line 192
                echo "                    ";
                if (($this->getAttribute((isset($context["box1"]) ? $context["box1"] : $this->getContext($context, "box1")), "fechainicio") <= (isset($context["fechaf"]) ? $context["fechaf"] : $this->getContext($context, "fechaf")))) {
                    // line 193
                    echo "

                            ";
                    // line 195
                    if (($this->getAttribute((isset($context["box1"]) ? $context["box1"] : $this->getContext($context, "box1")), "sexo") == 1)) {
                        // line 196
                        echo "
                                  ";
                        // line 197
                        $context["matMujeres"] = (1 + (isset($context["matMujeres"]) ? $context["matMujeres"] : $this->getContext($context, "matMujeres")));
                        // line 198
                        echo "                                  ";
                        $context["montoMujeres"] = ($this->getAttribute((isset($context["box1"]) ? $context["box1"] : $this->getContext($context, "box1")), "precio") + (isset($context["montoMujeres"]) ? $context["montoMujeres"] : $this->getContext($context, "montoMujeres")));
                        // line 199
                        echo "                                  ";
                        $context["ingreso3"] = ($this->getAttribute((isset($context["box1"]) ? $context["box1"] : $this->getContext($context, "box1")), "precio") + (isset($context["ingreso3"]) ? $context["ingreso3"] : $this->getContext($context, "ingreso3")));
                        echo "  

                            ";
                    }
                    // line 202
                    echo "
                            ";
                    // line 203
                    if (($this->getAttribute((isset($context["box1"]) ? $context["box1"] : $this->getContext($context, "box1")), "sexo") == 2)) {
                        // line 204
                        echo "
                                  ";
                        // line 205
                        $context["matHombres"] = (1 + (isset($context["matHombres"]) ? $context["matHombres"] : $this->getContext($context, "matHombres")));
                        // line 206
                        echo "                                  ";
                        $context["montoHombres"] = ($this->getAttribute((isset($context["box1"]) ? $context["box1"] : $this->getContext($context, "box1")), "precio") + (isset($context["montoHombres"]) ? $context["montoHombres"] : $this->getContext($context, "montoHombres")));
                        // line 207
                        echo "                                  ";
                        $context["ingreso3"] = ($this->getAttribute((isset($context["box1"]) ? $context["box1"] : $this->getContext($context, "box1")), "precio") + (isset($context["ingreso3"]) ? $context["ingreso3"] : $this->getContext($context, "ingreso3")));
                        echo "  

                            ";
                    }
                    // line 209
                    echo "     

                            ";
                    // line 211
                    if (($this->getAttribute((isset($context["box1"]) ? $context["box1"] : $this->getContext($context, "box1")), "sexo") == 3)) {
                        // line 212
                        echo "
                                  ";
                        // line 213
                        $context["matReno"] = (1 + (isset($context["matReno"]) ? $context["matReno"] : $this->getContext($context, "matReno")));
                        // line 214
                        echo "                                  ";
                        $context["montoReno"] = ($this->getAttribute((isset($context["box1"]) ? $context["box1"] : $this->getContext($context, "box1")), "precio") + (isset($context["montoReno"]) ? $context["montoReno"] : $this->getContext($context, "montoReno")));
                        // line 215
                        echo "                                  ";
                        $context["ingreso3"] = ($this->getAttribute((isset($context["box1"]) ? $context["box1"] : $this->getContext($context, "box1")), "precio") + (isset($context["ingreso3"]) ? $context["ingreso3"] : $this->getContext($context, "ingreso3")));
                        echo "  

                            ";
                    }
                    // line 217
                    echo "  


                    ";
                }
                // line 221
                echo "                ";
            }
            // line 222
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['box1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "
                    <tr>
                      <th> BoX</th>
                      <th class=\"asul\">";
        // line 226
        echo twig_escape_filter($this->env, (isset($context["matHombres"]) ? $context["matHombres"] : $this->getContext($context, "matHombres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">";
        // line 227
        echo twig_escape_filter($this->env, (isset($context["matMujeres"]) ? $context["matMujeres"] : $this->getContext($context, "matMujeres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">";
        // line 228
        echo twig_escape_filter($this->env, (isset($context["matReno"]) ? $context["matReno"] : $this->getContext($context, "matReno")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 229
        echo twig_escape_filter($this->env, (isset($context["montoHombres"]) ? $context["montoHombres"] : $this->getContext($context, "montoHombres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 230
        echo twig_escape_filter($this->env, (isset($context["montoMujeres"]) ? $context["montoMujeres"] : $this->getContext($context, "montoMujeres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 231
        echo twig_escape_filter($this->env, (isset($context["montoReno"]) ? $context["montoReno"] : $this->getContext($context, "montoReno")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 232
        echo twig_escape_filter($this->env, (isset($context["ingreso3"]) ? $context["ingreso3"] : $this->getContext($context, "ingreso3")), "html", null, true);
        echo "</th>
                    </tr>

";
        // line 236
        echo "
          ";
        // line 237
        $context["matHombres"] = 0;
        // line 238
        echo "          ";
        $context["matMujeres"] = 0;
        // line 239
        echo "          ";
        $context["matReno"] = 0;
        // line 240
        echo "          ";
        $context["montoHombres"] = 0;
        // line 241
        echo "          ";
        $context["montoMujeres"] = 0;
        // line 242
        echo "          ";
        $context["montoReno"] = 0;
        // line 243
        echo "          ";
        $context["ingreso4"] = 0;
        // line 244
        echo "
          ";
        // line 245
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mma"]) ? $context["mma"] : $this->getContext($context, "mma")));
        foreach ($context['_seq'] as $context["_key"] => $context["mma1"]) {
            // line 246
            echo "                ";
            if (($this->getAttribute((isset($context["mma1"]) ? $context["mma1"] : $this->getContext($context, "mma1")), "fechainicio") >= (isset($context["fechai"]) ? $context["fechai"] : $this->getContext($context, "fechai")))) {
                // line 247
                echo "                    ";
                if (($this->getAttribute((isset($context["mma1"]) ? $context["mma1"] : $this->getContext($context, "mma1")), "fechainicio") <= (isset($context["fechaf"]) ? $context["fechaf"] : $this->getContext($context, "fechaf")))) {
                    // line 248
                    echo "

                            ";
                    // line 250
                    if (($this->getAttribute((isset($context["mma1"]) ? $context["mma1"] : $this->getContext($context, "mma1")), "sexo") == 1)) {
                        // line 251
                        echo "
                                  ";
                        // line 252
                        $context["matMujeres"] = (1 + (isset($context["matMujeres"]) ? $context["matMujeres"] : $this->getContext($context, "matMujeres")));
                        // line 253
                        echo "                                  ";
                        $context["montoMujeres"] = ($this->getAttribute((isset($context["mma1"]) ? $context["mma1"] : $this->getContext($context, "mma1")), "precio") + (isset($context["montoMujeres"]) ? $context["montoMujeres"] : $this->getContext($context, "montoMujeres")));
                        // line 254
                        echo "                                  ";
                        $context["ingreso4"] = ($this->getAttribute((isset($context["mma1"]) ? $context["mma1"] : $this->getContext($context, "mma1")), "precio") + (isset($context["ingreso4"]) ? $context["ingreso4"] : $this->getContext($context, "ingreso4")));
                        echo "  

                            ";
                    }
                    // line 257
                    echo "
                            ";
                    // line 258
                    if (($this->getAttribute((isset($context["mma1"]) ? $context["mma1"] : $this->getContext($context, "mma1")), "sexo") == 2)) {
                        // line 259
                        echo "
                                  ";
                        // line 260
                        $context["matHombres"] = (1 + (isset($context["matHombres"]) ? $context["matHombres"] : $this->getContext($context, "matHombres")));
                        // line 261
                        echo "                                  ";
                        $context["montoHombres"] = ($this->getAttribute((isset($context["mma1"]) ? $context["mma1"] : $this->getContext($context, "mma1")), "precio") + (isset($context["montoHombres"]) ? $context["montoHombres"] : $this->getContext($context, "montoHombres")));
                        // line 262
                        echo "                                  ";
                        $context["ingreso4"] = ($this->getAttribute((isset($context["mma1"]) ? $context["mma1"] : $this->getContext($context, "mma1")), "precio") + (isset($context["ingreso4"]) ? $context["ingreso4"] : $this->getContext($context, "ingreso4")));
                        echo "  

                            ";
                    }
                    // line 264
                    echo "     

                            ";
                    // line 266
                    if (($this->getAttribute((isset($context["mma1"]) ? $context["mma1"] : $this->getContext($context, "mma1")), "sexo") == 3)) {
                        // line 267
                        echo "
                                  ";
                        // line 268
                        $context["matReno"] = (1 + (isset($context["matReno"]) ? $context["matReno"] : $this->getContext($context, "matReno")));
                        // line 269
                        echo "                                  ";
                        $context["montoReno"] = ($this->getAttribute((isset($context["mma1"]) ? $context["mma1"] : $this->getContext($context, "mma1")), "precio") + (isset($context["montoReno"]) ? $context["montoReno"] : $this->getContext($context, "montoReno")));
                        // line 270
                        echo "                                  ";
                        $context["ingreso4"] = ($this->getAttribute((isset($context["mma1"]) ? $context["mma1"] : $this->getContext($context, "mma1")), "precio") + (isset($context["ingreso4"]) ? $context["ingreso4"] : $this->getContext($context, "ingreso4")));
                        echo "  

                            ";
                    }
                    // line 272
                    echo "  


                    ";
                }
                // line 276
                echo "                ";
            }
            // line 277
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mma1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 278
        echo "

                    <tr>
                      <th> Mma</th>
                      <th class=\"asul\">";
        // line 282
        echo twig_escape_filter($this->env, (isset($context["matHombres"]) ? $context["matHombres"] : $this->getContext($context, "matHombres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">";
        // line 283
        echo twig_escape_filter($this->env, (isset($context["matMujeres"]) ? $context["matMujeres"] : $this->getContext($context, "matMujeres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">";
        // line 284
        echo twig_escape_filter($this->env, (isset($context["matReno"]) ? $context["matReno"] : $this->getContext($context, "matReno")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 285
        echo twig_escape_filter($this->env, (isset($context["montoHombres"]) ? $context["montoHombres"] : $this->getContext($context, "montoHombres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 286
        echo twig_escape_filter($this->env, (isset($context["montoMujeres"]) ? $context["montoMujeres"] : $this->getContext($context, "montoMujeres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 287
        echo twig_escape_filter($this->env, (isset($context["montoReno"]) ? $context["montoReno"] : $this->getContext($context, "montoReno")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 288
        echo twig_escape_filter($this->env, (isset($context["ingreso4"]) ? $context["ingreso4"] : $this->getContext($context, "ingreso4")), "html", null, true);
        echo "</th>
                    </tr>

";
        // line 292
        echo "
          ";
        // line 293
        $context["matHombres"] = 0;
        // line 294
        echo "          ";
        $context["matMujeres"] = 0;
        // line 295
        echo "          ";
        $context["matReno"] = 0;
        // line 296
        echo "          ";
        $context["montoHombres"] = 0;
        // line 297
        echo "          ";
        $context["montoMujeres"] = 0;
        // line 298
        echo "          ";
        $context["montoReno"] = 0;
        // line 299
        echo "          ";
        $context["ingreso5"] = 0;
        // line 300
        echo "
          ";
        // line 301
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["judo"]) ? $context["judo"] : $this->getContext($context, "judo")));
        foreach ($context['_seq'] as $context["_key"] => $context["judo1"]) {
            // line 302
            echo "                ";
            if (($this->getAttribute((isset($context["judo1"]) ? $context["judo1"] : $this->getContext($context, "judo1")), "fechainicio") >= (isset($context["fechai"]) ? $context["fechai"] : $this->getContext($context, "fechai")))) {
                // line 303
                echo "                    ";
                if (($this->getAttribute((isset($context["judo1"]) ? $context["judo1"] : $this->getContext($context, "judo1")), "fechainicio") <= (isset($context["fechaf"]) ? $context["fechaf"] : $this->getContext($context, "fechaf")))) {
                    // line 304
                    echo "

                            ";
                    // line 306
                    if (($this->getAttribute((isset($context["judo1"]) ? $context["judo1"] : $this->getContext($context, "judo1")), "sexo") == 1)) {
                        // line 307
                        echo "
                                  ";
                        // line 308
                        $context["matMujeres"] = (1 + (isset($context["matMujeres"]) ? $context["matMujeres"] : $this->getContext($context, "matMujeres")));
                        // line 309
                        echo "                                  ";
                        $context["montoMujeres"] = ($this->getAttribute((isset($context["judo1"]) ? $context["judo1"] : $this->getContext($context, "judo1")), "precio") + (isset($context["montoMujeres"]) ? $context["montoMujeres"] : $this->getContext($context, "montoMujeres")));
                        // line 310
                        echo "                                  ";
                        $context["ingreso5"] = ($this->getAttribute((isset($context["judo1"]) ? $context["judo1"] : $this->getContext($context, "judo1")), "precio") + (isset($context["ingreso5"]) ? $context["ingreso5"] : $this->getContext($context, "ingreso5")));
                        echo "  

                            ";
                    }
                    // line 313
                    echo "
                            ";
                    // line 314
                    if (($this->getAttribute((isset($context["judo1"]) ? $context["judo1"] : $this->getContext($context, "judo1")), "sexo") == 2)) {
                        // line 315
                        echo "
                                  ";
                        // line 316
                        $context["matHombres"] = (1 + (isset($context["matHombres"]) ? $context["matHombres"] : $this->getContext($context, "matHombres")));
                        // line 317
                        echo "                                  ";
                        $context["montoHombres"] = ($this->getAttribute((isset($context["judo1"]) ? $context["judo1"] : $this->getContext($context, "judo1")), "precio") + (isset($context["montoHombres"]) ? $context["montoHombres"] : $this->getContext($context, "montoHombres")));
                        // line 318
                        echo "                                  ";
                        $context["ingreso4"] = ($this->getAttribute((isset($context["judo1"]) ? $context["judo1"] : $this->getContext($context, "judo1")), "precio") + (isset($context["ingreso4"]) ? $context["ingreso4"] : $this->getContext($context, "ingreso4")));
                        echo "  

                            ";
                    }
                    // line 320
                    echo "     

                            ";
                    // line 322
                    if (($this->getAttribute((isset($context["judo1"]) ? $context["judo1"] : $this->getContext($context, "judo1")), "sexo") == 3)) {
                        // line 323
                        echo "
                                  ";
                        // line 324
                        $context["matReno"] = (1 + (isset($context["matReno"]) ? $context["matReno"] : $this->getContext($context, "matReno")));
                        // line 325
                        echo "                                  ";
                        $context["montoReno"] = ($this->getAttribute((isset($context["judo1"]) ? $context["judo1"] : $this->getContext($context, "judo1")), "precio") + (isset($context["montoReno"]) ? $context["montoReno"] : $this->getContext($context, "montoReno")));
                        // line 326
                        echo "                                  ";
                        $context["ingreso4"] = ($this->getAttribute((isset($context["judo1"]) ? $context["judo1"] : $this->getContext($context, "judo1")), "precio") + (isset($context["ingreso4"]) ? $context["ingreso4"] : $this->getContext($context, "ingreso4")));
                        echo "  

                            ";
                    }
                    // line 328
                    echo "  


                    ";
                }
                // line 332
                echo "                ";
            }
            // line 333
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judo1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 334
        echo "

                    <tr>
                      <th> Judo</th>
                      <th class=\"asul\">";
        // line 338
        echo twig_escape_filter($this->env, (isset($context["matHombres"]) ? $context["matHombres"] : $this->getContext($context, "matHombres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">";
        // line 339
        echo twig_escape_filter($this->env, (isset($context["matMujeres"]) ? $context["matMujeres"] : $this->getContext($context, "matMujeres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">";
        // line 340
        echo twig_escape_filter($this->env, (isset($context["matReno"]) ? $context["matReno"] : $this->getContext($context, "matReno")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 341
        echo twig_escape_filter($this->env, (isset($context["montoHombres"]) ? $context["montoHombres"] : $this->getContext($context, "montoHombres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 342
        echo twig_escape_filter($this->env, (isset($context["montoMujeres"]) ? $context["montoMujeres"] : $this->getContext($context, "montoMujeres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 343
        echo twig_escape_filter($this->env, (isset($context["montoReno"]) ? $context["montoReno"] : $this->getContext($context, "montoReno")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 344
        echo twig_escape_filter($this->env, (isset($context["ingreso5"]) ? $context["ingreso5"] : $this->getContext($context, "ingreso5")), "html", null, true);
        echo "</th>
                    </tr>

";
        // line 348
        echo "





";
        // line 355
        echo "






          ";
        // line 362
        $context["ingreso6"] = 0;
        // line 363
        echo "          ";
        $context["ingreso6"] = (((((isset($context["ingreso1"]) ? $context["ingreso1"] : $this->getContext($context, "ingreso1")) + (isset($context["ingreso2"]) ? $context["ingreso2"] : $this->getContext($context, "ingreso2"))) + (isset($context["ingreso3"]) ? $context["ingreso3"] : $this->getContext($context, "ingreso3"))) + (isset($context["ingreso4"]) ? $context["ingreso4"] : $this->getContext($context, "ingreso4"))) + (isset($context["ingreso5"]) ? $context["ingreso5"] : $this->getContext($context, "ingreso5")));
        // line 364
        echo "
                    <tr>
                      <th class=\"asul\"> </th>
                      <th class=\"asul\"></th>
                      <th class=\"asul\"></th>
                      <th class=\"asul\"></th>
                      <th class=\"asul\"></th>
                      <th class=\"asul\"></th>
                      <th class=\"asul\"></th>
                      <th class=\"asul\"> S/.";
        // line 373
        echo twig_escape_filter($this->env, (isset($context["ingreso6"]) ? $context["ingreso6"] : $this->getContext($context, "ingreso6")), "html", null, true);
        echo "</th>
                    </tr>

                </tbody>
            </table>

        </div>
        
    </div>
</div>

</body>


</html>";
    }

    public function getTemplateName()
    {
        return "FfDemoBundle:Default:estadistica.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  903 => 373,  892 => 364,  889 => 363,  887 => 362,  878 => 355,  870 => 348,  864 => 344,  860 => 343,  856 => 342,  852 => 341,  848 => 340,  844 => 339,  840 => 338,  834 => 334,  828 => 333,  825 => 332,  819 => 328,  812 => 326,  809 => 325,  807 => 324,  804 => 323,  802 => 322,  798 => 320,  791 => 318,  788 => 317,  786 => 316,  783 => 315,  781 => 314,  778 => 313,  771 => 310,  768 => 309,  766 => 308,  763 => 307,  761 => 306,  757 => 304,  754 => 303,  751 => 302,  747 => 301,  744 => 300,  741 => 299,  738 => 298,  735 => 297,  732 => 296,  729 => 295,  726 => 294,  724 => 293,  721 => 292,  715 => 288,  711 => 287,  707 => 286,  703 => 285,  699 => 284,  695 => 283,  691 => 282,  685 => 278,  679 => 277,  676 => 276,  670 => 272,  663 => 270,  660 => 269,  658 => 268,  655 => 267,  653 => 266,  649 => 264,  642 => 262,  639 => 261,  637 => 260,  634 => 259,  632 => 258,  629 => 257,  622 => 254,  619 => 253,  617 => 252,  614 => 251,  612 => 250,  608 => 248,  605 => 247,  602 => 246,  598 => 245,  595 => 244,  592 => 243,  589 => 242,  586 => 241,  583 => 240,  580 => 239,  577 => 238,  575 => 237,  572 => 236,  566 => 232,  562 => 231,  558 => 230,  554 => 229,  550 => 228,  546 => 227,  542 => 226,  537 => 223,  531 => 222,  528 => 221,  522 => 217,  515 => 215,  512 => 214,  510 => 213,  507 => 212,  505 => 211,  501 => 209,  494 => 207,  491 => 206,  489 => 205,  486 => 204,  484 => 203,  481 => 202,  474 => 199,  471 => 198,  469 => 197,  466 => 196,  464 => 195,  460 => 193,  457 => 192,  454 => 191,  450 => 190,  447 => 189,  444 => 188,  441 => 187,  438 => 186,  435 => 185,  432 => 184,  429 => 183,  427 => 182,  424 => 181,  417 => 176,  413 => 175,  409 => 174,  405 => 173,  401 => 172,  397 => 171,  393 => 170,  387 => 166,  381 => 165,  378 => 164,  372 => 160,  365 => 158,  362 => 157,  360 => 156,  357 => 155,  355 => 154,  351 => 152,  344 => 150,  341 => 149,  339 => 148,  336 => 147,  334 => 146,  331 => 145,  324 => 142,  321 => 141,  319 => 140,  316 => 139,  314 => 138,  310 => 136,  307 => 135,  304 => 134,  300 => 133,  297 => 132,  294 => 131,  291 => 130,  288 => 129,  285 => 128,  282 => 127,  279 => 126,  277 => 125,  274 => 124,  268 => 120,  264 => 119,  260 => 118,  256 => 117,  252 => 116,  248 => 115,  244 => 114,  225 => 97,  219 => 96,  216 => 95,  210 => 91,  203 => 89,  200 => 88,  198 => 87,  195 => 86,  193 => 85,  189 => 83,  182 => 81,  179 => 80,  177 => 79,  174 => 78,  172 => 77,  169 => 76,  162 => 73,  159 => 72,  157 => 71,  154 => 70,  152 => 69,  148 => 67,  145 => 66,  142 => 65,  138 => 64,  135 => 63,  132 => 62,  129 => 61,  126 => 60,  123 => 59,  120 => 58,  117 => 57,  115 => 56,  108 => 52,  103 => 50,  90 => 40,  85 => 38,  80 => 36,  65 => 24,  60 => 22,  49 => 14,  44 => 12,  40 => 11,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
