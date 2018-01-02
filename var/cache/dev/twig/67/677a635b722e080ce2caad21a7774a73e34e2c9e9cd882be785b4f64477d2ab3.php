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
        $__internal_134cf9616800c7e441f80b3817b6d31068f3b93a7435dfe765e55753744e6cad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_134cf9616800c7e441f80b3817b6d31068f3b93a7435dfe765e55753744e6cad->enter($__internal_134cf9616800c7e441f80b3817b6d31068f3b93a7435dfe765e55753744e6cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_2833feafbaa867da320d9b63ec02f1bed46dab0aa795222c5beaae19199a3817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2833feafbaa867da320d9b63ec02f1bed46dab0aa795222c5beaae19199a3817->enter($__internal_2833feafbaa867da320d9b63ec02f1bed46dab0aa795222c5beaae19199a3817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_134cf9616800c7e441f80b3817b6d31068f3b93a7435dfe765e55753744e6cad->leave($__internal_134cf9616800c7e441f80b3817b6d31068f3b93a7435dfe765e55753744e6cad_prof);

        
        $__internal_2833feafbaa867da320d9b63ec02f1bed46dab0aa795222c5beaae19199a3817->leave($__internal_2833feafbaa867da320d9b63ec02f1bed46dab0aa795222c5beaae19199a3817_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fb3bb0070526f3d8f1c6c8ac5a6b3d0b8a06653a572a1b1a5804034e9cc1e34f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb3bb0070526f3d8f1c6c8ac5a6b3d0b8a06653a572a1b1a5804034e9cc1e34f->enter($__internal_fb3bb0070526f3d8f1c6c8ac5a6b3d0b8a06653a572a1b1a5804034e9cc1e34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f3159923b5a7b11e1ea2797d2b86d0b247a0d656c8c7740750bdb1e171197ab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3159923b5a7b11e1ea2797d2b86d0b247a0d656c8c7740750bdb1e171197ab6->enter($__internal_f3159923b5a7b11e1ea2797d2b86d0b247a0d656c8c7740750bdb1e171197ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_f3159923b5a7b11e1ea2797d2b86d0b247a0d656c8c7740750bdb1e171197ab6->leave($__internal_f3159923b5a7b11e1ea2797d2b86d0b247a0d656c8c7740750bdb1e171197ab6_prof);

        
        $__internal_fb3bb0070526f3d8f1c6c8ac5a6b3d0b8a06653a572a1b1a5804034e9cc1e34f->leave($__internal_fb3bb0070526f3d8f1c6c8ac5a6b3d0b8a06653a572a1b1a5804034e9cc1e34f_prof);

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
