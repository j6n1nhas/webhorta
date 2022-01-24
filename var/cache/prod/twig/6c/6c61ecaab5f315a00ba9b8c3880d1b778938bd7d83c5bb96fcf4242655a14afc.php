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

/* carrinho.html */
class __TwigTemplate_b1ff7deef97ed32eb5b467d324e9fe3b96a29ef7059041ba0cfe4894d9bce75c extends Template
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
        $this->parent = $this->loadTemplate("base.html", "carrinho.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        if (array_key_exists("referer", $context)) {
            // line 5
            echo "XPTO | Compra ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carrinho"] ?? null), "id", [], "any", false, false, false, 5), "html", null, true);
            echo "
";
        } else {
            // line 7
            echo "XPTO | Carrinho
";
        }
    }

    // line 11
    public function block_estilos($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/carrinho.css"), "html", null, true);
        echo "\">
";
    }

    // line 15
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 18
    public function block_conteudo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "
<div id=\"carrinho\" class=\"container-fluid shadow p-3\">
    ";
        // line 21
        if (array_key_exists("carrinho", $context)) {
            // line 22
            echo "        ";
            if (array_key_exists("referer", $context)) {
                // line 23
                echo "            <h2 class=\"fs-2\">Carrinho refª ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carrinho"] ?? null), "id", [], "any", false, false, false, 23), "html", null, true);
                echo "</h2>
            <ol class=\"list-group list-group-numbered\">
                ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["linhas_carrinho"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 26
                    echo "                    <li class=\"list-group-item d-flex w-100 justify-content-between align-items-start\">
                        <div class=\"ms-2 me-auto\">
                            <div class=\"fw-bold\">";
                    // line 28
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produto", [], "any", false, false, false, 28), "nome", [], "any", false, false, false, 28), "html", null, true);
                    echo "</div>
                            Preço Unitário: ";
                    // line 29
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->formatPreco(twig_get_attribute($this->env, $this->source, $context["item"], "getPrecoUnitario", [], "any", false, false, false, 29)), "html", null, true);
                    echo "<br/>
                            <small class=\"text-muted\">Unidade: ";
                    // line 30
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produto", [], "any", false, false, false, 30), "unidade", [], "any", false, false, false, 30), "nome", [], "any", false, false, false, 30), "html", null, true);
                    echo "</small>
                        </div>
                        <div class=\"d-flex flex-column align-self-stretch justify-content-between\">
                            <span class=\"badge bg-success rounded-pill align-self-end\">";
                    // line 33
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantidade", [], "any", false, false, false, 33), "html", null, true);
                    echo "</span>
                            <span>Subtotal: ";
                    // line 34
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->formatPreco((twig_get_attribute($this->env, $this->source, $context["item"], "quantidade", [], "any", false, false, false, 34) * twig_get_attribute($this->env, $this->source, $context["item"], "getPrecoUnitario", [], "any", false, false, false, 34))), "html", null, true);
                    echo "</span>
                        </div>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "            </ol>
            <ul class=\"list-group\">
                <li class=\"list-group-item d-flex w-100 justify-content-between align-items-center\">
                    <div class=\"ms-2 me-auto\">
                        <div class=\"fw-bold\">Valor total</div>
                    </div>
                    <span class=\"fw-bold\">";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->formatPreco(twig_get_attribute($this->env, $this->source, ($context["carrinho"] ?? null), "getValorTotal", [], "any", false, false, false, 44)), "html", null, true);
                echo "</span>
                </li>
                <li class=\"list-group-item d-flex w-100 justify-content-between align-items-start\">
                    <div class=\"ms-2 me-auto\">
                        <div class=\"fw-bold\">Data da compra</div>
                    </div>
                    <span class=\"fw-bold\">";
                // line 50
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carrinho"] ?? null), "getDataCompra", [], "any", false, false, false, 50), "d/m/Y"), "html", null, true);
                echo "</span>
                </li>
                <li class=\"list-group-item d-flex w-100 justify-content-between align-items-start\">
                    <div class=\"ms-2 me-auto\">
                        <div class=\"fw-bold\">Estado da compra</div>
                    </div>
                    <span class=\"fw-bold\">";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carrinho"] ?? null), "estado", [], "any", false, false, false, 56), "html", null, true);
                echo "</span>
                </li>
            </ul>
            <div class=\"d-grid gap-4 d-md-block mx-auto mt-3\">
                <a href=\"";
                // line 60
                echo twig_escape_filter($this->env, ($context["referer"] ?? null), "html", null, true);
                echo "\" class=\"btn btn-outline-secondary btn-lg\">Voltar...</a>
            </div>

        ";
            } else {
                // line 64
                echo "
            <h2 class=\"fs-2\">Carrinho de ";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 65), "nomeProprio", [], "any", false, false, false, 65), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 65), "nomeApelido", [], "any", false, false, false, 65), "html", null, true);
                echo "</h2>
            <ol class=\"list-group list-group-numbered\">
                ";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["carrinho"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 68
                    echo "                    ";
                    if (twig_test_iterable($context["value"])) {
                        // line 69
                        echo "                        <li class=\"list-group-item d-flex w-100 justify-content-between align-items-start\">
                            <div class=\"ms-2 me-auto\">
                                <div class=\"fw-bold\">";
                        // line 71
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "</div>
                                Preço Unitário: ";
                        // line 72
                        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->formatPreco(twig_get_attribute($this->env, $this->source, $context["value"], "preco_unitario", [], "any", false, false, false, 72)), "html", null, true);
                        echo "<br/>
                                <small class=\"text-muted\">Unidade: ";
                        // line 73
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "unidade", [], "any", false, false, false, 73), "html", null, true);
                        echo "</small>
                            </div>
                            <div class=\"d-flex flex-column align-self-stretch justify-content-between\">
                                <span class=\"badge bg-success rounded-pill align-self-end\">";
                        // line 76
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "quantidade", [], "any", false, false, false, 76), "html", null, true);
                        echo "</span>
                                <span>Subtotal: ";
                        // line 77
                        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->formatPreco((twig_get_attribute($this->env, $this->source, $context["value"], "quantidade", [], "any", false, false, false, 77) * twig_get_attribute($this->env, $this->source, $context["value"], "preco_unitario", [], "any", false, false, false, 77))), "html", null, true);
                        echo "</span>
                            </div>
                        </li>
                    ";
                    }
                    // line 81
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "            </ol>
            <ul class=\"list-group\">
                <li class=\"list-group-item d-flex w-100 justify-content-between align-items-center\">
                    <div class=\"ms-2 me-auto\">
                        <div class=\"fw-bold\">Valor total</div>
                    </div>
                    <span class=\"fw-bold\">";
                // line 88
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->formatPreco(twig_get_attribute($this->env, $this->source, ($context["carrinho"] ?? null), "valor_total", [], "any", false, false, false, 88)), "html", null, true);
                echo "</span>
                </li>
                <li class=\"list-group-item d-flex w-100 justify-content-between align-items-start\">
                    <div class=\"ms-2 me-auto\">
                        <div class=\"fw-bold\">Data da compra</div>
                    </div>
                    <span class=\"fw-bold\">";
                // line 94
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carrinho"] ?? null), "data_compra", [], "any", false, false, false, 94), "d/m/Y"), "html", null, true);
                echo "</span>
                </li>
            </ul>
            <div class=\"d-grid gap-4 d-md-block mx-auto mt-3\">
                <a href=\"";
                // line 98
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("grava_carrinho");
                echo "\" class=\"btn btn-outline-success btn-lg\">Confirmar</a>
                <a href=\"";
                // line 99
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cancela_carrinho");
                echo "\" class=\"btn btn-outline-warning btn-lg\">Cancelar</a>
                <a href=\"";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 100), "server", [], "any", false, false, false, 100), "get", [0 => "HTTP_REFERER"], "method", false, false, false, 100), "html", null, true);
                echo "\" class=\"btn btn-outline-secondary btn-lg\">Voltar...</a>
            </div>
        ";
            }
            // line 103
            echo "    ";
        } else {
            // line 104
            echo "        <div class=\"formulario p-5 container-sm\">
            ";
            // line 105
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
                ";
            // line 106
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "estado", [], "any", false, false, false, 106), 'row');
            echo "
                <div class=\"row\">
                    ";
            // line 108
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "btn_submit", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => "col-sm-6 btn btn-outline-success"]]);
            echo "
                    <a href=\"";
            // line 109
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
            echo "\" class=\"btn btn-outline-warning col-sm-6\">Cancelar</a>
                </div>
            ";
            // line 111
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "
        </div>
    ";
        }
        // line 114
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "carrinho.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 114,  293 => 111,  288 => 109,  284 => 108,  279 => 106,  275 => 105,  272 => 104,  269 => 103,  263 => 100,  259 => 99,  255 => 98,  248 => 94,  239 => 88,  231 => 82,  225 => 81,  218 => 77,  214 => 76,  208 => 73,  204 => 72,  200 => 71,  196 => 69,  193 => 68,  189 => 67,  182 => 65,  179 => 64,  172 => 60,  165 => 56,  156 => 50,  147 => 44,  139 => 38,  129 => 34,  125 => 33,  119 => 30,  115 => 29,  111 => 28,  107 => 26,  103 => 25,  97 => 23,  94 => 22,  92 => 21,  88 => 19,  84 => 18,  78 => 15,  71 => 12,  67 => 11,  61 => 7,  55 => 5,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "carrinho.html", "/home/johnny/Documents/Cursos/ISLA/ANO 2/SEMESTRE 3/Programação para a Web/Projeto/Project_root/templates/carrinho.html");
    }
}
