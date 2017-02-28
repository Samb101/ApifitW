<?php

/* auth/register.html.twig */
class __TwigTemplate_66de033fd5f82eae6eb972a524654ebb0a25cd060ee61e4d24ffb13b725f907e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25cca087c550ab537c49419c03926fcb1a155b264b68e598748e205b930c7d63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25cca087c550ab537c49419c03926fcb1a155b264b68e598748e205b930c7d63->enter($__internal_25cca087c550ab537c49419c03926fcb1a155b264b68e598748e205b930c7d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/register.html.twig"));

        $__internal_f87ec4b347c60bbe0a21c3fb53a60b3119dce1c9901021c7b093d02cfe0eaee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f87ec4b347c60bbe0a21c3fb53a60b3119dce1c9901021c7b093d02cfe0eaee1->enter($__internal_f87ec4b347c60bbe0a21c3fb53a60b3119dce1c9901021c7b093d02cfe0eaee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/register.html.twig"));

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
\t<Link rel=\"SHORTCUT ICON\" href=\"";
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
\t\t<!--
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js\"></script>
\t\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/angular-route.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/angular-messages.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/angular-password.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ControllerIndex.js"), "html", null, true);
        echo "\"></script> -->
\t</head>
\t<body ng-app=\"mainApp\">

\t\t<header id=\"myCarousel\" class=\"carousel slide\">

\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
\t\t\t</ol>

\t\t\t<div class=\"carousel-inner\">
\t\t\t\t<div class=banner_links>
\t\t\t\t\t<nav class=\"navbar navbar-inverse\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\" id =\"buttonleft\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"glyphicon glyphicon-home padding-icon-right\"></span>Accueil</a></li>
\t\t\t\t\t\t\t\t<li><a class=\"js-scrollTo\" href=\"#contact\"><span class=\"glyphicon glyphicon-earphone padding-icon-right\"></span>Contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\" id= \"buttonright\">

\t\t\t\t\t\t\t\t";
        // line 44
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 45
            echo "\t\t\t\t\t\t\t\t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#ModalInsc\"><span class=\"glyphicon glyphicon-user padding-icon-right\"></span><span id=\"legende\">Inscription</span></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#ModalConn\" ><span class=\"glyphicon glyphicon-log-in padding-icon-right\"></span><span id=\"legende\">Connexion</span></a></li>
\t\t\t\t\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t\t\t\t\t";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 49
            echo "\t\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\" ><span class=\"glyphicon glyphicon-log-in padding-icon-right\"></span><span id=\"legende\">Mon Tableau de bord</span></a></li>
\t\t\t\t\t\t\t\t";
        }
        // line 51
        echo "
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<div class=\"item active\">
\t\t\t\t\t<img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/header-basket.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h2>Apifit</h2>
\t\t\t\t\t\t<p>Rejoignez la communauté 100% sport</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/header-fitness.jpg"), "html", null, true);
        echo "\" alt=\"Apifit Fitness\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h2>Apifit</h2>
\t\t\t\t\t\t<p>Rejoignez la communauté 100% sport</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/header-rugby.jpg"), "html", null, true);
        echo "\" alt=\"Apifit Rugby\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h2>Apifit</h2>
\t\t\t\t\t\t<p>Rejoignez la communauté 100% sport</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/header-foot.jpg"), "html", null, true);
        echo "\" alt=\"Apifit Foot\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h2>Apifit</h2>
\t\t\t\t\t\t<p>Rejoignez la communauté 100% sport</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
\t\t\t\t<span class=\"icon-prev\"></span>
\t\t\t</a>
\t\t\t<a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
\t\t\t\t<span class=\"icon-next\"></span>
\t\t\t</a>

\t\t</header>
\t\t<!--END CAROUSSEL HEADER-->



\t\t<!-- MENU-->
\t\t<nav class=\"navbar navbar-default menu container-fluid\">
\t\t\t<!-- <div class=\"navbar-header\">
\t\t\t<a class=\"navbar-brand\" href=\"#\"><img src=\"\" alt=\"logo-apifit\"></a>
\t\t</div> -->
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bar_menu\" aria-expanded=\"false\" aria-controls=\"navbar\" style=\"margin-left:20px\">
\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t</div>
\t\t<nav class=\"navbar-collapse collapse\" id=\"bar_menu\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t<li><a class=\"js-scrollTo\" href=\"#accueil\" >Accueil</a></li>
\t\t\t\t<li><a class=\"js-scrollTo\" href=\"#service\">Services</a></li>
\t\t\t\t<li><a class=\"js-scrollTo\" href=\"#equipe\">&Eacute;quipe</a></li>
\t\t\t\t<li><a class=\"js-scrollTo\" href=\"#contact\">Contact</a></li>
\t\t\t</ul>
\t\t</nav>
\t</nav>
\t<!--END MENU-->

\t<!-- Modal inscription-->
\t<div class=\"modal fade\" id=\"ModalInsc\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">

\t\t\t<!-- Modal content-->
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t<h3 class=\"modal-title\"><span class=\"glyphicon glyphicon-user padding-icon-right\"></span> Inscription</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<p>Veuillez remplir le formulaire suivant pour vous inscrire</p>
\t\t\t\t</div>

\t\t\t\t";
        // line 140
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formreg"]) ? $context["formreg"] : $this->getContext($context, "formreg")), 'form_start');
        echo "
\t\t\t\t";
        // line 141
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["formreg"]) ? $context["formreg"] : $this->getContext($context, "formreg")), 'widget');
        echo "
\t\t\t\t<button class=\"btn btn-primary\" id=\"btnmodal\" type=\"submit\">Register !</button>
\t\t\t\t";
        // line 143
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formreg"]) ? $context["formreg"] : $this->getContext($context, "formreg")), 'form_end');
        echo "
\t\t\t</div>

\t\t</div>
\t</div>

\t<!-- Modal Connexion-->
\t<div class=\"modal fade\" id=\"ModalConn\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">

\t\t\t<!-- Modal content-->
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t<h3 class=\"modal-title\"><span class=\"glyphicon glyphicon-user padding-icon-right\"></span> Inscription</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<p>Veuillez remplir le formulaire suivant pour vous inscrire</p>
\t\t\t\t</div>

\t\t\t\t";
        // line 163
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formconn"]) ? $context["formconn"] : $this->getContext($context, "formconn")), 'form_start');
        echo "
\t\t\t\t";
        // line 164
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["formconn"]) ? $context["formconn"] : $this->getContext($context, "formconn")), 'widget');
        echo "
\t\t\t\t<button class=\"btn btn-primary\" id=\"btnmodal\"  type=\"submit\">Connect !</button>
\t\t\t\t";
        // line 166
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formconn"]) ? $context["formconn"] : $this->getContext($context, "formconn")), 'form_end');
        echo "
\t\t\t</div>

\t\t</div>
\t</div>


