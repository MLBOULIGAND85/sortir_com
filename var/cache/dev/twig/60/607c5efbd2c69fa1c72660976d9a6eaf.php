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

/* sortie/list.html.twig */
class __TwigTemplate_83d89f05703ed8bdf3efb30022ab22e2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sortie/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sortie/list.html.twig"));

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
        yield " - Liste";
        
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
        yield "<h2>Evènements</h2>
    <form action=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_list");
        yield "\" name=\"criteres\" method=\"get\">
        <label for=\"site\">Site :</label>
        <select name=\"site\" id=\"site\">
            <option value=\"\">-- Tous les sites --</option>
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sites"]) || array_key_exists("sites", $context) ? $context["sites"] : (function () { throw new RuntimeError('Variable "sites" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
            // line 12
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["site"], "id", [], "any", false, false, false, 12), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["site"], "nom", [], "any", false, false, false, 12), "html", null, true);
            yield "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['site'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "        </select>
        <label for=\"contents\">Le nom de la sortie contient :</label>
        <input type=\"text\" name=\"contents\" id=\"contents\">
        <div>
            <label >Filtres :</label>
            <input type=\"checkbox\" id=\"orga\" name=\"orga\" value=\"orga\">
            <label for=\"orga\">Sorties dont je suis l'organisateur/trice</label>
            <input type=\"checkbox\" id=\"inscrit\" name=\"inscrit\" value=\"inscrit\">
            <label for=\"inscrit\">Sorties auxquelles je suis inscrit/e</label>
            <input type=\"checkbox\" id=\"pasinscrit\" name=\"pasinscrit\" value=\"pasinscrit\">
            <label for=\"pasinscrit\">Sorties auxquelles je ne suis pas inscrit/e</label>
            <input type=\"checkbox\" id=\"passe\" name=\"passe\" value=\"passe\">
            <label for=\"passe\">Sorties passées</label>
            <div>
                <label for=\"apres\">Après le : </label>
                <input type=\"date\" name=\"apres\" id=\"apres\">
                <label for=\"avant\">Avant le : </label>
                <input type=\"date\" name=\"avant\" id=\"avant\">
            </div>
        </div>

        <input type=\"submit\" value=\"Recherche\">
    </form>
    <!--gestion des pages si plus de 10 évènements-->
    <h3> Liste des évènements publiés : </h3>

    <section>
        ";
        // line 41
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 41, $this->source); })()) > 1)) {
            // line 42
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_list", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "query", [], "any", false, false, false, 42), "all", [], "any", false, false, false, 42), ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 42, $this->source); })()) - 1)])), "html", null, true);
            yield "\">Page Précédente</a>
        ";
        }
        // line 44
        yield "        ";
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 44, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 44, $this->source); })()))) {
            // line 45
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_list", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "query", [], "any", false, false, false, 45), "all", [], "any", false, false, false, 45), ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 45, $this->source); })()) + 1)])), "html", null, true);
            yield "\">Page Suivante</a>
        ";
        }
        // line 47
        yield "    </section>

<section class=\"sortie-list\">
    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sorties"]) || array_key_exists("sorties", $context) ? $context["sorties"] : (function () { throw new RuntimeError('Variable "sorties" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sortie"]) {
            // line 51
            yield "    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            yield "\">
        <article class=\"card\">
        <h4>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "nom", [], "any", false, false, false, 53), "html", null, true);
            yield "</h4>
        <span>Site : ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "site", [], "any", false, false, false, 54), "nom", [], "any", false, false, false, 54), "html", null, true);
            yield "</span>
        <span>Date Début Sortie : ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "dateHeureDebut", [], "any", false, false, false, 55), "d/m/Y"), "html", null, true);
            yield "</span>
        <span>Date Fin Inscription : ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "dateLimiteInscription", [], "any", false, false, false, 56), "d/m/Y"), "html", null, true);
            yield "</span>
        <span>Nombre de places maximum : ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "nbInscriptionMax", [], "any", false, false, false, 57), "html", null, true);
            yield " </span>
        <span>Organisateur : ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "getOrganisateur", [], "method", false, false, false, 58), "nom", [], "any", false, false, false, 58), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "getOrganisateur", [], "method", false, false, false, 58), "prenom", [], "any", false, false, false, 58), "html", null, true);
            yield "</span>

        </article>
    </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sortie'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "
