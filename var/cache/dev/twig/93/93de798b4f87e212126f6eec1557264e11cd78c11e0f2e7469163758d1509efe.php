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
        $__internal_7fa784442fa93be621f0e834cdb82c063a9f15c96a7d07a9d53929ec96577072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fa784442fa93be621f0e834cdb82c063a9f15c96a7d07a9d53929ec96577072->enter($__internal_7fa784442fa93be621f0e834cdb82c063a9f15c96a7d07a9d53929ec96577072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile.php.twig"));

        $__internal_a2e0063a3fc1bbac294062bc60236358f8c4cf3286ccdc1fe6ed93d3cf76441f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2e0063a3fc1bbac294062bc60236358f8c4cf3286ccdc1fe6ed93d3cf76441f->enter($__internal_a2e0063a3fc1bbac294062bc60236358f8c4cf3286ccdc1fe6ed93d3cf76441f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fa784442fa93be621f0e834cdb82c063a9f15c96a7d07a9d53929ec96577072->leave($__internal_7fa784442fa93be621f0e834cdb82c063a9f15c96a7d07a9d53929ec96577072_prof);

        
        $__internal_a2e0063a3fc1bbac294062bc60236358f8c4cf3286ccdc1fe6ed93d3cf76441f->leave($__internal_a2e0063a3fc1bbac294062bc60236358f8c4cf3286ccdc1fe6ed93d3cf76441f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f0292f700c280062b44eaf0fadba0a9a3d9b631b46ab047431b2a638eff5366d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0292f700c280062b44eaf0fadba0a9a3d9b631b46ab047431b2a638eff5366d->enter($__internal_f0292f700c280062b44eaf0fadba0a9a3d9b631b46ab047431b2a638eff5366d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_992ea763fffd4a111db822e770654888f31011484cd4d3347c869897c4e7dd02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_992ea763fffd4a111db822e770654888f31011484cd4d3347c869897c4e7dd02->enter($__internal_992ea763fffd4a111db822e770654888f31011484cd4d3347c869897c4e7dd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                    echo "                        <form method=\"post\" action=\"functions/remove_element.php\">
                            <input type=\"hidden\" value=\"";
                    // line 44
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getId", array(), "method"), "html", null, true);
                    echo "\" name=\"id\">
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
        
        $__internal_992ea763fffd4a111db822e770654888f31011484cd4d3347c869897c4e7dd02->leave($__internal_992ea763fffd4a111db822e770654888f31011484cd4d3347c869897c4e7dd02_prof);

        
        $__internal_f0292f700c280062b44eaf0fadba0a9a3d9b631b46ab047431b2a638eff5366d->leave($__internal_f0292f700c280062b44eaf0fadba0a9a3d9b631b46ab047431b2a638eff5366d_prof);

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
        return array (  223 => 108,  203 => 91,  191 => 82,  179 => 73,  169 => 66,  162 => 61,  160 => 60,  155 => 57,  149 => 53,  141 => 50,  137 => 48,  130 => 44,  127 => 43,  125 => 42,  118 => 38,  113 => 35,  111 => 34,  107 => 33,  102 => 30,  100 => 29,  96 => 28,  89 => 24,  84 => 21,  80 => 20,  77 => 19,  74 => 18,  72 => 17,  69 => 16,  61 => 10,  59 => 9,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
                        <form method=\"post\" action=\"functions/remove_element.php\">
                            <input type=\"hidden\" value=\"{{ i.getId() }}\" name=\"id\">
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
