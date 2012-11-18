<?php

/* AplicativoBundle:Dcfotosactivos:index.html.twig */
class __TwigTemplate_7e325d083d87ae2c541754fb72c30f92 extends Twig_Template
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
        echo "<h1>Lista de fotos de activos</h1>
<div><ul class=\"btns\">
    <li>
        <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fotosactivos_new"), "html", null, true);
        echo "\">
            crear entrada
        </a>
    </li>
</ul></div>
<table class=\"records_list\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Cooperativista-Placa</th>
            <th>Identificador</th>
            <th>Foto</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 24
            echo "        <tr>
            <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fotosactivos_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "activoc"), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "identificador"), "html", null, true);
            echo "</td>
            <td><img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getContext($context, "directorio_imagenes") . $this->getAttribute($this->getContext($context, "entity"), "foto"))), "html", null, true);
            echo "\" height=\"50px\"></td>
            <td>
                <ul class=\"btns\">
                    <li>
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fotosactivos_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">mostrar</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fotosactivos_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">editar</a>
                    </li>
                </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 41
        echo "    </tbody>
</table>


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
        return "AplicativoBundle:Dcfotosactivos:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 47,  108 => 46,  100 => 41,  88 => 35,  82 => 32,  75 => 28,  71 => 27,  67 => 26,  61 => 25,  58 => 24,  54 => 23,  35 => 7,  30 => 4,  27 => 3,);
    }
}
