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

/* pages/homeAdmin.html.twig */
class __TwigTemplate_5c2f4d6cfd0ad355b1eb93eddfef1f53 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/homeAdmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/homeAdmin.html.twig"));

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

        yield "Administration - Peintures";
        
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
<div class=\"container mt-5\">
    
    <div class=\"d-flex justify-content-end mb-4\">
        <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-success btn-sm px-3\">
            <i class=\"bi bi-box-arrow-right\"></i> Retourner au site
        </a>
        &nbsp; &nbsp; &nbsp; &nbsp;
       ";
        // line 14
        if (((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()) != null)) {
            // line 15
            yield "        <b>BIENVENUE  &nbsp;  </b> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
            yield " &nbsp;
            <a href=\"";
            // line 16
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"btn btn-danger btn-sm px-3\">
                <i class=\"bi bi-box-arrow-right\"></i> Déconnexion
            </a>
        ";
        }
        // line 20
        yield "    </div>
    
    <h1 class=\"mb-4 text-center text-primary\">🎨 Gestion des Peintures</h1>

    <div class=\"d-flex justify-content-end mb-4\">
        <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_painting_add");
        yield "\" class=\"btn btn-warning btn-sm px-3\">
            <i class=\"bi bi-box-arrow-right\"></i> Ajouter une nouvelle peinture
        </a>
    </div> 

    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "flashes", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 31
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 32
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                ";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "
    <table class=\"table table-striped align-middle shadow-sm\">
        <thead class=\"table-dark\">
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Titre</th>
                <th>Visibilité</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["paintings"]) || array_key_exists("paintings", $context) ? $context["paintings"] : (function () { throw new RuntimeError('Variable "paintings" does not exist.', 50, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["painting"]) {
            // line 51
            yield "            <tr>
                <td>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["painting"], "id", [], "any", false, false, false, 52), "html", null, true);
            yield "</td>
                <td><img src=\"images/";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["painting"], "image", [], "any", false, false, false, 53), "html", null, true);
            yield "\" width=\"100px\"></td>
                <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["painting"], "title", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                <td>
                    ";
            // line 56
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["painting"], "visible", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 57
                yield "                        <span class=\"badge bg-success\">Visible</span>
                    ";
            } else {
                // line 59
                yield "                        <span class=\"badge bg-secondary\">Masquée</span>
                    ";
            }
            // line 61
            yield "                </td>
                <td>
                    <a href=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_painting_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["painting"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\">✏️ Modifier</a>

                    <form action=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_painting_toggle", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["painting"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            yield "\" method=\"post\" style=\"display:inline;\">
                        <button class=\"btn btn-sm btn-outline-warning\">
                            ";
            // line 67
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["painting"], "visible", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Masquer";
            } else {
                yield "Afficher";
            }
            // line 68
            yield "                        </button>
                    </form>
                    
                    <form action=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_painting_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["painting"], "id", [], "any", false, false, false, 71)]), "html", null, true);
            yield "\" method=\"post\" style=\"display:inline;\" onsubmit=\"return confirm('Supprimer cette peinture ?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["painting"], "id", [], "any", false, false, false, 72))), "html", null, true);
            yield "\">
                        <button class=\"btn btn-sm btn-outline-danger\">🗑️ Supprimer</button>
                    </form>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 77
        if (!$context['_iterated']) {
            // line 78
            yield "            <tr>
                <td colspan=\"5\" class=\"text-center text-muted\">Aucune peinture enregistrée.</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['painting'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "        </tbody>
    </table>
</div>
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
        return "pages/homeAdmin.html.twig";
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
        return array (  267 => 82,  258 => 78,  256 => 77,  246 => 72,  242 => 71,  237 => 68,  231 => 67,  226 => 65,  221 => 63,  217 => 61,  213 => 59,  209 => 57,  207 => 56,  202 => 54,  198 => 53,  194 => 52,  191 => 51,  186 => 50,  172 => 38,  166 => 37,  156 => 33,  151 => 32,  146 => 31,  142 => 30,  134 => 25,  127 => 20,  120 => 16,  115 => 15,  113 => 14,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administration - Peintures{% endblock %}

{% block body %}

<div class=\"container mt-5\">
    
    <div class=\"d-flex justify-content-end mb-4\">
        <a href=\"{{ path('app_home') }}\" class=\"btn btn-success btn-sm px-3\">
            <i class=\"bi bi-box-arrow-right\"></i> Retourner au site
        </a>
        &nbsp; &nbsp; &nbsp; &nbsp;
       {% if user != null %}
        <b>BIENVENUE  &nbsp;  </b> {{ user.name }} &nbsp;
            <a href=\"{{ path('app_logout') }}\" class=\"btn btn-danger btn-sm px-3\">
                <i class=\"bi bi-box-arrow-right\"></i> Déconnexion
            </a>
        {% endif %}
    </div>
    
    <h1 class=\"mb-4 text-center text-primary\">🎨 Gestion des Peintures</h1>

    <div class=\"d-flex justify-content-end mb-4\">
        <a href=\"{{ path('admin_painting_add') }}\" class=\"btn btn-warning btn-sm px-3\">
            <i class=\"bi bi-box-arrow-right\"></i> Ajouter une nouvelle peinture
        </a>
    </div> 

    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        {% endfor %}
    {% endfor %}

    <table class=\"table table-striped align-middle shadow-sm\">
        <thead class=\"table-dark\">
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Titre</th>
                <th>Visibilité</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for painting in paintings %}
            <tr>
                <td>{{ painting.id }}</td>
                <td><img src=\"images/{{ painting.image }}\" width=\"100px\"></td>
                <td>{{ painting.title }}</td>
                <td>
                    {% if painting.visible %}
                        <span class=\"badge bg-success\">Visible</span>
                    {% else %}
                        <span class=\"badge bg-secondary\">Masquée</span>
                    {% endif %}
                </td>
                <td>
                    <a href=\"{{ path('admin_painting_edit', {id: painting.id}) }}\" class=\"btn btn-sm btn-outline-primary\">✏️ Modifier</a>

                    <form action=\"{{ path('admin_painting_toggle', {id: painting.id}) }}\" method=\"post\" style=\"display:inline;\">
                        <button class=\"btn btn-sm btn-outline-warning\">
                            {% if painting.visible %}Masquer{% else %}Afficher{% endif %}
                        </button>
                    </form>
                    
                    <form action=\"{{ path('admin_painting_delete', {id: painting.id}) }}\" method=\"post\" style=\"display:inline;\" onsubmit=\"return confirm('Supprimer cette peinture ?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ painting.id) }}\">
                        <button class=\"btn btn-sm btn-outline-danger\">🗑️ Supprimer</button>
                    </form>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\" class=\"text-center text-muted\">Aucune peinture enregistrée.</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}
", "pages/homeAdmin.html.twig", "C:\\wamp64\\www\\JEFF-TFE\\evaluation\\evaluation\\templates\\pages\\homeAdmin.html.twig");
    }
}
