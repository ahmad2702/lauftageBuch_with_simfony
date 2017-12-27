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
        $__internal_11596fd9180bf33ba207c2f79a8ba97acc57f716b8ffb6e778b2a9ad6975c1a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11596fd9180bf33ba207c2f79a8ba97acc57f716b8ffb6e778b2a9ad6975c1a7->enter($__internal_11596fd9180bf33ba207c2f79a8ba97acc57f716b8ffb6e778b2a9ad6975c1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_cfdc92a22ffe70046740bbeccf38b3e679f36de6512dcccd30b0f2941b160f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfdc92a22ffe70046740bbeccf38b3e679f36de6512dcccd30b0f2941b160f40->enter($__internal_cfdc92a22ffe70046740bbeccf38b3e679f36de6512dcccd30b0f2941b160f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_11596fd9180bf33ba207c2f79a8ba97acc57f716b8ffb6e778b2a9ad6975c1a7->leave($__internal_11596fd9180bf33ba207c2f79a8ba97acc57f716b8ffb6e778b2a9ad6975c1a7_prof);

        
        $__internal_cfdc92a22ffe70046740bbeccf38b3e679f36de6512dcccd30b0f2941b160f40->leave($__internal_cfdc92a22ffe70046740bbeccf38b3e679f36de6512dcccd30b0f2941b160f40_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c358692662553bedbf3318beecd33b35969ca6080c85d770441cb13d869b91b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c358692662553bedbf3318beecd33b35969ca6080c85d770441cb13d869b91b5->enter($__internal_c358692662553bedbf3318beecd33b35969ca6080c85d770441cb13d869b91b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d24fd70330763e074789dc6bf2521a060ad764f68e69a5998596f371d4ed958b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d24fd70330763e074789dc6bf2521a060ad764f68e69a5998596f371d4ed958b->enter($__internal_d24fd70330763e074789dc6bf2521a060ad764f68e69a5998596f371d4ed958b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d24fd70330763e074789dc6bf2521a060ad764f68e69a5998596f371d4ed958b->leave($__internal_d24fd70330763e074789dc6bf2521a060ad764f68e69a5998596f371d4ed958b_prof);

        
        $__internal_c358692662553bedbf3318beecd33b35969ca6080c85d770441cb13d869b91b5->leave($__internal_c358692662553bedbf3318beecd33b35969ca6080c85d770441cb13d869b91b5_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3ef73099e48d106736a50ca923799ecf9649d0f8932bbdaa18615685d0770bc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ef73099e48d106736a50ca923799ecf9649d0f8932bbdaa18615685d0770bc3->enter($__internal_3ef73099e48d106736a50ca923799ecf9649d0f8932bbdaa18615685d0770bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5a14bcd0f63df3237b08657201dac4b1c4faab34520ae9b35b23e0b2d8681e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a14bcd0f63df3237b08657201dac4b1c4faab34520ae9b35b23e0b2d8681e00->enter($__internal_5a14bcd0f63df3237b08657201dac4b1c4faab34520ae9b35b23e0b2d8681e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5a14bcd0f63df3237b08657201dac4b1c4faab34520ae9b35b23e0b2d8681e00->leave($__internal_5a14bcd0f63df3237b08657201dac4b1c4faab34520ae9b35b23e0b2d8681e00_prof);

        
        $__internal_3ef73099e48d106736a50ca923799ecf9649d0f8932bbdaa18615685d0770bc3->leave($__internal_3ef73099e48d106736a50ca923799ecf9649d0f8932bbdaa18615685d0770bc3_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_af048dd3c8d1d21ded545f8515f8417319ba82f9df8a1ec0160e003b11511690 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af048dd3c8d1d21ded545f8515f8417319ba82f9df8a1ec0160e003b11511690->enter($__internal_af048dd3c8d1d21ded545f8515f8417319ba82f9df8a1ec0160e003b11511690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b40fd691c73bd68a1c70ccecb5993d8e4475fc909b24afb0a00656deb63b5ffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40fd691c73bd68a1c70ccecb5993d8e4475fc909b24afb0a00656deb63b5ffc->enter($__internal_b40fd691c73bd68a1c70ccecb5993d8e4475fc909b24afb0a00656deb63b5ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b40fd691c73bd68a1c70ccecb5993d8e4475fc909b24afb0a00656deb63b5ffc->leave($__internal_b40fd691c73bd68a1c70ccecb5993d8e4475fc909b24afb0a00656deb63b5ffc_prof);

        
        $__internal_af048dd3c8d1d21ded545f8515f8417319ba82f9df8a1ec0160e003b11511690->leave($__internal_af048dd3c8d1d21ded545f8515f8417319ba82f9df8a1ec0160e003b11511690_prof);

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
