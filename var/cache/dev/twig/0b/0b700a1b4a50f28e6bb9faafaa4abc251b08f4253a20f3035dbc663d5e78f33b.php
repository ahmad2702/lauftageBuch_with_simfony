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
        $__internal_9980908dc320c5ba5123b439ac4fa98998189f69d8f8956be49679a01749d96a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9980908dc320c5ba5123b439ac4fa98998189f69d8f8956be49679a01749d96a->enter($__internal_9980908dc320c5ba5123b439ac4fa98998189f69d8f8956be49679a01749d96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_b709f0eb183626de552870314effc7612680b8f15f90a9cd44ee869c22438196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b709f0eb183626de552870314effc7612680b8f15f90a9cd44ee869c22438196->enter($__internal_b709f0eb183626de552870314effc7612680b8f15f90a9cd44ee869c22438196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_9980908dc320c5ba5123b439ac4fa98998189f69d8f8956be49679a01749d96a->leave($__internal_9980908dc320c5ba5123b439ac4fa98998189f69d8f8956be49679a01749d96a_prof);

        
        $__internal_b709f0eb183626de552870314effc7612680b8f15f90a9cd44ee869c22438196->leave($__internal_b709f0eb183626de552870314effc7612680b8f15f90a9cd44ee869c22438196_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9eff6f5d0fae864a8d863ef5724750defd482410915218d33cedcab1f971a387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eff6f5d0fae864a8d863ef5724750defd482410915218d33cedcab1f971a387->enter($__internal_9eff6f5d0fae864a8d863ef5724750defd482410915218d33cedcab1f971a387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_40d3674880b45076d07f71699e7b8e832b8ffd3d7ac5abca24146718f7985ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d3674880b45076d07f71699e7b8e832b8ffd3d7ac5abca24146718f7985ebb->enter($__internal_40d3674880b45076d07f71699e7b8e832b8ffd3d7ac5abca24146718f7985ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_40d3674880b45076d07f71699e7b8e832b8ffd3d7ac5abca24146718f7985ebb->leave($__internal_40d3674880b45076d07f71699e7b8e832b8ffd3d7ac5abca24146718f7985ebb_prof);

        
        $__internal_9eff6f5d0fae864a8d863ef5724750defd482410915218d33cedcab1f971a387->leave($__internal_9eff6f5d0fae864a8d863ef5724750defd482410915218d33cedcab1f971a387_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_644f529c4741b8235c55eb5b71cc77e00ad1ef237791b7cb205a9ea4b0c3f5a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_644f529c4741b8235c55eb5b71cc77e00ad1ef237791b7cb205a9ea4b0c3f5a9->enter($__internal_644f529c4741b8235c55eb5b71cc77e00ad1ef237791b7cb205a9ea4b0c3f5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_0ae94620ab09900450dc6ddd62dcfb47f93084b049b115d8315b90ef4e243755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ae94620ab09900450dc6ddd62dcfb47f93084b049b115d8315b90ef4e243755->enter($__internal_0ae94620ab09900450dc6ddd62dcfb47f93084b049b115d8315b90ef4e243755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_0ae94620ab09900450dc6ddd62dcfb47f93084b049b115d8315b90ef4e243755->leave($__internal_0ae94620ab09900450dc6ddd62dcfb47f93084b049b115d8315b90ef4e243755_prof);

        
        $__internal_644f529c4741b8235c55eb5b71cc77e00ad1ef237791b7cb205a9ea4b0c3f5a9->leave($__internal_644f529c4741b8235c55eb5b71cc77e00ad1ef237791b7cb205a9ea4b0c3f5a9_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_2f16b4fac26edbe251ac17d57fc4a60e59a94ea6384490d190daac43d43b0669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f16b4fac26edbe251ac17d57fc4a60e59a94ea6384490d190daac43d43b0669->enter($__internal_2f16b4fac26edbe251ac17d57fc4a60e59a94ea6384490d190daac43d43b0669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_8bcdd1e9d34a50de4232d26e8cd4637c57988047a15fcece18efa53560947724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bcdd1e9d34a50de4232d26e8cd4637c57988047a15fcece18efa53560947724->enter($__internal_8bcdd1e9d34a50de4232d26e8cd4637c57988047a15fcece18efa53560947724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_8bcdd1e9d34a50de4232d26e8cd4637c57988047a15fcece18efa53560947724->leave($__internal_8bcdd1e9d34a50de4232d26e8cd4637c57988047a15fcece18efa53560947724_prof);

        
        $__internal_2f16b4fac26edbe251ac17d57fc4a60e59a94ea6384490d190daac43d43b0669->leave($__internal_2f16b4fac26edbe251ac17d57fc4a60e59a94ea6384490d190daac43d43b0669_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_2d6d96501e71e9913259032f37367550e1fb144259b570614a03a33379ea289b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d6d96501e71e9913259032f37367550e1fb144259b570614a03a33379ea289b->enter($__internal_2d6d96501e71e9913259032f37367550e1fb144259b570614a03a33379ea289b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_4e8526f3692a141d0a112d76e7950970e06d609c51e7f56701bc35220ccd8ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e8526f3692a141d0a112d76e7950970e06d609c51e7f56701bc35220ccd8ec3->enter($__internal_4e8526f3692a141d0a112d76e7950970e06d609c51e7f56701bc35220ccd8ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_4e8526f3692a141d0a112d76e7950970e06d609c51e7f56701bc35220ccd8ec3->leave($__internal_4e8526f3692a141d0a112d76e7950970e06d609c51e7f56701bc35220ccd8ec3_prof);

        
        $__internal_2d6d96501e71e9913259032f37367550e1fb144259b570614a03a33379ea289b->leave($__internal_2d6d96501e71e9913259032f37367550e1fb144259b570614a03a33379ea289b_prof);

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
