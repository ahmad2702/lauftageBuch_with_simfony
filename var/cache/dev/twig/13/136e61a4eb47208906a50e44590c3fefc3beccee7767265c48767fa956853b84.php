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
        $__internal_53aaaa405dab90e81e48dfc04c244f61ce873104cf1436807752b1427ba3fd65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53aaaa405dab90e81e48dfc04c244f61ce873104cf1436807752b1427ba3fd65->enter($__internal_53aaaa405dab90e81e48dfc04c244f61ce873104cf1436807752b1427ba3fd65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_b16ac138341dbf199079c16e5b544d64b790997792292279169ff3a7dda24750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b16ac138341dbf199079c16e5b544d64b790997792292279169ff3a7dda24750->enter($__internal_b16ac138341dbf199079c16e5b544d64b790997792292279169ff3a7dda24750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_53aaaa405dab90e81e48dfc04c244f61ce873104cf1436807752b1427ba3fd65->leave($__internal_53aaaa405dab90e81e48dfc04c244f61ce873104cf1436807752b1427ba3fd65_prof);

        
        $__internal_b16ac138341dbf199079c16e5b544d64b790997792292279169ff3a7dda24750->leave($__internal_b16ac138341dbf199079c16e5b544d64b790997792292279169ff3a7dda24750_prof);

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
