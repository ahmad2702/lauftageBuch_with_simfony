<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_1dd0ba09244e525f2a1da6f1de394f4bdbbc2325fe6efc0948a3821a5ad7b841 extends Twig_Template
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
        $__internal_da10fa6848a68f82c666640d921e7605ac5dc442e3710c478531e933fb47888a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da10fa6848a68f82c666640d921e7605ac5dc442e3710c478531e933fb47888a->enter($__internal_da10fa6848a68f82c666640d921e7605ac5dc442e3710c478531e933fb47888a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_74429a3801a0aa0763c4f9fcf9447f973b030885f78b7c4fca04bfcf4258f095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74429a3801a0aa0763c4f9fcf9447f973b030885f78b7c4fca04bfcf4258f095->enter($__internal_74429a3801a0aa0763c4f9fcf9447f973b030885f78b7c4fca04bfcf4258f095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_da10fa6848a68f82c666640d921e7605ac5dc442e3710c478531e933fb47888a->leave($__internal_da10fa6848a68f82c666640d921e7605ac5dc442e3710c478531e933fb47888a_prof);

        
        $__internal_74429a3801a0aa0763c4f9fcf9447f973b030885f78b7c4fca04bfcf4258f095->leave($__internal_74429a3801a0aa0763c4f9fcf9447f973b030885f78b7c4fca04bfcf4258f095_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/datetime_widget.html.php");
    }
}
