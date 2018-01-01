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
        $__internal_5890e6c023e8a05f59c3f91ec6f8bf43080d0efe886f45546e5e761fd4298520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5890e6c023e8a05f59c3f91ec6f8bf43080d0efe886f45546e5e761fd4298520->enter($__internal_5890e6c023e8a05f59c3f91ec6f8bf43080d0efe886f45546e5e761fd4298520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_c6c4ce6a082d0c241b449dd21e9ac8bd1add62124c6da02156f0745217694589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c4ce6a082d0c241b449dd21e9ac8bd1add62124c6da02156f0745217694589->enter($__internal_c6c4ce6a082d0c241b449dd21e9ac8bd1add62124c6da02156f0745217694589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_5890e6c023e8a05f59c3f91ec6f8bf43080d0efe886f45546e5e761fd4298520->leave($__internal_5890e6c023e8a05f59c3f91ec6f8bf43080d0efe886f45546e5e761fd4298520_prof);

        
        $__internal_c6c4ce6a082d0c241b449dd21e9ac8bd1add62124c6da02156f0745217694589->leave($__internal_c6c4ce6a082d0c241b449dd21e9ac8bd1add62124c6da02156f0745217694589_prof);

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
