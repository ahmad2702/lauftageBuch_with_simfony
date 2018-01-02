<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e240c91b1bf118bdb5d50f4a9b45996d0b33fc9ba070049a91776bbc8661583a extends Twig_Template
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
        $__internal_fe8a5e71b79eecac94daea7ad3b4e0a8956f92824a01333a8dff867c8a42ce4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe8a5e71b79eecac94daea7ad3b4e0a8956f92824a01333a8dff867c8a42ce4c->enter($__internal_fe8a5e71b79eecac94daea7ad3b4e0a8956f92824a01333a8dff867c8a42ce4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_427c2fe6397e8d44d94031afc8f6d807807de1acd54900f80611f6b68d03b267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_427c2fe6397e8d44d94031afc8f6d807807de1acd54900f80611f6b68d03b267->enter($__internal_427c2fe6397e8d44d94031afc8f6d807807de1acd54900f80611f6b68d03b267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_fe8a5e71b79eecac94daea7ad3b4e0a8956f92824a01333a8dff867c8a42ce4c->leave($__internal_fe8a5e71b79eecac94daea7ad3b4e0a8956f92824a01333a8dff867c8a42ce4c_prof);

        
        $__internal_427c2fe6397e8d44d94031afc8f6d807807de1acd54900f80611f6b68d03b267->leave($__internal_427c2fe6397e8d44d94031afc8f6d807807de1acd54900f80611f6b68d03b267_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/FormTable/form_row.html.php");
    }
}
