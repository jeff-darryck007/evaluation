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

/* pages/homeAdmin.html.twig */
class __TwigTemplate_29a76a59557ba4319d936281b88fda5e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/homeAdmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/homeAdmin.html.twig"));

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

        yield "Espace Administrateur";
        
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
        yield "<div style=\"display:flex; min-height:100vh; font-family:sans-serif;\">

    <!-- Sidebar -->
    <aside style=\"width:250px; background:#1e293b; color:white; padding:20px;\">
        <h2>Menu Admin</h2>
        <ul style=\"list-style:none; padding:0;\">
            <li><a href=\"#\" style=\"color:white; text-decoration:none;\">🏠 Tableau de bord</a></li>
            <li><a href=\"#\" style=\"color:white; text-decoration:none;\">🎨 Peintures</a></li>
            <li><a href=\"#\" style=\"color:white; text-decoration:none;\">🗂️ Catégories</a></li>
            <li><a href=\"#\" style=\"color:white; text-decoration:none;\">🖌️ Techniques</a></li>
        </ul>
    </aside>

    <!-- Contenu principal -->
    <main style=\"flex:1; padding:30px; background:#f1f5f9;\">
        <h1>Bienvenue dans l’espace d’administration 👋</h1>
        <a href=\"/\" style=\"background:#2563eb; color:white; padding:10px 20px; border-radius:6px; text-decoration:none;\">Retour au site</a>

        <h2>Catégories</h2>
        <ul>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 27
            yield "                <li>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "nom", [], "any", false, false, false, 27), "html", null, true);
            yield "</li>
            ";
            $context['_iterated'] = true;
        }
        // line 28
        if (!$context['_iterated']) {
            // line 29
            yield "                <li>Aucune catégorie disponible</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "        </ul>

        <h2>Techniques</h2>
        <ul>
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["techniques"]) || array_key_exists("techniques", $context) ? $context["techniques"] : (function () { throw new RuntimeError('Variable "techniques" does not exist.', 35, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["technique"]) {
            // line 36
            yield "                <li>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technique"], "nom", [], "any", false, false, false, 36), "html", null, true);
            yield "</li>
            ";
            $context['_iterated'] = true;
        }
        // line 37
        if (!$context['_iterated']) {
            // line 38
            yield "                <li>Aucune technique disponible</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['technique'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "        </ul>

        <p>Contrôleur : <strong>";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 42, $this->source); })()), "html", null, true);
        yield "</strong></p>
        <p>Date : <strong>";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y H:i"), "html", null, true);
        yield "</strong></p>
    </main>

</div>
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
        return "pages/homeAdmin.html.twig";
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
        return array (  178 => 43,  174 => 42,  170 => 40,  163 => 38,  161 => 37,  154 => 36,  149 => 35,  143 => 31,  136 => 29,  134 => 28,  127 => 27,  122 => 26,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Espace Administrateur{% endblock %}

{% block body %}
<div style=\"display:flex; min-height:100vh; font-family:sans-serif;\">

    <!-- Sidebar -->
    <aside style=\"width:250px; background:#1e293b; color:white; padding:20px;\">
        <h2>Menu Admin</h2>
        <ul style=\"list-style:none; padding:0;\">
            <li><a href=\"#\" style=\"color:white; text-decoration:none;\">🏠 Tableau de bord</a></li>
            <li><a href=\"#\" style=\"color:white; text-decoration:none;\">🎨 Peintures</a></li>
            <li><a href=\"#\" style=\"color:white; text-decoration:none;\">🗂️ Catégories</a></li>
            <li><a href=\"#\" style=\"color:white; text-decoration:none;\">🖌️ Techniques</a></li>
        </ul>
    </aside>

    <!-- Contenu principal -->
    <main style=\"flex:1; padding:30px; background:#f1f5f9;\">
        <h1>Bienvenue dans l’espace d’administration 👋</h1>
        <a href=\"/\" style=\"background:#2563eb; color:white; padding:10px 20px; border-radius:6px; text-decoration:none;\">Retour au site</a>

        <h2>Catégories</h2>
        <ul>
            {% for category in categories %}
                <li>{{ category.nom }}</li>
            {% else %}
                <li>Aucune catégorie disponible</li>
            {% endfor %}
        </ul>

        <h2>Techniques</h2>
        <ul>
            {% for technique in techniques %}
                <li>{{ technique.nom }}</li>
            {% else %}
                <li>Aucune technique disponible</li>
            {% endfor %}
        </ul>

        <p>Contrôleur : <strong>{{ controller_name }}</strong></p>
        <p>Date : <strong>{{ \"now\"|date(\"d/m/Y H:i\") }}</strong></p>
    </main>

</div>
{% endblock %}
", "pages/homeAdmin.html.twig", "/home/angel/Vidéos/projet jeff/symfony/templates/pages/homeAdmin.html.twig");
    }
}
