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

/* sortie/detail.html.twig */
class __TwigTemplate_5a44cba7affd4d6bb63f4471f3294e30 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sortie/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sortie/detail.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

    // line 6
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

        // line 7
        yield "
    <h1>Afficher une sortie</h1>

    <div class=\"container\">
        <div class=\"field\"><label>Nom de la sortie:</label> <span>";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 11, $this->source); })()), "nom", [], "any", false, false, false, 11), "html", null, true);
        yield "</span></div>
        <div class=\"field\"><label>Campus :</label> <span>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 12, $this->source); })()), "site", [], "any", false, false, false, 12), "nom", [], "any", false, false, false, 12), "html", null, true);
        yield "</span></div>

        <div class=\"field\"><label> Organisateur :</label> <span>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 14, $this->source); })()), "organisateur", [], "any", false, false, false, 14), "nom", [], "any", false, false, false, 14), "html", null, true);
        yield "</span></div>

        <div class=\"field\"><label>Date et heure de la sortie:</label> <span>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 16, $this->source); })()), "dateHeureDebut", [], "any", false, false, false, 16), "d/m/Y H:m"), "html", null, true);
        yield "</span></div>
        <div class=\"field\"><label>Lieu:</label> <span>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 17, $this->source); })()), "lieu", [], "any", false, false, false, 17), "nom", [], "any", false, false, false, 17), "html", null, true);
        yield "</span></div>

        <div class=\"field\"><label>Date limite d'inscription:</label> <span>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 19, $this->source); })()), "dateLimiteInscription", [], "any", false, false, false, 19), "d/m/Y"), "html", null, true);
        yield "</span></div>
        <div class=\"field\"><label>Rue:</label> <span>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 20, $this->source); })()), "lieu", [], "any", false, false, false, 20), "rue", [], "any", false, false, false, 20), "html", null, true);
        yield "</span></div>

        <div class=\"field\"><label>Nombre de places:</label> <span>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 22, $this->source); })()), "nbInscriptionMax", [], "any", false, false, false, 22), "html", null, true);
        yield "</span></div>
        <div class=\"field\"><label>Code postal:</label> <span>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 23, $this->source); })()), "lieu", [], "any", false, false, false, 23), "ville", [], "any", false, false, false, 23), "codePostal", [], "any", false, false, false, 23), "html", null, true);
        yield "</span></div>

        <div class=\"field\"><label>Durée:</label> <span>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 25, $this->source); })()), "duree", [], "any", false, false, false, 25), "html", null, true);
        yield "</span></div>
        <div class=\"field\"><label>Description et infos:</label> <span>";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 26, $this->source); })()), "infoSortie", [], "any", false, false, false, 26), "html", null, true);
        yield "</span></div>

        <div class=\"field\"><label>Longitude:</label> <span>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 28, $this->source); })()), "lieu", [], "any", false, false, false, 28), "longitude", [], "any", false, false, false, 28), "html", null, true);
        yield "</span></div>
        <div class=\"field\"><label>Latitude:</label> <span>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 29, $this->source); })()), "lieu", [], "any", false, false, false, 29), "latitude", [], "any", false, false, false, 29), "html", null, true);
        yield "</span></div>
    </div>

    ";
        // line 32
        if (((!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), (isset($context["listUsers"]) || array_key_exists("listUsers", $context) ? $context["listUsers"] : (function () { throw new RuntimeError('Variable "listUsers" does not exist.', 32, $this->source); })())) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 32, $this->source); })()), "dateLimiteInscription", [], "any", false, false, false, 32) > "now")) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 32, $this->source); })()), "etat", [], "any", false, false, false, 32) == "OUVERTE"))) {
            // line 33
            yield "    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_inscription", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\">S'inscrire</a>
    ";
        }
        // line 35
        yield "
    ";
        // line 36
        if ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), (isset($context["listUsers"]) || array_key_exists("listUsers", $context) ? $context["listUsers"] : (function () { throw new RuntimeError('Variable "listUsers" does not exist.', 36, $this->source); })())) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 36, $this->source); })()), "etat", [], "any", false, false, false, 36) != "EN COURS"))) {
            // line 37
            yield "    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_deinscription", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\">Se désinscrire</a>
    ";
        }
        // line 39
        yield "
    <section>
        <legend>👉Liste des participants : </legend>
        <table>
            <tr>
                <th>Pseudo</th>
                <th>Nom Prénom</th>
                <th>Profil</th>
            </tr>
            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 48, $this->source); })()), "users", [], "any", false, false, false, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 49
            yield "                <tr>
                    <td>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "pseudo", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
                    <td>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 51), "html", null, true);
            yield "  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 51), "html", null, true);
            yield "</td>
                    <td><a href=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            yield "\">Voir 👆</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "        </table>
    </section>

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
        return "sortie/detail.html.twig";
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
        return array (  223 => 55,  214 => 52,  208 => 51,  204 => 50,  201 => 49,  197 => 48,  186 => 39,  180 => 37,  178 => 36,  175 => 35,  169 => 33,  167 => 32,  161 => 29,  157 => 28,  152 => 26,  148 => 25,  143 => 23,  139 => 22,  134 => 20,  130 => 19,  125 => 17,  121 => 16,  116 => 14,  111 => 12,  107 => 11,  101 => 7,  88 => 6,  64 => 4,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}{{ parent() }} - Liste{% endblock %}

