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
        $__internal_54e061dc2828bf008da832f91a68d8e2cf803fc4e0d2340f58108f4495cff315 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54e061dc2828bf008da832f91a68d8e2cf803fc4e0d2340f58108f4495cff315->enter($__internal_54e061dc2828bf008da832f91a68d8e2cf803fc4e0d2340f58108f4495cff315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_6a2d848e7a70d6abb8a3e68fb8fc324dc9aabf30d0e1f9dcfb06ad5c8ca31435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a2d848e7a70d6abb8a3e68fb8fc324dc9aabf30d0e1f9dcfb06ad5c8ca31435->enter($__internal_6a2d848e7a70d6abb8a3e68fb8fc324dc9aabf30d0e1f9dcfb06ad5c8ca31435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_54e061dc2828bf008da832f91a68d8e2cf803fc4e0d2340f58108f4495cff315->leave($__internal_54e061dc2828bf008da832f91a68d8e2cf803fc4e0d2340f58108f4495cff315_prof);

        
        $__internal_6a2d848e7a70d6abb8a3e68fb8fc324dc9aabf30d0e1f9dcfb06ad5c8ca31435->leave($__internal_6a2d848e7a70d6abb8a3e68fb8fc324dc9aabf30d0e1f9dcfb06ad5c8ca31435_prof);

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
