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
        $__internal_948c11f87005b30cb532939e2089740d8d8c6fe48a335948b344a72b3798ac73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_948c11f87005b30cb532939e2089740d8d8c6fe48a335948b344a72b3798ac73->enter($__internal_948c11f87005b30cb532939e2089740d8d8c6fe48a335948b344a72b3798ac73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_20e33779f853dd4af75f02c91a3836b3af0eccac34077534c8cd345828abaa4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e33779f853dd4af75f02c91a3836b3af0eccac34077534c8cd345828abaa4b->enter($__internal_20e33779f853dd4af75f02c91a3836b3af0eccac34077534c8cd345828abaa4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_948c11f87005b30cb532939e2089740d8d8c6fe48a335948b344a72b3798ac73->leave($__internal_948c11f87005b30cb532939e2089740d8d8c6fe48a335948b344a72b3798ac73_prof);

        
        $__internal_20e33779f853dd4af75f02c91a3836b3af0eccac34077534c8cd345828abaa4b->leave($__internal_20e33779f853dd4af75f02c91a3836b3af0eccac34077534c8cd345828abaa4b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbe3a71ccc26d217381c676e152f5addb1aa69b970682d1c519d155790a43024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbe3a71ccc26d217381c676e152f5addb1aa69b970682d1c519d155790a43024->enter($__internal_cbe3a71ccc26d217381c676e152f5addb1aa69b970682d1c519d155790a43024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4426a9c23b6a357ba9fddd9b8d410927b94ad84720f0d460b1d7d036cee88904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4426a9c23b6a357ba9fddd9b8d410927b94ad84720f0d460b1d7d036cee88904->enter($__internal_4426a9c23b6a357ba9fddd9b8d410927b94ad84720f0d460b1d7d036cee88904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4426a9c23b6a357ba9fddd9b8d410927b94ad84720f0d460b1d7d036cee88904->leave($__internal_4426a9c23b6a357ba9fddd9b8d410927b94ad84720f0d460b1d7d036cee88904_prof);

        
        $__internal_cbe3a71ccc26d217381c676e152f5addb1aa69b970682d1c519d155790a43024->leave($__internal_cbe3a71ccc26d217381c676e152f5addb1aa69b970682d1c519d155790a43024_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e45c374190dbb22ab1703e1e30e2bb774c8295715e066281a3525fabc2b26f28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e45c374190dbb22ab1703e1e30e2bb774c8295715e066281a3525fabc2b26f28->enter($__internal_e45c374190dbb22ab1703e1e30e2bb774c8295715e066281a3525fabc2b26f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8c5cb81680cb9f82b9a5ed492f4c82138dcd1fd89e3ca8296852f2f8ba82aec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c5cb81680cb9f82b9a5ed492f4c82138dcd1fd89e3ca8296852f2f8ba82aec3->enter($__internal_8c5cb81680cb9f82b9a5ed492f4c82138dcd1fd89e3ca8296852f2f8ba82aec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8c5cb81680cb9f82b9a5ed492f4c82138dcd1fd89e3ca8296852f2f8ba82aec3->leave($__internal_8c5cb81680cb9f82b9a5ed492f4c82138dcd1fd89e3ca8296852f2f8ba82aec3_prof);

        
        $__internal_e45c374190dbb22ab1703e1e30e2bb774c8295715e066281a3525fabc2b26f28->leave($__internal_e45c374190dbb22ab1703e1e30e2bb774c8295715e066281a3525fabc2b26f28_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b07283628ff8d5753a0a592b1535d92591cad8d8543e2a88eaa59e83a395330d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b07283628ff8d5753a0a592b1535d92591cad8d8543e2a88eaa59e83a395330d->enter($__internal_b07283628ff8d5753a0a592b1535d92591cad8d8543e2a88eaa59e83a395330d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d80d931e9994d9b60f4774bb6353c382c16a2542d800437921bf632fac18d711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d80d931e9994d9b60f4774bb6353c382c16a2542d800437921bf632fac18d711->enter($__internal_d80d931e9994d9b60f4774bb6353c382c16a2542d800437921bf632fac18d711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d80d931e9994d9b60f4774bb6353c382c16a2542d800437921bf632fac18d711->leave($__internal_d80d931e9994d9b60f4774bb6353c382c16a2542d800437921bf632fac18d711_prof);

        
        $__internal_b07283628ff8d5753a0a592b1535d92591cad8d8543e2a88eaa59e83a395330d->leave($__internal_b07283628ff8d5753a0a592b1535d92591cad8d8543e2a88eaa59e83a395330d_prof);

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
", "@Twig/layout.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
