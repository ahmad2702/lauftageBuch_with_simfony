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
        $__internal_ad6efc95bd5a3d96f2cc6245fcbdee281c41649e1e241886dd35c26400bae108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad6efc95bd5a3d96f2cc6245fcbdee281c41649e1e241886dd35c26400bae108->enter($__internal_ad6efc95bd5a3d96f2cc6245fcbdee281c41649e1e241886dd35c26400bae108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_be76271d2c0c313c701b0596a0ce23400e6f0674187ed9f79f6baf4f6755e9fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be76271d2c0c313c701b0596a0ce23400e6f0674187ed9f79f6baf4f6755e9fa->enter($__internal_be76271d2c0c313c701b0596a0ce23400e6f0674187ed9f79f6baf4f6755e9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_ad6efc95bd5a3d96f2cc6245fcbdee281c41649e1e241886dd35c26400bae108->leave($__internal_ad6efc95bd5a3d96f2cc6245fcbdee281c41649e1e241886dd35c26400bae108_prof);

        
        $__internal_be76271d2c0c313c701b0596a0ce23400e6f0674187ed9f79f6baf4f6755e9fa->leave($__internal_be76271d2c0c313c701b0596a0ce23400e6f0674187ed9f79f6baf4f6755e9fa_prof);

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
