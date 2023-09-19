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

/* modules/webform/templates/webform-element-base-html.html.twig */
class __TwigTemplate_5d1110c6dea003aabe3a078fb037ab34 extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "email", [], "any", false, false, true, 16)) {
            // line 17
            echo "  ";
            if (($context["title"] ?? null)) {
                echo "<b>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 17, $this->source), "html", null, true);
                echo "</b><br />";
            }
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 17, $this->source), "html", null, true);
            echo "<br /><br />
";
        } else {
            // line 19
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item"] ?? null), 19, $this->source), "html", null, true);
            echo "
";
        }
        // line 21
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/webform/templates/webform-element-base-html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 21,  52 => 19,  41 => 17,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a webform base element as html.
 *
 * Available variables:
 * - element: The element.
 * - title: The label for the element.
 * - value: The content for the element.
 * - item: The form item used to display the element.
 * - options Associative array of options for element.
 *   - multiline: Flag to determine if value spans multiple lines.
 *   - email: Flag to determine if element is for an email.
 */
#}
{% if options.email %}
  {% if title %}<b>{{ title }}</b><br />{% endif %}{{ value }}<br /><br />
{% else %}
  {{ item }}
{% endif %}

", "modules/webform/templates/webform-element-base-html.html.twig", "/home/ohikhr297nfl/public_html/sepaktakraw.ca/modules/webform/templates/webform-element-base-html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 16);
        static $filters = array("escape" => 17);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
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
