<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ce36d71f1b5b661a400d476b0b464887fa2855cfe3753cae42238dd4e1c315ac extends Twig_Template
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
        $__internal_378e7e267e8aae458d88d3cc09f161be51d433542d5a13514fed16dce2d5100f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_378e7e267e8aae458d88d3cc09f161be51d433542d5a13514fed16dce2d5100f->enter($__internal_378e7e267e8aae458d88d3cc09f161be51d433542d5a13514fed16dce2d5100f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_9a4beb5e1beddeb0dc22b7654ac92a4696ede8c8ed432b7b7bc7949e82608178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a4beb5e1beddeb0dc22b7654ac92a4696ede8c8ed432b7b7bc7949e82608178->enter($__internal_9a4beb5e1beddeb0dc22b7654ac92a4696ede8c8ed432b7b7bc7949e82608178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_378e7e267e8aae458d88d3cc09f161be51d433542d5a13514fed16dce2d5100f->leave($__internal_378e7e267e8aae458d88d3cc09f161be51d433542d5a13514fed16dce2d5100f_prof);

        
        $__internal_9a4beb5e1beddeb0dc22b7654ac92a4696ede8c8ed432b7b7bc7949e82608178->leave($__internal_9a4beb5e1beddeb0dc22b7654ac92a4696ede8c8ed432b7b7bc7949e82608178_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/form_rows.html.php");
    }
}
