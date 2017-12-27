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
        $__internal_77dcdd825e00eba5df6f410c559bd854fafdf9e5776cceb6bb3a32328f8a241d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77dcdd825e00eba5df6f410c559bd854fafdf9e5776cceb6bb3a32328f8a241d->enter($__internal_77dcdd825e00eba5df6f410c559bd854fafdf9e5776cceb6bb3a32328f8a241d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_3f16d3ffca81dc80058c22a0f541c2e83fdb2251e19518af0d9a04c27a8b2660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f16d3ffca81dc80058c22a0f541c2e83fdb2251e19518af0d9a04c27a8b2660->enter($__internal_3f16d3ffca81dc80058c22a0f541c2e83fdb2251e19518af0d9a04c27a8b2660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_77dcdd825e00eba5df6f410c559bd854fafdf9e5776cceb6bb3a32328f8a241d->leave($__internal_77dcdd825e00eba5df6f410c559bd854fafdf9e5776cceb6bb3a32328f8a241d_prof);

        
        $__internal_3f16d3ffca81dc80058c22a0f541c2e83fdb2251e19518af0d9a04c27a8b2660->leave($__internal_3f16d3ffca81dc80058c22a0f541c2e83fdb2251e19518af0d9a04c27a8b2660_prof);

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
