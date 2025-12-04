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
class __TwigTemplate_94ccff67f983ee12274d399757123dfc extends Template
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

      <br>
       
      <h2 class=\"text-center mb-4 fw-bold\">Notre galerie</h2>

      <div class=\"row mb-4 justify-content-center align-items-center\">
          <div class=\"col-md-6\">
              <form method=\"GET\" action=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        yield "\">
                  <div class=\"input-group\">
                      <select name=\"category\" class=\"form-select\">
                          <option value=\"\">Toutes les catégories</option>
                          ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 23
            yield "                              <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 23), "html", null, true);
            yield "\"
                                  ";
            // line 24
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "get", ["category"], "method", false, false, false, 24) == CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 24))) {
                yield "selected";
            }
            yield ">
                                  ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 25), "html", null, true);
            yield "
                              </option>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "                      </select>
                      <button class=\"btn btn-primary\" type=\"submit\">Filtrer</button>
                  </div>
              </form>
          </div>
      </div>

      <br>

      ";
        // line 37
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["paintings"]) || array_key_exists("paintings", $context) ? $context["paintings"] : (function () { throw new RuntimeError('Variable "paintings" does not exist.', 37, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "        <div class=\"row g-4\">
          ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["paintings"]) || array_key_exists("paintings", $context) ? $context["paintings"] : (function () { throw new RuntimeError('Variable "paintings" does not exist.', 39, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["painting"]) {
                // line 40
                yield "            <div class=\"col-md-4\">
              <div class=\"card art-card shadow-sm h-100\">
                ";
                // line 43
                yield "                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["painting"], "image", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 44
                    yield "                  <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["painting"], "image", [], "any", false, false, false, 44))), "html", null, true);
                    yield "\" class=\"card-img-top\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["painting"], "title", [], "any", false, false, false, 44), "html", null, true);
                    yield "\">
                ";
                } else {
                    // line 46
                    yield "                  <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-image.jpg"), "html", null, true);
                    yield "\" class=\"card-img-top\" alt=\"Image manquante\">
                ";
                }
                // line 48
                yield "
                <div class=\"card-body\">
                  <h5 class=\"card-title\">";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["painting"], "title", [], "any", false, false, false, 50), "html", null, true);
                yield "</h5>
                  <h6 class=\"\"> <b>Catégorie</b>: ";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["painting"], "idCategory", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51), "html", null, true);
                yield "</h6>
                  <h6 class=\"\"> <b>Technique</b>: ";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["painting"], "idTechnique", [], "any", false, false, false, 52), "name", [], "any", false, false, false, 52), "html", null, true);
                yield "</h6>
                  <p class=\"card-text\">
                    ";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["painting"], "description", [], "any", false, false, false, 54)), "truncate", [120, "..."], "method", false, false, false, 54), "html", null, true);
                yield "
                  </p>
                  <a href=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_painting_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["painting"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                yield "\" class=\"btn btn-outline-dark btn-sm\">Voir détails</a>
                </div>

                <div class=\"card-footer text-muted text-end small\">
                  Créé le : ";
                // line 60
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["painting"], "created", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["painting"], "created", [], "any", false, false, false, 60), "d/m/Y"), "html", null, true)) : ("N/A"));
                yield "
                </div>
              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['painting'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            yield "        </div>
      ";
        } else {
            // line 67
            yield "        <p class=\"text-center mt-4\">Aucune œuvre n’a encore été ajoutée.</p>
      ";
        }
        // line 69
        yield "    </div>
  </section>


  ";
        // line 73
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
        return array (  221 => 73,  215 => 69,  211 => 67,  207 => 65,  196 => 60,  189 => 56,  184 => 54,  179 => 52,  175 => 51,  171 => 50,  167 => 48,  161 => 46,  153 => 44,  150 => 43,  146 => 40,  142 => 39,  139 => 38,  137 => 37,  126 => 28,  117 => 25,  111 => 24,  106 => 23,  102 => 22,  95 => 18,  79 => 5,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

  {{ include('navBar.html.twig') }}


  <!-- GALERIE -->
  <section id=\"galerie\" class=\"py-5 mt-5\">
    <div class=\"container\">

      <br>
       
      <h2 class=\"text-center mb-4 fw-bold\">Notre galerie</h2>

      <div class=\"row mb-4 justify-content-center align-items-center\">
          <div class=\"col-md-6\">
              <form method=\"GET\" action=\"{{ path('app_admin') }}\">
                  <div class=\"input-group\">
                      <select name=\"category\" class=\"form-select\">
                          <option value=\"\">Toutes les catégories</option>
                          {% for category in categories %}
                              <option value=\"{{ category.id }}\"
                                  {% if app.request.get('category') == category.id %}selected{% endif %}>
                                  {{ category.name }}
                              </option>
                          {% endfor %}
                      </select>
                      <button class=\"btn btn-primary\" type=\"submit\">Filtrer</button>
                  </div>
              </form>
          </div>
      </div>

      <br>

      {% if paintings is not empty %}
        <div class=\"row g-4\">
          {% for painting in paintings %}
            <div class=\"col-md-4\">
              <div class=\"card art-card shadow-sm h-100\">
                {# ✅ Utilisation de l'image du tableau ou image par défaut #}
                {% if painting.image %}
                  <img src=\"{{ asset('images/' ~ painting.image) }}\" class=\"card-img-top\" alt=\"{{ painting.title }}\">
                {% else %}
                  <img src=\"{{ asset('images/default-image.jpg') }}\" class=\"card-img-top\" alt=\"Image manquante\">
                {% endif %}

                <div class=\"card-body\">
                  <h5 class=\"card-title\">{{ painting.title }}</h5>
                  <h6 class=\"\"> <b>Catégorie</b>: {{ painting.idCategory.name }}</h6>
                  <h6 class=\"\"> <b>Technique</b>: {{ painting.idTechnique.name }}</h6>
                  <p class=\"card-text\">
                    {{ painting.description|u.truncate(120, '...') }}
                  </p>
                  <a href=\"{{ path('app_painting_show', { id: painting.id }) }}\" class=\"btn btn-outline-dark btn-sm\">Voir détails</a>
                </div>

                <div class=\"card-footer text-muted text-end small\">
                  Créé le : {{ painting.created ? painting.created|date('d/m/Y') : 'N/A' }}
                </div>
              </div>
            </div>
          {% endfor %}
        </div>
      {% else %}
        <p class=\"text-center mt-4\">Aucune œuvre n’a encore été ajoutée.</p>
      {% endif %}
    </div>
  </section>


  {{ include('footer.html.twig') }}

{% endblock %}
", "pages/gallery.html.twig", "/home/angel/Vidéos/projet jeff/symfony/templates/pages/gallery.html.twig");
    }
}
