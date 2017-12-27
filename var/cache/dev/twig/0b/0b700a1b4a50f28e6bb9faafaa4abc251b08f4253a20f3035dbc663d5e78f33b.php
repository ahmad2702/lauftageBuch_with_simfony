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
        $__internal_1d064c61ba883bd1864e144f1185219b99f4f01496befc4220a9e01a2c900912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d064c61ba883bd1864e144f1185219b99f4f01496befc4220a9e01a2c900912->enter($__internal_1d064c61ba883bd1864e144f1185219b99f4f01496befc4220a9e01a2c900912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_8170d9e5bbf937358d5da64e8397117adab57fc782674cf895640c45417c5763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8170d9e5bbf937358d5da64e8397117adab57fc782674cf895640c45417c5763->enter($__internal_8170d9e5bbf937358d5da64e8397117adab57fc782674cf895640c45417c5763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_1d064c61ba883bd1864e144f1185219b99f4f01496befc4220a9e01a2c900912->leave($__internal_1d064c61ba883bd1864e144f1185219b99f4f01496befc4220a9e01a2c900912_prof);

        
        $__internal_8170d9e5bbf937358d5da64e8397117adab57fc782674cf895640c45417c5763->leave($__internal_8170d9e5bbf937358d5da64e8397117adab57fc782674cf895640c45417c5763_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e7020f65aa895fbe58f8030f3f0f2c09927e1f230909ec0b296ca560a7fa7a80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7020f65aa895fbe58f8030f3f0f2c09927e1f230909ec0b296ca560a7fa7a80->enter($__internal_e7020f65aa895fbe58f8030f3f0f2c09927e1f230909ec0b296ca560a7fa7a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_ff925a82b9687cfeab1a8981d95cb7b37d79dc08f8de162fce395bbe50a8a2b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff925a82b9687cfeab1a8981d95cb7b37d79dc08f8de162fce395bbe50a8a2b3->enter($__internal_ff925a82b9687cfeab1a8981d95cb7b37d79dc08f8de162fce395bbe50a8a2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_ff925a82b9687cfeab1a8981d95cb7b37d79dc08f8de162fce395bbe50a8a2b3->leave($__internal_ff925a82b9687cfeab1a8981d95cb7b37d79dc08f8de162fce395bbe50a8a2b3_prof);

        
        $__internal_e7020f65aa895fbe58f8030f3f0f2c09927e1f230909ec0b296ca560a7fa7a80->leave($__internal_e7020f65aa895fbe58f8030f3f0f2c09927e1f230909ec0b296ca560a7fa7a80_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_bf3dd55818c8cffc17347abf272186a30463dc5d5e558feba8bd5d09c40b24f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf3dd55818c8cffc17347abf272186a30463dc5d5e558feba8bd5d09c40b24f7->enter($__internal_bf3dd55818c8cffc17347abf272186a30463dc5d5e558feba8bd5d09c40b24f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_bcc5ab0706640852b108401498410e0e4e15bcd916a4439fe78e9bc6c8207d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc5ab0706640852b108401498410e0e4e15bcd916a4439fe78e9bc6c8207d6b->enter($__internal_bcc5ab0706640852b108401498410e0e4e15bcd916a4439fe78e9bc6c8207d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_bcc5ab0706640852b108401498410e0e4e15bcd916a4439fe78e9bc6c8207d6b->leave($__internal_bcc5ab0706640852b108401498410e0e4e15bcd916a4439fe78e9bc6c8207d6b_prof);

        
        $__internal_bf3dd55818c8cffc17347abf272186a30463dc5d5e558feba8bd5d09c40b24f7->leave($__internal_bf3dd55818c8cffc17347abf272186a30463dc5d5e558feba8bd5d09c40b24f7_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_9337a78d7d128fb1e73d07ba45dbed04152a39ea137502a80998685fc6e7f659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9337a78d7d128fb1e73d07ba45dbed04152a39ea137502a80998685fc6e7f659->enter($__internal_9337a78d7d128fb1e73d07ba45dbed04152a39ea137502a80998685fc6e7f659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_ccfd3c56d1c552c1332b1417b38680ada984dfc551722e1c3fc78dc0e296fb3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccfd3c56d1c552c1332b1417b38680ada984dfc551722e1c3fc78dc0e296fb3e->enter($__internal_ccfd3c56d1c552c1332b1417b38680ada984dfc551722e1c3fc78dc0e296fb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_ccfd3c56d1c552c1332b1417b38680ada984dfc551722e1c3fc78dc0e296fb3e->leave($__internal_ccfd3c56d1c552c1332b1417b38680ada984dfc551722e1c3fc78dc0e296fb3e_prof);

        
        $__internal_9337a78d7d128fb1e73d07ba45dbed04152a39ea137502a80998685fc6e7f659->leave($__internal_9337a78d7d128fb1e73d07ba45dbed04152a39ea137502a80998685fc6e7f659_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_03f062d7ef672e8f12fccf93868ead227e324c317014bd38e06015e14374939e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03f062d7ef672e8f12fccf93868ead227e324c317014bd38e06015e14374939e->enter($__internal_03f062d7ef672e8f12fccf93868ead227e324c317014bd38e06015e14374939e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_42cdf036d422ea4e2c0a2d2b1bb4c2b4062c496e00bfbbc1e1799d0bf4ae6563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42cdf036d422ea4e2c0a2d2b1bb4c2b4062c496e00bfbbc1e1799d0bf4ae6563->enter($__internal_42cdf036d422ea4e2c0a2d2b1bb4c2b4062c496e00bfbbc1e1799d0bf4ae6563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_42cdf036d422ea4e2c0a2d2b1bb4c2b4062c496e00bfbbc1e1799d0bf4ae6563->leave($__internal_42cdf036d422ea4e2c0a2d2b1bb4c2b4062c496e00bfbbc1e1799d0bf4ae6563_prof);

        
        $__internal_03f062d7ef672e8f12fccf93868ead227e324c317014bd38e06015e14374939e->leave($__internal_03f062d7ef672e8f12fccf93868ead227e324c317014bd38e06015e14374939e_prof);

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
