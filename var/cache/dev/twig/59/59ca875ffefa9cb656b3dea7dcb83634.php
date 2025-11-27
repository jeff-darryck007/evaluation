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

/* pages/team.html.twig */
class __TwigTemplate_db925d1406311b90252e2db9b06575ee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/team.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/team.html.twig"));

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
    /* Bannière */
    .hero-team {
      background: url('https://images.unsplash.com/photo-1529101091764-c3526daf38fe') center/cover no-repeat;
      color: white;
      text-align: center;
      padding: 120px 20px;
      position: relative;
    }

    .hero-team::after {
      content: \"\";
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.5);
    }

    .hero-team .content {
      position: relative;
      z-index: 2;
    }

    /* Cartes membres */
    .team-card {
      border: none;
      background: white;
      text-align: center;
      border-radius: 15px;
      overflow: hidden;
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .team-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 8px 16px rgba(0,0,0,0.15);
    }

    .team-card img {
      width: 100%;
      height: 280px;
      object-fit: cover;
    }

    .team-card .card-body {
      padding: 20px;
    }

    .social-icons a {
      color: #555;
      margin: 0 8px;
      transition: color 0.3s ease;
    }

    .social-icons a:hover {
      color: #111;
    }

    /* Section vision */
    .vision-section {
      background-color: #f8f9fa;
      padding: 60px 0;
      text-align: center;
    }

    .vision-section p {
      color: #555;
    }

    /* Section CTA */
    .cta-section {
      background-color: #111;
      color: white;
      text-align: center;
      padding: 60px 0;
    }
  </style>


    <!-- Bannière -->
  <section class=\"hero-team\">
    <div class=\"content\">
      <h1 class=\"fw-bold display-5\">Notre équipe</h1>
      <p class=\"lead\">Des passionnés unis par l’amour de l’art et du numérique.</p>
    </div>
  </section>

  <!-- Équipe principale -->
  <section class=\"container py-5\">
    <div class=\"text-center mb-5\">
      <h2 class=\"fw-bold\">Rencontrez notre équipe</h2>
      <p class=\"text-muted\">Chaque membre apporte son talent unique pour faire vivre notre galerie d’art en ligne.</p>
    </div>

    <div class=\"row g-4\">
      <div class=\"col-lg-3 col-md-6\">
        <div class=\"team-card\">
          <img src=\"https://randomuser.me/api/portraits/women/40.jpg\" alt=\"Membre 1\">
          <div class=\"card-body\">
            <h5 class=\"fw-semibold\">Sophie Martin</h5>
            <p class=\"text-muted mb-2\">Directrice artistique</p>
            <div class=\"social-icons\">
              <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
              <a href=\"#\"><i class=\"bi bi-instagram\"></i></a>
              <a href=\"#\"><i class=\"bi bi-twitter\"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class=\"col-lg-3 col-md-6\">
        <div class=\"team-card\">
          <img src=\"https://randomuser.me/api/portraits/men/50.jpg\" alt=\"Membre 2\">
          <div class=\"card-body\">
            <h5 class=\"fw-semibold\">Julien Caron</h5>
            <p class=\"text-muted mb-2\">Curateur d’exposition</p>
            <div class=\"social-icons\">
              <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
              <a href=\"#\"><i class=\"bi bi-facebook\"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class=\"col-lg-3 col-md-6\">
        <div class=\"team-card\">
          <img src=\"https://randomuser.me/api/portraits/women/55.jpg\" alt=\"Membre 3\">
          <div class=\"card-body\">
            <h5 class=\"fw-semibold\">Claire Dupont</h5>
            <p class=\"text-muted mb-2\">Responsable communication</p>
            <div class=\"social-icons\">
              <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
              <a href=\"#\"><i class=\"bi bi-instagram\"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class=\"col-lg-3 col-md-6\">
        <div class=\"team-card\">
          <img src=\"https://randomuser.me/api/portraits/men/35.jpg\" alt=\"Membre 4\">
          <div class=\"card-body\">
            <h5 class=\"fw-semibold\">Lucas Bernard</h5>
            <p class=\"text-muted mb-2\">Développeur Web</p>
            <div class=\"social-icons\">
              <a href=\"#\"><i class=\"bi bi-github\"></i></a>
              <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Vision / Valeurs -->
  <section class=\"vision-section\">
    <div class=\"container\">
      <h2 class=\"fw-bold mb-4\">Notre philosophie</h2>
      <p class=\"lead mb-4\">Nous croyons que l’art et la technologie peuvent coexister harmonieusement pour inspirer le monde.</p>
      <p>Notre équipe combine créativité, innovation et passion pour offrir une expérience artistique immersive et accessible à tous.</p>
    </div>
  </section>

  <!-- CTA -->
 
  ";
        // line 173
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
        return "pages/team.html.twig";
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
        return array (  250 => 173,  79 => 5,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

  {{ include('navBar.html.twig') }}

  <style>
    /* Bannière */
    .hero-team {
      background: url('https://images.unsplash.com/photo-1529101091764-c3526daf38fe') center/cover no-repeat;
      color: white;
      text-align: center;
      padding: 120px 20px;
      position: relative;
    }

    .hero-team::after {
      content: \"\";
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.5);
    }

    .hero-team .content {
      position: relative;
      z-index: 2;
    }

    /* Cartes membres */
    .team-card {
      border: none;
      background: white;
      text-align: center;
      border-radius: 15px;
      overflow: hidden;
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .team-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 8px 16px rgba(0,0,0,0.15);
    }

    .team-card img {
      width: 100%;
      height: 280px;
      object-fit: cover;
    }

    .team-card .card-body {
      padding: 20px;
    }

    .social-icons a {
      color: #555;
      margin: 0 8px;
      transition: color 0.3s ease;
    }

    .social-icons a:hover {
      color: #111;
    }

    /* Section vision */
    .vision-section {
      background-color: #f8f9fa;
      padding: 60px 0;
      text-align: center;
    }

    .vision-section p {
      color: #555;
    }

    /* Section CTA */
    .cta-section {
      background-color: #111;
      color: white;
      text-align: center;
      padding: 60px 0;
    }
  </style>


    <!-- Bannière -->
  <section class=\"hero-team\">
    <div class=\"content\">
      <h1 class=\"fw-bold display-5\">Notre équipe</h1>
      <p class=\"lead\">Des passionnés unis par l’amour de l’art et du numérique.</p>
    </div>
  </section>

  <!-- Équipe principale -->
  <section class=\"container py-5\">
    <div class=\"text-center mb-5\">
      <h2 class=\"fw-bold\">Rencontrez notre équipe</h2>
      <p class=\"text-muted\">Chaque membre apporte son talent unique pour faire vivre notre galerie d’art en ligne.</p>
    </div>

    <div class=\"row g-4\">
      <div class=\"col-lg-3 col-md-6\">
        <div class=\"team-card\">
          <img src=\"https://randomuser.me/api/portraits/women/40.jpg\" alt=\"Membre 1\">
          <div class=\"card-body\">
            <h5 class=\"fw-semibold\">Sophie Martin</h5>
            <p class=\"text-muted mb-2\">Directrice artistique</p>
            <div class=\"social-icons\">
              <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
              <a href=\"#\"><i class=\"bi bi-instagram\"></i></a>
              <a href=\"#\"><i class=\"bi bi-twitter\"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class=\"col-lg-3 col-md-6\">
        <div class=\"team-card\">
          <img src=\"https://randomuser.me/api/portraits/men/50.jpg\" alt=\"Membre 2\">
          <div class=\"card-body\">
            <h5 class=\"fw-semibold\">Julien Caron</h5>
            <p class=\"text-muted mb-2\">Curateur d’exposition</p>
            <div class=\"social-icons\">
              <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
              <a href=\"#\"><i class=\"bi bi-facebook\"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class=\"col-lg-3 col-md-6\">
        <div class=\"team-card\">
          <img src=\"https://randomuser.me/api/portraits/women/55.jpg\" alt=\"Membre 3\">
          <div class=\"card-body\">
            <h5 class=\"fw-semibold\">Claire Dupont</h5>
            <p class=\"text-muted mb-2\">Responsable communication</p>
            <div class=\"social-icons\">
              <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
              <a href=\"#\"><i class=\"bi bi-instagram\"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class=\"col-lg-3 col-md-6\">
        <div class=\"team-card\">
          <img src=\"https://randomuser.me/api/portraits/men/35.jpg\" alt=\"Membre 4\">
          <div class=\"card-body\">
            <h5 class=\"fw-semibold\">Lucas Bernard</h5>
            <p class=\"text-muted mb-2\">Développeur Web</p>
            <div class=\"social-icons\">
              <a href=\"#\"><i class=\"bi bi-github\"></i></a>
              <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Vision / Valeurs -->
  <section class=\"vision-section\">
    <div class=\"container\">
      <h2 class=\"fw-bold mb-4\">Notre philosophie</h2>
      <p class=\"lead mb-4\">Nous croyons que l’art et la technologie peuvent coexister harmonieusement pour inspirer le monde.</p>
      <p>Notre équipe combine créativité, innovation et passion pour offrir une expérience artistique immersive et accessible à tous.</p>
    </div>
  </section>

  <!-- CTA -->
 
  {{ include('footer.html.twig') }}

{% endblock %}
", "pages/team.html.twig", "/home/angel/Vidéos/projet jeff/symfony/templates/pages/team.html.twig");
    }
}
