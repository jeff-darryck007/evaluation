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

/* navBar.html.twig */
class __TwigTemplate_5614b4987d365d099085b6d1439ed18a extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navBar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navBar.html.twig"));

        // line 1
        yield "<!-- NAVBAR MODERNE -->
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
  <div class=\"container\">

    ";
        // line 6
        yield "    <a class=\"navbar-brand mx-auto fw-bold text-center d-lg-none\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Galerie d’Art</a>

    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse justify-content-center\" id=\"navbarNav\">

      ";
        // line 15
        yield "      <ul class=\"navbar-nav mx-auto\">
        <li class=\"nav-item\"><a class=\"nav-link active\" href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"/gallery\">Gallery</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"/about\">About</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"/team\">Team</a></li>
        ";
        // line 20
        if ((((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()) == null) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "type", [], "any", false, false, false, 20) != "admin"))) {
            // line 21
            yield "          <li class=\"nav-item\"><a class=\"nav-link\" href=\"/contact\">Contact</a></li>
        ";
        }
        // line 23
        yield "
        ";
        // line 24
        if (((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()) != null)) {
            // line 25
            yield "          <li class=\"nav-item\"><a class=\"nav-link\" href=\"/profil\">profil</a></li>
        ";
        }
        // line 27
        yield "

      </ul>

      ";
        // line 32
        yield "      <a class=\"navbar-brand d-none d-lg-block mx-3 fw-bold text-center\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Galerie d’Art</a>

      ";
        // line 35
        yield "      <ul class=\"navbar-nav ms-auto\">
        ";
        // line 36
        if (((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()) == null)) {
            // line 37
            yield "          <li class=\"nav-item\"><a class=\"nav-link\" href=\"/register\">Register</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"/login\">Login</a></li>
        ";
        } else {
            // line 40
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "type", [], "any", false, false, false, 40) == "admin")) {
                // line 41
                yield "            <li class=\"nav-item\"><a class=\"nav-link\" href=\"/homeAdmin\">Admin</a></li>
          ";
            }
            // line 43
            yield "          <li class=\"nav-item\"><a class=\"nav-link\" href=\"/logout\">Logout (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "name", [], "any", false, false, false, 43), "html", null, true);
            yield ")</a></li>
        ";
        }
        // line 45
        yield "      </ul>

    </div>
  </div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "navBar.html.twig";
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
        return array (  126 => 45,  120 => 43,  116 => 41,  113 => 40,  108 => 37,  106 => 36,  103 => 35,  97 => 32,  91 => 27,  87 => 25,  85 => 24,  82 => 23,  78 => 21,  76 => 20,  69 => 16,  66 => 15,  54 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- NAVBAR MODERNE -->
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
  <div class=\"container\">

    {# Logo centré sur mobile #}
    <a class=\"navbar-brand mx-auto fw-bold text-center d-lg-none\" href=\"{{ path('app_home') }}\">Galerie d’Art</a>

    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse justify-content-center\" id=\"navbarNav\">

      {# Liens principaux centrés #}
      <ul class=\"navbar-nav mx-auto\">
        <li class=\"nav-item\"><a class=\"nav-link active\" href=\"{{ path('app_home') }}\">Home</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"/gallery\">Gallery</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"/about\">About</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"/team\">Team</a></li>
        {% if user == null or user.type != \"admin\" %}
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"/contact\">Contact</a></li>
        {% endif %}

        {% if user != null %}
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"/profil\">profil</a></li>
        {% endif %}


      </ul>

      {# Logo centré sur desktop #}
      <a class=\"navbar-brand d-none d-lg-block mx-3 fw-bold text-center\" href=\"{{ path('app_home') }}\">Galerie d’Art</a>

      {# Liens Login/Register alignés à droite #}
      <ul class=\"navbar-nav ms-auto\">
        {% if user == null %}
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"/register\">Register</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"/login\">Login</a></li>
        {% else %}
          {% if user.type == \"admin\" %}
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"/homeAdmin\">Admin</a></li>
          {% endif %}
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"/logout\">Logout ({{ user.name }})</a></li>
        {% endif %}
      </ul>

    </div>
  </div>
</nav>
", "navBar.html.twig", "C:\\wamp64\\www\\JEFF-TFE\\evaluation\\evaluation\\templates\\navBar.html.twig");
    }
}
