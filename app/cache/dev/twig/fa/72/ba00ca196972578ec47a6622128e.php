<?php

/* WalvaHafBundle:Article:public/index.html.twig */
class __TwigTemplate_fa72ba00ca196972578ec47a6622128e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WalvaHafBundle:Article:public/layout.html.twig");

        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'main_content' => array($this, 'block_main_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WalvaHafBundle:Article:public/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 6
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
<li class=\"active\">Article list</li>
";
    }

    // line 13
    public function block_main_content($context, array $blocks = array())
    {
        // line 14
        echo "<h1>Nos derniers articles et nouvelles</h1>
<hr/>

";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "

<div class=\"entry-content\">

    <div id=\"cat-11\" class=\"post-91 type-post status-publish format-standard hentry category-gastrologie ui-tabs-hide entry ui-tabs-panel ui-widget-content ui-corner-bottom\"
         aria-labelledby=\"ui-id-1\"
         role=\"tabpanel\"
         aria-expanded=\"true\"
         aria-hidden=\"false\" 
         style=\"display: block;\">
        ";
            // line 28
            if ((!(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image")))) {
                // line 29
                echo "        <div  class=\"alignleft\" style=\"max-width: 200px; margin-right: 20px\"/>
        <img src=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image"), "webPath")), "html", null, true);
                echo "\"
             alt=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image"), "alt"), "html", null, true);
                echo "\" />

    </div>
        ";
            }
            // line 35
            echo "
    <h2><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_public_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
            echo "\">
                ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
            echo "</a>
            </h2>
            <p class=\"byline \">
                <span class=\"date published \" title=\"\">";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateCreation"), "d/m/Y", "Europe/Paris"), "html", null, true);
            echo "</span>  par <span class=\"author vcard\">
                    <span class=\"fn\"><a href=\"http://physiciansfolia.com/?author=1\" class=\"fn n\" title=\"admin\" rel=\"author\"> ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "auteur"), "html", null, true);
            echo "</a>
                    </span>
                </span>
                <br>
            ";
            // line 45
            if ((!(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tag")))) {
                // line 46
                echo "            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tag"));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 47
                    echo "                <span class=\"label label-success\">";
                    echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "html", null, true);
                    echo "</span>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "
            ";
            }
            // line 51
            echo "            </p>

            <p>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "Resume"), "html", null, true);
            echo "
                <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_public_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"more-link\">[En savoir plus...]</a></p></div>

    </div>
    <hr/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "

<ul class=\"pager\">
  <li class=\"previous ";
        // line 62
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == 1)) {
            echo " disabled ";
        }
        echo "\">
      ";
        // line 63
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == 1)) {
        } else {
            // line 65
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_public_list", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1))), "html", null, true);
            echo "\">&larr; Précédent</a>
";
        }
        // line 67
        echo "  </li>
  
  <li class=\"next ";
        // line 69
        if ((!(isset($context["next"]) ? $context["next"] : $this->getContext($context, "next")))) {
            echo "disabled ";
        }
        echo "\">
      ";
        // line 70
        if ((isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))) {
            // line 71
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_public_list", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1))), "html", null, true);
            echo "\">Suivant &rarr;</a>
    ";
        } else {
            // line 73
            echo "    
    ";
        }
        // line 75
        echo "  </li>
</ul>




";
    }

    public function getTemplateName()
    {
        return "WalvaHafBundle:Article:public/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 75,  182 => 73,  176 => 71,  174 => 70,  168 => 69,  164 => 67,  158 => 65,  155 => 63,  149 => 62,  144 => 59,  133 => 54,  129 => 53,  125 => 51,  121 => 49,  112 => 47,  107 => 46,  105 => 45,  98 => 41,  94 => 40,  88 => 37,  82 => 36,  79 => 35,  72 => 31,  68 => 30,  65 => 29,  63 => 28,  51 => 18,  47 => 17,  42 => 14,  39 => 13,  32 => 6,  29 => 5,);
    }
}
