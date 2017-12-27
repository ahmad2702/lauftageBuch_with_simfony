<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_51e702831d9cf97104fe0d08eb8e63fcc64e6a3d71d271ee86bc9f1c94fb1ec7 extends Twig_Template
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
        $__internal_ccaafdaec8fd0de2c1cd7030c481b9faddad400a4574cf809914bf716ec98851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccaafdaec8fd0de2c1cd7030c481b9faddad400a4574cf809914bf716ec98851->enter($__internal_ccaafdaec8fd0de2c1cd7030c481b9faddad400a4574cf809914bf716ec98851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_a285650b673f73d09358ed0d349fe6c15568334dd122fc95bfd695a61dac3925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a285650b673f73d09358ed0d349fe6c15568334dd122fc95bfd695a61dac3925->enter($__internal_a285650b673f73d09358ed0d349fe6c15568334dd122fc95bfd695a61dac3925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ccaafdaec8fd0de2c1cd7030c481b9faddad400a4574cf809914bf716ec98851->leave($__internal_ccaafdaec8fd0de2c1cd7030c481b9faddad400a4574cf809914bf716ec98851_prof);

        
        $__internal_a285650b673f73d09358ed0d349fe6c15568334dd122fc95bfd695a61dac3925->leave($__internal_a285650b673f73d09358ed0d349fe6c15568334dd122fc95bfd695a61dac3925_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
