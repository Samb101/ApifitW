<?php

/* Form/bootstrap.html.twig */
class __TwigTemplate_112a2d156797f1f51d5c682d80ef4d16f42a45f7fdc9dc7501d13221b0a69eda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "Form/bootstrap.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_008c92656ee40fb373b254b9cde54070a6e7d32ea1400a9158c66230fb283dfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_008c92656ee40fb373b254b9cde54070a6e7d32ea1400a9158c66230fb283dfc->enter($__internal_008c92656ee40fb373b254b9cde54070a6e7d32ea1400a9158c66230fb283dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Form/bootstrap.html.twig"));

        $__internal_8dbea236fa5538253ab0dca0d83142bc0e930fe3127cd5808240d46e383e1409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dbea236fa5538253ab0dca0d83142bc0e930fe3127cd5808240d46e383e1409->enter($__internal_8dbea236fa5538253ab0dca0d83142bc0e930fe3127cd5808240d46e383e1409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Form/bootstrap.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_008c92656ee40fb373b254b9cde54070a6e7d32ea1400a9158c66230fb283dfc->leave($__internal_008c92656ee40fb373b254b9cde54070a6e7d32ea1400a9158c66230fb283dfc_prof);

        
        $__internal_8dbea236fa5538253ab0dca0d83142bc0e930fe3127cd5808240d46e383e1409->leave($__internal_8dbea236fa5538253ab0dca0d83142bc0e930fe3127cd5808240d46e383e1409_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_bbe219dd81a44fb3f4e6581bae1dcc659e4180fc308ecbe2c56c320f4cc39665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbe219dd81a44fb3f4e6581bae1dcc659e4180fc308ecbe2c56c320f4cc39665->enter($__internal_bbe219dd81a44fb3f4e6581bae1dcc659e4180fc308ecbe2c56c320f4cc39665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_b79ce3bccc04d6092237c90567654ed6befde75578a3c9ad234c28558cb99d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79ce3bccc04d6092237c90567654ed6befde75578a3c9ad234c28558cb99d1a->enter($__internal_b79ce3bccc04d6092237c90567654ed6befde75578a3c9ad234c28558cb99d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b79ce3bccc04d6092237c90567654ed6befde75578a3c9ad234c28558cb99d1a->leave($__internal_b79ce3bccc04d6092237c90567654ed6befde75578a3c9ad234c28558cb99d1a_prof);

        
        $__internal_bbe219dd81a44fb3f4e6581bae1dcc659e4180fc308ecbe2c56c320f4cc39665->leave($__internal_bbe219dd81a44fb3f4e6581bae1dcc659e4180fc308ecbe2c56c320f4cc39665_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_9dec5ff27c306cc961646429ca39732d24c5ba1dab3c6a8fc6e1569784323551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dec5ff27c306cc961646429ca39732d24c5ba1dab3c6a8fc6e1569784323551->enter($__internal_9dec5ff27c306cc961646429ca39732d24c5ba1dab3c6a8fc6e1569784323551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_618194afe29c8c20e35d2ad3575bd7b017a16ce254e687881d0119ee6b29b585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_618194afe29c8c20e35d2ad3575bd7b017a16ce254e687881d0119ee6b29b585->enter($__internal_618194afe29c8c20e35d2ad3575bd7b017a16ce254e687881d0119ee6b29b585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_618194afe29c8c20e35d2ad3575bd7b017a16ce254e687881d0119ee6b29b585->leave($__internal_618194afe29c8c20e35d2ad3575bd7b017a16ce254e687881d0119ee6b29b585_prof);

        
        $__internal_9dec5ff27c306cc961646429ca39732d24c5ba1dab3c6a8fc6e1569784323551->leave($__internal_9dec5ff27c306cc961646429ca39732d24c5ba1dab3c6a8fc6e1569784323551_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_40528641fae805c285c919a39018efb6dab5bc9559f30cb309c452c234f1c3c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40528641fae805c285c919a39018efb6dab5bc9559f30cb309c452c234f1c3c3->enter($__internal_40528641fae805c285c919a39018efb6dab5bc9559f30cb309c452c234f1c3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_289dc018e497da7ece7d626460617b3336880918d4a1cb80e231c8f137fb904d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_289dc018e497da7ece7d626460617b3336880918d4a1cb80e231c8f137fb904d->enter($__internal_289dc018e497da7ece7d626460617b3336880918d4a1cb80e231c8f137fb904d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_289dc018e497da7ece7d626460617b3336880918d4a1cb80e231c8f137fb904d->leave($__internal_289dc018e497da7ece7d626460617b3336880918d4a1cb80e231c8f137fb904d_prof);

        
        $__internal_40528641fae805c285c919a39018efb6dab5bc9559f30cb309c452c234f1c3c3->leave($__internal_40528641fae805c285c919a39018efb6dab5bc9559f30cb309c452c234f1c3c3_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_9326692c94f14d80878203a8877ecba87c6f011b70dc9407c15dd294ea33e2b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9326692c94f14d80878203a8877ecba87c6f011b70dc9407c15dd294ea33e2b5->enter($__internal_9326692c94f14d80878203a8877ecba87c6f011b70dc9407c15dd294ea33e2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_f8df40808d857822d528a5120834e05c9e01f47f1754c30feac6a1e70dc53232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8df40808d857822d528a5120834e05c9e01f47f1754c30feac6a1e70dc53232->enter($__internal_f8df40808d857822d528a5120834e05c9e01f47f1754c30feac6a1e70dc53232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_a9d49cd8a01ef0477fb2454fed915aeb7371f1b60fa201a3c26b1ae74b43a907 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_3e132caa76589716422d7d94f2fc3ada7cb1bb088cf9a939409dd131f4d910eb = "{{") && ('' === $__internal_3e132caa76589716422d7d94f2fc3ada7cb1bb088cf9a939409dd131f4d910eb || 0 === strpos($__internal_a9d49cd8a01ef0477fb2454fed915aeb7371f1b60fa201a3c26b1ae74b43a907, $__internal_3e132caa76589716422d7d94f2fc3ada7cb1bb088cf9a939409dd131f4d910eb)));
        // line 25
        echo "        ";
        if ( !(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_f8df40808d857822d528a5120834e05c9e01f47f1754c30feac6a1e70dc53232->leave($__internal_f8df40808d857822d528a5120834e05c9e01f47f1754c30feac6a1e70dc53232_prof);

        
        $__internal_9326692c94f14d80878203a8877ecba87c6f011b70dc9407c15dd294ea33e2b5->leave($__internal_9326692c94f14d80878203a8877ecba87c6f011b70dc9407c15dd294ea33e2b5_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_a28f96e93a33e266f7733f1c1fd7782a993cd9aec8f63ee3477de8c6cf449237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a28f96e93a33e266f7733f1c1fd7782a993cd9aec8f63ee3477de8c6cf449237->enter($__internal_a28f96e93a33e266f7733f1c1fd7782a993cd9aec8f63ee3477de8c6cf449237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_692603f37e464dd9f38f45df099d59cad9115708d8059dcbcd0848c7c8fc2280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_692603f37e464dd9f38f45df099d59cad9115708d8059dcbcd0848c7c8fc2280->enter($__internal_692603f37e464dd9f38f45df099d59cad9115708d8059dcbcd0848c7c8fc2280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_692603f37e464dd9f38f45df099d59cad9115708d8059dcbcd0848c7c8fc2280->leave($__internal_692603f37e464dd9f38f45df099d59cad9115708d8059dcbcd0848c7c8fc2280_prof);

        
        $__internal_a28f96e93a33e266f7733f1c1fd7782a993cd9aec8f63ee3477de8c6cf449237->leave($__internal_a28f96e93a33e266f7733f1c1fd7782a993cd9aec8f63ee3477de8c6cf449237_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_037516ffa0a1c367641fa8ef6a0bd3cae18e2aeb64b434d0f570737196d87fdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_037516ffa0a1c367641fa8ef6a0bd3cae18e2aeb64b434d0f570737196d87fdb->enter($__internal_037516ffa0a1c367641fa8ef6a0bd3cae18e2aeb64b434d0f570737196d87fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_81278a99ca6db0b5abf7f53315dbd113f72f9d4150995aab25fd3ee3d12e14a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81278a99ca6db0b5abf7f53315dbd113f72f9d4150995aab25fd3ee3d12e14a8->enter($__internal_81278a99ca6db0b5abf7f53315dbd113f72f9d4150995aab25fd3ee3d12e14a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_81278a99ca6db0b5abf7f53315dbd113f72f9d4150995aab25fd3ee3d12e14a8->leave($__internal_81278a99ca6db0b5abf7f53315dbd113f72f9d4150995aab25fd3ee3d12e14a8_prof);

        
        $__internal_037516ffa0a1c367641fa8ef6a0bd3cae18e2aeb64b434d0f570737196d87fdb->leave($__internal_037516ffa0a1c367641fa8ef6a0bd3cae18e2aeb64b434d0f570737196d87fdb_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_eb7b88c5b7d911cb4ae712f10e6e2740abe7dba582ea386483f1ceb3a3987cf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb7b88c5b7d911cb4ae712f10e6e2740abe7dba582ea386483f1ceb3a3987cf0->enter($__internal_eb7b88c5b7d911cb4ae712f10e6e2740abe7dba582ea386483f1ceb3a3987cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_9d1c3dd84db70c7ba6093f7fbb30409cbc992de79ef4dec056a13566980eabb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d1c3dd84db70c7ba6093f7fbb30409cbc992de79ef4dec056a13566980eabb2->enter($__internal_9d1c3dd84db70c7ba6093f7fbb30409cbc992de79ef4dec056a13566980eabb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_9d1c3dd84db70c7ba6093f7fbb30409cbc992de79ef4dec056a13566980eabb2->leave($__internal_9d1c3dd84db70c7ba6093f7fbb30409cbc992de79ef4dec056a13566980eabb2_prof);

        
        $__internal_eb7b88c5b7d911cb4ae712f10e6e2740abe7dba582ea386483f1ceb3a3987cf0->leave($__internal_eb7b88c5b7d911cb4ae712f10e6e2740abe7dba582ea386483f1ceb3a3987cf0_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_578b5b1946f410aab1e3ccbff50958c2121dc3e39f18c50ae8aea6a8e3c9dd9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_578b5b1946f410aab1e3ccbff50958c2121dc3e39f18c50ae8aea6a8e3c9dd9f->enter($__internal_578b5b1946f410aab1e3ccbff50958c2121dc3e39f18c50ae8aea6a8e3c9dd9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_f45919fae0b820c1105c67881c8d9a5dfa49f6732d263ad1481926c02a927f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f45919fae0b820c1105c67881c8d9a5dfa49f6732d263ad1481926c02a927f5f->enter($__internal_f45919fae0b820c1105c67881c8d9a5dfa49f6732d263ad1481926c02a927f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_f45919fae0b820c1105c67881c8d9a5dfa49f6732d263ad1481926c02a927f5f->leave($__internal_f45919fae0b820c1105c67881c8d9a5dfa49f6732d263ad1481926c02a927f5f_prof);

        
        $__internal_578b5b1946f410aab1e3ccbff50958c2121dc3e39f18c50ae8aea6a8e3c9dd9f->leave($__internal_578b5b1946f410aab1e3ccbff50958c2121dc3e39f18c50ae8aea6a8e3c9dd9f_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_87774b9821c85f915ee83a4bf9e0b08d6dabba73df2a54a2d067216eac658a50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87774b9821c85f915ee83a4bf9e0b08d6dabba73df2a54a2d067216eac658a50->enter($__internal_87774b9821c85f915ee83a4bf9e0b08d6dabba73df2a54a2d067216eac658a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_e54b2563a4e6f1fb396680e909a09df5a6ae0f2c4a87ec2437b76998edb990ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e54b2563a4e6f1fb396680e909a09df5a6ae0f2c4a87ec2437b76998edb990ba->enter($__internal_e54b2563a4e6f1fb396680e909a09df5a6ae0f2c4a87ec2437b76998edb990ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) ? $context["table_class"] : $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_e54b2563a4e6f1fb396680e909a09df5a6ae0f2c4a87ec2437b76998edb990ba->leave($__internal_e54b2563a4e6f1fb396680e909a09df5a6ae0f2c4a87ec2437b76998edb990ba_prof);

        
        $__internal_87774b9821c85f915ee83a4bf9e0b08d6dabba73df2a54a2d067216eac658a50->leave($__internal_87774b9821c85f915ee83a4bf9e0b08d6dabba73df2a54a2d067216eac658a50_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_78e1b0f65e0346e63f5b937963f498e48049d8b1d16d73b9edefd0bdfefb3da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78e1b0f65e0346e63f5b937963f498e48049d8b1d16d73b9edefd0bdfefb3da7->enter($__internal_78e1b0f65e0346e63f5b937963f498e48049d8b1d16d73b9edefd0bdfefb3da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_f5f334d6ac5cbc4c15c2e1795d6f7fd7a6c06e0887f4f1bebf6edc28d4353027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f334d6ac5cbc4c15c2e1795d6f7fd7a6c06e0887f4f1bebf6edc28d4353027->enter($__internal_f5f334d6ac5cbc4c15c2e1795d6f7fd7a6c06e0887f4f1bebf6edc28d4353027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_f5f334d6ac5cbc4c15c2e1795d6f7fd7a6c06e0887f4f1bebf6edc28d4353027->leave($__internal_f5f334d6ac5cbc4c15c2e1795d6f7fd7a6c06e0887f4f1bebf6edc28d4353027_prof);

        
        $__internal_78e1b0f65e0346e63f5b937963f498e48049d8b1d16d73b9edefd0bdfefb3da7->leave($__internal_78e1b0f65e0346e63f5b937963f498e48049d8b1d16d73b9edefd0bdfefb3da7_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_f04366bf12b9294022f889b303c447b069dd322bf9374642e4d14aa6b83dd294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f04366bf12b9294022f889b303c447b069dd322bf9374642e4d14aa6b83dd294->enter($__internal_f04366bf12b9294022f889b303c447b069dd322bf9374642e4d14aa6b83dd294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_bf2093b9da93c361efc9a7d36f40638afba072f52238a4db6e29445503af40d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf2093b9da93c361efc9a7d36f40638afba072f52238a4db6e29445503af40d1->enter($__internal_bf2093b9da93c361efc9a7d36f40638afba072f52238a4db6e29445503af40d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_bf2093b9da93c361efc9a7d36f40638afba072f52238a4db6e29445503af40d1->leave($__internal_bf2093b9da93c361efc9a7d36f40638afba072f52238a4db6e29445503af40d1_prof);

        
        $__internal_f04366bf12b9294022f889b303c447b069dd322bf9374642e4d14aa6b83dd294->leave($__internal_f04366bf12b9294022f889b303c447b069dd322bf9374642e4d14aa6b83dd294_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_ca523284efa2151f65da9df85447a177064aea02778bbae1a39ddae29db7dd5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca523284efa2151f65da9df85447a177064aea02778bbae1a39ddae29db7dd5b->enter($__internal_ca523284efa2151f65da9df85447a177064aea02778bbae1a39ddae29db7dd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_f38de3a1eb5aeb3a3fced96de1b956a319dc235d405c5cb9f174af89969bdee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f38de3a1eb5aeb3a3fced96de1b956a319dc235d405c5cb9f174af89969bdee4->enter($__internal_f38de3a1eb5aeb3a3fced96de1b956a319dc235d405c5cb9f174af89969bdee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_f38de3a1eb5aeb3a3fced96de1b956a319dc235d405c5cb9f174af89969bdee4->leave($__internal_f38de3a1eb5aeb3a3fced96de1b956a319dc235d405c5cb9f174af89969bdee4_prof);

        
        $__internal_ca523284efa2151f65da9df85447a177064aea02778bbae1a39ddae29db7dd5b->leave($__internal_ca523284efa2151f65da9df85447a177064aea02778bbae1a39ddae29db7dd5b_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_084992591b09a6a5f0249f1534dcd434806d726c51218c2cb33c377207b67640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_084992591b09a6a5f0249f1534dcd434806d726c51218c2cb33c377207b67640->enter($__internal_084992591b09a6a5f0249f1534dcd434806d726c51218c2cb33c377207b67640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_08fbd6f4e43a99616518490ba087245567af49929e0eb1a6be1dfda0b9d82cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08fbd6f4e43a99616518490ba087245567af49929e0eb1a6be1dfda0b9d82cdf->enter($__internal_08fbd6f4e43a99616518490ba087245567af49929e0eb1a6be1dfda0b9d82cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_08fbd6f4e43a99616518490ba087245567af49929e0eb1a6be1dfda0b9d82cdf->leave($__internal_08fbd6f4e43a99616518490ba087245567af49929e0eb1a6be1dfda0b9d82cdf_prof);

        
        $__internal_084992591b09a6a5f0249f1534dcd434806d726c51218c2cb33c377207b67640->leave($__internal_084992591b09a6a5f0249f1534dcd434806d726c51218c2cb33c377207b67640_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_0023fc46d01e3d7707524cef904b74955a46b7a5762663be0a159357bef46572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0023fc46d01e3d7707524cef904b74955a46b7a5762663be0a159357bef46572->enter($__internal_0023fc46d01e3d7707524cef904b74955a46b7a5762663be0a159357bef46572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_30fe44ea911ca4f97d1f5e99b94f199e2fd87299069dbf302137a1e974ff4538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30fe44ea911ca4f97d1f5e99b94f199e2fd87299069dbf302137a1e974ff4538->enter($__internal_30fe44ea911ca4f97d1f5e99b94f199e2fd87299069dbf302137a1e974ff4538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_30fe44ea911ca4f97d1f5e99b94f199e2fd87299069dbf302137a1e974ff4538->leave($__internal_30fe44ea911ca4f97d1f5e99b94f199e2fd87299069dbf302137a1e974ff4538_prof);

        
        $__internal_0023fc46d01e3d7707524cef904b74955a46b7a5762663be0a159357bef46572->leave($__internal_0023fc46d01e3d7707524cef904b74955a46b7a5762663be0a159357bef46572_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_796c4fbe5f254ba9197a627e8e03b1b625a56d1c459dab568f53e6c2222584bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_796c4fbe5f254ba9197a627e8e03b1b625a56d1c459dab568f53e6c2222584bc->enter($__internal_796c4fbe5f254ba9197a627e8e03b1b625a56d1c459dab568f53e6c2222584bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_c6f001b93020ee7a6168fcd02ab977626554e360e3a67881a219ea86a64d2417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f001b93020ee7a6168fcd02ab977626554e360e3a67881a219ea86a64d2417->enter($__internal_c6f001b93020ee7a6168fcd02ab977626554e360e3a67881a219ea86a64d2417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_c6f001b93020ee7a6168fcd02ab977626554e360e3a67881a219ea86a64d2417->leave($__internal_c6f001b93020ee7a6168fcd02ab977626554e360e3a67881a219ea86a64d2417_prof);

        
        $__internal_796c4fbe5f254ba9197a627e8e03b1b625a56d1c459dab568f53e6c2222584bc->leave($__internal_796c4fbe5f254ba9197a627e8e03b1b625a56d1c459dab568f53e6c2222584bc_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_32d49c472e249d7177b7ab07a85f2e689f872b73fb914713633fa5ff8e0ca54e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32d49c472e249d7177b7ab07a85f2e689f872b73fb914713633fa5ff8e0ca54e->enter($__internal_32d49c472e249d7177b7ab07a85f2e689f872b73fb914713633fa5ff8e0ca54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_a590e2f8b216e6359466e6be5b886202da5428d58455624ae00801bbf1a6944b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a590e2f8b216e6359466e6be5b886202da5428d58455624ae00801bbf1a6944b->enter($__internal_a590e2f8b216e6359466e6be5b886202da5428d58455624ae00801bbf1a6944b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_a590e2f8b216e6359466e6be5b886202da5428d58455624ae00801bbf1a6944b->leave($__internal_a590e2f8b216e6359466e6be5b886202da5428d58455624ae00801bbf1a6944b_prof);

        
        $__internal_32d49c472e249d7177b7ab07a85f2e689f872b73fb914713633fa5ff8e0ca54e->leave($__internal_32d49c472e249d7177b7ab07a85f2e689f872b73fb914713633fa5ff8e0ca54e_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_315eece0ed306b1e194633dd907fa4b0e4db675c1d055de1a69a4f4d4b60e694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_315eece0ed306b1e194633dd907fa4b0e4db675c1d055de1a69a4f4d4b60e694->enter($__internal_315eece0ed306b1e194633dd907fa4b0e4db675c1d055de1a69a4f4d4b60e694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_dcc8dcf458269f65d1baa8e8115cd6fa48465401e2ab475840223b77d9fccba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcc8dcf458269f65d1baa8e8115cd6fa48465401e2ab475840223b77d9fccba7->enter($__internal_dcc8dcf458269f65d1baa8e8115cd6fa48465401e2ab475840223b77d9fccba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_dcc8dcf458269f65d1baa8e8115cd6fa48465401e2ab475840223b77d9fccba7->leave($__internal_dcc8dcf458269f65d1baa8e8115cd6fa48465401e2ab475840223b77d9fccba7_prof);

        
        $__internal_315eece0ed306b1e194633dd907fa4b0e4db675c1d055de1a69a4f4d4b60e694->leave($__internal_315eece0ed306b1e194633dd907fa4b0e4db675c1d055de1a69a4f4d4b60e694_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_2436fadca8806b496843c71a3f8e9133626d7ef94ea98e230b5031b3782a3996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2436fadca8806b496843c71a3f8e9133626d7ef94ea98e230b5031b3782a3996->enter($__internal_2436fadca8806b496843c71a3f8e9133626d7ef94ea98e230b5031b3782a3996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_a300dab072a6b80a8d737d57e0d68b906c3ae071eb46bdcd341586f06f54bb63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a300dab072a6b80a8d737d57e0d68b906c3ae071eb46bdcd341586f06f54bb63->enter($__internal_a300dab072a6b80a8d737d57e0d68b906c3ae071eb46bdcd341586f06f54bb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 209
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_a300dab072a6b80a8d737d57e0d68b906c3ae071eb46bdcd341586f06f54bb63->leave($__internal_a300dab072a6b80a8d737d57e0d68b906c3ae071eb46bdcd341586f06f54bb63_prof);

        
        $__internal_2436fadca8806b496843c71a3f8e9133626d7ef94ea98e230b5031b3782a3996->leave($__internal_2436fadca8806b496843c71a3f8e9133626d7ef94ea98e230b5031b3782a3996_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_1ea0b343ba84bffb998d3cc70022b09f278178d41a7fb20c2207200fd22172a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ea0b343ba84bffb998d3cc70022b09f278178d41a7fb20c2207200fd22172a8->enter($__internal_1ea0b343ba84bffb998d3cc70022b09f278178d41a7fb20c2207200fd22172a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a44fab0c870c8a1ad4bd412e3aad9e039ef37a60a82a208db36a22647c65054c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a44fab0c870c8a1ad4bd412e3aad9e039ef37a60a82a208db36a22647c65054c->enter($__internal_a44fab0c870c8a1ad4bd412e3aad9e039ef37a60a82a208db36a22647c65054c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_a44fab0c870c8a1ad4bd412e3aad9e039ef37a60a82a208db36a22647c65054c->leave($__internal_a44fab0c870c8a1ad4bd412e3aad9e039ef37a60a82a208db36a22647c65054c_prof);

        
        $__internal_1ea0b343ba84bffb998d3cc70022b09f278178d41a7fb20c2207200fd22172a8->leave($__internal_1ea0b343ba84bffb998d3cc70022b09f278178d41a7fb20c2207200fd22172a8_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_d5b36e419f8689d1080e6b5490d6cd84def4edaca0981064d4d68a4ad7e85aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5b36e419f8689d1080e6b5490d6cd84def4edaca0981064d4d68a4ad7e85aeb->enter($__internal_d5b36e419f8689d1080e6b5490d6cd84def4edaca0981064d4d68a4ad7e85aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_6911bbdc10c5926bc96797537943fda82a88d8c31e67e2c3bcc4d4fdb05b5292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6911bbdc10c5926bc96797537943fda82a88d8c31e67e2c3bcc4d4fdb05b5292->enter($__internal_6911bbdc10c5926bc96797537943fda82a88d8c31e67e2c3bcc4d4fdb05b5292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_6911bbdc10c5926bc96797537943fda82a88d8c31e67e2c3bcc4d4fdb05b5292->leave($__internal_6911bbdc10c5926bc96797537943fda82a88d8c31e67e2c3bcc4d4fdb05b5292_prof);

        
        $__internal_d5b36e419f8689d1080e6b5490d6cd84def4edaca0981064d4d68a4ad7e85aeb->leave($__internal_d5b36e419f8689d1080e6b5490d6cd84def4edaca0981064d4d68a4ad7e85aeb_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_aa08a6db63ede7e1770b3228e72fc90208bb86978c0473f4fd4899bfbacbec65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa08a6db63ede7e1770b3228e72fc90208bb86978c0473f4fd4899bfbacbec65->enter($__internal_aa08a6db63ede7e1770b3228e72fc90208bb86978c0473f4fd4899bfbacbec65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_b6134a0c521fc096ee5c07b16194190dfd274c6a886915e9e928fb0129413588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6134a0c521fc096ee5c07b16194190dfd274c6a886915e9e928fb0129413588->enter($__internal_b6134a0c521fc096ee5c07b16194190dfd274c6a886915e9e928fb0129413588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b6134a0c521fc096ee5c07b16194190dfd274c6a886915e9e928fb0129413588->leave($__internal_b6134a0c521fc096ee5c07b16194190dfd274c6a886915e9e928fb0129413588_prof);

        
        $__internal_aa08a6db63ede7e1770b3228e72fc90208bb86978c0473f4fd4899bfbacbec65->leave($__internal_aa08a6db63ede7e1770b3228e72fc90208bb86978c0473f4fd4899bfbacbec65_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_d50b52df9bf76c903e54f6cf604d9a909223a308e908833e42017d66444d9684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d50b52df9bf76c903e54f6cf604d9a909223a308e908833e42017d66444d9684->enter($__internal_d50b52df9bf76c903e54f6cf604d9a909223a308e908833e42017d66444d9684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_1725d2f6b0cdf04fa4dfca60d1351db45241763c3eb9252192682f41117e2b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1725d2f6b0cdf04fa4dfca60d1351db45241763c3eb9252192682f41117e2b26->enter($__internal_1725d2f6b0cdf04fa4dfca60d1351db45241763c3eb9252192682f41117e2b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1725d2f6b0cdf04fa4dfca60d1351db45241763c3eb9252192682f41117e2b26->leave($__internal_1725d2f6b0cdf04fa4dfca60d1351db45241763c3eb9252192682f41117e2b26_prof);

        
        $__internal_d50b52df9bf76c903e54f6cf604d9a909223a308e908833e42017d66444d9684->leave($__internal_d50b52df9bf76c903e54f6cf604d9a909223a308e908833e42017d66444d9684_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_cb554147d72bb33058cf2c9aaebd77edaec839f8ee63c6ca4bd02be828643be1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb554147d72bb33058cf2c9aaebd77edaec839f8ee63c6ca4bd02be828643be1->enter($__internal_cb554147d72bb33058cf2c9aaebd77edaec839f8ee63c6ca4bd02be828643be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_3ba41d19aa450b77c9dce5e0edcf83adb593225c353a6e802925278605db795c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba41d19aa450b77c9dce5e0edcf83adb593225c353a6e802925278605db795c->enter($__internal_3ba41d19aa450b77c9dce5e0edcf83adb593225c353a6e802925278605db795c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3ba41d19aa450b77c9dce5e0edcf83adb593225c353a6e802925278605db795c->leave($__internal_3ba41d19aa450b77c9dce5e0edcf83adb593225c353a6e802925278605db795c_prof);

        
        $__internal_cb554147d72bb33058cf2c9aaebd77edaec839f8ee63c6ca4bd02be828643be1->leave($__internal_cb554147d72bb33058cf2c9aaebd77edaec839f8ee63c6ca4bd02be828643be1_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_308fd21c85e028a0e3a6a371649ee9888cdcd1e0cb01a52e7b1a1cba0bcdcf50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_308fd21c85e028a0e3a6a371649ee9888cdcd1e0cb01a52e7b1a1cba0bcdcf50->enter($__internal_308fd21c85e028a0e3a6a371649ee9888cdcd1e0cb01a52e7b1a1cba0bcdcf50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_11d84cafdcb47e45a0d539db6e4e82610abdfd143df1a17f663db9ee33f79c02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11d84cafdcb47e45a0d539db6e4e82610abdfd143df1a17f663db9ee33f79c02->enter($__internal_11d84cafdcb47e45a0d539db6e4e82610abdfd143df1a17f663db9ee33f79c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_11d84cafdcb47e45a0d539db6e4e82610abdfd143df1a17f663db9ee33f79c02->leave($__internal_11d84cafdcb47e45a0d539db6e4e82610abdfd143df1a17f663db9ee33f79c02_prof);

        
        $__internal_308fd21c85e028a0e3a6a371649ee9888cdcd1e0cb01a52e7b1a1cba0bcdcf50->leave($__internal_308fd21c85e028a0e3a6a371649ee9888cdcd1e0cb01a52e7b1a1cba0bcdcf50_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_6563556392a0d011ae9460dcf72147a2a9e12b864d59745d22e5ecfa3dc9e5e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6563556392a0d011ae9460dcf72147a2a9e12b864d59745d22e5ecfa3dc9e5e7->enter($__internal_6563556392a0d011ae9460dcf72147a2a9e12b864d59745d22e5ecfa3dc9e5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_ca1b426979e0a3e5e1dc0d32c7dd55e3632fac250aa6a770cfaa4bf91d5a88c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1b426979e0a3e5e1dc0d32c7dd55e3632fac250aa6a770cfaa4bf91d5a88c4->enter($__internal_ca1b426979e0a3e5e1dc0d32c7dd55e3632fac250aa6a770cfaa4bf91d5a88c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_ca1b426979e0a3e5e1dc0d32c7dd55e3632fac250aa6a770cfaa4bf91d5a88c4->leave($__internal_ca1b426979e0a3e5e1dc0d32c7dd55e3632fac250aa6a770cfaa4bf91d5a88c4_prof);

        
        $__internal_6563556392a0d011ae9460dcf72147a2a9e12b864d59745d22e5ecfa3dc9e5e7->leave($__internal_6563556392a0d011ae9460dcf72147a2a9e12b864d59745d22e5ecfa3dc9e5e7_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_52c8962f00da585ab9bcd4d5af966c12ae122e348f1127355132f6134e3663b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52c8962f00da585ab9bcd4d5af966c12ae122e348f1127355132f6134e3663b3->enter($__internal_52c8962f00da585ab9bcd4d5af966c12ae122e348f1127355132f6134e3663b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_8a42c6205a3a732a7c6ff82683781bd3c1f16d4dc570647767c7054006e89f3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a42c6205a3a732a7c6ff82683781bd3c1f16d4dc570647767c7054006e89f3e->enter($__internal_8a42c6205a3a732a7c6ff82683781bd3c1f16d4dc570647767c7054006e89f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_8a42c6205a3a732a7c6ff82683781bd3c1f16d4dc570647767c7054006e89f3e->leave($__internal_8a42c6205a3a732a7c6ff82683781bd3c1f16d4dc570647767c7054006e89f3e_prof);

        
        $__internal_52c8962f00da585ab9bcd4d5af966c12ae122e348f1127355132f6134e3663b3->leave($__internal_52c8962f00da585ab9bcd4d5af966c12ae122e348f1127355132f6134e3663b3_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_76a68803fcf0c6ddbe7a896e78f79b523c54bbd839c58d96f38f0257f22c8c24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76a68803fcf0c6ddbe7a896e78f79b523c54bbd839c58d96f38f0257f22c8c24->enter($__internal_76a68803fcf0c6ddbe7a896e78f79b523c54bbd839c58d96f38f0257f22c8c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_b06d87f4f9d5e5dcbc3581e73bb6d750cc9cd52552e13d8fdf0734a2b74cf225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06d87f4f9d5e5dcbc3581e73bb6d750cc9cd52552e13d8fdf0734a2b74cf225->enter($__internal_b06d87f4f9d5e5dcbc3581e73bb6d750cc9cd52552e13d8fdf0734a2b74cf225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_b06d87f4f9d5e5dcbc3581e73bb6d750cc9cd52552e13d8fdf0734a2b74cf225->leave($__internal_b06d87f4f9d5e5dcbc3581e73bb6d750cc9cd52552e13d8fdf0734a2b74cf225_prof);

        
        $__internal_76a68803fcf0c6ddbe7a896e78f79b523c54bbd839c58d96f38f0257f22c8c24->leave($__internal_76a68803fcf0c6ddbe7a896e78f79b523c54bbd839c58d96f38f0257f22c8c24_prof);

    }

    public function getTemplateName()
    {
        return "Form/bootstrap.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "Form/bootstrap.html.twig", "C:\\Users\\Charles ANDRE\\Web\\ApifitWeb\\app\\Resources\\views\\Form\\bootstrap.html.twig");
    }
}
