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

/* modules/yoast_seo/templates/yoast-snippet.html.twig */
class __TwigTemplate_14d0b5025df35a089b2776bb3de62b51 extends Template
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
        // line 1
        echo "<div id=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_target_id"] ?? null), 1, $this->source), "html", null, true);
        echo "\">
    <div id=\"wpseo_meta\"></div>
    <div class=\"label\">";
        // line 3
        echo t("Snippet editor", array());
        echo "</div>
    <div id=\"";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["snippet_target_id"] ?? null), 4, $this->source), "html", null, true);
        echo "\"></div>
    <div class=\"label\">";
        // line 5
        echo t("Content analysis", array());
        echo "</div>
    <div id=\"";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["output_target_id"] ?? null), 6, $this->source), "html", null, true);
        echo "\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/yoast_seo/templates/yoast-snippet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 6,  53 => 5,  49 => 4,  45 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"{{ wrapper_target_id }}\">
    <div id=\"wpseo_meta\"></div>
    <div class=\"label\">{% trans %}Snippet editor{% endtrans %}</div>
    <div id=\"{{ snippet_target_id }}\"></div>
    <div class=\"label\">{% trans %}Content analysis{% endtrans %}</div>
    <div id=\"{{ output_target_id }}\"></div>
</div>
", "modules/yoast_seo/templates/yoast-snippet.html.twig", "/home/ohikhr297nfl/public_html/sepaktakraw.ca/modules/yoast_seo/templates/yoast-snippet.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 3);
        static $filters = array("escape" => 1);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
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
