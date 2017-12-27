<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_d8f8dcf2facae7b515be4dcc58c0b78639775872642c471b9ce1a276f9ad2e80 extends Twig_Template
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
        $__internal_8f9a1d917816f45b3ab29746db8121d4eb3771b85f7cd2fe4521b67a8405ee62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f9a1d917816f45b3ab29746db8121d4eb3771b85f7cd2fe4521b67a8405ee62->enter($__internal_8f9a1d917816f45b3ab29746db8121d4eb3771b85f7cd2fe4521b67a8405ee62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_8613fe5763ea3e36386900fcd23f6431cadc14af43a240287b71cedf043f212d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8613fe5763ea3e36386900fcd23f6431cadc14af43a240287b71cedf043f212d->enter($__internal_8613fe5763ea3e36386900fcd23f6431cadc14af43a240287b71cedf043f212d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_8f9a1d917816f45b3ab29746db8121d4eb3771b85f7cd2fe4521b67a8405ee62->leave($__internal_8f9a1d917816f45b3ab29746db8121d4eb3771b85f7cd2fe4521b67a8405ee62_prof);

        
        $__internal_8613fe5763ea3e36386900fcd23f6431cadc14af43a240287b71cedf043f212d->leave($__internal_8613fe5763ea3e36386900fcd23f6431cadc14af43a240287b71cedf043f212d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/reset_widget.html.php");
    }
}
