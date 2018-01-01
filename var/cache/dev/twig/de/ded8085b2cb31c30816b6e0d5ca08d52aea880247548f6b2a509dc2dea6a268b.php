<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_7b662f8be774429c46fb738c09ad0d775d383139f62db35cbdb42b3b5711fe91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11b12d6df4ad0b1cd1285f77085501a2ba4a3d474db14bdbf9dbbd24b46b7a8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11b12d6df4ad0b1cd1285f77085501a2ba4a3d474db14bdbf9dbbd24b46b7a8b->enter($__internal_11b12d6df4ad0b1cd1285f77085501a2ba4a3d474db14bdbf9dbbd24b46b7a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_98c5a345aa5dd6422b5124ddb488dccf0b65bdf44519b86ecab0f1782c0237f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98c5a345aa5dd6422b5124ddb488dccf0b65bdf44519b86ecab0f1782c0237f1->enter($__internal_98c5a345aa5dd6422b5124ddb488dccf0b65bdf44519b86ecab0f1782c0237f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11b12d6df4ad0b1cd1285f77085501a2ba4a3d474db14bdbf9dbbd24b46b7a8b->leave($__internal_11b12d6df4ad0b1cd1285f77085501a2ba4a3d474db14bdbf9dbbd24b46b7a8b_prof);

        
        $__internal_98c5a345aa5dd6422b5124ddb488dccf0b65bdf44519b86ecab0f1782c0237f1->leave($__internal_98c5a345aa5dd6422b5124ddb488dccf0b65bdf44519b86ecab0f1782c0237f1_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_e19fe066eb1f446f4a1fe5122350cf5a441647904d32da7688d9ccc9fa12f544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e19fe066eb1f446f4a1fe5122350cf5a441647904d32da7688d9ccc9fa12f544->enter($__internal_e19fe066eb1f446f4a1fe5122350cf5a441647904d32da7688d9ccc9fa12f544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_1d89fad0dcd75d6489f58c7f11aca68f671948fc8e9bf07e3258aa63ce0a58ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d89fad0dcd75d6489f58c7f11aca68f671948fc8e9bf07e3258aa63ce0a58ad->enter($__internal_1d89fad0dcd75d6489f58c7f11aca68f671948fc8e9bf07e3258aa63ce0a58ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_1d89fad0dcd75d6489f58c7f11aca68f671948fc8e9bf07e3258aa63ce0a58ad->leave($__internal_1d89fad0dcd75d6489f58c7f11aca68f671948fc8e9bf07e3258aa63ce0a58ad_prof);

        
        $__internal_e19fe066eb1f446f4a1fe5122350cf5a441647904d32da7688d9ccc9fa12f544->leave($__internal_e19fe066eb1f446f4a1fe5122350cf5a441647904d32da7688d9ccc9fa12f544_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3dc7cfa3d185a4d19607856787a4ab40bc264297ab342110a29446afe9369795 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dc7cfa3d185a4d19607856787a4ab40bc264297ab342110a29446afe9369795->enter($__internal_3dc7cfa3d185a4d19607856787a4ab40bc264297ab342110a29446afe9369795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a4a3a30e4407a665c84282ccd865a5b06b71b660a384d348b928b4aef1b246a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a3a30e4407a665c84282ccd865a5b06b71b660a384d348b928b4aef1b246a5->enter($__internal_a4a3a30e4407a665c84282ccd865a5b06b71b660a384d348b928b4aef1b246a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a4a3a30e4407a665c84282ccd865a5b06b71b660a384d348b928b4aef1b246a5->leave($__internal_a4a3a30e4407a665c84282ccd865a5b06b71b660a384d348b928b4aef1b246a5_prof);

        
        $__internal_3dc7cfa3d185a4d19607856787a4ab40bc264297ab342110a29446afe9369795->leave($__internal_3dc7cfa3d185a4d19607856787a4ab40bc264297ab342110a29446afe9369795_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/info.html.twig");
    }
}
