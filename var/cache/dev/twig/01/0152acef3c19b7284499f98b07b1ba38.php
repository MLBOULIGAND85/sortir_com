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
class __TwigTemplate_e13a7c38d11fab03ac58b6247bd58bf4 extends Template
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
    <h1>Profil</h1>
    <div class=\"imgProfil\">
        <img src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "photo", [], "any", false, false, false, 13))), "html", null, true);
        yield "\" alt=\"logo\">
    </div>
<section class=\"\">
         <div class = \"row justify-content-center\">
             <div class = \"col-6\">

               ";
        // line 19
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 19, $this->source); })()), 'form_start');
        yield "
                 <input type=\"hidden\" name=\"_csrf_token\" data-controller=\"csrf-protection\" value=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
                 ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 21, $this->source); })()), "_token", [], "any", false, false, false, 21), 'row');
        yield "
                 ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 22, $this->source); })()), "pseudo", [], "any", false, false, false, 22), 'row');
        yield "
                ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), 'row');
        yield "
                ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 24, $this->source); })()), "prenom", [], "any", false, false, false, 24), 'row');
        yield "
                ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 25, $this->source); })()), "email", [], "any", false, false, false, 25), 'row');
        yield "
                ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 26, $this->source); })()), "telephone", [], "any", false, false, false, 26), 'row');
        yield "
                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 27, $this->source); })()), "campus", [], "any", false, false, false, 27), 'row');
        yield "
                ";
        // line 28
        if (((isset($context["isModified"]) || array_key_exists("isModified", $context) ? $context["isModified"] : (function () { throw new RuntimeError('Variable "isModified" does not exist.', 28, $this->source); })()) == true)) {
            // line 29
            yield "                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 29, $this->source); })()), "plainPassword", [], "any", false, false, false, 29), 'row');
            yield "
                    ";
            // line 30
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 30, $this->source); })()), "photo", [], "any", false, false, false, 30), 'row');
            yield "
                ";
        }
        // line 32
        yield "
                ";
        // line 33
        if (((isset($context["isModified"]) || array_key_exists("isModified", $context) ? $context["isModified"] : (function () { throw new RuntimeError('Variable "isModified" does not exist.', 33, $this->source); })()) == true)) {
            // line 34
            yield "                    <div class=\"btn-position\">
                        ";
            // line 35
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 35, $this->source); })()), "submit", [], "any", false, false, false, 35), 'row');
            yield "
                    </div>
                    ";
            // line 37
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 37, $this->source); })()), 'form_end', ["render_rest" => false]);
            yield "
                ";
        }
        // line 39
        yield "
                ";
        // line 40
        if ((((isset($context["isModified"]) || array_key_exists("isModified", $context) ? $context["isModified"] : (function () { throw new RuntimeError('Variable "isModified" does not exist.', 40, $this->source); })()) == false) && ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")))) {
            // line 41
            yield "                    <div class=\"btn-position\">
                        <button type=\"button\" class=\"btn btn-option\"> <a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\"> Modifier </a> </button>
                    </div>
                    ";
            // line 44
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 44, $this->source); })()), 'form_end', ["render_rest" => false]);
            yield "
                ";
        }
        // line 46
        yield "
                ";
        // line 47
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 48
            yield "                    <div class=\"btn-position\">
                        <button type=\"button\" class=\"btn btn-option\"> <a href=\"";
            // line 49
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_list");
            yield "\"> <strong> GESTION DES UTILISATEURS </strong></a> </button>
                    </div>
                ";
        }
        // line 52
        yield "            </div>
        </div>
    </section>

    <section class=\"\">
        <h4>Sorties organisées : </h4>
        ";
        // line 58
        if ((($tmp = (!Twig\Extension\CoreExtension::testEmpty((isset($context["sortiesOrganisees"]) || array_key_exists("sortiesOrganisees", $context) ? $context["sortiesOrganisees"] : (function () { throw new RuntimeError('Variable "sortiesOrganisees" does not exist.', 58, $this->source); })())))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "        <div class = \"row justify-content-center\">
            <div class = \"col-6\">
                ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sortiesOrganisees"]) || array_key_exists("sortiesOrganisees", $context) ? $context["sortiesOrganisees"] : (function () { throw new RuntimeError('Variable "sortiesOrganisees" does not exist.', 61, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["sortie"]) {
                // line 62
                yield "                <article class=\"card-profil\">
                    <h4>";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "nom", [], "any", false, false, false, 63), "html", null, true);
                yield "</h4>
                    <span>Date : ";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "dateHeureDebut", [], "any", false, false, false, 64), "d/m/Y"), "html", null, true);
                yield "</span>
                    <a href=\"";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sortie"], "id", [], "any", false, false, false, 65)]), "html", null, true);
                yield "\">Détails</a>
                </article>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['sortie'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            yield "            </div>
        </div>
";
        } else {
            // line 71
            yield "    <p>Aucune sortie organisée</p>
";
        }
        // line 73
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
        return array (  285 => 73,  281 => 71,  276 => 68,  267 => 65,  263 => 64,  259 => 63,  256 => 62,  252 => 61,  248 => 59,  246 => 58,  238 => 52,  232 => 49,  229 => 48,  227 => 47,  224 => 46,  219 => 44,  214 => 42,  211 => 41,  209 => 40,  206 => 39,  201 => 37,  196 => 35,  193 => 34,  191 => 33,  188 => 32,  183 => 30,  178 => 29,  176 => 28,  172 => 27,  168 => 26,  164 => 25,  160 => 24,  156 => 23,  152 => 22,  148 => 21,  144 => 20,  140 => 19,  131 => 13,  126 => 10,  113 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"../../assets/css/style.css\">
{% endblock %}

{% block body %}

    <h1>Profil</h1>
    <div class=\"imgProfil\">
        <img src=\"{{ asset('uploads/photos/'~user.photo) }}\" alt=\"logo\">
    </div>
<section class=\"\">
         <div class = \"row justify-content-center\">
             <div class = \"col-6\">

               {{ form_start(user_form) }}
                 <input type=\"hidden\" name=\"_csrf_token\" data-controller=\"csrf-protection\" value=\"{{ csrf_token('authenticate') }}\">
                 {{ form_row(user_form._token) }}
                 {{ form_row(user_form.pseudo) }}
                {{ form_row(user_form.nom) }}
                {{ form_row(user_form.prenom) }}
                {{ form_row(user_form.email) }}
                {{ form_row(user_form.telephone) }}
                {{ form_row(user_form.campus) }}
                {% if isModified == true %}
                    {{ form_row(user_form.plainPassword) }}
                    {{ form_row(user_form.photo) }}
                {% endif %}

                {% if isModified == true %}
                    <div class=\"btn-position\">
                        {{ form_row(user_form.submit) }}
                    </div>
                    {{ form_end(user_form,{render_rest: false}) }}
                {% endif %}

                {% if isModified == false and (app.user.id == user.id or is_granted('ROLE_ADMIN'))  %}
                    <div class=\"btn-position\">
                        <button type=\"button\" class=\"btn btn-option\"> <a href=\"{{ path('app_user_update',{id: user.id}) }}\"> Modifier </a> </button>
                    </div>
                    {{ form_end(user_form,{render_rest: false}) }}
                {% endif %}

                {% if is_granted('IS_AUTHENTICATED') and is_granted('ROLE_ADMIN') %}
                    <div class=\"btn-position\">
                        <button type=\"button\" class=\"btn btn-option\"> <a href=\"{{ path('admin_user_list') }}\"> <strong> GESTION DES UTILISATEURS </strong></a> </button>
                    </div>
                {% endif %}
            </div>
        </div>
    </section>

    <section class=\"\">
        <h4>Sorties organisées : </h4>
        {% if(sortiesOrganisees is not empty) %}
        <div class = \"row justify-content-center\">
            <div class = \"col-6\">
                {%  for sortie in sortiesOrganisees %}
                <article class=\"card-profil\">
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
", "user/index.html.twig", "C:\\PHP\\symfony\\PROJET_SYMFONY\\PROJET\\Projet-Symfony-Sortie\\templates\\user\\index.html.twig");
    }
}
