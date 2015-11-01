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
            
            <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("ff_demo_homepage", array("slug" => ""));
        echo "\">Inicio <span class=\"sr-only\">(current)</span></a></li>
            
            <li class=\"active\"><a href=\"#\">Matricular</a></li>

            <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("Vencer", array("slug" => ""));
        echo "\">Vencimientos</a></li>
            <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("estadistica", array("slug" => ""));
        echo "\">Reportes</a></li>
          </ul>
        
        </div>
        
        ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

        <div class=\"col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-2 main\">
                <h2 class=\"sub-header\">Matrícula de Alumno</h2>
                 
                <div>
                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'errors');
        echo "
                    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                 <div>
                    ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidop"), 'errors');
        echo "
                    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidop"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Apellido Paterno")));
        echo "
                </div>

                <div>
                    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidom"), 'errors');
        echo "
                    ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidom"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Apellido Materno")));
        echo "
                </div>

                <div>
                    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'errors');
        echo "
                    ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombres Completos")));
        echo "
                </div>

                <div>
                    ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "
                    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Correo electronico")));
        echo "
                </div>

                <div>
                    ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dni"), 'errors');
        echo "
                    ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dni"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Dni")));
        echo "
                </div>

                 <div>
                    ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoc"), 'errors');
        echo "
                    ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoc"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Telefono Celular")));
        echo "
                </div>
                 <div>
                    ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonof"), 'errors');
        echo "
                    ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonof"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Telefono Fijo")));
        echo "
                </div>


                <div>
                    ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexo"), 'errors');
        echo "
                    ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexo"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div>
                    <div class=\"\"> Cumpleaños </div>
                    ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cumple"), 'errors');
        echo "
                    ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cumple"), 'widget', array("attr" => array("class" => "form-group", "type" => "datetime")));
        echo "
                </div>

                
        </div>

        <div class=\"col-sm-6 col-md-4  main\"> 
                </br></br>

                <div class=\"\"> Disciplina </div>
                
                <div>
                    <div class=\"col-md-6\">
                        Disciplina Principal :
                    </div>

                    <div class=\"col-md-6\">
                        ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disciplina"), 'errors');
        echo "
                        ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disciplina"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                    
                <div>
                    <div class=\"col-md-6\">
                        Disciplina Secund. :
                    </div>

                    <div class=\"col-md-6\">
                        ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disciplina2"), 'errors');
        echo "
                        ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disciplina2"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div style=\"display:none\">
                    <div class=\"\"> Inicio </div>
                    ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_inicio"), 'errors');
        echo "
                    ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_inicio"), 'widget', array("attr" => array("class" => "form-group", "type" => "datetime")));
        echo "
                </div>

                <div style=\"display:none\">
                    <div class=\"\"> Vencimiento </div>
                    ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_final"), 'errors');
        echo "
                    ";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_final"), 'widget', array("attr" => array("class" => "form-group", "type" => "datetime")));
        echo "
                </div>

                <div>
                    ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipodepago"), 'errors');
        echo "
                    ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipodepago"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div>
                    ";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "veces"), 'errors');
        echo "
                    ";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "veces"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div style=\"display:none\">
                    ";
        // line 154
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precio"), 'errors');
        echo "
                    ";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precio"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "S/. Monto en soles")));
        echo "
                </div>

                <div>
                 ";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matricular"), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
                </div>
                         
            
       

        </div>
        ";
        // line 166
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

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
        return array (  327 => 166,  317 => 159,  310 => 155,  306 => 154,  299 => 150,  295 => 149,  288 => 145,  284 => 144,  277 => 140,  273 => 139,  265 => 134,  261 => 133,  252 => 127,  248 => 126,  235 => 116,  231 => 115,  211 => 98,  207 => 97,  199 => 92,  195 => 91,  187 => 86,  183 => 85,  177 => 82,  173 => 81,  166 => 77,  162 => 76,  155 => 72,  151 => 71,  144 => 67,  140 => 66,  133 => 62,  129 => 61,  122 => 57,  118 => 56,  111 => 52,  107 => 51,  98 => 45,  90 => 40,  86 => 39,  79 => 35,  65 => 24,  60 => 22,  49 => 14,  44 => 12,  40 => 11,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
