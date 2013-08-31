<?php

/* WalvaHafBundle:Article:index.html.twig */
class __TwigTemplate_f69f6915eea8b29c33eb579eca41ca2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WalvaHafBundle:Article:admin.html.twig");

        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'body' => array($this, 'block_body'),
            'container_header_right' => array($this, 'block_container_header_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WalvaHafBundle:Article:admin.html.twig";
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
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "<h1>Article list</h1>

<table class=\"table table-striped\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Categorie</th>
            <th>Langue</th>
            <th>Titre</th>
            <th>Auteur</th>
            <th>creation</th>
            <th>modification</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 31
            echo "            <tr>
                <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 33
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categorie")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categorie"), "html", null, true);
            }
            echo "</td>

                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "langue"), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "auteur"), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateCreation")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateCreation"), "d/m/Y H:i"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 39
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateModification")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateModification"), "d/m/Y H:i"), "html", null, true);
            }
            echo "</td>
                <td>
                    <div class=\"btn-group\">
                        <a class=\"btn\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo " \">
                            <i class=\"icon-eye-open\"></i> Show</a>
                        <a class=\"btn\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">
                            <i class=\"icon-pencil\"></i> Edit</a>
                    </div>


                </td>
            </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </tbody>
    </table>


";
    }

    // line 59
    public function block_container_header_right($context, array $blocks = array())
    {
        // line 60
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo $this->env->getExtension('routing')->getPath("article_new");
        echo "\">
        <i class=\"icon-plus icon-white\"></i> 
        Create a new entry
    </a>
";
    }

    public function getTemplateName()
    {
        return "WalvaHafBundle:Article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 60,  134 => 59,  126 => 52,  112 => 44,  107 => 42,  99 => 39,  93 => 38,  89 => 37,  85 => 36,  81 => 35,  74 => 33,  68 => 32,  65 => 31,  61 => 30,  43 => 14,  40 => 13,  33 => 6,  30 => 5,);
    }
}
