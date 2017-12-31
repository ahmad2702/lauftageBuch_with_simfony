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
        $__internal_75487e52f82b8b87936eaaab47ababc0c68c3ace998ea591862253f80b6ce569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75487e52f82b8b87936eaaab47ababc0c68c3ace998ea591862253f80b6ce569->enter($__internal_75487e52f82b8b87936eaaab47ababc0c68c3ace998ea591862253f80b6ce569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_91a7dee1d1b9afc71bdc537ea6924150bd78a6ff08e8fff37c6b1e0962b6ce8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a7dee1d1b9afc71bdc537ea6924150bd78a6ff08e8fff37c6b1e0962b6ce8a->enter($__internal_91a7dee1d1b9afc71bdc537ea6924150bd78a6ff08e8fff37c6b1e0962b6ce8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_75487e52f82b8b87936eaaab47ababc0c68c3ace998ea591862253f80b6ce569->leave($__internal_75487e52f82b8b87936eaaab47ababc0c68c3ace998ea591862253f80b6ce569_prof);

        
        $__internal_91a7dee1d1b9afc71bdc537ea6924150bd78a6ff08e8fff37c6b1e0962b6ce8a->leave($__internal_91a7dee1d1b9afc71bdc537ea6924150bd78a6ff08e8fff37c6b1e0962b6ce8a_prof);

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
