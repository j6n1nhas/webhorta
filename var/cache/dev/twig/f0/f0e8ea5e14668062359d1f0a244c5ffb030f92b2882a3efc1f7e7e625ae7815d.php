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
class __TwigTemplate_a2c28db400e13340510578bc81c6f2dbe689187eba48907cb6093d75a9ffccdd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard.html"));

        $this->parent = $this->loadTemplate("base.html", "dashboard.html", 1);
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
        echo "XPTO | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4), "getNomeProprio", [], "method", false, false, false, 4), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4), "getNomeApelido", [], "method", false, false, false, 4), "html", null, true);
        echo "
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/dashboard.css"), "html", null, true);
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
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dashboard.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_conteudo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "conteudo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "conteudo"));

        // line 16
        echo "<h2 class=\"fs-2 text-center m-4\">Dashboard</h2>
<section id=\"dashboard\" class=\"container-fluid\">
    <div id=\"dados\" class=\"container-md janela shadow p-3\">
        <h3 class=\"text-center m-3 fs-3\">Dados pessoais</h3>
        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start', ["attr" => ["novalidate" => true, "class" => "needs-validation"]]);
        echo "
        <div class=\"dados-item col-12\">
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "nome_proprio", [], "any", false, false, false, 22), 'label');
        echo "
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "nome_proprio", [], "any", false, false, false, 23), 'widget', ["attr" => ["disabled" => true]]);
        echo "
            <div class=\"invalid-feedback\">
                Introduza um nome válido
            </div>
            <div class=\"form-error\">
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nome_proprio", [], "any", false, false, false, 28), 'errors');
        echo "
            </div>
            <button type=\"button\" data-bs-toggle=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"btn_nome_proprio\">Alterar</button>
        </div>
        <div class=\"dados-item col-12\">
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "nome_apelido", [], "any", false, false, false, 33), 'label');
        echo "
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "nome_apelido", [], "any", false, false, false, 34), 'widget', ["attr" => ["disabled" => true]]);
        echo "
            <div class=\"invalid-feedback\">
                Introduza um apelido válido
            </div>
            <div class=\"form-error\">
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "nome_apelido", [], "any", false, false, false, 39), 'errors');
        echo "
            </div>
            <button type=\"button\" data-bs-toggle=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"btn_nome_apelido\">Alterar</button>
        </div>
        <div class=\"dados-item col-12\">
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "email", [], "any", false, false, false, 44), 'label');
        echo "
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "email", [], "any", false, false, false, 45), 'widget', ["attr" => ["disabled" => true]]);
        echo "
            <div class=\"invalid-feedback\">
                Introduza um endereço de e-mail válido
            </div>
            <div class=\"form-error\">
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "email", [], "any", false, false, false, 50), 'errors');
        echo "
            </div>
            <button type=\"button\" data-bs-toggle=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"btn_email\">Alterar</button>
        </div>
        <div class=\"dados-item col-12\">
            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "morada", [], "any", false, false, false, 55), 'label');
        echo "
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "morada", [], "any", false, false, false, 56), 'widget', ["attr" => ["disabled" => true]]);
        echo "
            <div class=\"form-error\">
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "morada", [], "any", false, false, false, 58), 'errors');
        echo "
            </div>
            <button type=\"button\" data-bs-toggle=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"btn_morada\">Alterar</button>
        </div>
        <div class=\"dados-item col-12\">
            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "cod_postal", [], "any", false, false, false, 63), 'label');
        echo "
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "cod_postal", [], "any", false, false, false, 64), 'widget', ["attr" => ["disabled" => true, "pattern" => "\\d{4}-\\d{3}", "maxlength" => 8, "size" => 8]]);
        echo "
            <div class=\"invalid-feedback\">
                Código postal no formato 0000-000
            </div>
            <div class=\"form-error\">
                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "cod_postal", [], "any", false, false, false, 69), 'errors');
        echo "
            </div>
            <button type=\"button\" data-bs-toggle=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"btn_cod_postal\">Alterar</button>
        </div>
        <div class=\"dados-item col-12\">
            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "localidade", [], "any", false, false, false, 74), 'label');
        echo "
            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "localidade", [], "any", false, false, false, 75), 'widget', ["attr" => ["disabled" => true]]);
        echo "
            <button type=\"button\" data-bs-toggle=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"btn_localidade\">Alterar</button>
        </div>
        <div class=\"dados-item col-12\" hidden>
            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "password", [], "any", false, false, false, 79), 'label');
        echo "
            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "password", [], "any", false, false, false, 80), 'widget', ["attr" => ["hidden" => true, "disabled" => true, "minlength" => 6]]);
        echo "
            <div class=\"invalid-feedback\">
                Mínimo 6 carateres
            </div>
            <div class=\"form-error\">
                ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "password", [], "any", false, false, false, 85), 'errors');
        echo "
            </div>
        </div>
        <div class=\"dados-item col-12\" hidden>
            ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "password2", [], "any", false, false, false, 89), 'label');
        echo "
            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "password2", [], "any", false, false, false, 90), 'widget', ["attr" => ["hidden" => true, "disabled" => true, "minlength" => 6]]);
        echo "
            <div class=\"invalid-feedback\">
                Tem de ser igual à password
            </div>
            <div class=\"form-error\">
                ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "password2", [], "any", false, false, false, 95), 'errors');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), 'form_end');
        echo "
    </div>
    <div id=\"carrinhos\" class=\"janela shadow container-sm list-group p-3\">
        <h3 class=\"text-center m-3 fs-3\">Compras efetuadas</h3>
        <div class=\"list-group w-100 carrinhos-group p-3\">
            ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carrinhos"]) || array_key_exists("carrinhos", $context) ? $context["carrinhos"] : (function () { throw new RuntimeError('Variable "carrinhos" does not exist.', 110, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  349 => 121,  340 => 118,  336 => 117,  332 => 116,  327 => 114,  323 => 113,  317 => 111,  313 => 110,  305 => 105,  292 => 95,  284 => 90,  280 => 89,  273 => 85,  265 => 80,  261 => 79,  254 => 75,  250 => 74,  242 => 69,  234 => 64,  230 => 63,  222 => 58,  217 => 56,  213 => 55,  205 => 50,  197 => 45,  193 => 44,  185 => 39,  177 => 34,  173 => 33,  165 => 28,  157 => 23,  153 => 22,  148 => 20,  142 => 16,  132 => 15,  119 => 12,  109 => 11,  96 => 8,  86 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html' %}

