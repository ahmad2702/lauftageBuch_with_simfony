<?php

/* authentications/login.php.twig */
class __TwigTemplate_01e60b03f92e595ab699787fddb186bd92413e95ffb181a151ac0e41f5362e48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.php.twig", "authentications/login.php.twig", 1);
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
        $__internal_cfcdcf3142017c0a88008f9c2a097595c6e0c141add279475a9f609144b4f051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfcdcf3142017c0a88008f9c2a097595c6e0c141add279475a9f609144b4f051->enter($__internal_cfcdcf3142017c0a88008f9c2a097595c6e0c141add279475a9f609144b4f051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentications/login.php.twig"));

        $__internal_03bbdad5a179ed8685f85060baa94f4a16b5e9d1f53c731fea832ff4799545b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03bbdad5a179ed8685f85060baa94f4a16b5e9d1f53c731fea832ff4799545b3->enter($__internal_03bbdad5a179ed8685f85060baa94f4a16b5e9d1f53c731fea832ff4799545b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentications/login.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfcdcf3142017c0a88008f9c2a097595c6e0c141add279475a9f609144b4f051->leave($__internal_cfcdcf3142017c0a88008f9c2a097595c6e0c141add279475a9f609144b4f051_prof);

        
        $__internal_03bbdad5a179ed8685f85060baa94f4a16b5e9d1f53c731fea832ff4799545b3->leave($__internal_03bbdad5a179ed8685f85060baa94f4a16b5e9d1f53c731fea832ff4799545b3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_783b8235dde9b1d7a78eb9c664a8173128410d049b466f59dfe9a9aff809eea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_783b8235dde9b1d7a78eb9c664a8173128410d049b466f59dfe9a9aff809eea6->enter($__internal_783b8235dde9b1d7a78eb9c664a8173128410d049b466f59dfe9a9aff809eea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_210329d1c47bab87ed3b26ae2cd0dadb4d015db3bbcd7b54dced82e5667b3cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_210329d1c47bab87ed3b26ae2cd0dadb4d015db3bbcd7b54dced82e5667b3cf3->enter($__internal_210329d1c47bab87ed3b26ae2cd0dadb4d015db3bbcd7b54dced82e5667b3cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"page-header\">
        <h1 align='center'>Login:</h1>
    </div>

    ";
        // line 9
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 9, $this->getSourceContext()); })())) {
            // line 10
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 10, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 10, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 12
        echo "
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), 'form_start');
        echo "

        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "_username", array()), 'row');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "_password", array()), 'row');
        echo "

        <button type=\"submit\" class=\"btn btn-success\">LOGIN <span class=\"fa fa-lock\"></span> </button>

    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'form_end');
        echo "


";
        
        $__internal_210329d1c47bab87ed3b26ae2cd0dadb4d015db3bbcd7b54dced82e5667b3cf3->leave($__internal_210329d1c47bab87ed3b26ae2cd0dadb4d015db3bbcd7b54dced82e5667b3cf3_prof);

        
        $__internal_783b8235dde9b1d7a78eb9c664a8173128410d049b466f59dfe9a9aff809eea6->leave($__internal_783b8235dde9b1d7a78eb9c664a8173128410d049b466f59dfe9a9aff809eea6_prof);

    }

    public function getTemplateName()
    {
        return "authentications/login.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 20,  76 => 16,  72 => 15,  67 => 13,  64 => 12,  58 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.php.twig\" %}

{% block content %}

    <div class=\"page-header\">
        <h1 align='center'>Login:</h1>
    </div>

    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {{ form_start(form) }}

        {{ form_row(form._username) }}
        {{ form_row(form._password) }}

        <button type=\"submit\" class=\"btn btn-success\">LOGIN <span class=\"fa fa-lock\"></span> </button>

    {{ form_end(form) }}


{% endblock %}", "authentications/login.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/templates/authentications/login.php.twig");
    }
}
