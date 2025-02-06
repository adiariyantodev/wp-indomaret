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

/* 0be7ad23ce3321581e7a163a9ab8c9dc6f2d1de8 */
class __TwigTemplate_345fbce038c83967db6a68ea837b6ba2 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "0be7ad23ce3321581e7a163a9ab8c9dc6f2d1de8", 2)->unwrap();
        // line 3
        echo "
          <div class=\"breakdance-swiper-wrapper\" data-swiper-id=\"%%ID%%\">
    <div class=\"swiper\">
      <div class=\"swiper-wrapper\">
      ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 7), "slides", [], "any", false, false, false, 7));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "
\t    ";
            // line 9
            $context["overlay"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "background", [], "any", false, false, false, 9), "overlay", [], "any", false, false, false, 9)) ? (twig_call_macro($macros["macros"], "macro_backgroundColor", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "background", [], "any", false, false, false, 9), "overlay", [], "any", false, false, false, 9)], 9, $context, $this->getSourceContext())) : (false));
            // line 10
            echo "        ";
            $context["background"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "background", [], "any", false, false, false, 10), "color", [], "any", false, false, false, 10)) ? (twig_call_macro($macros["macros"], "macro_backgroundColor", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "background", [], "any", false, false, false, 10), "color", [], "any", false, false, false, 10)], 10, $context, $this->getSourceContext())) : (false));
            // line 11
            echo "        ";
            $context["image"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "background", [], "any", false, false, false, 11), "image", [], "any", false, false, false, 11)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "background", [], "any", false, false, false, 11), "image", [], "any", false, false, false, 11)) : (false));
            // line 12
            echo "
        <div class=\"swiper-slide\">
          <div class=\"bde-basicslider__slide\"";
            // line 14
            if (($context["background"] ?? null)) {
                echo " style=\"";
                echo ($context["background"] ?? null);
                echo "\"";
            }
            echo ">
              <div class=\"bde-basicslider__content\">
            ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 16)) {
                // line 17
                echo "              <";
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 17), "title_html_tag", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 17), "title_html_tag", [], "any", false, false, false, 17), "h3")) : ("h3"));
                echo " class=\"bde-basicslider__title\">";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 17);
                echo "</";
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 17), "title_html_tag", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 17), "title_html_tag", [], "any", false, false, false, 17), "h3")) : ("h3"));
                echo ">
            ";
            }
            // line 19
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 19)) {
                // line 20
                echo "            <div class=\"bde-basicslider__text\">
              ";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 21);
                echo "
            </div>
            ";
            }
            // line 24
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "button", [], "any", false, false, false, 24), "text", [], "any", false, false, false, 24)) {
                // line 25
                echo "                ";
                echo twig_call_macro($macros["macros"], "macro_atomV1ButtonHtml", [twig_get_attribute($this->env, $this->source, $context["item"], "button", [], "any", false, false, false, 25), "bde-basicslider__button", twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 25), (("content.content.slides[" . twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 25)) . "].button.text")], 25, $context, $this->getSourceContext());
                echo "
            ";
            }
            // line 27
            echo "            </div>

\t\t\t";
            // line 29
            if (($context["overlay"] ?? null)) {
                // line 30
                echo "\t\t\t<div class=\"bde-basicslider__overlay\" style=\"";
                echo ($context["overlay"] ?? null);
                echo "\"></div>
\t\t\t";
            }
            // line 32
            echo "\t\t\t";
            if (($context["image"] ?? null)) {
                // line 33
                echo "          ";
                echo twig_call_macro($macros["macros"], "macro_image", [($context["image"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "background", [], "any", false, false, false, 33), "size", [], "any", false, false, false, 33), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "background", [], "any", false, false, false, 33), "alt", [], "any", false, false, false, 33), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "background", [], "any", false, false, false, 33), "lazy_load", [], "any", false, false, false, 33), "bde-basicslider__image"], 33, $context, $this->getSourceContext());
                echo "
\t\t\t";
            }
            // line 35
            echo "
          </div>
        </div>
       ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
      </div>
    </div>
    ";
        // line 42
        echo twig_call_macro($macros["macros"], "macro_AtomV1SwiperPaginationAndArrowsHtml", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "slider", [], "any", false, false, false, 42)], 42, $context, $this->getSourceContext());
        echo "
</div>

         ";
    }

    public function getTemplateName()
    {
        return "0be7ad23ce3321581e7a163a9ab8c9dc6f2d1de8";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 42,  160 => 39,  143 => 35,  137 => 33,  134 => 32,  128 => 30,  126 => 29,  122 => 27,  116 => 25,  113 => 24,  107 => 21,  104 => 20,  101 => 19,  91 => 17,  89 => 16,  80 => 14,  76 => 12,  73 => 11,  70 => 10,  68 => 9,  65 => 8,  48 => 7,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "0be7ad23ce3321581e7a163a9ab8c9dc6f2d1de8", "");
    }
}
