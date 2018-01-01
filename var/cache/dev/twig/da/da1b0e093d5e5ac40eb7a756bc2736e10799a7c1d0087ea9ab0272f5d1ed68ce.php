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
        $__internal_22582a9d149ed7d1ed7341a2869082b5a692e3c6a80341bbb84f8eb56fb90cbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22582a9d149ed7d1ed7341a2869082b5a692e3c6a80341bbb84f8eb56fb90cbe->enter($__internal_22582a9d149ed7d1ed7341a2869082b5a692e3c6a80341bbb84f8eb56fb90cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_28df93e03d8de76197930c205adfee67141695139209d7d2bec96f13f8acfa7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28df93e03d8de76197930c205adfee67141695139209d7d2bec96f13f8acfa7a->enter($__internal_28df93e03d8de76197930c205adfee67141695139209d7d2bec96f13f8acfa7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_22582a9d149ed7d1ed7341a2869082b5a692e3c6a80341bbb84f8eb56fb90cbe->leave($__internal_22582a9d149ed7d1ed7341a2869082b5a692e3c6a80341bbb84f8eb56fb90cbe_prof);

        
        $__internal_28df93e03d8de76197930c205adfee67141695139209d7d2bec96f13f8acfa7a->leave($__internal_28df93e03d8de76197930c205adfee67141695139209d7d2bec96f13f8acfa7a_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_9803ef97211ff49bd9abce00264791dcddb41a9d913612b60a4198feddaa949f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9803ef97211ff49bd9abce00264791dcddb41a9d913612b60a4198feddaa949f->enter($__internal_9803ef97211ff49bd9abce00264791dcddb41a9d913612b60a4198feddaa949f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_f48a4834f4fd83146df83d596654193df53eeb6783d0a911f7218eebf77ba599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48a4834f4fd83146df83d596654193df53eeb6783d0a911f7218eebf77ba599->enter($__internal_f48a4834f4fd83146df83d596654193df53eeb6783d0a911f7218eebf77ba599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_f48a4834f4fd83146df83d596654193df53eeb6783d0a911f7218eebf77ba599->leave($__internal_f48a4834f4fd83146df83d596654193df53eeb6783d0a911f7218eebf77ba599_prof);

        
        $__internal_9803ef97211ff49bd9abce00264791dcddb41a9d913612b60a4198feddaa949f->leave($__internal_9803ef97211ff49bd9abce00264791dcddb41a9d913612b60a4198feddaa949f_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_a47d71d82628daf05b06bc31229739e0613b0073370c6d6d1f1c8aae3bd5f467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a47d71d82628daf05b06bc31229739e0613b0073370c6d6d1f1c8aae3bd5f467->enter($__internal_a47d71d82628daf05b06bc31229739e0613b0073370c6d6d1f1c8aae3bd5f467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_2d8c1f1316a4843824429c198ca50443aa911d818a492b5fb32c4e4666531519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8c1f1316a4843824429c198ca50443aa911d818a492b5fb32c4e4666531519->enter($__internal_2d8c1f1316a4843824429c198ca50443aa911d818a492b5fb32c4e4666531519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_2d8c1f1316a4843824429c198ca50443aa911d818a492b5fb32c4e4666531519->leave($__internal_2d8c1f1316a4843824429c198ca50443aa911d818a492b5fb32c4e4666531519_prof);

        
        $__internal_a47d71d82628daf05b06bc31229739e0613b0073370c6d6d1f1c8aae3bd5f467->leave($__internal_a47d71d82628daf05b06bc31229739e0613b0073370c6d6d1f1c8aae3bd5f467_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_43c8cac7882bb50e1319a6af7173177fcea5c85c2f9f1e76031941ab33e2ae3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c8cac7882bb50e1319a6af7173177fcea5c85c2f9f1e76031941ab33e2ae3f->enter($__internal_43c8cac7882bb50e1319a6af7173177fcea5c85c2f9f1e76031941ab33e2ae3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_74f3c825a98daa3ec377a2cf34fd62e810afb30ea2fc761ac3410bfb5e6a0bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74f3c825a98daa3ec377a2cf34fd62e810afb30ea2fc761ac3410bfb5e6a0bc3->enter($__internal_74f3c825a98daa3ec377a2cf34fd62e810afb30ea2fc761ac3410bfb5e6a0bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_74f3c825a98daa3ec377a2cf34fd62e810afb30ea2fc761ac3410bfb5e6a0bc3->leave($__internal_74f3c825a98daa3ec377a2cf34fd62e810afb30ea2fc761ac3410bfb5e6a0bc3_prof);

        
        $__internal_43c8cac7882bb50e1319a6af7173177fcea5c85c2f9f1e76031941ab33e2ae3f->leave($__internal_43c8cac7882bb50e1319a6af7173177fcea5c85c2f9f1e76031941ab33e2ae3f_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_84abfaa450084b1fb197ddfabcb66c50a5f9ea5324818e03787e8f0dc5cb859f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84abfaa450084b1fb197ddfabcb66c50a5f9ea5324818e03787e8f0dc5cb859f->enter($__internal_84abfaa450084b1fb197ddfabcb66c50a5f9ea5324818e03787e8f0dc5cb859f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_f8a21f8a34ff8dea662a77c6a85e51b5e2f6815b3b538756c33cd711c5c258eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8a21f8a34ff8dea662a77c6a85e51b5e2f6815b3b538756c33cd711c5c258eb->enter($__internal_f8a21f8a34ff8dea662a77c6a85e51b5e2f6815b3b538756c33cd711c5c258eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_f8a21f8a34ff8dea662a77c6a85e51b5e2f6815b3b538756c33cd711c5c258eb->leave($__internal_f8a21f8a34ff8dea662a77c6a85e51b5e2f6815b3b538756c33cd711c5c258eb_prof);

        
        $__internal_84abfaa450084b1fb197ddfabcb66c50a5f9ea5324818e03787e8f0dc5cb859f->leave($__internal_84abfaa450084b1fb197ddfabcb66c50a5f9ea5324818e03787e8f0dc5cb859f_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_91496e07a253112c4d1ee88c7865697aaf728cf3133f0e075cc1c6b13ba3684e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91496e07a253112c4d1ee88c7865697aaf728cf3133f0e075cc1c6b13ba3684e->enter($__internal_91496e07a253112c4d1ee88c7865697aaf728cf3133f0e075cc1c6b13ba3684e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_2bac5aace089b81bf234a259aef0ad7fc34ac21f764c80c63a386546d62d2bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bac5aace089b81bf234a259aef0ad7fc34ac21f764c80c63a386546d62d2bd7->enter($__internal_2bac5aace089b81bf234a259aef0ad7fc34ac21f764c80c63a386546d62d2bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_2bac5aace089b81bf234a259aef0ad7fc34ac21f764c80c63a386546d62d2bd7->leave($__internal_2bac5aace089b81bf234a259aef0ad7fc34ac21f764c80c63a386546d62d2bd7_prof);

        
        $__internal_91496e07a253112c4d1ee88c7865697aaf728cf3133f0e075cc1c6b13ba3684e->leave($__internal_91496e07a253112c4d1ee88c7865697aaf728cf3133f0e075cc1c6b13ba3684e_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_68ccbe89e89e6174a66efea1ae4dfb46bfbcaaa4e1e3def291b06c2fa7f33bf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68ccbe89e89e6174a66efea1ae4dfb46bfbcaaa4e1e3def291b06c2fa7f33bf5->enter($__internal_68ccbe89e89e6174a66efea1ae4dfb46bfbcaaa4e1e3def291b06c2fa7f33bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_064f0bdc44bb1e24b6b628897eba8cf16d97375183f7b1efcadb0d7291ef0948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_064f0bdc44bb1e24b6b628897eba8cf16d97375183f7b1efcadb0d7291ef0948->enter($__internal_064f0bdc44bb1e24b6b628897eba8cf16d97375183f7b1efcadb0d7291ef0948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_064f0bdc44bb1e24b6b628897eba8cf16d97375183f7b1efcadb0d7291ef0948->leave($__internal_064f0bdc44bb1e24b6b628897eba8cf16d97375183f7b1efcadb0d7291ef0948_prof);

        
        $__internal_68ccbe89e89e6174a66efea1ae4dfb46bfbcaaa4e1e3def291b06c2fa7f33bf5->leave($__internal_68ccbe89e89e6174a66efea1ae4dfb46bfbcaaa4e1e3def291b06c2fa7f33bf5_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_db70e8d209cb648c5a6e5d853383bced5ff36b4b0b0a2c1c9ff82727ee8a90a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db70e8d209cb648c5a6e5d853383bced5ff36b4b0b0a2c1c9ff82727ee8a90a5->enter($__internal_db70e8d209cb648c5a6e5d853383bced5ff36b4b0b0a2c1c9ff82727ee8a90a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_3d5b350e3688624efda8d8f7cdfe6a69f5bda867c039de9a10a8020b7c64c3c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d5b350e3688624efda8d8f7cdfe6a69f5bda867c039de9a10a8020b7c64c3c9->enter($__internal_3d5b350e3688624efda8d8f7cdfe6a69f5bda867c039de9a10a8020b7c64c3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_3d5b350e3688624efda8d8f7cdfe6a69f5bda867c039de9a10a8020b7c64c3c9->leave($__internal_3d5b350e3688624efda8d8f7cdfe6a69f5bda867c039de9a10a8020b7c64c3c9_prof);

        
        $__internal_db70e8d209cb648c5a6e5d853383bced5ff36b4b0b0a2c1c9ff82727ee8a90a5->leave($__internal_db70e8d209cb648c5a6e5d853383bced5ff36b4b0b0a2c1c9ff82727ee8a90a5_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_a996865419a790bc8b969eb0d853bc5fe9734e17383dc9db481ee525a8c90793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a996865419a790bc8b969eb0d853bc5fe9734e17383dc9db481ee525a8c90793->enter($__internal_a996865419a790bc8b969eb0d853bc5fe9734e17383dc9db481ee525a8c90793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_c33a1d2aa5c6ae344253fb54499fe84daa337bad0e91a2624f3d386b93c88455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c33a1d2aa5c6ae344253fb54499fe84daa337bad0e91a2624f3d386b93c88455->enter($__internal_c33a1d2aa5c6ae344253fb54499fe84daa337bad0e91a2624f3d386b93c88455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_c33a1d2aa5c6ae344253fb54499fe84daa337bad0e91a2624f3d386b93c88455->leave($__internal_c33a1d2aa5c6ae344253fb54499fe84daa337bad0e91a2624f3d386b93c88455_prof);

        
        $__internal_a996865419a790bc8b969eb0d853bc5fe9734e17383dc9db481ee525a8c90793->leave($__internal_a996865419a790bc8b969eb0d853bc5fe9734e17383dc9db481ee525a8c90793_prof);

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
