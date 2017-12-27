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
        $__internal_23cc493ef3fc1e0121890978637a2c2eaca1a0a853d6e1965ec8ce59fd6fa6fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23cc493ef3fc1e0121890978637a2c2eaca1a0a853d6e1965ec8ce59fd6fa6fb->enter($__internal_23cc493ef3fc1e0121890978637a2c2eaca1a0a853d6e1965ec8ce59fd6fa6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_781254219848cb376e796c87e4774f9006de4b3767d915a77e767ff88d27ec9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_781254219848cb376e796c87e4774f9006de4b3767d915a77e767ff88d27ec9a->enter($__internal_781254219848cb376e796c87e4774f9006de4b3767d915a77e767ff88d27ec9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_23cc493ef3fc1e0121890978637a2c2eaca1a0a853d6e1965ec8ce59fd6fa6fb->leave($__internal_23cc493ef3fc1e0121890978637a2c2eaca1a0a853d6e1965ec8ce59fd6fa6fb_prof);

        
        $__internal_781254219848cb376e796c87e4774f9006de4b3767d915a77e767ff88d27ec9a->leave($__internal_781254219848cb376e796c87e4774f9006de4b3767d915a77e767ff88d27ec9a_prof);

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
