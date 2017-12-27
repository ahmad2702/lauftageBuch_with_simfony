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
        $__internal_5cb4b82099d8d072f3ecb6a72b7d63d9533f82fd3a38727feb1281bf612db6eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cb4b82099d8d072f3ecb6a72b7d63d9533f82fd3a38727feb1281bf612db6eb->enter($__internal_5cb4b82099d8d072f3ecb6a72b7d63d9533f82fd3a38727feb1281bf612db6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_0acf0119799afc496aac24989dea48a35605619c60f6261b4ddae8c0ac820e85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0acf0119799afc496aac24989dea48a35605619c60f6261b4ddae8c0ac820e85->enter($__internal_0acf0119799afc496aac24989dea48a35605619c60f6261b4ddae8c0ac820e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_5cb4b82099d8d072f3ecb6a72b7d63d9533f82fd3a38727feb1281bf612db6eb->leave($__internal_5cb4b82099d8d072f3ecb6a72b7d63d9533f82fd3a38727feb1281bf612db6eb_prof);

        
        $__internal_0acf0119799afc496aac24989dea48a35605619c60f6261b4ddae8c0ac820e85->leave($__internal_0acf0119799afc496aac24989dea48a35605619c60f6261b4ddae8c0ac820e85_prof);

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
", "@Framework/Form/button_attributes.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/button_attributes.html.php");
    }
}
