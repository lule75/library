<?php

/* themes/custom/endymion/node--book_entity.html.twig */
class __TwigTemplate_cd9f417eafddb86d4f634709fa840e99e3de8e45604cdadde026311439e48a01 extends Twig_Template
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
        echo "
<article";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "node"), "method"), "html", null, true));
        echo ">
<div class= \"book-entity-page\">


      <div class= \"book-entity-top\">

             <div class= \"book-entity-image\">
                ";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_fengmian", array()), "html", null, true));
        echo "
             </div>

             <div class= \"book-entity-name\">
                ";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_shuming", array()), "html", null, true));
        echo "
             </div>
             <div class= \"book-entity-zuozhe\">
                ";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_zuozhe", array()), "html", null, true));
        echo "
             </div>
              <div class= \"book-entity-yizhe\">
                ";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_yizhe", array()), "html", null, true));
        echo "
             </div>
             <div class= \"book-entity-chubanshe\">
                ";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_shuma", array()), "html", null, true));
        echo "
             </div>     

             <div class= \"book-entity-fenlei\">
                ";
        // line 26
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_fenlei", array()), "html", null, true));
        echo "
             </div>
             
               <div class= \"book-entity-yuzhong\">
                ";
        // line 30
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_yuzhong", array()), "html", null, true));
        echo "
             </div>

               <div class= \"book-entity-kaiben\">
                ";
        // line 34
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_kaiben", array()), "html", null, true));
        echo "
             </div>

              <div class= \"book-entity-chubanshe\">
                ";
        // line 38
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_chubanshe", array()), "html", null, true));
        echo "
             </div>

              <div class= \"book-entity-chubanshe\">
                ";
        // line 42
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_weizhi", array()), "html", null, true));
        echo "
             </div>    
             
      </div>


      <div class= \"book-entity-body\">

          <ul class=\"tabs\" data-tabs id=\"book-tabs\">
            <li class=\"tabs-title is-active\"><a href=\"#panel1\" aria-selected=\"true\">简介</a></li>
            <li class=\"tabs-title\"><a href=\"#panel2\">目录</a></li>
             <li class=\"tabs-title\"><a href=\"#panel3\">评论</a></li>
         
          </ul>

        <div class=\"tabs-content\" data-tabs-content=\"book-tabs\">
            <div class=\"tabs-panel is-active\" id=\"panel1\">
              ";
        // line 59
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array()), "html", null, true));
        echo "
            </div>
            <div class=\"tabs-panel\" id=\"panel2\">
              ";
        // line 62
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_mulu", array()), "html", null, true));
        echo "
            </div>  

            <div class=\"tabs-panel\" id=\"panel3\">
              ";
        // line 66
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_pinglun", array()), "html", null, true));
        echo "
            </div>  

            
        </div>
    </div>
</div>



</article><!-- /.node -->";
    }

    public function getTemplateName()
    {
        return "themes/custom/endymion/node--book_entity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 66,  142 => 62,  136 => 59,  116 => 42,  109 => 38,  102 => 34,  95 => 30,  88 => 26,  81 => 22,  75 => 19,  69 => 16,  63 => 13,  56 => 9,  46 => 2,  43 => 1,);
    }
}
/* */
/* <article{{ attributes.addClass('node') }}>*/
/* <div class= "book-entity-page">*/
/* */
/* */
/*       <div class= "book-entity-top">*/
/* */
/*              <div class= "book-entity-image">*/
/*                 {{content.field_fengmian}}*/
/*              </div>*/
/* */
/*              <div class= "book-entity-name">*/
/*                 {{content.field_shuming}}*/
/*              </div>*/
/*              <div class= "book-entity-zuozhe">*/
/*                 {{content.field_zuozhe}}*/
/*              </div>*/
/*               <div class= "book-entity-yizhe">*/
/*                 {{content.field_yizhe}}*/
/*              </div>*/
/*              <div class= "book-entity-chubanshe">*/
/*                 {{content.field_shuma}}*/
/*              </div>     */
/* */
/*              <div class= "book-entity-fenlei">*/
/*                 {{content.field_fenlei}}*/
/*              </div>*/
/*              */
/*                <div class= "book-entity-yuzhong">*/
/*                 {{content.field_yuzhong}}*/
/*              </div>*/
/* */
/*                <div class= "book-entity-kaiben">*/
/*                 {{content.field_kaiben}}*/
/*              </div>*/
/* */
/*               <div class= "book-entity-chubanshe">*/
/*                 {{content.field_chubanshe}}*/
/*              </div>*/
/* */
/*               <div class= "book-entity-chubanshe">*/
/*                 {{content.field_weizhi}}*/
/*              </div>    */
/*              */
/*       </div>*/
/* */
/* */
/*       <div class= "book-entity-body">*/
/* */
/*           <ul class="tabs" data-tabs id="book-tabs">*/
/*             <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">简介</a></li>*/
/*             <li class="tabs-title"><a href="#panel2">目录</a></li>*/
/*              <li class="tabs-title"><a href="#panel3">评论</a></li>*/
/*          */
/*           </ul>*/
/* */
/*         <div class="tabs-content" data-tabs-content="book-tabs">*/
/*             <div class="tabs-panel is-active" id="panel1">*/
/*               {{content.body}}*/
/*             </div>*/
/*             <div class="tabs-panel" id="panel2">*/
/*               {{content.field_mulu}}*/
/*             </div>  */
/* */
/*             <div class="tabs-panel" id="panel3">*/
/*               {{content.field_pinglun}}*/
/*             </div>  */
/* */
/*             */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* */
/* </article><!-- /.node -->*/
