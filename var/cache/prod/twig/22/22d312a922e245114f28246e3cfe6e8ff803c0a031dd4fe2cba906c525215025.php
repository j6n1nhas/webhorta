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
class __TwigTemplate_d1d90e14952f5e5d8e5a5ec6a9473a5eba743b46d62277d316100767f1009ab4 extends Template
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
        return array (  67 => 17,  61 => 14,  55 => 11,  49 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "footer.html", "/home/johnny/Documents/Cursos/ISLA/ANO 2/SEMESTRE 3/Programação para a Web/Projeto/Project_root/templates/footer.html");
    }
}
