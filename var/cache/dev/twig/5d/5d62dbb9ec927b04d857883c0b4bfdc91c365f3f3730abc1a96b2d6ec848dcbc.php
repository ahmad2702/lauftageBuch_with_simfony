<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d445fe04fd00af23d9dde3d9d60c6ead2c5a74282292f5deb1fb0c5c015b64c6 extends Twig_Template
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
        $__internal_6ab1c32180edf71eac7f8ab7aa020b8eebe3cee7a54ad4bfce424eb4366b102b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ab1c32180edf71eac7f8ab7aa020b8eebe3cee7a54ad4bfce424eb4366b102b->enter($__internal_6ab1c32180edf71eac7f8ab7aa020b8eebe3cee7a54ad4bfce424eb4366b102b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_c8ded851b524908a06cec6b91f2940e49d89d151c840e972127233a5253d1e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ded851b524908a06cec6b91f2940e49d89d151c840e972127233a5253d1e6b->enter($__internal_c8ded851b524908a06cec6b91f2940e49d89d151c840e972127233a5253d1e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_6ab1c32180edf71eac7f8ab7aa020b8eebe3cee7a54ad4bfce424eb4366b102b->leave($__internal_6ab1c32180edf71eac7f8ab7aa020b8eebe3cee7a54ad4bfce424eb4366b102b_prof);

        
        $__internal_c8ded851b524908a06cec6b91f2940e49d89d151c840e972127233a5253d1e6b->leave($__internal_c8ded851b524908a06cec6b91f2940e49d89d151c840e972127233a5253d1e6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/button_widget.html.php");
    }
}
