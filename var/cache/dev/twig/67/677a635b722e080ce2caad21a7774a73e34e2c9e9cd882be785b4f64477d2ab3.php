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
        $__internal_b417c90449cb19da1c6ca28756e01e506621175f8c6d55f4e65514787185100d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b417c90449cb19da1c6ca28756e01e506621175f8c6d55f4e65514787185100d->enter($__internal_b417c90449cb19da1c6ca28756e01e506621175f8c6d55f4e65514787185100d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_536b92008757001a47f0dd2d70c05377e279e54fa7ee1fe7a5e0031865355b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_536b92008757001a47f0dd2d70c05377e279e54fa7ee1fe7a5e0031865355b79->enter($__internal_536b92008757001a47f0dd2d70c05377e279e54fa7ee1fe7a5e0031865355b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b417c90449cb19da1c6ca28756e01e506621175f8c6d55f4e65514787185100d->leave($__internal_b417c90449cb19da1c6ca28756e01e506621175f8c6d55f4e65514787185100d_prof);

        
        $__internal_536b92008757001a47f0dd2d70c05377e279e54fa7ee1fe7a5e0031865355b79->leave($__internal_536b92008757001a47f0dd2d70c05377e279e54fa7ee1fe7a5e0031865355b79_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_70d77ccbde2d3ac7f6b039b049b04b73c0cc969c020c86c976266b6415ea4b6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70d77ccbde2d3ac7f6b039b049b04b73c0cc969c020c86c976266b6415ea4b6b->enter($__internal_70d77ccbde2d3ac7f6b039b049b04b73c0cc969c020c86c976266b6415ea4b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c9f367c340acf230bbb77009f506cbb05a370be0a2907f81cbb2ba94dc36df7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f367c340acf230bbb77009f506cbb05a370be0a2907f81cbb2ba94dc36df7b->enter($__internal_c9f367c340acf230bbb77009f506cbb05a370be0a2907f81cbb2ba94dc36df7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_c9f367c340acf230bbb77009f506cbb05a370be0a2907f81cbb2ba94dc36df7b->leave($__internal_c9f367c340acf230bbb77009f506cbb05a370be0a2907f81cbb2ba94dc36df7b_prof);

        
        $__internal_70d77ccbde2d3ac7f6b039b049b04b73c0cc969c020c86c976266b6415ea4b6b->leave($__internal_70d77ccbde2d3ac7f6b039b049b04b73c0cc969c020c86c976266b6415ea4b6b_prof);

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
