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

/* produtos.html */
class __TwigTemplate_853c276dbb751021572ee1bf444f73132dd86de093edcfeb68c6745052e58e9c extends Template
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
        $this->parent = $this->loadTemplate("base.html", "produtos.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "XPTO | Produtos
";
    }

    // line 7
    public function block_estilos($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/produtos.css"), "html", null, true);
        echo "\">
";
    }

    // line 11
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/produtos.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 15
    public function block_conteudo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "<div class=\"row justify-content-evenly\">
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produtos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["produto"]) {
            // line 18
            echo "        <div class=\"card shadow m-3 p-3 col-2\">
            <img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("media/produtos/" . twig_get_attribute($this->env, $this->source, $context["produto"], "foto", [], "any", false, false, false, 19))), "html", null, true);
            echo "\" class=\"card-img-top img-thumbnail rounded border-success\" alt=\"Foto de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "nome", [], "any", false, false, false, 19), "html", null, true);
            echo "\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "nome", [], "any", false, false, false, 21), "html", null, true);
            echo "</h5>
                <h6 class=\"card-subtitle mb-2 text-muted\">Preço: ";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->formatPreco(twig_get_attribute($this->env, $this->source, $context["produto"], "getPrecoUnitario", [], "any", false, false, false, 22)), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produto"], "unidade", [], "any", false, false, false, 22), "nome", [], "any", false, false, false, 22), "html", null, true);
            echo "</h6>
                <p class=\"card-text\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "descricao", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
                <div class=\"d-flex justify-content-center\"><small>Stock: ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "stock", [], "any", false, false, false, 24), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->pluralize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produto"], "unidade", [], "any", false, false, false, 24), "nome", [], "any", false, false, false, 24), twig_get_attribute($this->env, $this->source, $context["produto"], "stock", [], "any", false, false, false, 24)), "html", null, true);
            echo "</small></div>
            </div>
            <div class=\"card-footer row\">
                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_carrinho", ["id" => twig_get_attribute($this->env, $this->source, $context["produto"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\" class=\"btn btn-outline-success col-lg-6 col-md-6 col-sm-6 p-0 m-1\">Adicionar ao carrinho</a>
                <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_carrinho", ["id" => twig_get_attribute($this->env, $this->source, $context["produto"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" class=\"btn btn-outline-danger col-lg-6 col-md-6 col-sm-6 p-0 m-1\">Remover do carrinho</a>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "produtos.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 32,  127 => 28,  123 => 27,  115 => 24,  111 => 23,  105 => 22,  101 => 21,  94 => 19,  91 => 18,  87 => 17,  84 => 16,  80 => 15,  73 => 12,  69 => 11,  62 => 8,  58 => 7,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "produtos.html", "/home/johnny/Documents/Cursos/ISLA/ANO 2/SEMESTRE 3/Programação para a Web/Projeto/Project_root/templates/produtos.html");
    }
}
