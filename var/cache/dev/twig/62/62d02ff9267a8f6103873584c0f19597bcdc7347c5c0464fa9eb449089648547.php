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
        $__internal_f8b97bce11e7812be781de56e4d2b8cfa2b10a448c851fb5954da2ebc1b8d64c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8b97bce11e7812be781de56e4d2b8cfa2b10a448c851fb5954da2ebc1b8d64c->enter($__internal_f8b97bce11e7812be781de56e4d2b8cfa2b10a448c851fb5954da2ebc1b8d64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_dbad5c95363fffd81b4311ce8283c9e30cbc1c8361a9515c2a9d85a018bd36cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbad5c95363fffd81b4311ce8283c9e30cbc1c8361a9515c2a9d85a018bd36cb->enter($__internal_dbad5c95363fffd81b4311ce8283c9e30cbc1c8361a9515c2a9d85a018bd36cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f8b97bce11e7812be781de56e4d2b8cfa2b10a448c851fb5954da2ebc1b8d64c->leave($__internal_f8b97bce11e7812be781de56e4d2b8cfa2b10a448c851fb5954da2ebc1b8d64c_prof);

        
        $__internal_dbad5c95363fffd81b4311ce8283c9e30cbc1c8361a9515c2a9d85a018bd36cb->leave($__internal_dbad5c95363fffd81b4311ce8283c9e30cbc1c8361a9515c2a9d85a018bd36cb_prof);

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
