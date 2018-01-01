<?php

/* _navbar.php.twig */
class __TwigTemplate_a6ec5186ba4169081b944946669e975cac3d1f47be1b513c8a92ee336c37902a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab9757cf84e2be47cca1e768f19149f61e1b7aab7dcb249bb70ae6a8e7de0254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab9757cf84e2be47cca1e768f19149f61e1b7aab7dcb249bb70ae6a8e7de0254->enter($__internal_ab9757cf84e2be47cca1e768f19149f61e1b7aab7dcb249bb70ae6a8e7de0254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_navbar.php.twig"));

        $__internal_81ae31f81e1a51ca4acf23b5d22fc88ca1e7c29eb5c5260e64415b16881a44fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81ae31f81e1a51ca4acf23b5d22fc88ca1e7c29eb5c5260e64415b16881a44fc->enter($__internal_81ae31f81e1a51ca4acf23b5d22fc88ca1e7c29eb5c5260e64415b16881a44fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_navbar.php.twig"));

        // line 1
        echo "<div class=\"web-element\">

    <!-- Mobile version -->
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>

        <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("start");
        echo "\">-LAUFTAGEBUCH-</a>
    </div>



    <div id=\"navbar\" class=\"collapse navbar-collapse\">
        <ul class=\"nav navbar-nav\">
            <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("start");
        echo "\">
                    <span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span>
                    Startseite
                </a>
            </li>
            <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("details_list");
        echo "\">
                    <span class=\"glyphicon\" aria-hidden=\"true\"></span>
                    Detail
                </a>
            </li>
            <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
        echo "\">
                    <span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>
                    Profil
                </a>
            </li>
            <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
        echo "\">
                    <span class=\"glyphicon\" aria-hidden=\"true\"></span>
                    Login
                </a>
            </li>



        </ul>
    </div>
</div>";
        
        $__internal_ab9757cf84e2be47cca1e768f19149f61e1b7aab7dcb249bb70ae6a8e7de0254->leave($__internal_ab9757cf84e2be47cca1e768f19149f61e1b7aab7dcb249bb70ae6a8e7de0254_prof);

        
        $__internal_81ae31f81e1a51ca4acf23b5d22fc88ca1e7c29eb5c5260e64415b16881a44fc->leave($__internal_81ae31f81e1a51ca4acf23b5d22fc88ca1e7c29eb5c5260e64415b16881a44fc_prof);

    }

    public function getTemplateName()
    {
        return "_navbar.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 33,  63 => 28,  55 => 23,  47 => 18,  37 => 11,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"web-element\">

    <!-- Mobile version -->
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>

        <a class=\"navbar-brand\" href=\"{{ path('start') }}\">-LAUFTAGEBUCH-</a>
    </div>



    <div id=\"navbar\" class=\"collapse navbar-collapse\">
        <ul class=\"nav navbar-nav\">
            <li><a href=\"{{ path('start') }}\">
                    <span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span>
                    Startseite
                </a>
            </li>
            <li><a href=\"{{ path('details_list') }}\">
                    <span class=\"glyphicon\" aria-hidden=\"true\"></span>
                    Detail
                </a>
            </li>
            <li><a href=\"{{ path('security_login') }}\">
                    <span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>
                    Profil
                </a>
            </li>
            <li><a href=\"{{ path('security_login') }}\">
                    <span class=\"glyphicon\" aria-hidden=\"true\"></span>
                    Login
                </a>
            </li>



        </ul>
    </div>
</div>", "_navbar.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/templates/_navbar.php.twig");
    }
}
