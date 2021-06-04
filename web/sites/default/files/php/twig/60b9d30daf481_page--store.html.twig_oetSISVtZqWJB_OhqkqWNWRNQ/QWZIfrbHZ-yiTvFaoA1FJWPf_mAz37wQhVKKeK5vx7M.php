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

/* themes/custom/IOI_theme/templates/page--store.html.twig */
class __TwigTemplate_11977e795d23a2e7a559eb438e50622af9272e44d7c29974b469756900638cea extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
      ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 31
        echo "    </header>
    ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 32)) {
            // line 33
            echo "      <div class=\"highlighted main-slider\">
        <aside class=\"";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 34, $this->source), "html", null, true);
            echo " section clearfix\" role=\"complementary\">
          ";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 39
        echo "    <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      ";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "    </div>
    ";
        // line 53
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 53) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 53)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 53))) {
            // line 54
            echo "      <div class=\"news container\">
        ";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "
      </div>
      <section class=\"section-team\">
        ";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo "
      </section>
      <section class=\"section-hitman\">
        ";
            // line 61
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
            echo "
      </section>
    ";
        }
        // line 64
        echo "    <footer class=\"site-footer site-footer-2\">
      ";
        // line 65
        $this->displayBlock('footer', $context, $blocks);
        // line 81
        echo "    </footer>
  </div>
</div>
";
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
        <nav";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null), 7, $this->source), "html", null, true);
        echo ">
          ";
        // line 8
        if (($context["container_navbar"] ?? null)) {
            // line 9
            echo "          <div class=\"container\">
          ";
        }
        // line 11
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "
            ";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 12) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 12))) {
            // line 13
            echo "              <button class=\"navbar-toggler navbar-toggler-right collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
              <div class=\"collapse navbar-collapse justify-content-end\" id=\"CollapsingNavbar\">
                ";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "
                ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 16)) {
                // line 17
                echo "                  <div class=\"form-inline navbar-form justify-content-end\">
                    ";
                // line 18
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "
                  </div>
                ";
            }
            // line 21
            echo "\t          </div>
            ";
        }
        // line 23
        echo "            ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 24
            echo "              <button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
            ";
        }
        // line 26
        echo "          ";
        if (($context["container_navbar"] ?? null)) {
            // line 27
            echo "          </div>
          ";
        }
        // line 29
        echo "        </nav>
      ";
    }

    // line 40
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "        <div id=\"main\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 41, $this->source), "html", null, true);
        echo "\">
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
            <main";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 43, $this->source), "html", null, true);
        echo ">
              <section class=\"section\">
                <a id=\"main-content\" tabindex=\"-1\"></a>
                ";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "
              </section>
            </main>
          </div>
        </div>
      ";
    }

    // line 65
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "        <div class=\"container\">
          ";
        // line 67
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 67) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 67)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 67)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 67))) {
            // line 68
            echo "            <div class=\"site-footer__top clearfix\">
              ";
            // line 69
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
            echo "
              ";
            // line 70
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
            echo "
              ";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 74
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 74)) {
            // line 75
            echo "            <div class=\"site-footer__bottom\">
              ";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 79
        echo "        </div>
      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/IOI_theme/templates/page--store.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 79,  239 => 76,  236 => 75,  233 => 74,  227 => 71,  223 => 70,  219 => 69,  216 => 68,  214 => 67,  211 => 66,  207 => 65,  197 => 46,  191 => 43,  185 => 41,  181 => 40,  176 => 29,  172 => 27,  169 => 26,  165 => 24,  162 => 23,  158 => 21,  152 => 18,  149 => 17,  147 => 16,  143 => 15,  139 => 13,  137 => 12,  132 => 11,  128 => 9,  126 => 8,  122 => 7,  119 => 6,  115 => 5,  108 => 81,  106 => 65,  103 => 64,  97 => 61,  91 => 58,  85 => 55,  82 => 54,  80 => 53,  77 => 52,  75 => 40,  72 => 39,  65 => 35,  61 => 34,  58 => 33,  56 => 32,  53 => 31,  51 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/IOI_theme/templates/page--store.html.twig", "/var/www/web/themes/custom/IOI_theme/templates/page--store.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 5, "if" => 32);
        static $filters = array("t" => 4, "escape" => 34);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['t', 'escape'],
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
