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
        $__internal_a245b0bc62b865be28b192cb302f0ba51af1c005fbc4c090886014f75853dab5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a245b0bc62b865be28b192cb302f0ba51af1c005fbc4c090886014f75853dab5->enter($__internal_a245b0bc62b865be28b192cb302f0ba51af1c005fbc4c090886014f75853dab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_02465590fcef68cedea181035e0881d918249bc8583aac83043010ee2e0031a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02465590fcef68cedea181035e0881d918249bc8583aac83043010ee2e0031a2->enter($__internal_02465590fcef68cedea181035e0881d918249bc8583aac83043010ee2e0031a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_a245b0bc62b865be28b192cb302f0ba51af1c005fbc4c090886014f75853dab5->leave($__internal_a245b0bc62b865be28b192cb302f0ba51af1c005fbc4c090886014f75853dab5_prof);

        
        $__internal_02465590fcef68cedea181035e0881d918249bc8583aac83043010ee2e0031a2->leave($__internal_02465590fcef68cedea181035e0881d918249bc8583aac83043010ee2e0031a2_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_f74a701c919c5676c4f2f15ede270d547b46173f66df9d6a30d298de0fc53866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f74a701c919c5676c4f2f15ede270d547b46173f66df9d6a30d298de0fc53866->enter($__internal_f74a701c919c5676c4f2f15ede270d547b46173f66df9d6a30d298de0fc53866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_4bff98f3dea30c985d2a44770909f0f32657ab0126af04d97d9441bc03f31b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bff98f3dea30c985d2a44770909f0f32657ab0126af04d97d9441bc03f31b41->enter($__internal_4bff98f3dea30c985d2a44770909f0f32657ab0126af04d97d9441bc03f31b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_4bff98f3dea30c985d2a44770909f0f32657ab0126af04d97d9441bc03f31b41->leave($__internal_4bff98f3dea30c985d2a44770909f0f32657ab0126af04d97d9441bc03f31b41_prof);

        
        $__internal_f74a701c919c5676c4f2f15ede270d547b46173f66df9d6a30d298de0fc53866->leave($__internal_f74a701c919c5676c4f2f15ede270d547b46173f66df9d6a30d298de0fc53866_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_7cd0e8e876ba2453dc944a3ac81e2988dba873f4429262177892378ba34d0461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cd0e8e876ba2453dc944a3ac81e2988dba873f4429262177892378ba34d0461->enter($__internal_7cd0e8e876ba2453dc944a3ac81e2988dba873f4429262177892378ba34d0461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_2e9bfa698394a14a7781e81055a8fe1dcc40d20bc3f00382f1eba9ee3fc2e070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e9bfa698394a14a7781e81055a8fe1dcc40d20bc3f00382f1eba9ee3fc2e070->enter($__internal_2e9bfa698394a14a7781e81055a8fe1dcc40d20bc3f00382f1eba9ee3fc2e070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_2e9bfa698394a14a7781e81055a8fe1dcc40d20bc3f00382f1eba9ee3fc2e070->leave($__internal_2e9bfa698394a14a7781e81055a8fe1dcc40d20bc3f00382f1eba9ee3fc2e070_prof);

        
        $__internal_7cd0e8e876ba2453dc944a3ac81e2988dba873f4429262177892378ba34d0461->leave($__internal_7cd0e8e876ba2453dc944a3ac81e2988dba873f4429262177892378ba34d0461_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_1ac18673e0252ccddae4632196ae391180a670483035987254c8bf6c2313661b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ac18673e0252ccddae4632196ae391180a670483035987254c8bf6c2313661b->enter($__internal_1ac18673e0252ccddae4632196ae391180a670483035987254c8bf6c2313661b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_291699ff7d4421f7bccd21db6d8f8d5e19dcf6138f9f18d9e4388b95973af672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_291699ff7d4421f7bccd21db6d8f8d5e19dcf6138f9f18d9e4388b95973af672->enter($__internal_291699ff7d4421f7bccd21db6d8f8d5e19dcf6138f9f18d9e4388b95973af672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_291699ff7d4421f7bccd21db6d8f8d5e19dcf6138f9f18d9e4388b95973af672->leave($__internal_291699ff7d4421f7bccd21db6d8f8d5e19dcf6138f9f18d9e4388b95973af672_prof);

        
        $__internal_1ac18673e0252ccddae4632196ae391180a670483035987254c8bf6c2313661b->leave($__internal_1ac18673e0252ccddae4632196ae391180a670483035987254c8bf6c2313661b_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ece9870912f14490aa4ec453ecb25dbe065f91efa60ed29a62bc02f42a7616b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ece9870912f14490aa4ec453ecb25dbe065f91efa60ed29a62bc02f42a7616b5->enter($__internal_ece9870912f14490aa4ec453ecb25dbe065f91efa60ed29a62bc02f42a7616b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_81ef5938944da5b1a6657ebd26941cb463e527d36baa73019054dcef0d816c70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81ef5938944da5b1a6657ebd26941cb463e527d36baa73019054dcef0d816c70->enter($__internal_81ef5938944da5b1a6657ebd26941cb463e527d36baa73019054dcef0d816c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_81ef5938944da5b1a6657ebd26941cb463e527d36baa73019054dcef0d816c70->leave($__internal_81ef5938944da5b1a6657ebd26941cb463e527d36baa73019054dcef0d816c70_prof);

        
        $__internal_ece9870912f14490aa4ec453ecb25dbe065f91efa60ed29a62bc02f42a7616b5->leave($__internal_ece9870912f14490aa4ec453ecb25dbe065f91efa60ed29a62bc02f42a7616b5_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_465419072ee9dd9843b2a1c71cbe477e13191f94ceb12d36033a8f17e941361a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_465419072ee9dd9843b2a1c71cbe477e13191f94ceb12d36033a8f17e941361a->enter($__internal_465419072ee9dd9843b2a1c71cbe477e13191f94ceb12d36033a8f17e941361a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_e8630abdb21adae4bebbf85fd5d81c93fdc807dfa9ec6f677ea4e74f5462c7a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8630abdb21adae4bebbf85fd5d81c93fdc807dfa9ec6f677ea4e74f5462c7a8->enter($__internal_e8630abdb21adae4bebbf85fd5d81c93fdc807dfa9ec6f677ea4e74f5462c7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_e8630abdb21adae4bebbf85fd5d81c93fdc807dfa9ec6f677ea4e74f5462c7a8->leave($__internal_e8630abdb21adae4bebbf85fd5d81c93fdc807dfa9ec6f677ea4e74f5462c7a8_prof);

        
        $__internal_465419072ee9dd9843b2a1c71cbe477e13191f94ceb12d36033a8f17e941361a->leave($__internal_465419072ee9dd9843b2a1c71cbe477e13191f94ceb12d36033a8f17e941361a_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_a782de1daebbeaead9391d6d58b5eedbb745888c67eb9eaff9d6c95431f4806a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a782de1daebbeaead9391d6d58b5eedbb745888c67eb9eaff9d6c95431f4806a->enter($__internal_a782de1daebbeaead9391d6d58b5eedbb745888c67eb9eaff9d6c95431f4806a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_629dd75d3daac7fb8f6f225edacf23e01075a2cabbb0ac1ba95e063b5c8f5359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629dd75d3daac7fb8f6f225edacf23e01075a2cabbb0ac1ba95e063b5c8f5359->enter($__internal_629dd75d3daac7fb8f6f225edacf23e01075a2cabbb0ac1ba95e063b5c8f5359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_629dd75d3daac7fb8f6f225edacf23e01075a2cabbb0ac1ba95e063b5c8f5359->leave($__internal_629dd75d3daac7fb8f6f225edacf23e01075a2cabbb0ac1ba95e063b5c8f5359_prof);

        
        $__internal_a782de1daebbeaead9391d6d58b5eedbb745888c67eb9eaff9d6c95431f4806a->leave($__internal_a782de1daebbeaead9391d6d58b5eedbb745888c67eb9eaff9d6c95431f4806a_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_885db5fd96682c8f8afbed3b5472a1f2fa3815ffc721f621e2303aedd29acf5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_885db5fd96682c8f8afbed3b5472a1f2fa3815ffc721f621e2303aedd29acf5e->enter($__internal_885db5fd96682c8f8afbed3b5472a1f2fa3815ffc721f621e2303aedd29acf5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_1d70c63bc019d75b4e04671ed5d4da8204671267672e246ca34682eecb16a374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d70c63bc019d75b4e04671ed5d4da8204671267672e246ca34682eecb16a374->enter($__internal_1d70c63bc019d75b4e04671ed5d4da8204671267672e246ca34682eecb16a374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_1d70c63bc019d75b4e04671ed5d4da8204671267672e246ca34682eecb16a374->leave($__internal_1d70c63bc019d75b4e04671ed5d4da8204671267672e246ca34682eecb16a374_prof);

        
        $__internal_885db5fd96682c8f8afbed3b5472a1f2fa3815ffc721f621e2303aedd29acf5e->leave($__internal_885db5fd96682c8f8afbed3b5472a1f2fa3815ffc721f621e2303aedd29acf5e_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_b5440382095774e9f05b194130197185ccce5afb33eafc6000dad64d127513a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5440382095774e9f05b194130197185ccce5afb33eafc6000dad64d127513a6->enter($__internal_b5440382095774e9f05b194130197185ccce5afb33eafc6000dad64d127513a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_b23b0f02d675ddaf462ba58381032b8c852d5045345078b664edd34aaea7e5b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23b0f02d675ddaf462ba58381032b8c852d5045345078b664edd34aaea7e5b6->enter($__internal_b23b0f02d675ddaf462ba58381032b8c852d5045345078b664edd34aaea7e5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_b23b0f02d675ddaf462ba58381032b8c852d5045345078b664edd34aaea7e5b6->leave($__internal_b23b0f02d675ddaf462ba58381032b8c852d5045345078b664edd34aaea7e5b6_prof);

        
        $__internal_b5440382095774e9f05b194130197185ccce5afb33eafc6000dad64d127513a6->leave($__internal_b5440382095774e9f05b194130197185ccce5afb33eafc6000dad64d127513a6_prof);

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
