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
        $__internal_a9c9f015c0566a3b40683e30fb58e48f7b641806fdeee7b0131021d6092f895f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9c9f015c0566a3b40683e30fb58e48f7b641806fdeee7b0131021d6092f895f->enter($__internal_a9c9f015c0566a3b40683e30fb58e48f7b641806fdeee7b0131021d6092f895f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_21afd0d397411f308ab5bf5fdcae7c55f2ae58d6c41f1ec198fb5bc49a953fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21afd0d397411f308ab5bf5fdcae7c55f2ae58d6c41f1ec198fb5bc49a953fea->enter($__internal_21afd0d397411f308ab5bf5fdcae7c55f2ae58d6c41f1ec198fb5bc49a953fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9c9f015c0566a3b40683e30fb58e48f7b641806fdeee7b0131021d6092f895f->leave($__internal_a9c9f015c0566a3b40683e30fb58e48f7b641806fdeee7b0131021d6092f895f_prof);

        
        $__internal_21afd0d397411f308ab5bf5fdcae7c55f2ae58d6c41f1ec198fb5bc49a953fea->leave($__internal_21afd0d397411f308ab5bf5fdcae7c55f2ae58d6c41f1ec198fb5bc49a953fea_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_1a23fbeb22d0ca80e55dffb21774815018c7ef922965ef936101300e54afd8cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a23fbeb22d0ca80e55dffb21774815018c7ef922965ef936101300e54afd8cf->enter($__internal_1a23fbeb22d0ca80e55dffb21774815018c7ef922965ef936101300e54afd8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_9f0b43d13983b702a26fe46ab1358b7f32f5f42936f7f7970b8253b8c14ae8e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f0b43d13983b702a26fe46ab1358b7f32f5f42936f7f7970b8253b8c14ae8e1->enter($__internal_9f0b43d13983b702a26fe46ab1358b7f32f5f42936f7f7970b8253b8c14ae8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_9f0b43d13983b702a26fe46ab1358b7f32f5f42936f7f7970b8253b8c14ae8e1->leave($__internal_9f0b43d13983b702a26fe46ab1358b7f32f5f42936f7f7970b8253b8c14ae8e1_prof);

        
        $__internal_1a23fbeb22d0ca80e55dffb21774815018c7ef922965ef936101300e54afd8cf->leave($__internal_1a23fbeb22d0ca80e55dffb21774815018c7ef922965ef936101300e54afd8cf_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ecc9f256573a6a3832b66c6d6c2cf3dafb58fed6ec4e996dd88fd2ad56413f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ecc9f256573a6a3832b66c6d6c2cf3dafb58fed6ec4e996dd88fd2ad56413f9->enter($__internal_4ecc9f256573a6a3832b66c6d6c2cf3dafb58fed6ec4e996dd88fd2ad56413f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_153c1f317b55f45fe7106fee393322adfce8f30892054aab31940058bdbfd7b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_153c1f317b55f45fe7106fee393322adfce8f30892054aab31940058bdbfd7b2->enter($__internal_153c1f317b55f45fe7106fee393322adfce8f30892054aab31940058bdbfd7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_153c1f317b55f45fe7106fee393322adfce8f30892054aab31940058bdbfd7b2->leave($__internal_153c1f317b55f45fe7106fee393322adfce8f30892054aab31940058bdbfd7b2_prof);

        
        $__internal_4ecc9f256573a6a3832b66c6d6c2cf3dafb58fed6ec4e996dd88fd2ad56413f9->leave($__internal_4ecc9f256573a6a3832b66c6d6c2cf3dafb58fed6ec4e996dd88fd2ad56413f9_prof);

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
", "@WebProfiler/Profiler/info.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/info.html.twig");
    }
}
