<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_aa39f2283e6c4c6fcf20bb7f7cb170250d88806e4b2057286fe82cf29f74e861 extends Twig_Template
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
        $__internal_11afe60057673b2847cd2dd336d063ce6355f1bfe32e83fd24305f5c4e027c86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11afe60057673b2847cd2dd336d063ce6355f1bfe32e83fd24305f5c4e027c86->enter($__internal_11afe60057673b2847cd2dd336d063ce6355f1bfe32e83fd24305f5c4e027c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_992c3e118730858805d0482193602d17f4f2e79f4906ca53891e5427fdf94213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_992c3e118730858805d0482193602d17f4f2e79f4906ca53891e5427fdf94213->enter($__internal_992c3e118730858805d0482193602d17f4f2e79f4906ca53891e5427fdf94213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_11afe60057673b2847cd2dd336d063ce6355f1bfe32e83fd24305f5c4e027c86->leave($__internal_11afe60057673b2847cd2dd336d063ce6355f1bfe32e83fd24305f5c4e027c86_prof);

        
        $__internal_992c3e118730858805d0482193602d17f4f2e79f4906ca53891e5427fdf94213->leave($__internal_992c3e118730858805d0482193602d17f4f2e79f4906ca53891e5427fdf94213_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/button_attributes.html.php");
    }
}
