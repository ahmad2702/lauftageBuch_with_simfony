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
        $__internal_0297e346a3b235c292bea38643526541bfc5d0c004f1c6e0dcadc4b938b21e2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0297e346a3b235c292bea38643526541bfc5d0c004f1c6e0dcadc4b938b21e2b->enter($__internal_0297e346a3b235c292bea38643526541bfc5d0c004f1c6e0dcadc4b938b21e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_8d8f1e4a54236d84b5c467cf995f79f5ad8a9b6e18d9d061073382b2151156ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d8f1e4a54236d84b5c467cf995f79f5ad8a9b6e18d9d061073382b2151156ec->enter($__internal_8d8f1e4a54236d84b5c467cf995f79f5ad8a9b6e18d9d061073382b2151156ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0297e346a3b235c292bea38643526541bfc5d0c004f1c6e0dcadc4b938b21e2b->leave($__internal_0297e346a3b235c292bea38643526541bfc5d0c004f1c6e0dcadc4b938b21e2b_prof);

        
        $__internal_8d8f1e4a54236d84b5c467cf995f79f5ad8a9b6e18d9d061073382b2151156ec->leave($__internal_8d8f1e4a54236d84b5c467cf995f79f5ad8a9b6e18d9d061073382b2151156ec_prof);

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
