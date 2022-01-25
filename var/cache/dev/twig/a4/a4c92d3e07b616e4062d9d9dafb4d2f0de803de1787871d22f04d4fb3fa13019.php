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
class __TwigTemplate_fb499b05353eecead4a855cccd7a21559cba77530bbc2f038b2f557df323fb85 extends Template
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
        echo "<div id=\"header\" class=\"justify-content-around\" style=\"display: flex; flex-flow: row nowrap;\">
  <h1 class=\"text-center m-4\">AGRICULTURA BIOLÓGICA XPTO</h1>
  ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "session", [], "any", false, false, false, 3), "has", [0 => "carrinho"], "method", false, false, false, 3)) {
            // line 4
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("carrinho");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/shopping-cart-filled.png"), "html", null, true);
            echo "\" style=\"margin-top: 20px; width: 50px; height: 50px; align-self: center; justify-self: flex-end; float: right;\" alt=\"Carrinho de compras cheio\"></a>
  ";
        } else {
            // line 6
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/shopping-cart-empty.png"), "html", null, true);
            echo "\" style=\"width: 50px; height: 50px; align-self: center; justify-self: flex-end; float: right;\" alt=\"Carrinho de compras vazio\">
  ";
        }
        // line 8
        echo "</div>
<nav class=\"navbar navbar-expand-lg sticky-top navbar-light bg-secondary\" style=\"--bs-bg-opacity: .5;\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
        <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/ic_launcher_foreground.png"), "html", null, true);
        echo "\" alt=\"Logotipo da empresa\" width=\"75px\" height=\"75px\">
        XPTO BioAgro
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item px-2\">
          <a class=\"";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "pathInfo", [], "any", false, false, false, 21) == "/")) {
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
        // line 24
        if (twig_in_filter("produtos", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "pathInfo", [], "any", false, false, false, 24))) {
            echo "nav-link active";
        } else {
            echo "nav-link";
        }
        echo " fs-3\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produtos");
        echo "\">Produtos</a>
        </li>
        <li class=\"nav-item dropdown px-2\">
          <a class=\"nav-link dropdown-toggle btn-info fs-3\" href=\"#\" id=\"UsMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Sobre nós
          </a>
          <ul class=\"dropdown-menu dropdown-menu-dark\" aria-labelledby=\"UsMenuLink\">
            <li><a class=\"dropdown-item\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("whoweare");
        echo "\">Quem somos</a></li>
            <li><a class=\"dropdown-item\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("whereweare");
        echo "\">Onde estamos</a></li>
            <li><a class=\"dropdown-item\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contactus");
        echo "\">Contacte-nos</a></li>
          </ul>
        </li>
        <li class=\"nav-item dropdown px-2\">
          <a class=\"nav-link dropdown-toggle btn-info fs-3\" href=\"#\" id=\"ClientMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            ";
        // line 38
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 39
            echo "            Admin
            ";
        } else {
            // line 41
            echo "            Clientes
            ";
        }
        // line 43
        echo "          </a>
          <ul class=\"dropdown-menu dropdown-menu-dark\" aria-labelledby=\"ClientMenuLink\">
            ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45)) {
            // line 46
            echo "              <li><a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Logout</a></li>
              ";
            // line 47
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "session", [], "any", false, false, false, 47), "has", [0 => "carrinho"], "method", false, false, false, 47)) {
                // line 48
                echo "                <li><a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("carrinho");
                echo "\">Carrinho</a></li>
              ";
            }
            // line 50
            echo "              ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 51
                echo "                <li><a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
                echo "\">Dashboard</a></li>
              ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 53
                echo "                <li><a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
                echo "\">Dashboard</a></li>
              ";
            }
            // line 55
            echo "            ";
        } else {
            // line 56
            echo "              <li><a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Login</a></li>
            ";
        }
        // line 58
        echo "            <li><a class=\"dropdown-item\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signup");
        echo "\">Registo</a></li>
          </ul>
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
        return array (  181 => 58,  175 => 56,  172 => 55,  166 => 53,  160 => 51,  157 => 50,  151 => 48,  149 => 47,  144 => 46,  142 => 45,  138 => 43,  134 => 41,  130 => 39,  128 => 38,  120 => 33,  116 => 32,  112 => 31,  96 => 24,  84 => 21,  72 => 12,  68 => 11,  63 => 8,  57 => 6,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"header\" class=\"justify-content-around\" style=\"display: flex; flex-flow: row nowrap;\">
  <h1 class=\"text-center m-4\">AGRICULTURA BIOLÓGICA XPTO</h1>
  {% if app.session.has('carrinho') %}
    <a href=\"{{ path('carrinho') }}\"><img src=\"{{ asset('media/shopping-cart-filled.png') }}\" style=\"margin-top: 20px; width: 50px; height: 50px; align-self: center; justify-self: flex-end; float: right;\" alt=\"Carrinho de compras cheio\"></a>
  {% else %}
    <img src=\"{{ asset('media/shopping-cart-empty.png') }}\" style=\"width: 50px; height: 50px; align-self: center; justify-self: flex-end; float: right;\" alt=\"Carrinho de compras vazio\">
  {% endif %}
</div>
<nav class=\"navbar navbar-expand-lg sticky-top navbar-light bg-secondary\" style=\"--bs-bg-opacity: .5;\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"{{ path('index') }}\">
        <img src=\"{{ asset('images/ic_launcher_foreground.png') }}\" alt=\"Logotipo da empresa\" width=\"75px\" height=\"75px\">
        XPTO BioAgro
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
          <a class=\"nav-link dropdown-toggle btn-info fs-3\" href=\"#\" id=\"UsMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Sobre nós
          </a>
          <ul class=\"dropdown-menu dropdown-menu-dark\" aria-labelledby=\"UsMenuLink\">
            <li><a class=\"dropdown-item\" href=\"{{ path('whoweare') }}\">Quem somos</a></li>
            <li><a class=\"dropdown-item\" href=\"{{ path('whereweare') }}\">Onde estamos</a></li>
            <li><a class=\"dropdown-item\" href=\"{{ path('contactus') }}\">Contacte-nos</a></li>
          </ul>
        </li>
        <li class=\"nav-item dropdown px-2\">
          <a class=\"nav-link dropdown-toggle btn-info fs-3\" href=\"#\" id=\"ClientMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            {% if is_granted('ROLE_ADMIN') %}
            Admin
            {% else %}
            Clientes
            {% endif %}
          </a>
          <ul class=\"dropdown-menu dropdown-menu-dark\" aria-labelledby=\"ClientMenuLink\">
            {% if app.user %}
              <li><a class=\"dropdown-item\" href=\"{{ path('logout') }}\">Logout</a></li>
              {% if app.session.has('carrinho') %}
                <li><a class=\"dropdown-item\" href=\"{{ path('carrinho') }}\">Carrinho</a></li>
              {% endif %}
              {% if is_granted('ROLE_ADMIN') %}
                <li><a class=\"dropdown-item\" href=\"{{ path('admin_index') }}\">Dashboard</a></li>
              {% elseif is_granted('ROLE_USER') %}
                <li><a class=\"dropdown-item\" href=\"{{ path('dashboard') }}\">Dashboard</a></li>
              {% endif %}
            {% else %}
              <li><a class=\"dropdown-item\" href=\"{{ path('login') }}\">Login</a></li>
            {% endif %}
            <li><a class=\"dropdown-item\" href=\"{{ path('signup') }}\">Registo</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>", "header_nav.html", "/home/johnny/Documents/Cursos/ISLA/ANO 2/SEMESTRE 3/Programação para a Web/Projeto/Project_root/templates/header_nav.html");
    }
}
