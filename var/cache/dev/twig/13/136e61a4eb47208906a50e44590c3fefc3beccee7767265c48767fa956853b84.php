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
        $__internal_710e403990121a6a744ed60d535fb3c206894c51fb33d1dfac230da664c64885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_710e403990121a6a744ed60d535fb3c206894c51fb33d1dfac230da664c64885->enter($__internal_710e403990121a6a744ed60d535fb3c206894c51fb33d1dfac230da664c64885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_33b22c292e9ff5fa5bf2de654252c89151ca99e48785eca773333c85eca87024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b22c292e9ff5fa5bf2de654252c89151ca99e48785eca773333c85eca87024->enter($__internal_33b22c292e9ff5fa5bf2de654252c89151ca99e48785eca773333c85eca87024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_710e403990121a6a744ed60d535fb3c206894c51fb33d1dfac230da664c64885->leave($__internal_710e403990121a6a744ed60d535fb3c206894c51fb33d1dfac230da664c64885_prof);

        
        $__internal_33b22c292e9ff5fa5bf2de654252c89151ca99e48785eca773333c85eca87024->leave($__internal_33b22c292e9ff5fa5bf2de654252c89151ca99e48785eca773333c85eca87024_prof);

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