\t<!--INTRO-->
\t<section class=\"centrer\" id=\"accueil\">
\t\t<div class=container>
\t\t\t<h3 >Qui sommes nous ?</h3>
\t\t\t<p >Notre plateforme est un coach virtuel doté d’une intelligence artificielle
\t\t\t\tpermettant à un utilisateur<br/>de progresser dans un sport souhaité. Un suivi et une progression adaptés à votre niveau et votre objectif vous sont proposés. Vous rejoindrez aussi la communauté Apifit et les challenges associés.</p>
\t\t\t</div>
\t\t</section>
\t\t<!--END INTRO-->

\t\t<!--SERVICES-->
\t\t<section class=\"centrer service\" id=\"service\">
\t\t\t<h3>Nos Services</h3>

\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"process\">
\t\t\t\t\t\t<div class=\"process-row nav nav-tabs\">
\t\t\t\t\t\t\t<div class=\"process-step\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-circle \" data-toggle=\"tab\" href=\"#menu1\"><i class=\"fa fa-user fa-3x\"></i></button>
\t\t\t\t\t\t\t\t<p><small>&Eacute;diter<br />votre Profil</small></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"process-step\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-circle\" data-toggle=\"tab\" href=\"#menu2\"><i class=\"fa fa-line-chart fa-3x\"></i></button>
\t\t\t\t\t\t\t\t<p><small>Récupérer vos Données<br />Quantify-Self</small></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"process-step\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-circle\" data-toggle=\"tab\" href=\"#menu3\"><i class=\"fa fa-trophy fa-3x\"></i></button>
\t\t\t\t\t\t\t\t<p><small>Coach & Programmes<br />personnalisés</small></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"process-step\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-circle\" data-toggle=\"tab\" href=\"#menu4\"><i class=\"fa fa-spinner fa-3x\"></i></button>
\t\t\t\t\t\t\t\t<p><small>Créer une<br />Communauté de Sportif</small></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"process-step\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-circle\" data-toggle=\"tab\" href=\"#menu5\"><i class=\"fa fa-comments-o fa-3x\"></i></button>
\t\t\t\t\t\t\t\t<p><small>Partager<br />votre Passion</small></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div id=\"menu1\" class=\"tab-pane fade active in\">
\t\t\t\t\t\t\t<h3>&Eacute;dition<br />du Profil</h3>
\t\t\t\t\t\t\t<h4>Inscription et édition<br/>
\t\t\t\t\t\t\t\tdu profil et des attentes de l'utilisateur<br/>
\t\t\t\t\t\t\t\tde la plateforme (sport pratiqué, niveau)</h4>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div id=\"menu2\" class=\"tab-pane fade\">
\t\t\t\t\t\t\t\t<h3>Récupération Données<br />Quantify-Self</h3>
\t\t\t\t\t\t\t\t<h4>Collection et récupération des données<br/>
\t\t\t\t\t\t\t\t\tQuantify-Self de l'utilisateur via les bracelets<br/>
\t\t\t\t\t\t\t\t\tet objets connectés</h4>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"menu3\" class=\"tab-pane fade\">
\t\t\t\t\t\t\t\t\t<h3>Coach & Programmes<br />personnalisés</h3>
\t\t\t\t\t\t\t\t\t<h4>Algorithme intélligent qui génère<br/>
\t\t\t\t\t\t\t\t\t\tdes programmes d'entraînements<br/>
\t\t\t\t\t\t\t\t\t\tet des exercices adaptées à l'utilisateur</h4>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"menu4\" class=\"tab-pane fade\">
\t\t\t\t\t\t\t\t\t\t<h3>Création<br />Communauté de sportif</h3>
\t\t\t\t\t\t\t\t\t\t<h4>Gérer et construiser un réseau de sportifs.<br/>
\t\t\t\t\t\t\t\t\t\t\tUne plateforme unique permettant aux sportifs<br/>de communiquer, de challenger,<br/>
\t\t\t\t\t\t\t\t\t\t\trechercher des partenaires qui pratiquent le même sport,<br/>
\t\t\t\t\t\t\t\t\t\t\tcréer des événements.</h4>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div id=\"menu5\" class=\"tab-pane fade\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Partager<br />votre Passion</h3>
\t\t\t\t\t\t\t\t\t\t\t<h4>On pratique pas le même sport,<br/>
\t\t\t\t\t\t\t\t\t\t\t\tmais on a la même passion</h4>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t<!--<ul>
\t\t\t\t<li class=\"col-sm-3\">

\t\t\t\t\t<img src=\"images/icon-prof.png\" alt=\"icon-profil\" id=\"profile\">
\t\t\t\t\t<h4>Un parcours constructif conforme à votre niveau</h4>

\t\t\t\t\t<img src=\"images/icon-stats.png\" alt=\"icon-statistique\">
\t\t\t\t\t<h4>Analysez vos statistiques</h4>
\t\t\t\t</li>
\t\t\t\t<li class=\"col-sm-3 col-sm-offset-6\">
\t\t\t\t\t<img src=\"images/icon-com.png\" alt=\"icon-communaute\">
\t\t\t\t\t<h4>Rejoignez la communauté Apifit et ses défis</h4>

\t\t\t\t\t<img src=\"images/icon-cons.png\" alt=\"icon-conseil\">
\t\t\t\t\t<h4>Des exercices et des conseils</h4></li>
\t\t\t\t</ul>-->


\t\t\t</section>
\t\t\t<!--END SERVICES-->

\t\t\t<!--VIDEO-->
\t\t\t<section class=\"centrer video\">
\t\t\t\t<h3>Vidéo de présentation</h3>
<!-- \t\t\t<img src=\"images/ordi-video.png\" alt=\"ordi-video\">
-->\t\t<div class=\"contenu-video\">
  <section class =\"fondordi\">
\t<img alt=\"LogoApifit\" src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo-apifit.png"), "html", null, true);
        echo "\" height=\"200\" width=\"200\">
\t<h3>Apifit</h3>
</section>
\t\t\t\t<!-- <video   controls=\"controls\">
\t\t\t\t\t<source src=\"\" type=\"video/mp4\" />
\t\t\t\t\t<object type=\"application/x-shockwave-flash\" data=\"https://youtu.be/FlTCAqOcqbo\">
\t\t\t\t\t\t\t<param name=\"movie\" value=\"https://youtu.be/FlTCAqOcqbo\" />
\t\t\t\t\t\t\t<param name=\"wmode\" value=\"transparent\" />
\t\t\t\t\t\t\t[if lte IE 6 ]>
\t\t\t\t\t\t\t<embed src=\"https://youtu.be/FlTCAqOcqbo\" type=\"application/x-shockwave-flash\"  allowscriptaccess=\"always\" allowfullscreen=\"true\" width=\"400\" height=\"222\">
\t\t\t\t\t\t\t</embed>
\t\t\t\t\t\t<![endif]
\t\t\t\t\t\tVous n'avez pas de navigateur moderne, ni Flash installé... suivez les liens ci-dessous pour télécharger les vidéos.
\t\t\t\t\t</object>
\t\t\t\t</video> -->
\t\t\t</div>
\t\t</section>
\t\t<!--END VIDEO-->

