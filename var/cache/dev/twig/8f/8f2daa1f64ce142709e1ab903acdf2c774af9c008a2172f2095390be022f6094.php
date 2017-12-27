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
        $__internal_1ddc7ae102fb3400d41bc4cba6acb040246c4e643f7968907cf1053e4aa5f539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ddc7ae102fb3400d41bc4cba6acb040246c4e643f7968907cf1053e4aa5f539->enter($__internal_1ddc7ae102fb3400d41bc4cba6acb040246c4e643f7968907cf1053e4aa5f539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_02d3e702218040a7e805a83de1a56cba1b0c3a8ff90733fb2e68d2fd70d7111d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d3e702218040a7e805a83de1a56cba1b0c3a8ff90733fb2e68d2fd70d7111d->enter($__internal_02d3e702218040a7e805a83de1a56cba1b0c3a8ff90733fb2e68d2fd70d7111d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_1ddc7ae102fb3400d41bc4cba6acb040246c4e643f7968907cf1053e4aa5f539->leave($__internal_1ddc7ae102fb3400d41bc4cba6acb040246c4e643f7968907cf1053e4aa5f539_prof);

        
        $__internal_02d3e702218040a7e805a83de1a56cba1b0c3a8ff90733fb2e68d2fd70d7111d->leave($__internal_02d3e702218040a7e805a83de1a56cba1b0c3a8ff90733fb2e68d2fd70d7111d_prof);

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
