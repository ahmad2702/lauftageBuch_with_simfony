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
        $__internal_e30cadcab346e9de56658ebabbe784dd449099b49699e6f23d932a6974832547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e30cadcab346e9de56658ebabbe784dd449099b49699e6f23d932a6974832547->enter($__internal_e30cadcab346e9de56658ebabbe784dd449099b49699e6f23d932a6974832547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_708b999b51d178e17d874f5c8312e988ce1c673900a1330356608c55379bf7ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_708b999b51d178e17d874f5c8312e988ce1c673900a1330356608c55379bf7ab->enter($__internal_708b999b51d178e17d874f5c8312e988ce1c673900a1330356608c55379bf7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e30cadcab346e9de56658ebabbe784dd449099b49699e6f23d932a6974832547->leave($__internal_e30cadcab346e9de56658ebabbe784dd449099b49699e6f23d932a6974832547_prof);

        
        $__internal_708b999b51d178e17d874f5c8312e988ce1c673900a1330356608c55379bf7ab->leave($__internal_708b999b51d178e17d874f5c8312e988ce1c673900a1330356608c55379bf7ab_prof);

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
", "@Framework/Form/form_enctype.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}
