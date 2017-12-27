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
        $__internal_b7f23dfc664aec03524af2b5e4163e1568d35e199ef5cc030357016f848a65ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7f23dfc664aec03524af2b5e4163e1568d35e199ef5cc030357016f848a65ee->enter($__internal_b7f23dfc664aec03524af2b5e4163e1568d35e199ef5cc030357016f848a65ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_1c80d8e82fa05df3abc6e6dded4b6124cb51146be2e2f67110595f25422b208c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c80d8e82fa05df3abc6e6dded4b6124cb51146be2e2f67110595f25422b208c->enter($__internal_1c80d8e82fa05df3abc6e6dded4b6124cb51146be2e2f67110595f25422b208c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7f23dfc664aec03524af2b5e4163e1568d35e199ef5cc030357016f848a65ee->leave($__internal_b7f23dfc664aec03524af2b5e4163e1568d35e199ef5cc030357016f848a65ee_prof);

        
        $__internal_1c80d8e82fa05df3abc6e6dded4b6124cb51146be2e2f67110595f25422b208c->leave($__internal_1c80d8e82fa05df3abc6e6dded4b6124cb51146be2e2f67110595f25422b208c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3f08d5852ae9836d642a99c3f13b0b805aac95e5bbb71c13170a2b62bf2eb2f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f08d5852ae9836d642a99c3f13b0b805aac95e5bbb71c13170a2b62bf2eb2f8->enter($__internal_3f08d5852ae9836d642a99c3f13b0b805aac95e5bbb71c13170a2b62bf2eb2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5a4e8606b77b0cd792a96988743322857fb92d77608f1e0a6f4058ef88ab9965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a4e8606b77b0cd792a96988743322857fb92d77608f1e0a6f4058ef88ab9965->enter($__internal_5a4e8606b77b0cd792a96988743322857fb92d77608f1e0a6f4058ef88ab9965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_5a4e8606b77b0cd792a96988743322857fb92d77608f1e0a6f4058ef88ab9965->leave($__internal_5a4e8606b77b0cd792a96988743322857fb92d77608f1e0a6f4058ef88ab9965_prof);

        
        $__internal_3f08d5852ae9836d642a99c3f13b0b805aac95e5bbb71c13170a2b62bf2eb2f8->leave($__internal_3f08d5852ae9836d642a99c3f13b0b805aac95e5bbb71c13170a2b62bf2eb2f8_prof);

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
