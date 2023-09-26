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

/* modules/mimemail/templates/mimemail-message.html.twig */
class __TwigTemplate_66258e8f0922eaa0bed5828cfdb15cf9 extends Template
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
        // line 32
        $context["classes"] = ((($context["module"] ?? null)) ? (((($context["key"] ?? null)) ? ((($this->sandbox->ensureToStringAllowed(($context["module"] ?? null), 32, $this->source) . "-") . $this->sandbox->ensureToStringAllowed(($context["key"] ?? null), 32, $this->source))) : (""))) : (""));
        // line 33
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <title>Mime Mail message template</title>
";
        // line 38
        if (($context["css"] ?? null)) {
            // line 39
            echo "    <style type=\"text/css\">
      <!-- ";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["css"] ?? null), 40, $this->source), "html", null, true);
            echo " -->
    </style>
";
        }
        // line 43
        echo "  </head>
  <body id=\"mimemail-body\"";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 44), 44, $this->source), "html", null, true);
        echo ">
    <div id=\"center\">
      <div id=\"main\">
        ";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 47, $this->source));
        echo "
      </div>
    </div>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "modules/mimemail/templates/mimemail-message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 47,  62 => 44,  59 => 43,  53 => 40,  50 => 39,  48 => 38,  41 => 33,  39 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default template to format a HTML email using the Mime Mail module.
 *
 * Copy this file in your default theme folder to create a custom themed email.
 * If you modify this template you MUST be sure to keep the html, body, and
 * header tags. This template should produce a fully-formed HTML document.
 * Failure to include these will result in a malformed email and possibly
 * errors shown to the user when sending email.
 *
 * To override this template for all emails sent by a given module,
 * rename this template to mimemail-messages--[module].html.twig.
 *
 * To override this template for a specific email sent by a given module,
 * rename this template to mimemail-messages--[module]--[key].html.twig.
 *
 * Available variables:
 * - attributes: HTML attributes for the body element of the message.
 * - key: The message identifier.
 * - module: The machine name of the sending module.
 * - css: Internal style sheets.
 * - recipient: The recipient of the message.
 * - subject: The message subject.
 * - body: The message body.
 *
 * @see template_preprocess_mimemail_message()
 *
 * @ingroup themeable
 */
#}
{% set classes = module ? (key ? module ~ '-' ~ key) %}
<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <title>Mime Mail message template</title>
{% if css %}
    <style type=\"text/css\">
      <!-- {{ css }} -->
    </style>
{% endif %}
  </head>
  <body id=\"mimemail-body\"{{ attributes.addClass(classes) }}>
    <div id=\"center\">
      <div id=\"main\">
        {{ body|raw }}
      </div>
    </div>
  </body>
</html>
", "modules/mimemail/templates/mimemail-message.html.twig", "/home/ohikhr297nfl/public_html/sepaktakraw.ca/modules/mimemail/templates/mimemail-message.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 32, "if" => 38);
        static $filters = array("escape" => 40, "raw" => 47);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'raw'],
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
