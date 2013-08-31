<?php

/* WalvaHafBundle:Article:admin.html.twig */
class __TwigTemplate_92bcb6e08b5d6f72ac43a73facb8bcbe extends Twig_Template
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
        return "WalvaHafBundle:Article:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 23,  64 => 19,  61 => 18,  53 => 13,  50 => 12,  45 => 8,  42 => 7,  35 => 4,  32 => 3,  161 => 74,  154 => 70,  150 => 68,  147 => 67,  138 => 60,  131 => 56,  127 => 55,  123 => 53,  121 => 52,  114 => 47,  110 => 45,  101 => 43,  96 => 42,  94 => 41,  86 => 36,  79 => 32,  72 => 28,  65 => 24,  58 => 20,  51 => 16,  43 => 10,  40 => 9,  33 => 5,  30 => 4,);
    }
}
