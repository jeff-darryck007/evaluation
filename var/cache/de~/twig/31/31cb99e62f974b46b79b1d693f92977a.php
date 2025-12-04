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
class __TwigTemplate_9281d4b6598a0f7bdfc3fc79b9121e97 extends Template
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
        yield "<!-- NAVBAR -->
  <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
    <div class=\"container\">
      <a class=\"navbar-brand fw-bold\" href=\"#\">Galerie d’Art</a>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav ms-auto\">
          <li class=\"nav-item\"><a class=\"nav-link active\" href=\"/home\">Home</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"/gallery\">Gallery</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"/about\">About</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"/team\">Team</a></li>
          ";
        // line 14
        if (((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()) == null)) {
            // line 15
            yield "          <li class=\"nav-item\"><a class=\"nav-link\" href=\"/register\">Register</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"/login\">Login</a></li> 
          ";
        }
        // line 18
        yield "          ";
        if (((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()) != null)) {
            // line 19
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "type", [], "any", false, false, false, 19) == "admin")) {
                // line 20
                yield "              <li class=\"nav-item\"><a class=\"nav-link\" href=\"/homeAdmin\">Admin</a></li>
            ";
            }
            // line 22
            yield "          <li class=\"nav-item\"><a class=\"nav-link\" href=\"/logout\">Logout (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), "html", null, true);
            yield ")</a></li>
          ";
        }
        // line 24
        yield "        </ul>
      </div>
    </div>
  </nav>";
        
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
        return array (  86 => 24,  80 => 22,  76 => 20,  73 => 19,  70 => 18,  65 => 15,  63 => 14,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- NAVBAR -->
  <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
    <div class=\"container\">
      <a class=\"navbar-brand fw-bold\" href=\"#\">Galerie d’Art</a>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav ms-auto\">
          <li class=\"nav-item\"><a class=\"nav-link active\" href=\"/home\">Home</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"/gallery\">Gallery</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"/about\">About</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"/team\">Team</a></li>
          {% if user == null %}
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"/register\">Register</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"/login\">Login</a></li> 
          {% endif %}
          {% if user != null %}
            {% if user.type == \"admin\" %}
              <li class=\"nav-item\"><a class=\"nav-link\" href=\"/homeAdmin\">Admin</a></li>
            {% endif %}
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"/logout\">Logout ({{ user.name }})</a></li>
          {% endif %}
        </ul>
      </div>
    </div>
  </nav>", "navBar.html.twig", "/home/angel/Vidéos/projet jeff/symfony/templates/navBar.html.twig");
    }
}
