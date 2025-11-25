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
use Twig\TemplateWrapper;

/* @MobileDetect/Collector/device.html.twig */
class __TwigTemplate_16a65b9e495fd3e34d4942a0aa23680f extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MobileDetect/Collector/device.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MobileDetect/Collector/device.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        yield "  ";
        $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 5
            yield "    <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 100 100\"
       enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
    <path fill=\"#AAAAAA\"
      d=\"m33.975 95h32.05c5.565 0 10.08-4.279 10.08-9.569v-70.855c0-5.285-4.513-9.576-10.07-9.576h-32.05c-5.564 0-10.08 4.291-10.08 9.576v70.854c0 5.288 4.513 9.57 10.08 9.57m16.03-3.257c-2.493 0-4.506-2.02-4.506-4.498 0-2.489 2.01-4.502 4.506-4.502 2.487 0 4.494 2.01 4.494 4.502 0 2.481-2.01 4.498-4.494 4.498m-6.868-80.911h13.727c.556 0 1.01.383 1.01.852 0 .471-.452.854-1.01.854h-13.727c-.55 0-1.01-.383-1.01-.854-.0001-.469.454-.852 1.01-.852m-15.289 10.798c0-.794.675-1.438 1.508-1.438h41.29c.835 0 1.507.641 1.507 1.438v56.49c0 .791-.672 1.433-1.507 1.433h-41.29c-.833 0-1.508-.642-1.508-1.433v-56.49\"/>
  </svg>
    <span class=\"sf-toolbar-value\">View: ";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "currentView", [], "any", false, false, false, 10)), "html", null, true);
            yield "</span>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        yield "  ";
        $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 13
            yield "    <div class=\"sf-toolbar-info-piece\">
      <b>Device Detector</b>
    </div>
    <div class=\"sf-toolbar-info-piece\">
      <span>Switch view:</span>
    </div>
    ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 19, $this->source); })()), "views", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["viewData"]) {
                // line 20
                yield "      ";
                $context["viewLink"] = "";
                // line 21
                yield "      ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["viewData"], "isCurrent", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 22
                    yield "        ";
                    $context["viewLink"] = "<span class=\"sf-toolbar-status sf-toolbar-status-green\">current</span>";
                    // line 23
                    yield "      ";
                } else {
                    // line 24
                    yield "        ";
                    $context["viewLink"] = (("<span><a href=\"" . CoreExtension::getAttribute($this->env, $this->source, $context["viewData"], "link", [], "any", false, false, false, 24)) . "\">Use this view</a></span>");
                    // line 25
                    yield "      ";
                }
                // line 26
                yield "      <div class=\"sf-toolbar-info-piece\">
        <b>";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["viewData"], "label", [], "any", false, false, false, 27), "html", null, true);
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["viewData"], "enabled", [], "any", false, false, false, 27) == false)) ? (" (External)") : (""));
                yield "</b>
        ";
                // line 28
                yield (isset($context["viewLink"]) || array_key_exists("viewLink", $context) ? $context["viewLink"] : (function () { throw new RuntimeError('Variable "viewLink" does not exist.', 28, $this->source); })());
                yield "
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['viewData'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            yield "  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 32
        yield "  ";
        yield from $this->load("@WebProfiler/Profiler/toolbar_item.html.twig", 32)->unwrap()->yield(CoreExtension::merge($context, ["link" => false]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MobileDetect/Collector/device.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  146 => 32,  142 => 31,  133 => 28,  128 => 27,  125 => 26,  122 => 25,  119 => 24,  116 => 23,  113 => 22,  110 => 21,  107 => 20,  103 => 19,  95 => 13,  92 => 12,  86 => 10,  79 => 5,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
  {% set icon %}
    <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 100 100\"
       enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
    <path fill=\"#AAAAAA\"
      d=\"m33.975 95h32.05c5.565 0 10.08-4.279 10.08-9.569v-70.855c0-5.285-4.513-9.576-10.07-9.576h-32.05c-5.564 0-10.08 4.291-10.08 9.576v70.854c0 5.288 4.513 9.57 10.08 9.57m16.03-3.257c-2.493 0-4.506-2.02-4.506-4.498 0-2.489 2.01-4.502 4.506-4.502 2.487 0 4.494 2.01 4.494 4.502 0 2.481-2.01 4.498-4.494 4.498m-6.868-80.911h13.727c.556 0 1.01.383 1.01.852 0 .471-.452.854-1.01.854h-13.727c-.55 0-1.01-.383-1.01-.854-.0001-.469.454-.852 1.01-.852m-15.289 10.798c0-.794.675-1.438 1.508-1.438h41.29c.835 0 1.507.641 1.507 1.438v56.49c0 .791-.672 1.433-1.507 1.433h-41.29c-.833 0-1.508-.642-1.508-1.433v-56.49\"/>
  </svg>
    <span class=\"sf-toolbar-value\">View: {{ collector.currentView | capitalize }}</span>
  {% endset %}
  {% set text %}
    <div class=\"sf-toolbar-info-piece\">
      <b>Device Detector</b>
    </div>
    <div class=\"sf-toolbar-info-piece\">
      <span>Switch view:</span>
    </div>
    {% for viewData in collector.views %}
      {% set viewLink = '' %}
      {% if viewData.isCurrent %}
        {% set viewLink = '<span class=\"sf-toolbar-status sf-toolbar-status-green\">current</span>' %}
      {% else %}
        {% set viewLink = '<span><a href=\"' ~ viewData.link ~ '\">Use this view</a></span>' %}
      {% endif %}
      <div class=\"sf-toolbar-info-piece\">
        <b>{{ viewData.label }}{{ viewData.enabled == false ? ' (External)' : ''}}</b>
        {{ viewLink|raw }}
      </div>
    {% endfor %}
  {% endset %}
  {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': false } %}
{% endblock %}
", "@MobileDetect/Collector/device.html.twig", "C:\\PHP\\symfony\\PROJET_SYMFONY\\PROJET\\Projet-Symfony-Sortie\\vendor\\tattali\\mobile-detect-bundle\\src\\Resources\\views\\Collector\\device.html.twig");
    }
}
