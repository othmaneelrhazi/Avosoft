<?php

/* layout.twig */
class __TwigTemplate_8fc662e8631fea92c1225f907de9046a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE HTML>

<html lang=\"fr-FR\">
<head>
    <meta charset=\"UTF-8\">
    <title>Avosoft</title>

    <link rel=\"stylesheet\" href=\"bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"bootstrap/css/bootstrap-responsive.min.css\">
    <script type=\"text/javascript\" src=\"public/jquery/jquery.js\"></script>
    <script type=\"text/javascript\" src=\"bootstrap/js/bootstrap.min.js\"></script>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
</head>
<body data-spy=\"scroll\" data-target=\".navbar\">

<div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <a class=\"brand\" href=\"#\">Avosoft</a>
            <div class=\"nav-collapse collapse\">
                <p class=\"navbar-text pull-right\">

                    <b>Nous sommes le ";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo " </b>
                </p>
                <ul class=\"nav\" role=\"navigation\">
                    <li><?php echo Html::anchor('/', 'Accueil', array('id' => 'link_home')) ?></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" role=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Participant <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a tabindex=\"-1\" href=\"<?php echo Uri::create('participant/ajouter'); ?>\">Ajouter</a></li>
                            <li><a tabindex=\"-1\" href=\"<?php echo Uri::create('gesta/choisir/modifier'); ?>\">Modifier</a></li>
                            <li><a tabindex=\"-1\" href=\"<?php echo Uri::create('gesta/choisir/supprimer'); ?>\">Supprimer</a></li>
                        </ul>
                    </li>
                    ";
        // line 40
        echo "                    ";
        // line 41
        echo "                    ";
        // line 42
        echo "                    ";
        // line 43
        echo "                    ";
        // line 44
        echo "                    ";
        // line 45
        echo "                </ul>
            </div>
        </div>
    </div>
</div>


<div id=\"content\">

    ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "
</div>


<link rel=\"stylesheet\" href=\"css/style.css\">
</body>
</html>";
    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        // line 55
        echo "    ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 55,  93 => 54,  83 => 56,  81 => 54,  70 => 45,  68 => 44,  66 => 43,  64 => 42,  62 => 41,  60 => 40,  45 => 27,  18 => 2,);
    }
}
