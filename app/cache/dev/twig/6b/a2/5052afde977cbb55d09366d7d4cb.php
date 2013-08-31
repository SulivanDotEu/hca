<?php

/* WalvaHafBundle:Categorie:public\menu.html.twig */
class __TwigTemplate_6ba25052afde977cbb55d09366d7d4cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 4
            echo "    <li id=\"menu-item-69\" class=\"menu-item menu-item-type-taxonomy menu-item-object-category menu-item-69\">
        <a href=\"http://physiciansfolia.com/?cat=11\">
            ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomFr"), "html", null, true);
            echo "
            </a>
        </li>



";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "WalvaHafBundle:Categorie:public\\menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  27 => 4,  23 => 3,  19 => 1,  354 => 187,  351 => 186,  345 => 7,  250 => 203,  245 => 201,  231 => 189,  229 => 186,  194 => 154,  140 => 103,  46 => 12,  38 => 10,  34 => 9,  29 => 7,  21 => 1,  64 => 19,  61 => 18,  53 => 13,  50 => 12,  45 => 8,  42 => 11,  35 => 4,  32 => 3,  169 => 69,  166 => 68,  154 => 57,  151 => 56,  142 => 52,  137 => 50,  132 => 48,  124 => 47,  121 => 46,  116 => 44,  111 => 42,  103 => 40,  98 => 39,  96 => 38,  89 => 34,  83 => 30,  79 => 28,  70 => 23,  65 => 25,  63 => 24,  56 => 20,  52 => 19,  43 => 14,  40 => 13,  33 => 6,  30 => 5,);
    }
}
