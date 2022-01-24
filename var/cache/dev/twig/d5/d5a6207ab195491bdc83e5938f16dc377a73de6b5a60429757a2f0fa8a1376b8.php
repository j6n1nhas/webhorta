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
class __TwigTemplate_1d5a21356145af78ef2453262931186901eddeebe60662859916435e52cf50d3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email.html"));

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
        echo twig_escape_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "html", null, true);
        echo ", recebemos um contacto de ";
        echo twig_escape_filter($this->env, (isset($context["nome"]) || array_key_exists("nome", $context) ? $context["nome"] : (function () { throw new RuntimeError('Variable "nome" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " que nos forneceu os seguintes contactos:
    </p>
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contactos"]) || array_key_exists("contactos", $context) ? $context["contactos"] : (function () { throw new RuntimeError('Variable "contactos" does not exist.', 16, $this->source); })()));
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
        echo twig_escape_filter($this->env, (isset($context["mensagem"]) || array_key_exists("mensagem", $context) ? $context["mensagem"] : (function () { throw new RuntimeError('Variable "mensagem" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "</p>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  83 => 20,  80 => 19,  69 => 17,  65 => 16,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
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
        No dia {{ data }}, recebemos um contacto de {{ nome }} que nos forneceu os seguintes contactos:
    </p>
    {% for key, value in contactos %}
        <p>{{ key|capitalize }}: {{ value }}</p>
    {% endfor %}
    <p>E a seguinte mensagem:</p>
    <p>{{ mensagem }}</p>
</body>
</html>", "email.html", "/home/johnny/Documents/Cursos/ISLA/ANO 2/SEMESTRE 3/Programação para a Web/Projeto/Project_root/templates/email.html");
    }
}
