<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* animaux/index.html.twig */
class __TwigTemplate_879d2eeedb423362c79d2d3f5a1b6afec81eaa26e10d2a0aab02ce1133f8069b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "animaux/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "animaux/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "animaux/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Animaux";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

<div class=\"main\">

  <section class=\"py-5 text-center container\">
<h1>Tout savoir sur l'univers des animaux</h1>

</section>

<div class=\"album py-5 bg-light\">
<div class=\"container\">

  <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["animaux"]) || array_key_exists("animaux", $context) ? $context["animaux"] : (function () { throw new RuntimeError('Variable "animaux" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["an"]) {
            // line 20
            echo "        <div class=\"col\">
        <div class=\"card shadow-sm\">
            <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["an"], "image", [], "any", false, false, false, 22), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["an"], "image", [], "any", false, false, false, 22), "html", null, true);
            echo "\" width=\"400\" height=\"250\"/>
            <div class=\"card-body\">
            <h1> ";
            // line 24
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["an"], "name", [], "any", false, false, false, 24), 0, 15), "html", null, true);
            echo "...</h1>
            <p class=\"card-text\">";
            // line 25
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["an"], "description", [], "any", false, false, false, 25), 0, 60), "html", null, true);
            echo "... </p>
            <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" >
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal", ["id" => twig_get_attribute($this->env, $this->source, $context["an"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">
                        Voir plus
                    </a>
                </button>
                    
                </div>
            </div>
            </div>
        </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['an'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </div>
    </div>
    </div>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "animaux/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 40,  129 => 29,  122 => 25,  118 => 24,  111 => 22,  107 => 20,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Animaux{% endblock %}

{% block body %}


<div class=\"main\">

  <section class=\"py-5 text-center container\">
<h1>Tout savoir sur l'univers des animaux</h1>

</section>

<div class=\"album py-5 bg-light\">
<div class=\"container\">

  <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
    {% for an in animaux %}
        <div class=\"col\">
        <div class=\"card shadow-sm\">
            <img src=\"{{an.image}}\" alt=\"{{an.image}}\" width=\"400\" height=\"250\"/>
            <div class=\"card-body\">
            <h1> {{an.name | slice (0 , 15)}}...</h1>
            <p class=\"card-text\">{{an.description | slice (0 , 60)}}... </p>
            <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" >
                    <a href=\"{{path('animal', {'id': an.id})}}\">
                        Voir plus
                    </a>
                </button>
                    
                </div>
            </div>
            </div>
        </div>
        </div>
    {% endfor %}
    </div>
    </div>
    </div>

</div>

{% endblock %}


", "animaux/index.html.twig", "/Users/mohamedsafir/Desktop/Ecole IPSSI/Symfony/siteProject/templates/animaux/index.html.twig");
    }
}
