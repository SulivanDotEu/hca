<?php

/* WalvaHafBundle:Article:edit.html.twig */
class __TwigTemplate_bc866a5b232b12900afbe5879206a801 extends Twig_Template
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
<li class=\"active\">Article edit</li>
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "<h1>Article edit</h1>

    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

<div class=\"pull-right\">
";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
</div>
";
    }

    // line 23
    public function block_container_header_right($context, array $blocks = array())
    {
        // line 24
        echo "

    <a class=\"btn \" href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("article");
        echo "\">
        <i class=\"icon-chevron-left\"></i> 
        Back to the list
    </a>

";
    }

    public function getTemplateName()
    {
        return "WalvaHafBundle:Article:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 26,  63 => 24,  60 => 23,  53 => 19,  47 => 16,  43 => 14,  40 => 13,  33 => 6,  30 => 5,);
    }
}
