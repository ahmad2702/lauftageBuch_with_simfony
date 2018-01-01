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
        $__internal_a9c7150877549d9e0d67803e67c54b05586b3bcd534550dcbed58c60bf0465c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9c7150877549d9e0d67803e67c54b05586b3bcd534550dcbed58c60bf0465c8->enter($__internal_a9c7150877549d9e0d67803e67c54b05586b3bcd534550dcbed58c60bf0465c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_navbar.php.twig"));

        $__internal_6d20e143ed92dcfc8f9b427a15fe0540a5a018e069ca7c07cedb8cb8ac282a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d20e143ed92dcfc8f9b427a15fe0540a5a018e069ca7c07cedb8cb8ac282a03->enter($__internal_6d20e143ed92dcfc8f9b427a15fe0540a5a018e069ca7c07cedb8cb8ac282a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_navbar.php.twig"));

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



        ";
        // line 26
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 27
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 27, $this->getSourceContext()); })()), "user", array()), "username", array()))), "html", null, true);
            echo "\">
                    <span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>
                    Profil ( ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 29, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo " )
                </a>
            </li>

            <li><a href=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">
                    <span class=\"glyphicon\" aria-hidden=\"true\"></span>
                    Logout
                </a>
            </li>

        ";
        } else {
            // line 40
            echo "
            <li><a href=\"";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">
                    <span class=\"glyphicon\" aria-hidden=\"true\"></span>
                    Login
                </a>
            </li>

        ";
        }
        // line 48
        echo "



        </ul>
    </div>
</div>";
        
        $__internal_a9c7150877549d9e0d67803e67c54b05586b3bcd534550dcbed58c60bf0465c8->leave($__internal_a9c7150877549d9e0d67803e67c54b05586b3bcd534550dcbed58c60bf0465c8_prof);

        
        $__internal_6d20e143ed92dcfc8f9b427a15fe0540a5a018e069ca7c07cedb8cb8ac282a03->leave($__internal_6d20e143ed92dcfc8f9b427a15fe0540a5a018e069ca7c07cedb8cb8ac282a03_prof);

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
        return array (  96 => 48,  86 => 41,  83 => 40,  73 => 33,  66 => 29,  60 => 27,  58 => 26,  47 => 18,  37 => 11,  25 => 1,);
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



        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            <li><a href=\"{{ path('profile', { name : app.user.username }) }}\">
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
