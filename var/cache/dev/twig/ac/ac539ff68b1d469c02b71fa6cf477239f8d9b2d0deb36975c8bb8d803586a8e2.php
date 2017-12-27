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
        $__internal_3a1afa5d156ee7e00da4dbe4ae4965e564653333883b59fb3c09b7db16042e3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a1afa5d156ee7e00da4dbe4ae4965e564653333883b59fb3c09b7db16042e3a->enter($__internal_3a1afa5d156ee7e00da4dbe4ae4965e564653333883b59fb3c09b7db16042e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_33338f9108f5d795b5a40d3e6af235c385e3803e37dea778caf3bbc1da964739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33338f9108f5d795b5a40d3e6af235c385e3803e37dea778caf3bbc1da964739->enter($__internal_33338f9108f5d795b5a40d3e6af235c385e3803e37dea778caf3bbc1da964739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_3a1afa5d156ee7e00da4dbe4ae4965e564653333883b59fb3c09b7db16042e3a->leave($__internal_3a1afa5d156ee7e00da4dbe4ae4965e564653333883b59fb3c09b7db16042e3a_prof);

        
        $__internal_33338f9108f5d795b5a40d3e6af235c385e3803e37dea778caf3bbc1da964739->leave($__internal_33338f9108f5d795b5a40d3e6af235c385e3803e37dea778caf3bbc1da964739_prof);

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
