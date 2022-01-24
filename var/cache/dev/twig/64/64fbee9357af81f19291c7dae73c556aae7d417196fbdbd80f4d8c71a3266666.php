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

/* admin_index.html */
class __TwigTemplate_9295f5a57567f684a7b8525f649814ee43b3d43744c875b5531bf3a63ab1b43a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'titulo' => [$this, 'block_titulo'],
            'estilos' => [$this, 'block_estilos'],
            'scripts' => [$this, 'block_scripts'],
            'conteudo' => [$this, 'block_conteudo'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_index.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_index.html"));

        $this->parent = $this->loadTemplate("base.html", "admin_index.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        // line 4
        echo "XPTO | ADMIN
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_estilos($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "estilos"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "estilos"));

        // line 8
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/admin_index.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 12
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/admin_index.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_conteudo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "conteudo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "conteudo"));

        // line 17
        echo "<h2 class=\"fs-2 text-center mt-3\">DASHBOARD ADMIN</h2>
<div class=\"container-sm d-flex flex-row justify-content-between\">
    <section class=\"container-sm shadow m-3 p-3\" id=\"entidades\">
        <h3 class=\"fs-3 text-center mt-3\">Entidades</h3>
        <div class=\"accordion\" id=\"accordion\">
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\" id=\"head-produtos\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#body-produtos\" aria-expanded=\"false\" aria-controls=\"body-produtos\">
                        Produtos
                    </button>
                </h2>
                <div id=\"body-produtos\" class=\"accordion-collapse collapse\" aria-labelledby=\"head-produtos\" data-bs-parent=\"#accordion\">
                    <div class=\"accordion-body\">
                        <div class=\"list-group\">
\t\t\t\t\t\t\t<a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produto_add");
        echo "\" class=\"btn btn-primary\" aria-current=\"false\">
\t\t\t\t\t\t\t\tAdicionar novo produto
\t\t\t\t\t\t\t</a>
                            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produtos"]) || array_key_exists("produtos", $context) ? $context["produtos"] : (function () { throw new RuntimeError('Variable "produtos" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produto"]) {
            // line 35
            echo "\t\t\t\t\t\t\t<div class=\"list-group-item-action d-flex w-100 flex-row justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"check_";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "\" class=\"check\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produto_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["produto"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" class=\"list-group-item list-group-item-action\" aria-current=\"false\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex w-100 flex-row justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-1\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "nome", [], "any", false, false, false, 40), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\"><strong>Descrição:</strong> ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "descricao", [], "any", false, false, false, 41), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<small><strong>Unidade: </strong>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produto"], "unidade", [], "any", false, false, false, 42), "nome", [], "any", false, false, false, 42), "html", null, true);
            echo "</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<small><strong>Preço:</strong> ";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->formatPreco(twig_get_attribute($this->env, $this->source, $context["produto"], "getPrecoUnitario", [], "any", false, false, false, 45)), "html", null, true);
            echo "</small>
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("media/produtos/" . twig_get_attribute($this->env, $this->source, $context["produto"], "foto", [], "any", false, false, false, 46))), "html", null, true);
            echo "\" alt=\"Foto de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "nome", [], "any", false, false, false, 46), "html", null, true);
            echo "\" style=\"width: 50px; height: 50px;\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produto_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["produto"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" class=\"btn btn-danger align-self-center\" hidden>Apagar</a>
\t\t\t\t\t\t\t</div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                        </div>
                    </div>
                </div>
            </div>
            <div class=\"accordion-item\">
\t\t\t\t<h2 class=\"accordion-header\" id=\"head-unidades\">
\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#body-unidades\" aria-expanded=\"false\" aria-controls=\"body-unidades\">
\t\t\t\t\t\tUnidades
\t\t\t\t\t</button>
\t\t\t\t</h2>
\t\t\t\t<div id=\"body-unidades\" class=\"accordion-collapse collapse\" aria-labelledby=\"head-unidades\" data-bs-parent=\"#accordion\">
\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t<a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_unidade_add");
        echo "\" class=\"btn btn-primary\" aria-current=\"false\">
