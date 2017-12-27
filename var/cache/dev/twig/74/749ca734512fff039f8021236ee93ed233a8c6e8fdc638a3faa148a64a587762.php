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
        $__internal_2ebda8b036de1121ad83d4b21854cbf5afa133532e3436b44cc8b6ccc360e9a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ebda8b036de1121ad83d4b21854cbf5afa133532e3436b44cc8b6ccc360e9a6->enter($__internal_2ebda8b036de1121ad83d4b21854cbf5afa133532e3436b44cc8b6ccc360e9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_179dcb8f2b81a49977094bf6f38833c6be8fa72649eb29fd360e94d2dd8885e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_179dcb8f2b81a49977094bf6f38833c6be8fa72649eb29fd360e94d2dd8885e8->enter($__internal_179dcb8f2b81a49977094bf6f38833c6be8fa72649eb29fd360e94d2dd8885e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_2ebda8b036de1121ad83d4b21854cbf5afa133532e3436b44cc8b6ccc360e9a6->leave($__internal_2ebda8b036de1121ad83d4b21854cbf5afa133532e3436b44cc8b6ccc360e9a6_prof);

        
        $__internal_179dcb8f2b81a49977094bf6f38833c6be8fa72649eb29fd360e94d2dd8885e8->leave($__internal_179dcb8f2b81a49977094bf6f38833c6be8fa72649eb29fd360e94d2dd8885e8_prof);

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
", "@Framework/Form/form_rows.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/form_rows.html.php");
    }
}
