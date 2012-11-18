<?php

/* AplicativoBundle:Cooperativistas:submenu.html.twig */
class __TwigTemplate_c441d8d312dea71c6cbd469db5b14f67 extends Twig_Template
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
        echo "        <ul class=\"subnav\">
            <li><a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activoscooperativistas"), "html", null, true);
        echo "\">Activos</a></li>
            <li><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fotosactivos"), "html", null, true);
        echo "\">Fotos activos</a></li>
            <li><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cargoscooperativistas"), "html", null, true);
        echo "\">Cargos</a></li>
        </ul>";
    }

    public function getTemplateName()
    {
        return "AplicativoBundle:Cooperativistas:submenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  24 => 3,  20 => 2,  17 => 1,  277 => 165,  271 => 162,  266 => 156,  263 => 155,  257 => 151,  253 => 150,  249 => 149,  246 => 148,  243 => 147,  239 => 143,  236 => 142,  230 => 166,  228 => 165,  224 => 163,  222 => 162,  216 => 158,  214 => 155,  210 => 153,  208 => 147,  203 => 144,  201 => 142,  196 => 141,  62 => 5,  59 => 4,  53 => 3,  46 => 169,  44 => 141,  35 => 136,  33 => 4,  29 => 3,  25 => 1,);
    }
}
