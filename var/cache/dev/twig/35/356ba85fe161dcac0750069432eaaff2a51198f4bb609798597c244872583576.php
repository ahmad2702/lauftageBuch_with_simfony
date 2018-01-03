<?php

/* authentications/login_explicit.php.twig */
class __TwigTemplate_92b68ee999b3fac7e258e4685536a1ce166fa5b698efb5e75ba350576cabea45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.php.twig", "authentications/login_explicit.php.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.php.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91194d1226fbce8fca61e8b29863098c4cd35c1f8bc2543cd1bbf4686ad8617c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91194d1226fbce8fca61e8b29863098c4cd35c1f8bc2543cd1bbf4686ad8617c->enter($__internal_91194d1226fbce8fca61e8b29863098c4cd35c1f8bc2543cd1bbf4686ad8617c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentications/login_explicit.php.twig"));

        $__internal_a4e2bf73648f0349b14255e1c2f3c12ffabd6829c41208bfea0e6d56cf36dbc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4e2bf73648f0349b14255e1c2f3c12ffabd6829c41208bfea0e6d56cf36dbc9->enter($__internal_a4e2bf73648f0349b14255e1c2f3c12ffabd6829c41208bfea0e6d56cf36dbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentications/login_explicit.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91194d1226fbce8fca61e8b29863098c4cd35c1f8bc2543cd1bbf4686ad8617c->leave($__internal_91194d1226fbce8fca61e8b29863098c4cd35c1f8bc2543cd1bbf4686ad8617c_prof);

        
        $__internal_a4e2bf73648f0349b14255e1c2f3c12ffabd6829c41208bfea0e6d56cf36dbc9->leave($__internal_a4e2bf73648f0349b14255e1c2f3c12ffabd6829c41208bfea0e6d56cf36dbc9_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d5324d3f2cec78e6e7d039a337bdb9218f8ec9a08c86fc464ac07b1964157eb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5324d3f2cec78e6e7d039a337bdb9218f8ec9a08c86fc464ac07b1964157eb2->enter($__internal_d5324d3f2cec78e6e7d039a337bdb9218f8ec9a08c86fc464ac07b1964157eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f7643903be841b604c1525c61321252bd7132bbcbe9c29c3684632c2619bc23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7643903be841b604c1525c61321252bd7132bbcbe9c29c3684632c2619bc23->enter($__internal_6f7643903be841b604c1525c61321252bd7132bbcbe9c29c3684632c2619bc23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

    ";
        // line 6
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })())) {
            // line 7
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 7, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 7, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "

    <form action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
        echo " \" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"\"/>

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        ";
        // line 23
        echo "
        <button type=\"submit\">login</button>
    </form>













";
        
        $__internal_6f7643903be841b604c1525c61321252bd7132bbcbe9c29c3684632c2619bc23->leave($__internal_6f7643903be841b604c1525c61321252bd7132bbcbe9c29c3684632c2619bc23_prof);

        
        $__internal_d5324d3f2cec78e6e7d039a337bdb9218f8ec9a08c86fc464ac07b1964157eb2->leave($__internal_d5324d3f2cec78e6e7d039a337bdb9218f8ec9a08c86fc464ac07b1964157eb2_prof);

    }

    public function getTemplateName()
    {
        return "authentications/login_explicit.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 23,  65 => 11,  61 => 9,  55 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.php.twig\" %}

{% block content %}


    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}


    <form action=\"{{ path('security_login') }} \" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"\"/>

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        {#
            If you want to control the URL the user
            is redirected to on success (more details below)
            <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
        #}

        <button type=\"submit\">login</button>
    </form>













{% endblock %}", "authentications/login_explicit.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/templates/authentications/login_explicit.php.twig");
    }
}
