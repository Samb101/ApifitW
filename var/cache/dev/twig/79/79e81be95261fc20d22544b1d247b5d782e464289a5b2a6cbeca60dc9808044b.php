<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_be4d1cec9070807712a715a9780d24ad57ccc6b94a94437daf23cc99cf8bb023 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2d83121c58c7375bde6dc2ff134367d1a22dc31d45be35a3c2efad0c888ab4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2d83121c58c7375bde6dc2ff134367d1a22dc31d45be35a3c2efad0c888ab4a->enter($__internal_e2d83121c58c7375bde6dc2ff134367d1a22dc31d45be35a3c2efad0c888ab4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d7f268b49f58e1fd3d45ece334364bdd4da81de6c92e04c46b487be5fa90d689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f268b49f58e1fd3d45ece334364bdd4da81de6c92e04c46b487be5fa90d689->enter($__internal_d7f268b49f58e1fd3d45ece334364bdd4da81de6c92e04c46b487be5fa90d689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2d83121c58c7375bde6dc2ff134367d1a22dc31d45be35a3c2efad0c888ab4a->leave($__internal_e2d83121c58c7375bde6dc2ff134367d1a22dc31d45be35a3c2efad0c888ab4a_prof);

        
        $__internal_d7f268b49f58e1fd3d45ece334364bdd4da81de6c92e04c46b487be5fa90d689->leave($__internal_d7f268b49f58e1fd3d45ece334364bdd4da81de6c92e04c46b487be5fa90d689_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f096c9817ceb76cdd89aff0fffdd31ed42988381cbfe874e56869db7f86debe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f096c9817ceb76cdd89aff0fffdd31ed42988381cbfe874e56869db7f86debe2->enter($__internal_f096c9817ceb76cdd89aff0fffdd31ed42988381cbfe874e56869db7f86debe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0a489ddcb8ac0230a51fea9d7e51f5c7ade27ad6aca56155558daa22093a05d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a489ddcb8ac0230a51fea9d7e51f5c7ade27ad6aca56155558daa22093a05d2->enter($__internal_0a489ddcb8ac0230a51fea9d7e51f5c7ade27ad6aca56155558daa22093a05d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_0a489ddcb8ac0230a51fea9d7e51f5c7ade27ad6aca56155558daa22093a05d2->leave($__internal_0a489ddcb8ac0230a51fea9d7e51f5c7ade27ad6aca56155558daa22093a05d2_prof);

        
        $__internal_f096c9817ceb76cdd89aff0fffdd31ed42988381cbfe874e56869db7f86debe2->leave($__internal_f096c9817ceb76cdd89aff0fffdd31ed42988381cbfe874e56869db7f86debe2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_79f402f0aa50b42987046e3d529ddc2b46dcc9eff743707c6736a2dafb923b76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79f402f0aa50b42987046e3d529ddc2b46dcc9eff743707c6736a2dafb923b76->enter($__internal_79f402f0aa50b42987046e3d529ddc2b46dcc9eff743707c6736a2dafb923b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_63ac5d2281fab7e1cd118691d0d9ae84735754d2549e5b2d70e23dc87551a45c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63ac5d2281fab7e1cd118691d0d9ae84735754d2549e5b2d70e23dc87551a45c->enter($__internal_63ac5d2281fab7e1cd118691d0d9ae84735754d2549e5b2d70e23dc87551a45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_63ac5d2281fab7e1cd118691d0d9ae84735754d2549e5b2d70e23dc87551a45c->leave($__internal_63ac5d2281fab7e1cd118691d0d9ae84735754d2549e5b2d70e23dc87551a45c_prof);

        
        $__internal_79f402f0aa50b42987046e3d529ddc2b46dcc9eff743707c6736a2dafb923b76->leave($__internal_79f402f0aa50b42987046e3d529ddc2b46dcc9eff743707c6736a2dafb923b76_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9efe2ceb335d20dd6ae8160d42a3f2256eed3e488ac143788c2cab0fdadaf48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9efe2ceb335d20dd6ae8160d42a3f2256eed3e488ac143788c2cab0fdadaf48->enter($__internal_e9efe2ceb335d20dd6ae8160d42a3f2256eed3e488ac143788c2cab0fdadaf48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b0f8401999ba835267c674347d9551da04844f1acd6f751903255a3fcb728bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f8401999ba835267c674347d9551da04844f1acd6f751903255a3fcb728bc0->enter($__internal_b0f8401999ba835267c674347d9551da04844f1acd6f751903255a3fcb728bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_b0f8401999ba835267c674347d9551da04844f1acd6f751903255a3fcb728bc0->leave($__internal_b0f8401999ba835267c674347d9551da04844f1acd6f751903255a3fcb728bc0_prof);

        
        $__internal_e9efe2ceb335d20dd6ae8160d42a3f2256eed3e488ac143788c2cab0fdadaf48->leave($__internal_e9efe2ceb335d20dd6ae8160d42a3f2256eed3e488ac143788c2cab0fdadaf48_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\Charles ANDRE\\Web\\ApifitWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
