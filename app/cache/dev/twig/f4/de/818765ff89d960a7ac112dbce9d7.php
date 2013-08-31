<?php

/* WalvaHafBundle:Image:admin.html.twig */
class __TwigTemplate_f4de818765ff89d960a7ac112dbce9d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::admin.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'bundle_body' => array($this, 'block_bundle_body'),
            'left_menu' => array($this, 'block_left_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "<h1>Image</h1>
";
    }

    // line 12
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 13
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
<li><a href=\"#\">Image</a> <span class=\"divider\">/</span></li>

";
    }

    // line 18
    public function block_bundle_body($context, array $blocks = array())
    {
        // line 19
        echo "Attention, ce bloc est a définir

";
    }

    // line 23
    public function block_left_menu($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "WalvaHafBundle:Image:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  50 => 12,  45 => 8,  35 => 4,  121 => 58,  114 => 53,  102 => 47,  96 => 44,  86 => 37,  82 => 36,  74 => 31,  70 => 23,  64 => 19,  61 => 18,  57 => 27,  42 => 7,  39 => 13,  32 => 3,  29 => 4,);
    }
}
