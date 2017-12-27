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
        $__internal_fc7905d28d43ea3f7e9a263f6faf25ff0b235ad7cfba76a65c2e746701898137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc7905d28d43ea3f7e9a263f6faf25ff0b235ad7cfba76a65c2e746701898137->enter($__internal_fc7905d28d43ea3f7e9a263f6faf25ff0b235ad7cfba76a65c2e746701898137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_5f63a12fed8e8716b8e3ae70bb50dc9a3718cc894cfc4c900a79e8744a88dbb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f63a12fed8e8716b8e3ae70bb50dc9a3718cc894cfc4c900a79e8744a88dbb1->enter($__internal_5f63a12fed8e8716b8e3ae70bb50dc9a3718cc894cfc4c900a79e8744a88dbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_fc7905d28d43ea3f7e9a263f6faf25ff0b235ad7cfba76a65c2e746701898137->leave($__internal_fc7905d28d43ea3f7e9a263f6faf25ff0b235ad7cfba76a65c2e746701898137_prof);

        
        $__internal_5f63a12fed8e8716b8e3ae70bb50dc9a3718cc894cfc4c900a79e8744a88dbb1->leave($__internal_5f63a12fed8e8716b8e3ae70bb50dc9a3718cc894cfc4c900a79e8744a88dbb1_prof);

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
", "@Framework/Form/widget_attributes.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/widget_attributes.html.php");
    }
}
