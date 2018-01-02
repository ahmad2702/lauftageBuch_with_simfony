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
        $__internal_22346bff0e322d98a04ec1915133cbff59a5a9a5a8eba08b7f74e7603239c315 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22346bff0e322d98a04ec1915133cbff59a5a9a5a8eba08b7f74e7603239c315->enter($__internal_22346bff0e322d98a04ec1915133cbff59a5a9a5a8eba08b7f74e7603239c315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_28012af2291a8b6aacf72515d6b7e03b4a2b351e1e2f8e1666406d23ce42001f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28012af2291a8b6aacf72515d6b7e03b4a2b351e1e2f8e1666406d23ce42001f->enter($__internal_28012af2291a8b6aacf72515d6b7e03b4a2b351e1e2f8e1666406d23ce42001f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_22346bff0e322d98a04ec1915133cbff59a5a9a5a8eba08b7f74e7603239c315->leave($__internal_22346bff0e322d98a04ec1915133cbff59a5a9a5a8eba08b7f74e7603239c315_prof);

        
        $__internal_28012af2291a8b6aacf72515d6b7e03b4a2b351e1e2f8e1666406d23ce42001f->leave($__internal_28012af2291a8b6aacf72515d6b7e03b4a2b351e1e2f8e1666406d23ce42001f_prof);

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
