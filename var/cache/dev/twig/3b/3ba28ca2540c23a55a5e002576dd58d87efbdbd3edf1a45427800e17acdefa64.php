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
        $__internal_c93a444d48f4c0e62bce6a5cfd290ca02becfeafc0c7eb598d40a1e006d69510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c93a444d48f4c0e62bce6a5cfd290ca02becfeafc0c7eb598d40a1e006d69510->enter($__internal_c93a444d48f4c0e62bce6a5cfd290ca02becfeafc0c7eb598d40a1e006d69510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_af1ad2656a0269c0ac174f8c24799b4bd8ac959190645aad28ede389799bcfaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1ad2656a0269c0ac174f8c24799b4bd8ac959190645aad28ede389799bcfaa->enter($__internal_af1ad2656a0269c0ac174f8c24799b4bd8ac959190645aad28ede389799bcfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_c93a444d48f4c0e62bce6a5cfd290ca02becfeafc0c7eb598d40a1e006d69510->leave($__internal_c93a444d48f4c0e62bce6a5cfd290ca02becfeafc0c7eb598d40a1e006d69510_prof);

        
        $__internal_af1ad2656a0269c0ac174f8c24799b4bd8ac959190645aad28ede389799bcfaa->leave($__internal_af1ad2656a0269c0ac174f8c24799b4bd8ac959190645aad28ede389799bcfaa_prof);

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
