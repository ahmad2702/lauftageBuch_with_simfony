<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_2de72c5f1d9096a87a1b3979b33f8422aaa7bbe315eacd5be322d2c73dc80229 extends Twig_Template
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
        $__internal_894d64be312649989e1b305341abeab148b6dc40cb8595348a1ba100011e9470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_894d64be312649989e1b305341abeab148b6dc40cb8595348a1ba100011e9470->enter($__internal_894d64be312649989e1b305341abeab148b6dc40cb8595348a1ba100011e9470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_e63d02953943e2cb2463110d8e435f59587a77118e56c1541791ce6047c4920f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e63d02953943e2cb2463110d8e435f59587a77118e56c1541791ce6047c4920f->enter($__internal_e63d02953943e2cb2463110d8e435f59587a77118e56c1541791ce6047c4920f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_894d64be312649989e1b305341abeab148b6dc40cb8595348a1ba100011e9470->leave($__internal_894d64be312649989e1b305341abeab148b6dc40cb8595348a1ba100011e9470_prof);

        
        $__internal_e63d02953943e2cb2463110d8e435f59587a77118e56c1541791ce6047c4920f->leave($__internal_e63d02953943e2cb2463110d8e435f59587a77118e56c1541791ce6047c4920f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/FormTable/button_row.html.php");
    }
}
