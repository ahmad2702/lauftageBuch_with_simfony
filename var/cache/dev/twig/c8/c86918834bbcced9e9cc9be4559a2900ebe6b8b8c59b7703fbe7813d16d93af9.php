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
        $__internal_b730760c61c36c61af52c476ed16eaae7674b5cc3507a3456e78b2a5fdb0cd39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b730760c61c36c61af52c476ed16eaae7674b5cc3507a3456e78b2a5fdb0cd39->enter($__internal_b730760c61c36c61af52c476ed16eaae7674b5cc3507a3456e78b2a5fdb0cd39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_ef7d9011f735cc3cee656f838a810396e655361d4ba20268eba798f738c8fa41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef7d9011f735cc3cee656f838a810396e655361d4ba20268eba798f738c8fa41->enter($__internal_ef7d9011f735cc3cee656f838a810396e655361d4ba20268eba798f738c8fa41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b730760c61c36c61af52c476ed16eaae7674b5cc3507a3456e78b2a5fdb0cd39->leave($__internal_b730760c61c36c61af52c476ed16eaae7674b5cc3507a3456e78b2a5fdb0cd39_prof);

        
        $__internal_ef7d9011f735cc3cee656f838a810396e655361d4ba20268eba798f738c8fa41->leave($__internal_ef7d9011f735cc3cee656f838a810396e655361d4ba20268eba798f738c8fa41_prof);

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
