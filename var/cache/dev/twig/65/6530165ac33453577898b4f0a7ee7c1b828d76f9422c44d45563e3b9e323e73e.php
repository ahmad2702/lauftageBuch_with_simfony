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
        $__internal_7a9cd6c6804e129b31dba3c467cb77cd25eefe51a1fe6e7d26bf5bb3b99ca556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a9cd6c6804e129b31dba3c467cb77cd25eefe51a1fe6e7d26bf5bb3b99ca556->enter($__internal_7a9cd6c6804e129b31dba3c467cb77cd25eefe51a1fe6e7d26bf5bb3b99ca556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_548d98c74106c0548458b7de74d8c000dee2cac4ce1966ebb8123a024e6f27f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548d98c74106c0548458b7de74d8c000dee2cac4ce1966ebb8123a024e6f27f1->enter($__internal_548d98c74106c0548458b7de74d8c000dee2cac4ce1966ebb8123a024e6f27f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a9cd6c6804e129b31dba3c467cb77cd25eefe51a1fe6e7d26bf5bb3b99ca556->leave($__internal_7a9cd6c6804e129b31dba3c467cb77cd25eefe51a1fe6e7d26bf5bb3b99ca556_prof);

        
        $__internal_548d98c74106c0548458b7de74d8c000dee2cac4ce1966ebb8123a024e6f27f1->leave($__internal_548d98c74106c0548458b7de74d8c000dee2cac4ce1966ebb8123a024e6f27f1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1190368504f8944dbd1d266362ffb06e15f5c7e4373627f48f0c9eba2cefe59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1190368504f8944dbd1d266362ffb06e15f5c7e4373627f48f0c9eba2cefe59->enter($__internal_c1190368504f8944dbd1d266362ffb06e15f5c7e4373627f48f0c9eba2cefe59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1b3473dda5ebb7b5dfc09c8c1cc66dca4f40aec63c5ab7a19b98a32c0d1b7051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b3473dda5ebb7b5dfc09c8c1cc66dca4f40aec63c5ab7a19b98a32c0d1b7051->enter($__internal_1b3473dda5ebb7b5dfc09c8c1cc66dca4f40aec63c5ab7a19b98a32c0d1b7051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1b3473dda5ebb7b5dfc09c8c1cc66dca4f40aec63c5ab7a19b98a32c0d1b7051->leave($__internal_1b3473dda5ebb7b5dfc09c8c1cc66dca4f40aec63c5ab7a19b98a32c0d1b7051_prof);

        
        $__internal_c1190368504f8944dbd1d266362ffb06e15f5c7e4373627f48f0c9eba2cefe59->leave($__internal_c1190368504f8944dbd1d266362ffb06e15f5c7e4373627f48f0c9eba2cefe59_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bc49c5d6a398b42e06b16f61cf4c8a8b34887a223e1f44a24bead40c9a694f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bc49c5d6a398b42e06b16f61cf4c8a8b34887a223e1f44a24bead40c9a694f2->enter($__internal_9bc49c5d6a398b42e06b16f61cf4c8a8b34887a223e1f44a24bead40c9a694f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6426c60643abcca1efd129a38a25d5ad342aba35733f7a410b758360f8336f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6426c60643abcca1efd129a38a25d5ad342aba35733f7a410b758360f8336f11->enter($__internal_6426c60643abcca1efd129a38a25d5ad342aba35733f7a410b758360f8336f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6426c60643abcca1efd129a38a25d5ad342aba35733f7a410b758360f8336f11->leave($__internal_6426c60643abcca1efd129a38a25d5ad342aba35733f7a410b758360f8336f11_prof);

        
        $__internal_9bc49c5d6a398b42e06b16f61cf4c8a8b34887a223e1f44a24bead40c9a694f2->leave($__internal_9bc49c5d6a398b42e06b16f61cf4c8a8b34887a223e1f44a24bead40c9a694f2_prof);

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
