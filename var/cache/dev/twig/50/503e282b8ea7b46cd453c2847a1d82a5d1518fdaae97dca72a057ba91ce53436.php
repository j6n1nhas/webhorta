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
class __TwigTemplate_a456f52dbe5ed4f973c31a0e692749c1e8ab31ee43d81285826337a643bd5bb2 extends Template
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
        <div class=\"row justify-content-center\">
            <div class=\"col-2\">
                <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-icons/facebook.svg"), "html", null, true);
        echo "\" alt=\"Facebook icon\" width=\"50\" height=\"50\">
            </div>
            <div class=\"col-2\">
                <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/bootstrap-icons/twitter.svg"), "html", null, true);
        echo "\" alt=\"Twitter icon\" width=\"50\" height=\"50\">
            </div>
            <div class=\"col-2\">
                <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/bootstrap-icons/whatsapp.svg"), "html", null, true);
        echo "\" alt=\"Whatsapp icon\" width=\"50\" height=\"50\">
            </div>
            <div class=\"col-2\">
                <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/bootstrap-icons/linkedin.svg"), "html", null, true);
        echo "\" alt=\"LinkedIn icon\" width=\"50\" height=\"50\">
            </div>
            <div class=\"col-2\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/bootstrap-icons/messenger.svg"), "html", null, true);
        echo "\" alt=\"Messenger icon\" width=\"50\" height=\"50\">
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

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 17,  67 => 14,  61 => 11,  55 => 8,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"fixed-bottom\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-2\">
                <img src=\"{{ asset('css/bootstrap-icons/facebook.svg') }}\" alt=\"Facebook icon\" width=\"50\" height=\"50\">
            </div>
            <div class=\"col-2\">
                <img src=\"{{ asset('/css/bootstrap-icons/twitter.svg') }}\" alt=\"Twitter icon\" width=\"50\" height=\"50\">
            </div>
            <div class=\"col-2\">
                <img src=\"{{ asset('/css/bootstrap-icons/whatsapp.svg') }}\" alt=\"Whatsapp icon\" width=\"50\" height=\"50\">
            </div>
            <div class=\"col-2\">
                <img src=\"{{ asset('/css/bootstrap-icons/linkedin.svg') }}\" alt=\"LinkedIn icon\" width=\"50\" height=\"50\">
            </div>
            <div class=\"col-2\">
                <img src=\"{{ asset('/css/bootstrap-icons/messenger.svg') }}\" alt=\"Messenger icon\" width=\"50\" height=\"50\">
            </div>
        </div>
    </div>
</footer>", "footer.html", "/home/johnny/Documents/Cursos/ISLA/ANO 2/SEMESTRE 3/Programação para a Web/Projeto/Project_root/templates/footer.html");
    }
}
