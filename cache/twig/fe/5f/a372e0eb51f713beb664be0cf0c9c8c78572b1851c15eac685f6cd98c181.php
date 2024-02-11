<?php

/* calendar.twig */
class __TwigTemplate_fe5fa372e0eb51f713beb664be0cf0c9c8c78572b1851c15eac685f6cd98c181 extends Twig_Template
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
        // line 2
        echo "<!-- START All-in-One Event Calendar Plugin - Version ";
        echo (isset($context["version"]) ? $context["version"] : null);
        echo " -->
<div id=\"ai1ec-container\"
\t class=\"ai1ec-main-container ";
        // line 4
        echo (isset($context["ai1ec_calendar_classes"]) ? $context["ai1ec_calendar_classes"] : null);
        echo "\">
\t<!-- AI1EC_PAGE_CONTENT_PLACEHOLDER -->
\t<div id=\"ai1ec-calendar\" class=\"timely ai1ec-calendar\">
\t\t";
        // line 7
        if (array_key_exists("ai1ec_above_calendar", $context)) {
            // line 8
            echo "\t\t\t";
            echo (isset($context["ai1ec_above_calendar"]) ? $context["ai1ec_above_calendar"] : null);
            echo "
\t\t";
        }
        // line 10
        echo "\t\t";
        echo (isset($context["filter_menu"]) ? $context["filter_menu"] : null);
        echo "
\t\t<div id=\"ai1ec-calendar-view-container\"
\t\t\t class=\"ai1ec-calendar-view-container\">
\t\t\t<div id=\"ai1ec-calendar-view-loading\"
\t\t\t\t class=\"ai1ec-loading ai1ec-calendar-view-loading\"></div>
\t\t\t<div id=\"ai1ec-calendar-view\" class=\"ai1ec-calendar-view\">
\t\t\t\t";
        // line 16
        echo (isset($context["view"]) ? $context["view"] : null);
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ai1ec-subscribe-container ai1ec-pull-right ai1ec-btn-group\">
\t\t\t";
        // line 20
        echo (isset($context["subscribe_buttons"]) ? $context["subscribe_buttons"] : null);
        echo "
\t\t</div>
\t\t";
        // line 22
        echo (isset($context["after_view"]) ? $context["after_view"] : null);
        echo "
\t</div><!-- /.timely -->
</div>
";
        // line 25
        if ((!twig_test_empty((isset($context["inline_js_calendar"]) ? $context["inline_js_calendar"] : null)))) {
            // line 26
            echo "\t<script type=\"text/javascript\">";
            echo (isset($context["inline_js_calendar"]) ? $context["inline_js_calendar"] : null);
            echo "</script>
";
        }
        // line 28
        echo "<!-- END All-in-One Event Calendar Plugin -->
";
        // line 30
        echo "

";
    }

    public function getTemplateName()
    {
        return "calendar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 30,  69 => 26,  67 => 25,  61 => 22,  56 => 20,  49 => 16,  71 => 26,  65 => 24,  59 => 21,  51 => 18,  33 => 8,  30 => 5,  24 => 3,  99 => 31,  112 => 36,  95 => 30,  80 => 25,  74 => 23,  72 => 22,  68 => 20,  64 => 19,  57 => 17,  53 => 19,  46 => 12,  32 => 7,  333 => 116,  328 => 114,  324 => 112,  320 => 111,  305 => 110,  299 => 108,  296 => 107,  294 => 106,  290 => 104,  283 => 103,  281 => 102,  271 => 98,  265 => 95,  260 => 93,  255 => 90,  252 => 89,  249 => 88,  247 => 87,  241 => 84,  237 => 83,  233 => 81,  228 => 79,  224 => 78,  219 => 75,  217 => 74,  209 => 68,  203 => 64,  197 => 61,  192 => 58,  190 => 57,  186 => 56,  182 => 54,  177 => 52,  174 => 51,  172 => 50,  168 => 49,  162 => 46,  156 => 42,  150 => 39,  146 => 38,  143 => 37,  141 => 36,  136 => 33,  130 => 31,  128 => 30,  125 => 29,  121 => 28,  117 => 27,  113 => 26,  110 => 25,  105 => 24,  101 => 32,  97 => 21,  91 => 28,  89 => 27,  85 => 26,  81 => 16,  77 => 15,  73 => 14,  63 => 23,  45 => 10,  36 => 8,  23 => 2,  38 => 7,  28 => 4,  25 => 4,  47 => 17,  41 => 8,  27 => 4,  35 => 12,  60 => 13,  44 => 10,  40 => 9,  34 => 5,  29 => 9,  52 => 12,  48 => 8,  42 => 6,  37 => 5,  22 => 2,  86 => 26,  75 => 28,  70 => 19,  66 => 12,  62 => 18,  58 => 14,  54 => 11,  50 => 11,  43 => 16,  39 => 10,  31 => 7,  26 => 3,  21 => 2,  19 => 2,);
    }
}
