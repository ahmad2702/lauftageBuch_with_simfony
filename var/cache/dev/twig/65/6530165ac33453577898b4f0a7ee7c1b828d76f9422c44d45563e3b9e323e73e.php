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
        $__internal_523ed2a203d79a250c2c44b7f506eea5e4611cb534fd86e3fcc65f902fe50c02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_523ed2a203d79a250c2c44b7f506eea5e4611cb534fd86e3fcc65f902fe50c02->enter($__internal_523ed2a203d79a250c2c44b7f506eea5e4611cb534fd86e3fcc65f902fe50c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_bb3534de1a08e415db6bc276f1d18a5c264ef268f9a56b5449e3d9353f44919c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3534de1a08e415db6bc276f1d18a5c264ef268f9a56b5449e3d9353f44919c->enter($__internal_bb3534de1a08e415db6bc276f1d18a5c264ef268f9a56b5449e3d9353f44919c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_523ed2a203d79a250c2c44b7f506eea5e4611cb534fd86e3fcc65f902fe50c02->leave($__internal_523ed2a203d79a250c2c44b7f506eea5e4611cb534fd86e3fcc65f902fe50c02_prof);

        
        $__internal_bb3534de1a08e415db6bc276f1d18a5c264ef268f9a56b5449e3d9353f44919c->leave($__internal_bb3534de1a08e415db6bc276f1d18a5c264ef268f9a56b5449e3d9353f44919c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4fb59c39868a55d71b03dddfd55b20f4a0833f05494c2db409717ebbd22d704d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fb59c39868a55d71b03dddfd55b20f4a0833f05494c2db409717ebbd22d704d->enter($__internal_4fb59c39868a55d71b03dddfd55b20f4a0833f05494c2db409717ebbd22d704d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fa7ad2f7f77444c58889cbf05c401a9598310679c1e1ae9396168278198fdcd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7ad2f7f77444c58889cbf05c401a9598310679c1e1ae9396168278198fdcd2->enter($__internal_fa7ad2f7f77444c58889cbf05c401a9598310679c1e1ae9396168278198fdcd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fa7ad2f7f77444c58889cbf05c401a9598310679c1e1ae9396168278198fdcd2->leave($__internal_fa7ad2f7f77444c58889cbf05c401a9598310679c1e1ae9396168278198fdcd2_prof);

        
        $__internal_4fb59c39868a55d71b03dddfd55b20f4a0833f05494c2db409717ebbd22d704d->leave($__internal_4fb59c39868a55d71b03dddfd55b20f4a0833f05494c2db409717ebbd22d704d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf0d7e7646f95d8787650235b1f2f4acec49754bc23b48bdf11012765aae34f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf0d7e7646f95d8787650235b1f2f4acec49754bc23b48bdf11012765aae34f8->enter($__internal_cf0d7e7646f95d8787650235b1f2f4acec49754bc23b48bdf11012765aae34f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3676f964d67f7ee36647e480d73afbe2ff6d65e0727187a182fe9a8d50884b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3676f964d67f7ee36647e480d73afbe2ff6d65e0727187a182fe9a8d50884b67->enter($__internal_3676f964d67f7ee36647e480d73afbe2ff6d65e0727187a182fe9a8d50884b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3676f964d67f7ee36647e480d73afbe2ff6d65e0727187a182fe9a8d50884b67->leave($__internal_3676f964d67f7ee36647e480d73afbe2ff6d65e0727187a182fe9a8d50884b67_prof);

        
        $__internal_cf0d7e7646f95d8787650235b1f2f4acec49754bc23b48bdf11012765aae34f8->leave($__internal_cf0d7e7646f95d8787650235b1f2f4acec49754bc23b48bdf11012765aae34f8_prof);

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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
