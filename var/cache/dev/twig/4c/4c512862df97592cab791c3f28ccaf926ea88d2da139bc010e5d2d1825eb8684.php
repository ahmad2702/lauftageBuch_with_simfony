<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_21a12c171e546067b58697f23cb091af481eace2a02875a7a72a34fcf53d11a1 extends Twig_Template
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
        $__internal_52b5e1b87f1747eff5046d2c95cc666702695d45aea72149c70ab56ec7f33e92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52b5e1b87f1747eff5046d2c95cc666702695d45aea72149c70ab56ec7f33e92->enter($__internal_52b5e1b87f1747eff5046d2c95cc666702695d45aea72149c70ab56ec7f33e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_2a7b59776962da88f4cb0e02687d5fe57e7cb0a1d304b3f130e3016a68cb5353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a7b59776962da88f4cb0e02687d5fe57e7cb0a1d304b3f130e3016a68cb5353->enter($__internal_2a7b59776962da88f4cb0e02687d5fe57e7cb0a1d304b3f130e3016a68cb5353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_52b5e1b87f1747eff5046d2c95cc666702695d45aea72149c70ab56ec7f33e92->leave($__internal_52b5e1b87f1747eff5046d2c95cc666702695d45aea72149c70ab56ec7f33e92_prof);

        
        $__internal_2a7b59776962da88f4cb0e02687d5fe57e7cb0a1d304b3f130e3016a68cb5353->leave($__internal_2a7b59776962da88f4cb0e02687d5fe57e7cb0a1d304b3f130e3016a68cb5353_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/submit_widget.html.php");
    }
}
