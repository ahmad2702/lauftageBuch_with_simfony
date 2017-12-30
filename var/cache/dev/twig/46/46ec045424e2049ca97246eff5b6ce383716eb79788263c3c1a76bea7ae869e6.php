<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0ca78c9c1968de9b155212a82bfe84731405ec866305e88d1c2ab2264c922558 extends Twig_Template
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
        $__internal_4a95446acafb7f8c02e20b342c5f975ad1d03f9d639a1ced26be272810516e92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a95446acafb7f8c02e20b342c5f975ad1d03f9d639a1ced26be272810516e92->enter($__internal_4a95446acafb7f8c02e20b342c5f975ad1d03f9d639a1ced26be272810516e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_aba0d17d781ab0291ea90684ff09541077a6253c60637c5eb67f83dadee6785b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba0d17d781ab0291ea90684ff09541077a6253c60637c5eb67f83dadee6785b->enter($__internal_aba0d17d781ab0291ea90684ff09541077a6253c60637c5eb67f83dadee6785b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4a95446acafb7f8c02e20b342c5f975ad1d03f9d639a1ced26be272810516e92->leave($__internal_4a95446acafb7f8c02e20b342c5f975ad1d03f9d639a1ced26be272810516e92_prof);

        
        $__internal_aba0d17d781ab0291ea90684ff09541077a6253c60637c5eb67f83dadee6785b->leave($__internal_aba0d17d781ab0291ea90684ff09541077a6253c60637c5eb67f83dadee6785b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/collection_widget.html.php");
    }
}
