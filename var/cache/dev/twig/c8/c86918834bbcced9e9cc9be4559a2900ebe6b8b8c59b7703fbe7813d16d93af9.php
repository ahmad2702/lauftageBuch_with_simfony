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
        $__internal_e3afe580ca1cf99b8da41d7c6fd3225c88264deedbdbfb857297bbeb48cb4515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3afe580ca1cf99b8da41d7c6fd3225c88264deedbdbfb857297bbeb48cb4515->enter($__internal_e3afe580ca1cf99b8da41d7c6fd3225c88264deedbdbfb857297bbeb48cb4515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_28da31b919233e5137c07e3c4229b013d3e581ff4e54af5a7eb78ea7f8973964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28da31b919233e5137c07e3c4229b013d3e581ff4e54af5a7eb78ea7f8973964->enter($__internal_28da31b919233e5137c07e3c4229b013d3e581ff4e54af5a7eb78ea7f8973964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e3afe580ca1cf99b8da41d7c6fd3225c88264deedbdbfb857297bbeb48cb4515->leave($__internal_e3afe580ca1cf99b8da41d7c6fd3225c88264deedbdbfb857297bbeb48cb4515_prof);

        
        $__internal_28da31b919233e5137c07e3c4229b013d3e581ff4e54af5a7eb78ea7f8973964->leave($__internal_28da31b919233e5137c07e3c4229b013d3e581ff4e54af5a7eb78ea7f8973964_prof);

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
