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
        $__internal_18934918a375c83f9ede03d096fdcf84c5bcdec80c7010cbc1926e8c191e8496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18934918a375c83f9ede03d096fdcf84c5bcdec80c7010cbc1926e8c191e8496->enter($__internal_18934918a375c83f9ede03d096fdcf84c5bcdec80c7010cbc1926e8c191e8496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_c96faa73026c4ed4060b972f35a09da37965a7819fbfc1f6e8d299c5d1ee401a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96faa73026c4ed4060b972f35a09da37965a7819fbfc1f6e8d299c5d1ee401a->enter($__internal_c96faa73026c4ed4060b972f35a09da37965a7819fbfc1f6e8d299c5d1ee401a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_18934918a375c83f9ede03d096fdcf84c5bcdec80c7010cbc1926e8c191e8496->leave($__internal_18934918a375c83f9ede03d096fdcf84c5bcdec80c7010cbc1926e8c191e8496_prof);

        
        $__internal_c96faa73026c4ed4060b972f35a09da37965a7819fbfc1f6e8d299c5d1ee401a->leave($__internal_c96faa73026c4ed4060b972f35a09da37965a7819fbfc1f6e8d299c5d1ee401a_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_301efd7bb791173860e42ee8c44de0cdf4c651ee93e1b40b65c2f72c5024f4fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_301efd7bb791173860e42ee8c44de0cdf4c651ee93e1b40b65c2f72c5024f4fa->enter($__internal_301efd7bb791173860e42ee8c44de0cdf4c651ee93e1b40b65c2f72c5024f4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_bf6d590e225416e9e24ee5c95f3c73b264e32869b9b4f03613de5f60b6447236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf6d590e225416e9e24ee5c95f3c73b264e32869b9b4f03613de5f60b6447236->enter($__internal_bf6d590e225416e9e24ee5c95f3c73b264e32869b9b4f03613de5f60b6447236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_bf6d590e225416e9e24ee5c95f3c73b264e32869b9b4f03613de5f60b6447236->leave($__internal_bf6d590e225416e9e24ee5c95f3c73b264e32869b9b4f03613de5f60b6447236_prof);

        
        $__internal_301efd7bb791173860e42ee8c44de0cdf4c651ee93e1b40b65c2f72c5024f4fa->leave($__internal_301efd7bb791173860e42ee8c44de0cdf4c651ee93e1b40b65c2f72c5024f4fa_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_561eea1925dec60624b16d86ab7e7e96ab0a25487b2999b48ad367faa2d371c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_561eea1925dec60624b16d86ab7e7e96ab0a25487b2999b48ad367faa2d371c1->enter($__internal_561eea1925dec60624b16d86ab7e7e96ab0a25487b2999b48ad367faa2d371c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_9331c3aa8f119a4d044a108f94de7ade0d0e04db4526ff0a168c8cb4c15eb25f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9331c3aa8f119a4d044a108f94de7ade0d0e04db4526ff0a168c8cb4c15eb25f->enter($__internal_9331c3aa8f119a4d044a108f94de7ade0d0e04db4526ff0a168c8cb4c15eb25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_9331c3aa8f119a4d044a108f94de7ade0d0e04db4526ff0a168c8cb4c15eb25f->leave($__internal_9331c3aa8f119a4d044a108f94de7ade0d0e04db4526ff0a168c8cb4c15eb25f_prof);

        
        $__internal_561eea1925dec60624b16d86ab7e7e96ab0a25487b2999b48ad367faa2d371c1->leave($__internal_561eea1925dec60624b16d86ab7e7e96ab0a25487b2999b48ad367faa2d371c1_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_74a0c159ee029d5a7275fe9384b8d4b5c0a4a92bb7bfbdb9cfc2f3a97e97b4a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74a0c159ee029d5a7275fe9384b8d4b5c0a4a92bb7bfbdb9cfc2f3a97e97b4a0->enter($__internal_74a0c159ee029d5a7275fe9384b8d4b5c0a4a92bb7bfbdb9cfc2f3a97e97b4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a6f7d85bcca20295d116330643365d70ca8d716bf0a33fb033b2f7fd8e173950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f7d85bcca20295d116330643365d70ca8d716bf0a33fb033b2f7fd8e173950->enter($__internal_a6f7d85bcca20295d116330643365d70ca8d716bf0a33fb033b2f7fd8e173950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_a6f7d85bcca20295d116330643365d70ca8d716bf0a33fb033b2f7fd8e173950->leave($__internal_a6f7d85bcca20295d116330643365d70ca8d716bf0a33fb033b2f7fd8e173950_prof);

        
        $__internal_74a0c159ee029d5a7275fe9384b8d4b5c0a4a92bb7bfbdb9cfc2f3a97e97b4a0->leave($__internal_74a0c159ee029d5a7275fe9384b8d4b5c0a4a92bb7bfbdb9cfc2f3a97e97b4a0_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_659343224e60b633544da678b1c4b554b69dd583569858e936eed98082847b1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_659343224e60b633544da678b1c4b554b69dd583569858e936eed98082847b1d->enter($__internal_659343224e60b633544da678b1c4b554b69dd583569858e936eed98082847b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_dc8a317063f08f3af0279601929a43aa112274d4e554ae7888406acc8a810537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc8a317063f08f3af0279601929a43aa112274d4e554ae7888406acc8a810537->enter($__internal_dc8a317063f08f3af0279601929a43aa112274d4e554ae7888406acc8a810537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_dc8a317063f08f3af0279601929a43aa112274d4e554ae7888406acc8a810537->leave($__internal_dc8a317063f08f3af0279601929a43aa112274d4e554ae7888406acc8a810537_prof);

        
        $__internal_659343224e60b633544da678b1c4b554b69dd583569858e936eed98082847b1d->leave($__internal_659343224e60b633544da678b1c4b554b69dd583569858e936eed98082847b1d_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_1eae9590937da13f68f2778f59cf3e7bd49c3129ec0a6afa03f3f614dcc3bfb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eae9590937da13f68f2778f59cf3e7bd49c3129ec0a6afa03f3f614dcc3bfb6->enter($__internal_1eae9590937da13f68f2778f59cf3e7bd49c3129ec0a6afa03f3f614dcc3bfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_7797f811f396f7bd775041261bfb50d44ce96db3181cd21393ad664ada465bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7797f811f396f7bd775041261bfb50d44ce96db3181cd21393ad664ada465bec->enter($__internal_7797f811f396f7bd775041261bfb50d44ce96db3181cd21393ad664ada465bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_7797f811f396f7bd775041261bfb50d44ce96db3181cd21393ad664ada465bec->leave($__internal_7797f811f396f7bd775041261bfb50d44ce96db3181cd21393ad664ada465bec_prof);

        
        $__internal_1eae9590937da13f68f2778f59cf3e7bd49c3129ec0a6afa03f3f614dcc3bfb6->leave($__internal_1eae9590937da13f68f2778f59cf3e7bd49c3129ec0a6afa03f3f614dcc3bfb6_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_05d5540a34af3eaf22c282a92f0441f35549df44ee79a08eb9669d91724afbd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05d5540a34af3eaf22c282a92f0441f35549df44ee79a08eb9669d91724afbd0->enter($__internal_05d5540a34af3eaf22c282a92f0441f35549df44ee79a08eb9669d91724afbd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_eabc8ac4f218309b79f943c43064e9d87ad23de621335a8b877663f5e3d2251b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eabc8ac4f218309b79f943c43064e9d87ad23de621335a8b877663f5e3d2251b->enter($__internal_eabc8ac4f218309b79f943c43064e9d87ad23de621335a8b877663f5e3d2251b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_eabc8ac4f218309b79f943c43064e9d87ad23de621335a8b877663f5e3d2251b->leave($__internal_eabc8ac4f218309b79f943c43064e9d87ad23de621335a8b877663f5e3d2251b_prof);

        
        $__internal_05d5540a34af3eaf22c282a92f0441f35549df44ee79a08eb9669d91724afbd0->leave($__internal_05d5540a34af3eaf22c282a92f0441f35549df44ee79a08eb9669d91724afbd0_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_3b5d116c11cbc6e40d47b24ee0903885f54dd96ffd16717879e563e850f15c94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b5d116c11cbc6e40d47b24ee0903885f54dd96ffd16717879e563e850f15c94->enter($__internal_3b5d116c11cbc6e40d47b24ee0903885f54dd96ffd16717879e563e850f15c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_9b49de4d2609201bb06c46e1435cb7a7ffef9fb450ffe81cd00abe24f60c69fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b49de4d2609201bb06c46e1435cb7a7ffef9fb450ffe81cd00abe24f60c69fb->enter($__internal_9b49de4d2609201bb06c46e1435cb7a7ffef9fb450ffe81cd00abe24f60c69fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_9b49de4d2609201bb06c46e1435cb7a7ffef9fb450ffe81cd00abe24f60c69fb->leave($__internal_9b49de4d2609201bb06c46e1435cb7a7ffef9fb450ffe81cd00abe24f60c69fb_prof);

        
        $__internal_3b5d116c11cbc6e40d47b24ee0903885f54dd96ffd16717879e563e850f15c94->leave($__internal_3b5d116c11cbc6e40d47b24ee0903885f54dd96ffd16717879e563e850f15c94_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_cf3784f8439c7783772e4ca32aef8c9570c3bf336a0a835e2a6acfc6838e7d6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf3784f8439c7783772e4ca32aef8c9570c3bf336a0a835e2a6acfc6838e7d6e->enter($__internal_cf3784f8439c7783772e4ca32aef8c9570c3bf336a0a835e2a6acfc6838e7d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_22a652b51c561062bce2b8e05cc02dc14549ff82386817eb9a552afd5ebecc8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22a652b51c561062bce2b8e05cc02dc14549ff82386817eb9a552afd5ebecc8a->enter($__internal_22a652b51c561062bce2b8e05cc02dc14549ff82386817eb9a552afd5ebecc8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_22a652b51c561062bce2b8e05cc02dc14549ff82386817eb9a552afd5ebecc8a->leave($__internal_22a652b51c561062bce2b8e05cc02dc14549ff82386817eb9a552afd5ebecc8a_prof);

        
        $__internal_cf3784f8439c7783772e4ca32aef8c9570c3bf336a0a835e2a6acfc6838e7d6e->leave($__internal_cf3784f8439c7783772e4ca32aef8c9570c3bf336a0a835e2a6acfc6838e7d6e_prof);

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
