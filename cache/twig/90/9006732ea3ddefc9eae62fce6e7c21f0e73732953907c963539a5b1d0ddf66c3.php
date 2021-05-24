<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modular/header.html.twig */
class __TwigTemplate_ce3e32008341e61f0bced299cd6149b5a6ae60a91c7cdc339759486d0913260b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<header>
    <div class=\"container\">
        <div class=\"intro-text\">
            ";
        // line 4
        echo ($context["content"] ?? null);
        echo "
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "buttons", []));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 6
            echo "                <a class=\"page-scroll btn btn-xl\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "text", []), "html", null, true);
            echo "</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </div>
    </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "modular/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  43 => 6,  39 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header>
    <div class=\"container\">
        <div class=\"intro-text\">
            {{ content|raw }}
            {% for button in page.header.buttons %}
                <a class=\"page-scroll btn btn-xl\" href=\"{{ button.url }}\">{{ button.text }}</a>
            {% endfor %}
        </div>
    </div>
</header>
", "modular/header.html.twig", "/var/www/lazyBear/user/themes/agency/templates/modular/header.html.twig");
    }
}
