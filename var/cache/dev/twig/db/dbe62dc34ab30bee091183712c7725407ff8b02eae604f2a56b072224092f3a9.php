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
        $__internal_343dc10d2ebc5cc310464dae2f95da3eec8685719a4023be4a573b8eab2b5718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_343dc10d2ebc5cc310464dae2f95da3eec8685719a4023be4a573b8eab2b5718->enter($__internal_343dc10d2ebc5cc310464dae2f95da3eec8685719a4023be4a573b8eab2b5718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_navbar.php.twig"));

        $__internal_70996189e89d53fb58dc704f904b49b3ae9694b87498cc5efc2463263f514679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70996189e89d53fb58dc704f904b49b3ae9694b87498cc5efc2463263f514679->enter($__internal_70996189e89d53fb58dc704f904b49b3ae9694b87498cc5efc2463263f514679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_navbar.php.twig"));

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



        ";
        // line 31
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 32
            echo "            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">
                    <span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>
                    Profil ( ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 34, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo " )
                </a>
            </li>

            <li><a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">
                    <span class=\"glyphicon\" aria-hidden=\"true\"></span>
                    Logout
                </a>
            </li>

        ";
        } else {
            // line 45
            echo "
            <li><a href=\"";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">
                    <span class=\"glyphicon\" aria-hidden=\"true\"></span>
                    Login
                </a>
            </li>

        ";
        }
        // line 53
        echo "



        </ul>
    </div>
</div>";
        
        $__internal_343dc10d2ebc5cc310464dae2f95da3eec8685719a4023be4a573b8eab2b5718->leave($__internal_343dc10d2ebc5cc310464dae2f95da3eec8685719a4023be4a573b8eab2b5718_prof);

        
        $__internal_70996189e89d53fb58dc704f904b49b3ae9694b87498cc5efc2463263f514679->leave($__internal_70996189e89d53fb58dc704f904b49b3ae9694b87498cc5efc2463263f514679_prof);

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
        return array (  104 => 53,  94 => 46,  91 => 45,  81 => 38,  74 => 34,  68 => 32,  66 => 31,  55 => 23,  47 => 18,  37 => 11,  25 => 1,);
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



        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            <li><a href=\"{{ path('security_login') }}\">
                    <span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>
                    Profil ( {{ app.user.username }} )
                </a>
            </li>

            <li><a href=\"{{ path('security_logout') }}\">
                    <span class=\"glyphicon\" aria-hidden=\"true\"></span>
                    Logout
                </a>
            </li>

        {% else %}

            <li><a href=\"{{ path('security_login') }}\">
                    <span class=\"glyphicon\" aria-hidden=\"true\"></span>
                    Login
                </a>
            </li>

        {% endif %}




        </ul>
    </div>
</div>", "_navbar.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/templates/_navbar.php.twig");
    }
}
