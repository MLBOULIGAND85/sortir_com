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

/* main/index.html.twig */
class __TwigTemplate_6437390f0a467d4bd79b0db4ad798803 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

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

        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield " - Accueil";
        
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
        yield "    <!-- affichage des évènements du moment : les 3 ayant la date la plus proche-->
    <h2>Evènements du moment</h2>
    <section class=\"sortie-list\">
        <!-- boucle for sur la liste des sorties et tri par nb de participants -->
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["moments"]) || array_key_exists("moments", $context) ? $context["moments"] : (function () { throw new RuntimeError('Variable "moments" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["moment"]) {
            // line 11
            yield "            <article class=\"card\">
                <h4>";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["moment"], "nom", [], "any", false, false, false, 12), "html", null, true);
            yield "</h4>
                <span>Site : ";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["moment"], "site", [], "any", false, false, false, 13), "nom", [], "any", false, false, false, 13), "html", null, true);
            yield "</span>
                <span>Date Début Sortie : ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["moment"], "dateHeureDebut", [], "any", false, false, false, 14), "d/m/Y"), "html", null, true);
            yield "</span>
                <span>Date Fin Inscription : ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["moment"], "dateLimiteInscription", [], "any", false, false, false, 15), "d/m/Y"), "html", null, true);
            yield "</span>
                <span>Nombre de places maximum : ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["moment"], "nbInscriptionMax", [], "any", false, false, false, 16), "html", null, true);
            yield " </span>
                <span>Organisateur : ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["moment"], "getOrganisateur", [], "method", false, false, false, 17), "nom", [], "any", false, false, false, 17), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["moment"], "getOrganisateur", [], "method", false, false, false, 17), "prenom", [], "any", false, false, false, 17), "html", null, true);
            yield "</span>

                ";
            // line 19
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["moment"], "etat", [], "any", false, false, false, 19) == "OUVERTE")) {
                // line 20
                yield "                    <span class=\"\">OUVERTE - INSCRIPTION POSSIBLE ✅</span>
                ";
            } else {
                // line 22
                yield "                    <span class=\"\">INSCRIPTION IMPOSSIBLE ⛔</span>
                ";
            }
            // line 24
            yield "
            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['moment'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "    </section>

    <!-- affichage des évènements les plus populaires : les 3 ayant le plus gd nb de participants-->
    <h2>Evènements les plus populaires</h2>
    <!-- boucle for sur la liste des sorties et tri par nb de participants -->
    <section class=\"sortie-list\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["populaires"]) || array_key_exists("populaires", $context) ? $context["populaires"] : (function () { throw new RuntimeError('Variable "populaires" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["populaire"]) {
            // line 34
            yield "            <article class=\"card\">
                <h4> ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["populaire"], "nom", [], "any", false, false, false, 35), "html", null, true);
            yield "</h4>
                <span>Site : ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["populaire"], "site", [], "any", false, false, false, 36), "nom", [], "any", false, false, false, 36), "html", null, true);
            yield "</span>
                <span>Date Début Sortie : ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["populaire"], "dateHeureDebut", [], "any", false, false, false, 37), "d/m/Y"), "html", null, true);
            yield "</span>
                <span>Date Fin Inscription : ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["populaire"], "dateLimiteInscription", [], "any", false, false, false, 38), "d/m/Y"), "html", null, true);
            yield "</span>
                <span>Nombre de places maximum : ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["populaire"], "nbInscriptionMax", [], "any", false, false, false, 39), "html", null, true);
            yield " </span>
                <span>Nombre de places restantes : ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["populaire"], "nbInscriptionMax", [], "any", false, false, false, 40) - Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["populaire"], "users", [], "any", false, false, false, 40))), "html", null, true);
            yield " </span>
                <span>Organisateur : ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["populaire"], "getOrganisateur", [], "method", false, false, false, 41), "nom", [], "any", false, false, false, 41), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["populaire"], "getOrganisateur", [], "method", false, false, false, 41), "prenom", [], "any", false, false, false, 41), "html", null, true);
            yield "</span>
                ";
            // line 42
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["populaire"], "etat", [], "any", false, false, false, 42) == "OUVERTE")) {
                // line 43
                yield "                <span>OUVERTE - INSCRIPTION POSSIBLE ✅</span>
                ";
            } else {
                // line 45
                yield "                    <span class=\"\">INSCRIPTION IMPOSSIBLE ⛔</span>
                ";
            }
            // line 47
            yield "            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['populaire'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "    </section>

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
        return "main/index.html.twig";
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
        return array (  221 => 49,  214 => 47,  210 => 45,  206 => 43,  204 => 42,  198 => 41,  194 => 40,  190 => 39,  186 => 38,  182 => 37,  178 => 36,  174 => 35,  171 => 34,  167 => 33,  159 => 27,  151 => 24,  147 => 22,  143 => 20,  141 => 19,  134 => 17,  130 => 16,  126 => 15,  122 => 14,  118 => 13,  114 => 12,  111 => 11,  107 => 10,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ parent() }} - Accueil{% endblock %}

