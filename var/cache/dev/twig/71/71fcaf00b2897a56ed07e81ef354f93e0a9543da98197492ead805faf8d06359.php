<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_8620a9c55012ee7cf79b59a727b2123fcd90163ebf0621898e4f453b5863e716 extends Twig_Template
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
        $__internal_fe7a8bb0b363f6fe4b16c57d34043bbb5abc1736b0ff674d1a747e8cf1253e41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe7a8bb0b363f6fe4b16c57d34043bbb5abc1736b0ff674d1a747e8cf1253e41->enter($__internal_fe7a8bb0b363f6fe4b16c57d34043bbb5abc1736b0ff674d1a747e8cf1253e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_ded56e1c65ebf7e032fbd1cc666b4a803274ac26240eecb19aab575d73b0ce94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded56e1c65ebf7e032fbd1cc666b4a803274ac26240eecb19aab575d73b0ce94->enter($__internal_ded56e1c65ebf7e032fbd1cc666b4a803274ac26240eecb19aab575d73b0ce94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fe7a8bb0b363f6fe4b16c57d34043bbb5abc1736b0ff674d1a747e8cf1253e41->leave($__internal_fe7a8bb0b363f6fe4b16c57d34043bbb5abc1736b0ff674d1a747e8cf1253e41_prof);

        
        $__internal_ded56e1c65ebf7e032fbd1cc666b4a803274ac26240eecb19aab575d73b0ce94->leave($__internal_ded56e1c65ebf7e032fbd1cc666b4a803274ac26240eecb19aab575d73b0ce94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
