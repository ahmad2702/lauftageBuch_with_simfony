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
        $__internal_4e2e1ff0960329598cd97ec577240d7731461c76995f7e42ac40a40ac7e91fff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e2e1ff0960329598cd97ec577240d7731461c76995f7e42ac40a40ac7e91fff->enter($__internal_4e2e1ff0960329598cd97ec577240d7731461c76995f7e42ac40a40ac7e91fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_dafde205b498647caae4d80ca4d24ecc615e4edc459e94b5b8a14dfd916c4a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dafde205b498647caae4d80ca4d24ecc615e4edc459e94b5b8a14dfd916c4a07->enter($__internal_dafde205b498647caae4d80ca4d24ecc615e4edc459e94b5b8a14dfd916c4a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_4e2e1ff0960329598cd97ec577240d7731461c76995f7e42ac40a40ac7e91fff->leave($__internal_4e2e1ff0960329598cd97ec577240d7731461c76995f7e42ac40a40ac7e91fff_prof);

        
        $__internal_dafde205b498647caae4d80ca4d24ecc615e4edc459e94b5b8a14dfd916c4a07->leave($__internal_dafde205b498647caae4d80ca4d24ecc615e4edc459e94b5b8a14dfd916c4a07_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_1c569a0ead34d2c5515beb0fa031d4c3c9d7705bfb2cc2d9989c4ad5744165e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c569a0ead34d2c5515beb0fa031d4c3c9d7705bfb2cc2d9989c4ad5744165e2->enter($__internal_1c569a0ead34d2c5515beb0fa031d4c3c9d7705bfb2cc2d9989c4ad5744165e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_87c0e5b05976c07de4de04b3fa4af0a518c4b4a3024247b468bf3c07f09094b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c0e5b05976c07de4de04b3fa4af0a518c4b4a3024247b468bf3c07f09094b1->enter($__internal_87c0e5b05976c07de4de04b3fa4af0a518c4b4a3024247b468bf3c07f09094b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_87c0e5b05976c07de4de04b3fa4af0a518c4b4a3024247b468bf3c07f09094b1->leave($__internal_87c0e5b05976c07de4de04b3fa4af0a518c4b4a3024247b468bf3c07f09094b1_prof);

        
        $__internal_1c569a0ead34d2c5515beb0fa031d4c3c9d7705bfb2cc2d9989c4ad5744165e2->leave($__internal_1c569a0ead34d2c5515beb0fa031d4c3c9d7705bfb2cc2d9989c4ad5744165e2_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_d09b4d1f0a56f760fb75b98a2856035c178de5f2415d2b304027af8eb45b06fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d09b4d1f0a56f760fb75b98a2856035c178de5f2415d2b304027af8eb45b06fc->enter($__internal_d09b4d1f0a56f760fb75b98a2856035c178de5f2415d2b304027af8eb45b06fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_01b7cc3e68598ebf14eb9f47c251c5db2ce41b8d36a0f5c2c57781636c2346a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01b7cc3e68598ebf14eb9f47c251c5db2ce41b8d36a0f5c2c57781636c2346a7->enter($__internal_01b7cc3e68598ebf14eb9f47c251c5db2ce41b8d36a0f5c2c57781636c2346a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_01b7cc3e68598ebf14eb9f47c251c5db2ce41b8d36a0f5c2c57781636c2346a7->leave($__internal_01b7cc3e68598ebf14eb9f47c251c5db2ce41b8d36a0f5c2c57781636c2346a7_prof);

        
        $__internal_d09b4d1f0a56f760fb75b98a2856035c178de5f2415d2b304027af8eb45b06fc->leave($__internal_d09b4d1f0a56f760fb75b98a2856035c178de5f2415d2b304027af8eb45b06fc_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_0b08330a2c9b84aac5af42bc5c884dd4962aee70368b334e58c64c85c0f93085 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b08330a2c9b84aac5af42bc5c884dd4962aee70368b334e58c64c85c0f93085->enter($__internal_0b08330a2c9b84aac5af42bc5c884dd4962aee70368b334e58c64c85c0f93085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_e777071307baa75fcca0bd80909fb7ed72ed470bb1ca4a6fd054213dd1250aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e777071307baa75fcca0bd80909fb7ed72ed470bb1ca4a6fd054213dd1250aa7->enter($__internal_e777071307baa75fcca0bd80909fb7ed72ed470bb1ca4a6fd054213dd1250aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_e777071307baa75fcca0bd80909fb7ed72ed470bb1ca4a6fd054213dd1250aa7->leave($__internal_e777071307baa75fcca0bd80909fb7ed72ed470bb1ca4a6fd054213dd1250aa7_prof);

        
        $__internal_0b08330a2c9b84aac5af42bc5c884dd4962aee70368b334e58c64c85c0f93085->leave($__internal_0b08330a2c9b84aac5af42bc5c884dd4962aee70368b334e58c64c85c0f93085_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_bcbf5615bfe344fccb85b94974a593ef3b3fdbc799c6aec5a420c4a4ed174318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcbf5615bfe344fccb85b94974a593ef3b3fdbc799c6aec5a420c4a4ed174318->enter($__internal_bcbf5615bfe344fccb85b94974a593ef3b3fdbc799c6aec5a420c4a4ed174318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_bfdb28571a2eeafe9a6e5e26e495e8a3702f1cb01d8f3a1c77e2ad74ef4e1302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfdb28571a2eeafe9a6e5e26e495e8a3702f1cb01d8f3a1c77e2ad74ef4e1302->enter($__internal_bfdb28571a2eeafe9a6e5e26e495e8a3702f1cb01d8f3a1c77e2ad74ef4e1302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_bfdb28571a2eeafe9a6e5e26e495e8a3702f1cb01d8f3a1c77e2ad74ef4e1302->leave($__internal_bfdb28571a2eeafe9a6e5e26e495e8a3702f1cb01d8f3a1c77e2ad74ef4e1302_prof);

        
        $__internal_bcbf5615bfe344fccb85b94974a593ef3b3fdbc799c6aec5a420c4a4ed174318->leave($__internal_bcbf5615bfe344fccb85b94974a593ef3b3fdbc799c6aec5a420c4a4ed174318_prof);

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
