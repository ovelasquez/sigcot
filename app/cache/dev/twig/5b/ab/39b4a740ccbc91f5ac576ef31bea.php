<?php

/* AcmeDemoBundle:Secured:layout.html.twig */
class __TwigTemplate_5bab39b4a740ccbc91f5ac576ef31bea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content_header_more' => array($this, 'block_content_header_more'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("content_header_more", $context, $blocks);
        echo "
    <li>logged in as <strong>";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "app"), "user")) ? ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username")) : ("Anonymous")), "html", null, true);
        echo "</strong> - <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_logout"), "html", null, true);
        echo "\">Logout</a></li>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 43,  138 => 61,  84 => 39,  88 => 33,  105 => 38,  133 => 67,  108 => 51,  38 => 6,  97 => 36,  95 => 45,  75 => 27,  60 => 20,  47 => 10,  67 => 24,  51 => 11,  21 => 1,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 42,  101 => 37,  80 => 37,  63 => 23,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 44,  110 => 42,  85 => 33,  65 => 26,  59 => 22,  45 => 17,  26 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 73,  130 => 51,  125 => 62,  119 => 45,  116 => 29,  112 => 42,  102 => 48,  98 => 47,  76 => 37,  73 => 30,  69 => 24,  32 => 5,  89 => 34,  82 => 30,  42 => 11,  103 => 41,  91 => 43,  74 => 22,  70 => 14,  66 => 21,  56 => 17,  22 => 4,  25 => 7,  23 => 3,  17 => 1,  92 => 33,  86 => 41,  77 => 26,  57 => 13,  29 => 4,  24 => 9,  19 => 2,  68 => 22,  61 => 19,  44 => 14,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 56,  129 => 42,  121 => 33,  118 => 45,  113 => 28,  104 => 42,  99 => 33,  94 => 38,  81 => 36,  78 => 28,  72 => 24,  64 => 31,  53 => 21,  50 => 10,  48 => 10,  41 => 7,  39 => 7,  35 => 5,  33 => 5,  30 => 4,  27 => 3,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 40,  136 => 47,  134 => 50,  131 => 31,  128 => 30,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 47,  96 => 34,  93 => 35,  90 => 43,  87 => 31,  83 => 29,  79 => 34,  71 => 25,  62 => 21,  58 => 22,  55 => 12,  52 => 25,  49 => 14,  46 => 9,  43 => 8,  40 => 7,  37 => 10,  34 => 5,  31 => 6,  28 => 3,);
    }
}
