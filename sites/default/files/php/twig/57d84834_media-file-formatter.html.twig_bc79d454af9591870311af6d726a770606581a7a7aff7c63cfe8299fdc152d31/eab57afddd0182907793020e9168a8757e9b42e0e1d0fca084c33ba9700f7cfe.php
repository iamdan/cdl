<?php

/* modules/media_entity_audio/templates/media-file-formatter.html.twig */
class __TwigTemplate_b32bd061a101c0770da39896f5f61310eeb8ca66772c28f9f0f7b89a2a6c7d0e extends Twig_Template
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
        $tags = array("if" => 18);
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

        // line 15
        echo "<audio ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["extravalue"]) ? $context["extravalue"] : null), "html", null, true));
        echo ">
<source src=\"";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["media_link"]) ? $context["media_link"] : null), "html", null, true));
        echo "\" type=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["mimetype"]) ? $context["mimetype"] : null), "html", null, true));
        echo "\">
</audio>
";
        // line 18
        if ((isset($context["value"]) ? $context["value"] : null)) {
            // line 19
            echo "<a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["media_link"]) ? $context["media_link"] : null), "html", null, true));
            echo "\" target=\"_blank\" download>Download</a>
";
        }
        // line 21
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/media_entity_audio/templates/media-file-formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 21,  57 => 19,  55 => 18,  48 => 16,  43 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a link to a file.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: The HTML attributes for the containing element.*/
/*  * - link: A link to the file.*/
/*  **/
/*  * @see template_preprocess_file_link()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <audio {{ extravalue }}>*/
/* <source src="{{ media_link }}" type="{{ mimetype }}">*/
/* </audio>*/
/* {% if value %}*/
/* <a href="{{ media_link }}" target="_blank" download>Download</a>*/
/* {% endif %}*/
/* */
/* */
