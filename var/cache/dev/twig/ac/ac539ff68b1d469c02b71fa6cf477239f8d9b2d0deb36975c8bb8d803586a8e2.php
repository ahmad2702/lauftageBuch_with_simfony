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
        $__internal_ce1d9ca9933a2de864dfcc3abd6a54fdb5c534ac35f1c7f825421704fab9f757 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce1d9ca9933a2de864dfcc3abd6a54fdb5c534ac35f1c7f825421704fab9f757->enter($__internal_ce1d9ca9933a2de864dfcc3abd6a54fdb5c534ac35f1c7f825421704fab9f757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_a3b1e602c98e9f3e2fa6817b02be63c183af77ea7bf0d8d22dc39074180a9d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3b1e602c98e9f3e2fa6817b02be63c183af77ea7bf0d8d22dc39074180a9d71->enter($__internal_a3b1e602c98e9f3e2fa6817b02be63c183af77ea7bf0d8d22dc39074180a9d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_ce1d9ca9933a2de864dfcc3abd6a54fdb5c534ac35f1c7f825421704fab9f757->leave($__internal_ce1d9ca9933a2de864dfcc3abd6a54fdb5c534ac35f1c7f825421704fab9f757_prof);

        
        $__internal_a3b1e602c98e9f3e2fa6817b02be63c183af77ea7bf0d8d22dc39074180a9d71->leave($__internal_a3b1e602c98e9f3e2fa6817b02be63c183af77ea7bf0d8d22dc39074180a9d71_prof);

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
