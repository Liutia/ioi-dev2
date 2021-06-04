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

/* themes/custom/IOI_theme/templates/item-list.html.twig */
class __TwigTemplate_b29d6abad49b85d84bfbf27b7701a9c6dbf86cb261a8c28203d44979485ada64 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "

";
        // line 24
        if (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "list_style", [], "any", false, false, true, 24)) {
            // line 25
            $context["wrapper_attributes"] = twig_get_attribute($this->env, $this->source, ($context["wrapper_attributes"] ?? null), "addClass", [0 => ("item-list--" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "list_style", [], "any", false, false, true, 25), 25, $this->source))], "method", false, false, true, 25);
            // line 26
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ("item-list__" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "list_style", [], "any", false, false, true, 26), 26, $this->source))], "method", false, false, true, 26);
        }
        // line 28
        if ((($context["items"] ?? null) || ($context["empty"] ?? null))) {
            // line 29
            echo "<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["wrapper_attributes"] ?? null), "addClass", [0 => "item-list"], "method", false, false, true, 29), 29, $this->source), "html", null, true);
            echo ">";
            // line 30
            if (($context["items"] ?? null)) {
                // line 31
                echo "<";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_type"] ?? null), 31, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "list-group"], "method", false, false, true, 31), 31, $this->source), "html", null, true);
                echo ">";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 33
                    echo "<li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 33), "addClass", [0 => "list-group-item"], "method", false, false, true, 33), 33, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "</";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_type"] ?? null), 35, $this->source), "html", null, true);
                echo ">";
            } else {
                // line 37
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 37, $this->source), "html", null, true);
            }
            // line 39
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/IOI_theme/templates/item-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 39,  82 => 37,  77 => 35,  67 => 33,  63 => 32,  58 => 31,  56 => 30,  52 => 29,  50 => 28,  47 => 26,  45 => 25,  43 => 24,  39 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/IOI_theme/templates/item-list.html.twig", "/var/www/web/themes/custom/IOI_theme/templates/item-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 24, "set" => 25, "for" => 32);
        static $filters = array("escape" => 29);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
