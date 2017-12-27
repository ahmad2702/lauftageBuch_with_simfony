<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b7671f54f32d36aa7a945e2162896960402ab4be20573cc13d8c839ed2cefe63 extends Twig_Template
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
        $__internal_004ca0e88845de32fbe260e9802f4d15408e946f41c5e9d96ec6860224acb150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_004ca0e88845de32fbe260e9802f4d15408e946f41c5e9d96ec6860224acb150->enter($__internal_004ca0e88845de32fbe260e9802f4d15408e946f41c5e9d96ec6860224acb150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_b5757e4a91f453f9cb9fbf0a26be31820c273b4e0256776c4cfc3a9f6c4df353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5757e4a91f453f9cb9fbf0a26be31820c273b4e0256776c4cfc3a9f6c4df353->enter($__internal_b5757e4a91f453f9cb9fbf0a26be31820c273b4e0256776c4cfc3a9f6c4df353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_004ca0e88845de32fbe260e9802f4d15408e946f41c5e9d96ec6860224acb150->leave($__internal_004ca0e88845de32fbe260e9802f4d15408e946f41c5e9d96ec6860224acb150_prof);

        
        $__internal_b5757e4a91f453f9cb9fbf0a26be31820c273b4e0256776c4cfc3a9f6c4df353->leave($__internal_b5757e4a91f453f9cb9fbf0a26be31820c273b4e0256776c4cfc3a9f6c4df353_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
