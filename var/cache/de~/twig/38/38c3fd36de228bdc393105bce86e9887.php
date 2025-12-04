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
class __TwigTemplate_7650ba162631d007e2d0de43810f7dc6 extends Template
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
      <a href=\"#galerie\" class=\"btn btn-light btn-lg mt-3\">Voir les œuvres</a>
    </div>
  </section>

  <!-- CATEGORIES -->
  <section id=\"categories\" class=\"py-5 bg-light\">
    <div class=\"container\">
      <h2 class=\"text-center mb-4 fw-bold\">Nos Catégories</h2>
      <div class=\"row g-4\">
        <div class=\"col-md-4\">
          <div class=\"card border-0 shadow-sm text-center\">
            <div class=\"card-body\">
              <h5 class=\"card-title fw-bold\">Peintures</h5>
              <p class=\"card-text\">Découvrez une collection unique de peintures modernes et classiques.</p>
              <a href=\"#\" class=\"btn btn-outline-dark btn-sm\">Explorer</a>
            </div>
          </div>
        </div>
        <div class=\"col-md-4\">
          <div class=\"card border-0 shadow-sm text-center\">
            <div class=\"card-body\">
              <h5 class=\"card-title fw-bold\">Sculptures</h5>
              <p class=\"card-text\">Des créations artistiques en volume alliant matière et émotion.</p>
              <a href=\"#\" class=\"btn btn-outline-dark btn-sm\">Explorer</a>
            </div>
          </div>
        </div>
        <div class=\"col-md-4\">
          <div class=\"card border-0 shadow-sm text-center\">
            <div class=\"card-body\">
              <h5 class=\"card-title fw-bold\">Photographies</h5>
              <p class=\"card-text\">Un regard contemporain sur le monde à travers la lentille d’artistes.</p>
              <a href=\"#\" class=\"btn btn-outline-dark btn-sm\">Explorer</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- GALERIE -->
  <section id=\"galerie\" class=\"py-5\">
    <div class=\"container\">
      <h2 class=\"text-center mb-4 fw-bold\">Nos Categories</h2>
      <div class=\"row g-4\">
        <div class=\"col-md-4\">
          <div class=\"card art-card shadow-sm\">
            <img src=\"https://images.unsplash.com/photo-1504198458649-3128b932f49b\" class=\"card-img-top\" alt=\"Œuvre 1\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Paysage lumineux</h5>
              <p class=\"card-text\">Une peinture moderne exprimant la liberté et la lumière.</p>
              <a href=\"#\" class=\"btn btn-outline-dark btn-sm\">Voir détails</a>
            </div>
          </div>
        </div>
        <div class=\"col-md-4\">
          <div class=\"card art-card shadow-sm\">
            <img src=\"https://images.unsplash.com/photo-1535905748047-14b2415c3bba\" class=\"card-img-top\" alt=\"Œuvre 2\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Portrait abstrait</h5>
              <p class=\"card-text\">Une fusion d’émotions et de couleurs expressives.</p>
              <a href=\"#\" class=\"btn btn-outline-dark btn-sm\">Voir détails</a>
            </div>
          </div>
        </div>
        <div class=\"col-md-4\">
          <div class=\"card art-card shadow-sm\">
            <img src=\"https://images.unsplash.com/photo-1579783902554-4e4011c1e6e0\" class=\"card-img-top\" alt=\"Œuvre 3\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Nature silencieuse</h5>
              <p class=\"card-text\">Un regard poétique sur la beauté du quotidien.</p>
              <a href=\"#\" class=\"btn btn-outline-dark btn-sm\">Voir détails</a>
            </div>
          </div>
        </div>
      </div>
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
        // line 114
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
        return array (  191 => 114,  79 => 5,  76 => 4,  63 => 3,  40 => 1,);
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
      <a href=\"#galerie\" class=\"btn btn-light btn-lg mt-3\">Voir les œuvres</a>
    </div>
  </section>

  <!-- CATEGORIES -->
  <section id=\"categories\" class=\"py-5 bg-light\">
    <div class=\"container\">
      <h2 class=\"text-center mb-4 fw-bold\">Nos Catégories</h2>
      <div class=\"row g-4\">
        <div class=\"col-md-4\">
          <div class=\"card border-0 shadow-sm text-center\">
            <div class=\"card-body\">
              <h5 class=\"card-title fw-bold\">Peintures</h5>
              <p class=\"card-text\">Découvrez une collection unique de peintures modernes et classiques.</p>
              <a href=\"#\" class=\"btn btn-outline-dark btn-sm\">Explorer</a>
            </div>
          </div>
        </div>
        <div class=\"col-md-4\">
          <div class=\"card border-0 shadow-sm text-center\">
            <div class=\"card-body\">
              <h5 class=\"card-title fw-bold\">Sculptures</h5>
              <p class=\"card-text\">Des créations artistiques en volume alliant matière et émotion.</p>
              <a href=\"#\" class=\"btn btn-outline-dark btn-sm\">Explorer</a>
            </div>
          </div>
        </div>
        <div class=\"col-md-4\">
          <div class=\"card border-0 shadow-sm text-center\">
            <div class=\"card-body\">
              <h5 class=\"card-title fw-bold\">Photographies</h5>
              <p class=\"card-text\">Un regard contemporain sur le monde à travers la lentille d’artistes.</p>
              <a href=\"#\" class=\"btn btn-outline-dark btn-sm\">Explorer</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- GALERIE -->
  <section id=\"galerie\" class=\"py-5\">
    <div class=\"container\">
      <h2 class=\"text-center mb-4 fw-bold\">Nos Categories</h2>
      <div class=\"row g-4\">
        <div class=\"col-md-4\">
          <div class=\"card art-card shadow-sm\">
            <img src=\"https://images.unsplash.com/photo-1504198458649-3128b932f49b\" class=\"card-img-top\" alt=\"Œuvre 1\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Paysage lumineux</h5>
              <p class=\"card-text\">Une peinture moderne exprimant la liberté et la lumière.</p>
              <a href=\"#\" class=\"btn btn-outline-dark btn-sm\">Voir détails</a>
            </div>
          </div>
        </div>
        <div class=\"col-md-4\">
          <div class=\"card art-card shadow-sm\">
            <img src=\"https://images.unsplash.com/photo-1535905748047-14b2415c3bba\" class=\"card-img-top\" alt=\"Œuvre 2\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Portrait abstrait</h5>
              <p class=\"card-text\">Une fusion d’émotions et de couleurs expressives.</p>
              <a href=\"#\" class=\"btn btn-outline-dark btn-sm\">Voir détails</a>
            </div>
          </div>
        </div>
        <div class=\"col-md-4\">
          <div class=\"card art-card shadow-sm\">
            <img src=\"https://images.unsplash.com/photo-1579783902554-4e4011c1e6e0\" class=\"card-img-top\" alt=\"Œuvre 3\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Nature silencieuse</h5>
              <p class=\"card-text\">Un regard poétique sur la beauté du quotidien.</p>
              <a href=\"#\" class=\"btn btn-outline-dark btn-sm\">Voir détails</a>
            </div>
          </div>
        </div>
      </div>
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
