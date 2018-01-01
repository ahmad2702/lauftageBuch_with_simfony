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
        $__internal_ee11e74ec8f8c1bb1f9813a8b35cdca4d5dd86dc666e3b2d64e7dbc9b1d021e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee11e74ec8f8c1bb1f9813a8b35cdca4d5dd86dc666e3b2d64e7dbc9b1d021e4->enter($__internal_ee11e74ec8f8c1bb1f9813a8b35cdca4d5dd86dc666e3b2d64e7dbc9b1d021e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_835c9210f3a57f2d178c2d928a76db1e0030775a057cac880516f5ec1587df89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_835c9210f3a57f2d178c2d928a76db1e0030775a057cac880516f5ec1587df89->enter($__internal_835c9210f3a57f2d178c2d928a76db1e0030775a057cac880516f5ec1587df89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_ee11e74ec8f8c1bb1f9813a8b35cdca4d5dd86dc666e3b2d64e7dbc9b1d021e4->leave($__internal_ee11e74ec8f8c1bb1f9813a8b35cdca4d5dd86dc666e3b2d64e7dbc9b1d021e4_prof);

        
        $__internal_835c9210f3a57f2d178c2d928a76db1e0030775a057cac880516f5ec1587df89->leave($__internal_835c9210f3a57f2d178c2d928a76db1e0030775a057cac880516f5ec1587df89_prof);

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
