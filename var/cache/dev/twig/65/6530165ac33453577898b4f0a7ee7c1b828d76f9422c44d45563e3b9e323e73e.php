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
        $__internal_36dc6199611397dd5b5244d2c8f94ddd9f210ee178b9a56554afbf1f14c01e24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36dc6199611397dd5b5244d2c8f94ddd9f210ee178b9a56554afbf1f14c01e24->enter($__internal_36dc6199611397dd5b5244d2c8f94ddd9f210ee178b9a56554afbf1f14c01e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_b4099aedb99c213314148fa0d485cd59a91df4ab53f54ff39e552eded89dbe5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4099aedb99c213314148fa0d485cd59a91df4ab53f54ff39e552eded89dbe5a->enter($__internal_b4099aedb99c213314148fa0d485cd59a91df4ab53f54ff39e552eded89dbe5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36dc6199611397dd5b5244d2c8f94ddd9f210ee178b9a56554afbf1f14c01e24->leave($__internal_36dc6199611397dd5b5244d2c8f94ddd9f210ee178b9a56554afbf1f14c01e24_prof);

        
        $__internal_b4099aedb99c213314148fa0d485cd59a91df4ab53f54ff39e552eded89dbe5a->leave($__internal_b4099aedb99c213314148fa0d485cd59a91df4ab53f54ff39e552eded89dbe5a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_64f5186ccb4817e9931acd400bbd9d005533abd41b396b607b8a7c758e501e00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64f5186ccb4817e9931acd400bbd9d005533abd41b396b607b8a7c758e501e00->enter($__internal_64f5186ccb4817e9931acd400bbd9d005533abd41b396b607b8a7c758e501e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_80645a65d4dc19bdb27e512e210c91d0fc15a59961ef9b4982e1ac8f732c4aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80645a65d4dc19bdb27e512e210c91d0fc15a59961ef9b4982e1ac8f732c4aa2->enter($__internal_80645a65d4dc19bdb27e512e210c91d0fc15a59961ef9b4982e1ac8f732c4aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_80645a65d4dc19bdb27e512e210c91d0fc15a59961ef9b4982e1ac8f732c4aa2->leave($__internal_80645a65d4dc19bdb27e512e210c91d0fc15a59961ef9b4982e1ac8f732c4aa2_prof);

        
        $__internal_64f5186ccb4817e9931acd400bbd9d005533abd41b396b607b8a7c758e501e00->leave($__internal_64f5186ccb4817e9931acd400bbd9d005533abd41b396b607b8a7c758e501e00_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_499bc2e4619802787c5a3c50f4ab0c851d5bbb774e3a446b028fb4cd410bda9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_499bc2e4619802787c5a3c50f4ab0c851d5bbb774e3a446b028fb4cd410bda9b->enter($__internal_499bc2e4619802787c5a3c50f4ab0c851d5bbb774e3a446b028fb4cd410bda9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf82873be8c8b750ccde37d1ef149fdb5706439647f70ec0feace84817566943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf82873be8c8b750ccde37d1ef149fdb5706439647f70ec0feace84817566943->enter($__internal_cf82873be8c8b750ccde37d1ef149fdb5706439647f70ec0feace84817566943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cf82873be8c8b750ccde37d1ef149fdb5706439647f70ec0feace84817566943->leave($__internal_cf82873be8c8b750ccde37d1ef149fdb5706439647f70ec0feace84817566943_prof);

        
        $__internal_499bc2e4619802787c5a3c50f4ab0c851d5bbb774e3a446b028fb4cd410bda9b->leave($__internal_499bc2e4619802787c5a3c50f4ab0c851d5bbb774e3a446b028fb4cd410bda9b_prof);

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
