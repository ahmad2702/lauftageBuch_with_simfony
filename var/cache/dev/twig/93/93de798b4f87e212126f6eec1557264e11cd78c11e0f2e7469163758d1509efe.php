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
        $__internal_6ef745b08159e029599019eebfe70eb609e9b69c2789cd91c97f24a842d0b01a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ef745b08159e029599019eebfe70eb609e9b69c2789cd91c97f24a842d0b01a->enter($__internal_6ef745b08159e029599019eebfe70eb609e9b69c2789cd91c97f24a842d0b01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile.php.twig"));

        $__internal_23123a95878f615fff907fcc14b6af47e4505d595bb762963d4b9649285fe85a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23123a95878f615fff907fcc14b6af47e4505d595bb762963d4b9649285fe85a->enter($__internal_23123a95878f615fff907fcc14b6af47e4505d595bb762963d4b9649285fe85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ef745b08159e029599019eebfe70eb609e9b69c2789cd91c97f24a842d0b01a->leave($__internal_6ef745b08159e029599019eebfe70eb609e9b69c2789cd91c97f24a842d0b01a_prof);

        
        $__internal_23123a95878f615fff907fcc14b6af47e4505d595bb762963d4b9649285fe85a->leave($__internal_23123a95878f615fff907fcc14b6af47e4505d595bb762963d4b9649285fe85a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e1c22618598954395225a11fa9e326e9262da809555e98bf6602e21f38a17326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1c22618598954395225a11fa9e326e9262da809555e98bf6602e21f38a17326->enter($__internal_e1c22618598954395225a11fa9e326e9262da809555e98bf6602e21f38a17326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_52beca7fd2cf9f9ebac6edabc4dab61b69ddf4d5f5acd52eaa2a19836753c84e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52beca7fd2cf9f9ebac6edabc4dab61b69ddf4d5f5acd52eaa2a19836753c84e->enter($__internal_52beca7fd2cf9f9ebac6edabc4dab61b69ddf4d5f5acd52eaa2a19836753c84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        <div style=\"width: 100%; height: 50px; color: blue; text-align: center;\">
            Anzahl der Lauftage: ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["anzahl"]) || array_key_exists("anzahl", $context) ? $context["anzahl"] : (function () { throw new Twig_Error_Runtime('Variable "anzahl" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
            echo " <br>
            Gesamttage seit dem ersten Lauftag bis heute: ";
            // line 19
            echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new Twig_Error_Runtime('Variable "now" does not exist.', 19, $this->getSourceContext()); })()), "U") - twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new Twig_Error_Runtime('Variable "first" does not exist.', 19, $this->getSourceContext()); })()), "getDay", array(), "method"), "U")) / 86400), "html", null, true);
            echo " <br>
            Gesamte bisher gelaufene Strecke: ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new Twig_Error_Runtime('Variable "first" does not exist.', 20, $this->getSourceContext()); })()), "getDay", array(), "method"), "html", null, true);
            echo "  - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new Twig_Error_Runtime('Variable "now" does not exist.', 20, $this->getSourceContext()); })())), "html", null, true);
            echo "
        </div>

        ";
            // line 23
            $context["gesamtK"] = 0;
            // line 24
            echo "        ";
            $context["gesamtZ"] = 0;
            // line 25
            echo "
        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 26, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 27
                echo "
            <div class=\"trackerLine\">
                <div class=\"trackerDatum\">
                    ";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getDay", array(), "method"), "html", null, true);
                echo "
                </div>

                <div class=\"trackerStrecke\">
                    ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getStrecke", array(), "method"), "html", null, true);
                echo " km
                    ";
                // line 35
                $context["gesamtK"] = ((isset($context["gesamtK"]) || array_key_exists("gesamtK", $context) ? $context["gesamtK"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtK" does not exist.', 35, $this->getSourceContext()); })()) + twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getStrecke", array(), "method"));
                // line 36
                echo "                </div>

                <div class=\"trackerZeit\">
                    ";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getZeit", array(), "method"), "html", null, true);
                echo " s
                    ";
                // line 40
                $context["gesamtZ"] = ((isset($context["gesamtZ"]) || array_key_exists("gesamtZ", $context) ? $context["gesamtZ"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtZ" does not exist.', 40, $this->getSourceContext()); })()) + twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getZeit", array(), "method"));
                // line 41
                echo "                </div>

                <div class=\"trackerSpeed\">
                    ";
                // line 44
                echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getSpeed", array(), "method"), 1, "floor"), "html", null, true);
                echo " m/s
                </div>

                <div class=\"trackerRemove\">
                    ";
                // line 48
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") && ((isset($context["profileName"]) || array_key_exists("profileName", $context) ? $context["profileName"] : (function () { throw new Twig_Error_Runtime('Variable "profileName" does not exist.', 48, $this->getSourceContext()); })()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 48, $this->getSourceContext()); })()), "user", array()), "username", array())))) {
                    // line 49
                    echo "                        <form method=\"post\" action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("remove_newData", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 49, $this->getSourceContext()); })()), "user", array()), "username", array()))), "html", null, true);
                    echo "\">
                            <input type=\"hidden\" value=\"";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getId", array(), "method"), "html", null, true);
                    echo "\" name=\"id_toRemove\">
                            <input type=\"submit\" value=\"löschen\" name=\"removeForm\">
                        </form>
                    ";
                } else {
                    // line 54
                    echo "                        -
                    ";
                }
                // line 56
                echo "                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "


     ";
        }
        // line 63
        echo "


    ";
        // line 66
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") && ((isset($context["profileName"]) || array_key_exists("profileName", $context) ? $context["profileName"] : (function () { throw new Twig_Error_Runtime('Variable "profileName" does not exist.', 66, $this->getSourceContext()); })()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 66, $this->getSourceContext()); })()), "user", array()), "username", array())))) {
            // line 67
            echo "
        <div class=\"page-header\">

        </div>

        <form class=\"form-horizontal\" action=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_newData", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 72, $this->getSourceContext()); })()), "user", array()), "username", array()))), "html", null, true);
            echo "\" method=\"post\">
            <fieldset>

                <!-- Datum-->
                <div class=\"form-group\">
                    <label class=\"col-md-3 control-label\" for=\"datum\">DATUM:</label>
                    <div class=\"col-md-6\">
                        <input id=\"name\" name=\"datum\" type=\"date\" placeholder=\"JJJJ-MM-TT\" class=\"form-control\" value=\"";
            // line 79
            echo twig_escape_filter($this->env, (isset($context["datum"]) || array_key_exists("datum", $context) ? $context["datum"] : (function () { throw new Twig_Error_Runtime('Variable "datum" does not exist.', 79, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
                        <span style=\"color: red;\"></span>
                    </div>
                </div>

                <!-- Strecke-->
                <div class=\"form-group\">
                    <label class=\"col-md-3 control-label\" for=\"strecke\">STRECKE (km):</label>
                    <div class=\"col-md-6\">
                        <input id=\"email\" name=\"strecke\" type=\"text\" placeholder=\"nn / nn.n\" class=\"form-control\" value=\"";
            // line 88
            echo twig_escape_filter($this->env, (isset($context["strecke"]) || array_key_exists("strecke", $context) ? $context["strecke"] : (function () { throw new Twig_Error_Runtime('Variable "strecke" does not exist.', 88, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
                        <span style=\"color: red;\"></span>
                    </div>
                </div>

                <!-- Zeit-->
                <div class=\"form-group\">
                    <label class=\"col-md-3 control-label\" for=\"zeit\">ZEIT:</label>
                    <div class=\"col-md-6\">
                        <input id=\"email\" name=\"zeit\" type=\"text\" placeholder=\"hh:mm:ss\" class=\"form-control\" value=\"";
            // line 97
            echo twig_escape_filter($this->env, (isset($context["zeit"]) || array_key_exists("zeit", $context) ? $context["zeit"] : (function () { throw new Twig_Error_Runtime('Variable "zeit" does not exist.', 97, $this->getSourceContext()); })()), "html", null, true);
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
        // line 114
        echo "

";
        
        $__internal_52beca7fd2cf9f9ebac6edabc4dab61b69ddf4d5f5acd52eaa2a19836753c84e->leave($__internal_52beca7fd2cf9f9ebac6edabc4dab61b69ddf4d5f5acd52eaa2a19836753c84e_prof);

        
        $__internal_e1c22618598954395225a11fa9e326e9262da809555e98bf6602e21f38a17326->leave($__internal_e1c22618598954395225a11fa9e326e9262da809555e98bf6602e21f38a17326_prof);

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
        return array (  242 => 114,  222 => 97,  210 => 88,  198 => 79,  188 => 72,  181 => 67,  179 => 66,  174 => 63,  168 => 59,  160 => 56,  156 => 54,  149 => 50,  144 => 49,  142 => 48,  135 => 44,  130 => 41,  128 => 40,  124 => 39,  119 => 36,  117 => 35,  113 => 34,  106 => 30,  101 => 27,  97 => 26,  94 => 25,  91 => 24,  89 => 23,  81 => 20,  77 => 19,  73 => 18,  69 => 16,  61 => 10,  59 => 9,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

        <div style=\"width: 100%; height: 50px; color: blue; text-align: center;\">
            Anzahl der Lauftage: {{ anzahl }} <br>
            Gesamttage seit dem ersten Lauftag bis heute: {{ ( (now | date('U')) - (first.getDay() | date('U')) )/86400 }} <br>
            Gesamte bisher gelaufene Strecke: {{ first.getDay() }}  - {{ now | date }}
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
