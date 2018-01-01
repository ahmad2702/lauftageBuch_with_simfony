<?php

/* form_table_layout.html.twig */
class __TwigTemplate_f47906019dfc768b9c2fdf2a448d6476652fdd380083598073fb9566b3720924 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c197b2c1e986458dcf7b2f86f22257de6fc9a6aaba7f35ebb78bd09a47406bb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c197b2c1e986458dcf7b2f86f22257de6fc9a6aaba7f35ebb78bd09a47406bb0->enter($__internal_c197b2c1e986458dcf7b2f86f22257de6fc9a6aaba7f35ebb78bd09a47406bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_06415e992b97d83680de0245e47accd7a90b45f33f3325bb25412e108c0f0228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06415e992b97d83680de0245e47accd7a90b45f33f3325bb25412e108c0f0228->enter($__internal_06415e992b97d83680de0245e47accd7a90b45f33f3325bb25412e108c0f0228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_c197b2c1e986458dcf7b2f86f22257de6fc9a6aaba7f35ebb78bd09a47406bb0->leave($__internal_c197b2c1e986458dcf7b2f86f22257de6fc9a6aaba7f35ebb78bd09a47406bb0_prof);

        
        $__internal_06415e992b97d83680de0245e47accd7a90b45f33f3325bb25412e108c0f0228->leave($__internal_06415e992b97d83680de0245e47accd7a90b45f33f3325bb25412e108c0f0228_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_fcae85a67c9ae9a4f164f0ec8af3bff3c77385f477e1cc44ee8e4edd22eaba3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcae85a67c9ae9a4f164f0ec8af3bff3c77385f477e1cc44ee8e4edd22eaba3c->enter($__internal_fcae85a67c9ae9a4f164f0ec8af3bff3c77385f477e1cc44ee8e4edd22eaba3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c3c8f87c476e71dfff120dbe122d382f9cfaa87ea15a6ec9c47b85822ae7ea75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c8f87c476e71dfff120dbe122d382f9cfaa87ea15a6ec9c47b85822ae7ea75->enter($__internal_c3c8f87c476e71dfff120dbe122d382f9cfaa87ea15a6ec9c47b85822ae7ea75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_c3c8f87c476e71dfff120dbe122d382f9cfaa87ea15a6ec9c47b85822ae7ea75->leave($__internal_c3c8f87c476e71dfff120dbe122d382f9cfaa87ea15a6ec9c47b85822ae7ea75_prof);

        
        $__internal_fcae85a67c9ae9a4f164f0ec8af3bff3c77385f477e1cc44ee8e4edd22eaba3c->leave($__internal_fcae85a67c9ae9a4f164f0ec8af3bff3c77385f477e1cc44ee8e4edd22eaba3c_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_d503f7cc0a8d315375a895a7bbf7e005bc952734233e027064757a2b8fb12f64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d503f7cc0a8d315375a895a7bbf7e005bc952734233e027064757a2b8fb12f64->enter($__internal_d503f7cc0a8d315375a895a7bbf7e005bc952734233e027064757a2b8fb12f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_ede3d0bc97425e0b8f207c3c222f93b59a4284bbd44f7c0b2fc630b058a39826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede3d0bc97425e0b8f207c3c222f93b59a4284bbd44f7c0b2fc630b058a39826->enter($__internal_ede3d0bc97425e0b8f207c3c222f93b59a4284bbd44f7c0b2fc630b058a39826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_ede3d0bc97425e0b8f207c3c222f93b59a4284bbd44f7c0b2fc630b058a39826->leave($__internal_ede3d0bc97425e0b8f207c3c222f93b59a4284bbd44f7c0b2fc630b058a39826_prof);

        
        $__internal_d503f7cc0a8d315375a895a7bbf7e005bc952734233e027064757a2b8fb12f64->leave($__internal_d503f7cc0a8d315375a895a7bbf7e005bc952734233e027064757a2b8fb12f64_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_1a06e6846da50c4eafbc244dac4f05531aa40d14aa3509bfcbad048e1c0bdc92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a06e6846da50c4eafbc244dac4f05531aa40d14aa3509bfcbad048e1c0bdc92->enter($__internal_1a06e6846da50c4eafbc244dac4f05531aa40d14aa3509bfcbad048e1c0bdc92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_3b0ebc4c7c56d7a0d0925b3ee9217aebe2f9368d47da10da5aa3c39ce944014c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b0ebc4c7c56d7a0d0925b3ee9217aebe2f9368d47da10da5aa3c39ce944014c->enter($__internal_3b0ebc4c7c56d7a0d0925b3ee9217aebe2f9368d47da10da5aa3c39ce944014c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_3b0ebc4c7c56d7a0d0925b3ee9217aebe2f9368d47da10da5aa3c39ce944014c->leave($__internal_3b0ebc4c7c56d7a0d0925b3ee9217aebe2f9368d47da10da5aa3c39ce944014c_prof);

        
        $__internal_1a06e6846da50c4eafbc244dac4f05531aa40d14aa3509bfcbad048e1c0bdc92->leave($__internal_1a06e6846da50c4eafbc244dac4f05531aa40d14aa3509bfcbad048e1c0bdc92_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_12c840eef0f94e25eff8cbe211fece72f1a2c69235de4ca3be48b33c73aaa94f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12c840eef0f94e25eff8cbe211fece72f1a2c69235de4ca3be48b33c73aaa94f->enter($__internal_12c840eef0f94e25eff8cbe211fece72f1a2c69235de4ca3be48b33c73aaa94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_d08997efa9cddd7d6f68f8d459ba04d54e5ab3b8a6183aefcfefcf7a3732c314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d08997efa9cddd7d6f68f8d459ba04d54e5ab3b8a6183aefcfefcf7a3732c314->enter($__internal_d08997efa9cddd7d6f68f8d459ba04d54e5ab3b8a6183aefcfefcf7a3732c314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_d08997efa9cddd7d6f68f8d459ba04d54e5ab3b8a6183aefcfefcf7a3732c314->leave($__internal_d08997efa9cddd7d6f68f8d459ba04d54e5ab3b8a6183aefcfefcf7a3732c314_prof);

        
        $__internal_12c840eef0f94e25eff8cbe211fece72f1a2c69235de4ca3be48b33c73aaa94f->leave($__internal_12c840eef0f94e25eff8cbe211fece72f1a2c69235de4ca3be48b33c73aaa94f_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/twig-bridge/Resources/views/Form/form_table_layout.html.twig");
    }
}
