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
        $__internal_38ed16dbcfb61a100faab0dca7c53dc19f4cc9833493fb5f22d74b649c721bfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38ed16dbcfb61a100faab0dca7c53dc19f4cc9833493fb5f22d74b649c721bfb->enter($__internal_38ed16dbcfb61a100faab0dca7c53dc19f4cc9833493fb5f22d74b649c721bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_894b71671394532f05a680d81e2a1995dc0cf7b4791f99960ee42d6c169f0899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894b71671394532f05a680d81e2a1995dc0cf7b4791f99960ee42d6c169f0899->enter($__internal_894b71671394532f05a680d81e2a1995dc0cf7b4791f99960ee42d6c169f0899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38ed16dbcfb61a100faab0dca7c53dc19f4cc9833493fb5f22d74b649c721bfb->leave($__internal_38ed16dbcfb61a100faab0dca7c53dc19f4cc9833493fb5f22d74b649c721bfb_prof);

        
        $__internal_894b71671394532f05a680d81e2a1995dc0cf7b4791f99960ee42d6c169f0899->leave($__internal_894b71671394532f05a680d81e2a1995dc0cf7b4791f99960ee42d6c169f0899_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_a9768d2a15835fcac7706edfa4a7c8b6a858129326f907ecf212f6dbac949949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9768d2a15835fcac7706edfa4a7c8b6a858129326f907ecf212f6dbac949949->enter($__internal_a9768d2a15835fcac7706edfa4a7c8b6a858129326f907ecf212f6dbac949949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_45a42e52e321b2d0f39a9a9e8cbba80fefd9df577361d2ea1b1e5708b7e29187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a42e52e321b2d0f39a9a9e8cbba80fefd9df577361d2ea1b1e5708b7e29187->enter($__internal_45a42e52e321b2d0f39a9a9e8cbba80fefd9df577361d2ea1b1e5708b7e29187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_45a42e52e321b2d0f39a9a9e8cbba80fefd9df577361d2ea1b1e5708b7e29187->leave($__internal_45a42e52e321b2d0f39a9a9e8cbba80fefd9df577361d2ea1b1e5708b7e29187_prof);

        
        $__internal_a9768d2a15835fcac7706edfa4a7c8b6a858129326f907ecf212f6dbac949949->leave($__internal_a9768d2a15835fcac7706edfa4a7c8b6a858129326f907ecf212f6dbac949949_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_22b778a7a704790b372fae910dcb360e73845fb926448425f3f93eb11afd4b28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22b778a7a704790b372fae910dcb360e73845fb926448425f3f93eb11afd4b28->enter($__internal_22b778a7a704790b372fae910dcb360e73845fb926448425f3f93eb11afd4b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_941c168fd94e93b6cdbc840cd54cc83ef7c8438a8401874c0a072425ca2a026e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_941c168fd94e93b6cdbc840cd54cc83ef7c8438a8401874c0a072425ca2a026e->enter($__internal_941c168fd94e93b6cdbc840cd54cc83ef7c8438a8401874c0a072425ca2a026e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_941c168fd94e93b6cdbc840cd54cc83ef7c8438a8401874c0a072425ca2a026e->leave($__internal_941c168fd94e93b6cdbc840cd54cc83ef7c8438a8401874c0a072425ca2a026e_prof);

        
        $__internal_22b778a7a704790b372fae910dcb360e73845fb926448425f3f93eb11afd4b28->leave($__internal_22b778a7a704790b372fae910dcb360e73845fb926448425f3f93eb11afd4b28_prof);

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
