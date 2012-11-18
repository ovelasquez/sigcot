<?php

/* AplicativoBundle:Caprestamos:submenu.html.twig */
class __TwigTemplate_d7f0bddb8c91b68b577eb5804914663c extends Twig_Template
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
        echo "        <ul  class=\"subnav\">
            <li><a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("configcajadeahorro"), "html", null, true);
        echo "\">Configuracion</a></li>
            <li><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prestamoscajadeahorro"), "html", null, true);
        echo "\">Prestamos</a></li>
            <li><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aportesaprestamos"), "html", null, true);
        echo "\">Aportes a prestamos</a></li>
            <li><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aportesdecajadeahorro"), "html", null, true);
        echo "\">Aportes de ahorros</a></li>
            <li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("retiroscajadeahorro"), "html", null, true);
        echo "\">Retiro</a></li>
        </ul>";
    }

    public function getTemplateName()
    {
        return "AplicativoBundle:Caprestamos:submenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  32 => 5,  28 => 4,  24 => 3,  20 => 2,  17 => 1,);
    }
}
