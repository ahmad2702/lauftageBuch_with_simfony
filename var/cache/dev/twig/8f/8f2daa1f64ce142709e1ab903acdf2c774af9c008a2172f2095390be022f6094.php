<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_fdd53bc02f1e6db8b1e1bfbbad3c38950499d00b9e04ab61671de66d77d0d6f0 extends Twig_Template
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
        $__internal_709e51f73922d0368b4cbcdd3a5de408937cfbfda42a5a8945e7b0ad1923675b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_709e51f73922d0368b4cbcdd3a5de408937cfbfda42a5a8945e7b0ad1923675b->enter($__internal_709e51f73922d0368b4cbcdd3a5de408937cfbfda42a5a8945e7b0ad1923675b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_6483c024857d0ff00b3c04da538175cf8a1562e769d9b9024d06baab638ebed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6483c024857d0ff00b3c04da538175cf8a1562e769d9b9024d06baab638ebed8->enter($__internal_6483c024857d0ff00b3c04da538175cf8a1562e769d9b9024d06baab638ebed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_709e51f73922d0368b4cbcdd3a5de408937cfbfda42a5a8945e7b0ad1923675b->leave($__internal_709e51f73922d0368b4cbcdd3a5de408937cfbfda42a5a8945e7b0ad1923675b_prof);

        
        $__internal_6483c024857d0ff00b3c04da538175cf8a1562e769d9b9024d06baab638ebed8->leave($__internal_6483c024857d0ff00b3c04da538175cf8a1562e769d9b9024d06baab638ebed8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
