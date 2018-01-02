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
        $__internal_67dd5d2b45f6673f5771889b33150ccfb097209f63063e0ac1e5c58053ad9e07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67dd5d2b45f6673f5771889b33150ccfb097209f63063e0ac1e5c58053ad9e07->enter($__internal_67dd5d2b45f6673f5771889b33150ccfb097209f63063e0ac1e5c58053ad9e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_c579330666d3b447656af4ae63897a7c821bdbbea66da33132e7f498edf65dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c579330666d3b447656af4ae63897a7c821bdbbea66da33132e7f498edf65dec->enter($__internal_c579330666d3b447656af4ae63897a7c821bdbbea66da33132e7f498edf65dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_67dd5d2b45f6673f5771889b33150ccfb097209f63063e0ac1e5c58053ad9e07->leave($__internal_67dd5d2b45f6673f5771889b33150ccfb097209f63063e0ac1e5c58053ad9e07_prof);

        
        $__internal_c579330666d3b447656af4ae63897a7c821bdbbea66da33132e7f498edf65dec->leave($__internal_c579330666d3b447656af4ae63897a7c821bdbbea66da33132e7f498edf65dec_prof);

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
", "@Framework/FormTable/hidden_row.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
