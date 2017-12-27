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
        $__internal_c8978446dab8b1f81241f06f7cf4e24bf50d81a680823a11e45a0ba2ed194074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8978446dab8b1f81241f06f7cf4e24bf50d81a680823a11e45a0ba2ed194074->enter($__internal_c8978446dab8b1f81241f06f7cf4e24bf50d81a680823a11e45a0ba2ed194074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_4d77e84541103a7272b62f18794ec9b95f427570ff2be46f99d98bd0c42a4d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d77e84541103a7272b62f18794ec9b95f427570ff2be46f99d98bd0c42a4d25->enter($__internal_4d77e84541103a7272b62f18794ec9b95f427570ff2be46f99d98bd0c42a4d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_c8978446dab8b1f81241f06f7cf4e24bf50d81a680823a11e45a0ba2ed194074->leave($__internal_c8978446dab8b1f81241f06f7cf4e24bf50d81a680823a11e45a0ba2ed194074_prof);

        
        $__internal_4d77e84541103a7272b62f18794ec9b95f427570ff2be46f99d98bd0c42a4d25->leave($__internal_4d77e84541103a7272b62f18794ec9b95f427570ff2be46f99d98bd0c42a4d25_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d9930c23429b8900c112167b60386f6c190c23b6806c52eaa86d273f110a3ffd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9930c23429b8900c112167b60386f6c190c23b6806c52eaa86d273f110a3ffd->enter($__internal_d9930c23429b8900c112167b60386f6c190c23b6806c52eaa86d273f110a3ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_9b65f175ecd5ec7797651c76944723531bf6b540906ed8ac8727963a142945aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b65f175ecd5ec7797651c76944723531bf6b540906ed8ac8727963a142945aa->enter($__internal_9b65f175ecd5ec7797651c76944723531bf6b540906ed8ac8727963a142945aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_9b65f175ecd5ec7797651c76944723531bf6b540906ed8ac8727963a142945aa->leave($__internal_9b65f175ecd5ec7797651c76944723531bf6b540906ed8ac8727963a142945aa_prof);

        
        $__internal_d9930c23429b8900c112167b60386f6c190c23b6806c52eaa86d273f110a3ffd->leave($__internal_d9930c23429b8900c112167b60386f6c190c23b6806c52eaa86d273f110a3ffd_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_0d333d08647e69cb415611f6b2ed0d0a77042b9407163ab0911d3ae8c22cf94d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d333d08647e69cb415611f6b2ed0d0a77042b9407163ab0911d3ae8c22cf94d->enter($__internal_0d333d08647e69cb415611f6b2ed0d0a77042b9407163ab0911d3ae8c22cf94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_500fd187cb9cf70fe5ee19ca904c1fbafb0a9d30b2075b6b65ee98c0cb582a0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500fd187cb9cf70fe5ee19ca904c1fbafb0a9d30b2075b6b65ee98c0cb582a0b->enter($__internal_500fd187cb9cf70fe5ee19ca904c1fbafb0a9d30b2075b6b65ee98c0cb582a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_500fd187cb9cf70fe5ee19ca904c1fbafb0a9d30b2075b6b65ee98c0cb582a0b->leave($__internal_500fd187cb9cf70fe5ee19ca904c1fbafb0a9d30b2075b6b65ee98c0cb582a0b_prof);

        
        $__internal_0d333d08647e69cb415611f6b2ed0d0a77042b9407163ab0911d3ae8c22cf94d->leave($__internal_0d333d08647e69cb415611f6b2ed0d0a77042b9407163ab0911d3ae8c22cf94d_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ed7504484121fcdcacfeb396a33e0598984acdd24c05a42fc9553798e51fbc75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed7504484121fcdcacfeb396a33e0598984acdd24c05a42fc9553798e51fbc75->enter($__internal_ed7504484121fcdcacfeb396a33e0598984acdd24c05a42fc9553798e51fbc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_e4a445da3f98880096ddf749fcd1baa9fa507a9f0eadf12bfecc1b94b0280429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a445da3f98880096ddf749fcd1baa9fa507a9f0eadf12bfecc1b94b0280429->enter($__internal_e4a445da3f98880096ddf749fcd1baa9fa507a9f0eadf12bfecc1b94b0280429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_e4a445da3f98880096ddf749fcd1baa9fa507a9f0eadf12bfecc1b94b0280429->leave($__internal_e4a445da3f98880096ddf749fcd1baa9fa507a9f0eadf12bfecc1b94b0280429_prof);

        
        $__internal_ed7504484121fcdcacfeb396a33e0598984acdd24c05a42fc9553798e51fbc75->leave($__internal_ed7504484121fcdcacfeb396a33e0598984acdd24c05a42fc9553798e51fbc75_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_bedc2c11847f049ea2461cdedcf4b95b03340eab070b40359e79c2f943ef5f39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bedc2c11847f049ea2461cdedcf4b95b03340eab070b40359e79c2f943ef5f39->enter($__internal_bedc2c11847f049ea2461cdedcf4b95b03340eab070b40359e79c2f943ef5f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_0a275d80d43bb3fa5135ff1b0eeb7b36bba7b6c3e10257c528f5079d1a9a648a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a275d80d43bb3fa5135ff1b0eeb7b36bba7b6c3e10257c528f5079d1a9a648a->enter($__internal_0a275d80d43bb3fa5135ff1b0eeb7b36bba7b6c3e10257c528f5079d1a9a648a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_0a275d80d43bb3fa5135ff1b0eeb7b36bba7b6c3e10257c528f5079d1a9a648a->leave($__internal_0a275d80d43bb3fa5135ff1b0eeb7b36bba7b6c3e10257c528f5079d1a9a648a_prof);

        
        $__internal_bedc2c11847f049ea2461cdedcf4b95b03340eab070b40359e79c2f943ef5f39->leave($__internal_bedc2c11847f049ea2461cdedcf4b95b03340eab070b40359e79c2f943ef5f39_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_163962b82b4a2e8a60ff33edb8d19e9e1e64d9aa51459c3d3938c15ceacd6949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_163962b82b4a2e8a60ff33edb8d19e9e1e64d9aa51459c3d3938c15ceacd6949->enter($__internal_163962b82b4a2e8a60ff33edb8d19e9e1e64d9aa51459c3d3938c15ceacd6949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_7964419155e27ad43e83f42f3fbe5bc6f8e79e6ba79c9be3f27a43929e6f01d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7964419155e27ad43e83f42f3fbe5bc6f8e79e6ba79c9be3f27a43929e6f01d3->enter($__internal_7964419155e27ad43e83f42f3fbe5bc6f8e79e6ba79c9be3f27a43929e6f01d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_7964419155e27ad43e83f42f3fbe5bc6f8e79e6ba79c9be3f27a43929e6f01d3->leave($__internal_7964419155e27ad43e83f42f3fbe5bc6f8e79e6ba79c9be3f27a43929e6f01d3_prof);

        
        $__internal_163962b82b4a2e8a60ff33edb8d19e9e1e64d9aa51459c3d3938c15ceacd6949->leave($__internal_163962b82b4a2e8a60ff33edb8d19e9e1e64d9aa51459c3d3938c15ceacd6949_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_8efc716699597cf7baa9cb6d76c18062d33c8183a108eb35278f6c6fd9674222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8efc716699597cf7baa9cb6d76c18062d33c8183a108eb35278f6c6fd9674222->enter($__internal_8efc716699597cf7baa9cb6d76c18062d33c8183a108eb35278f6c6fd9674222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_76dd4c6660dfdfabbf05131b29c52e7bce7802854f1c2df4574dec0dd67c347e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76dd4c6660dfdfabbf05131b29c52e7bce7802854f1c2df4574dec0dd67c347e->enter($__internal_76dd4c6660dfdfabbf05131b29c52e7bce7802854f1c2df4574dec0dd67c347e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_76dd4c6660dfdfabbf05131b29c52e7bce7802854f1c2df4574dec0dd67c347e->leave($__internal_76dd4c6660dfdfabbf05131b29c52e7bce7802854f1c2df4574dec0dd67c347e_prof);

        
        $__internal_8efc716699597cf7baa9cb6d76c18062d33c8183a108eb35278f6c6fd9674222->leave($__internal_8efc716699597cf7baa9cb6d76c18062d33c8183a108eb35278f6c6fd9674222_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_523dfcf2b6d75ee2b181b35792374ad3e5453d74b3842cda57dea37101d0c235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_523dfcf2b6d75ee2b181b35792374ad3e5453d74b3842cda57dea37101d0c235->enter($__internal_523dfcf2b6d75ee2b181b35792374ad3e5453d74b3842cda57dea37101d0c235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_27ac80f124008de60661210a3abbb6efae15b08dba888105af28bfca85863a00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ac80f124008de60661210a3abbb6efae15b08dba888105af28bfca85863a00->enter($__internal_27ac80f124008de60661210a3abbb6efae15b08dba888105af28bfca85863a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_27ac80f124008de60661210a3abbb6efae15b08dba888105af28bfca85863a00->leave($__internal_27ac80f124008de60661210a3abbb6efae15b08dba888105af28bfca85863a00_prof);

        
        $__internal_523dfcf2b6d75ee2b181b35792374ad3e5453d74b3842cda57dea37101d0c235->leave($__internal_523dfcf2b6d75ee2b181b35792374ad3e5453d74b3842cda57dea37101d0c235_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_8f5d2470015082a25e5534f29e6713d5f4d15b7c0000263d29aee4189a77abd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f5d2470015082a25e5534f29e6713d5f4d15b7c0000263d29aee4189a77abd0->enter($__internal_8f5d2470015082a25e5534f29e6713d5f4d15b7c0000263d29aee4189a77abd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_74845f687863ec7bb10c1bf3874ecfd2450a59cd551f6d06c5b9c24af6d9594e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74845f687863ec7bb10c1bf3874ecfd2450a59cd551f6d06c5b9c24af6d9594e->enter($__internal_74845f687863ec7bb10c1bf3874ecfd2450a59cd551f6d06c5b9c24af6d9594e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_74845f687863ec7bb10c1bf3874ecfd2450a59cd551f6d06c5b9c24af6d9594e->leave($__internal_74845f687863ec7bb10c1bf3874ecfd2450a59cd551f6d06c5b9c24af6d9594e_prof);

        
        $__internal_8f5d2470015082a25e5534f29e6713d5f4d15b7c0000263d29aee4189a77abd0->leave($__internal_8f5d2470015082a25e5534f29e6713d5f4d15b7c0000263d29aee4189a77abd0_prof);

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
", "bootstrap_4_horizontal_layout.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
