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
        $__internal_7e1caefc9afb61a27f2593c95a81e5866124af3bc1cf65bd90958c2db211c638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e1caefc9afb61a27f2593c95a81e5866124af3bc1cf65bd90958c2db211c638->enter($__internal_7e1caefc9afb61a27f2593c95a81e5866124af3bc1cf65bd90958c2db211c638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesamt.php.twig"));

        $__internal_4b656ed67e3a97f3a0ed815a49b319b6e119da5539996cb4fa7014df84948605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b656ed67e3a97f3a0ed815a49b319b6e119da5539996cb4fa7014df84948605->enter($__internal_4b656ed67e3a97f3a0ed815a49b319b6e119da5539996cb4fa7014df84948605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesamt.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e1caefc9afb61a27f2593c95a81e5866124af3bc1cf65bd90958c2db211c638->leave($__internal_7e1caefc9afb61a27f2593c95a81e5866124af3bc1cf65bd90958c2db211c638_prof);

        
        $__internal_4b656ed67e3a97f3a0ed815a49b319b6e119da5539996cb4fa7014df84948605->leave($__internal_4b656ed67e3a97f3a0ed815a49b319b6e119da5539996cb4fa7014df84948605_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1b419e4c2211101c538c195672da40f1bfce44d921cbd9484c3e28a4ed8c1158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b419e4c2211101c538c195672da40f1bfce44d921cbd9484c3e28a4ed8c1158->enter($__internal_1b419e4c2211101c538c195672da40f1bfce44d921cbd9484c3e28a4ed8c1158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_42098c3b8dec55e443aafc47a04c9b7ac1ebbf3565fda9ceee28d3a122e2053e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42098c3b8dec55e443aafc47a04c9b7ac1ebbf3565fda9ceee28d3a122e2053e->enter($__internal_42098c3b8dec55e443aafc47a04c9b7ac1ebbf3565fda9ceee28d3a122e2053e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            // line 17
            $context["gesamtStrecke_alex"] = 0;
            // line 18
            echo "        ";
            $context["gesamtStrecke_jan"] = 0;
            // line 19
            echo "        ";
            $context["gesamtStrecke_tim"] = 0;
            // line 20
            echo "
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alex"]) || array_key_exists("alex", $context) ? $context["alex"] : (function () { throw new Twig_Error_Runtime('Variable "alex" does not exist.', 21, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 22
                echo "            ";
                $context["gesamtStrecke_alex"] = ((isset($context["gesamtStrecke_alex"]) || array_key_exists("gesamtStrecke_alex", $context) ? $context["gesamtStrecke_alex"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtStrecke_alex" does not exist.', 22, $this->getSourceContext()); })()) + twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getStrecke", array(), "method"));
                // line 23
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jan"]) || array_key_exists("jan", $context) ? $context["jan"] : (function () { throw new Twig_Error_Runtime('Variable "jan" does not exist.', 25, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 26
                echo "            ";
                $context["gesamtStrecke_jan"] = ((isset($context["gesamtStrecke_jan"]) || array_key_exists("gesamtStrecke_jan", $context) ? $context["gesamtStrecke_jan"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtStrecke_jan" does not exist.', 26, $this->getSourceContext()); })()) + twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getStrecke", array(), "method"));
                // line 27
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tim"]) || array_key_exists("tim", $context) ? $context["tim"] : (function () { throw new Twig_Error_Runtime('Variable "tim" does not exist.', 29, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 30
                echo "            ";
                $context["gesamtStrecke_tim"] = ((isset($context["gesamtStrecke_tim"]) || array_key_exists("gesamtStrecke_tim", $context) ? $context["gesamtStrecke_tim"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtStrecke_tim" does not exist.', 30, $this->getSourceContext()); })()) + twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getStrecke", array(), "method"));
                // line 31
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "



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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getUsername", array(), "method"))), "html", null, true);
                echo "\">
                        ";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getUsername", array(), "method"), "html", null, true);
                echo "
                    </a>
                </div>

                <div class=\"trackerStrecke\">

                    ";
                // line 48
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getUsername", array(), "method") == "alex")) {
                    // line 49
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["alex"]) || array_key_exists("alex", $context) ? $context["alex"] : (function () { throw new Twig_Error_Runtime('Variable "alex" does not exist.', 49, $this->getSourceContext()); })())), "html", null, true);
                    echo "
                    ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 50
$context["user"], "getUsername", array(), "method") == "jan")) {
                    // line 51
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["jan"]) || array_key_exists("jan", $context) ? $context["jan"] : (function () { throw new Twig_Error_Runtime('Variable "jan" does not exist.', 51, $this->getSourceContext()); })())), "html", null, true);
                    echo "
                    ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 52
