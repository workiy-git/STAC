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

/* core/modules/system/templates/system-admin-index.html.twig */
class __TwigTemplate_3f750584d7e953f91e8c959858792650 extends Template
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
        // line 18
        echo "<div class=\"admin clearfix\">
  ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["system_compact_link"] ?? null), 19, $this->source), "html", null, true);
        echo "
  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["containers"] ?? null));
        foreach ($context['_seq'] as $context["position"] => $context["blocks"]) {
            // line 21
            echo "    <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["position"], 21, $this->source), "html", null, true);
            echo " clearfix\">
      ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["blocks"]);
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 23
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["block"], 23, $this->source), "html", null, true);
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['position'], $context['blocks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/system-admin-index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 27,  68 => 25,  59 => 23,  55 => 22,  50 => 21,  46 => 20,  42 => 19,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for the admin index page.
 *
 * Available variables:
 * - system_compact_link: Themed link to toggle compact view.
 * - containers: A list of administrative containers keyed by position: left or
 *   right. Each container in the list contains:
 *   - blocks: A list of administrative blocks, rendered
 *     through admin-block.html.twig.
 *
 * @see template_preprocess_system_admin_index()
 *
 * @ingroup themeable
 */
#}
<div class=\"admin clearfix\">
  {{ system_compact_link }}
  {% for position, blocks in containers %}
    <div class=\"{{ position }} clearfix\">
      {% for block in blocks %}
        {{ block }}
      {% endfor %}
    </div>
  {% endfor %}
</div>
", "core/modules/system/templates/system-admin-index.html.twig", "/home/ohikhr297nfl/public_html/sepaktakraw.ca/core/modules/system/templates/system-admin-index.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 20);
        static $filters = array("escape" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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
