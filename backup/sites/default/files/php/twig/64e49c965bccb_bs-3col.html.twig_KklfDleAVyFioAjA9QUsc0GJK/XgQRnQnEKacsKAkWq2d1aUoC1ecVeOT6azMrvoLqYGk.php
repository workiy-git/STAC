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

/* modules/bootstrap_layouts/templates/3.0.0/bs-3col.html.twig */
class __TwigTemplate_66358d157f07424d879643a9d41ff82a extends Template
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
        // line 21
        echo "<";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper"] ?? null), 21, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 21, $this->source), "html", null, true);
        echo ">
  ";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_suffix"] ?? null), "contextual_links", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "

  ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, ($context["left"] ?? null), "content", [], "any", false, false, true, 24)) {
            // line 25
            echo "  <";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["left"] ?? null), "wrapper", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["left"] ?? null), "attributes", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo ">
    ";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["left"] ?? null), "content", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "
  </";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["left"] ?? null), "wrapper", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo ">
  ";
        }
        // line 29
        echo "
  ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["middle"] ?? null), "content", [], "any", false, false, true, 30)) {
            // line 31
            echo "  <";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["middle"] ?? null), "wrapper", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["middle"] ?? null), "attributes", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo ">
    ";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["middle"] ?? null), "content", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "
  </";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["middle"] ?? null), "wrapper", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo ">
  ";
        }
        // line 35
        echo "
  ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, ($context["right"] ?? null), "content", [], "any", false, false, true, 36)) {
            // line 37
            echo "  <";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["right"] ?? null), "wrapper", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["right"] ?? null), "attributes", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo ">
    ";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["right"] ?? null), "content", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "
  </";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["right"] ?? null), "wrapper", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            echo ">
  ";
        }
        // line 41
        echo "
</";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper"] ?? null), 42, $this->source), "html", null, true);
        echo ">
";
    }

    public function getTemplateName()
    {
        return "modules/bootstrap_layouts/templates/3.0.0/bs-3col.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 42,  107 => 41,  102 => 39,  98 => 38,  92 => 37,  90 => 36,  87 => 35,  82 => 33,  78 => 32,  72 => 31,  70 => 30,  67 => 29,  62 => 27,  58 => 26,  52 => 25,  50 => 24,  45 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Bootstrap Layouts: \"3 Columns\" template.
 *
 * Available layout variables:
 * - wrapper: Wrapper element for the layout container.
 * - attributes: Wrapper attributes for the layout container.
 *
 * Available region variables:
 * - left
 * - middle
 * - right
 *
 * Each region variable contains the following properties:
 * - wrapper: The HTML element to use to wrap this region.
 * - attributes: The HTML attributes to use on the wrapper for this region.
 * - content: The content to go inside the wrapper for this region.
 */
#}
<{{ wrapper }}{{ attributes }}>
  {{ title_suffix.contextual_links }}

  {% if left.content %}
  <{{ left.wrapper }}{{ left.attributes }}>
    {{ left.content }}
  </{{ left.wrapper }}>
  {% endif %}

  {% if middle.content %}
  <{{ middle.wrapper }}{{ middle.attributes }}>
    {{ middle.content }}
  </{{ middle.wrapper }}>
  {% endif %}

  {% if right.content %}
  <{{ right.wrapper }}{{ right.attributes }}>
    {{ right.content }}
  </{{ right.wrapper }}>
  {% endif %}

</{{ wrapper }}>
", "modules/bootstrap_layouts/templates/3.0.0/bs-3col.html.twig", "/home/ohikhr297nfl/public_html/sepaktakraw.ca/modules/bootstrap_layouts/templates/3.0.0/bs-3col.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 24);
        static $filters = array("escape" => 21);
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
