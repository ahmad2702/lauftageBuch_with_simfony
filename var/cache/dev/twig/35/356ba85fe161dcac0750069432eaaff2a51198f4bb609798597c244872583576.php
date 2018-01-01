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
        $__internal_a0c694064c02665ed5da0dcc21cfeb876d26300154952a4a1fd617e76eb0290f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0c694064c02665ed5da0dcc21cfeb876d26300154952a4a1fd617e76eb0290f->enter($__internal_a0c694064c02665ed5da0dcc21cfeb876d26300154952a4a1fd617e76eb0290f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentications/login_explicit.php.twig"));

        $__internal_b9a8b136f97333c40e4600219aad7056edf76cdde569144d845c34791df2c251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a8b136f97333c40e4600219aad7056edf76cdde569144d845c34791df2c251->enter($__internal_b9a8b136f97333c40e4600219aad7056edf76cdde569144d845c34791df2c251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentications/login_explicit.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0c694064c02665ed5da0dcc21cfeb876d26300154952a4a1fd617e76eb0290f->leave($__internal_a0c694064c02665ed5da0dcc21cfeb876d26300154952a4a1fd617e76eb0290f_prof);

        
        $__internal_b9a8b136f97333c40e4600219aad7056edf76cdde569144d845c34791df2c251->leave($__internal_b9a8b136f97333c40e4600219aad7056edf76cdde569144d845c34791df2c251_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f1ea75ea64e19c45cc6e744cdf7aceab5383a16a69576f24f59e160e92c3c1c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ea75ea64e19c45cc6e744cdf7aceab5383a16a69576f24f59e160e92c3c1c1->enter($__internal_f1ea75ea64e19c45cc6e744cdf7aceab5383a16a69576f24f59e160e92c3c1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5d5a9560f662d1dbaeb601971a52ff8c7e5ce54632e272c37192aaf4c9b6c80e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d5a9560f662d1dbaeb601971a52ff8c7e5ce54632e272c37192aaf4c9b6c80e->enter($__internal_5d5a9560f662d1dbaeb601971a52ff8c7e5ce54632e272c37192aaf4c9b6c80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"username\"/>

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        ";
        // line 23
        echo "
        <button type=\"submit\">login</button>
    </form>















";
        
        $__internal_5d5a9560f662d1dbaeb601971a52ff8c7e5ce54632e272c37192aaf4c9b6c80e->leave($__internal_5d5a9560f662d1dbaeb601971a52ff8c7e5ce54632e272c37192aaf4c9b6c80e_prof);

        
        $__internal_f1ea75ea64e19c45cc6e744cdf7aceab5383a16a69576f24f59e160e92c3c1c1->leave($__internal_f1ea75ea64e19c45cc6e744cdf7aceab5383a16a69576f24f59e160e92c3c1c1_prof);

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
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"username\"/>

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
