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

/* order/add.html.twig */
class __TwigTemplate_003192c102d6c7694429d67e0ce9b5074b8d94c2583732df28af89aaad32807f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "        <script src=\"https://js.stripe.com/v3/\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Paiement de ma commande - La Boutique Française";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "        <h2>Mon récapitulatif</h2>
        <p>Vérifiez vos informations avant de payer votre commande.</p>
        <hr>
        <div class=\"row\">
            <div class=\"col-md-6\">
     
                <strong>Mon adresse de livraison</strong><br/>
                <div class=\"form-check mt-4\">
                    ";
        // line 18
        echo (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 18, $this->source); })());
        echo "
                </div>
     
                <hr>
                <strong>Mon transporteur</strong>
                <div class=\"form-check\">
                    ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "
                    ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), "html", null, true);
        echo "
                    ";
        // line 26
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 26, $this->source); })()), "price", [], "any", false, false, false, 26) / 100), 2, ",", "."), "html", null, true);
        echo "€
                </div>
     
     
            </div>
            <div class=\"col-md-6\">
                <div class=\"text-center\">
                    <b>Ma commande</b><br/>
     
                </div>
                <div class=\"order-summary\">
                    ";
        // line 37
        $context["total"] = null;
        // line 38
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 39
            echo "                        <div class=\"row ";
            if ((1 === twig_compare($context["key"], 0))) {
                echo "mt-2";
            }
            echo "\">
                            <div class=\"col-2\">
                                <img src=\"/uploads/";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 41), "illustration", [], "any", false, false, false, 41), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true);
            echo "\" height=\"75px\"><br>
                            </div>
                            <div class=\"col-8 my-auto\">
                                ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
            echo "<br/>
                                <small>
                                    ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 46), "subtitle", [], "any", false, false, false, 46), "html", null, true);
            echo "
                                    <br/>
                                    x ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 48), "html", null, true);
            echo "
                                </small>
                            </div>
                            <div class=\"col-2 my-auto\">
                                ";
            // line 52
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 52), "price", [], "any", false, false, false, 52) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 52)) / 100), 2, ",", "."), "html", null, true);
            echo " €
                            </div>
                        </div>
                        ";
            // line 55
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 55, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 55), "price", [], "any", false, false, false, 55) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 55)));
            // line 56
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                </div>
     
                <hr>
                <strong>Sous-Total : </strong> ";
        // line 60
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 60, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
        echo " €<br/>
                <strong>Livraison : </strong> ";
        // line 61
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 61, $this->source); })()), "price", [], "any", false, false, false, 61) / 100), 2, ",", "."), "html", null, true);
        echo " €
                <hr>
                <strong>Total : </strong> ";
        // line 63
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 63, $this->source); })()) / 100) + (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 63, $this->source); })()), "price", [], "any", false, false, false, 63) / 100)), 2, ",", "."), "html", null, true);
        echo " €
                <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stripe_create_session", ["reference" => (isset($context["reference"]) || array_key_exists("reference", $context) ? $context["reference"] : (function () { throw new RuntimeError('Variable "reference" does not exist.', 64, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-success btn-block mt-3 mb-5\" id=\"checkout-button\">Payer | ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 64, $this->source); })()) / 100) + (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 64, $this->source); })()), "price", [], "any", false, false, false, 64) / 100)), 2, ",", "."), "html", null, true);
        echo " €</a>
            </div>
        </div>
        <br/>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "order/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 64,  219 => 63,  214 => 61,  210 => 60,  205 => 57,  199 => 56,  197 => 55,  191 => 52,  184 => 48,  179 => 46,  174 => 44,  166 => 41,  158 => 39,  153 => 38,  151 => 37,  137 => 26,  133 => 25,  129 => 24,  120 => 18,  110 => 10,  100 => 9,  81 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    {% extends 'base.html.twig' %}
     
    {% block javascripts %}
        <script src=\"https://js.stripe.com/v3/\"></script>
    {% endblock %}
     
    {% block title %}Paiement de ma commande - La Boutique Française{% endblock %}
     
    {% block content %}
        <h2>Mon récapitulatif</h2>
        <p>Vérifiez vos informations avant de payer votre commande.</p>
        <hr>
        <div class=\"row\">
            <div class=\"col-md-6\">
     
                <strong>Mon adresse de livraison</strong><br/>
                <div class=\"form-check mt-4\">
                    {{ delivery|raw }}
                </div>
     
                <hr>
                <strong>Mon transporteur</strong>
                <div class=\"form-check\">
                    {{ carrier.name }}
                    {{ carrier.description }}
                    {{ (carrier.price / 100) |number_format(2, ',', '.') }}€
                </div>
     
     
            </div>
            <div class=\"col-md-6\">
                <div class=\"text-center\">
                    <b>Ma commande</b><br/>
     
                </div>
                <div class=\"order-summary\">
                    {% set total = null %}
                    {% for key, product in cart %}
                        <div class=\"row {% if key > 0 %}mt-2{% endif %}\">
                            <div class=\"col-2\">
                                <img src=\"/uploads/{{ product.product.illustration }}\" alt=\"{{ product.product.name }}\" height=\"75px\"><br>
                            </div>
                            <div class=\"col-8 my-auto\">
                                {{ product.product.name }}<br/>
                                <small>
                                    {{ product.product.subtitle }}
                                    <br/>
                                    x {{ product.quantity }}
                                </small>
                            </div>
                            <div class=\"col-2 my-auto\">
                                {{ ((product.product.price * product.quantity) / 100) | number_format(2, ',', '.') }} €
                            </div>
                        </div>
                        {% set total = total + (product.product.price * product.quantity) %}
                    {% endfor %}
                </div>
     
                <hr>
                <strong>Sous-Total : </strong> {{ (total / 100)|number_format(2, ',', '.') }} €<br/>
                <strong>Livraison : </strong> {{ (carrier.price / 100)|number_format(2, ',', '.') }} €
                <hr>
                <strong>Total : </strong> {{ ((total / 100) + (carrier.price / 100))|number_format(2, ',', '.') }} €
                <a href=\"{{ path('stripe_create_session', {'reference' : reference }) }}\" class=\"btn btn-success btn-block mt-3 mb-5\" id=\"checkout-button\">Payer | {{ ((total / 100) + (carrier.price / 100))|number_format(2, ',', '.') }} €</a>
            </div>
        </div>
        <br/>
    {% endblock %}
        {# {% block script %}
        <script type=\"text/javascript\">
            var stripe = Stripe('sk_test_51KRFeQLhpA55h2Csl29V3WGsK288ZHGIwC1SiNLLqeyslrrkmwjnI5Sg9O8AddlfTaALdFg5Vv0FatvDh54g4oUt00CtPgF8eD');
            var checkoutButton = document.getElementById(\"checkout-button\");
            checkoutButton.addEventListener(\"click\", function () {
                    fetch(\"/commande/create-session/{{ reference }}\", {
                        method: \"POST\",
                    })
                    .then(function (response) {
                        return response.json();
                    })
                    .then(function (session) {
                        if (session.error == 'order') {
                            window.location.replace('{{ path('order') }}');
                        } else {
                            return stripe.redirectToCheckout({ sessionId: session.id });
                        }
                    })
                    .then(function (result) {
                        // If redirectToCheckout fails due to a browser or network
                        // error, you should display the localized error message to your
                        // customer using error.message.
                        if (result.error) {
                            alert(result.error.message);
                        }
                    })
                    .catch(function (error) {
                        console.error(\"Error:\", error);
                    });
            });
     
        </script>
    {% endblock %} #}
     ", "order/add.html.twig", "C:\\Développement\\Symfony\\laboutiquefrancaise\\templates\\order\\add.html.twig");
    }
}
