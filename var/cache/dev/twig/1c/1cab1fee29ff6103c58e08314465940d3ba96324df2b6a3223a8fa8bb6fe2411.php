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
        $__internal_a9e5b89ea63786a954e39ad0e0489ae296e87bac6b301f76e349217d2ef85bdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9e5b89ea63786a954e39ad0e0489ae296e87bac6b301f76e349217d2ef85bdd->enter($__internal_a9e5b89ea63786a954e39ad0e0489ae296e87bac6b301f76e349217d2ef85bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_c3c748192012cb81910cbbed1b4ae2d09da028ed8ea9f5c455633030544d91f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c748192012cb81910cbbed1b4ae2d09da028ed8ea9f5c455633030544d91f3->enter($__internal_c3c748192012cb81910cbbed1b4ae2d09da028ed8ea9f5c455633030544d91f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_a9e5b89ea63786a954e39ad0e0489ae296e87bac6b301f76e349217d2ef85bdd->leave($__internal_a9e5b89ea63786a954e39ad0e0489ae296e87bac6b301f76e349217d2ef85bdd_prof);

        
        $__internal_c3c748192012cb81910cbbed1b4ae2d09da028ed8ea9f5c455633030544d91f3->leave($__internal_c3c748192012cb81910cbbed1b4ae2d09da028ed8ea9f5c455633030544d91f3_prof);

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
", "@Framework/FormTable/button_row.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/FormTable/button_row.html.php");
    }
}
