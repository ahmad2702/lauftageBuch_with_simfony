<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b10f9d993d41016a804889abad60cacf47b60e99b81da28a15674978aded8acc extends Twig_Template
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
        $__internal_dbd7837745d81dffa7a9e7cbf997529bff56e4e27a29ffbb94cdd892e101df34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbd7837745d81dffa7a9e7cbf997529bff56e4e27a29ffbb94cdd892e101df34->enter($__internal_dbd7837745d81dffa7a9e7cbf997529bff56e4e27a29ffbb94cdd892e101df34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_f872bd0dadc35e32164f5427ac6d9864e4b4f3f74a916c89e385978263c033ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f872bd0dadc35e32164f5427ac6d9864e4b4f3f74a916c89e385978263c033ba->enter($__internal_f872bd0dadc35e32164f5427ac6d9864e4b4f3f74a916c89e385978263c033ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_dbd7837745d81dffa7a9e7cbf997529bff56e4e27a29ffbb94cdd892e101df34->leave($__internal_dbd7837745d81dffa7a9e7cbf997529bff56e4e27a29ffbb94cdd892e101df34_prof);

        
        $__internal_f872bd0dadc35e32164f5427ac6d9864e4b4f3f74a916c89e385978263c033ba->leave($__internal_f872bd0dadc35e32164f5427ac6d9864e4b4f3f74a916c89e385978263c033ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}
