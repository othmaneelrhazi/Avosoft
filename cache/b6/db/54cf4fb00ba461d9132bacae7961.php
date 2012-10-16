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

    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "bootstrap/css/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "bootstrap/css/bootstrap-responsive.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "bootstrap/css/bootstrap-notify.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "css/default.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "css/jquery.css\">

    <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "js/jquery-1.7.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "js/jquery-ui-1.8.17.custom.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "bootstrap/js/bootstrap.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "bootstrap/js/bootstrap-dropdown.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "bootstrap/js/bootstrap-transition.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "bootstrap/js/bootstrap-scrollspy.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "bootstrap/js/bootstrap-modal.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "bootstrap/js/bootstrap-tab.js\"></script>



</head>
<body data-spy=\"scroll\" data-target=\".navbar\">

<div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <a class=\"brand\" href=\"#\">Avosoft</a>
            <div class=\"nav-collapse collapse\">
                <p class=\"navbar-text pull-right\">

                    <b>Nous sommes le ";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo " </b>
                </p>
                <ul class=\"nav\" role=\"navigation\">
                    <li><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index.index"), "html", null, true);
        echo "\">Accueil</a> </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" role=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Prestations <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a tabindex=\"-1\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prestation.ajouter"), "html", null, true);
        echo "\">Ajouter</a></li>
                            <li><a tabindex=\"-1\" href=\"#\">Modifier</a></li>
                            <li><a tabindex=\"-1\" href=\"#\">Supprimer</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" role=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Client <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a tabindex=\"-1\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client.ajouter"), "html", null, true);
        echo "\">Ajouter</a></li>
                            <li><a tabindex=\"-1\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "url_generator"), "generate", array(0 => "client.clientAutocomplete", 1 => array("chemin" => 1)), "method"), "html", null, true);
        echo "\">Modifier</a></li>
                            <li><a tabindex=\"-1\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "url_generator"), "generate", array(0 => "client.clientAutocomplete", 1 => array("chemin" => 2)), "method"), "html", null, true);
        echo "\">Supprimer</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" role=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Dossier <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a tabindex=\"-1\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dossier.ajouter"), "html", null, true);
        echo "\">Ajouter</a></li>
                            ";
        // line 61
        echo "                            <li><a tabindex=\"-1\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dossier.delete"), "html", null, true);
        echo "\">Supprimer</a></li>
                        </ul>
                    </li>
                    <li><a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index.about"), "html", null, true);
        echo "\" >About</a></li>
                    <li><a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index.info"), "html", null, true);
        echo "\" >Info</a></li>

                </ul>
            </div>
        </div>
    </div>
</div>
";
        // line 78
        echo $this->getAttribute($this, "display_alert", array(0 => "error", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "getFlash", array(0 => "error"), "method")), "method");
        echo "
";
        // line 79
        echo $this->getAttribute($this, "display_alert", array(0 => "success", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "success"), "method")), "method");
        echo "


<div id=\"content\">

    ";
        // line 84
        $this->displayBlock('content', $context, $blocks);
        // line 86
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

    // line 84
    public function block_content($context, array $blocks = array())
    {
        // line 85
        echo "    ";
    }

    // line 72
    public function getdisplay_alert($_class = null, $message = null)
    {
        $context = $this->env->mergeGlobals(array(
            "_class" => $_class,
            "message" => $message,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 73
            echo "    ";
            if ($this->getContext($context, "message")) {
                // line 74
                echo "        <div class='alert alert-";
                echo twig_escape_filter($this->env, ((array_key_exists("_class", $context)) ? (_twig_default_filter($this->getContext($context, "_class"), "error")) : ("error")), "html", null, true);
                echo "'><a class='close' data-dismiss='alert'>x</a>";
                echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
                echo "</div>
    ";
            }
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
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
        return array (  224 => 74,  221 => 73,  209 => 72,  205 => 85,  202 => 84,  173 => 86,  171 => 84,  163 => 79,  159 => 78,  149 => 65,  145 => 64,  138 => 61,  134 => 59,  125 => 53,  121 => 52,  117 => 51,  106 => 43,  99 => 39,  93 => 36,  76 => 22,  72 => 21,  68 => 20,  64 => 19,  60 => 18,  56 => 17,  52 => 16,  48 => 15,  43 => 13,  39 => 12,  35 => 11,  31 => 10,  27 => 9,  18 => 2,);
    }
}
