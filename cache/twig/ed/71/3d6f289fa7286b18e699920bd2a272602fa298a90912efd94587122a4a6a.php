<?php

/* agenda.twig */
class __TwigTemplate_ed713d6f289fa7286b18e699920bd2a272602fa298a90912efd94587122a4a6a extends Twig_Template
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
        echo (isset($context["navigation"]) ? $context["navigation"] : null);
        echo "
";
        // line 2
        $context["count"] = 0;
        // line 3
        echo "
<div class=\"ai1ec-agenda-view";
        // line 4
        if ((isset($context["has_product_buy_button"]) ? $context["has_product_buy_button"] : null)) {
            echo " ai1ec-has-product-buy-button";
        }
        echo "\">
\t";
        // line 5
        if (twig_test_empty((isset($context["dates"]) ? $context["dates"] : null))) {
            // line 6
            echo "\t\t<p class=\"ai1ec-no-results\">
\t\t\t";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["text_upcoming_events"]) ? $context["text_upcoming_events"] : null), "html", null, true);
            echo "
\t\t</p>
\t";
        } else {
            // line 10
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["date"] => $context["date_info"]) {
                // line 11
                echo "\t\t\t<div class=\"ai1ec-date
\t\t\t\t";
                // line 12
                if ((!twig_test_empty($this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "today")))) {
                    echo "ai1ec-today";
                }
                echo "\">
\t\t\t\t<a class=\"ai1ec-date-title ai1ec-no-load\"
\t\t\t\t\t";
                // line 14
                echo (isset($context["data_type"]) ? $context["data_type"] : null);
                echo ">
\t\t\t\t\t<div class=\"ai1ec-month\">";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "month"), "html", null, true);
                echo "</div>
\t\t\t\t\t<div class=\"ai1ec-day\">";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "day"), "html", null, true);
                echo "</div>
\t\t\t\t\t<div class=\"ai1ec-weekday\">";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "weekday"), "html", null, true);
                echo "</div>
\t\t\t\t\t";
                // line 18
                if ((isset($context["show_year_in_agenda_dates"]) ? $context["show_year_in_agenda_dates"] : null)) {
                    // line 19
                    echo "\t\t\t\t\t\t<div class=\"ai1ec-year\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "year"), "html", null, true);
                    echo "</div>
\t\t\t\t\t";
                }
                // line 21
                echo "\t\t\t\t</a>
\t\t\t\t<div class=\"ai1ec-date-events\">
\t\t\t\t\t";
                // line 23
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "events"));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 24
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                        // line 25
                        echo "\t\t\t\t\t\t\t<div class=\"ai1ec-event
\t\t\t\t\t\t\t\tai1ec-event-id-";
                        // line 26
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_id"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\tai1ec-event-instance-id-";
                        // line 27
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "instance_id"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t";
                        // line 28
                        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_allday")) {
                            echo "ai1ec-allday";
                        }
                        // line 29
                        echo "\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t";
                        // line 30
                        if ((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url")))) {
                            // line 31
                            echo "\t\t\t\t\t\t\t\t\tdata-ticket-url=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"), "html_attr");
                            echo "\"
\t\t\t\t\t\t\t\t";
                        }
                        // line 33
                        echo "\t\t\t\t\t\t\t\t>

