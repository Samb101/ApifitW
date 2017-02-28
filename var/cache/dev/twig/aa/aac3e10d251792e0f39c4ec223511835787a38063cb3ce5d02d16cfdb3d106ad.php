<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_16f81aababb64102ebf223bc3f88038d70b8a167117a46a86fee760c718016dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b72f4c53364300bc30d1953bd6c8f0dfa3f24d28b0efde0ad899bbd81b4151b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b72f4c53364300bc30d1953bd6c8f0dfa3f24d28b0efde0ad899bbd81b4151b->enter($__internal_5b72f4c53364300bc30d1953bd6c8f0dfa3f24d28b0efde0ad899bbd81b4151b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_863286103eb0da5a761b07221d45a698d85454942efabd6367b743dcdae424eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_863286103eb0da5a761b07221d45a698d85454942efabd6367b743dcdae424eb->enter($__internal_863286103eb0da5a761b07221d45a698d85454942efabd6367b743dcdae424eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b72f4c53364300bc30d1953bd6c8f0dfa3f24d28b0efde0ad899bbd81b4151b->leave($__internal_5b72f4c53364300bc30d1953bd6c8f0dfa3f24d28b0efde0ad899bbd81b4151b_prof);

        
        $__internal_863286103eb0da5a761b07221d45a698d85454942efabd6367b743dcdae424eb->leave($__internal_863286103eb0da5a761b07221d45a698d85454942efabd6367b743dcdae424eb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f9af7fe6e60f74d281d22f0448f70118c936bcb3b1b79a8473972263d7eddffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9af7fe6e60f74d281d22f0448f70118c936bcb3b1b79a8473972263d7eddffe->enter($__internal_f9af7fe6e60f74d281d22f0448f70118c936bcb3b1b79a8473972263d7eddffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1c235f0289527991629ef554b8229f795f6a20c60c2f8159d6351492d0712892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c235f0289527991629ef554b8229f795f6a20c60c2f8159d6351492d0712892->enter($__internal_1c235f0289527991629ef554b8229f795f6a20c60c2f8159d6351492d0712892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1c235f0289527991629ef554b8229f795f6a20c60c2f8159d6351492d0712892->leave($__internal_1c235f0289527991629ef554b8229f795f6a20c60c2f8159d6351492d0712892_prof);

        
        $__internal_f9af7fe6e60f74d281d22f0448f70118c936bcb3b1b79a8473972263d7eddffe->leave($__internal_f9af7fe6e60f74d281d22f0448f70118c936bcb3b1b79a8473972263d7eddffe_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f0bae92a824ed8bd6cc51daa820c36ab0ee640c93e1654dbf826db5c6e965188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0bae92a824ed8bd6cc51daa820c36ab0ee640c93e1654dbf826db5c6e965188->enter($__internal_f0bae92a824ed8bd6cc51daa820c36ab0ee640c93e1654dbf826db5c6e965188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6a5c8eb1711c5e17bd9f327771017cad5d2ee4d3ce04c94489430713adeaa452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a5c8eb1711c5e17bd9f327771017cad5d2ee4d3ce04c94489430713adeaa452->enter($__internal_6a5c8eb1711c5e17bd9f327771017cad5d2ee4d3ce04c94489430713adeaa452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6a5c8eb1711c5e17bd9f327771017cad5d2ee4d3ce04c94489430713adeaa452->leave($__internal_6a5c8eb1711c5e17bd9f327771017cad5d2ee4d3ce04c94489430713adeaa452_prof);

        
        $__internal_f0bae92a824ed8bd6cc51daa820c36ab0ee640c93e1654dbf826db5c6e965188->leave($__internal_f0bae92a824ed8bd6cc51daa820c36ab0ee640c93e1654dbf826db5c6e965188_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2caa184a4d141018690e4b5fcbca53375d851fad9f11e0fb106e5a3ae0e579c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2caa184a4d141018690e4b5fcbca53375d851fad9f11e0fb106e5a3ae0e579c7->enter($__internal_2caa184a4d141018690e4b5fcbca53375d851fad9f11e0fb106e5a3ae0e579c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_25ed84027dd7302d6a509f35e3c28968bd1e2127ec2d97cb161424d3c6ab1afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ed84027dd7302d6a509f35e3c28968bd1e2127ec2d97cb161424d3c6ab1afe->enter($__internal_25ed84027dd7302d6a509f35e3c28968bd1e2127ec2d97cb161424d3c6ab1afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_25ed84027dd7302d6a509f35e3c28968bd1e2127ec2d97cb161424d3c6ab1afe->leave($__internal_25ed84027dd7302d6a509f35e3c28968bd1e2127ec2d97cb161424d3c6ab1afe_prof);

        
        $__internal_2caa184a4d141018690e4b5fcbca53375d851fad9f11e0fb106e5a3ae0e579c7->leave($__internal_2caa184a4d141018690e4b5fcbca53375d851fad9f11e0fb106e5a3ae0e579c7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/Charles/WEB/ApifitWeb/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
