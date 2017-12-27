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
        $__internal_4c7e8790cd4d4dd5ac18b0d8bb746edc1f28d034fa5d913dfe5ef8ff5f096a0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c7e8790cd4d4dd5ac18b0d8bb746edc1f28d034fa5d913dfe5ef8ff5f096a0e->enter($__internal_4c7e8790cd4d4dd5ac18b0d8bb746edc1f28d034fa5d913dfe5ef8ff5f096a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "add.php.twig"));

        $__internal_1b5890096c779d0bde7c7cca138e3451b607e52ab2ac4c357a9fb7a49c80a9d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b5890096c779d0bde7c7cca138e3451b607e52ab2ac4c357a9fb7a49c80a9d5->enter($__internal_1b5890096c779d0bde7c7cca138e3451b607e52ab2ac4c357a9fb7a49c80a9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "add.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c7e8790cd4d4dd5ac18b0d8bb746edc1f28d034fa5d913dfe5ef8ff5f096a0e->leave($__internal_4c7e8790cd4d4dd5ac18b0d8bb746edc1f28d034fa5d913dfe5ef8ff5f096a0e_prof);

        
        $__internal_1b5890096c779d0bde7c7cca138e3451b607e52ab2ac4c357a9fb7a49c80a9d5->leave($__internal_1b5890096c779d0bde7c7cca138e3451b607e52ab2ac4c357a9fb7a49c80a9d5_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_a994b74f2a13e71869be1ae7391fe8d6f582b92f337d11a99640d184e63647ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a994b74f2a13e71869be1ae7391fe8d6f582b92f337d11a99640d184e63647ca->enter($__internal_a994b74f2a13e71869be1ae7391fe8d6f582b92f337d11a99640d184e63647ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ced78d07d57e31d015e2c1807dfed33a38b093dce4894b84eadcc925c37b5706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced78d07d57e31d015e2c1807dfed33a38b093dce4894b84eadcc925c37b5706->enter($__internal_ced78d07d57e31d015e2c1807dfed33a38b093dce4894b84eadcc925c37b5706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_ced78d07d57e31d015e2c1807dfed33a38b093dce4894b84eadcc925c37b5706->leave($__internal_ced78d07d57e31d015e2c1807dfed33a38b093dce4894b84eadcc925c37b5706_prof);

        
        $__internal_a994b74f2a13e71869be1ae7391fe8d6f582b92f337d11a99640d184e63647ca->leave($__internal_a994b74f2a13e71869be1ae7391fe8d6f582b92f337d11a99640d184e63647ca_prof);

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

{% endblock %}", "add.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/templates/add.php.twig");
    }
}
