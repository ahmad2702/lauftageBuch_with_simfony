<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_0a1994abaea4c5ef21dfb301d07edba09b17c743f6f1b8801487b9b905d08ece extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f19e69862f30281c71548758f38fc367f3bdae7ac332add750654dd757a4e583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f19e69862f30281c71548758f38fc367f3bdae7ac332add750654dd757a4e583->enter($__internal_f19e69862f30281c71548758f38fc367f3bdae7ac332add750654dd757a4e583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_44185a3bad7c844a5470071620e92856630ea5ed8436cf3a20dcb4be89010ec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44185a3bad7c844a5470071620e92856630ea5ed8436cf3a20dcb4be89010ec1->enter($__internal_44185a3bad7c844a5470071620e92856630ea5ed8436cf3a20dcb4be89010ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f19e69862f30281c71548758f38fc367f3bdae7ac332add750654dd757a4e583->leave($__internal_f19e69862f30281c71548758f38fc367f3bdae7ac332add750654dd757a4e583_prof);

        
        $__internal_44185a3bad7c844a5470071620e92856630ea5ed8436cf3a20dcb4be89010ec1->leave($__internal_44185a3bad7c844a5470071620e92856630ea5ed8436cf3a20dcb4be89010ec1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e33c4c8ee8e5ad5eb514e59faa9bc7171d13c25abd9a5c505051a3139165f849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e33c4c8ee8e5ad5eb514e59faa9bc7171d13c25abd9a5c505051a3139165f849->enter($__internal_e33c4c8ee8e5ad5eb514e59faa9bc7171d13c25abd9a5c505051a3139165f849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9dd6a6fa0a0e84ab830f61a63aeee4104a66eda82a7dcef99801d470179ec453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dd6a6fa0a0e84ab830f61a63aeee4104a66eda82a7dcef99801d470179ec453->enter($__internal_9dd6a6fa0a0e84ab830f61a63aeee4104a66eda82a7dcef99801d470179ec453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_9dd6a6fa0a0e84ab830f61a63aeee4104a66eda82a7dcef99801d470179ec453->leave($__internal_9dd6a6fa0a0e84ab830f61a63aeee4104a66eda82a7dcef99801d470179ec453_prof);

        
        $__internal_e33c4c8ee8e5ad5eb514e59faa9bc7171d13c25abd9a5c505051a3139165f849->leave($__internal_e33c4c8ee8e5ad5eb514e59faa9bc7171d13c25abd9a5c505051a3139165f849_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
