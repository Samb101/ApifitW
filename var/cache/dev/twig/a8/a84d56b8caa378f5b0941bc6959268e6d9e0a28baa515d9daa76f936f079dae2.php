<?php

/* base.html.twig */
class __TwigTemplate_46ec375f9412574a4b1648f4d27c7e0c4c3693fb4dba3003e23cdbf45b02ddb7 extends Twig_Template
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
        $__internal_053e0fab217b6d82795c22802cd34f68490c7b0ad94fbebf44c15650819354cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_053e0fab217b6d82795c22802cd34f68490c7b0ad94fbebf44c15650819354cf->enter($__internal_053e0fab217b6d82795c22802cd34f68490c7b0ad94fbebf44c15650819354cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_474b94c85151823242f6cafdbee85650cce20cf2bc5dcf20e093e3a52a3043ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_474b94c85151823242f6cafdbee85650cce20cf2bc5dcf20e093e3a52a3043ce->enter($__internal_474b94c85151823242f6cafdbee85650cce20cf2bc5dcf20e093e3a52a3043ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_053e0fab217b6d82795c22802cd34f68490c7b0ad94fbebf44c15650819354cf->leave($__internal_053e0fab217b6d82795c22802cd34f68490c7b0ad94fbebf44c15650819354cf_prof);

        
        $__internal_474b94c85151823242f6cafdbee85650cce20cf2bc5dcf20e093e3a52a3043ce->leave($__internal_474b94c85151823242f6cafdbee85650cce20cf2bc5dcf20e093e3a52a3043ce_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_8eb24db89ca18a29e3dfe48f744b73b9b7d80eaa84c5e05e98b71408b0181912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eb24db89ca18a29e3dfe48f744b73b9b7d80eaa84c5e05e98b71408b0181912->enter($__internal_8eb24db89ca18a29e3dfe48f744b73b9b7d80eaa84c5e05e98b71408b0181912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3241c2ff3b33388b8010d64a18deab24153ccc06c1bf44d983e9d14c4758a57f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3241c2ff3b33388b8010d64a18deab24153ccc06c1bf44d983e9d14c4758a57f->enter($__internal_3241c2ff3b33388b8010d64a18deab24153ccc06c1bf44d983e9d14c4758a57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3241c2ff3b33388b8010d64a18deab24153ccc06c1bf44d983e9d14c4758a57f->leave($__internal_3241c2ff3b33388b8010d64a18deab24153ccc06c1bf44d983e9d14c4758a57f_prof);

        
        $__internal_8eb24db89ca18a29e3dfe48f744b73b9b7d80eaa84c5e05e98b71408b0181912->leave($__internal_8eb24db89ca18a29e3dfe48f744b73b9b7d80eaa84c5e05e98b71408b0181912_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_218b13039545a21e35c204394f4cd26f735b6874e8c67a1da3d34bc001bb5d10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_218b13039545a21e35c204394f4cd26f735b6874e8c67a1da3d34bc001bb5d10->enter($__internal_218b13039545a21e35c204394f4cd26f735b6874e8c67a1da3d34bc001bb5d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d2c3bdbcde65e83f79d83c3e2996e795aaeaed2df0fd06cd4226a11fc3a6416f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c3bdbcde65e83f79d83c3e2996e795aaeaed2df0fd06cd4226a11fc3a6416f->enter($__internal_d2c3bdbcde65e83f79d83c3e2996e795aaeaed2df0fd06cd4226a11fc3a6416f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d2c3bdbcde65e83f79d83c3e2996e795aaeaed2df0fd06cd4226a11fc3a6416f->leave($__internal_d2c3bdbcde65e83f79d83c3e2996e795aaeaed2df0fd06cd4226a11fc3a6416f_prof);

        
        $__internal_218b13039545a21e35c204394f4cd26f735b6874e8c67a1da3d34bc001bb5d10->leave($__internal_218b13039545a21e35c204394f4cd26f735b6874e8c67a1da3d34bc001bb5d10_prof);

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
", "base.html.twig", "/Users/Charles/WEB/ApifitWeb/app/Resources/views/base.html.twig");
    }
}
