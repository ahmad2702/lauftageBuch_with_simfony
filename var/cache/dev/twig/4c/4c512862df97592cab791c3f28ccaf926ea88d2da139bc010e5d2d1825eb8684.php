<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_21a12c171e546067b58697f23cb091af481eace2a02875a7a72a34fcf53d11a1 extends Twig_Template
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
        $__internal_850c886f283020a1c35c21e07234fd711f93713782243674081c113286ef0973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_850c886f283020a1c35c21e07234fd711f93713782243674081c113286ef0973->enter($__internal_850c886f283020a1c35c21e07234fd711f93713782243674081c113286ef0973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_b27d14c07272b4bd84ef07bad6034887a2765b9b33be5cae75f6349dceb6b591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b27d14c07272b4bd84ef07bad6034887a2765b9b33be5cae75f6349dceb6b591->enter($__internal_b27d14c07272b4bd84ef07bad6034887a2765b9b33be5cae75f6349dceb6b591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_850c886f283020a1c35c21e07234fd711f93713782243674081c113286ef0973->leave($__internal_850c886f283020a1c35c21e07234fd711f93713782243674081c113286ef0973_prof);

        
        $__internal_b27d14c07272b4bd84ef07bad6034887a2765b9b33be5cae75f6349dceb6b591->leave($__internal_b27d14c07272b4bd84ef07bad6034887a2765b9b33be5cae75f6349dceb6b591_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/submit_widget.html.php");
    }
}
