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
        $__internal_42f9e72cca958b553aab0f485ceccb13b929bd2bba674dda9a3ebb7b492b265d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42f9e72cca958b553aab0f485ceccb13b929bd2bba674dda9a3ebb7b492b265d->enter($__internal_42f9e72cca958b553aab0f485ceccb13b929bd2bba674dda9a3ebb7b492b265d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_8df0b721e98d98d41bc73917b7b793fb9d151183cdccf769f9692eb5534bf31c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8df0b721e98d98d41bc73917b7b793fb9d151183cdccf769f9692eb5534bf31c->enter($__internal_8df0b721e98d98d41bc73917b7b793fb9d151183cdccf769f9692eb5534bf31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_42f9e72cca958b553aab0f485ceccb13b929bd2bba674dda9a3ebb7b492b265d->leave($__internal_42f9e72cca958b553aab0f485ceccb13b929bd2bba674dda9a3ebb7b492b265d_prof);

        
        $__internal_8df0b721e98d98d41bc73917b7b793fb9d151183cdccf769f9692eb5534bf31c->leave($__internal_8df0b721e98d98d41bc73917b7b793fb9d151183cdccf769f9692eb5534bf31c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d862d0d40a9080ba797d4f1462df17cfb9db1af2918c304becafe5e53998d6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d862d0d40a9080ba797d4f1462df17cfb9db1af2918c304becafe5e53998d6d->enter($__internal_1d862d0d40a9080ba797d4f1462df17cfb9db1af2918c304becafe5e53998d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9c506dd0cf82d1aaabffd8203d876b388393da96f318902cc691720ab62cbc55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c506dd0cf82d1aaabffd8203d876b388393da96f318902cc691720ab62cbc55->enter($__internal_9c506dd0cf82d1aaabffd8203d876b388393da96f318902cc691720ab62cbc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9c506dd0cf82d1aaabffd8203d876b388393da96f318902cc691720ab62cbc55->leave($__internal_9c506dd0cf82d1aaabffd8203d876b388393da96f318902cc691720ab62cbc55_prof);

        
        $__internal_1d862d0d40a9080ba797d4f1462df17cfb9db1af2918c304becafe5e53998d6d->leave($__internal_1d862d0d40a9080ba797d4f1462df17cfb9db1af2918c304becafe5e53998d6d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e14d2b682a509c7e67718c07388b1b9c32bc1c4a5eb8e1e3f5685a3351ad99a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e14d2b682a509c7e67718c07388b1b9c32bc1c4a5eb8e1e3f5685a3351ad99a1->enter($__internal_e14d2b682a509c7e67718c07388b1b9c32bc1c4a5eb8e1e3f5685a3351ad99a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fd1a7bd81cab29560eb0584b1010f920773ff34c7213298d85b350aec9ef90c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd1a7bd81cab29560eb0584b1010f920773ff34c7213298d85b350aec9ef90c4->enter($__internal_fd1a7bd81cab29560eb0584b1010f920773ff34c7213298d85b350aec9ef90c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_fd1a7bd81cab29560eb0584b1010f920773ff34c7213298d85b350aec9ef90c4->leave($__internal_fd1a7bd81cab29560eb0584b1010f920773ff34c7213298d85b350aec9ef90c4_prof);

        
        $__internal_e14d2b682a509c7e67718c07388b1b9c32bc1c4a5eb8e1e3f5685a3351ad99a1->leave($__internal_e14d2b682a509c7e67718c07388b1b9c32bc1c4a5eb8e1e3f5685a3351ad99a1_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6820e47566ebcc1e431fd9d2edb32798049ce853bb6c5f987eb6c48e70217f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6820e47566ebcc1e431fd9d2edb32798049ce853bb6c5f987eb6c48e70217f00->enter($__internal_6820e47566ebcc1e431fd9d2edb32798049ce853bb6c5f987eb6c48e70217f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_96a111306fb7c029038b0a3704c056050c6dac853c31514d060b58ff6103b400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a111306fb7c029038b0a3704c056050c6dac853c31514d060b58ff6103b400->enter($__internal_96a111306fb7c029038b0a3704c056050c6dac853c31514d060b58ff6103b400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_96a111306fb7c029038b0a3704c056050c6dac853c31514d060b58ff6103b400->leave($__internal_96a111306fb7c029038b0a3704c056050c6dac853c31514d060b58ff6103b400_prof);

        
        $__internal_6820e47566ebcc1e431fd9d2edb32798049ce853bb6c5f987eb6c48e70217f00->leave($__internal_6820e47566ebcc1e431fd9d2edb32798049ce853bb6c5f987eb6c48e70217f00_prof);

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
