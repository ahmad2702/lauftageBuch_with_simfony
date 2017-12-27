<?php

/* authentications/login.php.twig */
class __TwigTemplate_01e60b03f92e595ab699787fddb186bd92413e95ffb181a151ac0e41f5362e48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.php.twig", "authentications/login.php.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.php.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4374e90bad734c1d01c8506f8bdeb7b51fb259d4f6fe9d93598afd42a0619b12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4374e90bad734c1d01c8506f8bdeb7b51fb259d4f6fe9d93598afd42a0619b12->enter($__internal_4374e90bad734c1d01c8506f8bdeb7b51fb259d4f6fe9d93598afd42a0619b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentications/login.php.twig"));

        $__internal_a9ffd55ba61d2ce9acfd3e1efcdfab5b20cb395be171822c15709c5d0a3603ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ffd55ba61d2ce9acfd3e1efcdfab5b20cb395be171822c15709c5d0a3603ff->enter($__internal_a9ffd55ba61d2ce9acfd3e1efcdfab5b20cb395be171822c15709c5d0a3603ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentications/login.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4374e90bad734c1d01c8506f8bdeb7b51fb259d4f6fe9d93598afd42a0619b12->leave($__internal_4374e90bad734c1d01c8506f8bdeb7b51fb259d4f6fe9d93598afd42a0619b12_prof);

        
        $__internal_a9ffd55ba61d2ce9acfd3e1efcdfab5b20cb395be171822c15709c5d0a3603ff->leave($__internal_a9ffd55ba61d2ce9acfd3e1efcdfab5b20cb395be171822c15709c5d0a3603ff_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e5145baa04c845bcadc890bcfafb36752104d815e2e1200c787b8062b79236e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5145baa04c845bcadc890bcfafb36752104d815e2e1200c787b8062b79236e0->enter($__internal_e5145baa04c845bcadc890bcfafb36752104d815e2e1200c787b8062b79236e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_674d26fb34cf65f48f93e9ab399bdc3f3e0e9d2f17dc7ae9015cd0e4cf96a37f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_674d26fb34cf65f48f93e9ab399bdc3f3e0e9d2f17dc7ae9015cd0e4cf96a37f->enter($__internal_674d26fb34cf65f48f93e9ab399bdc3f3e0e9d2f17dc7ae9015cd0e4cf96a37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"page-header\">
        <h1 align='center'>Login:</h1>
    </div>

    <form class=\"form-horizontal\" action=\"\" method=\"post\">
        <fieldset>

            <!-- Datum-->
            <div class=\"form-group\">
                <label class=\"col-md-3 control-label\" for=\"datum\">login:</label>
                <div class=\"col-md-6\">
                    <input id=\"name\" name=\"login\" class=\"form-control\" value=\"\">
                    <span style=\"color: red;\"></span>
                </div>
            </div>

            <!-- Strecke-->
            <div class=\"form-group\">
                <label class=\"col-md-3 control-label\" for=\"strecke\">passwort:</label>
                <div class=\"col-md-6\">
                    <input id=\"email\" name=\"password\" type=\"password\" class=\"form-control\" value=\"\">
                    <span style=\"color: red;\"></span>
                </div>
            </div>

            <!-- Action -->
            <div class=\"form-group\">
                <div class=\"col-md-9 text-right\">
                    <input type=\"submit\" class=\"btn btn-primary btn-lg\" name=\"addForm\" value=\"LOGIN\"></input>
                </div>
            </div>

        </fieldset>
    </form>

";
        
        $__internal_674d26fb34cf65f48f93e9ab399bdc3f3e0e9d2f17dc7ae9015cd0e4cf96a37f->leave($__internal_674d26fb34cf65f48f93e9ab399bdc3f3e0e9d2f17dc7ae9015cd0e4cf96a37f_prof);

        
        $__internal_e5145baa04c845bcadc890bcfafb36752104d815e2e1200c787b8062b79236e0->leave($__internal_e5145baa04c845bcadc890bcfafb36752104d815e2e1200c787b8062b79236e0_prof);

    }

    public function getTemplateName()
    {
        return "authentications/login.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.php.twig\" %}

{% block content %}

    <div class=\"page-header\">
        <h1 align='center'>Login:</h1>
    </div>

    <form class=\"form-horizontal\" action=\"\" method=\"post\">
        <fieldset>

            <!-- Datum-->
            <div class=\"form-group\">
                <label class=\"col-md-3 control-label\" for=\"datum\">login:</label>
                <div class=\"col-md-6\">
                    <input id=\"name\" name=\"login\" class=\"form-control\" value=\"\">
                    <span style=\"color: red;\"></span>
                </div>
            </div>

            <!-- Strecke-->
            <div class=\"form-group\">
                <label class=\"col-md-3 control-label\" for=\"strecke\">passwort:</label>
                <div class=\"col-md-6\">
                    <input id=\"email\" name=\"password\" type=\"password\" class=\"form-control\" value=\"\">
                    <span style=\"color: red;\"></span>
                </div>
            </div>

            <!-- Action -->
            <div class=\"form-group\">
                <div class=\"col-md-9 text-right\">
                    <input type=\"submit\" class=\"btn btn-primary btn-lg\" name=\"addForm\" value=\"LOGIN\"></input>
                </div>
            </div>

        </fieldset>
    </form>

{% endblock %}", "authentications/login.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/templates/authentications/login.php.twig");
    }
}
