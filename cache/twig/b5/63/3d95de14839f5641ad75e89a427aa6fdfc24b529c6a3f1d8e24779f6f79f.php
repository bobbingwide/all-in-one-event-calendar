<?php

/* categories.twig */
class __TwigTemplate_b5633d95de14839f5641ad75e89a427aa6fdfc24b529c6a3f1d8e24779f6f79f extends Twig_Template
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
        echo "<li class=\"ai1ec-dropdown ai1ec-category-filter ai1ec-cat-filter
\t";
        // line 2
        if ((!twig_test_empty((isset($context["selected_cat_ids"]) ? $context["selected_cat_ids"] : null)))) {
            echo "ai1ec-active";
        }
        echo "\"
\tdata-slug=\"cat\">
\t<a class=\"ai1ec-dropdown-toggle\" data-toggle=\"ai1ec-dropdown\">
\t\t<i class=\"ai1ec-fa ai1ec-fa-folder-open\"></i>
\t\t<span class=\"ai1ec-clear-filter ai1ec-tooltip-trigger\"
\t\t\tdata-href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["clear_filter"]) ? $context["clear_filter"] : null), "html", null, true);
        echo "\"
\t\t\t";
        // line 8
        echo (isset($context["data_type"]) ? $context["data_type"] : null);
        echo "
\t\t\ttitle=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["text_clear_category_filter"]) ? $context["text_clear_category_filter"] : null), "html", null, true);
        echo "\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-times-circle\"></i>
\t\t</span>
\t\t";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["text_categories"]) ? $context["text_categories"] : null), "html", null, true);
        echo "
\t\t<span class=\"ai1ec-caret\"></span>
\t</a>
\t<div class=\"ai1ec-dropdown-menu\">
\t\t";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["term"]) {
            // line 17
            echo "\t\t\t<div data-term=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term_id"), "html", null, true);
            echo "\"
\t\t\t\t";
            // line 18
            if (twig_in_filter($this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term_id"), (isset($context["selected_cat_ids"]) ? $context["selected_cat_ids"] : null))) {
                // line 19
                echo "\t\t\t\t\tclass=\"ai1ec-active\"
\t\t\t\t";
            }
            // line 20
            echo ">
\t\t\t\t<a class=\"ai1ec-load-view ai1ec-category ai1ec-cat\"
\t\t\t\t\t";
            // line 22
            if ((!twig_test_empty($this->getAttribute((isset($context["term"]) ? $context["term"] : null), "description")))) {
                // line 23
                echo "\t\t\t\t\t\ttitle=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "description"), "html_attr");
                echo "\"
\t\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t\t";
            echo (isset($context["data_type"]) ? $context["data_type"] : null);
            echo "
\t\t\t\t\thref=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "href"), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 27
            if (twig_test_empty($this->getAttribute((isset($context["term"]) ? $context["term"] : null), "color"))) {
                // line 28
                echo "\t\t\t\t\t\t<span class=\"ai1ec-color-swatch-empty\"></span>
\t\t\t\t\t";
            } else {
                // line 30
                echo "\t\t\t\t\t\t";
                echo $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "color");
                echo "
\t\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t\t";
            echo $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "name");
            echo "
\t\t\t\t</a>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['term'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t</div>
</li>

";
    }

    public function getTemplateName()
    {
        return "categories.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 36,  95 => 30,  80 => 25,  74 => 23,  72 => 22,  68 => 20,  64 => 19,  57 => 17,  53 => 16,  46 => 12,  32 => 7,  333 => 116,  328 => 114,  324 => 112,  320 => 111,  305 => 110,  299 => 108,  296 => 107,  294 => 106,  290 => 104,  283 => 103,  281 => 102,  271 => 98,  265 => 95,  260 => 93,  255 => 90,  252 => 89,  249 => 88,  247 => 87,  241 => 84,  237 => 83,  233 => 81,  228 => 79,  224 => 78,  219 => 75,  217 => 74,  209 => 68,  203 => 64,  197 => 61,  192 => 58,  190 => 57,  186 => 56,  182 => 54,  177 => 52,  174 => 51,  172 => 50,  168 => 49,  162 => 46,  156 => 42,  150 => 39,  146 => 38,  143 => 37,  141 => 36,  136 => 33,  130 => 31,  128 => 30,  125 => 29,  121 => 28,  117 => 27,  113 => 26,  110 => 25,  105 => 24,  101 => 32,  97 => 21,  91 => 28,  89 => 27,  85 => 26,  81 => 16,  77 => 15,  73 => 14,  63 => 11,  45 => 10,  36 => 8,  23 => 2,  38 => 7,  28 => 4,  25 => 3,  47 => 10,  41 => 8,  27 => 4,  35 => 6,  60 => 13,  44 => 10,  40 => 9,  34 => 5,  29 => 9,  52 => 12,  48 => 8,  42 => 6,  37 => 5,  22 => 2,  86 => 26,  75 => 21,  70 => 19,  66 => 12,  62 => 18,  58 => 14,  54 => 11,  50 => 11,  43 => 13,  39 => 7,  31 => 5,  26 => 3,  21 => 2,  19 => 1,);
    }
}
