<?php

/* ::frontend_star.html.twig */
class __TwigTemplate_9847ff4530cd3197db712d27bcecc8ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'menu' => array($this, 'block_menu'),
            'comboidioma' => array($this, 'block_comboidioma'),
            'body' => array($this, 'block_body'),
            'jumbotron' => array($this, 'block_jumbotron'),
            'contenido' => array($this, 'block_contenido'),
            'descarga' => array($this, 'block_descarga'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        echo "        
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "global"), "directorio_css") . "bootstrap.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "global"), "directorio_css") . "jumbotron_star.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">     
";
    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        echo "    
  <script src=\"http://code.jquery.com/jquery.js\"></script>
  <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "global"), "directorio_js") . "bootstrap.min.js")), "html", null, true);
        echo "\"></script>       
";
    }

    // line 13
    public function block_menu($context, array $blocks = array())
    {
        // line 14
        echo "  ";
        // line 15
        echo "  
  <div class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("frontend_homepage", array("_locale" => $this->getContext($context, "lenguaje"))), "html", null, true);
        echo "\">
            <img class=\"hidden-lg  img-responsive\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "global"), "directorio_img") . "logo_small.png")), "html", null, true);
        echo "\" alt=\"\" >
            <img class=\"visible-lg img-responsive\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "global"), "directorio_img") . "logo.png")), "html", null, true);
        echo "\" alt=\"\" >
          </a>          
        </div>

        <div class=\"navbar-collapse collapse\">          
          
          <form class=\"navbar-form navbar-right\">                                      
            <div class=\"btn-group\">
              <button type=\"button\" class=\"btn btn-success btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"glyphicon glyphicon-flag\"></span> ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Idioma", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "<span class=\"caret\"></span>
              </button>
              <ul class=\"dropdown-menu\" role=\"menu\">
                ";
        // line 38
        $this->displayBlock('comboidioma', $context, $blocks);
        echo "                 
              </ul>
            </div>                    
          </form>
                
          <form class=\"hidden-xs navbar-form navbar-right\">                                      
            <div class=\"btn-group\">
              <button class=\"btn btn-register btn-sm\" type=\"button\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Regístrate", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "</button>
              <button data-toggle=\"dropdown\" class=\"btn btn-register btn-sm dropdown-toggle\" type=\"button\"><span class=\"caret\"></span>
                <span class=\"sr-only\">Toggle Dropdown</span>
              </button>
              <ul role=\"menu\" class=\"dropdown-menu\">
                <li>
                    <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_registro", array("_locale" => $this->getContext($context, "lenguaje"))), "html", null, true);
        echo "\">
                      <span class=\"glyphicon glyphicon-user\"></span> ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Usuario", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "
                    </a>
                  </li>
                  <li>
                    <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comercio_registro", array("_locale" => $this->getContext($context, "lenguaje"))), "html", null, true);
        echo "\">
                      <span class=\"glyphicon glyphicon-bookmark\"></span> ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Negocio", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "
                    </a>
                  </li>   
              </ul>
          </div>                   
          </form>
                    
          <form class=\"navbar-form navbar-right\">                                   
            <div>
              <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_login", array("_locale" => $this->getContext($context, "lenguaje"))), "html", null, true);
        echo "\" class=\"btn btn-login btn-sm\" ><span class=\"glyphicon glyphicon-user\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Acceso Usuario", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "</a>
              <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comercio_login", array("_locale" => $this->getContext($context, "lenguaje"))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-sm\"><span class=\"glyphicon glyphicon-bookmark\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Acceso Negocio", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "</a>
            </div>                  
          </form>

          <form class=\"visible-xs navbar-form navbar-right\">
            <div>
              <a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_registro", array("_locale" => $this->getContext($context, "lenguaje"))), "html", null, true);
        echo "\" class=\"btn btn-login btn-sm\" ><span class=\"glyphicon glyphicon-user\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Registrar Usuario", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "</a>
              <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comercio_registro", array("_locale" => $this->getContext($context, "lenguaje"))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-sm\"><span class=\"glyphicon glyphicon-bookmark\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Registrar Negocio", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "</a>
            </div>          
          </form>                

        </div><!--/.navbar-collapse -->
      </div>
    </div>

    ";
    }

    // line 38
    public function block_comboidioma($context, array $blocks = array())
    {
    }

    // line 85
    public function block_body($context, array $blocks = array())
    {
        // line 86
        echo "    
    ";
        // line 87
        $this->displayBlock('jumbotron', $context, $blocks);
        echo "  
    
    <div class=\"container\">    
      ";
        // line 90
        $this->displayBlock('contenido', $context, $blocks);
        echo "      
    </div>  

    ";
        // line 93
        $this->displayBlock('descarga', $context, $blocks);
        // line 106
        echo "      

    <hr> 

    <footer>  
      <div class=\"col-lg-12\" align=\"center\">        
        <a href=\"#\" target=\"_blank\" title=\"facebook\"><img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "global"), "directorio_img") . "face.png")), "html", null, true);
        echo "\" /></a>
        <a href=\"#\" target=\"_blank\" title=\"twitter\"><img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "global"), "directorio_img") . "twitter.png")), "html", null, true);
        echo "\" /></a>
        <a href=\"#\" target=\"_blank\" title=\"youtube\"><img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "global"), "directorio_img") . "youtube.png")), "html", null, true);
        echo "\" /></a>        
      </div>      
      <br>
      <div class=\"col-lg-12\" align=\"center\">
        <div itemscope itemtype=\"http://schema.org/Organization\">        
          <span itemprop=\"name\"><strong>";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "global"), "name_web"), "html", null, true);
        echo "</strong></span> &copy; ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "global"), "year"), "html", null, true);
        echo "  | ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Todos los derechos reservados", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "        
        </div>  
      </div>              
    </footer>

    <div id=\"footer\">
      <div class=\"container\">
        <p class=\"text-muted credit\">
          <a href=\"#\">About Ecoin</a>
          &nbsp;&nbsp;|&nbsp;&nbsp;
          <a href=\"#\">";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Términos y Condiciones", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "</a>
          &nbsp;&nbsp;|&nbsp;&nbsp;
          <a href=\"#\">";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Políticas de Privacidad", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "</a>
          &nbsp;&nbsp;|&nbsp;&nbsp;
          <a href=\"#\">";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contacto", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "</a>
        </p>
      </div>
    </div>

  </div><!--/.container-->
