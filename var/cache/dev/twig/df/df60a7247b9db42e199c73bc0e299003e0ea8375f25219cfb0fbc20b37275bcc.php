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
        $__internal_ebd12dc55f814650ec84bb69017c316873624bc44be8c258a949ef46d8103d36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd12dc55f814650ec84bb69017c316873624bc44be8c258a949ef46d8103d36->enter($__internal_ebd12dc55f814650ec84bb69017c316873624bc44be8c258a949ef46d8103d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_039e40b053ad0aea786aa3c1e7ce502ee97d45081141fe932980d65d32b9fce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_039e40b053ad0aea786aa3c1e7ce502ee97d45081141fe932980d65d32b9fce9->enter($__internal_039e40b053ad0aea786aa3c1e7ce502ee97d45081141fe932980d65d32b9fce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_ebd12dc55f814650ec84bb69017c316873624bc44be8c258a949ef46d8103d36->leave($__internal_ebd12dc55f814650ec84bb69017c316873624bc44be8c258a949ef46d8103d36_prof);

        
        $__internal_039e40b053ad0aea786aa3c1e7ce502ee97d45081141fe932980d65d32b9fce9->leave($__internal_039e40b053ad0aea786aa3c1e7ce502ee97d45081141fe932980d65d32b9fce9_prof);

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
