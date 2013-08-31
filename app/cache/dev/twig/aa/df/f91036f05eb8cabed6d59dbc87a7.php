<?php

/* WalvaHafBundle:Article:public/show.html.twig */
class __TwigTemplate_aadff91036f05eb8cabed6d59dbc87a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WalvaHafBundle:Article:public/layout.html.twig");

        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'main_content' => array($this, 'block_main_content'),
            'container_header_right' => array($this, 'block_container_header_right'),
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
<li class=\"active\" style=\"font-size: 30px;\">Article list</li>
";
    }

    // line 13
    public function block_main_content($context, array $blocks = array())
    {
        // line 14
        echo "<h1 style=\"font-size: 30px;\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
        echo "</h1>
<div id=\"cat-11\" class=\"post-91 type-post status-publish format-standard hentry category-gastrologie ui-tabs-hide entry ui-tabs-panel ui-widget-content ui-corner-bottom\"
     aria-labelledby=\"ui-id-1\" role=\"tabpanel\" aria-expanded=\"true\" aria-hidden=\"false\" 
     style=\"display: block;\">

    <span class=\"date published \" title=\"\">";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateCreation"), "d/m/Y", "Europe/Paris"), "html", null, true);
        echo "</span>  par <span class=\"author vcard\">
        <span class=\"fn\"><a href=\"http://physiciansfolia.com/?author=1\" class=\"fn n\" title=\"admin\" rel=\"author\"> ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "auteur"), "html", null, true);
        echo "</a>
        </span>
    </span>
    <br>
            ";
        // line 24
        if ((!(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tag")))) {
            // line 25
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tag"));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 26
                echo "    <span class=\"label label-success\">";
                echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "html", null, true);
                echo "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
            ";
        }
        // line 30
        echo "
</div>
<hr/>

";
        // line 34
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contenu");
        echo "

<hr/>

 ";
        // line 38
        if ((!(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reference")))) {
            // line 39
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reference"));
            foreach ($context['_seq'] as $context["_key"] => $context["ref"]) {
                // line 40
                echo "<h3 style=\"font-size: 16px\">Référence : <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ref"]) ? $context["ref"] : $this->getContext($context, "ref")), "url"), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ref"]) ? $context["ref"] : $this->getContext($context, "ref")), "titre"), "html", null, true);
                echo "</a></h3>
<dl class=\"dl-horizontal\">
    ";
                // line 42
                if ((!(null === $this->getAttribute((isset($context["ref"]) ? $context["ref"] : $this->getContext($context, "ref")), "contenu")))) {
                    echo " 
  <dt>Contenu</dt>
  <dd>";
                    // line 44
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ref"]) ? $context["ref"] : $this->getContext($context, "ref")), "contenu"), "html", null, true);
                    echo "    </dd>
  ";
                }
                // line 46
                echo "  <dt>Auteurs</dt>
  <dd>";
                // line 47
                if ((!(null === $this->getAttribute((isset($context["ref"]) ? $context["ref"] : $this->getContext($context, "ref")), "auteur")))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ref"]) ? $context["ref"] : $this->getContext($context, "ref")), "auteur"), "html", null, true);
                    echo "    ";
                }
                echo "</dd>
  ";
                // line 48
                if ((!(null === $this->getAttribute((isset($context["ref"]) ? $context["ref"] : $this->getContext($context, "ref")), "doi")))) {
                    echo " 
  <dt>DOI</dt>
  <dd>";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ref"]) ? $context["ref"] : $this->getContext($context, "ref")), "doi"), "html", null, true);
                    echo " </dd>
   ";
                }
                // line 52
                echo "</dl>

<hr/>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ref'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "            ";
        }
        // line 57
        echo "







";
    }

    // line 68
    public function block_container_header_right($context, array $blocks = array())
    {
        // line 69
        echo "<a class=\"btn btn-primary\" href=\"";
        echo $this->env->getExtension('routing')->getPath("article_new");
        echo "\">
    <i class=\"icon-plus icon-white\"></i> 
    Create a new entry
</a>
";
    }

    public function getTemplateName()
    {
        return "WalvaHafBundle:Article:public/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 69,  166 => 68,  154 => 57,  151 => 56,  142 => 52,  137 => 50,  132 => 48,  124 => 47,  121 => 46,  116 => 44,  111 => 42,  103 => 40,  98 => 39,  96 => 38,  89 => 34,  83 => 30,  79 => 28,  70 => 26,  65 => 25,  63 => 24,  56 => 20,  52 => 19,  43 => 14,  40 => 13,  33 => 6,  30 => 5,);
    }
}
