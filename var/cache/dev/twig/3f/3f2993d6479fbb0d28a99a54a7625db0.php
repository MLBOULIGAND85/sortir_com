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

/* user/user_list.html.twig */
class __TwigTemplate_ce5565524fc5605c8b099c2fcec47c0d extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user_list.html.twig"));

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

        yield "Profil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    <link rel=\"stylesheet\" href=\"../../assets/css/style.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
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

        // line 10
        yield "
    <h1>GESTION DES UTILISATEURS</h1>

    <section class=\"participants-section\">
        <legend>👉 Liste des utilisateurs 👥 :</legend>
        <div class=\"table-responsive\">
            <table class=\"participants-table\">
                <thead>
                <tr>
                    <th>Pseudo</th>
                    <th>Nom - Prénom</th>
                    <th>Campus</th>
                    <th>Etat</th>
                    <th>Actions : 🔓 - 🔒</th>
                    <th>Supprimer ❌</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 28, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 29
            yield "                    <tr>
                        <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "pseudo", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                        <td><a href=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 31), "html", null, true);
            yield "  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 31), "html", null, true);
            yield "</a></td>
                        <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "campus", [], "any", false, false, false, 32), "nom", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                        <td>";
            // line 33
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "actif", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("🔓 actif") : ("🔒 inactif"));
            yield " </td>

                        ";
            // line 35
            if (!CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 35))) {
                // line 36
                yield "                            <td>
                                <a href=\"";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_gestion", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                yield "\">
                                    ";
                // line 38
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "actif", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("🔒 Désactiver") : ("🔓 Activer"));
                yield "
                                </a>
                            </td>
                        ";
            } else {
                // line 42
                yield "                            <td class=\"action_impossible\">⛔ <em>(admin)</em></td>
                        ";
            }
            // line 44
            yield "
                        ";
            // line 45
            if (!CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 45))) {
                // line 46
                yield "                            <td>
                                <a href=\"";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 47), "token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 47)))]), "html", null, true);
                yield "\"
                                   class=\"\" onclick=\"return confirm('⚠ L\\'utilisateur sera supprimé définitivement, continuer?')\">
                                    ❌Supprimer
                                </a>
                            </td>
                        ";
            } else {
                // line 53
                yield "                            <td class=\"action_impossible\">⛔ <em>(admin)</em></td>
                        ";
            }
            // line 55
            yield "
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 57
        if (!$context['_iterated']) {
            // line 58
            yield "                    <tr>
                        <td colspan=\"2\" class=\"empty\">Aucun utilisateur inscrit</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "                </tbody>
            </table>
        </div>
    </section>
    <section class=\"\">
        ";
        // line 68
        yield "        <div class=\"btn-position\">
            <button type=\"button\" class=\"btn btn-option\"> <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\"> <strong> CREER UN PROFIL UTILISATEUR </strong> </a> </button>
        </div>

        <div class=\"csv\">
            <h5>Import CSV d'utilisateurs :</h5>
            <form action=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_userlist");
        yield "\" method=\"post\" enctype=\"multipart/form-data\">
                <label for=\"listusers\"></label>
                <input type=\"file\" name=\"listusers\" id=\"listusers\">
                <input type=\"submit\">
            </form>
        </div>

        ";
        // line 82
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
        return "user/user_list.html.twig";
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
        return array (  261 => 82,  251 => 74,  243 => 69,  240 => 68,  233 => 62,  224 => 58,  222 => 57,  216 => 55,  212 => 53,  203 => 47,  200 => 46,  198 => 45,  195 => 44,  191 => 42,  184 => 38,  180 => 37,  177 => 36,  175 => 35,  170 => 33,  166 => 32,  158 => 31,  154 => 30,  151 => 29,  146 => 28,  126 => 10,  113 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"../../assets/css/style.css\">
{% endblock %}

{% block body %}

    <h1>GESTION DES UTILISATEURS</h1>

    <section class=\"participants-section\">
        <legend>👉 Liste des utilisateurs 👥 :</legend>
        <div class=\"table-responsive\">
            <table class=\"participants-table\">
                <thead>
                <tr>
                    <th>Pseudo</th>
                    <th>Nom - Prénom</th>
                    <th>Campus</th>
                    <th>Etat</th>
                    <th>Actions : 🔓 - 🔒</th>
                    <th>Supprimer ❌</th>
                </tr>
                </thead>
                <tbody>
                {% for user in users %}
                    <tr>
                        <td>{{ user.pseudo }}</td>
                        <td><a href=\"{{ path('app_user', {id: user.id}) }}\">{{ user.nom }}  {{ user.prenom }}</a></td>
                        <td>{{ user.campus.nom }}</td>
                        <td>{{ user.actif ? '🔓 actif' : '🔒 inactif' }} </td>

                        {% if 'ROLE_ADMIN' not in user.roles %}
                            <td>
                                <a href=\"{{ path('admin_user_gestion', {id: user.id}) }}\">
                                    {{ user.actif ? '🔒 Désactiver' : '🔓 Activer' }}
                                </a>
                            </td>
                        {% else %}
                            <td class=\"action_impossible\">⛔ <em>(admin)</em></td>
                        {% endif %}

                        {% if 'ROLE_ADMIN' not in user.roles %}
                            <td>
                                <a href=\"{{ path('admin_user_delete', {id: user.id, token : csrf_token('delete' ~ user.id)}) }}\"
                                   class=\"\" onclick=\"return confirm('⚠ L\\'utilisateur sera supprimé définitivement, continuer?')\">
                                    ❌Supprimer
                                </a>
                            </td>
                        {% else %}
                            <td class=\"action_impossible\">⛔ <em>(admin)</em></td>
                        {% endif%}

                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"2\" class=\"empty\">Aucun utilisateur inscrit</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </section>
    <section class=\"\">
        {# {% if is_granted('IS_AUTHENTICATED') and is_granted('ROLE_ADMIN') %}  #}
        <div class=\"btn-position\">
            <button type=\"button\" class=\"btn btn-option\"> <a href=\"{{ path('app_register') }}\"> <strong> CREER UN PROFIL UTILISATEUR </strong> </a> </button>
        </div>

        <div class=\"csv\">
            <h5>Import CSV d'utilisateurs :</h5>
            <form action=\"{{ path('admin_user_userlist') }}\" method=\"post\" enctype=\"multipart/form-data\">
                <label for=\"listusers\"></label>
                <input type=\"file\" name=\"listusers\" id=\"listusers\">
                <input type=\"submit\">
            </form>
        </div>

        {# {% endif %} #}
    </section>

{% endblock %}
", "user/user_list.html.twig", "C:\\PHP\\symfony\\PROJET_SYMFONY\\PROJET\\Projet-Symfony-Sortie\\templates\\user\\user_list.html.twig");
    }
}
