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

/* header_nav.html */
class __TwigTemplate_30f675ae99a32238812d216de7efb0b15e3ef24e781b31dc20a78e3ff349beef extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header_nav.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header_nav.html"));

        // line 1
        echo "<h1 class=\"text-center m-4\">AGRICULTURA BIOLÓGICA XPTO</h1>
<nav class=\"navbar navbar-expand-lg sticky-top navbar-light bg-secondary\" style=\"--bs-bg-opacity: .5;\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/ic_launcher_foreground.png"), "html", null, true);
        echo "\" alt=\"Logotipo da empresa\" width=\"75px\" height=\"75px\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item px-2\">
          <a class=\"";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "pathInfo", [], "any", false, false, false, 13) == "/")) {
            echo "nav-link active";
        } else {
            echo "nav-link";
        }
        echo " fs-3\" aria-current=\"page\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Home</a>
        </li>
        <li class=\"nav-item px-2\">
          <a class=\"";
        // line 16
        if (twig_in_filter("produtos", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "pathInfo", [], "any", false, false, false, 16))) {
            echo "nav-link active";
        } else {
            echo "nav-link";
        }
        echo " fs-3\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produtos");
        echo "\">Produtos</a>
        </li>
        <li class=\"nav-item dropdown px-2\">
          <a class=\"nav-link dropdown-toggle btn-success fs-3\" href=\"#\" id=\"UsMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Sobre nós
          </a>
          <ul class=\"dropdown-menu\" aria-labelledby=\"UsMenuLink\">
            <li><a class=\"dropdown-item\" href=\"../pages/whoarewe.php\">Quem somos</a></li>
            <li><a class=\"dropdown-item\" href=\"../pages/wherearewe.php\">Onde estamos</a></li>
            <li><a class=\"dropdown-item\" href=\"../pages/database.php\">Base de dados</a></li>
          </ul>
        </li>
        <li class=\"nav-item dropdown px-2\">
          <a class=\"nav-link dropdown-toggle fs-3\" href=\"#\" id=\"ClientMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Clientes
          </a>
          <ul class=\"dropdown-menu\" aria-labelledby=\"ClientMenuLink\">
            ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) {
            // line 34
            echo "              <li><a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Logout</a></li>            
            ";
        } else {
            // line 36
            echo "              <li><a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Login</a></li>
            ";
        }
        // line 38
        echo "            <li><a class=\"dropdown-item\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signup");
        echo "\">Registo</a></li>
            ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39)) {
            // line 40
            echo "            <li><a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("carrinho");
            echo "\">Carrinho</a></li>
            ";
        }
        // line 42
        echo "          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "header_nav.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 42,  122 => 40,  120 => 39,  115 => 38,  109 => 36,  103 => 34,  101 => 33,  75 => 16,  63 => 13,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1 class=\"text-center m-4\">AGRICULTURA BIOLÓGICA XPTO</h1>
<nav class=\"navbar navbar-expand-lg sticky-top navbar-light bg-secondary\" style=\"--bs-bg-opacity: .5;\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"{{ path('index') }}\">
        <img src=\"{{ asset('images/ic_launcher_foreground.png') }}\" alt=\"Logotipo da empresa\" width=\"75px\" height=\"75px\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item px-2\">
          <a class=\"{% if app.request.pathInfo == '/' %}nav-link active{% else %}nav-link{% endif %} fs-3\" aria-current=\"page\" href=\"{{ path('index') }}\">Home</a>
        </li>
        <li class=\"nav-item px-2\">
          <a class=\"{% if 'produtos' in app.request.pathInfo %}nav-link active{% else %}nav-link{% endif %} fs-3\" href=\"{{ path('produtos') }}\">Produtos</a>
        </li>
        <li class=\"nav-item dropdown px-2\">
          <a class=\"nav-link dropdown-toggle btn-success fs-3\" href=\"#\" id=\"UsMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Sobre nós
          </a>
          <ul class=\"dropdown-menu\" aria-labelledby=\"UsMenuLink\">
            <li><a class=\"dropdown-item\" href=\"../pages/whoarewe.php\">Quem somos</a></li>
            <li><a class=\"dropdown-item\" href=\"../pages/wherearewe.php\">Onde estamos</a></li>
            <li><a class=\"dropdown-item\" href=\"../pages/database.php\">Base de dados</a></li>
          </ul>
        </li>
        <li class=\"nav-item dropdown px-2\">
          <a class=\"nav-link dropdown-toggle fs-3\" href=\"#\" id=\"ClientMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Clientes
          </a>
          <ul class=\"dropdown-menu\" aria-labelledby=\"ClientMenuLink\">
            {% if app.user %}
              <li><a class=\"dropdown-item\" href=\"{{ path('logout') }}\">Logout</a></li>            
            {% else %}
              <li><a class=\"dropdown-item\" href=\"{{ path('login') }}\">Login</a></li>
            {% endif %}
            <li><a class=\"dropdown-item\" href=\"{{ path('signup') }}\">Registo</a></li>
            {% if app.user %}
            <li><a class=\"dropdown-item\" href=\"{{ path('carrinho') }}\">Carrinho</a></li>
            {% endif %}
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>", "header_nav.html", "/home/johnny/Documents/Cursos/ISLA/ANO 2/SEMESTRE 3/Programação para a Web/Projeto/Project_root/my_project/templates/header_nav.html");
    }
}
