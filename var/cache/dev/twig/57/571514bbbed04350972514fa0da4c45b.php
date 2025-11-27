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

/* pages/register.html.twig */
class __TwigTemplate_8d2584573ec8ae76a8e1d1e9ae4b5993 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/register.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "
  ";
        // line 5
        yield Twig\Extension\CoreExtension::include($this->env, $context, "navBar.html.twig");
        yield "

  <style>
        body {
            background: linear-gradient(135deg, #0d6efd, #6f42c1);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background: #fff;
            padding: 40px 30px;
            border-radius: 18px;
            max-width: 420px;
            width: 100%;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }

        .toggle-icon {
            cursor: pointer;
            position: absolute;
            right: 12px;
            top: 70%;
            transform: translateY(-50%);
            font-size: 18px;
            color: #777;
        }
    </style>

    <div class=\"login-box\">
        <h3 class=\"text-center fw-bold text-primary mb-3\">Créer un compte</h3>
        <p class=\"text-center text-muted mb-4\">Inscrivez-vous pour commencer</p>

        ";
        // line 40
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_start');
        yield "

            <div class=\"mb-3\">
                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "name", [], "any", false, false, false, 43), 'label');
        yield "
                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "name", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Votre nom complet"]]);
        yield "
            </div>

            <div class=\"mb-3\">
                ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48), 'label');
        yield "
                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "email", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "exemple@mail.com"]]);
        yield "
            </div>

            <div class=\"mb-3 position-relative\">
                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "password", [], "any", false, false, false, 53), "first", [], "any", false, false, false, 53), 'label');
        yield "
                ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "password", [], "any", false, false, false, 54), "first", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control form-control-lg", "id" => "passwordField"]]);
        yield "
                <span id=\"togglePassword\" class=\"toggle-icon\">👁️</span>
            </div>

            <div class=\"mb-3 position-relative\">
                ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "password", [], "any", false, false, false, 59), "second", [], "any", false, false, false, 59), 'label');
        yield "
                ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "password", [], "any", false, false, false, 60), "second", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control form-control-lg", "id" => "passwordField2"]]);
        yield "
                <span id=\"togglePassword2\" class=\"toggle-icon\">👁️</span>
            </div>

            <button type=\"submit\" class=\"btn btn-success btn-lg w-100 mt-2\">
                Créer un compte
            </button>

        ";
        // line 68
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'form_end');
        yield "
    </div>

<script>
    function togglePassword(fieldId, iconId) {
        const field = document.getElementById(fieldId);
        const icon = document.getElementById(iconId);
        icon.addEventListener('click', () => {
            const type = field.type === 'password' ? 'text' : 'password';
            field.type = type;
            icon.textContent = type === 'password' ? '👁️' : '🙈';
        });
    }

    togglePassword('passwordField', 'togglePassword');
    togglePassword('passwordField2', 'togglePassword2');
</script>

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
        return "pages/register.html.twig";
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
        return array (  172 => 68,  161 => 60,  157 => 59,  149 => 54,  145 => 53,  138 => 49,  134 => 48,  127 => 44,  123 => 43,  117 => 40,  79 => 5,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

  {{ include('navBar.html.twig') }}

  <style>
        body {
            background: linear-gradient(135deg, #0d6efd, #6f42c1);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background: #fff;
            padding: 40px 30px;
            border-radius: 18px;
            max-width: 420px;
            width: 100%;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }

        .toggle-icon {
            cursor: pointer;
            position: absolute;
            right: 12px;
            top: 70%;
            transform: translateY(-50%);
            font-size: 18px;
            color: #777;
        }
    </style>

    <div class=\"login-box\">
        <h3 class=\"text-center fw-bold text-primary mb-3\">Créer un compte</h3>
        <p class=\"text-center text-muted mb-4\">Inscrivez-vous pour commencer</p>

        {{ form_start(form) }}

            <div class=\"mb-3\">
                {{ form_label(form.name) }}
                {{ form_widget(form.name, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Votre nom complet'}}) }}
            </div>

            <div class=\"mb-3\">
                {{ form_label(form.email) }}
                {{ form_widget(form.email, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'exemple@mail.com'}}) }}
            </div>

            <div class=\"mb-3 position-relative\">
                {{ form_label(form.password.first) }}
                {{ form_widget(form.password.first, {'attr': {'class': 'form-control form-control-lg', 'id': 'passwordField'}}) }}
                <span id=\"togglePassword\" class=\"toggle-icon\">👁️</span>
            </div>

            <div class=\"mb-3 position-relative\">
                {{ form_label(form.password.second) }}
                {{ form_widget(form.password.second, {'attr': {'class': 'form-control form-control-lg', 'id': 'passwordField2'}}) }}
                <span id=\"togglePassword2\" class=\"toggle-icon\">👁️</span>
            </div>

            <button type=\"submit\" class=\"btn btn-success btn-lg w-100 mt-2\">
                Créer un compte
            </button>

        {{ form_end(form) }}
    </div>

<script>
    function togglePassword(fieldId, iconId) {
        const field = document.getElementById(fieldId);
        const icon = document.getElementById(iconId);
        icon.addEventListener('click', () => {
            const type = field.type === 'password' ? 'text' : 'password';
            field.type = type;
            icon.textContent = type === 'password' ? '👁️' : '🙈';
        });
    }

    togglePassword('passwordField', 'togglePassword');
    togglePassword('passwordField2', 'togglePassword2');
</script>

{% endblock %}
", "pages/register.html.twig", "/home/angel/Vidéos/projet jeff/symfony/templates/pages/register.html.twig");
    }
}
