<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_e10b0188a2a73fd0b093698fef304517dfba6bfb7b753bbc55a995f9e6a6b79b extends Twig_Template
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
        $__internal_8a75b62a73122e4f40e9f3cce735428a3454f01ce2ce032df7c28b33ac96815d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a75b62a73122e4f40e9f3cce735428a3454f01ce2ce032df7c28b33ac96815d->enter($__internal_8a75b62a73122e4f40e9f3cce735428a3454f01ce2ce032df7c28b33ac96815d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_1e8523e05142a9deb151d19e73db06fdb1daa940f54a08675d6170dce2abdda2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e8523e05142a9deb151d19e73db06fdb1daa940f54a08675d6170dce2abdda2->enter($__internal_1e8523e05142a9deb151d19e73db06fdb1daa940f54a08675d6170dce2abdda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_8a75b62a73122e4f40e9f3cce735428a3454f01ce2ce032df7c28b33ac96815d->leave($__internal_8a75b62a73122e4f40e9f3cce735428a3454f01ce2ce032df7c28b33ac96815d_prof);

        
        $__internal_1e8523e05142a9deb151d19e73db06fdb1daa940f54a08675d6170dce2abdda2->leave($__internal_1e8523e05142a9deb151d19e73db06fdb1daa940f54a08675d6170dce2abdda2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget.html.php");
    }
}
