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

/* footer.html */
class __TwigTemplate_68487059b8fd1852b42c2855ab8d0fcbc81c8af9a0398ea5560586d7118955f4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html"));

        // line 1
        echo "<footer class=\"fixed-bottom\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-1\">
                <img src=\"../css/bootstrap-icons/facebook.svg\" alt=\"Facebook icon\" width=\"50\" height=\"50\">
            </div>
            <div class=\"col-1\">
                <img src=\"../css/bootstrap-icons/twitter.svg\" alt=\"Twitter icon\" width=\"50\" height=\"50\">
            </div>
            <div class=\"col-1\">
                <img src=\"../css/bootstrap-icons/whatsapp.svg\" alt=\"Twitter icon\" width=\"50\" height=\"50\">
            </div>
            <div class=\"col-1\">
                <img src=\"../css/bootstrap-icons/linkedin.svg\" alt=\"Twitter icon\" width=\"50\" height=\"50\">
            </div>
            <div class=\"col-1\">
                <img src=\"../css/bootstrap-icons/messenger.svg\" alt=\"Twitter icon\" width=\"50\" height=\"50\">
            </div>
        </div>
    </div>
</footer>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "footer.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"fixed-bottom\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-1\">
                <img src=\"../css/bootstrap-icons/facebook.svg\" alt=\"Facebook icon\" width=\"50\" height=\"50\">
            </div>
            <div class=\"col-1\">
                <img src=\"../css/bootstrap-icons/twitter.svg\" alt=\"Twitter icon\" width=\"50\" height=\"50\">
            </div>
            <div class=\"col-1\">
                <img src=\"../css/bootstrap-icons/whatsapp.svg\" alt=\"Twitter icon\" width=\"50\" height=\"50\">
            </div>
            <div class=\"col-1\">
                <img src=\"../css/bootstrap-icons/linkedin.svg\" alt=\"Twitter icon\" width=\"50\" height=\"50\">
            </div>
            <div class=\"col-1\">
                <img src=\"../css/bootstrap-icons/messenger.svg\" alt=\"Twitter icon\" width=\"50\" height=\"50\">
            </div>
        </div>
    </div>
</footer>", "footer.html", "/home/johnny/Documents/Cursos/ISLA/ANO 2/SEMESTRE 3/Programação para a Web/Projeto/Project_root/my_project/templates/footer.html");
    }
}
