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
        $__internal_81dd16a090bd41eb3d85a6976840d09a9f064d2ee3a5b5a4b9c088ce71343fde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81dd16a090bd41eb3d85a6976840d09a9f064d2ee3a5b5a4b9c088ce71343fde->enter($__internal_81dd16a090bd41eb3d85a6976840d09a9f064d2ee3a5b5a4b9c088ce71343fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentications/login_explicit.php.twig"));

        $__internal_9f72d0ee1db636d5edd40b2a2ad255b5618e49f64311df9137fdc9f80c986d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f72d0ee1db636d5edd40b2a2ad255b5618e49f64311df9137fdc9f80c986d53->enter($__internal_9f72d0ee1db636d5edd40b2a2ad255b5618e49f64311df9137fdc9f80c986d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentications/login_explicit.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81dd16a090bd41eb3d85a6976840d09a9f064d2ee3a5b5a4b9c088ce71343fde->leave($__internal_81dd16a090bd41eb3d85a6976840d09a9f064d2ee3a5b5a4b9c088ce71343fde_prof);

        
        $__internal_9f72d0ee1db636d5edd40b2a2ad255b5618e49f64311df9137fdc9f80c986d53->leave($__internal_9f72d0ee1db636d5edd40b2a2ad255b5618e49f64311df9137fdc9f80c986d53_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_fbe0b08514c0aee6792e89330eace4b86028ad706027932aa60d8833e4c1628b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbe0b08514c0aee6792e89330eace4b86028ad706027932aa60d8833e4c1628b->enter($__internal_fbe0b08514c0aee6792e89330eace4b86028ad706027932aa60d8833e4c1628b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_44a4b3fb42c34f20aa315b3c659866b4e023d211d982899627cd59f75e05ad4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a4b3fb42c34f20aa315b3c659866b4e023d211d982899627cd59f75e05ad4c->enter($__internal_44a4b3fb42c34f20aa315b3c659866b4e023d211d982899627cd59f75e05ad4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_44a4b3fb42c34f20aa315b3c659866b4e023d211d982899627cd59f75e05ad4c->leave($__internal_44a4b3fb42c34f20aa315b3c659866b4e023d211d982899627cd59f75e05ad4c_prof);

        
        $__internal_fbe0b08514c0aee6792e89330eace4b86028ad706027932aa60d8833e4c1628b->leave($__internal_fbe0b08514c0aee6792e89330eace4b86028ad706027932aa60d8833e4c1628b_prof);

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
