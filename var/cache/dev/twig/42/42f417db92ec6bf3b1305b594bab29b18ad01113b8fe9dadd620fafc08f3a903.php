<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c04aae403a0f20b772cf8876df3d12a345a6f2d0fc4211b26c942dd4104714b3 extends Twig_Template
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
        $__internal_ea3bade45c743077bca96d54c97adf289e5f350dff522f83b0e83117058c147e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea3bade45c743077bca96d54c97adf289e5f350dff522f83b0e83117058c147e->enter($__internal_ea3bade45c743077bca96d54c97adf289e5f350dff522f83b0e83117058c147e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f0b0e7931e28207703750fbf0b466c1de45744f3f48baf8f59541140ca06d75c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0b0e7931e28207703750fbf0b466c1de45744f3f48baf8f59541140ca06d75c->enter($__internal_f0b0e7931e28207703750fbf0b466c1de45744f3f48baf8f59541140ca06d75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea3bade45c743077bca96d54c97adf289e5f350dff522f83b0e83117058c147e->leave($__internal_ea3bade45c743077bca96d54c97adf289e5f350dff522f83b0e83117058c147e_prof);

        
        $__internal_f0b0e7931e28207703750fbf0b466c1de45744f3f48baf8f59541140ca06d75c->leave($__internal_f0b0e7931e28207703750fbf0b466c1de45744f3f48baf8f59541140ca06d75c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d9bc7c5eecc9566c012ec5ae40c45de7c0f0c1a2aa15ac3c74cba3698860af57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9bc7c5eecc9566c012ec5ae40c45de7c0f0c1a2aa15ac3c74cba3698860af57->enter($__internal_d9bc7c5eecc9566c012ec5ae40c45de7c0f0c1a2aa15ac3c74cba3698860af57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ecff3ef0ad5cea65424ec9331b3a4b37d6a3fa55eb2e4baac7931fd6f8f8850c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecff3ef0ad5cea65424ec9331b3a4b37d6a3fa55eb2e4baac7931fd6f8f8850c->enter($__internal_ecff3ef0ad5cea65424ec9331b3a4b37d6a3fa55eb2e4baac7931fd6f8f8850c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ecff3ef0ad5cea65424ec9331b3a4b37d6a3fa55eb2e4baac7931fd6f8f8850c->leave($__internal_ecff3ef0ad5cea65424ec9331b3a4b37d6a3fa55eb2e4baac7931fd6f8f8850c_prof);

        
        $__internal_d9bc7c5eecc9566c012ec5ae40c45de7c0f0c1a2aa15ac3c74cba3698860af57->leave($__internal_d9bc7c5eecc9566c012ec5ae40c45de7c0f0c1a2aa15ac3c74cba3698860af57_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2f31e04ebe79d3c6447315631b02d117214648db851b8562729c35cb84cb901b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f31e04ebe79d3c6447315631b02d117214648db851b8562729c35cb84cb901b->enter($__internal_2f31e04ebe79d3c6447315631b02d117214648db851b8562729c35cb84cb901b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ed8069635bd02b651808a34da1e7fc53ddf5f71a4ab210094508120d8d9ae8df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed8069635bd02b651808a34da1e7fc53ddf5f71a4ab210094508120d8d9ae8df->enter($__internal_ed8069635bd02b651808a34da1e7fc53ddf5f71a4ab210094508120d8d9ae8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ed8069635bd02b651808a34da1e7fc53ddf5f71a4ab210094508120d8d9ae8df->leave($__internal_ed8069635bd02b651808a34da1e7fc53ddf5f71a4ab210094508120d8d9ae8df_prof);

        
        $__internal_2f31e04ebe79d3c6447315631b02d117214648db851b8562729c35cb84cb901b->leave($__internal_2f31e04ebe79d3c6447315631b02d117214648db851b8562729c35cb84cb901b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a9337486fbab2ff7752f955a337070a60f28638327d27f161c2d08d3adec278a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9337486fbab2ff7752f955a337070a60f28638327d27f161c2d08d3adec278a->enter($__internal_a9337486fbab2ff7752f955a337070a60f28638327d27f161c2d08d3adec278a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0c4fbf744870d2b724827296863a98e56adb80c801d116e5eba9c3cc539531ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4fbf744870d2b724827296863a98e56adb80c801d116e5eba9c3cc539531ed->enter($__internal_0c4fbf744870d2b724827296863a98e56adb80c801d116e5eba9c3cc539531ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0c4fbf744870d2b724827296863a98e56adb80c801d116e5eba9c3cc539531ed->leave($__internal_0c4fbf744870d2b724827296863a98e56adb80c801d116e5eba9c3cc539531ed_prof);

        
        $__internal_a9337486fbab2ff7752f955a337070a60f28638327d27f161c2d08d3adec278a->leave($__internal_a9337486fbab2ff7752f955a337070a60f28638327d27f161c2d08d3adec278a_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/Charles/WEB/ApifitWeb/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
