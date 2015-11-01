<?php

/* FfDemoBundle:Default:estadistica2.html.twig */
class __TwigTemplate_6990b403dc7c273fcbe1432577cf70a9a9357a703a0e282d5bb4424444447fb6 extends Twig_Template
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

          ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
             
                <div class=\"titulo_form\"> INGRESAR LAS FECHAS A ANALIZAR</div>
                         
          ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

          ";
        // line 46
        $context["matHombres"] = 0;
        // line 47
        echo "          ";
        $context["matMujeres"] = 0;
        // line 48
        echo "          ";
        $context["matReno"] = 0;
        // line 49
        echo "          ";
        $context["montoHombres"] = 0;
        // line 50
        echo "          ";
        $context["montoMujeres"] = 0;
        // line 51
        echo "          ";
        $context["montoReno"] = 0;
        // line 52
        echo "          ";
        $context["ingreso1"] = 0;
        // line 53
        echo "
          ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["muay"]) ? $context["muay"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["muay1"]) {
            // line 55
            echo "                ";
            if (($this->getAttribute((isset($context["muay1"]) ? $context["muay1"] : null), "fechainicio") >= (isset($context["fechai"]) ? $context["fechai"] : null))) {
                // line 56
                echo "                    ";
                if (($this->getAttribute((isset($context["muay1"]) ? $context["muay1"] : null), "fechainicio") <= (isset($context["fechaf"]) ? $context["fechaf"] : null))) {
                    // line 57
                    echo "

                            ";
                    // line 59
                    if (($this->getAttribute((isset($context["muay1"]) ? $context["muay1"] : null), "sexo") == 1)) {
                        // line 60
                        echo "
                                  ";
                        // line 61
                        $context["matMujeres"] = (1 + (isset($context["matMujeres"]) ? $context["matMujeres"] : null));
                        // line 62
                        echo "                                  ";
                        $context["montoMujeres"] = ($this->getAttribute((isset($context["muay1"]) ? $context["muay1"] : null), "precio") + (isset($context["montoMujeres"]) ? $context["montoMujeres"] : null));
                        // line 63
                        echo "                                  ";
                        $context["ingreso1"] = ($this->getAttribute((isset($context["muay1"]) ? $context["muay1"] : null), "precio") + (isset($context["ingreso1"]) ? $context["ingreso1"] : null));
                        echo "  

                            ";
                    }
                    // line 66
                    echo "
                            ";
                    // line 67
                    if (($this->getAttribute((isset($context["muay1"]) ? $context["muay1"] : null), "sexo") == 2)) {
                        // line 68
                        echo "
                                  ";
                        // line 69
                        $context["matHombres"] = (1 + (isset($context["matHombres"]) ? $context["matHombres"] : null));
                        // line 70
                        echo "                                  ";
                        $context["montoHombres"] = ($this->getAttribute((isset($context["muay1"]) ? $context["muay1"] : null), "precio") + (isset($context["montoHombres"]) ? $context["montoHombres"] : null));
                        // line 71
                        echo "                                  ";
                        $context["ingreso1"] = ($this->getAttribute((isset($context["muay1"]) ? $context["muay1"] : null), "precio") + (isset($context["ingreso1"]) ? $context["ingreso1"] : null));
                        echo "  

                            ";
                    }
                    // line 73
                    echo "     

                            ";
                    // line 75
                    if (($this->getAttribute((isset($context["muay1"]) ? $context["muay1"] : null), "sexo") == 3)) {
                        // line 76
                        echo "
                                  ";
                        // line 77
                        $context["matReno"] = (1 + (isset($context["matReno"]) ? $context["matReno"] : null));
                        // line 78
                        echo "                                  ";
                        $context["montoReno"] = ($this->getAttribute((isset($context["muay1"]) ? $context["muay1"] : null), "precio") + (isset($context["montoReno"]) ? $context["montoReno"] : null));
                        // line 79
                        echo "                                  ";
                        $context["ingreso1"] = ($this->getAttribute((isset($context["muay1"]) ? $context["muay1"] : null), "precio") + (isset($context["ingreso1"]) ? $context["ingreso1"] : null));
                        echo "  

                            ";
                    }
                    // line 81
                    echo "  


                    ";
                }
                // line 85
                echo "                ";
            }
            // line 86
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['muay1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "

          <hr>

          <div class=\"escuela\">  


                 <div class=\"tituloescuela\"> MUAY THAI </div><br>

                 <div class=\"antes\">Nuevas Matriculas Hombres:</div> 
                 <div class=\"numero\"> ";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["matHombres"]) ? $context["matHombres"] : null), "html", null, true);
        echo " </div><br>

                 <div class=\"antes\"> Nuevas Matriculas Mujeres:</div>
                 <div class=\"numero\">";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["matMujeres"]) ? $context["matMujeres"] : null), "html", null, true);
        echo "</div><br>

                 <div class=\"antes\">matricula renovadas:</div> 
                 <div class=\"numero\">";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["matReno"]) ? $context["matReno"] : null), "html", null, true);
        echo "</div><br><br>

                 <div class=\"antes\">Monto Matriculas Hombres: </div>
                 <div class=\"numero\"> S/.";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["montoHombres"]) ? $context["montoHombres"] : null), "html", null, true);
        echo "</div><br>

                 <div class=\"antes\">Monto Matriculas Mujeres: </div>
                 <div class=\"numero\">S/.";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["montoMujeres"]) ? $context["montoMujeres"] : null), "html", null, true);
        echo " </div><br>

                 <div class=\"antes\">Monto matriculas renovadas: </div>
                 <div class=\"numero\"> S/.";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["montoReno"]) ? $context["montoReno"] : null), "html", null, true);
        echo " </div><br><br>

                 <div class=\"antes\">Ingresos totales : </div>
                 <div class=\"numero\"> S/.";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["ingreso1"]) ? $context["ingreso1"] : null), "html", null, true);
        echo "</div>  <br>
          </div>

