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
        $__internal_2f0c8f7504efb801abe11d67ae982db9fadc5efbef6696c0f50fef035eafa097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f0c8f7504efb801abe11d67ae982db9fadc5efbef6696c0f50fef035eafa097->enter($__internal_2f0c8f7504efb801abe11d67ae982db9fadc5efbef6696c0f50fef035eafa097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile.php.twig"));

        $__internal_e74e681c21fa9514e61fd954d7a82608b0c55795f55639a364467df8d22c6dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e74e681c21fa9514e61fd954d7a82608b0c55795f55639a364467df8d22c6dff->enter($__internal_e74e681c21fa9514e61fd954d7a82608b0c55795f55639a364467df8d22c6dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f0c8f7504efb801abe11d67ae982db9fadc5efbef6696c0f50fef035eafa097->leave($__internal_2f0c8f7504efb801abe11d67ae982db9fadc5efbef6696c0f50fef035eafa097_prof);

        
        $__internal_e74e681c21fa9514e61fd954d7a82608b0c55795f55639a364467df8d22c6dff->leave($__internal_e74e681c21fa9514e61fd954d7a82608b0c55795f55639a364467df8d22c6dff_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_77c5e8bfe9442f18c17b2f9c89b4870725dcc8036e9162a8113831611af27361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77c5e8bfe9442f18c17b2f9c89b4870725dcc8036e9162a8113831611af27361->enter($__internal_77c5e8bfe9442f18c17b2f9c89b4870725dcc8036e9162a8113831611af27361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6b3449991f52a72cf78eca9a20246179401247ba8470e6bbd884472c646472f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b3449991f52a72cf78eca9a20246179401247ba8470e6bbd884472c646472f6->enter($__internal_6b3449991f52a72cf78eca9a20246179401247ba8470e6bbd884472c646472f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"page-header\">
        <h1 style=\"text-align: center;\">Profil von: ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["profileName"]) || array_key_exists("profileName", $context) ? $context["profileName"] : (function () { throw new Twig_Error_Runtime('Variable "profileName" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
        echo " </h1>
    </div>

    ";
        // line 9
        if (((isset($context["profile_error"]) || array_key_exists("profile_error", $context) ? $context["profile_error"] : (function () { throw new Twig_Error_Runtime('Variable "profile_error" does not exist.', 9, $this->getSourceContext()); })()) == "no_found")) {
            // line 10
            echo "
        <div class=\"noLinesFound\">
            Profil nicht gefunden. <br>
        </div>

    ";
        } else {
            // line 16
            echo "
        ";
            // line 17
            if ((twig_length_filter($this->env, (isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 17, $this->getSourceContext()); })())) == 0)) {
                // line 18
                echo "
            <div class=\"noLinesFound\">
                Die Liste ist noch leer. <br>
            </div>

        ";
            } else {
                // line 24
                echo "
            ";
                // line 25
                $context["gesamtStreckee"] = 0;
                // line 26
                echo "
            ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 27, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 28
                    echo "                ";
                    $context["gesamtStreckee"] = ((isset($context["gesamtStreckee"]) || array_key_exists("gesamtStreckee", $context) ? $context["gesamtStreckee"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtStreckee" does not exist.', 28, $this->getSourceContext()); })()) + twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getStrecke", array(), "method"));
                    // line 29
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "
            <div style=\"width: 100%; height: 50px; color: blue; text-align: center;\">

                Anzahl der Lauftage: ";
                // line 33
                echo twig_escape_filter($this->env, (isset($context["anzahl"]) || array_key_exists("anzahl", $context) ? $context["anzahl"] : (function () { throw new Twig_Error_Runtime('Variable "anzahl" does not exist.', 33, $this->getSourceContext()); })()), "html", null, true);
                echo " <br>

                Gesamttage seit dem ersten Lauftag bis heute:
                ";
                // line 36
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                    // line 37
                    echo "                    ";
                    echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new Twig_Error_Runtime('Variable "now" does not exist.', 37, $this->getSourceContext()); })()), "U") - twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new Twig_Error_Runtime('Variable "first" does not exist.', 37, $this->getSourceContext()); })()), "getDay", array(), "method"), "U")) / 86400), "html", null, true);
                    echo "
                ";
                } else {
                    // line 39
                    echo "                    <span style=\"color: gray;\">(nur fur eingeloggte User)</span>
                ";
                }
                // line 41
                echo "                <br>

                Gesamte bisher gelaufene Strecke: ";
                // line 43
                echo twig_escape_filter($this->env, (isset($context["gesamtStreckee"]) || array_key_exists("gesamtStreckee", $context) ? $context["gesamtStreckee"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtStreckee" does not exist.', 43, $this->getSourceContext()); })()), "html", null, true);
                echo "

            </div>


            ";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 48, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 49
                    echo "
                <div class=\"trackerLine\">
                    <div class=\"trackerDatum\">
                        ";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getDay", array(), "method"), "html", null, true);
                    echo "
                    </div>

                    <div class=\"trackerStrecke\">
                        ";
                    // line 56
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getStrecke", array(), "method"), "html", null, true);
                    echo " km
                    </div>

                    <div class=\"trackerZeit\">
                        ";
                    // line 60
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        // line 61
                        echo "                            ";
                        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getZeit", array(), "method"), 2, "floor"), "html", null, true);
                        echo " min
                        ";
                    } else {
                        // line 63
                        echo "                            <span style=\"color: gray;\">(nur fur eingeloggte User)</span>
                        ";
                    }
                    // line 65
                    echo "                    </div>

                    <div class=\"trackerSpeed\">
                        ";
                    // line 68
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        // line 69
                        echo "                            ";
                        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getSpeed", array(), "method"), 1, "floor"), "html", null, true);
                        echo " km/h
                        ";
                    } else {
                        // line 71
                        echo "                            <span style=\"color: gray;\">(nur fur eingeloggte User)</span>
                        ";
                    }
                    // line 73
                    echo "                    </div>

                    ";
                    // line 75
                    if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") && ((isset($context["profileName"]) || array_key_exists("profileName", $context) ? $context["profileName"] : (function () { throw new Twig_Error_Runtime('Variable "profileName" does not exist.', 75, $this->getSourceContext()); })()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 75, $this->getSourceContext()); })()), "user", array()), "username", array())))) {
                        // line 76
                        echo "                        <div class=\"trackerRemove\">
                            <form method=\"post\" action=\"";
                        // line 77
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("remove_newData", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 77, $this->getSourceContext()); })()), "user", array()), "username", array()))), "html", null, true);
                        echo "\">
                                <input type=\"hidden\" value=\"";
                        // line 78
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getId", array(), "method"), "html", null, true);
                        echo "\" name=\"id_toRemove\">
                                <input type=\"submit\" value=\"löschen\" name=\"removeForm\">
                            </form>
                        </div>
                    ";
                    }
                    // line 83
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "


        ";
            }
            // line 90
            echo "


        ";
            // line 93
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") && ((isset($context["profileName"]) || array_key_exists("profileName", $context) ? $context["profileName"] : (function () { throw new Twig_Error_Runtime('Variable "profileName" does not exist.', 93, $this->getSourceContext()); })()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 93, $this->getSourceContext()); })()), "user", array()), "username", array())))) {
                // line 94
                echo "
            <div class=\"page-header\">

            </div>

            <form class=\"form-horizontal\" action=\"";
                // line 99
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_newData", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 99, $this->getSourceContext()); })()), "user", array()), "username", array()))), "html", null, true);
                echo "\" method=\"post\">
                <fieldset>

                    <!-- Datum-->
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\" for=\"datum\">DATUM:</label>
                        <div class=\"col-md-6\">
                            <input id=\"name\" name=\"datum\" type=\"date\" placeholder=\"JJJJ-MM-TT\" class=\"form-control\" value=\"";
                // line 106
                echo twig_escape_filter($this->env, (isset($context["datum"]) || array_key_exists("datum", $context) ? $context["datum"] : (function () { throw new Twig_Error_Runtime('Variable "datum" does not exist.', 106, $this->getSourceContext()); })()), "html", null, true);
                echo "\">
                            <span style=\"color: red;\">";
                // line 107
                echo twig_escape_filter($this->env, (isset($context["error_datum"]) || array_key_exists("error_datum", $context) ? $context["error_datum"] : (function () { throw new Twig_Error_Runtime('Variable "error_datum" does not exist.', 107, $this->getSourceContext()); })()), "html", null, true);
                echo "</span>
                        </div>
                    </div>

                    <!-- Strecke-->
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\" for=\"strecke\">STRECKE (km):</label>
                        <div class=\"col-md-6\">
                            <input id=\"email\" name=\"strecke\" type=\"text\" placeholder=\"nn / nn.n\" class=\"form-control\" value=\"";
                // line 115
                echo twig_escape_filter($this->env, (isset($context["strecke"]) || array_key_exists("strecke", $context) ? $context["strecke"] : (function () { throw new Twig_Error_Runtime('Variable "strecke" does not exist.', 115, $this->getSourceContext()); })()), "html", null, true);
                echo "\">
                            <span style=\"color: red;\">";
                // line 116
                echo twig_escape_filter($this->env, (isset($context["error_strecke"]) || array_key_exists("error_strecke", $context) ? $context["error_strecke"] : (function () { throw new Twig_Error_Runtime('Variable "error_strecke" does not exist.', 116, $this->getSourceContext()); })()), "html", null, true);
                echo "</span>
                        </div>
                    </div>

                    <!-- Zeit-->
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\" for=\"zeit\">ZEIT:</label>
                        <div class=\"col-md-6\">
                            <input id=\"email\" name=\"zeit\" type=\"text\" placeholder=\"hh:mm:ss\" class=\"form-control\" value=\"";
                // line 124
                echo twig_escape_filter($this->env, (isset($context["zeit"]) || array_key_exists("zeit", $context) ? $context["zeit"] : (function () { throw new Twig_Error_Runtime('Variable "zeit" does not exist.', 124, $this->getSourceContext()); })()), "html", null, true);
                echo "\">
                            <span style=\"color: red;\">";
                // line 125
                echo twig_escape_filter($this->env, (isset($context["error_zeit"]) || array_key_exists("error_zeit", $context) ? $context["error_zeit"] : (function () { throw new Twig_Error_Runtime('Variable "error_zeit" does not exist.', 125, $this->getSourceContext()); })()), "html", null, true);
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
            }
            // line 141
            echo "
    ";
        }
        // line 143
        echo "



