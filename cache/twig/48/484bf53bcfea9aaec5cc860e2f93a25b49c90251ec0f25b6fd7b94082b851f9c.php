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

/* modular/services.html.twig */
class __TwigTemplate_d19c649e307fcc9b5777b6a7cc0c727f4af62c1014f32de5fb063f630a0cde09 extends \Twig\Template
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
        echo "<section id=\"services\">
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            ";
        // line 5
        echo ($context["content"] ?? null);
        echo "
        </div>
    </div>
    <div class=\"row text-center\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "services", []));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 10
            echo "            <div class=\"col-md-4\">
                ";
            // line 11
            if ($this->getAttribute($context["service"], "icon", [])) {
                // line 12
                echo "                    <span class=\"fa-stack fa-4x\">
                        <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                        <i class=\"fa fa-";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "icon", []), "html", null, true);
                echo " fa-stack-1x fa-inverse\"></i>
                    </span>
                ";
            }
            // line 17
            echo "                ";
            if ($this->getAttribute($context["service"], "header", [])) {
                // line 18
                echo "                    <h4 class=\"service-heading\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "header", []), "html", null, true);
                echo "</h4>
                ";
            }
            // line 20
            echo "                ";
            if ($this->getAttribute($context["service"], "text", [])) {
                // line 21
                echo "                    <p class=\"text-muted\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "text", []), "html", null, true);
                echo "</p>
                ";
            }
            // line 23
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 25,  80 => 23,  74 => 21,  71 => 20,  65 => 18,  62 => 17,  56 => 14,  52 => 12,  50 => 11,  47 => 10,  43 => 9,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"services\">
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            {{ content|raw }}
        </div>
    </div>
    <div class=\"row text-center\">
        {% for service in page.header.services %}
            <div class=\"col-md-4\">
                {% if service.icon %}
                    <span class=\"fa-stack fa-4x\">
                        <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                        <i class=\"fa fa-{{ service.icon }} fa-stack-1x fa-inverse\"></i>
                    </span>
                {% endif %}
                {% if service.header %}
                    <h4 class=\"service-heading\">{{ service.header }}</h4>
                {% endif %}
                {% if service.text %}
                    <p class=\"text-muted\">{{ service.text }}</p>
                {% endif %}
            </div>
        {% endfor %}
    </div>
</div>
</section>
", "modular/services.html.twig", "/var/www/lazyBear/user/themes/agency/templates/modular/services.html.twig");
    }
}
