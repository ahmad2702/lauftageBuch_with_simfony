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
        $__internal_5865ce3e5f87767660bdd6c7a0a7ebd1b967714b9e28969d8b7516f59ce06f1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5865ce3e5f87767660bdd6c7a0a7ebd1b967714b9e28969d8b7516f59ce06f1e->enter($__internal_5865ce3e5f87767660bdd6c7a0a7ebd1b967714b9e28969d8b7516f59ce06f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_8a1593470c5143ea22d49aa766ecfbfdc83745ac6cf7f68db2d78d43a824f843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a1593470c5143ea22d49aa766ecfbfdc83745ac6cf7f68db2d78d43a824f843->enter($__internal_8a1593470c5143ea22d49aa766ecfbfdc83745ac6cf7f68db2d78d43a824f843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_5865ce3e5f87767660bdd6c7a0a7ebd1b967714b9e28969d8b7516f59ce06f1e->leave($__internal_5865ce3e5f87767660bdd6c7a0a7ebd1b967714b9e28969d8b7516f59ce06f1e_prof);

        
        $__internal_8a1593470c5143ea22d49aa766ecfbfdc83745ac6cf7f68db2d78d43a824f843->leave($__internal_8a1593470c5143ea22d49aa766ecfbfdc83745ac6cf7f68db2d78d43a824f843_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d11705d9e3ddd3876995224a578799fd2a5bb4bd874c56b29c015df055f3698a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d11705d9e3ddd3876995224a578799fd2a5bb4bd874c56b29c015df055f3698a->enter($__internal_d11705d9e3ddd3876995224a578799fd2a5bb4bd874c56b29c015df055f3698a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a6484acc613b4dddc0c65d06d666779483ade493767305f4366369c5a9806931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6484acc613b4dddc0c65d06d666779483ade493767305f4366369c5a9806931->enter($__internal_a6484acc613b4dddc0c65d06d666779483ade493767305f4366369c5a9806931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a6484acc613b4dddc0c65d06d666779483ade493767305f4366369c5a9806931->leave($__internal_a6484acc613b4dddc0c65d06d666779483ade493767305f4366369c5a9806931_prof);

        
        $__internal_d11705d9e3ddd3876995224a578799fd2a5bb4bd874c56b29c015df055f3698a->leave($__internal_d11705d9e3ddd3876995224a578799fd2a5bb4bd874c56b29c015df055f3698a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_69e0f5a5f3c21c5ab581a29be389b2848dce27de84251db339e201c8f351d423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69e0f5a5f3c21c5ab581a29be389b2848dce27de84251db339e201c8f351d423->enter($__internal_69e0f5a5f3c21c5ab581a29be389b2848dce27de84251db339e201c8f351d423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ac47150b162066c2273672c6320886a86191253b1297a034dc37ec236df00c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac47150b162066c2273672c6320886a86191253b1297a034dc37ec236df00c00->enter($__internal_ac47150b162066c2273672c6320886a86191253b1297a034dc37ec236df00c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ac47150b162066c2273672c6320886a86191253b1297a034dc37ec236df00c00->leave($__internal_ac47150b162066c2273672c6320886a86191253b1297a034dc37ec236df00c00_prof);

        
        $__internal_69e0f5a5f3c21c5ab581a29be389b2848dce27de84251db339e201c8f351d423->leave($__internal_69e0f5a5f3c21c5ab581a29be389b2848dce27de84251db339e201c8f351d423_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6c2a355c780eca695372d4d0b27dae930eda3250a8d944386c9dfdccdb6d06c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6c2a355c780eca695372d4d0b27dae930eda3250a8d944386c9dfdccdb6d06c->enter($__internal_b6c2a355c780eca695372d4d0b27dae930eda3250a8d944386c9dfdccdb6d06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df068e1cae0a19793d95881aea2ebf4c85f5ba011e5ccaea64761dc2dd2c9299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df068e1cae0a19793d95881aea2ebf4c85f5ba011e5ccaea64761dc2dd2c9299->enter($__internal_df068e1cae0a19793d95881aea2ebf4c85f5ba011e5ccaea64761dc2dd2c9299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_df068e1cae0a19793d95881aea2ebf4c85f5ba011e5ccaea64761dc2dd2c9299->leave($__internal_df068e1cae0a19793d95881aea2ebf4c85f5ba011e5ccaea64761dc2dd2c9299_prof);

        
        $__internal_b6c2a355c780eca695372d4d0b27dae930eda3250a8d944386c9dfdccdb6d06c->leave($__internal_b6c2a355c780eca695372d4d0b27dae930eda3250a8d944386c9dfdccdb6d06c_prof);

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