$context["user"], "getUsername", array(), "method") == "tim")) {
                    // line 53
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["tim"]) || array_key_exists("tim", $context) ? $context["tim"] : (function () { throw new Twig_Error_Runtime('Variable "tim" does not exist.', 53, $this->getSourceContext()); })())), "html", null, true);
                    echo "
                    ";
                }
                // line 55
                echo "
                </div>

                <div class=\"trackerZeit\">

                    ";
                // line 60
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getUsername", array(), "method") == "alex")) {
                    // line 61
                    echo "                        ";
                    echo twig_escape_filter($this->env, (isset($context["gesamtStrecke_alex"]) || array_key_exists("gesamtStrecke_alex", $context) ? $context["gesamtStrecke_alex"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtStrecke_alex" does not exist.', 61, $this->getSourceContext()); })()), "html", null, true);
                    echo "
                    ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 62
$context["user"], "getUsername", array(), "method") == "jan")) {
                    // line 63
                    echo "                        ";
                    echo twig_escape_filter($this->env, (isset($context["gesamtStrecke_jan"]) || array_key_exists("gesamtStrecke_jan", $context) ? $context["gesamtStrecke_jan"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtStrecke_jan" does not exist.', 63, $this->getSourceContext()); })()), "html", null, true);
                    echo "
                    ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 64
$context["user"], "getUsername", array(), "method") == "tim")) {
                    // line 65
                    echo "                        ";
                    echo twig_escape_filter($this->env, (isset($context["gesamtStrecke_tim"]) || array_key_exists("gesamtStrecke_tim", $context) ? $context["gesamtStrecke_tim"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtStrecke_tim" does not exist.', 65, $this->getSourceContext()); })()), "html", null, true);
                    echo "
                    ";
                }
                // line 67
                echo "
                </div>

            </div>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "


    ";
        }
        // line 77
        echo "

";
        
        $__internal_42098c3b8dec55e443aafc47a04c9b7ac1ebbf3565fda9ceee28d3a122e2053e->leave($__internal_42098c3b8dec55e443aafc47a04c9b7ac1ebbf3565fda9ceee28d3a122e2053e_prof);

        
        $__internal_1b419e4c2211101c538c195672da40f1bfce44d921cbd9484c3e28a4ed8c1158->leave($__internal_1b419e4c2211101c538c195672da40f1bfce44d921cbd9484c3e28a4ed8c1158_prof);

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
        return array (  222 => 77,  216 => 73,  205 => 67,  199 => 65,  197 => 64,  192 => 63,  190 => 62,  185 => 61,  183 => 60,  176 => 55,  170 => 53,  168 => 52,  163 => 51,  161 => 50,  156 => 49,  154 => 48,  145 => 42,  141 => 41,  135 => 37,  131 => 36,  125 => 32,  119 => 31,  116 => 30,  112 => 29,  109 => 28,  103 => 27,  100 => 26,  96 => 25,  93 => 24,  87 => 23,  84 => 22,  80 => 21,  77 => 20,  74 => 19,  71 => 18,  69 => 17,  66 => 16,  58 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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

        {% set gesamtStrecke_alex=0 %}
        {% set gesamtStrecke_jan=0 %}
        {% set gesamtStrecke_tim=0 %}

        {% for user in alex %}
            {% set gesamtStrecke_alex=gesamtStrecke_alex+user.getStrecke() %}
        {% endfor %}

        {% for user in jan %}
            {% set gesamtStrecke_jan=gesamtStrecke_jan+user.getStrecke() %}
        {% endfor %}

        {% for user in tim %}
            {% set gesamtStrecke_tim=gesamtStrecke_tim+user.getStrecke() %}
        {% endfor %}




        {% for user in lines %}

            <div class=\"trackerLine\">

                <div class=\"trackerDatum1\">
                    <a href=\"{{ path('profile', { name : user.getUsername() }) }}\">
                        {{ user.getUsername() }}
                    </a>
                </div>

                <div class=\"trackerStrecke\">

                    {% if user.getUsername()==\"alex\" %}
                        {{ alex|length }}
                    {% elseif user.getUsername()==\"jan\" %}
                        {{ jan|length }}
                    {% elseif user.getUsername()==\"tim\" %}
                        {{ tim|length }}
                    {% endif %}

                </div>

                <div class=\"trackerZeit\">

                    {% if user.getUsername()==\"alex\" %}
                        {{ gesamtStrecke_alex }}
                    {% elseif user.getUsername()==\"jan\" %}
                        {{ gesamtStrecke_jan }}
                    {% elseif user.getUsername()==\"tim\" %}
                        {{ gesamtStrecke_tim }}
                    {% endif %}

                </div>

            </div>

        {% endfor %}



    {% endif %}


{% endblock %}", "gesamt.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/templates/gesamt.php.twig");
    }
}
