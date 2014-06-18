<?php

/* ::base.html.twig */
class __TwigTemplate_1c76ad6dbe7e1079c6dc6ff4c8c222e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metadesc' => array($this, 'block_metadesc'),
            'metaetiq' => array($this, 'block_metaetiq'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>       
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "global"), "name_web"), "html", null, true);
        echo "</title>        
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />        
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">        
        <meta content=\"";
        // line 8
        $this->displayBlock('metadesc', $context, $blocks);
        echo "\" name=\"description\" />
        <meta content=\"";
        // line 9
        $this->displayBlock('metaetiq', $context, $blocks);
        echo "\" name=\"keywords\" />                
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />        

        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "       
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src=\"/wayci/web/bootstrap/js/html5shiv.js\"></script>
        <script src=\"/wayci/web/bootstrap/js/respond.min.js\"></script>
        <![endif]--> 
       
    </head>
    <body>
        ";
        // line 22
        $this->displayBlock('menu', $context, $blocks);
        echo "        
        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        echo "        
        ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "    </body>
       
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 8
    public function block_metadesc($context, array $blocks = array())
    {
        echo " ";
    }

    // line 9
    public function block_metaetiq($context, array $blocks = array())
    {
        echo " ";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 22
    public function block_menu($context, array $blocks = array())
    {
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  115 => 24,  105 => 22,  100 => 12,  94 => 9,  88 => 8,  83 => 4,  74 => 24,  66 => 22,  53 => 12,  48 => 10,  31 => 4,  26 => 1,  304 => 102,  298 => 99,  293 => 97,  288 => 94,  285 => 93,  280 => 90,  275 => 87,  264 => 133,  259 => 131,  254 => 129,  237 => 119,  229 => 114,  225 => 113,  221 => 112,  213 => 106,  211 => 93,  205 => 90,  199 => 87,  196 => 86,  193 => 85,  188 => 38,  173 => 74,  167 => 73,  156 => 67,  150 => 66,  134 => 56,  127 => 52,  104 => 38,  86 => 26,  78 => 24,  67 => 15,  65 => 14,  62 => 13,  56 => 10,  50 => 8,  40 => 8,  35 => 3,  185 => 73,  168 => 61,  160 => 56,  154 => 53,  145 => 47,  138 => 57,  135 => 42,  126 => 39,  123 => 51,  119 => 37,  114 => 45,  110 => 23,  101 => 27,  98 => 35,  93 => 23,  90 => 22,  82 => 25,  76 => 25,  70 => 23,  63 => 16,  60 => 15,  55 => 13,  52 => 11,  47 => 8,  44 => 9,  37 => 4,  34 => 3,);
    }
}
