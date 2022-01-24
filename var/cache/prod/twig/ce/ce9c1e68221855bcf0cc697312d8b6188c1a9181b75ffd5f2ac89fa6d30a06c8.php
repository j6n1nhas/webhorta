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

/* base.html */
class __TwigTemplate_3b517efe6be6fc9f0a17e62d70c1a141957603c349418e58a82472779419914c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'estilos' => [$this, 'block_estilos'],
            'titulo' => [$this, 'block_titulo'],
            'conteudo' => [$this, 'block_conteudo'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"shortcut icon\" type=\"image/ico\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/bootstrap.css"), "html", null, true);
        echo "\">
    ";
        // line 9
        $this->displayBlock('estilos', $context, $blocks);
        // line 10
        echo "    <title>";
        $this->displayBlock('titulo', $context, $blocks);
        echo "</title>
</head>
<body>
    ";
        // line 13
        echo twig_include($this->env, $context, "header_nav.html");
        echo "
    ";
        // line 14
        echo twig_include($this->env, $context, "messages.html");
        echo "
    <main>
        ";
        // line 16
        $this->displayBlock('conteudo', $context, $blocks);
        // line 17
        echo "    </main>
    ";
        // line 18
        echo twig_include($this->env, $context, "footer.html");
        echo "
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/bootstrap.bundle.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 20
        $this->displayBlock('scripts', $context, $blocks);
        // line 21
        echo "</body>
</html>";
    }

    // line 9
    public function block_estilos($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 10
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 16
    public function block_conteudo($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 20
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 20,  107 => 16,  101 => 10,  95 => 9,  90 => 21,  88 => 20,  84 => 19,  80 => 18,  77 => 17,  75 => 16,  70 => 14,  66 => 13,  59 => 10,  57 => 9,  53 => 8,  49 => 7,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html", "/home/johnny/Documents/Cursos/ISLA/ANO 2/SEMESTRE 3/Programação para a Web/Projeto/Project_root/templates/base.html");
    }
}
