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
        $__internal_42c87706688b9d12bf03a06bab7f8cf5b9cc7a752cf1f6fbcbe849236ca747b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42c87706688b9d12bf03a06bab7f8cf5b9cc7a752cf1f6fbcbe849236ca747b6->enter($__internal_42c87706688b9d12bf03a06bab7f8cf5b9cc7a752cf1f6fbcbe849236ca747b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_3a3440894a22e21016c92f3bc15f3a91e8fa0ff66f8c8b77301078465291195a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a3440894a22e21016c92f3bc15f3a91e8fa0ff66f8c8b77301078465291195a->enter($__internal_3a3440894a22e21016c92f3bc15f3a91e8fa0ff66f8c8b77301078465291195a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_42c87706688b9d12bf03a06bab7f8cf5b9cc7a752cf1f6fbcbe849236ca747b6->leave($__internal_42c87706688b9d12bf03a06bab7f8cf5b9cc7a752cf1f6fbcbe849236ca747b6_prof);

        
        $__internal_3a3440894a22e21016c92f3bc15f3a91e8fa0ff66f8c8b77301078465291195a->leave($__internal_3a3440894a22e21016c92f3bc15f3a91e8fa0ff66f8c8b77301078465291195a_prof);

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
