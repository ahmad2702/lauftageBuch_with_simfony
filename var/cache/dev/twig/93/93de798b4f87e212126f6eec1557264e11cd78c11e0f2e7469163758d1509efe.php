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
        $__internal_dd1742a97b253aaa3bca0c6ffb212f0af918d74b5312b527613dc3d07e7d2396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd1742a97b253aaa3bca0c6ffb212f0af918d74b5312b527613dc3d07e7d2396->enter($__internal_dd1742a97b253aaa3bca0c6ffb212f0af918d74b5312b527613dc3d07e7d2396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile.php.twig"));

        $__internal_274275cfb6e37096a53b5d76fa0408d3ece6bbac9d53fe670d0f01472cc22783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_274275cfb6e37096a53b5d76fa0408d3ece6bbac9d53fe670d0f01472cc22783->enter($__internal_274275cfb6e37096a53b5d76fa0408d3ece6bbac9d53fe670d0f01472cc22783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd1742a97b253aaa3bca0c6ffb212f0af918d74b5312b527613dc3d07e7d2396->leave($__internal_dd1742a97b253aaa3bca0c6ffb212f0af918d74b5312b527613dc3d07e7d2396_prof);

        
        $__internal_274275cfb6e37096a53b5d76fa0408d3ece6bbac9d53fe670d0f01472cc22783->leave($__internal_274275cfb6e37096a53b5d76fa0408d3ece6bbac9d53fe670d0f01472cc22783_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8a1e8aa3f6de55426ab1df1301fd89b0fe0e81969b7be71303d6efdab25e0c47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a1e8aa3f6de55426ab1df1301fd89b0fe0e81969b7be71303d6efdab25e0c47->enter($__internal_8a1e8aa3f6de55426ab1df1301fd89b0fe0e81969b7be71303d6efdab25e0c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f636a85ff43bb7cf8d9d41e75fcf0c75990cbb4eaca9fc30ca761582bcad1cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f636a85ff43bb7cf8d9d41e75fcf0c75990cbb4eaca9fc30ca761582bcad1cf3->enter($__internal_f636a85ff43bb7cf8d9d41e75fcf0c75990cbb4eaca9fc30ca761582bcad1cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            <div style=\"width: 100%; height: 50px; color: blue; text-align: center;\">

                Anzahl der Lauftage: 0 <br>

                Gesamttage seit dem ersten Lauftag bis heute:
                ";
                // line 24
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                    // line 25
                    echo "                    0
                ";
                } else {
                    // line 27
                    echo "                    <span style=\"color: gray;\">(nur fur eingeloggte User)</span>
                ";
                }
                // line 29
                echo "                <br>

                Gesamte bisher gelaufene Strecke: 0

            </div>

            <div class=\"noLinesFound\">
                Die Liste ist noch leer. <br>
            </div>



        ";
            } else {
                // line 42
                echo "
            ";
                // line 43
                $context["gesamtStreckee"] = 0;
                // line 44
                echo "
            ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 45, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 46
                    echo "                ";
                    $context["gesamtStreckee"] = ((isset($context["gesamtStreckee"]) || array_key_exists("gesamtStreckee", $context) ? $context["gesamtStreckee"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtStreckee" does not exist.', 46, $this->getSourceContext()); })()) + twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getStrecke", array(), "method"));
                    // line 47
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "
            <div style=\"width: 100%; height: 50px; color: blue; text-align: center;\">

                Anzahl der Lauftage: ";
                // line 51
                echo twig_escape_filter($this->env, (isset($context["anzahl"]) || array_key_exists("anzahl", $context) ? $context["anzahl"] : (function () { throw new Twig_Error_Runtime('Variable "anzahl" does not exist.', 51, $this->getSourceContext()); })()), "html", null, true);
                echo " <br>

                Gesamttage seit dem ersten Lauftag bis heute:
                ";
                // line 54
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                    // line 55
                    echo "                    ";
                    echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new Twig_Error_Runtime('Variable "now" does not exist.', 55, $this->getSourceContext()); })()), "U") - twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new Twig_Error_Runtime('Variable "first" does not exist.', 55, $this->getSourceContext()); })()), "getDay", array(), "method"), "U")) / 86400), "html", null, true);
                    echo "
                ";
                } else {
                    // line 57
                    echo "                    <span style=\"color: gray;\">(nur fur eingeloggte User)</span>
                ";
                }
                // line 59
                echo "                <br>

                Gesamte bisher gelaufene Strecke: ";
                // line 61
                echo twig_escape_filter($this->env, (isset($context["gesamtStreckee"]) || array_key_exists("gesamtStreckee", $context) ? $context["gesamtStreckee"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtStreckee" does not exist.', 61, $this->getSourceContext()); })()), "html", null, true);
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
                // line 84
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") && ((isset($context["profileName"]) || array_key_exists("profileName", $context) ? $context["profileName"] : (function () { throw new Twig_Error_Runtime('Variable "profileName" does not exist.', 84, $this->getSourceContext()); })()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 84, $this->getSourceContext()); })()), "user", array()), "username", array())))) {
                    // line 85
                    echo "                    <div class=\"trackerRemove\">
                        <span style=\"text-transform: uppercase; font-weight: bold;\">eintrag loschen</span>
                    </div>
                ";
                }
                // line 89
                echo "
            </div>

            ";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 92, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 93
                    echo "
                <div class=\"trackerLine\">
                    <div class=\"trackerDatum\">
                        ";
                    // line 96
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getDay", array(), "method"), "html", null, true);
                    echo "
                    </div>

                    <div class=\"trackerStrecke\">
                        ";
                    // line 100
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getStrecke", array(), "method"), "html", null, true);
                    echo " km
                    </div>

                    <div class=\"trackerZeit\">
                        ";
                    // line 104
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        // line 105
                        echo "                            ";
                        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getZeit", array(), "method"), 2, "floor"), "html", null, true);
                        echo " min
                        ";
                    } else {
                        // line 107
                        echo "                            <span style=\"color: gray;\">(nur fur eingeloggte User)</span>
                        ";
                    }
                    // line 109
                    echo "                    </div>

                    <div class=\"trackerSpeed\">
                        ";
                    // line 112
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        // line 113
                        echo "                            ";
                        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getSpeed", array(), "method"), 1, "floor"), "html", null, true);
                        echo " km/h
                        ";
                    } else {
                        // line 115
                        echo "                            <span style=\"color: gray;\">(nur fur eingeloggte User)</span>
                        ";
                    }
                    // line 117
                    echo "                    </div>

                    ";
                    // line 119
                    if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") && ((isset($context["profileName"]) || array_key_exists("profileName", $context) ? $context["profileName"] : (function () { throw new Twig_Error_Runtime('Variable "profileName" does not exist.', 119, $this->getSourceContext()); })()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 119, $this->getSourceContext()); })()), "user", array()), "username", array())))) {
                        // line 120
                        echo "                        <div class=\"trackerRemove\">
                            <form method=\"post\" action=\"";
                        // line 121
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("remove_newData", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 121, $this->getSourceContext()); })()), "user", array()), "username", array()))), "html", null, true);
                        echo "\">
                                <input type=\"hidden\" value=\"";
                        // line 122
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getId", array(), "method"), "html", null, true);
                        echo "\" name=\"id_toRemove\">


                                ";
                        // line 125
                        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("edit", (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 125, $this->getSourceContext()); })()))) {
                            // line 126
                            echo "                                        <input type=\"submit\" value=\"löschen\" name=\"removeForm\">
                                ";
                        }
                        // line 128
                        echo "
                            </form>
                        </div>
                    ";
                    }
                    // line 132
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 135
                echo "


        ";
            }
            // line 139
            echo "


        ";
            // line 142
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") && ((isset($context["profileName"]) || array_key_exists("profileName", $context) ? $context["profileName"] : (function () { throw new Twig_Error_Runtime('Variable "profileName" does not exist.', 142, $this->getSourceContext()); })()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 142, $this->getSourceContext()); })()), "user", array()), "username", array())))) {
                // line 143
                echo "
            <div class=\"page-header\">

            </div>

            <form class=\"form-horizontal\" action=\"";
                // line 148
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_newData", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 148, $this->getSourceContext()); })()), "user", array()), "username", array()))), "html", null, true);
                echo "\" method=\"post\">
                <fieldset>

                    <!-- Datum-->
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\" for=\"datum\">DATUM:</label>
                        <div class=\"col-md-6\">
                            <input id=\"name\" name=\"datum\" type=\"date\" placeholder=\"JJJJ-MM-TT\" class=\"form-control\" value=\"";
                // line 155
                echo twig_escape_filter($this->env, (isset($context["datum"]) || array_key_exists("datum", $context) ? $context["datum"] : (function () { throw new Twig_Error_Runtime('Variable "datum" does not exist.', 155, $this->getSourceContext()); })()), "html", null, true);
                echo "\">
                            <span style=\"color: red;\">";
                // line 156
                echo twig_escape_filter($this->env, (isset($context["error_datum"]) || array_key_exists("error_datum", $context) ? $context["error_datum"] : (function () { throw new Twig_Error_Runtime('Variable "error_datum" does not exist.', 156, $this->getSourceContext()); })()), "html", null, true);
                echo "</span>
                        </div>
                    </div>

                    <!-- Strecke-->
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\" for=\"strecke\">STRECKE (km):</label>
                        <div class=\"col-md-6\">
                            <input id=\"email\" name=\"strecke\" type=\"text\" placeholder=\"nn / nn.n\" class=\"form-control\" value=\"";
                // line 164
                echo twig_escape_filter($this->env, (isset($context["strecke"]) || array_key_exists("strecke", $context) ? $context["strecke"] : (function () { throw new Twig_Error_Runtime('Variable "strecke" does not exist.', 164, $this->getSourceContext()); })()), "html", null, true);
                echo "\">
                            <span style=\"color: red;\">";
                // line 165
                echo twig_escape_filter($this->env, (isset($context["error_strecke"]) || array_key_exists("error_strecke", $context) ? $context["error_strecke"] : (function () { throw new Twig_Error_Runtime('Variable "error_strecke" does not exist.', 165, $this->getSourceContext()); })()), "html", null, true);
                echo "</span>
                        </div>
                    </div>

                    <!-- Zeit-->
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\" for=\"zeit\">ZEIT:</label>
                        <div class=\"col-md-6\">
                            <input id=\"email\" name=\"zeit\" type=\"text\" placeholder=\"hh:mm:ss\" class=\"form-control\" value=\"";
                // line 173
                echo twig_escape_filter($this->env, (isset($context["zeit"]) || array_key_exists("zeit", $context) ? $context["zeit"] : (function () { throw new Twig_Error_Runtime('Variable "zeit" does not exist.', 173, $this->getSourceContext()); })()), "html", null, true);
                echo "\">
                            <span style=\"color: red;\">";
                // line 174
                echo twig_escape_filter($this->env, (isset($context["error_zeit"]) || array_key_exists("error_zeit", $context) ? $context["error_zeit"] : (function () { throw new Twig_Error_Runtime('Variable "error_zeit" does not exist.', 174, $this->getSourceContext()); })()), "html", null, true);
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
            // line 190
            echo "
    ";
        }
        // line 192
        echo "



