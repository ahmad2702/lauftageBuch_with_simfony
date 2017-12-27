<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_77232fa5335202a291631f7e022fbfd16a39481fc74645dae40003a7b1352b81 extends Twig_Template
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
        $__internal_72ee21bb6f8403c9c15e92ee715beffdd44a41e3a1367bb4ed51319073bcdbf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72ee21bb6f8403c9c15e92ee715beffdd44a41e3a1367bb4ed51319073bcdbf1->enter($__internal_72ee21bb6f8403c9c15e92ee715beffdd44a41e3a1367bb4ed51319073bcdbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_ea4821e3d1ac72504e368acd8fdcc975728d3cf9c0bc8000660021210e6390bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea4821e3d1ac72504e368acd8fdcc975728d3cf9c0bc8000660021210e6390bc->enter($__internal_ea4821e3d1ac72504e368acd8fdcc975728d3cf9c0bc8000660021210e6390bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_72ee21bb6f8403c9c15e92ee715beffdd44a41e3a1367bb4ed51319073bcdbf1->leave($__internal_72ee21bb6f8403c9c15e92ee715beffdd44a41e3a1367bb4ed51319073bcdbf1_prof);

        
        $__internal_ea4821e3d1ac72504e368acd8fdcc975728d3cf9c0bc8000660021210e6390bc->leave($__internal_ea4821e3d1ac72504e368acd8fdcc975728d3cf9c0bc8000660021210e6390bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/form_row.html.php");
    }
}
