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
        $__internal_1ef946cfe5c7a89ccfb195836093790779fc8a4632f6628accb9fd018c79ff79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ef946cfe5c7a89ccfb195836093790779fc8a4632f6628accb9fd018c79ff79->enter($__internal_1ef946cfe5c7a89ccfb195836093790779fc8a4632f6628accb9fd018c79ff79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_f7d7497ba88ee47b012df2900f60118e2964ad08dc23cb2444d0eabde0e6e542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d7497ba88ee47b012df2900f60118e2964ad08dc23cb2444d0eabde0e6e542->enter($__internal_f7d7497ba88ee47b012df2900f60118e2964ad08dc23cb2444d0eabde0e6e542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_1ef946cfe5c7a89ccfb195836093790779fc8a4632f6628accb9fd018c79ff79->leave($__internal_1ef946cfe5c7a89ccfb195836093790779fc8a4632f6628accb9fd018c79ff79_prof);

        
        $__internal_f7d7497ba88ee47b012df2900f60118e2964ad08dc23cb2444d0eabde0e6e542->leave($__internal_f7d7497ba88ee47b012df2900f60118e2964ad08dc23cb2444d0eabde0e6e542_prof);

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
