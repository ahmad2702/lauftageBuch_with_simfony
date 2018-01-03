<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_2a79a50a84ea6ad5ec74028e83aeda20fd8fb246e242e896d708a376d5fb0b88 extends Twig_Template
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
        $__internal_de08c574839e60f270a76dda0fe0553db032ea200a565f4452baacc81f1dd6b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de08c574839e60f270a76dda0fe0553db032ea200a565f4452baacc81f1dd6b1->enter($__internal_de08c574839e60f270a76dda0fe0553db032ea200a565f4452baacc81f1dd6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_429f0726dc37e4204934e47e94ba605e1090b2466c8a51ac72e754b2770aa504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429f0726dc37e4204934e47e94ba605e1090b2466c8a51ac72e754b2770aa504->enter($__internal_429f0726dc37e4204934e47e94ba605e1090b2466c8a51ac72e754b2770aa504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_de08c574839e60f270a76dda0fe0553db032ea200a565f4452baacc81f1dd6b1->leave($__internal_de08c574839e60f270a76dda0fe0553db032ea200a565f4452baacc81f1dd6b1_prof);

        
        $__internal_429f0726dc37e4204934e47e94ba605e1090b2466c8a51ac72e754b2770aa504->leave($__internal_429f0726dc37e4204934e47e94ba605e1090b2466c8a51ac72e754b2770aa504_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
