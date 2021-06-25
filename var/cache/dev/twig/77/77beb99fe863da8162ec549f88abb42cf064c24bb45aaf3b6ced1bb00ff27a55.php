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

/* home/index.html.twig */
class __TwigTemplate_d52fd917c4f1c46b3b3f78492c2d38f347721ead0b3d0eb438da6b7051897464 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "DELTA";
        
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
        echo "<style>
    .main { margin-bottom : 100px}
</style>

<div class=\"main\">
    <div class=\"container\">
        <h1 class=\"text-center\">Accueil</h1>
        <div id=\"myCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
            <div class=\"carousel-indicators\">
                <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
            </div>
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img src=\"https://upload.wikimedia.org/wikipedia/commons/b/bd/Dogue_de_Bordeaux.jpg\" width=\"1500\" height=\"400\" />

                    <div class=\"container\">
                        <div class=\"carousel-caption \">
                            <h1>Chiens</h1>
                            <p><a class=\"btn btn-lg btn-primary\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animaux");
        echo "\">voir plus</a></p>
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img class=\"bd-placeholder-img\" src=\"https://upload.wikimedia.org/wikipedia/commons/c/c3/Chat_mi-long.jpg\"   width=\"1500\" height=\"400\" />

                    <div class=\"container\">
                        <div class=\"carousel-caption\">
                            <h1> Chats</h1>
                            <p><a class=\"btn btn-lg btn-primary\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animaux");
        echo "\">Voir plus</a></p>
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img class=\"bd-placeholder-img\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/f/f5/Jabir%C3%BA_africano_%28Ephippiorhynchus_senegalensis%29%2C_delta_del_Okavango%2C_Botsuana%2C_2018-07-31%2C_DD_11.jpg/2560px-Jabir%C3%BA_africano_%28Ephippiorhynchus_senegalensis%29%2C_delta_del_Okavango%2C_Botsuana%2C_2018-07-31%2C_DD_11.jpg\"  width=\"1500\" height=\"400\" />
                    <div class=\"container\">
                        <div class=\"carousel-caption \">
                            <h1>Oiseaux</h1>
                            <p><a class=\"btn btn-lg btn-primary\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animaux");
        echo "\">Voir plus</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Previous</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Next</span>
            </button>
        </div>
<hr>
    
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-sm-2 align-self-center\">

                            <a class=\"btn btn-primary\" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register_don");
        echo "\">Faire un don</a>

                    </div>

                 <div class=\"col align-self-start\">
                    <h2 class=\"text-center\">Faire un don</h2>
                    <h4 >Les animaux sont confrontés chaque jour à des problèmes de plus en plus importants et de plus en plus complexes. Plus de criminalité liée à la faune sauvage et de trafic en ligne. Plus de pollution sonore des océans. Plus de tempêtes violentes. Des milliers d’éléphants sont tués chaque année pour leur ivoire. De très nombreux chiens et chats ne bénéficient pas des soins vétérinaires de base et d’un abri. Nous sommes convaincus que chaque individu compte. </h4>
                    <h4>Avec votre aide, DELTA est sur le terrain en Afrique, en Asie et dans le monde entier pour protéger les animaux en danger, comme les éléphants, les koalas, les tigres et tant d’autres, face aux braconniers et au commerce illégal de faune sauvage. Nous sommes en mer pour secourir les dauphins, les baleines, les phoques et les autres animaux marins victimes d’enchevêtrement et d’autres dangers issus de la pêche commerciale. Votre soutien sauvera des animaux et fera du monde un endroit meilleur où nous cohabiterons tous harmonieusement. </h4>

             </div>
            
          </div>
                
        </div>

<hr>
        <div id=\"myCarousel1\" class=\"carousel slide\" data-bs-ride=\"carousel\">
        <div class=\"carousel-indicators\">
            <button type=\"button\" data-bs-target=\"#myCarousel1\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
            <button type=\"button\" data-bs-target=\"#myCarousel1\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
            <button type=\"button\" data-bs-target=\"#myCarousel1\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
        </div>
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img src=\"https://nosamisleschiens.fr/wp-content/uploads/2012/11/Accesoires-pour-chiens.jpeg\" width=\"1400\" height=\"400\" />

                <div class=\"container\">
                    <div class=\"carousel-caption \">
                        <h1>Articles</h1>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles");
        echo "\">voir plus</a></p>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img class=\"bd-placeholder-img\" src=\"https://i.pinimg.com/736x/35/2f/c5/352fc5e93707e038eb77e9ea6566d4c9.jpg\"   width=\"1500\" height=\"400\" />

                <div class=\"container\">
                    <div class=\"carousel-caption\">
                        <h1> Articles</h1>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles");
        echo "\">Voir plus</a></p>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img class=\"bd-placeholder-img\" src=\"https://gardenforum.be/wp-content/uploads/ueberunswerte9.jpg\"  width=\"1500\" height=\"400\" />
                <div class=\"container\">
                    <div class=\"carousel-caption \">
                        <h1>Articles</h1>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles");
        echo "\">Voir plus</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#myCarousel1\" data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Previous</span>
        </button>
        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#myCarousel1\" data-bs-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Next</span>
        </button>
    </div>

    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 113,  203 => 104,  190 => 94,  158 => 65,  135 => 45,  123 => 36,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DELTA{% endblock %}

