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
        $__internal_40979f3277134721be3e202fa1c40337ef3d3600c110d4defd74cc7458fec81a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40979f3277134721be3e202fa1c40337ef3d3600c110d4defd74cc7458fec81a->enter($__internal_40979f3277134721be3e202fa1c40337ef3d3600c110d4defd74cc7458fec81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_8b43902ca4e2ba95969ab3afcd24b2ceab5a5eb968d24469923799b6665721d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b43902ca4e2ba95969ab3afcd24b2ceab5a5eb968d24469923799b6665721d3->enter($__internal_8b43902ca4e2ba95969ab3afcd24b2ceab5a5eb968d24469923799b6665721d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_40979f3277134721be3e202fa1c40337ef3d3600c110d4defd74cc7458fec81a->leave($__internal_40979f3277134721be3e202fa1c40337ef3d3600c110d4defd74cc7458fec81a_prof);

        
        $__internal_8b43902ca4e2ba95969ab3afcd24b2ceab5a5eb968d24469923799b6665721d3->leave($__internal_8b43902ca4e2ba95969ab3afcd24b2ceab5a5eb968d24469923799b6665721d3_prof);

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
", "@Framework/Form/form_row.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/form_row.html.php");
    }
}
