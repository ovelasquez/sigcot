<?php

/* AplicativoBundle:Dfcconceptosaportes:new.html.twig */
class __TwigTemplate_91682df78c9842253a7d0549b8fb7cf8 extends Twig_Template
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
        echo "<h1>Dfcconceptosaportes creation</h1>

<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("conceptosaportesc_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
    <p>
        <button type=\"submit\">Create</button>
    </p>
</form>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("conceptosaportesc"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "AplicativoBundle:Dfcconceptosaportes:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  97 => 37,  95 => 44,  75 => 33,  60 => 23,  47 => 17,  67 => 24,  51 => 18,  21 => 3,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 41,  101 => 34,  80 => 24,  63 => 16,  36 => 15,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 37,  65 => 26,  59 => 16,  45 => 17,  26 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 44,  112 => 43,  102 => 36,  98 => 33,  76 => 37,  73 => 27,  69 => 30,  32 => 14,  89 => 20,  82 => 19,  42 => 11,  103 => 24,  91 => 43,  74 => 22,  70 => 14,  66 => 26,  56 => 26,  22 => 4,  25 => 7,  23 => 3,  17 => 1,  92 => 38,  86 => 27,  77 => 35,  57 => 6,  29 => 4,  24 => 6,  19 => 2,  68 => 23,  61 => 25,  44 => 14,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 42,  99 => 33,  94 => 38,  81 => 36,  78 => 32,  72 => 36,  64 => 31,  53 => 19,  50 => 18,  48 => 10,  41 => 6,  39 => 16,  35 => 8,  33 => 6,  30 => 4,  27 => 4,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 33,  90 => 28,  87 => 33,  83 => 38,  79 => 28,  71 => 19,  62 => 21,  58 => 20,  55 => 14,  52 => 20,  49 => 18,  46 => 19,  43 => 16,  40 => 10,  37 => 10,  34 => 5,  31 => 6,  28 => 7,);
    }
}
