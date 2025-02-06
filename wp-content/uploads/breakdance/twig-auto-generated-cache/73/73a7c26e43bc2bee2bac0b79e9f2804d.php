<?php

use Breakdance\Lib\Vendor\Twig\Environment;
use Breakdance\Lib\Vendor\Twig\Error\LoaderError;
use Breakdance\Lib\Vendor\Twig\Error\RuntimeError;
use Breakdance\Lib\Vendor\Twig\Extension\SandboxExtension;
use Breakdance\Lib\Vendor\Twig\Markup;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityError;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityNotAllowedTagError;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use Breakdance\Lib\Vendor\Twig\Source;
use Breakdance\Lib\Vendor\Twig\Template;

/* d13e4d6d06621f381c7fb70448187c74cabb3a40 */
class __TwigTemplate_40c26ed7b1149f40b8ed253e2d0c9e63 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
          ";
        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "d13e4d6d06621f381c7fb70448187c74cabb3a40", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
  width: ";
        // line 5
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 5), "width", [], "any", false, false, false, 5), "style", [], "any", false, false, false, 5);
        echo ";
  ";
        // line 6
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 6), "container", [], "any", false, false, false, 6)], 6, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .bde-basicslider__slide {
  ";
        // line 10
        echo twig_call_macro($macros["macros"], "macro_spacing_padding_all", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "slide", [], "any", false, false, false, 10), "padding", [], "any", false, false, false, 10)], 10, $context, $this->getSourceContext());
        echo "
  ";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 11), "height", [], "any", false, false, false, 11) == "viewport")) {
            // line 12
            echo "   height: 100vh;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
($context["design"] ?? null), "size", [], "any", false, false, false, 13), "height", [], "any", false, false, false, 13) == "custom")) {
            // line 14
            echo "    height: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 14), "custom_height", [], "any", false, false, false, 14), "style", [], "any", false, false, false, 14);
            echo ";
  ";
        }
        // line 16
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "slide", [], "any", false, false, false, 16), "align_children", [], "any", false, false, false, 16) == "left")) {
            // line 17
            echo "  \tjustify-content: flex-start;
  \ttext-align: left;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 19
($context["design"] ?? null), "slide", [], "any", false, false, false, 19), "align_children", [], "any", false, false, false, 19) == "center")) {
            // line 20
            echo "  \tjustify-content: center;
  \ttext-align: center;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 22
($context["design"] ?? null), "slide", [], "any", false, false, false, 22), "align_children", [], "any", false, false, false, 22) == "right")) {
            // line 23
            echo "  \tjustify-content: flex-end;
   \ttext-align: right;
  ";
        }
        // line 26
        echo "
  ";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "slide", [], "any", false, false, false, 27), "vertical_align_children", [], "any", false, false, false, 27) == "top")) {
            // line 28
            echo "    align-items: flex-start;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 29
($context["design"] ?? null), "slide", [], "any", false, false, false, 29), "vertical_align_children", [], "any", false, false, false, 29) == "middle")) {
            // line 30
            echo " \talign-items: center;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 31
($context["design"] ?? null), "slide", [], "any", false, false, false, 31), "vertical_align_children", [], "any", false, false, false, 31) == "bottom")) {
            // line 32
            echo "  \talign-items: flex-end;
  ";
        }
        // line 34
        echo "}

%%SELECTOR%% .bde-basicslider__content {
  max-width: ";
        // line 37
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "slide", [], "any", false, false, false, 37), "content_width", [], "any", false, false, false, 37), "style", [], "any", false, false, false, 37);
        echo ";
}

%%SELECTOR%% .bde-basicslider__title {
  ";
        // line 41
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 41), "title", [], "any", false, false, false, 41), ($context["globalSettings"] ?? null)], 41, $context, $this->getSourceContext());
        echo "
  margin-bottom: ";
        // line 42
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 42), "after_title", [], "any", false, false, false, 42), "style", [], "any", false, false, false, 42);
        echo ";
}

%%SELECTOR%% .bde-basicslider__text {
  ";
        // line 46
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 46), "text", [], "any", false, false, false, 46), ($context["globalSettings"] ?? null)], 46, $context, $this->getSourceContext());
        echo "
  margin-bottom: ";
        // line 47
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 47), "after_text", [], "any", false, false, false, 47), "style", [], "any", false, false, false, 47);
        echo ";
}

