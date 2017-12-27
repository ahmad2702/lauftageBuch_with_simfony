<?php

/* base.html.twig */
class __TwigTemplate_0cfa289ed6a218f2f3002752523abfa0cf8aacf94d2610131e7d1cb8bd9999f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcbe919d94d6f6eb5c7533644f84fc78ed386d4fa59a6e8e459f38618e7d6810 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcbe919d94d6f6eb5c7533644f84fc78ed386d4fa59a6e8e459f38618e7d6810->enter($__internal_bcbe919d94d6f6eb5c7533644f84fc78ed386d4fa59a6e8e459f38618e7d6810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_258af71f2793708451605ea72d2f6f56cea2545b8a28fbf4018ccf8a7e160268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_258af71f2793708451605ea72d2f6f56cea2545b8a28fbf4018ccf8a7e160268->enter($__internal_258af71f2793708451605ea72d2f6f56cea2545b8a28fbf4018ccf8a7e160268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "    </body>
</html>
";
        
        $__internal_bcbe919d94d6f6eb5c7533644f84fc78ed386d4fa59a6e8e459f38618e7d6810->leave($__internal_bcbe919d94d6f6eb5c7533644f84fc78ed386d4fa59a6e8e459f38618e7d6810_prof);

        
        $__internal_258af71f2793708451605ea72d2f6f56cea2545b8a28fbf4018ccf8a7e160268->leave($__internal_258af71f2793708451605ea72d2f6f56cea2545b8a28fbf4018ccf8a7e160268_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4a8e555429105ea815c0c6375bad5a7446368d07ca7c2dfeb6b2dbb5acf4d42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4a8e555429105ea815c0c6375bad5a7446368d07ca7c2dfeb6b2dbb5acf4d42->enter($__internal_c4a8e555429105ea815c0c6375bad5a7446368d07ca7c2dfeb6b2dbb5acf4d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5cd88e21ac8a6319c4f86929c639e00e50953c957596d82de93869dce5e48cc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cd88e21ac8a6319c4f86929c639e00e50953c957596d82de93869dce5e48cc4->enter($__internal_5cd88e21ac8a6319c4f86929c639e00e50953c957596d82de93869dce5e48cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5cd88e21ac8a6319c4f86929c639e00e50953c957596d82de93869dce5e48cc4->leave($__internal_5cd88e21ac8a6319c4f86929c639e00e50953c957596d82de93869dce5e48cc4_prof);

        
        $__internal_c4a8e555429105ea815c0c6375bad5a7446368d07ca7c2dfeb6b2dbb5acf4d42->leave($__internal_c4a8e555429105ea815c0c6375bad5a7446368d07ca7c2dfeb6b2dbb5acf4d42_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5b8a4fd215d032ac56e94d64d147931cbbd8b36489ea47d006f42b57c7178b23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b8a4fd215d032ac56e94d64d147931cbbd8b36489ea47d006f42b57c7178b23->enter($__internal_5b8a4fd215d032ac56e94d64d147931cbbd8b36489ea47d006f42b57c7178b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6070c78c2f2930577944d5f8eedd4d2ee5407bcd9caa9cf2cfab71870a2d5885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6070c78c2f2930577944d5f8eedd4d2ee5407bcd9caa9cf2cfab71870a2d5885->enter($__internal_6070c78c2f2930577944d5f8eedd4d2ee5407bcd9caa9cf2cfab71870a2d5885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6070c78c2f2930577944d5f8eedd4d2ee5407bcd9caa9cf2cfab71870a2d5885->leave($__internal_6070c78c2f2930577944d5f8eedd4d2ee5407bcd9caa9cf2cfab71870a2d5885_prof);

        
        $__internal_5b8a4fd215d032ac56e94d64d147931cbbd8b36489ea47d006f42b57c7178b23->leave($__internal_5b8a4fd215d032ac56e94d64d147931cbbd8b36489ea47d006f42b57c7178b23_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f0c706048b9164cfc6bf96b68dbb5e5368a1e3b59f7f95a747a7c0838e3e8bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f0c706048b9164cfc6bf96b68dbb5e5368a1e3b59f7f95a747a7c0838e3e8bc->enter($__internal_9f0c706048b9164cfc6bf96b68dbb5e5368a1e3b59f7f95a747a7c0838e3e8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a59ad710517bd8fc875e64de7324ba14b0401b09546cf42668f663f255159f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a59ad710517bd8fc875e64de7324ba14b0401b09546cf42668f663f255159f43->enter($__internal_a59ad710517bd8fc875e64de7324ba14b0401b09546cf42668f663f255159f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a59ad710517bd8fc875e64de7324ba14b0401b09546cf42668f663f255159f43->leave($__internal_a59ad710517bd8fc875e64de7324ba14b0401b09546cf42668f663f255159f43_prof);

        
        $__internal_9f0c706048b9164cfc6bf96b68dbb5e5368a1e3b59f7f95a747a7c0838e3e8bc->leave($__internal_9f0c706048b9164cfc6bf96b68dbb5e5368a1e3b59f7f95a747a7c0838e3e8bc_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ad3a081766dfdfb4660b304bee19192582f4ded003e18e5feea79df8cb1fbbc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad3a081766dfdfb4660b304bee19192582f4ded003e18e5feea79df8cb1fbbc4->enter($__internal_ad3a081766dfdfb4660b304bee19192582f4ded003e18e5feea79df8cb1fbbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0bfb2cbb43d5c39f02ea9820316b2cf7ed6c1ee50664cc1afa7ea22f749f74a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bfb2cbb43d5c39f02ea9820316b2cf7ed6c1ee50664cc1afa7ea22f749f74a5->enter($__internal_0bfb2cbb43d5c39f02ea9820316b2cf7ed6c1ee50664cc1afa7ea22f749f74a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0bfb2cbb43d5c39f02ea9820316b2cf7ed6c1ee50664cc1afa7ea22f749f74a5->leave($__internal_0bfb2cbb43d5c39f02ea9820316b2cf7ed6c1ee50664cc1afa7ea22f749f74a5_prof);

        
        $__internal_ad3a081766dfdfb4660b304bee19192582f4ded003e18e5feea79df8cb1fbbc4->leave($__internal_ad3a081766dfdfb4660b304bee19192582f4ded003e18e5feea79df8cb1fbbc4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 10,  97 => 9,  80 => 6,  62 => 5,  50 => 11,  47 => 10,  45 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/templates/base.html.twig");
    }
}
