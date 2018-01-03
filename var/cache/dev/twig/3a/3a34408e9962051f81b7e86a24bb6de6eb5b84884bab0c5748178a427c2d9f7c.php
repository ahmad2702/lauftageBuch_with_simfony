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
        $__internal_81a314e9bbbe5479d25bb325c75db4b796e5ca7c7113f3aaa2f7cf14e10b444e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81a314e9bbbe5479d25bb325c75db4b796e5ca7c7113f3aaa2f7cf14e10b444e->enter($__internal_81a314e9bbbe5479d25bb325c75db4b796e5ca7c7113f3aaa2f7cf14e10b444e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_e16b39b69a1cbb88d981554cb2f8e81feab937e576ab7545a6b69376a2cbc706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e16b39b69a1cbb88d981554cb2f8e81feab937e576ab7545a6b69376a2cbc706->enter($__internal_e16b39b69a1cbb88d981554cb2f8e81feab937e576ab7545a6b69376a2cbc706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_81a314e9bbbe5479d25bb325c75db4b796e5ca7c7113f3aaa2f7cf14e10b444e->leave($__internal_81a314e9bbbe5479d25bb325c75db4b796e5ca7c7113f3aaa2f7cf14e10b444e_prof);

        
        $__internal_e16b39b69a1cbb88d981554cb2f8e81feab937e576ab7545a6b69376a2cbc706->leave($__internal_e16b39b69a1cbb88d981554cb2f8e81feab937e576ab7545a6b69376a2cbc706_prof);

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
