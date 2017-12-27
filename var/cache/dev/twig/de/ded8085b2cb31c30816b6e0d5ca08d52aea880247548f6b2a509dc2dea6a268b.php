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
        $__internal_6d57cc68b6701af8b87836a885497bfb0e053cca632ec362c9a174daae3d53dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d57cc68b6701af8b87836a885497bfb0e053cca632ec362c9a174daae3d53dd->enter($__internal_6d57cc68b6701af8b87836a885497bfb0e053cca632ec362c9a174daae3d53dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_612deb60d48ffd6174b8f11f36784a6f055889b21cb62cd065028f488ee95331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_612deb60d48ffd6174b8f11f36784a6f055889b21cb62cd065028f488ee95331->enter($__internal_612deb60d48ffd6174b8f11f36784a6f055889b21cb62cd065028f488ee95331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d57cc68b6701af8b87836a885497bfb0e053cca632ec362c9a174daae3d53dd->leave($__internal_6d57cc68b6701af8b87836a885497bfb0e053cca632ec362c9a174daae3d53dd_prof);

        
        $__internal_612deb60d48ffd6174b8f11f36784a6f055889b21cb62cd065028f488ee95331->leave($__internal_612deb60d48ffd6174b8f11f36784a6f055889b21cb62cd065028f488ee95331_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_9011fad63b138958b27bd670055ac1e8f680a40f6075e648d86a4d3b361d5de8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9011fad63b138958b27bd670055ac1e8f680a40f6075e648d86a4d3b361d5de8->enter($__internal_9011fad63b138958b27bd670055ac1e8f680a40f6075e648d86a4d3b361d5de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_da7aa07a0ab07ae361f3f6389de713af44bc51d056a22264ab444a18e51c2ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da7aa07a0ab07ae361f3f6389de713af44bc51d056a22264ab444a18e51c2ee1->enter($__internal_da7aa07a0ab07ae361f3f6389de713af44bc51d056a22264ab444a18e51c2ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_da7aa07a0ab07ae361f3f6389de713af44bc51d056a22264ab444a18e51c2ee1->leave($__internal_da7aa07a0ab07ae361f3f6389de713af44bc51d056a22264ab444a18e51c2ee1_prof);

        
        $__internal_9011fad63b138958b27bd670055ac1e8f680a40f6075e648d86a4d3b361d5de8->leave($__internal_9011fad63b138958b27bd670055ac1e8f680a40f6075e648d86a4d3b361d5de8_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_08b52a68b7f12cd13afea90cda442c687b94618365ac046b01fa0ea5e53d7514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08b52a68b7f12cd13afea90cda442c687b94618365ac046b01fa0ea5e53d7514->enter($__internal_08b52a68b7f12cd13afea90cda442c687b94618365ac046b01fa0ea5e53d7514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f7b301195c897aeea05986b9e8186db89d33f7c0303c3f5f402c4ec164b6332b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b301195c897aeea05986b9e8186db89d33f7c0303c3f5f402c4ec164b6332b->enter($__internal_f7b301195c897aeea05986b9e8186db89d33f7c0303c3f5f402c4ec164b6332b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_f7b301195c897aeea05986b9e8186db89d33f7c0303c3f5f402c4ec164b6332b->leave($__internal_f7b301195c897aeea05986b9e8186db89d33f7c0303c3f5f402c4ec164b6332b_prof);

        
        $__internal_08b52a68b7f12cd13afea90cda442c687b94618365ac046b01fa0ea5e53d7514->leave($__internal_08b52a68b7f12cd13afea90cda442c687b94618365ac046b01fa0ea5e53d7514_prof);

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