{% block body %}
<style>
    .main { margin-bottom : 100px}
</style>

<div class=\"main\">
    <div class=\"container\">
        <h1 class=\"text-center\">Accueil</h1>
        <div id=\"myCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
            <div class=\"carousel-indicators\">
                <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
            </div>
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img src=\"https://upload.wikimedia.org/wikipedia/commons/b/bd/Dogue_de_Bordeaux.jpg\" width=\"1500\" height=\"400\" />

                    <div class=\"container\">
                        <div class=\"carousel-caption \">
                            <h1>Chiens</h1>
                            <p><a class=\"btn btn-lg btn-primary\" href=\"{{ path(\"animaux\")}}\">voir plus</a></p>
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img class=\"bd-placeholder-img\" src=\"https://upload.wikimedia.org/wikipedia/commons/c/c3/Chat_mi-long.jpg\"   width=\"1500\" height=\"400\" />

                    <div class=\"container\">
                        <div class=\"carousel-caption\">
                            <h1> Chats</h1>
                            <p><a class=\"btn btn-lg btn-primary\" href=\"{{ path(\"animaux\")}}\">Voir plus</a></p>
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img class=\"bd-placeholder-img\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/f/f5/Jabir%C3%BA_africano_%28Ephippiorhynchus_senegalensis%29%2C_delta_del_Okavango%2C_Botsuana%2C_2018-07-31%2C_DD_11.jpg/2560px-Jabir%C3%BA_africano_%28Ephippiorhynchus_senegalensis%29%2C_delta_del_Okavango%2C_Botsuana%2C_2018-07-31%2C_DD_11.jpg\"  width=\"1500\" height=\"400\" />
                    <div class=\"container\">
                        <div class=\"carousel-caption \">
                            <h1>Oiseaux</h1>
                            <p><a class=\"btn btn-lg btn-primary\" href=\"{{ path(\"animaux\")}}\">Voir plus</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Previous</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Next</span>
            </button>
        </div>
<hr>
    
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-sm-2 align-self-center\">

                            <a class=\"btn btn-primary\" href=\"{{ path(\"register_don\") }}\">Faire un don</a>

                    </div>

                 <div class=\"col align-self-start\">
                    <h2 class=\"text-center\">Faire un don</h2>
                    <h4 >Les animaux sont confrontés chaque jour à des problèmes de plus en plus importants et de plus en plus complexes. Plus de criminalité liée à la faune sauvage et de trafic en ligne. Plus de pollution sonore des océans. Plus de tempêtes violentes. Des milliers d’éléphants sont tués chaque année pour leur ivoire. De très nombreux chiens et chats ne bénéficient pas des soins vétérinaires de base et d’un abri. Nous sommes convaincus que chaque individu compte. </h4>
                    <h4>Avec votre aide, DELTA est sur le terrain en Afrique, en Asie et dans le monde entier pour protéger les animaux en danger, comme les éléphants, les koalas, les tigres et tant d’autres, face aux braconniers et au commerce illégal de faune sauvage. Nous sommes en mer pour secourir les dauphins, les baleines, les phoques et les autres animaux marins victimes d’enchevêtrement et d’autres dangers issus de la pêche commerciale. Votre soutien sauvera des animaux et fera du monde un endroit meilleur où nous cohabiterons tous harmonieusement. </h4>

             </div>
            
          </div>
                
        </div>

<hr>
        <div id=\"myCarousel1\" class=\"carousel slide\" data-bs-ride=\"carousel\">
        <div class=\"carousel-indicators\">
            <button type=\"button\" data-bs-target=\"#myCarousel1\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
            <button type=\"button\" data-bs-target=\"#myCarousel1\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
            <button type=\"button\" data-bs-target=\"#myCarousel1\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
        </div>
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img src=\"https://nosamisleschiens.fr/wp-content/uploads/2012/11/Accesoires-pour-chiens.jpeg\" width=\"1400\" height=\"400\" />

                <div class=\"container\">
                    <div class=\"carousel-caption \">
                        <h1>Articles</h1>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"{{ path(\"articles\")}}\">voir plus</a></p>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img class=\"bd-placeholder-img\" src=\"https://i.pinimg.com/736x/35/2f/c5/352fc5e93707e038eb77e9ea6566d4c9.jpg\"   width=\"1500\" height=\"400\" />

                <div class=\"container\">
                    <div class=\"carousel-caption\">
                        <h1> Articles</h1>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"{{ path(\"articles\")}}\">Voir plus</a></p>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img class=\"bd-placeholder-img\" src=\"https://gardenforum.be/wp-content/uploads/ueberunswerte9.jpg\"  width=\"1500\" height=\"400\" />
                <div class=\"container\">
                    <div class=\"carousel-caption \">
                        <h1>Articles</h1>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"{{ path(\"articles\")}}\">Voir plus</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#myCarousel1\" data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Previous</span>
        </button>
        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#myCarousel1\" data-bs-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Next</span>
        </button>
    </div>

    </div>
</div>

{% endblock %}
", "home/index.html.twig", "/Users/mohamedsafir/Desktop/Ecole IPSSI/Symfony/siteProject/templates/home/index.html.twig");
    }
}
