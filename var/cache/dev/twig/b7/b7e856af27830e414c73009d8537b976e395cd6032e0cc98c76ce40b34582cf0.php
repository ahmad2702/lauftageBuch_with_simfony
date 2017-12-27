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
        $__internal_c726588500bce3167bf6e1db1c2f04aeddcf8cf4bb9720465eeff748e9880f63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c726588500bce3167bf6e1db1c2f04aeddcf8cf4bb9720465eeff748e9880f63->enter($__internal_c726588500bce3167bf6e1db1c2f04aeddcf8cf4bb9720465eeff748e9880f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_027055e0a89fa46a73497acb7aebb0887411c39ddcdc2398195967a1066628b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027055e0a89fa46a73497acb7aebb0887411c39ddcdc2398195967a1066628b8->enter($__internal_027055e0a89fa46a73497acb7aebb0887411c39ddcdc2398195967a1066628b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c726588500bce3167bf6e1db1c2f04aeddcf8cf4bb9720465eeff748e9880f63->leave($__internal_c726588500bce3167bf6e1db1c2f04aeddcf8cf4bb9720465eeff748e9880f63_prof);

        
        $__internal_027055e0a89fa46a73497acb7aebb0887411c39ddcdc2398195967a1066628b8->leave($__internal_027055e0a89fa46a73497acb7aebb0887411c39ddcdc2398195967a1066628b8_prof);

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
