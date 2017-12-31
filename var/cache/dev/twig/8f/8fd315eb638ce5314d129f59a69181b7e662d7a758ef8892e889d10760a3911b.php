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
        $__internal_6b0eab1deb7ad16e770ad9826b974bb3dbd33f4332799f7808c6a507b6c2d947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b0eab1deb7ad16e770ad9826b974bb3dbd33f4332799f7808c6a507b6c2d947->enter($__internal_6b0eab1deb7ad16e770ad9826b974bb3dbd33f4332799f7808c6a507b6c2d947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_8a23b85fb51d889e156a52d57fa8a1982304598705e52bb5072049b2866c1df2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a23b85fb51d889e156a52d57fa8a1982304598705e52bb5072049b2866c1df2->enter($__internal_8a23b85fb51d889e156a52d57fa8a1982304598705e52bb5072049b2866c1df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_6b0eab1deb7ad16e770ad9826b974bb3dbd33f4332799f7808c6a507b6c2d947->leave($__internal_6b0eab1deb7ad16e770ad9826b974bb3dbd33f4332799f7808c6a507b6c2d947_prof);

        
        $__internal_8a23b85fb51d889e156a52d57fa8a1982304598705e52bb5072049b2866c1df2->leave($__internal_8a23b85fb51d889e156a52d57fa8a1982304598705e52bb5072049b2866c1df2_prof);

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
