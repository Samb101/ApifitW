<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60b558f13f212622b71429dd386fc723affe025f7fe41bce03aef6d62d5c4bda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_46f831996492e8661bf40d61d42b544a698c740ee2d61a15babf898639b9b7b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46f831996492e8661bf40d61d42b544a698c740ee2d61a15babf898639b9b7b5->enter($__internal_46f831996492e8661bf40d61d42b544a698c740ee2d61a15babf898639b9b7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4fedffd318c265a12c04bfd7eada7b94c988b9cd66e7cd13ce27e19c397d632f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fedffd318c265a12c04bfd7eada7b94c988b9cd66e7cd13ce27e19c397d632f->enter($__internal_4fedffd318c265a12c04bfd7eada7b94c988b9cd66e7cd13ce27e19c397d632f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46f831996492e8661bf40d61d42b544a698c740ee2d61a15babf898639b9b7b5->leave($__internal_46f831996492e8661bf40d61d42b544a698c740ee2d61a15babf898639b9b7b5_prof);

        
        $__internal_4fedffd318c265a12c04bfd7eada7b94c988b9cd66e7cd13ce27e19c397d632f->leave($__internal_4fedffd318c265a12c04bfd7eada7b94c988b9cd66e7cd13ce27e19c397d632f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e26bdf887e95971c8d9c9227bd56c2b266a7a10a90dbb27e8bb8a82256a25744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e26bdf887e95971c8d9c9227bd56c2b266a7a10a90dbb27e8bb8a82256a25744->enter($__internal_e26bdf887e95971c8d9c9227bd56c2b266a7a10a90dbb27e8bb8a82256a25744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5e187045954d81079944d3434785b0623d0e769dce37d73bf8428dee38b37b47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e187045954d81079944d3434785b0623d0e769dce37d73bf8428dee38b37b47->enter($__internal_5e187045954d81079944d3434785b0623d0e769dce37d73bf8428dee38b37b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5e187045954d81079944d3434785b0623d0e769dce37d73bf8428dee38b37b47->leave($__internal_5e187045954d81079944d3434785b0623d0e769dce37d73bf8428dee38b37b47_prof);

        
        $__internal_e26bdf887e95971c8d9c9227bd56c2b266a7a10a90dbb27e8bb8a82256a25744->leave($__internal_e26bdf887e95971c8d9c9227bd56c2b266a7a10a90dbb27e8bb8a82256a25744_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_95e1cd7e54f22684c78b525266e1ab830e286e67d01e10a1c34e38d508d89281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95e1cd7e54f22684c78b525266e1ab830e286e67d01e10a1c34e38d508d89281->enter($__internal_95e1cd7e54f22684c78b525266e1ab830e286e67d01e10a1c34e38d508d89281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d82cc65fea524f508413f9a9dcd8acaaeaaa6dae21d299dffa2a64ccb2bd4e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d82cc65fea524f508413f9a9dcd8acaaeaaa6dae21d299dffa2a64ccb2bd4e1d->enter($__internal_d82cc65fea524f508413f9a9dcd8acaaeaaa6dae21d299dffa2a64ccb2bd4e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d82cc65fea524f508413f9a9dcd8acaaeaaa6dae21d299dffa2a64ccb2bd4e1d->leave($__internal_d82cc65fea524f508413f9a9dcd8acaaeaaa6dae21d299dffa2a64ccb2bd4e1d_prof);

        
        $__internal_95e1cd7e54f22684c78b525266e1ab830e286e67d01e10a1c34e38d508d89281->leave($__internal_95e1cd7e54f22684c78b525266e1ab830e286e67d01e10a1c34e38d508d89281_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_45dded3fe82c791e1953bb899e54973f837fc6eb23b32359732c071458548011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45dded3fe82c791e1953bb899e54973f837fc6eb23b32359732c071458548011->enter($__internal_45dded3fe82c791e1953bb899e54973f837fc6eb23b32359732c071458548011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0590d2cd6bf72e8b79162ad0cb0492df4e75f03565bb714f4857f484777780c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0590d2cd6bf72e8b79162ad0cb0492df4e75f03565bb714f4857f484777780c9->enter($__internal_0590d2cd6bf72e8b79162ad0cb0492df4e75f03565bb714f4857f484777780c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0590d2cd6bf72e8b79162ad0cb0492df4e75f03565bb714f4857f484777780c9->leave($__internal_0590d2cd6bf72e8b79162ad0cb0492df4e75f03565bb714f4857f484777780c9_prof);

        
        $__internal_45dded3fe82c791e1953bb899e54973f837fc6eb23b32359732c071458548011->leave($__internal_45dded3fe82c791e1953bb899e54973f837fc6eb23b32359732c071458548011_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\Charles ANDRE\\Web\\ApifitWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
