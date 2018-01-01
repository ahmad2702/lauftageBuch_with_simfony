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
        $__internal_82650ee640149b65448dec4b80e55a2f7580acbbd9f44cdaee390a52db7a9fb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82650ee640149b65448dec4b80e55a2f7580acbbd9f44cdaee390a52db7a9fb6->enter($__internal_82650ee640149b65448dec4b80e55a2f7580acbbd9f44cdaee390a52db7a9fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesamt.php.twig"));

        $__internal_7e2a58807194de08f66fa84bfc4a34cce5e384f62664b0d2d68462bde4112b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e2a58807194de08f66fa84bfc4a34cce5e384f62664b0d2d68462bde4112b12->enter($__internal_7e2a58807194de08f66fa84bfc4a34cce5e384f62664b0d2d68462bde4112b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesamt.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82650ee640149b65448dec4b80e55a2f7580acbbd9f44cdaee390a52db7a9fb6->leave($__internal_82650ee640149b65448dec4b80e55a2f7580acbbd9f44cdaee390a52db7a9fb6_prof);

        
        $__internal_7e2a58807194de08f66fa84bfc4a34cce5e384f62664b0d2d68462bde4112b12->leave($__internal_7e2a58807194de08f66fa84bfc4a34cce5e384f62664b0d2d68462bde4112b12_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6a553de9413ae01b42d9349bdb405bad88a06c2dfd43d427e52544c68b6a2be4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a553de9413ae01b42d9349bdb405bad88a06c2dfd43d427e52544c68b6a2be4->enter($__internal_6a553de9413ae01b42d9349bdb405bad88a06c2dfd43d427e52544c68b6a2be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6cac439e6fcc0a6201735223fc754150757390890376689d7d0a1fc4293c7ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cac439e6fcc0a6201735223fc754150757390890376689d7d0a1fc4293c7ce2->enter($__internal_6cac439e6fcc0a6201735223fc754150757390890376689d7d0a1fc4293c7ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        </div>

    ";
        } else {
            // line 16
            echo "

        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 18, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 19
                echo "
            <div class=\"trackerLine\">

                <div class=\"trackerDatum1\">
                    <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getUsername", array(), "method"))), "html", null, true);
                echo "\">
                        ";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getUsername", array(), "method"), "html", null, true);
                echo "
                    </a>
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
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "


    ";
        }
        // line 43
        echo "

";
        
        $__internal_6cac439e6fcc0a6201735223fc754150757390890376689d7d0a1fc4293c7ce2->leave($__internal_6cac439e6fcc0a6201735223fc754150757390890376689d7d0a1fc4293c7ce2_prof);

        
        $__internal_6a553de9413ae01b42d9349bdb405bad88a06c2dfd43d427e52544c68b6a2be4->leave($__internal_6a553de9413ae01b42d9349bdb405bad88a06c2dfd43d427e52544c68b6a2be4_prof);

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
        return array (  111 => 43,  105 => 39,  84 => 24,  80 => 23,  74 => 19,  70 => 18,  66 => 16,  58 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
        </div>

    {% else %}


        {% for user in lines %}

            <div class=\"trackerLine\">

                <div class=\"trackerDatum1\">
                    <a href=\"{{ path('profile', { name : user.getUsername() }) }}\">
                        {{ user.getUsername() }}
                    </a>
                </div>

                <div class=\"trackerStrecke\">
                    Anzahl der Lauftage
                </div>

                <div class=\"trackerZeit\">
                    Gesamte bisher gelaufene Strecke
                </div>

            </div>

        {% endfor %}



    {% endif %}


{% endblock %}", "gesamt.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/templates/gesamt.php.twig");
    }
}
