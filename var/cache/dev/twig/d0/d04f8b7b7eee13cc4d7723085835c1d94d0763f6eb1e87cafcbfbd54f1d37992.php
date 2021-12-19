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

/* register.html */
class __TwigTemplate_28499ca09b47ca46b1087dc907fe524ea6e8b9a9157774074899d2ba29dd5c94 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'estilos' => [$this, 'block_estilos'],
            'scripts' => [$this, 'block_scripts'],
            'titulo' => [$this, 'block_titulo'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register.html"));

        $this->parent = $this->loadTemplate("base.html", "register.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_estilos($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "estilos"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "estilos"));

        // line 3
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/register.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 6
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/register.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        // line 9
        echo "XPTO | Registo
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_conteudo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "conteudo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "conteudo"));

        // line 12
        echo "<h2 class=\"text-center mt-3 mb-1\">Registo de cliente</h2>
<div class=\"container-fluid formulario mt-5\">
    <form action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signup");
        echo "\" name=\"form_register\" method=\"POST\" class=\"needs-validation simple-validation-alert\" autocomplete=\"off\" novalidate>
        <div class=\"row\">
            <div class=\"col-sm-4 col-lg-6 p-3\">
                <label for=\"nome_proprio\" class=\"form-label\">Nome próprio</label>
                <input type=\"text\" name=\"nome_proprio\" id=\"nome_proprio\" class=\"form-control\" placeholder=\"Insira o seu nome próprio...\" required>
                <div class=\"invalid-feedback\">
                    Introduza um nome válido
                </div>
            </div>
            <div class=\"col-sm-4 col-lg-6 p-3\">
                <label for=\"nome_apelido\" class=\"form-label\">Apelido</label>
                <input type=\"text\" name=\"nome_apelido\" id=\"nome_apelido\" class=\"form-control\" placeholder=\"Insira o seu apelido...\">
            </div>
            <div class=\"col-sm-4 col-lg-6 p-3\">
                <label for=\"email\" class=\"form-label\">Email</label>
                <input type=\"email\" name=\"email\" id=\"email\" class=\"form-control\" placeholder=\"Insira o seu endereço de e-mail...\" required>
                <div class=\"invalid-feedback\">
                    Insira um endereço de e-mail válido
                </div>
            </div>
            <div class=\"col-sm-4 col-lg-6 p-3\">
                <label for=\"morada\" class=\"form-label\">Morada</label>
                <input type=\"text\" name=\"morada\" id=\"morada\" class=\"form-control\" placeholder=\"Insira a sua morada...\">
            </div>
            <div class=\"col-sm-4 col-lg-3 p-3\">
                <label for=\"cod_postal\" class=\"form-label\">Código postal</label>
                <input type=\"text\" name=\"cod_postal\" id=\"cod_postal\" class=\"form-control\" pattern=\"\\d{4}-\\d{3}\" placeholder=\"Insira o seu código postal...\">
                <div class=\"invalid-feedback\">
                    Código postal no formato xxxx-xxx
                </div>
            </div>
            <div class=\"col-sm-4 col-lg-6 p-3\">
                <label for=\"password1\" class=\"form-label\">Password</label>
                <input type=\"password\" name=\"password1\" id=\"password1\" class=\"form-control\" minlength=\"6\" required>
                <div class=\"invalid-feedback\">
                    Necessário com mínimo 6 carateres
                </div>
            </div>
            <div class=\"col-sm-4 col-lg-6 p-3\">
                <label for=\"password2\" class=\"form-label\">Confirmação da password</label>
                <input type=\"password\" name=\"password2\" id=\"password2\" class=\"form-control\" data-match=\"password1\" minlength=\"6\" required>
                <div class=\"invalid-feedback\">
                    Tem de ser igual à password
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-4 col-lg-6 p-3\">
                <input type=\"submit\" name=\"btn_submit\" id=\"btn_submit\" class=\"btn-primary p-2\" value=\"Registar\">
            </div>
        </div>
    </form>
    ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form');
        echo "
    ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'form_start');
        echo "
    ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'form_end');
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 68,  201 => 67,  197 => 66,  142 => 14,  138 => 12,  128 => 11,  117 => 9,  107 => 8,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html' %}
{% block estilos %}
<link rel=\"stylesheet\" href=\"{{ asset('css/register.css') }}\">
{% endblock %}
{% block scripts %}
<script src=\"{{ asset('js/register.js') }}\"></script>
{% endblock %}
{% block titulo %}
XPTO | Registo
{% endblock %}
{% block conteudo %}
<h2 class=\"text-center mt-3 mb-1\">Registo de cliente</h2>
<div class=\"container-fluid formulario mt-5\">
    <form action=\"{{ path('signup') }}\" name=\"form_register\" method=\"POST\" class=\"needs-validation simple-validation-alert\" autocomplete=\"off\" novalidate>
        <div class=\"row\">
            <div class=\"col-sm-4 col-lg-6 p-3\">
                <label for=\"nome_proprio\" class=\"form-label\">Nome próprio</label>
                <input type=\"text\" name=\"nome_proprio\" id=\"nome_proprio\" class=\"form-control\" placeholder=\"Insira o seu nome próprio...\" required>
                <div class=\"invalid-feedback\">
                    Introduza um nome válido
                </div>
            </div>
            <div class=\"col-sm-4 col-lg-6 p-3\">
                <label for=\"nome_apelido\" class=\"form-label\">Apelido</label>
                <input type=\"text\" name=\"nome_apelido\" id=\"nome_apelido\" class=\"form-control\" placeholder=\"Insira o seu apelido...\">
            </div>
            <div class=\"col-sm-4 col-lg-6 p-3\">
                <label for=\"email\" class=\"form-label\">Email</label>
                <input type=\"email\" name=\"email\" id=\"email\" class=\"form-control\" placeholder=\"Insira o seu endereço de e-mail...\" required>
                <div class=\"invalid-feedback\">
                    Insira um endereço de e-mail válido
                </div>
            </div>
            <div class=\"col-sm-4 col-lg-6 p-3\">
                <label for=\"morada\" class=\"form-label\">Morada</label>
                <input type=\"text\" name=\"morada\" id=\"morada\" class=\"form-control\" placeholder=\"Insira a sua morada...\">
            </div>
            <div class=\"col-sm-4 col-lg-3 p-3\">
                <label for=\"cod_postal\" class=\"form-label\">Código postal</label>
                <input type=\"text\" name=\"cod_postal\" id=\"cod_postal\" class=\"form-control\" pattern=\"\\d{4}-\\d{3}\" placeholder=\"Insira o seu código postal...\">
                <div class=\"invalid-feedback\">
                    Código postal no formato xxxx-xxx
                </div>
            </div>
            <div class=\"col-sm-4 col-lg-6 p-3\">
                <label for=\"password1\" class=\"form-label\">Password</label>
                <input type=\"password\" name=\"password1\" id=\"password1\" class=\"form-control\" minlength=\"6\" required>
                <div class=\"invalid-feedback\">
                    Necessário com mínimo 6 carateres
                </div>
            </div>
            <div class=\"col-sm-4 col-lg-6 p-3\">
                <label for=\"password2\" class=\"form-label\">Confirmação da password</label>
                <input type=\"password\" name=\"password2\" id=\"password2\" class=\"form-control\" data-match=\"password1\" minlength=\"6\" required>
                <div class=\"invalid-feedback\">
                    Tem de ser igual à password
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-4 col-lg-6 p-3\">
                <input type=\"submit\" name=\"btn_submit\" id=\"btn_submit\" class=\"btn-primary p-2\" value=\"Registar\">
            </div>
        </div>
    </form>
    {{ form(form) }}
    {{ form_start(form) }}
    {{ form_end(form) }}
</div>
{% endblock %}", "register.html", "/home/johnny/Documents/Cursos/ISLA/ANO 2/SEMESTRE 3/Programação para a Web/Projeto/Project_root/my_project/templates/register.html");
    }
}
