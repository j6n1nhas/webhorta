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
class __TwigTemplate_56ce570c41608a9ee29d8d82183b301394a6f0d8b7b716a2225002344c4785e9 extends Template
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
        echo "<div id=\"header\" class=\"justify-content-around\" style=\"display: flex; flex-flow: row nowrap;\">
  <h1 class=\"text-center m-4\">AGRICULTURA BIOLÓGICA XPTO</h1>
  ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 3), "carrinho", [], "any", true, true, false, 3)) {
            // line 4
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("carrinho");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/shopping-cart-filled.png"), "html", null, true);
            echo "\" style=\"width: 50px; height: 50px;\" alt=\"Carrinho de compras cheio\"></a>
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 21), "pathInfo", [], "any", false, false, false, 21) == "/")) {
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
        if (twig_in_filter("produtos", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 24), "pathInfo", [], "any", false, false, false, 24))) {
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
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 45)) {
            // line 46
            echo "              <li><a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Logout</a></li>
              ";
            // line 47
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 47), "has", [0 => "carrinho"], "method", false, false, false, 47)) {
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
        return array (  175 => 58,  169 => 56,  166 => 55,  160 => 53,  154 => 51,  151 => 50,  145 => 48,  143 => 47,  138 => 46,  136 => 45,  132 => 43,  128 => 41,  124 => 39,  122 => 38,  114 => 33,  110 => 32,  106 => 31,  90 => 24,  78 => 21,  66 => 12,  62 => 11,  57 => 8,  51 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "header_nav.html", "/home/johnny/Documents/Cursos/ISLA/ANO 2/SEMESTRE 3/Programação para a Web/Projeto/Project_root/templates/header_nav.html");
    }
}
