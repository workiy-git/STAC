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

/* modules/views_slideshow/templates/views-view-slideshow.html.twig */
class __TwigTemplate_2dc483685eed68bcc6666806df6e6f4d extends Template
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
        // line 17
        if (($context["slideshow"] ?? null)) {
            // line 18
            echo "  <div class=\"skin-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["skin"] ?? null), 18, $this->source), "html", null, true);
            echo "\">
    ";
            // line 19
            if (($context["top_widget_rendered"] ?? null)) {
                // line 20
                echo "      <div class=\"views-slideshow-controls-top clearfix\">
        ";
                // line 21
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_widget_rendered"] ?? null), 21, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 24
            echo "
    ";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slideshow"] ?? null), 25, $this->source), "html", null, true);
            echo "

    ";
            // line 27
            if (($context["bottom_widget_rendered"] ?? null)) {
                // line 28
                echo "      <div class=\"views-slideshow-controls-bottom clearfix\">
        ";
                // line 29
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_widget_rendered"] ?? null), 29, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 32
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/views_slideshow/templates/views-view-slideshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 32,  70 => 29,  67 => 28,  65 => 27,  60 => 25,  57 => 24,  51 => 21,  48 => 20,  46 => 19,  41 => 18,  39 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a views slideshow.
 *
 * Available variables:
 * - bottom_widget_rendered: Widget under the slideshow with controls/data.
 * - skin: The skin being applied to the slideshow.
 * - slideshow: The slideshow.
 * - top_widget_rendered: Widget above the slideshow with controls/data.
 *
 * @see _views_slideshow_preprocess_views_view_slideshow()
 *
 * @ingroup vss_templates
 */
#}
{% if slideshow %}
  <div class=\"skin-{{ skin }}\">
    {% if top_widget_rendered %}
      <div class=\"views-slideshow-controls-top clearfix\">
        {{ top_widget_rendered }}
      </div>
    {% endif %}

    {{ slideshow }}

    {% if bottom_widget_rendered %}
      <div class=\"views-slideshow-controls-bottom clearfix\">
        {{ bottom_widget_rendered }}
      </div>
    {% endif %}
    </div>
{% endif %}
", "modules/views_slideshow/templates/views-view-slideshow.html.twig", "/home/ohikhr297nfl/public_html/sepaktakraw.ca/modules/views_slideshow/templates/views-view-slideshow.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 17);
        static $filters = array("escape" => 18);
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
