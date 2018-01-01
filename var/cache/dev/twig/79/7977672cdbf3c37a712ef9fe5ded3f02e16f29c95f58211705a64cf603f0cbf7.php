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
        $__internal_829f85e1df6fe19a48b12f4c99fa94001ec3366e91f2544de49f4cc0a702bfb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_829f85e1df6fe19a48b12f4c99fa94001ec3366e91f2544de49f4cc0a702bfb6->enter($__internal_829f85e1df6fe19a48b12f4c99fa94001ec3366e91f2544de49f4cc0a702bfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d437bf1b46608b608282f880e86ddd6e787b9731a64e26e84f13aec3fbd61773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d437bf1b46608b608282f880e86ddd6e787b9731a64e26e84f13aec3fbd61773->enter($__internal_d437bf1b46608b608282f880e86ddd6e787b9731a64e26e84f13aec3fbd61773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_829f85e1df6fe19a48b12f4c99fa94001ec3366e91f2544de49f4cc0a702bfb6->leave($__internal_829f85e1df6fe19a48b12f4c99fa94001ec3366e91f2544de49f4cc0a702bfb6_prof);

        
        $__internal_d437bf1b46608b608282f880e86ddd6e787b9731a64e26e84f13aec3fbd61773->leave($__internal_d437bf1b46608b608282f880e86ddd6e787b9731a64e26e84f13aec3fbd61773_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_72c90cf5976bd3ac63ea05a1fd5b8cc4145b7c20b0c25656d5a6048fb3b70fc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72c90cf5976bd3ac63ea05a1fd5b8cc4145b7c20b0c25656d5a6048fb3b70fc7->enter($__internal_72c90cf5976bd3ac63ea05a1fd5b8cc4145b7c20b0c25656d5a6048fb3b70fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2eefab87b8f37c78bec9151ec886f0c4337ed499c8f4d3216bd6c0f364bb066b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eefab87b8f37c78bec9151ec886f0c4337ed499c8f4d3216bd6c0f364bb066b->enter($__internal_2eefab87b8f37c78bec9151ec886f0c4337ed499c8f4d3216bd6c0f364bb066b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2eefab87b8f37c78bec9151ec886f0c4337ed499c8f4d3216bd6c0f364bb066b->leave($__internal_2eefab87b8f37c78bec9151ec886f0c4337ed499c8f4d3216bd6c0f364bb066b_prof);

        
        $__internal_72c90cf5976bd3ac63ea05a1fd5b8cc4145b7c20b0c25656d5a6048fb3b70fc7->leave($__internal_72c90cf5976bd3ac63ea05a1fd5b8cc4145b7c20b0c25656d5a6048fb3b70fc7_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_4172c8095192c2a33569301524fd29b00e660be73f38a4c0d2abff58a55e752b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4172c8095192c2a33569301524fd29b00e660be73f38a4c0d2abff58a55e752b->enter($__internal_4172c8095192c2a33569301524fd29b00e660be73f38a4c0d2abff58a55e752b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b7229bbd33e5f271400cdb2dea022974f09b288c7f4d1cc83f971c0f2dc0a267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7229bbd33e5f271400cdb2dea022974f09b288c7f4d1cc83f971c0f2dc0a267->enter($__internal_b7229bbd33e5f271400cdb2dea022974f09b288c7f4d1cc83f971c0f2dc0a267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b7229bbd33e5f271400cdb2dea022974f09b288c7f4d1cc83f971c0f2dc0a267->leave($__internal_b7229bbd33e5f271400cdb2dea022974f09b288c7f4d1cc83f971c0f2dc0a267_prof);

        
        $__internal_4172c8095192c2a33569301524fd29b00e660be73f38a4c0d2abff58a55e752b->leave($__internal_4172c8095192c2a33569301524fd29b00e660be73f38a4c0d2abff58a55e752b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b499c19f00394c1b43ad070c5edd5ab692cdf6f8196f612f980e61810861dc2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b499c19f00394c1b43ad070c5edd5ab692cdf6f8196f612f980e61810861dc2d->enter($__internal_b499c19f00394c1b43ad070c5edd5ab692cdf6f8196f612f980e61810861dc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2980d7dd2026b8b5c261752ef280a20b5a0039404df9848fc9e23d5cfda637ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2980d7dd2026b8b5c261752ef280a20b5a0039404df9848fc9e23d5cfda637ad->enter($__internal_2980d7dd2026b8b5c261752ef280a20b5a0039404df9848fc9e23d5cfda637ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2980d7dd2026b8b5c261752ef280a20b5a0039404df9848fc9e23d5cfda637ad->leave($__internal_2980d7dd2026b8b5c261752ef280a20b5a0039404df9848fc9e23d5cfda637ad_prof);

        
        $__internal_b499c19f00394c1b43ad070c5edd5ab692cdf6f8196f612f980e61810861dc2d->leave($__internal_b499c19f00394c1b43ad070c5edd5ab692cdf6f8196f612f980e61810861dc2d_prof);

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
