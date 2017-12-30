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
        $__internal_a48c5e64b05ecea02e067e97c59f7600eaa146ca69fd357f7640656b73d26d2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a48c5e64b05ecea02e067e97c59f7600eaa146ca69fd357f7640656b73d26d2e->enter($__internal_a48c5e64b05ecea02e067e97c59f7600eaa146ca69fd357f7640656b73d26d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_04571b15b36fe10bcd9f53c40c467675ae70cf7df01ce210396a17d220876cf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04571b15b36fe10bcd9f53c40c467675ae70cf7df01ce210396a17d220876cf5->enter($__internal_04571b15b36fe10bcd9f53c40c467675ae70cf7df01ce210396a17d220876cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a48c5e64b05ecea02e067e97c59f7600eaa146ca69fd357f7640656b73d26d2e->leave($__internal_a48c5e64b05ecea02e067e97c59f7600eaa146ca69fd357f7640656b73d26d2e_prof);

        
        $__internal_04571b15b36fe10bcd9f53c40c467675ae70cf7df01ce210396a17d220876cf5->leave($__internal_04571b15b36fe10bcd9f53c40c467675ae70cf7df01ce210396a17d220876cf5_prof);

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
