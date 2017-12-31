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
        $__internal_04871a74847b4a5716c26b34cb1d0267daca1ef52bd6448e36b2a27b34ac3a7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04871a74847b4a5716c26b34cb1d0267daca1ef52bd6448e36b2a27b34ac3a7a->enter($__internal_04871a74847b4a5716c26b34cb1d0267daca1ef52bd6448e36b2a27b34ac3a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_28812795abd9eb918b2fcdf6e65c635491927e7d4287ca17a381b0559e8dddde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28812795abd9eb918b2fcdf6e65c635491927e7d4287ca17a381b0559e8dddde->enter($__internal_28812795abd9eb918b2fcdf6e65c635491927e7d4287ca17a381b0559e8dddde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_04871a74847b4a5716c26b34cb1d0267daca1ef52bd6448e36b2a27b34ac3a7a->leave($__internal_04871a74847b4a5716c26b34cb1d0267daca1ef52bd6448e36b2a27b34ac3a7a_prof);

        
        $__internal_28812795abd9eb918b2fcdf6e65c635491927e7d4287ca17a381b0559e8dddde->leave($__internal_28812795abd9eb918b2fcdf6e65c635491927e7d4287ca17a381b0559e8dddde_prof);

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
