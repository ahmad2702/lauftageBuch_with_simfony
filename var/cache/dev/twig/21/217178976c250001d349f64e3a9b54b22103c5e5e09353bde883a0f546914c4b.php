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
        $__internal_795d244bc5a8b9ed22e9a487d314d4c1df800b03322957f5b4c54b4430d2cb6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_795d244bc5a8b9ed22e9a487d314d4c1df800b03322957f5b4c54b4430d2cb6d->enter($__internal_795d244bc5a8b9ed22e9a487d314d4c1df800b03322957f5b4c54b4430d2cb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_8c462d931c4e9e390eefc74531de02e2dcf9e91fb9e54c354f2eb549698b19bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c462d931c4e9e390eefc74531de02e2dcf9e91fb9e54c354f2eb549698b19bd->enter($__internal_8c462d931c4e9e390eefc74531de02e2dcf9e91fb9e54c354f2eb549698b19bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

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
        
        $__internal_795d244bc5a8b9ed22e9a487d314d4c1df800b03322957f5b4c54b4430d2cb6d->leave($__internal_795d244bc5a8b9ed22e9a487d314d4c1df800b03322957f5b4c54b4430d2cb6d_prof);

        
        $__internal_8c462d931c4e9e390eefc74531de02e2dcf9e91fb9e54c354f2eb549698b19bd->leave($__internal_8c462d931c4e9e390eefc74531de02e2dcf9e91fb9e54c354f2eb549698b19bd_prof);

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
