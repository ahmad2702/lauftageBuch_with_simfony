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
        $__internal_49b0be20b76cf7a87bad3ec2bee2e5e6a23b5f017c55a94c44ca9ba34949b1aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49b0be20b76cf7a87bad3ec2bee2e5e6a23b5f017c55a94c44ca9ba34949b1aa->enter($__internal_49b0be20b76cf7a87bad3ec2bee2e5e6a23b5f017c55a94c44ca9ba34949b1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_e4a758c6b4f934bd1f5e255a08e8b479610d52098e94c67d96f49395f0b6fc9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a758c6b4f934bd1f5e255a08e8b479610d52098e94c67d96f49395f0b6fc9a->enter($__internal_e4a758c6b4f934bd1f5e255a08e8b479610d52098e94c67d96f49395f0b6fc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_49b0be20b76cf7a87bad3ec2bee2e5e6a23b5f017c55a94c44ca9ba34949b1aa->leave($__internal_49b0be20b76cf7a87bad3ec2bee2e5e6a23b5f017c55a94c44ca9ba34949b1aa_prof);

        
        $__internal_e4a758c6b4f934bd1f5e255a08e8b479610d52098e94c67d96f49395f0b6fc9a->leave($__internal_e4a758c6b4f934bd1f5e255a08e8b479610d52098e94c67d96f49395f0b6fc9a_prof);

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
", "@Framework/Form/form_rest.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/form_rest.html.php");
    }
}
