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

/* user/index.html.twig */
class __TwigTemplate_d81f213f92f18d54a1abc65e9d336ebc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

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
    <section class=\"\">
        <h1>Profil</h1>

        <div class = \"row justify-content-center\">
            <div class = \"col-6\">


       ";
        // line 18
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 18, $this->source); })()), 'form_start');
        yield "
        ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 19, $this->source); })()), "pseudo", [], "any", false, false, false, 19), 'row');
        yield "
        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), 'row');
        yield "
        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 21, $this->source); })()), "prenom", [], "any", false, false, false, 21), 'row');
        yield "
        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 22, $this->source); })()), "email", [], "any", false, false, false, 22), 'row');
        yield "
        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 23, $this->source); })()), "telephone", [], "any", false, false, false, 23), 'row');
        yield "
        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 24, $this->source); })()), "campus", [], "any", false, false, false, 24), 'row');
        yield "
        ";
        // line 25
        if (((isset($context["isModified"]) || array_key_exists("isModified", $context) ? $context["isModified"] : (function () { throw new RuntimeError('Variable "isModified" does not exist.', 25, $this->source); })()) == true)) {
            // line 26
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 26, $this->source); })()), "plainPassword", [], "any", false, false, false, 26), 'row');
            yield "
        ";
        }
        // line 28
        yield "        ";
        if (((isset($context["isModified"]) || array_key_exists("isModified", $context) ? $context["isModified"] : (function () { throw new RuntimeError('Variable "isModified" does not exist.', 28, $this->source); })()) == true)) {
            // line 29
            yield "            <button type=\"submit\" class=\"btn\"> Enregistrer </button>
        ";
        }
        // line 31
        yield "
        ";
        // line 32
        if (((isset($context["isModified"]) || array_key_exists("isModified", $context) ? $context["isModified"] : (function () { throw new RuntimeError('Variable "isModified" does not exist.', 32, $this->source); })()) == false)) {
            // line 33
            yield "            <div class=\"btn-position\">
            <button type=\"button\" class=\"btn\"> <a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\"> Modifier </a> </button>
            </div>
        ";
        }
        // line 37
        yield "        ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 37, $this->source); })()), 'form_end', ["render_rest" => false]);
        yield "

            </div>
        </div>
    </section>
    <section class=\"\">
        <h4>Sorties organisées</h4>
        ";
        // line 44
        if ((($tmp = (!Twig\Extension\CoreExtension::testEmpty((isset($context["sortiesOrganisees"]) || array_key_exists("sortiesOrganisees", $context) ? $context["sortiesOrganisees"] : (function () { throw new RuntimeError('Variable "sortiesOrganisees" does not exist.', 44, $this->source); })())))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 45
            yield "        <div class = \"row justify-content-center\">
            <div class = \"col-6\">
                ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sortiesOrganisees"]) || array_key_exists("sortiesOrganisees", $context) ? $context["sortiesOrganisees"] : (function () { throw new RuntimeError('Variable "sortiesOrganisees" does not exist.', 47, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["sortie"]) {
                // line 48
                yield "                <article class=\"card\">
                    <h4>";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "nom", [], "any", false, false, false, 49), "html", null, true);
                yield "</h4>
                    <span>Date : ";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "dateHeureDebut", [], "any", false, false, false, 50), "d/m/Y"), "html", null, true);
                yield "</span>
                    <a href=\"";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                yield "\">Détails</a>
                </article>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['sortie'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            yield "            </div>
        </div>
";
        } else {
            // line 57
            yield "    <p>Aucune sortie organisée</p>
";
        }
        // line 59
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
        return "user/index.html.twig";
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
        return array (  243 => 59,  239 => 57,  234 => 54,  225 => 51,  221 => 50,  217 => 49,  214 => 48,  210 => 47,  206 => 45,  204 => 44,  193 => 37,  187 => 34,  184 => 33,  182 => 32,  179 => 31,  175 => 29,  172 => 28,  166 => 26,  164 => 25,  160 => 24,  156 => 23,  152 => 22,  148 => 21,  144 => 20,  140 => 19,  136 => 18,  126 => 10,  113 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"../../assets/css/style.css\">
{% endblock %}

{% block body %}

    <section class=\"\">
        <h1>Profil</h1>

        <div class = \"row justify-content-center\">
            <div class = \"col-6\">


       {{ form_start(user_form) }}
        {{ form_row(user_form.pseudo) }}
        {{ form_row(user_form.nom) }}
        {{ form_row(user_form.prenom) }}
        {{ form_row(user_form.email) }}
        {{ form_row(user_form.telephone) }}
        {{ form_row(user_form.campus) }}
        {% if isModified == true %}
        {{ form_row(user_form.plainPassword) }}
        {% endif %}
        {% if isModified == true %}
            <button type=\"submit\" class=\"btn\"> Enregistrer </button>
        {% endif %}

        {% if isModified == false %}
            <div class=\"btn-position\">
            <button type=\"button\" class=\"btn\"> <a href=\"{{ path('app_user_update',{id: app.user.id}) }}\"> Modifier </a> </button>
            </div>
        {% endif %}
        {{ form_end(user_form,{render_rest: false}) }}

            </div>
        </div>
    </section>
    <section class=\"\">
        <h4>Sorties organisées</h4>
        {% if(sortiesOrganisees is not empty) %}
        <div class = \"row justify-content-center\">
            <div class = \"col-6\">
                {%  for sortie in sortiesOrganisees %}
                <article class=\"card\">
                    <h4>{{ sortie.nom }}</h4>
                    <span>Date : {{ sortie.dateHeureDebut|date('d/m/Y') }}</span>
                    <a href=\"{{ path('sortie_detail', {id : sortie.id }) }}\">Détails</a>
                </article>
                {% endfor %}
            </div>
        </div>
{%  else %}
    <p>Aucune sortie organisée</p>
{% endif %}
    </section>


{% endblock %}
", "user/index.html.twig", "D:\\PHP\\PROJET_SYMFONY\\PROJET\\Projet-Symfony-Sortie\\templates\\user\\index.html.twig");
    }
}