";
        // line 50
        echo twig_call_macro($macros["macros"], "macro_AtomV1SwiperCss", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "slider", [], "any", false, false, false, 50), "%%SELECTOR%%", ($context["globalSettings"] ?? null), ($context["isBaseBreakpoint"] ?? null)], 50, $context, $this->getSourceContext());
        echo "
";
        // line 51
        echo twig_call_macro($macros["macros"], "macro_atomV1ButtonCss", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 51), "bde-basicslider__button", "%%SELECTOR%%", ($context["breakpoint"] ?? null), ($context["globalSettings"] ?? null)], 51, $context, $this->getSourceContext());
        echo "

";
        // line 54
        echo "

    %%SELECTOR%% {
        ";
        // line 57
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 58
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 58), "wrapper", [], "any", false, false, false, 58), "background", [], "any", false, false, false, 58), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 59
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 59), "wrapper", [], "any", false, false, false, 59), "layout", [], "any", false, false, false, 59), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 60
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 60), "wrapper", [], "any", false, false, false, 60), "size", [], "any", false, false, false, 60), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 61
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 61), "wrapper", [], "any", false, false, false, 61), "typography", [], "any", false, false, false, 61),         // line 62
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 63
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 63), "wrapper", [], "any", false, false, false, 63), "spacing", [], "any", false, false, false, 63), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 64
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 64), "wrapper", [], "any", false, false, false, 64), "borders", [], "any", false, false, false, 64), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 65
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 65), "wrapper", [], "any", false, false, false, 65), "effects", [], "any", false, false, false, 65)], 57, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 69
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 70
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 70), "wrapper_hover", [], "any", false, false, false, 70), "background", [], "any", false, false, false, 70), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 71
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 71), "wrapper_hover", [], "any", false, false, false, 71), "layout", [], "any", false, false, false, 71), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 72
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 72), "wrapper_hover", [], "any", false, false, false, 72), "size", [], "any", false, false, false, 72), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 73
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 73), "wrapper_hover", [], "any", false, false, false, 73), "typography", [], "any", false, false, false, 73),         // line 74
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 75
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 75), "wrapper_hover", [], "any", false, false, false, 75), "spacing", [], "any", false, false, false, 75), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 76
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 76), "wrapper_hover", [], "any", false, false, false, 76), "borders", [], "any", false, false, false, 76), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 77
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 77), "wrapper_hover", [], "any", false, false, false, 77), "effects", [], "any", false, false, false, 77)], 69, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 81
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 81), "css", [], "any", false, false, false, 81);
        echo "


";
        // line 84
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 84), "hide", [], "any", false, false, false, 84)))) {
            // line 85
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 86
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 86), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 86), "hide", [], "any", false, false, false, 86))) {
                    // line 87
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 89
                    if (($context["isBuilder"] ?? null)) {
                        // line 90
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 93
                        echo "                        display: none;
                    ";
                    }
                    // line 95
                    echo "                }
            }
        ";
                }
                // line 98
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 100
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "d13e4d6d06621f381c7fb70448187c74cabb3a40";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 100,  228 => 98,  223 => 95,  219 => 93,  214 => 90,  212 => 89,  206 => 87,  203 => 86,  198 => 85,  196 => 84,  190 => 81,  183 => 77,  182 => 76,  181 => 75,  180 => 74,  179 => 73,  178 => 72,  177 => 71,  176 => 70,  175 => 69,  168 => 65,  167 => 64,  166 => 63,  165 => 62,  164 => 61,  163 => 60,  162 => 59,  161 => 58,  160 => 57,  155 => 54,  150 => 51,  146 => 50,  140 => 47,  136 => 46,  129 => 42,  125 => 41,  118 => 37,  113 => 34,  109 => 32,  107 => 31,  104 => 30,  102 => 29,  99 => 28,  97 => 27,  94 => 26,  89 => 23,  87 => 22,  83 => 20,  81 => 19,  77 => 17,  74 => 16,  68 => 14,  66 => 13,  63 => 12,  61 => 11,  57 => 10,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "d13e4d6d06621f381c7fb70448187c74cabb3a40", "");
    }
}
