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

/* article/single.html.twig */
class __TwigTemplate_fdccd0a8a68d0642ea3b7d194f0abc901bf54f5e45b151c57b4b2ea12603f7fe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/single.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/single.html.twig"));

        // line 27
        echo "



<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37), "html", null, true);
        echo "</title>

  ";
        // line 39
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 209
        echo "
    ";
        // line 210
        $this->displayBlock('javascripts', $context, $blocks);
        // line 214
        echo "  </head>

  <body>
    ";
        // line 217
        $this->loadTemplate("Base/nav.html.twig", "article/single.html.twig", 217)->display($context);
        // line 218
        echo "    <div class=\"container\">
        <div class=\"card\">
            <div class=\"container-fliud\">
                <div class=\"wrapper row\">
                    <div class=\"preview col-md-6\">
                        <div class=\"preview-pic tab-content\">
                            <div><img src=";
        // line 224
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 224, $this->source); })()), "image", [], "any", false, false, false, 224), "html", null, true);
        echo " alt=\"picture\" width=\"800\" height=\"600\"></div>
                        </div>
                        
                    </div>
                    <div class=\"details col-md-6\">
                        <h2>";
        // line 229
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 229, $this->source); })()), "name", [], "any", false, false, false, 229), "html", null, true);
        echo "</h2>
                            <hr>
                            <div class=\"rating\">
                            <h4 class=\"review-no\">";
        // line 232
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 232, $this->source); })()), "description", [], "any", false, false, false, 232), "html", null, true);
        echo "</h4> 
                                <hr>
                                <h5 class=\"review\"> ";
        // line 234
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 234, $this->source); })()), "type", [], "any", false, false, false, 234), "html", null, true);
        echo "</h5>
                                <hr>
                                <h3>";
        // line 236
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 236, $this->source); })()), "price", [], "any", false, false, false, 236), "html", null, true);
        echo "€</h3>
                                <a href=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_add_article", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 237, $this->source); })()), "id", [], "any", false, false, false, 237)]), "html", null, true);
        echo "\">
                                    <button class=\"btn btn-success\"> Ajouter au panier</button>
                                </a>
                            </div>
                    </div>
                </div>
        
            </div>
        </div>
    </div>

    ";
        // line 248
        $this->loadTemplate("Base/footer.html.twig", "article/single.html.twig", 248)->display($context);
        // line 249
        echo " </body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 39
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 40
        echo "        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\"rel=\"stylesheet\"integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\"crossorigin=\"anonymous\">
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700\" rel=\"stylesheet\">
        <style>
            /*****************globals*************/
        body {
        font-family: 'open sans';
        overflow-x: hidden; }

        img {
        max-width: 100%; }

        .preview {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
            -ms-flex-direction: column;
                flex-direction: column; }
        @media screen and (max-width: 996px) {
            .preview {
            margin-bottom: 20px; } }

        .preview-pic {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
                flex-grow: 1; }

        .preview-thumbnail.nav-tabs {
        border: none;
        margin-top: 15px; }
        .preview-thumbnail.nav-tabs li {
            width: 18%;
            margin-right: 2.5%; }
            .preview-thumbnail.nav-tabs li img {
            max-width: 100%;
            display: block; }
            .preview-thumbnail.nav-tabs li a {
            padding: 0;
            margin: 0; }
            .preview-thumbnail.nav-tabs li:last-of-type {
            margin-right: 0; }

        .tab-content {
        overflow: hidden; }
        .tab-content img {
            width: 100%;
            -webkit-animation-name: opacity;
                    animation-name: opacity;
            -webkit-animation-duration: .3s;
                    animation-duration: .3s; }

        .card {
        margin-top: 50px;
        background: #eee;
        padding: 3em;
        line-height: 1.5em; }

        @media screen and (min-width: 997px) {
        .wrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex; } }

        .details {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
            -ms-flex-direction: column;
                flex-direction: column; }

        .colors {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
                flex-grow: 1; }

        .product-title, .price, .sizes, .colors {
        text-transform: UPPERCASE;
        font-weight: bold; }

        .checked, .price span {
        color: #ff9f1a; }

        .product-title, .rating, .product-description, .price, .vote, .sizes {
        margin-bottom: 15px; }

        .product-title {
        margin-top: 0; }

        .size {
        margin-right: 10px; }
        .size:first-of-type {
            margin-left: 40px; }

        .color {
        display: inline-block;
        vertical-align: middle;
        margin-right: 10px;
        height: 2em;
        width: 2em;
        border-radius: 2px; }
        .color:first-of-type {
            margin-left: 20px; }

        .add-to-cart, .like {
        background: #ff9f1a;
        padding: 1.2em 1.5em;
        border: none;
        text-transform: UPPERCASE;
        font-weight: bold;
        color: #fff;
        -webkit-transition: background .3s ease;
                transition: background .3s ease; }
        .add-to-cart:hover, .like:hover {
            background: #b36800;
            color: #fff; }

        .not-available {
        text-align: center;
        line-height: 2em; }
        .not-available:before {
            font-family: fontawesome;
            content: \"\\f00d\";
            color: #fff; }

        .orange {
        background: #ff9f1a; }

        .green {
        background: #85ad00; }

        .blue {
        background: #0076ad; }

        .tooltip-inner {
        padding: 1.3em; }

        @-webkit-keyframes opacity {
        0% {
            opacity: 0;
            -webkit-transform: scale(3);
                    transform: scale(3); }
        100% {
            opacity: 1;
            -webkit-transform: scale(1);
                    transform: scale(1); } }

        @keyframes opacity {
        0% {
            opacity: 0;
            -webkit-transform: scale(3);
                    transform: scale(3); }
        100% {
            opacity: 1;
            -webkit-transform: scale(1);
                    transform: scale(1); } }

        </style>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 210
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 211
        echo "        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\"integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\"crossorigin=\"anonymous\"></script>
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" ></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 211,  329 => 210,  151 => 40,  141 => 39,  128 => 249,  126 => 248,  112 => 237,  108 => 236,  103 => 234,  98 => 232,  92 => 229,  84 => 224,  76 => 218,  74 => 217,  69 => 214,  67 => 210,  64 => 209,  62 => 39,  57 => 37,  45 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends \"base.html.twig\" %}



{% block body %}


<h1>{{article.name}}</h1>

<h4>Type : {{article.type}}</h4>

<h4>Description : {{article.description}}</h4>

<h4>Prix : {{article.price}}£</h4>


<img src={{article.image}} alt=\"picture\">


<a href=\"{{ path(\"panier_add_article\", {id: article.id} ) }}\">
<button class=\"btn btn-primary\"> Ajouter</button>
</a>


{% endblock %}
 #}




<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>{{article.name}}</title>

  {% block stylesheet %}
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\"rel=\"stylesheet\"integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\"crossorigin=\"anonymous\">
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700\" rel=\"stylesheet\">
        <style>
            /*****************globals*************/
        body {
        font-family: 'open sans';
        overflow-x: hidden; }

        img {
        max-width: 100%; }

        .preview {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
            -ms-flex-direction: column;
                flex-direction: column; }
        @media screen and (max-width: 996px) {
            .preview {
            margin-bottom: 20px; } }

        .preview-pic {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
                flex-grow: 1; }

        .preview-thumbnail.nav-tabs {
        border: none;
        margin-top: 15px; }
        .preview-thumbnail.nav-tabs li {
            width: 18%;
            margin-right: 2.5%; }
            .preview-thumbnail.nav-tabs li img {
            max-width: 100%;
            display: block; }
            .preview-thumbnail.nav-tabs li a {
            padding: 0;
            margin: 0; }
            .preview-thumbnail.nav-tabs li:last-of-type {
            margin-right: 0; }

        .tab-content {
        overflow: hidden; }
        .tab-content img {
            width: 100%;
            -webkit-animation-name: opacity;
                    animation-name: opacity;
            -webkit-animation-duration: .3s;
                    animation-duration: .3s; }

        .card {
        margin-top: 50px;
        background: #eee;
        padding: 3em;
        line-height: 1.5em; }

        @media screen and (min-width: 997px) {
        .wrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex; } }

        .details {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
            -ms-flex-direction: column;
                flex-direction: column; }

        .colors {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
                flex-grow: 1; }

        .product-title, .price, .sizes, .colors {
        text-transform: UPPERCASE;
        font-weight: bold; }

        .checked, .price span {
        color: #ff9f1a; }

        .product-title, .rating, .product-description, .price, .vote, .sizes {
        margin-bottom: 15px; }

        .product-title {
        margin-top: 0; }

        .size {
        margin-right: 10px; }
        .size:first-of-type {
            margin-left: 40px; }

        .color {
        display: inline-block;
        vertical-align: middle;
        margin-right: 10px;
        height: 2em;
        width: 2em;
        border-radius: 2px; }
        .color:first-of-type {
            margin-left: 20px; }

        .add-to-cart, .like {
        background: #ff9f1a;
        padding: 1.2em 1.5em;
        border: none;
        text-transform: UPPERCASE;
        font-weight: bold;
        color: #fff;
        -webkit-transition: background .3s ease;
                transition: background .3s ease; }
        .add-to-cart:hover, .like:hover {
            background: #b36800;
            color: #fff; }

        .not-available {
        text-align: center;
        line-height: 2em; }
        .not-available:before {
            font-family: fontawesome;
            content: \"\\f00d\";
            color: #fff; }

        .orange {
        background: #ff9f1a; }

        .green {
        background: #85ad00; }

        .blue {
        background: #0076ad; }

        .tooltip-inner {
        padding: 1.3em; }

        @-webkit-keyframes opacity {
        0% {
            opacity: 0;
            -webkit-transform: scale(3);
                    transform: scale(3); }
        100% {
            opacity: 1;
            -webkit-transform: scale(1);
                    transform: scale(1); } }

        @keyframes opacity {
        0% {
            opacity: 0;
            -webkit-transform: scale(3);
                    transform: scale(3); }
        100% {
            opacity: 1;
            -webkit-transform: scale(1);
                    transform: scale(1); } }

        </style>
    {% endblock %}

    {% block javascripts %}
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\"integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\"crossorigin=\"anonymous\"></script>
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" ></script>
    {% endblock %}
  </head>

  <body>
    {% include \"Base/nav.html.twig\" %}
    <div class=\"container\">
        <div class=\"card\">
            <div class=\"container-fliud\">
                <div class=\"wrapper row\">
                    <div class=\"preview col-md-6\">
                        <div class=\"preview-pic tab-content\">
                            <div><img src={{article.image}} alt=\"picture\" width=\"800\" height=\"600\"></div>
                        </div>
                        
                    </div>
                    <div class=\"details col-md-6\">
                        <h2>{{article.name}}</h2>
                            <hr>
                            <div class=\"rating\">
                            <h4 class=\"review-no\">{{article.description}}</h4> 
                                <hr>
                                <h5 class=\"review\"> {{article.type}}</h5>
                                <hr>
                                <h3>{{article.price}}€</h3>
                                <a href=\"{{ path('panier_add_article', {id: article.id} ) }}\">
                                    <button class=\"btn btn-success\"> Ajouter au panier</button>
                                </a>
                            </div>
                    </div>
                </div>
        
            </div>
        </div>
    </div>

    {% include \"Base/footer.html.twig\" %}
 </body>
</html>

", "article/single.html.twig", "/Users/mohamedsafir/Desktop/Ecole IPSSI/Symfony/siteProject/templates/article/single.html.twig");
    }
}
