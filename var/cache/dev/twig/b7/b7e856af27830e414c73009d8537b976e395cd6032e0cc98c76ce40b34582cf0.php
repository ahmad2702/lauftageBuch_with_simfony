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
        $__internal_be757a8452c6f167b3eb00ef867754aa3481476f0495f61d98ed77a5c835c0c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be757a8452c6f167b3eb00ef867754aa3481476f0495f61d98ed77a5c835c0c3->enter($__internal_be757a8452c6f167b3eb00ef867754aa3481476f0495f61d98ed77a5c835c0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_ea4f03a0408dbc5e7a06c33161566cd22eec82d5c07410fc0222960bd973ea5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea4f03a0408dbc5e7a06c33161566cd22eec82d5c07410fc0222960bd973ea5a->enter($__internal_ea4f03a0408dbc5e7a06c33161566cd22eec82d5c07410fc0222960bd973ea5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_be757a8452c6f167b3eb00ef867754aa3481476f0495f61d98ed77a5c835c0c3->leave($__internal_be757a8452c6f167b3eb00ef867754aa3481476f0495f61d98ed77a5c835c0c3_prof);

        
        $__internal_ea4f03a0408dbc5e7a06c33161566cd22eec82d5c07410fc0222960bd973ea5a->leave($__internal_ea4f03a0408dbc5e7a06c33161566cd22eec82d5c07410fc0222960bd973ea5a_prof);

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
