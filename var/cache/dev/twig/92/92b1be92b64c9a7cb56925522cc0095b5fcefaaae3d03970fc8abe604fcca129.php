<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f16a68fea9c7520a98ab379e19659130f59d9d09a9820faedd42d7dc649f115f extends Twig_Template
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
        $__internal_d356151b25efbec52b21e11d8eed9aa318a455775cfb706a91fd0720ffe303b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d356151b25efbec52b21e11d8eed9aa318a455775cfb706a91fd0720ffe303b4->enter($__internal_d356151b25efbec52b21e11d8eed9aa318a455775cfb706a91fd0720ffe303b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_d3f874ee17aae9c0b51ce6027d9ad71732f085b3f15734b43e8581caabaf35be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3f874ee17aae9c0b51ce6027d9ad71732f085b3f15734b43e8581caabaf35be->enter($__internal_d3f874ee17aae9c0b51ce6027d9ad71732f085b3f15734b43e8581caabaf35be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_d356151b25efbec52b21e11d8eed9aa318a455775cfb706a91fd0720ffe303b4->leave($__internal_d356151b25efbec52b21e11d8eed9aa318a455775cfb706a91fd0720ffe303b4_prof);

        
        $__internal_d3f874ee17aae9c0b51ce6027d9ad71732f085b3f15734b43e8581caabaf35be->leave($__internal_d3f874ee17aae9c0b51ce6027d9ad71732f085b3f15734b43e8581caabaf35be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/form.html.php");
    }
}
