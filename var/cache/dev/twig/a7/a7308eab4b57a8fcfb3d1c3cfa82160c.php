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

/* pages/contact.html.twig */
class __TwigTemplate_06270044546e8104ed9f2c3e966e9670 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/contact.html.twig"));

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

    <section id=\"contact\" class=\"py-5 mt-5\">
        <div class=\"container\">

            <h2 class=\"text-center mb-4 fw-bold\">Contactez-nous</h2>

            ";
        // line 13
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", ["error"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            yield "                <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["success"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            yield "                <div class=\"alert alert-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "
            <div class=\"row justify-content-center\">
                <div class=\"col-md-8\">

                    <form method=\"POST\" action=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"shadow p-4 rounded bg-light\">

                        <div class=\"mb-3\">
                            <label for=\"name\" class=\"form-label\">Votre nom</label>
                            <input type=\"text\" name=\"name\" id=\"name\" class=\"form-control\" required>
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"email\" class=\"form-label\">Votre email</label>
                            <input type=\"email\" name=\"email\" id=\"email\" class=\"form-control\" required>
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"subject\" class=\"form-label\">Sujet</label>
                            <input type=\"text\" name=\"subject\" id=\"subject\" class=\"form-control\" required>
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"message\" class=\"form-label\">Message</label>
                            <textarea name=\"message\" id=\"message\" rows=\"6\" class=\"form-control\" required></textarea>
                        </div>

                        ";
        // line 47
        yield "                        ";
        if (array_key_exists("recaptcha_site_key", $context)) {
            // line 48
            yield "                            <div class=\"g-recaptcha mb-3\" data-sitekey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 48, $this->source); })()), "html", null, true);
            yield "\"></div>
                        ";
        }
        // line 50
        yield "
                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn btn-primary px-4\">Envoyer</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </section>

    ";
        // line 63
        yield Twig\Extension\CoreExtension::include($this->env, $context, "footer.html.twig");
        yield "

    <!-- Script Google reCAPTCHA -->
    <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>

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
        return "pages/contact.html.twig";
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
        return array (  174 => 63,  159 => 50,  153 => 48,  150 => 47,  125 => 24,  119 => 20,  110 => 18,  106 => 17,  103 => 16,  94 => 14,  89 => 13,  79 => 5,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    {{ include('navBar.html.twig') }}

    <section id=\"contact\" class=\"py-5 mt-5\">
        <div class=\"container\">

            <h2 class=\"text-center mb-4 fw-bold\">Contactez-nous</h2>

            {# Messages flash #}
            {% for message in app.flashes('error') %}
                <div class=\"alert alert-danger\">{{ message }}</div>
            {% endfor %}

            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success\">{{ message }}</div>
            {% endfor %}

            <div class=\"row justify-content-center\">
                <div class=\"col-md-8\">

                    <form method=\"POST\" action=\"{{ path('app_contact') }}\" class=\"shadow p-4 rounded bg-light\">

                        <div class=\"mb-3\">
                            <label for=\"name\" class=\"form-label\">Votre nom</label>
                            <input type=\"text\" name=\"name\" id=\"name\" class=\"form-control\" required>
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"email\" class=\"form-label\">Votre email</label>
                            <input type=\"email\" name=\"email\" id=\"email\" class=\"form-control\" required>
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"subject\" class=\"form-label\">Sujet</label>
                            <input type=\"text\" name=\"subject\" id=\"subject\" class=\"form-control\" required>
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"message\" class=\"form-label\">Message</label>
                            <textarea name=\"message\" id=\"message\" rows=\"6\" class=\"form-control\" required></textarea>
                        </div>

                        {# GOOGLE RECAPTCHA #}
                        {% if recaptcha_site_key is defined %}
                            <div class=\"g-recaptcha mb-3\" data-sitekey=\"{{ recaptcha_site_key }}\"></div>
                        {% endif %}

                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn btn-primary px-4\">Envoyer</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </section>

    {{ include('footer.html.twig') }}

    <!-- Script Google reCAPTCHA -->
    <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>

{% endblock %}
", "pages/contact.html.twig", "C:\\wamp64\\www\\JEFF-TFE\\evaluation\\evaluation\\templates\\pages\\contact.html.twig");
    }
}
