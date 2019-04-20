<?php

/* themes/custom/endymion/templates/layout/page.html.twig */
class __TwigTemplate_e7804c94e721b9e338b127abeeb430eaba2fdb5aae73b317b97cbd5a4610389e extends Twig_Template
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
        $tags = array("include" => 1, "if" => 7);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include', 'if'),
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
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/partials/header.html.twig"), "themes/custom/endymion/templates/layout/page.html.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"container\">
  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 6
        echo "    
    ";
        // line 7
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar", array())) {
            // line 8
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\" data-sticky-container>
            
            <div class=\"sticky\" data-sticky data-margin-top=\"0\">
          
              ";
            // line 12
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar", array()), "html", null, true));
            echo "
            </div>
        
      </aside>
    ";
        }
        // line 17
        echo "

    <div class=\"layout-content\">
      <div class=\"article-list\">
        ";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        </div>
    </div>";
        // line 24
        echo "
    

  </main>
</div>";
        // line 29
        echo "
";
        // line 30
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/partials/footer.html.twig"), "themes/custom/endymion/templates/layout/page.html.twig", 30)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/endymion/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 30,  86 => 29,  80 => 24,  75 => 21,  69 => 17,  61 => 12,  55 => 8,  53 => 7,  50 => 6,  45 => 2,  43 => 1,);
    }
}
/* {% include directory ~ '/partials/header.html.twig' %}*/
/* */
/* <div class="container">*/
/*   <main role="main">*/
/*     <a id="main-content" tabindex="-1"></a>{# link is in html.html.twig #}*/
/*     */
/*     {% if page.sidebar %}*/
/*       <aside class="layout-sidebar-first" role="complementary" data-sticky-container>*/
/*             */
/*             <div class="sticky" data-sticky data-margin-top="0">*/
/*           */
/*               {{ page.sidebar }}*/
/*             </div>*/
/*         */
/*       </aside>*/
/*     {% endif %}*/
/* */
/* */
/*     <div class="layout-content">*/
/*       <div class="article-list">*/
/*         {{ page.content }}*/
/*         </div>*/
/*     </div>{# /.layout-content #}*/
/* */
/*     */
/* */
/*   </main>*/
/* </div>{# /.layout-container #}*/
/* */
/* {% include directory ~ '/partials/footer.html.twig' %}*/
