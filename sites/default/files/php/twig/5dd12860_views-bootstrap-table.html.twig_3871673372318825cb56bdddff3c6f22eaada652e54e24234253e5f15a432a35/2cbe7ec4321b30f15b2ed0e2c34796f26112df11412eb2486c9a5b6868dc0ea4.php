<?php

/* modules/views_bootstrap/templates/views_bootstrap_table/views-bootstrap-table.html.twig */
class __TwigTemplate_9c45e788d7d3de504af2f66bf22e335e1f15b8c7bb0b493529b1192406042770 extends Twig_Template
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
        $__internal_9b8827112a28a840b659f7360c899262719efc48e557455751bb98caaf1e2f5a = $this->env->getExtension("native_profiler");
        $__internal_9b8827112a28a840b659f7360c899262719efc48e557455751bb98caaf1e2f5a->enter($__internal_9b8827112a28a840b659f7360c899262719efc48e557455751bb98caaf1e2f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/views_bootstrap/templates/views_bootstrap_table/views-bootstrap-table.html.twig"));

        $tags = array("set" => 36, "if" => 42, "for" => 69);
        $filters = array("length" => 37, "merge" => 110);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('length', 'merge'),
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

        // line 36
        $context["classes"] = array(0 => ("cols-" . twig_length_filter($this->env,         // line 37
(isset($context["header"]) ? $context["header"] : null))), 1 => ((        // line 38
(isset($context["sticky"]) ? $context["sticky"] : null)) ? ("sticky-enabled") : ("")));
        // line 41
        echo "
";
        // line 42
        if ((isset($context["responsive"]) ? $context["responsive"] : null)) {
            // line 43
            echo "  <div class=\"table-responsive\">
";
        }
        // line 45
        echo "
<table";
        // line 46
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 47
        if ((isset($context["caption_needed"]) ? $context["caption_needed"] : null)) {
            // line 48
            echo "    <caption>
      ";
            // line 49
            if ((isset($context["caption"]) ? $context["caption"] : null)) {
                // line 50
                echo "        ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["caption"]) ? $context["caption"] : null), "html", null, true));
                echo "
      ";
            } else {
                // line 52
                echo "        ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
                echo "
      ";
            }
            // line 54
            echo "      ";
            if (( !twig_test_empty((isset($context["summary"]) ? $context["summary"] : null)) ||  !twig_test_empty((isset($context["description"]) ? $context["description"] : null)))) {
                // line 55
                echo "        <details>
          ";
                // line 56
                if ( !twig_test_empty((isset($context["summary"]) ? $context["summary"] : null))) {
                    // line 57
                    echo "            <summary>";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["summary"]) ? $context["summary"] : null), "html", null, true));
                    echo "</summary>
          ";
                }
                // line 59
                echo "          ";
                if ( !twig_test_empty((isset($context["description"]) ? $context["description"] : null))) {
                    // line 60
                    echo "            ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true));
                    echo "
          ";
                }
                // line 62
                echo "        </details>
      ";
            }
            // line 64
            echo "    </caption>
  ";
        }
        // line 66
        echo "  ";
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 67
            echo "    <thead>
      <tr>
        ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["header"]) ? $context["header"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 70
                echo "          ";
                if ($this->getAttribute($context["column"], "default_classes", array())) {
                    // line 71
                    echo "            ";
                    // line 72
                    $context["column_classes"] = array(0 => "views-field", 1 => ("views-field-" . $this->getAttribute(                    // line 74
(isset($context["fields"]) ? $context["fields"] : null), $context["key"], array(), "array")));
                    // line 77
                    echo "          ";
                }
                // line 78
                echo "          <th";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["column"], "attributes", array()), "addClass", array(0 => (isset($context["column_classes"]) ? $context["column_classes"] : null)), "method"), "setAttribute", array(0 => "scope", 1 => "col"), "method"), "html", null, true));
                echo ">";
                // line 79
                if ($this->getAttribute($context["column"], "wrapper_element", array())) {
                    // line 80
                    echo "<";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "wrapper_element", array()), "html", null, true));
                    echo ">";
                    // line 81
                    if ($this->getAttribute($context["column"], "url", array())) {
                        // line 82
                        echo "<a href=\"";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "url", array()), "html", null, true));
                        echo "\" title=\"";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "title", array()), "html", null, true));
                        echo "\">";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "content", array()), "html", null, true));
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "sort_indicator", array()), "html", null, true));
                        echo "</a>";
                    } else {
                        // line 84
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "content", array()), "html", null, true));
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "sort_indicator", array()), "html", null, true));
                    }
                    // line 86
                    echo "</";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "wrapper_element", array()), "html", null, true));
                    echo ">";
                } else {
                    // line 88
                    if ($this->getAttribute($context["column"], "url", array())) {
                        // line 89
                        echo "<a href=\"";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "url", array()), "html", null, true));
                        echo "\" title=\"";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "title", array()), "html", null, true));
                        echo "\">";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "content", array()), "html", null, true));
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "sort_indicator", array()), "html", null, true));
                        echo "</a>";
                    } else {
                        // line 91
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "content", array()), "html", null, true));
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "sort_indicator", array()), "html", null, true));
                    }
                }
                // line 94
                echo "</th>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "      </tr>
    </thead>
  ";
        }
        // line 99
        echo "  <tbody>
    ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 101
            echo "      <tr";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true));
            echo ">
        ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "columns", array()));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 103
                echo "          ";
                if ($this->getAttribute($context["column"], "default_classes", array())) {
                    // line 104
                    echo "            ";
                    // line 105
                    $context["column_classes"] = array(0 => "views-field");
                    // line 109
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "fields", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 110
                        echo "              ";
                        $context["column_classes"] = twig_array_merge((isset($context["column_classes"]) ? $context["column_classes"] : null), array(0 => ("views-field-" . $context["field"])));
                        // line 111
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 112
                    echo "          ";
                }
                // line 113
                echo "          <td";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["column"], "attributes", array()), "addClass", array(0 => (isset($context["column_classes"]) ? $context["column_classes"] : null)), "method"), "html", null, true));
                echo ">";
                // line 114
                if ($this->getAttribute($context["column"], "wrapper_element", array())) {
                    // line 115
                    echo "<";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "wrapper_element", array()), "html", null, true));
                    echo ">
              ";
                    // line 116
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "content", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 117
                        echo "                ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["content"], "separator", array()), "html", null, true));
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["content"], "field_output", array()), "html", null, true));
                        echo "
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 119
                    echo "              </";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "wrapper_element", array()), "html", null, true));
                    echo ">";
                } else {
                    // line 121
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "content", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 122
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["content"], "separator", array()), "html", null, true));
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["content"], "field_output", array()), "html", null, true));
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 125
                echo "          </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "  </tbody>
