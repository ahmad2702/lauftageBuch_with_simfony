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
        $__internal_1b58ee07d674cacdbbf629abccc4b0f01e66eae77b65e889d78b36aa8dead420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b58ee07d674cacdbbf629abccc4b0f01e66eae77b65e889d78b36aa8dead420->enter($__internal_1b58ee07d674cacdbbf629abccc4b0f01e66eae77b65e889d78b36aa8dead420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a9a6c6a2a3acb7838f45bf9126a47aee49057697834554ed6ad12092857fe63d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9a6c6a2a3acb7838f45bf9126a47aee49057697834554ed6ad12092857fe63d->enter($__internal_a9a6c6a2a3acb7838f45bf9126a47aee49057697834554ed6ad12092857fe63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b58ee07d674cacdbbf629abccc4b0f01e66eae77b65e889d78b36aa8dead420->leave($__internal_1b58ee07d674cacdbbf629abccc4b0f01e66eae77b65e889d78b36aa8dead420_prof);

        
        $__internal_a9a6c6a2a3acb7838f45bf9126a47aee49057697834554ed6ad12092857fe63d->leave($__internal_a9a6c6a2a3acb7838f45bf9126a47aee49057697834554ed6ad12092857fe63d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4ce1fc04d0325772c82fd1d58eb4fcbc31866e1dbf1025bbecc27ab634e1c825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ce1fc04d0325772c82fd1d58eb4fcbc31866e1dbf1025bbecc27ab634e1c825->enter($__internal_4ce1fc04d0325772c82fd1d58eb4fcbc31866e1dbf1025bbecc27ab634e1c825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0656a137f2463e019fc32674daa8a310cd396b2d2b8fd2cedc87c6e83e8e3078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0656a137f2463e019fc32674daa8a310cd396b2d2b8fd2cedc87c6e83e8e3078->enter($__internal_0656a137f2463e019fc32674daa8a310cd396b2d2b8fd2cedc87c6e83e8e3078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_0656a137f2463e019fc32674daa8a310cd396b2d2b8fd2cedc87c6e83e8e3078->leave($__internal_0656a137f2463e019fc32674daa8a310cd396b2d2b8fd2cedc87c6e83e8e3078_prof);

        
        $__internal_4ce1fc04d0325772c82fd1d58eb4fcbc31866e1dbf1025bbecc27ab634e1c825->leave($__internal_4ce1fc04d0325772c82fd1d58eb4fcbc31866e1dbf1025bbecc27ab634e1c825_prof);

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
