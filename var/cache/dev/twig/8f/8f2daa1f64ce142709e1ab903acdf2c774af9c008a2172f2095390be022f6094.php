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
        $__internal_aa1cf1ad6a8585f838ff4c3869b641d1cc947646d6fab5c4a81a001c6c9f0d79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa1cf1ad6a8585f838ff4c3869b641d1cc947646d6fab5c4a81a001c6c9f0d79->enter($__internal_aa1cf1ad6a8585f838ff4c3869b641d1cc947646d6fab5c4a81a001c6c9f0d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_41a2d14a49fd37c08a2b372f5a36629bba4964fed9b493a60fb35a9d777716da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a2d14a49fd37c08a2b372f5a36629bba4964fed9b493a60fb35a9d777716da->enter($__internal_41a2d14a49fd37c08a2b372f5a36629bba4964fed9b493a60fb35a9d777716da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_aa1cf1ad6a8585f838ff4c3869b641d1cc947646d6fab5c4a81a001c6c9f0d79->leave($__internal_aa1cf1ad6a8585f838ff4c3869b641d1cc947646d6fab5c4a81a001c6c9f0d79_prof);

        
        $__internal_41a2d14a49fd37c08a2b372f5a36629bba4964fed9b493a60fb35a9d777716da->leave($__internal_41a2d14a49fd37c08a2b372f5a36629bba4964fed9b493a60fb35a9d777716da_prof);

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
", "@Framework/Form/form_widget_compound.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
