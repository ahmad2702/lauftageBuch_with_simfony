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
        $__internal_b3491d6ccb83db440797c9967b7dd5d12f582068efc70d3059430d8527b1ec38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3491d6ccb83db440797c9967b7dd5d12f582068efc70d3059430d8527b1ec38->enter($__internal_b3491d6ccb83db440797c9967b7dd5d12f582068efc70d3059430d8527b1ec38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_ad97f82bb3cca8a3e9d40880112644d87a56a3c9861362d29d41bbfbfed4480d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad97f82bb3cca8a3e9d40880112644d87a56a3c9861362d29d41bbfbfed4480d->enter($__internal_ad97f82bb3cca8a3e9d40880112644d87a56a3c9861362d29d41bbfbfed4480d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_b3491d6ccb83db440797c9967b7dd5d12f582068efc70d3059430d8527b1ec38->leave($__internal_b3491d6ccb83db440797c9967b7dd5d12f582068efc70d3059430d8527b1ec38_prof);

        
        $__internal_ad97f82bb3cca8a3e9d40880112644d87a56a3c9861362d29d41bbfbfed4480d->leave($__internal_ad97f82bb3cca8a3e9d40880112644d87a56a3c9861362d29d41bbfbfed4480d_prof);

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
