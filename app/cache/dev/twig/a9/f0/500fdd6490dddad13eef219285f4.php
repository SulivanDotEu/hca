<?php

/* WalvaHafBundle:Article:public/layout.html.twig */
class __TwigTemplate_a9f0500fdd6490dddad13eef219285f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout1.html.twig");

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
        return "::layout1.html.twig";
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
        echo "<h1>Article</h1>
";
    }

    // line 12
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 13
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
<li><a href=\"#\">Article</a> <span class=\"divider\">/</span></li>

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
        return "WalvaHafBundle:Article:public/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 19,  61 => 18,  53 => 13,  50 => 12,  45 => 8,  42 => 7,  35 => 4,  32 => 3,  169 => 69,  166 => 68,  154 => 57,  151 => 56,  142 => 52,  137 => 50,  132 => 48,  124 => 47,  121 => 46,  116 => 44,  111 => 42,  103 => 40,  98 => 39,  96 => 38,  89 => 34,  83 => 30,  79 => 28,  70 => 23,  65 => 25,  63 => 24,  56 => 20,  52 => 19,  43 => 14,  40 => 13,  33 => 6,  30 => 5,);
    }
}
