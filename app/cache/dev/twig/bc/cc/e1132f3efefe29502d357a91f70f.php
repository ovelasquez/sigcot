<?php

/* AplicativoBundle:Dfcaportes:submenu.html.twig */
class __TwigTemplate_bccce1132f3efefe29502d357a91f70f extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("conceptosaportesc"), "html", null, true);
        echo "\">Configuracion</a></li>
            <li><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aportecooperativista"), "html", null, true);
        echo "\">Aportes</a></li>
            
        </ul>";
    }

    public function getTemplateName()
    {
        return "AplicativoBundle:Dfcaportes:submenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  20 => 2,  17 => 1,);
    }
}
