<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_e10b0188a2a73fd0b093698fef304517dfba6bfb7b753bbc55a995f9e6a6b79b extends Twig_Template
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
        $__internal_443c8f20673126a8b41084e7d6d850670bdf3c0925e4d552fee95d3d5c929ef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_443c8f20673126a8b41084e7d6d850670bdf3c0925e4d552fee95d3d5c929ef9->enter($__internal_443c8f20673126a8b41084e7d6d850670bdf3c0925e4d552fee95d3d5c929ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_bd90bf491d72e19f1bfb2155a6a416e45e71a0f9e739e44928130264ad7607e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd90bf491d72e19f1bfb2155a6a416e45e71a0f9e739e44928130264ad7607e7->enter($__internal_bd90bf491d72e19f1bfb2155a6a416e45e71a0f9e739e44928130264ad7607e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_443c8f20673126a8b41084e7d6d850670bdf3c0925e4d552fee95d3d5c929ef9->leave($__internal_443c8f20673126a8b41084e7d6d850670bdf3c0925e4d552fee95d3d5c929ef9_prof);

        
        $__internal_bd90bf491d72e19f1bfb2155a6a416e45e71a0f9e739e44928130264ad7607e7->leave($__internal_bd90bf491d72e19f1bfb2155a6a416e45e71a0f9e739e44928130264ad7607e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget.html.php");
    }
}
