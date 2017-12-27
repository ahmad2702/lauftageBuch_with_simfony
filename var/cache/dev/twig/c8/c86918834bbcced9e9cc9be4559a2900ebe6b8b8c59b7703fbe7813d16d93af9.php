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
        $__internal_65de7b0b0112c8a6895d711c742ab6a046d051ac491b96e0aae57675647820a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65de7b0b0112c8a6895d711c742ab6a046d051ac491b96e0aae57675647820a8->enter($__internal_65de7b0b0112c8a6895d711c742ab6a046d051ac491b96e0aae57675647820a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_917d81225d08ea65b2694e5a83b16b0079c053228b7ad60511f6dbaec5d4bbb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_917d81225d08ea65b2694e5a83b16b0079c053228b7ad60511f6dbaec5d4bbb0->enter($__internal_917d81225d08ea65b2694e5a83b16b0079c053228b7ad60511f6dbaec5d4bbb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_65de7b0b0112c8a6895d711c742ab6a046d051ac491b96e0aae57675647820a8->leave($__internal_65de7b0b0112c8a6895d711c742ab6a046d051ac491b96e0aae57675647820a8_prof);

        
        $__internal_917d81225d08ea65b2694e5a83b16b0079c053228b7ad60511f6dbaec5d4bbb0->leave($__internal_917d81225d08ea65b2694e5a83b16b0079c053228b7ad60511f6dbaec5d4bbb0_prof);

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
", "@Framework/Form/form_enctype.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}
