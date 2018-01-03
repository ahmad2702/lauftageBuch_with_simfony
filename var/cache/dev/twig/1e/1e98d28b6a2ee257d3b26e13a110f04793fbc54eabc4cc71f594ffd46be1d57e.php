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
        $__internal_094a95411058ae7381f9c3c7955cc3c399f56427d2094fd2ef53b389c8b274dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_094a95411058ae7381f9c3c7955cc3c399f56427d2094fd2ef53b389c8b274dd->enter($__internal_094a95411058ae7381f9c3c7955cc3c399f56427d2094fd2ef53b389c8b274dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_43462590218246cb81e29b3c6a0e38b01dcaa15724e426e6c9fe3ee2f697e888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43462590218246cb81e29b3c6a0e38b01dcaa15724e426e6c9fe3ee2f697e888->enter($__internal_43462590218246cb81e29b3c6a0e38b01dcaa15724e426e6c9fe3ee2f697e888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_094a95411058ae7381f9c3c7955cc3c399f56427d2094fd2ef53b389c8b274dd->leave($__internal_094a95411058ae7381f9c3c7955cc3c399f56427d2094fd2ef53b389c8b274dd_prof);

        
        $__internal_43462590218246cb81e29b3c6a0e38b01dcaa15724e426e6c9fe3ee2f697e888->leave($__internal_43462590218246cb81e29b3c6a0e38b01dcaa15724e426e6c9fe3ee2f697e888_prof);

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
