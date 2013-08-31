<?php

/* nav_admin.html.twig */
class __TwigTemplate_c4353d7c623bccca5230a33f50340c49 extends Twig_Template
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
        echo "<div class=\"nav-collapse\">
    <ul class=\"nav\">
        <li class=\"\"><a href=\"#\"><i class=\"icon-home\"></i> Accueil</a></li>

        <ul class=\"nav\">
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">

                    <i class=\"icon-wrench\">
                    </i> Tools 
                    <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\">

                    <li class=\"dropdown-submenu\">
                        <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("image");
        echo "\"><i class=\"icon-picture\"></i> Image</a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("image");
        echo "\" class=\"disabled\" ><i class=\"icon-list\"></i> List</a></li>
                            <li class=\"\"><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("image_new");
        echo "\" class=\"disabled\"><i class=\"icon-plus\"></i> Article</a></li>
                           
                        </ul>
                    </li>
                     <li class=\"\"><a href=\"#\" class=\"disabled\"><i class=\"icon-th-large\"></i> Dashboard</a></li>


                </ul>
            </li>


        </ul>




        <!-- Article -->

        <ul class=\"nav\">
            <li class=\"dropdown\">

                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-file\"></i> Article <b class=\"caret\"></b>

                </a>
                <ul class=\"dropdown-menu\">
                    <li class=\"\"><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("article");
        echo "\"><i class=\"icon-list\"></i> List</a></li>
                    <li class=\"\"><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("article_new");
        echo "\"><i class=\"icon-plus\"></i> Create</a></li>
                    <li class=\"divider\"></li>
                    <li class=\"dropdown-submenu\">
                        <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("tag");
        echo "\"><i class=\"icon-tags\"></i> Tag</a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"\"><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("tag");
        echo "\"><i class=\"icon-list\"></i> List</a></li>
                            <li class=\"\"><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("tag_new");
        echo "\"><i class=\"icon-plus\"></i> Create</a></li>

                        </ul>
                    </li>


                    <li class=\"dropdown-submenu\">
                        <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("reference");
        echo "\"><i class=\"icon-bookmark\"></i> Reference</a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"\"><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("reference");
        echo "\"><i class=\"icon-list\"></i> List</a></li>
                            <li class=\"\"><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("reference_new");
        echo "\"><i class=\"icon-plus\"></i> Create</a></li>

                        </ul>
                    </li>

                    <li class=\"dropdown-submenu\">
                        <a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("auteur");
        echo "\"><i class=\"icon-user\"></i> Auteur</a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"\"><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("auteur");
        echo "\"><i class=\"icon-list\"></i> List</a></li>
                            <li class=\"\"><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("auteur_new");
        echo "\"><i class=\"icon-plus\"></i> Create</a></li>

                        </ul>
                    </li>
                    <li class=\"dropdown-submenu\">
                        <a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("categorie");
        echo "\"><i class=\"icon-folder-open\"></i> Categorie</a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"\"><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("categorie");
        echo "\"><i class=\"icon-list\"></i> List</a></li>
                            <li class=\"\"><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("categorie_new");
        echo "\"><i class=\"icon-plus\"></i> Create</a></li>

                        </ul>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Livre -->

        <ul class=\"nav\">
            <li class=\"dropdown\">

                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-book\"></i> Livre <b class=\"caret\"></b>

                </a>
                <ul class=\"dropdown-menu\">
                    <li class=\"\"><a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("livre");
        echo "\"><i class=\"icon-list\"></i> List</a></li>
                    <li class=\"\"><a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("livre_new");
        echo "\"><i class=\"icon-plus\"></i> Create</a></li>

                </ul>
            </li>
        </ul>

        <!-- EVENEMENT -->
        <ul class=\"nav\">
            <li class=\"dropdown\">

                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-calendar\"></i> Evenement <b class=\"caret\"></b>

                </a>
                <ul class=\"dropdown-menu\">
                    <li class=\"\"><a href=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("livre");
        echo "\"><i class=\"icon-list\"></i> List</a></li>
                    <li class=\"\"><a href=\"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("livre_new");
        echo "\"><i class=\"icon-plus\"></i> Create</a></li>

                </ul>
            </li>
        </ul>












    </ul>

</div><!--/.nav-collapse -->";
    }

    public function getTemplateName()
    {
        return "nav_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 112,  167 => 96,  143 => 78,  130 => 71,  126 => 70,  112 => 62,  108 => 61,  93 => 52,  84 => 49,  74 => 45,  46 => 20,  19 => 1,  218 => 93,  214 => 92,  210 => 91,  207 => 90,  205 => 89,  202 => 88,  198 => 76,  195 => 75,  191 => 67,  188 => 111,  174 => 51,  171 => 97,  159 => 66,  153 => 62,  151 => 50,  144 => 45,  141 => 44,  136 => 77,  133 => 75,  128 => 43,  122 => 35,  119 => 34,  113 => 14,  109 => 13,  106 => 12,  103 => 59,  97 => 9,  91 => 111,  89 => 51,  78 => 46,  76 => 43,  69 => 38,  67 => 34,  59 => 28,  57 => 27,  44 => 16,  37 => 17,  28 => 2,  70 => 23,  64 => 19,  61 => 18,  53 => 13,  50 => 12,  45 => 8,  42 => 19,  35 => 4,  32 => 3,  161 => 68,  154 => 70,  150 => 68,  147 => 79,  138 => 76,  131 => 44,  127 => 55,  123 => 53,  121 => 68,  114 => 47,  110 => 45,  101 => 43,  96 => 42,  94 => 41,  86 => 36,  79 => 32,  72 => 28,  65 => 24,  58 => 20,  51 => 16,  43 => 10,  40 => 9,  33 => 5,  30 => 4,);
    }
}
