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
        $__internal_6b5fcbddbe7d667454bb0d85c47bd2be9a9f56c5be3b5999c19f3d4a54615da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b5fcbddbe7d667454bb0d85c47bd2be9a9f56c5be3b5999c19f3d4a54615da7->enter($__internal_6b5fcbddbe7d667454bb0d85c47bd2be9a9f56c5be3b5999c19f3d4a54615da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_ef1a6e035e019f534316ff8cb02d9622907b1701b8dcb1f32c3326b83e7fa839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef1a6e035e019f534316ff8cb02d9622907b1701b8dcb1f32c3326b83e7fa839->enter($__internal_ef1a6e035e019f534316ff8cb02d9622907b1701b8dcb1f32c3326b83e7fa839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_6b5fcbddbe7d667454bb0d85c47bd2be9a9f56c5be3b5999c19f3d4a54615da7->leave($__internal_6b5fcbddbe7d667454bb0d85c47bd2be9a9f56c5be3b5999c19f3d4a54615da7_prof);

        
        $__internal_ef1a6e035e019f534316ff8cb02d9622907b1701b8dcb1f32c3326b83e7fa839->leave($__internal_ef1a6e035e019f534316ff8cb02d9622907b1701b8dcb1f32c3326b83e7fa839_prof);

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
