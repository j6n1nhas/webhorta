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

/* index.html */
class __TwigTemplate_6f20eb484085d052aa5ac9817aa1aa375915efa070d8c9bc5f4a334838d551f4 extends Template
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
        $this->parent = $this->loadTemplate("base.html", "index.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "A Horta XPTO
";
    }

    // line 7
    public function block_estilos($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/index.css"), "html", null, true);
        echo "\">
";
    }

    // line 11
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 15
    public function block_conteudo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "<section>
    <div id=\"caroussel\" class=\"carousel carousel-dark slide carousel-fade mt-3\" data-bs-ride=\"carousel\">
        <div class=\"carousel-indicators\">
            <button type=\"button\" data-bs-target=\"#caroussel\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
            <button type=\"button\" data-bs-target=\"#caroussel\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
            <button type=\"button\" data-bs-target=\"#caroussel\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
        </div>
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\" data-bs-interval=\"5000\">
                <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/horta_verde.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100 foto\" alt=\"Foto de horta\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Horta biológica</h5>
                    <p>Uma das nossas hortas biológicas</p>
                </div>
            </div>
            <div class=\"carousel-item\" data-bs-interval=\"5000\">
                <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/couve-inzoom.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100 foto\" alt=\"Foto de couve\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Couve portuguesa</h5>
                    <p>Produção biológica própria</p>
                </div>
            </div>
            <div class=\"carousel-item\" data-bs-interval=\"5000\">
                <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/horta.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100 foto\" alt=\"Foto de horta\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Exploração agrícola</h5>
                    <p>Vista aérea de uma das nossas hortas</p>
                </div>
            </div>
        </div>
        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#caroussel\" data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Anterior</span>
        </button>
        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#caroussel\" data-bs-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Próximo</span>
        </button>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 39,  105 => 32,  95 => 25,  84 => 16,  80 => 15,  73 => 12,  69 => 11,  62 => 8,  58 => 7,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.html", "/home/johnny/Documents/Cursos/ISLA/ANO 2/SEMESTRE 3/Programação para a Web/Projeto/Project_root/templates/index.html");
    }
}
