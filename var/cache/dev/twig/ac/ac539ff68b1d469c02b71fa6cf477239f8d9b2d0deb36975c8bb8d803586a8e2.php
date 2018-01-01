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
        $__internal_091edd6019c60a045e9b933bb71620c0205817c3b6019155c5ca92bae65a0093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_091edd6019c60a045e9b933bb71620c0205817c3b6019155c5ca92bae65a0093->enter($__internal_091edd6019c60a045e9b933bb71620c0205817c3b6019155c5ca92bae65a0093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_bce4829934cca6110b60e99251951967d9a6fe9a6b82ba3e49924db42b4c8dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce4829934cca6110b60e99251951967d9a6fe9a6b82ba3e49924db42b4c8dec->enter($__internal_bce4829934cca6110b60e99251951967d9a6fe9a6b82ba3e49924db42b4c8dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_091edd6019c60a045e9b933bb71620c0205817c3b6019155c5ca92bae65a0093->leave($__internal_091edd6019c60a045e9b933bb71620c0205817c3b6019155c5ca92bae65a0093_prof);

        
        $__internal_bce4829934cca6110b60e99251951967d9a6fe9a6b82ba3e49924db42b4c8dec->leave($__internal_bce4829934cca6110b60e99251951967d9a6fe9a6b82ba3e49924db42b4c8dec_prof);

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
