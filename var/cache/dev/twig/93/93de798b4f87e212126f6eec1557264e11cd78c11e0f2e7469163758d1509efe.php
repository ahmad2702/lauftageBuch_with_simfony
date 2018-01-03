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
        $__internal_83942871ed89dadcd93b8ab81991d05b7dcba902d2094c0709381fef84115cdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83942871ed89dadcd93b8ab81991d05b7dcba902d2094c0709381fef84115cdd->enter($__internal_83942871ed89dadcd93b8ab81991d05b7dcba902d2094c0709381fef84115cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile.php.twig"));

        $__internal_ec4e345ef9490045fc647be4b1d052890eaca9ae6cee87fc774f5f10cd837dd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec4e345ef9490045fc647be4b1d052890eaca9ae6cee87fc774f5f10cd837dd9->enter($__internal_ec4e345ef9490045fc647be4b1d052890eaca9ae6cee87fc774f5f10cd837dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83942871ed89dadcd93b8ab81991d05b7dcba902d2094c0709381fef84115cdd->leave($__internal_83942871ed89dadcd93b8ab81991d05b7dcba902d2094c0709381fef84115cdd_prof);

        
        $__internal_ec4e345ef9490045fc647be4b1d052890eaca9ae6cee87fc774f5f10cd837dd9->leave($__internal_ec4e345ef9490045fc647be4b1d052890eaca9ae6cee87fc774f5f10cd837dd9_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_eaa4ec14e9cc855285aed574b6179d2ca76814cdb90256cbfd9f1f898b224b0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaa4ec14e9cc855285aed574b6179d2ca76814cdb90256cbfd9f1f898b224b0f->enter($__internal_eaa4ec14e9cc855285aed574b6179d2ca76814cdb90256cbfd9f1f898b224b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4f515adcccc6ba141665bd719b259d686682a777a11a43960b7c8bacc6f549d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f515adcccc6ba141665bd719b259d686682a777a11a43960b7c8bacc6f549d8->enter($__internal_4f515adcccc6ba141665bd719b259d686682a777a11a43960b7c8bacc6f549d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "


    <div class=\"page-header\">
        <h1 style=\"text-align: center;\">Profil von: ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["profileName"]) || array_key_exists("profileName", $context) ? $context["profileName"] : (function () { throw new Twig_Error_Runtime('Variable "profileName" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " </h1>
    </div>

    ";
        // line 11
        if (((isset($context["profile_error"]) || array_key_exists("profile_error", $context) ? $context["profile_error"] : (function () { throw new Twig_Error_Runtime('Variable "profile_error" does not exist.', 11, $this->getSourceContext()); })()) == "no_found")) {
            // line 12
            echo "
        <div class=\"noLinesFound\">
            Profil nicht gefunden. <br>
        </div>

    ";
        } else {
            // line 18
            echo "
        ";
            // line 19
            if ((twig_length_filter($this->env, (isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 19, $this->getSourceContext()); })())) == 0)) {
                // line 20
                echo "
            <div style=\"width: 100%; height: 50px; color: blue; text-align: center;\">

                Anzahl der Lauftage: 0 <br>

                Gesamttage seit dem ersten Lauftag bis heute:
                ";
                // line 26
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                    // line 27
                    echo "                    0
                ";
                } else {
                    // line 29
                    echo "                    <span style=\"color: gray;\">(nur fur eingeloggte User)</span>
                ";
                }
                // line 31
                echo "                <br>

                Gesamte bisher gelaufene Strecke: 0

            </div>

            <div class=\"noLinesFound\">
                Die Liste ist noch leer. <br>
            </div>



        ";
            } else {
                // line 44
                echo "
            ";
                // line 45
                $context["gesamtStreckee"] = 0;
                // line 46
                echo "
            ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 47, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 48
                    echo "                ";
                    $context["gesamtStreckee"] = ((isset($context["gesamtStreckee"]) || array_key_exists("gesamtStreckee", $context) ? $context["gesamtStreckee"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtStreckee" does not exist.', 48, $this->getSourceContext()); })()) + twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getStrecke", array(), "method"));
                    // line 49
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "
            <div style=\"width: 100%; height: 50px; color: blue; text-align: center;\">

                Anzahl der Lauftage: ";
                // line 53
                echo twig_escape_filter($this->env, (isset($context["anzahl"]) || array_key_exists("anzahl", $context) ? $context["anzahl"] : (function () { throw new Twig_Error_Runtime('Variable "anzahl" does not exist.', 53, $this->getSourceContext()); })()), "html", null, true);
                echo " <br>

                Gesamttage seit dem ersten Lauftag bis heute:
                ";
                // line 56
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                    // line 57
                    echo "                    ";
                    echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new Twig_Error_Runtime('Variable "now" does not exist.', 57, $this->getSourceContext()); })()), "U") - twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new Twig_Error_Runtime('Variable "first" does not exist.', 57, $this->getSourceContext()); })()), "getDay", array(), "method"), "U")) / 86400), "html", null, true);
                    echo "
                ";
                } else {
                    // line 59
                    echo "                    <span style=\"color: gray;\">(nur fur eingeloggte User)</span>
                ";
                }
                // line 61
                echo "                <br>

                Gesamte bisher gelaufene Strecke: ";
                // line 63
                echo twig_escape_filter($this->env, (isset($context["gesamtStreckee"]) || array_key_exists("gesamtStreckee", $context) ? $context["gesamtStreckee"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtStreckee" does not exist.', 63, $this->getSourceContext()); })()), "html", null, true);
                echo "

            </div>



            <div class=\"trackerLine\">
                <div class=\"trackerDatum\">
                    <span style=\"text-transform: uppercase; font-weight: bold;\">Datum</span>
                </div>

                <div class=\"trackerStrecke\">
                    <span style=\"text-transform: uppercase; font-weight: bold;\">Gelaufene Strecke</span>
                </div>

                <div class=\"trackerZeit\">
                    <span style=\"text-transform: uppercase; font-weight: bold;\">Gelaufene Zeit</span>
                </div>

                <div class=\"trackerSpeed\">
                    <span style=\"text-transform: uppercase; font-weight: bold;\">geschwindigkeit</span>
                </div>

                ";
                // line 86
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") && ((isset($context["profileName"]) || array_key_exists("profileName", $context) ? $context["profileName"] : (function () { throw new Twig_Error_Runtime('Variable "profileName" does not exist.', 86, $this->getSourceContext()); })()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 86, $this->getSourceContext()); })()), "user", array()), "username", array())))) {
                    // line 87
                    echo "                    <div class=\"trackerRemove\">
                        <span style=\"text-transform: uppercase; font-weight: bold;\">eintrag loschen</span>
                    </div>
                ";
                }
                // line 91
                echo "
            </div>

            ";
                // line 94
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 94, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 95
                    echo "
                <div class=\"trackerLine\">
                    <div class=\"trackerDatum\">
                        ";
                    // line 98
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getDay", array(), "method"), "html", null, true);
                    echo "
                    </div>

                    <div class=\"trackerStrecke\">
                        ";
                    // line 102
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getStrecke", array(), "method"), "html", null, true);
                    echo " km
                    </div>

                    <div class=\"trackerZeit\">
                        ";
                    // line 106
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        // line 107
                        echo "                            ";
                        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getZeit", array(), "method"), 2, "floor"), "html", null, true);
                        echo " min
                        ";
                    } else {
                        // line 109
                        echo "                            <span style=\"color: gray;\">(nur fur eingeloggte User)</span>
                        ";
                    }
                    // line 111
                    echo "                    </div>

                    <div class=\"trackerSpeed\">
                        ";
                    // line 114
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        // line 115
                        echo "                            ";
                        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getSpeed", array(), "method"), 1, "floor"), "html", null, true);
                        echo " km/h
                        ";
                    } else {
                        // line 117
                        echo "                            <span style=\"color: gray;\">(nur fur eingeloggte User)</span>
                        ";
                    }
                    // line 119
                    echo "                    </div>

                    ";
                    // line 121
                    if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") && ((isset($context["profileName"]) || array_key_exists("profileName", $context) ? $context["profileName"] : (function () { throw new Twig_Error_Runtime('Variable "profileName" does not exist.', 121, $this->getSourceContext()); })()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 121, $this->getSourceContext()); })()), "user", array()), "username", array())))) {
                        // line 122
                        echo "                        <div class=\"trackerRemove\">
                            <form method=\"post\" action=\"";
                        // line 123
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("remove_newData", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 123, $this->getSourceContext()); })()), "user", array()), "username", array()))), "html", null, true);
                        echo "\">
                                <input type=\"hidden\" value=\"";
                        // line 124
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getId", array(), "method"), "html", null, true);
                        echo "\" name=\"id_toRemove\">

                                
                                        <input type=\"submit\" value=\"löschen\" name=\"removeForm\">


                            </form>
                        </div>
                    ";
                    }
                    // line 133
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 136
                echo "


        ";
            }
            // line 140
            echo "


        ";
            // line 143
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") && ((isset($context["profileName"]) || array_key_exists("profileName", $context) ? $context["profileName"] : (function () { throw new Twig_Error_Runtime('Variable "profileName" does not exist.', 143, $this->getSourceContext()); })()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 143, $this->getSourceContext()); })()), "user", array()), "username", array())))) {
                // line 144
                echo "
            <div class=\"page-header\">

            </div>

            <form class=\"form-horizontal\" action=\"";
                // line 149
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_newData", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 149, $this->getSourceContext()); })()), "user", array()), "username", array()))), "html", null, true);
                echo "\" method=\"post\">
                <fieldset>

                    <!-- Datum-->
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\" for=\"datum\">DATUM:</label>
                        <div class=\"col-md-6\">
                            <input id=\"name\" name=\"datum\" type=\"date\" placeholder=\"JJJJ-MM-TT\" class=\"form-control\" value=\"";
                // line 156
                echo twig_escape_filter($this->env, (isset($context["datum"]) || array_key_exists("datum", $context) ? $context["datum"] : (function () { throw new Twig_Error_Runtime('Variable "datum" does not exist.', 156, $this->getSourceContext()); })()), "html", null, true);
                echo "\">
                            <span style=\"color: red;\">";
                // line 157
                echo twig_escape_filter($this->env, (isset($context["error_datum"]) || array_key_exists("error_datum", $context) ? $context["error_datum"] : (function () { throw new Twig_Error_Runtime('Variable "error_datum" does not exist.', 157, $this->getSourceContext()); })()), "html", null, true);
                echo "</span>
                        </div>
                    </div>

                    <!-- Strecke-->
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\" for=\"strecke\">STRECKE (km):</label>
                        <div class=\"col-md-6\">
                            <input id=\"email\" name=\"strecke\" type=\"text\" placeholder=\"nn / nn.n\" class=\"form-control\" value=\"";
                // line 165
                echo twig_escape_filter($this->env, (isset($context["strecke"]) || array_key_exists("strecke", $context) ? $context["strecke"] : (function () { throw new Twig_Error_Runtime('Variable "strecke" does not exist.', 165, $this->getSourceContext()); })()), "html", null, true);
                echo "\">
                            <span style=\"color: red;\">";
                // line 166
                echo twig_escape_filter($this->env, (isset($context["error_strecke"]) || array_key_exists("error_strecke", $context) ? $context["error_strecke"] : (function () { throw new Twig_Error_Runtime('Variable "error_strecke" does not exist.', 166, $this->getSourceContext()); })()), "html", null, true);
                echo "</span>
                        </div>
                    </div>

                    <!-- Zeit-->
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\" for=\"zeit\">ZEIT:</label>
                        <div class=\"col-md-6\">
                            <input id=\"email\" name=\"zeit\" type=\"text\" placeholder=\"hh:mm:ss\" class=\"form-control\" value=\"";
                // line 174
                echo twig_escape_filter($this->env, (isset($context["zeit"]) || array_key_exists("zeit", $context) ? $context["zeit"] : (function () { throw new Twig_Error_Runtime('Variable "zeit" does not exist.', 174, $this->getSourceContext()); })()), "html", null, true);
                echo "\">
                            <span style=\"color: red;\">";
                // line 175
                echo twig_escape_filter($this->env, (isset($context["error_zeit"]) || array_key_exists("error_zeit", $context) ? $context["error_zeit"] : (function () { throw new Twig_Error_Runtime('Variable "error_zeit" does not exist.', 175, $this->getSourceContext()); })()), "html", null, true);
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
            // line 191
            echo "
    ";
        }
        // line 193
        echo "



