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

/* whoweare.html */
class __TwigTemplate_a1549061c9901ff18d0224f39317e47a7d6a13859f5558ac61a7a4363d70413b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "whoweare.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "whoweare.html"));

        $this->parent = $this->loadTemplate("base.html", "whoweare.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        // line 4
        echo "XPTO | Quem somos
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_estilos($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "estilos"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "estilos"));

        // line 8
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/whoweare.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_conteudo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "conteudo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "conteudo"));

        // line 15
        echo "<h2 class=\"fs-1 text-center\">Os nossos serviços</h2>
<article>
    <p class=\"fs-5 mt-5 mb-4\">
        A Horta XPTO dispõe de uma variedade de serviços para o acompanhar e aconselhar em todo o processo produtivo, respeitando o modo de produção sustentável e biológico.
        Temos à sua disposição serviços completos para a sua propriedade, horta ou quintal. Contacte-nos para darmos vida ao seu terreno! 
    </p>
</article>
<section>
    <div class=\"accordion\" id=\"accordion-servicos\">
        <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"headingOne\">
                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\" aria-expanded=\"false\" aria-controls=\"collapseOne\">
                    <strong class=\"fs-3 p-2\">Nivelamento e mobilização de solos</strong>
                </button>
            </h2>
            <div id=\"collapseOne\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingOne\" data-bs-parent=\"#accordion-servicos\">
                <div class=\"accordion-body\">
                    <p class=\"fs-5 pe-5 accordion-descript\">
                        Se o seu terreno é demasiado íngreme e desnivelado para o poder trabalhar em condições, não conseguirá obter o melhor rendimento dele.
                        Para melhorar o acesso ao seu terreno, as condições de trabalho nele e até mesmo a capacidade de drenagem, em terrenos demasiado íngremes ou com desníveis acentuados, preparamos e nivelamos o solo.
                    </p>
                    <img class=\"accordion-foto img-thumbnail rounded\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/nivelamento.jpg"), "html", null, true);
        echo "\" alt=\"Foto representativa de nivelamento de solos\">
                </div>
            </div>
        </div>
        <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"headingTwo\">
                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                    <strong class=\"fs-3 p-2\">Drenagem e irrigação</strong>
                </button>
            </h2>
            <div id=\"collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#accordion-servicos\">
                <div class=\"accordion-body\">
                    <p class=\"fs-5 pe-5 accordion-descript\">Para obter o máximo rendimento do seu terreno, tem que o dotar de capacidade de irrigação e drenagem.
                        É através da irrigação que fornece os nutrientes que o seu terreno necessita. Aplicamos a drenagem mais apropriada às características do seu terreno e instalamos a irrigação necessária ao seu terreno.</p>
                    <img class=\"accordion-foto img-thumbnail rounded\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/drenagem.jpg"), "html", null, true);
        echo "\" alt=\"Foto representativa de drenagem e irrigação\">
                </div>
            </div>
        </div>
        <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"headingThree\">
                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                    <strong class=\"fs-3 p-2\">Limpeza de terrenos e manutenção de espaços</strong>
                </button>
            </h2>
            <div id=\"collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingThree\" data-bs-parent=\"#accordion-servicos\">
                <div class=\"accordion-body\">
                    <p class=\"fs-5 pe-5 accordion-descript\">Antes de começar a fazer seja o que for ao seu terreno, há que prepará-lo para o seu projeto.
                        A legislação recentemente criada, obriga também os proprietários dos terrenos a efetuar a sua limpeza e manutenção.
                        Quer seja apenas para limpeza do terreno, eliminar espécies invasoras ou manter o seu terreno limpo, tratamos da limpeza do seu terreno ou propriedade e fazemos a manutenção completa do seu terreno ou propriedade.</p>
                    <img class=\"accordion-foto img-thumbnail rounded\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/limpeza.jpg"), "html", null, true);
        echo "\" alt=\"Foto representativa de limpeza e manutenção de terrenos\">
                </div>
            </div>
        </div>
        <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"headingFour\">
                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
                    <strong class=\"fs-3 p-2\">Montagem de estufas</strong>
                </button>
            </h2>
            <div id=\"collapseFour\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingFour\" data-bs-parent=\"#accordion-servicos\">
                <div class=\"accordion-body\">
                    <p class=\"fs-5 pe-5 accordion-descript\">Uma estufa é uma estrutura otimizadora das suas culturas que permite obter um ambiente propício ao desenvolvimento rápido de determinadas espécies hortícolas.
                        Temos parcerias com algumas boas marcas, podemos aconselhá-lo na melhor estufa a instalar no seu caso específico.
                        Quer já tenha adquirido a sua estufa ou pretenda vir a adquirir, aconselhamos na escolha da melhor estufa para si e montamos a estufa que desejar.</p>
                    <img class=\"accordion-foto img-thumbnail rounded\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/estufas.jpg"), "html", null, true);
        echo "\" alt=\"Foto representativa de montagem de estufas\">
                </div>
            </div>
        </div>
        <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"headingFive\">
                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseFive\" aria-expanded=\"false\" aria-controls=\"collapseFive\">
                    <strong class=\"fs-3 p-2\">Análises ao solo</strong>
                </button>
            </h2>
            <div id=\"collapseFive\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingFive\" data-bs-parent=\"#accordion-servicos\">
                <div class=\"accordion-body\">
                    <p class=\"fs-5 pe-5 accordion-descript\">Para melhor compreender/gerir o seu terreno e saber quais os nutrientes que mais precisa, vai necessitar de efetuar análises ao seu solo.
                        Só após esta análise cuidada, com o conhecimento necessário que possuímos para saber interpretar os resultados, conseguimos a partir dos resultados aconselhá-lo da melhor forma para otimizar o rendimento das suas culturas.
                    </p>
                    <img class=\"accordion-foto img-thumbnail rounded\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/analises-ao-solo.jpg"), "html", null, true);
        echo "\" alt=\"Foto representativa de análises ao solo\">
                </div>
            </div>
        </div>
        <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"headingSix\">
                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseSix\" aria-expanded=\"false\" aria-controls=\"collapseSix\">
                    <strong class=\"fs-3 p-2\">Fertilização</strong>
                </button>
            </h2>
            <div id=\"collapseSix\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingSix\" data-bs-parent=\"#accordion-servicos\">
                <div class=\"accordion-body\">
                    <p class=\"fs-5 pe-5 accordion-descript\">A fertilização é uma das melhores formas de \"alimentar\" o seu terreno com os melhores nutrientes.
                        Sabemos que fertilizantes escolher mediante as necessidades do seu terreno e das suas culturas.
                        Aplicamos os fertilizantes naturais mais indicados ao seu solo e produção agrícola.</p>
                    <img class=\"accordion-foto img-thumbnail rounded\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/fertilizacao.jpg"), "html", null, true);
        echo "\" alt=\"Foto representativa de fertilização\">
                </div>
            </div>
        </div>
        <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"headingSeven\">
                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseSeven\" aria-expanded=\"false\" aria-controls=\"collapseSeven\">
                    <strong class=\"fs-3 p-2\">Planos culturais</strong>
                </button>
            </h2>
            <div id=\"collapseSeven\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingSeven\" data-bs-parent=\"#accordion-servicos\">
                <div class=\"accordion-body\">
                    <p class=\"fs-5 pe-5 accordion-descript\">O melhor planeamento de culturas para obter o máximo rendimento da sua horta ou jardim, sem desrespeitar o ciclo natural.
                        Contacte-nos para planear a sua produção agrícola e escolher que produtos produzir e quando produzir.
                    </p>
                    <img class=\"accordion-foto img-thumbnail rounded\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/planos-culturais.jpg"), "html", null, true);
        echo "\" alt=\"Foto representativa de planos culturais\">
                </div>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "whoweare.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 125,  245 => 110,  227 => 95,  209 => 80,  191 => 65,  173 => 50,  156 => 36,  133 => 15,  123 => 14,  105 => 11,  92 => 8,  82 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html' %}

