<?php

/* default/configure.html.twig */
class __TwigTemplate_6154faa71de9dd2148ebbaae3dea75c7930a363b924bfb082b15a39efb82ad91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "default/configure.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5cae143475b4f197724042d4fe3c5042bfb7560d9b22e7aef71454091a91d6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5cae143475b4f197724042d4fe3c5042bfb7560d9b22e7aef71454091a91d6b->enter($__internal_e5cae143475b4f197724042d4fe3c5042bfb7560d9b22e7aef71454091a91d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/configure.html.twig"));

        $__internal_fece7f1df0998e723d6988d0b31deb7eb05722082365ecbf871f7a0af899ca36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fece7f1df0998e723d6988d0b31deb7eb05722082365ecbf871f7a0af899ca36->enter($__internal_fece7f1df0998e723d6988d0b31deb7eb05722082365ecbf871f7a0af899ca36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/configure.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5cae143475b4f197724042d4fe3c5042bfb7560d9b22e7aef71454091a91d6b->leave($__internal_e5cae143475b4f197724042d4fe3c5042bfb7560d9b22e7aef71454091a91d6b_prof);

        
        $__internal_fece7f1df0998e723d6988d0b31deb7eb05722082365ecbf871f7a0af899ca36->leave($__internal_fece7f1df0998e723d6988d0b31deb7eb05722082365ecbf871f7a0af899ca36_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_87cc18a66c2c5295696e94e6dffe0674d380294f8ed4bfc26c9f5791103583b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87cc18a66c2c5295696e94e6dffe0674d380294f8ed4bfc26c9f5791103583b0->enter($__internal_87cc18a66c2c5295696e94e6dffe0674d380294f8ed4bfc26c9f5791103583b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e372c91b4ec79e5f26fbc0a956efe1c68931424b8dc0d88680fa86a1f98d429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e372c91b4ec79e5f26fbc0a956efe1c68931424b8dc0d88680fa86a1f98d429->enter($__internal_9e372c91b4ec79e5f26fbc0a956efe1c68931424b8dc0d88680fa86a1f98d429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
  <body>
    <div style=\"background-color:#e7e7e7; padding:20px; border-bottom: 1px solid #777777\">
      <h1 style=\"text-align:center\">Configuration de votre programme</h1>
      <h1 style=\"text-align:center\">Veuillez choisir votre modèle de montre.</h2>
\t\t\t\t<p style=\"text-align:center\">
            Votre montre actuelle  :
            ";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "api", array()) != null)) {
            // line 13
            echo "                ";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "api", array())), "html", null, true);
            echo "
            ";
        }
        // line 15
        echo "            ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "api", array()) == null)) {
            // line 16
            echo "                Aucune
            ";
        }
        // line 18
        echo "        </p>
   </div>
   <div class=\"container\" style=\"margin:auto; margin-top:10px\">
      <div style=\"border:1px solid #e7e7e7; margin:auto; padding:10px; display:inline-block;\">
  \t\t<a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fitbit");
        echo "\"><img  src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/fitbit_logo.png"), "html", null, true);
        echo "\" width=200 alt=\"Fitbit\"> Je possède une montre Fitbit.</a>
      </div>
      <div class=row style=\"border:1px solid #e7e7e7; margin: 10px auto auto auto; padding:10px;display:inline-block;\">
        <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jawbone");
        echo "\"><img  src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/jawbone_logo.png"), "html", null, true);
        echo "\" width=200 alt=Jawbone> Je possède une montre Jawbone</a>
      </div>
    </div>
  </body>

";
        
        $__internal_9e372c91b4ec79e5f26fbc0a956efe1c68931424b8dc0d88680fa86a1f98d429->leave($__internal_9e372c91b4ec79e5f26fbc0a956efe1c68931424b8dc0d88680fa86a1f98d429_prof);

        
        $__internal_87cc18a66c2c5295696e94e6dffe0674d380294f8ed4bfc26c9f5791103583b0->leave($__internal_87cc18a66c2c5295696e94e6dffe0674d380294f8ed4bfc26c9f5791103583b0_prof);

    }

    public function getTemplateName()
    {
        return "default/configure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 25,  79 => 22,  73 => 18,  69 => 16,  66 => 15,  60 => 13,  58 => 12,  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

{% block body %}

  <body>
    <div style=\"background-color:#e7e7e7; padding:20px; border-bottom: 1px solid #777777\">
      <h1 style=\"text-align:center\">Configuration de votre programme</h1>
      <h1 style=\"text-align:center\">Veuillez choisir votre modèle de montre.</h2>
\t\t\t\t<p style=\"text-align:center\">
            Votre montre actuelle  :
            {% if(app.user.api != null)%}
                {{app.user.api |title }}
            {% endif %}
            {% if(app.user.api == null)%}
                Aucune
            {% endif %}
        </p>
   </div>
   <div class=\"container\" style=\"margin:auto; margin-top:10px\">
      <div style=\"border:1px solid #e7e7e7; margin:auto; padding:10px; display:inline-block;\">
  \t\t<a href=\"{{path('fitbit')}}\"><img  src=\"{{ asset('images/fitbit_logo.png') }}\" width=200 alt=\"Fitbit\"> Je possède une montre Fitbit.</a>
      </div>
      <div class=row style=\"border:1px solid #e7e7e7; margin: 10px auto auto auto; padding:10px;display:inline-block;\">
        <a href=\"{{path('jawbone')}}\"><img  src=\"{{ asset('images/jawbone_logo.png') }}\" width=200 alt=Jawbone> Je possède une montre Jawbone</a>
      </div>
    </div>
  </body>

{% endblock %}
", "default/configure.html.twig", "C:\\Users\\Charles ANDRE\\Web\\ApifitWeb\\app\\Resources\\views\\default\\configure.html.twig");
    }
}