\t\t\t\t\t\t\t\tAdicionar nova unidade
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["unidades"]) || array_key_exists("unidades", $context) ? $context["unidades"] : (function () { throw new RuntimeError('Variable "unidades" does not exist.', 69, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["unidade"]) {
            // line 70
            echo "\t\t\t\t\t\t\t\t<div class=\"list-group-item list-group-item-action d-flex\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"check\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_unidade_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["unidade"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            echo "\" class=\"list-group-item list-group-item-action\" aria-current=\"false\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-1\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unidade"], "nome", [], "any", false, false, false, 73), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_unidade_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["unidade"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\" class=\"btn btn-danger align-self-stretch\" hidden>Apagar</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unidade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
            <div class=\"accordion-item\">
\t\t\t\t<h2 class=\"accordion-header\" id=\"head-utilizadores\">
\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#body-utilizadores\" aria-expanded=\"false\" aria-controls=\"body-utilizadores\">
\t\t\t\t\t\tUtilizadores
\t\t\t\t\t</button>
\t\t\t\t</h2>
\t\t\t\t<div id=\"body-utilizadores\" class=\"accordion-collapse collapse\" aria-labelledby=\"head-utilizadores\" data-bs-parent=\"#accordion\">
\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilizadores"]) || array_key_exists("utilizadores", $context) ? $context["utilizadores"] : (function () { throw new RuntimeError('Variable "utilizadores" does not exist.', 91, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["utilizador"]) {
            // line 92
            echo "\t\t\t\t\t\t\t<li class=\"list-group-item\" aria-current=\"false\">
\t\t\t\t\t\t\t\t<div class=\"d-flex w-100 flex-row justify-content-around align-items-center\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-1\">";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilizador"], "getNomeProprio", [], "any", false, false, false, 95), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilizador"], "getNomeApelido", [], "any", false, false, false, 95), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-1\">";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilizador"], "getUserIdentifier", [], "any", false, false, false, 96), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<ul class=\"list-group\">Autorizações:
\t\t\t\t\t\t\t\t\t\t";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["utilizador"], "getRoles", [], "any", false, false, false, 99));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 100
                echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">";
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item btn btn-primary bg-secondary\">Ativar/Desativar utilizador</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilizador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
\t\t</div>
    </section>
    <section class=\"container-sm shadow m-3 p-3\" id=\"carrinhos\">
        <h3 class=\"fs-3 text-center mt-3\">Carrinhos</h3>
\t\t<div class=\"list-group\">
\t\t\t";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carrinhos"]) || array_key_exists("carrinhos", $context) ? $context["carrinhos"] : (function () { throw new RuntimeError('Variable "carrinhos" does not exist.', 116, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["carrinho"]) {
            // line 117
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carrinho_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["carrinho"], "id", [], "any", false, false, false, 117), "estados" => false]), "html", null, true);
            echo "\" class=\"list-group-item list-group-item-action\" aria-current=\"false\">
\t\t\t\t\t<div class=\"d-flex w-100 justify-content-between\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h5 class=\"mb-1\">Carrinho nº";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carrinho"], "id", [], "any", false, false, false, 120), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t<p class=\"mb-1\">Utilizador: ";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["carrinho"], "getUser", [], "any", false, false, false, 121), "getNomeProprio", [], "any", false, false, false, 121), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["carrinho"], "getUser", [], "any", false, false, false, 121), "getNomeApelido", [], "any", false, false, false, 121), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<small class=\"estado-carrinho\">";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carrinho"], "estado", [], "any", false, false, false, 122), "html", null, true);
            echo "</small>\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex flex-column align-items-center justify-content-around\">
