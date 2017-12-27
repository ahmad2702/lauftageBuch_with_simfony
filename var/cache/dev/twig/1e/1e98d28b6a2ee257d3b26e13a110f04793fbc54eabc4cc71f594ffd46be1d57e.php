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
        $__internal_2dc01f196ff6c22b5fb8103dcbdfc989723c676122ae918332882c96ab1120bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dc01f196ff6c22b5fb8103dcbdfc989723c676122ae918332882c96ab1120bd->enter($__internal_2dc01f196ff6c22b5fb8103dcbdfc989723c676122ae918332882c96ab1120bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_c5487960ec660f367acad7f20e9dd659a7305184aa88cbd09a415af28495409d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5487960ec660f367acad7f20e9dd659a7305184aa88cbd09a415af28495409d->enter($__internal_c5487960ec660f367acad7f20e9dd659a7305184aa88cbd09a415af28495409d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2dc01f196ff6c22b5fb8103dcbdfc989723c676122ae918332882c96ab1120bd->leave($__internal_2dc01f196ff6c22b5fb8103dcbdfc989723c676122ae918332882c96ab1120bd_prof);

        
        $__internal_c5487960ec660f367acad7f20e9dd659a7305184aa88cbd09a415af28495409d->leave($__internal_c5487960ec660f367acad7f20e9dd659a7305184aa88cbd09a415af28495409d_prof);

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
