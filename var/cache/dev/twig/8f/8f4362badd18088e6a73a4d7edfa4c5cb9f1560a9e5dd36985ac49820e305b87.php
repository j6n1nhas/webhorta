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
class __TwigTemplate_40f68849b2d36c6828b48dd5afe3787982d45b6d6a34811ee1a9155999c2ff1a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carrinho.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carrinho.html"));

        $this->parent = $this->loadTemplate("base.html", "carrinho.html", 1);
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
        if (array_key_exists("referer", $context)) {
            // line 5
            echo "XPTO | Compra ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrinho"]) || array_key_exists("carrinho", $context) ? $context["carrinho"] : (function () { throw new RuntimeError('Variable "carrinho" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
            echo "
";
        } else {
            // line 7
            echo "XPTO | Carrinho
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_estilos($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "estilos"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "estilos"));

        // line 12
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/carrinho.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_conteudo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "conteudo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "conteudo"));

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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrinho"]) || array_key_exists("carrinho", $context) ? $context["carrinho"] : (function () { throw new RuntimeError('Variable "carrinho" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23), "html", null, true);
                echo "</h2>
            <ol class=\"list-group list-group-numbered\">
                ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["linhas_carrinho"]) || array_key_exists("linhas_carrinho", $context) ? $context["linhas_carrinho"] : (function () { throw new RuntimeError('Variable "linhas_carrinho" does not exist.', 25, $this->source); })()));
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
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->formatPreco(twig_get_attribute($this->env, $this->source, (isset($context["carrinho"]) || array_key_exists("carrinho", $context) ? $context["carrinho"] : (function () { throw new RuntimeError('Variable "carrinho" does not exist.', 44, $this->source); })()), "getValorTotal", [], "any", false, false, false, 44)), "html", null, true);
                echo "</span>
                </li>
                <li class=\"list-group-item d-flex w-100 justify-content-between align-items-start\">
                    <div class=\"ms-2 me-auto\">
                        <div class=\"fw-bold\">Data da compra</div>
                    </div>
                    <span class=\"fw-bold\">";
                // line 50
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrinho"]) || array_key_exists("carrinho", $context) ? $context["carrinho"] : (function () { throw new RuntimeError('Variable "carrinho" does not exist.', 50, $this->source); })()), "getDataCompra", [], "any", false, false, false, 50), "d/m/Y"), "html", null, true);
                echo "</span>
                </li>
                <li class=\"list-group-item d-flex w-100 justify-content-between align-items-start\">
                    <div class=\"ms-2 me-auto\">
                        <div class=\"fw-bold\">Estado da compra</div>
                    </div>
                    <span class=\"fw-bold\">";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrinho"]) || array_key_exists("carrinho", $context) ? $context["carrinho"] : (function () { throw new RuntimeError('Variable "carrinho" does not exist.', 56, $this->source); })()), "estado", [], "any", false, false, false, 56), "html", null, true);
                echo "</span>
                </li>
            </ul>
            <div class=\"d-grid gap-4 d-md-block mx-auto mt-3\">
                <a href=\"";
                // line 60
                echo twig_escape_filter($this->env, (isset($context["referer"]) || array_key_exists("referer", $context) ? $context["referer"] : (function () { throw new RuntimeError('Variable "referer" does not exist.', 60, $this->source); })()), "html", null, true);
                echo "\" class=\"btn btn-outline-secondary btn-lg\">Voltar...</a>
            </div>

        ";
            } else {
                // line 64
                echo "
            <h2 class=\"fs-2\">Carrinho de ";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "nomeProprio", [], "any", false, false, false, 65), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "nomeApelido", [], "any", false, false, false, 65), "html", null, true);
                echo "</h2>
            <ol class=\"list-group list-group-numbered\">
                ";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["carrinho"]) || array_key_exists("carrinho", $context) ? $context["carrinho"] : (function () { throw new RuntimeError('Variable "carrinho" does not exist.', 67, $this->source); })()));
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
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->formatPreco(twig_get_attribute($this->env, $this->source, (isset($context["carrinho"]) || array_key_exists("carrinho", $context) ? $context["carrinho"] : (function () { throw new RuntimeError('Variable "carrinho" does not exist.', 88, $this->source); })()), "valor_total", [], "any", false, false, false, 88)), "html", null, true);
                echo "</span>
                </li>
                <li class=\"list-group-item d-flex w-100 justify-content-between align-items-start\">
                    <div class=\"ms-2 me-auto\">
                        <div class=\"fw-bold\">Data da compra</div>
                    </div>
                    <span class=\"fw-bold\">";
                // line 94
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrinho"]) || array_key_exists("carrinho", $context) ? $context["carrinho"] : (function () { throw new RuntimeError('Variable "carrinho" does not exist.', 94, $this->source); })()), "data_compra", [], "any", false, false, false, 94), "d/m/Y"), "html", null, true);
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "request", [], "any", false, false, false, 100), "server", [], "any", false, false, false, 100), "get", [0 => "HTTP_REFERER"], "method", false, false, false, 100), "html", null, true);
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
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), 'form_start');
            echo "
                ";
            // line 106
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "estado", [], "any", false, false, false, 106), 'row');
            echo "
                <div class=\"row\">
                    ";
            // line 108
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "btn_submit", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => "col-sm-6 btn btn-outline-success"]]);
            echo "
                    <a href=\"";
            // line 109
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
            echo "\" class=\"btn btn-outline-warning col-sm-6\">Cancelar</a>
                </div>
            ";
            // line 111
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), 'form_end');
            echo "
        </div>
    ";
        }
        // line 114
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  353 => 114,  347 => 111,  342 => 109,  338 => 108,  333 => 106,  329 => 105,  326 => 104,  323 => 103,  317 => 100,  313 => 99,  309 => 98,  302 => 94,  293 => 88,  285 => 82,  279 => 81,  272 => 77,  268 => 76,  262 => 73,  258 => 72,  254 => 71,  250 => 69,  247 => 68,  243 => 67,  236 => 65,  233 => 64,  226 => 60,  219 => 56,  210 => 50,  201 => 44,  193 => 38,  183 => 34,  179 => 33,  173 => 30,  169 => 29,  165 => 28,  161 => 26,  157 => 25,  151 => 23,  148 => 22,  146 => 21,  142 => 19,  132 => 18,  114 => 15,  101 => 12,  91 => 11,  79 => 7,  73 => 5,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html' %}

