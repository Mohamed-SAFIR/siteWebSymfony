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

/* Base/navLogin.html.twig */
class __TwigTemplate_3cfa4a183c5b12b594a3d732baec2ad77e9d69468c26984b0dbc3ec7a9477843 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Base/navLogin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Base/navLogin.html.twig"));

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
        echo "animaux";
        echo "\">Animaux</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"";
        // line 16
        echo "article";
        echo "\" >Articles</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"";
        // line 19
        echo "registerBanq";
        echo "\" >Faire un don</a>
        </li>
      </ul>
      ";
        // line 23
        echo "        ";
        // line 24
        echo "      <ul class=\"navbar-nav mb-2 mb-lg-0\">
        <li  class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
        // line 26
        echo "/panier";
        echo "\" >Panier</a>
        </li>
        <li  class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
        // line 29
        echo "logout";
        echo "\">Déconnexion</a>
        </li>
      </ul>
        
        ";
        // line 34
        echo "      ";
        // line 35
        echo "    </div>
  </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Base/navLogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 35,  100 => 34,  93 => 29,  87 => 26,  83 => 24,  81 => 23,  75 => 19,  69 => 16,  63 => 13,  57 => 10,  47 => 3,  43 => 1,);
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
          <a class=\"nav-link active\" href=\"{{ 'animaux' }}\">Animaux</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"{{ 'article' }}\" >Articles</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"{{ 'registerBanq' }}\" >Faire un don</a>
        </li>
      </ul>
      {# <form class=\"d-flex\"> #}
        {# <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\"> #}
      <ul class=\"navbar-nav mb-2 mb-lg-0\">
        <li  class=\"nav-item\">
            <a class=\"nav-link active\" href=\"{{ '/panier' }}\" >Panier</a>
        </li>
        <li  class=\"nav-item\">
            <a class=\"nav-link active\" href=\"{{ 'logout' }}\">Déconnexion</a>
        </li>
      </ul>
        
        {# <button class=\"btn btn-outline-success\" type=\"submit\">Search</button> #}
      {# </form> #}
    </div>
  </div>
</nav>", "Base/navLogin.html.twig", "/Users/mohamedsafir/Desktop/Ecole IPSSI/Symfony/siteProject/templates/Base/navLogin.html.twig");
    }
}
