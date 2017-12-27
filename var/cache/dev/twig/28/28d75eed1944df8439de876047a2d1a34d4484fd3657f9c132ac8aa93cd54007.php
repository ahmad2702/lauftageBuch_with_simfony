<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_f3c69dc02f9f55f93f96dd9f55e3bd0cca8c6e8bde7aa10cc9ba00b36324f783 extends Twig_Template
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
        $__internal_9edce04376ab3612c4fa34cf5a7e608d13faed817e08bb80dce6ddab20754e75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9edce04376ab3612c4fa34cf5a7e608d13faed817e08bb80dce6ddab20754e75->enter($__internal_9edce04376ab3612c4fa34cf5a7e608d13faed817e08bb80dce6ddab20754e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_9b9721873c42c9f98ead8cbe1ec6ae58c1291b5c30176b61af29c8c9f5cf1edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b9721873c42c9f98ead8cbe1ec6ae58c1291b5c30176b61af29c8c9f5cf1edc->enter($__internal_9b9721873c42c9f98ead8cbe1ec6ae58c1291b5c30176b61af29c8c9f5cf1edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_9edce04376ab3612c4fa34cf5a7e608d13faed817e08bb80dce6ddab20754e75->leave($__internal_9edce04376ab3612c4fa34cf5a7e608d13faed817e08bb80dce6ddab20754e75_prof);

        
        $__internal_9b9721873c42c9f98ead8cbe1ec6ae58c1291b5c30176b61af29c8c9f5cf1edc->leave($__internal_9b9721873c42c9f98ead8cbe1ec6ae58c1291b5c30176b61af29c8c9f5cf1edc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/form_errors.html.php");
    }
}
