<?php

/* add.php.twig */
class __TwigTemplate_aae18b3c84ff7db13b13beca39be8e250ae210d33084d0f83a700e38b79a3709 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.php.twig", "add.php.twig", 1);
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
        $__internal_d89ddc2f15e6793eba6ddd39590a2e64e320544aeafd6ff16a30bab3d7494579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d89ddc2f15e6793eba6ddd39590a2e64e320544aeafd6ff16a30bab3d7494579->enter($__internal_d89ddc2f15e6793eba6ddd39590a2e64e320544aeafd6ff16a30bab3d7494579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "add.php.twig"));

        $__internal_febcd3434558b3d889ecf0d86f2dd3987a5b924e7ddb783c4a1c1434ea4a3762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_febcd3434558b3d889ecf0d86f2dd3987a5b924e7ddb783c4a1c1434ea4a3762->enter($__internal_febcd3434558b3d889ecf0d86f2dd3987a5b924e7ddb783c4a1c1434ea4a3762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "add.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d89ddc2f15e6793eba6ddd39590a2e64e320544aeafd6ff16a30bab3d7494579->leave($__internal_d89ddc2f15e6793eba6ddd39590a2e64e320544aeafd6ff16a30bab3d7494579_prof);

        
        $__internal_febcd3434558b3d889ecf0d86f2dd3987a5b924e7ddb783c4a1c1434ea4a3762->leave($__internal_febcd3434558b3d889ecf0d86f2dd3987a5b924e7ddb783c4a1c1434ea4a3762_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_cf4db4f0f9f50d6c02ec10e84ad77046e09c7970ab90d8e135b46fbb8661ba51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf4db4f0f9f50d6c02ec10e84ad77046e09c7970ab90d8e135b46fbb8661ba51->enter($__internal_cf4db4f0f9f50d6c02ec10e84ad77046e09c7970ab90d8e135b46fbb8661ba51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_08f727ccc25e6793276a4cda1204e7aeef29d6e2f592d2778a4b88be408b894a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f727ccc25e6793276a4cda1204e7aeef29d6e2f592d2778a4b88be408b894a->enter($__internal_08f727ccc25e6793276a4cda1204e7aeef29d6e2f592d2778a4b88be408b894a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <div class=\"page-header\">
        <h1 align='center'>Neuen Eintrag hinzufügen:</h1>
    </div>

    <form class=\"form-horizontal\" action=\"\" method=\"post\">
        <fieldset>

            <!-- Datum-->
            <div class=\"form-group\">
                <label class=\"col-md-3 control-label\" for=\"datum\">DATUM:</label>
                <div class=\"col-md-6\">
                    <input id=\"name\" name=\"datum\" type=\"date\" placeholder=\"JJJJ-MM-TT\" class=\"form-control\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["datum"]) || array_key_exists("datum", $context) ? $context["datum"] : (function () { throw new Twig_Error_Runtime('Variable "datum" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
                    <span style=\"color: red;\">";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["error_datum"]) || array_key_exists("error_datum", $context) ? $context["error_datum"] : (function () { throw new Twig_Error_Runtime('Variable "error_datum" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
        echo "</span>
                </div>
            </div>

            <!-- Strecke-->
            <div class=\"form-group\">
                <label class=\"col-md-3 control-label\" for=\"strecke\">STRECKE (km):</label>
                <div class=\"col-md-6\">
                    <input id=\"email\" name=\"strecke\" type=\"text\" placeholder=\"nn / nn.n\" class=\"form-control\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["strecke"]) || array_key_exists("strecke", $context) ? $context["strecke"] : (function () { throw new Twig_Error_Runtime('Variable "strecke" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
                    <span style=\"color: red;\">";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["error_strecke"]) || array_key_exists("error_strecke", $context) ? $context["error_strecke"] : (function () { throw new Twig_Error_Runtime('Variable "error_strecke" does not exist.', 28, $this->getSourceContext()); })()), "html", null, true);
        echo "</span>
                </div>
            </div>

            <!-- Zeit-->
            <div class=\"form-group\">
                <label class=\"col-md-3 control-label\" for=\"zeit\">ZEIT:</label>
                <div class=\"col-md-6\">
                    <input id=\"email\" name=\"zeit\" type=\"text\" placeholder=\"hh:mm:ss\" class=\"form-control\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["zeit"]) || array_key_exists("zeit", $context) ? $context["zeit"] : (function () { throw new Twig_Error_Runtime('Variable "zeit" does not exist.', 36, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
                    <span style=\"color: red;\">";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["error_zeit"]) || array_key_exists("error_zeit", $context) ? $context["error_zeit"] : (function () { throw new Twig_Error_Runtime('Variable "error_zeit" does not exist.', 37, $this->getSourceContext()); })()), "html", null, true);
        echo "</span>
                </div>
            </div>


            <!-- Action -->
            <div class=\"form-group\">
                <div class=\"col-md-9 text-right\">
                    <input type=\"submit\" class=\"btn btn-primary btn-lg\" name=\"addForm\" value=\"ADD\"></input>
                </div>
            </div>

        </fieldset>
    </form>

