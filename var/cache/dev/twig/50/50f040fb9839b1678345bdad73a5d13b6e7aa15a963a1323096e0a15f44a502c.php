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
        $__internal_751f423c1b9b55892e12c92c775eb55ab662c3a59117d325004511d4ef805463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_751f423c1b9b55892e12c92c775eb55ab662c3a59117d325004511d4ef805463->enter($__internal_751f423c1b9b55892e12c92c775eb55ab662c3a59117d325004511d4ef805463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_d15d7842126b1f04137191d4f9294ef343217e2848972fcca6d5b98ecec783f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d15d7842126b1f04137191d4f9294ef343217e2848972fcca6d5b98ecec783f7->enter($__internal_d15d7842126b1f04137191d4f9294ef343217e2848972fcca6d5b98ecec783f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_751f423c1b9b55892e12c92c775eb55ab662c3a59117d325004511d4ef805463->leave($__internal_751f423c1b9b55892e12c92c775eb55ab662c3a59117d325004511d4ef805463_prof);

        
        $__internal_d15d7842126b1f04137191d4f9294ef343217e2848972fcca6d5b98ecec783f7->leave($__internal_d15d7842126b1f04137191d4f9294ef343217e2848972fcca6d5b98ecec783f7_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_10d9f7f66f10771d8a9b9c5e5e86652097f946069b7b5e078a9d915665bc839f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10d9f7f66f10771d8a9b9c5e5e86652097f946069b7b5e078a9d915665bc839f->enter($__internal_10d9f7f66f10771d8a9b9c5e5e86652097f946069b7b5e078a9d915665bc839f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_8abd0157a378b18c2f3107d2548bffde67013c485087defea28b7b50dadfe2c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8abd0157a378b18c2f3107d2548bffde67013c485087defea28b7b50dadfe2c8->enter($__internal_8abd0157a378b18c2f3107d2548bffde67013c485087defea28b7b50dadfe2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_8abd0157a378b18c2f3107d2548bffde67013c485087defea28b7b50dadfe2c8->leave($__internal_8abd0157a378b18c2f3107d2548bffde67013c485087defea28b7b50dadfe2c8_prof);

        
        $__internal_10d9f7f66f10771d8a9b9c5e5e86652097f946069b7b5e078a9d915665bc839f->leave($__internal_10d9f7f66f10771d8a9b9c5e5e86652097f946069b7b5e078a9d915665bc839f_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_657166eac6362838dac098e51a4025d20a2cb3bc96dc4549ae3c3f57a01fd363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_657166eac6362838dac098e51a4025d20a2cb3bc96dc4549ae3c3f57a01fd363->enter($__internal_657166eac6362838dac098e51a4025d20a2cb3bc96dc4549ae3c3f57a01fd363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_ee142d074ea936c8a83d5c0871c1caddebf06faca455cd981956f020a353c17c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee142d074ea936c8a83d5c0871c1caddebf06faca455cd981956f020a353c17c->enter($__internal_ee142d074ea936c8a83d5c0871c1caddebf06faca455cd981956f020a353c17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_ee142d074ea936c8a83d5c0871c1caddebf06faca455cd981956f020a353c17c->leave($__internal_ee142d074ea936c8a83d5c0871c1caddebf06faca455cd981956f020a353c17c_prof);

        
        $__internal_657166eac6362838dac098e51a4025d20a2cb3bc96dc4549ae3c3f57a01fd363->leave($__internal_657166eac6362838dac098e51a4025d20a2cb3bc96dc4549ae3c3f57a01fd363_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_ae845d512cc0f4751772bb7820611b4455ff19254a536eb4d1fa0ce1c3859e92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae845d512cc0f4751772bb7820611b4455ff19254a536eb4d1fa0ce1c3859e92->enter($__internal_ae845d512cc0f4751772bb7820611b4455ff19254a536eb4d1fa0ce1c3859e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_b5dacc058ece42f57d1c9d0d19499f66f83c4af5a3dba74d6c7ad2ab349d13d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5dacc058ece42f57d1c9d0d19499f66f83c4af5a3dba74d6c7ad2ab349d13d1->enter($__internal_b5dacc058ece42f57d1c9d0d19499f66f83c4af5a3dba74d6c7ad2ab349d13d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_b5dacc058ece42f57d1c9d0d19499f66f83c4af5a3dba74d6c7ad2ab349d13d1->leave($__internal_b5dacc058ece42f57d1c9d0d19499f66f83c4af5a3dba74d6c7ad2ab349d13d1_prof);

        
        $__internal_ae845d512cc0f4751772bb7820611b4455ff19254a536eb4d1fa0ce1c3859e92->leave($__internal_ae845d512cc0f4751772bb7820611b4455ff19254a536eb4d1fa0ce1c3859e92_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_4eb8f5f2ac9f549d64f8477c001279ccfc121a725e1c5f91ac06a81218e32df5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eb8f5f2ac9f549d64f8477c001279ccfc121a725e1c5f91ac06a81218e32df5->enter($__internal_4eb8f5f2ac9f549d64f8477c001279ccfc121a725e1c5f91ac06a81218e32df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_8cc0bff815e59b926ccc51ff41e7c4e0bc7115bf3c1e1a91416733652c9dd4f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc0bff815e59b926ccc51ff41e7c4e0bc7115bf3c1e1a91416733652c9dd4f2->enter($__internal_8cc0bff815e59b926ccc51ff41e7c4e0bc7115bf3c1e1a91416733652c9dd4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_8cc0bff815e59b926ccc51ff41e7c4e0bc7115bf3c1e1a91416733652c9dd4f2->leave($__internal_8cc0bff815e59b926ccc51ff41e7c4e0bc7115bf3c1e1a91416733652c9dd4f2_prof);

        
        $__internal_4eb8f5f2ac9f549d64f8477c001279ccfc121a725e1c5f91ac06a81218e32df5->leave($__internal_4eb8f5f2ac9f549d64f8477c001279ccfc121a725e1c5f91ac06a81218e32df5_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_4710dca650a4562583e27a6aa100262904e2ae419daad0347474c9245491346f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4710dca650a4562583e27a6aa100262904e2ae419daad0347474c9245491346f->enter($__internal_4710dca650a4562583e27a6aa100262904e2ae419daad0347474c9245491346f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_0e805c64b76bf08e25214aaa9f1186ef5b4f703c6eef7ee1635699e7179aa11a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e805c64b76bf08e25214aaa9f1186ef5b4f703c6eef7ee1635699e7179aa11a->enter($__internal_0e805c64b76bf08e25214aaa9f1186ef5b4f703c6eef7ee1635699e7179aa11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_0e805c64b76bf08e25214aaa9f1186ef5b4f703c6eef7ee1635699e7179aa11a->leave($__internal_0e805c64b76bf08e25214aaa9f1186ef5b4f703c6eef7ee1635699e7179aa11a_prof);

        
        $__internal_4710dca650a4562583e27a6aa100262904e2ae419daad0347474c9245491346f->leave($__internal_4710dca650a4562583e27a6aa100262904e2ae419daad0347474c9245491346f_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_8c7df5ccccfa1f554e8d1995c87fdb9054c0b5eff36ce45e11bc90ae978e2078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c7df5ccccfa1f554e8d1995c87fdb9054c0b5eff36ce45e11bc90ae978e2078->enter($__internal_8c7df5ccccfa1f554e8d1995c87fdb9054c0b5eff36ce45e11bc90ae978e2078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_43ee26529151c0bfe1153354f1502c9f36f96e1d03ddf6c8d942069a652ad143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ee26529151c0bfe1153354f1502c9f36f96e1d03ddf6c8d942069a652ad143->enter($__internal_43ee26529151c0bfe1153354f1502c9f36f96e1d03ddf6c8d942069a652ad143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_43ee26529151c0bfe1153354f1502c9f36f96e1d03ddf6c8d942069a652ad143->leave($__internal_43ee26529151c0bfe1153354f1502c9f36f96e1d03ddf6c8d942069a652ad143_prof);

        
        $__internal_8c7df5ccccfa1f554e8d1995c87fdb9054c0b5eff36ce45e11bc90ae978e2078->leave($__internal_8c7df5ccccfa1f554e8d1995c87fdb9054c0b5eff36ce45e11bc90ae978e2078_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_e426847f2211df55ca6a766c3daaab18123355529b0bbf5bd77873fdb8c9fd1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e426847f2211df55ca6a766c3daaab18123355529b0bbf5bd77873fdb8c9fd1c->enter($__internal_e426847f2211df55ca6a766c3daaab18123355529b0bbf5bd77873fdb8c9fd1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_5156ab6d09fbc58713654db0f45dad8203a84b061365382a80125f8dc64ea37a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5156ab6d09fbc58713654db0f45dad8203a84b061365382a80125f8dc64ea37a->enter($__internal_5156ab6d09fbc58713654db0f45dad8203a84b061365382a80125f8dc64ea37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_5156ab6d09fbc58713654db0f45dad8203a84b061365382a80125f8dc64ea37a->leave($__internal_5156ab6d09fbc58713654db0f45dad8203a84b061365382a80125f8dc64ea37a_prof);

        
        $__internal_e426847f2211df55ca6a766c3daaab18123355529b0bbf5bd77873fdb8c9fd1c->leave($__internal_e426847f2211df55ca6a766c3daaab18123355529b0bbf5bd77873fdb8c9fd1c_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_384be284a625136a7cff2d272790fcc47d1fc4c7bf46a5acf7bd87038848dff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_384be284a625136a7cff2d272790fcc47d1fc4c7bf46a5acf7bd87038848dff1->enter($__internal_384be284a625136a7cff2d272790fcc47d1fc4c7bf46a5acf7bd87038848dff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_a1bf9f0ca21d0161d3a894f0722ea59abd173784d2b86edf304fcf3b2f21ae24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1bf9f0ca21d0161d3a894f0722ea59abd173784d2b86edf304fcf3b2f21ae24->enter($__internal_a1bf9f0ca21d0161d3a894f0722ea59abd173784d2b86edf304fcf3b2f21ae24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_a1bf9f0ca21d0161d3a894f0722ea59abd173784d2b86edf304fcf3b2f21ae24->leave($__internal_a1bf9f0ca21d0161d3a894f0722ea59abd173784d2b86edf304fcf3b2f21ae24_prof);

        
        $__internal_384be284a625136a7cff2d272790fcc47d1fc4c7bf46a5acf7bd87038848dff1->leave($__internal_384be284a625136a7cff2d272790fcc47d1fc4c7bf46a5acf7bd87038848dff1_prof);

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
