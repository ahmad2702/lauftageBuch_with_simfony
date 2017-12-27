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
        $__internal_87ddfe6ad66632b395370045dd8464c68c96b9a8b476dd118e90a47da161a85d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87ddfe6ad66632b395370045dd8464c68c96b9a8b476dd118e90a47da161a85d->enter($__internal_87ddfe6ad66632b395370045dd8464c68c96b9a8b476dd118e90a47da161a85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_158662e15c61581d577b8d4e8f672dfcb518bf8abcca5934b82c5b1fcdc98757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158662e15c61581d577b8d4e8f672dfcb518bf8abcca5934b82c5b1fcdc98757->enter($__internal_158662e15c61581d577b8d4e8f672dfcb518bf8abcca5934b82c5b1fcdc98757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_87ddfe6ad66632b395370045dd8464c68c96b9a8b476dd118e90a47da161a85d->leave($__internal_87ddfe6ad66632b395370045dd8464c68c96b9a8b476dd118e90a47da161a85d_prof);

        
        $__internal_158662e15c61581d577b8d4e8f672dfcb518bf8abcca5934b82c5b1fcdc98757->leave($__internal_158662e15c61581d577b8d4e8f672dfcb518bf8abcca5934b82c5b1fcdc98757_prof);

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
", "@Framework/Form/choice_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget.html.php");
    }
}
