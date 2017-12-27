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
        $__internal_18bc23826a37f66a4965fbe84235ff81d49cb444e5eb597ca309f3c49a8f4223 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18bc23826a37f66a4965fbe84235ff81d49cb444e5eb597ca309f3c49a8f4223->enter($__internal_18bc23826a37f66a4965fbe84235ff81d49cb444e5eb597ca309f3c49a8f4223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_69e348ad5058ee9247db4dc520b508bfaf3eb639a049ee8c01209f8a1cbd619b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e348ad5058ee9247db4dc520b508bfaf3eb639a049ee8c01209f8a1cbd619b->enter($__internal_69e348ad5058ee9247db4dc520b508bfaf3eb639a049ee8c01209f8a1cbd619b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_18bc23826a37f66a4965fbe84235ff81d49cb444e5eb597ca309f3c49a8f4223->leave($__internal_18bc23826a37f66a4965fbe84235ff81d49cb444e5eb597ca309f3c49a8f4223_prof);

        
        $__internal_69e348ad5058ee9247db4dc520b508bfaf3eb639a049ee8c01209f8a1cbd619b->leave($__internal_69e348ad5058ee9247db4dc520b508bfaf3eb639a049ee8c01209f8a1cbd619b_prof);

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
