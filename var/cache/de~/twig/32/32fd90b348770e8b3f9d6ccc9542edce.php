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

/* pages/detailGallery.html.twig */
class __TwigTemplate_8eb178e18819d308ff758bc7140d1a67 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/detailGallery.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/detailGallery.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["painting"]) || array_key_exists("painting", $context) ? $context["painting"] : (function () { throw new RuntimeError('Variable "painting" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        yield " - Détails";
        
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
        yield "
  ";
        // line 7
        yield Twig\Extension\CoreExtension::include($this->env, $context, "navBar.html.twig");
        yield "

  <section class=\"py-5 mt-5\">
    <div class=\"container\">
      <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        yield "\" class=\"btn btn-outline-secondary mb-4\">← Retour à la galerie</a>

      <div class=\"row\">
        <div class=\"col-md-6\">
          ";
        // line 15
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["painting"]) || array_key_exists("painting", $context) ? $context["painting"] : (function () { throw new RuntimeError('Variable "painting" does not exist.', 15, $this->source); })()), "image", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["painting"]) || array_key_exists("painting", $context) ? $context["painting"] : (function () { throw new RuntimeError('Variable "painting" does not exist.', 16, $this->source); })()), "image", [], "any", false, false, false, 16))), "html", null, true);
            yield "\" class=\"img-fluid rounded shadow-sm\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["painting"]) || array_key_exists("painting", $context) ? $context["painting"] : (function () { throw new RuntimeError('Variable "painting" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
            yield "\">
          ";
        } else {
            // line 18
            yield "            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-image.jpg"), "html", null, true);
            yield "\" class=\"img-fluid rounded shadow-sm\" alt=\"Image manquante\">
          ";
        }
        // line 20
        yield "        </div>
        <div class=\"col-md-6\">
          <h2 class=\"fw-bold\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["painting"]) || array_key_exists("painting", $context) ? $context["painting"] : (function () { throw new RuntimeError('Variable "painting" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22), "html", null, true);
        yield "</h2>
          <p class=\"text-muted\">
            Créée le ";
        // line 24
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["painting"]) || array_key_exists("painting", $context) ? $context["painting"] : (function () { throw new RuntimeError('Variable "painting" does not exist.', 24, $this->source); })()), "created", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["painting"]) || array_key_exists("painting", $context) ? $context["painting"] : (function () { throw new RuntimeError('Variable "painting" does not exist.', 24, $this->source); })()), "created", [], "any", false, false, false, 24), "d/m/Y"), "html", null, true)) : ("Date inconnue"));
        yield "
          </p>

          ";
        // line 27
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["painting"]) || array_key_exists("painting", $context) ? $context["painting"] : (function () { throw new RuntimeError('Variable "painting" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "            <p class=\"mt-3\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["painting"]) || array_key_exists("painting", $context) ? $context["painting"] : (function () { throw new RuntimeError('Variable "painting" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), "html", null, true);
            yield "</p>
          ";
        }
        // line 30
        yield "
          <ul class=\"list-unstyled mt-4\">
            <li><strong>Hauteur :</strong> ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["painting"]) || array_key_exists("painting", $context) ? $context["painting"] : (function () { throw new RuntimeError('Variable "painting" does not exist.', 32, $this->source); })()), "height", [], "any", false, false, false, 32), "html", null, true);
        yield " cm</li>
            <li><strong>Largeur :</strong> ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["painting"]) || array_key_exists("painting", $context) ? $context["painting"] : (function () { throw new RuntimeError('Variable "painting" does not exist.', 33, $this->source); })()), "width", [], "any", false, false, false, 33), "html", null, true);
        yield " cm</li>
            <li><strong>Technique :</strong>
              ";
        // line 35
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["painting"]) || array_key_exists("painting", $context) ? $context["painting"] : (function () { throw new RuntimeError('Variable "painting" does not exist.', 35, $this->source); })()), "idTechnique", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["painting"]) || array_key_exists("painting", $context) ? $context["painting"] : (function () { throw new RuntimeError('Variable "painting" does not exist.', 35, $this->source); })()), "idTechnique", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true)) : ("Non spécifiée"));
        yield "
            </li>
            <li><strong>Catégorie :</strong>
              ";
        // line 38
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["painting"]) || array_key_exists("painting", $context) ? $context["painting"] : (function () { throw new RuntimeError('Variable "painting" does not exist.', 38, $this->source); })()), "idCategory", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["painting"]) || array_key_exists("painting", $context) ? $context["painting"] : (function () { throw new RuntimeError('Variable "painting" does not exist.', 38, $this->source); })()), "idCategory", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true)) : ("Non classée"));
        yield "
            </li>
          </ul>

          <hr class=\"my-5\">

            <h3 class=\"fw-bold mb-3\">Commentaires</h3>

            ";
        // line 47
        yield "            ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 47, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 48, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 49
                yield "                <div class=\"mb-3 p-3 border rounded bg-light\">
                <strong>";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 50), "html", null, true);
                yield "</strong>
                <span class=\"text-muted small\"> — ";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 51), "d/m/Y H:i"), "html", null, true);
                yield "</span>
                <p class=\"mb-0 mt-2\">";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 52), "html", null, true);
                yield "</p>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            yield "            ";
        } else {
            // line 56
            yield "            <p>Aucun commentaire pour le moment. Soyez le premier à écrire !</p>
            ";
        }
        // line 58
        yield "
            <hr>

            ";
        // line 61
        if (((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()) == null)) {
            // line 62
            yield "              <p><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Connectez-vous</a> pour laisser un commentaire.</p>
            ";
        }
        // line 64
        yield "
            ";
        // line 65
        if (((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()) != null)) {
            // line 66
            yield "              ";
            // line 67
            yield "              <h4>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 67, $this->source); })()), "name", [], "any", false, false, false, 67), "html", null, true);
            yield " Laissez un commentaire</h4>
              ";
            // line 68
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'form_start');
            yield "
              <div class=\"mb-3\">
                  ";
            // line 70
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "content", [], "any", false, false, false, 70), 'row');
            yield "
              </div>
              <button type=\"submit\" class=\"btn btn-dark\">Envoyer</button>
              ";
            // line 73
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_end');
            yield "
            ";
        }
        // line 75
        yield "        </div>
      </div>
    </div>
  </section>

  ";
        // line 80
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
        return "pages/detailGallery.html.twig";
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
        return array (  270 => 80,  263 => 75,  258 => 73,  252 => 70,  247 => 68,  242 => 67,  240 => 66,  238 => 65,  235 => 64,  229 => 62,  227 => 61,  222 => 58,  218 => 56,  215 => 55,  206 => 52,  202 => 51,  198 => 50,  195 => 49,  190 => 48,  187 => 47,  176 => 38,  170 => 35,  165 => 33,  161 => 32,  157 => 30,  151 => 28,  149 => 27,  143 => 24,  138 => 22,  134 => 20,  128 => 18,  120 => 16,  118 => 15,  111 => 11,  104 => 7,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ painting.title }} - Détails{% endblock %}

