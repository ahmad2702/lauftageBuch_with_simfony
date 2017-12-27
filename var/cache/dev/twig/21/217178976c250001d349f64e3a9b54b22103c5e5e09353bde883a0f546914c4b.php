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
        $__internal_8e7b40a717af3b33690c95aee98b000e8fedef4b78eae4e91e294216de7c43c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e7b40a717af3b33690c95aee98b000e8fedef4b78eae4e91e294216de7c43c1->enter($__internal_8e7b40a717af3b33690c95aee98b000e8fedef4b78eae4e91e294216de7c43c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_dad76a0a5d77da7663e22c669ee4b17d1a5908fcc8fc074f1c37556301e8a01d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dad76a0a5d77da7663e22c669ee4b17d1a5908fcc8fc074f1c37556301e8a01d->enter($__internal_dad76a0a5d77da7663e22c669ee4b17d1a5908fcc8fc074f1c37556301e8a01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

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
        
        $__internal_8e7b40a717af3b33690c95aee98b000e8fedef4b78eae4e91e294216de7c43c1->leave($__internal_8e7b40a717af3b33690c95aee98b000e8fedef4b78eae4e91e294216de7c43c1_prof);

        
        $__internal_dad76a0a5d77da7663e22c669ee4b17d1a5908fcc8fc074f1c37556301e8a01d->leave($__internal_dad76a0a5d77da7663e22c669ee4b17d1a5908fcc8fc074f1c37556301e8a01d_prof);

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
