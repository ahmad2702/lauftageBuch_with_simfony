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
        $__internal_a848b6290cde3c8fd4f1d3497efa762d6a0e6b293825fa1cc6cd3b6cbaf3d38a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a848b6290cde3c8fd4f1d3497efa762d6a0e6b293825fa1cc6cd3b6cbaf3d38a->enter($__internal_a848b6290cde3c8fd4f1d3497efa762d6a0e6b293825fa1cc6cd3b6cbaf3d38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_ce0a03e3c662b797e3a891377ed1ac429cd4f9a19c3603e5b159ad79915a0aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce0a03e3c662b797e3a891377ed1ac429cd4f9a19c3603e5b159ad79915a0aa0->enter($__internal_ce0a03e3c662b797e3a891377ed1ac429cd4f9a19c3603e5b159ad79915a0aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a848b6290cde3c8fd4f1d3497efa762d6a0e6b293825fa1cc6cd3b6cbaf3d38a->leave($__internal_a848b6290cde3c8fd4f1d3497efa762d6a0e6b293825fa1cc6cd3b6cbaf3d38a_prof);

        
        $__internal_ce0a03e3c662b797e3a891377ed1ac429cd4f9a19c3603e5b159ad79915a0aa0->leave($__internal_ce0a03e3c662b797e3a891377ed1ac429cd4f9a19c3603e5b159ad79915a0aa0_prof);

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
