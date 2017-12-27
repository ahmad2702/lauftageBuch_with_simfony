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
        $__internal_b286d448a178e729f1dfdd9f4ce86b744f94b2a31d69a0b70c5de69cf55159c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b286d448a178e729f1dfdd9f4ce86b744f94b2a31d69a0b70c5de69cf55159c4->enter($__internal_b286d448a178e729f1dfdd9f4ce86b744f94b2a31d69a0b70c5de69cf55159c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_navbar.php.twig"));

        $__internal_7f884cedbcf90961fd7523aae00fbb9241aef35c281c97cbc3fa794b20ba51ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f884cedbcf90961fd7523aae00fbb9241aef35c281c97cbc3fa794b20ba51ab->enter($__internal_7f884cedbcf90961fd7523aae00fbb9241aef35c281c97cbc3fa794b20ba51ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_navbar.php.twig"));

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
                    Gesamt
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
            <li><a href=\"add.php\">
                    <span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>
                    ADD
                </a>
            </li>



        </ul>
    </div>
</div>";
        
        $__internal_b286d448a178e729f1dfdd9f4ce86b744f94b2a31d69a0b70c5de69cf55159c4->leave($__internal_b286d448a178e729f1dfdd9f4ce86b744f94b2a31d69a0b70c5de69cf55159c4_prof);

        
        $__internal_7f884cedbcf90961fd7523aae00fbb9241aef35c281c97cbc3fa794b20ba51ab->leave($__internal_7f884cedbcf90961fd7523aae00fbb9241aef35c281c97cbc3fa794b20ba51ab_prof);

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
        return array (  55 => 23,  47 => 18,  37 => 11,  25 => 1,);
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
                    Gesamt
                </a>
            </li>
            <li><a href=\"{{ path('details_list') }}\">
                    <span class=\"glyphicon\" aria-hidden=\"true\"></span>
                    Detail
                </a>
            </li>
            <li><a href=\"add.php\">
                    <span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>
                    ADD
                </a>
            </li>



        </ul>
    </div>
</div>", "_navbar.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/templates/_navbar.php.twig");
    }
}