</table>

";
        // line 132
        if ((isset($context["responsive"]) ? $context["responsive"] : null)) {
            // line 133
            echo "  </div>
";
        }
        
        $__internal_9b8827112a28a840b659f7360c899262719efc48e557455751bb98caaf1e2f5a->leave($__internal_9b8827112a28a840b659f7360c899262719efc48e557455751bb98caaf1e2f5a_prof);

    }

    public function getTemplateName()
    {
        return "modules/views_bootstrap/templates/views_bootstrap_table/views-bootstrap-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 133,  299 => 132,  294 => 129,  287 => 127,  280 => 125,  272 => 122,  268 => 121,  263 => 119,  253 => 117,  249 => 116,  244 => 115,  242 => 114,  238 => 113,  235 => 112,  229 => 111,  226 => 110,  221 => 109,  219 => 105,  217 => 104,  214 => 103,  210 => 102,  205 => 101,  201 => 100,  198 => 99,  193 => 96,  186 => 94,  181 => 91,  171 => 89,  169 => 88,  164 => 86,  160 => 84,  150 => 82,  148 => 81,  144 => 80,  142 => 79,  138 => 78,  135 => 77,  133 => 74,  132 => 72,  130 => 71,  127 => 70,  123 => 69,  119 => 67,  116 => 66,  112 => 64,  108 => 62,  102 => 60,  99 => 59,  93 => 57,  91 => 56,  88 => 55,  85 => 54,  79 => 52,  73 => 50,  71 => 49,  68 => 48,  66 => 47,  62 => 46,  59 => 45,  55 => 43,  53 => 42,  50 => 41,  48 => 38,  47 => 37,  46 => 36,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for displaying a view as a bootstrap table.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: Remaining HTML attributes for the element.*/
/*  *   - class: HTML classes that can be used to style contextually through CSS.*/
/*  * - title : The title of this group of rows.*/
/*  * - header: The table header columns.*/
/*  *   - attributes: Remaining HTML attributes for the element.*/
/*  *   - content: HTML classes to apply to each header cell, indexed by*/
/*  *   the header's key.*/
/*  *   - default_classes: A flag indicating whether default classes should be*/
/*  *     used.*/
/*  * - caption_needed: Is the caption tag needed.*/
/*  * - caption: The caption for this table.*/
/*  * - accessibility_description: Extended description for the table details.*/
/*  * - accessibility_summary: Summary for the table details.*/
/*  * - rows: Table row items. Rows are keyed by row number.*/
/*  *   - attributes: HTML classes to apply to each row.*/
/*  *   - columns: Row column items. Columns are keyed by column number.*/
/*  *     - attributes: HTML classes to apply to each column.*/
/*  *     - content: The column content.*/
/*  *   - default_classes: A flag indicating whether default classes should be*/
/*  *     used.*/
/*  * - responsive: A flag indicating whether table is responsive.*/
/*  * - sticky: A flag indicating whether table header is sticky.*/
/*  **/
/*  * @see template_preprocess_views_bootstrap_table()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'cols-' ~ header|length,*/
/*     sticky ? 'sticky-enabled',*/
/*   ]*/
/* %}*/
/* */
/* {% if responsive %}*/
/*   <div class="table-responsive">*/
/* {% endif %}*/
/* */
/* <table{{ attributes.addClass(classes) }}>*/
/*   {% if caption_needed %}*/
/*     <caption>*/
/*       {% if caption %}*/
/*         {{ caption }}*/
/*       {% else %}*/
/*         {{ title }}*/
/*       {% endif %}*/
/*       {% if (summary is not empty) or (description is not empty) %}*/
/*         <details>*/
/*           {% if summary is not empty %}*/
/*             <summary>{{ summary }}</summary>*/
/*           {% endif %}*/
/*           {% if description is not empty %}*/
/*             {{ description }}*/
/*           {% endif %}*/
/*         </details>*/
/*       {% endif %}*/
/*     </caption>*/
/*   {% endif %}*/
/*   {% if header %}*/
/*     <thead>*/
/*       <tr>*/
/*         {% for key, column in header %}*/
/*           {% if column.default_classes %}*/
/*             {%*/
/*               set column_classes = [*/
/*                 'views-field',*/
/*                 'views-field-' ~ fields[key],*/
/*               ]*/
/*             %}*/
/*           {% endif %}*/
/*           <th{{ column.attributes.addClass(column_classes).setAttribute('scope', 'col') }}>*/
/*             {%- if column.wrapper_element -%}*/
/*               <{{ column.wrapper_element }}>*/
/*                 {%- if column.url -%}*/
/*                   <a href="{{ column.url }}" title="{{ column.title }}">{{ column.content }}{{ column.sort_indicator }}</a>*/
/*                 {%- else -%}*/
/*                   {{ column.content }}{{ column.sort_indicator }}*/
/*                 {%- endif -%}*/
/*               </{{ column.wrapper_element }}>*/
/*             {%- else -%}*/
/*               {%- if column.url -%}*/
/*                 <a href="{{ column.url }}" title="{{ column.title }}">{{ column.content }}{{ column.sort_indicator }}</a>*/
/*               {%- else -%}*/
/*                 {{- column.content }}{{ column.sort_indicator }}*/
/*               {%- endif -%}*/
/*             {%- endif -%}*/
/*           </th>*/
/*         {% endfor %}*/
/*       </tr>*/
/*     </thead>*/
/*   {% endif %}*/
/*   <tbody>*/
/*     {% for row in rows %}*/
/*       <tr{{ row.attributes }}>*/
/*         {% for key, column in row.columns %}*/
/*           {% if column.default_classes %}*/
/*             {%*/
/*               set column_classes = [*/
/*                 'views-field'*/
/*               ]*/
/*             %}*/
/*             {% for field in column.fields %}*/
/*               {% set column_classes = column_classes|merge(['views-field-' ~ field]) %}*/
/*             {% endfor %}*/
/*           {% endif %}*/
/*           <td{{ column.attributes.addClass(column_classes) }}>*/
/*             {%- if column.wrapper_element -%}*/
/*               <{{ column.wrapper_element }}>*/
/*               {% for content in column.content %}*/
/*                 {{ content.separator }}{{ content.field_output }}*/
/*               {% endfor %}*/
/*               </{{ column.wrapper_element }}>*/
/*             {%- else -%}*/
/*               {% for content in column.content %}*/
/*                 {{- content.separator }}{{ content.field_output -}}*/
/*               {% endfor %}*/
/*             {%- endif %}*/
/*           </td>*/
/*         {% endfor %}*/
/*       </tr>*/
/*     {% endfor %}*/
/*   </tbody>*/
/* </table>*/
/* */
/* {% if responsive %}*/
/*   </div>*/
/* {% endif %}*/
/* */
