<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3fb27f5e9ef4a84442211cf7338302146adb256ef8a175298ef4aacec4ff8c8a extends Twig_Template
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
        $__internal_db85625eb7e841d5c7fd74423de1e41d7ca3dad9eed8bb5f1554b48184fadb8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db85625eb7e841d5c7fd74423de1e41d7ca3dad9eed8bb5f1554b48184fadb8c->enter($__internal_db85625eb7e841d5c7fd74423de1e41d7ca3dad9eed8bb5f1554b48184fadb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d174e6834d8ca3caefaf4528cce1f1c9e265380e22ef45d317d1d4cdc1759a22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d174e6834d8ca3caefaf4528cce1f1c9e265380e22ef45d317d1d4cdc1759a22->enter($__internal_d174e6834d8ca3caefaf4528cce1f1c9e265380e22ef45d317d1d4cdc1759a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db85625eb7e841d5c7fd74423de1e41d7ca3dad9eed8bb5f1554b48184fadb8c->leave($__internal_db85625eb7e841d5c7fd74423de1e41d7ca3dad9eed8bb5f1554b48184fadb8c_prof);

        
        $__internal_d174e6834d8ca3caefaf4528cce1f1c9e265380e22ef45d317d1d4cdc1759a22->leave($__internal_d174e6834d8ca3caefaf4528cce1f1c9e265380e22ef45d317d1d4cdc1759a22_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2e04bbe86851cbe035c11705a6a824f2493c5c75b37dc82693943298c6178ced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e04bbe86851cbe035c11705a6a824f2493c5c75b37dc82693943298c6178ced->enter($__internal_2e04bbe86851cbe035c11705a6a824f2493c5c75b37dc82693943298c6178ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9f1af6e1c80bd4a7f9f2cf9630a73a066efc524e1cf2465e51bc14ff64818776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f1af6e1c80bd4a7f9f2cf9630a73a066efc524e1cf2465e51bc14ff64818776->enter($__internal_9f1af6e1c80bd4a7f9f2cf9630a73a066efc524e1cf2465e51bc14ff64818776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9f1af6e1c80bd4a7f9f2cf9630a73a066efc524e1cf2465e51bc14ff64818776->leave($__internal_9f1af6e1c80bd4a7f9f2cf9630a73a066efc524e1cf2465e51bc14ff64818776_prof);

        
        $__internal_2e04bbe86851cbe035c11705a6a824f2493c5c75b37dc82693943298c6178ced->leave($__internal_2e04bbe86851cbe035c11705a6a824f2493c5c75b37dc82693943298c6178ced_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1038e3e402e86eae2f8904c94c60be464d862e00125bc7a01621e22abf8a6d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1038e3e402e86eae2f8904c94c60be464d862e00125bc7a01621e22abf8a6d5->enter($__internal_a1038e3e402e86eae2f8904c94c60be464d862e00125bc7a01621e22abf8a6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6177cd10a6019c8f1bc45e86df9de8a382ed3aabc9c99229b07b21a5c92f937b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6177cd10a6019c8f1bc45e86df9de8a382ed3aabc9c99229b07b21a5c92f937b->enter($__internal_6177cd10a6019c8f1bc45e86df9de8a382ed3aabc9c99229b07b21a5c92f937b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6177cd10a6019c8f1bc45e86df9de8a382ed3aabc9c99229b07b21a5c92f937b->leave($__internal_6177cd10a6019c8f1bc45e86df9de8a382ed3aabc9c99229b07b21a5c92f937b_prof);

        
        $__internal_a1038e3e402e86eae2f8904c94c60be464d862e00125bc7a01621e22abf8a6d5->leave($__internal_a1038e3e402e86eae2f8904c94c60be464d862e00125bc7a01621e22abf8a6d5_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5a2303a2b8212e80ab956067136ab0e1960de8966de2b716f5ab8a24c7bedea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5a2303a2b8212e80ab956067136ab0e1960de8966de2b716f5ab8a24c7bedea->enter($__internal_c5a2303a2b8212e80ab956067136ab0e1960de8966de2b716f5ab8a24c7bedea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ff5b78662c3658e74b6b967c0fb486cd313da917536b0f7ad98a03153c6fb80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff5b78662c3658e74b6b967c0fb486cd313da917536b0f7ad98a03153c6fb80->enter($__internal_1ff5b78662c3658e74b6b967c0fb486cd313da917536b0f7ad98a03153c6fb80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_1ff5b78662c3658e74b6b967c0fb486cd313da917536b0f7ad98a03153c6fb80->leave($__internal_1ff5b78662c3658e74b6b967c0fb486cd313da917536b0f7ad98a03153c6fb80_prof);

        
        $__internal_c5a2303a2b8212e80ab956067136ab0e1960de8966de2b716f5ab8a24c7bedea->leave($__internal_c5a2303a2b8212e80ab956067136ab0e1960de8966de2b716f5ab8a24c7bedea_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Users/Charles/WEB/ApifitWeb/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
