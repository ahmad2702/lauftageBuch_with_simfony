<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_8eeed296d7ad3676454b0c5f2e60cb2783a342ba810dcccb56a0c15236240940 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8911275a2decf98b97ab7dee9821b82216f9a0caa5d342d0a5c787048efcc8b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8911275a2decf98b97ab7dee9821b82216f9a0caa5d342d0a5c787048efcc8b9->enter($__internal_8911275a2decf98b97ab7dee9821b82216f9a0caa5d342d0a5c787048efcc8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_09bcd305d45533fcf74a0c2da569a591f89adeb4f38b150217882c8df9b3012f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09bcd305d45533fcf74a0c2da569a591f89adeb4f38b150217882c8df9b3012f->enter($__internal_09bcd305d45533fcf74a0c2da569a591f89adeb4f38b150217882c8df9b3012f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('choice_label', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('radio_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 88
        echo "
";
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('button_row', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('choice_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('date_row', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('time_row', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('radio_row', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_8911275a2decf98b97ab7dee9821b82216f9a0caa5d342d0a5c787048efcc8b9->leave($__internal_8911275a2decf98b97ab7dee9821b82216f9a0caa5d342d0a5c787048efcc8b9_prof);

        
        $__internal_09bcd305d45533fcf74a0c2da569a591f89adeb4f38b150217882c8df9b3012f->leave($__internal_09bcd305d45533fcf74a0c2da569a591f89adeb4f38b150217882c8df9b3012f_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c7d0c4d2f2f13714f534cc207d51e6b5c293cddf878515770629a04d89dfc04e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7d0c4d2f2f13714f534cc207d51e6b5c293cddf878515770629a04d89dfc04e->enter($__internal_c7d0c4d2f2f13714f534cc207d51e6b5c293cddf878515770629a04d89dfc04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_99deef6be3ac3ccbebe5882fb4f2620d29da65afc71fc9f25903d91a9669678d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99deef6be3ac3ccbebe5882fb4f2620d29da65afc71fc9f25903d91a9669678d->enter($__internal_99deef6be3ac3ccbebe5882fb4f2620d29da65afc71fc9f25903d91a9669678d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_99deef6be3ac3ccbebe5882fb4f2620d29da65afc71fc9f25903d91a9669678d->leave($__internal_99deef6be3ac3ccbebe5882fb4f2620d29da65afc71fc9f25903d91a9669678d_prof);

        
        $__internal_c7d0c4d2f2f13714f534cc207d51e6b5c293cddf878515770629a04d89dfc04e->leave($__internal_c7d0c4d2f2f13714f534cc207d51e6b5c293cddf878515770629a04d89dfc04e_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_882809e03c14521175075b4082fc5e0abf58c4bc4cc8f4183f4174c0dfb96701 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_882809e03c14521175075b4082fc5e0abf58c4bc4cc8f4183f4174c0dfb96701->enter($__internal_882809e03c14521175075b4082fc5e0abf58c4bc4cc8f4183f4174c0dfb96701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_759471e6c66f9f0fdd24347f44f73e78eaa188c066d5d939291150b397294b6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_759471e6c66f9f0fdd24347f44f73e78eaa188c066d5d939291150b397294b6a->enter($__internal_759471e6c66f9f0fdd24347f44f73e78eaa188c066d5d939291150b397294b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_759471e6c66f9f0fdd24347f44f73e78eaa188c066d5d939291150b397294b6a->leave($__internal_759471e6c66f9f0fdd24347f44f73e78eaa188c066d5d939291150b397294b6a_prof);

        
        $__internal_882809e03c14521175075b4082fc5e0abf58c4bc4cc8f4183f4174c0dfb96701->leave($__internal_882809e03c14521175075b4082fc5e0abf58c4bc4cc8f4183f4174c0dfb96701_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_cc412d86d2a84e6b008198f27949827a202689e4a040df361dbb8b6838daf1c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc412d86d2a84e6b008198f27949827a202689e4a040df361dbb8b6838daf1c4->enter($__internal_cc412d86d2a84e6b008198f27949827a202689e4a040df361dbb8b6838daf1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_5e3c789c033464ae6194852a689cda35d7e8c07d1bd94459bdef304c24051e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3c789c033464ae6194852a689cda35d7e8c07d1bd94459bdef304c24051e60->enter($__internal_5e3c789c033464ae6194852a689cda35d7e8c07d1bd94459bdef304c24051e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 18
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 18, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 19
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 19, $this->getSourceContext()); })()))) {
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 22
            echo "<div class=\"checkbox\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 24
            echo "</div>";
        }
        
        $__internal_5e3c789c033464ae6194852a689cda35d7e8c07d1bd94459bdef304c24051e60->leave($__internal_5e3c789c033464ae6194852a689cda35d7e8c07d1bd94459bdef304c24051e60_prof);

        
        $__internal_cc412d86d2a84e6b008198f27949827a202689e4a040df361dbb8b6838daf1c4->leave($__internal_cc412d86d2a84e6b008198f27949827a202689e4a040df361dbb8b6838daf1c4_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_6c144e332eb7dc5fb9cf47d885bce38373c4a3b81444587c8e3ee9efefca1092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c144e332eb7dc5fb9cf47d885bce38373c4a3b81444587c8e3ee9efefca1092->enter($__internal_6c144e332eb7dc5fb9cf47d885bce38373c4a3b81444587c8e3ee9efefca1092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_c49c0cfc43b1b70813adb889ebbc39dc41ed715c8921f246d676fbdfc8eed9bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c49c0cfc43b1b70813adb889ebbc39dc41ed715c8921f246d676fbdfc8eed9bc->enter($__internal_c49c0cfc43b1b70813adb889ebbc39dc41ed715c8921f246d676fbdfc8eed9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 29
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 29, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 30
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 30, $this->getSourceContext()); })()))) {
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 33
            echo "<div class=\"radio\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 35
            echo "</div>";
        }
        
        $__internal_c49c0cfc43b1b70813adb889ebbc39dc41ed715c8921f246d676fbdfc8eed9bc->leave($__internal_c49c0cfc43b1b70813adb889ebbc39dc41ed715c8921f246d676fbdfc8eed9bc_prof);

        
        $__internal_6c144e332eb7dc5fb9cf47d885bce38373c4a3b81444587c8e3ee9efefca1092->leave($__internal_6c144e332eb7dc5fb9cf47d885bce38373c4a3b81444587c8e3ee9efefca1092_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d5cb061ef76b48669890f6da3c782dd3c6696bf3db79c5b79bdfca086d5a0b19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5cb061ef76b48669890f6da3c782dd3c6696bf3db79c5b79bdfca086d5a0b19->enter($__internal_d5cb061ef76b48669890f6da3c782dd3c6696bf3db79c5b79bdfca086d5a0b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_3aa1626a64f386785871ee2f1e01f617c8f630c715c5a7cb44484cdaa478dd21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa1626a64f386785871ee2f1e01f617c8f630c715c5a7cb44484cdaa478dd21->enter($__internal_3aa1626a64f386785871ee2f1e01f617c8f630c715c5a7cb44484cdaa478dd21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_3aa1626a64f386785871ee2f1e01f617c8f630c715c5a7cb44484cdaa478dd21->leave($__internal_3aa1626a64f386785871ee2f1e01f617c8f630c715c5a7cb44484cdaa478dd21_prof);

        
        $__internal_d5cb061ef76b48669890f6da3c782dd3c6696bf3db79c5b79bdfca086d5a0b19->leave($__internal_d5cb061ef76b48669890f6da3c782dd3c6696bf3db79c5b79bdfca086d5a0b19_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_446963116b99397c4ec109b82324ae92cbd0ad9c028b9a80d4f8ff5c16d58192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_446963116b99397c4ec109b82324ae92cbd0ad9c028b9a80d4f8ff5c16d58192->enter($__internal_446963116b99397c4ec109b82324ae92cbd0ad9c028b9a80d4f8ff5c16d58192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_1fe53631929783b2842a9a464e71557a24dc743bfd190afee99c1c7bce32f45b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe53631929783b2842a9a464e71557a24dc743bfd190afee99c1c7bce32f45b->enter($__internal_1fe53631929783b2842a9a464e71557a24dc743bfd190afee99c1c7bce32f45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_1fe53631929783b2842a9a464e71557a24dc743bfd190afee99c1c7bce32f45b->leave($__internal_1fe53631929783b2842a9a464e71557a24dc743bfd190afee99c1c7bce32f45b_prof);

        
        $__internal_446963116b99397c4ec109b82324ae92cbd0ad9c028b9a80d4f8ff5c16d58192->leave($__internal_446963116b99397c4ec109b82324ae92cbd0ad9c028b9a80d4f8ff5c16d58192_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_6fb9a030374c32afaacc77318225692abcf8102e65e027fef0ffb98eef2c3d37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fb9a030374c32afaacc77318225692abcf8102e65e027fef0ffb98eef2c3d37->enter($__internal_6fb9a030374c32afaacc77318225692abcf8102e65e027fef0ffb98eef2c3d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_627cd9e951bca8937aa78d68c3c479decb2f256ac3d54d4fb71761cdb84934e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_627cd9e951bca8937aa78d68c3c479decb2f256ac3d54d4fb71761cdb84934e9->enter($__internal_627cd9e951bca8937aa78d68c3c479decb2f256ac3d54d4fb71761cdb84934e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_627cd9e951bca8937aa78d68c3c479decb2f256ac3d54d4fb71761cdb84934e9->leave($__internal_627cd9e951bca8937aa78d68c3c479decb2f256ac3d54d4fb71761cdb84934e9_prof);

        
        $__internal_6fb9a030374c32afaacc77318225692abcf8102e65e027fef0ffb98eef2c3d37->leave($__internal_6fb9a030374c32afaacc77318225692abcf8102e65e027fef0ffb98eef2c3d37_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_70e7738b06d503a67a8f6abf9ab6f4eaa6e1132ed75ea1ec1e138eb05cdba7f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70e7738b06d503a67a8f6abf9ab6f4eaa6e1132ed75ea1ec1e138eb05cdba7f2->enter($__internal_70e7738b06d503a67a8f6abf9ab6f4eaa6e1132ed75ea1ec1e138eb05cdba7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_d8ead586540531a0350d7624f1ea7f48dccb80388c099b3ba388a8bab0c5adf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ead586540531a0350d7624f1ea7f48dccb80388c099b3ba388a8bab0c5adf2->enter($__internal_d8ead586540531a0350d7624f1ea7f48dccb80388c099b3ba388a8bab0c5adf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d8ead586540531a0350d7624f1ea7f48dccb80388c099b3ba388a8bab0c5adf2->leave($__internal_d8ead586540531a0350d7624f1ea7f48dccb80388c099b3ba388a8bab0c5adf2_prof);

        
        $__internal_70e7738b06d503a67a8f6abf9ab6f4eaa6e1132ed75ea1ec1e138eb05cdba7f2->leave($__internal_70e7738b06d503a67a8f6abf9ab6f4eaa6e1132ed75ea1ec1e138eb05cdba7f2_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_91868628036cc1dd55e61cc9b15f2d65f91e3521745ee2159cf232c65731712f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91868628036cc1dd55e61cc9b15f2d65f91e3521745ee2159cf232c65731712f->enter($__internal_91868628036cc1dd55e61cc9b15f2d65f91e3521745ee2159cf232c65731712f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_b86fb60811a03127effbce2f74bc089face1d47cdd981cf4a444f3edf83356b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b86fb60811a03127effbce2f74bc089face1d47cdd981cf4a444f3edf83356b3->enter($__internal_b86fb60811a03127effbce2f74bc089face1d47cdd981cf4a444f3edf83356b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 66
        if (array_key_exists("widget", $context)) {
            // line 67
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 67, $this->getSourceContext()); })())) {
                // line 68
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 68, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 70
            if (array_key_exists("parent_label_class", $context)) {
                // line 71
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 71, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 71, $this->getSourceContext()); })())))));
            }
            // line 73
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })())))) {
                // line 74
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 74, $this->getSourceContext()); })()))) {
                    // line 75
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 75, $this->getSourceContext()); })()), array("%name%" =>                     // line 76
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 76, $this->getSourceContext()); })()), "%id%" =>                     // line 77
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 77, $this->getSourceContext()); })())));
                } else {
                    // line 80
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 80, $this->getSourceContext()); })()));
                }
            }
            // line 83
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 83, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 84
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 84, $this->getSourceContext()); })());
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            // line 85
            echo "</label>";
        }
        
        $__internal_b86fb60811a03127effbce2f74bc089face1d47cdd981cf4a444f3edf83356b3->leave($__internal_b86fb60811a03127effbce2f74bc089face1d47cdd981cf4a444f3edf83356b3_prof);

        
        $__internal_91868628036cc1dd55e61cc9b15f2d65f91e3521745ee2159cf232c65731712f->leave($__internal_91868628036cc1dd55e61cc9b15f2d65f91e3521745ee2159cf232c65731712f_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_4e2186c07491224108ed6334a532fc4f062f2c48067679371d06d8f595f423be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e2186c07491224108ed6334a532fc4f062f2c48067679371d06d8f595f423be->enter($__internal_4e2186c07491224108ed6334a532fc4f062f2c48067679371d06d8f595f423be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_11a1f8ce94579102f9b0b7fb573efe2938c246643119a6b55482845f6fd23fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a1f8ce94579102f9b0b7fb573efe2938c246643119a6b55482845f6fd23fd5->enter($__internal_11a1f8ce94579102f9b0b7fb573efe2938c246643119a6b55482845f6fd23fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 92
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 92, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 92, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 92, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->getSourceContext()); })()), 'label');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->getSourceContext()); })()), 'widget');
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->getSourceContext()); })()), 'errors');
        // line 96
        echo "</div>";
        
        $__internal_11a1f8ce94579102f9b0b7fb573efe2938c246643119a6b55482845f6fd23fd5->leave($__internal_11a1f8ce94579102f9b0b7fb573efe2938c246643119a6b55482845f6fd23fd5_prof);

        
        $__internal_4e2186c07491224108ed6334a532fc4f062f2c48067679371d06d8f595f423be->leave($__internal_4e2186c07491224108ed6334a532fc4f062f2c48067679371d06d8f595f423be_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_1adf73be57cf1ccc528b3c9e3cfc92e90fc0a8f519e86e38b95546a390b1ca46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1adf73be57cf1ccc528b3c9e3cfc92e90fc0a8f519e86e38b95546a390b1ca46->enter($__internal_1adf73be57cf1ccc528b3c9e3cfc92e90fc0a8f519e86e38b95546a390b1ca46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_6783e2f605c34379532869c1244799e9cf3edaea73b08a2497ef0b326ac99b00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6783e2f605c34379532869c1244799e9cf3edaea73b08a2497ef0b326ac99b00->enter($__internal_6783e2f605c34379532869c1244799e9cf3edaea73b08a2497ef0b326ac99b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_6783e2f605c34379532869c1244799e9cf3edaea73b08a2497ef0b326ac99b00->leave($__internal_6783e2f605c34379532869c1244799e9cf3edaea73b08a2497ef0b326ac99b00_prof);

        
        $__internal_1adf73be57cf1ccc528b3c9e3cfc92e90fc0a8f519e86e38b95546a390b1ca46->leave($__internal_1adf73be57cf1ccc528b3c9e3cfc92e90fc0a8f519e86e38b95546a390b1ca46_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_fad8143badc8b7a772cc0cb4076a500cf15166cd548fb28542c80642e0b5c08e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fad8143badc8b7a772cc0cb4076a500cf15166cd548fb28542c80642e0b5c08e->enter($__internal_fad8143badc8b7a772cc0cb4076a500cf15166cd548fb28542c80642e0b5c08e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_76bd20d5c304c68824f7baee04a2530f403e1efb3f274e7ec5cad11229085417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76bd20d5c304c68824f7baee04a2530f403e1efb3f274e7ec5cad11229085417->enter($__internal_76bd20d5c304c68824f7baee04a2530f403e1efb3f274e7ec5cad11229085417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_76bd20d5c304c68824f7baee04a2530f403e1efb3f274e7ec5cad11229085417->leave($__internal_76bd20d5c304c68824f7baee04a2530f403e1efb3f274e7ec5cad11229085417_prof);

        
        $__internal_fad8143badc8b7a772cc0cb4076a500cf15166cd548fb28542c80642e0b5c08e->leave($__internal_fad8143badc8b7a772cc0cb4076a500cf15166cd548fb28542c80642e0b5c08e_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_bde8ab03252b13b593cb32acca6c96e58f36aff24406af52614fd17ec9d7218b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bde8ab03252b13b593cb32acca6c96e58f36aff24406af52614fd17ec9d7218b->enter($__internal_bde8ab03252b13b593cb32acca6c96e58f36aff24406af52614fd17ec9d7218b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_21b98d0700433cf80390d42682ff9a4e5db366bf2c8fb6eca7fc99108cd84040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b98d0700433cf80390d42682ff9a4e5db366bf2c8fb6eca7fc99108cd84040->enter($__internal_21b98d0700433cf80390d42682ff9a4e5db366bf2c8fb6eca7fc99108cd84040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_21b98d0700433cf80390d42682ff9a4e5db366bf2c8fb6eca7fc99108cd84040->leave($__internal_21b98d0700433cf80390d42682ff9a4e5db366bf2c8fb6eca7fc99108cd84040_prof);

        
        $__internal_bde8ab03252b13b593cb32acca6c96e58f36aff24406af52614fd17ec9d7218b->leave($__internal_bde8ab03252b13b593cb32acca6c96e58f36aff24406af52614fd17ec9d7218b_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_9a7b5405e663c8fe74134e50c9ff2c87d0d93c582e51ab50ef0b46ee582b6dfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a7b5405e663c8fe74134e50c9ff2c87d0d93c582e51ab50ef0b46ee582b6dfd->enter($__internal_9a7b5405e663c8fe74134e50c9ff2c87d0d93c582e51ab50ef0b46ee582b6dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_79fb5b7789d3d78664c7153b9816c25a87e81bc4159238f5ae91ec3c16ab70df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79fb5b7789d3d78664c7153b9816c25a87e81bc4159238f5ae91ec3c16ab70df->enter($__internal_79fb5b7789d3d78664c7153b9816c25a87e81bc4159238f5ae91ec3c16ab70df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_79fb5b7789d3d78664c7153b9816c25a87e81bc4159238f5ae91ec3c16ab70df->leave($__internal_79fb5b7789d3d78664c7153b9816c25a87e81bc4159238f5ae91ec3c16ab70df_prof);

        
        $__internal_9a7b5405e663c8fe74134e50c9ff2c87d0d93c582e51ab50ef0b46ee582b6dfd->leave($__internal_9a7b5405e663c8fe74134e50c9ff2c87d0d93c582e51ab50ef0b46ee582b6dfd_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_0baa94f10753ba6b5f1218778e9421aa5182328bd1c962ee8fd4aecaa087d743 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0baa94f10753ba6b5f1218778e9421aa5182328bd1c962ee8fd4aecaa087d743->enter($__internal_0baa94f10753ba6b5f1218778e9421aa5182328bd1c962ee8fd4aecaa087d743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_1ad553a9aa1709ae82b492f21a94bf2cc46f969a455e3e04255d5cd294f8884b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad553a9aa1709ae82b492f21a94bf2cc46f969a455e3e04255d5cd294f8884b->enter($__internal_1ad553a9aa1709ae82b492f21a94bf2cc46f969a455e3e04255d5cd294f8884b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1ad553a9aa1709ae82b492f21a94bf2cc46f969a455e3e04255d5cd294f8884b->leave($__internal_1ad553a9aa1709ae82b492f21a94bf2cc46f969a455e3e04255d5cd294f8884b_prof);

        
        $__internal_0baa94f10753ba6b5f1218778e9421aa5182328bd1c962ee8fd4aecaa087d743->leave($__internal_0baa94f10753ba6b5f1218778e9421aa5182328bd1c962ee8fd4aecaa087d743_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_d44328b828df3ef77de0f576fa8170839e35026bbe5b8c64a2f43e8a583bb161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d44328b828df3ef77de0f576fa8170839e35026bbe5b8c64a2f43e8a583bb161->enter($__internal_d44328b828df3ef77de0f576fa8170839e35026bbe5b8c64a2f43e8a583bb161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_b79e5d83e210dc1d662ead7ae2c0c865243f90885057e32c97df0fc9df1d710d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79e5d83e210dc1d662ead7ae2c0c865243f90885057e32c97df0fc9df1d710d->enter($__internal_b79e5d83e210dc1d662ead7ae2c0c865243f90885057e32c97df0fc9df1d710d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 126
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 126, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 127, $this->getSourceContext()); })()), 'widget');
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), 'errors');
        // line 129
        echo "</div>";
        
        $__internal_b79e5d83e210dc1d662ead7ae2c0c865243f90885057e32c97df0fc9df1d710d->leave($__internal_b79e5d83e210dc1d662ead7ae2c0c865243f90885057e32c97df0fc9df1d710d_prof);

        
        $__internal_d44328b828df3ef77de0f576fa8170839e35026bbe5b8c64a2f43e8a583bb161->leave($__internal_d44328b828df3ef77de0f576fa8170839e35026bbe5b8c64a2f43e8a583bb161_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_be65f2a3310482d2cfa52eddfcb772683a064548076a9a8801c2e95419ca8358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be65f2a3310482d2cfa52eddfcb772683a064548076a9a8801c2e95419ca8358->enter($__internal_be65f2a3310482d2cfa52eddfcb772683a064548076a9a8801c2e95419ca8358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_b7f7dae55798a771967bef1d8654403153bbf3e843345a2b5fe4a5d0a42399a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7f7dae55798a771967bef1d8654403153bbf3e843345a2b5fe4a5d0a42399a1->enter($__internal_b7f7dae55798a771967bef1d8654403153bbf3e843345a2b5fe4a5d0a42399a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 133
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 133, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), 'widget');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 135, $this->getSourceContext()); })()), 'errors');
        // line 136
        echo "</div>";
        
        $__internal_b7f7dae55798a771967bef1d8654403153bbf3e843345a2b5fe4a5d0a42399a1->leave($__internal_b7f7dae55798a771967bef1d8654403153bbf3e843345a2b5fe4a5d0a42399a1_prof);

        
        $__internal_be65f2a3310482d2cfa52eddfcb772683a064548076a9a8801c2e95419ca8358->leave($__internal_be65f2a3310482d2cfa52eddfcb772683a064548076a9a8801c2e95419ca8358_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_0749912fdaf253eac7486270e8ab001e6c57e8f1870023a295cf4904c44f8b9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0749912fdaf253eac7486270e8ab001e6c57e8f1870023a295cf4904c44f8b9a->enter($__internal_0749912fdaf253eac7486270e8ab001e6c57e8f1870023a295cf4904c44f8b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_9dfc6eb628ee3708399d54df3a3e7970e0b0ffe86f25af4d29a15ae701658ed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dfc6eb628ee3708399d54df3a3e7970e0b0ffe86f25af4d29a15ae701658ed3->enter($__internal_9dfc6eb628ee3708399d54df3a3e7970e0b0ffe86f25af4d29a15ae701658ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 142
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 142, $this->getSourceContext()); })())) > 0)) {
            // line 143
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 144
            echo "    <ul class=\"list-unstyled\">";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 145, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 146
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</ul>
    ";
            // line 149
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 149, $this->getSourceContext()); })()))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_9dfc6eb628ee3708399d54df3a3e7970e0b0ffe86f25af4d29a15ae701658ed3->leave($__internal_9dfc6eb628ee3708399d54df3a3e7970e0b0ffe86f25af4d29a15ae701658ed3_prof);

        
        $__internal_0749912fdaf253eac7486270e8ab001e6c57e8f1870023a295cf4904c44f8b9a->leave($__internal_0749912fdaf253eac7486270e8ab001e6c57e8f1870023a295cf4904c44f8b9a_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  650 => 149,  647 => 148,  639 => 146,  635 => 145,  633 => 144,  627 => 143,  625 => 142,  616 => 141,  606 => 136,  604 => 135,  602 => 134,  596 => 133,  587 => 132,  577 => 129,  575 => 128,  573 => 127,  567 => 126,  558 => 125,  548 => 122,  546 => 121,  537 => 120,  527 => 117,  525 => 116,  516 => 115,  506 => 112,  504 => 111,  495 => 110,  485 => 107,  483 => 106,  474 => 105,  464 => 102,  462 => 101,  460 => 100,  451 => 99,  441 => 96,  439 => 95,  437 => 94,  435 => 93,  429 => 92,  420 => 91,  409 => 85,  405 => 84,  390 => 83,  386 => 80,  383 => 77,  382 => 76,  381 => 75,  379 => 74,  377 => 73,  374 => 71,  372 => 70,  369 => 68,  367 => 67,  365 => 66,  356 => 64,  346 => 61,  344 => 59,  335 => 58,  325 => 55,  323 => 53,  314 => 52,  304 => 49,  302 => 48,  293 => 46,  283 => 43,  281 => 42,  272 => 41,  261 => 35,  259 => 34,  257 => 33,  254 => 31,  252 => 30,  250 => 29,  241 => 28,  230 => 24,  228 => 23,  226 => 22,  223 => 20,  221 => 19,  219 => 18,  210 => 17,  200 => 14,  198 => 13,  189 => 12,  179 => 9,  176 => 7,  174 => 6,  165 => 5,  155 => 141,  152 => 140,  149 => 138,  147 => 132,  144 => 131,  142 => 125,  139 => 124,  137 => 120,  134 => 119,  132 => 115,  129 => 114,  127 => 110,  124 => 109,  122 => 105,  119 => 104,  117 => 99,  114 => 98,  112 => 91,  109 => 90,  106 => 88,  104 => 64,  101 => 63,  99 => 58,  96 => 57,  94 => 52,  91 => 51,  89 => 46,  86 => 45,  84 => 41,  81 => 40,  78 => 38,  76 => 28,  73 => 27,  71 => 17,  68 => 16,  66 => 12,  63 => 11,  61 => 5,  58 => 4,  55 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {%- if widget is defined -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
