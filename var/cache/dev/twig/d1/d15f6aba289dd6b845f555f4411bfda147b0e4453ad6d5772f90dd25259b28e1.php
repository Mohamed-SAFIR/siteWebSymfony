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

/* panier/index.html.twig */
class __TwigTemplate_2285043db72c103caae45b39a84922f248b60a0a59e41f99136ef4b7095b19e7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panier/index.html.twig", 1);
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

        echo "Panier";
        
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
    <div class=\"container\">
    <h1>Mon panier</h1>
    <h2 class=\"text-center\">Mon panier articles</h2>
        ";
        // line 11
        if ((twig_length_filter($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 11, $this->source); })())) > 0)) {
            // line 12
            echo "
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Article</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 25
                echo "                         <tr>
                             <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "article", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
                             <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "article", [], "any", false, false, false, 27), "price", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>
                             <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
                             <td>";
                // line 29
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "article", [], "any", false, false, false, 29), "price", [], "any", false, false, false, 29) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 29)), "html", null, true);
                echo "</td>
                            <td>
                                <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_remove_article", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "article", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm\">
                                    <i class=\"fas fa-trash\"></i>
                                </a>
                            </td>
                         </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=\"3\">Total : </td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "</td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
        ";
        } else {
            // line 47
            echo "            <p>Surpirse, c'est vide !</p>
        ";
        }
        // line 49
        echo "
<hr>
    <h2 class=\"text-center\">Mon panier animaux</h2>
        ";
        // line 52
        if ((twig_length_filter($this->env, (isset($context["animaux"]) || array_key_exists("animaux", $context) ? $context["animaux"] : (function () { throw new RuntimeError('Variable "animaux" does not exist.', 52, $this->source); })())) > 0)) {
            // line 53
            echo "
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Type</th>
                        <th>Poids</th>
                        <th>Taille</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["animaux"]) || array_key_exists("animaux", $context) ? $context["animaux"] : (function () { throw new RuntimeError('Variable "animaux" does not exist.', 65, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 66
                echo "                         <tr>
                             <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "animal", [], "any", false, false, false, 67), "name", [], "any", false, false, false, 67), "html", null, true);
                echo "</td>
                             <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "animal", [], "any", false, false, false, 68), "type", [], "any", false, false, false, 68), "html", null, true);
                echo "</td>
                             <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "animal", [], "any", false, false, false, 69), "poids", [], "any", false, false, false, 69), "html", null, true);
                echo "</td>
                             <td>";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "animal", [], "any", false, false, false, 70), "taille", [], "any", false, false, false, 70), "html", null, true);
                echo "</td>
                            <td>
                                <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_remove_animal", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "animal", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72)]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm\">
                                    <i class=\"fas fa-trash\"></i>
                                </a>
                            </td>
                         </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                </tbody>
            </table>
        ";
        } else {
            // line 81
            echo "            <p>Surpirse, c'est vide !</p>
        ";
        }
        // line 83
        echo "    </div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "panier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 83,  228 => 81,  223 => 78,  211 => 72,  206 => 70,  202 => 69,  198 => 68,  194 => 67,  191 => 66,  187 => 65,  173 => 53,  171 => 52,  166 => 49,  162 => 47,  153 => 41,  147 => 37,  135 => 31,  130 => 29,  126 => 28,  122 => 27,  118 => 26,  115 => 25,  111 => 24,  97 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Panier{% endblock %}

{% block body %}

<div class=\"main\">
    <div class=\"container\">
    <h1>Mon panier</h1>
    <h2 class=\"text-center\">Mon panier articles</h2>
        {% if articles | length > 0 %}

            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Article</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {% for item in articles %}
                         <tr>
                             <td>{{ item.article.name }}</td>
                             <td>{{ item.article.price }}</td>
                             <td>{{ item.quantity }}</td>
                             <td>{{ item.article.price * item.quantity }}</td>
                            <td>
                                <a href=\"{{ path('panier_remove_article', {'id': item.article.id})}}\" class=\"btn btn-danger btn-sm\">
                                    <i class=\"fas fa-trash\"></i>
                                </a>
                            </td>
                         </tr>
                    {% endfor %}
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=\"3\">Total : </td>
                        <td>{{ total }}</td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
        {% else %}
            <p>Surpirse, c'est vide !</p>
        {% endif %}

<hr>
    <h2 class=\"text-center\">Mon panier animaux</h2>
        {% if animaux | length > 0 %}

            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Type</th>
                        <th>Poids</th>
                        <th>Taille</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {% for item in animaux %}
                         <tr>
                             <td>{{ item.animal.name }}</td>
                             <td>{{ item.animal.type }}</td>
                             <td>{{ item.animal.poids }}</td>
                             <td>{{ item.animal.taille }}</td>
                            <td>
                                <a href=\"{{ path('panier_remove_animal', {'id': item.animal.id})}}\" class=\"btn btn-danger btn-sm\">
                                    <i class=\"fas fa-trash\"></i>
                                </a>
                            </td>
                         </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% else %}
            <p>Surpirse, c'est vide !</p>
        {% endif %}
    </div>
</div>


{% endblock %}
", "panier/index.html.twig", "/Users/mohamedsafir/Desktop/Ecole IPSSI/Symfony/siteProject/templates/panier/index.html.twig");
    }
}
