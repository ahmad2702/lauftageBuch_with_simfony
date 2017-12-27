<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_a5423b7109d214e3402a796ae7799bbeb8a900cae7832fb9c88c0c86aa7b76f8 extends Twig_Template
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
        $__internal_4d575d00041fff126fc0509875cbcd1b2ba45e056c150727e5f0e3d32dd3b38b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d575d00041fff126fc0509875cbcd1b2ba45e056c150727e5f0e3d32dd3b38b->enter($__internal_4d575d00041fff126fc0509875cbcd1b2ba45e056c150727e5f0e3d32dd3b38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_916f3bf3e7523c63f8e682a8908c9b70ae29ac9e262fba247d40366f7f99469f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_916f3bf3e7523c63f8e682a8908c9b70ae29ac9e262fba247d40366f7f99469f->enter($__internal_916f3bf3e7523c63f8e682a8908c9b70ae29ac9e262fba247d40366f7f99469f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_4d575d00041fff126fc0509875cbcd1b2ba45e056c150727e5f0e3d32dd3b38b->leave($__internal_4d575d00041fff126fc0509875cbcd1b2ba45e056c150727e5f0e3d32dd3b38b_prof);

        
        $__internal_916f3bf3e7523c63f8e682a8908c9b70ae29ac9e262fba247d40366f7f99469f->leave($__internal_916f3bf3e7523c63f8e682a8908c9b70ae29ac9e262fba247d40366f7f99469f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/attributes.html.php");
    }
}
