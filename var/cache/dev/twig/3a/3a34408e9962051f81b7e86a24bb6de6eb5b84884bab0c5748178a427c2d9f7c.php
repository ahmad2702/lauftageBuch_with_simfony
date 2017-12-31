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
        $__internal_7f7d280be912bef12782df9f230973f8d9de70a4175f9e11fe8fd7678c3ad4c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f7d280be912bef12782df9f230973f8d9de70a4175f9e11fe8fd7678c3ad4c4->enter($__internal_7f7d280be912bef12782df9f230973f8d9de70a4175f9e11fe8fd7678c3ad4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_39926b3dad1ad90d58aa8945bdbdec828bc5bf2b05ab1eadb2798e656cf9a7a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39926b3dad1ad90d58aa8945bdbdec828bc5bf2b05ab1eadb2798e656cf9a7a7->enter($__internal_39926b3dad1ad90d58aa8945bdbdec828bc5bf2b05ab1eadb2798e656cf9a7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7f7d280be912bef12782df9f230973f8d9de70a4175f9e11fe8fd7678c3ad4c4->leave($__internal_7f7d280be912bef12782df9f230973f8d9de70a4175f9e11fe8fd7678c3ad4c4_prof);

        
        $__internal_39926b3dad1ad90d58aa8945bdbdec828bc5bf2b05ab1eadb2798e656cf9a7a7->leave($__internal_39926b3dad1ad90d58aa8945bdbdec828bc5bf2b05ab1eadb2798e656cf9a7a7_prof);

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
