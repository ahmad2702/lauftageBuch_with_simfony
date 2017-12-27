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
        $__internal_acf68cdae833cdc9310d9579d7163e5a4142e58bf1f4d4aeb3bb1bbe75967a7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acf68cdae833cdc9310d9579d7163e5a4142e58bf1f4d4aeb3bb1bbe75967a7e->enter($__internal_acf68cdae833cdc9310d9579d7163e5a4142e58bf1f4d4aeb3bb1bbe75967a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_8845bd85aca92563029f1544e7440fa024c96b7bacb00dc4dad39729c213411a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8845bd85aca92563029f1544e7440fa024c96b7bacb00dc4dad39729c213411a->enter($__internal_8845bd85aca92563029f1544e7440fa024c96b7bacb00dc4dad39729c213411a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acf68cdae833cdc9310d9579d7163e5a4142e58bf1f4d4aeb3bb1bbe75967a7e->leave($__internal_acf68cdae833cdc9310d9579d7163e5a4142e58bf1f4d4aeb3bb1bbe75967a7e_prof);

        
        $__internal_8845bd85aca92563029f1544e7440fa024c96b7bacb00dc4dad39729c213411a->leave($__internal_8845bd85aca92563029f1544e7440fa024c96b7bacb00dc4dad39729c213411a_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_2f8de82db36c281ce1f73d5211c6e35c194a1f5443029ce4217f4161bb39b04a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f8de82db36c281ce1f73d5211c6e35c194a1f5443029ce4217f4161bb39b04a->enter($__internal_2f8de82db36c281ce1f73d5211c6e35c194a1f5443029ce4217f4161bb39b04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_ab92b53a498df61e5f378a25bda945f1ddb2a46e6f3f608a0e26af27f57ff610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab92b53a498df61e5f378a25bda945f1ddb2a46e6f3f608a0e26af27f57ff610->enter($__internal_ab92b53a498df61e5f378a25bda945f1ddb2a46e6f3f608a0e26af27f57ff610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_ab92b53a498df61e5f378a25bda945f1ddb2a46e6f3f608a0e26af27f57ff610->leave($__internal_ab92b53a498df61e5f378a25bda945f1ddb2a46e6f3f608a0e26af27f57ff610_prof);

        
        $__internal_2f8de82db36c281ce1f73d5211c6e35c194a1f5443029ce4217f4161bb39b04a->leave($__internal_2f8de82db36c281ce1f73d5211c6e35c194a1f5443029ce4217f4161bb39b04a_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a9af82d1d2506181b862ed2af5eacc3be663369bfb9ff6986079218a2d0a8f8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9af82d1d2506181b862ed2af5eacc3be663369bfb9ff6986079218a2d0a8f8a->enter($__internal_a9af82d1d2506181b862ed2af5eacc3be663369bfb9ff6986079218a2d0a8f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_96a60e1442daba473c3ce36c45b06cba8d3b64d1549b874ec41cfca29d840822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a60e1442daba473c3ce36c45b06cba8d3b64d1549b874ec41cfca29d840822->enter($__internal_96a60e1442daba473c3ce36c45b06cba8d3b64d1549b874ec41cfca29d840822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_96a60e1442daba473c3ce36c45b06cba8d3b64d1549b874ec41cfca29d840822->leave($__internal_96a60e1442daba473c3ce36c45b06cba8d3b64d1549b874ec41cfca29d840822_prof);

        
        $__internal_a9af82d1d2506181b862ed2af5eacc3be663369bfb9ff6986079218a2d0a8f8a->leave($__internal_a9af82d1d2506181b862ed2af5eacc3be663369bfb9ff6986079218a2d0a8f8a_prof);

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
