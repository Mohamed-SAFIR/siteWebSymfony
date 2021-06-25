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
class __TwigTemplate_5f5c0e1e0b1cfc1e13dc74a24a621e6bb903c482b69b0c102604eef0386f70c7 extends Template
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
        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"#\">SPA</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Accueil</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"#\">Animaux</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"#\" >Articles</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"#\" >Faire un don</a>
        </li>
      </ul>
      ";
        // line 23
        echo "        ";
        // line 24
        echo "      <ul class=\"navbar-nav mb-2 mb-lg-0\">
        <li  class=\"nav-item\">
            <a class=\"nav-link active\" href=\"#\" >Connexion</a>
        </li>
        <li  class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
        // line 29
        echo "inscription";
        echo "\">Inscription</a>
        </li>
      </ul>
        
        ";
        // line 34
        echo "      ";
        // line 35
        echo "    </div>
  </div>
</nav>";
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
        return array (  78 => 35,  76 => 34,  69 => 29,  62 => 24,  60 => 23,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Base/nav.html.twig", "/Users/mohamedsafir/Desktop/Ecole IPSSI/Symfony/siteProject/templates/Base/nav.html.twig");
    }
}
