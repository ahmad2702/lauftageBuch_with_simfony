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
        $__internal_e4a4a548555f0887f4c01ac2db3d2894b88fccde392beec650339cd5827350bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4a4a548555f0887f4c01ac2db3d2894b88fccde392beec650339cd5827350bb->enter($__internal_e4a4a548555f0887f4c01ac2db3d2894b88fccde392beec650339cd5827350bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_f52ab672a3d488d22a9342ee0f1a1708e6d84503b01c43e956791387524ffdcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f52ab672a3d488d22a9342ee0f1a1708e6d84503b01c43e956791387524ffdcf->enter($__internal_f52ab672a3d488d22a9342ee0f1a1708e6d84503b01c43e956791387524ffdcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_e4a4a548555f0887f4c01ac2db3d2894b88fccde392beec650339cd5827350bb->leave($__internal_e4a4a548555f0887f4c01ac2db3d2894b88fccde392beec650339cd5827350bb_prof);

        
        $__internal_f52ab672a3d488d22a9342ee0f1a1708e6d84503b01c43e956791387524ffdcf->leave($__internal_f52ab672a3d488d22a9342ee0f1a1708e6d84503b01c43e956791387524ffdcf_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_4a4b166129968b4dfc0c98a8cdbdaf15a40f75d933e7a75ea0890e1b13a5abcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a4b166129968b4dfc0c98a8cdbdaf15a40f75d933e7a75ea0890e1b13a5abcc->enter($__internal_4a4b166129968b4dfc0c98a8cdbdaf15a40f75d933e7a75ea0890e1b13a5abcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9fbb0e8b8af807abb013b5136c999362eebab1c13568b0f1a6232a3cbf513665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fbb0e8b8af807abb013b5136c999362eebab1c13568b0f1a6232a3cbf513665->enter($__internal_9fbb0e8b8af807abb013b5136c999362eebab1c13568b0f1a6232a3cbf513665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_9fbb0e8b8af807abb013b5136c999362eebab1c13568b0f1a6232a3cbf513665->leave($__internal_9fbb0e8b8af807abb013b5136c999362eebab1c13568b0f1a6232a3cbf513665_prof);

        
        $__internal_4a4b166129968b4dfc0c98a8cdbdaf15a40f75d933e7a75ea0890e1b13a5abcc->leave($__internal_4a4b166129968b4dfc0c98a8cdbdaf15a40f75d933e7a75ea0890e1b13a5abcc_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_ceceab0aef10e8c373848a26755631c12e2ed363af998171d4f56bfc9c577707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceceab0aef10e8c373848a26755631c12e2ed363af998171d4f56bfc9c577707->enter($__internal_ceceab0aef10e8c373848a26755631c12e2ed363af998171d4f56bfc9c577707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_86a62d3a7f5145dcc23c21c0a09866c743f3faa5ed5e9a76a949931a24a1a770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a62d3a7f5145dcc23c21c0a09866c743f3faa5ed5e9a76a949931a24a1a770->enter($__internal_86a62d3a7f5145dcc23c21c0a09866c743f3faa5ed5e9a76a949931a24a1a770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_86a62d3a7f5145dcc23c21c0a09866c743f3faa5ed5e9a76a949931a24a1a770->leave($__internal_86a62d3a7f5145dcc23c21c0a09866c743f3faa5ed5e9a76a949931a24a1a770_prof);

        
        $__internal_ceceab0aef10e8c373848a26755631c12e2ed363af998171d4f56bfc9c577707->leave($__internal_ceceab0aef10e8c373848a26755631c12e2ed363af998171d4f56bfc9c577707_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_9c6dab21f2a1d915fe6b9f962dba027f9b1f1f959b676ade518ff93b3bc3321a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c6dab21f2a1d915fe6b9f962dba027f9b1f1f959b676ade518ff93b3bc3321a->enter($__internal_9c6dab21f2a1d915fe6b9f962dba027f9b1f1f959b676ade518ff93b3bc3321a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_299f7bdf02a60129dc0c0669018628f50f923c516a0470c029d28bca4297d584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_299f7bdf02a60129dc0c0669018628f50f923c516a0470c029d28bca4297d584->enter($__internal_299f7bdf02a60129dc0c0669018628f50f923c516a0470c029d28bca4297d584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_299f7bdf02a60129dc0c0669018628f50f923c516a0470c029d28bca4297d584->leave($__internal_299f7bdf02a60129dc0c0669018628f50f923c516a0470c029d28bca4297d584_prof);

        
        $__internal_9c6dab21f2a1d915fe6b9f962dba027f9b1f1f959b676ade518ff93b3bc3321a->leave($__internal_9c6dab21f2a1d915fe6b9f962dba027f9b1f1f959b676ade518ff93b3bc3321a_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_f849343a5cc1f31ddbb63c69f170d9b63917a9e88b2a2d79254847b919ec8c7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f849343a5cc1f31ddbb63c69f170d9b63917a9e88b2a2d79254847b919ec8c7d->enter($__internal_f849343a5cc1f31ddbb63c69f170d9b63917a9e88b2a2d79254847b919ec8c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_4b53ce3ffa4595674020c38578116b7652db412bacff874e7a4b5aea3ef3e47c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b53ce3ffa4595674020c38578116b7652db412bacff874e7a4b5aea3ef3e47c->enter($__internal_4b53ce3ffa4595674020c38578116b7652db412bacff874e7a4b5aea3ef3e47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_4b53ce3ffa4595674020c38578116b7652db412bacff874e7a4b5aea3ef3e47c->leave($__internal_4b53ce3ffa4595674020c38578116b7652db412bacff874e7a4b5aea3ef3e47c_prof);

        
        $__internal_f849343a5cc1f31ddbb63c69f170d9b63917a9e88b2a2d79254847b919ec8c7d->leave($__internal_f849343a5cc1f31ddbb63c69f170d9b63917a9e88b2a2d79254847b919ec8c7d_prof);

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
", "form_table_layout.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bridge/Resources/views/Form/form_table_layout.html.twig");
    }
}