\t\t<!--EQUIPE-->
\t\t<div class=\"home-doctors  clearfix\">
\t\t\t<section class=\"centrer equipe\" id=\"equipe\">
\t\t\t\t<h3>Notre équipe</h3>
\t\t\t\t<aside class=\"row\" id=\"centrerequipe\">
\t\t\t\t\t<article class =\"col-md-1\"></article>
\t\t\t\t\t<article class=\"col-md-2 text-center doc-item\" id =\"casemembres\">
\t\t\t\t\t\t<div class=\"common-doctor animated fadeInUp clearfix ae-animation-fadeInUp\">

\t\t\t\t\t\t\t<ul class=\"list-inline social-lists animate\">
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.linkedin.com/in/vincent-bas-7022bba4?authType=NAME_SEARCH&authToken=FbQP&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CentityType%3AentityHistoryName%2CclickedEntityId%3Amynetwork_371007794%2Cidx%3A0\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"mailto:vincentbas92@gmail.com?Subject=Site%20Apifit\"><i class=\"fa fa-envelope-o\"></i></a></li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t<img width=\"670\" height=\"500\" src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Vincent.png"), "html", null, true);
        echo "\" class=\"doc-img animate attachment-gallery-post-single wp-post-image\" alt=\"doctor-2\">
\t\t\t\t\t\t\t</figure>

\t\t\t\t\t\t\t<div class=\"text-content\">
\t\t\t\t\t\t\t\t<h5>Vincent BAS</h5>
\t\t\t\t\t\t\t\t<h5><small>Objets connectés</small></h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>

\t\t\t\t\t<article class=\"col-md-2 text-center doc-item\" id =\"casemembres\">
\t\t\t\t\t\t<div class=\"common-doctor animated fadeInUp clearfix ae-animation-fadeInUp\">

\t\t\t\t\t\t\t<ul class=\"list-inline social-lists animate\">
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.linkedin.com/in/charles-andre-51b59485?trk=nav_responsive_tab_profile_pic\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a thref=\"mailto:andrecharles4vincentbas92@gmail.com?Subject=Site%20Apifit\"><i class=\"fa fa-envelope-o\"></i></a></li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t<img width=\"670\" height=\"500\" src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Charles.png"), "html", null, true);
        echo "\"class=\"doc-img animate attachment-gallery-post-single wp-post-image\" alt=\"doctor-2\">
\t\t\t\t\t\t\t</figure>

\t\t\t\t\t\t\t<div class=\"text-content\">
\t\t\t\t\t\t\t\t<h5>Charles ANDRE</h5>
\t\t\t\t\t\t\t\t<h5><small>Systèmes d'information</small></h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"col-md-2 text-center doc-item\" id =\"casemembres\">
\t\t\t\t\t\t<div class=\"common-doctor animated fadeInUp clearfix ae-animation-fadeInUp\">

\t\t\t\t\t\t\t<ul class=\"list-inline social-lists animate\">
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.linkedin.com/in/samuel-bena%C3%AFs-bb1018a5?authType=NAME_SEARCH&authToken=lvui&locale=en_US&srchid=3030228231480506503594&srchindex=1&srchtotal=1&trk=vsrp_people_res_name&trkInfo=VSRPsearchId%3A3030228231480506503594%2CVSRPtargetId%3A373284277%2CVSRPcmpt%3Aprimary%2CVSRPnm%3Atrue%2CauthType%3ANAME_SEARCH\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"mailto:samuelbenais@outlook.com?Subject=Site%20Apifit\"><i class=\"fa fa-envelope-o\"></i></a></li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t<img width=\"670\" height=\"500\" src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/zinedine.jpg"), "html", null, true);
        echo "\" class=\"doc-img animate attachment-gallery-post-single wp-post-image\" alt=\"doctor-2\">
\t\t\t\t\t\t\t</figure>

\t\t\t\t\t\t\t<div class=\"text-content\">
\t\t\t\t\t\t\t\t<h5>Samuel BENAÏS</h5>
\t\t\t\t\t\t\t\t<h5><small>Systèmes d'information</small></h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"col-md-2 text-center doc-item\" id =\"casemembres\">
\t\t\t\t\t\t<div class=\"common-doctor animated fadeInUp clearfix ae-animation-fadeInUp\">

\t\t\t\t\t\t\t<ul class=\"list-inline social-lists animate\">
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.linkedin.com/in/r%C3%A9mi-alabadan-00575285?authType=NAME_SEARCH&authToken=qs8l&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A303433349%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1480506687740%2Ctas%3Aremi%20ala\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"mailto:remialabadan@gmail.com?Subject=Site%20Apifit\"><i class=\"fa fa-envelope-o\"></i></a></li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t<img width=\"670\" height=\"500\" src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Remi.png"), "html", null, true);
        echo "\" class=\"doc-img animate attachment-gallery-post-single wp-post-image\" alt=\"doctor-2\">
\t\t\t\t\t\t\t</figure>

\t\t\t\t\t\t\t<div class=\"text-content\">
\t\t\t\t\t\t\t\t<h5>Rémi ALABADAN</h5>
\t\t\t\t\t\t\t\t<h5><small>Energies Environnements</small></h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"col-md-2 text-center doc-item\" id =\"casemembres\">
\t\t\t\t\t\t<div class=\"common-doctor animated fadeInUp clearfix ae-animation-fadeInUp\">

\t\t\t\t\t\t\t<ul class=\"list-inline social-lists animate\">
\t\t\t\t\t\t\t\t<li><a href=\"https://www.linkedin.com/in/bayramfatih?authType=NAME_SEARCH&authToken=eQ0O&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A418660352%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1480506653484%2Ctas%3Afati\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"mailto:fatih.b@live.fr?Subject=Site%20Apifit\"><i class=\"fa fa-envelope-o\"></i></a></li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t<img width=\"670\" height=\"500\" src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/fatih.jpg"), "html", null, true);
        echo "\" class=\"doc-img animate attachment-gallery-post-single wp-post-image\" alt=\"doctor-2\">
\t\t\t\t\t\t\t</figure>

\t\t\t\t\t\t\t<div class=\"text-content\">
\t\t\t\t\t\t\t\t<h5>Fatih BAYRAM</h5>
\t\t\t\t\t\t\t\t<h5><small>Systèmes Embarqués</small></h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t\t<article class =\"col-md-1\"></article>
\t\t\t\t<!--<article class=\"col-sm-2 char\"><h5><img src=\"images/businessman.png\" alt=\"Vincent BAS\"></h5></article>
\t\t\t\t<article class=\"col-sm-2 char\"><h5><img src=\"images/dj.png\" alt=\"Charles ANDRE\"></h5></article>
\t\t\t\t<article class=\"col-sm-2 char\"><h5><img src=\"images/croupier.png\" alt=\"Samuel BENAIS\"></h5></article>
\t\t\t\t<article class=\"col-sm-2 char\"><h5><img src=\"images/showman.png\" alt=\"Fatih BAYRAM\"></h5></article>
\t\t\t\t<article class=\"col-sm-2 char\"><h5><img src=\"images/detective.png\" alt=\"Rémi ALABADAN\"></h5></article>-->
\t\t\t</aside>
\t\t</section>
\t</div>
\t<!--END EQUIPE-->

