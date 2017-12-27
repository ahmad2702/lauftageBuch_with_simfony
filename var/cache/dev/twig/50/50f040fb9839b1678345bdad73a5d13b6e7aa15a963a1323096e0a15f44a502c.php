<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_186a23c717b28d52dd9c69e50c4be340662cf7a4626d798d870b0730fbb08bf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0999509845dc676ad0f4f8557b263af32dead9125a04d23ecd6b5c73ddafed62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0999509845dc676ad0f4f8557b263af32dead9125a04d23ecd6b5c73ddafed62->enter($__internal_0999509845dc676ad0f4f8557b263af32dead9125a04d23ecd6b5c73ddafed62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_9f4d86ab5f8b0d55425208fe733c69d78595b97ee508979907b639e2e18975c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f4d86ab5f8b0d55425208fe733c69d78595b97ee508979907b639e2e18975c1->enter($__internal_9f4d86ab5f8b0d55425208fe733c69d78595b97ee508979907b639e2e18975c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_0999509845dc676ad0f4f8557b263af32dead9125a04d23ecd6b5c73ddafed62->leave($__internal_0999509845dc676ad0f4f8557b263af32dead9125a04d23ecd6b5c73ddafed62_prof);

        
        $__internal_9f4d86ab5f8b0d55425208fe733c69d78595b97ee508979907b639e2e18975c1->leave($__internal_9f4d86ab5f8b0d55425208fe733c69d78595b97ee508979907b639e2e18975c1_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_2c1e4f195045fe82c63b2e2019e79409790aeb43ae3ddd4a9dc28164ebf5eae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c1e4f195045fe82c63b2e2019e79409790aeb43ae3ddd4a9dc28164ebf5eae6->enter($__internal_2c1e4f195045fe82c63b2e2019e79409790aeb43ae3ddd4a9dc28164ebf5eae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_267608df334c03650725c842db26c312ee0c45a76737eb78c8c112f9727e0f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267608df334c03650725c842db26c312ee0c45a76737eb78c8c112f9727e0f04->enter($__internal_267608df334c03650725c842db26c312ee0c45a76737eb78c8c112f9727e0f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_267608df334c03650725c842db26c312ee0c45a76737eb78c8c112f9727e0f04->leave($__internal_267608df334c03650725c842db26c312ee0c45a76737eb78c8c112f9727e0f04_prof);

        
        $__internal_2c1e4f195045fe82c63b2e2019e79409790aeb43ae3ddd4a9dc28164ebf5eae6->leave($__internal_2c1e4f195045fe82c63b2e2019e79409790aeb43ae3ddd4a9dc28164ebf5eae6_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_3a90f88165fc7e7b175c104592829e4e972779a910b4b4ff2717e6c40afa58aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a90f88165fc7e7b175c104592829e4e972779a910b4b4ff2717e6c40afa58aa->enter($__internal_3a90f88165fc7e7b175c104592829e4e972779a910b4b4ff2717e6c40afa58aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_7904f2a89b8ff531afd64b574973d081b641114d09c69751e4d97b752c651c2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7904f2a89b8ff531afd64b574973d081b641114d09c69751e4d97b752c651c2f->enter($__internal_7904f2a89b8ff531afd64b574973d081b641114d09c69751e4d97b752c651c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 11, $this->getSourceContext()); })()) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 14, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_7904f2a89b8ff531afd64b574973d081b641114d09c69751e4d97b752c651c2f->leave($__internal_7904f2a89b8ff531afd64b574973d081b641114d09c69751e4d97b752c651c2f_prof);

        
        $__internal_3a90f88165fc7e7b175c104592829e4e972779a910b4b4ff2717e6c40afa58aa->leave($__internal_3a90f88165fc7e7b175c104592829e4e972779a910b4b4ff2717e6c40afa58aa_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_c9badf2c17995e80ab86c3aeab3fda19477b0ca8970394741dbbea34a0524b28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9badf2c17995e80ab86c3aeab3fda19477b0ca8970394741dbbea34a0524b28->enter($__internal_c9badf2c17995e80ab86c3aeab3fda19477b0ca8970394741dbbea34a0524b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_7623674fcbf3207167135f197129e9de77b3a294cd020c387834c3374fbbc56e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7623674fcbf3207167135f197129e9de77b3a294cd020c387834c3374fbbc56e->enter($__internal_7623674fcbf3207167135f197129e9de77b3a294cd020c387834c3374fbbc56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_7623674fcbf3207167135f197129e9de77b3a294cd020c387834c3374fbbc56e->leave($__internal_7623674fcbf3207167135f197129e9de77b3a294cd020c387834c3374fbbc56e_prof);

        
        $__internal_c9badf2c17995e80ab86c3aeab3fda19477b0ca8970394741dbbea34a0524b28->leave($__internal_c9badf2c17995e80ab86c3aeab3fda19477b0ca8970394741dbbea34a0524b28_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_26cd53e9837a8986905946d6d2094b4b442f815d008b59955db8a9547f58c336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26cd53e9837a8986905946d6d2094b4b442f815d008b59955db8a9547f58c336->enter($__internal_26cd53e9837a8986905946d6d2094b4b442f815d008b59955db8a9547f58c336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_69d9bc431fe32abf3b134c32ec8bcd2447eec1b86bd08b33f3b33ec4f1ed877b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d9bc431fe32abf3b134c32ec8bcd2447eec1b86bd08b33f3b33ec4f1ed877b->enter($__internal_69d9bc431fe32abf3b134c32ec8bcd2447eec1b86bd08b33f3b33ec4f1ed877b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 26, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 26, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 26, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_69d9bc431fe32abf3b134c32ec8bcd2447eec1b86bd08b33f3b33ec4f1ed877b->leave($__internal_69d9bc431fe32abf3b134c32ec8bcd2447eec1b86bd08b33f3b33ec4f1ed877b_prof);

        
        $__internal_26cd53e9837a8986905946d6d2094b4b442f815d008b59955db8a9547f58c336->leave($__internal_26cd53e9837a8986905946d6d2094b4b442f815d008b59955db8a9547f58c336_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_32c7258148e02c52fe66cc57356950a7ba6e3c6a58ff91ad566b562d531fddd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32c7258148e02c52fe66cc57356950a7ba6e3c6a58ff91ad566b562d531fddd3->enter($__internal_32c7258148e02c52fe66cc57356950a7ba6e3c6a58ff91ad566b562d531fddd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_5c81017b023e4177eea7e69b46ccdacb51526c74aef4de49d1d4827a759cf2ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c81017b023e4177eea7e69b46ccdacb51526c74aef4de49d1d4827a759cf2ff->enter($__internal_5c81017b023e4177eea7e69b46ccdacb51526c74aef4de49d1d4827a759cf2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_5c81017b023e4177eea7e69b46ccdacb51526c74aef4de49d1d4827a759cf2ff->leave($__internal_5c81017b023e4177eea7e69b46ccdacb51526c74aef4de49d1d4827a759cf2ff_prof);

        
        $__internal_32c7258148e02c52fe66cc57356950a7ba6e3c6a58ff91ad566b562d531fddd3->leave($__internal_32c7258148e02c52fe66cc57356950a7ba6e3c6a58ff91ad566b562d531fddd3_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_230d32cb347092ffaf54ce4b25b8579601fec550f919a7133894f23dd09d8605 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_230d32cb347092ffaf54ce4b25b8579601fec550f919a7133894f23dd09d8605->enter($__internal_230d32cb347092ffaf54ce4b25b8579601fec550f919a7133894f23dd09d8605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_4a24d70290a0fe522773e6541fec435f49e38e1e4bc6071380575188c3b45377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a24d70290a0fe522773e6541fec435f49e38e1e4bc6071380575188c3b45377->enter($__internal_4a24d70290a0fe522773e6541fec435f49e38e1e4bc6071380575188c3b45377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_4a24d70290a0fe522773e6541fec435f49e38e1e4bc6071380575188c3b45377->leave($__internal_4a24d70290a0fe522773e6541fec435f49e38e1e4bc6071380575188c3b45377_prof);

        
        $__internal_230d32cb347092ffaf54ce4b25b8579601fec550f919a7133894f23dd09d8605->leave($__internal_230d32cb347092ffaf54ce4b25b8579601fec550f919a7133894f23dd09d8605_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_2b13664dcc92965c321c04abc409e7ff450eccaaa3463ec03e69b1b955f1e5f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b13664dcc92965c321c04abc409e7ff450eccaaa3463ec03e69b1b955f1e5f0->enter($__internal_2b13664dcc92965c321c04abc409e7ff450eccaaa3463ec03e69b1b955f1e5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_b042a42ed8a32235155ef5aa6e749784666a6e0489d5a6928c517a20bbefe6f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b042a42ed8a32235155ef5aa6e749784666a6e0489d5a6928c517a20bbefe6f1->enter($__internal_b042a42ed8a32235155ef5aa6e749784666a6e0489d5a6928c517a20bbefe6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_b042a42ed8a32235155ef5aa6e749784666a6e0489d5a6928c517a20bbefe6f1->leave($__internal_b042a42ed8a32235155ef5aa6e749784666a6e0489d5a6928c517a20bbefe6f1_prof);

        
        $__internal_2b13664dcc92965c321c04abc409e7ff450eccaaa3463ec03e69b1b955f1e5f0->leave($__internal_2b13664dcc92965c321c04abc409e7ff450eccaaa3463ec03e69b1b955f1e5f0_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_7d9a21a0cc4fd5ce0d536d4100a303e7aa18b6303abb0ff64a21f5a0ca9c55d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d9a21a0cc4fd5ce0d536d4100a303e7aa18b6303abb0ff64a21f5a0ca9c55d1->enter($__internal_7d9a21a0cc4fd5ce0d536d4100a303e7aa18b6303abb0ff64a21f5a0ca9c55d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_ffe445aca80a193db48bfd4391c429199a0426fa4835d3190e78914b485be7b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe445aca80a193db48bfd4391c429199a0426fa4835d3190e78914b485be7b8->enter($__internal_ffe445aca80a193db48bfd4391c429199a0426fa4835d3190e78914b485be7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_ffe445aca80a193db48bfd4391c429199a0426fa4835d3190e78914b485be7b8->leave($__internal_ffe445aca80a193db48bfd4391c429199a0426fa4835d3190e78914b485be7b8_prof);

        
        $__internal_7d9a21a0cc4fd5ce0d536d4100a303e7aa18b6303abb0ff64a21f5a0ca9c55d1->leave($__internal_7d9a21a0cc4fd5ce0d536d4100a303e7aa18b6303abb0ff64a21f5a0ca9c55d1_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
