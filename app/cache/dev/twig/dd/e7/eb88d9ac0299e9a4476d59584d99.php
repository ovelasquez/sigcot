<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_dde7eb88d9ac0299e9a4476d59584d99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_title($context, array $blocks = array())
    {
        echo "Redirection Intercepted";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"sf-exceptionreset\">
        <div class=\"block_exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, "location"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getContext($context, "location"), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 236,  258 => 235,  255 => 234,  238 => 219,  236 => 218,  54 => 39,  18 => 1,  111 => 40,  138 => 61,  84 => 39,  88 => 33,  105 => 38,  133 => 67,  108 => 51,  38 => 8,  97 => 36,  95 => 45,  75 => 18,  60 => 21,  47 => 13,  67 => 24,  51 => 38,  21 => 3,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 248,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 42,  101 => 37,  80 => 37,  63 => 22,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 44,  110 => 42,  85 => 33,  65 => 12,  59 => 18,  45 => 15,  26 => 6,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 73,  130 => 51,  125 => 62,  119 => 45,  116 => 29,  112 => 42,  102 => 37,  98 => 36,  76 => 26,  73 => 30,  69 => 24,  32 => 8,  89 => 28,  82 => 23,  42 => 11,  103 => 41,  91 => 43,  74 => 22,  70 => 14,  66 => 21,  56 => 17,  22 => 3,  25 => 7,  23 => 29,  17 => 1,  92 => 33,  86 => 41,  77 => 26,  57 => 21,  29 => 3,  24 => 3,  19 => 2,  68 => 13,  61 => 19,  44 => 14,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 56,  129 => 42,  121 => 33,  118 => 45,  113 => 28,  104 => 42,  99 => 33,  94 => 35,  81 => 36,  78 => 28,  72 => 25,  64 => 31,  53 => 21,  50 => 14,  48 => 15,  41 => 11,  39 => 12,  35 => 6,  33 => 5,  30 => 6,  27 => 3,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 40,  136 => 47,  134 => 50,  131 => 31,  128 => 30,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 47,  96 => 34,  93 => 30,  90 => 43,  87 => 28,  83 => 29,  79 => 34,  71 => 23,  62 => 11,  58 => 20,  55 => 19,  52 => 25,  49 => 37,  46 => 9,  43 => 13,  40 => 8,  37 => 10,  34 => 7,  31 => 6,  28 => 5,);
    }
}
