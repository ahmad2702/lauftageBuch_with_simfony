<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_c9b7f5988df8d954c14deb4749757563a362563e862c6906b77570d92ae393be extends Twig_Template
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
        $__internal_188b219e2195b825ffa05ffb25ab140cbefcce9c843be8320feb848f0f3676c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_188b219e2195b825ffa05ffb25ab140cbefcce9c843be8320feb848f0f3676c3->enter($__internal_188b219e2195b825ffa05ffb25ab140cbefcce9c843be8320feb848f0f3676c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_e688f306de30282187e133f6698bb88ffcb2b640ab636dc4c68ba2a3eca7a727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e688f306de30282187e133f6698bb88ffcb2b640ab636dc4c68ba2a3eca7a727->enter($__internal_e688f306de30282187e133f6698bb88ffcb2b640ab636dc4c68ba2a3eca7a727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_188b219e2195b825ffa05ffb25ab140cbefcce9c843be8320feb848f0f3676c3->leave($__internal_188b219e2195b825ffa05ffb25ab140cbefcce9c843be8320feb848f0f3676c3_prof);

        
        $__internal_e688f306de30282187e133f6698bb88ffcb2b640ab636dc4c68ba2a3eca7a727->leave($__internal_e688f306de30282187e133f6698bb88ffcb2b640ab636dc4c68ba2a3eca7a727_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/form_label.html.php");
    }
}
