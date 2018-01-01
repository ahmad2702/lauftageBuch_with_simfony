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
        $__internal_b23fd4a8fa1a52b5a5660e84dd2ac08ab96fe8f7d1593e0f1b9f5a04b0cfc6ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b23fd4a8fa1a52b5a5660e84dd2ac08ab96fe8f7d1593e0f1b9f5a04b0cfc6ee->enter($__internal_b23fd4a8fa1a52b5a5660e84dd2ac08ab96fe8f7d1593e0f1b9f5a04b0cfc6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_27d8c7569a0d99891c25613141c8190acee4153b9a356a86a1b179509d78b882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d8c7569a0d99891c25613141c8190acee4153b9a356a86a1b179509d78b882->enter($__internal_27d8c7569a0d99891c25613141c8190acee4153b9a356a86a1b179509d78b882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_b23fd4a8fa1a52b5a5660e84dd2ac08ab96fe8f7d1593e0f1b9f5a04b0cfc6ee->leave($__internal_b23fd4a8fa1a52b5a5660e84dd2ac08ab96fe8f7d1593e0f1b9f5a04b0cfc6ee_prof);

        
        $__internal_27d8c7569a0d99891c25613141c8190acee4153b9a356a86a1b179509d78b882->leave($__internal_27d8c7569a0d99891c25613141c8190acee4153b9a356a86a1b179509d78b882_prof);

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
", "@Framework/Form/money_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/money_widget.html.php");
    }
}
