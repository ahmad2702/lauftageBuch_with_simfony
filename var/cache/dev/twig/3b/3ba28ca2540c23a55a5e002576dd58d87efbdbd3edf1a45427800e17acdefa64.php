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
        $__internal_663c6fb2d1c09878f4a1b4e68408e1b533ed1eae6ce1d710d320f8bb9b5614c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_663c6fb2d1c09878f4a1b4e68408e1b533ed1eae6ce1d710d320f8bb9b5614c1->enter($__internal_663c6fb2d1c09878f4a1b4e68408e1b533ed1eae6ce1d710d320f8bb9b5614c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_f99315c053726e45b4ccabbfa05cd5726f963794c99d106b8daf92407f652f5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f99315c053726e45b4ccabbfa05cd5726f963794c99d106b8daf92407f652f5a->enter($__internal_f99315c053726e45b4ccabbfa05cd5726f963794c99d106b8daf92407f652f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_663c6fb2d1c09878f4a1b4e68408e1b533ed1eae6ce1d710d320f8bb9b5614c1->leave($__internal_663c6fb2d1c09878f4a1b4e68408e1b533ed1eae6ce1d710d320f8bb9b5614c1_prof);

        
        $__internal_f99315c053726e45b4ccabbfa05cd5726f963794c99d106b8daf92407f652f5a->leave($__internal_f99315c053726e45b4ccabbfa05cd5726f963794c99d106b8daf92407f652f5a_prof);

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
