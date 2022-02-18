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
class __TwigTemplate_fd86af6b4c19ca533646b3c99bf6fc29cf600f88442c8d45b4e23f3a93292db2 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "order/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "        <script src=\"https://js.stripe.com/v3/\"></script>
    ";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Paiement de ma commande - La Boutique Française";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo ($context["delivery"] ?? null);
        echo "
                </div>
     
                <hr>
                <strong>Mon transporteur</strong>
                <div class=\"form-check\">
                    ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "
                    ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "description", [], "any", false, false, false, 25), "html", null, true);
        echo "
                    ";
        // line 26
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 26) / 100), 2, ",", "."), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["cart"] ?? null));
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
            $context["total"] = (($context["total"] ?? null) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 55), "price", [], "any", false, false, false, 55) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 55)));
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["total"] ?? null) / 100), 2, ",", "."), "html", null, true);
        echo " €<br/>
                <strong>Livraison : </strong> ";
        // line 61
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 61) / 100), 2, ",", "."), "html", null, true);
        echo " €
                <hr>
                <strong>Total : </strong> ";
        // line 63
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((($context["total"] ?? null) / 100) + (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 63) / 100)), 2, ",", "."), "html", null, true);
        echo " €
                <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stripe_create_session", ["reference" => ($context["reference"] ?? null)]), "html", null, true);
        echo "\" class=\"btn btn-success btn-block mt-3 mb-5\" id=\"checkout-button\">Payer | ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((($context["total"] ?? null) / 100) + (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 64) / 100)), 2, ",", "."), "html", null, true);
        echo " €</a>
            </div>
        </div>
        <br/>
    ";
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
        return array (  181 => 64,  177 => 63,  172 => 61,  168 => 60,  163 => 57,  157 => 56,  155 => 55,  149 => 52,  142 => 48,  137 => 46,  132 => 44,  124 => 41,  116 => 39,  111 => 38,  109 => 37,  95 => 26,  91 => 25,  87 => 24,  78 => 18,  68 => 10,  64 => 9,  57 => 7,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order/add.html.twig", "C:\\Développement\\Symfony\\laboutiquefrancaise\\templates\\order\\add.html.twig");
    }
}
