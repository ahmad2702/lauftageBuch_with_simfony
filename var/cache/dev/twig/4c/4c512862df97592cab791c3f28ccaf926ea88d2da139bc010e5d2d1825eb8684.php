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
        $__internal_0914acc1332e9f87a874932e93857317b89fb5952c152bfbebb8fe608d7e0592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0914acc1332e9f87a874932e93857317b89fb5952c152bfbebb8fe608d7e0592->enter($__internal_0914acc1332e9f87a874932e93857317b89fb5952c152bfbebb8fe608d7e0592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_361ab2a27d9cd29243f319c1cade70b1a2177c315b6fc2684951e520955219a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_361ab2a27d9cd29243f319c1cade70b1a2177c315b6fc2684951e520955219a2->enter($__internal_361ab2a27d9cd29243f319c1cade70b1a2177c315b6fc2684951e520955219a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_0914acc1332e9f87a874932e93857317b89fb5952c152bfbebb8fe608d7e0592->leave($__internal_0914acc1332e9f87a874932e93857317b89fb5952c152bfbebb8fe608d7e0592_prof);

        
        $__internal_361ab2a27d9cd29243f319c1cade70b1a2177c315b6fc2684951e520955219a2->leave($__internal_361ab2a27d9cd29243f319c1cade70b1a2177c315b6fc2684951e520955219a2_prof);

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
