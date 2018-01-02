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
        $__internal_e3aed695ab17ff35829b61188da71dc28248ef40ae8b5e26bb0476163b6f84e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3aed695ab17ff35829b61188da71dc28248ef40ae8b5e26bb0476163b6f84e2->enter($__internal_e3aed695ab17ff35829b61188da71dc28248ef40ae8b5e26bb0476163b6f84e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentications/login_explicit.php.twig"));

        $__internal_965823d05f3829f7f32e256441963053ede06a795f85b8866a36a75d473b695b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_965823d05f3829f7f32e256441963053ede06a795f85b8866a36a75d473b695b->enter($__internal_965823d05f3829f7f32e256441963053ede06a795f85b8866a36a75d473b695b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentications/login_explicit.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3aed695ab17ff35829b61188da71dc28248ef40ae8b5e26bb0476163b6f84e2->leave($__internal_e3aed695ab17ff35829b61188da71dc28248ef40ae8b5e26bb0476163b6f84e2_prof);

        
        $__internal_965823d05f3829f7f32e256441963053ede06a795f85b8866a36a75d473b695b->leave($__internal_965823d05f3829f7f32e256441963053ede06a795f85b8866a36a75d473b695b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b46f956e1b2f52d8b65ca8ae0bbb2fbe96906d8e178fd7161e1fbd0ae9c0ea70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b46f956e1b2f52d8b65ca8ae0bbb2fbe96906d8e178fd7161e1fbd0ae9c0ea70->enter($__internal_b46f956e1b2f52d8b65ca8ae0bbb2fbe96906d8e178fd7161e1fbd0ae9c0ea70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ff7dff34dd1e4d2bc5c360ce9b11a6d69877cd9efbc82099fe8dfa7bf349bf33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff7dff34dd1e4d2bc5c360ce9b11a6d69877cd9efbc82099fe8dfa7bf349bf33->enter($__internal_ff7dff34dd1e4d2bc5c360ce9b11a6d69877cd9efbc82099fe8dfa7bf349bf33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_ff7dff34dd1e4d2bc5c360ce9b11a6d69877cd9efbc82099fe8dfa7bf349bf33->leave($__internal_ff7dff34dd1e4d2bc5c360ce9b11a6d69877cd9efbc82099fe8dfa7bf349bf33_prof);

        
        $__internal_b46f956e1b2f52d8b65ca8ae0bbb2fbe96906d8e178fd7161e1fbd0ae9c0ea70->leave($__internal_b46f956e1b2f52d8b65ca8ae0bbb2fbe96906d8e178fd7161e1fbd0ae9c0ea70_prof);

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
