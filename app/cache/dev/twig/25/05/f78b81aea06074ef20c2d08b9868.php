<?php

/* WalvaHafBundle:Article:show.html.twig */
class __TwigTemplate_2505f78b81aea06074ef20c2d08b9868 extends Twig_Template
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

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 5
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
<li class=\"active\">Show</li>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "<h1>Article</h1>

<table class=\"table table-striped\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Langue</th>
            <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "langue"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Titre</th>
            <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Resume</th>
            <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "Resume"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Contenu</th>
            <td>";
        // line 32
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contenu");
        echo "</td>
        </tr>
        <tr>
            <th>Auteur</th>
            <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "auteur"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Tags</th>
            <td>
";
        // line 41
        if ((!(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tag")))) {
            // line 42
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tag"));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 43
                echo "                    <span class=\"label label-success\">";
                echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "html", null, true);
                echo "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "
            ";
        }
        // line 47
        echo "                </td>
            </tr>
            <tr>
                <th>Image</th>
                <td>
                        ";
        // line 52
        if ((!(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image")))) {
            // line 53
            echo "                        <div style=\"max-width: 500px;\">

                            <img src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image"), "webPath")), "html", null, true);
            echo "\"
                                 alt=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image"), "alt"), "html", null, true);
            echo "\" />

                        </div>
        ";
        }
        // line 60
        echo "                    </td>
                </tr>
            </tbody>
        </table>

";
    }

    // line 67
    public function block_container_header_right($context, array $blocks = array())
    {
        // line 68
        echo "
        <div class=\"btn-group\">
            <a class=\"btn \" href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("article");
        echo "\">
                <i class=\"icon-chevron-left\"></i> 
                Back to the list
            </a>
            <a class=\"btn \" href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
                <i class=\"icon-pencil\"></i> Edit</a>
        </a>

    </div>
";
    }

    public function getTemplateName()
    {
        return "WalvaHafBundle:Article:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 74,  154 => 70,  150 => 68,  147 => 67,  138 => 60,  131 => 56,  127 => 55,  123 => 53,  121 => 52,  114 => 47,  110 => 45,  101 => 43,  96 => 42,  94 => 41,  86 => 36,  79 => 32,  72 => 28,  65 => 24,  58 => 20,  51 => 16,  43 => 10,  40 => 9,  33 => 5,  30 => 4,);
    }
}
