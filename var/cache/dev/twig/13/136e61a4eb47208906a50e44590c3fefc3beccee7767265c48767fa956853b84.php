<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_aa39f2283e6c4c6fcf20bb7f7cb170250d88806e4b2057286fe82cf29f74e861 extends Twig_Template
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
        $__internal_445d70f348eef0e57a19d98ea4853ab215e78d715c14f3bb556f837f32926e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_445d70f348eef0e57a19d98ea4853ab215e78d715c14f3bb556f837f32926e3d->enter($__internal_445d70f348eef0e57a19d98ea4853ab215e78d715c14f3bb556f837f32926e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_3a89c19be93881c9d75cf30878f3363670275b56c882f8b4cecf3daa3152296f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a89c19be93881c9d75cf30878f3363670275b56c882f8b4cecf3daa3152296f->enter($__internal_3a89c19be93881c9d75cf30878f3363670275b56c882f8b4cecf3daa3152296f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_445d70f348eef0e57a19d98ea4853ab215e78d715c14f3bb556f837f32926e3d->leave($__internal_445d70f348eef0e57a19d98ea4853ab215e78d715c14f3bb556f837f32926e3d_prof);

        
        $__internal_3a89c19be93881c9d75cf30878f3363670275b56c882f8b4cecf3daa3152296f->leave($__internal_3a89c19be93881c9d75cf30878f3363670275b56c882f8b4cecf3daa3152296f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/button_attributes.html.php");
    }
}
