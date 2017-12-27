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
        $__internal_9d2fe7e560cefb12b078bef3fdd253616cc68b6f89dc27a08d054b44a9007d68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d2fe7e560cefb12b078bef3fdd253616cc68b6f89dc27a08d054b44a9007d68->enter($__internal_9d2fe7e560cefb12b078bef3fdd253616cc68b6f89dc27a08d054b44a9007d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3240932fb5959260da7ca86feca85c311492fa00017a52b1ecaa6348a39c74e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3240932fb5959260da7ca86feca85c311492fa00017a52b1ecaa6348a39c74e4->enter($__internal_3240932fb5959260da7ca86feca85c311492fa00017a52b1ecaa6348a39c74e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9d2fe7e560cefb12b078bef3fdd253616cc68b6f89dc27a08d054b44a9007d68->leave($__internal_9d2fe7e560cefb12b078bef3fdd253616cc68b6f89dc27a08d054b44a9007d68_prof);

        
        $__internal_3240932fb5959260da7ca86feca85c311492fa00017a52b1ecaa6348a39c74e4->leave($__internal_3240932fb5959260da7ca86feca85c311492fa00017a52b1ecaa6348a39c74e4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_74ac6fdadab4423f659d963dd210bee120de641924e185b49db83366bed93c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74ac6fdadab4423f659d963dd210bee120de641924e185b49db83366bed93c21->enter($__internal_74ac6fdadab4423f659d963dd210bee120de641924e185b49db83366bed93c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_71825be716fb7172e100fd01b19b2103a1839401ac43bd986ca4f65d6f83af27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71825be716fb7172e100fd01b19b2103a1839401ac43bd986ca4f65d6f83af27->enter($__internal_71825be716fb7172e100fd01b19b2103a1839401ac43bd986ca4f65d6f83af27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_71825be716fb7172e100fd01b19b2103a1839401ac43bd986ca4f65d6f83af27->leave($__internal_71825be716fb7172e100fd01b19b2103a1839401ac43bd986ca4f65d6f83af27_prof);

        
        $__internal_74ac6fdadab4423f659d963dd210bee120de641924e185b49db83366bed93c21->leave($__internal_74ac6fdadab4423f659d963dd210bee120de641924e185b49db83366bed93c21_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_519409b4f6b2e72349cdaae7ff3150b13a6859e392ab648e982156089a4d583a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_519409b4f6b2e72349cdaae7ff3150b13a6859e392ab648e982156089a4d583a->enter($__internal_519409b4f6b2e72349cdaae7ff3150b13a6859e392ab648e982156089a4d583a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_914dc65651c17041377daa63464a0ad377730dcf198377b5a3fa0cc1b9868862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_914dc65651c17041377daa63464a0ad377730dcf198377b5a3fa0cc1b9868862->enter($__internal_914dc65651c17041377daa63464a0ad377730dcf198377b5a3fa0cc1b9868862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_914dc65651c17041377daa63464a0ad377730dcf198377b5a3fa0cc1b9868862->leave($__internal_914dc65651c17041377daa63464a0ad377730dcf198377b5a3fa0cc1b9868862_prof);

        
        $__internal_519409b4f6b2e72349cdaae7ff3150b13a6859e392ab648e982156089a4d583a->leave($__internal_519409b4f6b2e72349cdaae7ff3150b13a6859e392ab648e982156089a4d583a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f546bdf6713fd37216fd9e70e7929f7601c8f0eef11bb0f935735ec6f4a737b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f546bdf6713fd37216fd9e70e7929f7601c8f0eef11bb0f935735ec6f4a737b2->enter($__internal_f546bdf6713fd37216fd9e70e7929f7601c8f0eef11bb0f935735ec6f4a737b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e38aeab48c6a65d9967cdef9f6f6e09709488f5e4bc4108d9a277edc3eb37dd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e38aeab48c6a65d9967cdef9f6f6e09709488f5e4bc4108d9a277edc3eb37dd6->enter($__internal_e38aeab48c6a65d9967cdef9f6f6e09709488f5e4bc4108d9a277edc3eb37dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e38aeab48c6a65d9967cdef9f6f6e09709488f5e4bc4108d9a277edc3eb37dd6->leave($__internal_e38aeab48c6a65d9967cdef9f6f6e09709488f5e4bc4108d9a277edc3eb37dd6_prof);

        
        $__internal_f546bdf6713fd37216fd9e70e7929f7601c8f0eef11bb0f935735ec6f4a737b2->leave($__internal_f546bdf6713fd37216fd9e70e7929f7601c8f0eef11bb0f935735ec6f4a737b2_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_29b98379951b25165bcea79cbfa5f9313a28beea60d2c2f81bf32c932c66a376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29b98379951b25165bcea79cbfa5f9313a28beea60d2c2f81bf32c932c66a376->enter($__internal_29b98379951b25165bcea79cbfa5f9313a28beea60d2c2f81bf32c932c66a376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_65785636915d8be57a84fdd39ddf38c1af2b76069d3773dd3b629d96d9763cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65785636915d8be57a84fdd39ddf38c1af2b76069d3773dd3b629d96d9763cff->enter($__internal_65785636915d8be57a84fdd39ddf38c1af2b76069d3773dd3b629d96d9763cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_65785636915d8be57a84fdd39ddf38c1af2b76069d3773dd3b629d96d9763cff->leave($__internal_65785636915d8be57a84fdd39ddf38c1af2b76069d3773dd3b629d96d9763cff_prof);

        
        $__internal_29b98379951b25165bcea79cbfa5f9313a28beea60d2c2f81bf32c932c66a376->leave($__internal_29b98379951b25165bcea79cbfa5f9313a28beea60d2c2f81bf32c932c66a376_prof);

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
