<?php

/* AplicativoBundle:Caretiros:edit.html.twig */
class __TwigTemplate_4497c9699b66b301499962d401ce8f83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Caretiros edit</h1>

<form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("retiroscajadeahorro_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "edit_form"), 'enctype');
        echo ">
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "edit_form"), 'widget');
        echo "
    <p>
        <button type=\"submit\">Edit</button>
    </p>
</form>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("retiroscajadeahorro"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <form action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("retiroscajadeahorro_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'widget');
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "AplicativoBundle:Caretiros:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 38,  133 => 67,  108 => 51,  38 => 6,  97 => 36,  95 => 44,  75 => 27,  60 => 20,  47 => 17,  67 => 24,  51 => 18,  21 => 3,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 41,  101 => 37,  80 => 24,  63 => 16,  36 => 15,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 55,  110 => 42,  85 => 33,  65 => 28,  59 => 27,  45 => 17,  26 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 73,  130 => 51,  125 => 62,  119 => 45,  116 => 44,  112 => 42,  102 => 36,  98 => 33,  76 => 37,  73 => 30,  69 => 29,  32 => 5,  89 => 34,  82 => 19,  42 => 11,  103 => 24,  91 => 43,  74 => 22,  70 => 14,  66 => 26,  56 => 26,  22 => 4,  25 => 7,  23 => 3,  17 => 1,  92 => 38,  86 => 38,  77 => 31,  57 => 19,  29 => 4,  24 => 6,  19 => 2,  68 => 23,  61 => 20,  44 => 14,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 56,  129 => 42,  121 => 47,  118 => 45,  113 => 39,  104 => 42,  99 => 33,  94 => 38,  81 => 32,  78 => 32,  72 => 30,  64 => 31,  53 => 19,  50 => 15,  48 => 10,  41 => 6,  39 => 7,  35 => 8,  33 => 6,  30 => 4,  27 => 4,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 72,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 35,  90 => 28,  87 => 33,  83 => 38,  79 => 34,  71 => 19,  62 => 21,  58 => 20,  55 => 14,  52 => 25,  49 => 14,  46 => 19,  43 => 16,  40 => 10,  37 => 10,  34 => 5,  31 => 6,  28 => 7,);
    }
}
