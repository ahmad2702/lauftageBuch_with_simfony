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
        $__internal_838247a2ccb016764ae037d191fa8ee8f29730afec284d87dd32d419a977fbd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_838247a2ccb016764ae037d191fa8ee8f29730afec284d87dd32d419a977fbd4->enter($__internal_838247a2ccb016764ae037d191fa8ee8f29730afec284d87dd32d419a977fbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesamt.php.twig"));

        $__internal_e1940491634ff37c6492196633826fd5c6ef5f57fb7be79162e325f2ddae883e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1940491634ff37c6492196633826fd5c6ef5f57fb7be79162e325f2ddae883e->enter($__internal_e1940491634ff37c6492196633826fd5c6ef5f57fb7be79162e325f2ddae883e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesamt.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_838247a2ccb016764ae037d191fa8ee8f29730afec284d87dd32d419a977fbd4->leave($__internal_838247a2ccb016764ae037d191fa8ee8f29730afec284d87dd32d419a977fbd4_prof);

        
        $__internal_e1940491634ff37c6492196633826fd5c6ef5f57fb7be79162e325f2ddae883e->leave($__internal_e1940491634ff37c6492196633826fd5c6ef5f57fb7be79162e325f2ddae883e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_3e5f029cd7f60b0da15354e215aea361c020a3cc4d393a218f92db10b1af68bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e5f029cd7f60b0da15354e215aea361c020a3cc4d393a218f92db10b1af68bf->enter($__internal_3e5f029cd7f60b0da15354e215aea361c020a3cc4d393a218f92db10b1af68bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ea1e124c391b1f7d8884d5170a5d9f8a30c7c2c89c704984e431db6c24f0d428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea1e124c391b1f7d8884d5170a5d9f8a30c7c2c89c704984e431db6c24f0d428->enter($__internal_ea1e124c391b1f7d8884d5170a5d9f8a30c7c2c89c704984e431db6c24f0d428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            $context["gesamtStrecke_alex"] = 0;
            // line 19
            echo "        ";
            $context["gesamtStrecke_jan"] = 0;
            // line 20
            echo "        ";
            $context["gesamtStrecke_tim"] = 0;
            // line 21
            echo "
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alex"]) || array_key_exists("alex", $context) ? $context["alex"] : (function () { throw new Twig_Error_Runtime('Variable "alex" does not exist.', 22, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 23
                echo "            ";
                $context["gesamtStrecke_alex"] = ((isset($context["gesamtStrecke_alex"]) || array_key_exists("gesamtStrecke_alex", $context) ? $context["gesamtStrecke_alex"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtStrecke_alex" does not exist.', 23, $this->getSourceContext()); })()) + twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getStrecke", array(), "method"));
                // line 24
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "
        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jan"]) || array_key_exists("jan", $context) ? $context["jan"] : (function () { throw new Twig_Error_Runtime('Variable "jan" does not exist.', 26, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 27
                echo "            ";
                $context["gesamtStrecke_jan"] = ((isset($context["gesamtStrecke_jan"]) || array_key_exists("gesamtStrecke_jan", $context) ? $context["gesamtStrecke_jan"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtStrecke_jan" does not exist.', 27, $this->getSourceContext()); })()) + twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getStrecke", array(), "method"));
                // line 28
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "
        ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tim"]) || array_key_exists("tim", $context) ? $context["tim"] : (function () { throw new Twig_Error_Runtime('Variable "tim" does not exist.', 30, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 31
                echo "            ";
                $context["gesamtStrecke_tim"] = ((isset($context["gesamtStrecke_tim"]) || array_key_exists("gesamtStrecke_tim", $context) ? $context["gesamtStrecke_tim"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtStrecke_tim" does not exist.', 31, $this->getSourceContext()); })()) + twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getStrecke", array(), "method"));
                // line 32
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "



        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 37, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 38
                echo "
            <div class=\"trackerLine\">

                <div class=\"trackerDatum1\">
                    <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getUsername", array(), "method"))), "html", null, true);
                echo "\">
                        ";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getUsername", array(), "method"), "html", null, true);
                echo "
                    </a>
                </div>

                <div class=\"trackerStrecke\">

                    ";
                // line 49
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getUsername", array(), "method") == "alex")) {
                    // line 50
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["alex"]) || array_key_exists("alex", $context) ? $context["alex"] : (function () { throw new Twig_Error_Runtime('Variable "alex" does not exist.', 50, $this->getSourceContext()); })())), "html", null, true);
                    echo "
                    ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 51
$context["user"], "getUsername", array(), "method") == "jan")) {
                    // line 52
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["jan"]) || array_key_exists("jan", $context) ? $context["jan"] : (function () { throw new Twig_Error_Runtime('Variable "jan" does not exist.', 52, $this->getSourceContext()); })())), "html", null, true);
                    echo "
                    ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 53
