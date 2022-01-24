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

/* email.html */
class __TwigTemplate_5e238981f7ee1f682150a9db13ab3466489cbd2dd92d74a87f2cbcdfa183129c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>E-mail</title>
</head>
<body>
    <div class=\"d-flex flex-row justify-content-between\">
        <img src=\"cid:logo\" alt=\"Logotipo da empresa\" width=\"75px\" height=\"75px\">
        <h1>Horta XPTO</h1>
    </div>
    <p>
        No dia ";
        // line 14
        echo twig_escape_filter($this->env, ($context["data"] ?? null), "html", null, true);
        echo ", recebemos um contacto de ";
        echo twig_escape_filter($this->env, ($context["nome"] ?? null), "html", null, true);
        echo " que nos forneceu os seguintes contactos:
    </p>
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["contactos"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 17
            echo "        <p>";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["key"]), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    <p>E a seguinte mensagem:</p>
    <p>";
        // line 20
        echo twig_escape_filter($this->env, ($context["mensagem"] ?? null), "html", null, true);
        echo "</p>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "email.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 20,  74 => 19,  63 => 17,  59 => 16,  52 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "email.html", "/home/johnny/Documents/Cursos/ISLA/ANO 2/SEMESTRE 3/Programação para a Web/Projeto/Project_root/templates/email.html");
    }
}
