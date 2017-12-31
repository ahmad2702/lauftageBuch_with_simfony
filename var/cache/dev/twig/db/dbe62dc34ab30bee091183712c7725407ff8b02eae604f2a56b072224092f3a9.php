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
        $__internal_c68945dc075c04171a28cdd29de8f50c3b02188c59208c394e03473e296c9e19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c68945dc075c04171a28cdd29de8f50c3b02188c59208c394e03473e296c9e19->enter($__internal_c68945dc075c04171a28cdd29de8f50c3b02188c59208c394e03473e296c9e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_navbar.php.twig"));

        $__internal_294ebcc95b27d91a3ff7bc9408c2de4d6a7bbec563070cd8dc11c92aa7db604a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_294ebcc95b27d91a3ff7bc9408c2de4d6a7bbec563070cd8dc11c92aa7db604a->enter($__internal_294ebcc95b27d91a3ff7bc9408c2de4d6a7bbec563070cd8dc11c92aa7db604a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_navbar.php.twig"));

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
        
        $__internal_c68945dc075c04171a28cdd29de8f50c3b02188c59208c394e03473e296c9e19->leave($__internal_c68945dc075c04171a28cdd29de8f50c3b02188c59208c394e03473e296c9e19_prof);

        
        $__internal_294ebcc95b27d91a3ff7bc9408c2de4d6a7bbec563070cd8dc11c92aa7db604a->leave($__internal_294ebcc95b27d91a3ff7bc9408c2de4d6a7bbec563070cd8dc11c92aa7db604a_prof);

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
</div>", "_navbar.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/templates/_navbar.php.twig");
    }
}
