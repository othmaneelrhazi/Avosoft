<?php

/* layout.twig */
class __TwigTemplate_b6db54cf4fb00ba461d9132bacae7961 extends Twig_Template
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

    <link rel=\"stylesheet\" href=\"bootstrap/css/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"bootstrap/css/bootstrap-responsive.css\">
    <link rel=\"stylesheet\" href=\"bootstrap/css/bootstrap-notify.css\">
    <link rel=\"stylesheet\" href=\"css/default.css\">
    <script type=\"text/javascript\" src=\"js/jquery.js\"></script>
    <script type=\"text/javascript\" src=\"bootstrap/js/bootstrap.js\"></script>
    <script type=\"text/javascript\" src=\"bootstrap/js/bootstrap-dropdown.js\"></script>
    <script type=\"text/javascript\" src=\"bootstrap/js/bootstrap-transitions.js\"></script>
    <script type=\"text/javascript\" src=\"bootstrap/js/bootstrap-scrollspy.js\"></script>
    <script type=\"text/javascript\" src=\"bootstrap/js/bootstrap-modal.js\"></script>
    <script type=\"text/javascript\" src=\"bootstrap/js/bootstrap-tab.js\"></script>

</head>
<body data-spy=\"scroll\" data-target=\".navbar\">

<div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <a class=\"brand\" href=\"#\">Avosoft</a>
            <div class=\"nav-collapse collapse\">
                <p class=\"navbar-text pull-right\">

                    <b>Nous sommes le ";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo " </b>
                </p>
                <ul class=\"nav\" role=\"navigation\">
                    <li><a href=\"index\">Accueil</a> </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" role=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Prestations <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a tabindex=\"-1\" href=\"#\">Ajouter</a></li>
                            <li><a tabindex=\"-1\" href=\"#\">Modifier</a></li>
                            <li><a tabindex=\"-1\" href=\"#\">Supprimer</a></li>
                        </ul>
                    </li>
                    <li><a href=\"about\" >About</a></li>
                    <li><a href=\"info\" >Info</a></li>

                </ul>
            </div>
        </div>
    </div>
</div>


<div id=\"content\">

    ";
        // line 55
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "
</div>

<footer>
    <div class=\"pull-center\"><p>Avosoft &copy; <a href=\"http://www.formatux.be\">Formatux</a></p></div>
</footer>
<script type=\"text/javascript\" src=\"http://platform.twitter.com/widgets.js\"></script>
<script>
    

    \$(\"body\").bind(\"click\", function (e) {

        \$('.dropdown-toggle, .menu').parent(\"li\").removeClass(\"open\");

    });

    \$(\".dropdown-toggle, .menu\").click(function (e) {

        var \$li = \$(this).parent(\"li\").toggleClass('open');

        return false;

    });
</script>
</body>
</html>";
    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
        // line 56
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
        return array (  110 => 56,  107 => 55,  78 => 57,  76 => 55,  49 => 31,  18 => 2,);
    }
}
