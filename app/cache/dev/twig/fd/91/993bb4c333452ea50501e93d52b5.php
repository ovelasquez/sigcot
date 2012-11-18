<?php

/* AplicativoBundle:Cooperativistas:show.html.twig */
class __TwigTemplate_fd91993bb4c333452ea50501e93d52b5 extends Twig_Template
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
        echo "<h1>Cooperativistas</h1>

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
            <th>Usuario</th>
            <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "usuario"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Clave</th>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "clave"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nombre"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Apellido</th>
            <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "apellido"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Cinum</th>
            <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "cinum"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Rifnum</th>
            <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "rifnum"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Direccion</th>
            <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "direccion"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Telefonos</th>
            <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "telefonos"), "html", null, true);
        echo "</td>
        </tr>
        
        <tr>
            <th>Foto</th>
            <td><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getContext($context, "directorio_imagenes") . $this->getAttribute($this->getContext($context, "entity"), "foto"))), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getContext($context, "directorio_imagenes") . $this->getAttribute($this->getContext($context, "entity"), "foto"))), "html", null, true);
        echo "\" height=\"100px\"></a></td>
        </tr>
        <tr>
            <th>Ciarc</th>
            <td><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getContext($context, "directorio_imagenes") . $this->getAttribute($this->getContext($context, "entity"), "ciarc"))), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getContext($context, "directorio_imagenes") . $this->getAttribute($this->getContext($context, "entity"), "ciarc"))), "html", null, true);
        echo "\" height=\"100px\"></a></td>
        </tr>
        <tr>
            <th>Rifarc</th>
            <td><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getContext($context, "directorio_imagenes") . $this->getAttribute($this->getContext($context, "entity"), "rifarc"))), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getContext($context, "directorio_imagenes") . $this->getAttribute($this->getContext($context, "entity"), "rifarc"))), "html", null, true);
        echo "\" height=\"100px\"></a></td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cooperativistas"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cooperativistas_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cooperativistas_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'widget');
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    // line 80
    public function block_submenu($context, array $blocks = array())
    {
        // line 81
        $this->env->loadTemplate("AplicativoBundle:Cooperativistas:submenu.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "AplicativoBundle:Cooperativistas:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 81,  162 => 80,  152 => 73,  148 => 72,  140 => 67,  132 => 62,  120 => 55,  111 => 51,  102 => 47,  94 => 42,  87 => 38,  80 => 34,  73 => 30,  66 => 26,  59 => 22,  52 => 18,  45 => 14,  38 => 10,  30 => 4,  27 => 3,);
    }
}
