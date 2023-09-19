<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/webform/templates/webform-element-help.html.twig */
class __TwigTemplate_dafc72026333bef565208eb0cfd68e6a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        ob_start();
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("webform/webform.element.help"), "html", null, true);
        echo "
<span";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 18, $this->source), "html", null, true);
        echo "><span aria-hidden=\"true\">?</span></span>
";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_0_));
    }

    public function getTemplateName()
    {
        return "modules/webform/templates/webform-element-help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 16,  45 => 18,  41 => 17,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme implementation for webform element help
 *
 * Available variables
 * - element: form element
 * - help: Help content.
 * - help_icon: Help icon.
 *
 * @see template_preprocess_webform_element_help()
 *
 * @ingroup themeable
 */
#}
{% apply spaceless %}
{{ attach_library('webform/webform.element.help') }}
<span{{ attributes }}><span aria-hidden=\"true\">?</span></span>
{% endapply %}
", "modules/webform/templates/webform-element-help.html.twig", "/home/ohikhr297nfl/public_html/sepaktakraw.ca/modules/webform/templates/webform-element-help.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 16);
        static $filters = array("escape" => 17, "spaceless" => 16);
        static $functions = array("attach_library" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['apply'],
                ['escape', 'spaceless'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
