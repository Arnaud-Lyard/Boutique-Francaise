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

/* account/order.html.twig */
class __TwigTemplate_0788e7fc6f96410e778917bec4f94e1e6169b481631c7748d1ae8dfc3a0e00ca extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "account/order.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mes commandes - La Boutique Française";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Mes commandes</h1>
     C'est dans cet espace que vous allez pouvoir gérer toutes vos commandes.<br/>
     <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
        echo "\">Retour</a>
     ";
        // line 9
        if ((0 === twig_compare(twig_length_filter($this->env, ($context["orders"] ?? null)), 0))) {
            // line 10
            echo "     <hr>
     <p class=\"text-center\">
        Vous n'avez pas encore passé de commandes sur la boutique Française.
     </p>
     ";
        } else {
            // line 15
            echo "        <table class=\"table mt-4\">
        <thead>
            <tr>
            <th scope=\"col\">Référence</th>
            <th scope=\"col\">Passé le</th>
            <th scope=\"col\">Produit(s)</th>
            <th scope=\"col\">Total</th>
            <th scope=\"col\"></th>
            </tr>
        </thead>
        <tbody>            
        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 27
                echo "                <tr>
                    <td><span class=\"badge badge-secondary\">";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 28), "html", null, true);
                echo "</span></td>
                    <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 29), "d/m/Y"), "html", null, true);
                echo "</td>
                    <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderDetails", [], "any", false, false, false, 30)), "html", null, true);
                echo "</td>
                    <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["order"], "carrierPrice", [], "any", false, false, false, 31) + twig_get_attribute($this->env, $this->source, $context["order"], "getTotal", [], "any", false, false, false, 31)) / 100), 2, ",", "."), "html", null, true);
                echo " €</td>
                    <td class=\"text-right\"><a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_order_show", ["reference" => twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\">Voir ma commande</a></td>
                </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        </tbody>
        </table>

     ";
        }
    }

    public function getTemplateName()
    {
        return "account/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 35,  111 => 32,  107 => 31,  103 => 30,  99 => 29,  95 => 28,  92 => 27,  88 => 26,  75 => 15,  68 => 10,  66 => 9,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/order.html.twig", "C:\\Développement\\Symfony\\laboutiquefrancaise\\templates\\account\\order.html.twig");
    }
}
