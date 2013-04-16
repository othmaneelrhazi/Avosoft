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
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "css/data.css\">


    <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "js/jquery-1.7.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "js/jquery-ui-1.8.17.custom.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "bootstrap/js/bootstrap.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "bootstrap/js/bootstrap-dropdown.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "bootstrap/js/bootstrap-transition.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "bootstrap/js/bootstrap-scrollspy.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "bootstrap/js/bootstrap-modal.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "bootstrap/js/bootstrap-tab.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "js/jquery.dataTables.js\"></script>



</head>
<body data-spy=\"scroll\" data-target=\".navbar\">

<div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <a class=\"brand\" href=\"#\">Avosoft</a>
            <div class=\"nav-collapse collapse\">
                <p class=\"navbar-text pull-right\">

                    <b>Nous sommes le ";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo " </b>
                </p>
                <ul class=\"nav\" role=\"navigation\">
                    <li><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index.index"), "html", null, true);
        echo "\">Accueil</a> </li>
                    <li><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prestation.index"), "html", null, true);
        echo "\">Prestation</a> </li>

                    <li class=\"dropdown\">
                        <a href=\"#\" role=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Client <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a tabindex=\"-1\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client.ajouter"), "html", null, true);
        echo "\">Ajouter</a></li>
                            <li><a tabindex=\"-1\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url_generator"), "generate", array(0 => "client.clientAutocomplete", 1 => array("chemin" => 1)), "method"), "html", null, true);
        echo "\">Modifier</a></li>
                            <li><a tabindex=\"-1\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url_generator"), "generate", array(0 => "client.clientAutocomplete", 1 => array("chemin" => 2)), "method"), "html", null, true);
        echo "\">Supprimer</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" role=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Dossier <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a tabindex=\"-1\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dossier.ajouter"), "html", null, true);
        echo "\">Ajouter</a></li>
                            ";
        // line 58
        echo "                            <li><a tabindex=\"-1\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dossier.delete"), "html", null, true);
        echo "\">Supprimer</a></li>
                        </ul>
                    </li>
                    <li><a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index.about"), "html", null, true);
        echo "\" >About</a></li>
                    <li><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index.info"), "html", null, true);
        echo "\" >Info</a></li>

                </ul>
            </div>
        </div>
    </div>
</div>
";
        // line 75
        echo $this->getAttribute($this, "display_alert", array(0 => "error", 1 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "error"), "method")), "method");
        echo "
";
        // line 76
        echo $this->getAttribute($this, "display_alert", array(0 => "success", 1 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "set", array(0 => "success", 1 => "success"), "method")), "method");
        echo "


<div id=\"content\">

    ";
        // line 81
        $this->displayBlock('content', $context, $blocks);
        // line 83
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

    // line 81
    public function block_content($context, array $blocks = array())
    {
        // line 82
        echo "    ";
    }

    // line 69
    public function getdisplay_alert($__class = null, $_message = null)
    {
        $context = $this->env->mergeGlobals(array(
            "_class" => $__class,
            "message" => $_message,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 70
            echo "    ";
            if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
                // line 71
                echo "        <div class='alert alert-";
                echo twig_escape_filter($this->env, ((array_key_exists("_class", $context)) ? (_twig_default_filter((isset($context["_class"]) ? $context["_class"] : $this->getContext($context, "_class")), "error")) : ("error")), "html", null, true);
                echo "'><a class='close' data-dismiss='alert'>x</a>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</div>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
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
        return array (  229 => 71,  226 => 70,  214 => 69,  210 => 82,  207 => 81,  178 => 83,  176 => 81,  168 => 76,  164 => 75,  154 => 62,  150 => 61,  143 => 58,  139 => 56,  130 => 50,  126 => 49,  122 => 48,  114 => 43,  110 => 42,  104 => 39,  87 => 25,  83 => 24,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  55 => 17,  49 => 14,  45 => 13,  41 => 12,  37 => 11,  33 => 10,  29 => 9,  20 => 2,  31 => 4,  28 => 3,);
    }
}
