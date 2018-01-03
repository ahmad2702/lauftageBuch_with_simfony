<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b10f9d993d41016a804889abad60cacf47b60e99b81da28a15674978aded8acc extends Twig_Template
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
        $__internal_0920fabd5b2db3efbfe71ae98266fcaba470028185ca8d576acdea14ece909e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0920fabd5b2db3efbfe71ae98266fcaba470028185ca8d576acdea14ece909e6->enter($__internal_0920fabd5b2db3efbfe71ae98266fcaba470028185ca8d576acdea14ece909e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_3a856738f676098558f9122d415a4b44dac27818f4968062984b1497461fc796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a856738f676098558f9122d415a4b44dac27818f4968062984b1497461fc796->enter($__internal_3a856738f676098558f9122d415a4b44dac27818f4968062984b1497461fc796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_0920fabd5b2db3efbfe71ae98266fcaba470028185ca8d576acdea14ece909e6->leave($__internal_0920fabd5b2db3efbfe71ae98266fcaba470028185ca8d576acdea14ece909e6_prof);

        
        $__internal_3a856738f676098558f9122d415a4b44dac27818f4968062984b1497461fc796->leave($__internal_3a856738f676098558f9122d415a4b44dac27818f4968062984b1497461fc796_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}
