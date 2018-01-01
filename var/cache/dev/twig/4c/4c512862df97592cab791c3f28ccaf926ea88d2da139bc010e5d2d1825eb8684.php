<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_21a12c171e546067b58697f23cb091af481eace2a02875a7a72a34fcf53d11a1 extends Twig_Template
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
        $__internal_17d7d36d5a6efa4673c1c358b6278e873c009c8266fa3ef382b770374a7d1936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d7d36d5a6efa4673c1c358b6278e873c009c8266fa3ef382b770374a7d1936->enter($__internal_17d7d36d5a6efa4673c1c358b6278e873c009c8266fa3ef382b770374a7d1936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_c38b9b9315d7834357dbff1034996c85d8e126a01502bd174b2eb25667c32d1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c38b9b9315d7834357dbff1034996c85d8e126a01502bd174b2eb25667c32d1b->enter($__internal_c38b9b9315d7834357dbff1034996c85d8e126a01502bd174b2eb25667c32d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_17d7d36d5a6efa4673c1c358b6278e873c009c8266fa3ef382b770374a7d1936->leave($__internal_17d7d36d5a6efa4673c1c358b6278e873c009c8266fa3ef382b770374a7d1936_prof);

        
        $__internal_c38b9b9315d7834357dbff1034996c85d8e126a01502bd174b2eb25667c32d1b->leave($__internal_c38b9b9315d7834357dbff1034996c85d8e126a01502bd174b2eb25667c32d1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/submit_widget.html.php");
    }
}
