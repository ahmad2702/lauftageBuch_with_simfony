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
        $__internal_51a1f530501ff20fc976a1ebd81cf192227e55455bccdcc4f1b6caab1277f54b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51a1f530501ff20fc976a1ebd81cf192227e55455bccdcc4f1b6caab1277f54b->enter($__internal_51a1f530501ff20fc976a1ebd81cf192227e55455bccdcc4f1b6caab1277f54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_ab6adfa33875e547375f848b1972c9e0aa2a99cda2d5d69ef6f532dd550c3c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab6adfa33875e547375f848b1972c9e0aa2a99cda2d5d69ef6f532dd550c3c4c->enter($__internal_ab6adfa33875e547375f848b1972c9e0aa2a99cda2d5d69ef6f532dd550c3c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_51a1f530501ff20fc976a1ebd81cf192227e55455bccdcc4f1b6caab1277f54b->leave($__internal_51a1f530501ff20fc976a1ebd81cf192227e55455bccdcc4f1b6caab1277f54b_prof);

        
        $__internal_ab6adfa33875e547375f848b1972c9e0aa2a99cda2d5d69ef6f532dd550c3c4c->leave($__internal_ab6adfa33875e547375f848b1972c9e0aa2a99cda2d5d69ef6f532dd550c3c4c_prof);

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
