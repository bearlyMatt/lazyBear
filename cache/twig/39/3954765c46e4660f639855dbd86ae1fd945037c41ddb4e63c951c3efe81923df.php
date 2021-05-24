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

/* modular/about.html.twig */
class __TwigTemplate_7225ebe99139a6b582118bdd3e3118685110c2c6dc469cde90c69b52968e1acf extends \Twig\Template
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
        echo "<section id=\"about\">
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            ";
        // line 5
        echo ($context["content"] ?? null);
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <ul class=\"timeline\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "abouts", []));
        foreach ($context['_seq'] as $context["_key"] => $context["about"]) {
            // line 12
            echo "                    <li ";
            if (($this->getAttribute($context["about"], "align", []) == "inverted")) {
                echo "class=\"timeline-inverted\"";
            }
            echo ">
                        <div class=\"timeline-image\">
                            ";
            // line 14
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["about"], "img", []), [], "array")) {
                // line 15
                echo "                            <img class=\"img-circle img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["about"], "img", []), [], "array"), "url", []), "html", null, true);
                echo "\" alt=\"\">
                            ";
            } else {
                // line 17
                echo "                            <h4>";
                echo $this->getAttribute($context["about"], "alttext", []);
                echo "</h4>
                            ";
            }
            // line 19
            echo "                        </div>
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h4>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["about"], "heading", []), "html", null, true);
            echo "</h4>
                                <h4 class=\"subheading\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["about"], "subheading", []), "html", null, true);
            echo "</h4>
                            </div>
                            <div class=\"timeline-body\">
                                <p class=\"text-muted\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["about"], "body", []), "html", null, true);
            echo "</p>
                            </div>
                        </div>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['about'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </ul>
        </div>
    </div>
</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 31,  86 => 26,  80 => 23,  76 => 22,  71 => 19,  65 => 17,  59 => 15,  57 => 14,  49 => 12,  45 => 11,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"about\">
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            {{ content|raw }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <ul class=\"timeline\">
                {% for about in page.header.abouts %}
                    <li {% if about.align == 'inverted' %}class=\"timeline-inverted\"{% endif %}>
                        <div class=\"timeline-image\">
                            {% if page.media[about.img] %}
                            <img class=\"img-circle img-responsive\" src=\"{{ page.media[about.img].url }}\" alt=\"\">
                            {% else %}
                            <h4>{{ about.alttext|raw }}</h4>
                            {% endif %}
                        </div>
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h4>{{ about.heading }}</h4>
                                <h4 class=\"subheading\">{{ about.subheading }}</h4>
                            </div>
                            <div class=\"timeline-body\">
                                <p class=\"text-muted\">{{ about.body }}</p>
                            </div>
                        </div>
                    </li>
                {% endfor %}
            </ul>
        </div>
    </div>
</div>
</section>
", "modular/about.html.twig", "/var/www/lazyBear/user/themes/agency/templates/modular/about.html.twig");
    }
}
