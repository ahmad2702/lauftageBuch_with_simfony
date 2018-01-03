<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_3ed4cb8d77bf8229d8693a3ac538d0ad9330f7079a816399f3ba8c677246af0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7633b4583411458122846f8828f8b7193ab45186e3f82173470735cb5a7b71e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7633b4583411458122846f8828f8b7193ab45186e3f82173470735cb5a7b71e->enter($__internal_a7633b4583411458122846f8828f8b7193ab45186e3f82173470735cb5a7b71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_b3b31ee7fe4e37582b13a6b42ca832c0408872b264ed952f364fa5580a5ef2ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3b31ee7fe4e37582b13a6b42ca832c0408872b264ed952f364fa5580a5ef2ca->enter($__internal_b3b31ee7fe4e37582b13a6b42ca832c0408872b264ed952f364fa5580a5ef2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7633b4583411458122846f8828f8b7193ab45186e3f82173470735cb5a7b71e->leave($__internal_a7633b4583411458122846f8828f8b7193ab45186e3f82173470735cb5a7b71e_prof);

        
        $__internal_b3b31ee7fe4e37582b13a6b42ca832c0408872b264ed952f364fa5580a5ef2ca->leave($__internal_b3b31ee7fe4e37582b13a6b42ca832c0408872b264ed952f364fa5580a5ef2ca_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_32d393e96bd27890fd1f58258556c8eb7a54df6539e3a98eaff7d213a9ea9131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32d393e96bd27890fd1f58258556c8eb7a54df6539e3a98eaff7d213a9ea9131->enter($__internal_32d393e96bd27890fd1f58258556c8eb7a54df6539e3a98eaff7d213a9ea9131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d47096a405c9507933ef32bb3ac8936ca4ab3e59d2b52eb8cd2736b1358dacf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d47096a405c9507933ef32bb3ac8936ca4ab3e59d2b52eb8cd2736b1358dacf6->enter($__internal_d47096a405c9507933ef32bb3ac8936ca4ab3e59d2b52eb8cd2736b1358dacf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d47096a405c9507933ef32bb3ac8936ca4ab3e59d2b52eb8cd2736b1358dacf6->leave($__internal_d47096a405c9507933ef32bb3ac8936ca4ab3e59d2b52eb8cd2736b1358dacf6_prof);

        
        $__internal_32d393e96bd27890fd1f58258556c8eb7a54df6539e3a98eaff7d213a9ea9131->leave($__internal_32d393e96bd27890fd1f58258556c8eb7a54df6539e3a98eaff7d213a9ea9131_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd3134c24a9c87f312701f11d4a6162672583886b004bb84616f8e62ec678165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd3134c24a9c87f312701f11d4a6162672583886b004bb84616f8e62ec678165->enter($__internal_fd3134c24a9c87f312701f11d4a6162672583886b004bb84616f8e62ec678165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd2b3e43a26f993e6ac3e471aa17f4538dc967feb53332aeafcdb210c52cbfd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd2b3e43a26f993e6ac3e471aa17f4538dc967feb53332aeafcdb210c52cbfd3->enter($__internal_dd2b3e43a26f993e6ac3e471aa17f4538dc967feb53332aeafcdb210c52cbfd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_dd2b3e43a26f993e6ac3e471aa17f4538dc967feb53332aeafcdb210c52cbfd3->leave($__internal_dd2b3e43a26f993e6ac3e471aa17f4538dc967feb53332aeafcdb210c52cbfd3_prof);

        
        $__internal_fd3134c24a9c87f312701f11d4a6162672583886b004bb84616f8e62ec678165->leave($__internal_fd3134c24a9c87f312701f11d4a6162672583886b004bb84616f8e62ec678165_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
