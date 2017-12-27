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
        $__internal_bb08be94d55b569b1dc2879dcc44bad9c73c63f593a6e0f2297243413faa9d5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb08be94d55b569b1dc2879dcc44bad9c73c63f593a6e0f2297243413faa9d5f->enter($__internal_bb08be94d55b569b1dc2879dcc44bad9c73c63f593a6e0f2297243413faa9d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_ebfcf687216e2adcb2b5a7b846977939ea0b3686c2e8a4dd8a23cdd710d405df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebfcf687216e2adcb2b5a7b846977939ea0b3686c2e8a4dd8a23cdd710d405df->enter($__internal_ebfcf687216e2adcb2b5a7b846977939ea0b3686c2e8a4dd8a23cdd710d405df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_bb08be94d55b569b1dc2879dcc44bad9c73c63f593a6e0f2297243413faa9d5f->leave($__internal_bb08be94d55b569b1dc2879dcc44bad9c73c63f593a6e0f2297243413faa9d5f_prof);

        
        $__internal_ebfcf687216e2adcb2b5a7b846977939ea0b3686c2e8a4dd8a23cdd710d405df->leave($__internal_ebfcf687216e2adcb2b5a7b846977939ea0b3686c2e8a4dd8a23cdd710d405df_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_e92e246707dbc54303f2eed5e5f487e55d7bb78b79c996fb2d76061f1fc1fa2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e92e246707dbc54303f2eed5e5f487e55d7bb78b79c996fb2d76061f1fc1fa2c->enter($__internal_e92e246707dbc54303f2eed5e5f487e55d7bb78b79c996fb2d76061f1fc1fa2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_49d3ee842b177b870c78ef44479d9407383192f4af00ee67602694d7c29a94af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d3ee842b177b870c78ef44479d9407383192f4af00ee67602694d7c29a94af->enter($__internal_49d3ee842b177b870c78ef44479d9407383192f4af00ee67602694d7c29a94af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_49d3ee842b177b870c78ef44479d9407383192f4af00ee67602694d7c29a94af->leave($__internal_49d3ee842b177b870c78ef44479d9407383192f4af00ee67602694d7c29a94af_prof);

        
        $__internal_e92e246707dbc54303f2eed5e5f487e55d7bb78b79c996fb2d76061f1fc1fa2c->leave($__internal_e92e246707dbc54303f2eed5e5f487e55d7bb78b79c996fb2d76061f1fc1fa2c_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_97a7332a988b39c4bd4b35e4c6c3ffbd2719084d76e2fae81b9bf765886094e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97a7332a988b39c4bd4b35e4c6c3ffbd2719084d76e2fae81b9bf765886094e5->enter($__internal_97a7332a988b39c4bd4b35e4c6c3ffbd2719084d76e2fae81b9bf765886094e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_2f8575f94cd2365ccb78dbb5b1e0a8a54fddaee66fbeca075e92dde17c43c7cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f8575f94cd2365ccb78dbb5b1e0a8a54fddaee66fbeca075e92dde17c43c7cd->enter($__internal_2f8575f94cd2365ccb78dbb5b1e0a8a54fddaee66fbeca075e92dde17c43c7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_2f8575f94cd2365ccb78dbb5b1e0a8a54fddaee66fbeca075e92dde17c43c7cd->leave($__internal_2f8575f94cd2365ccb78dbb5b1e0a8a54fddaee66fbeca075e92dde17c43c7cd_prof);

        
        $__internal_97a7332a988b39c4bd4b35e4c6c3ffbd2719084d76e2fae81b9bf765886094e5->leave($__internal_97a7332a988b39c4bd4b35e4c6c3ffbd2719084d76e2fae81b9bf765886094e5_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_4d31b23d2a671d4c73d4ad3e7cbc73b3629103a99c5cb846757196be3ed186a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d31b23d2a671d4c73d4ad3e7cbc73b3629103a99c5cb846757196be3ed186a1->enter($__internal_4d31b23d2a671d4c73d4ad3e7cbc73b3629103a99c5cb846757196be3ed186a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_27c552806499ca950e607c02683fec668a9bfe9411cb881e3376e4decef4d642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27c552806499ca950e607c02683fec668a9bfe9411cb881e3376e4decef4d642->enter($__internal_27c552806499ca950e607c02683fec668a9bfe9411cb881e3376e4decef4d642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_27c552806499ca950e607c02683fec668a9bfe9411cb881e3376e4decef4d642->leave($__internal_27c552806499ca950e607c02683fec668a9bfe9411cb881e3376e4decef4d642_prof);

        
        $__internal_4d31b23d2a671d4c73d4ad3e7cbc73b3629103a99c5cb846757196be3ed186a1->leave($__internal_4d31b23d2a671d4c73d4ad3e7cbc73b3629103a99c5cb846757196be3ed186a1_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_004ec27a6d96e988a03ad864b653341f6cbdf9011ba5dabd0cfe3d2497aa7c1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_004ec27a6d96e988a03ad864b653341f6cbdf9011ba5dabd0cfe3d2497aa7c1f->enter($__internal_004ec27a6d96e988a03ad864b653341f6cbdf9011ba5dabd0cfe3d2497aa7c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_214d5ac56c44efdb6e3e493852b8cadd2f0c13cd1305b1772e214e2e4bc3da30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214d5ac56c44efdb6e3e493852b8cadd2f0c13cd1305b1772e214e2e4bc3da30->enter($__internal_214d5ac56c44efdb6e3e493852b8cadd2f0c13cd1305b1772e214e2e4bc3da30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_214d5ac56c44efdb6e3e493852b8cadd2f0c13cd1305b1772e214e2e4bc3da30->leave($__internal_214d5ac56c44efdb6e3e493852b8cadd2f0c13cd1305b1772e214e2e4bc3da30_prof);

        
        $__internal_004ec27a6d96e988a03ad864b653341f6cbdf9011ba5dabd0cfe3d2497aa7c1f->leave($__internal_004ec27a6d96e988a03ad864b653341f6cbdf9011ba5dabd0cfe3d2497aa7c1f_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_7e91fcf8c02827ccc6bb874c12e3e09a63e0bc4e9dcaff49cdebb7bea7d3ce49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e91fcf8c02827ccc6bb874c12e3e09a63e0bc4e9dcaff49cdebb7bea7d3ce49->enter($__internal_7e91fcf8c02827ccc6bb874c12e3e09a63e0bc4e9dcaff49cdebb7bea7d3ce49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_e4f1de46ea8d76302c5f21885534c8be4edf5457854366bddf58fd19aed57d02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f1de46ea8d76302c5f21885534c8be4edf5457854366bddf58fd19aed57d02->enter($__internal_e4f1de46ea8d76302c5f21885534c8be4edf5457854366bddf58fd19aed57d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_e4f1de46ea8d76302c5f21885534c8be4edf5457854366bddf58fd19aed57d02->leave($__internal_e4f1de46ea8d76302c5f21885534c8be4edf5457854366bddf58fd19aed57d02_prof);

        
        $__internal_7e91fcf8c02827ccc6bb874c12e3e09a63e0bc4e9dcaff49cdebb7bea7d3ce49->leave($__internal_7e91fcf8c02827ccc6bb874c12e3e09a63e0bc4e9dcaff49cdebb7bea7d3ce49_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_0d1f9666f891cdf3667d5fa2be1f18bbdc36d36cea5a9266557f770eb6a8fdf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d1f9666f891cdf3667d5fa2be1f18bbdc36d36cea5a9266557f770eb6a8fdf6->enter($__internal_0d1f9666f891cdf3667d5fa2be1f18bbdc36d36cea5a9266557f770eb6a8fdf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_cf3c7e573a1a675bee37ca088636a23c7e6ae5b82844a669445e79547d896eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf3c7e573a1a675bee37ca088636a23c7e6ae5b82844a669445e79547d896eb9->enter($__internal_cf3c7e573a1a675bee37ca088636a23c7e6ae5b82844a669445e79547d896eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_cf3c7e573a1a675bee37ca088636a23c7e6ae5b82844a669445e79547d896eb9->leave($__internal_cf3c7e573a1a675bee37ca088636a23c7e6ae5b82844a669445e79547d896eb9_prof);

        
        $__internal_0d1f9666f891cdf3667d5fa2be1f18bbdc36d36cea5a9266557f770eb6a8fdf6->leave($__internal_0d1f9666f891cdf3667d5fa2be1f18bbdc36d36cea5a9266557f770eb6a8fdf6_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_dab0dd824486a363b45c7736cf8a02c7b5bb911936e4f86b036144a6229011fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dab0dd824486a363b45c7736cf8a02c7b5bb911936e4f86b036144a6229011fb->enter($__internal_dab0dd824486a363b45c7736cf8a02c7b5bb911936e4f86b036144a6229011fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_3d569f90070c8144296ab7c79f0bc3c821605a7e1d23c684046f61d2eb7a0508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d569f90070c8144296ab7c79f0bc3c821605a7e1d23c684046f61d2eb7a0508->enter($__internal_3d569f90070c8144296ab7c79f0bc3c821605a7e1d23c684046f61d2eb7a0508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_3d569f90070c8144296ab7c79f0bc3c821605a7e1d23c684046f61d2eb7a0508->leave($__internal_3d569f90070c8144296ab7c79f0bc3c821605a7e1d23c684046f61d2eb7a0508_prof);

        
        $__internal_dab0dd824486a363b45c7736cf8a02c7b5bb911936e4f86b036144a6229011fb->leave($__internal_dab0dd824486a363b45c7736cf8a02c7b5bb911936e4f86b036144a6229011fb_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_55621b33033e874044382b688f82dec22129c76d4346e5a25c1422097bb77b4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55621b33033e874044382b688f82dec22129c76d4346e5a25c1422097bb77b4d->enter($__internal_55621b33033e874044382b688f82dec22129c76d4346e5a25c1422097bb77b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_8f2bb33736a3c981ef12589fe85c7d761930cf58a46aa2945925c1bd4b127083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f2bb33736a3c981ef12589fe85c7d761930cf58a46aa2945925c1bd4b127083->enter($__internal_8f2bb33736a3c981ef12589fe85c7d761930cf58a46aa2945925c1bd4b127083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_8f2bb33736a3c981ef12589fe85c7d761930cf58a46aa2945925c1bd4b127083->leave($__internal_8f2bb33736a3c981ef12589fe85c7d761930cf58a46aa2945925c1bd4b127083_prof);

        
        $__internal_55621b33033e874044382b688f82dec22129c76d4346e5a25c1422097bb77b4d->leave($__internal_55621b33033e874044382b688f82dec22129c76d4346e5a25c1422097bb77b4d_prof);

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
