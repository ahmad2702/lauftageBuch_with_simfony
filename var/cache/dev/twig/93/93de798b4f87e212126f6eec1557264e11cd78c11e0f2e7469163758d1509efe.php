<?php

/* profile.php.twig */
class __TwigTemplate_5d38ba0e1625edc5774d894ccc325643afd5cd25c1dbc90ac379d31cfcbcb4fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.php.twig", "profile.php.twig", 1);
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
        $__internal_329e7e31f1f82ebfd5d9a2324ff198128bef9ac3e2ab8b8f3924a157d3fcb3a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_329e7e31f1f82ebfd5d9a2324ff198128bef9ac3e2ab8b8f3924a157d3fcb3a4->enter($__internal_329e7e31f1f82ebfd5d9a2324ff198128bef9ac3e2ab8b8f3924a157d3fcb3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile.php.twig"));

        $__internal_06943895912757282d4c400652c5e74b0a1fca2f8de0631775c67854150ad874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06943895912757282d4c400652c5e74b0a1fca2f8de0631775c67854150ad874->enter($__internal_06943895912757282d4c400652c5e74b0a1fca2f8de0631775c67854150ad874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_329e7e31f1f82ebfd5d9a2324ff198128bef9ac3e2ab8b8f3924a157d3fcb3a4->leave($__internal_329e7e31f1f82ebfd5d9a2324ff198128bef9ac3e2ab8b8f3924a157d3fcb3a4_prof);

        
        $__internal_06943895912757282d4c400652c5e74b0a1fca2f8de0631775c67854150ad874->leave($__internal_06943895912757282d4c400652c5e74b0a1fca2f8de0631775c67854150ad874_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d967817730655594e18e258dcae896db6c84d79895c1e8ac18c03f6740338cf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d967817730655594e18e258dcae896db6c84d79895c1e8ac18c03f6740338cf7->enter($__internal_d967817730655594e18e258dcae896db6c84d79895c1e8ac18c03f6740338cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_dd6bca64e5048acd8a6de60d69009e30b1a6f31d09be41335ed5afc2a9743e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd6bca64e5048acd8a6de60d69009e30b1a6f31d09be41335ed5afc2a9743e74->enter($__internal_dd6bca64e5048acd8a6de60d69009e30b1a6f31d09be41335ed5afc2a9743e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"page-header\">
        <h1 style=\"text-align: center;\">Profile: ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["profileName"]) || array_key_exists("profileName", $context) ? $context["profileName"] : (function () { throw new Twig_Error_Runtime('Variable "profileName" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
        echo " </h1>
    </div>

    ";
        // line 9
        if ((twig_length_filter($this->env, (isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 9, $this->getSourceContext()); })())) == 0)) {
            // line 10
            echo "
        <div class=\"noLinesFound\">
            Die Liste ist noch leer. <br>
        </div>

    ";
        } else {
            // line 16
            echo "
        ";
            // line 17
            $context["gesamtK"] = 0;
            // line 18
            echo "        ";
            $context["gesamtZ"] = 0;
            // line 19
            echo "
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 20, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 21
                echo "
            <div class=\"trackerLine\">
                <div class=\"trackerDatum\">
                    ";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getDay", array(), "method"), "html", null, true);
                echo "
                </div>

                <div class=\"trackerStrecke\">
                    ";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getStrecke", array(), "method"), "html", null, true);
                echo " km
                    ";
                // line 29
                $context["gesamtK"] = ((isset($context["gesamtK"]) || array_key_exists("gesamtK", $context) ? $context["gesamtK"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtK" does not exist.', 29, $this->getSourceContext()); })()) + twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getStrecke", array(), "method"));
                // line 30
                echo "                </div>

                <div class=\"trackerZeit\">
                    ";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getZeit", array(), "method"), "html", null, true);
                echo " s
                    ";
                // line 34
                $context["gesamtZ"] = ((isset($context["gesamtZ"]) || array_key_exists("gesamtZ", $context) ? $context["gesamtZ"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtZ" does not exist.', 34, $this->getSourceContext()); })()) + twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getZeit", array(), "method"));
                // line 35
                echo "                </div>

                <div class=\"trackerSpeed\">
                    ";
                // line 38
                echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getSpeed", array(), "method"), 1, "floor"), "html", null, true);
                echo " m/s
                </div>

                <div class=\"trackerRemove\">
                    ";
                // line 42
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") && ((isset($context["profileName"]) || array_key_exists("profileName", $context) ? $context["profileName"] : (function () { throw new Twig_Error_Runtime('Variable "profileName" does not exist.', 42, $this->getSourceContext()); })()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 42, $this->getSourceContext()); })()), "user", array()), "username", array())))) {
                    // line 43
                    echo "                        <form method=\"post\" action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("remove_newData", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 43, $this->getSourceContext()); })()), "user", array()), "username", array()))), "html", null, true);
                    echo "\">
                            <input type=\"hidden\" value=\"";
                    // line 44
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getId", array(), "method"), "html", null, true);
                    echo "\" name=\"id_toRemove\">
                            <input type=\"submit\" value=\"löschen\" name=\"removeForm\">
                        </form>
                    ";
                } else {
                    // line 48
                    echo "                        -
                    ";
                }
                // line 50
                echo "                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "


     ";
        }
        // line 57
        echo "


    ";
        // line 60
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") && ((isset($context["profileName"]) || array_key_exists("profileName", $context) ? $context["profileName"] : (function () { throw new Twig_Error_Runtime('Variable "profileName" does not exist.', 60, $this->getSourceContext()); })()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 60, $this->getSourceContext()); })()), "user", array()), "username", array())))) {
            // line 61
            echo "
        <div class=\"page-header\">

        </div>

        <form class=\"form-horizontal\" action=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_newData", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 66, $this->getSourceContext()); })()), "user", array()), "username", array()))), "html", null, true);
            echo "\" method=\"post\">
            <fieldset>

                <!-- Datum-->
                <div class=\"form-group\">
                    <label class=\"col-md-3 control-label\" for=\"datum\">DATUM:</label>
                    <div class=\"col-md-6\">
                        <input id=\"name\" name=\"datum\" type=\"date\" placeholder=\"JJJJ-MM-TT\" class=\"form-control\" value=\"";
            // line 73
            echo twig_escape_filter($this->env, (isset($context["datum"]) || array_key_exists("datum", $context) ? $context["datum"] : (function () { throw new Twig_Error_Runtime('Variable "datum" does not exist.', 73, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
                        <span style=\"color: red;\"></span>
                    </div>
                </div>

                <!-- Strecke-->
                <div class=\"form-group\">
                    <label class=\"col-md-3 control-label\" for=\"strecke\">STRECKE (km):</label>
                    <div class=\"col-md-6\">
                        <input id=\"email\" name=\"strecke\" type=\"text\" placeholder=\"nn / nn.n\" class=\"form-control\" value=\"";
            // line 82
            echo twig_escape_filter($this->env, (isset($context["strecke"]) || array_key_exists("strecke", $context) ? $context["strecke"] : (function () { throw new Twig_Error_Runtime('Variable "strecke" does not exist.', 82, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
                        <span style=\"color: red;\"></span>
                    </div>
                </div>

                <!-- Zeit-->
                <div class=\"form-group\">
                    <label class=\"col-md-3 control-label\" for=\"zeit\">ZEIT:</label>
                    <div class=\"col-md-6\">
                        <input id=\"email\" name=\"zeit\" type=\"text\" placeholder=\"hh:mm:ss\" class=\"form-control\" value=\"";
            // line 91
            echo twig_escape_filter($this->env, (isset($context["zeit"]) || array_key_exists("zeit", $context) ? $context["zeit"] : (function () { throw new Twig_Error_Runtime('Variable "zeit" does not exist.', 91, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
                        <span style=\"color: red;\"></span>
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
        }
        // line 108
        echo "

";
        
        $__internal_dd6bca64e5048acd8a6de60d69009e30b1a6f31d09be41335ed5afc2a9743e74->leave($__internal_dd6bca64e5048acd8a6de60d69009e30b1a6f31d09be41335ed5afc2a9743e74_prof);

        
        $__internal_d967817730655594e18e258dcae896db6c84d79895c1e8ac18c03f6740338cf7->leave($__internal_d967817730655594e18e258dcae896db6c84d79895c1e8ac18c03f6740338cf7_prof);

    }

    public function getTemplateName()
    {
        return "profile.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 108,  205 => 91,  193 => 82,  181 => 73,  171 => 66,  164 => 61,  162 => 60,  157 => 57,  151 => 53,  143 => 50,  139 => 48,  132 => 44,  127 => 43,  125 => 42,  118 => 38,  113 => 35,  111 => 34,  107 => 33,  102 => 30,  100 => 29,  96 => 28,  89 => 24,  84 => 21,  80 => 20,  77 => 19,  74 => 18,  72 => 17,  69 => 16,  61 => 10,  59 => 9,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.php.twig\" %}

{% block content %}

    <div class=\"page-header\">
        <h1 style=\"text-align: center;\">Profile: {{ profileName }} </h1>
    </div>

    {% if (lines|length) == 0 %}

        <div class=\"noLinesFound\">
            Die Liste ist noch leer. <br>
        </div>

    {% else %}

        {% set gesamtK=0 %}
        {% set gesamtZ=0 %}

        {% for i in lines %}

            <div class=\"trackerLine\">
                <div class=\"trackerDatum\">
                    {{ i.getDay() }}
                </div>

                <div class=\"trackerStrecke\">
                    {{ i.getStrecke() }} km
                    {% set gesamtK=gesamtK+i.getStrecke() %}
                </div>

                <div class=\"trackerZeit\">
                    {{ i.getZeit() }} s
                    {% set gesamtZ=gesamtZ+i.getZeit() %}
                </div>

                <div class=\"trackerSpeed\">
                    {{ i.getSpeed() | round(1, 'floor') }} m/s
                </div>

                <div class=\"trackerRemove\">
                    {% if is_granted('IS_AUTHENTICATED_FULLY') and profileName == app.user.username %}
                        <form method=\"post\" action=\"{{ path('remove_newData', { name : app.user.username }) }}\">
                            <input type=\"hidden\" value=\"{{ i.getId() }}\" name=\"id_toRemove\">
                            <input type=\"submit\" value=\"löschen\" name=\"removeForm\">
                        </form>
                    {% else %}
                        -
                    {% endif %}
                </div>
            </div>
        {% endfor %}



     {% endif %}



    {% if is_granted('IS_AUTHENTICATED_FULLY') and profileName == app.user.username %}

        <div class=\"page-header\">

        </div>

        <form class=\"form-horizontal\" action=\"{{ path('add_newData', { name : app.user.username }) }}\" method=\"post\">
            <fieldset>

                <!-- Datum-->
                <div class=\"form-group\">
                    <label class=\"col-md-3 control-label\" for=\"datum\">DATUM:</label>
                    <div class=\"col-md-6\">
                        <input id=\"name\" name=\"datum\" type=\"date\" placeholder=\"JJJJ-MM-TT\" class=\"form-control\" value=\"{{ datum }}\">
                        <span style=\"color: red;\"></span>
                    </div>
                </div>

                <!-- Strecke-->
                <div class=\"form-group\">
                    <label class=\"col-md-3 control-label\" for=\"strecke\">STRECKE (km):</label>
                    <div class=\"col-md-6\">
                        <input id=\"email\" name=\"strecke\" type=\"text\" placeholder=\"nn / nn.n\" class=\"form-control\" value=\"{{ strecke }}\">
                        <span style=\"color: red;\"></span>
                    </div>
                </div>

                <!-- Zeit-->
                <div class=\"form-group\">
                    <label class=\"col-md-3 control-label\" for=\"zeit\">ZEIT:</label>
                    <div class=\"col-md-6\">
                        <input id=\"email\" name=\"zeit\" type=\"text\" placeholder=\"hh:mm:ss\" class=\"form-control\" value=\"{{ zeit }}\">
                        <span style=\"color: red;\"></span>
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

    {% endif %}


{% endblock %}", "profile.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/templates/profile.php.twig");
    }
}
