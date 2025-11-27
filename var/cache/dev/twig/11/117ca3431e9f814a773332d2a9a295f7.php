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

/* pages/gallery.html.twig */
class __TwigTemplate_1cb8031cbbcba8b73987f43da8a1de79 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/gallery.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/gallery.html.twig"));

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


  <!-- GALERIE -->
  <section id=\"galerie\" class=\"py-5 mt-5\">
    <div class=\"container\">
      <h2 class=\"text-center mb-4 fw-bold\">Notre gallerie</h2>
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
      <div class=\"row g-4 mt-3\">
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

  ";
        // line 79
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
        return "pages/gallery.html.twig";
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
        return array (  156 => 79,  79 => 5,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

  {{ include('navBar.html.twig') }}


  <!-- GALERIE -->
  <section id=\"galerie\" class=\"py-5 mt-5\">
    <div class=\"container\">
      <h2 class=\"text-center mb-4 fw-bold\">Notre gallerie</h2>
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
      <div class=\"row g-4 mt-3\">
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

  {{ include('footer.html.twig') }}

{% endblock %}
", "pages/gallery.html.twig", "/home/angel/Vidéos/projet jeff/symfony/templates/pages/gallery.html.twig");
    }
}
