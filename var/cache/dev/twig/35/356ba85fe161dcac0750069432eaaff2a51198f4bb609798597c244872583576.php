<?php

/* authentications/login_explicit.php.twig */
class __TwigTemplate_92b68ee999b3fac7e258e4685536a1ce166fa5b698efb5e75ba350576cabea45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.php.twig", "authentications/login_explicit.php.twig", 1);
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
        $__internal_bc86b138a2435c9dabc6dd207d3b0da87f897084cedf714ad7db9b381de4d2dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc86b138a2435c9dabc6dd207d3b0da87f897084cedf714ad7db9b381de4d2dc->enter($__internal_bc86b138a2435c9dabc6dd207d3b0da87f897084cedf714ad7db9b381de4d2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentications/login_explicit.php.twig"));

        $__internal_c774d8ba7c18c2f01df6c06c2c29d8f048578f5d5ad26172dc81e2b8ccc40fdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c774d8ba7c18c2f01df6c06c2c29d8f048578f5d5ad26172dc81e2b8ccc40fdf->enter($__internal_c774d8ba7c18c2f01df6c06c2c29d8f048578f5d5ad26172dc81e2b8ccc40fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentications/login_explicit.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc86b138a2435c9dabc6dd207d3b0da87f897084cedf714ad7db9b381de4d2dc->leave($__internal_bc86b138a2435c9dabc6dd207d3b0da87f897084cedf714ad7db9b381de4d2dc_prof);

        
        $__internal_c774d8ba7c18c2f01df6c06c2c29d8f048578f5d5ad26172dc81e2b8ccc40fdf->leave($__internal_c774d8ba7c18c2f01df6c06c2c29d8f048578f5d5ad26172dc81e2b8ccc40fdf_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_93a7f36b9e5e38f63cb60780247ee217146fb4c889583b100633dcc3214a4310 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93a7f36b9e5e38f63cb60780247ee217146fb4c889583b100633dcc3214a4310->enter($__internal_93a7f36b9e5e38f63cb60780247ee217146fb4c889583b100633dcc3214a4310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d9d8646b0e560f72f7cf30feed4d9fc10d04ecf1b97c99248a431586ed673586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d8646b0e560f72f7cf30feed4d9fc10d04ecf1b97c99248a431586ed673586->enter($__internal_d9d8646b0e560f72f7cf30feed4d9fc10d04ecf1b97c99248a431586ed673586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

    ";
        // line 6
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })())) {
            // line 7
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 7, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 7, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "

    <form action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
        echo " \" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"username\"/>

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        ";
        // line 23
        echo "
        <button type=\"submit\">login</button>
    </form>















";
        
        $__internal_d9d8646b0e560f72f7cf30feed4d9fc10d04ecf1b97c99248a431586ed673586->leave($__internal_d9d8646b0e560f72f7cf30feed4d9fc10d04ecf1b97c99248a431586ed673586_prof);

        
        $__internal_93a7f36b9e5e38f63cb60780247ee217146fb4c889583b100633dcc3214a4310->leave($__internal_93a7f36b9e5e38f63cb60780247ee217146fb4c889583b100633dcc3214a4310_prof);

    }

    public function getTemplateName()
    {
        return "authentications/login_explicit.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 23,  65 => 11,  61 => 9,  55 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.php.twig\" %}

{% block content %}


    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}


    <form action=\"{{ path('security_login') }} \" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"username\"/>

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        {#
            If you want to control the URL the user
            is redirected to on success (more details below)
            <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
        #}

        <button type=\"submit\">login</button>
    </form>















{% endblock %}", "authentications/login_explicit.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/templates/authentications/login_explicit.php.twig");
    }
}
