<?php

/* gesamt.php.twig */
class __TwigTemplate_278b1d1bfd3e623f4e1583fa46c39d8ff6c79112ac866ecb626f3b53d254b7e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.php.twig", "gesamt.php.twig", 1);
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
        $__internal_176e3f0ee26425a7c03ba87684a1d5947c71f416205069dbe15709b97f8dd3ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_176e3f0ee26425a7c03ba87684a1d5947c71f416205069dbe15709b97f8dd3ba->enter($__internal_176e3f0ee26425a7c03ba87684a1d5947c71f416205069dbe15709b97f8dd3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesamt.php.twig"));

        $__internal_51f280152891c80f93410a506ae19db8594bc5f2852707ad1bd04781433ceaaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f280152891c80f93410a506ae19db8594bc5f2852707ad1bd04781433ceaaf->enter($__internal_51f280152891c80f93410a506ae19db8594bc5f2852707ad1bd04781433ceaaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesamt.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_176e3f0ee26425a7c03ba87684a1d5947c71f416205069dbe15709b97f8dd3ba->leave($__internal_176e3f0ee26425a7c03ba87684a1d5947c71f416205069dbe15709b97f8dd3ba_prof);

        
        $__internal_51f280152891c80f93410a506ae19db8594bc5f2852707ad1bd04781433ceaaf->leave($__internal_51f280152891c80f93410a506ae19db8594bc5f2852707ad1bd04781433ceaaf_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_59554dd2221fcf96d8d8cbcf91a5c6284832c49c4c0456a6814c62af9996c039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59554dd2221fcf96d8d8cbcf91a5c6284832c49c4c0456a6814c62af9996c039->enter($__internal_59554dd2221fcf96d8d8cbcf91a5c6284832c49c4c0456a6814c62af9996c039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8fca8d398d7416852b0903d16e6320e02c2017f5d44445e181bc789a81a71571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fca8d398d7416852b0903d16e6320e02c2017f5d44445e181bc789a81a71571->enter($__internal_8fca8d398d7416852b0903d16e6320e02c2017f5d44445e181bc789a81a71571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"page-header\">
        <h1 style=\"text-align: center;\">Laeuferuebersicht</h1>
    </div>

    ";
        // line 9
        if ((twig_length_filter($this->env, (isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 9, $this->getSourceContext()); })())) == 0)) {
            // line 10
            echo "
        <div class=\"noLinesFound\">
            Datenbank ist noch leer. <br>
        </div>

    ";
        } else {
            // line 16
            echo "


        <div class=\"trackerLine\">

            <div class=\"trackerDatum1\">
                <br>
                    <span style=\"text-transform: uppercase; font-weight: bold;\">username</span>
            </div>

            <div class=\"trackerStrecke\">
                <span style=\"text-transform: uppercase; font-weight: bold;\">Gesamttage bis heute</span>
            </div>

            <div class=\"trackerZeit\">
                <span style=\"text-transform: uppercase; font-weight: bold;\">Gesamte Strecke</span>
            </div>

        </div>

        ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 36, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 37
                echo "
            <div class=\"trackerLine\">

                <div class=\"trackerDatum1\">
                    <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array()))), "html", null, true);
                echo "\">
                        <br>
                        ";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array()), "html", null, true);
                echo "
                    </a>
                </div>

                <div class=\"trackerStrecke\">

                    ";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "totalDates", array()), "html", null, true);
                echo "

                    tage
                </div>

                <div class=\"trackerZeit\">

                    ";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "distance", array()), "html", null, true);
                echo "

                    km
                </div>

            </div>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "


    ";
        }
        // line 68
        echo "

";
        
        $__internal_8fca8d398d7416852b0903d16e6320e02c2017f5d44445e181bc789a81a71571->leave($__internal_8fca8d398d7416852b0903d16e6320e02c2017f5d44445e181bc789a81a71571_prof);

        
        $__internal_59554dd2221fcf96d8d8cbcf91a5c6284832c49c4c0456a6814c62af9996c039->leave($__internal_59554dd2221fcf96d8d8cbcf91a5c6284832c49c4c0456a6814c62af9996c039_prof);

    }

    public function getTemplateName()
    {
        return "gesamt.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 68,  136 => 64,  122 => 56,  112 => 49,  103 => 43,  98 => 41,  92 => 37,  88 => 36,  66 => 16,  58 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.php.twig\" %}

{% block content %}

    <div class=\"page-header\">
        <h1 style=\"text-align: center;\">Laeuferuebersicht</h1>
    </div>

    {% if (lines|length) == 0 %}

        <div class=\"noLinesFound\">
            Datenbank ist noch leer. <br>
        </div>

    {% else %}



        <div class=\"trackerLine\">

            <div class=\"trackerDatum1\">
                <br>
                    <span style=\"text-transform: uppercase; font-weight: bold;\">username</span>
            </div>

            <div class=\"trackerStrecke\">
                <span style=\"text-transform: uppercase; font-weight: bold;\">Gesamttage bis heute</span>
            </div>

            <div class=\"trackerZeit\">
                <span style=\"text-transform: uppercase; font-weight: bold;\">Gesamte Strecke</span>
            </div>

        </div>

        {% for user in lines %}

            <div class=\"trackerLine\">

                <div class=\"trackerDatum1\">
                    <a href=\"{{ path('profile', { name : user.user }) }}\">
                        <br>
                        {{ user.user }}
                    </a>
                </div>

                <div class=\"trackerStrecke\">

                    {{ user.totalDates }}

                    tage
                </div>

                <div class=\"trackerZeit\">

                    {{ user.distance }}

                    km
                </div>

            </div>

        {% endfor %}



    {% endif %}


{% endblock %}", "gesamt.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/templates/gesamt.php.twig");
    }
}
