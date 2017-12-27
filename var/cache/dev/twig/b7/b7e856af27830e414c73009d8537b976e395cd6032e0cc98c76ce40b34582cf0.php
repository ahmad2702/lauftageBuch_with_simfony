<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_9df71321cc61a979c35049c2b91cef680cf77582e32bf5d1fc7cddb5407a0a95 extends Twig_Template
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
        $__internal_5462450d6c911353ed28d8bb88ee09ee2bddd5335956248cb265e331d82bc74a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5462450d6c911353ed28d8bb88ee09ee2bddd5335956248cb265e331d82bc74a->enter($__internal_5462450d6c911353ed28d8bb88ee09ee2bddd5335956248cb265e331d82bc74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_8bea0a6a64c56ee8191f04cc516865cb287f9063c7deab89f386b1f05ee8efe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bea0a6a64c56ee8191f04cc516865cb287f9063c7deab89f386b1f05ee8efe0->enter($__internal_8bea0a6a64c56ee8191f04cc516865cb287f9063c7deab89f386b1f05ee8efe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5462450d6c911353ed28d8bb88ee09ee2bddd5335956248cb265e331d82bc74a->leave($__internal_5462450d6c911353ed28d8bb88ee09ee2bddd5335956248cb265e331d82bc74a_prof);

        
        $__internal_8bea0a6a64c56ee8191f04cc516865cb287f9063c7deab89f386b1f05ee8efe0->leave($__internal_8bea0a6a64c56ee8191f04cc516865cb287f9063c7deab89f386b1f05ee8efe0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/form_widget.html.php");
    }
}