";
        
        $__internal_08f727ccc25e6793276a4cda1204e7aeef29d6e2f592d2778a4b88be408b894a->leave($__internal_08f727ccc25e6793276a4cda1204e7aeef29d6e2f592d2778a4b88be408b894a_prof);

        
        $__internal_cf4db4f0f9f50d6c02ec10e84ad77046e09c7970ab90d8e135b46fbb8661ba51->leave($__internal_cf4db4f0f9f50d6c02ec10e84ad77046e09c7970ab90d8e135b46fbb8661ba51_prof);

    }

    public function getTemplateName()
    {
        return "add.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 37,  93 => 36,  82 => 28,  78 => 27,  67 => 19,  63 => 18,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.php.twig\" %}



{% block content %}

    <div class=\"page-header\">
        <h1 align='center'>Neuen Eintrag hinzufügen:</h1>
    </div>

    <form class=\"form-horizontal\" action=\"\" method=\"post\">
        <fieldset>

            <!-- Datum-->
            <div class=\"form-group\">
                <label class=\"col-md-3 control-label\" for=\"datum\">DATUM:</label>
                <div class=\"col-md-6\">
                    <input id=\"name\" name=\"datum\" type=\"date\" placeholder=\"JJJJ-MM-TT\" class=\"form-control\" value=\"{{ datum }}\">
                    <span style=\"color: red;\">{{ error_datum }}</span>
                </div>
            </div>

            <!-- Strecke-->
            <div class=\"form-group\">
                <label class=\"col-md-3 control-label\" for=\"strecke\">STRECKE (km):</label>
                <div class=\"col-md-6\">
                    <input id=\"email\" name=\"strecke\" type=\"text\" placeholder=\"nn / nn.n\" class=\"form-control\" value=\"{{ strecke }}\">
                    <span style=\"color: red;\">{{ error_strecke }}</span>
                </div>
            </div>

            <!-- Zeit-->
            <div class=\"form-group\">
                <label class=\"col-md-3 control-label\" for=\"zeit\">ZEIT:</label>
                <div class=\"col-md-6\">
                    <input id=\"email\" name=\"zeit\" type=\"text\" placeholder=\"hh:mm:ss\" class=\"form-control\" value=\"{{ zeit }}\">
                    <span style=\"color: red;\">{{ error_zeit }}</span>
                </div>
            </div>


            <!-- Action -->
            <div class=\"form-group\">
                <div class=\"col-md-9 text-right\">
                    <input type=\"submit\" class=\"btn btn-primary btn-lg\" name=\"addForm\" value=\"ADD\"></input>
                </div>
            </div>

        </fieldset>
    </form>

{% endblock %}", "add.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/templates/add.php.twig");
    }
}
