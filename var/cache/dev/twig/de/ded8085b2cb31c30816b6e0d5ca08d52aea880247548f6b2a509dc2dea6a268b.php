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
        $__internal_ed3590fad9ed456a6cb1728f0c33611ff428842dcf401f0013ffa42407e6fe35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed3590fad9ed456a6cb1728f0c33611ff428842dcf401f0013ffa42407e6fe35->enter($__internal_ed3590fad9ed456a6cb1728f0c33611ff428842dcf401f0013ffa42407e6fe35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_8c548c4b8706b0a5cb7e81ee874cad69f5a6060924577c4706f0de4eb800ac83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c548c4b8706b0a5cb7e81ee874cad69f5a6060924577c4706f0de4eb800ac83->enter($__internal_8c548c4b8706b0a5cb7e81ee874cad69f5a6060924577c4706f0de4eb800ac83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed3590fad9ed456a6cb1728f0c33611ff428842dcf401f0013ffa42407e6fe35->leave($__internal_ed3590fad9ed456a6cb1728f0c33611ff428842dcf401f0013ffa42407e6fe35_prof);

        
        $__internal_8c548c4b8706b0a5cb7e81ee874cad69f5a6060924577c4706f0de4eb800ac83->leave($__internal_8c548c4b8706b0a5cb7e81ee874cad69f5a6060924577c4706f0de4eb800ac83_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_8e4424d087fd138704b87725bdac7898b2a7965ca719e8fc37e63367f692d626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e4424d087fd138704b87725bdac7898b2a7965ca719e8fc37e63367f692d626->enter($__internal_8e4424d087fd138704b87725bdac7898b2a7965ca719e8fc37e63367f692d626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_fc2ccc79d1a36b68a65ba63290a983f439c8711f340a381171f4e4b84af23fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc2ccc79d1a36b68a65ba63290a983f439c8711f340a381171f4e4b84af23fd2->enter($__internal_fc2ccc79d1a36b68a65ba63290a983f439c8711f340a381171f4e4b84af23fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_fc2ccc79d1a36b68a65ba63290a983f439c8711f340a381171f4e4b84af23fd2->leave($__internal_fc2ccc79d1a36b68a65ba63290a983f439c8711f340a381171f4e4b84af23fd2_prof);

        
        $__internal_8e4424d087fd138704b87725bdac7898b2a7965ca719e8fc37e63367f692d626->leave($__internal_8e4424d087fd138704b87725bdac7898b2a7965ca719e8fc37e63367f692d626_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0be869740452d2df9a6142f8eb7733f8b044d1aeeeaeffb81a442e93c42a9be4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be869740452d2df9a6142f8eb7733f8b044d1aeeeaeffb81a442e93c42a9be4->enter($__internal_0be869740452d2df9a6142f8eb7733f8b044d1aeeeaeffb81a442e93c42a9be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_213ad846c9009234584fb127d9d0deba58f12fa9de7ed8bdf20a40d35ec864ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213ad846c9009234584fb127d9d0deba58f12fa9de7ed8bdf20a40d35ec864ad->enter($__internal_213ad846c9009234584fb127d9d0deba58f12fa9de7ed8bdf20a40d35ec864ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_213ad846c9009234584fb127d9d0deba58f12fa9de7ed8bdf20a40d35ec864ad->leave($__internal_213ad846c9009234584fb127d9d0deba58f12fa9de7ed8bdf20a40d35ec864ad_prof);

        
        $__internal_0be869740452d2df9a6142f8eb7733f8b044d1aeeeaeffb81a442e93c42a9be4->leave($__internal_0be869740452d2df9a6142f8eb7733f8b044d1aeeeaeffb81a442e93c42a9be4_prof);

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
