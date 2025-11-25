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
class __TwigTemplate_37edb362d995b2f81efeae9c2d381836 extends Template
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
        <label for=\"site\"> 🗺 Site :</label>
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
            <label >🔍 FILTRES :</label>
            <label for=\"orga\">Sorties dont je suis l'organisateur/trice</label>
            <input type=\"checkbox\" id=\"orga\" name=\"orga\" value=\"orga\">
            <label for=\"inscrit\">Sorties auxquelles je suis inscrit(e)</label>
            <input type=\"checkbox\" id=\"inscrit\" name=\"inscrit\" value=\"inscrit\">
            <label for=\"pasinscrit\">Sorties auxquelles je ne suis pas inscrit(e)</label>
            <input type=\"checkbox\" id=\"pasinscrit\" name=\"pasinscrit\" value=\"pasinscrit\">
            <label for=\"passe\">Sorties passées</label>
            <input type=\"checkbox\" id=\"passe\" name=\"passe\" value=\"passe\">
            <div>
                <label for=\"apres\">📆 Après le : </label>
                <input type=\"date\" name=\"apres\" id=\"apres\">
                <label for=\"avant\"> 📆 Avant le : </label>
                <input type=\"date\" name=\"avant\" id=\"avant\">
            </div>
        </div>

        <input type=\"submit\" value=\"Recherche\">
    </form>
    <!--gestion des pages si plus de 10 évènements-->
    <h3> Liste des évènements publiés : </h3>

    <section class=\"sortie-list\" >
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sorties"]) || array_key_exists("sorties", $context) ? $context["sorties"] : (function () { throw new RuntimeError('Variable "sorties" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sortie"]) {
            // line 42
            yield "
        <a href=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            yield "\">
            ";
            // line 44
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "etat", [], "any", false, false, false, 44) != "ANNULEE")) {
                // line 45
                yield "            <article class=\"card\">
                <h4>";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "nom", [], "any", false, false, false, 46), "html", null, true);
                yield "</h4>
                <span>Site : ";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "site", [], "any", false, false, false, 47), "nom", [], "any", false, false, false, 47), "html", null, true);
                yield "</span>
                <span>Date Début Sortie : ";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "dateHeureDebut", [], "any", false, false, false, 48), "d/m/Y"), "html", null, true);
                yield "</span>
                <span>Date Fin Inscription : ";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "dateLimiteInscription", [], "any", false, false, false, 49), "d/m/Y"), "html", null, true);
                yield "</span>
                <span>Nombre de places maximum : ";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "nbInscriptionMax", [], "any", false, false, false, 50), "html", null, true);
                yield " </span>
                <span>Organisateur : ";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "getOrganisateur", [], "method", false, false, false, 51), "nom", [], "any", false, false, false, 51), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "getOrganisateur", [], "method", false, false, false, 51), "prenom", [], "any", false, false, false, 51), "html", null, true);
                yield "</span>
                <!-- gestion affichage état -->
                ";
                // line 53
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "etat", [], "any", false, false, false, 53) == "OUVERTE")) {
                    // line 54
                    yield "                <span class=\"etatlist\">✅ Sortie ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "etat", [], "any", false, false, false, 54), "html", null, true);
                    yield "</span>
                ";
                }
                // line 56
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "etat", [], "any", false, false, false, 56) == "CLOTUREE")) {
                    // line 57
                    yield "                    <span class=\"etatlist\">⛔ Sortie ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "etat", [], "any", false, false, false, 57), "html", null, true);
                    yield "</span>
                ";
                }
                // line 59
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "etat", [], "any", false, false, false, 59) == "PASSEE")) {
                    // line 60
                    yield "                    <span class=\"passee\">📆 Sortie ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "etat", [], "any", false, false, false, 60), "html", null, true);
                    yield "</span>
                ";
                }
                // line 62
                yield "
            </article>
            ";
            }
            // line 65
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "etat", [], "any", false, false, false, 65) == "ANNULEE")) {
                // line 66
                yield "                <article class=\"card\" style=\"background-image: url('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/143294d0-c748-44a6-b2cd-205d54a8a469.jpg"), "html", null, true);
                yield "')\">
                    <h4>";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "nom", [], "any", false, false, false, 67), "html", null, true);
                yield "</h4>
                    <span>Site : ";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "site", [], "any", false, false, false, 68), "nom", [], "any", false, false, false, 68), "html", null, true);
                yield "</span>
                    <span class=\"etatlist\">❌ ";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "etat", [], "any", false, false, false, 69), "html", null, true);
                yield " </span>
                    <span>Raison : ";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "infoSortie", [], "any", false, false, false, 70), "html", null, true);
                yield "</span>
                </article>
            ";
            }
            // line 73
            yield "        </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sortie'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        yield "    </section>

    <!--présentation pagination-->
    <section class=\"section\">
        ";
        // line 79
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 79, $this->source); })()) > 1)) {
            // line 80
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_list", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 80, $this->source); })()) - 1)]), "html", null, true);
            yield "\">Page précédente ◀ </a>&nbsp;
        ";
        }
        // line 82
        yield "        <span> page ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 82, $this->source); })()), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 82, $this->source); })()), "html", null, true);
        yield " </span>
        ";
        // line 83
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 83, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 83, $this->source); })()))) {
            // line 84
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_list", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 84, $this->source); })()) + 1)]), "html", null, true);
            yield "\">▶ Page suivante</a>&nbsp;
        ";
        }
        // line 86
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
        return array (  291 => 86,  285 => 84,  283 => 83,  276 => 82,  270 => 80,  268 => 79,  262 => 75,  255 => 73,  249 => 70,  245 => 69,  241 => 68,  237 => 67,  232 => 66,  229 => 65,  224 => 62,  218 => 60,  215 => 59,  209 => 57,  206 => 56,  200 => 54,  198 => 53,  191 => 51,  187 => 50,  183 => 49,  179 => 48,  175 => 47,  171 => 46,  168 => 45,  166 => 44,  162 => 43,  159 => 42,  155 => 41,  126 => 14,  115 => 12,  111 => 11,  104 => 7,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ parent() }} - Liste{% endblock %}