{% block titulo %}
{% if referer is defined %}
XPTO | Compra {{ carrinho.id }}
{% else %}
XPTO | Carrinho
{% endif %}
{% endblock %}

{% block estilos %}
<link rel=\"stylesheet\" href=\"{{ asset('css/carrinho.css') }}\">
{% endblock %}

{% block scripts %}
{% endblock %}

{% block conteudo %}

<div id=\"carrinho\" class=\"container-fluid shadow p-3\">
    {% if carrinho is defined %}
        {% if referer is defined %}
            <h2 class=\"fs-2\">Carrinho refª {{ carrinho.id }}</h2>
            <ol class=\"list-group list-group-numbered\">
                {% for item in linhas_carrinho %}
                    <li class=\"list-group-item d-flex w-100 justify-content-between align-items-start\">
                        <div class=\"ms-2 me-auto\">
                            <div class=\"fw-bold\">{{ item.produto.nome }}</div>
                            Preço Unitário: {{ item.getPrecoUnitario|preco }}<br/>
                            <small class=\"text-muted\">Unidade: {{ item.produto.unidade.nome }}</small>
                        </div>
                        <div class=\"d-flex flex-column align-self-stretch justify-content-between\">
                            <span class=\"badge bg-success rounded-pill align-self-end\">{{ item.quantidade }}</span>
                            <span>Subtotal: {{ (item.quantidade * item.getPrecoUnitario)|preco }}</span>
                        </div>
                    </li>
                {% endfor %}
            </ol>
            <ul class=\"list-group\">
                <li class=\"list-group-item d-flex w-100 justify-content-between align-items-center\">
                    <div class=\"ms-2 me-auto\">
                        <div class=\"fw-bold\">Valor total</div>
                    </div>
                    <span class=\"fw-bold\">{{ carrinho.getValorTotal|preco }}</span>
                </li>
                <li class=\"list-group-item d-flex w-100 justify-content-between align-items-start\">
                    <div class=\"ms-2 me-auto\">
                        <div class=\"fw-bold\">Data da compra</div>
                    </div>
                    <span class=\"fw-bold\">{{ carrinho.getDataCompra|date(\"d/m/Y\") }}</span>
                </li>
                <li class=\"list-group-item d-flex w-100 justify-content-between align-items-start\">
                    <div class=\"ms-2 me-auto\">
                        <div class=\"fw-bold\">Estado da compra</div>
                    </div>
                    <span class=\"fw-bold\">{{ carrinho.estado }}</span>
                </li>
            </ul>
            <div class=\"d-grid gap-4 d-md-block mx-auto mt-3\">
                <a href=\"{{ referer }}\" class=\"btn btn-outline-secondary btn-lg\">Voltar...</a>
            </div>

        {% else %}

            <h2 class=\"fs-2\">Carrinho de {{ app.user.nomeProprio }} {{ app.user.nomeApelido }}</h2>
            <ol class=\"list-group list-group-numbered\">
                {% for key, value in carrinho %}
                    {% if value is iterable %}
                        <li class=\"list-group-item d-flex w-100 justify-content-between align-items-start\">
                            <div class=\"ms-2 me-auto\">
                                <div class=\"fw-bold\">{{ key }}</div>
                                Preço Unitário: {{ value.preco_unitario|preco }}<br/>
                                <small class=\"text-muted\">Unidade: {{ value.unidade }}</small>
                            </div>
                            <div class=\"d-flex flex-column align-self-stretch justify-content-between\">
                                <span class=\"badge bg-success rounded-pill align-self-end\">{{ value.quantidade }}</span>
                                <span>Subtotal: {{ (value.quantidade * value.preco_unitario)|preco }}</span>
                            </div>
                        </li>
                    {% endif %}
                {% endfor %}
            </ol>
            <ul class=\"list-group\">
                <li class=\"list-group-item d-flex w-100 justify-content-between align-items-center\">
                    <div class=\"ms-2 me-auto\">
                        <div class=\"fw-bold\">Valor total</div>
                    </div>
                    <span class=\"fw-bold\">{{ carrinho.valor_total|preco }}</span>
                </li>
                <li class=\"list-group-item d-flex w-100 justify-content-between align-items-start\">
                    <div class=\"ms-2 me-auto\">
                        <div class=\"fw-bold\">Data da compra</div>
                    </div>
                    <span class=\"fw-bold\">{{ carrinho.data_compra|date(\"d/m/Y\") }}</span>
                </li>
            </ul>
            <div class=\"d-grid gap-4 d-md-block mx-auto mt-3\">
                <a href=\"{{ path('grava_carrinho') }}\" class=\"btn btn-outline-success btn-lg\">Confirmar</a>
                <a href=\"{{ path('cancela_carrinho') }}\" class=\"btn btn-outline-warning btn-lg\">Cancelar</a>
                <a href=\"{{ app.request.server.get('HTTP_REFERER') }}\" class=\"btn btn-outline-secondary btn-lg\">Voltar...</a>
            </div>
        {% endif %}
    {% else %}
        <div class=\"formulario p-5 container-sm\">
            {{ form_start(form) }}
                {{ form_row(form.estado) }}
                <div class=\"row\">
                    {{ form_widget(form.btn_submit, {'attr': {'class': 'col-sm-6 btn btn-outline-success'}}) }}
                    <a href=\"{{ path('admin_index') }}\" class=\"btn btn-outline-warning col-sm-6\">Cancelar</a>
                </div>
            {{ form_end(form) }}
        </div>
    {% endif %}
</div>
{% endblock %}", "carrinho.html", "/home/johnny/Documents/Cursos/ISLA/ANO 2/SEMESTRE 3/Programação para a Web/Projeto/Project_root/templates/carrinho.html");
    }
}
