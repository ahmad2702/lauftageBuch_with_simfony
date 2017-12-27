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
        $__internal_6f3dd0c15485252080de1da4079a2c6af8ea71bae912656cb7cff09fd02f5e16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f3dd0c15485252080de1da4079a2c6af8ea71bae912656cb7cff09fd02f5e16->enter($__internal_6f3dd0c15485252080de1da4079a2c6af8ea71bae912656cb7cff09fd02f5e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_76bee157b6b5aae9237b86d219d76642abde6b9aa885b5b0e66fd7d2d730830f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76bee157b6b5aae9237b86d219d76642abde6b9aa885b5b0e66fd7d2d730830f->enter($__internal_76bee157b6b5aae9237b86d219d76642abde6b9aa885b5b0e66fd7d2d730830f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_6f3dd0c15485252080de1da4079a2c6af8ea71bae912656cb7cff09fd02f5e16->leave($__internal_6f3dd0c15485252080de1da4079a2c6af8ea71bae912656cb7cff09fd02f5e16_prof);

        
        $__internal_76bee157b6b5aae9237b86d219d76642abde6b9aa885b5b0e66fd7d2d730830f->leave($__internal_76bee157b6b5aae9237b86d219d76642abde6b9aa885b5b0e66fd7d2d730830f_prof);

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
