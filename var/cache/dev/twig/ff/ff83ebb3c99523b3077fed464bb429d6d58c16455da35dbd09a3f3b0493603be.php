<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_6417cd2c47bc1132ee35f5e77f07d0fc3353e4ac1415d3de2bedc5e60d4aa21a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57100feb0ef13237832986edb70974aab495484ded7a2ff47c887e4c34bb8630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57100feb0ef13237832986edb70974aab495484ded7a2ff47c887e4c34bb8630->enter($__internal_57100feb0ef13237832986edb70974aab495484ded7a2ff47c887e4c34bb8630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_573685c8532f5fd67fc312143addde20db55b20dff3171dab4c72ae05e41911e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_573685c8532f5fd67fc312143addde20db55b20dff3171dab4c72ae05e41911e->enter($__internal_573685c8532f5fd67fc312143addde20db55b20dff3171dab4c72ae05e41911e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_57100feb0ef13237832986edb70974aab495484ded7a2ff47c887e4c34bb8630->leave($__internal_57100feb0ef13237832986edb70974aab495484ded7a2ff47c887e4c34bb8630_prof);

        
        $__internal_573685c8532f5fd67fc312143addde20db55b20dff3171dab4c72ae05e41911e->leave($__internal_573685c8532f5fd67fc312143addde20db55b20dff3171dab4c72ae05e41911e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bundle/Resources/views/Exception/error.json.twig");
    }
}
