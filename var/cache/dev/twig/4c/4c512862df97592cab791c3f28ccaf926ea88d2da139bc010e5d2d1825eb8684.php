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
        $__internal_42095000ba19a30164ff632e98ab1b1659a16bd66722b7ce0c74413a6b76806b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42095000ba19a30164ff632e98ab1b1659a16bd66722b7ce0c74413a6b76806b->enter($__internal_42095000ba19a30164ff632e98ab1b1659a16bd66722b7ce0c74413a6b76806b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_e9e45e699385da9d54b44de1f4c62afeb0eef475bfe5299ec1adbd75b4adfa56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e45e699385da9d54b44de1f4c62afeb0eef475bfe5299ec1adbd75b4adfa56->enter($__internal_e9e45e699385da9d54b44de1f4c62afeb0eef475bfe5299ec1adbd75b4adfa56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_42095000ba19a30164ff632e98ab1b1659a16bd66722b7ce0c74413a6b76806b->leave($__internal_42095000ba19a30164ff632e98ab1b1659a16bd66722b7ce0c74413a6b76806b_prof);

        
        $__internal_e9e45e699385da9d54b44de1f4c62afeb0eef475bfe5299ec1adbd75b4adfa56->leave($__internal_e9e45e699385da9d54b44de1f4c62afeb0eef475bfe5299ec1adbd75b4adfa56_prof);

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
