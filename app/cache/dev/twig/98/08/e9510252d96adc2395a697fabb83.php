<?php

/* AplicativoBundle:Dcfotosactivos:show.html.twig */
class __TwigTemplate_9808e9510252d96adc2395a697fabb83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'submenu' => array($this, 'block_submenu'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Dcfotosactivos</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Cooperativista-Placa</th>
            <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "activoc"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Identificador</th>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "identificador"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Foto</th>
            <td><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getContext($context, "directorio_imagenes") . $this->getAttribute($this->getContext($context, "entity"), "foto"))), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getContext($context, "directorio_imagenes") . $this->getAttribute($this->getContext($context, "entity"), "foto"))), "html", null, true);
        echo "\" height=\"100px\"></a></td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fotosactivos"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fotosactivos_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fotosactivos_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'widget');
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    // line 46
    public function block_submenu($context, array $blocks = array())
    {
        // line 47
        $this->env->loadTemplate("AplicativoBundle:Cooperativistas:submenu.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "AplicativoBundle:Dcfotosactivos:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 47,  101 => 46,  91 => 40,  87 => 39,  79 => 34,  71 => 29,  59 => 22,  52 => 18,  45 => 14,  38 => 10,  30 => 4,  27 => 3,);
    }
}
