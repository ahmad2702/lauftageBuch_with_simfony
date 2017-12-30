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
        $__internal_f7ed58194f1099e9f680a7dbd45455cb8e7be37efe1ba666ecb4834da88e4e86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7ed58194f1099e9f680a7dbd45455cb8e7be37efe1ba666ecb4834da88e4e86->enter($__internal_f7ed58194f1099e9f680a7dbd45455cb8e7be37efe1ba666ecb4834da88e4e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentications/login.php.twig"));

        $__internal_906aed1a6af29da1ea77418596dc69ec780bb1542cb2d237cf589de3173d05b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_906aed1a6af29da1ea77418596dc69ec780bb1542cb2d237cf589de3173d05b3->enter($__internal_906aed1a6af29da1ea77418596dc69ec780bb1542cb2d237cf589de3173d05b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentications/login.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7ed58194f1099e9f680a7dbd45455cb8e7be37efe1ba666ecb4834da88e4e86->leave($__internal_f7ed58194f1099e9f680a7dbd45455cb8e7be37efe1ba666ecb4834da88e4e86_prof);

        
        $__internal_906aed1a6af29da1ea77418596dc69ec780bb1542cb2d237cf589de3173d05b3->leave($__internal_906aed1a6af29da1ea77418596dc69ec780bb1542cb2d237cf589de3173d05b3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ecafcf2968c872883c361d8755d863fb6389ed33eeeccd23ff3b380684304082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecafcf2968c872883c361d8755d863fb6389ed33eeeccd23ff3b380684304082->enter($__internal_ecafcf2968c872883c361d8755d863fb6389ed33eeeccd23ff3b380684304082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_29ae3425973ebeea9c60360dbce223cb72b5f37d971759dbe600c0c821708a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29ae3425973ebeea9c60360dbce223cb72b5f37d971759dbe600c0c821708a8c->enter($__internal_29ae3425973ebeea9c60360dbce223cb72b5f37d971759dbe600c0c821708a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_29ae3425973ebeea9c60360dbce223cb72b5f37d971759dbe600c0c821708a8c->leave($__internal_29ae3425973ebeea9c60360dbce223cb72b5f37d971759dbe600c0c821708a8c_prof);

        
        $__internal_ecafcf2968c872883c361d8755d863fb6389ed33eeeccd23ff3b380684304082->leave($__internal_ecafcf2968c872883c361d8755d863fb6389ed33eeeccd23ff3b380684304082_prof);

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
