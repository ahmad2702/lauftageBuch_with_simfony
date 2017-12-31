<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_05957c47c8e43a01fed8edd4ca6ab9cfa292e748aac4378115625ffe560effbc extends Twig_Template
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
        $__internal_75227884fa346449874ffd65797ed15249734a97729198373250118bd814733f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75227884fa346449874ffd65797ed15249734a97729198373250118bd814733f->enter($__internal_75227884fa346449874ffd65797ed15249734a97729198373250118bd814733f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_90228aded7b67e0b0b811ef51783ada3591d65cb7a89b038c81c230d018346fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90228aded7b67e0b0b811ef51783ada3591d65cb7a89b038c81c230d018346fc->enter($__internal_90228aded7b67e0b0b811ef51783ada3591d65cb7a89b038c81c230d018346fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_75227884fa346449874ffd65797ed15249734a97729198373250118bd814733f->leave($__internal_75227884fa346449874ffd65797ed15249734a97729198373250118bd814733f_prof);

        
        $__internal_90228aded7b67e0b0b811ef51783ada3591d65cb7a89b038c81c230d018346fc->leave($__internal_90228aded7b67e0b0b811ef51783ada3591d65cb7a89b038c81c230d018346fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/button_row.html.php");
    }
}