";
        // line 119
        echo "
          ";
        // line 120
        $context["matHombres"] = 0;
        // line 121
        echo "          ";
        $context["matMujeres"] = 0;
        // line 122
        echo "          ";
        $context["matReno"] = 0;
        // line 123
        echo "          ";
        $context["montoHombres"] = 0;
        // line 124
        echo "          ";
        $context["montoMujeres"] = 0;
        // line 125
        echo "          ";
        $context["montoReno"] = 0;
        // line 126
        echo "          ";
        $context["ingreso2"] = 0;
        // line 127
        echo "
          ";
        // line 128
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jiu"]) ? $context["jiu"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["jiu1"]) {
            // line 129
            echo "                ";
            if (($this->getAttribute((isset($context["jiu1"]) ? $context["jiu1"] : null), "fechainicio") >= (isset($context["fechai"]) ? $context["fechai"] : null))) {
                // line 130
                echo "                    ";
                if (($this->getAttribute((isset($context["jiu1"]) ? $context["jiu1"] : null), "fechainicio") <= (isset($context["fechaf"]) ? $context["fechaf"] : null))) {
                    // line 131
                    echo "

                            ";
                    // line 133
                    if (($this->getAttribute((isset($context["jiu1"]) ? $context["jiu1"] : null), "sexo") == 1)) {
                        // line 134
                        echo "
                                  ";
                        // line 135
                        $context["matMujeres"] = (1 + (isset($context["matMujeres"]) ? $context["matMujeres"] : null));
                        // line 136
                        echo "                                  ";
                        $context["montoMujeres"] = ($this->getAttribute((isset($context["jiu1"]) ? $context["jiu1"] : null), "precio") + (isset($context["montoMujeres"]) ? $context["montoMujeres"] : null));
                        // line 137
                        echo "                                  ";
                        $context["ingreso2"] = ($this->getAttribute((isset($context["jiu1"]) ? $context["jiu1"] : null), "precio") + (isset($context["ingreso2"]) ? $context["ingreso2"] : null));
                        echo "  

                            ";
                    }
                    // line 140
                    echo "
                            ";
                    // line 141
                    if (($this->getAttribute((isset($context["jiu1"]) ? $context["jiu1"] : null), "sexo") == 2)) {
                        // line 142
                        echo "
                                  ";
                        // line 143
                        $context["matHombres"] = (1 + (isset($context["matHombres"]) ? $context["matHombres"] : null));
                        // line 144
                        echo "                                  ";
                        $context["montoHombres"] = ($this->getAttribute((isset($context["jiu1"]) ? $context["jiu1"] : null), "precio") + (isset($context["montoHombres"]) ? $context["montoHombres"] : null));
                        // line 145
                        echo "                                  ";
                        $context["ingreso2"] = ($this->getAttribute((isset($context["jiu1"]) ? $context["jiu1"] : null), "precio") + (isset($context["ingreso2"]) ? $context["ingreso2"] : null));
                        echo "  

                            ";
                    }
                    // line 147
                    echo "     

                            ";
                    // line 149
                    if (($this->getAttribute((isset($context["jiu1"]) ? $context["jiu1"] : null), "sexo") == 3)) {
                        // line 150
                        echo "
                                  ";
                        // line 151
                        $context["matReno"] = (1 + (isset($context["matReno"]) ? $context["matReno"] : null));
                        // line 152
                        echo "                                  ";
                        $context["montoReno"] = ($this->getAttribute((isset($context["jiu1"]) ? $context["jiu1"] : null), "precio") + (isset($context["montoReno"]) ? $context["montoReno"] : null));
                        // line 153
                        echo "                                  ";
                        $context["ingreso2"] = ($this->getAttribute((isset($context["jiu1"]) ? $context["jiu1"] : null), "precio") + (isset($context["ingreso2"]) ? $context["ingreso2"] : null));
                        echo "  

                            ";
                    }
                    // line 155
                    echo "  


                    ";
                }
                // line 159
                echo "                ";
            }
            // line 160
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jiu1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "
          <div class=\"escuela\">  


                 <div class=\"tituloescuela\"> JIU JITSU </div><br>

                 <div class=\"antes\">Nuevas Matriculas Hombres:</div> 
                 <div class=\"numero\"> ";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["matHombres"]) ? $context["matHombres"] : null), "html", null, true);
        echo " </div><br>

                 <div class=\"antes\"> Nuevas Matriculas Mujeres:</div>
                 <div class=\"numero\">";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["matMujeres"]) ? $context["matMujeres"] : null), "html", null, true);
        echo "</div><br>

                 <div class=\"antes\">matricula renovadas:</div> 
                 <div class=\"numero\">";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["matReno"]) ? $context["matReno"] : null), "html", null, true);
        echo "</div><br><br>

                 <div class=\"antes\">Monto Matriculas Hombres: </div>
                 <div class=\"numero\">S/.";
        // line 177
        echo twig_escape_filter($this->env, (isset($context["montoHombres"]) ? $context["montoHombres"] : null), "html", null, true);
        echo "</div><br>

                 <div class=\"antes\">Monto Matriculas Mujeres: </div>
                 <div class=\"numero\">S/.";
        // line 180
        echo twig_escape_filter($this->env, (isset($context["montoMujeres"]) ? $context["montoMujeres"] : null), "html", null, true);
        echo " </div><br>

                 <div class=\"antes\">Monto matriculas renovadas: </div>
                 <div class=\"numero\">S/. ";
        // line 183
        echo twig_escape_filter($this->env, (isset($context["montoReno"]) ? $context["montoReno"] : null), "html", null, true);
        echo " </div><br><br>

                 <div class=\"antes\">Ingresos totales :</div>
                 <div class=\"numero\"> S/.";
        // line 186
        echo twig_escape_filter($this->env, (isset($context["ingreso2"]) ? $context["ingreso2"] : null), "html", null, true);
        echo "</div>  <br>
          </div>


