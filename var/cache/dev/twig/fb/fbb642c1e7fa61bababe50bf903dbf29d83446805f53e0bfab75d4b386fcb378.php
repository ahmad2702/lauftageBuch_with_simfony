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
        $__internal_b132d7d02dce92d5f3acd1f829bc3e773454ed94b2e8c03039762dad88bdbd36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b132d7d02dce92d5f3acd1f829bc3e773454ed94b2e8c03039762dad88bdbd36->enter($__internal_b132d7d02dce92d5f3acd1f829bc3e773454ed94b2e8c03039762dad88bdbd36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_3f59fba72fd1bda0d4e191d157b8f81ff52ee4b6cc6480d9d9592c2b9c8a8a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f59fba72fd1bda0d4e191d157b8f81ff52ee4b6cc6480d9d9592c2b9c8a8a44->enter($__internal_3f59fba72fd1bda0d4e191d157b8f81ff52ee4b6cc6480d9d9592c2b9c8a8a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_b132d7d02dce92d5f3acd1f829bc3e773454ed94b2e8c03039762dad88bdbd36->leave($__internal_b132d7d02dce92d5f3acd1f829bc3e773454ed94b2e8c03039762dad88bdbd36_prof);

        
        $__internal_3f59fba72fd1bda0d4e191d157b8f81ff52ee4b6cc6480d9d9592c2b9c8a8a44->leave($__internal_3f59fba72fd1bda0d4e191d157b8f81ff52ee4b6cc6480d9d9592c2b9c8a8a44_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_e78efe758bec33eb97154e78a1d4e1e6e4159b020da114697fbba18d2dd84a1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e78efe758bec33eb97154e78a1d4e1e6e4159b020da114697fbba18d2dd84a1c->enter($__internal_e78efe758bec33eb97154e78a1d4e1e6e4159b020da114697fbba18d2dd84a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_ccba28de0916e4434ffc13738b57a3c0c12d4f9e9e34f8cf663338aa81e53452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccba28de0916e4434ffc13738b57a3c0c12d4f9e9e34f8cf663338aa81e53452->enter($__internal_ccba28de0916e4434ffc13738b57a3c0c12d4f9e9e34f8cf663338aa81e53452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ccba28de0916e4434ffc13738b57a3c0c12d4f9e9e34f8cf663338aa81e53452->leave($__internal_ccba28de0916e4434ffc13738b57a3c0c12d4f9e9e34f8cf663338aa81e53452_prof);

        
        $__internal_e78efe758bec33eb97154e78a1d4e1e6e4159b020da114697fbba18d2dd84a1c->leave($__internal_e78efe758bec33eb97154e78a1d4e1e6e4159b020da114697fbba18d2dd84a1c_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_e2f8fed6a59d05ef56d3836a5162ae9101846181a318188bfc89867792cb33ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2f8fed6a59d05ef56d3836a5162ae9101846181a318188bfc89867792cb33ad->enter($__internal_e2f8fed6a59d05ef56d3836a5162ae9101846181a318188bfc89867792cb33ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_00151a9f2d162e3bdcefbdd576867c8de5d70e6b0cc5aaaae1780714de5798ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00151a9f2d162e3bdcefbdd576867c8de5d70e6b0cc5aaaae1780714de5798ba->enter($__internal_00151a9f2d162e3bdcefbdd576867c8de5d70e6b0cc5aaaae1780714de5798ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_00151a9f2d162e3bdcefbdd576867c8de5d70e6b0cc5aaaae1780714de5798ba->leave($__internal_00151a9f2d162e3bdcefbdd576867c8de5d70e6b0cc5aaaae1780714de5798ba_prof);

        
        $__internal_e2f8fed6a59d05ef56d3836a5162ae9101846181a318188bfc89867792cb33ad->leave($__internal_e2f8fed6a59d05ef56d3836a5162ae9101846181a318188bfc89867792cb33ad_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_70ddd458f87fc284e19740c84a582c1b329c128e482daf5d5a2c2c9867722e43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70ddd458f87fc284e19740c84a582c1b329c128e482daf5d5a2c2c9867722e43->enter($__internal_70ddd458f87fc284e19740c84a582c1b329c128e482daf5d5a2c2c9867722e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_f5eb48d3e928f320c4addb39f201f39fc5ef2c753a041a2b623ae9519bb6e076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5eb48d3e928f320c4addb39f201f39fc5ef2c753a041a2b623ae9519bb6e076->enter($__internal_f5eb48d3e928f320c4addb39f201f39fc5ef2c753a041a2b623ae9519bb6e076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_f5eb48d3e928f320c4addb39f201f39fc5ef2c753a041a2b623ae9519bb6e076->leave($__internal_f5eb48d3e928f320c4addb39f201f39fc5ef2c753a041a2b623ae9519bb6e076_prof);

        
        $__internal_70ddd458f87fc284e19740c84a582c1b329c128e482daf5d5a2c2c9867722e43->leave($__internal_70ddd458f87fc284e19740c84a582c1b329c128e482daf5d5a2c2c9867722e43_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_467e9c6c3b35f28cb50e37072e0ec6c51344a097346b459735136f9e18025981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_467e9c6c3b35f28cb50e37072e0ec6c51344a097346b459735136f9e18025981->enter($__internal_467e9c6c3b35f28cb50e37072e0ec6c51344a097346b459735136f9e18025981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_74e039ad3eee7e1d65502a6e6cbb4d1f84146122648d0ba043be3649f9c55637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e039ad3eee7e1d65502a6e6cbb4d1f84146122648d0ba043be3649f9c55637->enter($__internal_74e039ad3eee7e1d65502a6e6cbb4d1f84146122648d0ba043be3649f9c55637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_74e039ad3eee7e1d65502a6e6cbb4d1f84146122648d0ba043be3649f9c55637->leave($__internal_74e039ad3eee7e1d65502a6e6cbb4d1f84146122648d0ba043be3649f9c55637_prof);

        
        $__internal_467e9c6c3b35f28cb50e37072e0ec6c51344a097346b459735136f9e18025981->leave($__internal_467e9c6c3b35f28cb50e37072e0ec6c51344a097346b459735136f9e18025981_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d77850a6a238933c4d5f3504b2d4d644a94dbf321b073bc9c8f66ef17b09f56c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d77850a6a238933c4d5f3504b2d4d644a94dbf321b073bc9c8f66ef17b09f56c->enter($__internal_d77850a6a238933c4d5f3504b2d4d644a94dbf321b073bc9c8f66ef17b09f56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_12550a89b30901250ffeab495616e34b276ebf6d7133bd90876b7114a5674b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12550a89b30901250ffeab495616e34b276ebf6d7133bd90876b7114a5674b3f->enter($__internal_12550a89b30901250ffeab495616e34b276ebf6d7133bd90876b7114a5674b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_12550a89b30901250ffeab495616e34b276ebf6d7133bd90876b7114a5674b3f->leave($__internal_12550a89b30901250ffeab495616e34b276ebf6d7133bd90876b7114a5674b3f_prof);

        
        $__internal_d77850a6a238933c4d5f3504b2d4d644a94dbf321b073bc9c8f66ef17b09f56c->leave($__internal_d77850a6a238933c4d5f3504b2d4d644a94dbf321b073bc9c8f66ef17b09f56c_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_a06974f143da66a2ba44fcf02e3a4e3dfa956f6481a99141bc69a5a3e84687d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a06974f143da66a2ba44fcf02e3a4e3dfa956f6481a99141bc69a5a3e84687d0->enter($__internal_a06974f143da66a2ba44fcf02e3a4e3dfa956f6481a99141bc69a5a3e84687d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_6813ddf254a5a455773c1866bfadfbcf8c2855150495e8ea9180cbe1f0bf22b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6813ddf254a5a455773c1866bfadfbcf8c2855150495e8ea9180cbe1f0bf22b3->enter($__internal_6813ddf254a5a455773c1866bfadfbcf8c2855150495e8ea9180cbe1f0bf22b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_6813ddf254a5a455773c1866bfadfbcf8c2855150495e8ea9180cbe1f0bf22b3->leave($__internal_6813ddf254a5a455773c1866bfadfbcf8c2855150495e8ea9180cbe1f0bf22b3_prof);

        
        $__internal_a06974f143da66a2ba44fcf02e3a4e3dfa956f6481a99141bc69a5a3e84687d0->leave($__internal_a06974f143da66a2ba44fcf02e3a4e3dfa956f6481a99141bc69a5a3e84687d0_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_6c2c3c36fbed9efbb6db9e8ba28aafd00063f2791efb684868e6d310fe0fcfc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c2c3c36fbed9efbb6db9e8ba28aafd00063f2791efb684868e6d310fe0fcfc8->enter($__internal_6c2c3c36fbed9efbb6db9e8ba28aafd00063f2791efb684868e6d310fe0fcfc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_d707a640096c42a865007972290cd2d616a98447474489839e9e62df6c7371f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d707a640096c42a865007972290cd2d616a98447474489839e9e62df6c7371f5->enter($__internal_d707a640096c42a865007972290cd2d616a98447474489839e9e62df6c7371f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d707a640096c42a865007972290cd2d616a98447474489839e9e62df6c7371f5->leave($__internal_d707a640096c42a865007972290cd2d616a98447474489839e9e62df6c7371f5_prof);

        
        $__internal_6c2c3c36fbed9efbb6db9e8ba28aafd00063f2791efb684868e6d310fe0fcfc8->leave($__internal_6c2c3c36fbed9efbb6db9e8ba28aafd00063f2791efb684868e6d310fe0fcfc8_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_eca25d1a4492b7defe7b62f5570b333105f9474fb7dec2b9333c7acff4de9566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eca25d1a4492b7defe7b62f5570b333105f9474fb7dec2b9333c7acff4de9566->enter($__internal_eca25d1a4492b7defe7b62f5570b333105f9474fb7dec2b9333c7acff4de9566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_b2bea7a2fbb350ae78aa549137fd8bf7d717a5e0971cdc2c6b037aec9d425aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2bea7a2fbb350ae78aa549137fd8bf7d717a5e0971cdc2c6b037aec9d425aca->enter($__internal_b2bea7a2fbb350ae78aa549137fd8bf7d717a5e0971cdc2c6b037aec9d425aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_b2bea7a2fbb350ae78aa549137fd8bf7d717a5e0971cdc2c6b037aec9d425aca->leave($__internal_b2bea7a2fbb350ae78aa549137fd8bf7d717a5e0971cdc2c6b037aec9d425aca_prof);

        
        $__internal_eca25d1a4492b7defe7b62f5570b333105f9474fb7dec2b9333c7acff4de9566->leave($__internal_eca25d1a4492b7defe7b62f5570b333105f9474fb7dec2b9333c7acff4de9566_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_4a6ab4e4f8a9d550fdd18aa6c631946de5eb7b77c632b4cf2ab544907f8fd5ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a6ab4e4f8a9d550fdd18aa6c631946de5eb7b77c632b4cf2ab544907f8fd5ee->enter($__internal_4a6ab4e4f8a9d550fdd18aa6c631946de5eb7b77c632b4cf2ab544907f8fd5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_f5a2f1b238f33568373984e7b3b0eb3cfde853ebc65d31df06fb30f04ba46c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a2f1b238f33568373984e7b3b0eb3cfde853ebc65d31df06fb30f04ba46c10->enter($__internal_f5a2f1b238f33568373984e7b3b0eb3cfde853ebc65d31df06fb30f04ba46c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_f5a2f1b238f33568373984e7b3b0eb3cfde853ebc65d31df06fb30f04ba46c10->leave($__internal_f5a2f1b238f33568373984e7b3b0eb3cfde853ebc65d31df06fb30f04ba46c10_prof);

        
        $__internal_4a6ab4e4f8a9d550fdd18aa6c631946de5eb7b77c632b4cf2ab544907f8fd5ee->leave($__internal_4a6ab4e4f8a9d550fdd18aa6c631946de5eb7b77c632b4cf2ab544907f8fd5ee_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_cc90f330436b8aa129e3c6b74470ef2bc9f575b8347eac3b6c17a05d52adfce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc90f330436b8aa129e3c6b74470ef2bc9f575b8347eac3b6c17a05d52adfce3->enter($__internal_cc90f330436b8aa129e3c6b74470ef2bc9f575b8347eac3b6c17a05d52adfce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f16e646859b78789f539756d91a90de04ec76bbd1fc5d37f0feeb0105874c887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f16e646859b78789f539756d91a90de04ec76bbd1fc5d37f0feeb0105874c887->enter($__internal_f16e646859b78789f539756d91a90de04ec76bbd1fc5d37f0feeb0105874c887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_f16e646859b78789f539756d91a90de04ec76bbd1fc5d37f0feeb0105874c887->leave($__internal_f16e646859b78789f539756d91a90de04ec76bbd1fc5d37f0feeb0105874c887_prof);

        
        $__internal_cc90f330436b8aa129e3c6b74470ef2bc9f575b8347eac3b6c17a05d52adfce3->leave($__internal_cc90f330436b8aa129e3c6b74470ef2bc9f575b8347eac3b6c17a05d52adfce3_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_1045d6cdb58dd4d5708a7f15292034b19fb349946bd6a10f6daa205195c453c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1045d6cdb58dd4d5708a7f15292034b19fb349946bd6a10f6daa205195c453c5->enter($__internal_1045d6cdb58dd4d5708a7f15292034b19fb349946bd6a10f6daa205195c453c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_470a1060b8d970a08744d61ca4a7bccf8aa2de309bad7e8888c035cf23af62e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_470a1060b8d970a08744d61ca4a7bccf8aa2de309bad7e8888c035cf23af62e4->enter($__internal_470a1060b8d970a08744d61ca4a7bccf8aa2de309bad7e8888c035cf23af62e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_470a1060b8d970a08744d61ca4a7bccf8aa2de309bad7e8888c035cf23af62e4->leave($__internal_470a1060b8d970a08744d61ca4a7bccf8aa2de309bad7e8888c035cf23af62e4_prof);

        
        $__internal_1045d6cdb58dd4d5708a7f15292034b19fb349946bd6a10f6daa205195c453c5->leave($__internal_1045d6cdb58dd4d5708a7f15292034b19fb349946bd6a10f6daa205195c453c5_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_79c0d28446fd4afa25e4e6efccf3913ee86343975ed9f67168acfff51668b02c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79c0d28446fd4afa25e4e6efccf3913ee86343975ed9f67168acfff51668b02c->enter($__internal_79c0d28446fd4afa25e4e6efccf3913ee86343975ed9f67168acfff51668b02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_ff6ad9ed576a58a5ab350ec0edbd95eb462f4ac026d58b106c3de0281fcc51ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff6ad9ed576a58a5ab350ec0edbd95eb462f4ac026d58b106c3de0281fcc51ee->enter($__internal_ff6ad9ed576a58a5ab350ec0edbd95eb462f4ac026d58b106c3de0281fcc51ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ff6ad9ed576a58a5ab350ec0edbd95eb462f4ac026d58b106c3de0281fcc51ee->leave($__internal_ff6ad9ed576a58a5ab350ec0edbd95eb462f4ac026d58b106c3de0281fcc51ee_prof);

        
        $__internal_79c0d28446fd4afa25e4e6efccf3913ee86343975ed9f67168acfff51668b02c->leave($__internal_79c0d28446fd4afa25e4e6efccf3913ee86343975ed9f67168acfff51668b02c_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_930cc7c754ca578e47d06767b55df06fd3f5e6072eb352171d20a6a693893c5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_930cc7c754ca578e47d06767b55df06fd3f5e6072eb352171d20a6a693893c5b->enter($__internal_930cc7c754ca578e47d06767b55df06fd3f5e6072eb352171d20a6a693893c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_20e59e417d23ab2c8961cd07c4388c79d1561a1d2f3812f3213b5ad5d76c0699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e59e417d23ab2c8961cd07c4388c79d1561a1d2f3812f3213b5ad5d76c0699->enter($__internal_20e59e417d23ab2c8961cd07c4388c79d1561a1d2f3812f3213b5ad5d76c0699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_20e59e417d23ab2c8961cd07c4388c79d1561a1d2f3812f3213b5ad5d76c0699->leave($__internal_20e59e417d23ab2c8961cd07c4388c79d1561a1d2f3812f3213b5ad5d76c0699_prof);

        
        $__internal_930cc7c754ca578e47d06767b55df06fd3f5e6072eb352171d20a6a693893c5b->leave($__internal_930cc7c754ca578e47d06767b55df06fd3f5e6072eb352171d20a6a693893c5b_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_5e89eb914f1fe5dfa9831d8d2555b7b608219f4b788bcddb5116aa8b418771ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e89eb914f1fe5dfa9831d8d2555b7b608219f4b788bcddb5116aa8b418771ea->enter($__internal_5e89eb914f1fe5dfa9831d8d2555b7b608219f4b788bcddb5116aa8b418771ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_2d955d3948b5d094501bf1bcb49e3dbb133904632881af917b9a9b9519c0f8e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d955d3948b5d094501bf1bcb49e3dbb133904632881af917b9a9b9519c0f8e6->enter($__internal_2d955d3948b5d094501bf1bcb49e3dbb133904632881af917b9a9b9519c0f8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2d955d3948b5d094501bf1bcb49e3dbb133904632881af917b9a9b9519c0f8e6->leave($__internal_2d955d3948b5d094501bf1bcb49e3dbb133904632881af917b9a9b9519c0f8e6_prof);

        
        $__internal_5e89eb914f1fe5dfa9831d8d2555b7b608219f4b788bcddb5116aa8b418771ea->leave($__internal_5e89eb914f1fe5dfa9831d8d2555b7b608219f4b788bcddb5116aa8b418771ea_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_ae1285b6f5ec7d0b7dfb0bd6f9e59a4836da539330bbd7d6ebf98e8fd118ca1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae1285b6f5ec7d0b7dfb0bd6f9e59a4836da539330bbd7d6ebf98e8fd118ca1d->enter($__internal_ae1285b6f5ec7d0b7dfb0bd6f9e59a4836da539330bbd7d6ebf98e8fd118ca1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_0a05150320b2db86a8140352a88b264c5e30e161db419b8bf8bc6a4500c729b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a05150320b2db86a8140352a88b264c5e30e161db419b8bf8bc6a4500c729b3->enter($__internal_0a05150320b2db86a8140352a88b264c5e30e161db419b8bf8bc6a4500c729b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0a05150320b2db86a8140352a88b264c5e30e161db419b8bf8bc6a4500c729b3->leave($__internal_0a05150320b2db86a8140352a88b264c5e30e161db419b8bf8bc6a4500c729b3_prof);

        
        $__internal_ae1285b6f5ec7d0b7dfb0bd6f9e59a4836da539330bbd7d6ebf98e8fd118ca1d->leave($__internal_ae1285b6f5ec7d0b7dfb0bd6f9e59a4836da539330bbd7d6ebf98e8fd118ca1d_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_71d213784ce82b6892df7cfcfa43a81688201da134004c6dfcd6068565a04bc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71d213784ce82b6892df7cfcfa43a81688201da134004c6dfcd6068565a04bc7->enter($__internal_71d213784ce82b6892df7cfcfa43a81688201da134004c6dfcd6068565a04bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_d53b484e71a3c6cd68d3e1c2f3a9a6413a6410a36d023a5551f19f01ae191bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d53b484e71a3c6cd68d3e1c2f3a9a6413a6410a36d023a5551f19f01ae191bc2->enter($__internal_d53b484e71a3c6cd68d3e1c2f3a9a6413a6410a36d023a5551f19f01ae191bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_d53b484e71a3c6cd68d3e1c2f3a9a6413a6410a36d023a5551f19f01ae191bc2->leave($__internal_d53b484e71a3c6cd68d3e1c2f3a9a6413a6410a36d023a5551f19f01ae191bc2_prof);

        
        $__internal_71d213784ce82b6892df7cfcfa43a81688201da134004c6dfcd6068565a04bc7->leave($__internal_71d213784ce82b6892df7cfcfa43a81688201da134004c6dfcd6068565a04bc7_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_1d4def0b367b4969aa88d0a326f23510ea93e9b3f54c9999d8cff080f89f8340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d4def0b367b4969aa88d0a326f23510ea93e9b3f54c9999d8cff080f89f8340->enter($__internal_1d4def0b367b4969aa88d0a326f23510ea93e9b3f54c9999d8cff080f89f8340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_27ff14d09baa6295cb6acf156ee2df6343f0c12e20e2d4e08c0f1dc27193e798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ff14d09baa6295cb6acf156ee2df6343f0c12e20e2d4e08c0f1dc27193e798->enter($__internal_27ff14d09baa6295cb6acf156ee2df6343f0c12e20e2d4e08c0f1dc27193e798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_27ff14d09baa6295cb6acf156ee2df6343f0c12e20e2d4e08c0f1dc27193e798->leave($__internal_27ff14d09baa6295cb6acf156ee2df6343f0c12e20e2d4e08c0f1dc27193e798_prof);

        
        $__internal_1d4def0b367b4969aa88d0a326f23510ea93e9b3f54c9999d8cff080f89f8340->leave($__internal_1d4def0b367b4969aa88d0a326f23510ea93e9b3f54c9999d8cff080f89f8340_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_722ed3d92c6f2154ff9e52232c5b92690ee19fb9aceb40b84a29f5d4a153f419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_722ed3d92c6f2154ff9e52232c5b92690ee19fb9aceb40b84a29f5d4a153f419->enter($__internal_722ed3d92c6f2154ff9e52232c5b92690ee19fb9aceb40b84a29f5d4a153f419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_54f0ba2f91d0742fbbc68b510dc4b21676cdacbdda383af3a31d3b415dde2af2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f0ba2f91d0742fbbc68b510dc4b21676cdacbdda383af3a31d3b415dde2af2->enter($__internal_54f0ba2f91d0742fbbc68b510dc4b21676cdacbdda383af3a31d3b415dde2af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_54f0ba2f91d0742fbbc68b510dc4b21676cdacbdda383af3a31d3b415dde2af2->leave($__internal_54f0ba2f91d0742fbbc68b510dc4b21676cdacbdda383af3a31d3b415dde2af2_prof);

        
        $__internal_722ed3d92c6f2154ff9e52232c5b92690ee19fb9aceb40b84a29f5d4a153f419->leave($__internal_722ed3d92c6f2154ff9e52232c5b92690ee19fb9aceb40b84a29f5d4a153f419_prof);

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
