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
        $__internal_4bfe65d9e683d83105cf1e2584b4037ce437e58fd84732ffde8bbfdc6bf2754c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bfe65d9e683d83105cf1e2584b4037ce437e58fd84732ffde8bbfdc6bf2754c->enter($__internal_4bfe65d9e683d83105cf1e2584b4037ce437e58fd84732ffde8bbfdc6bf2754c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_36a3c7d5dae0b2b9adecc1c5129d88c99d20e9b63aeb987c95a01efe162aa715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36a3c7d5dae0b2b9adecc1c5129d88c99d20e9b63aeb987c95a01efe162aa715->enter($__internal_36a3c7d5dae0b2b9adecc1c5129d88c99d20e9b63aeb987c95a01efe162aa715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_4bfe65d9e683d83105cf1e2584b4037ce437e58fd84732ffde8bbfdc6bf2754c->leave($__internal_4bfe65d9e683d83105cf1e2584b4037ce437e58fd84732ffde8bbfdc6bf2754c_prof);

        
        $__internal_36a3c7d5dae0b2b9adecc1c5129d88c99d20e9b63aeb987c95a01efe162aa715->leave($__internal_36a3c7d5dae0b2b9adecc1c5129d88c99d20e9b63aeb987c95a01efe162aa715_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6e63aad366763778448624b62166460107a3b9ea7006fd000ca3681869f7f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6e63aad366763778448624b62166460107a3b9ea7006fd000ca3681869f7f6f->enter($__internal_f6e63aad366763778448624b62166460107a3b9ea7006fd000ca3681869f7f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d4da49151f16df513f0103a23bb8d647cf25ddd8c595ee5c4017776e94668c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4da49151f16df513f0103a23bb8d647cf25ddd8c595ee5c4017776e94668c43->enter($__internal_d4da49151f16df513f0103a23bb8d647cf25ddd8c595ee5c4017776e94668c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d4da49151f16df513f0103a23bb8d647cf25ddd8c595ee5c4017776e94668c43->leave($__internal_d4da49151f16df513f0103a23bb8d647cf25ddd8c595ee5c4017776e94668c43_prof);

        
        $__internal_f6e63aad366763778448624b62166460107a3b9ea7006fd000ca3681869f7f6f->leave($__internal_f6e63aad366763778448624b62166460107a3b9ea7006fd000ca3681869f7f6f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_79f815316cd4eabd5fa0b25f18bb3642fd96b942d2c245d1e093ad6bb365fa01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79f815316cd4eabd5fa0b25f18bb3642fd96b942d2c245d1e093ad6bb365fa01->enter($__internal_79f815316cd4eabd5fa0b25f18bb3642fd96b942d2c245d1e093ad6bb365fa01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e2f73e1b09d4642c7fba7cd7872c40c117052873e7a8e21a1d4cb0cf4d002911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2f73e1b09d4642c7fba7cd7872c40c117052873e7a8e21a1d4cb0cf4d002911->enter($__internal_e2f73e1b09d4642c7fba7cd7872c40c117052873e7a8e21a1d4cb0cf4d002911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e2f73e1b09d4642c7fba7cd7872c40c117052873e7a8e21a1d4cb0cf4d002911->leave($__internal_e2f73e1b09d4642c7fba7cd7872c40c117052873e7a8e21a1d4cb0cf4d002911_prof);

        
        $__internal_79f815316cd4eabd5fa0b25f18bb3642fd96b942d2c245d1e093ad6bb365fa01->leave($__internal_79f815316cd4eabd5fa0b25f18bb3642fd96b942d2c245d1e093ad6bb365fa01_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee33c44e0539489c23769398bedb051b6ac2f8c51cb93075317702d953c56b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee33c44e0539489c23769398bedb051b6ac2f8c51cb93075317702d953c56b9d->enter($__internal_ee33c44e0539489c23769398bedb051b6ac2f8c51cb93075317702d953c56b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed34763156ec71d9e81ac6d2801b574999b8056f427b2cd065fb36ff577eced4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed34763156ec71d9e81ac6d2801b574999b8056f427b2cd065fb36ff577eced4->enter($__internal_ed34763156ec71d9e81ac6d2801b574999b8056f427b2cd065fb36ff577eced4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ed34763156ec71d9e81ac6d2801b574999b8056f427b2cd065fb36ff577eced4->leave($__internal_ed34763156ec71d9e81ac6d2801b574999b8056f427b2cd065fb36ff577eced4_prof);

        
        $__internal_ee33c44e0539489c23769398bedb051b6ac2f8c51cb93075317702d953c56b9d->leave($__internal_ee33c44e0539489c23769398bedb051b6ac2f8c51cb93075317702d953c56b9d_prof);

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
