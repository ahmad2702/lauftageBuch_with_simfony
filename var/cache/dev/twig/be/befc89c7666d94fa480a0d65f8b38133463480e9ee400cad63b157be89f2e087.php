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
        $__internal_c8639e5c057b45263039ac042d22b7da2396b0045f00fd121a9662ede8e37f17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8639e5c057b45263039ac042d22b7da2396b0045f00fd121a9662ede8e37f17->enter($__internal_c8639e5c057b45263039ac042d22b7da2396b0045f00fd121a9662ede8e37f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_c6fbd9db4934e3f46a8490decedf408414107c02f32e52910b30f28ab7489a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6fbd9db4934e3f46a8490decedf408414107c02f32e52910b30f28ab7489a31->enter($__internal_c6fbd9db4934e3f46a8490decedf408414107c02f32e52910b30f28ab7489a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c8639e5c057b45263039ac042d22b7da2396b0045f00fd121a9662ede8e37f17->leave($__internal_c8639e5c057b45263039ac042d22b7da2396b0045f00fd121a9662ede8e37f17_prof);

        
        $__internal_c6fbd9db4934e3f46a8490decedf408414107c02f32e52910b30f28ab7489a31->leave($__internal_c6fbd9db4934e3f46a8490decedf408414107c02f32e52910b30f28ab7489a31_prof);

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
