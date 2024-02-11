<?php

/* datepicker_link.twig */
class __TwigTemplate_5958a906d44dce626f5832b5f25f846bb8b634645bd18f2e704ee4be96ffde02 extends Twig_Template
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
        echo "<span
\t";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
        foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
            // line 3
            echo "\t\t";
            echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "\t";
        echo (isset($context["data_type"]) ? $context["data_type"] : null);
        echo "
\ttitle=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["text_date"]) ? $context["text_date"] : null), "html", null, true);
        echo "\"
\t>

  <span class=\"ai1ec-calendar-title\">";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</span>
  <span class=\"ai1ec-calendar-title-short\">";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["title_short"]) ? $context["title_short"] : null), "html", null, true);
        echo "</span>
</span>
";
    }

    public function getTemplateName()
    {
        return "datepicker_link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  48 => 9,  42 => 6,  37 => 5,  22 => 2,  86 => 26,  75 => 21,  70 => 19,  66 => 18,  62 => 17,  58 => 16,  54 => 15,  50 => 14,  43 => 13,  39 => 12,  31 => 7,  26 => 3,  21 => 2,  19 => 1,);
    }
}
