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
        $__internal_efaa7f3aabdf3ce8a008527d5dfc916cb56ca65f304599fa9896397bb93452e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efaa7f3aabdf3ce8a008527d5dfc916cb56ca65f304599fa9896397bb93452e5->enter($__internal_efaa7f3aabdf3ce8a008527d5dfc916cb56ca65f304599fa9896397bb93452e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_af1a1d8a1b33cb9af96ee641c738b66c1a08296316fc02d3ad4216032804397f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1a1d8a1b33cb9af96ee641c738b66c1a08296316fc02d3ad4216032804397f->enter($__internal_af1a1d8a1b33cb9af96ee641c738b66c1a08296316fc02d3ad4216032804397f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_efaa7f3aabdf3ce8a008527d5dfc916cb56ca65f304599fa9896397bb93452e5->leave($__internal_efaa7f3aabdf3ce8a008527d5dfc916cb56ca65f304599fa9896397bb93452e5_prof);

        
        $__internal_af1a1d8a1b33cb9af96ee641c738b66c1a08296316fc02d3ad4216032804397f->leave($__internal_af1a1d8a1b33cb9af96ee641c738b66c1a08296316fc02d3ad4216032804397f_prof);

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
