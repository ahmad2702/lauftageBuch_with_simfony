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
        $__internal_3c80591f50334061f3a66e595945bffe7823dbc76eae7fc91330f008bc2967e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c80591f50334061f3a66e595945bffe7823dbc76eae7fc91330f008bc2967e6->enter($__internal_3c80591f50334061f3a66e595945bffe7823dbc76eae7fc91330f008bc2967e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_2d0aea8a0dab665469c4e1dae265cbe450cb69f3859af7ba3acdba6c118494b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d0aea8a0dab665469c4e1dae265cbe450cb69f3859af7ba3acdba6c118494b0->enter($__internal_2d0aea8a0dab665469c4e1dae265cbe450cb69f3859af7ba3acdba6c118494b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3c80591f50334061f3a66e595945bffe7823dbc76eae7fc91330f008bc2967e6->leave($__internal_3c80591f50334061f3a66e595945bffe7823dbc76eae7fc91330f008bc2967e6_prof);

        
        $__internal_2d0aea8a0dab665469c4e1dae265cbe450cb69f3859af7ba3acdba6c118494b0->leave($__internal_2d0aea8a0dab665469c4e1dae265cbe450cb69f3859af7ba3acdba6c118494b0_prof);

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
", "@Framework/Form/form_errors.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/form_errors.html.php");
    }
}
