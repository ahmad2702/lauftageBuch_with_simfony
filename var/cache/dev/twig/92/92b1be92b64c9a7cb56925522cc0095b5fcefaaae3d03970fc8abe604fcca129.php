<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f16a68fea9c7520a98ab379e19659130f59d9d09a9820faedd42d7dc649f115f extends Twig_Template
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
        $__internal_3c8b8376f3539f33bbb6163d768f97a8a1d8b120d3894713a48a53078321863e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c8b8376f3539f33bbb6163d768f97a8a1d8b120d3894713a48a53078321863e->enter($__internal_3c8b8376f3539f33bbb6163d768f97a8a1d8b120d3894713a48a53078321863e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_f6bbb08ea84587a04857291bea677b195495b7aba1406fbf8c2c47aa715718d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6bbb08ea84587a04857291bea677b195495b7aba1406fbf8c2c47aa715718d4->enter($__internal_f6bbb08ea84587a04857291bea677b195495b7aba1406fbf8c2c47aa715718d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_3c8b8376f3539f33bbb6163d768f97a8a1d8b120d3894713a48a53078321863e->leave($__internal_3c8b8376f3539f33bbb6163d768f97a8a1d8b120d3894713a48a53078321863e_prof);

        
        $__internal_f6bbb08ea84587a04857291bea677b195495b7aba1406fbf8c2c47aa715718d4->leave($__internal_f6bbb08ea84587a04857291bea677b195495b7aba1406fbf8c2c47aa715718d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/form.html.php");
    }
}