</section>

    <!--présentation pagination-->
    <section>
        ";
        // line 68
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 68, $this->source); })()) > 1)) {
            // line 69
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_list", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 69, $this->source); })()) - 1)]), "html", null, true);
            yield "\">Page précédente ◀ </a>&nbsp;
        ";
        }
        // line 71
        yield "        <span> page ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 71, $this->source); })()), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 71, $this->source); })()), "html", null, true);
        yield " </span>
        ";
        // line 72
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 72, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 72, $this->source); })()))) {
            // line 73
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_list", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 73, $this->source); })()) + 1)]), "html", null, true);
            yield "\">▶ Page suivante</a>&nbsp;
        ";
        }
        // line 75
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
        return "sortie/list.html.twig";
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
        return array (  250 => 75,  244 => 73,  242 => 72,  235 => 71,  229 => 69,  227 => 68,  220 => 63,  207 => 58,  203 => 57,  199 => 56,  195 => 55,  191 => 54,  187 => 53,  181 => 51,  177 => 50,  172 => 47,  166 => 45,  163 => 44,  157 => 42,  155 => 41,  126 => 14,  115 => 12,  111 => 11,  104 => 7,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ parent() }} - Liste{% endblock %}

{% block body %}
<h2>Evènements</h2>
    <form action=\"{{ path('sortie_list') }}\" name=\"criteres\" method=\"get\">
        <label for=\"site\">Site :</label>
        <select name=\"site\" id=\"site\">
            <option value=\"\">-- Tous les sites --</option>
            {% for site in sites %}
                <option value=\"{{ site.id }}\">{{ site.nom }}</option>
            {% endfor %}
        </select>
        <label for=\"contents\">Le nom de la sortie contient :</label>
        <input type=\"text\" name=\"contents\" id=\"contents\">
        <div>
            <label >Filtres :</label>
            <input type=\"checkbox\" id=\"orga\" name=\"orga\" value=\"orga\">
            <label for=\"orga\">Sorties dont je suis l'organisateur/trice</label>
            <input type=\"checkbox\" id=\"inscrit\" name=\"inscrit\" value=\"inscrit\">
            <label for=\"inscrit\">Sorties auxquelles je suis inscrit/e</label>
            <input type=\"checkbox\" id=\"pasinscrit\" name=\"pasinscrit\" value=\"pasinscrit\">
            <label for=\"pasinscrit\">Sorties auxquelles je ne suis pas inscrit/e</label>
            <input type=\"checkbox\" id=\"passe\" name=\"passe\" value=\"passe\">
            <label for=\"passe\">Sorties passées</label>
            <div>
                <label for=\"apres\">Après le : </label>
                <input type=\"date\" name=\"apres\" id=\"apres\">
                <label for=\"avant\">Avant le : </label>
                <input type=\"date\" name=\"avant\" id=\"avant\">
            </div>
        </div>

        <input type=\"submit\" value=\"Recherche\">
    </form>
    <!--gestion des pages si plus de 10 évènements-->
    <h3> Liste des évènements publiés : </h3>

    <section>
        {% if page > 1 %}
            <a href=\"{{ path('sortie_list', app.request.query.all | merge({'page' : page-1})) }}\">Page Précédente</a>
        {% endif %}
        {% if page < totalPages %}
            <a href=\"{{ path('sortie_list',app.request.query.all | merge({'page' : page+1})) }}\">Page Suivante</a>
        {% endif %}
    </section>

<section class=\"sortie-list\">
    {%  for sortie in sorties %}
    <a href=\"{{ path('sortie_detail', {id : sortie.id }) }}\">
        <article class=\"card\">
        <h4>{{ sortie.nom }}</h4>
        <span>Site : {{ sortie.site.nom }}</span>
        <span>Date Début Sortie : {{ sortie.dateHeureDebut|date('d/m/Y') }}</span>
        <span>Date Fin Inscription : {{ sortie.dateLimiteInscription|date('d/m/Y') }}</span>
        <span>Nombre de places maximum : {{ sortie.nbInscriptionMax }} </span>
        <span>Organisateur : {{ sortie.getOrganisateur().nom }} {{ sortie.getOrganisateur().prenom }}</span>

        </article>
    </a>
    {% endfor %}

</section>

    <!--présentation pagination-->
    <section>
        {% if page > 1 %}
            <a href=\"{{ path('sortie_list', {'page': page - 1}) }}\">Page précédente ◀ </a>&nbsp;
        {% endif %}
        <span> page {{ page }}/{{ totalPages }} </span>
        {% if page < totalPages %}
            <a href=\"{{ path('sortie_list', {'page': page + 1}) }}\">▶ Page suivante</a>&nbsp;
        {% endif %}
    </section>

{% endblock %}


", "sortie/list.html.twig", "D:\\PHP\\PROJET_SYMFONY\\PROJET\\Projet-Symfony-Sortie\\templates\\sortie\\list.html.twig");
    }
}
