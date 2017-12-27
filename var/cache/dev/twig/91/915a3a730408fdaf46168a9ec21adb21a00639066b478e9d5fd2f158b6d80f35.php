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
        $__internal_6dd39b059e8e2802aed4b6aa66f8ed72f056faf90b0975cab5774e30802284fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dd39b059e8e2802aed4b6aa66f8ed72f056faf90b0975cab5774e30802284fc->enter($__internal_6dd39b059e8e2802aed4b6aa66f8ed72f056faf90b0975cab5774e30802284fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_7dc952678cf24ad3ca36df963abb747124e7d1279d7d07c5e1884eaee45b4a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc952678cf24ad3ca36df963abb747124e7d1279d7d07c5e1884eaee45b4a24->enter($__internal_7dc952678cf24ad3ca36df963abb747124e7d1279d7d07c5e1884eaee45b4a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_6dd39b059e8e2802aed4b6aa66f8ed72f056faf90b0975cab5774e30802284fc->leave($__internal_6dd39b059e8e2802aed4b6aa66f8ed72f056faf90b0975cab5774e30802284fc_prof);

        
        $__internal_7dc952678cf24ad3ca36df963abb747124e7d1279d7d07c5e1884eaee45b4a24->leave($__internal_7dc952678cf24ad3ca36df963abb747124e7d1279d7d07c5e1884eaee45b4a24_prof);

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
