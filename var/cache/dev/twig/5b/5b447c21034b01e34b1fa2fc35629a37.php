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
class __TwigTemplate_d288940fbd59c2c7141d575d6f48b301 extends Template
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
    ";
        // line 8
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 8, $this->source); })()), "etat", [], "any", false, false, false, 8) != "ANNULEE")) {
            // line 9
            yield "        <h1>Afficher une sortie</h1>

        <h5 class=\"etat\"> 👉 SORTIE ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 11, $this->source); })()), "etat", [], "any", false, false, false, 11), "html", null, true);
            yield " 📆</h5>

        <div class=\"container\">
            <div class=\"field\"><label>Nom de la sortie:</label> <span>";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), "html", null, true);
            yield "</span></div>
            <div class=\"field\"><label>Campus :</label> <span>";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 15, $this->source); })()), "site", [], "any", false, false, false, 15), "nom", [], "any", false, false, false, 15), "html", null, true);
            yield "</span></div>

            <div class=\"field\"><label> Organisateur :</label> <span>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 17, $this->source); })()), "organisateur", [], "any", false, false, false, 17), "nom", [], "any", false, false, false, 17), "html", null, true);
            yield "</span></div>

            <div class=\"field\"><label>Date et heure de la sortie:</label> <span>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 19, $this->source); })()), "dateHeureDebut", [], "any", false, false, false, 19), "d/m/Y H:i"), "html", null, true);
            yield "</span></div>
            <div class=\"field\"><label>Lieu:</label> <span>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 20, $this->source); })()), "lieu", [], "any", false, false, false, 20), "nom", [], "any", false, false, false, 20), "html", null, true);
            yield "</span></div>

            <div class=\"field\"><label>Date limite d'inscription:</label> <span>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 22, $this->source); })()), "dateLimiteInscription", [], "any", false, false, false, 22), "d/m/Y"), "html", null, true);
            yield "</span></div>
            <div class=\"field\"><label>Rue:</label> <span>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 23, $this->source); })()), "lieu", [], "any", false, false, false, 23), "rue", [], "any", false, false, false, 23), "html", null, true);
            yield "</span></div>

            <div class=\"field\"><label>Nombre de places:</label> <span>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 25, $this->source); })()), "nbInscriptionMax", [], "any", false, false, false, 25), "html", null, true);
            yield "</span></div>
            <div class=\"field\"><label>Code postal:</label> <span>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 26, $this->source); })()), "lieu", [], "any", false, false, false, 26), "ville", [], "any", false, false, false, 26), "codePostal", [], "any", false, false, false, 26), "html", null, true);
            yield "</span></div>

            <div class=\"field\"><label>Nombre de places restantes:</label> <span>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["placeRestante"]) || array_key_exists("placeRestante", $context) ? $context["placeRestante"] : (function () { throw new RuntimeError('Variable "placeRestante" does not exist.', 28, $this->source); })()), "html", null, true);
            yield "</span></div>

            <div class=\"field\"><label>Date de Fin:</label> <span>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 30, $this->source); })()), "DateHeureFin", [], "any", false, false, false, 30), "d/m/Y H:i"), "html", null, true);
            yield "</span></div>
            <div class=\"field\"><label>Description et infos:</label> <span>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 31, $this->source); })()), "infoSortie", [], "any", false, false, false, 31), "html", null, true);
            yield "</span></div>

            <div class=\"field\"><label>Latitude:</label> <span>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 33, $this->source); })()), "lieu", [], "any", false, false, false, 33), "latitude", [], "any", false, false, false, 33), "html", null, true);
            yield "</span></div>
            <div class=\"field\"><label>Longitude:</label> <span>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 34, $this->source); })()), "lieu", [], "any", false, false, false, 34), "longitude", [], "any", false, false, false, 34), "html", null, true);
            yield "</span></div>
        </div>
    ";
        }
        // line 37
        yield "
    ";
        // line 38
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 38, $this->source); })()), "etat", [], "any", false, false, false, 38) == "ANNULEE")) {
            // line 39
            yield "        <h1 class=\"annulee\">❌ SORTIE ANNULEE</h1>
        <div class=\"container\">
            <div class=\"field\"><label>Raison :</label> <span>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 41, $this->source); })()), "infoSortie", [], "any", false, false, false, 41), "html", null, true);
            yield "</span></div>
        </div>
    ";
        }
        // line 44
        yield "
