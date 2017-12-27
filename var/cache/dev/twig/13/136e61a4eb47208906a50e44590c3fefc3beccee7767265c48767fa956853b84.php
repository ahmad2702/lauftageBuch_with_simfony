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
        $__internal_69105ccda0ab5a77bcddc393f77452d2c04fdc85c982827f30712237fbc56ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69105ccda0ab5a77bcddc393f77452d2c04fdc85c982827f30712237fbc56ff7->enter($__internal_69105ccda0ab5a77bcddc393f77452d2c04fdc85c982827f30712237fbc56ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_87112a4e7fd3406b9c0556f4223604ea4c320dae27c53ca6f274f83b20e922fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87112a4e7fd3406b9c0556f4223604ea4c320dae27c53ca6f274f83b20e922fd->enter($__internal_87112a4e7fd3406b9c0556f4223604ea4c320dae27c53ca6f274f83b20e922fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_69105ccda0ab5a77bcddc393f77452d2c04fdc85c982827f30712237fbc56ff7->leave($__internal_69105ccda0ab5a77bcddc393f77452d2c04fdc85c982827f30712237fbc56ff7_prof);

        
        $__internal_87112a4e7fd3406b9c0556f4223604ea4c320dae27c53ca6f274f83b20e922fd->leave($__internal_87112a4e7fd3406b9c0556f4223604ea4c320dae27c53ca6f274f83b20e922fd_prof);

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
