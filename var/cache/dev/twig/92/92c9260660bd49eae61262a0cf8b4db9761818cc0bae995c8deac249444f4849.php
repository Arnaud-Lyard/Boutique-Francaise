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

/* blog/index.html.twig */
class __TwigTemplate_bc50608ceb69aac1c4ecce42538de25418bdeb03f9ce0b013504d69d45ce48b3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Actualités - La Boutique Française";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>Bienvenue sur l'actualité de la boutique</h1>
";
        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"row\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 12
            echo "                    <div class=\"card m-2\" style=\"width: 18rem;\">
                        <p class=\"date mt-3\"> Ecrit le ";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 13), "m/d/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 13), "H:i"), "html", null, true);
            echo " par ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "user", [], "any", false, false, false, 13), "html", null, true);
            echo " </p>
                        <img class=\"card-img-top image\" src=\"/uploads/articles/";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 14), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 14), "html", null, true);
            echo "\" >
                        <div class=\"card-body\">
                            <h5 class=\"card-title titre\"> ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 16), "html", null, true);
            echo "</h5>
                            ";
            // line 18
            echo "                            <a href=\" ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\" class=\"btn btn-info bouton\">En savoir plus</a>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "   
            </div>
        </div>
        <div class=\"col-md-4\">
            <a class=\"text-decoration-none\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\"> 
                <h2>Categories</h2>
            </a>
                <ul class=\"list-group categoryDetails\">
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 30
            echo "                    <li class=\"list-group-item d-flex justify-content-between align-items-center\"> 
                        <a class=\"text-decoration-none titreCategorie\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categoryDetails", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\"> 
                            ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "title", [], "any", false, false, false, 32), "html", null, true);
            echo " 
                        </a>

                        <a class=\"text-decoration-none\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categoryDetails", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">
                            <img class=\"imageCategorie\" src=\"/uploads/categories/";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "image", [], "any", false, false, false, 36), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "title", [], "any", false, false, false, 36), "html", null, true);
            echo "\" >
                        </a>
                        
                        <a class=\"text-decoration-none\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categoryDetails", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">
                            <span class=\"badge bg-info rounded-pill\"> ";
            // line 40
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "articles", [], "any", false, false, false, 40)), "html", null, true);
            echo " 
                                ";
            // line 41
            if ((0 >= twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "articles", [], "any", false, false, false, 41)), 1))) {
                // line 42
                echo "                                    article 
                                        ";
            } else {
                // line 43
                echo "                   
                                    articles
                                ";
            }
            // line 45
            echo "                 
                            </span>
                        </a> 
                    </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                </ul>
        </div>
            
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 50,  194 => 45,  189 => 43,  185 => 42,  183 => 41,  179 => 40,  175 => 39,  167 => 36,  163 => 35,  157 => 32,  153 => 31,  150 => 30,  146 => 29,  139 => 25,  133 => 21,  122 => 18,  118 => 16,  111 => 14,  103 => 13,  100 => 12,  96 => 11,  91 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Actualités - La Boutique Française{% endblock %}

{% block content %}
    <h1>Bienvenue sur l'actualité de la boutique</h1>
{# Affichage des articles #}
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"row\">
                {% for article in articles %}
                    <div class=\"card m-2\" style=\"width: 18rem;\">
                        <p class=\"date mt-3\"> Ecrit le {{ article.createdAt | date(\"m/d/Y\")  }} à {{ article.createdAt | date(\"H:i\")  }} par {{ article.user }} </p>
                        <img class=\"card-img-top image\" src=\"/uploads/articles/{{ article.image }}\" alt=\"{{ article.title }}\" >
                        <div class=\"card-body\">
                            <h5 class=\"card-title titre\"> {{ article.title }}</h5>
                            {# <p class=\"card-text\">{{ article.content }}</p> #}
                            <a href=\" {{ path ('show',{'id':article.id}) }}\" class=\"btn btn-info bouton\">En savoir plus</a>
                        </div>
                    </div>
                {% endfor %}   
            </div>
        </div>
        <div class=\"col-md-4\">
            <a class=\"text-decoration-none\" href=\"{{ path ('blog') }}\"> 
                <h2>Categories</h2>
            </a>
                <ul class=\"list-group categoryDetails\">
            {% for categorie in categories %}
                    <li class=\"list-group-item d-flex justify-content-between align-items-center\"> 
                        <a class=\"text-decoration-none titreCategorie\" href=\"{{ path('categoryDetails', {'id':categorie.id}) }}\"> 
                            {{ categorie.title }} 
                        </a>

                        <a class=\"text-decoration-none\" href=\"{{ path('categoryDetails', {'id':categorie.id}) }}\">
                            <img class=\"imageCategorie\" src=\"/uploads/categories/{{ categorie.image }}\" alt=\"{{ categorie.title }}\" >
                        </a>
                        
                        <a class=\"text-decoration-none\" href=\"{{ path('categoryDetails', {'id':categorie.id}) }}\">
                            <span class=\"badge bg-info rounded-pill\"> {{ categorie.articles | length }} 
                                {% if categorie.articles | length <= 1 %}
                                    article 
                                        {% else %}                   
                                    articles
                                {% endif %}                 
                            </span>
                        </a> 
                    </li>
            {% endfor %}
                </ul>
        </div>
            
    </div>


{% endblock %}", "blog/index.html.twig", "C:\\Développement\\Symfony\\laboutiquefrancaise\\templates\\blog\\index.html.twig");
    }
}
