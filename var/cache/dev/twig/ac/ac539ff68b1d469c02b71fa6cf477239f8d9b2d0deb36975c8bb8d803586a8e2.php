<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_2a79a50a84ea6ad5ec74028e83aeda20fd8fb246e242e896d708a376d5fb0b88 extends Twig_Template
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
        $__internal_9241e3e844f5d008776933bd7b8dd3ef1667de92095674c08de18dcac3cc07bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9241e3e844f5d008776933bd7b8dd3ef1667de92095674c08de18dcac3cc07bb->enter($__internal_9241e3e844f5d008776933bd7b8dd3ef1667de92095674c08de18dcac3cc07bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_0a616407fd8607baa74927df2e22e52df05de253ac871a70b5eb5e72078b5876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a616407fd8607baa74927df2e22e52df05de253ac871a70b5eb5e72078b5876->enter($__internal_0a616407fd8607baa74927df2e22e52df05de253ac871a70b5eb5e72078b5876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_9241e3e844f5d008776933bd7b8dd3ef1667de92095674c08de18dcac3cc07bb->leave($__internal_9241e3e844f5d008776933bd7b8dd3ef1667de92095674c08de18dcac3cc07bb_prof);

        
        $__internal_0a616407fd8607baa74927df2e22e52df05de253ac871a70b5eb5e72078b5876->leave($__internal_0a616407fd8607baa74927df2e22e52df05de253ac871a70b5eb5e72078b5876_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
