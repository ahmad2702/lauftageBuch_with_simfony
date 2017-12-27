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
        $__internal_4e54eaf519401e8299b8d8caeebf3befd089466294635116db3d51cb16c58be1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e54eaf519401e8299b8d8caeebf3befd089466294635116db3d51cb16c58be1->enter($__internal_4e54eaf519401e8299b8d8caeebf3befd089466294635116db3d51cb16c58be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_37dd5fa57d5c27ea309a98add4eeb245ce949a363e0ebb24dcee03e93b3564fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37dd5fa57d5c27ea309a98add4eeb245ce949a363e0ebb24dcee03e93b3564fe->enter($__internal_37dd5fa57d5c27ea309a98add4eeb245ce949a363e0ebb24dcee03e93b3564fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_4e54eaf519401e8299b8d8caeebf3befd089466294635116db3d51cb16c58be1->leave($__internal_4e54eaf519401e8299b8d8caeebf3befd089466294635116db3d51cb16c58be1_prof);

        
        $__internal_37dd5fa57d5c27ea309a98add4eeb245ce949a363e0ebb24dcee03e93b3564fe->leave($__internal_37dd5fa57d5c27ea309a98add4eeb245ce949a363e0ebb24dcee03e93b3564fe_prof);

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
