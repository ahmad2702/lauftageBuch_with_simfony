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
        $__internal_9211c36e04c3efb2c82c296de820a105dec9b2fc9915503fd009948739df2fe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9211c36e04c3efb2c82c296de820a105dec9b2fc9915503fd009948739df2fe3->enter($__internal_9211c36e04c3efb2c82c296de820a105dec9b2fc9915503fd009948739df2fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesamt.php.twig"));

        $__internal_0c69f06b5511cae55b89191a0e0e87d831e65c33f9efbd5e620804bc37ee86e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c69f06b5511cae55b89191a0e0e87d831e65c33f9efbd5e620804bc37ee86e9->enter($__internal_0c69f06b5511cae55b89191a0e0e87d831e65c33f9efbd5e620804bc37ee86e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesamt.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9211c36e04c3efb2c82c296de820a105dec9b2fc9915503fd009948739df2fe3->leave($__internal_9211c36e04c3efb2c82c296de820a105dec9b2fc9915503fd009948739df2fe3_prof);

        
        $__internal_0c69f06b5511cae55b89191a0e0e87d831e65c33f9efbd5e620804bc37ee86e9->leave($__internal_0c69f06b5511cae55b89191a0e0e87d831e65c33f9efbd5e620804bc37ee86e9_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_62de7704a23dedca5f60dd7eb0285e1a7f3da3f65827b06d635a7a3b1e176037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62de7704a23dedca5f60dd7eb0285e1a7f3da3f65827b06d635a7a3b1e176037->enter($__internal_62de7704a23dedca5f60dd7eb0285e1a7f3da3f65827b06d635a7a3b1e176037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_322b32f5baf1d6dae6941258ea34c8be3a4f3e26887515dd05bf4221025fae91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_322b32f5baf1d6dae6941258ea34c8be3a4f3e26887515dd05bf4221025fae91->enter($__internal_322b32f5baf1d6dae6941258ea34c8be3a4f3e26887515dd05bf4221025fae91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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

        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 19, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 20
                echo "
            <div class=\"trackerLine\">

                <div class=\"trackerDatum1\">
                    <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getUsername", array(), "method"))), "html", null, true);
                echo "\">
                        ";
                // line 25
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
            // line 40
            echo "


    ";
        }
        // line 44
        echo "

";
        
        $__internal_322b32f5baf1d6dae6941258ea34c8be3a4f3e26887515dd05bf4221025fae91->leave($__internal_322b32f5baf1d6dae6941258ea34c8be3a4f3e26887515dd05bf4221025fae91_prof);

        
        $__internal_62de7704a23dedca5f60dd7eb0285e1a7f3da3f65827b06d635a7a3b1e176037->leave($__internal_62de7704a23dedca5f60dd7eb0285e1a7f3da3f65827b06d635a7a3b1e176037_prof);

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
        return array (  112 => 44,  106 => 40,  85 => 25,  81 => 24,  75 => 20,  71 => 19,  67 => 17,  58 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