{% block body %}

    <h1>Afficher une sortie</h1>

    <div class=\"container\">
        <div class=\"field\"><label>Nom de la sortie:</label> <span>{{ sortie.nom }}</span></div>
        <div class=\"field\"><label>Campus :</label> <span>{{ sortie.site.nom }}</span></div>

        <div class=\"field\"><label> Organisateur :</label> <span>{{ sortie.organisateur.nom }}</span></div>

        <div class=\"field\"><label>Date et heure de la sortie:</label> <span>{{ sortie.dateHeureDebut|date('d/m/Y H:m') }}</span></div>
        <div class=\"field\"><label>Lieu:</label> <span>{{ sortie.lieu.nom }}</span></div>

        <div class=\"field\"><label>Date limite d'inscription:</label> <span>{{ sortie.dateLimiteInscription|date('d/m/Y') }}</span></div>
        <div class=\"field\"><label>Rue:</label> <span>{{ sortie.lieu.rue }}</span></div>

        <div class=\"field\"><label>Nombre de places:</label> <span>{{ sortie.nbInscriptionMax }}</span></div>
        <div class=\"field\"><label>Code postal:</label> <span>{{ sortie.lieu.ville.codePostal }}</span></div>

        <div class=\"field\"><label>Durée:</label> <span>{{ sortie.duree }}</span></div>
        <div class=\"field\"><label>Description et infos:</label> <span>{{ sortie.infoSortie }}</span></div>

        <div class=\"field\"><label>Longitude:</label> <span>{{ sortie.lieu.longitude }}</span></div>
        <div class=\"field\"><label>Latitude:</label> <span>{{ sortie.lieu.latitude }}</span></div>
    </div>

    {% if app.user not in listUsers and sortie.dateLimiteInscription > \"now\" and sortie.etat == \"OUVERTE\"   %}
    <a href=\"{{ path('sortie_inscription',{id: sortie.id}) }}\">S'inscrire</a>
    {% endif %}

    {% if app.user in listUsers and sortie.etat != \"EN COURS\" %}
    <a href=\"{{ path('sortie_deinscription',{id: sortie.id}) }}\">Se désinscrire</a>
    {% endif %}

    <section>
        <legend>👉Liste des participants : </legend>
        <table>
            <tr>
                <th>Pseudo</th>
                <th>Nom Prénom</th>
                <th>Profil</th>
            </tr>
            {% for user in sortie.users %}
                <tr>
                    <td>{{ user.pseudo }}</td>
                    <td>{{ user.nom }}  {{ user.prenom }}</td>
                    <td><a href=\"{{ path('app_user', {id: user.id}) }}\">Voir 👆</a></td>
                </tr>
            {% endfor %}
        </table>
    </section>

{% endblock %}
", "sortie/detail.html.twig", "D:\\PHP\\PROJET_SYMFONY\\PROJET\\Projet-Symfony-Sortie\\templates\\sortie\\detail.html.twig");
    }
}
