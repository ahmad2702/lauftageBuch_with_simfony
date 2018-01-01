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
        $__internal_f7d7e2ab2ff9c210317e0a2c0d89c8823d341b2a9a6c350456fb574bfd6d9b86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7d7e2ab2ff9c210317e0a2c0d89c8823d341b2a9a6c350456fb574bfd6d9b86->enter($__internal_f7d7e2ab2ff9c210317e0a2c0d89c8823d341b2a9a6c350456fb574bfd6d9b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_0929f3be587b307d95509bff0460cc01a5772b98f6f93c6282cc584c9ce10d02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0929f3be587b307d95509bff0460cc01a5772b98f6f93c6282cc584c9ce10d02->enter($__internal_0929f3be587b307d95509bff0460cc01a5772b98f6f93c6282cc584c9ce10d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_f7d7e2ab2ff9c210317e0a2c0d89c8823d341b2a9a6c350456fb574bfd6d9b86->leave($__internal_f7d7e2ab2ff9c210317e0a2c0d89c8823d341b2a9a6c350456fb574bfd6d9b86_prof);

        
        $__internal_0929f3be587b307d95509bff0460cc01a5772b98f6f93c6282cc584c9ce10d02->leave($__internal_0929f3be587b307d95509bff0460cc01a5772b98f6f93c6282cc584c9ce10d02_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_6e0d0545577ba6e01b7efb269524015c5d5fbab0833ac776ec9c362281d6daa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e0d0545577ba6e01b7efb269524015c5d5fbab0833ac776ec9c362281d6daa9->enter($__internal_6e0d0545577ba6e01b7efb269524015c5d5fbab0833ac776ec9c362281d6daa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_911fef0413ca20ce4fc59cd677f2a94c8e1ea0e3400a59fcea460d9bb28a371d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_911fef0413ca20ce4fc59cd677f2a94c8e1ea0e3400a59fcea460d9bb28a371d->enter($__internal_911fef0413ca20ce4fc59cd677f2a94c8e1ea0e3400a59fcea460d9bb28a371d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_911fef0413ca20ce4fc59cd677f2a94c8e1ea0e3400a59fcea460d9bb28a371d->leave($__internal_911fef0413ca20ce4fc59cd677f2a94c8e1ea0e3400a59fcea460d9bb28a371d_prof);

        
        $__internal_6e0d0545577ba6e01b7efb269524015c5d5fbab0833ac776ec9c362281d6daa9->leave($__internal_6e0d0545577ba6e01b7efb269524015c5d5fbab0833ac776ec9c362281d6daa9_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_b4965241d153e792e4bfaaf718daf71f27f4f63c96ef60313827d5980c88770a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4965241d153e792e4bfaaf718daf71f27f4f63c96ef60313827d5980c88770a->enter($__internal_b4965241d153e792e4bfaaf718daf71f27f4f63c96ef60313827d5980c88770a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_f034c7e830abc45b85165c03fee4d36ed053575e477e15ad44bc5345d25b920c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f034c7e830abc45b85165c03fee4d36ed053575e477e15ad44bc5345d25b920c->enter($__internal_f034c7e830abc45b85165c03fee4d36ed053575e477e15ad44bc5345d25b920c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_f034c7e830abc45b85165c03fee4d36ed053575e477e15ad44bc5345d25b920c->leave($__internal_f034c7e830abc45b85165c03fee4d36ed053575e477e15ad44bc5345d25b920c_prof);

        
        $__internal_b4965241d153e792e4bfaaf718daf71f27f4f63c96ef60313827d5980c88770a->leave($__internal_b4965241d153e792e4bfaaf718daf71f27f4f63c96ef60313827d5980c88770a_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_7eceef3729e21481f2beb1db4f2c1af4aa7f31e44d30e57f6a720b0aa22341c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eceef3729e21481f2beb1db4f2c1af4aa7f31e44d30e57f6a720b0aa22341c7->enter($__internal_7eceef3729e21481f2beb1db4f2c1af4aa7f31e44d30e57f6a720b0aa22341c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_ee26f373e617366f17a5b9dcf045ee9fc6ff69fe780053065056db1f0cfcf4dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee26f373e617366f17a5b9dcf045ee9fc6ff69fe780053065056db1f0cfcf4dc->enter($__internal_ee26f373e617366f17a5b9dcf045ee9fc6ff69fe780053065056db1f0cfcf4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_ee26f373e617366f17a5b9dcf045ee9fc6ff69fe780053065056db1f0cfcf4dc->leave($__internal_ee26f373e617366f17a5b9dcf045ee9fc6ff69fe780053065056db1f0cfcf4dc_prof);

        
        $__internal_7eceef3729e21481f2beb1db4f2c1af4aa7f31e44d30e57f6a720b0aa22341c7->leave($__internal_7eceef3729e21481f2beb1db4f2c1af4aa7f31e44d30e57f6a720b0aa22341c7_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_72b5eaf42ca64a5f27fe64a6e1a4eefb509a39bd418308dc9d9eac7b8d5ed25b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72b5eaf42ca64a5f27fe64a6e1a4eefb509a39bd418308dc9d9eac7b8d5ed25b->enter($__internal_72b5eaf42ca64a5f27fe64a6e1a4eefb509a39bd418308dc9d9eac7b8d5ed25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c234da57a84df1ba06023799756051e7bc1485ac9be4c58e34c258167cd10cd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c234da57a84df1ba06023799756051e7bc1485ac9be4c58e34c258167cd10cd6->enter($__internal_c234da57a84df1ba06023799756051e7bc1485ac9be4c58e34c258167cd10cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_c234da57a84df1ba06023799756051e7bc1485ac9be4c58e34c258167cd10cd6->leave($__internal_c234da57a84df1ba06023799756051e7bc1485ac9be4c58e34c258167cd10cd6_prof);

        
        $__internal_72b5eaf42ca64a5f27fe64a6e1a4eefb509a39bd418308dc9d9eac7b8d5ed25b->leave($__internal_72b5eaf42ca64a5f27fe64a6e1a4eefb509a39bd418308dc9d9eac7b8d5ed25b_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_dbe3448a52076ee5f843070d45498aa9ad1f699541bc295a346424603a2e25e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbe3448a52076ee5f843070d45498aa9ad1f699541bc295a346424603a2e25e3->enter($__internal_dbe3448a52076ee5f843070d45498aa9ad1f699541bc295a346424603a2e25e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_6fb04f64d441d309d3a63a40889b0fffc193f1d89a6d9e6051409ef832fcb0de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb04f64d441d309d3a63a40889b0fffc193f1d89a6d9e6051409ef832fcb0de->enter($__internal_6fb04f64d441d309d3a63a40889b0fffc193f1d89a6d9e6051409ef832fcb0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_6fb04f64d441d309d3a63a40889b0fffc193f1d89a6d9e6051409ef832fcb0de->leave($__internal_6fb04f64d441d309d3a63a40889b0fffc193f1d89a6d9e6051409ef832fcb0de_prof);

        
        $__internal_dbe3448a52076ee5f843070d45498aa9ad1f699541bc295a346424603a2e25e3->leave($__internal_dbe3448a52076ee5f843070d45498aa9ad1f699541bc295a346424603a2e25e3_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_f1484aebb2135b28f2f942ba7cf5315b462eb65b05004849dc398e5677f3c201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1484aebb2135b28f2f942ba7cf5315b462eb65b05004849dc398e5677f3c201->enter($__internal_f1484aebb2135b28f2f942ba7cf5315b462eb65b05004849dc398e5677f3c201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_de78f2833b6565b781347eacddd0f053e1d3db95672e892c2773427a3891c748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de78f2833b6565b781347eacddd0f053e1d3db95672e892c2773427a3891c748->enter($__internal_de78f2833b6565b781347eacddd0f053e1d3db95672e892c2773427a3891c748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_de78f2833b6565b781347eacddd0f053e1d3db95672e892c2773427a3891c748->leave($__internal_de78f2833b6565b781347eacddd0f053e1d3db95672e892c2773427a3891c748_prof);

        
        $__internal_f1484aebb2135b28f2f942ba7cf5315b462eb65b05004849dc398e5677f3c201->leave($__internal_f1484aebb2135b28f2f942ba7cf5315b462eb65b05004849dc398e5677f3c201_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_e7de63f63239277d6563053e36390898cfb131f3ced126e40604e2601d99e557 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7de63f63239277d6563053e36390898cfb131f3ced126e40604e2601d99e557->enter($__internal_e7de63f63239277d6563053e36390898cfb131f3ced126e40604e2601d99e557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_596e876a1d71cb0dc19f72b05e4220fe0aa1dc9c1b7184f801275961a43c7db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596e876a1d71cb0dc19f72b05e4220fe0aa1dc9c1b7184f801275961a43c7db4->enter($__internal_596e876a1d71cb0dc19f72b05e4220fe0aa1dc9c1b7184f801275961a43c7db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_596e876a1d71cb0dc19f72b05e4220fe0aa1dc9c1b7184f801275961a43c7db4->leave($__internal_596e876a1d71cb0dc19f72b05e4220fe0aa1dc9c1b7184f801275961a43c7db4_prof);

        
        $__internal_e7de63f63239277d6563053e36390898cfb131f3ced126e40604e2601d99e557->leave($__internal_e7de63f63239277d6563053e36390898cfb131f3ced126e40604e2601d99e557_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_0c61f22cb9d55eb2d56152b4b0c8206ee2967925345190eb47402a9913b1376e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c61f22cb9d55eb2d56152b4b0c8206ee2967925345190eb47402a9913b1376e->enter($__internal_0c61f22cb9d55eb2d56152b4b0c8206ee2967925345190eb47402a9913b1376e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_3744cb1413f3e783399828954473ae55b576b7a36a650feece8c3af9436bb063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3744cb1413f3e783399828954473ae55b576b7a36a650feece8c3af9436bb063->enter($__internal_3744cb1413f3e783399828954473ae55b576b7a36a650feece8c3af9436bb063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_3744cb1413f3e783399828954473ae55b576b7a36a650feece8c3af9436bb063->leave($__internal_3744cb1413f3e783399828954473ae55b576b7a36a650feece8c3af9436bb063_prof);

        
        $__internal_0c61f22cb9d55eb2d56152b4b0c8206ee2967925345190eb47402a9913b1376e->leave($__internal_0c61f22cb9d55eb2d56152b4b0c8206ee2967925345190eb47402a9913b1376e_prof);

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
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
