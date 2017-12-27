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
        $__internal_051e2863ef0d83be2b74d8f0fa77de2f46e939086ab39ee567f465d786eb9673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_051e2863ef0d83be2b74d8f0fa77de2f46e939086ab39ee567f465d786eb9673->enter($__internal_051e2863ef0d83be2b74d8f0fa77de2f46e939086ab39ee567f465d786eb9673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_ec92a3a7a1c911f925b0f6105ecb92371aece08d6d97310dd60acfb79958737b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec92a3a7a1c911f925b0f6105ecb92371aece08d6d97310dd60acfb79958737b->enter($__internal_ec92a3a7a1c911f925b0f6105ecb92371aece08d6d97310dd60acfb79958737b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_051e2863ef0d83be2b74d8f0fa77de2f46e939086ab39ee567f465d786eb9673->leave($__internal_051e2863ef0d83be2b74d8f0fa77de2f46e939086ab39ee567f465d786eb9673_prof);

        
        $__internal_ec92a3a7a1c911f925b0f6105ecb92371aece08d6d97310dd60acfb79958737b->leave($__internal_ec92a3a7a1c911f925b0f6105ecb92371aece08d6d97310dd60acfb79958737b_prof);

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
