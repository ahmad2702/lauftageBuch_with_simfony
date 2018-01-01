<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b7671f54f32d36aa7a945e2162896960402ab4be20573cc13d8c839ed2cefe63 extends Twig_Template
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
        $__internal_338999bef107af2c5979f7f42c20d1fa61242389a3bb466a31e26be4932069fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_338999bef107af2c5979f7f42c20d1fa61242389a3bb466a31e26be4932069fa->enter($__internal_338999bef107af2c5979f7f42c20d1fa61242389a3bb466a31e26be4932069fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_ecee7c74a946ab4e0620ebe6344260e0e981ebb5c2e34874e636ada2ebe27c91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecee7c74a946ab4e0620ebe6344260e0e981ebb5c2e34874e636ada2ebe27c91->enter($__internal_ecee7c74a946ab4e0620ebe6344260e0e981ebb5c2e34874e636ada2ebe27c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_338999bef107af2c5979f7f42c20d1fa61242389a3bb466a31e26be4932069fa->leave($__internal_338999bef107af2c5979f7f42c20d1fa61242389a3bb466a31e26be4932069fa_prof);

        
        $__internal_ecee7c74a946ab4e0620ebe6344260e0e981ebb5c2e34874e636ada2ebe27c91->leave($__internal_ecee7c74a946ab4e0620ebe6344260e0e981ebb5c2e34874e636ada2ebe27c91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
