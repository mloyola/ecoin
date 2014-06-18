<?php

/* FrontendBundle:Usuario:login.html.twig */
class __TwigTemplate_7bb30b5c3fd3cf4f33644daf51bdc85f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::frontend_star.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metadesc' => array($this, 'block_metadesc'),
            'metaetiq' => array($this, 'block_metaetiq'),
            'comboidioma' => array($this, 'block_comboidioma'),
            'jumbotron' => array($this, 'block_jumbotron'),
            'contenido' => array($this, 'block_contenido'),
            'descarga' => array($this, 'block_descarga'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::frontend_star.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Iniciar sesión como usuario", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_metadesc($context, array $blocks = array())
    {
        // line 8
        echo "
";
    }

    // line 11
    public function block_metaetiq($context, array $blocks = array())
    {
        // line 12
        echo "
";
    }

    // line 15
    public function block_comboidioma($context, array $blocks = array())
    {
        // line 16
        echo "  <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("usuario_login", array("_locale" => "es"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Español", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "</a></li>
  <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("usuario_login", array("_locale" => "en"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ingles", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "</a></li>
  <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("usuario_login", array("_locale" => "pt"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Portugués", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "</a></li>
  <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("usuario_login", array("_locale" => "it"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Italiano", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "</a></li>  
";
    }

    // line 22
    public function block_jumbotron($context, array $blocks = array())
    {
        // line 23
        echo "
";
    }

    // line 26
    public function block_contenido($context, array $blocks = array())
    {
        // line 27
        echo "  <br>
  <br>  
  <br>
  <div class=\"row\">
    <div class=\"col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4\">
      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            <h3 class=\"text-center\"><span class=\"glyphicon glyphicon-user\"></span> ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Usuario", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "</h3>
            <h1 class=\"text-center\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Iniciar sesión", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "</h1>
            
            ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 38
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 39
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            
            <form action=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_login_check", array("_locale" => $this->getContext($context, "lenguaje"))), "html", null, true);
        echo "\" class=\"form form-signup\" role=\"form\" method=\"post\">  
              <div class=\"form-group\">
                <div class=\"input-group\">
                  <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-envelope\"></span></span>
                  <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" placeholder=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Correo electrónico", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "\" />
                </div>
              </div>                    
              <div class=\"form-group\">
                <div class=\"input-group\">
                  <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-lock\"></span></span>
                  <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contraseña", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "\" />
                </div>
              </div>                                    
              <button type=\"submit\" class=\"btn btn-lg btn-login btn-block\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ingresar", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "</button>
              
              <div class=\"form-group\">
                <div class=\"input-group\">
                  <br>
                  <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_forgot", array("_locale" => $this->getContext($context, "lenguaje"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("¿Olvidaste tu contraseña?", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "</a>
                </div>
              </div>
             
            </form>           

        </div>
      </div>
    </div>
  </div>  
";
    }

    // line 73
    public function block_descarga($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Usuario:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 73,  168 => 61,  160 => 56,  154 => 53,  145 => 47,  138 => 43,  135 => 42,  126 => 39,  123 => 38,  119 => 37,  114 => 35,  110 => 34,  101 => 27,  98 => 26,  93 => 23,  90 => 22,  82 => 19,  76 => 18,  70 => 17,  63 => 16,  60 => 15,  55 => 12,  52 => 11,  47 => 8,  44 => 7,  37 => 4,  34 => 3,);
    }
}
