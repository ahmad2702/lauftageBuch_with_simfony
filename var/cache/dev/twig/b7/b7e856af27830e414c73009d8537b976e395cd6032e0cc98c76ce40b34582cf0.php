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
        $__internal_98920101d8a3a8471f42170c692f1f54ce0b16f3825398ce0fe096faf116e602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98920101d8a3a8471f42170c692f1f54ce0b16f3825398ce0fe096faf116e602->enter($__internal_98920101d8a3a8471f42170c692f1f54ce0b16f3825398ce0fe096faf116e602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_8a9ef64b7d9ec5fe70534226c60a744d58b17abbe2bcd76febf3805f8b4592ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a9ef64b7d9ec5fe70534226c60a744d58b17abbe2bcd76febf3805f8b4592ac->enter($__internal_8a9ef64b7d9ec5fe70534226c60a744d58b17abbe2bcd76febf3805f8b4592ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_98920101d8a3a8471f42170c692f1f54ce0b16f3825398ce0fe096faf116e602->leave($__internal_98920101d8a3a8471f42170c692f1f54ce0b16f3825398ce0fe096faf116e602_prof);

        
        $__internal_8a9ef64b7d9ec5fe70534226c60a744d58b17abbe2bcd76febf3805f8b4592ac->leave($__internal_8a9ef64b7d9ec5fe70534226c60a744d58b17abbe2bcd76febf3805f8b4592ac_prof);

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
", "@Framework/Form/form_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/form_widget.html.php");
    }
}