\t\t\t\t\t\t\t<small>";
            // line 125
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carrinho"], "getDataCompra", [], "any", false, false, false, 125), "d/m/Y"), "html", null, true);
            echo "</small>
\t\t\t\t\t\t\t<a href=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carrinho_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["carrinho"], "id", [], "any", false, false, false, 126), "estados" => true]), "html", null, true);
            echo "\" class=\"btn btn-primary btn_change_kart_status\">Alterar estado</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carrinho'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "\t\t</div>
    </section>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin_index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 131,  364 => 126,  360 => 125,  354 => 122,  348 => 121,  344 => 120,  337 => 117,  333 => 116,  322 => 107,  312 => 102,  303 => 100,  299 => 99,  293 => 96,  287 => 95,  282 => 92,  278 => 91,  263 => 78,  254 => 75,  249 => 73,  245 => 72,  241 => 70,  237 => 69,  231 => 66,  216 => 53,  207 => 50,  198 => 46,  194 => 45,  188 => 42,  184 => 41,  180 => 40,  174 => 37,  170 => 36,  167 => 35,  163 => 34,  157 => 31,  141 => 17,  131 => 16,  119 => 13,  115 => 12,  105 => 11,  92 => 8,  82 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html' %}

{% block titulo %}
XPTO | ADMIN
{% endblock %}

{% block estilos %}
<link rel=\"stylesheet\" href=\"{{ asset('/css/admin_index.css') }}\">
{% endblock %}

{% block scripts %}
{{ encore_entry_script_tags('app') }}
<script src=\"{{ asset('/js/admin_index.js') }}\"></script>
{% endblock %}

{% block conteudo %}
<h2 class=\"fs-2 text-center mt-3\">DASHBOARD ADMIN</h2>
<div class=\"container-sm d-flex flex-row justify-content-between\">
    <section class=\"container-sm shadow m-3 p-3\" id=\"entidades\">
        <h3 class=\"fs-3 text-center mt-3\">Entidades</h3>
        <div class=\"accordion\" id=\"accordion\">
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\" id=\"head-produtos\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#body-produtos\" aria-expanded=\"false\" aria-controls=\"body-produtos\">
                        Produtos
                    </button>
                </h2>
                <div id=\"body-produtos\" class=\"accordion-collapse collapse\" aria-labelledby=\"head-produtos\" data-bs-parent=\"#accordion\">
                    <div class=\"accordion-body\">
                        <div class=\"list-group\">
\t\t\t\t\t\t\t<a href=\"{{ path('admin_produto_add') }}\" class=\"btn btn-primary\" aria-current=\"false\">
\t\t\t\t\t\t\t\tAdicionar novo produto
\t\t\t\t\t\t\t</a>
                            {% for produto in produtos %}
\t\t\t\t\t\t\t<div class=\"list-group-item-action d-flex w-100 flex-row justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"check_{{ produto.id }}\" class=\"check\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('admin_produto_edit', {id: produto.id}) }}\" class=\"list-group-item list-group-item-action\" aria-current=\"false\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex w-100 flex-row justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-1\">{{ produto.nome }}</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\"><strong>Descrição:</strong> {{ produto.descricao }}</p>
\t\t\t\t\t\t\t\t\t\t\t<small><strong>Unidade: </strong>{{ produto.unidade.nome }}</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<small><strong>Preço:</strong> {{ produto.getPrecoUnitario|preco }}</small>
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('media/produtos/'~produto.foto) }}\" alt=\"Foto de {{ produto.nome }}\" style=\"width: 50px; height: 50px;\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('admin_produto_delete', {id: produto.id}) }}\" class=\"btn btn-danger align-self-center\" hidden>Apagar</a>
\t\t\t\t\t\t\t</div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"accordion-item\">
\t\t\t\t<h2 class=\"accordion-header\" id=\"head-unidades\">
\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#body-unidades\" aria-expanded=\"false\" aria-controls=\"body-unidades\">
\t\t\t\t\t\tUnidades
\t\t\t\t\t</button>
\t\t\t\t</h2>
\t\t\t\t<div id=\"body-unidades\" class=\"accordion-collapse collapse\" aria-labelledby=\"head-unidades\" data-bs-parent=\"#accordion\">
\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t<a href=\"{{ path('admin_unidade_add') }}\" class=\"btn btn-primary\" aria-current=\"false\">
\t\t\t\t\t\t\t\tAdicionar nova unidade
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% for unidade in unidades %}
\t\t\t\t\t\t\t\t<div class=\"list-group-item list-group-item-action d-flex\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"check\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('admin_unidade_edit', {id: unidade.id}) }}\" class=\"list-group-item list-group-item-action\" aria-current=\"false\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-1\">{{ unidade.nome }}</h5>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('admin_unidade_delete', {id: unidade.id}) }}\" class=\"btn btn-danger align-self-stretch\" hidden>Apagar</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
            <div class=\"accordion-item\">
