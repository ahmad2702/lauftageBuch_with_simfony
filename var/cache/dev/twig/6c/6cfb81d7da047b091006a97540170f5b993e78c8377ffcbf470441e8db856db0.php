<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_022626092395f5db5eb563c3a19d757301e375cffb08166872c4e240c207fe58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_309c0aaa0d9ae081988cd6726a2488eff683d0c30b9fcdc95752bc0e6203c5ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_309c0aaa0d9ae081988cd6726a2488eff683d0c30b9fcdc95752bc0e6203c5ee->enter($__internal_309c0aaa0d9ae081988cd6726a2488eff683d0c30b9fcdc95752bc0e6203c5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_9fdf824cfb4b95070469baaa62ded9f5a081be800e114cc1c642b566f7d31244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fdf824cfb4b95070469baaa62ded9f5a081be800e114cc1c642b566f7d31244->enter($__internal_9fdf824cfb4b95070469baaa62ded9f5a081be800e114cc1c642b566f7d31244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_309c0aaa0d9ae081988cd6726a2488eff683d0c30b9fcdc95752bc0e6203c5ee->leave($__internal_309c0aaa0d9ae081988cd6726a2488eff683d0c30b9fcdc95752bc0e6203c5ee_prof);

        
        $__internal_9fdf824cfb4b95070469baaa62ded9f5a081be800e114cc1c642b566f7d31244->leave($__internal_9fdf824cfb4b95070469baaa62ded9f5a081be800e114cc1c642b566f7d31244_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/twig-bundle/Resources/views/Exception/exception.js.twig");
    }
}
