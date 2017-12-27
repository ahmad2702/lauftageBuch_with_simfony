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
        $__internal_03bea02c8456608aab78da92c61d811ad4c696a76e687da21d1761d17c326b6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03bea02c8456608aab78da92c61d811ad4c696a76e687da21d1761d17c326b6e->enter($__internal_03bea02c8456608aab78da92c61d811ad4c696a76e687da21d1761d17c326b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0e7479dcc60c7df7ae72a5bc2f9bd08415c6cdffb655e1cde0ce51ae4ad60b2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e7479dcc60c7df7ae72a5bc2f9bd08415c6cdffb655e1cde0ce51ae4ad60b2a->enter($__internal_0e7479dcc60c7df7ae72a5bc2f9bd08415c6cdffb655e1cde0ce51ae4ad60b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03bea02c8456608aab78da92c61d811ad4c696a76e687da21d1761d17c326b6e->leave($__internal_03bea02c8456608aab78da92c61d811ad4c696a76e687da21d1761d17c326b6e_prof);

        
        $__internal_0e7479dcc60c7df7ae72a5bc2f9bd08415c6cdffb655e1cde0ce51ae4ad60b2a->leave($__internal_0e7479dcc60c7df7ae72a5bc2f9bd08415c6cdffb655e1cde0ce51ae4ad60b2a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dcc90cc97319e35328190cd63cf689a1ef6195d15b7037e760d5f86469292002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcc90cc97319e35328190cd63cf689a1ef6195d15b7037e760d5f86469292002->enter($__internal_dcc90cc97319e35328190cd63cf689a1ef6195d15b7037e760d5f86469292002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c5ffd3f02b2977f16586b501dc2a8d29b86668f8c234683aca859956a683181f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ffd3f02b2977f16586b501dc2a8d29b86668f8c234683aca859956a683181f->enter($__internal_c5ffd3f02b2977f16586b501dc2a8d29b86668f8c234683aca859956a683181f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_c5ffd3f02b2977f16586b501dc2a8d29b86668f8c234683aca859956a683181f->leave($__internal_c5ffd3f02b2977f16586b501dc2a8d29b86668f8c234683aca859956a683181f_prof);

        
        $__internal_dcc90cc97319e35328190cd63cf689a1ef6195d15b7037e760d5f86469292002->leave($__internal_dcc90cc97319e35328190cd63cf689a1ef6195d15b7037e760d5f86469292002_prof);

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
