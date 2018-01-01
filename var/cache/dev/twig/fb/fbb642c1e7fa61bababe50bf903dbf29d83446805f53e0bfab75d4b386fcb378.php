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
        $__internal_104851e40eb649823c485e53ad4137e49593aca43dfdcdcf87d102d14e9a4733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_104851e40eb649823c485e53ad4137e49593aca43dfdcdcf87d102d14e9a4733->enter($__internal_104851e40eb649823c485e53ad4137e49593aca43dfdcdcf87d102d14e9a4733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_a5e200be2da02dad757f7d1bba67ae48df44b7d731edd2c06de1cea71a92f681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e200be2da02dad757f7d1bba67ae48df44b7d731edd2c06de1cea71a92f681->enter($__internal_a5e200be2da02dad757f7d1bba67ae48df44b7d731edd2c06de1cea71a92f681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_104851e40eb649823c485e53ad4137e49593aca43dfdcdcf87d102d14e9a4733->leave($__internal_104851e40eb649823c485e53ad4137e49593aca43dfdcdcf87d102d14e9a4733_prof);

        
        $__internal_a5e200be2da02dad757f7d1bba67ae48df44b7d731edd2c06de1cea71a92f681->leave($__internal_a5e200be2da02dad757f7d1bba67ae48df44b7d731edd2c06de1cea71a92f681_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_2e2cbecf0a29f37250bcd49789defb85ac8551ab972d99ec90a495a53d0c53b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e2cbecf0a29f37250bcd49789defb85ac8551ab972d99ec90a495a53d0c53b6->enter($__internal_2e2cbecf0a29f37250bcd49789defb85ac8551ab972d99ec90a495a53d0c53b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_de7faaa1b4ddfea78bdd5e437793b7b6fddb06ff11041c751d2c299dea4204bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de7faaa1b4ddfea78bdd5e437793b7b6fddb06ff11041c751d2c299dea4204bd->enter($__internal_de7faaa1b4ddfea78bdd5e437793b7b6fddb06ff11041c751d2c299dea4204bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_de7faaa1b4ddfea78bdd5e437793b7b6fddb06ff11041c751d2c299dea4204bd->leave($__internal_de7faaa1b4ddfea78bdd5e437793b7b6fddb06ff11041c751d2c299dea4204bd_prof);

        
        $__internal_2e2cbecf0a29f37250bcd49789defb85ac8551ab972d99ec90a495a53d0c53b6->leave($__internal_2e2cbecf0a29f37250bcd49789defb85ac8551ab972d99ec90a495a53d0c53b6_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_aa248726959b7dee66fc772ba5b7b862d3b43d72fd8a679ccf5df19246c40bdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa248726959b7dee66fc772ba5b7b862d3b43d72fd8a679ccf5df19246c40bdd->enter($__internal_aa248726959b7dee66fc772ba5b7b862d3b43d72fd8a679ccf5df19246c40bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_30be26c4c659a25e8d89b2aa0b4167f976d396e60c8d2506d743c8b5821a54a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30be26c4c659a25e8d89b2aa0b4167f976d396e60c8d2506d743c8b5821a54a1->enter($__internal_30be26c4c659a25e8d89b2aa0b4167f976d396e60c8d2506d743c8b5821a54a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_30be26c4c659a25e8d89b2aa0b4167f976d396e60c8d2506d743c8b5821a54a1->leave($__internal_30be26c4c659a25e8d89b2aa0b4167f976d396e60c8d2506d743c8b5821a54a1_prof);

        
        $__internal_aa248726959b7dee66fc772ba5b7b862d3b43d72fd8a679ccf5df19246c40bdd->leave($__internal_aa248726959b7dee66fc772ba5b7b862d3b43d72fd8a679ccf5df19246c40bdd_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_f12852f46a6c8737a58cf231e030892fec5b88709e0919d93429062a7febc1dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f12852f46a6c8737a58cf231e030892fec5b88709e0919d93429062a7febc1dd->enter($__internal_f12852f46a6c8737a58cf231e030892fec5b88709e0919d93429062a7febc1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_dceb18e7ee3b4db3eaf80fd11f3fe54d25800e2ed8c0e7bf390230f6efc68ac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dceb18e7ee3b4db3eaf80fd11f3fe54d25800e2ed8c0e7bf390230f6efc68ac5->enter($__internal_dceb18e7ee3b4db3eaf80fd11f3fe54d25800e2ed8c0e7bf390230f6efc68ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_dceb18e7ee3b4db3eaf80fd11f3fe54d25800e2ed8c0e7bf390230f6efc68ac5->leave($__internal_dceb18e7ee3b4db3eaf80fd11f3fe54d25800e2ed8c0e7bf390230f6efc68ac5_prof);

        
        $__internal_f12852f46a6c8737a58cf231e030892fec5b88709e0919d93429062a7febc1dd->leave($__internal_f12852f46a6c8737a58cf231e030892fec5b88709e0919d93429062a7febc1dd_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_e11aaa1690e3750092b3f56b6d1ad66c9c2bef41af48008c241d11a99373162e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e11aaa1690e3750092b3f56b6d1ad66c9c2bef41af48008c241d11a99373162e->enter($__internal_e11aaa1690e3750092b3f56b6d1ad66c9c2bef41af48008c241d11a99373162e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_50af58dfeb2b4656cedf6b9062cecd3ae4cd16c9dc3d2711af01be95ac458ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50af58dfeb2b4656cedf6b9062cecd3ae4cd16c9dc3d2711af01be95ac458ffa->enter($__internal_50af58dfeb2b4656cedf6b9062cecd3ae4cd16c9dc3d2711af01be95ac458ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_50af58dfeb2b4656cedf6b9062cecd3ae4cd16c9dc3d2711af01be95ac458ffa->leave($__internal_50af58dfeb2b4656cedf6b9062cecd3ae4cd16c9dc3d2711af01be95ac458ffa_prof);

        
        $__internal_e11aaa1690e3750092b3f56b6d1ad66c9c2bef41af48008c241d11a99373162e->leave($__internal_e11aaa1690e3750092b3f56b6d1ad66c9c2bef41af48008c241d11a99373162e_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_0e464ab4a41e36bc76dbeca922d987489f2cc3dad5e385122d4bca584eb568bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e464ab4a41e36bc76dbeca922d987489f2cc3dad5e385122d4bca584eb568bf->enter($__internal_0e464ab4a41e36bc76dbeca922d987489f2cc3dad5e385122d4bca584eb568bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_3c0bca5e12b39559a17739bb0ba3ac0fecd2a03099cc7ff65fad390b6db341ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0bca5e12b39559a17739bb0ba3ac0fecd2a03099cc7ff65fad390b6db341ff->enter($__internal_3c0bca5e12b39559a17739bb0ba3ac0fecd2a03099cc7ff65fad390b6db341ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_3c0bca5e12b39559a17739bb0ba3ac0fecd2a03099cc7ff65fad390b6db341ff->leave($__internal_3c0bca5e12b39559a17739bb0ba3ac0fecd2a03099cc7ff65fad390b6db341ff_prof);

        
        $__internal_0e464ab4a41e36bc76dbeca922d987489f2cc3dad5e385122d4bca584eb568bf->leave($__internal_0e464ab4a41e36bc76dbeca922d987489f2cc3dad5e385122d4bca584eb568bf_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_5f132c7ee064cd1eb948c0471c31811047f1ec50942fa6044b1698d892ccf914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f132c7ee064cd1eb948c0471c31811047f1ec50942fa6044b1698d892ccf914->enter($__internal_5f132c7ee064cd1eb948c0471c31811047f1ec50942fa6044b1698d892ccf914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_bbd04d13e33ebbcceb16dbda9938bbeefe69ef5f6400e9030fa939baefcfbef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbd04d13e33ebbcceb16dbda9938bbeefe69ef5f6400e9030fa939baefcfbef3->enter($__internal_bbd04d13e33ebbcceb16dbda9938bbeefe69ef5f6400e9030fa939baefcfbef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_bbd04d13e33ebbcceb16dbda9938bbeefe69ef5f6400e9030fa939baefcfbef3->leave($__internal_bbd04d13e33ebbcceb16dbda9938bbeefe69ef5f6400e9030fa939baefcfbef3_prof);

        
        $__internal_5f132c7ee064cd1eb948c0471c31811047f1ec50942fa6044b1698d892ccf914->leave($__internal_5f132c7ee064cd1eb948c0471c31811047f1ec50942fa6044b1698d892ccf914_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_229297a7de39bc53bd46676214380c630ece7fde14cf66e257cae084d2f53fda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_229297a7de39bc53bd46676214380c630ece7fde14cf66e257cae084d2f53fda->enter($__internal_229297a7de39bc53bd46676214380c630ece7fde14cf66e257cae084d2f53fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_42f7e47422a3b1ba8568b6a5d1fd89ac60a213d36a6e4ad646b9e4091ec113fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f7e47422a3b1ba8568b6a5d1fd89ac60a213d36a6e4ad646b9e4091ec113fc->enter($__internal_42f7e47422a3b1ba8568b6a5d1fd89ac60a213d36a6e4ad646b9e4091ec113fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_42f7e47422a3b1ba8568b6a5d1fd89ac60a213d36a6e4ad646b9e4091ec113fc->leave($__internal_42f7e47422a3b1ba8568b6a5d1fd89ac60a213d36a6e4ad646b9e4091ec113fc_prof);

        
        $__internal_229297a7de39bc53bd46676214380c630ece7fde14cf66e257cae084d2f53fda->leave($__internal_229297a7de39bc53bd46676214380c630ece7fde14cf66e257cae084d2f53fda_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_e0f8527e793e720c6cac166dcceebc7c48a48169fe71f7ae943b8a210c5ae74c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f8527e793e720c6cac166dcceebc7c48a48169fe71f7ae943b8a210c5ae74c->enter($__internal_e0f8527e793e720c6cac166dcceebc7c48a48169fe71f7ae943b8a210c5ae74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_6d5414056579e4ac2ca870b4c7ce4e05836deafcb402bed5a9a8e65a1520b37b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d5414056579e4ac2ca870b4c7ce4e05836deafcb402bed5a9a8e65a1520b37b->enter($__internal_6d5414056579e4ac2ca870b4c7ce4e05836deafcb402bed5a9a8e65a1520b37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6d5414056579e4ac2ca870b4c7ce4e05836deafcb402bed5a9a8e65a1520b37b->leave($__internal_6d5414056579e4ac2ca870b4c7ce4e05836deafcb402bed5a9a8e65a1520b37b_prof);

        
        $__internal_e0f8527e793e720c6cac166dcceebc7c48a48169fe71f7ae943b8a210c5ae74c->leave($__internal_e0f8527e793e720c6cac166dcceebc7c48a48169fe71f7ae943b8a210c5ae74c_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_f46db0010f4c377709be8601247b6e7ea91108a2beb582e7cd41fd11264a731c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f46db0010f4c377709be8601247b6e7ea91108a2beb582e7cd41fd11264a731c->enter($__internal_f46db0010f4c377709be8601247b6e7ea91108a2beb582e7cd41fd11264a731c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_69dfc61887504f35cf63ac190b338a52767249510d10c0e8b8c6618637800af7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69dfc61887504f35cf63ac190b338a52767249510d10c0e8b8c6618637800af7->enter($__internal_69dfc61887504f35cf63ac190b338a52767249510d10c0e8b8c6618637800af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_69dfc61887504f35cf63ac190b338a52767249510d10c0e8b8c6618637800af7->leave($__internal_69dfc61887504f35cf63ac190b338a52767249510d10c0e8b8c6618637800af7_prof);

        
        $__internal_f46db0010f4c377709be8601247b6e7ea91108a2beb582e7cd41fd11264a731c->leave($__internal_f46db0010f4c377709be8601247b6e7ea91108a2beb582e7cd41fd11264a731c_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d3ef4c9df3c50679070a5e5247fa84686d4171f6dc2a130fe4616d5665768f85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3ef4c9df3c50679070a5e5247fa84686d4171f6dc2a130fe4616d5665768f85->enter($__internal_d3ef4c9df3c50679070a5e5247fa84686d4171f6dc2a130fe4616d5665768f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_5d34e699fd95d89247ce8784c873af6db855edb41cd8dc05a86ddf26e2546d4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d34e699fd95d89247ce8784c873af6db855edb41cd8dc05a86ddf26e2546d4a->enter($__internal_5d34e699fd95d89247ce8784c873af6db855edb41cd8dc05a86ddf26e2546d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_5d34e699fd95d89247ce8784c873af6db855edb41cd8dc05a86ddf26e2546d4a->leave($__internal_5d34e699fd95d89247ce8784c873af6db855edb41cd8dc05a86ddf26e2546d4a_prof);

        
        $__internal_d3ef4c9df3c50679070a5e5247fa84686d4171f6dc2a130fe4616d5665768f85->leave($__internal_d3ef4c9df3c50679070a5e5247fa84686d4171f6dc2a130fe4616d5665768f85_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_9e77ff749231781645646ebdc422fa8a1bdb68c6cf1d7218ebb54e35b4201729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e77ff749231781645646ebdc422fa8a1bdb68c6cf1d7218ebb54e35b4201729->enter($__internal_9e77ff749231781645646ebdc422fa8a1bdb68c6cf1d7218ebb54e35b4201729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_bb504aa6c923221e5049fa6cb0fbb6a1828eddf62076d4de56a36947dc4fa575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb504aa6c923221e5049fa6cb0fbb6a1828eddf62076d4de56a36947dc4fa575->enter($__internal_bb504aa6c923221e5049fa6cb0fbb6a1828eddf62076d4de56a36947dc4fa575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_bb504aa6c923221e5049fa6cb0fbb6a1828eddf62076d4de56a36947dc4fa575->leave($__internal_bb504aa6c923221e5049fa6cb0fbb6a1828eddf62076d4de56a36947dc4fa575_prof);

        
        $__internal_9e77ff749231781645646ebdc422fa8a1bdb68c6cf1d7218ebb54e35b4201729->leave($__internal_9e77ff749231781645646ebdc422fa8a1bdb68c6cf1d7218ebb54e35b4201729_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_704f58b3734df316562034dc4dd2f8b95c2138e30e856a928ff6d98557e5ae34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_704f58b3734df316562034dc4dd2f8b95c2138e30e856a928ff6d98557e5ae34->enter($__internal_704f58b3734df316562034dc4dd2f8b95c2138e30e856a928ff6d98557e5ae34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_8ead5437fba4dcf3670d594a4056460a8c34cf793af3a0fef775ce812988db90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ead5437fba4dcf3670d594a4056460a8c34cf793af3a0fef775ce812988db90->enter($__internal_8ead5437fba4dcf3670d594a4056460a8c34cf793af3a0fef775ce812988db90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8ead5437fba4dcf3670d594a4056460a8c34cf793af3a0fef775ce812988db90->leave($__internal_8ead5437fba4dcf3670d594a4056460a8c34cf793af3a0fef775ce812988db90_prof);

        
        $__internal_704f58b3734df316562034dc4dd2f8b95c2138e30e856a928ff6d98557e5ae34->leave($__internal_704f58b3734df316562034dc4dd2f8b95c2138e30e856a928ff6d98557e5ae34_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_b4ae50a111b6f62b779387b1523a0853c678f7ce8078bde7844d80b459edcf69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4ae50a111b6f62b779387b1523a0853c678f7ce8078bde7844d80b459edcf69->enter($__internal_b4ae50a111b6f62b779387b1523a0853c678f7ce8078bde7844d80b459edcf69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_d5865fe3c704c61ea009307285e185b96a0c0d2ebac69e57117b907dc533c58e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5865fe3c704c61ea009307285e185b96a0c0d2ebac69e57117b907dc533c58e->enter($__internal_d5865fe3c704c61ea009307285e185b96a0c0d2ebac69e57117b907dc533c58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d5865fe3c704c61ea009307285e185b96a0c0d2ebac69e57117b907dc533c58e->leave($__internal_d5865fe3c704c61ea009307285e185b96a0c0d2ebac69e57117b907dc533c58e_prof);

        
        $__internal_b4ae50a111b6f62b779387b1523a0853c678f7ce8078bde7844d80b459edcf69->leave($__internal_b4ae50a111b6f62b779387b1523a0853c678f7ce8078bde7844d80b459edcf69_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_098cc12999271469e404f3d582db14666f7e74f1df6787e538eb36df1362041e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_098cc12999271469e404f3d582db14666f7e74f1df6787e538eb36df1362041e->enter($__internal_098cc12999271469e404f3d582db14666f7e74f1df6787e538eb36df1362041e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_0a6d31a5392346598cb7b8edbbd5ab26ca72f4d1733d3d0e49d6f8028a35f881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a6d31a5392346598cb7b8edbbd5ab26ca72f4d1733d3d0e49d6f8028a35f881->enter($__internal_0a6d31a5392346598cb7b8edbbd5ab26ca72f4d1733d3d0e49d6f8028a35f881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0a6d31a5392346598cb7b8edbbd5ab26ca72f4d1733d3d0e49d6f8028a35f881->leave($__internal_0a6d31a5392346598cb7b8edbbd5ab26ca72f4d1733d3d0e49d6f8028a35f881_prof);

        
        $__internal_098cc12999271469e404f3d582db14666f7e74f1df6787e538eb36df1362041e->leave($__internal_098cc12999271469e404f3d582db14666f7e74f1df6787e538eb36df1362041e_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_b5fc0228b6511436f19aa0b1566e0dd8b85e1adce0204fd58d0b385b068fe6c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5fc0228b6511436f19aa0b1566e0dd8b85e1adce0204fd58d0b385b068fe6c4->enter($__internal_b5fc0228b6511436f19aa0b1566e0dd8b85e1adce0204fd58d0b385b068fe6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_c1883b48f03a187086f55e0f9e834c92eed22d749a6763ceaba2877793d02a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1883b48f03a187086f55e0f9e834c92eed22d749a6763ceaba2877793d02a09->enter($__internal_c1883b48f03a187086f55e0f9e834c92eed22d749a6763ceaba2877793d02a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c1883b48f03a187086f55e0f9e834c92eed22d749a6763ceaba2877793d02a09->leave($__internal_c1883b48f03a187086f55e0f9e834c92eed22d749a6763ceaba2877793d02a09_prof);

        
        $__internal_b5fc0228b6511436f19aa0b1566e0dd8b85e1adce0204fd58d0b385b068fe6c4->leave($__internal_b5fc0228b6511436f19aa0b1566e0dd8b85e1adce0204fd58d0b385b068fe6c4_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_cd67ca8e7080e09449f1cc8a8086ff41e831d966087cfad56081d85c943c1763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd67ca8e7080e09449f1cc8a8086ff41e831d966087cfad56081d85c943c1763->enter($__internal_cd67ca8e7080e09449f1cc8a8086ff41e831d966087cfad56081d85c943c1763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_148cca39556628a55d405585c2c631b81b41547ae45927d8192886906092d190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_148cca39556628a55d405585c2c631b81b41547ae45927d8192886906092d190->enter($__internal_148cca39556628a55d405585c2c631b81b41547ae45927d8192886906092d190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_148cca39556628a55d405585c2c631b81b41547ae45927d8192886906092d190->leave($__internal_148cca39556628a55d405585c2c631b81b41547ae45927d8192886906092d190_prof);

        
        $__internal_cd67ca8e7080e09449f1cc8a8086ff41e831d966087cfad56081d85c943c1763->leave($__internal_cd67ca8e7080e09449f1cc8a8086ff41e831d966087cfad56081d85c943c1763_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_398592b378268d2052cd27517d214bbaaf303b0fb234caf86556cbe9e84297f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_398592b378268d2052cd27517d214bbaaf303b0fb234caf86556cbe9e84297f0->enter($__internal_398592b378268d2052cd27517d214bbaaf303b0fb234caf86556cbe9e84297f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_7f9aa89053376d3af9c5dd5a0e0e8a795250be01b4f7d065a97fb73ec03e06d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f9aa89053376d3af9c5dd5a0e0e8a795250be01b4f7d065a97fb73ec03e06d9->enter($__internal_7f9aa89053376d3af9c5dd5a0e0e8a795250be01b4f7d065a97fb73ec03e06d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_7f9aa89053376d3af9c5dd5a0e0e8a795250be01b4f7d065a97fb73ec03e06d9->leave($__internal_7f9aa89053376d3af9c5dd5a0e0e8a795250be01b4f7d065a97fb73ec03e06d9_prof);

        
        $__internal_398592b378268d2052cd27517d214bbaaf303b0fb234caf86556cbe9e84297f0->leave($__internal_398592b378268d2052cd27517d214bbaaf303b0fb234caf86556cbe9e84297f0_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_2ba8be4be1284ff7828b404983c138fb91c9796964c8c31391afe145e6c73c11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ba8be4be1284ff7828b404983c138fb91c9796964c8c31391afe145e6c73c11->enter($__internal_2ba8be4be1284ff7828b404983c138fb91c9796964c8c31391afe145e6c73c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_535f5d6fbbe94e3ce4716038db39447b3f2478c1ea06b75d9562c5780ba6a556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_535f5d6fbbe94e3ce4716038db39447b3f2478c1ea06b75d9562c5780ba6a556->enter($__internal_535f5d6fbbe94e3ce4716038db39447b3f2478c1ea06b75d9562c5780ba6a556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_535f5d6fbbe94e3ce4716038db39447b3f2478c1ea06b75d9562c5780ba6a556->leave($__internal_535f5d6fbbe94e3ce4716038db39447b3f2478c1ea06b75d9562c5780ba6a556_prof);

        
        $__internal_2ba8be4be1284ff7828b404983c138fb91c9796964c8c31391afe145e6c73c11->leave($__internal_2ba8be4be1284ff7828b404983c138fb91c9796964c8c31391afe145e6c73c11_prof);

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
", "bootstrap_3_layout.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
