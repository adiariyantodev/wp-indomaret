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

/* fdfa2c41e0ce09c5958467a650ddb1ad1ca3591e */
class __TwigTemplate_5217ab9a5393fc565656a88a1e70bf2a extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "fdfa2c41e0ce09c5958467a650ddb1ad1ca3591e", 2)->unwrap();
        // line 3
        echo "
          <ul>
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 5), "list", [], "any", false, false, false, 5));
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
            // line 6
            echo "
    ";
            // line 7
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 7), "svgCode", [], "any", false, false, false, 7))) {
                // line 8
                echo "      ";
                $context["icon"] = "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d=\"M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z\"/></svg>";
                // line 9
                echo "    ";
            } else {
                // line 10
                echo "      ";
                $context["icon"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 10), "svgCode", [], "any", false, false, false, 10);
                // line 11
                echo "    ";
            }
            // line 12
            echo "
    <li>
      ";
            // line 14
            if (twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 14)) {
                // line 15
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_linkStart", [twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 15), "bde-icon-list__item-wrapper"], 15, $context, $this->getSourceContext());
                echo "
      ";
            } else {
                // line 17
                echo "        <div class='bde-icon-list__item-wrapper'>
      ";
            }
            // line 19
            echo "
      <span class='bde-icon-list__icon'>
        ";
            // line 21
            echo ($context["icon"] ?? null);
            echo "
      </span>
      <span class='bde-icon-list__text' ";
            // line 23
            echo Breakdance\PluginsAPI\content_editable_php((("content.content.list[" . twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 23)) . "].text"));
            echo ">
      ";
            // line 24
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", true, true, false, 24)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 24), "Lorem Ipsum")) : ("Lorem Ipsum"));
            echo "
      </span>
      ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 26)) {
                // line 27
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_linkEnd", [], 27, $context, $this->getSourceContext());
                echo "
      ";
            } else {
                // line 29
                echo "        </div>
      ";
            }
            // line 31
            echo "
    </li>

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
        // line 35
        echo "</ul>

         ";
    }

    public function getTemplateName()
    {
        return "fdfa2c41e0ce09c5958467a650ddb1ad1ca3591e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 35,  126 => 31,  122 => 29,  116 => 27,  114 => 26,  109 => 24,  105 => 23,  100 => 21,  96 => 19,  92 => 17,  86 => 15,  84 => 14,  80 => 12,  77 => 11,  74 => 10,  71 => 9,  68 => 8,  66 => 7,  63 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fdfa2c41e0ce09c5958467a650ddb1ad1ca3591e", "");
    }
}