\t<!--PARTENAIRE-->
\t<section class=\"centrer partenaire\">
\t\t<h3>Nos Partenaires</h3>
\t\t<p>Ils nous ont fait confiance ...</p>
\t\t<aside class=\"row logo-part\">
\t\t\t<article class=\"col-sm-2 col-sm-offset-2\"><h5><img src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo-fitbit.png"), "html", null, true);
        echo "\" alt=\"logo-fitbit\"></h5></article>
\t\t\t<article class=\"col-sm-2\"><h5><img src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo-withings.png"), "html", null, true);
        echo "\" alt=\"logo-withings\"></h5></article>
\t\t\t<article class=\"col-sm-2\"><h5><img src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo-orange-bleu.png"), "html", null, true);
        echo "\" alt=\"logo-orange-bleu\"></h5></article>
\t\t\t<article class=\"col-sm-2\"><h5><img src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo-jawbone.png"), "html", null, true);
        echo "\" alt=\"logo-jawbone\"></h5></article>
\t\t</aside>
\t\t<aside class=\"row logo-part\">
\t\t\t<article class=\"col-sm-2 col-sm-offset-2\"><h5><img src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo-forest-hill.png"), "html", null, true);
        echo "\" alt=\"logo-fitbit\"></h5></article>
\t\t\t<article class=\"col-sm-2\"><h5><img src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo-garmin.png"), "html", null, true);
        echo "\" alt=\"logo-withings\"></h5></article>
\t\t\t<article class=\"col-sm-2\"><h5><img src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo-yo-fitness.png"), "html", null, true);
        echo "\" alt=\"logo-orange-bleu\"></h5></article>
\t\t\t<article class=\"col-sm-2\"><h5><img src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo-gopro.png"), "html", null, true);
        echo "\" alt=\"logo-jawbone\"></h5></article>
\t\t</aside>
\t</section>
\t<!--END PARTENAIRE-->

\t<!--CONTACTER-->
\t<section class=\"centrer contacter col-md-12\" id=\"contact\">
\t\t<h3>Nous Contacter</h3>
\t\t<p class=container>Une question, une demande, un intêret pour le projet, contactez nous !</p>
\t\t<section class=\"form-contact\" ng-controller=\"contactCtrl\">

\t\t\t<form class=\"well form-horizontal\" name=\"myFormCont\" ng-controller=\"contactCtrl\" id=\"register_form\" action =\"/\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"inputGroupContainer\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"first_name\" placeholder=\"Prenom\" ng-model=\"name\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div ng-messages=\"myFormCont.first_name.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Text input-->
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"inputGroupContainer\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"family_name\" placeholder=\"Nom\"  ng-model=\"lastname\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div ng-messages=\"myFormCont.family_name.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Text input-->
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"inputGroupContainer\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-envelope\"></i></span>
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Adresse Email\" ng-pattern=\"emailFormat\" ng-model=\"email\" required=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Text input-->
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"inputGroupContainer\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-earphone\"></i></span>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"phone\" placeholder=\"+33\"  ng-model=\"phone\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div ng-messages=\"myFormCont.phone.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\" required>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Text area -->
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"inputGroupContainer\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-pencil\"></i></span>
\t\t\t\t\t\t\t<textarea type=\"text\" class=\"form-control\" ng-minlength=\"30\" name=\"com\" placeholder=\"Commenter..\"  ng-model=\"com\" required></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Success message -->

\t\t\t\t<!-- Button -->
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<button ng-click=\"submit()\" ng-disabled=\"myFormCont.\$invalid\" type=\"button\" class=\"btn btn-primary\">Envoyer<span class=\"glyphicon glyphicon-send padding-icon-left\"></span></button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</section>
\t</section>
\t<!--END CONTACTER-->

\t<footer class=\"centrer footer\">
\t\t<a class=\"rect js-scrollTo\" href=\".carousel\">
\t\t\t<span class=\"glyphicon glyphicon-menu-up\" aria-hidden=\"true\"></span>
\t\t</a>
\t\t<ul class=\"row\" id=\"links\">
\t\t\t<li><a href=\"#\">Mentions Légales</a></li>
\t\t\t<li><a href=\"#\"> - Nous Suivre</a></li>
\t\t\t<li><a href=\"#\"> - Besoin Aide</a></li>
\t\t</ul>
\t\t<div>
\t\t\t<ul class=\"essai social-network social-circle row\" >
\t\t\t\t<li><a target=\"_blank\" href=\"https://www.facebook.com/Apifit-166037367198199/?fref=ts\" class=\"icoFacebook col-md-6\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t<li><a target=\"_blank\" href=\"https://www.youtube.com/channel/UC0cmD6pie45Hfhj9lTXYVnA\" class=\"icoYoutube col-md-6\" title=\"Youtube\"><i class=\"fa fa-youtube\"></i></a></li>
\t\t\t\t<li><a target=\"_blank\" href=\"https://twitter.com/Apifit_Ece\" class=\"icoTwitter col-md-6\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t</ul>
\t\t</div>
\t\t<p>Copyright © 2016 Apifit. Tous droits réservés.</p>
\t</footer>

\t<?php if (\$_COOKIE['accept_cookies']!=\"accepted\"){?> <!-- if the cookie is there, the banner does not display. -->
\t<div class=row id=\"cookies\">
\t\t<div>
\t\t\tEn poursuivant votre navigation sur ce site, vous acceptez l'utilisation de cookies pour vous offrir un meilleur service.
\t\t\t<br/>Pour en savoir plus et savoir comment paramétrer ces cookies : <a href=\"#\" class=\"white underline\" >Cliquez-ici</a>
\t\t</div>
\t</div>
\t<?php  }?>

\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js\"></script>
\t<script src=\"";
        // line 523
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 524
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/apifit.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 525
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/service-process.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t\t\$('.carousel').carousel({
\t\t\tinterval: 5000 //changes the speed
\t\t})

