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

/* modules/bootstrap_layouts/templates/3.0.0/bs-1col.html.twig */
class __TwigTemplate_da7e0ca5b8136f940245587b8fa51bdc extends Template
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
        // line 19
        echo "<";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper"] ?? null), 19, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 19, $this->source), "html", null, true);
        echo ">
  ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_suffix"] ?? null), "contextual_links", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "
  <";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["main"] ?? null), "wrapper", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["main"] ?? null), "attributes", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo ">
    ";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["main"] ?? null), "content", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "
  </";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["main"] ?? null), "wrapper", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo ">
</";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper"] ?? null), 24, $this->source), "html", null, true);
        echo ">
";
    }

    public function getTemplateName()
    {
        return "modules/bootstrap_layouts/templates/3.0.0/bs-1col.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 24,  58 => 23,  54 => 22,  49 => 21,  45 => 20,  39 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Bootstrap Layouts: \"1 Column\" template.
 *
 * Available layout variables:
 * - wrapper: Wrapper element for the layout container.
 * - attributes: Wrapper attributes for the layout container.
 *
 * Available region variables:
 * - main
 *
 * Each region variable contains the following properties:
 * - wrapper: The HTML element to use to wrap this region.
 * - attributes: The HTML attributes to use on the wrapper for this region.
 * - content: The content to go inside the wrapper for this region.
 */
#}
<{{ wrapper }}{{ attributes }}>
  {{ title_suffix.contextual_links }}
  <{{ main.wrapper }}{{ main.attributes }}>
    {{ main.content }}
  </{{ main.wrapper }}>
</{{ wrapper }}>
", "modules/bootstrap_layouts/templates/3.0.0/bs-1col.html.twig", "/home/ohikhr297nfl/public_html/sepaktakraw.ca/modules/bootstrap_layouts/templates/3.0.0/bs-1col.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