";
        // line 191
        echo "
          ";
        // line 192
        $context["matHombres"] = 0;
        // line 193
        echo "          ";
        $context["matMujeres"] = 0;
        // line 194
        echo "          ";
        $context["matReno"] = 0;
        // line 195
        echo "          ";
        $context["montoHombres"] = 0;
        // line 196
        echo "          ";
        $context["montoMujeres"] = 0;
        // line 197
        echo "          ";
        $context["montoReno"] = 0;
        // line 198
        echo "          ";
        $context["ingreso3"] = 0;
        // line 199
        echo "
          ";
        // line 200
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["box"]) ? $context["box"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["box1"]) {
            // line 201
            echo "                ";
            if (($this->getAttribute((isset($context["box1"]) ? $context["box1"] : null), "fechainicio") >= (isset($context["fechai"]) ? $context["fechai"] : null))) {
                // line 202
                echo "                    ";
                if (($this->getAttribute((isset($context["box1"]) ? $context["box1"] : null), "fechainicio") <= (isset($context["fechaf"]) ? $context["fechaf"] : null))) {
                    // line 203
                    echo "

                            ";
                    // line 205
                    if (($this->getAttribute((isset($context["box1"]) ? $context["box1"] : null), "sexo") == 1)) {
                        // line 206
                        echo "
                                  ";
                        // line 207
                        $context["matMujeres"] = (1 + (isset($context["matMujeres"]) ? $context["matMujeres"] : null));
                        // line 208
                        echo "                                  ";
                        $context["montoMujeres"] = ($this->getAttribute((isset($context["box1"]) ? $context["box1"] : null), "precio") + (isset($context["montoMujeres"]) ? $context["montoMujeres"] : null));
                        // line 209
                        echo "                                  ";
                        $context["ingreso3"] = ($this->getAttribute((isset($context["box1"]) ? $context["box1"] : null), "precio") + (isset($context["ingreso3"]) ? $context["ingreso3"] : null));
                        echo "  

                            ";
                    }
                    // line 212
                    echo "
                            ";
                    // line 213
                    if (($this->getAttribute((isset($context["box1"]) ? $context["box1"] : null), "sexo") == 2)) {
                        // line 214
                        echo "
                                  ";
                        // line 215
                        $context["matHombres"] = (1 + (isset($context["matHombres"]) ? $context["matHombres"] : null));
                        // line 216
                        echo "                                  ";
                        $context["montoHombres"] = ($this->getAttribute((isset($context["box1"]) ? $context["box1"] : null), "precio") + (isset($context["montoHombres"]) ? $context["montoHombres"] : null));
                        // line 217
                        echo "                                  ";
                        $context["ingreso3"] = ($this->getAttribute((isset($context["box1"]) ? $context["box1"] : null), "precio") + (isset($context["ingreso3"]) ? $context["ingreso3"] : null));
                        echo "  

                            ";
                    }
                    // line 219
                    echo "     

                            ";
                    // line 221
                    if (($this->getAttribute((isset($context["box1"]) ? $context["box1"] : null), "sexo") == 3)) {
                        // line 222
                        echo "
                                  ";
                        // line 223
                        $context["matReno"] = (1 + (isset($context["matReno"]) ? $context["matReno"] : null));
                        // line 224
                        echo "                                  ";
                        $context["montoReno"] = ($this->getAttribute((isset($context["box1"]) ? $context["box1"] : null), "precio") + (isset($context["montoReno"]) ? $context["montoReno"] : null));
                        // line 225
                        echo "                                  ";
                        $context["ingreso3"] = ($this->getAttribute((isset($context["box1"]) ? $context["box1"] : null), "precio") + (isset($context["ingreso3"]) ? $context["ingreso3"] : null));
                        echo "  

                            ";
                    }
                    // line 227
                    echo "  


                    ";
                }
                // line 231
                echo "                ";
            }
            // line 232
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['box1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
        echo "
          <div class=\"escuela\">  

                 <br><br> 
                 <div class=\"tituloescuela\"> BOX </div><br>

                 <div class=\"antes\">Nuevas Matriculas Hombres:</div> 
                 <div class=\"numero\"> ";
        // line 240
        echo twig_escape_filter($this->env, (isset($context["matHombres"]) ? $context["matHombres"] : null), "html", null, true);
        echo " </div><br>

                 <div class=\"antes\"> Nuevas Matriculas Mujeres:</div>
                 <div class=\"numero\">";
        // line 243
        echo twig_escape_filter($this->env, (isset($context["matMujeres"]) ? $context["matMujeres"] : null), "html", null, true);
        echo "</div><br>

                 <div class=\"antes\">matricula renovadas:</div> 
                 <div class=\"numero\">";
        // line 246
        echo twig_escape_filter($this->env, (isset($context["matReno"]) ? $context["matReno"] : null), "html", null, true);
        echo "</div><br><br>

                 <div class=\"antes\">Monto Matriculas Hombres: </div>
                 <div class=\"numero\">S/.";
        // line 249
        echo twig_escape_filter($this->env, (isset($context["montoHombres"]) ? $context["montoHombres"] : null), "html", null, true);
        echo "</div><br>

                 <div class=\"antes\">Monto Matriculas Mujeres: </div>
                 <div class=\"numero\">S/.";
        // line 252
        echo twig_escape_filter($this->env, (isset($context["montoMujeres"]) ? $context["montoMujeres"] : null), "html", null, true);
        echo " </div><br>

                 <div class=\"antes\">Monto matriculas renovadas: </div>
                 <div class=\"numero\"> S/.";
        // line 255
        echo twig_escape_filter($this->env, (isset($context["montoReno"]) ? $context["montoReno"] : null), "html", null, true);
        echo " </div><br><br>

                 <div class=\"antes\">Ingresos totales :</div>
                 <div class=\"numero\"> S/.";
        // line 258
        echo twig_escape_filter($this->env, (isset($context["ingreso3"]) ? $context["ingreso3"] : null), "html", null, true);
        echo "</div>  <br>
          </div>

";
        // line 262
        echo "
          ";
        // line 263
        $context["matHombres"] = 0;
        // line 264
        echo "          ";
        $context["matMujeres"] = 0;
        // line 265
        echo "          ";
        $context["matReno"] = 0;
        // line 266
        echo "          ";
        $context["montoHombres"] = 0;
        // line 267
        echo "          ";
        $context["montoMujeres"] = 0;
        // line 268
        echo "          ";
        $context["montoReno"] = 0;
        // line 269
        echo "          ";
        $context["ingreso4"] = 0;
        // line 270
        echo "
          ";
        // line 271
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mma"]) ? $context["mma"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["mma1"]) {
            // line 272
            echo "                ";
            if (($this->getAttribute((isset($context["mma1"]) ? $context["mma1"] : null), "fechainicio") >= (isset($context["fechai"]) ? $context["fechai"] : null))) {
                // line 273
                echo "                    ";
                if (($this->getAttribute((isset($context["mma1"]) ? $context["mma1"] : null), "fechainicio") <= (isset($context["fechaf"]) ? $context["fechaf"] : null))) {
                    // line 274
                    echo "

                            ";
                    // line 276
                    if (($this->getAttribute((isset($context["mma1"]) ? $context["mma1"] : null), "sexo") == 1)) {
                        // line 277
                        echo "
                                  ";
                        // line 278
                        $context["matMujeres"] = (1 + (isset($context["matMujeres"]) ? $context["matMujeres"] : null));
                        // line 279
                        echo "                                  ";
                        $context["montoMujeres"] = ($this->getAttribute((isset($context["mma1"]) ? $context["mma1"] : null), "precio") + (isset($context["montoMujeres"]) ? $context["montoMujeres"] : null));
                        // line 280
                        echo "                                  ";
                        $context["ingreso4"] = ($this->getAttribute((isset($context["mma1"]) ? $context["mma1"] : null), "precio") + (isset($context["ingreso4"]) ? $context["ingreso4"] : null));
                        echo "  

                            ";
                    }
                    // line 283
                    echo "
                            ";
                    // line 284
                    if (($this->getAttribute((isset($context["mma1"]) ? $context["mma1"] : null), "sexo") == 2)) {
                        // line 285
                        echo "
                                  ";
                        // line 286
                        $context["matHombres"] = (1 + (isset($context["matHombres"]) ? $context["matHombres"] : null));
                        // line 287
                        echo "                                  ";
                        $context["montoHombres"] = ($this->getAttribute((isset($context["mma1"]) ? $context["mma1"] : null), "precio") + (isset($context["montoHombres"]) ? $context["montoHombres"] : null));
                        // line 288
                        echo "                                  ";
                        $context["ingreso4"] = ($this->getAttribute((isset($context["mma1"]) ? $context["mma1"] : null), "precio") + (isset($context["ingreso4"]) ? $context["ingreso4"] : null));
                        echo "  

                            ";
                    }
                    // line 290
                    echo "     

                            ";
                    // line 292
                    if (($this->getAttribute((isset($context["mma1"]) ? $context["mma1"] : null), "sexo") == 3)) {
                        // line 293
                        echo "
                                  ";
                        // line 294
                        $context["matReno"] = (1 + (isset($context["matReno"]) ? $context["matReno"] : null));
                        // line 295
                        echo "                                  ";
                        $context["montoReno"] = ($this->getAttribute((isset($context["mma1"]) ? $context["mma1"] : null), "precio") + (isset($context["montoReno"]) ? $context["montoReno"] : null));
                        // line 296
                        echo "                                  ";
                        $context["ingreso4"] = ($this->getAttribute((isset($context["mma1"]) ? $context["mma1"] : null), "precio") + (isset($context["ingreso4"]) ? $context["ingreso4"] : null));
                        echo "  

                            ";
                    }
                    // line 298
                    echo "  


                    ";
                }
                // line 302
                echo "                ";
            }
            // line 303
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mma1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 304
        echo "
          <div class=\"escuela\">  

                 <br><br> 
                 <div class=\"tituloescuela\"> MMA </div><br>

                 <div class=\"antes\">Nuevas Matriculas Hombres:</div> 
                 <div class=\"numero\"> ";
        // line 311
        echo twig_escape_filter($this->env, (isset($context["matHombres"]) ? $context["matHombres"] : null), "html", null, true);
        echo " </div><br>

                 <div class=\"antes\"> Nuevas Matriculas Mujeres:</div>
                 <div class=\"numero\">";
        // line 314
        echo twig_escape_filter($this->env, (isset($context["matMujeres"]) ? $context["matMujeres"] : null), "html", null, true);
        echo "</div><br>

                 <div class=\"antes\">matricula renovadas:</div> 
                 <div class=\"numero\">";
        // line 317
        echo twig_escape_filter($this->env, (isset($context["matReno"]) ? $context["matReno"] : null), "html", null, true);
        echo "</div><br><br>

                 <div class=\"antes\">Monto Matriculas Hombres: </div>
                 <div class=\"numero\">S/.";
        // line 320
        echo twig_escape_filter($this->env, (isset($context["montoHombres"]) ? $context["montoHombres"] : null), "html", null, true);
        echo "</div><br>

                 <div class=\"antes\">Monto Matriculas Mujeres: </div>
                 <div class=\"numero\">S/.";
        // line 323
        echo twig_escape_filter($this->env, (isset($context["montoMujeres"]) ? $context["montoMujeres"] : null), "html", null, true);
        echo " </div><br>

                 <div class=\"antes\">Monto matriculas renovadas: </div>
                 <div class=\"numero\"> S/.";
        // line 326
        echo twig_escape_filter($this->env, (isset($context["montoReno"]) ? $context["montoReno"] : null), "html", null, true);
        echo " </div><br><br>

                 <div class=\"antes\">Ingresos totales :</div>
                 <div class=\"numero\"> S/.";
        // line 329
        echo twig_escape_filter($this->env, (isset($context["ingreso4"]) ? $context["ingreso4"] : null), "html", null, true);
        echo "</div>  <br>
          </div>




";
        // line 336
        echo "
          ";
        // line 337
        $context["matHombres"] = 0;
        // line 338
        echo "          ";
        $context["matMujeres"] = 0;
        // line 339
        echo "          ";
        $context["matReno"] = 0;
        // line 340
        echo "          ";
        $context["montoHombres"] = 0;
        // line 341
        echo "          ";
        $context["montoMujeres"] = 0;
        // line 342
        echo "          ";
        $context["montoReno"] = 0;
        // line 343
        echo "          ";
        $context["ingreso5"] = 0;
        // line 344
        echo "
          ";
        // line 345
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["judo"]) ? $context["judo"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["judo1"]) {
            // line 346
            echo "                ";
            if (($this->getAttribute((isset($context["judo1"]) ? $context["judo1"] : null), "fechainicio") >= (isset($context["fechai"]) ? $context["fechai"] : null))) {
                // line 347
                echo "                    ";
                if (($this->getAttribute((isset($context["judo1"]) ? $context["judo1"] : null), "fechainicio") <= (isset($context["fechaf"]) ? $context["fechaf"] : null))) {
                    // line 348
                    echo "

                            ";
                    // line 350
                    if (($this->getAttribute((isset($context["judo1"]) ? $context["judo1"] : null), "sexo") == 1)) {
                        // line 351
                        echo "
                                  ";
                        // line 352
                        $context["matMujeres"] = (1 + (isset($context["matMujeres"]) ? $context["matMujeres"] : null));
                        // line 353
                        echo "                                  ";
                        $context["montoMujeres"] = ($this->getAttribute((isset($context["judo1"]) ? $context["judo1"] : null), "precio") + (isset($context["montoMujeres"]) ? $context["montoMujeres"] : null));
                        // line 354
                        echo "                                  ";
                        $context["ingreso5"] = ($this->getAttribute((isset($context["judo1"]) ? $context["judo1"] : null), "precio") + (isset($context["ingreso5"]) ? $context["ingreso5"] : null));
                        echo "  

                            ";
                    }
                    // line 357
                    echo "
                            ";
                    // line 358
                    if (($this->getAttribute((isset($context["judo1"]) ? $context["judo1"] : null), "sexo") == 2)) {
                        // line 359
                        echo "
                                  ";
                        // line 360
                        $context["matHombres"] = (1 + (isset($context["matHombres"]) ? $context["matHombres"] : null));
                        // line 361
                        echo "                                  ";
                        $context["montoHombres"] = ($this->getAttribute((isset($context["judo1"]) ? $context["judo1"] : null), "precio") + (isset($context["montoHombres"]) ? $context["montoHombres"] : null));
                        // line 362
                        echo "                                  ";
                        $context["ingreso5"] = ($this->getAttribute((isset($context["judo1"]) ? $context["judo1"] : null), "precio") + (isset($context["ingreso5"]) ? $context["ingreso5"] : null));
                        echo "  

                            ";
                    }
                    // line 364
                    echo "     

                            ";
                    // line 366
                    if (($this->getAttribute((isset($context["judo1"]) ? $context["judo1"] : null), "sexo") == 3)) {
                        // line 367
                        echo "
                                  ";
                        // line 368
                        $context["matReno"] = (1 + (isset($context["matReno"]) ? $context["matReno"] : null));
                        // line 369
                        echo "                                  ";
                        $context["montoReno"] = ($this->getAttribute((isset($context["judo1"]) ? $context["judo1"] : null), "precio") + (isset($context["montoReno"]) ? $context["montoReno"] : null));
                        // line 370
                        echo "                                  ";
                        $context["ingreso5"] = ($this->getAttribute((isset($context["judo1"]) ? $context["judo1"] : null), "precio") + (isset($context["ingreso5"]) ? $context["ingreso5"] : null));
                        echo "  

                            ";
                    }
                    // line 372
                    echo "  


                    ";
                }
                // line 376
                echo "                ";
            }
            // line 377
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judo1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 378
        echo "
          <div class=\"escuela\">  

                 <br><br> 
                 <div class=\"tituloescuela\"> JUDO </div><br>

                 <div class=\"antes\">Nuevas Matriculas Hombres:</div> 
                 <div class=\"numero\"> ";
        // line 385
        echo twig_escape_filter($this->env, (isset($context["matHombres"]) ? $context["matHombres"] : null), "html", null, true);
        echo " </div><br>

                 <div class=\"antes\"> Nuevas Matriculas Mujeres:</div>
                 <div class=\"numero\">";
        // line 388
        echo twig_escape_filter($this->env, (isset($context["matMujeres"]) ? $context["matMujeres"] : null), "html", null, true);
        echo "</div><br>

                 <div class=\"antes\">matricula renovadas:</div> 
                 <div class=\"numero\">";
        // line 391
        echo twig_escape_filter($this->env, (isset($context["matReno"]) ? $context["matReno"] : null), "html", null, true);
        echo "</div><br><br>

                 <div class=\"antes\">Monto Matriculas Hombres: </div>
                 <div class=\"numero\">S/.";
        // line 394
        echo twig_escape_filter($this->env, (isset($context["montoHombres"]) ? $context["montoHombres"] : null), "html", null, true);
        echo "</div><br>

                 <div class=\"antes\">Monto Matriculas Mujeres: </div>
                 <div class=\"numero\">S/.";
        // line 397
        echo twig_escape_filter($this->env, (isset($context["montoMujeres"]) ? $context["montoMujeres"] : null), "html", null, true);
        echo " </div><br>

                 <div class=\"antes\">Monto matriculas renovadas: </div>
                 <div class=\"numero\"> S/.";
        // line 400
        echo twig_escape_filter($this->env, (isset($context["montoReno"]) ? $context["montoReno"] : null), "html", null, true);
        echo " </div><br><br>

                 <div class=\"antes\">Ingresos totales :</div>
                 <div class=\"numero\"> S/.";
        // line 403
        echo twig_escape_filter($this->env, (isset($context["ingreso5"]) ? $context["ingreso5"] : null), "html", null, true);
        echo "</div>  <br>
          </div>



";
        // line 409
        echo "
          ";
        // line 410
        $context["ingreso6"] = 0;
        // line 411
        echo "          ";
        $context["ingreso6"] = (((((isset($context["ingreso1"]) ? $context["ingreso1"] : null) + (isset($context["ingreso2"]) ? $context["ingreso2"] : null)) + (isset($context["ingreso3"]) ? $context["ingreso3"] : null)) + (isset($context["ingreso4"]) ? $context["ingreso4"] : null)) + (isset($context["ingreso5"]) ? $context["ingreso5"] : null));
        // line 412
        echo "
         

          <div class=\"escuela\">  

                 <br><br> 
                 <div class=\"tituloescuela\"> INGRESOS TOTALES </div><br>

                 <div class=\"antes\">Ingresos en el intervalo:</div> 
                 <div class=\"numero\"> S/.";
        // line 421
        echo twig_escape_filter($this->env, (isset($context["ingreso6"]) ? $context["ingreso6"] : null), "html", null, true);
        echo " </div><br>

          </div>








\t\t\t
\t\t</div>
\t</div>
  

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "FfDemoBundle:Default:estadistica2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  932 => 421,  921 => 412,  918 => 411,  916 => 410,  913 => 409,  905 => 403,  899 => 400,  893 => 397,  887 => 394,  881 => 391,  875 => 388,  869 => 385,  860 => 378,  854 => 377,  851 => 376,  845 => 372,  838 => 370,  835 => 369,  833 => 368,  830 => 367,  828 => 366,  824 => 364,  817 => 362,  814 => 361,  812 => 360,  809 => 359,  807 => 358,  804 => 357,  797 => 354,  794 => 353,  792 => 352,  789 => 351,  787 => 350,  783 => 348,  780 => 347,  777 => 346,  773 => 345,  770 => 344,  767 => 343,  764 => 342,  761 => 341,  758 => 340,  755 => 339,  752 => 338,  750 => 337,  747 => 336,  738 => 329,  732 => 326,  726 => 323,  720 => 320,  714 => 317,  708 => 314,  702 => 311,  693 => 304,  687 => 303,  684 => 302,  678 => 298,  671 => 296,  668 => 295,  666 => 294,  663 => 293,  661 => 292,  657 => 290,  650 => 288,  647 => 287,  645 => 286,  642 => 285,  640 => 284,  637 => 283,  630 => 280,  627 => 279,  625 => 278,  622 => 277,  620 => 276,  616 => 274,  613 => 273,  610 => 272,  606 => 271,  603 => 270,  600 => 269,  597 => 268,  594 => 267,  591 => 266,  588 => 265,  585 => 264,  583 => 263,  580 => 262,  574 => 258,  568 => 255,  562 => 252,  556 => 249,  550 => 246,  544 => 243,  538 => 240,  529 => 233,  523 => 232,  520 => 231,  514 => 227,  507 => 225,  504 => 224,  502 => 223,  499 => 222,  497 => 221,  493 => 219,  486 => 217,  483 => 216,  481 => 215,  478 => 214,  476 => 213,  473 => 212,  466 => 209,  463 => 208,  458 => 206,  456 => 205,  452 => 203,  449 => 202,  446 => 201,  442 => 200,  439 => 199,  436 => 198,  433 => 197,  424 => 194,  421 => 193,  419 => 192,  416 => 191,  403 => 183,  397 => 180,  391 => 177,  385 => 174,  373 => 168,  364 => 161,  358 => 160,  349 => 155,  342 => 153,  339 => 152,  334 => 150,  332 => 149,  328 => 147,  321 => 145,  318 => 144,  316 => 143,  313 => 142,  311 => 141,  308 => 140,  301 => 137,  296 => 135,  287 => 131,  284 => 130,  281 => 129,  277 => 128,  274 => 127,  271 => 126,  262 => 123,  259 => 122,  256 => 121,  251 => 119,  245 => 115,  233 => 109,  197 => 87,  191 => 86,  188 => 85,  175 => 79,  172 => 78,  170 => 77,  167 => 76,  165 => 75,  161 => 73,  146 => 68,  134 => 63,  120 => 57,  104 => 52,  74 => 41,  304 => 170,  300 => 168,  297 => 167,  293 => 134,  291 => 133,  286 => 163,  282 => 161,  279 => 160,  275 => 158,  272 => 157,  265 => 124,  261 => 152,  248 => 147,  244 => 146,  239 => 112,  215 => 100,  211 => 124,  207 => 123,  174 => 102,  153 => 85,  148 => 83,  137 => 76,  129 => 61,  126 => 60,  124 => 59,  97 => 59,  110 => 54,  84 => 44,  77 => 41,  58 => 29,  127 => 72,  118 => 66,  114 => 55,  83 => 51,  480 => 162,  474 => 161,  469 => 158,  461 => 207,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 196,  427 => 195,  423 => 142,  413 => 134,  409 => 186,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 171,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 159,  341 => 105,  337 => 151,  322 => 101,  314 => 99,  312 => 173,  309 => 97,  305 => 95,  298 => 136,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 125,  264 => 84,  258 => 151,  252 => 148,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 53,  61 => 13,  273 => 96,  269 => 94,  254 => 120,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 142,  230 => 82,  227 => 106,  224 => 71,  221 => 103,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 62,  119 => 42,  108 => 62,  102 => 32,  71 => 39,  67 => 15,  63 => 37,  59 => 30,  47 => 21,  94 => 48,  89 => 47,  85 => 25,  79 => 50,  75 => 40,  68 => 14,  56 => 9,  50 => 10,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 88,  156 => 66,  151 => 70,  142 => 59,  138 => 76,  136 => 56,  123 => 47,  121 => 59,  117 => 56,  115 => 68,  105 => 53,  101 => 51,  91 => 47,  69 => 25,  62 => 23,  49 => 19,  38 => 6,  28 => 3,  87 => 46,  72 => 16,  66 => 24,  55 => 15,  41 => 18,  29 => 3,  26 => 6,  98 => 50,  93 => 48,  88 => 6,  78 => 21,  46 => 20,  43 => 6,  40 => 8,  32 => 9,  44 => 12,  35 => 5,  31 => 5,  24 => 3,  22 => 2,  27 => 7,  25 => 3,  21 => 2,  19 => 1,  209 => 97,  203 => 122,  199 => 121,  193 => 73,  189 => 71,  187 => 112,  182 => 81,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 71,  149 => 69,  147 => 58,  144 => 67,  141 => 66,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 62,  99 => 31,  95 => 49,  92 => 48,  86 => 54,  82 => 44,  80 => 42,  73 => 39,  64 => 17,  60 => 13,  57 => 11,  54 => 28,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 10,  30 => 7,);
    }
}
