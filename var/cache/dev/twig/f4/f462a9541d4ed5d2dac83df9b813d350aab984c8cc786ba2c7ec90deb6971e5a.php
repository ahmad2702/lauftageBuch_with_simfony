<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_49da8526e0c6f092f9c66cc143f9aa52c07419cf09cbb497ac85c3dbae76ef5b extends Twig_Template
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
        $__internal_88b9717bf620b422ed7070aaafad19508dc75a54deead44b374451641f26840e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88b9717bf620b422ed7070aaafad19508dc75a54deead44b374451641f26840e->enter($__internal_88b9717bf620b422ed7070aaafad19508dc75a54deead44b374451641f26840e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_81cb7c7f3e6a49f1d6c4a2c65cfb0a8faab48f223a779969175ea41090868335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81cb7c7f3e6a49f1d6c4a2c65cfb0a8faab48f223a779969175ea41090868335->enter($__internal_81cb7c7f3e6a49f1d6c4a2c65cfb0a8faab48f223a779969175ea41090868335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_88b9717bf620b422ed7070aaafad19508dc75a54deead44b374451641f26840e->leave($__internal_88b9717bf620b422ed7070aaafad19508dc75a54deead44b374451641f26840e_prof);

        
        $__internal_81cb7c7f3e6a49f1d6c4a2c65cfb0a8faab48f223a779969175ea41090868335->leave($__internal_81cb7c7f3e6a49f1d6c4a2c65cfb0a8faab48f223a779969175ea41090868335_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/form_rest.html.php");
    }
}
