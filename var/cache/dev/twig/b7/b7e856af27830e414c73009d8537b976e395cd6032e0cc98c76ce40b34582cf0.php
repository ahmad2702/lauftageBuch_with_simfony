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
        $__internal_12c21c92dd855549c651f209c4bf2963c4a2133af74267d10d0e719e13317647 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12c21c92dd855549c651f209c4bf2963c4a2133af74267d10d0e719e13317647->enter($__internal_12c21c92dd855549c651f209c4bf2963c4a2133af74267d10d0e719e13317647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_a6d3497447c771f834f72b56c20c805a97493f513465069c956d782528da8964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6d3497447c771f834f72b56c20c805a97493f513465069c956d782528da8964->enter($__internal_a6d3497447c771f834f72b56c20c805a97493f513465069c956d782528da8964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_12c21c92dd855549c651f209c4bf2963c4a2133af74267d10d0e719e13317647->leave($__internal_12c21c92dd855549c651f209c4bf2963c4a2133af74267d10d0e719e13317647_prof);

        
        $__internal_a6d3497447c771f834f72b56c20c805a97493f513465069c956d782528da8964->leave($__internal_a6d3497447c771f834f72b56c20c805a97493f513465069c956d782528da8964_prof);

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
