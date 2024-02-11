<?php

/* filter-menu.twig */
class __TwigTemplate_1f25bacc16e82305cef35f2d4954e3a58cf88f86b74ba3bdfdb3edd107c03a6d extends Twig_Template
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
        // line 1
        if ((!array_key_exists("hide_toolbar", $context))) {
            // line 2
            echo "\t";
            if (array_key_exists("ai1ec_before_filter_menu", $context)) {
                // line 3
                echo "\t\t";
                echo (isset($context["ai1ec_before_filter_menu"]) ? $context["ai1ec_before_filter_menu"] : null);
                echo "
\t";
            }
            // line 5
            echo "\t<div class=\"timely ai1ec-calendar-toolbar ai1ec-clearfix
\t";
            // line 6
            if (((((twig_test_empty((isset($context["categories"]) ? $context["categories"] : null)) && twig_test_empty((isset($context["tags"]) ? $context["tags"] : null))) && (!array_key_exists("additional_filters", $context))) && twig_test_empty((isset($context["contribution_buttons"]) ? $context["contribution_buttons"] : null))) && (!array_key_exists("additional_buttons", $context)))) {
                // line 12
                echo "\t\tai1ec-hidden
\t";
            }
            // line 14
            echo "\t\">
\t\t<ul class=\"ai1ec-nav ai1ec-nav-pills ai1ec-pull-left ai1ec-filters\">
\t\t\t";
            // line 16
            echo (isset($context["categories"]) ? $context["categories"] : null);
            echo "
\t\t\t";
            // line 17
            echo (isset($context["tags"]) ? $context["tags"] : null);
            echo "
\t\t\t";
            // line 18
            if (array_key_exists("additional_filters", $context)) {
                // line 19
                echo "\t\t\t\t";
                echo (isset($context["additional_filters"]) ? $context["additional_filters"] : null);
                echo "
\t\t\t";
            }
            // line 21
            echo "\t\t</ul>
\t\t<div class=\"ai1ec-pull-right\">
\t\t";
            // line 23
            if (array_key_exists("additional_buttons", $context)) {
                // line 24
                echo "\t\t\t";
                echo (isset($context["additional_buttons"]) ? $context["additional_buttons"] : null);
                echo "
\t\t";
            }
            // line 26
            echo "\t\t</div>
\t</div>";
        }
    }

    public function getTemplateName()
    {
        return "filter-menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 26,  65 => 24,  59 => 21,  51 => 18,  33 => 6,  30 => 5,  24 => 3,  99 => 31,  112 => 36,  95 => 30,  80 => 25,  74 => 23,  72 => 22,  68 => 20,  64 => 19,  57 => 17,  53 => 19,  46 => 12,  32 => 7,  333 => 116,  328 => 114,  324 => 112,  320 => 111,  305 => 110,  299 => 108,  296 => 107,  294 => 106,  290 => 104,  283 => 103,  281 => 102,  271 => 98,  265 => 95,  260 => 93,  255 => 90,  252 => 89,  249 => 88,  247 => 87,  241 => 84,  237 => 83,  233 => 81,  228 => 79,  224 => 78,  219 => 75,  217 => 74,  209 => 68,  203 => 64,  197 => 61,  192 => 58,  190 => 57,  186 => 56,  182 => 54,  177 => 52,  174 => 51,  172 => 50,  168 => 49,  162 => 46,  156 => 42,  150 => 39,  146 => 38,  143 => 37,  141 => 36,  136 => 33,  130 => 31,  128 => 30,  125 => 29,  121 => 28,  117 => 27,  113 => 26,  110 => 25,  105 => 24,  101 => 32,  97 => 21,  91 => 28,  89 => 27,  85 => 26,  81 => 16,  77 => 15,  73 => 14,  63 => 23,  45 => 10,  36 => 8,  23 => 2,  38 => 7,  28 => 4,  25 => 3,  47 => 17,  41 => 8,  27 => 4,  35 => 12,  60 => 13,  44 => 10,  40 => 9,  34 => 5,  29 => 9,  52 => 12,  48 => 8,  42 => 6,  37 => 5,  22 => 2,  86 => 26,  75 => 21,  70 => 19,  66 => 12,  62 => 18,  58 => 14,  54 => 11,  50 => 11,  43 => 16,  39 => 14,  31 => 5,  26 => 3,  21 => 2,  19 => 1,);
    }
}
