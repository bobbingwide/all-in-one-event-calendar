<?php

/* buttons.twig */
class __TwigTemplate_a93238b4edfff2b09421aaa142e63cdb68db832b987dbd8259d76df8c9157ceb extends Twig_Template
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
        echo "<div class=\"ai1ec-sas-actions ai1ec-btn-group ai1ec-clearfix\">
\t";
        // line 2
        echo (isset($context["action_buttons"]) ? $context["action_buttons"] : null);
        if ((isset($context["tickets_button"]) ? $context["tickets_button"] : null)) {
            // line 3
            echo "<a href=\"#\" target=\"_blank\" class=\"ai1ec-sas-action ai1ec-btn ai1ec-btn-primary
\t\t\t";
            // line 4
            if ((isset($context["single"]) ? $context["single"] : null)) {
                echo "ai1ec-btn-sm";
            } else {
                echo "ai1ec-btn-xs";
            }
            // line 5
            echo "\t\t\tai1ec-btn-sm ai1ec-sas-action-tickets\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-ticket\"></i>
\t\t\t<span class=\"ai1ec-hidden-xs\">";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["text_tickets"]) ? $context["text_tickets"] : null), "html", null, true);
            echo "</span>
\t\t</a>
\t";
        }
        // line 10
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  28 => 4,  25 => 3,  47 => 10,  41 => 8,  27 => 4,  35 => 6,  60 => 13,  44 => 10,  40 => 6,  34 => 5,  29 => 9,  52 => 12,  48 => 8,  42 => 6,  37 => 5,  22 => 2,  86 => 26,  75 => 21,  70 => 19,  66 => 14,  62 => 17,  58 => 14,  54 => 11,  50 => 11,  43 => 13,  39 => 7,  31 => 5,  26 => 3,  21 => 2,  19 => 1,);
    }
}
