<?php

/* themes/custom/endymion/page--front.html.twig */
class __TwigTemplate_239cc67a72c00fc8e0f8454ce83bd05d61e37ce89d7e9ff7294605dac96d83ca extends Twig_Template
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
        $tags = array("include" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include'),
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
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/partials/header_front.html.twig"), "themes/custom/endymion/page--front.html.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"container-header\">

  <main1 role=\"main\">

  <!--
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 9
        echo "  --> 


    <div class=\"layout-content-front\">
        <div class=\"recommend-books\">     
          ";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "recommend_books", array()), "html", null, true));
        echo "
        </div>
        <div class=\"latest-books\">     
          ";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "latest_books", array()), "html", null, true));
        echo "
        </div>
        <div class=\"viewall-button\">
          <a href=\"booklist\" class=\"large button\">  &nbsp; &nbsp;查阅全部图书&nbsp; &nbsp; </a>
        </div>
    </div>";
        // line 23
        echo "
  

  </main1>


</div>";
        // line 30
        echo "
";
        // line 31
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/partials/footer.html.twig"), "themes/custom/endymion/page--front.html.twig", 31)->display($context);
        // line 32
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/custom/endymion/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 32,  85 => 31,  82 => 30,  74 => 23,  66 => 17,  60 => 14,  53 => 9,  45 => 2,  43 => 1,);
    }
}
/* {% include directory ~ '/partials/header_front.html.twig' %}*/
/* */
/* <div class="container-header">*/
/* */
/*   <main1 role="main">*/
/* */
/*   <!--*/
/*     <a id="main-content" tabindex="-1"></a>{# link is in html.html.twig #}*/
/*   --> */
/* */
/* */
/*     <div class="layout-content-front">*/
/*         <div class="recommend-books">     */
/*           {{ page.recommend_books }}*/
/*         </div>*/
/*         <div class="latest-books">     */
/*           {{ page.latest_books }}*/
/*         </div>*/
/*         <div class="viewall-button">*/
/*           <a href="booklist" class="large button">  &nbsp; &nbsp;查阅全部图书&nbsp; &nbsp; </a>*/
/*         </div>*/
/*     </div>{# /.layout-content #}*/
/* */
/*   */
/* */
/*   </main1>*/
/* */
/* */
/* </div>{# /.layout-container #}*/
/* */
/* {% include directory ~ '/partials/footer.html.twig' %}*/
/* */
/* */
/* */