\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-description\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 36
                        if ((twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "content_img_url")) && (!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "avatar_not_wrapped"))))) {
                            // line 37
                            echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-event\"
\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
                            // line 38
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                            echo "\" >
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 39
                            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "avatar_not_wrapped");
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 42
                        echo "
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-header\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 46
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                        echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"ai1ec-popup-trigger ai1ec-load-event\">
\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-title\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 49
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_title");
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 50
                        if (((isset($context["show_location_in_title"]) ? $context["show_location_in_title"] : null) && (!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue"))))) {
                            // line 51
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t\t\t\t\t\t\t\t\t>";
                            // line 52
                            echo twig_escape_filter($this->env, sprintf((isset($context["text_venue_separator"]) ? $context["text_venue_separator"] : null), $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue")), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 54
                        echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                        // line 56
                        echo (isset($context["action_buttons"]) ? $context["action_buttons"] : null);
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 57
                        $context["edit_post_link"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "edit_post_link");
                        // line 58
                        echo "

\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t\t ";
                        // line 61
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "timespan_short");
                        echo "
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t";
                        // line 64
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_content");
                        echo "
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
                        // line 68
                        echo "\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-summary\">



\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-summary-footer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-btn-group ai1ec-actions\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 74
                        if (((isset($context["is_ticket_button_enabled"]) ? $context["is_ticket_button_enabled"] : null) && (!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"))))) {
                            // line 75
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-pull-right ai1ec-btn ai1ec-btn-primary
\t\t\t\t\t\t\t\t\t\t\t\t\t\tai1ec-btn-xs ai1ec-buy-tickets\"
\t\t\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
                            // line 78
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"), "html_attr");
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t>";
                            // line 79
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url_label"), "html", null, true);
                            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 81
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-read-more ai1ec-btn ai1ec-btn-default
\t\t\t\t\t\t\t\t\t\t\t\tai1ec-load-event\"
\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
                        // line 83
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 84
                        echo twig_escape_filter($this->env, (isset($context["text_read_more"]) ? $context["text_read_more"] : null), "html", null, true);
                        echo " <i class=\"ai1ec-fa ai1ec-fa-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        // line 87
                        $context["categories"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "categories_html");
                        // line 88
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        $context["tags"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "tags_html");
                        // line 89
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if ((!twig_test_empty((isset($context["tags"]) ? $context["tags"] : null)))) {
                            // line 90
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-tags\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-field-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-tags\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 93
                            echo twig_escape_filter($this->env, (isset($context["text_tags"]) ? $context["text_tags"] : null), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 95
                            echo (isset($context["tags"]) ? $context["tags"] : null);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 98
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 102
                    echo " ";
                    // line 103
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " ";
                // line 104
                echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
                // line 106
                if ((0 == $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 3)) {
                    // line 107
                    echo "\t\t\t\t";
                    $context["count"] = ((isset($context["count"]) ? $context["count"] : null) + 1);
                    // line 108
                    echo "                <img src=\"#\" data-banner=\"";
                    echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
                    echo "\" style=\"padding-bottom: 1.75rem;\">
\t\t\t";
                }
                // line 110
                echo "\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['date'], $context['date_info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " ";
            // line 111
            echo "\t";
        }
        echo " ";
        // line 112
        echo "</div>

<div class=\"ai1ec-pull-left\">";
        // line 114
        echo (isset($context["pagination_links"]) ? $context["pagination_links"] : null);
        echo "</div>

";
        // line 116
        echo (isset($context["navigation"]) ? $context["navigation"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "agenda.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 116,  328 => 114,  324 => 112,  320 => 111,  305 => 110,  299 => 108,  296 => 107,  294 => 106,  290 => 104,  283 => 103,  281 => 102,  271 => 98,  265 => 95,  260 => 93,  255 => 90,  252 => 89,  249 => 88,  247 => 87,  241 => 84,  237 => 83,  233 => 81,  228 => 79,  224 => 78,  219 => 75,  217 => 74,  209 => 68,  203 => 64,  197 => 61,  192 => 58,  190 => 57,  186 => 56,  182 => 54,  177 => 52,  174 => 51,  172 => 50,  168 => 49,  162 => 46,  156 => 42,  150 => 39,  146 => 38,  143 => 37,  141 => 36,  136 => 33,  130 => 31,  128 => 30,  125 => 29,  121 => 28,  117 => 27,  113 => 26,  110 => 25,  105 => 24,  101 => 23,  97 => 21,  91 => 19,  89 => 18,  85 => 17,  81 => 16,  77 => 15,  73 => 14,  63 => 11,  45 => 10,  36 => 6,  23 => 2,  38 => 7,  28 => 4,  25 => 3,  47 => 10,  41 => 8,  27 => 4,  35 => 6,  60 => 13,  44 => 10,  40 => 6,  34 => 5,  29 => 9,  52 => 12,  48 => 8,  42 => 6,  37 => 5,  22 => 2,  86 => 26,  75 => 21,  70 => 19,  66 => 12,  62 => 17,  58 => 14,  54 => 11,  50 => 11,  43 => 13,  39 => 7,  31 => 5,  26 => 3,  21 => 2,  19 => 1,);
    }
}
