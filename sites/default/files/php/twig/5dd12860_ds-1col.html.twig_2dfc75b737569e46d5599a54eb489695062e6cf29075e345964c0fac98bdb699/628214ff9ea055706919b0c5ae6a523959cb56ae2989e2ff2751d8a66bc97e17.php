<?php

/* modules/ds/templates/ds-1col.html.twig */
class __TwigTemplate_5585504a2f5864592e90c42a23d5b5c07996515d20a31f4429d477bc65ab27c4 extends Twig_Template
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
        $__internal_1659c9c90f96636af1b31bd8969db8bfda482d8cd90c156a093785fe0e18ad6a = $this->env->getExtension("native_profiler");
        $__internal_1659c9c90f96636af1b31bd8969db8bfda482d8cd90c156a093785fe0e18ad6a->enter($__internal_1659c9c90f96636af1b31bd8969db8bfda482d8cd90c156a093785fe0e18ad6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/ds/templates/ds-1col.html.twig"));

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

        // line 12
        echo "<";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["ds_content_wrapper"]) ? $context["ds_content_wrapper"] : null), "html", null, true));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "ds-1col", 1 => "clearfix"), "method"), "html", null, true));
        echo ">

  ";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_suffix"]) ? $context["title_suffix"] : null), "contextual_links", array()), "html", null, true));
        echo "

  ";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["ds_content"]) ? $context["ds_content"] : null), "html", null, true));
        echo "

</";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["ds_content_wrapper"]) ? $context["ds_content_wrapper"] : null), "html", null, true));
        echo ">
";
        
        $__internal_1659c9c90f96636af1b31bd8969db8bfda482d8cd90c156a093785fe0e18ad6a->leave($__internal_1659c9c90f96636af1b31bd8969db8bfda482d8cd90c156a093785fe0e18ad6a_prof);

    }

    public function getTemplateName()
    {
        return "modules/ds/templates/ds-1col.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 18,  58 => 16,  53 => 14,  46 => 12,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Display Suite 1 column template.*/
/*  **/
/*  * Available variables:*/
/*  * - ds_content_wrapper: wrapper around content*/
/*  * - attributes: content region attributes*/
/*  * - ds_content: content region*/
/*  *//* */
/* #}*/
/* <{{ ds_content_wrapper }}{{ attributes.addClass('ds-1col', 'clearfix') }}>*/
/* */
/*   {{ title_suffix.contextual_links }}*/
/* */
/*   {{ ds_content }}*/
/* */
/* </{{ ds_content_wrapper }}>*/
/* */