$context["user"], "getUsername", array(), "method") == "tim")) {
                    // line 54
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["tim"]) || array_key_exists("tim", $context) ? $context["tim"] : (function () { throw new Twig_Error_Runtime('Variable "tim" does not exist.', 54, $this->getSourceContext()); })())), "html", null, true);
                    echo "
                    ";
                }
                // line 56
                echo "                    tage
                </div>

                <div class=\"trackerZeit\">

                    ";
                // line 61
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getUsername", array(), "method") == "alex")) {
                    // line 62
                    echo "                        ";
                    echo twig_escape_filter($this->env, (isset($context["gesamtStrecke_alex"]) || array_key_exists("gesamtStrecke_alex", $context) ? $context["gesamtStrecke_alex"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtStrecke_alex" does not exist.', 62, $this->getSourceContext()); })()), "html", null, true);
                    echo "
                    ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 63
$context["user"], "getUsername", array(), "method") == "jan")) {
                    // line 64
                    echo "                        ";
                    echo twig_escape_filter($this->env, (isset($context["gesamtStrecke_jan"]) || array_key_exists("gesamtStrecke_jan", $context) ? $context["gesamtStrecke_jan"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtStrecke_jan" does not exist.', 64, $this->getSourceContext()); })()), "html", null, true);
                    echo "
                    ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 65
$context["user"], "getUsername", array(), "method") == "tim")) {
                    // line 66
                    echo "                        ";
                    echo twig_escape_filter($this->env, (isset($context["gesamtStrecke_tim"]) || array_key_exists("gesamtStrecke_tim", $context) ? $context["gesamtStrecke_tim"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtStrecke_tim" does not exist.', 66, $this->getSourceContext()); })()), "html", null, true);
                    echo "
                    ";
                }
                // line 68
                echo "                    km
                </div>

            </div>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "


    ";
        }
        // line 78
        echo "

";
        
        $__internal_ea1e124c391b1f7d8884d5170a5d9f8a30c7c2c89c704984e431db6c24f0d428->leave($__internal_ea1e124c391b1f7d8884d5170a5d9f8a30c7c2c89c704984e431db6c24f0d428_prof);

        
        $__internal_3e5f029cd7f60b0da15354e215aea361c020a3cc4d393a218f92db10b1af68bf->leave($__internal_3e5f029cd7f60b0da15354e215aea361c020a3cc4d393a218f92db10b1af68bf_prof);

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
        return array (  223 => 78,  217 => 74,  206 => 68,  200 => 66,  198 => 65,  193 => 64,  191 => 63,  186 => 62,  184 => 61,  177 => 56,  171 => 54,  169 => 53,  164 => 52,  162 => 51,  157 => 50,  155 => 49,  146 => 43,  142 => 42,  136 => 38,  132 => 37,  126 => 33,  120 => 32,  117 => 31,  113 => 30,  110 => 29,  104 => 28,  101 => 27,  97 => 26,  94 => 25,  88 => 24,  85 => 23,  81 => 22,  78 => 21,  75 => 20,  72 => 19,  70 => 18,  66 => 16,  58 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
                    tage
                </div>

                <div class=\"trackerZeit\">

                    {% if user.getUsername()==\"alex\" %}
                        {{ gesamtStrecke_alex }}
                    {% elseif user.getUsername()==\"jan\" %}
                        {{ gesamtStrecke_jan }}
                    {% elseif user.getUsername()==\"tim\" %}
                        {{ gesamtStrecke_tim }}
                    {% endif %}
                    km
                </div>

            </div>

        {% endfor %}



    {% endif %}


{% endblock %}", "gesamt.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/templates/gesamt.php.twig");
    }
}