{% block titulo %}
XPTO | {{ app.user.getNomeProprio() }} {{ app.user.getNomeApelido() }}
{% endblock %}

{% block estilos %}
<link rel=\"stylesheet\" href=\"{{ asset('css/dashboard.css') }}\">
{% endblock %}

{% block scripts %}
<script src=\"{{ asset('js/dashboard.js') }}\"></script>
{% endblock %}

{% block conteudo %}
<h2 class=\"fs-2 text-center m-4\">Dashboard</h2>
<section id=\"dashboard\" class=\"container-fluid\">
    <div id=\"dados\" class=\"container-md janela shadow p-3\">
        <h3 class=\"text-center m-3 fs-3\">Dados pessoais</h3>
        {{ form_start(form, {'attr': {'novalidate': true, 'class': 'needs-validation'}}) }}
        <div class=\"dados-item col-12\">
            {{ form_label(form.nome_proprio) }}
            {{ form_widget(form.nome_proprio, {'attr': {'disabled': true}}) }}
            <div class=\"invalid-feedback\">
                Introduza um nome válido
            </div>
            <div class=\"form-error\">
                {{ form_errors(form.nome_proprio) }}
            </div>
            <button type=\"button\" data-bs-toggle=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"btn_nome_proprio\">Alterar</button>
        </div>
        <div class=\"dados-item col-12\">
            {{ form_label(form.nome_apelido) }}
            {{ form_widget(form.nome_apelido, {'attr': {'disabled': true}}) }}
            <div class=\"invalid-feedback\">
                Introduza um apelido válido
            </div>
            <div class=\"form-error\">
                {{ form_errors(form.nome_apelido) }}
            </div>
            <button type=\"button\" data-bs-toggle=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"btn_nome_apelido\">Alterar</button>
        </div>
        <div class=\"dados-item col-12\">
            {{ form_label(form.email) }}
            {{ form_widget(form.email, {'attr': {'disabled': true}}) }}
            <div class=\"invalid-feedback\">
                Introduza um endereço de e-mail válido
            </div>
            <div class=\"form-error\">
                {{ form_errors(form.email) }}
            </div>
            <button type=\"button\" data-bs-toggle=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"btn_email\">Alterar</button>
        </div>
        <div class=\"dados-item col-12\">
            {{ form_label(form.morada) }}
            {{ form_widget(form.morada, {'attr': {'disabled': true}}) }}
            <div class=\"form-error\">
                {{ form_errors(form.morada) }}
            </div>
            <button type=\"button\" data-bs-toggle=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"btn_morada\">Alterar</button>
        </div>
        <div class=\"dados-item col-12\">
            {{ form_label(form.cod_postal) }}
            {{ form_widget(form.cod_postal, {'attr': {'disabled': true, 'pattern': \"\\\\d{4}-\\\\d{3}\", \"maxlength\": 8, 'size': 8}}) }}
            <div class=\"invalid-feedback\">
                Código postal no formato 0000-000
            </div>
            <div class=\"form-error\">
                {{ form_errors(form.cod_postal) }}
            </div>
            <button type=\"button\" data-bs-toggle=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"btn_cod_postal\">Alterar</button>
        </div>
        <div class=\"dados-item col-12\">
            {{ form_label(form.localidade) }}
            {{ form_widget(form.localidade, {'attr': {'disabled': true}}) }}
            <button type=\"button\" data-bs-toggle=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"btn_localidade\">Alterar</button>
        </div>
        <div class=\"dados-item col-12\" hidden>
            {{ form_label(form.password) }}
            {{ form_widget(form.password, {'attr': {'hidden': true, 'disabled': true, 'minlength': 6}}) }}
            <div class=\"invalid-feedback\">
                Mínimo 6 carateres
            </div>
            <div class=\"form-error\">
                {{ form_errors(form.password) }}
            </div>
        </div>
        <div class=\"dados-item col-12\" hidden>
            {{ form_label(form.password2) }}
            {{ form_widget(form.password2, {'attr': {'hidden': true, 'disabled': true, 'minlength': 6}}) }}
            <div class=\"invalid-feedback\">
                Tem de ser igual à password
            </div>
            <div class=\"form-error\">
                {{ form_errors(form.password2) }}
            </div>
        </div>
        <div class=\"dados-item col-12\">
            <button id=\"btn_password\" type=\"button\" data-bs-toggle=\"button\" class=\"btn btn-outline-secondary\">Alterar password</button>
        </div>
        <div class=\"dados-item col-12\">
            <input type=\"reset\" id=\"btn_reset\" value=\"Repôr\" class=\"btn btn-outline-warning\">
            <input type=\"submit\" id=\"btn_submit\" value=\"Submeter\" class=\"btn btn-outline-success\" disabled>
        </div>
    {{ form_end(form) }}
    </div>
    <div id=\"carrinhos\" class=\"janela shadow container-sm list-group p-3\">
        <h3 class=\"text-center m-3 fs-3\">Compras efetuadas</h3>
        <div class=\"list-group w-100 carrinhos-group p-3\">
            {% for carrinho in carrinhos %}
                <a href=\"{{ path('show_sell', {id: carrinho.id}) }}\" class=\"list-group-item\" aria-current=\"true\">
                    <div class=\"d-flex justify-content-between\">
                        <h5 class=\"mb-1\">Compra refª {{ carrinho.id }}</h5>
                        <small>{{ carrinho.getDataCompra|date(\"d/m/Y\") }}</small>
                    </div>
                    <p class=\"mb-1\">Valor total: {{ carrinho.getValorTotal|preco }}</p>
                    <p class=\"mb-1\">Estado: <span class=\"fw-bold estado-carrinho\">{{ carrinho.estado }}</span></p>
                    <small>Items: {{ carrinho.getCarrinhoProduto|length }}</small>
                </a>
            {% endfor %}
        </div>
    </div>
</section>
{% endblock %}", "dashboard.html", "/home/johnny/Documents/Cursos/ISLA/ANO 2/SEMESTRE 3/Programação para a Web/Projeto/Project_root/templates/dashboard.html");
    }
}
