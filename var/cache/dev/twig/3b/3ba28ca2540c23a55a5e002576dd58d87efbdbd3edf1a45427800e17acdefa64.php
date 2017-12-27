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
        $__internal_ffd58a2d33a1d42fe646573c328f65b746a21bd03c1b58c0f27554030db12750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffd58a2d33a1d42fe646573c328f65b746a21bd03c1b58c0f27554030db12750->enter($__internal_ffd58a2d33a1d42fe646573c328f65b746a21bd03c1b58c0f27554030db12750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_245acbc5bca2b0fbe4e47476d7d6ddf9e61dfee7ca16bad209bab83d88bed02e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_245acbc5bca2b0fbe4e47476d7d6ddf9e61dfee7ca16bad209bab83d88bed02e->enter($__internal_245acbc5bca2b0fbe4e47476d7d6ddf9e61dfee7ca16bad209bab83d88bed02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_ffd58a2d33a1d42fe646573c328f65b746a21bd03c1b58c0f27554030db12750->leave($__internal_ffd58a2d33a1d42fe646573c328f65b746a21bd03c1b58c0f27554030db12750_prof);

        
        $__internal_245acbc5bca2b0fbe4e47476d7d6ddf9e61dfee7ca16bad209bab83d88bed02e->leave($__internal_245acbc5bca2b0fbe4e47476d7d6ddf9e61dfee7ca16bad209bab83d88bed02e_prof);

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
