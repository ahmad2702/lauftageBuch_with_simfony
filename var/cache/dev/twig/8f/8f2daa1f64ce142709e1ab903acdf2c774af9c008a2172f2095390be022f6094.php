<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_fdd53bc02f1e6db8b1e1bfbbad3c38950499d00b9e04ab61671de66d77d0d6f0 extends Twig_Template
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
        $__internal_bc839100619a42f3befd62d743822c9000a316107a11645362dfb77a50e957dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc839100619a42f3befd62d743822c9000a316107a11645362dfb77a50e957dc->enter($__internal_bc839100619a42f3befd62d743822c9000a316107a11645362dfb77a50e957dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_a1086fa5c8f7d45284300b303a68ee9f1140c78e622a6404dc8d4b15e04dc2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1086fa5c8f7d45284300b303a68ee9f1140c78e622a6404dc8d4b15e04dc2bd->enter($__internal_a1086fa5c8f7d45284300b303a68ee9f1140c78e622a6404dc8d4b15e04dc2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_bc839100619a42f3befd62d743822c9000a316107a11645362dfb77a50e957dc->leave($__internal_bc839100619a42f3befd62d743822c9000a316107a11645362dfb77a50e957dc_prof);

        
        $__internal_a1086fa5c8f7d45284300b303a68ee9f1140c78e622a6404dc8d4b15e04dc2bd->leave($__internal_a1086fa5c8f7d45284300b303a68ee9f1140c78e622a6404dc8d4b15e04dc2bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