";
        
        $__internal_4f515adcccc6ba141665bd719b259d686682a777a11a43960b7c8bacc6f549d8->leave($__internal_4f515adcccc6ba141665bd719b259d686682a777a11a43960b7c8bacc6f549d8_prof);

        
        $__internal_eaa4ec14e9cc855285aed574b6179d2ca76814cdb90256cbfd9f1f898b224b0f->leave($__internal_eaa4ec14e9cc855285aed574b6179d2ca76814cdb90256cbfd9f1f898b224b0f_prof);

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
        return array (  368 => 193,  364 => 191,  345 => 175,  341 => 174,  330 => 166,  326 => 165,  315 => 157,  311 => 156,  301 => 149,  294 => 144,  292 => 143,  287 => 140,  281 => 136,  273 => 133,  261 => 124,  257 => 123,  254 => 122,  252 => 121,  248 => 119,  244 => 117,  238 => 115,  236 => 114,  231 => 111,  227 => 109,  221 => 107,  219 => 106,  212 => 102,  205 => 98,  200 => 95,  196 => 94,  191 => 91,  185 => 87,  183 => 86,  157 => 63,  153 => 61,  149 => 59,  143 => 57,  141 => 56,  135 => 53,  130 => 50,  124 => 49,  121 => 48,  117 => 47,  114 => 46,  112 => 45,  109 => 44,  94 => 31,  90 => 29,  86 => 27,  84 => 26,  76 => 20,  74 => 19,  71 => 18,  63 => 12,  61 => 11,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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

            <div style=\"width: 100%; height: 50px; color: blue; text-align: center;\">

                Anzahl der Lauftage: 0 <br>

                Gesamttage seit dem ersten Lauftag bis heute:
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    0
                {% else %}
                    <span style=\"color: gray;\">(nur fur eingeloggte User)</span>
                {% endif %}
                <br>

                Gesamte bisher gelaufene Strecke: 0

            </div>

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



            <div class=\"trackerLine\">
                <div class=\"trackerDatum\">
                    <span style=\"text-transform: uppercase; font-weight: bold;\">Datum</span>
                </div>

                <div class=\"trackerStrecke\">
                    <span style=\"text-transform: uppercase; font-weight: bold;\">Gelaufene Strecke</span>
                </div>

                <div class=\"trackerZeit\">
                    <span style=\"text-transform: uppercase; font-weight: bold;\">Gelaufene Zeit</span>
                </div>

                <div class=\"trackerSpeed\">
                    <span style=\"text-transform: uppercase; font-weight: bold;\">geschwindigkeit</span>
                </div>

                {% if is_granted('IS_AUTHENTICATED_FULLY') and profileName == app.user.username %}
                    <div class=\"trackerRemove\">
                        <span style=\"text-transform: uppercase; font-weight: bold;\">eintrag loschen</span>
                    </div>
                {% endif %}

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
