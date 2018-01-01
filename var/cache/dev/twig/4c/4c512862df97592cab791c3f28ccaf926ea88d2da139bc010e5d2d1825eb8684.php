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
        $__internal_85135681e9d2fbbf001bfe27a75c6a18081fab1de4abbe23321a6db1634b4f57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85135681e9d2fbbf001bfe27a75c6a18081fab1de4abbe23321a6db1634b4f57->enter($__internal_85135681e9d2fbbf001bfe27a75c6a18081fab1de4abbe23321a6db1634b4f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_9f06753fddd383006dd0d38f975d07c9e0a99a3825541f806ff1606970f45808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f06753fddd383006dd0d38f975d07c9e0a99a3825541f806ff1606970f45808->enter($__internal_9f06753fddd383006dd0d38f975d07c9e0a99a3825541f806ff1606970f45808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_85135681e9d2fbbf001bfe27a75c6a18081fab1de4abbe23321a6db1634b4f57->leave($__internal_85135681e9d2fbbf001bfe27a75c6a18081fab1de4abbe23321a6db1634b4f57_prof);

        
        $__internal_9f06753fddd383006dd0d38f975d07c9e0a99a3825541f806ff1606970f45808->leave($__internal_9f06753fddd383006dd0d38f975d07c9e0a99a3825541f806ff1606970f45808_prof);

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