";
    }

    // line 87
    public function block_jumbotron($context, array $blocks = array())
    {
    }

    // line 90
    public function block_contenido($context, array $blocks = array())
    {
    }

    // line 93
    public function block_descarga($context, array $blocks = array())
    {
        // line 94
        echo "    <hr> 
    <div class=\"container\">        
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\" align=\"center\">
          <h2>";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Descarga Gratis la App", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo ".</h2>   
          <div class=\"col-xs-6 col-sm-6\">
            <a href=\"#\"><img class=\"img-responsive\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "global"), "directorio_img") . "appstore.png")), "html", null, true);
        echo "\" alt=\"\" ></a>
          </div>
          <div class=\"col-xs-6 col-sm-6\">
            <a href=\"#\"><img class=\"img-responsive\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "global"), "directorio_img") . "googleplay.png")), "html", null, true);
        echo "\" alt=\"\" ></a>
          </div>
        </div>          
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "::frontend_star.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 102,  298 => 99,  293 => 97,  288 => 94,  285 => 93,  280 => 90,  275 => 87,  264 => 133,  259 => 131,  254 => 129,  237 => 119,  229 => 114,  225 => 113,  221 => 112,  213 => 106,  211 => 93,  205 => 90,  199 => 87,  196 => 86,  193 => 85,  188 => 38,  173 => 74,  167 => 73,  156 => 67,  150 => 66,  134 => 56,  127 => 52,  104 => 38,  86 => 26,  78 => 24,  67 => 15,  65 => 14,  62 => 13,  56 => 10,  50 => 8,  40 => 4,  35 => 3,  185 => 73,  168 => 61,  160 => 56,  154 => 53,  145 => 47,  138 => 57,  135 => 42,  126 => 39,  123 => 51,  119 => 37,  114 => 45,  110 => 34,  101 => 27,  98 => 35,  93 => 23,  90 => 22,  82 => 25,  76 => 18,  70 => 17,  63 => 16,  60 => 15,  55 => 12,  52 => 11,  47 => 8,  44 => 5,  37 => 4,  34 => 3,);
    }
}
