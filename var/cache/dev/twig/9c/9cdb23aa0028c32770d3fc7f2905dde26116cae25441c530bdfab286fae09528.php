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
        $__internal_97cb6e8cf50bc46a6ab12892957384151c9cc554ed60fc0e2b44bfdff81fe8b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97cb6e8cf50bc46a6ab12892957384151c9cc554ed60fc0e2b44bfdff81fe8b5->enter($__internal_97cb6e8cf50bc46a6ab12892957384151c9cc554ed60fc0e2b44bfdff81fe8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_c2bdf9ca751e8501ccbd3e1a4f8157082ff1ddf83ef2bfe8cfc378ab29bf5942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2bdf9ca751e8501ccbd3e1a4f8157082ff1ddf83ef2bfe8cfc378ab29bf5942->enter($__internal_c2bdf9ca751e8501ccbd3e1a4f8157082ff1ddf83ef2bfe8cfc378ab29bf5942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_97cb6e8cf50bc46a6ab12892957384151c9cc554ed60fc0e2b44bfdff81fe8b5->leave($__internal_97cb6e8cf50bc46a6ab12892957384151c9cc554ed60fc0e2b44bfdff81fe8b5_prof);

        
        $__internal_c2bdf9ca751e8501ccbd3e1a4f8157082ff1ddf83ef2bfe8cfc378ab29bf5942->leave($__internal_c2bdf9ca751e8501ccbd3e1a4f8157082ff1ddf83ef2bfe8cfc378ab29bf5942_prof);

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
", "@Framework/Form/radio_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/radio_widget.html.php");
    }
}
