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
        $__internal_f9a7dbcc14196d63ea1c53a4caa62eac697c6869bb5d84a6dc83948452f7a038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9a7dbcc14196d63ea1c53a4caa62eac697c6869bb5d84a6dc83948452f7a038->enter($__internal_f9a7dbcc14196d63ea1c53a4caa62eac697c6869bb5d84a6dc83948452f7a038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_e486e0e6fc2769a2a8ad7d4167973132b6be4dfc468f3b546bfabe321a8cfe38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e486e0e6fc2769a2a8ad7d4167973132b6be4dfc468f3b546bfabe321a8cfe38->enter($__internal_e486e0e6fc2769a2a8ad7d4167973132b6be4dfc468f3b546bfabe321a8cfe38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f9a7dbcc14196d63ea1c53a4caa62eac697c6869bb5d84a6dc83948452f7a038->leave($__internal_f9a7dbcc14196d63ea1c53a4caa62eac697c6869bb5d84a6dc83948452f7a038_prof);

        
        $__internal_e486e0e6fc2769a2a8ad7d4167973132b6be4dfc468f3b546bfabe321a8cfe38->leave($__internal_e486e0e6fc2769a2a8ad7d4167973132b6be4dfc468f3b546bfabe321a8cfe38_prof);

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