";
        
        $__internal_6b3449991f52a72cf78eca9a20246179401247ba8470e6bbd884472c646472f6->leave($__internal_6b3449991f52a72cf78eca9a20246179401247ba8470e6bbd884472c646472f6_prof);

        
        $__internal_77c5e8bfe9442f18c17b2f9c89b4870725dcc8036e9162a8113831611af27361->leave($__internal_77c5e8bfe9442f18c17b2f9c89b4870725dcc8036e9162a8113831611af27361_prof);

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
        return array (  306 => 143,  302 => 141,  283 => 125,  279 => 124,  268 => 116,  264 => 115,  253 => 107,  249 => 106,  239 => 99,  232 => 94,  230 => 93,  225 => 90,  219 => 86,  211 => 83,  203 => 78,  199 => 77,  196 => 76,  194 => 75,  190 => 73,  186 => 71,  180 => 69,  178 => 68,  173 => 65,  169 => 63,  163 => 61,  161 => 60,  154 => 56,  147 => 52,  142 => 49,  138 => 48,  130 => 43,  126 => 41,  122 => 39,  116 => 37,  114 => 36,  108 => 33,  103 => 30,  97 => 29,  94 => 28,  90 => 27,  87 => 26,  85 => 25,  82 => 24,  74 => 18,  72 => 17,  69 => 16,  61 => 10,  59 => 9,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.php.twig\" %}

{% block content %}

    <div class=\"page-header\">
        <h1 style=\"text-align: center;\">Profil von: {{ profileName }} </h1>
    </div>

    {% if profile_error == \"no_found\" %}

        <div class=\"noLinesFound\">
            Profil nicht gefunden. <br>
        </div>

    {% else %}

        {% if (lines|length) == 0 %}

            <div class=\"noLinesFound\">
                Die Liste ist noch leer. <br>
            </div>

        {% else %}

            {% set gesamtStreckee=0 %}

            {% for i in lines %}
                {% set gesamtStreckee=gesamtStreckee+i.getStrecke() %}
            {% endfor %}

            <div style=\"width: 100%; height: 50px; color: blue; text-align: center;\">

                Anzahl der Lauftage: {{ anzahl }} <br>

                Gesamttage seit dem ersten Lauftag bis heute:
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    {{ ( (now | date('U')) - (first.getDay() | date('U')) )/86400 }}
                {% else %}
                    <span style=\"color: gray;\">(nur fur eingeloggte User)</span>
                {% endif %}
                <br>

                Gesamte bisher gelaufene Strecke: {{ gesamtStreckee }}

            </div>


            {% for i in lines %}

                <div class=\"trackerLine\">
                    <div class=\"trackerDatum\">
                        {{ i.getDay() }}
                    </div>

                    <div class=\"trackerStrecke\">
                        {{ i.getStrecke() }} km
                    </div>

                    <div class=\"trackerZeit\">
                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                            {{ i.getZeit() | round(2, 'floor') }} min
                        {% else %}
                            <span style=\"color: gray;\">(nur fur eingeloggte User)</span>
                        {% endif %}
                    </div>

                    <div class=\"trackerSpeed\">
                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                            {{ i.getSpeed() | round(1, 'floor') }} km/h
                        {% else %}
                            <span style=\"color: gray;\">(nur fur eingeloggte User)</span>
                        {% endif %}
                    </div>

                    {% if is_granted('IS_AUTHENTICATED_FULLY') and profileName == app.user.username %}
                        <div class=\"trackerRemove\">
                            <form method=\"post\" action=\"{{ path('remove_newData', { name : app.user.username }) }}\">
                                <input type=\"hidden\" value=\"{{ i.getId() }}\" name=\"id_toRemove\">
                                <input type=\"submit\" value=\"löschen\" name=\"removeForm\">
                            </form>
                        </div>
                    {% endif %}

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

        {% endif %}

    {% endif %}




{% endblock %}", "profile.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/templates/profile.php.twig");
    }
}
