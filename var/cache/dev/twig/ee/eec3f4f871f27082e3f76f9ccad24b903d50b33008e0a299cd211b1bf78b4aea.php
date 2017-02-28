<?php

/* base.html.twig */
class __TwigTemplate_4121a87bcfe731533423ab6c3c7ef40f0f275283f6f10104a91411921f8965f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94e8e838c0db67e7711dfd7b81b4a1daef4f2057952d7dd0f0a6503f1021c2c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94e8e838c0db67e7711dfd7b81b4a1daef4f2057952d7dd0f0a6503f1021c2c2->enter($__internal_94e8e838c0db67e7711dfd7b81b4a1daef4f2057952d7dd0f0a6503f1021c2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_18e2f8211fc10406f75d0742532952a61c2111b23320a9c4de925611987a01d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e2f8211fc10406f75d0742532952a61c2111b23320a9c4de925611987a01d1->enter($__internal_18e2f8211fc10406f75d0742532952a61c2111b23320a9c4de925611987a01d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\">
\t<link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
\t<link rel=\"favicon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo-apifit.png"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/default.css"), "html", null, true);
        echo "\"/>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/large_screen.css"), "html", null, true);
        echo "\"/>
\t\t<link rel=\"stylesheet\" media=\"screen and (max-width: 1280px)\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/middle_screen.css"), "html", null, true);
        echo "\"/>
\t\t<link rel=\"stylesheet\" media=\"screen and (max-width: 770px)\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/small_screen.css"), "html", null, true);
        echo "\"/>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta name=\"description\" content=\"Apifit. Rejoignez la communauté des sportifs. Un véritable coach virtuel adapté à votre niveau. Des challenges tout près de chez vous ! \">
\t\t<title>Apifit</title>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js\" type=\"text/javascript\"></script>
</head>
    <body>
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "    </body>
</html>
";
        
        $__internal_94e8e838c0db67e7711dfd7b81b4a1daef4f2057952d7dd0f0a6503f1021c2c2->leave($__internal_94e8e838c0db67e7711dfd7b81b4a1daef4f2057952d7dd0f0a6503f1021c2c2_prof);

        
        $__internal_18e2f8211fc10406f75d0742532952a61c2111b23320a9c4de925611987a01d1->leave($__internal_18e2f8211fc10406f75d0742532952a61c2111b23320a9c4de925611987a01d1_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9771fd99d9b643204cdad3c68b3f9bdf21134edb528ddd64888fec39c8270f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9771fd99d9b643204cdad3c68b3f9bdf21134edb528ddd64888fec39c8270f4->enter($__internal_d9771fd99d9b643204cdad3c68b3f9bdf21134edb528ddd64888fec39c8270f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1da6b310a0d82a62e235d568b789f6cf05122f47d4b04e7baab18d469e700b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da6b310a0d82a62e235d568b789f6cf05122f47d4b04e7baab18d469e700b15->enter($__internal_1da6b310a0d82a62e235d568b789f6cf05122f47d4b04e7baab18d469e700b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1da6b310a0d82a62e235d568b789f6cf05122f47d4b04e7baab18d469e700b15->leave($__internal_1da6b310a0d82a62e235d568b789f6cf05122f47d4b04e7baab18d469e700b15_prof);

        
        $__internal_d9771fd99d9b643204cdad3c68b3f9bdf21134edb528ddd64888fec39c8270f4->leave($__internal_d9771fd99d9b643204cdad3c68b3f9bdf21134edb528ddd64888fec39c8270f4_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_99c114d364337c51d62cb23168f9e6f9e81c0952b84ce346670cf87fd2493ba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99c114d364337c51d62cb23168f9e6f9e81c0952b84ce346670cf87fd2493ba8->enter($__internal_99c114d364337c51d62cb23168f9e6f9e81c0952b84ce346670cf87fd2493ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e000809d3579daa0bb05f450fc74d57c845ee3f05ab15249aa82fd2fcbf58e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e000809d3579daa0bb05f450fc74d57c845ee3f05ab15249aa82fd2fcbf58e55->enter($__internal_e000809d3579daa0bb05f450fc74d57c845ee3f05ab15249aa82fd2fcbf58e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e000809d3579daa0bb05f450fc74d57c845ee3f05ab15249aa82fd2fcbf58e55->leave($__internal_e000809d3579daa0bb05f450fc74d57c845ee3f05ab15249aa82fd2fcbf58e55_prof);

        
        $__internal_99c114d364337c51d62cb23168f9e6f9e81c0952b84ce346670cf87fd2493ba8->leave($__internal_99c114d364337c51d62cb23168f9e6f9e81c0952b84ce346670cf87fd2493ba8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 20,  82 => 19,  70 => 21,  67 => 20,  65 => 19,  54 => 11,  50 => 10,  46 => 9,  42 => 8,  38 => 7,  32 => 4,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<link href=\"{{ asset('bootstrap/bootstrap.css')}}\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\">
\t<link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
\t<link rel=\"favicon\" href=\"{{ asset('images/logo-apifit.png') }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/default.css') }}\"/>
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/large_screen.css') }}\"/>
\t\t<link rel=\"stylesheet\" media=\"screen and (max-width: 1280px)\" href=\"{{ asset('css/middle_screen.css') }}\"/>
\t\t<link rel=\"stylesheet\" media=\"screen and (max-width: 770px)\" href=\"{{ asset('css/small_screen.css') }}\"/>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta name=\"description\" content=\"Apifit. Rejoignez la communauté des sportifs. Un véritable coach virtuel adapté à votre niveau. Des challenges tout près de chez vous ! \">
\t\t<title>Apifit</title>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js\" type=\"text/javascript\"></script>
</head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\Charles ANDRE\\Web\\ApifitWeb\\app\\Resources\\views\\base.html.twig");
    }
}
