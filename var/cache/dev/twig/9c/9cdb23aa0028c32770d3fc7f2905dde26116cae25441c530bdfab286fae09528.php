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
        $__internal_24a75b6d679f22b1df373027f872c1666ca2ebdd02e752279ac46f3f7d397ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a75b6d679f22b1df373027f872c1666ca2ebdd02e752279ac46f3f7d397ad3->enter($__internal_24a75b6d679f22b1df373027f872c1666ca2ebdd02e752279ac46f3f7d397ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_fb509ccbdf5e976e800ca8384176013366e7c1b1532e93a82043460d41be2536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb509ccbdf5e976e800ca8384176013366e7c1b1532e93a82043460d41be2536->enter($__internal_fb509ccbdf5e976e800ca8384176013366e7c1b1532e93a82043460d41be2536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_24a75b6d679f22b1df373027f872c1666ca2ebdd02e752279ac46f3f7d397ad3->leave($__internal_24a75b6d679f22b1df373027f872c1666ca2ebdd02e752279ac46f3f7d397ad3_prof);

        
        $__internal_fb509ccbdf5e976e800ca8384176013366e7c1b1532e93a82043460d41be2536->leave($__internal_fb509ccbdf5e976e800ca8384176013366e7c1b1532e93a82043460d41be2536_prof);

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
