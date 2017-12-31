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
        $__internal_08cb808182f3d12a1212452e6eb8bc0e79be7d8a51749bd0db5bbd311c56f2c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08cb808182f3d12a1212452e6eb8bc0e79be7d8a51749bd0db5bbd311c56f2c2->enter($__internal_08cb808182f3d12a1212452e6eb8bc0e79be7d8a51749bd0db5bbd311c56f2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_dc284c0cd12edcb303ed9f5d9f706aae6071896a16f930f8d027a9105d96585f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc284c0cd12edcb303ed9f5d9f706aae6071896a16f930f8d027a9105d96585f->enter($__internal_dc284c0cd12edcb303ed9f5d9f706aae6071896a16f930f8d027a9105d96585f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_08cb808182f3d12a1212452e6eb8bc0e79be7d8a51749bd0db5bbd311c56f2c2->leave($__internal_08cb808182f3d12a1212452e6eb8bc0e79be7d8a51749bd0db5bbd311c56f2c2_prof);

        
        $__internal_dc284c0cd12edcb303ed9f5d9f706aae6071896a16f930f8d027a9105d96585f->leave($__internal_dc284c0cd12edcb303ed9f5d9f706aae6071896a16f930f8d027a9105d96585f_prof);

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
", "@Framework/FormTable/hidden_row.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
