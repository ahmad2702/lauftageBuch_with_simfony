<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d1d2b64cc590765c1f98ac9a8e4ebb5c734b980c7afaabf4646f5ed379b8e9de extends Twig_Template
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
        $__internal_a0fa76181735412b0bcb4b969cc855a73dda4b93d9ce5509ea2447ccef562701 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0fa76181735412b0bcb4b969cc855a73dda4b93d9ce5509ea2447ccef562701->enter($__internal_a0fa76181735412b0bcb4b969cc855a73dda4b93d9ce5509ea2447ccef562701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_d1193735f598b1e890375bd9dfb317df13fec8a4c626bb780571801d18268ccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1193735f598b1e890375bd9dfb317df13fec8a4c626bb780571801d18268ccf->enter($__internal_d1193735f598b1e890375bd9dfb317df13fec8a4c626bb780571801d18268ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a0fa76181735412b0bcb4b969cc855a73dda4b93d9ce5509ea2447ccef562701->leave($__internal_a0fa76181735412b0bcb4b969cc855a73dda4b93d9ce5509ea2447ccef562701_prof);

        
        $__internal_d1193735f598b1e890375bd9dfb317df13fec8a4c626bb780571801d18268ccf->leave($__internal_d1193735f598b1e890375bd9dfb317df13fec8a4c626bb780571801d18268ccf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/radio_widget.html.php");
    }
}
