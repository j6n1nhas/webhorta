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

/* dashboard.html */
class __TwigTemplate_fa3e5d759d22ed98a886eb0529ae4737c92ae3310d39b20381d2dfbac6fb05d4 extends Template
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
        $this->parent = $this->loadTemplate("base.html", "dashboard.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "XPTO | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 4), "getNomeProprio", [], "method", false, false, false, 4), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 4), "getNomeApelido", [], "method", false, false, false, 4), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_estilos($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/dashboard.css"), "html", null, true);
        echo "\">
";
    }

    // line 11
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dashboard.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 15
    public function block_conteudo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "<h2 class=\"fs-2 text-center m-4\">Dashboard</h2>
<section id=\"dashboard\" class=\"container-fluid\">
    <div id=\"dados\" class=\"container-md janela shadow p-3\">
        <h3 class=\"text-center m-3 fs-3\">Dados pessoais</h3>
        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => true, "class" => "needs-validation"]]);
        echo "
        <div class=\"dados-item col-12\">
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nome_proprio", [], "any", false, false, false, 22), 'label');
        echo "
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nome_proprio", [], "any", false, false, false, 23), 'widget', ["attr" => ["disabled" => true]]);
        echo "
            <div class=\"invalid-feedback\">
                Introduza um nome válido
            </div>
            <div class=\"form-error\">
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nome_proprio", [], "any", false, false, false, 28), 'errors');
        echo "
            </div>
            <button type=\"button\" data-bs-toggle=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"btn_nome_proprio\">Alterar</button>
        </div>
        <div class=\"dados-item col-12\">
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nome_apelido", [], "any", false, false, false, 33), 'label');
        echo "
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nome_apelido", [], "any", false, false, false, 34), 'widget', ["attr" => ["disabled" => true]]);
        echo "
            <div class=\"invalid-feedback\">
                Introduza um apelido válido
            </div>
            <div class=\"form-error\">
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nome_apelido", [], "any", false, false, false, 39), 'errors');
        echo "
            </div>
            <button type=\"button\" data-bs-toggle=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"btn_nome_apelido\">Alterar</button>
        </div>
        <div class=\"dados-item col-12\">
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 44), 'label');
        echo "
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 45), 'widget', ["attr" => ["disabled" => true]]);
        echo "
            <div class=\"invalid-feedback\">
                Introduza um endereço de e-mail válido
            </div>
            <div class=\"form-error\">
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 50), 'errors');
        echo "
            </div>
            <button type=\"button\" data-bs-toggle=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"btn_email\">Alterar</button>
        </div>
        <div class=\"dados-item col-12\">
            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "morada", [], "any", false, false, false, 55), 'label');
        echo "
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "morada", [], "any", false, false, false, 56), 'widget', ["attr" => ["disabled" => true]]);
        echo "
            <div class=\"form-error\">
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "morada", [], "any", false, false, false, 58), 'errors');
        echo "
            </div>
            <button type=\"button\" data-bs-toggle=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"btn_morada\">Alterar</button>
        </div>
        <div class=\"dados-item col-12\">
            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "cod_postal", [], "any", false, false, false, 63), 'label');
        echo "
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "cod_postal", [], "any", false, false, false, 64), 'widget', ["attr" => ["disabled" => true, "pattern" => "\\d{4}-\\d{3}", "maxlength" => 8, "size" => 8]]);
        echo "
            <div class=\"invalid-feedback\">
                Código postal no formato 0000-000
            </div>
            <div class=\"form-error\">
                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "cod_postal", [], "any", false, false, false, 69), 'errors');
        echo "
            </div>
            <button type=\"button\" data-bs-toggle=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"btn_cod_postal\">Alterar</button>
        </div>
        <div class=\"dados-item col-12\">
            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "localidade", [], "any", false, false, false, 74), 'label');
        echo "
            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "localidade", [], "any", false, false, false, 75), 'widget', ["attr" => ["disabled" => true]]);
        echo "
            <button type=\"button\" data-bs-toggle=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"btn_localidade\">Alterar</button>
        </div>
        <div class=\"dados-item col-12\" hidden>
            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 79), 'label');
        echo "
            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 80), 'widget', ["attr" => ["hidden" => true, "disabled" => true, "minlength" => 6]]);
        echo "
            <div class=\"invalid-feedback\">
                Mínimo 6 carateres
            </div>
            <div class=\"form-error\">
                ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 85), 'errors');
        echo "
            </div>
        </div>
        <div class=\"dados-item col-12\" hidden>
            ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password2", [], "any", false, false, false, 89), 'label');
        echo "
            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password2", [], "any", false, false, false, 90), 'widget', ["attr" => ["hidden" => true, "disabled" => true, "minlength" => 6]]);
        echo "
            <div class=\"invalid-feedback\">
                Tem de ser igual à password
            </div>
            <div class=\"form-error\">
                ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password2", [], "any", false, false, false, 95), 'errors');
        echo "
            </div>
        </div>
        <div class=\"dados-item col-12\">
            <button id=\"btn_password\" type=\"button\" data-bs-toggle=\"button\" class=\"btn btn-outline-secondary\">Alterar password</button>
        </div>
        <div class=\"dados-item col-12\">
            <input type=\"reset\" id=\"btn_reset\" value=\"Repôr\" class=\"btn btn-outline-warning\">
            <input type=\"submit\" id=\"btn_submit\" value=\"Submeter\" class=\"btn btn-outline-success\" disabled>
        </div>
    ";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
    <div id=\"carrinhos\" class=\"janela shadow container-sm list-group p-3\">
        <h3 class=\"text-center m-3 fs-3\">Compras efetuadas</h3>
        <div class=\"list-group w-100 carrinhos-group p-3\">
            ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["carrinhos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["carrinho"]) {
            // line 111
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_sell", ["id" => twig_get_attribute($this->env, $this->source, $context["carrinho"], "id", [], "any", false, false, false, 111)]), "html", null, true);
            echo "\" class=\"list-group-item\" aria-current=\"true\">
                    <div class=\"d-flex justify-content-between\">
                        <h5 class=\"mb-1\">Compra refª ";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carrinho"], "id", [], "any", false, false, false, 113), "html", null, true);
            echo "</h5>
                        <small>";
            // line 114
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carrinho"], "getDataCompra", [], "any", false, false, false, 114), "d/m/Y"), "html", null, true);
            echo "</small>
                    </div>
                    <p class=\"mb-1\">Valor total: ";
            // line 116
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->formatPreco(twig_get_attribute($this->env, $this->source, $context["carrinho"], "getValorTotal", [], "any", false, false, false, 116)), "html", null, true);
            echo "</p>
                    <p class=\"mb-1\">Estado: <span class=\"fw-bold estado-carrinho\">";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carrinho"], "estado", [], "any", false, false, false, 117), "html", null, true);
            echo "</span></p>
                    <small>Items: ";
            // line 118
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carrinho"], "getCarrinhoProduto", [], "any", false, false, false, 118)), "html", null, true);
            echo "</small>
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carrinho'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "dashboard.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 121,  286 => 118,  282 => 117,  278 => 116,  273 => 114,  269 => 113,  263 => 111,  259 => 110,  251 => 105,  238 => 95,  230 => 90,  226 => 89,  219 => 85,  211 => 80,  207 => 79,  200 => 75,  196 => 74,  188 => 69,  180 => 64,  176 => 63,  168 => 58,  163 => 56,  159 => 55,  151 => 50,  143 => 45,  139 => 44,  131 => 39,  123 => 34,  119 => 33,  111 => 28,  103 => 23,  99 => 22,  94 => 20,  88 => 16,  84 => 15,  77 => 12,  73 => 11,  66 => 8,  62 => 7,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard.html", "/home/johnny/Documents/Cursos/ISLA/ANO 2/SEMESTRE 3/Programação para a Web/Projeto/Project_root/templates/dashboard.html");
    }
}
