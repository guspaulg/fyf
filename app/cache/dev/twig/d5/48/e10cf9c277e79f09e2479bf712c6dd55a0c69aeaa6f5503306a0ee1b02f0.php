<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d548e10cf9c277e79f09e2479bf712c6dd55a0c69aeaa6f5503306a0ee1b02f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  54 => 11,  43 => 8,  33 => 4,  30 => 3,  326 => 165,  316 => 158,  309 => 154,  305 => 153,  298 => 149,  294 => 148,  287 => 144,  283 => 143,  276 => 139,  272 => 138,  264 => 133,  260 => 132,  251 => 126,  247 => 125,  234 => 115,  230 => 114,  210 => 97,  206 => 96,  198 => 91,  194 => 90,  187 => 86,  183 => 85,  175 => 80,  171 => 79,  165 => 76,  161 => 75,  154 => 71,  150 => 70,  143 => 66,  139 => 65,  132 => 61,  128 => 60,  121 => 56,  117 => 55,  110 => 51,  106 => 50,  98 => 45,  90 => 40,  86 => 39,  79 => 35,  65 => 24,  60 => 22,  49 => 14,  44 => 12,  40 => 7,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
