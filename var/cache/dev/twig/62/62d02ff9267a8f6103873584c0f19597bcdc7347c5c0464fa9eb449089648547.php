<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_115c30cfffb380ba9958a1b6b59c240d16a7050c1d3aea6f77904fda05d2d805 extends Twig_Template
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
        $__internal_4c43ea81207c83063990d73f1a9042354351ed0f88e0886c7396b7cccf6b4ffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c43ea81207c83063990d73f1a9042354351ed0f88e0886c7396b7cccf6b4ffe->enter($__internal_4c43ea81207c83063990d73f1a9042354351ed0f88e0886c7396b7cccf6b4ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_3e336e7cf3375881a44fc6ead1219c2438933c2db4d2aed1441d4008e00ecba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e336e7cf3375881a44fc6ead1219c2438933c2db4d2aed1441d4008e00ecba9->enter($__internal_3e336e7cf3375881a44fc6ead1219c2438933c2db4d2aed1441d4008e00ecba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4c43ea81207c83063990d73f1a9042354351ed0f88e0886c7396b7cccf6b4ffe->leave($__internal_4c43ea81207c83063990d73f1a9042354351ed0f88e0886c7396b7cccf6b4ffe_prof);

        
        $__internal_3e336e7cf3375881a44fc6ead1219c2438933c2db4d2aed1441d4008e00ecba9->leave($__internal_3e336e7cf3375881a44fc6ead1219c2438933c2db4d2aed1441d4008e00ecba9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/form_end.html.php");
    }
}
