<?php

/* client/ajouter.twig */
class __TwigTemplate_c702fe34033d6762bc07e9d9d5baff39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <script type=\"text/javascript\">

        \$(document).ready(function () {
            \$(\"#onglet\").tabs({selected:0});
        });


    </script>

    <div class=\"ui-widget\">
        <legend>";
        // line 16
        echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
        echo "</legend>

        <div id=\"onglet\">
            <ul class=\"ui-tabs-nav\">
                <li class=\"ui-tabs-nav-item\"><a href=\"#coordonee\"><span>Coordon&eacute;e</span></a></li>
                <li class=\"ui-tabs-nav-item\"><a href=\"#adresse\"><span>Adresse</span></a></li>
            </ul>

            <div id=\"coordonee\" class=\"ui-tabs-panel\">

                <form action=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getContext($context, "route"), "html", null, true);
        echo "\" method=\"post\">


                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

                    <input class=\"btn btn-success btn-small\" type=\"submit\" name=\"submit\">
                </form>
            </div>

            <div id=\"adresse\" class=\"ui-tabs-panel\">
                <form action=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getContext($context, "routeAdresse"), "html", null, true);
        echo "\" method=\"post\">


                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "formAdresse"), 'rest');
        echo "

                    <input class=\"btn btn-success btn-small\" type=\"submit\" name=\"submit\">
                </form>
            </div>


        </div>


    </div>
    </div>








";
    }

    public function getTemplateName()
    {
        return "client/ajouter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 39,  71 => 36,  61 => 29,  55 => 26,  42 => 16,  29 => 5,  26 => 4,);
    }
}
