<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d1d2b64cc590765c1f98ac9a8e4ebb5c734b980c7afaabf4646f5ed379b8e9de extends Twig_Template
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
        $__internal_e5aef5c127f689c7729516db13b05f849c46fad6c93ee32f7284cd7fc0704b31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5aef5c127f689c7729516db13b05f849c46fad6c93ee32f7284cd7fc0704b31->enter($__internal_e5aef5c127f689c7729516db13b05f849c46fad6c93ee32f7284cd7fc0704b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_d716863c1e2218227386dc1f64e232df76f4ef39ec1f41fb986f7c0d52ad54b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d716863c1e2218227386dc1f64e232df76f4ef39ec1f41fb986f7c0d52ad54b9->enter($__internal_d716863c1e2218227386dc1f64e232df76f4ef39ec1f41fb986f7c0d52ad54b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e5aef5c127f689c7729516db13b05f849c46fad6c93ee32f7284cd7fc0704b31->leave($__internal_e5aef5c127f689c7729516db13b05f849c46fad6c93ee32f7284cd7fc0704b31_prof);

        
        $__internal_d716863c1e2218227386dc1f64e232df76f4ef39ec1f41fb986f7c0d52ad54b9->leave($__internal_d716863c1e2218227386dc1f64e232df76f4ef39ec1f41fb986f7c0d52ad54b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/radio_widget.html.php");
    }
}
