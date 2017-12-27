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
        $__internal_c066e0f02a919ca59923b1b68b8fc311373f07823e4b0d69c2e83b8e4b41d3fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c066e0f02a919ca59923b1b68b8fc311373f07823e4b0d69c2e83b8e4b41d3fe->enter($__internal_c066e0f02a919ca59923b1b68b8fc311373f07823e4b0d69c2e83b8e4b41d3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_3a8bb786ebdbfa547a16f49728888a7213e49316117557a99fb2d84dff76055e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a8bb786ebdbfa547a16f49728888a7213e49316117557a99fb2d84dff76055e->enter($__internal_3a8bb786ebdbfa547a16f49728888a7213e49316117557a99fb2d84dff76055e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_c066e0f02a919ca59923b1b68b8fc311373f07823e4b0d69c2e83b8e4b41d3fe->leave($__internal_c066e0f02a919ca59923b1b68b8fc311373f07823e4b0d69c2e83b8e4b41d3fe_prof);

        
        $__internal_3a8bb786ebdbfa547a16f49728888a7213e49316117557a99fb2d84dff76055e->leave($__internal_3a8bb786ebdbfa547a16f49728888a7213e49316117557a99fb2d84dff76055e_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_10d56ee9228343ec3c70a262154ddf91aa554e862fc8219cd8f904175eeed286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10d56ee9228343ec3c70a262154ddf91aa554e862fc8219cd8f904175eeed286->enter($__internal_10d56ee9228343ec3c70a262154ddf91aa554e862fc8219cd8f904175eeed286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_64964f8cac7267325b9cde3b19e480b580b0882bb97771271fe4413448c36bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64964f8cac7267325b9cde3b19e480b580b0882bb97771271fe4413448c36bc3->enter($__internal_64964f8cac7267325b9cde3b19e480b580b0882bb97771271fe4413448c36bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_64964f8cac7267325b9cde3b19e480b580b0882bb97771271fe4413448c36bc3->leave($__internal_64964f8cac7267325b9cde3b19e480b580b0882bb97771271fe4413448c36bc3_prof);

        
        $__internal_10d56ee9228343ec3c70a262154ddf91aa554e862fc8219cd8f904175eeed286->leave($__internal_10d56ee9228343ec3c70a262154ddf91aa554e862fc8219cd8f904175eeed286_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_e9b037aac357dd5076094343bfae15812a48109fd9d9a3f115b7336c68ddc40e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9b037aac357dd5076094343bfae15812a48109fd9d9a3f115b7336c68ddc40e->enter($__internal_e9b037aac357dd5076094343bfae15812a48109fd9d9a3f115b7336c68ddc40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_61e277fa64b63a580080656c6b399f22de3b0c8e83734f80eaf49e505e06a30f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e277fa64b63a580080656c6b399f22de3b0c8e83734f80eaf49e505e06a30f->enter($__internal_61e277fa64b63a580080656c6b399f22de3b0c8e83734f80eaf49e505e06a30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_61e277fa64b63a580080656c6b399f22de3b0c8e83734f80eaf49e505e06a30f->leave($__internal_61e277fa64b63a580080656c6b399f22de3b0c8e83734f80eaf49e505e06a30f_prof);

        
        $__internal_e9b037aac357dd5076094343bfae15812a48109fd9d9a3f115b7336c68ddc40e->leave($__internal_e9b037aac357dd5076094343bfae15812a48109fd9d9a3f115b7336c68ddc40e_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_bafe7240495d9146add6799aaa99133c5ff85e6e216f3683ecef98aea7ef21dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bafe7240495d9146add6799aaa99133c5ff85e6e216f3683ecef98aea7ef21dc->enter($__internal_bafe7240495d9146add6799aaa99133c5ff85e6e216f3683ecef98aea7ef21dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_760647243925c3b94b716aa82cfe567eca6cc26b01ba53f66fd824fb6665d63c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_760647243925c3b94b716aa82cfe567eca6cc26b01ba53f66fd824fb6665d63c->enter($__internal_760647243925c3b94b716aa82cfe567eca6cc26b01ba53f66fd824fb6665d63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_760647243925c3b94b716aa82cfe567eca6cc26b01ba53f66fd824fb6665d63c->leave($__internal_760647243925c3b94b716aa82cfe567eca6cc26b01ba53f66fd824fb6665d63c_prof);

        
        $__internal_bafe7240495d9146add6799aaa99133c5ff85e6e216f3683ecef98aea7ef21dc->leave($__internal_bafe7240495d9146add6799aaa99133c5ff85e6e216f3683ecef98aea7ef21dc_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_03e1508b38dc295423376d367267a58ecfbcc45ea500956ff1c8139f10c37b02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03e1508b38dc295423376d367267a58ecfbcc45ea500956ff1c8139f10c37b02->enter($__internal_03e1508b38dc295423376d367267a58ecfbcc45ea500956ff1c8139f10c37b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_00830b98269376739f0b34c329e643b4d3f5c59eb614bdb20e8f4fc38150d3f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00830b98269376739f0b34c329e643b4d3f5c59eb614bdb20e8f4fc38150d3f1->enter($__internal_00830b98269376739f0b34c329e643b4d3f5c59eb614bdb20e8f4fc38150d3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_00830b98269376739f0b34c329e643b4d3f5c59eb614bdb20e8f4fc38150d3f1->leave($__internal_00830b98269376739f0b34c329e643b4d3f5c59eb614bdb20e8f4fc38150d3f1_prof);

        
        $__internal_03e1508b38dc295423376d367267a58ecfbcc45ea500956ff1c8139f10c37b02->leave($__internal_03e1508b38dc295423376d367267a58ecfbcc45ea500956ff1c8139f10c37b02_prof);

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
