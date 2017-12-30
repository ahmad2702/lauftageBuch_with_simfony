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
        $__internal_71cd9168cd98904b3129ff806f9a69089e1450940da31c73b94dab99928b620b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71cd9168cd98904b3129ff806f9a69089e1450940da31c73b94dab99928b620b->enter($__internal_71cd9168cd98904b3129ff806f9a69089e1450940da31c73b94dab99928b620b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_56aa3c9d587d306ab9c9dd688d245a647c20b7b15ab2992e75b57b950f784af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56aa3c9d587d306ab9c9dd688d245a647c20b7b15ab2992e75b57b950f784af3->enter($__internal_56aa3c9d587d306ab9c9dd688d245a647c20b7b15ab2992e75b57b950f784af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_71cd9168cd98904b3129ff806f9a69089e1450940da31c73b94dab99928b620b->leave($__internal_71cd9168cd98904b3129ff806f9a69089e1450940da31c73b94dab99928b620b_prof);

        
        $__internal_56aa3c9d587d306ab9c9dd688d245a647c20b7b15ab2992e75b57b950f784af3->leave($__internal_56aa3c9d587d306ab9c9dd688d245a647c20b7b15ab2992e75b57b950f784af3_prof);

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
