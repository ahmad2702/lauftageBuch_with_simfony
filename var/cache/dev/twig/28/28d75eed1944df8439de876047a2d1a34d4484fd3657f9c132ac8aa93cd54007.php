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
        $__internal_c098c61f9a25324e3a6a36d9bfc99197174158563d3a1d70a2fdc1433190f582 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c098c61f9a25324e3a6a36d9bfc99197174158563d3a1d70a2fdc1433190f582->enter($__internal_c098c61f9a25324e3a6a36d9bfc99197174158563d3a1d70a2fdc1433190f582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_34315b7f7ff9bf0f5ffbe13b3c0501f608fb24cfe43dced2e04f2a8f7de5a242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34315b7f7ff9bf0f5ffbe13b3c0501f608fb24cfe43dced2e04f2a8f7de5a242->enter($__internal_34315b7f7ff9bf0f5ffbe13b3c0501f608fb24cfe43dced2e04f2a8f7de5a242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c098c61f9a25324e3a6a36d9bfc99197174158563d3a1d70a2fdc1433190f582->leave($__internal_c098c61f9a25324e3a6a36d9bfc99197174158563d3a1d70a2fdc1433190f582_prof);

        
        $__internal_34315b7f7ff9bf0f5ffbe13b3c0501f608fb24cfe43dced2e04f2a8f7de5a242->leave($__internal_34315b7f7ff9bf0f5ffbe13b3c0501f608fb24cfe43dced2e04f2a8f7de5a242_prof);

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
