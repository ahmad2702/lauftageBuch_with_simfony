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
        $__internal_b2355f7188855d2ebd809ed859f7481ee2203828100ca17bfebd2d9fa3a8ebae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2355f7188855d2ebd809ed859f7481ee2203828100ca17bfebd2d9fa3a8ebae->enter($__internal_b2355f7188855d2ebd809ed859f7481ee2203828100ca17bfebd2d9fa3a8ebae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_1f28a84996a477fe945fc8a0b49ecad96e3924de6ff7824b1ae71324130f3391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f28a84996a477fe945fc8a0b49ecad96e3924de6ff7824b1ae71324130f3391->enter($__internal_1f28a84996a477fe945fc8a0b49ecad96e3924de6ff7824b1ae71324130f3391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b2355f7188855d2ebd809ed859f7481ee2203828100ca17bfebd2d9fa3a8ebae->leave($__internal_b2355f7188855d2ebd809ed859f7481ee2203828100ca17bfebd2d9fa3a8ebae_prof);

        
        $__internal_1f28a84996a477fe945fc8a0b49ecad96e3924de6ff7824b1ae71324130f3391->leave($__internal_1f28a84996a477fe945fc8a0b49ecad96e3924de6ff7824b1ae71324130f3391_prof);

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
", "@Framework/Form/form_widget_simple.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
