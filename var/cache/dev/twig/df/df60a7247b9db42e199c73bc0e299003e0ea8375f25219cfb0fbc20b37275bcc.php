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
        $__internal_ea53b7b70b44855fbd0dd6a949a44d5d1a9f5b59b6a2b4a04d6252cd91822ad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea53b7b70b44855fbd0dd6a949a44d5d1a9f5b59b6a2b4a04d6252cd91822ad5->enter($__internal_ea53b7b70b44855fbd0dd6a949a44d5d1a9f5b59b6a2b4a04d6252cd91822ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_84078f08311ac800bfa2ec607e49db7435c3e3dfb72d20fb0eaa291d24227c9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84078f08311ac800bfa2ec607e49db7435c3e3dfb72d20fb0eaa291d24227c9b->enter($__internal_84078f08311ac800bfa2ec607e49db7435c3e3dfb72d20fb0eaa291d24227c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_ea53b7b70b44855fbd0dd6a949a44d5d1a9f5b59b6a2b4a04d6252cd91822ad5->leave($__internal_ea53b7b70b44855fbd0dd6a949a44d5d1a9f5b59b6a2b4a04d6252cd91822ad5_prof);

        
        $__internal_84078f08311ac800bfa2ec607e49db7435c3e3dfb72d20fb0eaa291d24227c9b->leave($__internal_84078f08311ac800bfa2ec607e49db7435c3e3dfb72d20fb0eaa291d24227c9b_prof);

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
", "@Framework/Form/reset_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/reset_widget.html.php");
    }
}