\t\t\t\t<h2 class=\"accordion-header\" id=\"head-utilizadores\">
\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#body-utilizadores\" aria-expanded=\"false\" aria-controls=\"body-utilizadores\">
\t\t\t\t\t\tUtilizadores
\t\t\t\t\t</button>
\t\t\t\t</h2>
\t\t\t\t<div id=\"body-utilizadores\" class=\"accordion-collapse collapse\" aria-labelledby=\"head-utilizadores\" data-bs-parent=\"#accordion\">
\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t{% for utilizador in utilizadores %}
\t\t\t\t\t\t\t<li class=\"list-group-item\" aria-current=\"false\">
\t\t\t\t\t\t\t\t<div class=\"d-flex w-100 flex-row justify-content-around align-items-center\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-1\">{{ utilizador.getNomeProprio }} {{ utilizador.getNomeApelido }}</h5>
\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-1\">{{ utilizador.getUserIdentifier }}</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<ul class=\"list-group\">Autorizações:
\t\t\t\t\t\t\t\t\t\t{% for role in utilizador.getRoles %}
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">{{ role }}</li>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item btn btn-primary bg-secondary\">Ativar/Desativar utilizador</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
\t\t</div>
    </section>
    <section class=\"container-sm shadow m-3 p-3\" id=\"carrinhos\">
        <h3 class=\"fs-3 text-center mt-3\">Carrinhos</h3>
\t\t<div class=\"list-group\">
\t\t\t{% for carrinho in carrinhos %}
\t\t\t\t<a href=\"{{ path('admin_carrinho_edit', {id: carrinho.id, estados: false}) }}\" class=\"list-group-item list-group-item-action\" aria-current=\"false\">
\t\t\t\t\t<div class=\"d-flex w-100 justify-content-between\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h5 class=\"mb-1\">Carrinho nº{{ carrinho.id }}</h5>
\t\t\t\t\t\t\t<p class=\"mb-1\">Utilizador: {{ carrinho.getUser.getNomeProprio }} {{ carrinho.getUser.getNomeApelido }}</p>
\t\t\t\t\t\t\t<small class=\"estado-carrinho\">{{ carrinho.estado }}</small>\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex flex-column align-items-center justify-content-around\">
\t\t\t\t\t\t\t<small>{{ carrinho.getDataCompra|date('d/m/Y') }}</small>
\t\t\t\t\t\t\t<a href=\"{{ path('admin_carrinho_edit', {id: carrinho.id, estados: true}) }}\" class=\"btn btn-primary btn_change_kart_status\">Alterar estado</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t{% endfor %}
\t\t</div>
    </section>
</div>
{% endblock %}", "admin_index.html", "/home/johnny/Documents/Cursos/ISLA/ANO 2/SEMESTRE 3/Programação para a Web/Projeto/Project_root/templates/admin_index.html");
    }
}
