<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_a0fa44280a87c4e19b29eb06f19b522a30e1f0380446d24dd2dfe5c0892b6b79 extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace"))));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  38 => 13,  26 => 5,  87 => 20,  80 => 19,  55 => 13,  46 => 7,  36 => 7,  25 => 3,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  41 => 9,  24 => 4,  22 => 2,  201 => 92,  199 => 91,  196 => 90,  173 => 74,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  69 => 25,  66 => 15,  62 => 23,  51 => 15,  39 => 6,  32 => 12,  57 => 16,  54 => 21,  43 => 8,  33 => 10,  30 => 3,  326 => 165,  316 => 158,  309 => 154,  305 => 153,  298 => 149,  294 => 148,  287 => 144,  283 => 143,  276 => 139,  272 => 138,  264 => 133,  260 => 132,  251 => 126,  247 => 125,  234 => 115,  230 => 114,  210 => 97,  206 => 96,  198 => 91,  194 => 90,  187 => 84,  183 => 82,  175 => 80,  171 => 73,  165 => 76,  161 => 75,  154 => 71,  150 => 70,  143 => 66,  139 => 65,  132 => 61,  128 => 60,  121 => 46,  117 => 44,  110 => 51,  106 => 50,  98 => 45,  90 => 40,  86 => 28,  79 => 18,  65 => 24,  60 => 22,  49 => 19,  44 => 10,  40 => 7,  35 => 4,  31 => 5,  27 => 4,  19 => 1,);
    }
}
