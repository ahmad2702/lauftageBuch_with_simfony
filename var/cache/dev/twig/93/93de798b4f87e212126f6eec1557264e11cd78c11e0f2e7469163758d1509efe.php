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
        $__internal_f52b08f3fc36129fcc785d00db4360d27d5db2daade97e8651e7e65a299fe5b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f52b08f3fc36129fcc785d00db4360d27d5db2daade97e8651e7e65a299fe5b6->enter($__internal_f52b08f3fc36129fcc785d00db4360d27d5db2daade97e8651e7e65a299fe5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile.php.twig"));

        $__internal_4a61f821d733428512248271b099f35ddacaad9c0e25bc844d03660fb4f1479e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a61f821d733428512248271b099f35ddacaad9c0e25bc844d03660fb4f1479e->enter($__internal_4a61f821d733428512248271b099f35ddacaad9c0e25bc844d03660fb4f1479e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f52b08f3fc36129fcc785d00db4360d27d5db2daade97e8651e7e65a299fe5b6->leave($__internal_f52b08f3fc36129fcc785d00db4360d27d5db2daade97e8651e7e65a299fe5b6_prof);

        
        $__internal_4a61f821d733428512248271b099f35ddacaad9c0e25bc844d03660fb4f1479e->leave($__internal_4a61f821d733428512248271b099f35ddacaad9c0e25bc844d03660fb4f1479e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2ce4d0eda58460973dbbe26be34b1cc1293c826bb504c4829dcd882f268c2058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ce4d0eda58460973dbbe26be34b1cc1293c826bb504c4829dcd882f268c2058->enter($__internal_2ce4d0eda58460973dbbe26be34b1cc1293c826bb504c4829dcd882f268c2058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_31644fa4fc7a4d9dfc9c57ff3978208ddd342972a3cc2e11529c39bc728a2ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31644fa4fc7a4d9dfc9c57ff3978208ddd342972a3cc2e11529c39bc728a2ff5->enter($__internal_31644fa4fc7a4d9dfc9c57ff3978208ddd342972a3cc2e11529c39bc728a2ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            $context["gesamtStreckee"] = 0;
            // line 18
            echo "
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 19, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 20
                echo "            ";
                $context["gesamtStreckee"] = ((isset($context["gesamtStreckee"]) || array_key_exists("gesamtStreckee", $context) ? $context["gesamtStreckee"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtStreckee" does not exist.', 20, $this->getSourceContext()); })()) + twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getStrecke", array(), "method"));
                // line 21
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "
        <div style=\"width: 100%; height: 50px; color: blue; text-align: center;\">
            Anzahl der Lauftage: ";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["anzahl"]) || array_key_exists("anzahl", $context) ? $context["anzahl"] : (function () { throw new Twig_Error_Runtime('Variable "anzahl" does not exist.', 24, $this->getSourceContext()); })()), "html", null, true);
            echo " <br>
            Gesamttage seit dem ersten Lauftag bis heute: ";
            // line 25
            echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new Twig_Error_Runtime('Variable "now" does not exist.', 25, $this->getSourceContext()); })()), "U") - twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new Twig_Error_Runtime('Variable "first" does not exist.', 25, $this->getSourceContext()); })()), "getDay", array(), "method"), "U")) / 86400), "html", null, true);
            echo " <br>
            Gesamte bisher gelaufene Strecke: ";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["gesamtStreckee"]) || array_key_exists("gesamtStreckee", $context) ? $context["gesamtStreckee"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtStreckee" does not exist.', 26, $this->getSourceContext()); })()), "html", null, true);
            echo "
        </div>

        ";
            // line 29
            $context["gesamtK"] = 0;
            // line 30
            echo "        ";
            $context["gesamtZ"] = 0;
            // line 31
            echo "
        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 32, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 33
                echo "
            <div class=\"trackerLine\">
                <div class=\"trackerDatum\">
                    ";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getDay", array(), "method"), "html", null, true);
                echo "
                </div>

                <div class=\"trackerStrecke\">
                    ";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getStrecke", array(), "method"), "html", null, true);
                echo " km
                    ";
                // line 41
                $context["gesamtK"] = ((isset($context["gesamtK"]) || array_key_exists("gesamtK", $context) ? $context["gesamtK"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtK" does not exist.', 41, $this->getSourceContext()); })()) + twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getStrecke", array(), "method"));
                // line 42
                echo "                </div>

                <div class=\"trackerZeit\">
                    ";
                // line 45
                echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getZeit", array(), "method"), 2, "floor"), "html", null, true);
                echo " min
                    ";
                // line 46
                $context["gesamtZ"] = ((isset($context["gesamtZ"]) || array_key_exists("gesamtZ", $context) ? $context["gesamtZ"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtZ" does not exist.', 46, $this->getSourceContext()); })()) + twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getZeit", array(), "method"));
                // line 47
                echo "                </div>

                <div class=\"trackerSpeed\">
                    ";
                // line 50
                echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getSpeed", array(), "method"), 1, "floor"), "html", null, true);
                echo " km/h
                </div>

                <div class=\"trackerRemove\">
                    ";
                // line 54
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") && ((isset($context["profileName"]) || array_key_exists("profileName", $context) ? $context["profileName"] : (function () { throw new Twig_Error_Runtime('Variable "profileName" does not exist.', 54, $this->getSourceContext()); })()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 54, $this->getSourceContext()); })()), "user", array()), "username", array())))) {
                    // line 55
                    echo "                        <form method=\"post\" action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("remove_newData", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 55, $this->getSourceContext()); })()), "user", array()), "username", array()))), "html", null, true);
                    echo "\">
                            <input type=\"hidden\" value=\"";
                    // line 56
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getId", array(), "method"), "html", null, true);
                    echo "\" name=\"id_toRemove\">
                            <input type=\"submit\" value=\"löschen\" name=\"removeForm\">
                        </form>
                    ";
                } else {
                    // line 60
                    echo "                        -
                    ";
                }
                // line 62
                echo "                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "


     ";
        }
        // line 69
        echo "


    ";
        // line 72
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") && ((isset($context["profileName"]) || array_key_exists("profileName", $context) ? $context["profileName"] : (function () { throw new Twig_Error_Runtime('Variable "profileName" does not exist.', 72, $this->getSourceContext()); })()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 72, $this->getSourceContext()); })()), "user", array()), "username", array())))) {
            // line 73
            echo "
        <div class=\"page-header\">

        </div>

        <form class=\"form-horizontal\" action=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_newData", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 78, $this->getSourceContext()); })()), "user", array()), "username", array()))), "html", null, true);
            echo "\" method=\"post\">
            <fieldset>

                <!-- Datum-->
                <div class=\"form-group\">
                    <label class=\"col-md-3 control-label\" for=\"datum\">DATUM:</label>
                    <div class=\"col-md-6\">
                        <input id=\"name\" name=\"datum\" type=\"date\" placeholder=\"JJJJ-MM-TT\" class=\"form-control\" value=\"";
            // line 85
            echo twig_escape_filter($this->env, (isset($context["datum"]) || array_key_exists("datum", $context) ? $context["datum"] : (function () { throw new Twig_Error_Runtime('Variable "datum" does not exist.', 85, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
                        <span style=\"color: red;\">";
            // line 86
            echo twig_escape_filter($this->env, (isset($context["error_datum"]) || array_key_exists("error_datum", $context) ? $context["error_datum"] : (function () { throw new Twig_Error_Runtime('Variable "error_datum" does not exist.', 86, $this->getSourceContext()); })()), "html", null, true);
            echo "</span>
                    </div>
                </div>

                <!-- Strecke-->
                <div class=\"form-group\">
                    <label class=\"col-md-3 control-label\" for=\"strecke\">STRECKE (km):</label>
                    <div class=\"col-md-6\">
                        <input id=\"email\" name=\"strecke\" type=\"text\" placeholder=\"nn / nn.n\" class=\"form-control\" value=\"";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["strecke"]) || array_key_exists("strecke", $context) ? $context["strecke"] : (function () { throw new Twig_Error_Runtime('Variable "strecke" does not exist.', 94, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
                        <span style=\"color: red;\">";
            // line 95
            echo twig_escape_filter($this->env, (isset($context["error_strecke"]) || array_key_exists("error_strecke", $context) ? $context["error_strecke"] : (function () { throw new Twig_Error_Runtime('Variable "error_strecke" does not exist.', 95, $this->getSourceContext()); })()), "html", null, true);
            echo "</span>
                    </div>
                </div>

                <!-- Zeit-->
                <div class=\"form-group\">
                    <label class=\"col-md-3 control-label\" for=\"zeit\">ZEIT:</label>
                    <div class=\"col-md-6\">
                        <input id=\"email\" name=\"zeit\" type=\"text\" placeholder=\"hh:mm:ss\" class=\"form-control\" value=\"";
            // line 103
            echo twig_escape_filter($this->env, (isset($context["zeit"]) || array_key_exists("zeit", $context) ? $context["zeit"] : (function () { throw new Twig_Error_Runtime('Variable "zeit" does not exist.', 103, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
                        <span style=\"color: red;\">";
            // line 104
            echo twig_escape_filter($this->env, (isset($context["error_zeit"]) || array_key_exists("error_zeit", $context) ? $context["error_zeit"] : (function () { throw new Twig_Error_Runtime('Variable "error_zeit" does not exist.', 104, $this->getSourceContext()); })()), "html", null, true);
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
        // line 120
        echo "

";
        
        $__internal_31644fa4fc7a4d9dfc9c57ff3978208ddd342972a3cc2e11529c39bc728a2ff5->leave($__internal_31644fa4fc7a4d9dfc9c57ff3978208ddd342972a3cc2e11529c39bc728a2ff5_prof);

        
        $__internal_2ce4d0eda58460973dbbe26be34b1cc1293c826bb504c4829dcd882f268c2058->leave($__internal_2ce4d0eda58460973dbbe26be34b1cc1293c826bb504c4829dcd882f268c2058_prof);

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
        return array (  270 => 120,  251 => 104,  247 => 103,  236 => 95,  232 => 94,  221 => 86,  217 => 85,  207 => 78,  200 => 73,  198 => 72,  193 => 69,  187 => 65,  179 => 62,  175 => 60,  168 => 56,  163 => 55,  161 => 54,  154 => 50,  149 => 47,  147 => 46,  143 => 45,  138 => 42,  136 => 41,  132 => 40,  125 => 36,  120 => 33,  116 => 32,  113 => 31,  110 => 30,  108 => 29,  102 => 26,  98 => 25,  94 => 24,  90 => 22,  84 => 21,  81 => 20,  77 => 19,  74 => 18,  72 => 17,  69 => 16,  61 => 10,  59 => 9,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

        {% set gesamtStreckee=0 %}

        {% for i in lines %}
            {% set gesamtStreckee=gesamtStreckee+i.getStrecke() %}
        {% endfor %}

        <div style=\"width: 100%; height: 50px; color: blue; text-align: center;\">
            Anzahl der Lauftage: {{ anzahl }} <br>
            Gesamttage seit dem ersten Lauftag bis heute: {{ ( (now | date('U')) - (first.getDay() | date('U')) )/86400 }} <br>
            Gesamte bisher gelaufene Strecke: {{ gesamtStreckee }}
        </div>

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
                    {{ i.getZeit() | round(2, 'floor') }} min
                    {% set gesamtZ=gesamtZ+i.getZeit() %}
                </div>

                <div class=\"trackerSpeed\">
                    {{ i.getSpeed() | round(1, 'floor') }} km/h
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


{% endblock %}", "profile.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/templates/profile.php.twig");
    }
}
