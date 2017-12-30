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
        $__internal_ce9e319da8816bb4262cfe2af727ef2d6201beda51b888b03e3530fe24ce52f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce9e319da8816bb4262cfe2af727ef2d6201beda51b888b03e3530fe24ce52f2->enter($__internal_ce9e319da8816bb4262cfe2af727ef2d6201beda51b888b03e3530fe24ce52f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_88c30e2f810d4893b3ef84e94a73794dc0fc70475b6c26a3b6aa44b9594de6e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c30e2f810d4893b3ef84e94a73794dc0fc70475b6c26a3b6aa44b9594de6e5->enter($__internal_88c30e2f810d4893b3ef84e94a73794dc0fc70475b6c26a3b6aa44b9594de6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_ce9e319da8816bb4262cfe2af727ef2d6201beda51b888b03e3530fe24ce52f2->leave($__internal_ce9e319da8816bb4262cfe2af727ef2d6201beda51b888b03e3530fe24ce52f2_prof);

        
        $__internal_88c30e2f810d4893b3ef84e94a73794dc0fc70475b6c26a3b6aa44b9594de6e5->leave($__internal_88c30e2f810d4893b3ef84e94a73794dc0fc70475b6c26a3b6aa44b9594de6e5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0fdb9ff2918a7ec9b21b06b4c15add68060588b4c5c954df6db1ac818d2ba18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0fdb9ff2918a7ec9b21b06b4c15add68060588b4c5c954df6db1ac818d2ba18->enter($__internal_f0fdb9ff2918a7ec9b21b06b4c15add68060588b4c5c954df6db1ac818d2ba18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_80e680cc7c461e86d9bc23c9416f07c45114ca4384ac20bf20695d633585c952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80e680cc7c461e86d9bc23c9416f07c45114ca4384ac20bf20695d633585c952->enter($__internal_80e680cc7c461e86d9bc23c9416f07c45114ca4384ac20bf20695d633585c952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_80e680cc7c461e86d9bc23c9416f07c45114ca4384ac20bf20695d633585c952->leave($__internal_80e680cc7c461e86d9bc23c9416f07c45114ca4384ac20bf20695d633585c952_prof);

        
        $__internal_f0fdb9ff2918a7ec9b21b06b4c15add68060588b4c5c954df6db1ac818d2ba18->leave($__internal_f0fdb9ff2918a7ec9b21b06b4c15add68060588b4c5c954df6db1ac818d2ba18_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d37c05ab43f071e8c5a786fbfa0a32c33b7bd11132e26b7fdb7cacb281c14117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d37c05ab43f071e8c5a786fbfa0a32c33b7bd11132e26b7fdb7cacb281c14117->enter($__internal_d37c05ab43f071e8c5a786fbfa0a32c33b7bd11132e26b7fdb7cacb281c14117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3bfd8a345502cc465c7ee13ff917d3bcc46d38f46517bb7a57615fedb5f12e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bfd8a345502cc465c7ee13ff917d3bcc46d38f46517bb7a57615fedb5f12e8d->enter($__internal_3bfd8a345502cc465c7ee13ff917d3bcc46d38f46517bb7a57615fedb5f12e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3bfd8a345502cc465c7ee13ff917d3bcc46d38f46517bb7a57615fedb5f12e8d->leave($__internal_3bfd8a345502cc465c7ee13ff917d3bcc46d38f46517bb7a57615fedb5f12e8d_prof);

        
        $__internal_d37c05ab43f071e8c5a786fbfa0a32c33b7bd11132e26b7fdb7cacb281c14117->leave($__internal_d37c05ab43f071e8c5a786fbfa0a32c33b7bd11132e26b7fdb7cacb281c14117_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb1f12c831d2196ed2d7156266047631974d08557fed9a0ece48e662fbc80e44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb1f12c831d2196ed2d7156266047631974d08557fed9a0ece48e662fbc80e44->enter($__internal_eb1f12c831d2196ed2d7156266047631974d08557fed9a0ece48e662fbc80e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_15ec55c75c9823e05831c69e60e30be3ea33ebd87c9c9ce145c38c5798eb10fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ec55c75c9823e05831c69e60e30be3ea33ebd87c9c9ce145c38c5798eb10fb->enter($__internal_15ec55c75c9823e05831c69e60e30be3ea33ebd87c9c9ce145c38c5798eb10fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_15ec55c75c9823e05831c69e60e30be3ea33ebd87c9c9ce145c38c5798eb10fb->leave($__internal_15ec55c75c9823e05831c69e60e30be3ea33ebd87c9c9ce145c38c5798eb10fb_prof);

        
        $__internal_eb1f12c831d2196ed2d7156266047631974d08557fed9a0ece48e662fbc80e44->leave($__internal_eb1f12c831d2196ed2d7156266047631974d08557fed9a0ece48e662fbc80e44_prof);

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
