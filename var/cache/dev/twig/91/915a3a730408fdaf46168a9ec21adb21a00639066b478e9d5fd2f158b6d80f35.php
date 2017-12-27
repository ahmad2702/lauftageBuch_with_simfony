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
        $__internal_050db9c5f858cf9d69f8ceb225ed1f2a1099450c5b33a3ec09fbe7af07b5855e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_050db9c5f858cf9d69f8ceb225ed1f2a1099450c5b33a3ec09fbe7af07b5855e->enter($__internal_050db9c5f858cf9d69f8ceb225ed1f2a1099450c5b33a3ec09fbe7af07b5855e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_2f343ddc5cbefedb2347be6d3292ba142fa1504989c037a03b5c3934e0423cf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f343ddc5cbefedb2347be6d3292ba142fa1504989c037a03b5c3934e0423cf6->enter($__internal_2f343ddc5cbefedb2347be6d3292ba142fa1504989c037a03b5c3934e0423cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_050db9c5f858cf9d69f8ceb225ed1f2a1099450c5b33a3ec09fbe7af07b5855e->leave($__internal_050db9c5f858cf9d69f8ceb225ed1f2a1099450c5b33a3ec09fbe7af07b5855e_prof);

        
        $__internal_2f343ddc5cbefedb2347be6d3292ba142fa1504989c037a03b5c3934e0423cf6->leave($__internal_2f343ddc5cbefedb2347be6d3292ba142fa1504989c037a03b5c3934e0423cf6_prof);

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