{% block body %}

  {{ include('navBar.html.twig') }}

  <section class=\"py-5 mt-5\">
    <div class=\"container\">
      <a href=\"{{ path('app_admin') }}\" class=\"btn btn-outline-secondary mb-4\">← Retour à la galerie</a>

      <div class=\"row\">
        <div class=\"col-md-6\">
          {% if painting.image %}
            <img src=\"{{ asset('images/' ~ painting.image) }}\" class=\"img-fluid rounded shadow-sm\" alt=\"{{ painting.title }}\">
          {% else %}
            <img src=\"{{ asset('images/default-image.jpg') }}\" class=\"img-fluid rounded shadow-sm\" alt=\"Image manquante\">
          {% endif %}
        </div>
        <div class=\"col-md-6\">
          <h2 class=\"fw-bold\">{{ painting.title }}</h2>
          <p class=\"text-muted\">
            Créée le {{ painting.created ? painting.created|date('d/m/Y') : 'Date inconnue' }}
          </p>

          {% if painting.description %}
            <p class=\"mt-3\">{{ painting.description }}</p>
          {% endif %}

          <ul class=\"list-unstyled mt-4\">
            <li><strong>Hauteur :</strong> {{ painting.height }} cm</li>
            <li><strong>Largeur :</strong> {{ painting.width }} cm</li>
            <li><strong>Technique :</strong>
              {{ painting.idTechnique ? painting.idTechnique.name : 'Non spécifiée' }}
            </li>
            <li><strong>Catégorie :</strong>
              {{ painting.idCategory ? painting.idCategory.name : 'Non classée' }}
            </li>
          </ul>

          <hr class=\"my-5\">

            <h3 class=\"fw-bold mb-3\">Commentaires</h3>

            {# ✅ Liste des commentaires existants #}
            {% if comments is not empty %}
            {% for comment in comments %}
                <div class=\"mb-3 p-3 border rounded bg-light\">
                <strong>{{ comment.author }}</strong>
                <span class=\"text-muted small\"> — {{ comment.createdAt|date('d/m/Y H:i') }}</span>
                <p class=\"mb-0 mt-2\">{{ comment.content }}</p>
                </div>
            {% endfor %}
            {% else %}
            <p>Aucun commentaire pour le moment. Soyez le premier à écrire !</p>
            {% endif %}

            <hr>

            {% if user == null %}
              <p><a href=\"{{ path('app_login') }}\">Connectez-vous</a> pour laisser un commentaire.</p>
            {% endif %}

            {% if user != null %}
              {# ✅ Formulaire d’ajout d’un commentaire #}
              <h4>{{ user.name }} Laissez un commentaire</h4>
              {{ form_start(form) }}
              <div class=\"mb-3\">
                  {{ form_row(form.content) }}
              </div>
              <button type=\"submit\" class=\"btn btn-dark\">Envoyer</button>
              {{ form_end(form) }}
            {% endif %}
        </div>
      </div>
    </div>
  </section>

  {{ include('footer.html.twig') }}

{% endblock %}", "pages/detailGallery.html.twig", "C:\\wamp64\\www\\JEFF-TFE\\evaluation\\evaluation\\templates\\pages\\detailGallery.html.twig");
    }
}
