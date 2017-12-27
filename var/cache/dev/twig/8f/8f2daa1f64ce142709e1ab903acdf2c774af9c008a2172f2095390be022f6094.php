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
        $__internal_bb8f03a43880a1500f9098eb2f2bfa7a5037199c3a35f5691d1be999b60f66a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb8f03a43880a1500f9098eb2f2bfa7a5037199c3a35f5691d1be999b60f66a4->enter($__internal_bb8f03a43880a1500f9098eb2f2bfa7a5037199c3a35f5691d1be999b60f66a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_49dd88368a03313bae214b0330f2fe40f491275926d08ad2932fc09066cdd8c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49dd88368a03313bae214b0330f2fe40f491275926d08ad2932fc09066cdd8c1->enter($__internal_49dd88368a03313bae214b0330f2fe40f491275926d08ad2932fc09066cdd8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_bb8f03a43880a1500f9098eb2f2bfa7a5037199c3a35f5691d1be999b60f66a4->leave($__internal_bb8f03a43880a1500f9098eb2f2bfa7a5037199c3a35f5691d1be999b60f66a4_prof);

        
        $__internal_49dd88368a03313bae214b0330f2fe40f491275926d08ad2932fc09066cdd8c1->leave($__internal_49dd88368a03313bae214b0330f2fe40f491275926d08ad2932fc09066cdd8c1_prof);

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