{% block titulo %}
XPTO | Quem somos
{% endblock %}

{% block estilos %}
<link rel=\"stylesheet\" href=\"{{ asset('/css/whoweare.css') }}\">
{% endblock %}

{% block scripts %}
{% endblock %}

{% block conteudo %}
<h2 class=\"fs-1 text-center\">Os nossos serviços</h2>
<article>
    <p class=\"fs-5 mt-5 mb-4\">
        A Horta XPTO dispõe de uma variedade de serviços para o acompanhar e aconselhar em todo o processo produtivo, respeitando o modo de produção sustentável e biológico.
        Temos à sua disposição serviços completos para a sua propriedade, horta ou quintal. Contacte-nos para darmos vida ao seu terreno! 
    </p>
</article>
<section>
    <div class=\"accordion\" id=\"accordion-servicos\">
        <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"headingOne\">
                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\" aria-expanded=\"false\" aria-controls=\"collapseOne\">
                    <strong class=\"fs-3 p-2\">Nivelamento e mobilização de solos</strong>
                </button>
            </h2>
            <div id=\"collapseOne\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingOne\" data-bs-parent=\"#accordion-servicos\">
                <div class=\"accordion-body\">
                    <p class=\"fs-5 pe-5 accordion-descript\">
                        Se o seu terreno é demasiado íngreme e desnivelado para o poder trabalhar em condições, não conseguirá obter o melhor rendimento dele.
                        Para melhorar o acesso ao seu terreno, as condições de trabalho nele e até mesmo a capacidade de drenagem, em terrenos demasiado íngremes ou com desníveis acentuados, preparamos e nivelamos o solo.
                    </p>
                    <img class=\"accordion-foto img-thumbnail rounded\" src=\"{{ asset('images/nivelamento.jpg') }}\" alt=\"Foto representativa de nivelamento de solos\">
                </div>
            </div>
        </div>
        <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"headingTwo\">
                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                    <strong class=\"fs-3 p-2\">Drenagem e irrigação</strong>
                </button>
            </h2>
            <div id=\"collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#accordion-servicos\">
                <div class=\"accordion-body\">
                    <p class=\"fs-5 pe-5 accordion-descript\">Para obter o máximo rendimento do seu terreno, tem que o dotar de capacidade de irrigação e drenagem.
                        É através da irrigação que fornece os nutrientes que o seu terreno necessita. Aplicamos a drenagem mais apropriada às características do seu terreno e instalamos a irrigação necessária ao seu terreno.</p>
                    <img class=\"accordion-foto img-thumbnail rounded\" src=\"{{ asset('images/drenagem.jpg') }}\" alt=\"Foto representativa de drenagem e irrigação\">
                </div>
            </div>
        </div>
        <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"headingThree\">
                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                    <strong class=\"fs-3 p-2\">Limpeza de terrenos e manutenção de espaços</strong>
                </button>
            </h2>
            <div id=\"collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingThree\" data-bs-parent=\"#accordion-servicos\">
                <div class=\"accordion-body\">
                    <p class=\"fs-5 pe-5 accordion-descript\">Antes de começar a fazer seja o que for ao seu terreno, há que prepará-lo para o seu projeto.
                        A legislação recentemente criada, obriga também os proprietários dos terrenos a efetuar a sua limpeza e manutenção.
                        Quer seja apenas para limpeza do terreno, eliminar espécies invasoras ou manter o seu terreno limpo, tratamos da limpeza do seu terreno ou propriedade e fazemos a manutenção completa do seu terreno ou propriedade.</p>
                    <img class=\"accordion-foto img-thumbnail rounded\" src=\"{{ asset('images/limpeza.jpg') }}\" alt=\"Foto representativa de limpeza e manutenção de terrenos\">
                </div>
            </div>
        </div>
        <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"headingFour\">
                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
                    <strong class=\"fs-3 p-2\">Montagem de estufas</strong>
                </button>
            </h2>
            <div id=\"collapseFour\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingFour\" data-bs-parent=\"#accordion-servicos\">
                <div class=\"accordion-body\">
                    <p class=\"fs-5 pe-5 accordion-descript\">Uma estufa é uma estrutura otimizadora das suas culturas que permite obter um ambiente propício ao desenvolvimento rápido de determinadas espécies hortícolas.
                        Temos parcerias com algumas boas marcas, podemos aconselhá-lo na melhor estufa a instalar no seu caso específico.
                        Quer já tenha adquirido a sua estufa ou pretenda vir a adquirir, aconselhamos na escolha da melhor estufa para si e montamos a estufa que desejar.</p>
                    <img class=\"accordion-foto img-thumbnail rounded\" src=\"{{ asset('images/estufas.jpg') }}\" alt=\"Foto representativa de montagem de estufas\">
                </div>
            </div>
        </div>
        <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"headingFive\">
                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseFive\" aria-expanded=\"false\" aria-controls=\"collapseFive\">
                    <strong class=\"fs-3 p-2\">Análises ao solo</strong>
                </button>
            </h2>
            <div id=\"collapseFive\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingFive\" data-bs-parent=\"#accordion-servicos\">
                <div class=\"accordion-body\">
                    <p class=\"fs-5 pe-5 accordion-descript\">Para melhor compreender/gerir o seu terreno e saber quais os nutrientes que mais precisa, vai necessitar de efetuar análises ao seu solo.
                        Só após esta análise cuidada, com o conhecimento necessário que possuímos para saber interpretar os resultados, conseguimos a partir dos resultados aconselhá-lo da melhor forma para otimizar o rendimento das suas culturas.
                    </p>
                    <img class=\"accordion-foto img-thumbnail rounded\" src=\"{{ asset('images/analises-ao-solo.jpg') }}\" alt=\"Foto representativa de análises ao solo\">
                </div>
            </div>
        </div>
        <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"headingSix\">
                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseSix\" aria-expanded=\"false\" aria-controls=\"collapseSix\">
                    <strong class=\"fs-3 p-2\">Fertilização</strong>
                </button>
            </h2>
            <div id=\"collapseSix\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingSix\" data-bs-parent=\"#accordion-servicos\">
                <div class=\"accordion-body\">
                    <p class=\"fs-5 pe-5 accordion-descript\">A fertilização é uma das melhores formas de \"alimentar\" o seu terreno com os melhores nutrientes.
                        Sabemos que fertilizantes escolher mediante as necessidades do seu terreno e das suas culturas.
                        Aplicamos os fertilizantes naturais mais indicados ao seu solo e produção agrícola.</p>
                    <img class=\"accordion-foto img-thumbnail rounded\" src=\"{{ asset('images/fertilizacao.jpg') }}\" alt=\"Foto representativa de fertilização\">
                </div>
            </div>
        </div>
        <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"headingSeven\">
                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseSeven\" aria-expanded=\"false\" aria-controls=\"collapseSeven\">
                    <strong class=\"fs-3 p-2\">Planos culturais</strong>
                </button>
            </h2>
            <div id=\"collapseSeven\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingSeven\" data-bs-parent=\"#accordion-servicos\">
                <div class=\"accordion-body\">
                    <p class=\"fs-5 pe-5 accordion-descript\">O melhor planeamento de culturas para obter o máximo rendimento da sua horta ou jardim, sem desrespeitar o ciclo natural.
                        Contacte-nos para planear a sua produção agrícola e escolher que produtos produzir e quando produzir.
                    </p>
                    <img class=\"accordion-foto img-thumbnail rounded\" src=\"{{ asset('images/planos-culturais.jpg') }}\" alt=\"Foto representativa de planos culturais\">
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock %}", "whoweare.html", "/home/johnny/Documents/Cursos/ISLA/ANO 2/SEMESTRE 3/Programação para a Web/Projeto/Project_root/templates/whoweare.html");
    }
}
