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
        $__internal_bf438e74e2abb5ed7caa2d82feea49a9d78104cfec5fa851dc27f330cb30d57c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf438e74e2abb5ed7caa2d82feea49a9d78104cfec5fa851dc27f330cb30d57c->enter($__internal_bf438e74e2abb5ed7caa2d82feea49a9d78104cfec5fa851dc27f330cb30d57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_8f83c12e98252ec6c0242c32c525c5ef2d3c5a5d9f02446c47279b278872af0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f83c12e98252ec6c0242c32c525c5ef2d3c5a5d9f02446c47279b278872af0c->enter($__internal_8f83c12e98252ec6c0242c32c525c5ef2d3c5a5d9f02446c47279b278872af0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_bf438e74e2abb5ed7caa2d82feea49a9d78104cfec5fa851dc27f330cb30d57c->leave($__internal_bf438e74e2abb5ed7caa2d82feea49a9d78104cfec5fa851dc27f330cb30d57c_prof);

        
        $__internal_8f83c12e98252ec6c0242c32c525c5ef2d3c5a5d9f02446c47279b278872af0c->leave($__internal_8f83c12e98252ec6c0242c32c525c5ef2d3c5a5d9f02446c47279b278872af0c_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_f58eec62d54757311b1c6586089232b497b8048ae7c3c5057b7139c5f630b5e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f58eec62d54757311b1c6586089232b497b8048ae7c3c5057b7139c5f630b5e7->enter($__internal_f58eec62d54757311b1c6586089232b497b8048ae7c3c5057b7139c5f630b5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_34a5ff3da509700d42e5da52bc8b9b62317492e8a1826a1bcaee209a28fe2b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34a5ff3da509700d42e5da52bc8b9b62317492e8a1826a1bcaee209a28fe2b4d->enter($__internal_34a5ff3da509700d42e5da52bc8b9b62317492e8a1826a1bcaee209a28fe2b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_34a5ff3da509700d42e5da52bc8b9b62317492e8a1826a1bcaee209a28fe2b4d->leave($__internal_34a5ff3da509700d42e5da52bc8b9b62317492e8a1826a1bcaee209a28fe2b4d_prof);

        
        $__internal_f58eec62d54757311b1c6586089232b497b8048ae7c3c5057b7139c5f630b5e7->leave($__internal_f58eec62d54757311b1c6586089232b497b8048ae7c3c5057b7139c5f630b5e7_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_478b3dfe74c53835b4a33e6a6608243c3a51bb14b6b31e212f0d95e53c85b52f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_478b3dfe74c53835b4a33e6a6608243c3a51bb14b6b31e212f0d95e53c85b52f->enter($__internal_478b3dfe74c53835b4a33e6a6608243c3a51bb14b6b31e212f0d95e53c85b52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_f701655dc0b972884efad3482e484e4324c265d5a07cc92d82016f03356b0d6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f701655dc0b972884efad3482e484e4324c265d5a07cc92d82016f03356b0d6c->enter($__internal_f701655dc0b972884efad3482e484e4324c265d5a07cc92d82016f03356b0d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_f701655dc0b972884efad3482e484e4324c265d5a07cc92d82016f03356b0d6c->leave($__internal_f701655dc0b972884efad3482e484e4324c265d5a07cc92d82016f03356b0d6c_prof);

        
        $__internal_478b3dfe74c53835b4a33e6a6608243c3a51bb14b6b31e212f0d95e53c85b52f->leave($__internal_478b3dfe74c53835b4a33e6a6608243c3a51bb14b6b31e212f0d95e53c85b52f_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_8c3a24ea14e74b9a4d527073a7b8ba0928177e216cc65dd8ee172563e5ad1fb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c3a24ea14e74b9a4d527073a7b8ba0928177e216cc65dd8ee172563e5ad1fb8->enter($__internal_8c3a24ea14e74b9a4d527073a7b8ba0928177e216cc65dd8ee172563e5ad1fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9d74d4644527aea97a3fa2ee582fe9ec75ac8ca55d3bc8864749e7ea76eb1397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d74d4644527aea97a3fa2ee582fe9ec75ac8ca55d3bc8864749e7ea76eb1397->enter($__internal_9d74d4644527aea97a3fa2ee582fe9ec75ac8ca55d3bc8864749e7ea76eb1397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_9d74d4644527aea97a3fa2ee582fe9ec75ac8ca55d3bc8864749e7ea76eb1397->leave($__internal_9d74d4644527aea97a3fa2ee582fe9ec75ac8ca55d3bc8864749e7ea76eb1397_prof);

        
        $__internal_8c3a24ea14e74b9a4d527073a7b8ba0928177e216cc65dd8ee172563e5ad1fb8->leave($__internal_8c3a24ea14e74b9a4d527073a7b8ba0928177e216cc65dd8ee172563e5ad1fb8_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_729e81351d360d2723dcd042b83f5ba772390d53d156922c40cc16f0ee84e3c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_729e81351d360d2723dcd042b83f5ba772390d53d156922c40cc16f0ee84e3c2->enter($__internal_729e81351d360d2723dcd042b83f5ba772390d53d156922c40cc16f0ee84e3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_93b724a96f0622cda06173556af36d5766d85884a972c6df2ec916c0f7d6449f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b724a96f0622cda06173556af36d5766d85884a972c6df2ec916c0f7d6449f->enter($__internal_93b724a96f0622cda06173556af36d5766d85884a972c6df2ec916c0f7d6449f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_93b724a96f0622cda06173556af36d5766d85884a972c6df2ec916c0f7d6449f->leave($__internal_93b724a96f0622cda06173556af36d5766d85884a972c6df2ec916c0f7d6449f_prof);

        
        $__internal_729e81351d360d2723dcd042b83f5ba772390d53d156922c40cc16f0ee84e3c2->leave($__internal_729e81351d360d2723dcd042b83f5ba772390d53d156922c40cc16f0ee84e3c2_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_3bf0ac03cb45bd1c67e72ee1680dcf61358132764321e39794468ad0bf78a1b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bf0ac03cb45bd1c67e72ee1680dcf61358132764321e39794468ad0bf78a1b5->enter($__internal_3bf0ac03cb45bd1c67e72ee1680dcf61358132764321e39794468ad0bf78a1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_3bece582db8572fd31982ff08903e131ac2b8aff7415321b7d824b61658db4d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bece582db8572fd31982ff08903e131ac2b8aff7415321b7d824b61658db4d0->enter($__internal_3bece582db8572fd31982ff08903e131ac2b8aff7415321b7d824b61658db4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_3bece582db8572fd31982ff08903e131ac2b8aff7415321b7d824b61658db4d0->leave($__internal_3bece582db8572fd31982ff08903e131ac2b8aff7415321b7d824b61658db4d0_prof);

        
        $__internal_3bf0ac03cb45bd1c67e72ee1680dcf61358132764321e39794468ad0bf78a1b5->leave($__internal_3bf0ac03cb45bd1c67e72ee1680dcf61358132764321e39794468ad0bf78a1b5_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_6d4641233de23389b9fbf3f58d935424bf3cdc610e8311b20532faf768240c70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d4641233de23389b9fbf3f58d935424bf3cdc610e8311b20532faf768240c70->enter($__internal_6d4641233de23389b9fbf3f58d935424bf3cdc610e8311b20532faf768240c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_31e47f2741db5e4d527a2aa9272ef4b024e23538a77b47d85129b77cceb7edfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e47f2741db5e4d527a2aa9272ef4b024e23538a77b47d85129b77cceb7edfd->enter($__internal_31e47f2741db5e4d527a2aa9272ef4b024e23538a77b47d85129b77cceb7edfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_31e47f2741db5e4d527a2aa9272ef4b024e23538a77b47d85129b77cceb7edfd->leave($__internal_31e47f2741db5e4d527a2aa9272ef4b024e23538a77b47d85129b77cceb7edfd_prof);

        
        $__internal_6d4641233de23389b9fbf3f58d935424bf3cdc610e8311b20532faf768240c70->leave($__internal_6d4641233de23389b9fbf3f58d935424bf3cdc610e8311b20532faf768240c70_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_7e7414d1346df27dcf3844fb9d5fe2f0f9c5c78fdcb514ee065147bc5323844f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e7414d1346df27dcf3844fb9d5fe2f0f9c5c78fdcb514ee065147bc5323844f->enter($__internal_7e7414d1346df27dcf3844fb9d5fe2f0f9c5c78fdcb514ee065147bc5323844f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_0c8a206df3d85ddc236b71a7c7d4eb4eb86a0b643274673185fd2ff7f7b7eaa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c8a206df3d85ddc236b71a7c7d4eb4eb86a0b643274673185fd2ff7f7b7eaa8->enter($__internal_0c8a206df3d85ddc236b71a7c7d4eb4eb86a0b643274673185fd2ff7f7b7eaa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_0c8a206df3d85ddc236b71a7c7d4eb4eb86a0b643274673185fd2ff7f7b7eaa8->leave($__internal_0c8a206df3d85ddc236b71a7c7d4eb4eb86a0b643274673185fd2ff7f7b7eaa8_prof);

        
        $__internal_7e7414d1346df27dcf3844fb9d5fe2f0f9c5c78fdcb514ee065147bc5323844f->leave($__internal_7e7414d1346df27dcf3844fb9d5fe2f0f9c5c78fdcb514ee065147bc5323844f_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_76631d54dde48cd1e7261a4a0b52300223670120ee9faaffdbdf68c17c8f39d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76631d54dde48cd1e7261a4a0b52300223670120ee9faaffdbdf68c17c8f39d0->enter($__internal_76631d54dde48cd1e7261a4a0b52300223670120ee9faaffdbdf68c17c8f39d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_4fefa5ab64ca4ef4b84a11c2d8a7144998f87181eea8ee3a3c52df66d518371d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fefa5ab64ca4ef4b84a11c2d8a7144998f87181eea8ee3a3c52df66d518371d->enter($__internal_4fefa5ab64ca4ef4b84a11c2d8a7144998f87181eea8ee3a3c52df66d518371d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_4fefa5ab64ca4ef4b84a11c2d8a7144998f87181eea8ee3a3c52df66d518371d->leave($__internal_4fefa5ab64ca4ef4b84a11c2d8a7144998f87181eea8ee3a3c52df66d518371d_prof);

        
        $__internal_76631d54dde48cd1e7261a4a0b52300223670120ee9faaffdbdf68c17c8f39d0->leave($__internal_76631d54dde48cd1e7261a4a0b52300223670120ee9faaffdbdf68c17c8f39d0_prof);

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
