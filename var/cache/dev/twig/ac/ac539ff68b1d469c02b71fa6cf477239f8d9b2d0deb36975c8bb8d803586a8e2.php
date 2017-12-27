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
        $__internal_5f99a662c9f2615af4337cb25ac7957ae7e49f19cba9501cd0559a9c0555b6d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f99a662c9f2615af4337cb25ac7957ae7e49f19cba9501cd0559a9c0555b6d1->enter($__internal_5f99a662c9f2615af4337cb25ac7957ae7e49f19cba9501cd0559a9c0555b6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_16e7feb69af3c9bb39e5b34507a3d9925fc283d51aed239352e8dbf3d2be4d96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e7feb69af3c9bb39e5b34507a3d9925fc283d51aed239352e8dbf3d2be4d96->enter($__internal_16e7feb69af3c9bb39e5b34507a3d9925fc283d51aed239352e8dbf3d2be4d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_5f99a662c9f2615af4337cb25ac7957ae7e49f19cba9501cd0559a9c0555b6d1->leave($__internal_5f99a662c9f2615af4337cb25ac7957ae7e49f19cba9501cd0559a9c0555b6d1_prof);

        
        $__internal_16e7feb69af3c9bb39e5b34507a3d9925fc283d51aed239352e8dbf3d2be4d96->leave($__internal_16e7feb69af3c9bb39e5b34507a3d9925fc283d51aed239352e8dbf3d2be4d96_prof);

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
