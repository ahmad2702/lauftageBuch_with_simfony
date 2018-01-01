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
        $__internal_caa8c3af9c6916787519b3bf43665a06ddf2c86cb025d01dd895c11465424a7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caa8c3af9c6916787519b3bf43665a06ddf2c86cb025d01dd895c11465424a7b->enter($__internal_caa8c3af9c6916787519b3bf43665a06ddf2c86cb025d01dd895c11465424a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b6134bca51a6fae8684181d0090e77a9720cdad73e748a5abb8433840378951b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6134bca51a6fae8684181d0090e77a9720cdad73e748a5abb8433840378951b->enter($__internal_b6134bca51a6fae8684181d0090e77a9720cdad73e748a5abb8433840378951b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_caa8c3af9c6916787519b3bf43665a06ddf2c86cb025d01dd895c11465424a7b->leave($__internal_caa8c3af9c6916787519b3bf43665a06ddf2c86cb025d01dd895c11465424a7b_prof);

        
        $__internal_b6134bca51a6fae8684181d0090e77a9720cdad73e748a5abb8433840378951b->leave($__internal_b6134bca51a6fae8684181d0090e77a9720cdad73e748a5abb8433840378951b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2e46e2e711a1e4e4802f38d5560bf543ec80f936a63098b27a5e0e58a5ab9cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2e46e2e711a1e4e4802f38d5560bf543ec80f936a63098b27a5e0e58a5ab9cd->enter($__internal_f2e46e2e711a1e4e4802f38d5560bf543ec80f936a63098b27a5e0e58a5ab9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ae8c7d0e5eb9b1bdec4fdd6ade62c46519538dce93396d8992f94fb546db92a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae8c7d0e5eb9b1bdec4fdd6ade62c46519538dce93396d8992f94fb546db92a8->enter($__internal_ae8c7d0e5eb9b1bdec4fdd6ade62c46519538dce93396d8992f94fb546db92a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ae8c7d0e5eb9b1bdec4fdd6ade62c46519538dce93396d8992f94fb546db92a8->leave($__internal_ae8c7d0e5eb9b1bdec4fdd6ade62c46519538dce93396d8992f94fb546db92a8_prof);

        
        $__internal_f2e46e2e711a1e4e4802f38d5560bf543ec80f936a63098b27a5e0e58a5ab9cd->leave($__internal_f2e46e2e711a1e4e4802f38d5560bf543ec80f936a63098b27a5e0e58a5ab9cd_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_313c2bb24ed7e271a616f9455a1d0e3cf3d79b7bc7f00a69e18e0841ab7da438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_313c2bb24ed7e271a616f9455a1d0e3cf3d79b7bc7f00a69e18e0841ab7da438->enter($__internal_313c2bb24ed7e271a616f9455a1d0e3cf3d79b7bc7f00a69e18e0841ab7da438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_283ece1ce5ab412d1e268d176865b9b6da0e205cab6de7868b8f0024cbf04ac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_283ece1ce5ab412d1e268d176865b9b6da0e205cab6de7868b8f0024cbf04ac9->enter($__internal_283ece1ce5ab412d1e268d176865b9b6da0e205cab6de7868b8f0024cbf04ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_283ece1ce5ab412d1e268d176865b9b6da0e205cab6de7868b8f0024cbf04ac9->leave($__internal_283ece1ce5ab412d1e268d176865b9b6da0e205cab6de7868b8f0024cbf04ac9_prof);

        
        $__internal_313c2bb24ed7e271a616f9455a1d0e3cf3d79b7bc7f00a69e18e0841ab7da438->leave($__internal_313c2bb24ed7e271a616f9455a1d0e3cf3d79b7bc7f00a69e18e0841ab7da438_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_447a7bd92dcb804abb3e5b7b3c9f4cdff76530ab8f4cea6c1109caf02d0593c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_447a7bd92dcb804abb3e5b7b3c9f4cdff76530ab8f4cea6c1109caf02d0593c6->enter($__internal_447a7bd92dcb804abb3e5b7b3c9f4cdff76530ab8f4cea6c1109caf02d0593c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a9e3c7c8e0c05b8c4c26577c6e9422014be97892c73c7289367aa0f1c55c1c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9e3c7c8e0c05b8c4c26577c6e9422014be97892c73c7289367aa0f1c55c1c21->enter($__internal_a9e3c7c8e0c05b8c4c26577c6e9422014be97892c73c7289367aa0f1c55c1c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a9e3c7c8e0c05b8c4c26577c6e9422014be97892c73c7289367aa0f1c55c1c21->leave($__internal_a9e3c7c8e0c05b8c4c26577c6e9422014be97892c73c7289367aa0f1c55c1c21_prof);

        
        $__internal_447a7bd92dcb804abb3e5b7b3c9f4cdff76530ab8f4cea6c1109caf02d0593c6->leave($__internal_447a7bd92dcb804abb3e5b7b3c9f4cdff76530ab8f4cea6c1109caf02d0593c6_prof);

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
