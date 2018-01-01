<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_3caeea85482567da5e3b2f82da9bc7fc6775e9a9f32c70f8bf5ed0951e0e0a22 extends Twig_Template
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
        $__internal_c9072d2c9cde6958ac7570e7075e607abee95d2de851fb74fc292c85a14e07ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9072d2c9cde6958ac7570e7075e607abee95d2de851fb74fc292c85a14e07ac->enter($__internal_c9072d2c9cde6958ac7570e7075e607abee95d2de851fb74fc292c85a14e07ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_78e733006a4726c1af0b03cf9e8b44b3554c751e137d73ef20dddd2ea9c32efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78e733006a4726c1af0b03cf9e8b44b3554c751e137d73ef20dddd2ea9c32efb->enter($__internal_78e733006a4726c1af0b03cf9e8b44b3554c751e137d73ef20dddd2ea9c32efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_c9072d2c9cde6958ac7570e7075e607abee95d2de851fb74fc292c85a14e07ac->leave($__internal_c9072d2c9cde6958ac7570e7075e607abee95d2de851fb74fc292c85a14e07ac_prof);

        
        $__internal_78e733006a4726c1af0b03cf9e8b44b3554c751e137d73ef20dddd2ea9c32efb->leave($__internal_78e733006a4726c1af0b03cf9e8b44b3554c751e137d73ef20dddd2ea9c32efb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/twig-bundle/Resources/views/Exception/exception.css.twig");
    }
}
