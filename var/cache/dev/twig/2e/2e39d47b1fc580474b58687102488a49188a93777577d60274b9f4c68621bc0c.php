<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b7671f54f32d36aa7a945e2162896960402ab4be20573cc13d8c839ed2cefe63 extends Twig_Template
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
        $__internal_3e01e2fd6f22f2f3cd5f6df76fd6c51a3339ec3bea3fd6110c1fbd9ee1059392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e01e2fd6f22f2f3cd5f6df76fd6c51a3339ec3bea3fd6110c1fbd9ee1059392->enter($__internal_3e01e2fd6f22f2f3cd5f6df76fd6c51a3339ec3bea3fd6110c1fbd9ee1059392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_630704bba4a865adaf7b3f8280e60198129478f7a4846011ee7b3178b2fc2423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_630704bba4a865adaf7b3f8280e60198129478f7a4846011ee7b3178b2fc2423->enter($__internal_630704bba4a865adaf7b3f8280e60198129478f7a4846011ee7b3178b2fc2423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_3e01e2fd6f22f2f3cd5f6df76fd6c51a3339ec3bea3fd6110c1fbd9ee1059392->leave($__internal_3e01e2fd6f22f2f3cd5f6df76fd6c51a3339ec3bea3fd6110c1fbd9ee1059392_prof);

        
        $__internal_630704bba4a865adaf7b3f8280e60198129478f7a4846011ee7b3178b2fc2423->leave($__internal_630704bba4a865adaf7b3f8280e60198129478f7a4846011ee7b3178b2fc2423_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
