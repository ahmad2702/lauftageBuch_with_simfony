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
        $__internal_26e0a743b6855b81f26c2384993ed6ad16025ac737cd21db24ba0af252eed758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26e0a743b6855b81f26c2384993ed6ad16025ac737cd21db24ba0af252eed758->enter($__internal_26e0a743b6855b81f26c2384993ed6ad16025ac737cd21db24ba0af252eed758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_8debf7cfbf227efb58b8a1cc600c910af1633938f3461a9c628e35525e806168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8debf7cfbf227efb58b8a1cc600c910af1633938f3461a9c628e35525e806168->enter($__internal_8debf7cfbf227efb58b8a1cc600c910af1633938f3461a9c628e35525e806168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_26e0a743b6855b81f26c2384993ed6ad16025ac737cd21db24ba0af252eed758->leave($__internal_26e0a743b6855b81f26c2384993ed6ad16025ac737cd21db24ba0af252eed758_prof);

        
        $__internal_8debf7cfbf227efb58b8a1cc600c910af1633938f3461a9c628e35525e806168->leave($__internal_8debf7cfbf227efb58b8a1cc600c910af1633938f3461a9c628e35525e806168_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_8d276963caa201df3eb1db7f2388a7769807bf5938846b3e09c7052fd927dd62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d276963caa201df3eb1db7f2388a7769807bf5938846b3e09c7052fd927dd62->enter($__internal_8d276963caa201df3eb1db7f2388a7769807bf5938846b3e09c7052fd927dd62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_f935b16b46233a4861961f8eea10f83c8352b8e1bba00fd02e09fc155660a636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f935b16b46233a4861961f8eea10f83c8352b8e1bba00fd02e09fc155660a636->enter($__internal_f935b16b46233a4861961f8eea10f83c8352b8e1bba00fd02e09fc155660a636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_f935b16b46233a4861961f8eea10f83c8352b8e1bba00fd02e09fc155660a636->leave($__internal_f935b16b46233a4861961f8eea10f83c8352b8e1bba00fd02e09fc155660a636_prof);

        
        $__internal_8d276963caa201df3eb1db7f2388a7769807bf5938846b3e09c7052fd927dd62->leave($__internal_8d276963caa201df3eb1db7f2388a7769807bf5938846b3e09c7052fd927dd62_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_b64b7902b942578f11715444006fcfd26012fab8482f9ccac56b688bda2b0bd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b64b7902b942578f11715444006fcfd26012fab8482f9ccac56b688bda2b0bd0->enter($__internal_b64b7902b942578f11715444006fcfd26012fab8482f9ccac56b688bda2b0bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_40ff823cc871ce3204592a3f67f0bc250147b692e5f780caad9b2b72d721fda0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ff823cc871ce3204592a3f67f0bc250147b692e5f780caad9b2b72d721fda0->enter($__internal_40ff823cc871ce3204592a3f67f0bc250147b692e5f780caad9b2b72d721fda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_40ff823cc871ce3204592a3f67f0bc250147b692e5f780caad9b2b72d721fda0->leave($__internal_40ff823cc871ce3204592a3f67f0bc250147b692e5f780caad9b2b72d721fda0_prof);

        
        $__internal_b64b7902b942578f11715444006fcfd26012fab8482f9ccac56b688bda2b0bd0->leave($__internal_b64b7902b942578f11715444006fcfd26012fab8482f9ccac56b688bda2b0bd0_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_df396dcead059fa29b51f6b08839a134a00e177dd8f60c6eed61bbe78616e768 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df396dcead059fa29b51f6b08839a134a00e177dd8f60c6eed61bbe78616e768->enter($__internal_df396dcead059fa29b51f6b08839a134a00e177dd8f60c6eed61bbe78616e768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_793c5dce01e75aeacd61f400171544bf7d9870cc6ecab357a412ff313adf5923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_793c5dce01e75aeacd61f400171544bf7d9870cc6ecab357a412ff313adf5923->enter($__internal_793c5dce01e75aeacd61f400171544bf7d9870cc6ecab357a412ff313adf5923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_793c5dce01e75aeacd61f400171544bf7d9870cc6ecab357a412ff313adf5923->leave($__internal_793c5dce01e75aeacd61f400171544bf7d9870cc6ecab357a412ff313adf5923_prof);

        
        $__internal_df396dcead059fa29b51f6b08839a134a00e177dd8f60c6eed61bbe78616e768->leave($__internal_df396dcead059fa29b51f6b08839a134a00e177dd8f60c6eed61bbe78616e768_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_96aa46105edf38ef69ede8356b71a8a75e54ee39066b6c32c885ad8b7abe6542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96aa46105edf38ef69ede8356b71a8a75e54ee39066b6c32c885ad8b7abe6542->enter($__internal_96aa46105edf38ef69ede8356b71a8a75e54ee39066b6c32c885ad8b7abe6542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1ffbaac9ce1469181f6b09246f99de3e68956a30f22834474dc5f7c15d9d4219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ffbaac9ce1469181f6b09246f99de3e68956a30f22834474dc5f7c15d9d4219->enter($__internal_1ffbaac9ce1469181f6b09246f99de3e68956a30f22834474dc5f7c15d9d4219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_1ffbaac9ce1469181f6b09246f99de3e68956a30f22834474dc5f7c15d9d4219->leave($__internal_1ffbaac9ce1469181f6b09246f99de3e68956a30f22834474dc5f7c15d9d4219_prof);

        
        $__internal_96aa46105edf38ef69ede8356b71a8a75e54ee39066b6c32c885ad8b7abe6542->leave($__internal_96aa46105edf38ef69ede8356b71a8a75e54ee39066b6c32c885ad8b7abe6542_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_021198d7a5baf6f5a5fcbe16cc9ccc527b6b3b3bfae52119058d5f31f7f4b0a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_021198d7a5baf6f5a5fcbe16cc9ccc527b6b3b3bfae52119058d5f31f7f4b0a2->enter($__internal_021198d7a5baf6f5a5fcbe16cc9ccc527b6b3b3bfae52119058d5f31f7f4b0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_0c94d87751fe63cfcb7aea49f5e6c5cec64acb6e7c0a0d63e18f87167b31330b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c94d87751fe63cfcb7aea49f5e6c5cec64acb6e7c0a0d63e18f87167b31330b->enter($__internal_0c94d87751fe63cfcb7aea49f5e6c5cec64acb6e7c0a0d63e18f87167b31330b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_0c94d87751fe63cfcb7aea49f5e6c5cec64acb6e7c0a0d63e18f87167b31330b->leave($__internal_0c94d87751fe63cfcb7aea49f5e6c5cec64acb6e7c0a0d63e18f87167b31330b_prof);

        
        $__internal_021198d7a5baf6f5a5fcbe16cc9ccc527b6b3b3bfae52119058d5f31f7f4b0a2->leave($__internal_021198d7a5baf6f5a5fcbe16cc9ccc527b6b3b3bfae52119058d5f31f7f4b0a2_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_3754242e677f7546d89c36649def2afc8bcac536d6c4c5bf9cb0894e87e03944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3754242e677f7546d89c36649def2afc8bcac536d6c4c5bf9cb0894e87e03944->enter($__internal_3754242e677f7546d89c36649def2afc8bcac536d6c4c5bf9cb0894e87e03944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_9bbae1f0bd15f742b084d3125d38670f7c618ceaf26b79c7c08ffd2de580a446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bbae1f0bd15f742b084d3125d38670f7c618ceaf26b79c7c08ffd2de580a446->enter($__internal_9bbae1f0bd15f742b084d3125d38670f7c618ceaf26b79c7c08ffd2de580a446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_9bbae1f0bd15f742b084d3125d38670f7c618ceaf26b79c7c08ffd2de580a446->leave($__internal_9bbae1f0bd15f742b084d3125d38670f7c618ceaf26b79c7c08ffd2de580a446_prof);

        
        $__internal_3754242e677f7546d89c36649def2afc8bcac536d6c4c5bf9cb0894e87e03944->leave($__internal_3754242e677f7546d89c36649def2afc8bcac536d6c4c5bf9cb0894e87e03944_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_89d4f123f35dbb17ecb2f7f967165bc090a69f3a8eeabb9faebb694c17266973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89d4f123f35dbb17ecb2f7f967165bc090a69f3a8eeabb9faebb694c17266973->enter($__internal_89d4f123f35dbb17ecb2f7f967165bc090a69f3a8eeabb9faebb694c17266973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_05c1669b6de586e0ff5264c8790785a6fb84e09d74e161e1f16a2de865e554ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c1669b6de586e0ff5264c8790785a6fb84e09d74e161e1f16a2de865e554ce->enter($__internal_05c1669b6de586e0ff5264c8790785a6fb84e09d74e161e1f16a2de865e554ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_05c1669b6de586e0ff5264c8790785a6fb84e09d74e161e1f16a2de865e554ce->leave($__internal_05c1669b6de586e0ff5264c8790785a6fb84e09d74e161e1f16a2de865e554ce_prof);

        
        $__internal_89d4f123f35dbb17ecb2f7f967165bc090a69f3a8eeabb9faebb694c17266973->leave($__internal_89d4f123f35dbb17ecb2f7f967165bc090a69f3a8eeabb9faebb694c17266973_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_36f9c312ec4086270ec3e088f78e446b40e06b3247132dc09331d3119b517840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36f9c312ec4086270ec3e088f78e446b40e06b3247132dc09331d3119b517840->enter($__internal_36f9c312ec4086270ec3e088f78e446b40e06b3247132dc09331d3119b517840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_cbf3c56cc73819171336bb4563a1c0d457f98841d29db50bfa1b97020d00eafa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbf3c56cc73819171336bb4563a1c0d457f98841d29db50bfa1b97020d00eafa->enter($__internal_cbf3c56cc73819171336bb4563a1c0d457f98841d29db50bfa1b97020d00eafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_cbf3c56cc73819171336bb4563a1c0d457f98841d29db50bfa1b97020d00eafa->leave($__internal_cbf3c56cc73819171336bb4563a1c0d457f98841d29db50bfa1b97020d00eafa_prof);

        
        $__internal_36f9c312ec4086270ec3e088f78e446b40e06b3247132dc09331d3119b517840->leave($__internal_36f9c312ec4086270ec3e088f78e446b40e06b3247132dc09331d3119b517840_prof);

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