<div class=\"btn-position\">
        ";
        // line 46
        if (((!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 46, $this->source); })()), "users", [], "any", false, false, false, 46)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 46, $this->source); })()), "dateLimiteInscription", [], "any", false, false, false, 46) > "now")) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 46, $this->source); })()), "etat", [], "any", false, false, false, 46) == "OUVERTE"))) {
            // line 47
            yield "            <button type=\"button\" class=\"btn btn-option\">
                <a href=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_inscription", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)]), "html", null, true);
            yield "\">S'inscrire</a>
            </button>
        ";
        }
        // line 51
        yield "
        ";
        // line 52
        if ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 52, $this->source); })()), "users", [], "any", false, false, false, 52)) && ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 52, $this->source); })()), "etat", [], "any", false, false, false, 52) == "OUVERTE") || ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 52, $this->source); })()), "dateLimiteInscription", [], "any", false, false, false, 52) > "now") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 52, $this->source); })()), "etat", [], "any", false, false, false, 52) == "CLOTUREE"))))) {
            // line 53
            yield "            <button type=\"button\" class=\"btn btn-option\">
                <a href=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_deinscription", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54)]), "html", null, true);
            yield "\">Se désinscrire</a>
            </button>
        ";
        }
        // line 57
        yield "
        ";
        // line 58
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 58, $this->source); })()), "organisateur", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58)) || ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 58, $this->source); })()), "etat", [], "any", false, false, false, 58) == "OUVERTE") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 58, $this->source); })()), "etat", [], "any", false, false, false, 58) == "CLOTUREE"))))) {
            // line 59
            yield "            <button type=\"button\" class=\"btn btn-option\">
                <a href=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60)]), "html", null, true);
            yield "\">Modifier</a>
            </button>
            ";
            // line 62
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 62, $this->source); })()), "etat", [], "any", false, false, false, 62) != "ANNULEE")) {
                // line 63
                yield "                <button type=\"button\" class=\"btn btn-option\">
                    <a href=\"";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_annulation", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64)]), "html", null, true);
                yield "\" onclick=\"return confirm('⚠ La sortie sera supprimée définitivement, continuer?')\">ANNULER</a>
                </button>
            ";
            }
            // line 67
            yield "        ";
        }
        // line 68
        yield "    </div>

    <section class=\"participants-section\">
        <legend>👉 Liste des participants :</legend>
        <div class=\"table-container\">
            <table class=\"participants-table\">
                <thead>
                <tr>
                    <th>Pseudo</th>
                    <th>Nom - Prénom</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 81, $this->source); })()), "users", [], "any", false, false, false, 81));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 82
            yield "                    <tr>
                        <td>";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "pseudo", [], "any", false, false, false, 83), "html", null, true);
            yield "</td>
                        <td><a href=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 84)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 84), "html", null, true);
            yield "  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 84), "html", null, true);
            yield "</a></td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 86
        if (!$context['_iterated']) {
            // line 87
            yield "                    <tr>
                        <td colspan=\"2\" class=\"empty\">Aucun participant inscrit</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        yield "                </tbody>
            </table>
        </div>
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
        return array (  301 => 91,  292 => 87,  290 => 86,  279 => 84,  275 => 83,  272 => 82,  267 => 81,  252 => 68,  249 => 67,  243 => 64,  240 => 63,  238 => 62,  233 => 60,  230 => 59,  228 => 58,  225 => 57,  219 => 54,  216 => 53,  214 => 52,  211 => 51,  205 => 48,  202 => 47,  200 => 46,  196 => 44,  190 => 41,  186 => 39,  184 => 38,  181 => 37,  175 => 34,  171 => 33,  166 => 31,  162 => 30,  157 => 28,  152 => 26,  148 => 25,  143 => 23,  139 => 22,  134 => 20,  130 => 19,  125 => 17,  120 => 15,  116 => 14,  110 => 11,  106 => 9,  104 => 8,  101 => 7,  88 => 6,  64 => 4,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}{{ parent() }} - Liste{% endblock %}

{% block body %}

    {% if sortie.etat != 'ANNULEE' %}
        <h1>Afficher une sortie</h1>

        <h5 class=\"etat\"> 👉 SORTIE {{ sortie.etat }} 📆</h5>

        <div class=\"container\">
            <div class=\"field\"><label>Nom de la sortie:</label> <span>{{ sortie.nom }}</span></div>
            <div class=\"field\"><label>Campus :</label> <span>{{ sortie.site.nom }}</span></div>

            <div class=\"field\"><label> Organisateur :</label> <span>{{ sortie.organisateur.nom }}</span></div>

            <div class=\"field\"><label>Date et heure de la sortie:</label> <span>{{ sortie.dateHeureDebut|date('d/m/Y H:i') }}</span></div>
            <div class=\"field\"><label>Lieu:</label> <span>{{ sortie.lieu.nom }}</span></div>

            <div class=\"field\"><label>Date limite d'inscription:</label> <span>{{ sortie.dateLimiteInscription|date('d/m/Y') }}</span></div>
            <div class=\"field\"><label>Rue:</label> <span>{{ sortie.lieu.rue }}</span></div>

            <div class=\"field\"><label>Nombre de places:</label> <span>{{ sortie.nbInscriptionMax }}</span></div>
            <div class=\"field\"><label>Code postal:</label> <span>{{ sortie.lieu.ville.codePostal }}</span></div>

            <div class=\"field\"><label>Nombre de places restantes:</label> <span>{{ placeRestante }}</span></div>

            <div class=\"field\"><label>Date de Fin:</label> <span>{{ sortie.DateHeureFin|date('d/m/Y H:i') }}</span></div>
            <div class=\"field\"><label>Description et infos:</label> <span>{{ sortie.infoSortie }}</span></div>

            <div class=\"field\"><label>Latitude:</label> <span>{{ sortie.lieu.latitude }}</span></div>
            <div class=\"field\"><label>Longitude:</label> <span>{{ sortie.lieu.longitude }}</span></div>
        </div>
    {% endif %}

    {% if sortie.etat == \"ANNULEE\" %}
        <h1 class=\"annulee\">❌ SORTIE ANNULEE</h1>
        <div class=\"container\">
            <div class=\"field\"><label>Raison :</label> <span>{{ sortie.infoSortie }}</span></div>
        </div>
    {% endif %}

<div class=\"btn-position\">
        {% if app.user not in sortie.users and sortie.dateLimiteInscription > \"now\" and sortie.etat == \"OUVERTE\" %}
            <button type=\"button\" class=\"btn btn-option\">
                <a href=\"{{ path('sortie_inscription',{id: sortie.id}) }}\">S'inscrire</a>
            </button>
        {% endif %}

        {% if app.user in sortie.users and (sortie.etat == \"OUVERTE\" or (sortie.dateLimiteInscription > \"now\" and sortie.etat == \"CLOTUREE\"))%}
            <button type=\"button\" class=\"btn btn-option\">
                <a href=\"{{ path('sortie_deinscription',{id: sortie.id}) }}\">Se désinscrire</a>
            </button>
        {% endif %}

        {% if app.user.id == sortie.organisateur.id or is_granted('ROLE_ADMIN') and (sortie.etat == \"OUVERTE\" or sortie.etat == \"CLOTUREE\")%}
            <button type=\"button\" class=\"btn btn-option\">
                <a href=\"{{ path('sortie_update',{id: sortie.id}) }}\">Modifier</a>
            </button>
            {% if sortie.etat != \"ANNULEE\" %}
                <button type=\"button\" class=\"btn btn-option\">
                    <a href=\"{{ path('sortie_annulation',{id: sortie.id}) }}\" onclick=\"return confirm('⚠ La sortie sera supprimée définitivement, continuer?')\">ANNULER</a>
                </button>
            {% endif %}
        {% endif %}
    </div>

    <section class=\"participants-section\">
        <legend>👉 Liste des participants :</legend>
        <div class=\"table-container\">
            <table class=\"participants-table\">
                <thead>
                <tr>
                    <th>Pseudo</th>
                    <th>Nom - Prénom</th>
                </tr>
                </thead>
                <tbody>
                {% for user in sortie.users %}
                    <tr>
                        <td>{{ user.pseudo }}</td>
                        <td><a href=\"{{ path('app_user', {id: user.id}) }}\">{{ user.nom }}  {{ user.prenom }}</a></td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"2\" class=\"empty\">Aucun participant inscrit</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </section>

{% endblock %}
", "sortie/detail.html.twig", "C:\\PHP\\symfony\\PROJET_SYMFONY\\PROJET\\Projet-Symfony-Sortie\\templates\\sortie\\detail.html.twig");
    }
}
