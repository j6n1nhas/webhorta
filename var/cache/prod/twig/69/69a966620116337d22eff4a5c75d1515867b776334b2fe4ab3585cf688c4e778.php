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

/* contactus.html */
class __TwigTemplate_0db59639e5d7afd9199a3370a4fd234d32d30000d114905bdd99c918f454d6bb extends Template
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
        $this->parent = $this->loadTemplate("base.html", "contactus.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "XPTO | Contacte-nos!
";
    }

    // line 7
    public function block_estilos($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/contactus.css"), "html", null, true);
        echo "\">
";
    }

    // line 11
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>
<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/contactus.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 16
    public function block_conteudo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "<h2 class=\"fs-1 text-center\">Contacte-nos</h2>
<div class=\"container-fluid mt-5 p-5\" id=\"formulario\">
    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true, "autocomplete" => "off"]]);
        echo "
    <div class=\"row\">
        <div class=\"col-sm-6 col-lg-6 p-3\">
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nome_proprio", [], "any", false, false, false, 22), 'label');
        echo "
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nome_proprio", [], "any", false, false, false, 23), 'widget');
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
        </div>
        <div class=\"col-sm-6 col-lg-6 p-3\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nome_apelido", [], "any", false, false, false, 32), 'label');
        echo "
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nome_apelido", [], "any", false, false, false, 33), 'widget');
        echo "
            <div class=\"invalid-feedback\">
                Introduza um apelido válido
            </div>
            <div class=\"form-error\">
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nome_apelido", [], "any", false, false, false, 38), 'errors');
        echo "
            </div>
        </div>
        <div class=\"col-lg-6 col-sm-6 p-3 flex-fill\">
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tipo_contacto", [], "any", false, false, false, 42), 'label');
        echo "
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tipo_contacto", [], "any", false, false, false, 43), 'widget');
        echo "
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tipo_contacto", [], "any", false, false, false, 44), 'help');
        echo "
            <div class=\"invalid-feedback\">
                Precisa de escolher um meio de contacto
            </div>
            <div class=\"form-error\">
                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tipo_contacto", [], "any", false, false, false, 49), 'errors');
        echo "
            </div>
        </div>
        <div class=\"col-sm-6 col-lg-6 p-3\">
            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telefone", [], "any", false, false, false, 53), 'label');
        echo "
            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telefone", [], "any", false, false, false, 54), 'widget');
        echo "
            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telefone", [], "any", false, false, false, 55), 'help');
        echo "
            <div class=\"invalid-feedback\">
                Se escolheu o telefone, precisa fornecer o seu contacto com 9 dígitos
            </div>
            <div class=\"form-error\">
                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telefone", [], "any", false, false, false, 60), 'errors');
        echo "
            </div>
        </div>
        <div class=\"col-sm-12 col-lg-12 p-3\">
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 64), 'label');
        echo "
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 65), 'widget');
        echo "
            <div class=\"invalid-feedback\">
                Se escolheu e-mail, forneça-nos o seu endereço
            </div>
            <div class=\"form-error\">
                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 70), 'errors');
        echo "
            </div>
        </div>
        <div class=\"col-sm-12 col-lg-6 p-3\">
            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "anexo", [], "any", false, false, false, 74), 'label');
        echo "
            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "anexo", [], "any", false, false, false, 75), 'widget');
        echo "
            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "anexo", [], "any", false, false, false, 76), 'help');
        echo "
            <div class=\"invalid-feedback\">
                Anexos: PDF ou DOCX
            </div>
            <div class=\"form-error\">
                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "anexo", [], "any", false, false, false, 81), 'errors');
        echo "
            </div>
        </div>
        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "data_contacto", [], "any", false, false, false, 84), 'widget');
        echo "
        <div class=\"col-sm-12 col-lg-6 p-3\">
            ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mensagem", [], "any", false, false, false, 86), 'label');
        echo "
            ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mensagem", [], "any", false, false, false, 87), 'widget');
        echo "
            <div class=\"invalid-feedback\">
                A sua mensagem é essencial!
            </div>
            <div class=\"form-error\">
                ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mensagem", [], "any", false, false, false, 92), 'errors');
        echo "
            </div>
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "btn_submit", [], "any", false, false, false, 97), 'widget');
        echo "
    </div>
    ";
        // line 99
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "contactus.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 99,  246 => 97,  238 => 92,  230 => 87,  226 => 86,  221 => 84,  215 => 81,  207 => 76,  203 => 75,  199 => 74,  192 => 70,  184 => 65,  180 => 64,  173 => 60,  165 => 55,  161 => 54,  157 => 53,  150 => 49,  142 => 44,  138 => 43,  134 => 42,  127 => 38,  119 => 33,  115 => 32,  108 => 28,  100 => 23,  96 => 22,  90 => 19,  86 => 17,  82 => 16,  76 => 13,  73 => 12,  69 => 11,  62 => 8,  58 => 7,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contactus.html", "/home/johnny/Documents/Cursos/ISLA/ANO 2/SEMESTRE 3/Programação para a Web/Projeto/Project_root/templates/contactus.html");
    }
}
