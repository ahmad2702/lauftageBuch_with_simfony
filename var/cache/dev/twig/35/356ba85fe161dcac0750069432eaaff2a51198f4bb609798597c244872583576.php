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
        $__internal_5620cb638713e1efa0dd08c298ac85c60964871c62800eafdc18e792ea8377f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5620cb638713e1efa0dd08c298ac85c60964871c62800eafdc18e792ea8377f3->enter($__internal_5620cb638713e1efa0dd08c298ac85c60964871c62800eafdc18e792ea8377f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentications/login_explicit.php.twig"));

        $__internal_0ada9cbbcf00891bba5a257e4c1e50f9055d2bd6059fc386df23b50bb54b7b1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ada9cbbcf00891bba5a257e4c1e50f9055d2bd6059fc386df23b50bb54b7b1e->enter($__internal_0ada9cbbcf00891bba5a257e4c1e50f9055d2bd6059fc386df23b50bb54b7b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentications/login_explicit.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5620cb638713e1efa0dd08c298ac85c60964871c62800eafdc18e792ea8377f3->leave($__internal_5620cb638713e1efa0dd08c298ac85c60964871c62800eafdc18e792ea8377f3_prof);

        
        $__internal_0ada9cbbcf00891bba5a257e4c1e50f9055d2bd6059fc386df23b50bb54b7b1e->leave($__internal_0ada9cbbcf00891bba5a257e4c1e50f9055d2bd6059fc386df23b50bb54b7b1e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_87b76e7dd0c5cd0cdb88f059b2b5c19b9cbd7833d6ca2d4e2558937d64ed68e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87b76e7dd0c5cd0cdb88f059b2b5c19b9cbd7833d6ca2d4e2558937d64ed68e9->enter($__internal_87b76e7dd0c5cd0cdb88f059b2b5c19b9cbd7833d6ca2d4e2558937d64ed68e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fcab88e127f38f8e877cd61c21541d0797b06ced6d9c7d319fcfae7ea53bb1a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcab88e127f38f8e877cd61c21541d0797b06ced6d9c7d319fcfae7ea53bb1a5->enter($__internal_fcab88e127f38f8e877cd61c21541d0797b06ced6d9c7d319fcfae7ea53bb1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

    ";
        // line 6
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })())) {
            // line 7
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 7, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 7, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
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
        
        $__internal_fcab88e127f38f8e877cd61c21541d0797b06ced6d9c7d319fcfae7ea53bb1a5->leave($__internal_fcab88e127f38f8e877cd61c21541d0797b06ced6d9c7d319fcfae7ea53bb1a5_prof);

        
        $__internal_87b76e7dd0c5cd0cdb88f059b2b5c19b9cbd7833d6ca2d4e2558937d64ed68e9->leave($__internal_87b76e7dd0c5cd0cdb88f059b2b5c19b9cbd7833d6ca2d4e2558937d64ed68e9_prof);

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
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(errors.messageData, 'security') }}</div>
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
