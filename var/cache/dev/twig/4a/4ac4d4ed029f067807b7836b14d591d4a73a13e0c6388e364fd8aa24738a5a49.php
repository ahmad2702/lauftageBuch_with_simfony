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
        $__internal_4ba021049a03c95082b155f67e98695c4c8017aacc89747851d33b6a29077574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba021049a03c95082b155f67e98695c4c8017aacc89747851d33b6a29077574->enter($__internal_4ba021049a03c95082b155f67e98695c4c8017aacc89747851d33b6a29077574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesamt.php.twig"));

        $__internal_b20b6b643821643f62a2f0adde5b9d076f200d611ddab05012a143424b7df4fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20b6b643821643f62a2f0adde5b9d076f200d611ddab05012a143424b7df4fb->enter($__internal_b20b6b643821643f62a2f0adde5b9d076f200d611ddab05012a143424b7df4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesamt.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ba021049a03c95082b155f67e98695c4c8017aacc89747851d33b6a29077574->leave($__internal_4ba021049a03c95082b155f67e98695c4c8017aacc89747851d33b6a29077574_prof);

        
        $__internal_b20b6b643821643f62a2f0adde5b9d076f200d611ddab05012a143424b7df4fb->leave($__internal_b20b6b643821643f62a2f0adde5b9d076f200d611ddab05012a143424b7df4fb_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_3d4fd133120f313047d45fcdaa8cdb4e6ae3a430918a003bbf72544da5852170 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d4fd133120f313047d45fcdaa8cdb4e6ae3a430918a003bbf72544da5852170->enter($__internal_3d4fd133120f313047d45fcdaa8cdb4e6ae3a430918a003bbf72544da5852170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6b88690c9d64a02dfa1ac930ab6c68854c82523d6bed06926458c4d8e157f987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b88690c9d64a02dfa1ac930ab6c68854c82523d6bed06926458c4d8e157f987->enter($__internal_6b88690c9d64a02dfa1ac930ab6c68854c82523d6bed06926458c4d8e157f987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"page-header\">
        <h1 style=\"text-align: center;\">Startseite</h1>
    </div>

    ";
        // line 9
        if ((twig_length_filter($this->env, (isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 9, $this->getSourceContext()); })())) == 0)) {
            // line 10
            echo "
        <div class=\"noLinesFound\">
            Datenbank ist noch leer. <br>
            Bitte oben auf ADD klicken!
        </div>

    ";
        } else {
            // line 17
            echo "



        <div class=\"trackerLine\">

            <div class=\"trackerDatum1\">
                <a href=\"/profile/username\">username</a>
            </div>

            <div class=\"trackerStrecke\">
                Anzahl der Lauftage
            </div>

            <div class=\"trackerZeit\">
                Gesamte bisher gelaufene Strecke
            </div>

        </div>

    ";
        }
        // line 38
        echo "

";
        
        $__internal_6b88690c9d64a02dfa1ac930ab6c68854c82523d6bed06926458c4d8e157f987->leave($__internal_6b88690c9d64a02dfa1ac930ab6c68854c82523d6bed06926458c4d8e157f987_prof);

        
        $__internal_3d4fd133120f313047d45fcdaa8cdb4e6ae3a430918a003bbf72544da5852170->leave($__internal_3d4fd133120f313047d45fcdaa8cdb4e6ae3a430918a003bbf72544da5852170_prof);

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
        return array (  90 => 38,  67 => 17,  58 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.php.twig\" %}

{% block content %}

    <div class=\"page-header\">
        <h1 style=\"text-align: center;\">Startseite</h1>
    </div>

    {% if (lines|length) == 0 %}

        <div class=\"noLinesFound\">
            Datenbank ist noch leer. <br>
            Bitte oben auf ADD klicken!
        </div>

    {% else %}




        <div class=\"trackerLine\">

            <div class=\"trackerDatum1\">
                <a href=\"/profile/username\">username</a>
            </div>

            <div class=\"trackerStrecke\">
                Anzahl der Lauftage
            </div>

            <div class=\"trackerZeit\">
                Gesamte bisher gelaufene Strecke
            </div>

        </div>

    {% endif %}


{% endblock %}", "gesamt.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/templates/gesamt.php.twig");
    }
}