{% block body %}
<h2>Evènements</h2>
    <form action=\"{{ path('sortie_list') }}\" name=\"criteres\" method=\"get\">
        <label for=\"site\"> 🗺 Site :</label>
        <select name=\"site\" id=\"site\">
            <option value=\"\">-- Tous les sites --</option>
            {% for site in sites %}
                <option value=\"{{ site.id }}\">{{ site.nom }}</option>
            {% endfor %}
        </select>
        <label for=\"contents\">Le nom de la sortie contient :</label>
        <input type=\"text\" name=\"contents\" id=\"contents\">
        <div>
            <label >🔍 FILTRES :</label>
            <label for=\"orga\">Sorties dont je suis l'organisateur/trice</label>
            <input type=\"checkbox\" id=\"orga\" name=\"orga\" value=\"orga\">
            <label for=\"inscrit\">Sorties auxquelles je suis inscrit(e)</label>
            <input type=\"checkbox\" id=\"inscrit\" name=\"inscrit\" value=\"inscrit\">
            <label for=\"pasinscrit\">Sorties auxquelles je ne suis pas inscrit(e)</label>
            <input type=\"checkbox\" id=\"pasinscrit\" name=\"pasinscrit\" value=\"pasinscrit\">
            <label for=\"passe\">Sorties passées</label>
            <input type=\"checkbox\" id=\"passe\" name=\"passe\" value=\"passe\">
            <div>
                <label for=\"apres\">📆 Après le : </label>
                <input type=\"date\" name=\"apres\" id=\"apres\">
                <label for=\"avant\"> 📆 Avant le : </label>
                <input type=\"date\" name=\"avant\" id=\"avant\">
            </div>
        </div>

        <input type=\"submit\" value=\"Recherche\">
    </form>
    <!--gestion des pages si plus de 10 évènements-->
    <h3> Liste des évènements publiés : </h3>

    <section class=\"sortie-list\" >
        {%  for sortie in sorties %}

        <a href=\"{{ path('sortie_detail', {id : sortie.id }) }}\">
            {% if sortie.etat != 'ANNULEE' %}
            <article class=\"card\">
                <h4>{{ sortie.nom }}</h4>
                <span>Site : {{ sortie.site.nom }}</span>
                <span>Date Début Sortie : {{ sortie.dateHeureDebut|date('d/m/Y') }}</span>
                <span>Date Fin Inscription : {{ sortie.dateLimiteInscription|date('d/m/Y') }}</span>
                <span>Nombre de places maximum : {{ sortie.nbInscriptionMax }} </span>
                <span>Organisateur : {{ sortie.getOrganisateur().nom }} {{ sortie.getOrganisateur().prenom }}</span>
                <!-- gestion affichage état -->
                {% if sortie.etat == \"OUVERTE\" %}
                <span class=\"etatlist\">✅ Sortie {{ sortie.etat }}</span>
                {%  endif %}
                {% if sortie.etat == \"CLOTUREE\" %}
                    <span class=\"etatlist\">⛔ Sortie {{ sortie.etat }}</span>
                {%  endif %}
                {% if sortie.etat == \"PASSEE\" %}
                    <span class=\"passee\">📆 Sortie {{ sortie.etat }}</span>
                {%  endif %}

            </article>
            {% endif %}
            {% if sortie.etat == \"ANNULEE\" %}
                <article class=\"card\" style=\"background-image: url('{{ asset('images/143294d0-c748-44a6-b2cd-205d54a8a469.jpg') }}')\">
                    <h4>{{ sortie.nom }}</h4>
                    <span>Site : {{ sortie.site.nom }}</span>
                    <span class=\"etatlist\">❌ {{ sortie.etat }} </span>
                    <span>Raison : {{ sortie.infoSortie }}</span>
                </article>
            {% endif %}
        </a>
        {% endfor %}
    </section>

    <!--présentation pagination-->
    <section class=\"section\">
        {% if page > 1 %}
            <a href=\"{{ path('sortie_list', {'page': page - 1}) }}\">Page précédente ◀ </a>&nbsp;
        {% endif %}
        <span> page {{ page }}/{{ totalPages }} </span>
        {% if page < totalPages %}
            <a href=\"{{ path('sortie_list', {'page': page + 1}) }}\">▶ Page suivante</a>&nbsp;
        {% endif %}
    </section>

{% endblock %}


", "sortie/list.html.twig", "C:\\PHP\\symfony\\PROJET_SYMFONY\\PROJET\\Projet-Symfony-Sortie\\templates\\sortie\\list.html.twig");
    }
}
