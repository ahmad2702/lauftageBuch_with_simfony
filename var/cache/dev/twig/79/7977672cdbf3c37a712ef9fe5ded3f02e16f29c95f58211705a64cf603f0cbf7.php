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
        $__internal_89284396a769618d3018a04210fe0e413b9c24639cbf8510b2052e05df409992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89284396a769618d3018a04210fe0e413b9c24639cbf8510b2052e05df409992->enter($__internal_89284396a769618d3018a04210fe0e413b9c24639cbf8510b2052e05df409992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_44387093c25419a6d5e442c449425c90b68537cd595e9c94efd78c8c0dc97cf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44387093c25419a6d5e442c449425c90b68537cd595e9c94efd78c8c0dc97cf5->enter($__internal_44387093c25419a6d5e442c449425c90b68537cd595e9c94efd78c8c0dc97cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_89284396a769618d3018a04210fe0e413b9c24639cbf8510b2052e05df409992->leave($__internal_89284396a769618d3018a04210fe0e413b9c24639cbf8510b2052e05df409992_prof);

        
        $__internal_44387093c25419a6d5e442c449425c90b68537cd595e9c94efd78c8c0dc97cf5->leave($__internal_44387093c25419a6d5e442c449425c90b68537cd595e9c94efd78c8c0dc97cf5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f031ada20e704f7c38b6aab357cd986f48745815ae4ea6eacdd424fb67a75995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f031ada20e704f7c38b6aab357cd986f48745815ae4ea6eacdd424fb67a75995->enter($__internal_f031ada20e704f7c38b6aab357cd986f48745815ae4ea6eacdd424fb67a75995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6c5f5e66b0ee9704a42cf59b4e0f3907db5dbe2800ef8920915a28b5e3b9345f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c5f5e66b0ee9704a42cf59b4e0f3907db5dbe2800ef8920915a28b5e3b9345f->enter($__internal_6c5f5e66b0ee9704a42cf59b4e0f3907db5dbe2800ef8920915a28b5e3b9345f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6c5f5e66b0ee9704a42cf59b4e0f3907db5dbe2800ef8920915a28b5e3b9345f->leave($__internal_6c5f5e66b0ee9704a42cf59b4e0f3907db5dbe2800ef8920915a28b5e3b9345f_prof);

        
        $__internal_f031ada20e704f7c38b6aab357cd986f48745815ae4ea6eacdd424fb67a75995->leave($__internal_f031ada20e704f7c38b6aab357cd986f48745815ae4ea6eacdd424fb67a75995_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_298edc71db11d8350a9ecd91c800311f06e4560d694a3850c195c2493960297c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_298edc71db11d8350a9ecd91c800311f06e4560d694a3850c195c2493960297c->enter($__internal_298edc71db11d8350a9ecd91c800311f06e4560d694a3850c195c2493960297c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e0070cf4cd235408f1b0277976ee4ca3a63b6fef690d28e89795c02294d6c004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0070cf4cd235408f1b0277976ee4ca3a63b6fef690d28e89795c02294d6c004->enter($__internal_e0070cf4cd235408f1b0277976ee4ca3a63b6fef690d28e89795c02294d6c004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e0070cf4cd235408f1b0277976ee4ca3a63b6fef690d28e89795c02294d6c004->leave($__internal_e0070cf4cd235408f1b0277976ee4ca3a63b6fef690d28e89795c02294d6c004_prof);

        
        $__internal_298edc71db11d8350a9ecd91c800311f06e4560d694a3850c195c2493960297c->leave($__internal_298edc71db11d8350a9ecd91c800311f06e4560d694a3850c195c2493960297c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_57f1cec8fe546a8b94b4cf75457d1aa49ca1ecf31a363df5144d4ffb4b4e46d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57f1cec8fe546a8b94b4cf75457d1aa49ca1ecf31a363df5144d4ffb4b4e46d3->enter($__internal_57f1cec8fe546a8b94b4cf75457d1aa49ca1ecf31a363df5144d4ffb4b4e46d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3186b23c67dfea5c1d9cd7447b5c4a86caf115ddec3ab096a72d90db93c5fe8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3186b23c67dfea5c1d9cd7447b5c4a86caf115ddec3ab096a72d90db93c5fe8c->enter($__internal_3186b23c67dfea5c1d9cd7447b5c4a86caf115ddec3ab096a72d90db93c5fe8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3186b23c67dfea5c1d9cd7447b5c4a86caf115ddec3ab096a72d90db93c5fe8c->leave($__internal_3186b23c67dfea5c1d9cd7447b5c4a86caf115ddec3ab096a72d90db93c5fe8c_prof);

        
        $__internal_57f1cec8fe546a8b94b4cf75457d1aa49ca1ecf31a363df5144d4ffb4b4e46d3->leave($__internal_57f1cec8fe546a8b94b4cf75457d1aa49ca1ecf31a363df5144d4ffb4b4e46d3_prof);

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
