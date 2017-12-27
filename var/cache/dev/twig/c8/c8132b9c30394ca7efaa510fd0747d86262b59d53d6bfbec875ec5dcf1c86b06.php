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
        $__internal_b463ae3f25c3cdec32833c5a6175fa51d819f99a5ad5abc9ed45bf723cdd83d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b463ae3f25c3cdec32833c5a6175fa51d819f99a5ad5abc9ed45bf723cdd83d7->enter($__internal_b463ae3f25c3cdec32833c5a6175fa51d819f99a5ad5abc9ed45bf723cdd83d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_0b7bc0e34b793fb9c3251fb2617167883f213e7f25906e0eb0fa69cb5d7f43ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b7bc0e34b793fb9c3251fb2617167883f213e7f25906e0eb0fa69cb5d7f43ad->enter($__internal_0b7bc0e34b793fb9c3251fb2617167883f213e7f25906e0eb0fa69cb5d7f43ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b463ae3f25c3cdec32833c5a6175fa51d819f99a5ad5abc9ed45bf723cdd83d7->leave($__internal_b463ae3f25c3cdec32833c5a6175fa51d819f99a5ad5abc9ed45bf723cdd83d7_prof);

        
        $__internal_0b7bc0e34b793fb9c3251fb2617167883f213e7f25906e0eb0fa69cb5d7f43ad->leave($__internal_0b7bc0e34b793fb9c3251fb2617167883f213e7f25906e0eb0fa69cb5d7f43ad_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d08fa73e7600acc366552b3cad56b3daadd7e4c191cfabfb1a4d7e7a3c6716ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d08fa73e7600acc366552b3cad56b3daadd7e4c191cfabfb1a4d7e7a3c6716ac->enter($__internal_d08fa73e7600acc366552b3cad56b3daadd7e4c191cfabfb1a4d7e7a3c6716ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_33db34dda3a2659417b501e57e1ee2e9da4ac114c60adf2a0a7383aa808967e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33db34dda3a2659417b501e57e1ee2e9da4ac114c60adf2a0a7383aa808967e8->enter($__internal_33db34dda3a2659417b501e57e1ee2e9da4ac114c60adf2a0a7383aa808967e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_33db34dda3a2659417b501e57e1ee2e9da4ac114c60adf2a0a7383aa808967e8->leave($__internal_33db34dda3a2659417b501e57e1ee2e9da4ac114c60adf2a0a7383aa808967e8_prof);

        
        $__internal_d08fa73e7600acc366552b3cad56b3daadd7e4c191cfabfb1a4d7e7a3c6716ac->leave($__internal_d08fa73e7600acc366552b3cad56b3daadd7e4c191cfabfb1a4d7e7a3c6716ac_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a764ff43dda078567bd8ae4b7aabd4a773f10d7881348f932fafd4d4af2beb94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a764ff43dda078567bd8ae4b7aabd4a773f10d7881348f932fafd4d4af2beb94->enter($__internal_a764ff43dda078567bd8ae4b7aabd4a773f10d7881348f932fafd4d4af2beb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a0310edc39ca846f14390307df7736783f6b9767d34268e552e564d85a155f05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0310edc39ca846f14390307df7736783f6b9767d34268e552e564d85a155f05->enter($__internal_a0310edc39ca846f14390307df7736783f6b9767d34268e552e564d85a155f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a0310edc39ca846f14390307df7736783f6b9767d34268e552e564d85a155f05->leave($__internal_a0310edc39ca846f14390307df7736783f6b9767d34268e552e564d85a155f05_prof);

        
        $__internal_a764ff43dda078567bd8ae4b7aabd4a773f10d7881348f932fafd4d4af2beb94->leave($__internal_a764ff43dda078567bd8ae4b7aabd4a773f10d7881348f932fafd4d4af2beb94_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_460f122a8261cfa7c166d59b224658b051f6f0e523487ca929c9fac15d460d4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_460f122a8261cfa7c166d59b224658b051f6f0e523487ca929c9fac15d460d4c->enter($__internal_460f122a8261cfa7c166d59b224658b051f6f0e523487ca929c9fac15d460d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ae31fd8d0192d4eb47a1f9b730fa65906dafa3c58dd0ce2b0a5e0e1a7e06ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae31fd8d0192d4eb47a1f9b730fa65906dafa3c58dd0ce2b0a5e0e1a7e06ff1->enter($__internal_9ae31fd8d0192d4eb47a1f9b730fa65906dafa3c58dd0ce2b0a5e0e1a7e06ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9ae31fd8d0192d4eb47a1f9b730fa65906dafa3c58dd0ce2b0a5e0e1a7e06ff1->leave($__internal_9ae31fd8d0192d4eb47a1f9b730fa65906dafa3c58dd0ce2b0a5e0e1a7e06ff1_prof);

        
        $__internal_460f122a8261cfa7c166d59b224658b051f6f0e523487ca929c9fac15d460d4c->leave($__internal_460f122a8261cfa7c166d59b224658b051f6f0e523487ca929c9fac15d460d4c_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b434c56e5c4f510a1659b7d89cda4ea5fecfec4958295db41cf8d0bf11022f1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b434c56e5c4f510a1659b7d89cda4ea5fecfec4958295db41cf8d0bf11022f1d->enter($__internal_b434c56e5c4f510a1659b7d89cda4ea5fecfec4958295db41cf8d0bf11022f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2ef15e832900bbab805f555c018ba78c17a4d9e8d44c7bf00afe20664724ab57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef15e832900bbab805f555c018ba78c17a4d9e8d44c7bf00afe20664724ab57->enter($__internal_2ef15e832900bbab805f555c018ba78c17a4d9e8d44c7bf00afe20664724ab57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2ef15e832900bbab805f555c018ba78c17a4d9e8d44c7bf00afe20664724ab57->leave($__internal_2ef15e832900bbab805f555c018ba78c17a4d9e8d44c7bf00afe20664724ab57_prof);

        
        $__internal_b434c56e5c4f510a1659b7d89cda4ea5fecfec4958295db41cf8d0bf11022f1d->leave($__internal_b434c56e5c4f510a1659b7d89cda4ea5fecfec4958295db41cf8d0bf11022f1d_prof);

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
