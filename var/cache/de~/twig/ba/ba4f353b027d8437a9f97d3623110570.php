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

/* pages/home.html.twig */
class __TwigTemplate_907bb9102c6ee53da0e6cd50d9d27af2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

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

 <!-- HERO AVEC CARROUSEL -->
  <section class=\"hero\">
    <div id=\"heroCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
      <div class=\"carousel-inner\">
        <div class=\"carousel-item active\">
          <img src=\"https://images.unsplash.com/photo-1517694712202-14dd9538aa97\" class=\"d-block w-100\" alt=\"Art 1\">
        </div>
        <div class=\"carousel-item\">
          <img src=\"https://images.unsplash.com/photo-1503264116251-35a269479413\" class=\"d-block w-100\" alt=\"Art 2\">
        </div>
        <div class=\"carousel-item\">
          <img src=\"https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9\" class=\"d-block w-100\" alt=\"Art 3\">
        </div>
      </div>
    </div>

    <div class=\"hero-content\"> 
      <h1>Explorez la Galerie</h1>
      <p>Découvrez des œuvres inspirantes d’artistes passionnés</p>
      <a href=\"/gallery\" class=\"btn btn-light btn-lg mt-3\">Voir les œuvres</a>
    </div>
  </section>



  <!-- À PROPOS -->
  <section class=\"bg-light py-5\">
    <div class=\"container text-center\">
      <h2 class=\"fw-bold mb-4\">À propos</h2>
      <p class=\"lead\">Notre galerie met en avant des artistes talentueux et des œuvres inspirantes.  
      Ce site a pour vocation de rendre l’art accessible à tous, de favoriser la découverte et de partager la passion de la création.</p>
    </div>
  </section>

  ";
        // line 41
        yield Twig\Extension\CoreExtension::include($this->env, $context, "footer.html.twig");
        yield "

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
        return "pages/home.html.twig";
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
        return array (  118 => 41,  79 => 5,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

  {{ include('navBar.html.twig') }}

 <!-- HERO AVEC CARROUSEL -->
  <section class=\"hero\">
    <div id=\"heroCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
      <div class=\"carousel-inner\">
        <div class=\"carousel-item active\">
          <img src=\"https://images.unsplash.com/photo-1517694712202-14dd9538aa97\" class=\"d-block w-100\" alt=\"Art 1\">
        </div>
        <div class=\"carousel-item\">
          <img src=\"https://images.unsplash.com/photo-1503264116251-35a269479413\" class=\"d-block w-100\" alt=\"Art 2\">
        </div>
        <div class=\"carousel-item\">
          <img src=\"https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9\" class=\"d-block w-100\" alt=\"Art 3\">
        </div>
      </div>
    </div>

    <div class=\"hero-content\"> 
      <h1>Explorez la Galerie</h1>
      <p>Découvrez des œuvres inspirantes d’artistes passionnés</p>
      <a href=\"/gallery\" class=\"btn btn-light btn-lg mt-3\">Voir les œuvres</a>
    </div>
  </section>



  <!-- À PROPOS -->
  <section class=\"bg-light py-5\">
    <div class=\"container text-center\">
      <h2 class=\"fw-bold mb-4\">À propos</h2>
      <p class=\"lead\">Notre galerie met en avant des artistes talentueux et des œuvres inspirantes.  
      Ce site a pour vocation de rendre l’art accessible à tous, de favoriser la découverte et de partager la passion de la création.</p>
    </div>
  </section>

  {{ include('footer.html.twig') }}

{% endblock %}
", "pages/home.html.twig", "/home/angel/Vidéos/projet jeff/symfony/templates/pages/home.html.twig");
    }
}
