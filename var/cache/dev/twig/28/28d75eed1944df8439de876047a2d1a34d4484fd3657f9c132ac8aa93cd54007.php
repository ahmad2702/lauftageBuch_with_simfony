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
        $__internal_f947f378118203732085115b3ee1be07149c331a8d378f9963c11485afb3c91e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f947f378118203732085115b3ee1be07149c331a8d378f9963c11485afb3c91e->enter($__internal_f947f378118203732085115b3ee1be07149c331a8d378f9963c11485afb3c91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_8206dbc840439fa26c16b75404f2777bc3899805e0ee07a1a82f05aaa3ad7364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8206dbc840439fa26c16b75404f2777bc3899805e0ee07a1a82f05aaa3ad7364->enter($__internal_8206dbc840439fa26c16b75404f2777bc3899805e0ee07a1a82f05aaa3ad7364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f947f378118203732085115b3ee1be07149c331a8d378f9963c11485afb3c91e->leave($__internal_f947f378118203732085115b3ee1be07149c331a8d378f9963c11485afb3c91e_prof);

        
        $__internal_8206dbc840439fa26c16b75404f2777bc3899805e0ee07a1a82f05aaa3ad7364->leave($__internal_8206dbc840439fa26c16b75404f2777bc3899805e0ee07a1a82f05aaa3ad7364_prof);

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
