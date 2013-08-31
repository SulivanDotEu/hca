<?php

/* ::admin.html.twig */
class __TwigTemplate_a45b0e9ef3897028dec3e2faff82f995 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'container' => array($this, 'block_container'),
            'container_header' => array($this, 'block_container_header'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'container_header_right' => array($this, 'block_container_header_right'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    </head>

    <body>
        <div class=\"navbar navbar-static-top\">
            <div class=\"navbar-inner\">
                <div class=\"container-fluid\">
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>
                    ";
        // line 27
        $this->env->loadTemplate("nav_admin.html.twig")->display($context);
        // line 28
        echo "
                </div>
            </div>
        </div>
        <div id=\"header\" class=\"\">
            <div class=\"container-fluid\">
";
        // line 34
        $this->displayBlock('header', $context, $blocks);
        // line 38
        echo "
                </div>
            </div>
            <div class=\"container-fluid\" id=\"mainContainer\">
                <div class=\"row-fluid\">
                    ";
        // line 43
        $this->displayBlock('container', $context, $blocks);
        // line 79
        echo "                        </div>

                        <hr>

                        <footer>
                            <p>Health And Food &AMP; Benjamin Ellis © 2013 and beyond.</p>
                        </footer>
                    </div>

  ";
        // line 88
        $this->displayBlock('javascripts', $context, $blocks);
        // line 111
        echo "
                    </body>
                </html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Admin";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/supportkot.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 34
    public function block_header($context, array $blocks = array())
    {
        // line 35
        echo "                    <h1>Titre de la page</h1>
                    <p>Ce projet est propulsé par Symfony2, et construit grâce au tutoriel du siteduzero.</p>
                ";
    }

    // line 43
    public function block_container($context, array $blocks = array())
    {
        // line 44
        $this->displayBlock('container_header', $context, $blocks);
        // line 75
        echo "          ";
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "                            </div>
                        ";
    }

    // line 44
    public function block_container_header($context, array $blocks = array())
    {
        // line 45
        echo "                        <div id=\"content\" class=\"span12\">
                            <div class=\"row-fluid\">
                                <div class=\"span8\">
                                    <ul class=\"breadcrumb\">

                        ";
        // line 50
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 62
        echo "                                    </ul>
                                </div>
                                <div class=\"span4\">
                                    <div class=\"pull-right\">
                                        ";
        // line 66
        $this->displayBlock('container_header_right', $context, $blocks);
        // line 68
        echo "                                        </div>
                                    </div>  
                                </div>



                                        ";
    }

    // line 50
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 51
        echo "
                                        <li>
                                            <a href=\"#\">Health And Food</a>
                                            <span class=\"divider\">/</span>
                                        </li>
                                        <li>
                                            <a href=\"#\">Administration</a>
                                            <span class=\"divider\">/</span>
                                        </li>

                            ";
    }

    // line 66
    public function block_container_header_right($context, array $blocks = array())
    {
        // line 67
        echo "                                    ";
    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
        // line 76
        echo "          ";
    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        // line 89
        echo "    ";
        // line 90
        echo "                    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
                    <!-- <script>
         tinymce.init({
     selector: \"textarea\",
     plugins: [
         \" autolink lists link image charmap anchor\",
         \"searchreplace visualblocks code fullscreen\",
         \"insertdatetime media table contextmenu paste\"
     ],
     toolbar: \"insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image\"
 });
                         </script> -->
                    <script type=\"text/javascript\">
                        window.onload = function() {
         CKEDITOR.replace( 'walva_hafbundle_article[contenu]' );
     };
                        </script>
  ";
    }

    public function getTemplateName()
    {
        return "::admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 93,  214 => 92,  210 => 91,  207 => 90,  205 => 89,  202 => 88,  198 => 76,  195 => 75,  191 => 67,  188 => 66,  174 => 51,  171 => 50,  159 => 66,  153 => 62,  151 => 50,  144 => 45,  141 => 44,  136 => 77,  133 => 75,  128 => 43,  122 => 35,  119 => 34,  113 => 14,  109 => 13,  106 => 12,  103 => 11,  97 => 9,  91 => 111,  89 => 88,  78 => 79,  76 => 43,  69 => 38,  67 => 34,  59 => 28,  57 => 27,  44 => 16,  37 => 9,  28 => 2,  70 => 23,  64 => 19,  61 => 18,  53 => 13,  50 => 12,  45 => 8,  42 => 11,  35 => 4,  32 => 3,  161 => 68,  154 => 70,  150 => 68,  147 => 67,  138 => 60,  131 => 44,  127 => 55,  123 => 53,  121 => 52,  114 => 47,  110 => 45,  101 => 43,  96 => 42,  94 => 41,  86 => 36,  79 => 32,  72 => 28,  65 => 24,  58 => 20,  51 => 16,  43 => 10,  40 => 9,  33 => 5,  30 => 4,);
    }
}
