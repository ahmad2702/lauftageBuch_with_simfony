<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_9b95e3aeb5ae9f462305dc5448a1f089e97ddf5a6842bea6faadbb01efe7198a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a10c37ddea01c3e40cef21c509551865544998dab65bc3f37d2955e67fe1a3d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a10c37ddea01c3e40cef21c509551865544998dab65bc3f37d2955e67fe1a3d1->enter($__internal_a10c37ddea01c3e40cef21c509551865544998dab65bc3f37d2955e67fe1a3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_5f175736a558128f42a37e4d5ba9fabae1544a8e1fb55b9d546b9d806bb9f2fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f175736a558128f42a37e4d5ba9fabae1544a8e1fb55b9d546b9d806bb9f2fa->enter($__internal_5f175736a558128f42a37e4d5ba9fabae1544a8e1fb55b9d546b9d806bb9f2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_a10c37ddea01c3e40cef21c509551865544998dab65bc3f37d2955e67fe1a3d1->leave($__internal_a10c37ddea01c3e40cef21c509551865544998dab65bc3f37d2955e67fe1a3d1_prof);

        
        $__internal_5f175736a558128f42a37e4d5ba9fabae1544a8e1fb55b9d546b9d806bb9f2fa->leave($__internal_5f175736a558128f42a37e4d5ba9fabae1544a8e1fb55b9d546b9d806bb9f2fa_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_11b5c846ca5efd269a19e0d26b41d009978eaf91fe0490540c49fb143bf11e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11b5c846ca5efd269a19e0d26b41d009978eaf91fe0490540c49fb143bf11e2c->enter($__internal_11b5c846ca5efd269a19e0d26b41d009978eaf91fe0490540c49fb143bf11e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_7009aaa5462a35d6d7e65585541c8432783c5ab079db482f19b07fc678494374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7009aaa5462a35d6d7e65585541c8432783c5ab079db482f19b07fc678494374->enter($__internal_7009aaa5462a35d6d7e65585541c8432783c5ab079db482f19b07fc678494374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 6, $this->getSourceContext()); })()) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 9, $this->getSourceContext()); })()))) {
                // line 10
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 10, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 12, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_7009aaa5462a35d6d7e65585541c8432783c5ab079db482f19b07fc678494374->leave($__internal_7009aaa5462a35d6d7e65585541c8432783c5ab079db482f19b07fc678494374_prof);

        
        $__internal_11b5c846ca5efd269a19e0d26b41d009978eaf91fe0490540c49fb143bf11e2c->leave($__internal_11b5c846ca5efd269a19e0d26b41d009978eaf91fe0490540c49fb143bf11e2c_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_092e5606334914a01be68582187bffa99a6181d558ef7d2054fcffd56d82412b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_092e5606334914a01be68582187bffa99a6181d558ef7d2054fcffd56d82412b->enter($__internal_092e5606334914a01be68582187bffa99a6181d558ef7d2054fcffd56d82412b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_84b0328bd0df7cb627b7843175d0e76637e941cfdfbf0dcc136b6e4dcab1313b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b0328bd0df7cb627b7843175d0e76637e941cfdfbf0dcc136b6e4dcab1313b->enter($__internal_84b0328bd0df7cb627b7843175d0e76637e941cfdfbf0dcc136b6e4dcab1313b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_84b0328bd0df7cb627b7843175d0e76637e941cfdfbf0dcc136b6e4dcab1313b->leave($__internal_84b0328bd0df7cb627b7843175d0e76637e941cfdfbf0dcc136b6e4dcab1313b_prof);

        
        $__internal_092e5606334914a01be68582187bffa99a6181d558ef7d2054fcffd56d82412b->leave($__internal_092e5606334914a01be68582187bffa99a6181d558ef7d2054fcffd56d82412b_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0a8a752e3a32a49e51eb23f194c61d37ec925cb39b82fd9e0db3b095164a41e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a8a752e3a32a49e51eb23f194c61d37ec925cb39b82fd9e0db3b095164a41e3->enter($__internal_0a8a752e3a32a49e51eb23f194c61d37ec925cb39b82fd9e0db3b095164a41e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_953123c45505d28a8d0780779f429d96e575f26be24fbc673dd598645077a18a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_953123c45505d28a8d0780779f429d96e575f26be24fbc673dd598645077a18a->enter($__internal_953123c45505d28a8d0780779f429d96e575f26be24fbc673dd598645077a18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && (isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 24, $this->getSourceContext()); })()))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 27, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 27, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 27, $this->getSourceContext()); })()))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_953123c45505d28a8d0780779f429d96e575f26be24fbc673dd598645077a18a->leave($__internal_953123c45505d28a8d0780779f429d96e575f26be24fbc673dd598645077a18a_prof);

        
        $__internal_0a8a752e3a32a49e51eb23f194c61d37ec925cb39b82fd9e0db3b095164a41e3->leave($__internal_0a8a752e3a32a49e51eb23f194c61d37ec925cb39b82fd9e0db3b095164a41e3_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_b0010b57c489206b5476f63946a8b02e836874a7e79289bbb36ce7969e2baa56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0010b57c489206b5476f63946a8b02e836874a7e79289bbb36ce7969e2baa56->enter($__internal_b0010b57c489206b5476f63946a8b02e836874a7e79289bbb36ce7969e2baa56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_3e46baa304839d8484fc6a7e0b16360c9d5dadb88f028db2e6242f01132035a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e46baa304839d8484fc6a7e0b16360c9d5dadb88f028db2e6242f01132035a9->enter($__internal_3e46baa304839d8484fc6a7e0b16360c9d5dadb88f028db2e6242f01132035a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 39, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 39, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 39, $this->getSourceContext()); })()))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_3e46baa304839d8484fc6a7e0b16360c9d5dadb88f028db2e6242f01132035a9->leave($__internal_3e46baa304839d8484fc6a7e0b16360c9d5dadb88f028db2e6242f01132035a9_prof);

        
        $__internal_b0010b57c489206b5476f63946a8b02e836874a7e79289bbb36ce7969e2baa56->leave($__internal_b0010b57c489206b5476f63946a8b02e836874a7e79289bbb36ce7969e2baa56_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_b0781eef7237c533cc1ecc86d76acc0fabbcac906c6101898b6dce76d7d75b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0781eef7237c533cc1ecc86d76acc0fabbcac906c6101898b6dce76d7d75b9f->enter($__internal_b0781eef7237c533cc1ecc86d76acc0fabbcac906c6101898b6dce76d7d75b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_526c0a6fa4678d391bf9005e377632f40aa799e3fe98b082a5d8bb49f5f30ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_526c0a6fa4678d391bf9005e377632f40aa799e3fe98b082a5d8bb49f5f30ef6->enter($__internal_526c0a6fa4678d391bf9005e377632f40aa799e3fe98b082a5d8bb49f5f30ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_526c0a6fa4678d391bf9005e377632f40aa799e3fe98b082a5d8bb49f5f30ef6->leave($__internal_526c0a6fa4678d391bf9005e377632f40aa799e3fe98b082a5d8bb49f5f30ef6_prof);

        
        $__internal_b0781eef7237c533cc1ecc86d76acc0fabbcac906c6101898b6dce76d7d75b9f->leave($__internal_b0781eef7237c533cc1ecc86d76acc0fabbcac906c6101898b6dce76d7d75b9f_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_62f7d456719afba0fb528e49ce668d9b2b4af30f831e197e5ad49086ec8c1c05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62f7d456719afba0fb528e49ce668d9b2b4af30f831e197e5ad49086ec8c1c05->enter($__internal_62f7d456719afba0fb528e49ce668d9b2b4af30f831e197e5ad49086ec8c1c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_4e61b462328781789046ab25d8e05ada56fc18acbcffc5071d6067bfd0b34069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e61b462328781789046ab25d8e05ada56fc18acbcffc5071d6067bfd0b34069->enter($__internal_4e61b462328781789046ab25d8e05ada56fc18acbcffc5071d6067bfd0b34069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_4e61b462328781789046ab25d8e05ada56fc18acbcffc5071d6067bfd0b34069->leave($__internal_4e61b462328781789046ab25d8e05ada56fc18acbcffc5071d6067bfd0b34069_prof);

        
        $__internal_62f7d456719afba0fb528e49ce668d9b2b4af30f831e197e5ad49086ec8c1c05->leave($__internal_62f7d456719afba0fb528e49ce668d9b2b4af30f831e197e5ad49086ec8c1c05_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_5f0bed9034d22b38e2162613a43a15428506f20c0da5e8c6ea4ed80f839d24c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f0bed9034d22b38e2162613a43a15428506f20c0da5e8c6ea4ed80f839d24c3->enter($__internal_5f0bed9034d22b38e2162613a43a15428506f20c0da5e8c6ea4ed80f839d24c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_5920d1ed6c7a65ab4c1500e4fceb2d2d87b721c9d480b02b4f70b8126ed8189a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5920d1ed6c7a65ab4c1500e4fceb2d2d87b721c9d480b02b4f70b8126ed8189a->enter($__internal_5920d1ed6c7a65ab4c1500e4fceb2d2d87b721c9d480b02b4f70b8126ed8189a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_5920d1ed6c7a65ab4c1500e4fceb2d2d87b721c9d480b02b4f70b8126ed8189a->leave($__internal_5920d1ed6c7a65ab4c1500e4fceb2d2d87b721c9d480b02b4f70b8126ed8189a_prof);

        
        $__internal_5f0bed9034d22b38e2162613a43a15428506f20c0da5e8c6ea4ed80f839d24c3->leave($__internal_5f0bed9034d22b38e2162613a43a15428506f20c0da5e8c6ea4ed80f839d24c3_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_428a65f4366276a0c91627ee78bda1aa395e50922242344f1021472542bb0c1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_428a65f4366276a0c91627ee78bda1aa395e50922242344f1021472542bb0c1d->enter($__internal_428a65f4366276a0c91627ee78bda1aa395e50922242344f1021472542bb0c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_acaa7c9bd0782c7220b0e6cf51cd28bbd45ba0868765533fd9e0d36884ef0480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acaa7c9bd0782c7220b0e6cf51cd28bbd45ba0868765533fd9e0d36884ef0480->enter($__internal_acaa7c9bd0782c7220b0e6cf51cd28bbd45ba0868765533fd9e0d36884ef0480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->getSourceContext()); })()), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_acaa7c9bd0782c7220b0e6cf51cd28bbd45ba0868765533fd9e0d36884ef0480->leave($__internal_acaa7c9bd0782c7220b0e6cf51cd28bbd45ba0868765533fd9e0d36884ef0480_prof);

        
        $__internal_428a65f4366276a0c91627ee78bda1aa395e50922242344f1021472542bb0c1d->leave($__internal_428a65f4366276a0c91627ee78bda1aa395e50922242344f1021472542bb0c1d_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
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
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
