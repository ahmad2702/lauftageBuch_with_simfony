<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_d8f8dcf2facae7b515be4dcc58c0b78639775872642c471b9ce1a276f9ad2e80 extends Twig_Template
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
        $__internal_91fd945c72d7d78cb0afa540bb6cdfa47e2f4ae85df043eee89868f073216ad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91fd945c72d7d78cb0afa540bb6cdfa47e2f4ae85df043eee89868f073216ad6->enter($__internal_91fd945c72d7d78cb0afa540bb6cdfa47e2f4ae85df043eee89868f073216ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_51cc12a22f3069d66ccf25c64b66239eae43c16a2e5511df74fc344ada54f1fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51cc12a22f3069d66ccf25c64b66239eae43c16a2e5511df74fc344ada54f1fe->enter($__internal_51cc12a22f3069d66ccf25c64b66239eae43c16a2e5511df74fc344ada54f1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_91fd945c72d7d78cb0afa540bb6cdfa47e2f4ae85df043eee89868f073216ad6->leave($__internal_91fd945c72d7d78cb0afa540bb6cdfa47e2f4ae85df043eee89868f073216ad6_prof);

        
        $__internal_51cc12a22f3069d66ccf25c64b66239eae43c16a2e5511df74fc344ada54f1fe->leave($__internal_51cc12a22f3069d66ccf25c64b66239eae43c16a2e5511df74fc344ada54f1fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/reset_widget.html.php");
    }
}
