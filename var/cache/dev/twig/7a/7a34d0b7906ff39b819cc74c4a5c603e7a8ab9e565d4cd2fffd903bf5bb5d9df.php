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
        $__internal_3153cfdea94c02fe7215b925e1671eb445cfcc20ce23e078e87a8cb80249af87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3153cfdea94c02fe7215b925e1671eb445cfcc20ce23e078e87a8cb80249af87->enter($__internal_3153cfdea94c02fe7215b925e1671eb445cfcc20ce23e078e87a8cb80249af87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_33b4fcc3f937a722d4a9a492100880a86c5dc78f0f71234c530a36e5f8607ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b4fcc3f937a722d4a9a492100880a86c5dc78f0f71234c530a36e5f8607ba4->enter($__internal_33b4fcc3f937a722d4a9a492100880a86c5dc78f0f71234c530a36e5f8607ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3153cfdea94c02fe7215b925e1671eb445cfcc20ce23e078e87a8cb80249af87->leave($__internal_3153cfdea94c02fe7215b925e1671eb445cfcc20ce23e078e87a8cb80249af87_prof);

        
        $__internal_33b4fcc3f937a722d4a9a492100880a86c5dc78f0f71234c530a36e5f8607ba4->leave($__internal_33b4fcc3f937a722d4a9a492100880a86c5dc78f0f71234c530a36e5f8607ba4_prof);

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
