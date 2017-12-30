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
        $__internal_74c63639bc6695f0eb24cceea0819efe7c7ab38ae9e89d3e01a3a6426c44385c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c63639bc6695f0eb24cceea0819efe7c7ab38ae9e89d3e01a3a6426c44385c->enter($__internal_74c63639bc6695f0eb24cceea0819efe7c7ab38ae9e89d3e01a3a6426c44385c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_f37c2d653a28465e08d0619ab87014c2e121b7411a69459468bce1d4d06189fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f37c2d653a28465e08d0619ab87014c2e121b7411a69459468bce1d4d06189fd->enter($__internal_f37c2d653a28465e08d0619ab87014c2e121b7411a69459468bce1d4d06189fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_74c63639bc6695f0eb24cceea0819efe7c7ab38ae9e89d3e01a3a6426c44385c->leave($__internal_74c63639bc6695f0eb24cceea0819efe7c7ab38ae9e89d3e01a3a6426c44385c_prof);

        
        $__internal_f37c2d653a28465e08d0619ab87014c2e121b7411a69459468bce1d4d06189fd->leave($__internal_f37c2d653a28465e08d0619ab87014c2e121b7411a69459468bce1d4d06189fd_prof);

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
