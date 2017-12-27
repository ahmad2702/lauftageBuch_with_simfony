<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_51e702831d9cf97104fe0d08eb8e63fcc64e6a3d71d271ee86bc9f1c94fb1ec7 extends Twig_Template
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
        $__internal_05903fe0b0165f3eff2a921930d81d21cd85151ee0ce42d9a515fe03988ce0bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05903fe0b0165f3eff2a921930d81d21cd85151ee0ce42d9a515fe03988ce0bc->enter($__internal_05903fe0b0165f3eff2a921930d81d21cd85151ee0ce42d9a515fe03988ce0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_e215b7223dc5e270bbc728aa3c42ba01e48100504fb027ee19cc653672d64047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e215b7223dc5e270bbc728aa3c42ba01e48100504fb027ee19cc653672d64047->enter($__internal_e215b7223dc5e270bbc728aa3c42ba01e48100504fb027ee19cc653672d64047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_05903fe0b0165f3eff2a921930d81d21cd85151ee0ce42d9a515fe03988ce0bc->leave($__internal_05903fe0b0165f3eff2a921930d81d21cd85151ee0ce42d9a515fe03988ce0bc_prof);

        
        $__internal_e215b7223dc5e270bbc728aa3c42ba01e48100504fb027ee19cc653672d64047->leave($__internal_e215b7223dc5e270bbc728aa3c42ba01e48100504fb027ee19cc653672d64047_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
