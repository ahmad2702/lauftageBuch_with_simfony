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
        $__internal_2b3f58807276a1c19377b120eaffecf2a89c2b3c5ddecbcc2a45bdd4956a740b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b3f58807276a1c19377b120eaffecf2a89c2b3c5ddecbcc2a45bdd4956a740b->enter($__internal_2b3f58807276a1c19377b120eaffecf2a89c2b3c5ddecbcc2a45bdd4956a740b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_2a5d5ca1e732b67b5e511055fddfa98426f91b22c6daa8a70bfcb1815d179a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a5d5ca1e732b67b5e511055fddfa98426f91b22c6daa8a70bfcb1815d179a4e->enter($__internal_2a5d5ca1e732b67b5e511055fddfa98426f91b22c6daa8a70bfcb1815d179a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_2b3f58807276a1c19377b120eaffecf2a89c2b3c5ddecbcc2a45bdd4956a740b->leave($__internal_2b3f58807276a1c19377b120eaffecf2a89c2b3c5ddecbcc2a45bdd4956a740b_prof);

        
        $__internal_2a5d5ca1e732b67b5e511055fddfa98426f91b22c6daa8a70bfcb1815d179a4e->leave($__internal_2a5d5ca1e732b67b5e511055fddfa98426f91b22c6daa8a70bfcb1815d179a4e_prof);

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