";
        
        $__internal_f636a85ff43bb7cf8d9d41e75fcf0c75990cbb4eaca9fc30ca761582bcad1cf3->leave($__internal_f636a85ff43bb7cf8d9d41e75fcf0c75990cbb4eaca9fc30ca761582bcad1cf3_prof);

        
        $__internal_8a1e8aa3f6de55426ab1df1301fd89b0fe0e81969b7be71303d6efdab25e0c47->leave($__internal_8a1e8aa3f6de55426ab1df1301fd89b0fe0e81969b7be71303d6efdab25e0c47_prof);

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
        return array (  372 => 192,  368 => 190,  349 => 174,  345 => 173,  334 => 165,  330 => 164,  319 => 156,  315 => 155,  305 => 148,  298 => 143,  296 => 142,  291 => 139,  285 => 135,  277 => 132,  271 => 128,  267 => 126,  265 => 125,  259 => 122,  255 => 121,  252 => 120,  250 => 119,  246 => 117,  242 => 115,  236 => 113,  234 => 112,  229 => 109,  225 => 107,  219 => 105,  217 => 104,  210 => 100,  203 => 96,  198 => 93,  194 => 92,  189 => 89,  183 => 85,  181 => 84,  155 => 61,  151 => 59,  147 => 57,  141 => 55,  139 => 54,  133 => 51,  128 => 48,  122 => 47,  119 => 46,  115 => 45,  112 => 44,  110 => 43,  107 => 42,  92 => 29,  88 => 27,  84 => 25,  82 => 24,  74 => 18,  72 => 17,  69 => 16,  61 => 10,  59 => 9,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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


                                {% if is_granted('edit', user) %}
                                        <input type=\"submit\" value=\"löschen\" name=\"removeForm\">
                                {% endif %}

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
