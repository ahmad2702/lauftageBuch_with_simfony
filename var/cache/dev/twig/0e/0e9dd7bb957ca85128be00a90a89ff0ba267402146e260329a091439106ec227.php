<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_ab2306bec9cb6a2bb35fc58b034382bce062735d13414c6c7ec57ed0e51ce46d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5d943f9b0da2fbbd9fd3da3cb8d74817a2eba6e502cf07170ae434b13a38da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5d943f9b0da2fbbd9fd3da3cb8d74817a2eba6e502cf07170ae434b13a38da7->enter($__internal_b5d943f9b0da2fbbd9fd3da3cb8d74817a2eba6e502cf07170ae434b13a38da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_95b8192b8c6152c35fbb0d4a9477f29f691cf499c3b5ab52a132a46ed2ae4864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95b8192b8c6152c35fbb0d4a9477f29f691cf499c3b5ab52a132a46ed2ae4864->enter($__internal_95b8192b8c6152c35fbb0d4a9477f29f691cf499c3b5ab52a132a46ed2ae4864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b5d943f9b0da2fbbd9fd3da3cb8d74817a2eba6e502cf07170ae434b13a38da7->leave($__internal_b5d943f9b0da2fbbd9fd3da3cb8d74817a2eba6e502cf07170ae434b13a38da7_prof);

        
        $__internal_95b8192b8c6152c35fbb0d4a9477f29f691cf499c3b5ab52a132a46ed2ae4864->leave($__internal_95b8192b8c6152c35fbb0d4a9477f29f691cf499c3b5ab52a132a46ed2ae4864_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_daab3e9924010475fb24b39f86ad130ba2c7284834da121217cb7aad5a944051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daab3e9924010475fb24b39f86ad130ba2c7284834da121217cb7aad5a944051->enter($__internal_daab3e9924010475fb24b39f86ad130ba2c7284834da121217cb7aad5a944051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d9367e5301aa4104ef427e0228d73428c27eee31290a76bf3a8278076bb73614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9367e5301aa4104ef427e0228d73428c27eee31290a76bf3a8278076bb73614->enter($__internal_d9367e5301aa4104ef427e0228d73428c27eee31290a76bf3a8278076bb73614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d9367e5301aa4104ef427e0228d73428c27eee31290a76bf3a8278076bb73614->leave($__internal_d9367e5301aa4104ef427e0228d73428c27eee31290a76bf3a8278076bb73614_prof);

        
        $__internal_daab3e9924010475fb24b39f86ad130ba2c7284834da121217cb7aad5a944051->leave($__internal_daab3e9924010475fb24b39f86ad130ba2c7284834da121217cb7aad5a944051_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
