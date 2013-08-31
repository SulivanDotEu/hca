<?php

/* WalvaHafBundle:Article:public\menu.html.twig */
class __TwigTemplate_bdaa93fdd39e5710dd2445546ad3d825 extends Twig_Template
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
        echo "<h4>Nos dernières publications</h4>




<ul>




";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 12
            echo "    <li class=\"sousMenuDroite\">
        <i class=\"icon-chevron-right\"></i> <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_public_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
            echo "\">
                ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
            echo "</a>
    </li>



";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
</ul>";
    }

    public function getTemplateName()
    {
        return "WalvaHafBundle:Article:public\\menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 14,  31 => 11,  27 => 4,  23 => 3,  19 => 1,  354 => 187,  351 => 186,  345 => 7,  250 => 203,  245 => 201,  231 => 189,  229 => 186,  194 => 154,  140 => 103,  46 => 12,  38 => 13,  34 => 9,  29 => 7,  21 => 1,  64 => 19,  61 => 18,  53 => 13,  50 => 12,  45 => 8,  42 => 11,  35 => 12,  32 => 3,  169 => 69,  166 => 68,  154 => 57,  151 => 56,  142 => 52,  137 => 50,  132 => 48,  124 => 47,  121 => 46,  116 => 44,  111 => 42,  103 => 40,  98 => 39,  96 => 38,  89 => 34,  83 => 30,  79 => 28,  70 => 23,  65 => 25,  63 => 24,  56 => 20,  52 => 19,  43 => 14,  40 => 13,  33 => 6,  30 => 5,);
    }
}
