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

/* sortie/sortie_form.html.twig */
class __TwigTemplate_10736f6b7dc3a23c0dc5742c5b3258d5 extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sortie/sortie_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sortie/sortie_form.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Création d'évènement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <br>
    <h1>Création d'évènement</h1>
    <br>

    ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["sortie_form"]) || array_key_exists("sortie_form", $context) ? $context["sortie_form"] : (function () { throw new RuntimeError('Variable "sortie_form" does not exist.', 10, $this->source); })()), 'form_start');
        yield "

    ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie_form"]) || array_key_exists("sortie_form", $context) ? $context["sortie_form"] : (function () { throw new RuntimeError('Variable "sortie_form" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), 'row');
        yield "
    ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie_form"]) || array_key_exists("sortie_form", $context) ? $context["sortie_form"] : (function () { throw new RuntimeError('Variable "sortie_form" does not exist.', 13, $this->source); })()), "dateHeureDebut", [], "any", false, false, false, 13), 'row');
        yield "
    ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie_form"]) || array_key_exists("sortie_form", $context) ? $context["sortie_form"] : (function () { throw new RuntimeError('Variable "sortie_form" does not exist.', 14, $this->source); })()), "duree", [], "any", false, false, false, 14), 'row');
        yield "
    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie_form"]) || array_key_exists("sortie_form", $context) ? $context["sortie_form"] : (function () { throw new RuntimeError('Variable "sortie_form" does not exist.', 15, $this->source); })()), "dateLimiteInscription", [], "any", false, false, false, 15), 'row');
        yield "
    ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie_form"]) || array_key_exists("sortie_form", $context) ? $context["sortie_form"] : (function () { throw new RuntimeError('Variable "sortie_form" does not exist.', 16, $this->source); })()), "nbInscriptionMax", [], "any", false, false, false, 16), 'row');
        yield "
    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie_form"]) || array_key_exists("sortie_form", $context) ? $context["sortie_form"] : (function () { throw new RuntimeError('Variable "sortie_form" does not exist.', 17, $this->source); })()), "infoSortie", [], "any", false, false, false, 17), 'row');
        yield "
    ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie_form"]) || array_key_exists("sortie_form", $context) ? $context["sortie_form"] : (function () { throw new RuntimeError('Variable "sortie_form" does not exist.', 18, $this->source); })()), "site", [], "any", false, false, false, 18), 'row');
        yield "
    ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie_form"]) || array_key_exists("sortie_form", $context) ? $context["sortie_form"] : (function () { throw new RuntimeError('Variable "sortie_form" does not exist.', 19, $this->source); })()), "lieu", [], "any", false, false, false, 19), 'row');
        yield "

    <div class=\"btn-position\">
        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie_form"]) || array_key_exists("sortie_form", $context) ? $context["sortie_form"] : (function () { throw new RuntimeError('Variable "sortie_form" does not exist.', 22, $this->source); })()), "submit", [], "any", false, false, false, 22), 'row');
        yield "
    </div>

    ";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["sortie_form"]) || array_key_exists("sortie_form", $context) ? $context["sortie_form"] : (function () { throw new RuntimeError('Variable "sortie_form" does not exist.', 25, $this->source); })()), 'form_end');
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sortie/sortie_form.html.twig";
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
        return array (  151 => 25,  145 => 22,  139 => 19,  135 => 18,  131 => 17,  127 => 16,  123 => 15,  119 => 14,  115 => 13,  111 => 12,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Création d'évènement{% endblock %}

{% block body %}
    <br>
    <h1>Création d'évènement</h1>
    <br>

    {{ form_start(sortie_form) }}

    {{ form_row(sortie_form.nom) }}
    {{ form_row(sortie_form.dateHeureDebut) }}
    {{ form_row(sortie_form.duree) }}
    {{ form_row(sortie_form.dateLimiteInscription) }}
    {{ form_row(sortie_form.nbInscriptionMax) }}
    {{ form_row(sortie_form.infoSortie) }}
    {{ form_row(sortie_form.site) }}
    {{ form_row(sortie_form.lieu) }}

    <div class=\"btn-position\">
        {{ form_row(sortie_form.submit) }}
    </div>

    {{ form_end(sortie_form) }}

{% endblock %}
", "sortie/sortie_form.html.twig", "D:\\PHP\\PROJET_SYMFONY\\PROJET\\Projet-Symfony-Sortie\\templates\\sortie\\sortie_form.html.twig");
    }
}