{% block body %}
    <!-- affichage des évènements du moment : les 3 ayant la date la plus proche-->
    <h2>Evènements du moment</h2>
    <section class=\"sortie-list\">
        <!-- boucle for sur la liste des sorties et tri par nb de participants -->
        {% for moment in moments %}
            <article class=\"card\">
                <h4>{{ moment.nom }}</h4>
                <span>Site : {{ moment.site.nom }}</span>
                <span>Date Début Sortie : {{ moment.dateHeureDebut|date('d/m/Y') }}</span>
                <span>Date Fin Inscription : {{ moment.dateLimiteInscription|date('d/m/Y') }}</span>
                <span>Nombre de places maximum : {{ moment.nbInscriptionMax }} </span>
                <span>Organisateur : {{ moment.getOrganisateur().nom }} {{ moment.getOrganisateur().prenom }}</span>

                {% if moment.etat == 'OUVERTE' %}
                    <span class=\"\">OUVERTE - INSCRIPTION POSSIBLE ✅</span>
                {% else %}
                    <span class=\"\">INSCRIPTION IMPOSSIBLE ⛔</span>
                {%  endif %}

            </article>
        {%  endfor %}
    </section>

    <!-- affichage des évènements les plus populaires : les 3 ayant le plus gd nb de participants-->
    <h2>Evènements les plus populaires</h2>
    <!-- boucle for sur la liste des sorties et tri par nb de participants -->
    <section class=\"sortie-list\">
        {% for populaire in populaires %}
            <article class=\"card\">
                <h4> {{ populaire.nom }}</h4>
                <span>Site : {{ populaire.site.nom }}</span>
                <span>Date Début Sortie : {{ populaire.dateHeureDebut|date('d/m/Y') }}</span>
                <span>Date Fin Inscription : {{ populaire.dateLimiteInscription|date('d/m/Y') }}</span>
                <span>Nombre de places maximum : {{ populaire.nbInscriptionMax }} </span>
                <span>Nombre de places restantes : {{ populaire.nbInscriptionMax - populaire.users|length }} </span>
                <span>Organisateur : {{ populaire.getOrganisateur().nom }} {{ populaire.getOrganisateur().prenom }}</span>
                {% if populaire.etat == 'OUVERTE' %}
                <span>OUVERTE - INSCRIPTION POSSIBLE ✅</span>
                {% else %}
                    <span class=\"\">INSCRIPTION IMPOSSIBLE ⛔</span>
                {%  endif %}
            </article>
        {% endfor %}
    </section>

{% endblock %}
", "main/index.html.twig", "C:\\PHP\\symfony\\PROJET_SYMFONY\\PROJET\\Projet-Symfony-Sortie\\templates\\main\\index.html.twig");
    }
}
