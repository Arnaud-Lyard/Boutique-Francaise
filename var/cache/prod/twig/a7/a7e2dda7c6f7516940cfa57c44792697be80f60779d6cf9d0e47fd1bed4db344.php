<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_b9f1e2d22e1f53a270deb68c30217d9571049b35baa9efaf42b05783e376ecf6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"La boutique qui vend uniquement du made in France\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Jekyll v4.1.1\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo "/assets/css/boutiquefrancaise.css";
        echo "\">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href=";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/carousel.css"), "html", null, true);
        echo " rel=\"stylesheet\">
</head>
<body>
<header>
    <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
        <a class=\"navbar-brand\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">La Boutique Française</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
        echo "\">Nos produits</a>
                </li>
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Qui sommes-nous ?</a>
                </li>
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Contact</a>
                </li>
            </ul>
            <div class=\"navbar-item-custom\">
            ";
        // line 54
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 54)) {
            // line 55
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\">Mon compte <small>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 55), "firstname", [], "any", false, false, false, 55), "html", null, true);
            echo ")</small></a> | <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
            ";
        } else {
            // line 57
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a> | <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Inscription</a>
            ";
        }
        // line 59
        echo "            </div>
            <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo "\">
                <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/shopping-cart.png"), "html", null, true);
        echo "\" class=\"cart-icon\" alt=\"Mon panier\">
            </a>
        </div>
    </nav>
</header>

<main role=\"main\">
    ";
        // line 68
        if (        $this->hasBlock("carousel", $context, $blocks)) {
            // line 69
            echo "    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["headers"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["header"]) {
                // line 72
                echo "                        <li data-target=\"#myCarousel\" data-slide-to=";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " ";
                if ((0 === twig_compare($context["key"], 0))) {
                    echo "class=\"active\"";
                }
                echo "></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "        </ol>
        <div class=\"carousel-inner\">
            ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["headers"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["header"]) {
                // line 77
                echo "                <div class=\"carousel-item ";
                if ((0 === twig_compare($context["key"], 0))) {
                    echo "active";
                }
                echo "\" style=\"background: url('/uploads/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "illustration", [], "any", false, false, false, 77), "html", null, true);
                echo "');background-size:cover;\">
                    <div class=\"container\">
                        <div class=\"carousel-caption text-left\">
                            <h1>";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "title", [], "any", false, false, false, 80), "html", null, true);
                echo "</h1>
                            <p>";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "content", [], "any", false, false, false, 81), "html", null, true);
                echo "</p>
                            <p><a class=\"btn btn-lg btn-info\" href=\"";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "btnUrl", [], "any", false, false, false, 82), "html", null, true);
                echo "\" role=\"button\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "btnTitle", [], "any", false, false, false, 82), "html", null, true);
                echo "</a></p>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "        </div>
        <a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
    ";
        }
        // line 98
        echo "
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class=\"container marketing ";
        // line 103
        if ( !        $this->hasBlock("carousel", $context, $blocks)) {
            echo "mt-5";
        }
        echo "\">

    ";
        // line 105
        $this->displayBlock('content', $context, $blocks);
        // line 107
        echo "
    </div><!-- /.container -->

    <!-- FOOTER -->
    <footer class=\"footer-custom\">
        <p>
        &copy; 2017-2020 La Boutique Française<br/>
        <small>La boutique 100% made in France<br/>
        <a href=\"#\">Privacy</a> . <a href=\"#\">Terms</a></small>
        </p>
    </footer>
</main>
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.js"), "html", null, true);
        echo "></script>
</body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "La Boutique Française - 100% Made in France";
    }

    // line 105
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        echo "    ";
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
        return array (  274 => 106,  270 => 105,  263 => 9,  256 => 120,  241 => 107,  239 => 105,  232 => 103,  225 => 98,  212 => 87,  199 => 82,  195 => 81,  191 => 80,  180 => 77,  176 => 76,  172 => 74,  159 => 72,  155 => 71,  151 => 69,  149 => 68,  139 => 61,  135 => 60,  132 => 59,  124 => 57,  114 => 55,  112 => 54,  99 => 44,  89 => 37,  81 => 32,  59 => 13,  55 => 12,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\Développement\\Symfony\\laboutiquefrancaise\\templates\\base.html.twig");
    }
}
