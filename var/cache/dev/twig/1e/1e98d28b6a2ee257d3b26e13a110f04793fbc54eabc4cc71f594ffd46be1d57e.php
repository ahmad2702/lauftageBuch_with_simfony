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
        $__internal_2d4ccbe42896863d099e5b997012b94aff71daca5054c1eac6cd12eb0f54ba81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d4ccbe42896863d099e5b997012b94aff71daca5054c1eac6cd12eb0f54ba81->enter($__internal_2d4ccbe42896863d099e5b997012b94aff71daca5054c1eac6cd12eb0f54ba81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_de4e86f94c575c2a16770339d82487ab370b13b1a8ae3dac1a17329c4f85fb42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4e86f94c575c2a16770339d82487ab370b13b1a8ae3dac1a17329c4f85fb42->enter($__internal_de4e86f94c575c2a16770339d82487ab370b13b1a8ae3dac1a17329c4f85fb42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2d4ccbe42896863d099e5b997012b94aff71daca5054c1eac6cd12eb0f54ba81->leave($__internal_2d4ccbe42896863d099e5b997012b94aff71daca5054c1eac6cd12eb0f54ba81_prof);

        
        $__internal_de4e86f94c575c2a16770339d82487ab370b13b1a8ae3dac1a17329c4f85fb42->leave($__internal_de4e86f94c575c2a16770339d82487ab370b13b1a8ae3dac1a17329c4f85fb42_prof);

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
