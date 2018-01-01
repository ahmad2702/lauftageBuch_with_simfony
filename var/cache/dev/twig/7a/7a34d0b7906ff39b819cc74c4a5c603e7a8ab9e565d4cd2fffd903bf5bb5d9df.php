<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_268790b5f078f20b95352f1529cbdf31c8e8d2fc3edba55a5551e29d0a8a3946 extends Twig_Template
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
        $__internal_b428d7b62c5c416418c135e9c4138ecacab392602fc1fdd80eb556966ab94be7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b428d7b62c5c416418c135e9c4138ecacab392602fc1fdd80eb556966ab94be7->enter($__internal_b428d7b62c5c416418c135e9c4138ecacab392602fc1fdd80eb556966ab94be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_61c53b94c9be001b01324f3fa27ab4229ca28142c7e58fea428981d716946682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c53b94c9be001b01324f3fa27ab4229ca28142c7e58fea428981d716946682->enter($__internal_61c53b94c9be001b01324f3fa27ab4229ca28142c7e58fea428981d716946682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b428d7b62c5c416418c135e9c4138ecacab392602fc1fdd80eb556966ab94be7->leave($__internal_b428d7b62c5c416418c135e9c4138ecacab392602fc1fdd80eb556966ab94be7_prof);

        
        $__internal_61c53b94c9be001b01324f3fa27ab4229ca28142c7e58fea428981d716946682->leave($__internal_61c53b94c9be001b01324f3fa27ab4229ca28142c7e58fea428981d716946682_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/widget_attributes.html.php");
    }
}
