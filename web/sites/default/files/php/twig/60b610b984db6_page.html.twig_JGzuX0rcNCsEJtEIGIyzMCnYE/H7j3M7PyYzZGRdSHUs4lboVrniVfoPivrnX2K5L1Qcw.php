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

/* themes/custom/IOI_theme/templates/page.html.twig */
class __TwigTemplate_8c9abd8e53f53fd225f27fae948038d0394bb92f2c97a15ffedd487890f21b72 extends \Twig\Template
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
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
      ";
        // line 4
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
        echo "    <footer class=\"site-footer\">
      ";
        // line 65
        $this->displayBlock('footer', $context, $blocks);
        // line 85
        echo "    </footer>
  </div>
</div>
";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        <nav";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null), 5, $this->source), "html", null, true);
        echo ">
          <div class=\"nav-wrapper\">
            ";
        // line 7
        if (($context["container_navbar"] ?? null)) {
            // line 8
            echo "            <div class=\"container\">
              ";
        }
        // line 10
        echo "              ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "
              ";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 11) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 11))) {
            // line 12
            echo "                <button class=\"navbar-toggler navbar-toggler-right collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
                <div class=\"collapse navbar-collapse justify-content-end\" id=\"CollapsingNavbar\">
                  ";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "
                  ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 15)) {
                // line 16
                echo "                    <div class=\"form-inline navbar-form justify-content-end\">
                      ";
                // line 17
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "
                    </div>
                  ";
            }
            // line 20
            echo "                </div>
              ";
        }
        // line 22
        echo "              ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 23
            echo "                <button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
              ";
        }
        // line 25
        echo "              ";
        if (($context["container_navbar"] ?? null)) {
            // line 26
            echo "            </div>
            ";
        }
        // line 28
        echo "          </div>
        </nav>
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
              <div class=\"main-center-footer\">
                ";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_contact", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "
                ";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_subscribe", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "
                ";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_instagram", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "
              </div>
              ";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 78
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 78)) {
            // line 79
            echo "            <div class=\"site-footer__bottom\">
              ";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 83
        echo "        </div>
      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/IOI_theme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 83,  248 => 80,  245 => 79,  242 => 78,  236 => 75,  231 => 73,  227 => 72,  223 => 71,  218 => 69,  215 => 68,  213 => 67,  210 => 66,  206 => 65,  196 => 46,  190 => 43,  184 => 41,  180 => 40,  174 => 28,  170 => 26,  167 => 25,  163 => 23,  160 => 22,  156 => 20,  150 => 17,  147 => 16,  145 => 15,  141 => 14,  137 => 12,  135 => 11,  130 => 10,  126 => 8,  124 => 7,  118 => 5,  114 => 4,  107 => 85,  105 => 65,  102 => 64,  96 => 61,  90 => 58,  84 => 55,  81 => 54,  79 => 53,  76 => 52,  74 => 40,  71 => 39,  64 => 35,  60 => 34,  57 => 33,  55 => 32,  52 => 31,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/IOI_theme/templates/page.html.twig", "/var/www/web/themes/custom/IOI_theme/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 4, "if" => 32);
        static $filters = array("t" => 3, "escape" => 34);
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
