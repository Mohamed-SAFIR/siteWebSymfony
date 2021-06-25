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

/* Base/nav.html.twig */
class __TwigTemplate_2b43171062612a304f1bec86756d01ff2c6c32112c0fdb436c88d87368def458 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Base/nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Base/nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"";
        // line 3
        echo "/";
        echo "\">DELTA</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 10
        echo "/";
        echo "\">Accueil</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"";
        // line 13
        echo "/animaux";
        echo "\">Animaux</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"";
        // line 16
        echo "/article";
        echo "\" >Articles</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"";
        // line 19
        echo "/registerBanq";
        echo "\" >Faire un don</a>
        </li>
      </ul>

        ";
        // line 23
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 24
            echo "          <ul class=\"navbar-nav mb-2 mb-lg-0\">
            <li  class=\"nav-item\">
                <a class=\"nav-link active\" href=\"";
            // line 26
            echo "/panier";
            echo "\" >Panier</a>
            </li>
            <li  class=\"nav-item\">
                <a class=\"nav-link active\" href=\"";
            // line 29
            echo "/logout";
            echo "\">Déconnexion</a>
            </li>
          </ul>
            ";
        } else {
            // line 33
            echo "            <ul class=\"navbar-nav mb-2 mb-lg-0\">
            <li  class=\"nav-item\">
                <a class=\"nav-link active\" href=\"";
            // line 35
            echo "/connexion";
            echo "\" >Connexion</a>
            </li>
            <li  class=\"nav-item\">
                <a class=\"nav-link active\" href=\"";
            // line 38
            echo "/inscription";
            echo "\">Inscription</a>
            </li>
         </ul>
        ";
        }
        // line 42
        echo "      
        
    </div>
  </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Base/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 42,  111 => 38,  105 => 35,  101 => 33,  94 => 29,  88 => 26,  84 => 24,  82 => 23,  75 => 19,  69 => 16,  63 => 13,  57 => 10,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"{{'/'}}\">DELTA</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"{{'/'}}\">Accueil</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"{{ '/animaux' }}\">Animaux</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"{{ '/article' }}\" >Articles</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"{{ '/registerBanq' }}\" >Faire un don</a>
        </li>
      </ul>

        {% if is_granted(\"ROLE_USER\") %}
          <ul class=\"navbar-nav mb-2 mb-lg-0\">
            <li  class=\"nav-item\">
                <a class=\"nav-link active\" href=\"{{ '/panier' }}\" >Panier</a>
            </li>
            <li  class=\"nav-item\">
                <a class=\"nav-link active\" href=\"{{ '/logout' }}\">Déconnexion</a>
            </li>
          </ul>
            {% else %}
            <ul class=\"navbar-nav mb-2 mb-lg-0\">
            <li  class=\"nav-item\">
                <a class=\"nav-link active\" href=\"{{ '/connexion' }}\" >Connexion</a>
            </li>
            <li  class=\"nav-item\">
                <a class=\"nav-link active\" href=\"{{ '/inscription' }}\">Inscription</a>
            </li>
         </ul>
        {% endif %}
      
        
    </div>
  </div>
</nav>", "Base/nav.html.twig", "/Users/mohamedsafir/Desktop/Ecole IPSSI/Symfony/siteProject/templates/Base/nav.html.twig");
    }
}
