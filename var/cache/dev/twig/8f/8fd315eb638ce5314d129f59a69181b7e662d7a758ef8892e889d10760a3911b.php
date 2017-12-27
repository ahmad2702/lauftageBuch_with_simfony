<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_1dd0ba09244e525f2a1da6f1de394f4bdbbc2325fe6efc0948a3821a5ad7b841 extends Twig_Template
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
        $__internal_56687c5be1836f37d091f448af9ae264b6d578f4777ee3ad50e985014979d413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56687c5be1836f37d091f448af9ae264b6d578f4777ee3ad50e985014979d413->enter($__internal_56687c5be1836f37d091f448af9ae264b6d578f4777ee3ad50e985014979d413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_63a404ff961615576cf34fe3d1092789024695d6be47fd70907d73b0bc2a9809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a404ff961615576cf34fe3d1092789024695d6be47fd70907d73b0bc2a9809->enter($__internal_63a404ff961615576cf34fe3d1092789024695d6be47fd70907d73b0bc2a9809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_56687c5be1836f37d091f448af9ae264b6d578f4777ee3ad50e985014979d413->leave($__internal_56687c5be1836f37d091f448af9ae264b6d578f4777ee3ad50e985014979d413_prof);

        
        $__internal_63a404ff961615576cf34fe3d1092789024695d6be47fd70907d73b0bc2a9809->leave($__internal_63a404ff961615576cf34fe3d1092789024695d6be47fd70907d73b0bc2a9809_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/datetime_widget.html.php");
    }
}
