<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_8620a9c55012ee7cf79b59a727b2123fcd90163ebf0621898e4f453b5863e716 extends Twig_Template
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
        $__internal_bdc8f809b3da728852c25a3b091337a76522a22a61a069f9dd2b8d2341bff17c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdc8f809b3da728852c25a3b091337a76522a22a61a069f9dd2b8d2341bff17c->enter($__internal_bdc8f809b3da728852c25a3b091337a76522a22a61a069f9dd2b8d2341bff17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_33440766c02db0aea1fc71196ba82ffc614a8192bd717381b4f4f9b6da4fa33e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33440766c02db0aea1fc71196ba82ffc614a8192bd717381b4f4f9b6da4fa33e->enter($__internal_33440766c02db0aea1fc71196ba82ffc614a8192bd717381b4f4f9b6da4fa33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_bdc8f809b3da728852c25a3b091337a76522a22a61a069f9dd2b8d2341bff17c->leave($__internal_bdc8f809b3da728852c25a3b091337a76522a22a61a069f9dd2b8d2341bff17c_prof);

        
        $__internal_33440766c02db0aea1fc71196ba82ffc614a8192bd717381b4f4f9b6da4fa33e->leave($__internal_33440766c02db0aea1fc71196ba82ffc614a8192bd717381b4f4f9b6da4fa33e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
