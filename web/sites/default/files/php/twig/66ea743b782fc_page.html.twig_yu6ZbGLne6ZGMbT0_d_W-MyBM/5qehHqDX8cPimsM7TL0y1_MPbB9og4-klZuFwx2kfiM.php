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

/* themes/custom/react_hello/templates/page.html.twig */
class __TwigTemplate_bb0a048b72d2a7c7ed7e3fa74b841776 extends Template
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
        // line 48
        yield "
<div id=\"page-wrapper\" class=\"page-wrapper\">
\t<div id=\"page\">

\t\t";
        // line 52
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 52) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 52)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 52))) {
            // line 53
            yield "\t\t\t<header
\t\t\t\tid=\"header\" class=\"site-header\" data-drupal-selector=\"site-header\" role=\"banner\">

\t\t\t\t";
            // line 57
            yield "\t\t\t\t<div class=\"site-header__fixable\" data-drupal-selector=\"site-header-fixable\">
\t\t\t\t\t<div class=\"site-header__initial\">
\t\t\t\t\t\t<button class=\"sticky-header-toggle\" data-drupal-selector=\"sticky-header-toggle\" role=\"switch\" aria-controls=\"site-header__inner\" aria-label=\"";
            // line 59
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sticky header"));
            yield "\" aria-checked=\"false\">
\t\t\t\t\t\t\t<span class=\"sticky-header-toggle__icon\">
\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>

\t\t\t\t\t";
            // line 69
            yield "\t\t\t\t\t<div id=\"site-header__inner\" class=\"site-header__inner\" data-drupal-selector=\"site-header-inner\">
\t\t\t\t\t\t<div class=\"container site-header__inner__container\">

\t\t\t\t\t\t\t";
            // line 72
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            yield "

\t\t\t\t\t\t\t";
            // line 74
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 74) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 74))) {
                // line 75
                yield "\t\t\t\t\t\t\t\t<div class=\"mobile-buttons\" data-drupal-selector=\"mobile-buttons\">
\t\t\t\t\t\t\t\t\t<button class=\"mobile-nav-button\" data-drupal-selector=\"mobile-nav-button\" aria-label=\"";
                // line 76
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Main Menu"));
                yield "\" aria-controls=\"header-nav\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<span class=\"mobile-nav-button__label\">";
                // line 77
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menu"));
                yield "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"mobile-nav-button__icon\"></span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div id=\"header-nav\" class=\"header-nav\" data-drupal-selector=\"header-nav\">
\t\t\t\t\t\t\t\t\t";
                // line 83
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t";
                // line 84
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 87
            yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</header>
\t\t";
        }
        // line 92
        yield "
\t\t<div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container\">
\t\t\t<div id=\"main\" class=\"layout-main\">
\t\t\t\t<div class=\"main-content\">
\t\t\t\t\t<a id=\"main-content\" tabindex=\"-1\"></a>
\t\t\t\t\t";
        // line 97
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
        yield "
\t\t\t\t\t<div class=\"main-content__container container\">
\t\t\t\t\t\t";
        // line 99
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
        yield "
\t\t\t\t\t\t";
        // line 100
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
        yield "
\t\t\t\t\t\t<div id=\"react-app\" class=\"block\">
\t\t\t\t\t\t\tReact app will load here
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 105
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 105)) {
            // line 106
            yield "\t\t\t\t\t\t\t<div class=\"sidebar-grid grid-full\">
\t\t\t\t\t\t\t\t<main role=\"main\" class=\"site-main\">
\t\t\t\t\t\t\t\t\t";
            // line 108
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t";
            // line 109
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t</main>

\t\t\t\t\t\t\t\t";
            // line 112
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        } else {
            // line 115
            yield "\t\t\t\t\t\t\t<main role=\"main\">
\t\t\t\t\t\t\t\t";
            // line 116
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t";
            // line 117
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
            yield "
\t\t\t\t\t\t\t</main>
\t\t\t\t\t\t";
        }
        // line 120
        yield "\t\t\t\t\t\t";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_below", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"social-bar\">
\t\t\t\t\t";
        // line 124
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<footer class=\"site-footer\">
\t\t\t<div class=\"site-footer__inner container\">
\t\t\t\t";
        // line 131
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
        yield "
\t\t\t\t";
        // line 132
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
        yield "
\t\t\t</div>
\t\t</footer>

\t\t<div class=\"overlay\" data-drupal-selector=\"overlay\"></div>

\t</div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/react_hello/templates/page.html.twig";
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
        return array (  195 => 132,  191 => 131,  181 => 124,  173 => 120,  167 => 117,  163 => 116,  160 => 115,  154 => 112,  148 => 109,  144 => 108,  140 => 106,  138 => 105,  130 => 100,  126 => 99,  121 => 97,  114 => 92,  107 => 87,  101 => 84,  97 => 83,  88 => 77,  84 => 76,  81 => 75,  79 => 74,  74 => 72,  69 => 69,  57 => 59,  53 => 57,  48 => 53,  46 => 52,  40 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/react_hello/templates/page.html.twig", "/app/web/themes/custom/react_hello/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 52);
        static $filters = array("t" => 59, "escape" => 72);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
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
