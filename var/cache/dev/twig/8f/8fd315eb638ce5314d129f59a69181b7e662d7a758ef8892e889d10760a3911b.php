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
        $__internal_5a1a8e9d7f7819dcf42d9ea587399daa43dee33195b2668287ee480c8067adee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a1a8e9d7f7819dcf42d9ea587399daa43dee33195b2668287ee480c8067adee->enter($__internal_5a1a8e9d7f7819dcf42d9ea587399daa43dee33195b2668287ee480c8067adee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_e56c4b91242a4173ccbb83219bb9f7879843deb29d7623d77ca3a0a256c2d675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e56c4b91242a4173ccbb83219bb9f7879843deb29d7623d77ca3a0a256c2d675->enter($__internal_e56c4b91242a4173ccbb83219bb9f7879843deb29d7623d77ca3a0a256c2d675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_5a1a8e9d7f7819dcf42d9ea587399daa43dee33195b2668287ee480c8067adee->leave($__internal_5a1a8e9d7f7819dcf42d9ea587399daa43dee33195b2668287ee480c8067adee_prof);

        
        $__internal_e56c4b91242a4173ccbb83219bb9f7879843deb29d7623d77ca3a0a256c2d675->leave($__internal_e56c4b91242a4173ccbb83219bb9f7879843deb29d7623d77ca3a0a256c2d675_prof);

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
