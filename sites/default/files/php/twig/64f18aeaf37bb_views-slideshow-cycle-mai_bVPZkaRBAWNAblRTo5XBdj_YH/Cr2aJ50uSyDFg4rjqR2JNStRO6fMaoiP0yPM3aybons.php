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

/* modules/views_slideshow/modules/views_slideshow_cycle/templates/views-slideshow-cycle-main-frame-row-item.html.twig */
class __TwigTemplate_2a7c3cceb119ddbc5934b16825f6c3ab extends Template
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
        echo "<div ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 19), 19, $this->source), "html", null, true);
        echo ">
  ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item"] ?? null), 20, $this->source), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/views_slideshow/modules/views_slideshow_cycle/templates/views-slideshow-cycle-main-frame-row-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 20,  39 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for an item on a views slideshow cycle slide.
 *
 * Available variables:
 * - classes: Classes to apply to the element.
 * - count: The slide number.
 * - item: Rendeder field(s) making up item.
 * - item_count: nth item on slide.
 * - length: Total number of slides.
 * - view: The view.
 *
 * @see template_preprocess_views_slideshow_cycle_main_frame_row_item()
 *
 * @ingroup vss_templates
 */
#}
<div {{ attributes.addClass(classes) }}>
  {{ item }}
</div>
", "modules/views_slideshow/modules/views_slideshow_cycle/templates/views-slideshow-cycle-main-frame-row-item.html.twig", "/home/ohikhr297nfl/public_html/sepaktakraw.ca/modules/views_slideshow/modules/views_slideshow_cycle/templates/views-slideshow-cycle-main-frame-row-item.html.twig");
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
