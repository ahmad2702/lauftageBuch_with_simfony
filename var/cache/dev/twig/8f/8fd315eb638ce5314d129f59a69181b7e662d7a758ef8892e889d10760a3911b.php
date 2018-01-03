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
        $__internal_4e69ccfe1f15f69a808a69aca25e18c399235de99135506b984b278c30f5a7ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e69ccfe1f15f69a808a69aca25e18c399235de99135506b984b278c30f5a7ae->enter($__internal_4e69ccfe1f15f69a808a69aca25e18c399235de99135506b984b278c30f5a7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_b35fb30b8ad3a36a17f5343ad6b141dfd9f91632f4ebbd7f51eb7d2b5cce66e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b35fb30b8ad3a36a17f5343ad6b141dfd9f91632f4ebbd7f51eb7d2b5cce66e9->enter($__internal_b35fb30b8ad3a36a17f5343ad6b141dfd9f91632f4ebbd7f51eb7d2b5cce66e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4e69ccfe1f15f69a808a69aca25e18c399235de99135506b984b278c30f5a7ae->leave($__internal_4e69ccfe1f15f69a808a69aca25e18c399235de99135506b984b278c30f5a7ae_prof);

        
        $__internal_b35fb30b8ad3a36a17f5343ad6b141dfd9f91632f4ebbd7f51eb7d2b5cce66e9->leave($__internal_b35fb30b8ad3a36a17f5343ad6b141dfd9f91632f4ebbd7f51eb7d2b5cce66e9_prof);

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
