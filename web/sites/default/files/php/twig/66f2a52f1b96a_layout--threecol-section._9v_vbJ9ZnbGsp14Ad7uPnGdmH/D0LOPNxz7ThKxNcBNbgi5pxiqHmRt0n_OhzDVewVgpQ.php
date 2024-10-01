<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/modules/layout_builder/layouts/threecol_section/layout--threecol-section.html.twig */
class __TwigTemplate_f0a28f63d10c6092ba94efcb8c05e4fe extends Template
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
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        if (($context["content"] ?? null)) {
            // line 15
            yield "  <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 15), 15, $this->source), "html", null, true);
            yield ">

    ";
            // line 17
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "first", [], "any", false, false, true, 17)) {
                // line 18
                yield "      <div ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["region_attributes"] ?? null), "first", [], "any", false, false, true, 18), "addClass", ["layout__region", "layout__region--first"], "method", false, false, true, 18), 18, $this->source), "html", null, true);
                yield ">
        ";
                // line 19
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "first", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 22
            yield "
    ";
            // line 23
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "second", [], "any", false, false, true, 23)) {
                // line 24
                yield "      <div ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["region_attributes"] ?? null), "second", [], "any", false, false, true, 24), "addClass", ["layout__region", "layout__region--second"], "method", false, false, true, 24), 24, $this->source), "html", null, true);
                yield ">
        ";
                // line 25
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "second", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 28
            yield "
    ";
            // line 29
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "third", [], "any", false, false, true, 29)) {
                // line 30
                yield "      <div ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["region_attributes"] ?? null), "third", [], "any", false, false, true, 30), "addClass", ["layout__region", "layout__region--third"], "method", false, false, true, 30), 30, $this->source), "html", null, true);
                yield ">
        ";
                // line 31
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "third", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 34
            yield "
  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content", "attributes", "classes", "region_attributes"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/modules/layout_builder/layouts/threecol_section/layout--threecol-section.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  93 => 34,  87 => 31,  82 => 30,  80 => 29,  77 => 28,  71 => 25,  66 => 24,  64 => 23,  61 => 22,  55 => 19,  50 => 18,  48 => 17,  42 => 15,  40 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/layout_builder/layouts/threecol_section/layout--threecol-section.html.twig", "/app/web/core/modules/layout_builder/layouts/threecol_section/layout--threecol-section.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 14);
        static $filters = array("escape" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                [],
                $this->source
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
