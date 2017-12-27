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
        $__internal_f615a757d2c7960363559504beceb4d2072f9b3b8d7807cf6258f438fbf8e2b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f615a757d2c7960363559504beceb4d2072f9b3b8d7807cf6258f438fbf8e2b6->enter($__internal_f615a757d2c7960363559504beceb4d2072f9b3b8d7807cf6258f438fbf8e2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_f4a3fa7d39def6a49b37deb5d59ee74883538e38d8f0b6d539264782c430d39b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a3fa7d39def6a49b37deb5d59ee74883538e38d8f0b6d539264782c430d39b->enter($__internal_f4a3fa7d39def6a49b37deb5d59ee74883538e38d8f0b6d539264782c430d39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_f615a757d2c7960363559504beceb4d2072f9b3b8d7807cf6258f438fbf8e2b6->leave($__internal_f615a757d2c7960363559504beceb4d2072f9b3b8d7807cf6258f438fbf8e2b6_prof);

        
        $__internal_f4a3fa7d39def6a49b37deb5d59ee74883538e38d8f0b6d539264782c430d39b->leave($__internal_f4a3fa7d39def6a49b37deb5d59ee74883538e38d8f0b6d539264782c430d39b_prof);

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
