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
        $__internal_6f5ff946aac4f458d0d377bc989763f64eba5abfeedd190146f8543994c5bdfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f5ff946aac4f458d0d377bc989763f64eba5abfeedd190146f8543994c5bdfa->enter($__internal_6f5ff946aac4f458d0d377bc989763f64eba5abfeedd190146f8543994c5bdfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e350c7838df87f217aeafdd33c6b440f73290851d0ceb8eff61aad5a0aaf813a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e350c7838df87f217aeafdd33c6b440f73290851d0ceb8eff61aad5a0aaf813a->enter($__internal_e350c7838df87f217aeafdd33c6b440f73290851d0ceb8eff61aad5a0aaf813a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_6f5ff946aac4f458d0d377bc989763f64eba5abfeedd190146f8543994c5bdfa->leave($__internal_6f5ff946aac4f458d0d377bc989763f64eba5abfeedd190146f8543994c5bdfa_prof);

        
        $__internal_e350c7838df87f217aeafdd33c6b440f73290851d0ceb8eff61aad5a0aaf813a->leave($__internal_e350c7838df87f217aeafdd33c6b440f73290851d0ceb8eff61aad5a0aaf813a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_72b355317e8e5b4b5a822ba83ca25d5a61fca7ca238a70efe8c944ed00825be1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72b355317e8e5b4b5a822ba83ca25d5a61fca7ca238a70efe8c944ed00825be1->enter($__internal_72b355317e8e5b4b5a822ba83ca25d5a61fca7ca238a70efe8c944ed00825be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ee2b4cd6fd295bf2d3e994a2843498b4682c3fd7af2c576c28f1f27a27338bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee2b4cd6fd295bf2d3e994a2843498b4682c3fd7af2c576c28f1f27a27338bc8->enter($__internal_ee2b4cd6fd295bf2d3e994a2843498b4682c3fd7af2c576c28f1f27a27338bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ee2b4cd6fd295bf2d3e994a2843498b4682c3fd7af2c576c28f1f27a27338bc8->leave($__internal_ee2b4cd6fd295bf2d3e994a2843498b4682c3fd7af2c576c28f1f27a27338bc8_prof);

        
        $__internal_72b355317e8e5b4b5a822ba83ca25d5a61fca7ca238a70efe8c944ed00825be1->leave($__internal_72b355317e8e5b4b5a822ba83ca25d5a61fca7ca238a70efe8c944ed00825be1_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_4ac11c9db088df23e2f9009fcb36de8defb70c0fdbc94babe92808d786560a47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ac11c9db088df23e2f9009fcb36de8defb70c0fdbc94babe92808d786560a47->enter($__internal_4ac11c9db088df23e2f9009fcb36de8defb70c0fdbc94babe92808d786560a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a916d76ffee778d36e2936100c375ef9647b2ad65b516d0c4a82bcad4e957d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a916d76ffee778d36e2936100c375ef9647b2ad65b516d0c4a82bcad4e957d70->enter($__internal_a916d76ffee778d36e2936100c375ef9647b2ad65b516d0c4a82bcad4e957d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a916d76ffee778d36e2936100c375ef9647b2ad65b516d0c4a82bcad4e957d70->leave($__internal_a916d76ffee778d36e2936100c375ef9647b2ad65b516d0c4a82bcad4e957d70_prof);

        
        $__internal_4ac11c9db088df23e2f9009fcb36de8defb70c0fdbc94babe92808d786560a47->leave($__internal_4ac11c9db088df23e2f9009fcb36de8defb70c0fdbc94babe92808d786560a47_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae530127d0ea3c1cedb0396ad6c05ff602142b86e75e8ec0c0dc9cd31b304789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae530127d0ea3c1cedb0396ad6c05ff602142b86e75e8ec0c0dc9cd31b304789->enter($__internal_ae530127d0ea3c1cedb0396ad6c05ff602142b86e75e8ec0c0dc9cd31b304789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a642a53835b4b35a631c444c1d2c885d2abca6bc7bbfebf7f67ae05d5521135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a642a53835b4b35a631c444c1d2c885d2abca6bc7bbfebf7f67ae05d5521135->enter($__internal_6a642a53835b4b35a631c444c1d2c885d2abca6bc7bbfebf7f67ae05d5521135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6a642a53835b4b35a631c444c1d2c885d2abca6bc7bbfebf7f67ae05d5521135->leave($__internal_6a642a53835b4b35a631c444c1d2c885d2abca6bc7bbfebf7f67ae05d5521135_prof);

        
        $__internal_ae530127d0ea3c1cedb0396ad6c05ff602142b86e75e8ec0c0dc9cd31b304789->leave($__internal_ae530127d0ea3c1cedb0396ad6c05ff602142b86e75e8ec0c0dc9cd31b304789_prof);

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
