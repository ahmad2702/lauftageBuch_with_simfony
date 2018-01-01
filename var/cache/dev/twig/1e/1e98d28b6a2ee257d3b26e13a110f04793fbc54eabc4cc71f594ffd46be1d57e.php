<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_77232fa5335202a291631f7e022fbfd16a39481fc74645dae40003a7b1352b81 extends Twig_Template
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
        $__internal_26e9b496341f5d318a4e3b5bc4b08772f47dca77caa0359d013e67f661f02025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26e9b496341f5d318a4e3b5bc4b08772f47dca77caa0359d013e67f661f02025->enter($__internal_26e9b496341f5d318a4e3b5bc4b08772f47dca77caa0359d013e67f661f02025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_f624d85b092afdf935193403bb0c80aa773c066a42b389313d3c6a099d091713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f624d85b092afdf935193403bb0c80aa773c066a42b389313d3c6a099d091713->enter($__internal_f624d85b092afdf935193403bb0c80aa773c066a42b389313d3c6a099d091713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_26e9b496341f5d318a4e3b5bc4b08772f47dca77caa0359d013e67f661f02025->leave($__internal_26e9b496341f5d318a4e3b5bc4b08772f47dca77caa0359d013e67f661f02025_prof);

        
        $__internal_f624d85b092afdf935193403bb0c80aa773c066a42b389313d3c6a099d091713->leave($__internal_f624d85b092afdf935193403bb0c80aa773c066a42b389313d3c6a099d091713_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/form_row.html.php");
    }
}
