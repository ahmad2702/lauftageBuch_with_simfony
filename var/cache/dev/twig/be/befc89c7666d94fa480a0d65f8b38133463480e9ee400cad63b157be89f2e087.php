<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_58079b6d336c9432689e13464d25509701e6820ab10f256181b5775337ad6765 extends Twig_Template
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
        $__internal_ff3b670263191d409654630892e22936e1f5563554106160da418b9f2dd7b523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff3b670263191d409654630892e22936e1f5563554106160da418b9f2dd7b523->enter($__internal_ff3b670263191d409654630892e22936e1f5563554106160da418b9f2dd7b523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_0dfafaaea1a4be4e1b33a49ed831a3170de8227301ce8526dd016ae11072edf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dfafaaea1a4be4e1b33a49ed831a3170de8227301ce8526dd016ae11072edf9->enter($__internal_0dfafaaea1a4be4e1b33a49ed831a3170de8227301ce8526dd016ae11072edf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ff3b670263191d409654630892e22936e1f5563554106160da418b9f2dd7b523->leave($__internal_ff3b670263191d409654630892e22936e1f5563554106160da418b9f2dd7b523_prof);

        
        $__internal_0dfafaaea1a4be4e1b33a49ed831a3170de8227301ce8526dd016ae11072edf9->leave($__internal_0dfafaaea1a4be4e1b33a49ed831a3170de8227301ce8526dd016ae11072edf9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/textarea_widget.html.php");
    }
}
