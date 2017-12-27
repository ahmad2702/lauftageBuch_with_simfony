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
        $__internal_1bf82bcdf11f95f10e8500f056e529fe70af184b53b66ddf16df8d3986a9ca76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bf82bcdf11f95f10e8500f056e529fe70af184b53b66ddf16df8d3986a9ca76->enter($__internal_1bf82bcdf11f95f10e8500f056e529fe70af184b53b66ddf16df8d3986a9ca76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_06a919ddbd206ce613310a641a82715e8c289a3e4ffbcb512e484fac92a63cb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06a919ddbd206ce613310a641a82715e8c289a3e4ffbcb512e484fac92a63cb5->enter($__internal_06a919ddbd206ce613310a641a82715e8c289a3e4ffbcb512e484fac92a63cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_1bf82bcdf11f95f10e8500f056e529fe70af184b53b66ddf16df8d3986a9ca76->leave($__internal_1bf82bcdf11f95f10e8500f056e529fe70af184b53b66ddf16df8d3986a9ca76_prof);

        
        $__internal_06a919ddbd206ce613310a641a82715e8c289a3e4ffbcb512e484fac92a63cb5->leave($__internal_06a919ddbd206ce613310a641a82715e8c289a3e4ffbcb512e484fac92a63cb5_prof);

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
", "@Framework/FormTable/form_row.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/FormTable/form_row.html.php");
    }
}
