<?php

/* FrontendBundle:Default:index.html.twig */
class __TwigTemplate_a076c97643035fdab170a5d59ccb1a04 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Paga desde tu móvil de forma fácil y segura", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_metadesc($context, array $blocks = array())
    {
        // line 8
        echo "Paga todos los productos y servicios que quieras desde tu móvil, ya no necesitas dinero en efectivo o el plástico de tus tarjetas de crédito o debito.
";
    }

    // line 11
    public function block_metaetiq($context, array $blocks = array())
    {
        // line 12
        echo "Pago, pagar, móvil, celular, teléfono, pago móvil, pagar desde el móvil, pagar desde el celular, pagar desde el teléfono, seguro, pago seguro
";
    }

    // line 15
    public function block_comboidioma($context, array $blocks = array())
    {
        // line 16
        echo "  <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("frontend_homepage", array("_locale" => "es"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Español", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "</a></li>
  <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("frontend_homepage", array("_locale" => "en"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ingles", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "</a></li>
  <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("frontend_homepage", array("_locale" => "pt"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Portugués", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "</a></li>
  <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("frontend_homepage", array("_locale" => "it"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Italiano", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "</a></li>
";
    }

    // line 22
    public function block_jumbotron($context, array $blocks = array())
    {
        // line 23
        echo "  <div class=\"jumbotron\">
    <div class=\"container\">
      
    ";
        // line 27
        echo "      <div class=\"col-xs-12 col-sm-8 col-md-8 col-lg-8\" align=\"center\">                      
        <h1>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Paga tus compras desde tu móvil", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo ".</h1>   
        <h4>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Fácil y seguro", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo ".</h4>
        <h4>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No necesitas llevar dinero en efectivo", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo ".</h4>
        <h4>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No necesitas llevar tarjetas de crédito o debito", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo ".</h4>
        <br>          
        <br>                        
        <div class=\"col-xs-6\">
          <a href=\"#\"><img class=\"img-responsive\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "global"), "directorio_img") . "appstore.png")), "html", null, true);
        echo "\" alt=\"\" ></a>
        </div>
        <div class=\"col-xs-6\">
          <a href=\"#\"><img class=\"img-responsive\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "global"), "directorio_img") . "googleplay.png")), "html", null, true);
        echo "\" alt=\"\" ></a>
        </div>          
        <br>          
        <br>         
        <br>            
        <div class=\"visible-xs hidden-sm hidden-md hidden-lg\">                  
          <img class=\"img-responsive\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "global"), "directorio_img") . "screenshot_profile.png")), "html", null, true);
        echo "\" alt=\"\" >                           
        </div>
      </div>   
      
      <div class=\"Hidden-xs visible-sm visible-md visible-lg col-sm-4 col-md-4 col-lg-4\" align=\"center\">                  
          <img class=\"img-responsive\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "global"), "directorio_img") . "screenshot_profile.png")), "html", null, true);
        echo "\" alt=\"\" >                           
      </div>      
                  
      ";
        // line 52
        echo "  

    </div>
  </div>
  <hr>                   
";
    }

    // line 59
    public function block_contenido($context, array $blocks = array())
    {
        echo "    
  <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\" align=\"center\">
    <ul class=\"media-list\">
      <li class=\"media\">        
        <div class=\"media-body\">
          <img class=\"img-responsive\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "global"), "directorio_img") . "screenshot_pay.png")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Paga desde el móvil", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "\" >          
          <h1 class=\"media-heading\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Paga desde el móvil", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "</h1>
          <p class=\"text-justify\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Es muy fácil y sencillo, solo necesitas registrarte gratis como usuario y descargar la app en tu dispositivo móvil", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo ".</p>
          <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_registro", array("_locale" => $this->getContext($context, "lenguaje"))), "html", null, true);
        echo "\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Registrarme Gratis como Usuario", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "</a>
        </div>
      </li>          
    </ul> 
  </div>

  <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\" align=\"center\">
    <ul class=\"media-list\">
      <li class=\"media\">        
        <div class=\"media-body\">
          <img class=\"img-responsive\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "global"), "directorio_img") . "screenshot_affiliate.png")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Afilia gratis tu negocio", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "\" >
          <h1 class=\"media-heading\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Afilia gratis tu negocio", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "</h1>
          <p class=\"text-justify\">";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Registralo gratis, ingresa los datos que se solicitan y listo !, tu negocio ya cuenta con un nuevo medio de pago", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo ".</p>
          <a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comercio_registro", array("_locale" => $this->getContext($context, "lenguaje"))), "html", null, true);
        echo "\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Afiliar Gratis mi negocio", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "</a>
        </div>
      </li>          
    </ul>  
  </div>

  <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\" align=\"center\">
    <ul class=\"media-list\">
      <li class=\"media\">        
        <div class=\"media-body\">
          <img class=\"img-responsive\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "global"), "directorio_img") . "screenshot_pin.png")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Seguro y Confiable", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "\" >
          <h1 class=\"media-heading\">";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Seguro y Confiable", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "</h1>
          <p class=\"text-justify\">";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Evita clonaciones, robos o pérdidas de dinero o tarjetas de crédito, solo necesitas tu dispositivo móvil para realizar el pago de tus compras", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo ".</p>
          <a href=\"\">";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("¿Cómo funciona?", array(), $this->getContext($context, "lenguaje")), "html", null, true);
        echo "</a>
        </div>
      </li>          
    </ul>   
  </div>  

  <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\" align=\"center\">
    <table>
   ";
        // line 101
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 102
            echo "            <tr>
                
                <td>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</td>                
                <td>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nombre"), "html", null, true);
            echo "</td>
                <td>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "razonsocial"), "html", null, true);
            echo "</td>
                
                <td>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "telefono"), "html", null, true);
            echo "</td>
                
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "      </table>   
  </div>

";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 112,  270 => 108,  265 => 106,  261 => 105,  257 => 104,  253 => 102,  249 => 101,  238 => 93,  234 => 92,  230 => 91,  224 => 90,  209 => 80,  205 => 79,  201 => 78,  195 => 77,  180 => 67,  176 => 66,  172 => 65,  166 => 64,  157 => 59,  148 => 52,  142 => 49,  134 => 44,  125 => 38,  119 => 35,  112 => 31,  108 => 30,  104 => 29,  100 => 28,  97 => 27,  92 => 23,  89 => 22,  81 => 19,  75 => 18,  69 => 17,  62 => 16,  59 => 15,  54 => 12,  51 => 11,  46 => 8,  43 => 7,  36 => 4,  33 => 3,);
    }
}
