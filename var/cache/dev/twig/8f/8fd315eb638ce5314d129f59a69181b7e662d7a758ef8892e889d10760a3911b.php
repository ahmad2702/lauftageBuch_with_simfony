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
        $__internal_5a8b20b9fe76b0a865e20d0f8cf3d5b1b9b33fcd9e49149a2b58770f1e512f8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a8b20b9fe76b0a865e20d0f8cf3d5b1b9b33fcd9e49149a2b58770f1e512f8b->enter($__internal_5a8b20b9fe76b0a865e20d0f8cf3d5b1b9b33fcd9e49149a2b58770f1e512f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_9d9dff035d211461f1211a6e15c97345eb3b9c92932cc5592d83d5a80ec016a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d9dff035d211461f1211a6e15c97345eb3b9c92932cc5592d83d5a80ec016a9->enter($__internal_9d9dff035d211461f1211a6e15c97345eb3b9c92932cc5592d83d5a80ec016a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_5a8b20b9fe76b0a865e20d0f8cf3d5b1b9b33fcd9e49149a2b58770f1e512f8b->leave($__internal_5a8b20b9fe76b0a865e20d0f8cf3d5b1b9b33fcd9e49149a2b58770f1e512f8b_prof);

        
        $__internal_9d9dff035d211461f1211a6e15c97345eb3b9c92932cc5592d83d5a80ec016a9->leave($__internal_9d9dff035d211461f1211a6e15c97345eb3b9c92932cc5592d83d5a80ec016a9_prof);

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
", "@Framework/Form/datetime_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/datetime_widget.html.php");
    }
}
