<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_2de72c5f1d9096a87a1b3979b33f8422aaa7bbe315eacd5be322d2c73dc80229 extends Twig_Template
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
        $__internal_c9b1092c893115b94f7cb776f4386476a1e34fb22a753657b0afe04c258b392e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9b1092c893115b94f7cb776f4386476a1e34fb22a753657b0afe04c258b392e->enter($__internal_c9b1092c893115b94f7cb776f4386476a1e34fb22a753657b0afe04c258b392e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_b1dbdfa3a151fb740620c074643b447d95a750a2ed7fad891075c7e72bfc2ab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1dbdfa3a151fb740620c074643b447d95a750a2ed7fad891075c7e72bfc2ab0->enter($__internal_b1dbdfa3a151fb740620c074643b447d95a750a2ed7fad891075c7e72bfc2ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_c9b1092c893115b94f7cb776f4386476a1e34fb22a753657b0afe04c258b392e->leave($__internal_c9b1092c893115b94f7cb776f4386476a1e34fb22a753657b0afe04c258b392e_prof);

        
        $__internal_b1dbdfa3a151fb740620c074643b447d95a750a2ed7fad891075c7e72bfc2ab0->leave($__internal_b1dbdfa3a151fb740620c074643b447d95a750a2ed7fad891075c7e72bfc2ab0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/FormTable/button_row.html.php");
    }
}