\t\t\$('.js-scrollTo').on('click', function() { // Au clic sur un élément
\t\t\tvar page = \$(this).attr('href'); // Page cible
\t\t\tvar speed = 750; // Durée de l'animation (en ms)
\t\t\t\$('html, body').animate( { scrollTop: \$(page).offset().top }, speed ); // Go
\t\t\treturn false;
\t\t});
\t</script>
</body>
</html>
";
        
        $__internal_25cca087c550ab537c49419c03926fcb1a155b264b68e598748e205b930c7d63->leave($__internal_25cca087c550ab537c49419c03926fcb1a155b264b68e598748e205b930c7d63_prof);

        
        $__internal_f87ec4b347c60bbe0a21c3fb53a60b3119dce1c9901021c7b093d02cfe0eaee1->leave($__internal_f87ec4b347c60bbe0a21c3fb53a60b3119dce1c9901021c7b093d02cfe0eaee1_prof);

    }

    public function getTemplateName()
    {
        return "auth/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  670 => 525,  666 => 524,  662 => 523,  555 => 419,  551 => 418,  547 => 417,  543 => 416,  537 => 413,  533 => 412,  529 => 411,  525 => 410,  497 => 385,  476 => 367,  455 => 349,  434 => 331,  412 => 312,  375 => 278,  260 => 166,  255 => 164,  251 => 163,  228 => 143,  223 => 141,  219 => 140,  157 => 81,  146 => 73,  135 => 65,  124 => 57,  116 => 51,  110 => 49,  107 => 48,  102 => 45,  100 => 44,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
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
\t<Link rel=\"SHORTCUT ICON\" href=\"{{ asset('images/logo-apifit.png') }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/default.css') }}\"/>
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/large_screen.css') }}\"/>
\t\t<link rel=\"stylesheet\" media=\"screen and (max-width: 1280px)\" href=\"{{ asset('css/middle_screen.css') }}\"/>
\t\t<link rel=\"stylesheet\" media=\"screen and (max-width: 770px)\" href=\"{{ asset('css/small_screen.css') }}\"/>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta name=\"description\" content=\"Apifit. Rejoignez la communauté des sportifs. Un véritable coach virtuel adapté à votre niveau. Des challenges tout près de chez vous ! \">
\t\t<title>Apifit</title>
\t\t<!--
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js\"></script>
\t\t<script src=\"{{ asset('js/angular-route.min.js')}}\"></script>
\t\t<script src=\"{{ asset('js/angular-messages.min.js')}}\"></script>
\t\t<script src=\"{{ asset('js/angular-password.min.js')}}\"></script>
\t\t<script src=\"{{ asset('js/ControllerIndex.js')}}\"></script> -->
\t</head>
\t<body ng-app=\"mainApp\">

\t\t<header id=\"myCarousel\" class=\"carousel slide\">

\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
\t\t\t</ol>

\t\t\t<div class=\"carousel-inner\">
\t\t\t\t<div class=banner_links>
\t\t\t\t\t<nav class=\"navbar navbar-inverse\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\" id =\"buttonleft\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"glyphicon glyphicon-home padding-icon-right\"></span>Accueil</a></li>
\t\t\t\t\t\t\t\t<li><a class=\"js-scrollTo\" href=\"#contact\"><span class=\"glyphicon glyphicon-earphone padding-icon-right\"></span>Contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\" id= \"buttonright\">

\t\t\t\t\t\t\t\t{% if app.user == null %}
\t\t\t\t\t\t\t\t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#ModalInsc\"><span class=\"glyphicon glyphicon-user padding-icon-right\"></span><span id=\"legende\">Inscription</span></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#ModalConn\" ><span class=\"glyphicon glyphicon-log-in padding-icon-right\"></span><span id=\"legende\">Connexion</span></a></li>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if app.user != null %}
\t\t\t\t\t\t\t\t<li><a href=\"{{ path('login') }}\" ><span class=\"glyphicon glyphicon-log-in padding-icon-right\"></span><span id=\"legende\">Mon Tableau de bord</span></a></li>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<div class=\"item active\">
\t\t\t\t\t<img src=\"{{ asset('images/header-basket.jpg') }}\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h2>Apifit</h2>
\t\t\t\t\t\t<p>Rejoignez la communauté 100% sport</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"{{ asset('images/header-fitness.jpg') }}\" alt=\"Apifit Fitness\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h2>Apifit</h2>
\t\t\t\t\t\t<p>Rejoignez la communauté 100% sport</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"{{ asset('images/header-rugby.jpg') }}\" alt=\"Apifit Rugby\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h2>Apifit</h2>
\t\t\t\t\t\t<p>Rejoignez la communauté 100% sport</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"{{ asset('images/header-foot.jpg') }}\" alt=\"Apifit Foot\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h2>Apifit</h2>
\t\t\t\t\t\t<p>Rejoignez la communauté 100% sport</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
\t\t\t\t<span class=\"icon-prev\"></span>
\t\t\t</a>
\t\t\t<a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
\t\t\t\t<span class=\"icon-next\"></span>
\t\t\t</a>

\t\t</header>
\t\t<!--END CAROUSSEL HEADER-->



\t\t<!-- MENU-->
\t\t<nav class=\"navbar navbar-default menu container-fluid\">
\t\t\t<!-- <div class=\"navbar-header\">
\t\t\t<a class=\"navbar-brand\" href=\"#\"><img src=\"\" alt=\"logo-apifit\"></a>
\t\t</div> -->
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bar_menu\" aria-expanded=\"false\" aria-controls=\"navbar\" style=\"margin-left:20px\">
\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t</div>
\t\t<nav class=\"navbar-collapse collapse\" id=\"bar_menu\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t<li><a class=\"js-scrollTo\" href=\"#accueil\" >Accueil</a></li>
\t\t\t\t<li><a class=\"js-scrollTo\" href=\"#service\">Services</a></li>
\t\t\t\t<li><a class=\"js-scrollTo\" href=\"#equipe\">&Eacute;quipe</a></li>
\t\t\t\t<li><a class=\"js-scrollTo\" href=\"#contact\">Contact</a></li>
\t\t\t</ul>
\t\t</nav>
\t</nav>
\t<!--END MENU-->

\t<!-- Modal inscription-->
\t<div class=\"modal fade\" id=\"ModalInsc\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">

\t\t\t<!-- Modal content-->
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t<h3 class=\"modal-title\"><span class=\"glyphicon glyphicon-user padding-icon-right\"></span> Inscription</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<p>Veuillez remplir le formulaire suivant pour vous inscrire</p>
\t\t\t\t</div>

\t\t\t\t{{ form_start(formreg) }}
\t\t\t\t{{ form_widget(formreg) }}
\t\t\t\t<button class=\"btn btn-primary\" id=\"btnmodal\" type=\"submit\">Register !</button>
\t\t\t\t{{ form_end(formreg) }}
\t\t\t</div>

\t\t</div>
\t</div>

\t<!-- Modal Connexion-->
\t<div class=\"modal fade\" id=\"ModalConn\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">

\t\t\t<!-- Modal content-->
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t<h3 class=\"modal-title\"><span class=\"glyphicon glyphicon-user padding-icon-right\"></span> Inscription</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<p>Veuillez remplir le formulaire suivant pour vous inscrire</p>
\t\t\t\t</div>

\t\t\t\t{{ form_start(formconn) }}
\t\t\t\t{{ form_widget(formconn) }}
\t\t\t\t<button class=\"btn btn-primary\" id=\"btnmodal\"  type=\"submit\">Connect !</button>
\t\t\t\t{{ form_end(formconn) }}
\t\t\t</div>

\t\t</div>
\t</div>


\t<!--INTRO-->
\t<section class=\"centrer\" id=\"accueil\">
\t\t<div class=container>
\t\t\t<h3 >Qui sommes nous ?</h3>
\t\t\t<p >Notre plateforme est un coach virtuel doté d’une intelligence artificielle
\t\t\t\tpermettant à un utilisateur<br/>de progresser dans un sport souhaité. Un suivi et une progression adaptés à votre niveau et votre objectif vous sont proposés. Vous rejoindrez aussi la communauté Apifit et les challenges associés.</p>
\t\t\t</div>
\t\t</section>
\t\t<!--END INTRO-->

\t\t<!--SERVICES-->
\t\t<section class=\"centrer service\" id=\"service\">
\t\t\t<h3>Nos Services</h3>

\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"process\">
\t\t\t\t\t\t<div class=\"process-row nav nav-tabs\">
\t\t\t\t\t\t\t<div class=\"process-step\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-circle \" data-toggle=\"tab\" href=\"#menu1\"><i class=\"fa fa-user fa-3x\"></i></button>
\t\t\t\t\t\t\t\t<p><small>&Eacute;diter<br />votre Profil</small></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"process-step\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-circle\" data-toggle=\"tab\" href=\"#menu2\"><i class=\"fa fa-line-chart fa-3x\"></i></button>
\t\t\t\t\t\t\t\t<p><small>Récupérer vos Données<br />Quantify-Self</small></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"process-step\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-circle\" data-toggle=\"tab\" href=\"#menu3\"><i class=\"fa fa-trophy fa-3x\"></i></button>
\t\t\t\t\t\t\t\t<p><small>Coach & Programmes<br />personnalisés</small></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"process-step\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-circle\" data-toggle=\"tab\" href=\"#menu4\"><i class=\"fa fa-spinner fa-3x\"></i></button>
\t\t\t\t\t\t\t\t<p><small>Créer une<br />Communauté de Sportif</small></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"process-step\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-circle\" data-toggle=\"tab\" href=\"#menu5\"><i class=\"fa fa-comments-o fa-3x\"></i></button>
\t\t\t\t\t\t\t\t<p><small>Partager<br />votre Passion</small></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div id=\"menu1\" class=\"tab-pane fade active in\">
\t\t\t\t\t\t\t<h3>&Eacute;dition<br />du Profil</h3>
\t\t\t\t\t\t\t<h4>Inscription et édition<br/>
\t\t\t\t\t\t\t\tdu profil et des attentes de l'utilisateur<br/>
\t\t\t\t\t\t\t\tde la plateforme (sport pratiqué, niveau)</h4>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div id=\"menu2\" class=\"tab-pane fade\">
\t\t\t\t\t\t\t\t<h3>Récupération Données<br />Quantify-Self</h3>
\t\t\t\t\t\t\t\t<h4>Collection et récupération des données<br/>
\t\t\t\t\t\t\t\t\tQuantify-Self de l'utilisateur via les bracelets<br/>
\t\t\t\t\t\t\t\t\tet objets connectés</h4>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"menu3\" class=\"tab-pane fade\">
\t\t\t\t\t\t\t\t\t<h3>Coach & Programmes<br />personnalisés</h3>
\t\t\t\t\t\t\t\t\t<h4>Algorithme intélligent qui génère<br/>
\t\t\t\t\t\t\t\t\t\tdes programmes d'entraînements<br/>
\t\t\t\t\t\t\t\t\t\tet des exercices adaptées à l'utilisateur</h4>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"menu4\" class=\"tab-pane fade\">
\t\t\t\t\t\t\t\t\t\t<h3>Création<br />Communauté de sportif</h3>
\t\t\t\t\t\t\t\t\t\t<h4>Gérer et construiser un réseau de sportifs.<br/>
\t\t\t\t\t\t\t\t\t\t\tUne plateforme unique permettant aux sportifs<br/>de communiquer, de challenger,<br/>
\t\t\t\t\t\t\t\t\t\t\trechercher des partenaires qui pratiquent le même sport,<br/>
\t\t\t\t\t\t\t\t\t\t\tcréer des événements.</h4>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div id=\"menu5\" class=\"tab-pane fade\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Partager<br />votre Passion</h3>
\t\t\t\t\t\t\t\t\t\t\t<h4>On pratique pas le même sport,<br/>
\t\t\t\t\t\t\t\t\t\t\t\tmais on a la même passion</h4>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t<!--<ul>
\t\t\t\t<li class=\"col-sm-3\">

\t\t\t\t\t<img src=\"images/icon-prof.png\" alt=\"icon-profil\" id=\"profile\">
\t\t\t\t\t<h4>Un parcours constructif conforme à votre niveau</h4>

\t\t\t\t\t<img src=\"images/icon-stats.png\" alt=\"icon-statistique\">
\t\t\t\t\t<h4>Analysez vos statistiques</h4>
\t\t\t\t</li>
\t\t\t\t<li class=\"col-sm-3 col-sm-offset-6\">
\t\t\t\t\t<img src=\"images/icon-com.png\" alt=\"icon-communaute\">
\t\t\t\t\t<h4>Rejoignez la communauté Apifit et ses défis</h4>

\t\t\t\t\t<img src=\"images/icon-cons.png\" alt=\"icon-conseil\">
\t\t\t\t\t<h4>Des exercices et des conseils</h4></li>
\t\t\t\t</ul>-->


\t\t\t</section>
\t\t\t<!--END SERVICES-->

\t\t\t<!--VIDEO-->
\t\t\t<section class=\"centrer video\">
\t\t\t\t<h3>Vidéo de présentation</h3>
<!-- \t\t\t<img src=\"images/ordi-video.png\" alt=\"ordi-video\">
-->\t\t<div class=\"contenu-video\">
  <section class =\"fondordi\">
\t<img alt=\"LogoApifit\" src=\"{{ asset('images/logo-apifit.png') }}\" height=\"200\" width=\"200\">
\t<h3>Apifit</h3>
</section>
\t\t\t\t<!-- <video   controls=\"controls\">
\t\t\t\t\t<source src=\"\" type=\"video/mp4\" />
\t\t\t\t\t<object type=\"application/x-shockwave-flash\" data=\"https://youtu.be/FlTCAqOcqbo\">
\t\t\t\t\t\t\t<param name=\"movie\" value=\"https://youtu.be/FlTCAqOcqbo\" />
\t\t\t\t\t\t\t<param name=\"wmode\" value=\"transparent\" />
\t\t\t\t\t\t\t[if lte IE 6 ]>
\t\t\t\t\t\t\t<embed src=\"https://youtu.be/FlTCAqOcqbo\" type=\"application/x-shockwave-flash\"  allowscriptaccess=\"always\" allowfullscreen=\"true\" width=\"400\" height=\"222\">
\t\t\t\t\t\t\t</embed>
\t\t\t\t\t\t<![endif]
\t\t\t\t\t\tVous n'avez pas de navigateur moderne, ni Flash installé... suivez les liens ci-dessous pour télécharger les vidéos.
\t\t\t\t\t</object>
\t\t\t\t</video> -->
\t\t\t</div>
\t\t</section>
\t\t<!--END VIDEO-->

\t\t<!--EQUIPE-->
\t\t<div class=\"home-doctors  clearfix\">
\t\t\t<section class=\"centrer equipe\" id=\"equipe\">
\t\t\t\t<h3>Notre équipe</h3>
\t\t\t\t<aside class=\"row\" id=\"centrerequipe\">
\t\t\t\t\t<article class =\"col-md-1\"></article>
\t\t\t\t\t<article class=\"col-md-2 text-center doc-item\" id =\"casemembres\">
\t\t\t\t\t\t<div class=\"common-doctor animated fadeInUp clearfix ae-animation-fadeInUp\">

\t\t\t\t\t\t\t<ul class=\"list-inline social-lists animate\">
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.linkedin.com/in/vincent-bas-7022bba4?authType=NAME_SEARCH&authToken=FbQP&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CentityType%3AentityHistoryName%2CclickedEntityId%3Amynetwork_371007794%2Cidx%3A0\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"mailto:vincentbas92@gmail.com?Subject=Site%20Apifit\"><i class=\"fa fa-envelope-o\"></i></a></li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t<img width=\"670\" height=\"500\" src=\"{{ asset('images/Vincent.png') }}\" class=\"doc-img animate attachment-gallery-post-single wp-post-image\" alt=\"doctor-2\">
\t\t\t\t\t\t\t</figure>

\t\t\t\t\t\t\t<div class=\"text-content\">
\t\t\t\t\t\t\t\t<h5>Vincent BAS</h5>
\t\t\t\t\t\t\t\t<h5><small>Objets connectés</small></h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>

\t\t\t\t\t<article class=\"col-md-2 text-center doc-item\" id =\"casemembres\">
\t\t\t\t\t\t<div class=\"common-doctor animated fadeInUp clearfix ae-animation-fadeInUp\">

\t\t\t\t\t\t\t<ul class=\"list-inline social-lists animate\">
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.linkedin.com/in/charles-andre-51b59485?trk=nav_responsive_tab_profile_pic\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a thref=\"mailto:andrecharles4vincentbas92@gmail.com?Subject=Site%20Apifit\"><i class=\"fa fa-envelope-o\"></i></a></li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t<img width=\"670\" height=\"500\" src=\"{{ asset('images/Charles.png') }}\"class=\"doc-img animate attachment-gallery-post-single wp-post-image\" alt=\"doctor-2\">
\t\t\t\t\t\t\t</figure>

\t\t\t\t\t\t\t<div class=\"text-content\">
\t\t\t\t\t\t\t\t<h5>Charles ANDRE</h5>
\t\t\t\t\t\t\t\t<h5><small>Systèmes d'information</small></h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"col-md-2 text-center doc-item\" id =\"casemembres\">
\t\t\t\t\t\t<div class=\"common-doctor animated fadeInUp clearfix ae-animation-fadeInUp\">

\t\t\t\t\t\t\t<ul class=\"list-inline social-lists animate\">
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.linkedin.com/in/samuel-bena%C3%AFs-bb1018a5?authType=NAME_SEARCH&authToken=lvui&locale=en_US&srchid=3030228231480506503594&srchindex=1&srchtotal=1&trk=vsrp_people_res_name&trkInfo=VSRPsearchId%3A3030228231480506503594%2CVSRPtargetId%3A373284277%2CVSRPcmpt%3Aprimary%2CVSRPnm%3Atrue%2CauthType%3ANAME_SEARCH\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"mailto:samuelbenais@outlook.com?Subject=Site%20Apifit\"><i class=\"fa fa-envelope-o\"></i></a></li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t<img width=\"670\" height=\"500\" src=\"{{ asset('images/zinedine.jpg') }}\" class=\"doc-img animate attachment-gallery-post-single wp-post-image\" alt=\"doctor-2\">
\t\t\t\t\t\t\t</figure>

\t\t\t\t\t\t\t<div class=\"text-content\">
\t\t\t\t\t\t\t\t<h5>Samuel BENAÏS</h5>
\t\t\t\t\t\t\t\t<h5><small>Systèmes d'information</small></h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"col-md-2 text-center doc-item\" id =\"casemembres\">
\t\t\t\t\t\t<div class=\"common-doctor animated fadeInUp clearfix ae-animation-fadeInUp\">

\t\t\t\t\t\t\t<ul class=\"list-inline social-lists animate\">
\t\t\t\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.linkedin.com/in/r%C3%A9mi-alabadan-00575285?authType=NAME_SEARCH&authToken=qs8l&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A303433349%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1480506687740%2Ctas%3Aremi%20ala\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"mailto:remialabadan@gmail.com?Subject=Site%20Apifit\"><i class=\"fa fa-envelope-o\"></i></a></li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t<img width=\"670\" height=\"500\" src=\"{{ asset('images/Remi.png') }}\" class=\"doc-img animate attachment-gallery-post-single wp-post-image\" alt=\"doctor-2\">
\t\t\t\t\t\t\t</figure>

\t\t\t\t\t\t\t<div class=\"text-content\">
\t\t\t\t\t\t\t\t<h5>Rémi ALABADAN</h5>
\t\t\t\t\t\t\t\t<h5><small>Energies Environnements</small></h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"col-md-2 text-center doc-item\" id =\"casemembres\">
\t\t\t\t\t\t<div class=\"common-doctor animated fadeInUp clearfix ae-animation-fadeInUp\">

\t\t\t\t\t\t\t<ul class=\"list-inline social-lists animate\">
\t\t\t\t\t\t\t\t<li><a href=\"https://www.linkedin.com/in/bayramfatih?authType=NAME_SEARCH&authToken=eQ0O&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A418660352%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1480506653484%2Ctas%3Afati\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"mailto:fatih.b@live.fr?Subject=Site%20Apifit\"><i class=\"fa fa-envelope-o\"></i></a></li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t<img width=\"670\" height=\"500\" src=\"{{ asset('images/fatih.jpg') }}\" class=\"doc-img animate attachment-gallery-post-single wp-post-image\" alt=\"doctor-2\">
\t\t\t\t\t\t\t</figure>

\t\t\t\t\t\t\t<div class=\"text-content\">
\t\t\t\t\t\t\t\t<h5>Fatih BAYRAM</h5>
\t\t\t\t\t\t\t\t<h5><small>Systèmes Embarqués</small></h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t\t<article class =\"col-md-1\"></article>
\t\t\t\t<!--<article class=\"col-sm-2 char\"><h5><img src=\"images/businessman.png\" alt=\"Vincent BAS\"></h5></article>
\t\t\t\t<article class=\"col-sm-2 char\"><h5><img src=\"images/dj.png\" alt=\"Charles ANDRE\"></h5></article>
\t\t\t\t<article class=\"col-sm-2 char\"><h5><img src=\"images/croupier.png\" alt=\"Samuel BENAIS\"></h5></article>
\t\t\t\t<article class=\"col-sm-2 char\"><h5><img src=\"images/showman.png\" alt=\"Fatih BAYRAM\"></h5></article>
\t\t\t\t<article class=\"col-sm-2 char\"><h5><img src=\"images/detective.png\" alt=\"Rémi ALABADAN\"></h5></article>-->
\t\t\t</aside>
\t\t</section>
\t</div>
\t<!--END EQUIPE-->

\t<!--PARTENAIRE-->
\t<section class=\"centrer partenaire\">
\t\t<h3>Nos Partenaires</h3>
\t\t<p>Ils nous ont fait confiance ...</p>
\t\t<aside class=\"row logo-part\">
\t\t\t<article class=\"col-sm-2 col-sm-offset-2\"><h5><img src=\"{{ asset('images/logo-fitbit.png') }}\" alt=\"logo-fitbit\"></h5></article>
\t\t\t<article class=\"col-sm-2\"><h5><img src=\"{{ asset('images/logo-withings.png') }}\" alt=\"logo-withings\"></h5></article>
\t\t\t<article class=\"col-sm-2\"><h5><img src=\"{{ asset('images/logo-orange-bleu.png') }}\" alt=\"logo-orange-bleu\"></h5></article>
\t\t\t<article class=\"col-sm-2\"><h5><img src=\"{{ asset('images/logo-jawbone.png') }}\" alt=\"logo-jawbone\"></h5></article>
\t\t</aside>
\t\t<aside class=\"row logo-part\">
\t\t\t<article class=\"col-sm-2 col-sm-offset-2\"><h5><img src=\"{{ asset('images/logo-forest-hill.png') }}\" alt=\"logo-fitbit\"></h5></article>
\t\t\t<article class=\"col-sm-2\"><h5><img src=\"{{ asset('images/logo-garmin.png') }}\" alt=\"logo-withings\"></h5></article>
\t\t\t<article class=\"col-sm-2\"><h5><img src=\"{{ asset('images/logo-yo-fitness.png') }}\" alt=\"logo-orange-bleu\"></h5></article>
\t\t\t<article class=\"col-sm-2\"><h5><img src=\"{{ asset('images/logo-gopro.png') }}\" alt=\"logo-jawbone\"></h5></article>
\t\t</aside>
\t</section>
\t<!--END PARTENAIRE-->

\t<!--CONTACTER-->
\t<section class=\"centrer contacter col-md-12\" id=\"contact\">
\t\t<h3>Nous Contacter</h3>
\t\t<p class=container>Une question, une demande, un intêret pour le projet, contactez nous !</p>
\t\t<section class=\"form-contact\" ng-controller=\"contactCtrl\">

\t\t\t<form class=\"well form-horizontal\" name=\"myFormCont\" ng-controller=\"contactCtrl\" id=\"register_form\" action =\"/\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"inputGroupContainer\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"first_name\" placeholder=\"Prenom\" ng-model=\"name\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div ng-messages=\"myFormCont.first_name.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Text input-->
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"inputGroupContainer\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"family_name\" placeholder=\"Nom\"  ng-model=\"lastname\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div ng-messages=\"myFormCont.family_name.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Text input-->
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"inputGroupContainer\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-envelope\"></i></span>
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Adresse Email\" ng-pattern=\"emailFormat\" ng-model=\"email\" required=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Text input-->
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"inputGroupContainer\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-earphone\"></i></span>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"phone\" placeholder=\"+33\"  ng-model=\"phone\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div ng-messages=\"myFormCont.phone.\$error\" style=\"color:grey; margin-left: 17px;\" role=\"alert\" required>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Text area -->
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"inputGroupContainer\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-pencil\"></i></span>
\t\t\t\t\t\t\t<textarea type=\"text\" class=\"form-control\" ng-minlength=\"30\" name=\"com\" placeholder=\"Commenter..\"  ng-model=\"com\" required></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Success message -->

\t\t\t\t<!-- Button -->
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<button ng-click=\"submit()\" ng-disabled=\"myFormCont.\$invalid\" type=\"button\" class=\"btn btn-primary\">Envoyer<span class=\"glyphicon glyphicon-send padding-icon-left\"></span></button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</section>
\t</section>
\t<!--END CONTACTER-->

\t<footer class=\"centrer footer\">
\t\t<a class=\"rect js-scrollTo\" href=\".carousel\">
\t\t\t<span class=\"glyphicon glyphicon-menu-up\" aria-hidden=\"true\"></span>
\t\t</a>
\t\t<ul class=\"row\" id=\"links\">
\t\t\t<li><a href=\"#\">Mentions Légales</a></li>
\t\t\t<li><a href=\"#\"> - Nous Suivre</a></li>
\t\t\t<li><a href=\"#\"> - Besoin Aide</a></li>
\t\t</ul>
\t\t<div>
\t\t\t<ul class=\"essai social-network social-circle row\" >
\t\t\t\t<li><a target=\"_blank\" href=\"https://www.facebook.com/Apifit-166037367198199/?fref=ts\" class=\"icoFacebook col-md-6\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t<li><a target=\"_blank\" href=\"https://www.youtube.com/channel/UC0cmD6pie45Hfhj9lTXYVnA\" class=\"icoYoutube col-md-6\" title=\"Youtube\"><i class=\"fa fa-youtube\"></i></a></li>
\t\t\t\t<li><a target=\"_blank\" href=\"https://twitter.com/Apifit_Ece\" class=\"icoTwitter col-md-6\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t</ul>
\t\t</div>
\t\t<p>Copyright © 2016 Apifit. Tous droits réservés.</p>
\t</footer>

\t<?php if (\$_COOKIE['accept_cookies']!=\"accepted\"){?> <!-- if the cookie is there, the banner does not display. -->
\t<div class=row id=\"cookies\">
\t\t<div>
\t\t\tEn poursuivant votre navigation sur ce site, vous acceptez l'utilisation de cookies pour vous offrir un meilleur service.
\t\t\t<br/>Pour en savoir plus et savoir comment paramétrer ces cookies : <a href=\"#\" class=\"white underline\" >Cliquez-ici</a>
\t\t</div>
\t</div>
\t<?php  }?>

\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js\"></script>
\t<script src=\"{{ asset('bootstrap/bootstrap.js') }}\"></script>
\t<script type=\"text/javascript\" src=\"{{ asset('js/apifit.js') }}\"></script>
\t<script type=\"text/javascript\" src=\"{{ asset('js/service-process.js') }}\"></script>
\t<script>
\t\t\$('.carousel').carousel({
\t\t\tinterval: 5000 //changes the speed
\t\t})

\t\t\$('.js-scrollTo').on('click', function() { // Au clic sur un élément
\t\t\tvar page = \$(this).attr('href'); // Page cible
\t\t\tvar speed = 750; // Durée de l'animation (en ms)
\t\t\t\$('html, body').animate( { scrollTop: \$(page).offset().top }, speed ); // Go
\t\t\treturn false;
\t\t});
\t</script>
</body>
</html>
", "auth/register.html.twig", "C:\\Users\\Charles ANDRE\\Web\\ApifitWeb\\app\\Resources\\views\\auth\\register.html.twig");
    }
}
