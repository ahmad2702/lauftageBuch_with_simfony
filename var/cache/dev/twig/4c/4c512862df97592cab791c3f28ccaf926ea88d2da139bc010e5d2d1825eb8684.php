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
        $__internal_73bb9b3cd5a5a0a9266e8f5bd32f860d5335bf496bf7e472820ab9f1dea5b4cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73bb9b3cd5a5a0a9266e8f5bd32f860d5335bf496bf7e472820ab9f1dea5b4cf->enter($__internal_73bb9b3cd5a5a0a9266e8f5bd32f860d5335bf496bf7e472820ab9f1dea5b4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_ff258c4710a8625c7dddeed6d4f34fdf5514000e736d149f6b871604e63713d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff258c4710a8625c7dddeed6d4f34fdf5514000e736d149f6b871604e63713d1->enter($__internal_ff258c4710a8625c7dddeed6d4f34fdf5514000e736d149f6b871604e63713d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_73bb9b3cd5a5a0a9266e8f5bd32f860d5335bf496bf7e472820ab9f1dea5b4cf->leave($__internal_73bb9b3cd5a5a0a9266e8f5bd32f860d5335bf496bf7e472820ab9f1dea5b4cf_prof);

        
        $__internal_ff258c4710a8625c7dddeed6d4f34fdf5514000e736d149f6b871604e63713d1->leave($__internal_ff258c4710a8625c7dddeed6d4f34fdf5514000e736d149f6b871604e63713d1_prof);

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
", "@Framework/Form/submit_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/submit_widget.html.php");
    }
}
