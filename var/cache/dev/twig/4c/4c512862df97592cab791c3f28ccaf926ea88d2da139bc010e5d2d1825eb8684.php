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
        $__internal_ff732e2a40bedd633cf23c8d4925469b3f9433d14fba5658a0f6468fca67a58c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff732e2a40bedd633cf23c8d4925469b3f9433d14fba5658a0f6468fca67a58c->enter($__internal_ff732e2a40bedd633cf23c8d4925469b3f9433d14fba5658a0f6468fca67a58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_f19015632ca717324e653ab15278bbd44faa37efdf1b7949aa30d2251327f0fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f19015632ca717324e653ab15278bbd44faa37efdf1b7949aa30d2251327f0fe->enter($__internal_f19015632ca717324e653ab15278bbd44faa37efdf1b7949aa30d2251327f0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_ff732e2a40bedd633cf23c8d4925469b3f9433d14fba5658a0f6468fca67a58c->leave($__internal_ff732e2a40bedd633cf23c8d4925469b3f9433d14fba5658a0f6468fca67a58c_prof);

        
        $__internal_f19015632ca717324e653ab15278bbd44faa37efdf1b7949aa30d2251327f0fe->leave($__internal_f19015632ca717324e653ab15278bbd44faa37efdf1b7949aa30d2251327f0fe_prof);

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
", "@Framework/Form/submit_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/submit_widget.html.php");
    }
}
