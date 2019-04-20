<?php

/* themes/custom/startupgrowth_lite/templates/page.html.twig */
class __TwigTemplate_0f1de691981cfb037ec6a535d47eb835c3b151f40e5196822df06715b689e41d extends Twig_Template
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
        $tags = array("if" => 73);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 69
        echo "
";
        // line 71
        echo "<div id=\"page-container\" class=\"page-container\">

  ";
        // line 73
        if ((((((isset($context["header_top"]) ? $context["header_top"] : null) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_first", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search_area", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()))) {
            // line 74
            echo "    ";
            // line 75
            echo "    <div id=\"header-container\" class=\"header-container white-region\">

      ";
            // line 77
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top", array())) {
                // line 78
                echo "        ";
                // line 79
                echo "        <div id=\"header-top\" class=\"clearfix header-top\">
          <div class=\"";
                // line 80
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_layout_container"]) ? $context["header_layout_container"] : null), "html", null, true));
                echo "\">
            ";
                // line 82
                echo "            <div id=\"header-top-inside\" class=\"clearfix header-top-inside\">
              <div class=\"row\">
                <div class=\"col-md-12\">
                  <div class=\"header-top-area\">
                    ";
                // line 86
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top", array()), "html", null, true));
                echo "
                  </div>
                </div>
              </div>
            </div>
            ";
                // line 92
                echo "          </div>
        </div>
        ";
                // line 95
                echo "      ";
            }
            // line 96
            echo "
      ";
            // line 97
            if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search_area", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()))) {
                // line 98
                echo "        ";
                // line 99
                echo "        <header id=\"header\" role=\"banner\" class=\"clearfix header ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_layout_container_class"]) ? $context["header_layout_container_class"] : null), "html", null, true));
                echo " ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_layout_columns_class"]) ? $context["header_layout_columns_class"] : null), "html", null, true));
                echo "\">
          <div class=\"";
                // line 100
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_layout_container"]) ? $context["header_layout_container"] : null), "html", null, true));
                echo "\">
            ";
                // line 102
                echo "            <div id=\"header-inside\" class=\"clearfix header-inside\">
              <div class=\"row\">
                ";
                // line 104
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_first", array())) {
                    // line 105
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_first_grid_class"]) ? $context["header_first_grid_class"] : null), "html", null, true));
                    echo "\">
                    <div class=\"header-area\">
                      ";
                    // line 108
                    echo "                      <div id=\"header-inside-first\" class=\"clearfix header-inside-first\">
                        ";
                    // line 109
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_first", array()), "html", null, true));
                    echo "
                      </div>
                      ";
                    // line 112
                    echo "                    </div>
                  </div>
                ";
                }
                // line 115
                echo "                ";
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
                    // line 116
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_second_grid_class"]) ? $context["header_second_grid_class"] : null), "html", null, true));
                    echo " ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_second_offset_class"]) ? $context["header_second_offset_class"] : null), "html", null, true));
                    echo "\">
                    <div class=\"header-area\">
                      ";
                    // line 119
                    echo "                      <div id=\"header-inside-second\" class=\"clearfix header-inside-second\">
                        ";
                    // line 120
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
                    echo "
                      </div>
                      ";
                    // line 123
                    echo "                    </div>
                  </div>
                ";
                }
                // line 126
                echo "                ";
                if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search_area", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()))) {
                    // line 127
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_third_grid_class"]) ? $context["header_third_grid_class"] : null), "html", null, true));
                    echo "\">
                    <div class=\"header-area\">
                      ";
                    // line 130
                    echo "                      <div id=\"header-inside-third\" class=\"clearfix header-inside-third\">
                        ";
                    // line 131
                    if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search_area", array())) {
                        // line 132
                        echo "                          <div id=\"search-area\" class=\"clearfix search-area\">
                            ";
                        // line 133
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search_area", array()), "html", null, true));
                        echo "
                          </div>
                        ";
                    }
                    // line 136
                    echo "                        ";
                    if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array())) {
                        // line 137
                        echo "                          ";
                        // line 138
                        echo "                          <div id=\"main-navigation\" class=\"clearfix main-navigation ";
                        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search_area", array())) {
                            echo " with-search-bar ";
                        }
                        echo "\">
                            <nav role=\"navigation\">
                              ";
                        // line 140
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
                        echo "
                            </nav>
                          </div>
                          ";
                        // line 144
                        echo "                        ";
                    }
                    // line 145
                    echo "                      </div>
                      ";
                    // line 147
                    echo "                    </div>
                  </div>
                ";
                }
                // line 150
                echo "              </div>
            </div>
            ";
                // line 153
                echo "          </div>
        </header>
        ";
                // line 156
                echo "      ";
            }
            // line 157
            echo "
    </div>
    ";
            // line 160
            echo "  ";
        }
        // line 161
        echo "
  ";
        // line 162
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner", array())) {
            // line 163
            echo "    ";
            // line 164
            echo "    <div id=\"banner\" class=\"clearfix banner\">
      <div class=\"container-fluid\">

        ";
            // line 168
            echo "        <div id=\"banner-inside\" class=\"clearfix banner-inside\">
          <div class=\"banner-area\">
              <div class=\"row\">
                <div class=\"col-md-12\">
                  ";
            // line 172
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner", array()), "html", null, true));
            echo "
                </div>
              </div>
          </div>
        </div>
        ";
            // line 178
            echo "
      </div>
    </div>
    ";
            // line 182
            echo "  ";
        }
        // line 183
        echo "
  ";
        // line 185
        echo "  <div id=\"page-start\" class=\"clearfix\"></div>

  ";
        // line 188
        echo "  <div id=\"page\" class=\"clearfix page\">

    ";
        // line 190
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "system_messages", array())) {
            // line 191
            echo "      <div class=\"system-messages\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 195
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "system_messages", array()), "html", null, true));
            echo "
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 201
        echo "
    ";
        // line 202
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array())) {
            // line 203
            echo "      ";
            // line 204
            echo "      <div id=\"content-top\" class=\"clearfix content-top ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_top_background_color"]) ? $context["content_top_background_color"] : null), "html", null, true));
            echo "\">
        <div class=\"";
            // line 205
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_top_layout_container"]) ? $context["content_top_layout_container"] : null), "html", null, true));
            echo "\">
          ";
            // line 207
            echo "          <div id=\"content-top-inside\" class=\"clearfix content-top-inside";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(((((isset($context["content_top_animations"]) ? $context["content_top_animations"] : null) == "enabled")) ? (" fade") : (""))));
            echo "\"
            ";
            // line 208
            if (((isset($context["content_top_animations"]) ? $context["content_top_animations"] : null) == "enabled")) {
                // line 209
                echo "              data-animate-effect=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_top_animation_effect"]) ? $context["content_top_animation_effect"] : null), "html", null, true));
                echo "\"
            ";
            }
            // line 210
            echo ">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"content-top-area\">
                  ";
            // line 214
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array()), "html", null, true));
            echo "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 220
            echo "        </div>
      </div>
      ";
            // line 223
            echo "    ";
        }
        // line 224
        echo "
    ";
        // line 225
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top_highlighted", array())) {
            // line 226
            echo "      ";
            // line 227
            echo "      <div id=\"content-top-highlighted\" class=\"clearfix content-top-highlighted ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_top_highlighted_background_color"]) ? $context["content_top_highlighted_background_color"] : null), "html", null, true));
            echo "\">
        <div class=\"";
            // line 228
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_top_highlighted_layout_container"]) ? $context["content_top_highlighted_layout_container"] : null), "html", null, true));
            echo "\">
          ";
            // line 230
            echo "          <div id=\"content-top-highlighted-inside\" class=\"clearfix content-top-highlighted-inside";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(((((isset($context["content_top_highlighted_animations"]) ? $context["content_top_highlighted_animations"] : null) == "enabled")) ? (" fade") : (""))));
            echo "\"
            ";
            // line 231
            if (((isset($context["content_top_highlighted_animations"]) ? $context["content_top_highlighted_animations"] : null) == "enabled")) {
                // line 232
                echo "              data-animate-effect=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_top_highlighted_animation_effect"]) ? $context["content_top_highlighted_animation_effect"] : null), "html", null, true));
                echo "\"
            ";
            }
            // line 233
            echo ">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"content-top-highlighted-area\">
                  ";
            // line 237
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top_highlighted", array()), "html", null, true));
            echo "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 243
            echo "        </div>
      </div>
      ";
            // line 246
            echo "    ";
        }
        // line 247
        echo "
    ";
        // line 249
        echo "    <div id=\"main-content\" class=\"clearfix main-content white-region\">
      <div class=\"container\">
        <div class=\"row\">
          <section class=\"";
        // line 252
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["main_grid_class"]) ? $context["main_grid_class"] : null), "html", null, true));
        echo "\">
            ";
        // line 254
        echo "            <div id=\"main\" class=\"clearfix main main-area";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(((((isset($context["main_content_animations"]) ? $context["main_content_animations"] : null) == "enabled")) ? (" fade") : (""))));
        echo "\"
              ";
        // line 255
        if (((isset($context["main_content_animations"]) ? $context["main_content_animations"] : null) == "enabled")) {
            // line 256
            echo "                data-animate-effect=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["main_content_animation_effect"]) ? $context["main_content_animation_effect"] : null), "html", null, true));
            echo "\"
              ";
        }
        // line 257
        echo ">
              ";
        // line 258
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            // line 259
            echo "                ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
              ";
        }
        // line 261
        echo "            </div>
            ";
        // line 263
        echo "          </section>
          ";
        // line 264
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 265
            echo "            <aside class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebar_first_grid_class"]) ? $context["sidebar_first_grid_class"] : null), "html", null, true));
            echo "\">
              ";
            // line 267
            echo "              <section id=\"sidebar-first\" class=\"sidebar sidebar-first clearfix";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(((((isset($context["sidebar_first_animations"]) ? $context["sidebar_first_animations"] : null) == "enabled")) ? (" fade") : (""))));
            echo "\"
                ";
            // line 268
            if (((isset($context["sidebar_first_animations"]) ? $context["sidebar_first_animations"] : null) == "enabled")) {
                // line 269
                echo "                  data-animate-effect=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebar_first_animation_effect"]) ? $context["sidebar_first_animation_effect"] : null), "html", null, true));
                echo "\"
                ";
            }
            // line 270
            echo ">
                ";
            // line 271
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
              </section>
              ";
            // line 274
            echo "            </aside>
          ";
        }
        // line 276
        echo "          ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 277
            echo "            <aside class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebar_second_grid_class"]) ? $context["sidebar_second_grid_class"] : null), "html", null, true));
            echo "\">
              ";
            // line 279
            echo "              <section id=\"sidebar-second\" class=\"sidebar sidebar-second clearfix";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(((((isset($context["sidebar_second_animations"]) ? $context["sidebar_second_animations"] : null) == "enabled")) ? (" fade") : (""))));
            echo "\"
                ";
            // line 280
            if (((isset($context["sidebar_second_animations"]) ? $context["sidebar_second_animations"] : null) == "enabled")) {
                // line 281
                echo "                  data-animate-effect=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebar_second_animation_effect"]) ? $context["sidebar_second_animation_effect"] : null), "html", null, true));
                echo "\"
                ";
            }
            // line 282
            echo ">
                ";
            // line 283
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
              </section>
              ";
            // line 286
            echo "            </aside>
          ";
        }
        // line 288
        echo "        </div>
      </div>
    </div>
    ";
        // line 292
        echo "
    ";
        // line 293
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom_second", array()))) {
            // line 294
            echo "      ";
            // line 295
            echo "      <div id=\"content-bottom\" class=\"clearfix content-bottom ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_bottom_background_color"]) ? $context["content_bottom_background_color"] : null), "html", null, true));
            echo "\">
        <div class=\"container\">
          ";
            // line 298
            echo "          <div id=\"content-bottom-inside\" class=\"clearfix content-bottom-inside";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(((((isset($context["content_bottom_animations"]) ? $context["content_bottom_animations"] : null) == "enabled")) ? (" fade") : (""))));
            echo "\"
            ";
            // line 299
            if (((isset($context["content_bottom_animations"]) ? $context["content_bottom_animations"] : null) == "enabled")) {
                // line 300
                echo "              data-animate-effect=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_bottom_animation_effect"]) ? $context["content_bottom_animation_effect"] : null), "html", null, true));
                echo "\"
            ";
            }
            // line 301
            echo ">
            <div class=\"row\">
              ";
            // line 303
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom_first", array())) {
                // line 304
                echo "                <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_bottom_first_grid_class"]) ? $context["content_bottom_first_grid_class"] : null), "html", null, true));
                echo "\">
                  <div id=\"content-bottom-first\" class=\"content-bottom-first\">
                    <div class=\"content-bottom-area clearfix\">
                      ";
                // line 307
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom_first", array()), "html", null, true));
                echo "
                    </div>
                  </div>
                </div>
              ";
            }
            // line 312
            echo "              ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom_second", array())) {
                // line 313
                echo "                <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_bottom_second_grid_class"]) ? $context["content_bottom_second_grid_class"] : null), "html", null, true));
                echo "\">
                  <div id=\"content-bottom-second\" class=\"content-bottom-second\">
                    <div class=\"content-bottom-area clearfix\">
                      ";
                // line 316
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom_second", array()), "html", null, true));
                echo "
                    </div>
                  </div>
                </div>
              ";
            }
            // line 321
            echo "            </div>
          </div>
          ";
            // line 324
            echo "        </div>
      </div>
      ";
            // line 327
            echo "    ";
        }
        // line 328
        echo "
    ";
        // line 329
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 330
            echo "      ";
            // line 331
            echo "      <div id=\"highlighted\" class=\"clearfix highlighted ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["highlighted_background_color"]) ? $context["highlighted_background_color"] : null), "html", null, true));
            echo "\">
        <div class=\"";
            // line 332
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["highlighted_layout_container"]) ? $context["highlighted_layout_container"] : null), "html", null, true));
            echo "\">
          ";
            // line 334
            echo "          <div id=\"highlighted-inside\" class=\"clearfix highlighted-inside";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(((((isset($context["highlighted_animations"]) ? $context["highlighted_animations"] : null) == "enabled")) ? (" fade") : (""))));
            echo "\"
            ";
            // line 335
            if (((isset($context["highlighted_animations"]) ? $context["highlighted_animations"] : null) == "enabled")) {
                // line 336
                echo "              data-animate-effect=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["highlighted_animation_effect"]) ? $context["highlighted_animation_effect"] : null), "html", null, true));
                echo "\"
            ";
            }
            // line 337
            echo ">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"highlighted-area\">
                  ";
            // line 341
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 347
            echo "        </div>
      </div>
      ";
            // line 350
            echo "    ";
        }
        // line 351
        echo "
    ";
        // line 352
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted_bottom_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted_bottom_second", array()))) {
            // line 353
            echo "      ";
            // line 354
            echo "      <div id=\"highlighted-bottom\" class=\"clearfix highlighted-bottom ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["highlighted_bottom_background_color"]) ? $context["highlighted_bottom_background_color"] : null), "html", null, true));
            echo "\">
        <div id=\"highlighted-bottom-transparent-bg\" class=\"highlighted-bottom-transparent-bg\"></div>
        <div class=\"";
            // line 356
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["highlighted_bottom_layout_container"]) ? $context["highlighted_bottom_layout_container"] : null), "html", null, true));
            echo "\">
          ";
            // line 358
            echo "          <div id=\"highlighted-bottom-inside\" class=\"clearfix highlighted-bottom-inside";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(((((isset($context["highlighted_bottom_animations"]) ? $context["highlighted_bottom_animations"] : null) == "enabled")) ? (" fade") : (""))));
            echo "\"
            ";
            // line 359
            if (((isset($context["highlighted_bottom_animations"]) ? $context["highlighted_bottom_animations"] : null) == "enabled")) {
                // line 360
                echo "              data-animate-effect=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["highlighted_bottom_animation_effect"]) ? $context["highlighted_bottom_animation_effect"] : null), "html", null, true));
                echo "\"
            ";
            }
            // line 361
            echo ">
            <div class=\"row\">
              ";
            // line 363
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted_bottom_first", array())) {
                // line 364
                echo "                <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["highlighted_bottom_first_grid_class"]) ? $context["highlighted_bottom_first_grid_class"] : null), "html", null, true));
                echo "\">
                  <div id=\"highlighted-bottom-first\" class=\"highlighted-bottom-first\">
                    <div class=\"highlighted-bottom-area clearfix\">
                      ";
                // line 367
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted_bottom_first", array()), "html", null, true));
                echo "
                    </div>
                  </div>
                </div>
              ";
            }
            // line 372
            echo "              ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted_bottom_second", array())) {
                // line 373
                echo "                <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["highlighted_bottom_second_grid_class"]) ? $context["highlighted_bottom_second_grid_class"] : null), "html", null, true));
                echo "\">
                  <div id=\"highlighted-bottom-second\" class=\"highlighted-bottom-second\">
                    <div class=\"highlighted-bottom-area clearfix\">
                      ";
                // line 376
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted_bottom_second", array()), "html", null, true));
                echo "
                    </div>
                  </div>
                </div>
              ";
            }
            // line 381
            echo "            </div>
          </div>
          ";
            // line 384
            echo "        </div>
      </div>
      ";
            // line 387
            echo "    ";
        }
        // line 388
        echo "
    ";
        // line 389
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_top", array())) {
            // line 390
            echo "      ";
            // line 391
            echo "      <div id=\"featured-top\" class=\"clearfix featured-top ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["featured_top_background_color"]) ? $context["featured_top_background_color"] : null), "html", null, true));
            echo "\">
        <div class=\"";
            // line 392
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["featured_top_layout_container"]) ? $context["featured_top_layout_container"] : null), "html", null, true));
            echo "\">
          ";
            // line 394
            echo "          <div id=\"featured-top-inside\" class=\"clearfix featured-top-inside";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(((((isset($context["featured_top_animations"]) ? $context["featured_top_animations"] : null) == "enabled")) ? (" fade") : (""))));
            echo "\"
            ";
            // line 395
            if (((isset($context["featured_top_animations"]) ? $context["featured_top_animations"] : null) == "enabled")) {
                // line 396
                echo "              data-animate-effect=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["featured_top_animation_effect"]) ? $context["featured_top_animation_effect"] : null), "html", null, true));
                echo "\"
            ";
            }
            // line 397
            echo ">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"featured-top-area\">
                  ";
            // line 401
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_top", array()), "html", null, true));
            echo "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 407
            echo "        </div>
      </div>
      ";
            // line 410
            echo "    ";
        }
        // line 411
        echo "
    ";
        // line 412
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured", array())) {
            // line 413
            echo "      ";
            // line 414
            echo "      <div id=\"featured\" class=\"clearfix featured ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["featured_background_color"]) ? $context["featured_background_color"] : null), "html", null, true));
            echo "\">
        <div class=\"";
            // line 415
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["featured_layout_container"]) ? $context["featured_layout_container"] : null), "html", null, true));
            echo "\">
          ";
            // line 417
            echo "          <div id=\"featured-inside\" class=\"clearfix featured-inside";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(((((isset($context["featured_animations"]) ? $context["featured_animations"] : null) == "enabled")) ? (" fade") : (""))));
            echo "\"
            ";
            // line 418
            if (((isset($context["featured_animations"]) ? $context["featured_animations"] : null) == "enabled")) {
                // line 419
                echo "              data-animate-effect=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["featured_animation_effect"]) ? $context["featured_animation_effect"] : null), "html", null, true));
                echo "\"
            ";
            }
            // line 420
            echo ">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"featured-area\">
                  ";
            // line 424
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured", array()), "html", null, true));
            echo "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 430
            echo "        </div>
      </div>
      ";
            // line 433
            echo "    ";
        }
        // line 434
        echo "
    ";
        // line 435
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom", array())) {
            // line 436
            echo "      ";
            // line 437
            echo "      <div id=\"featured-bottom\" class=\"clearfix featured-bottom ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["featured_bottom_background_color"]) ? $context["featured_bottom_background_color"] : null), "html", null, true));
            echo "\">
        <div class=\"";
            // line 438
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["featured_bottom_layout_container"]) ? $context["featured_bottom_layout_container"] : null), "html", null, true));
            echo "\">
          ";
            // line 440
            echo "          <div id=\"featured-bottom-inside\" class=\"clearfix featured-bottom-inside";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(((((isset($context["featured_bottom_animations"]) ? $context["featured_bottom_animations"] : null) == "enabled")) ? (" fade") : (""))));
            echo "\"
            ";
            // line 441
            if (((isset($context["featured_bottom_animations"]) ? $context["featured_bottom_animations"] : null) == "enabled")) {
                // line 442
                echo "              data-animate-effect=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["featured_bottom_animation_effect"]) ? $context["featured_bottom_animation_effect"] : null), "html", null, true));
                echo "\"
            ";
            }
            // line 443
            echo ">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"featured-bottom-area\">
                  ";
            // line 447
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom", array()), "html", null, true));
            echo "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 453
            echo "        </div>
      </div>
      ";
            // line 456
            echo "    ";
        }
        // line 457
        echo "
  </div>
  ";
        // line 460
        echo "
  ";
        // line 461
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_second", array()))) {
            // line 462
            echo "    ";
            // line 463
            echo "    <div id=\"footer-top\" class=\"clearfix footer-top ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_top_regions"]) ? $context["footer_top_regions"] : null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_top_background_color"]) ? $context["footer_top_background_color"] : null), "html", null, true));
            echo "\">
      <div class=\"container\">
        ";
            // line 466
            echo "        <div id=\"footer-top-inside\" class=\"clearfix footer-top-inside";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(((((isset($context["footer_top_animations"]) ? $context["footer_top_animations"] : null) == "enabled")) ? (" fade") : (""))));
            echo "\"
          ";
            // line 467
            if (((isset($context["footer_top_animations"]) ? $context["footer_top_animations"] : null) == "enabled")) {
                // line 468
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_top_animation_effect"]) ? $context["footer_top_animation_effect"] : null), "html", null, true));
                echo "\"
          ";
            }
            // line 469
            echo ">
          <div class=\"row\">
            ";
            // line 471
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_first", array())) {
                // line 472
                echo "              <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_top_first_grid_class"]) ? $context["footer_top_first_grid_class"] : null), "html", null, true));
                echo "\">
                ";
                // line 474
                echo "                <div id=\"footer-top-first\" class=\"clearfix footer-top-first\">
                  <div class=\"footer-top-area\">
                    ";
                // line 476
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_first", array()), "html", null, true));
                echo "
                  </div>
                </div>
                ";
                // line 480
                echo "              </div>
            ";
            }
            // line 482
            echo "            ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_second", array())) {
                // line 483
                echo "              <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_top_second_grid_class"]) ? $context["footer_top_second_grid_class"] : null), "html", null, true));
                echo "\">
                ";
                // line 485
                echo "                <div id=\"footer-top-second\" class=\"clearfix footer-top-second\">
                  <div class=\"footer-top-area\">
                    ";
                // line 487
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_second", array()), "html", null, true));
                echo "
                  </div>
                </div>
                ";
                // line 491
                echo "              </div>
            ";
            }
            // line 493
            echo "          </div>
        </div>
        ";
            // line 496
            echo "      </div>
    </div>
    ";
            // line 499
            echo "  ";
        }
        // line 500
        echo "
  ";
        // line 501
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()))) {
            // line 502
            echo "    ";
            // line 503
            echo "    <footer id=\"footer\" class=\"clearfix footer ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_background_color"]) ? $context["footer_background_color"] : null), "html", null, true));
            echo "\">
      <div class=\"";
            // line 504
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_layout_container"]) ? $context["footer_layout_container"] : null), "html", null, true));
            echo "\">
        <div class=\"row\">
          ";
            // line 506
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 507
                echo "            <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_grid_class"]) ? $context["footer_grid_class"] : null), "html", null, true));
                echo "\">
              <div class=\"footer-area";
                // line 508
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(((((isset($context["footer_animations"]) ? $context["footer_animations"] : null) == "enabled")) ? (" fade") : (""))));
                echo "\"
                ";
                // line 509
                if (((isset($context["footer_animations"]) ? $context["footer_animations"] : null) == "enabled")) {
                    // line 510
                    echo "                  data-animate-effect=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_animation_effect"]) ? $context["footer_animation_effect"] : null), "html", null, true));
                    echo "\"
                ";
                }
                // line 511
                echo ">
                ";
                // line 512
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "
              </div>
            </div>
          ";
            }
            // line 516
            echo "          ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
                // line 517
                echo "            <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_grid_class"]) ? $context["footer_grid_class"] : null), "html", null, true));
                echo "\">
              <div class=\"footer-area";
                // line 518
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(((((isset($context["footer_animations"]) ? $context["footer_animations"] : null) == "enabled")) ? (" fade") : (""))));
                echo "\"
                ";
                // line 519
                if (((isset($context["footer_animations"]) ? $context["footer_animations"] : null) == "enabled")) {
                    // line 520
                    echo "                  data-animate-effect=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_animation_effect"]) ? $context["footer_animation_effect"] : null), "html", null, true));
                    echo "\"
                ";
                }
                // line 521
                echo ">
                ";
                // line 522
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
                echo "
              </div>
            </div>
          ";
            }
            // line 526
            echo "          ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
                // line 527
                echo "            <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_grid_class"]) ? $context["footer_grid_class"] : null), "html", null, true));
                echo "\">
              <div class=\"footer-area";
                // line 528
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(((((isset($context["footer_animations"]) ? $context["footer_animations"] : null) == "enabled")) ? (" fade") : (""))));
                echo "\"
                ";
                // line 529
                if (((isset($context["footer_animations"]) ? $context["footer_animations"] : null) == "enabled")) {
                    // line 530
                    echo "                  data-animate-effect=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_animation_effect"]) ? $context["footer_animation_effect"] : null), "html", null, true));
                    echo "\"
                ";
                }
                // line 531
                echo ">
                ";
                // line 532
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
                echo "
              </div>
            </div>
          ";
            }
            // line 536
            echo "          ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array())) {
                // line 537
                echo "            <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_grid_class"]) ? $context["footer_grid_class"] : null), "html", null, true));
                echo "\">
              <div class=\"footer-area";
                // line 538
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(((((isset($context["footer_animations"]) ? $context["footer_animations"] : null) == "enabled")) ? (" fade") : (""))));
                echo "\"
                ";
                // line 539
                if (((isset($context["footer_animations"]) ? $context["footer_animations"] : null) == "enabled")) {
                    // line 540
                    echo "                  data-animate-effect=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_animation_effect"]) ? $context["footer_animation_effect"] : null), "html", null, true));
                    echo "\"
                ";
                }
                // line 541
                echo ">
                ";
                // line 542
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()), "html", null, true));
                echo "
              </div>
            </div>
          ";
            }
            // line 546
            echo "        </div>
      </div>
    </footer>
    ";
            // line 550
            echo "  ";
        }
        // line 551
        echo "
  ";
        // line 552
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sub_footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()))) {
            // line 553
            echo "    <div id=\"subfooter\" class=\"clearfix subfooter ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["subfooter_background_color"]) ? $context["subfooter_background_color"] : null), "html", null, true));
            echo "\">
      <div class=\"";
            // line 554
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["subfooter_layout_container"]) ? $context["subfooter_layout_container"] : null), "html", null, true));
            echo "\">
        ";
            // line 556
            echo "        <div id=\"subfooter-inside\" class=\"clearfix subfooter-inside\">
          <div class=\"row\">
            ";
            // line 559
            echo "            ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sub_footer_first", array())) {
                // line 560
                echo "              <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["subfooter_first_grid_class"]) ? $context["subfooter_first_grid_class"] : null), "html", null, true));
                echo "\">
                <div class=\"subfooter-area first\">
                  ";
                // line 562
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sub_footer_first", array()), "html", null, true));
                echo "
                </div>
              </div>
            ";
            }
            // line 566
            echo "            ";
            // line 567
            echo "            ";
            // line 568
            echo "            ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
                // line 569
                echo "              <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["subfooter_second_grid_class"]) ? $context["subfooter_second_grid_class"] : null), "html", null, true));
                echo "\">
                <div class=\"subfooter-area second\">
                  ";
                // line 571
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
                echo "
                </div>
              </div>
            ";
            }
            // line 575
            echo "            ";
            // line 576
            echo "          </div>
        </div>
        ";
            // line 579
            echo "      </div>
    </div>
    ";
            // line 582
            echo "  ";
        }
        // line 583
        echo "
  ";
        // line 584
        if ((isset($context["scroll_to_top"]) ? $context["scroll_to_top"] : null)) {
            // line 585
            echo "  ";
            // line 586
            echo "    <div id=\"toTop\" class=\"to-top\"><i class=\"fa ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["scroll_to_top_icon"]) ? $context["scroll_to_top_icon"] : null), "html", null, true));
            echo "\"></i></div>
  ";
            // line 588
            echo "  ";
        }
        // line 589
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/startupgrowth_lite/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1174 => 589,  1171 => 588,  1166 => 586,  1164 => 585,  1162 => 584,  1159 => 583,  1156 => 582,  1152 => 579,  1148 => 576,  1146 => 575,  1139 => 571,  1133 => 569,  1130 => 568,  1128 => 567,  1126 => 566,  1119 => 562,  1113 => 560,  1110 => 559,  1106 => 556,  1102 => 554,  1097 => 553,  1095 => 552,  1092 => 551,  1089 => 550,  1084 => 546,  1077 => 542,  1074 => 541,  1068 => 540,  1066 => 539,  1062 => 538,  1057 => 537,  1054 => 536,  1047 => 532,  1044 => 531,  1038 => 530,  1036 => 529,  1032 => 528,  1027 => 527,  1024 => 526,  1017 => 522,  1014 => 521,  1008 => 520,  1006 => 519,  1002 => 518,  997 => 517,  994 => 516,  987 => 512,  984 => 511,  978 => 510,  976 => 509,  972 => 508,  967 => 507,  965 => 506,  960 => 504,  955 => 503,  953 => 502,  951 => 501,  948 => 500,  945 => 499,  941 => 496,  937 => 493,  933 => 491,  927 => 487,  923 => 485,  918 => 483,  915 => 482,  911 => 480,  905 => 476,  901 => 474,  896 => 472,  894 => 471,  890 => 469,  884 => 468,  882 => 467,  877 => 466,  869 => 463,  867 => 462,  865 => 461,  862 => 460,  858 => 457,  855 => 456,  851 => 453,  843 => 447,  837 => 443,  831 => 442,  829 => 441,  824 => 440,  820 => 438,  815 => 437,  813 => 436,  811 => 435,  808 => 434,  805 => 433,  801 => 430,  793 => 424,  787 => 420,  781 => 419,  779 => 418,  774 => 417,  770 => 415,  765 => 414,  763 => 413,  761 => 412,  758 => 411,  755 => 410,  751 => 407,  743 => 401,  737 => 397,  731 => 396,  729 => 395,  724 => 394,  720 => 392,  715 => 391,  713 => 390,  711 => 389,  708 => 388,  705 => 387,  701 => 384,  697 => 381,  689 => 376,  682 => 373,  679 => 372,  671 => 367,  664 => 364,  662 => 363,  658 => 361,  652 => 360,  650 => 359,  645 => 358,  641 => 356,  635 => 354,  633 => 353,  631 => 352,  628 => 351,  625 => 350,  621 => 347,  613 => 341,  607 => 337,  601 => 336,  599 => 335,  594 => 334,  590 => 332,  585 => 331,  583 => 330,  581 => 329,  578 => 328,  575 => 327,  571 => 324,  567 => 321,  559 => 316,  552 => 313,  549 => 312,  541 => 307,  534 => 304,  532 => 303,  528 => 301,  522 => 300,  520 => 299,  515 => 298,  509 => 295,  507 => 294,  505 => 293,  502 => 292,  497 => 288,  493 => 286,  488 => 283,  485 => 282,  479 => 281,  477 => 280,  472 => 279,  467 => 277,  464 => 276,  460 => 274,  455 => 271,  452 => 270,  446 => 269,  444 => 268,  439 => 267,  434 => 265,  432 => 264,  429 => 263,  426 => 261,  420 => 259,  418 => 258,  415 => 257,  409 => 256,  407 => 255,  402 => 254,  398 => 252,  393 => 249,  390 => 247,  387 => 246,  383 => 243,  375 => 237,  369 => 233,  363 => 232,  361 => 231,  356 => 230,  352 => 228,  347 => 227,  345 => 226,  343 => 225,  340 => 224,  337 => 223,  333 => 220,  325 => 214,  319 => 210,  313 => 209,  311 => 208,  306 => 207,  302 => 205,  297 => 204,  295 => 203,  293 => 202,  290 => 201,  281 => 195,  275 => 191,  273 => 190,  269 => 188,  265 => 185,  262 => 183,  259 => 182,  254 => 178,  246 => 172,  240 => 168,  235 => 164,  233 => 163,  231 => 162,  228 => 161,  225 => 160,  221 => 157,  218 => 156,  214 => 153,  210 => 150,  205 => 147,  202 => 145,  199 => 144,  193 => 140,  185 => 138,  183 => 137,  180 => 136,  174 => 133,  171 => 132,  169 => 131,  166 => 130,  160 => 127,  157 => 126,  152 => 123,  147 => 120,  144 => 119,  136 => 116,  133 => 115,  128 => 112,  123 => 109,  120 => 108,  114 => 105,  112 => 104,  108 => 102,  104 => 100,  97 => 99,  95 => 98,  93 => 97,  90 => 96,  87 => 95,  83 => 92,  75 => 86,  69 => 82,  65 => 80,  62 => 79,  60 => 78,  58 => 77,  54 => 75,  52 => 74,  50 => 73,  46 => 71,  43 => 69,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Startup Growth Lite's theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template normally located in the*/
/*  * core/modules/system directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  * - logo: The url of the logo image, as defined in theme settings.*/
/*  * - site_name: The name of the site. This is empty when displaying the site*/
/*  *   name has been disabled in the theme settings.*/
/*  * - site_slogan: The slogan of the site. This is empty when displaying the site*/
/*  *   slogan has been disabled in theme settings.*/
/* */
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header_top: Items for the Header Top region.*/
/*  * - page.header_first: Items for the Header First region.*/
/*  * - page.header: Items for the Header Second region.*/
/*  * - page.navigation: Items for the Navigation region.*/
/*  * - page.search_area: Items for the Navigation search area region.*/
/*  * - page.banner: Items for the Banner region.*/
/*  * - page.content_top: Items for the Content Top region.*/
/*  * - page.content_top_highlighted: Items for the Content Top Highlighted region.*/
/*  * - page.content: Items for the Content region.*/
/*  * - page.sidebar_first: Items for the First Sidebar region.*/
/*  * - page.sidebar_second: Items for the Second Sidebar region.*/
/*  * - page.content_bottom_first: Items for the Content Bottom First region.*/
/*  * - page.content_bottom_second: Items for the Content Bottom Second region.*/
/*  * - page.featured_top: Items for the Featured Top region.*/
/*  * - page.featured: Items for the Featured region.*/
/*  * - page.featured_bottom: Items for the Featured Bottom region.*/
/*  * - page.breadcrumb: Items for the Breadcrumb region.*/
/*  * - page.highlighted: Items for the Highlighted region.*/
/*  * - page.highlighted_bottom_first: Items for the Highlighted Bottom First region.*/
/*  * - page.highlighted_bottom_second: Items for the Highlighted Bottom Second region.*/
/*  * - page.footer_top_first: Items for the Footer Top First region.*/
/*  * - page.footer_top_second: Items for the Footer Top Second region.*/
/*  * - page.footer_first: Items for the Footer First region.*/
/*  * - page.footer_second: Items for the Footer Second region.*/
/*  * - page.footer_third: Items for the Footer Third region.*/
/*  * - page.footer_fourth: Items for the Footer Fourth region.*/
/*  * - page.sub_footer_first: Items for the Subfooter First region.*/
/*  * - page.footer: Items for the Subfooter Second region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* */
/* {# #page-container #}*/
/* <div id="page-container" class="page-container">*/
/* */
/*   {% if header_top or page.header_first or page.header or page.search_area or page.navigation %}*/
/*     {# #header-container #}*/
/*     <div id="header-container" class="header-container white-region">*/
/* */
/*       {% if page.header_top %}*/
/*         {# #header-top #}*/
/*         <div id="header-top" class="clearfix header-top">*/
/*           <div class="{{ header_layout_container }}">*/
/*             {# #header-top-inside #}*/
/*             <div id="header-top-inside" class="clearfix header-top-inside">*/
/*               <div class="row">*/
/*                 <div class="col-md-12">*/
/*                   <div class="header-top-area">*/
/*                     {{ page.header_top }}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             {# EOF: #header-top-inside #}*/
/*           </div>*/
/*         </div>*/
/*         {# EOF: #header-top #}*/
/*       {% endif %}*/
/* */
/*       {% if page.header_first or page.header or page.search_area or page.navigation %}*/
/*         {# #header #}*/
/*         <header id="header" role="banner" class="clearfix header {{ header_layout_container_class }} {{ header_layout_columns_class }}">*/
/*           <div class="{{ header_layout_container }}">*/
/*             {# #header-inside #}*/
/*             <div id="header-inside" class="clearfix header-inside">*/
/*               <div class="row">*/
/*                 {% if page.header_first %}*/
/*                   <div class="{{ header_first_grid_class }}">*/
/*                     <div class="header-area">*/
/*                       {# #header-inside-first #}*/
/*                       <div id="header-inside-first" class="clearfix header-inside-first">*/
/*                         {{ page.header_first }}*/
/*                       </div>*/
/*                       {# EOF:#header-inside-first #}*/
/*                     </div>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if page.header %}*/
/*                   <div class="{{ header_second_grid_class }} {{ header_second_offset_class }}">*/
/*                     <div class="header-area">*/
/*                       {# #header-inside-second #}*/
/*                       <div id="header-inside-second" class="clearfix header-inside-second">*/
/*                         {{ page.header }}*/
/*                       </div>*/
/*                       {# EOF:#header-inside-second #}*/
/*                     </div>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if page.search_area or page.navigation %}*/
/*                   <div class="{{ header_third_grid_class }}">*/
/*                     <div class="header-area">*/
/*                       {# #header-inside-third #}*/
/*                       <div id="header-inside-third" class="clearfix header-inside-third">*/
/*                         {% if page.search_area %}*/
/*                           <div id="search-area" class="clearfix search-area">*/
/*                             {{ page.search_area }}*/
/*                           </div>*/
/*                         {% endif %}*/
/*                         {% if page.navigation %}*/
/*                           {# #main-navigation #}*/
/*                           <div id="main-navigation" class="clearfix main-navigation {% if page.search_area %} with-search-bar {% endif %}">*/
/*                             <nav role="navigation">*/
/*                               {{ page.navigation }}*/
/*                             </nav>*/
/*                           </div>*/
/*                           {# EOF: #main-navigation #}*/
/*                         {% endif %}*/
/*                       </div>*/
/*                       {# EOF:#header-inside-third #}*/
/*                     </div>*/
/*                   </div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             {# EOF: #header-inside #}*/
/*           </div>*/
/*         </header>*/
/*         {# EOF: #header #}*/
/*       {% endif %}*/
/* */
/*     </div>*/
/*     {# EOF: #header-container #}*/
/*   {% endif %}*/
/* */
/*   {% if page.banner %}*/
/*     {# #banner #}*/
/*     <div id="banner" class="clearfix banner">*/
/*       <div class="container-fluid">*/
/* */
/*         {# #banner-inside #}*/
/*         <div id="banner-inside" class="clearfix banner-inside">*/
/*           <div class="banner-area">*/
/*               <div class="row">*/
/*                 <div class="col-md-12">*/
/*                   {{ page.banner }}*/
/*                 </div>*/
/*               </div>*/
/*           </div>*/
/*         </div>*/
/*         {# EOF: #banner-inside #}*/
/* */
/*       </div>*/
/*     </div>*/
/*     {# EOF:#banner #}*/
/*   {% endif %}*/
/* */
/*   {# #page-start #}*/
/*   <div id="page-start" class="clearfix"></div>*/
/* */
/*   {# #page #}*/
/*   <div id="page" class="clearfix page">*/
/* */
/*     {% if page.system_messages %}*/
/*       <div class="system-messages">*/
/*         <div class="container">*/
/*           <div class="row">*/
/*             <div class="col-md-12">*/
/*               {{ page.system_messages }}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     {% if page.content_top %}*/
/*       {# #content-top #}*/
/*       <div id="content-top" class="clearfix content-top {{ content_top_background_color }}">*/
/*         <div class="{{ content_top_layout_container }}">*/
/*           {# #content-top-inside #}*/
/*           <div id="content-top-inside" class="clearfix content-top-inside{{ (content_top_animations == "enabled") ? ' fade' : '' }}"*/
/*             {% if content_top_animations == "enabled" %}*/
/*               data-animate-effect="{{ content_top_animation_effect }}"*/
/*             {% endif %}>*/
/*             <div class="row">*/
/*               <div class="col-md-12">*/
/*                 <div class="content-top-area">*/
/*                   {{ page.content_top }}*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*           {# EOF:#content-top-inside #}*/
/*         </div>*/
/*       </div>*/
/*       {# EOF: #content-top #}*/
/*     {% endif %}*/
/* */
/*     {% if page.content_top_highlighted %}*/
/*       {# #content-top-highlighted #}*/
/*       <div id="content-top-highlighted" class="clearfix content-top-highlighted {{ content_top_highlighted_background_color }}">*/
/*         <div class="{{ content_top_highlighted_layout_container }}">*/
/*           {# #content-top-highlighted-inside #}*/
/*           <div id="content-top-highlighted-inside" class="clearfix content-top-highlighted-inside{{ (content_top_highlighted_animations == "enabled") ? ' fade' : '' }}"*/
/*             {% if content_top_highlighted_animations == "enabled" %}*/
/*               data-animate-effect="{{ content_top_highlighted_animation_effect }}"*/
/*             {% endif %}>*/
/*             <div class="row">*/
/*               <div class="col-md-12">*/
/*                 <div class="content-top-highlighted-area">*/
/*                   {{ page.content_top_highlighted }}*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*           {# EOF:#content-top-highlighted-inside #}*/
/*         </div>*/
/*       </div>*/
/*       {# EOF: #content-top-highlighted #}*/
/*     {% endif %}*/
/* */
/*     {# #main-content #}*/
/*     <div id="main-content" class="clearfix main-content white-region">*/
/*       <div class="container">*/
/*         <div class="row">*/
/*           <section class="{{ main_grid_class }}">*/
/*             {# #main #}*/
/*             <div id="main" class="clearfix main main-area{{ (main_content_animations == "enabled") ? ' fade' : '' }}"*/
/*               {% if main_content_animations == "enabled" %}*/
/*                 data-animate-effect="{{ main_content_animation_effect }}"*/
/*               {% endif %}>*/
/*               {% if page.content %}*/
/*                 {{ page.content }}*/
/*               {% endif %}*/
/*             </div>*/
/*             {# EOF:#main #}*/
/*           </section>*/
/*           {% if page.sidebar_first %}*/
/*             <aside class="{{ sidebar_first_grid_class }}">*/
/*               {# #sidebar #}*/
/*               <section id="sidebar-first" class="sidebar sidebar-first clearfix{{ (sidebar_first_animations == "enabled") ? ' fade' : '' }}"*/
/*                 {% if sidebar_first_animations == "enabled" %}*/
/*                   data-animate-effect="{{ sidebar_first_animation_effect }}"*/
/*                 {% endif %}>*/
/*                 {{ page.sidebar_first }}*/
/*               </section>*/
/*               {# EOF:#sidebar #}*/
/*             </aside>*/
/*           {% endif %}*/
/*           {% if page.sidebar_second %}*/
/*             <aside class="{{ sidebar_second_grid_class }}">*/
/*               {# #sidebar #}*/
/*               <section id="sidebar-second" class="sidebar sidebar-second clearfix{{ (sidebar_second_animations == "enabled") ? ' fade' : '' }}"*/
/*                 {% if sidebar_second_animations == "enabled" %}*/
/*                   data-animate-effect="{{ sidebar_second_animation_effect }}"*/
/*                 {% endif %}>*/
/*                 {{ page.sidebar_second }}*/
/*               </section>*/
/*               {# EOF:#sidebar #}*/
/*             </aside>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     {# EOF:#main-content #}*/
/* */
/*     {% if page.content_bottom_first or page.content_bottom_second %}*/
/*       {# #content-bottom #}*/
/*       <div id="content-bottom" class="clearfix content-bottom {{ content_bottom_background_color }}">*/
/*         <div class="container">*/
/*           {# #content-bottom-inside #}*/
/*           <div id="content-bottom-inside" class="clearfix content-bottom-inside{{ (content_bottom_animations == "enabled") ? ' fade' : '' }}"*/
/*             {% if content_bottom_animations == "enabled" %}*/
/*               data-animate-effect="{{ content_bottom_animation_effect }}"*/
/*             {% endif %}>*/
/*             <div class="row">*/
/*               {% if page.content_bottom_first %}*/
/*                 <div class="{{ content_bottom_first_grid_class }}">*/
/*                   <div id="content-bottom-first" class="content-bottom-first">*/
/*                     <div class="content-bottom-area clearfix">*/
/*                       {{ page.content_bottom_first }}*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if page.content_bottom_second %}*/
/*                 <div class="{{ content_bottom_second_grid_class }}">*/
/*                   <div id="content-bottom-second" class="content-bottom-second">*/
/*                     <div class="content-bottom-area clearfix">*/
/*                       {{ page.content_bottom_second }}*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           {# EOF:#content-bottom-inside #}*/
/*         </div>*/
/*       </div>*/
/*       {# EOF: #content-bottom #}*/
/*     {% endif %}*/
/* */
/*     {% if page.highlighted %}*/
/*       {# #highlighted #}*/
/*       <div id="highlighted" class="clearfix highlighted {{ highlighted_background_color }}">*/
/*         <div class="{{ highlighted_layout_container }}">*/
/*           {# #highlighted-inside #}*/
/*           <div id="highlighted-inside" class="clearfix highlighted-inside{{ (highlighted_animations == "enabled") ? ' fade' : '' }}"*/
/*             {% if highlighted_animations == "enabled" %}*/
/*               data-animate-effect="{{ highlighted_animation_effect }}"*/
/*             {% endif %}>*/
/*             <div class="row">*/
/*               <div class="col-md-12">*/
/*                 <div class="highlighted-area">*/
/*                   {{ page.highlighted }}*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*           {# EOF:#highlighted-inside #}*/
/*         </div>*/
/*       </div>*/
/*       {# EOF: #highlighted #}*/
/*     {% endif %}*/
/* */
/*     {% if page.highlighted_bottom_first or page.highlighted_bottom_second %}*/
/*       {# #highlighted-bottom #}*/
/*       <div id="highlighted-bottom" class="clearfix highlighted-bottom {{ highlighted_bottom_background_color }}">*/
/*         <div id="highlighted-bottom-transparent-bg" class="highlighted-bottom-transparent-bg"></div>*/
/*         <div class="{{ highlighted_bottom_layout_container }}">*/
/*           {# #highlighted-bottom-inside #}*/
/*           <div id="highlighted-bottom-inside" class="clearfix highlighted-bottom-inside{{ (highlighted_bottom_animations == "enabled") ? ' fade' : '' }}"*/
/*             {% if highlighted_bottom_animations == "enabled" %}*/
/*               data-animate-effect="{{ highlighted_bottom_animation_effect }}"*/
/*             {% endif %}>*/
/*             <div class="row">*/
/*               {% if page.highlighted_bottom_first %}*/
/*                 <div class="{{ highlighted_bottom_first_grid_class }}">*/
/*                   <div id="highlighted-bottom-first" class="highlighted-bottom-first">*/
/*                     <div class="highlighted-bottom-area clearfix">*/
/*                       {{ page.highlighted_bottom_first }}*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if page.highlighted_bottom_second %}*/
/*                 <div class="{{ highlighted_bottom_second_grid_class }}">*/
/*                   <div id="highlighted-bottom-second" class="highlighted-bottom-second">*/
/*                     <div class="highlighted-bottom-area clearfix">*/
/*                       {{ page.highlighted_bottom_second }}*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           {# EOF:#highlighted-bottom-inside #}*/
/*         </div>*/
/*       </div>*/
/*       {# EOF: #highlighted-bottom #}*/
/*     {% endif %}*/
/* */
/*     {% if page.featured_top %}*/
/*       {# #featured-top #}*/
/*       <div id="featured-top" class="clearfix featured-top {{ featured_top_background_color }}">*/
/*         <div class="{{ featured_top_layout_container }}">*/
/*           {# #featured-top-inside #}*/
/*           <div id="featured-top-inside" class="clearfix featured-top-inside{{ (featured_top_animations == "enabled") ? ' fade' : '' }}"*/
/*             {% if featured_top_animations == "enabled" %}*/
/*               data-animate-effect="{{ featured_top_animation_effect }}"*/
/*             {% endif %}>*/
/*             <div class="row">*/
/*               <div class="col-md-12">*/
/*                 <div class="featured-top-area">*/
/*                   {{ page.featured_top }}*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*           {# EOF:#featured-top-inside #}*/
/*         </div>*/
/*       </div>*/
/*       {# EOF: #featured-top #}*/
/*     {% endif %}*/
/* */
/*     {% if page.featured %}*/
/*       {# #featured #}*/
/*       <div id="featured" class="clearfix featured {{ featured_background_color }}">*/
/*         <div class="{{ featured_layout_container }}">*/
/*           {# #featured-inside #}*/
/*           <div id="featured-inside" class="clearfix featured-inside{{ (featured_animations == "enabled") ? ' fade' : '' }}"*/
/*             {% if featured_animations == "enabled" %}*/
/*               data-animate-effect="{{ featured_animation_effect }}"*/
/*             {% endif %}>*/
/*             <div class="row">*/
/*               <div class="col-md-12">*/
/*                 <div class="featured-area">*/
/*                   {{ page.featured }}*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*           {# EOF:#featured-inside #}*/
/*         </div>*/
/*       </div>*/
/*       {# EOF: #featured #}*/
/*     {% endif %}*/
/* */
/*     {% if page.featured_bottom %}*/
/*       {# #featured-bottom #}*/
/*       <div id="featured-bottom" class="clearfix featured-bottom {{ featured_bottom_background_color }}">*/
/*         <div class="{{ featured_bottom_layout_container }}">*/
/*           {# #featured-bottom-inside #}*/
/*           <div id="featured-bottom-inside" class="clearfix featured-bottom-inside{{ (featured_bottom_animations == "enabled") ? ' fade' : '' }}"*/
/*             {% if featured_bottom_animations == "enabled" %}*/
/*               data-animate-effect="{{ featured_bottom_animation_effect }}"*/
/*             {% endif %}>*/
/*             <div class="row">*/
/*               <div class="col-md-12">*/
/*                 <div class="featured-bottom-area">*/
/*                   {{ page.featured_bottom }}*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*           {# EOF:#featured-bottom-inside #}*/
/*         </div>*/
/*       </div>*/
/*       {# EOF: #featured-bottom #}*/
/*     {% endif %}*/
/* */
/*   </div>*/
/*   {# EOF:#page #}*/
/* */
/*   {% if page.footer_top_first or page.footer_top_second %}*/
/*     {# #footer-top #}*/
/*     <div id="footer-top" class="clearfix footer-top {{ footer_top_regions }} {{ footer_top_background_color }}">*/
/*       <div class="container">*/
/*         {# #footer-top-inside #}*/
/*         <div id="footer-top-inside" class="clearfix footer-top-inside{{ (footer_top_animations == "enabled") ? ' fade' : '' }}"*/
/*           {% if footer_top_animations == "enabled" %}*/
/*             data-animate-effect="{{ footer_top_animation_effect }}"*/
/*           {% endif %}>*/
/*           <div class="row">*/
/*             {% if page.footer_top_first %}*/
/*               <div class="{{ footer_top_first_grid_class }}">*/
/*                 {# #footer-top-first #}*/
/*                 <div id="footer-top-first" class="clearfix footer-top-first">*/
/*                   <div class="footer-top-area">*/
/*                     {{ page.footer_top_first }}*/
/*                   </div>*/
/*                 </div>*/
/*                 {# EOF:#footer-top-first #}*/
/*               </div>*/
/*             {% endif %}*/
/*             {% if page.footer_top_second %}*/
/*               <div class="{{ footer_top_second_grid_class }}">*/
/*                 {# #footer-top-second #}*/
/*                 <div id="footer-top-second" class="clearfix footer-top-second">*/
/*                   <div class="footer-top-area">*/
/*                     {{ page.footer_top_second }}*/
/*                   </div>*/
/*                 </div>*/
/*                 {# EOF:#footer-top-second #}*/
/*               </div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*         {# EOF: #footer-top-inside #}*/
/*       </div>*/
/*     </div>*/
/*     {# EOF: #footer-top #}*/
/*   {% endif %}*/
/* */
/*   {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}*/
/*     {# #footer #}*/
/*     <footer id="footer" class="clearfix footer {{ footer_background_color }}">*/
/*       <div class="{{ footer_layout_container }}">*/
/*         <div class="row">*/
/*           {% if page.footer_first %}*/
/*             <div class="{{ footer_grid_class }}">*/
/*               <div class="footer-area{{ (footer_animations == "enabled") ? ' fade' : '' }}"*/
/*                 {% if footer_animations == "enabled" %}*/
/*                   data-animate-effect="{{ footer_animation_effect }}"*/
/*                 {% endif %}>*/
/*                 {{ page.footer_first }}*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/*           {% if page.footer_second %}*/
/*             <div class="{{ footer_grid_class }}">*/
/*               <div class="footer-area{{ (footer_animations == "enabled") ? ' fade' : '' }}"*/
/*                 {% if footer_animations == "enabled" %}*/
/*                   data-animate-effect="{{ footer_animation_effect }}"*/
/*                 {% endif %}>*/
/*                 {{ page.footer_second }}*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/*           {% if page.footer_third %}*/
/*             <div class="{{ footer_grid_class }}">*/
/*               <div class="footer-area{{ (footer_animations == "enabled") ? ' fade' : '' }}"*/
/*                 {% if footer_animations == "enabled" %}*/
/*                   data-animate-effect="{{ footer_animation_effect }}"*/
/*                 {% endif %}>*/
/*                 {{ page.footer_third }}*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/*           {% if page.footer_fourth %}*/
/*             <div class="{{ footer_grid_class }}">*/
/*               <div class="footer-area{{ (footer_animations == "enabled") ? ' fade' : '' }}"*/
/*                 {% if footer_animations == "enabled" %}*/
/*                   data-animate-effect="{{ footer_animation_effect }}"*/
/*                 {% endif %}>*/
/*                 {{ page.footer_fourth }}*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/*     </footer>*/
/*     {# EOF #footer #}*/
/*   {% endif %}*/
/* */
/*   {% if page.sub_footer_first or page.footer %}*/
/*     <div id="subfooter" class="clearfix subfooter {{ subfooter_background_color }}">*/
/*       <div class="{{ subfooter_layout_container }}">*/
/*         {# #subfooter-inside #}*/
/*         <div id="subfooter-inside" class="clearfix subfooter-inside">*/
/*           <div class="row">*/
/*             {# #subfooter-first #}*/
/*             {% if page.sub_footer_first %}*/
/*               <div class="{{ subfooter_first_grid_class }}">*/
/*                 <div class="subfooter-area first">*/
/*                   {{ page.sub_footer_first }}*/
/*                 </div>*/
/*               </div>*/
/*             {% endif %}*/
/*             {# EOF: #subfooter-first #}*/
/*             {# #subfooter-second #}*/
/*             {% if page.footer %}*/
/*               <div class="{{ subfooter_second_grid_class }}">*/
/*                 <div class="subfooter-area second">*/
/*                   {{ page.footer }}*/
/*                 </div>*/
/*               </div>*/
/*             {% endif %}*/
/*             {# EOF: #subfooter-second #}*/
/*           </div>*/
/*         </div>*/
/*         {# EOF: #subfooter-inside #}*/
/*       </div>*/
/*     </div>*/
/*     {# EOF:#subfooter #}*/
/*   {% endif %}*/
/* */
/*   {% if scroll_to_top %}*/
/*   {# #toTop #}*/
/*     <div id="toTop" class="to-top"><i class="fa {{ scroll_to_top_icon }}"></i></div>*/
/*   {# EOF:#toTop #}*/
/*   {% endif %}*/
/* */
/* </div>*/
/* */
