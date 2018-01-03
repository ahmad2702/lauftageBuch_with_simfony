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
        $__internal_3e03ec27528226f906d794cdefe610c5511d335bca5e66ee85292d2f35977a21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e03ec27528226f906d794cdefe610c5511d335bca5e66ee85292d2f35977a21->enter($__internal_3e03ec27528226f906d794cdefe610c5511d335bca5e66ee85292d2f35977a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_7f2239d3c03c77a71b4cbf27aad4bd682353a2b6e7c33f25faf14b3a6aab7d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2239d3c03c77a71b4cbf27aad4bd682353a2b6e7c33f25faf14b3a6aab7d84->enter($__internal_7f2239d3c03c77a71b4cbf27aad4bd682353a2b6e7c33f25faf14b3a6aab7d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_3e03ec27528226f906d794cdefe610c5511d335bca5e66ee85292d2f35977a21->leave($__internal_3e03ec27528226f906d794cdefe610c5511d335bca5e66ee85292d2f35977a21_prof);

        
        $__internal_7f2239d3c03c77a71b4cbf27aad4bd682353a2b6e7c33f25faf14b3a6aab7d84->leave($__internal_7f2239d3c03c77a71b4cbf27aad4bd682353a2b6e7c33f25faf14b3a6aab7d84_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_e9e5cbf72734d369280bc648d80ccc61ba28c8676760c659ad576e1501f6b72d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9e5cbf72734d369280bc648d80ccc61ba28c8676760c659ad576e1501f6b72d->enter($__internal_e9e5cbf72734d369280bc648d80ccc61ba28c8676760c659ad576e1501f6b72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_4bd9c34e29e1f20e61d41dcb4ffe828e0ec9221ce55214dac2d772797667cc92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd9c34e29e1f20e61d41dcb4ffe828e0ec9221ce55214dac2d772797667cc92->enter($__internal_4bd9c34e29e1f20e61d41dcb4ffe828e0ec9221ce55214dac2d772797667cc92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_4bd9c34e29e1f20e61d41dcb4ffe828e0ec9221ce55214dac2d772797667cc92->leave($__internal_4bd9c34e29e1f20e61d41dcb4ffe828e0ec9221ce55214dac2d772797667cc92_prof);

        
        $__internal_e9e5cbf72734d369280bc648d80ccc61ba28c8676760c659ad576e1501f6b72d->leave($__internal_e9e5cbf72734d369280bc648d80ccc61ba28c8676760c659ad576e1501f6b72d_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_58b862ef86c94700d816120d1ac6c2a56ec6ebb61d25be7a9b9236dcf3f95a15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58b862ef86c94700d816120d1ac6c2a56ec6ebb61d25be7a9b9236dcf3f95a15->enter($__internal_58b862ef86c94700d816120d1ac6c2a56ec6ebb61d25be7a9b9236dcf3f95a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_a3780f21de7401ed21f56e72d6ba58a0967c9b999d398d774449864cc69851d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3780f21de7401ed21f56e72d6ba58a0967c9b999d398d774449864cc69851d5->enter($__internal_a3780f21de7401ed21f56e72d6ba58a0967c9b999d398d774449864cc69851d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_a3780f21de7401ed21f56e72d6ba58a0967c9b999d398d774449864cc69851d5->leave($__internal_a3780f21de7401ed21f56e72d6ba58a0967c9b999d398d774449864cc69851d5_prof);

        
        $__internal_58b862ef86c94700d816120d1ac6c2a56ec6ebb61d25be7a9b9236dcf3f95a15->leave($__internal_58b862ef86c94700d816120d1ac6c2a56ec6ebb61d25be7a9b9236dcf3f95a15_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d56b2976fc57434f342aa1ecf8ecd1bc3cb250de9c747255722dcdbe0af5aa38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d56b2976fc57434f342aa1ecf8ecd1bc3cb250de9c747255722dcdbe0af5aa38->enter($__internal_d56b2976fc57434f342aa1ecf8ecd1bc3cb250de9c747255722dcdbe0af5aa38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_71b255c26e41d9aa04a3b74b758771c8327d0c7084a0b10c999a72259ea3aa34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71b255c26e41d9aa04a3b74b758771c8327d0c7084a0b10c999a72259ea3aa34->enter($__internal_71b255c26e41d9aa04a3b74b758771c8327d0c7084a0b10c999a72259ea3aa34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_71b255c26e41d9aa04a3b74b758771c8327d0c7084a0b10c999a72259ea3aa34->leave($__internal_71b255c26e41d9aa04a3b74b758771c8327d0c7084a0b10c999a72259ea3aa34_prof);

        
        $__internal_d56b2976fc57434f342aa1ecf8ecd1bc3cb250de9c747255722dcdbe0af5aa38->leave($__internal_d56b2976fc57434f342aa1ecf8ecd1bc3cb250de9c747255722dcdbe0af5aa38_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_6960872f0caab847335ee065e3f09ec143d6e7e44f2465ec79a64342438579f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6960872f0caab847335ee065e3f09ec143d6e7e44f2465ec79a64342438579f1->enter($__internal_6960872f0caab847335ee065e3f09ec143d6e7e44f2465ec79a64342438579f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_2fb3f6fa7f6fa5881466840fb354e21e6b8d78b1d6dcbdf66bb511ac7a112d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb3f6fa7f6fa5881466840fb354e21e6b8d78b1d6dcbdf66bb511ac7a112d65->enter($__internal_2fb3f6fa7f6fa5881466840fb354e21e6b8d78b1d6dcbdf66bb511ac7a112d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_2fb3f6fa7f6fa5881466840fb354e21e6b8d78b1d6dcbdf66bb511ac7a112d65->leave($__internal_2fb3f6fa7f6fa5881466840fb354e21e6b8d78b1d6dcbdf66bb511ac7a112d65_prof);

        
        $__internal_6960872f0caab847335ee065e3f09ec143d6e7e44f2465ec79a64342438579f1->leave($__internal_6960872f0caab847335ee065e3f09ec143d6e7e44f2465ec79a64342438579f1_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_9fe8807fd97d72d6a49e67453292aae2d6c30818f805e0eeee1f72d9fe01a48d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fe8807fd97d72d6a49e67453292aae2d6c30818f805e0eeee1f72d9fe01a48d->enter($__internal_9fe8807fd97d72d6a49e67453292aae2d6c30818f805e0eeee1f72d9fe01a48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_fd882e2d291ed1e6d9bc7024ba2dc35f58035af983e8ca4d5a901e995d00e42f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd882e2d291ed1e6d9bc7024ba2dc35f58035af983e8ca4d5a901e995d00e42f->enter($__internal_fd882e2d291ed1e6d9bc7024ba2dc35f58035af983e8ca4d5a901e995d00e42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_fd882e2d291ed1e6d9bc7024ba2dc35f58035af983e8ca4d5a901e995d00e42f->leave($__internal_fd882e2d291ed1e6d9bc7024ba2dc35f58035af983e8ca4d5a901e995d00e42f_prof);

        
        $__internal_9fe8807fd97d72d6a49e67453292aae2d6c30818f805e0eeee1f72d9fe01a48d->leave($__internal_9fe8807fd97d72d6a49e67453292aae2d6c30818f805e0eeee1f72d9fe01a48d_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_9c3d40d56c4fbd9a4844ca31f7288e928adccc694d0b1cee331056a2b95faa8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c3d40d56c4fbd9a4844ca31f7288e928adccc694d0b1cee331056a2b95faa8c->enter($__internal_9c3d40d56c4fbd9a4844ca31f7288e928adccc694d0b1cee331056a2b95faa8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_48125fd71e8b1025c5149505b7f177672827a27f3ee0b445fec5b3d999745076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48125fd71e8b1025c5149505b7f177672827a27f3ee0b445fec5b3d999745076->enter($__internal_48125fd71e8b1025c5149505b7f177672827a27f3ee0b445fec5b3d999745076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_48125fd71e8b1025c5149505b7f177672827a27f3ee0b445fec5b3d999745076->leave($__internal_48125fd71e8b1025c5149505b7f177672827a27f3ee0b445fec5b3d999745076_prof);

        
        $__internal_9c3d40d56c4fbd9a4844ca31f7288e928adccc694d0b1cee331056a2b95faa8c->leave($__internal_9c3d40d56c4fbd9a4844ca31f7288e928adccc694d0b1cee331056a2b95faa8c_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_965d03611977be2061017f165b612a4e3df8201a87a5a2fad3c2a4d0ac3c3680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_965d03611977be2061017f165b612a4e3df8201a87a5a2fad3c2a4d0ac3c3680->enter($__internal_965d03611977be2061017f165b612a4e3df8201a87a5a2fad3c2a4d0ac3c3680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_b2a90ddf90b3dc695ea055f8345c3d20e4ead06895805bbb7439f4ab76d6dedd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a90ddf90b3dc695ea055f8345c3d20e4ead06895805bbb7439f4ab76d6dedd->enter($__internal_b2a90ddf90b3dc695ea055f8345c3d20e4ead06895805bbb7439f4ab76d6dedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_b2a90ddf90b3dc695ea055f8345c3d20e4ead06895805bbb7439f4ab76d6dedd->leave($__internal_b2a90ddf90b3dc695ea055f8345c3d20e4ead06895805bbb7439f4ab76d6dedd_prof);

        
        $__internal_965d03611977be2061017f165b612a4e3df8201a87a5a2fad3c2a4d0ac3c3680->leave($__internal_965d03611977be2061017f165b612a4e3df8201a87a5a2fad3c2a4d0ac3c3680_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_c31fc297f43e52dc9388c0ffa98cff1ac8ba87a186e340987b77f9dacee6e642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c31fc297f43e52dc9388c0ffa98cff1ac8ba87a186e340987b77f9dacee6e642->enter($__internal_c31fc297f43e52dc9388c0ffa98cff1ac8ba87a186e340987b77f9dacee6e642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_33800421703b98dcd545c94b922a626ae8f33501f6dd8c9dbc36481a15b5ac5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33800421703b98dcd545c94b922a626ae8f33501f6dd8c9dbc36481a15b5ac5e->enter($__internal_33800421703b98dcd545c94b922a626ae8f33501f6dd8c9dbc36481a15b5ac5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_33800421703b98dcd545c94b922a626ae8f33501f6dd8c9dbc36481a15b5ac5e->leave($__internal_33800421703b98dcd545c94b922a626ae8f33501f6dd8c9dbc36481a15b5ac5e_prof);

        
        $__internal_c31fc297f43e52dc9388c0ffa98cff1ac8ba87a186e340987b77f9dacee6e642->leave($__internal_c31fc297f43e52dc9388c0ffa98cff1ac8ba87a186e340987b77f9dacee6e642_prof);

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
