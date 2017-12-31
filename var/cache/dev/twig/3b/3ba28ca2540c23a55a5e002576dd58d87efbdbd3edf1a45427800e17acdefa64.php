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
        $__internal_80114a2f5407147762e2f5f2695b73764ce4211cdd84b70bebe63402e42c94f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80114a2f5407147762e2f5f2695b73764ce4211cdd84b70bebe63402e42c94f6->enter($__internal_80114a2f5407147762e2f5f2695b73764ce4211cdd84b70bebe63402e42c94f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_c3c3728a07ae03529a537192039d5f120b3b58a565f9265fb165b05048e688c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c3728a07ae03529a537192039d5f120b3b58a565f9265fb165b05048e688c1->enter($__internal_c3c3728a07ae03529a537192039d5f120b3b58a565f9265fb165b05048e688c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_80114a2f5407147762e2f5f2695b73764ce4211cdd84b70bebe63402e42c94f6->leave($__internal_80114a2f5407147762e2f5f2695b73764ce4211cdd84b70bebe63402e42c94f6_prof);

        
        $__internal_c3c3728a07ae03529a537192039d5f120b3b58a565f9265fb165b05048e688c1->leave($__internal_c3c3728a07ae03529a537192039d5f120b3b58a565f9265fb165b05048e688c1_prof);

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
