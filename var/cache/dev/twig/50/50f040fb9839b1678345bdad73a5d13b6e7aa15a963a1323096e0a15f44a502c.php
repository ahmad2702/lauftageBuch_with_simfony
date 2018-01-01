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
        $__internal_c4773caab3415d51c0955c468a960049c9b3b07b6182245ac54063181c1aef51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4773caab3415d51c0955c468a960049c9b3b07b6182245ac54063181c1aef51->enter($__internal_c4773caab3415d51c0955c468a960049c9b3b07b6182245ac54063181c1aef51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_e27f0c38f5cac01558cecaaeb45fcb6d56a15eac904815906105136550ae8642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e27f0c38f5cac01558cecaaeb45fcb6d56a15eac904815906105136550ae8642->enter($__internal_e27f0c38f5cac01558cecaaeb45fcb6d56a15eac904815906105136550ae8642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_c4773caab3415d51c0955c468a960049c9b3b07b6182245ac54063181c1aef51->leave($__internal_c4773caab3415d51c0955c468a960049c9b3b07b6182245ac54063181c1aef51_prof);

        
        $__internal_e27f0c38f5cac01558cecaaeb45fcb6d56a15eac904815906105136550ae8642->leave($__internal_e27f0c38f5cac01558cecaaeb45fcb6d56a15eac904815906105136550ae8642_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_2254d372465d23a593736af5f3bd5a876a36b233a490616303dffbaa764cd137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2254d372465d23a593736af5f3bd5a876a36b233a490616303dffbaa764cd137->enter($__internal_2254d372465d23a593736af5f3bd5a876a36b233a490616303dffbaa764cd137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_ec108d961d661d10b8b5819d3279f34429ea9dfae5a0b87f00ecba5770f2d745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec108d961d661d10b8b5819d3279f34429ea9dfae5a0b87f00ecba5770f2d745->enter($__internal_ec108d961d661d10b8b5819d3279f34429ea9dfae5a0b87f00ecba5770f2d745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_ec108d961d661d10b8b5819d3279f34429ea9dfae5a0b87f00ecba5770f2d745->leave($__internal_ec108d961d661d10b8b5819d3279f34429ea9dfae5a0b87f00ecba5770f2d745_prof);

        
        $__internal_2254d372465d23a593736af5f3bd5a876a36b233a490616303dffbaa764cd137->leave($__internal_2254d372465d23a593736af5f3bd5a876a36b233a490616303dffbaa764cd137_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_df15bb662caf660937fb4cd99817b89722169248e43f251fb3ae23c1bc7db3f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df15bb662caf660937fb4cd99817b89722169248e43f251fb3ae23c1bc7db3f1->enter($__internal_df15bb662caf660937fb4cd99817b89722169248e43f251fb3ae23c1bc7db3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_e611ec1b0082cb88d0827e9b1b9f54ab1ede00e8d48c31defbc46ae9ca1a2c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e611ec1b0082cb88d0827e9b1b9f54ab1ede00e8d48c31defbc46ae9ca1a2c43->enter($__internal_e611ec1b0082cb88d0827e9b1b9f54ab1ede00e8d48c31defbc46ae9ca1a2c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_e611ec1b0082cb88d0827e9b1b9f54ab1ede00e8d48c31defbc46ae9ca1a2c43->leave($__internal_e611ec1b0082cb88d0827e9b1b9f54ab1ede00e8d48c31defbc46ae9ca1a2c43_prof);

        
        $__internal_df15bb662caf660937fb4cd99817b89722169248e43f251fb3ae23c1bc7db3f1->leave($__internal_df15bb662caf660937fb4cd99817b89722169248e43f251fb3ae23c1bc7db3f1_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_22ebab52bf14f19da78020ab87b2f8b38c6e8a27ffa06974c594e5866d977f1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22ebab52bf14f19da78020ab87b2f8b38c6e8a27ffa06974c594e5866d977f1a->enter($__internal_22ebab52bf14f19da78020ab87b2f8b38c6e8a27ffa06974c594e5866d977f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_1bacbe60843e756435c7b19427bee6bff4da6cc2e59ec649113a02fd0fb080f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bacbe60843e756435c7b19427bee6bff4da6cc2e59ec649113a02fd0fb080f4->enter($__internal_1bacbe60843e756435c7b19427bee6bff4da6cc2e59ec649113a02fd0fb080f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_1bacbe60843e756435c7b19427bee6bff4da6cc2e59ec649113a02fd0fb080f4->leave($__internal_1bacbe60843e756435c7b19427bee6bff4da6cc2e59ec649113a02fd0fb080f4_prof);

        
        $__internal_22ebab52bf14f19da78020ab87b2f8b38c6e8a27ffa06974c594e5866d977f1a->leave($__internal_22ebab52bf14f19da78020ab87b2f8b38c6e8a27ffa06974c594e5866d977f1a_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9b0d2222b628717e59856ce5e81418c212a5089c11a68fc85ecd7810fab7cb66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b0d2222b628717e59856ce5e81418c212a5089c11a68fc85ecd7810fab7cb66->enter($__internal_9b0d2222b628717e59856ce5e81418c212a5089c11a68fc85ecd7810fab7cb66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_383b2d209f2fda1fd8a48b9e891d7d873879b12bc9834bb9f7254a11fecbebe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_383b2d209f2fda1fd8a48b9e891d7d873879b12bc9834bb9f7254a11fecbebe7->enter($__internal_383b2d209f2fda1fd8a48b9e891d7d873879b12bc9834bb9f7254a11fecbebe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_383b2d209f2fda1fd8a48b9e891d7d873879b12bc9834bb9f7254a11fecbebe7->leave($__internal_383b2d209f2fda1fd8a48b9e891d7d873879b12bc9834bb9f7254a11fecbebe7_prof);

        
        $__internal_9b0d2222b628717e59856ce5e81418c212a5089c11a68fc85ecd7810fab7cb66->leave($__internal_9b0d2222b628717e59856ce5e81418c212a5089c11a68fc85ecd7810fab7cb66_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_7c8a4d391cd8cfa9aad0ea6e156a05f18dc12edfa106fb461e864a71bfbc40bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c8a4d391cd8cfa9aad0ea6e156a05f18dc12edfa106fb461e864a71bfbc40bc->enter($__internal_7c8a4d391cd8cfa9aad0ea6e156a05f18dc12edfa106fb461e864a71bfbc40bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_bee8eeb85de6174f10c31d006f00b36248d5dfe405ca718d3cc48b9f6442db48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee8eeb85de6174f10c31d006f00b36248d5dfe405ca718d3cc48b9f6442db48->enter($__internal_bee8eeb85de6174f10c31d006f00b36248d5dfe405ca718d3cc48b9f6442db48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_bee8eeb85de6174f10c31d006f00b36248d5dfe405ca718d3cc48b9f6442db48->leave($__internal_bee8eeb85de6174f10c31d006f00b36248d5dfe405ca718d3cc48b9f6442db48_prof);

        
        $__internal_7c8a4d391cd8cfa9aad0ea6e156a05f18dc12edfa106fb461e864a71bfbc40bc->leave($__internal_7c8a4d391cd8cfa9aad0ea6e156a05f18dc12edfa106fb461e864a71bfbc40bc_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_182dc2861cec391d4bd08c4f4c1c056848f4621495e9bcfae1c68966cdf07f7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_182dc2861cec391d4bd08c4f4c1c056848f4621495e9bcfae1c68966cdf07f7c->enter($__internal_182dc2861cec391d4bd08c4f4c1c056848f4621495e9bcfae1c68966cdf07f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_f86389350d6e9289f58e7ac41eb8b19ed7f9603d9ad128c600f670d9359c056e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f86389350d6e9289f58e7ac41eb8b19ed7f9603d9ad128c600f670d9359c056e->enter($__internal_f86389350d6e9289f58e7ac41eb8b19ed7f9603d9ad128c600f670d9359c056e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_f86389350d6e9289f58e7ac41eb8b19ed7f9603d9ad128c600f670d9359c056e->leave($__internal_f86389350d6e9289f58e7ac41eb8b19ed7f9603d9ad128c600f670d9359c056e_prof);

        
        $__internal_182dc2861cec391d4bd08c4f4c1c056848f4621495e9bcfae1c68966cdf07f7c->leave($__internal_182dc2861cec391d4bd08c4f4c1c056848f4621495e9bcfae1c68966cdf07f7c_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_e47b00654326ce9b2a04c12bfb024b38b1b2945333438230383bd40c55b1a4c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e47b00654326ce9b2a04c12bfb024b38b1b2945333438230383bd40c55b1a4c6->enter($__internal_e47b00654326ce9b2a04c12bfb024b38b1b2945333438230383bd40c55b1a4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_c0e1753f18e56f34487e2494ca8153aca2e553b67b2062f1796cbebfb5c8c044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0e1753f18e56f34487e2494ca8153aca2e553b67b2062f1796cbebfb5c8c044->enter($__internal_c0e1753f18e56f34487e2494ca8153aca2e553b67b2062f1796cbebfb5c8c044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_c0e1753f18e56f34487e2494ca8153aca2e553b67b2062f1796cbebfb5c8c044->leave($__internal_c0e1753f18e56f34487e2494ca8153aca2e553b67b2062f1796cbebfb5c8c044_prof);

        
        $__internal_e47b00654326ce9b2a04c12bfb024b38b1b2945333438230383bd40c55b1a4c6->leave($__internal_e47b00654326ce9b2a04c12bfb024b38b1b2945333438230383bd40c55b1a4c6_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_75a39208216539067af542a7a5c760f854396ea228c455a4bf7f47ae1c4bb109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75a39208216539067af542a7a5c760f854396ea228c455a4bf7f47ae1c4bb109->enter($__internal_75a39208216539067af542a7a5c760f854396ea228c455a4bf7f47ae1c4bb109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_ebb5e19ec70afdded5cd4e61383da1de950cf343f5990c1ad0c6ba8f71b3eb3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb5e19ec70afdded5cd4e61383da1de950cf343f5990c1ad0c6ba8f71b3eb3a->enter($__internal_ebb5e19ec70afdded5cd4e61383da1de950cf343f5990c1ad0c6ba8f71b3eb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_ebb5e19ec70afdded5cd4e61383da1de950cf343f5990c1ad0c6ba8f71b3eb3a->leave($__internal_ebb5e19ec70afdded5cd4e61383da1de950cf343f5990c1ad0c6ba8f71b3eb3a_prof);

        
        $__internal_75a39208216539067af542a7a5c760f854396ea228c455a4bf7f47ae1c4bb109->leave($__internal_75a39208216539067af542a7a5c760f854396ea228c455a4bf7f47ae1c4bb109_prof);

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
