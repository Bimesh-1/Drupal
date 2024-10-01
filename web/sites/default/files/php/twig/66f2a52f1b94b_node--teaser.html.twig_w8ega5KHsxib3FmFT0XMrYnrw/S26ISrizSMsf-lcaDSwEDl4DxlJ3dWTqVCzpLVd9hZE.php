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

/* core/themes/olivero/templates/content/node--teaser.html.twig */
class __TwigTemplate_7cb1729aa37036bbcd8744875b527d00 extends Template
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
        // line 63
        yield "
";
        // line 65
        $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 67
($context["node"] ?? null), "bundle", [], "any", false, false, true, 67), 67, $this->source))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 68
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 68)) ? ("node--promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 69
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 69)) ? ("node--sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 70
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 70)) ? ("node--unpublished") : ("")), ((        // line 71
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 71, $this->source)))) : (""))];
        // line 74
        yield "

";
        // line 76
        yield from         $this->loadTemplate("core/themes/olivero/templates/content/node--teaser.html.twig", "core/themes/olivero/templates/content/node--teaser.html.twig", 76, "1928502799")->unwrap()->yield(CoreExtension::toArray(["attributes" => CoreExtension::getAttribute($this->env, $this->source,         // line 77
($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 77), "author_attributes" =>         // line 78
($context["author_attributes"] ?? null), "author_name" =>         // line 79
($context["author_name"] ?? null), "content" =>         // line 80
($context["content"] ?? null), "date" =>         // line 81
($context["date"] ?? null), "display_submitted" =>         // line 82
($context["display_submitted"] ?? null), "label" =>         // line 83
($context["label"] ?? null), "metadata" =>         // line 84
($context["metadata"] ?? null), "title_attributes" =>         // line 85
($context["title_attributes"] ?? null), "title_prefix" =>         // line 86
($context["title_prefix"] ?? null), "title_suffix" =>         // line 87
($context["title_suffix"] ?? null), "read_more" =>         // line 88
($context["read_more"] ?? null), "url" =>         // line 89
($context["url"] ?? null)]));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "attributes", "author_attributes", "author_name", "content", "date", "display_submitted", "label", "metadata", "title_attributes", "title_prefix", "title_suffix", "read_more", "url"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/olivero/templates/content/node--teaser.html.twig";
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
        return array (  67 => 89,  66 => 88,  65 => 87,  64 => 86,  63 => 85,  62 => 84,  61 => 83,  60 => 82,  59 => 81,  58 => 80,  57 => 79,  56 => 78,  55 => 77,  54 => 76,  50 => 74,  48 => 71,  47 => 70,  46 => 69,  45 => 68,  44 => 67,  43 => 65,  40 => 63,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/olivero/templates/content/node--teaser.html.twig", "/app/web/core/themes/olivero/templates/content/node--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 65, "embed" => 76);
        static $filters = array("clean_class" => 67);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'embed'],
                ['clean_class'],
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


/* core/themes/olivero/templates/content/node--teaser.html.twig */
class __TwigTemplate_7cb1729aa37036bbcd8744875b527d00___1928502799 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'prefix' => [$this, 'block_prefix'],
            'meta' => [$this, 'block_meta'],
            'image' => [$this, 'block_image'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 76
        return "olivero:teaser";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("olivero:teaser", "core/themes/olivero/templates/content/node--teaser.html.twig", 76);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title_prefix", "title_suffix", "display_submitted", "author_attributes", "author_name", "date", "metadata", "content", "label", "page", "title_attributes", "url"]);    }

    // line 91
    public function block_prefix($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 92, $this->source), "html", null, true);
        yield "
    ";
        // line 93
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 93, $this->source), "html", null, true);
        yield "
  ";
        return; yield '';
    }

    // line 95
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        yield "    ";
        if (($context["display_submitted"] ?? null)) {
            // line 97
            yield "      <div class=\"node__meta\">
        <span";
            // line 98
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 98, $this->source), "html", null, true);
            yield ">
          ";
            // line 99
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("By"));
            yield " ";
            $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                yield "<span class=\"node__author\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 99, $this->source), "html", null, true);
                yield "</span>";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_0_));
            yield ", ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 99, $this->source), "html", null, true);
            yield "
        </span>
        ";
            // line 101
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 101, $this->source), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 104
        yield "  ";
        return; yield '';
    }

    // line 105
    public function block_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
        return; yield '';
    }

    // line 106
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        yield "    ";
        if ((($context["label"] ?? null) &&  !($context["page"] ?? null))) {
            // line 108
            yield "      <h2";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["node__title", "teaser__title"], "method", false, false, true, 108), 108, $this->source), "html", null, true);
            yield ">
        <a href=\"";
            // line 109
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 109, $this->source), "html", null, true);
            yield "\" rel=\"bookmark\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 109, $this->source), "html", null, true);
            yield "</a>
      </h2>
    ";
        }
        // line 112
        yield "  ";
        return; yield '';
    }

    // line 113
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 114, $this->source), "field_image", "links"), "html", null, true);
        yield "
  ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/olivero/templates/content/node--teaser.html.twig";
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
        return array (  263 => 114,  259 => 113,  254 => 112,  246 => 109,  241 => 108,  238 => 107,  234 => 106,  226 => 105,  221 => 104,  215 => 101,  200 => 99,  196 => 98,  193 => 97,  190 => 96,  186 => 95,  179 => 93,  174 => 92,  170 => 91,  158 => 76,  67 => 89,  66 => 88,  65 => 87,  64 => 86,  63 => 85,  62 => 84,  61 => 83,  60 => 82,  59 => 81,  58 => 80,  57 => 79,  56 => 78,  55 => 77,  54 => 76,  50 => 74,  48 => 71,  47 => 70,  46 => 69,  45 => 68,  44 => 67,  43 => 65,  40 => 63,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/olivero/templates/content/node--teaser.html.twig", "/app/web/core/themes/olivero/templates/content/node--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 96, "apply" => 99);
        static $filters = array("escape" => 92, "t" => 99, "spaceless" => 99, "without" => 114);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'apply'],
                ['escape', 't', 'spaceless', 'without'],
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
