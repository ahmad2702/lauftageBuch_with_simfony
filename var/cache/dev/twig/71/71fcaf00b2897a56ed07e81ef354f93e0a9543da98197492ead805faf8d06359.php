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
        $__internal_692af33f61336a23a83eb2a6a15223830dc50d37495f34e2f5ff3c6ebe397426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_692af33f61336a23a83eb2a6a15223830dc50d37495f34e2f5ff3c6ebe397426->enter($__internal_692af33f61336a23a83eb2a6a15223830dc50d37495f34e2f5ff3c6ebe397426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_85247922e81a74334ddb216dfbf5b51ae4fbfd03c524d57ae126e7ac1c9e34d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85247922e81a74334ddb216dfbf5b51ae4fbfd03c524d57ae126e7ac1c9e34d1->enter($__internal_85247922e81a74334ddb216dfbf5b51ae4fbfd03c524d57ae126e7ac1c9e34d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_692af33f61336a23a83eb2a6a15223830dc50d37495f34e2f5ff3c6ebe397426->leave($__internal_692af33f61336a23a83eb2a6a15223830dc50d37495f34e2f5ff3c6ebe397426_prof);

        
        $__internal_85247922e81a74334ddb216dfbf5b51ae4fbfd03c524d57ae126e7ac1c9e34d1->leave($__internal_85247922e81a74334ddb216dfbf5b51ae4fbfd03c524d57ae126e7ac1c9e34d1_prof);

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
