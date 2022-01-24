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

/* login.html */
class __TwigTemplate_5bbc1c48bde94a5e8f56c37b7045e87f365a2e5a77bf9de5e17765d9082fb987 extends Template
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
        $this->parent = $this->loadTemplate("base.html", "login.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_estilos($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/register.css"), "html", null, true);
        echo "\">
";
    }

    // line 5
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/login.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 8
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "XPTO | Login
";
    }

    // line 11
    public function block_conteudo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "<h2 class=\"text-center fs-1 m-4\">Formulário de Login</h2>
<section class=\"container-fluid formulario mt-5 p-5\">
    <form action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"POST\" novalidate>
        <label for=\"email\" class=\"form-label\">Email</label>
        <input type=\"email\" name=\"_username\" id=\"email\" class=\"form-control mb-3\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" required>
        <label for=\"password\" class=\"form-label\">Password</label>
        <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control mb-3\" required>
        <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        } else {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produtos");
        }
        echo "\"/>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
        <input type=\"submit\" class=\"btn btn-outline-success\" value=\"Login\">
    </form>
</section>
";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 20,  99 => 19,  93 => 16,  88 => 14,  84 => 12,  80 => 11,  75 => 9,  71 => 8,  64 => 6,  60 => 5,  53 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login.html", "/home/johnny/Documents/Cursos/ISLA/ANO 2/SEMESTRE 3/Programação para a Web/Projeto/Project_root/templates/login.html");
    }
}
