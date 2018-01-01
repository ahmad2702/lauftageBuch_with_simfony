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
        $__internal_0e371bce319ddd92edf5c893cab8ad73c7de5f13cf60aa35949c01408dc4d06c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e371bce319ddd92edf5c893cab8ad73c7de5f13cf60aa35949c01408dc4d06c->enter($__internal_0e371bce319ddd92edf5c893cab8ad73c7de5f13cf60aa35949c01408dc4d06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_dd67b4e88258b4a593cf2cd10ea99e8ede07de96d189069111fbf2351aaadec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd67b4e88258b4a593cf2cd10ea99e8ede07de96d189069111fbf2351aaadec9->enter($__internal_dd67b4e88258b4a593cf2cd10ea99e8ede07de96d189069111fbf2351aaadec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0e371bce319ddd92edf5c893cab8ad73c7de5f13cf60aa35949c01408dc4d06c->leave($__internal_0e371bce319ddd92edf5c893cab8ad73c7de5f13cf60aa35949c01408dc4d06c_prof);

        
        $__internal_dd67b4e88258b4a593cf2cd10ea99e8ede07de96d189069111fbf2351aaadec9->leave($__internal_dd67b4e88258b4a593cf2cd10ea99e8ede07de96d189069111fbf2351aaadec9_prof);

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
