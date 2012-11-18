<?php

/* ::base.html.twig */
class __TwigTemplate_b8753b31744c8224db0b2992eaab4a32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'submenu' => array($this, 'block_submenu'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<head>
  <title>";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  ";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 114
        echo "   <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
  
  <div id=\"page\">
   ";
        // line 119
        $this->displayBlock('body', $context, $blocks);
        // line 147
        echo "  </div>
   
</body>
</html>";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenido al SIGCOT!";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "  <link rel=\"stylesheet\" media=\"all\" href=\"css/reset.css\" />
  <style type=\"text/css\">
\t\tbody {
\t\t\tfont-family: arial, helvetica, sans-serif;
\t\t\tline-height: 1.8em;
\t\t}
\t\t#page {
\t\t\tmargin: 0 auto 2% auto;
\t\t\twidth: 100%;
\t\t\toverflow: hidden;
\t\t}
\t\theader {
\t\t\tfloat: left;
\t\t\tclear: both;
\t\t\twidth: 96%;
\t\t\tbackground-color: #eee;
\t\t\tpadding: 2%;
\t\t}
\t\tnav {
\t\t\tfloat: left!important;
\t\t\tclear: both;
\t\t\twidth: 98%;
\t\t\tpadding: 1%;
                        /*border-top: solid 1px #aaa;font-size: 0.80em;*/
\t\t\tbackground-color: #606c88;
\t\t\t
\t\t}
\t\tnav ul {
\t\t\tmargin: 0;           
\t\t}
\t\tnav ul li {
\t\t\tdisplay: inline;
\t\t\tmargin-right: 2%;
\t\t}
                
                nav ul li a{
                    text-decoration: none; padding: 5px !important; width: 10%!important; display: inline-block;text-shadow: -1px -1px 0 rgba(0,0,0,0.3);font-weight:bold; text-align: center; color: #FFFFFF;
\t\t}
                .subnav li { list-style: none; border-bottom: solid 1px #ccc; width: 70%;}
                .subnav li a{
                    text-decoration: none; padding: 5px !important; width: 50%!important; display: inline-block;text-shadow: -1px -1px 0 rgba(255,255,255,0.3);font-weight:bold; text-align: left; color: #333;
\t\t}
                
\t\t#content {
\t\t\tfloat: left;
\t\t\tmargin: 2% 2% 1% 1%;
\t\t\tbackground-color: white;
\t\t\twidth: 75%;
\t\t}
\t\taside {
\t\t\tfloat: left;
\t\t\twidth: 20%;
\t\t\tmargin: 2% 1% 1% 1%;
\t\t\tpadding: 1% 0;
\t\t\tbackground-color: #eee;
\t\t\tfont-size: 0.80em;
\t\t}
\t\taside ul li {
\t\t\ttext-indent: 0.5em;
\t\t\tpadding: 0.3em;
\t\t}
\t\tfooter {
\t\t\tfloat: left;
\t\t\tclear: both;
\t\t\twidth: 98%;
\t\t\tpadding: 1%;
\t\t\tfont-size: 80%;
\t\t\tbackground-color: #efefef;
\t\t\ttext-align: center;
\t\t}
\t\tfooter p {
\t\t\tmargin-bottom: 0;
\t\t}
\t\tp {
\t\t\tmargin-bottom: 1em;
\t\t}
                
                .records_list { width: 100%}
                .records_list td,.records_list th{ padding: 5px; text-align: left;}
                .records_list td:last-child,.records_list th:last-child{  text-align: right;}
                .records_list a{  text-decoration: none; color: #606c88}
                .records_list thead th { border-bottom: #2c354b solid 1px; margin: 0px;}
                
                ul.btns li{ float:right; margin: 0px 0px 0px 5px; list-style:none}
                ul.btns a{ text-decoration: none; }
                ul.btns a,.button{
                    border:1px solid #495267; -webkit-border-radius: 3px; -moz-border-radius: 3px;border-radius: 3px;font-family:arial, helvetica, sans-serif; padding: 5px; text-shadow: -1px -1px 0 rgba(0,0,0,0.3);font-weight:bold; text-align: center; color: #FFFFFF; background-color: #606c88;
                    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #606c88), color-stop(100%, #3f4c6b));
                    background-image: -webkit-linear-gradient(top, #606c88, #3f4c6b);
                    background-image: -moz-linear-gradient(top, #606c88, #3f4c6b);
                    background-image: -ms-linear-gradient(top, #606c88, #3f4c6b);
                    background-image: -o-linear-gradient(top, #606c88, #3f4c6b);
                    background-image: linear-gradient(top, #606c88, #3f4c6b);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#606c88, endColorstr=#3f4c6b);
                }

                ul.btns a:hover, .button:hover{
                    border:1px solid #363d4c; background-color: #4b546a;
                    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#4b546a), color-stop(100%, #2c354b));
                    background-image: -webkit-linear-gradient(top, #4b546a, #2c354b);
                    background-image: -moz-linear-gradient(top, #4b546a, #2c354b);
                    background-image: -ms-linear-gradient(top, #4b546a, #2c354b);
                    background-image: -o-linear-gradient(top, #4b546a, #2c354b);
                    background-image: linear-gradient(top, #4b546a, #2c354b);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#4b546a, endColorstr=#2c354b);
                }
                img { border: solid gray 1px; padding: 2px;}
                
                
\t</style>
   ";
    }

    // line 119
    public function block_body($context, array $blocks = array())
    {
        echo " 
    <header> ";
        // line 120
        $this->displayBlock('header', $context, $blocks);
        // line 122
        echo "    </header>
    
    
    <nav>";
        // line 125
        $this->displayBlock('menu', $context, $blocks);
        // line 131
        echo "    </nav>    
    <aside>
        ";
        // line 133
        $this->displayBlock('submenu', $context, $blocks);
        // line 136
        echo "    </aside>
    
   
   <div id=\"content\">
\t ";
        // line 140
        $this->displayBlock('content', $context, $blocks);
        // line 141
        echo "   </div>
   <footer>
       ";
        // line 143
        $this->displayBlock('footer', $context, $blocks);
        // line 144
        echo "   </footer>
    
    ";
    }

    // line 120
    public function block_header($context, array $blocks = array())
    {
        // line 121
        echo "       <h1>SIGCOT</h1>";
    }

    // line 125
    public function block_menu($context, array $blocks = array())
    {
        // line 126
        echo "        <ul >
          <li><a href=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cooperativistas"), "html", null, true);
        echo "\">Cooperativista</a></li>
          <li><a href=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prestamoscajadeahorro"), "html", null, true);
        echo "\">Caja de ahorro</a></li>
          <li><a href=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aportecooperativista"), "html", null, true);
        echo "\">Finanzas</a></li>
      </ul>";
    }

    // line 133
    public function block_submenu($context, array $blocks = array())
    {
        // line 134
        echo "        
        ";
    }

    // line 140
    public function block_content($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 143
    public function block_footer($context, array $blocks = array())
    {
        echo "<p>Sistema Integral de Gestion de Cooperativas de Transporte - TINN </p>";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 143,  249 => 140,  244 => 134,  241 => 133,  235 => 129,  231 => 128,  227 => 127,  224 => 126,  221 => 125,  217 => 121,  214 => 120,  208 => 144,  206 => 143,  202 => 141,  200 => 140,  194 => 136,  192 => 133,  188 => 131,  186 => 125,  181 => 122,  179 => 120,  174 => 119,  62 => 5,  59 => 4,  53 => 3,  46 => 147,  44 => 119,  35 => 114,  33 => 4,  29 => 3,  25 => 1,);
    }
}
