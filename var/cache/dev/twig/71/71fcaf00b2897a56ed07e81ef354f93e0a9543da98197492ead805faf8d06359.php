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
        $__internal_8ea1fd8bd2c43aa739c78db50acb7644704ce3cb84ebb788cd1cc72191be401e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ea1fd8bd2c43aa739c78db50acb7644704ce3cb84ebb788cd1cc72191be401e->enter($__internal_8ea1fd8bd2c43aa739c78db50acb7644704ce3cb84ebb788cd1cc72191be401e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_3802e22d9e070d4002bee845fb90bacf77711823978a4655f6c292d9d571423c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3802e22d9e070d4002bee845fb90bacf77711823978a4655f6c292d9d571423c->enter($__internal_3802e22d9e070d4002bee845fb90bacf77711823978a4655f6c292d9d571423c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8ea1fd8bd2c43aa739c78db50acb7644704ce3cb84ebb788cd1cc72191be401e->leave($__internal_8ea1fd8bd2c43aa739c78db50acb7644704ce3cb84ebb788cd1cc72191be401e_prof);

        
        $__internal_3802e22d9e070d4002bee845fb90bacf77711823978a4655f6c292d9d571423c->leave($__internal_3802e22d9e070d4002bee845fb90bacf77711823978a4655f6c292d9d571423c_prof);

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
", "@Framework/Form/checkbox_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
