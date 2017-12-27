<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_a2424127a12d600ee6666a2d75b331eaf129af3be32ecc62669ad499b99c5c38 extends Twig_Template
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
        $__internal_99fe29e6bc2b86e54819b12ab6a2e7709b2ecae831b15a01f97c1cb803bcaa24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99fe29e6bc2b86e54819b12ab6a2e7709b2ecae831b15a01f97c1cb803bcaa24->enter($__internal_99fe29e6bc2b86e54819b12ab6a2e7709b2ecae831b15a01f97c1cb803bcaa24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_51206d63bde74bab9dad4ff38faba411c814da5eb89f1700ee3c3fdaf850885e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51206d63bde74bab9dad4ff38faba411c814da5eb89f1700ee3c3fdaf850885e->enter($__internal_51206d63bde74bab9dad4ff38faba411c814da5eb89f1700ee3c3fdaf850885e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new Twig_Error_Runtime('Variable "year" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new Twig_Error_Runtime('Variable "month" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new Twig_Error_Runtime('Variable "day" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_99fe29e6bc2b86e54819b12ab6a2e7709b2ecae831b15a01f97c1cb803bcaa24->leave($__internal_99fe29e6bc2b86e54819b12ab6a2e7709b2ecae831b15a01f97c1cb803bcaa24_prof);

        
        $__internal_51206d63bde74bab9dad4ff38faba411c814da5eb89f1700ee3c3fdaf850885e->leave($__internal_51206d63bde74bab9dad4ff38faba411c814da5eb89f1700ee3c3fdaf850885e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/date_widget.html.php");
    }
}
