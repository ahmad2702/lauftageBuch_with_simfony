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
        $__internal_aa6ab3971d66dc24bdedb97c07973266ba998f097d19b2b801c4bdb3390ad16e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa6ab3971d66dc24bdedb97c07973266ba998f097d19b2b801c4bdb3390ad16e->enter($__internal_aa6ab3971d66dc24bdedb97c07973266ba998f097d19b2b801c4bdb3390ad16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_2c4d534930c83ea21163f65dc6df5146058d3c66fa26a55668fca4a1547d5640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c4d534930c83ea21163f65dc6df5146058d3c66fa26a55668fca4a1547d5640->enter($__internal_2c4d534930c83ea21163f65dc6df5146058d3c66fa26a55668fca4a1547d5640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_aa6ab3971d66dc24bdedb97c07973266ba998f097d19b2b801c4bdb3390ad16e->leave($__internal_aa6ab3971d66dc24bdedb97c07973266ba998f097d19b2b801c4bdb3390ad16e_prof);

        
        $__internal_2c4d534930c83ea21163f65dc6df5146058d3c66fa26a55668fca4a1547d5640->leave($__internal_2c4d534930c83ea21163f65dc6df5146058d3c66fa26a55668fca4a1547d5640_prof);

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
