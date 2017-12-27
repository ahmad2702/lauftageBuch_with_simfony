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
        $__internal_9c11297be50eb031bb0878738dd46a04949283e42fbf2ebb821bf0dd461270fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c11297be50eb031bb0878738dd46a04949283e42fbf2ebb821bf0dd461270fe->enter($__internal_9c11297be50eb031bb0878738dd46a04949283e42fbf2ebb821bf0dd461270fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_52f02bbc8652dbc281f64cfa335441f5bd06bb836265d37a55a326f22eb91208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f02bbc8652dbc281f64cfa335441f5bd06bb836265d37a55a326f22eb91208->enter($__internal_52f02bbc8652dbc281f64cfa335441f5bd06bb836265d37a55a326f22eb91208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_9c11297be50eb031bb0878738dd46a04949283e42fbf2ebb821bf0dd461270fe->leave($__internal_9c11297be50eb031bb0878738dd46a04949283e42fbf2ebb821bf0dd461270fe_prof);

        
        $__internal_52f02bbc8652dbc281f64cfa335441f5bd06bb836265d37a55a326f22eb91208->leave($__internal_52f02bbc8652dbc281f64cfa335441f5bd06bb836265d37a55a326f22eb91208_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_26bc21460928a75fb66ca66da89f6ba46b65e70d561b8a3580a5a2e44bfd1c22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26bc21460928a75fb66ca66da89f6ba46b65e70d561b8a3580a5a2e44bfd1c22->enter($__internal_26bc21460928a75fb66ca66da89f6ba46b65e70d561b8a3580a5a2e44bfd1c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_9f693c5385d79831197f2613138cc8007cedcf3935d0206f0cf5374b140a83fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f693c5385d79831197f2613138cc8007cedcf3935d0206f0cf5374b140a83fb->enter($__internal_9f693c5385d79831197f2613138cc8007cedcf3935d0206f0cf5374b140a83fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_9f693c5385d79831197f2613138cc8007cedcf3935d0206f0cf5374b140a83fb->leave($__internal_9f693c5385d79831197f2613138cc8007cedcf3935d0206f0cf5374b140a83fb_prof);

        
        $__internal_26bc21460928a75fb66ca66da89f6ba46b65e70d561b8a3580a5a2e44bfd1c22->leave($__internal_26bc21460928a75fb66ca66da89f6ba46b65e70d561b8a3580a5a2e44bfd1c22_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_c65313eeb233f928b71ed4890daf8e4815b485e71c986e06e5492533fd2783f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c65313eeb233f928b71ed4890daf8e4815b485e71c986e06e5492533fd2783f6->enter($__internal_c65313eeb233f928b71ed4890daf8e4815b485e71c986e06e5492533fd2783f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_38c125b1f96af937a2de55efcf7850008604fc84565c2325741382a0ab414fd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c125b1f96af937a2de55efcf7850008604fc84565c2325741382a0ab414fd7->enter($__internal_38c125b1f96af937a2de55efcf7850008604fc84565c2325741382a0ab414fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_38c125b1f96af937a2de55efcf7850008604fc84565c2325741382a0ab414fd7->leave($__internal_38c125b1f96af937a2de55efcf7850008604fc84565c2325741382a0ab414fd7_prof);

        
        $__internal_c65313eeb233f928b71ed4890daf8e4815b485e71c986e06e5492533fd2783f6->leave($__internal_c65313eeb233f928b71ed4890daf8e4815b485e71c986e06e5492533fd2783f6_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_bb454432f751c0c44e750711c88dae64a677252460fbc0ba2eb5be10469b8369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb454432f751c0c44e750711c88dae64a677252460fbc0ba2eb5be10469b8369->enter($__internal_bb454432f751c0c44e750711c88dae64a677252460fbc0ba2eb5be10469b8369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_51a0ba51376a8aaab375c1185bd64656cd5239ae7776374f45537ea38726e3bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a0ba51376a8aaab375c1185bd64656cd5239ae7776374f45537ea38726e3bb->enter($__internal_51a0ba51376a8aaab375c1185bd64656cd5239ae7776374f45537ea38726e3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_51a0ba51376a8aaab375c1185bd64656cd5239ae7776374f45537ea38726e3bb->leave($__internal_51a0ba51376a8aaab375c1185bd64656cd5239ae7776374f45537ea38726e3bb_prof);

        
        $__internal_bb454432f751c0c44e750711c88dae64a677252460fbc0ba2eb5be10469b8369->leave($__internal_bb454432f751c0c44e750711c88dae64a677252460fbc0ba2eb5be10469b8369_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_1c3bb993ccaf376ef1b1238bce40d026fd21991c0956c52003b2788dd23d7191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c3bb993ccaf376ef1b1238bce40d026fd21991c0956c52003b2788dd23d7191->enter($__internal_1c3bb993ccaf376ef1b1238bce40d026fd21991c0956c52003b2788dd23d7191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_f5e698ac999ea7098aa44826d10bcc56ab8276f87d0e981024b2fa444fe2725a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e698ac999ea7098aa44826d10bcc56ab8276f87d0e981024b2fa444fe2725a->enter($__internal_f5e698ac999ea7098aa44826d10bcc56ab8276f87d0e981024b2fa444fe2725a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_f5e698ac999ea7098aa44826d10bcc56ab8276f87d0e981024b2fa444fe2725a->leave($__internal_f5e698ac999ea7098aa44826d10bcc56ab8276f87d0e981024b2fa444fe2725a_prof);

        
        $__internal_1c3bb993ccaf376ef1b1238bce40d026fd21991c0956c52003b2788dd23d7191->leave($__internal_1c3bb993ccaf376ef1b1238bce40d026fd21991c0956c52003b2788dd23d7191_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_02f2d9b4f1957fb46dfeb60374ab72a9190094ab74f35a082827ca4e76ce8034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02f2d9b4f1957fb46dfeb60374ab72a9190094ab74f35a082827ca4e76ce8034->enter($__internal_02f2d9b4f1957fb46dfeb60374ab72a9190094ab74f35a082827ca4e76ce8034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_8dac775cf832b7df0f7614ac18f5881396fb3c2b140de6ad3950c273f14aafe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dac775cf832b7df0f7614ac18f5881396fb3c2b140de6ad3950c273f14aafe1->enter($__internal_8dac775cf832b7df0f7614ac18f5881396fb3c2b140de6ad3950c273f14aafe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_8dac775cf832b7df0f7614ac18f5881396fb3c2b140de6ad3950c273f14aafe1->leave($__internal_8dac775cf832b7df0f7614ac18f5881396fb3c2b140de6ad3950c273f14aafe1_prof);

        
        $__internal_02f2d9b4f1957fb46dfeb60374ab72a9190094ab74f35a082827ca4e76ce8034->leave($__internal_02f2d9b4f1957fb46dfeb60374ab72a9190094ab74f35a082827ca4e76ce8034_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_4f74e8e7b3ff21b7e79f33f13df75c5b4a1c7ece7e27bd88c4083765fbccf351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f74e8e7b3ff21b7e79f33f13df75c5b4a1c7ece7e27bd88c4083765fbccf351->enter($__internal_4f74e8e7b3ff21b7e79f33f13df75c5b4a1c7ece7e27bd88c4083765fbccf351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_0a88247a7338a2f6154fbfe7374b1a67fb2f3aa06522d5a686bf1b2c4a04fa16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a88247a7338a2f6154fbfe7374b1a67fb2f3aa06522d5a686bf1b2c4a04fa16->enter($__internal_0a88247a7338a2f6154fbfe7374b1a67fb2f3aa06522d5a686bf1b2c4a04fa16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_0a88247a7338a2f6154fbfe7374b1a67fb2f3aa06522d5a686bf1b2c4a04fa16->leave($__internal_0a88247a7338a2f6154fbfe7374b1a67fb2f3aa06522d5a686bf1b2c4a04fa16_prof);

        
        $__internal_4f74e8e7b3ff21b7e79f33f13df75c5b4a1c7ece7e27bd88c4083765fbccf351->leave($__internal_4f74e8e7b3ff21b7e79f33f13df75c5b4a1c7ece7e27bd88c4083765fbccf351_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_7101d342804be852facb6b55930d6a8e91d04b7cc7074dc43d6aa3552718722e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7101d342804be852facb6b55930d6a8e91d04b7cc7074dc43d6aa3552718722e->enter($__internal_7101d342804be852facb6b55930d6a8e91d04b7cc7074dc43d6aa3552718722e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_c2feb0fff9583bcf307105db03d62e2a47c942d1b7693e5eb4103777538759ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2feb0fff9583bcf307105db03d62e2a47c942d1b7693e5eb4103777538759ab->enter($__internal_c2feb0fff9583bcf307105db03d62e2a47c942d1b7693e5eb4103777538759ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c2feb0fff9583bcf307105db03d62e2a47c942d1b7693e5eb4103777538759ab->leave($__internal_c2feb0fff9583bcf307105db03d62e2a47c942d1b7693e5eb4103777538759ab_prof);

        
        $__internal_7101d342804be852facb6b55930d6a8e91d04b7cc7074dc43d6aa3552718722e->leave($__internal_7101d342804be852facb6b55930d6a8e91d04b7cc7074dc43d6aa3552718722e_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_000259cebfd1ba0d95949999a875fde84c5c39b736e411af801a788ec180c470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_000259cebfd1ba0d95949999a875fde84c5c39b736e411af801a788ec180c470->enter($__internal_000259cebfd1ba0d95949999a875fde84c5c39b736e411af801a788ec180c470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_57dfd32192dda965f1958601b405fd856ce72efea023bb9cbf5ecbfe3da0290d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57dfd32192dda965f1958601b405fd856ce72efea023bb9cbf5ecbfe3da0290d->enter($__internal_57dfd32192dda965f1958601b405fd856ce72efea023bb9cbf5ecbfe3da0290d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_57dfd32192dda965f1958601b405fd856ce72efea023bb9cbf5ecbfe3da0290d->leave($__internal_57dfd32192dda965f1958601b405fd856ce72efea023bb9cbf5ecbfe3da0290d_prof);

        
        $__internal_000259cebfd1ba0d95949999a875fde84c5c39b736e411af801a788ec180c470->leave($__internal_000259cebfd1ba0d95949999a875fde84c5c39b736e411af801a788ec180c470_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_392ffe8543778eee8bc5f00a5c64aa39f09e1a423b7f87f3a0f50818a0704621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_392ffe8543778eee8bc5f00a5c64aa39f09e1a423b7f87f3a0f50818a0704621->enter($__internal_392ffe8543778eee8bc5f00a5c64aa39f09e1a423b7f87f3a0f50818a0704621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_0fb98ab52e55c77eb2a62cf076e2f0a8a214b95e22229c9885569953bd856c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb98ab52e55c77eb2a62cf076e2f0a8a214b95e22229c9885569953bd856c6b->enter($__internal_0fb98ab52e55c77eb2a62cf076e2f0a8a214b95e22229c9885569953bd856c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_0fb98ab52e55c77eb2a62cf076e2f0a8a214b95e22229c9885569953bd856c6b->leave($__internal_0fb98ab52e55c77eb2a62cf076e2f0a8a214b95e22229c9885569953bd856c6b_prof);

        
        $__internal_392ffe8543778eee8bc5f00a5c64aa39f09e1a423b7f87f3a0f50818a0704621->leave($__internal_392ffe8543778eee8bc5f00a5c64aa39f09e1a423b7f87f3a0f50818a0704621_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ed684da9d8e0b9ddbd887656912e7a4d98b1b5537b447d2dd8ce4c159f652315 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed684da9d8e0b9ddbd887656912e7a4d98b1b5537b447d2dd8ce4c159f652315->enter($__internal_ed684da9d8e0b9ddbd887656912e7a4d98b1b5537b447d2dd8ce4c159f652315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_fa22bd23fb18f201d846077dd677174cf508e96972fcc0130c96be771792cfb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa22bd23fb18f201d846077dd677174cf508e96972fcc0130c96be771792cfb4->enter($__internal_fa22bd23fb18f201d846077dd677174cf508e96972fcc0130c96be771792cfb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_fa22bd23fb18f201d846077dd677174cf508e96972fcc0130c96be771792cfb4->leave($__internal_fa22bd23fb18f201d846077dd677174cf508e96972fcc0130c96be771792cfb4_prof);

        
        $__internal_ed684da9d8e0b9ddbd887656912e7a4d98b1b5537b447d2dd8ce4c159f652315->leave($__internal_ed684da9d8e0b9ddbd887656912e7a4d98b1b5537b447d2dd8ce4c159f652315_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_35275c7aedd42985e4dacfed71c8a299f73d425f08b8f4696fcc4f731f6e887a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35275c7aedd42985e4dacfed71c8a299f73d425f08b8f4696fcc4f731f6e887a->enter($__internal_35275c7aedd42985e4dacfed71c8a299f73d425f08b8f4696fcc4f731f6e887a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_233d8fe05d25d0abbd876a346e52ed5ed1f6b47db45faffe3beb47f45844fefe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233d8fe05d25d0abbd876a346e52ed5ed1f6b47db45faffe3beb47f45844fefe->enter($__internal_233d8fe05d25d0abbd876a346e52ed5ed1f6b47db45faffe3beb47f45844fefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_233d8fe05d25d0abbd876a346e52ed5ed1f6b47db45faffe3beb47f45844fefe->leave($__internal_233d8fe05d25d0abbd876a346e52ed5ed1f6b47db45faffe3beb47f45844fefe_prof);

        
        $__internal_35275c7aedd42985e4dacfed71c8a299f73d425f08b8f4696fcc4f731f6e887a->leave($__internal_35275c7aedd42985e4dacfed71c8a299f73d425f08b8f4696fcc4f731f6e887a_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_5722e5a5e2560123387364758d6e2d5e3ab9187b6d42236374cb711c7a08f355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5722e5a5e2560123387364758d6e2d5e3ab9187b6d42236374cb711c7a08f355->enter($__internal_5722e5a5e2560123387364758d6e2d5e3ab9187b6d42236374cb711c7a08f355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_1bf4b26438f4002ebee360093fa31afdcb76d0500c0d4ca41acfc5f57a76de4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bf4b26438f4002ebee360093fa31afdcb76d0500c0d4ca41acfc5f57a76de4a->enter($__internal_1bf4b26438f4002ebee360093fa31afdcb76d0500c0d4ca41acfc5f57a76de4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1bf4b26438f4002ebee360093fa31afdcb76d0500c0d4ca41acfc5f57a76de4a->leave($__internal_1bf4b26438f4002ebee360093fa31afdcb76d0500c0d4ca41acfc5f57a76de4a_prof);

        
        $__internal_5722e5a5e2560123387364758d6e2d5e3ab9187b6d42236374cb711c7a08f355->leave($__internal_5722e5a5e2560123387364758d6e2d5e3ab9187b6d42236374cb711c7a08f355_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_2709b7602e5e8a0d23d9ca1c2d1adb769b31f539a08c86957088cc72372ea85e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2709b7602e5e8a0d23d9ca1c2d1adb769b31f539a08c86957088cc72372ea85e->enter($__internal_2709b7602e5e8a0d23d9ca1c2d1adb769b31f539a08c86957088cc72372ea85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_13203a31acc5e5f45ef5ec5e8d84c6554f1118b708f367ab4c071ec508665e50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13203a31acc5e5f45ef5ec5e8d84c6554f1118b708f367ab4c071ec508665e50->enter($__internal_13203a31acc5e5f45ef5ec5e8d84c6554f1118b708f367ab4c071ec508665e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_13203a31acc5e5f45ef5ec5e8d84c6554f1118b708f367ab4c071ec508665e50->leave($__internal_13203a31acc5e5f45ef5ec5e8d84c6554f1118b708f367ab4c071ec508665e50_prof);

        
        $__internal_2709b7602e5e8a0d23d9ca1c2d1adb769b31f539a08c86957088cc72372ea85e->leave($__internal_2709b7602e5e8a0d23d9ca1c2d1adb769b31f539a08c86957088cc72372ea85e_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_bf4e8a99d97abb791364c364eace05943ba2619513afb08e8e213d367cf284c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf4e8a99d97abb791364c364eace05943ba2619513afb08e8e213d367cf284c5->enter($__internal_bf4e8a99d97abb791364c364eace05943ba2619513afb08e8e213d367cf284c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_0ba125c1b7e270dff0d3189f070d214cc2c465a6486dde46673974f3d078178f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ba125c1b7e270dff0d3189f070d214cc2c465a6486dde46673974f3d078178f->enter($__internal_0ba125c1b7e270dff0d3189f070d214cc2c465a6486dde46673974f3d078178f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0ba125c1b7e270dff0d3189f070d214cc2c465a6486dde46673974f3d078178f->leave($__internal_0ba125c1b7e270dff0d3189f070d214cc2c465a6486dde46673974f3d078178f_prof);

        
        $__internal_bf4e8a99d97abb791364c364eace05943ba2619513afb08e8e213d367cf284c5->leave($__internal_bf4e8a99d97abb791364c364eace05943ba2619513afb08e8e213d367cf284c5_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_aded70cc95b97e8badf683f541d100ec703affdd08faa8c10d6320a50fa61db5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aded70cc95b97e8badf683f541d100ec703affdd08faa8c10d6320a50fa61db5->enter($__internal_aded70cc95b97e8badf683f541d100ec703affdd08faa8c10d6320a50fa61db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_326714d3ebf05d80e15f52efe4c1d8d28a54a29eb30115b2896c42cf0e5c71da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_326714d3ebf05d80e15f52efe4c1d8d28a54a29eb30115b2896c42cf0e5c71da->enter($__internal_326714d3ebf05d80e15f52efe4c1d8d28a54a29eb30115b2896c42cf0e5c71da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_326714d3ebf05d80e15f52efe4c1d8d28a54a29eb30115b2896c42cf0e5c71da->leave($__internal_326714d3ebf05d80e15f52efe4c1d8d28a54a29eb30115b2896c42cf0e5c71da_prof);

        
        $__internal_aded70cc95b97e8badf683f541d100ec703affdd08faa8c10d6320a50fa61db5->leave($__internal_aded70cc95b97e8badf683f541d100ec703affdd08faa8c10d6320a50fa61db5_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_56583f625c354be7d2d2092ae221f070b088d851675c465137faef04cf56983a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56583f625c354be7d2d2092ae221f070b088d851675c465137faef04cf56983a->enter($__internal_56583f625c354be7d2d2092ae221f070b088d851675c465137faef04cf56983a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_63e8ac3dd11ac861ae1ae8faa5fc82d076a71af08e9fab77f322fdb3820c6511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e8ac3dd11ac861ae1ae8faa5fc82d076a71af08e9fab77f322fdb3820c6511->enter($__internal_63e8ac3dd11ac861ae1ae8faa5fc82d076a71af08e9fab77f322fdb3820c6511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_63e8ac3dd11ac861ae1ae8faa5fc82d076a71af08e9fab77f322fdb3820c6511->leave($__internal_63e8ac3dd11ac861ae1ae8faa5fc82d076a71af08e9fab77f322fdb3820c6511_prof);

        
        $__internal_56583f625c354be7d2d2092ae221f070b088d851675c465137faef04cf56983a->leave($__internal_56583f625c354be7d2d2092ae221f070b088d851675c465137faef04cf56983a_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_937e5994591aa2bb55a9b4a9edc9b49da204df465f11ff8d38c9d29ff55d8d26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_937e5994591aa2bb55a9b4a9edc9b49da204df465f11ff8d38c9d29ff55d8d26->enter($__internal_937e5994591aa2bb55a9b4a9edc9b49da204df465f11ff8d38c9d29ff55d8d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_fcb278540ee64c342b629bba0b8d23b1fd085d5b1098b1c713d41f7f636e4b5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb278540ee64c342b629bba0b8d23b1fd085d5b1098b1c713d41f7f636e4b5d->enter($__internal_fcb278540ee64c342b629bba0b8d23b1fd085d5b1098b1c713d41f7f636e4b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_fcb278540ee64c342b629bba0b8d23b1fd085d5b1098b1c713d41f7f636e4b5d->leave($__internal_fcb278540ee64c342b629bba0b8d23b1fd085d5b1098b1c713d41f7f636e4b5d_prof);

        
        $__internal_937e5994591aa2bb55a9b4a9edc9b49da204df465f11ff8d38c9d29ff55d8d26->leave($__internal_937e5994591aa2bb55a9b4a9edc9b49da204df465f11ff8d38c9d29ff55d8d26_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_b74169c2a7f3776fbaffb1a33e06617ebd906730d7aa2611bd6145ab37220acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b74169c2a7f3776fbaffb1a33e06617ebd906730d7aa2611bd6145ab37220acd->enter($__internal_b74169c2a7f3776fbaffb1a33e06617ebd906730d7aa2611bd6145ab37220acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_3538631bcb0a605e9ae7710e90ffa4b196b4f48af3fad7712ca806d4449e05b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3538631bcb0a605e9ae7710e90ffa4b196b4f48af3fad7712ca806d4449e05b9->enter($__internal_3538631bcb0a605e9ae7710e90ffa4b196b4f48af3fad7712ca806d4449e05b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_3538631bcb0a605e9ae7710e90ffa4b196b4f48af3fad7712ca806d4449e05b9->leave($__internal_3538631bcb0a605e9ae7710e90ffa4b196b4f48af3fad7712ca806d4449e05b9_prof);

        
        $__internal_b74169c2a7f3776fbaffb1a33e06617ebd906730d7aa2611bd6145ab37220acd->leave($__internal_b74169c2a7f3776fbaffb1a33e06617ebd906730d7aa2611bd6145ab37220acd_prof);

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
