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
        $__internal_9ca7e387471fd09c8bffb2dbeaa729d3aa781d1538edd086fdfb16be454bc42b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ca7e387471fd09c8bffb2dbeaa729d3aa781d1538edd086fdfb16be454bc42b->enter($__internal_9ca7e387471fd09c8bffb2dbeaa729d3aa781d1538edd086fdfb16be454bc42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_c511c05108bae23801e6e2705c2d9b7e77a9fa328078a8f80217960ffe6c8f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c511c05108bae23801e6e2705c2d9b7e77a9fa328078a8f80217960ffe6c8f1e->enter($__internal_c511c05108bae23801e6e2705c2d9b7e77a9fa328078a8f80217960ffe6c8f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9ca7e387471fd09c8bffb2dbeaa729d3aa781d1538edd086fdfb16be454bc42b->leave($__internal_9ca7e387471fd09c8bffb2dbeaa729d3aa781d1538edd086fdfb16be454bc42b_prof);

        
        $__internal_c511c05108bae23801e6e2705c2d9b7e77a9fa328078a8f80217960ffe6c8f1e->leave($__internal_c511c05108bae23801e6e2705c2d9b7e77a9fa328078a8f80217960ffe6c8f1e_prof);

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
