<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_f158d62b134a51f1a0154bb3173f360d4488bd210fa1b1f468557a8d7c2ea230 extends Twig_Template
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
        $__internal_4ba95e1698d870e39268409038fc4e6cb462073d813451f0761bec31d5c16153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba95e1698d870e39268409038fc4e6cb462073d813451f0761bec31d5c16153->enter($__internal_4ba95e1698d870e39268409038fc4e6cb462073d813451f0761bec31d5c16153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_e91ff175079547e15918663dace01704b3c181d8262a83ccac189abcba329912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e91ff175079547e15918663dace01704b3c181d8262a83ccac189abcba329912->enter($__internal_e91ff175079547e15918663dace01704b3c181d8262a83ccac189abcba329912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_4ba95e1698d870e39268409038fc4e6cb462073d813451f0761bec31d5c16153->leave($__internal_4ba95e1698d870e39268409038fc4e6cb462073d813451f0761bec31d5c16153_prof);

        
        $__internal_e91ff175079547e15918663dace01704b3c181d8262a83ccac189abcba329912->leave($__internal_e91ff175079547e15918663dace01704b3c181d8262a83ccac189abcba329912_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/time_widget.html.php");
    }
}
