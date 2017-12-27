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
        $__internal_ef0dd64fb87dee2d1798a32aa63dce40155b3418ee961e5d5df3c2d841a235aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef0dd64fb87dee2d1798a32aa63dce40155b3418ee961e5d5df3c2d841a235aa->enter($__internal_ef0dd64fb87dee2d1798a32aa63dce40155b3418ee961e5d5df3c2d841a235aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_8a9609909b53216e5050125c52fe95d6be3de7729a9a533f4f8b277478e8ae11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a9609909b53216e5050125c52fe95d6be3de7729a9a533f4f8b277478e8ae11->enter($__internal_8a9609909b53216e5050125c52fe95d6be3de7729a9a533f4f8b277478e8ae11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ef0dd64fb87dee2d1798a32aa63dce40155b3418ee961e5d5df3c2d841a235aa->leave($__internal_ef0dd64fb87dee2d1798a32aa63dce40155b3418ee961e5d5df3c2d841a235aa_prof);

        
        $__internal_8a9609909b53216e5050125c52fe95d6be3de7729a9a533f4f8b277478e8ae11->leave($__internal_8a9609909b53216e5050125c52fe95d6be3de7729a9a533f4f8b277478e8ae11_prof);

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
