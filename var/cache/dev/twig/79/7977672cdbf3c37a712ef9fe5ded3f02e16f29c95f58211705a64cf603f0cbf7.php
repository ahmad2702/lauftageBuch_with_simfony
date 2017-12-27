<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_9ddecaa29831464a8febfbe338c1772e6740aa1440c2bdf2c65ab188f8ab9253 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_083e955d966112f2bd08d4a0a96babe91699fd5a6c4a324992b28a26ec15161a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_083e955d966112f2bd08d4a0a96babe91699fd5a6c4a324992b28a26ec15161a->enter($__internal_083e955d966112f2bd08d4a0a96babe91699fd5a6c4a324992b28a26ec15161a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_675dc6e8c2b42a9c0916322b9a4a958ce17797ef13bda736c7b3e7e1046c67e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_675dc6e8c2b42a9c0916322b9a4a958ce17797ef13bda736c7b3e7e1046c67e4->enter($__internal_675dc6e8c2b42a9c0916322b9a4a958ce17797ef13bda736c7b3e7e1046c67e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_083e955d966112f2bd08d4a0a96babe91699fd5a6c4a324992b28a26ec15161a->leave($__internal_083e955d966112f2bd08d4a0a96babe91699fd5a6c4a324992b28a26ec15161a_prof);

        
        $__internal_675dc6e8c2b42a9c0916322b9a4a958ce17797ef13bda736c7b3e7e1046c67e4->leave($__internal_675dc6e8c2b42a9c0916322b9a4a958ce17797ef13bda736c7b3e7e1046c67e4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f12ab2982e9e675c822043234c6929ebcb09ab49bfdd1043c3a370f4a4b8f66c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f12ab2982e9e675c822043234c6929ebcb09ab49bfdd1043c3a370f4a4b8f66c->enter($__internal_f12ab2982e9e675c822043234c6929ebcb09ab49bfdd1043c3a370f4a4b8f66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_135722f399fa44d97836d2f9006e4078a3c9b4ec74a8002a12deef1eb2bcfed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_135722f399fa44d97836d2f9006e4078a3c9b4ec74a8002a12deef1eb2bcfed1->enter($__internal_135722f399fa44d97836d2f9006e4078a3c9b4ec74a8002a12deef1eb2bcfed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_135722f399fa44d97836d2f9006e4078a3c9b4ec74a8002a12deef1eb2bcfed1->leave($__internal_135722f399fa44d97836d2f9006e4078a3c9b4ec74a8002a12deef1eb2bcfed1_prof);

        
        $__internal_f12ab2982e9e675c822043234c6929ebcb09ab49bfdd1043c3a370f4a4b8f66c->leave($__internal_f12ab2982e9e675c822043234c6929ebcb09ab49bfdd1043c3a370f4a4b8f66c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7ea529916d1f5a301e095d99b0d68a2c1cd061099f016ab568a46c8069e2d65b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea529916d1f5a301e095d99b0d68a2c1cd061099f016ab568a46c8069e2d65b->enter($__internal_7ea529916d1f5a301e095d99b0d68a2c1cd061099f016ab568a46c8069e2d65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ff77b40298418d5930822096a72163dbcbd7093138303f686c7a4a3e7415073a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff77b40298418d5930822096a72163dbcbd7093138303f686c7a4a3e7415073a->enter($__internal_ff77b40298418d5930822096a72163dbcbd7093138303f686c7a4a3e7415073a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ff77b40298418d5930822096a72163dbcbd7093138303f686c7a4a3e7415073a->leave($__internal_ff77b40298418d5930822096a72163dbcbd7093138303f686c7a4a3e7415073a_prof);

        
        $__internal_7ea529916d1f5a301e095d99b0d68a2c1cd061099f016ab568a46c8069e2d65b->leave($__internal_7ea529916d1f5a301e095d99b0d68a2c1cd061099f016ab568a46c8069e2d65b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_73284708d392410ba6fb3d96bde548dc14ce404724d958e449774fbff71d82b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73284708d392410ba6fb3d96bde548dc14ce404724d958e449774fbff71d82b9->enter($__internal_73284708d392410ba6fb3d96bde548dc14ce404724d958e449774fbff71d82b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac2624f75c0e02991216d3050c1f7a4b297003fdc730aacf9c8173d4d93ac57c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac2624f75c0e02991216d3050c1f7a4b297003fdc730aacf9c8173d4d93ac57c->enter($__internal_ac2624f75c0e02991216d3050c1f7a4b297003fdc730aacf9c8173d4d93ac57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ac2624f75c0e02991216d3050c1f7a4b297003fdc730aacf9c8173d4d93ac57c->leave($__internal_ac2624f75c0e02991216d3050c1f7a4b297003fdc730aacf9c8173d4d93ac57c_prof);

        
        $__internal_73284708d392410ba6fb3d96bde548dc14ce404724d958e449774fbff71d82b9->leave($__internal_73284708d392410ba6fb3d96bde548dc14ce404724d958e449774fbff71d82b9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
