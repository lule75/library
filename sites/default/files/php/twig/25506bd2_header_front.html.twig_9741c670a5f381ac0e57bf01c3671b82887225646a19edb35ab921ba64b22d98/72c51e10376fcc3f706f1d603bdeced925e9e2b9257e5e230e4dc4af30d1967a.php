<?php

/* themes/custom/endymion/partials/header_front.html.twig */
class __TwigTemplate_0f963d345f8b9e2d9a6d5125d6b5dd89437f792d4f88e02d14871d1c86c39c0a extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div class=\"container-front\">
    <header class=\"main-header-front\" role=\"banner\">
        ";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "

        <div class=\"main-navigation\">
            ";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_navigation", array()), "html", null, true));
        echo "
        </div>

        
     </header>
     <div class=\"banner-front\">     
          ";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner", array()), "html", null, true));
        echo "
       
     \t</div>
      
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/endymion/partials/header_front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  53 => 6,  47 => 3,  43 => 1,);
    }
}
/* <div class="container-front">*/
/*     <header class="main-header-front" role="banner">*/
/*         {{ page.header }}*/
/* */
/*         <div class="main-navigation">*/
/*             {{ page.main_navigation }}*/
/*         </div>*/
/* */
/*         */
/*      </header>*/
/*      <div class="banner-front">     */
/*           {{ page.banner }}*/
/*        */
/*      	</div>*/
/*       */
/* </div>*/
/* */
