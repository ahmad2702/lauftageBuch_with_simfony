<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_bcab1d24534be843d8210db5490f97666660fea186a5f65991706f2bd45ba5ee extends Twig_Template
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
        $__internal_617d44d3ad5ca2ffb8e5203ee5b65c2fc1e575e54b3b82db27725e801405935d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_617d44d3ad5ca2ffb8e5203ee5b65c2fc1e575e54b3b82db27725e801405935d->enter($__internal_617d44d3ad5ca2ffb8e5203ee5b65c2fc1e575e54b3b82db27725e801405935d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_faee96f238a3bea1f6f86d05ed6664d5e8cc592ba248d4e59634788b9215d754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faee96f238a3bea1f6f86d05ed6664d5e8cc592ba248d4e59634788b9215d754->enter($__internal_faee96f238a3bea1f6f86d05ed6664d5e8cc592ba248d4e59634788b9215d754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_617d44d3ad5ca2ffb8e5203ee5b65c2fc1e575e54b3b82db27725e801405935d->leave($__internal_617d44d3ad5ca2ffb8e5203ee5b65c2fc1e575e54b3b82db27725e801405935d_prof);

        
        $__internal_faee96f238a3bea1f6f86d05ed6664d5e8cc592ba248d4e59634788b9215d754->leave($__internal_faee96f238a3bea1f6f86d05ed6664d5e8cc592ba248d4e59634788b9215d754_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/money_widget.html.php");
    }
}
