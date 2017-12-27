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
        $__internal_7d38eb4e599a2250e5c1fd61615a399636919199c72fe4c86a736150afb0aa79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d38eb4e599a2250e5c1fd61615a399636919199c72fe4c86a736150afb0aa79->enter($__internal_7d38eb4e599a2250e5c1fd61615a399636919199c72fe4c86a736150afb0aa79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_4fcef245c3445b8f02b59da31b94f2118913718c6594f81f4eb1193aaa741822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fcef245c3445b8f02b59da31b94f2118913718c6594f81f4eb1193aaa741822->enter($__internal_4fcef245c3445b8f02b59da31b94f2118913718c6594f81f4eb1193aaa741822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d38eb4e599a2250e5c1fd61615a399636919199c72fe4c86a736150afb0aa79->leave($__internal_7d38eb4e599a2250e5c1fd61615a399636919199c72fe4c86a736150afb0aa79_prof);

        
        $__internal_4fcef245c3445b8f02b59da31b94f2118913718c6594f81f4eb1193aaa741822->leave($__internal_4fcef245c3445b8f02b59da31b94f2118913718c6594f81f4eb1193aaa741822_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3cec797e40351e6f54c0ae86ab523e813a1625eb62ad3f92892a56b8b841f1c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cec797e40351e6f54c0ae86ab523e813a1625eb62ad3f92892a56b8b841f1c4->enter($__internal_3cec797e40351e6f54c0ae86ab523e813a1625eb62ad3f92892a56b8b841f1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bd5a11f40a87a5909b673a3440446da78ce15c42f65d48ba4cd17e5f9995fbf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd5a11f40a87a5909b673a3440446da78ce15c42f65d48ba4cd17e5f9995fbf9->enter($__internal_bd5a11f40a87a5909b673a3440446da78ce15c42f65d48ba4cd17e5f9995fbf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bd5a11f40a87a5909b673a3440446da78ce15c42f65d48ba4cd17e5f9995fbf9->leave($__internal_bd5a11f40a87a5909b673a3440446da78ce15c42f65d48ba4cd17e5f9995fbf9_prof);

        
        $__internal_3cec797e40351e6f54c0ae86ab523e813a1625eb62ad3f92892a56b8b841f1c4->leave($__internal_3cec797e40351e6f54c0ae86ab523e813a1625eb62ad3f92892a56b8b841f1c4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c30a7599c713221ac36a6df11102de01d10805fe4573d634ef3647c044db8e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c30a7599c713221ac36a6df11102de01d10805fe4573d634ef3647c044db8e7->enter($__internal_7c30a7599c713221ac36a6df11102de01d10805fe4573d634ef3647c044db8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08d325fc727da5e920722e1ede3209ab775f46315423e440a28e687ad9e3b1de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08d325fc727da5e920722e1ede3209ab775f46315423e440a28e687ad9e3b1de->enter($__internal_08d325fc727da5e920722e1ede3209ab775f46315423e440a28e687ad9e3b1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_08d325fc727da5e920722e1ede3209ab775f46315423e440a28e687ad9e3b1de->leave($__internal_08d325fc727da5e920722e1ede3209ab775f46315423e440a28e687ad9e3b1de_prof);

        
        $__internal_7c30a7599c713221ac36a6df11102de01d10805fe4573d634ef3647c044db8e7->leave($__internal_7c30a7599c713221ac36a6df11102de01d10805fe4573d634ef3647c044db8e7_prof);

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
