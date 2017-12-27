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
        $__internal_81c91e58535b58e915806118912bed0d074cb99093219110f1a3b49a1e956e3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81c91e58535b58e915806118912bed0d074cb99093219110f1a3b49a1e956e3e->enter($__internal_81c91e58535b58e915806118912bed0d074cb99093219110f1a3b49a1e956e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_aa9480b20e2c5d537618d0de88350d16ae7d64d5ea8d6ce2fcfc7c767d36c137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9480b20e2c5d537618d0de88350d16ae7d64d5ea8d6ce2fcfc7c767d36c137->enter($__internal_aa9480b20e2c5d537618d0de88350d16ae7d64d5ea8d6ce2fcfc7c767d36c137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_81c91e58535b58e915806118912bed0d074cb99093219110f1a3b49a1e956e3e->leave($__internal_81c91e58535b58e915806118912bed0d074cb99093219110f1a3b49a1e956e3e_prof);

        
        $__internal_aa9480b20e2c5d537618d0de88350d16ae7d64d5ea8d6ce2fcfc7c767d36c137->leave($__internal_aa9480b20e2c5d537618d0de88350d16ae7d64d5ea8d6ce2fcfc7c767d36c137_prof);

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
