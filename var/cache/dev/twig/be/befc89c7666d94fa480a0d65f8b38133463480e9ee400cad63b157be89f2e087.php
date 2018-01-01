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
        $__internal_912bc6086563fb63f6f18643ff7e85f6f81fac9bdee8698ef19a0487daa84c71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_912bc6086563fb63f6f18643ff7e85f6f81fac9bdee8698ef19a0487daa84c71->enter($__internal_912bc6086563fb63f6f18643ff7e85f6f81fac9bdee8698ef19a0487daa84c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_b0d329795a41db6240d5677fc7935564d8d33988840bcddd8abcb17e80f1d3a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d329795a41db6240d5677fc7935564d8d33988840bcddd8abcb17e80f1d3a4->enter($__internal_b0d329795a41db6240d5677fc7935564d8d33988840bcddd8abcb17e80f1d3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_912bc6086563fb63f6f18643ff7e85f6f81fac9bdee8698ef19a0487daa84c71->leave($__internal_912bc6086563fb63f6f18643ff7e85f6f81fac9bdee8698ef19a0487daa84c71_prof);

        
        $__internal_b0d329795a41db6240d5677fc7935564d8d33988840bcddd8abcb17e80f1d3a4->leave($__internal_b0d329795a41db6240d5677fc7935564d8d33988840bcddd8abcb17e80f1d3a4_prof);

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
", "@Framework/Form/textarea_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/textarea_widget.html.php");
    }
}
