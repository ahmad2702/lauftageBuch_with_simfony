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
        $__internal_2dd5b14d5fe3891f42bc5d7907459798df3c09190b8a1e4bcf1fc2267d279aac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dd5b14d5fe3891f42bc5d7907459798df3c09190b8a1e4bcf1fc2267d279aac->enter($__internal_2dd5b14d5fe3891f42bc5d7907459798df3c09190b8a1e4bcf1fc2267d279aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_90afe0be1e93b9cff621167b97506d12d9d8d8ce3fa30d5dd6d84af8476692e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90afe0be1e93b9cff621167b97506d12d9d8d8ce3fa30d5dd6d84af8476692e0->enter($__internal_90afe0be1e93b9cff621167b97506d12d9d8d8ce3fa30d5dd6d84af8476692e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dd5b14d5fe3891f42bc5d7907459798df3c09190b8a1e4bcf1fc2267d279aac->leave($__internal_2dd5b14d5fe3891f42bc5d7907459798df3c09190b8a1e4bcf1fc2267d279aac_prof);

        
        $__internal_90afe0be1e93b9cff621167b97506d12d9d8d8ce3fa30d5dd6d84af8476692e0->leave($__internal_90afe0be1e93b9cff621167b97506d12d9d8d8ce3fa30d5dd6d84af8476692e0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ff642957aee6df1ca41215a11c8cdd2267b7ce8aeb0b70206e198f5d7b7d6942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff642957aee6df1ca41215a11c8cdd2267b7ce8aeb0b70206e198f5d7b7d6942->enter($__internal_ff642957aee6df1ca41215a11c8cdd2267b7ce8aeb0b70206e198f5d7b7d6942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f27915d47a65ae7c94c50be34734428e2e56165c99c46db4972fd640500adb03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f27915d47a65ae7c94c50be34734428e2e56165c99c46db4972fd640500adb03->enter($__internal_f27915d47a65ae7c94c50be34734428e2e56165c99c46db4972fd640500adb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_f27915d47a65ae7c94c50be34734428e2e56165c99c46db4972fd640500adb03->leave($__internal_f27915d47a65ae7c94c50be34734428e2e56165c99c46db4972fd640500adb03_prof);

        
        $__internal_ff642957aee6df1ca41215a11c8cdd2267b7ce8aeb0b70206e198f5d7b7d6942->leave($__internal_ff642957aee6df1ca41215a11c8cdd2267b7ce8aeb0b70206e198f5d7b7d6942_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
