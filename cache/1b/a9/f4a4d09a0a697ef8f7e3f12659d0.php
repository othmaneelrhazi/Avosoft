<?php

/* dossier/remplacer.twig */
class __TwigTemplate_1ba9f4a4d09a0a697ef8f7e3f12659d0 extends Twig_Template
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
        \$(function () {
            var projects = [
                ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
        foreach ($context['_seq'] as $context["_key"] => $context["clients"]) {
            // line 12
            echo "

                {
                    value:'";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "clients"), "idClient"), "html", null, true);
            echo "',
                    label:'";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "clients"), "tNom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "clients"), "tPrenom"), "html", null, true);
            echo "'
                },
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clients'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 19
        echo "            ];

            \$('#dossier_autocomplete').autocomplete({
                minLength:0,
                source:projects,
                select:function (event, ui) {
                    \$('#dossier_autocomplete').val(ui.item.label);
                    \$('#dossier_client').val(ui.item.value);
                    return false;
                }
            })

        });
    </script>

    <script type=\"text/javascript\">
        \$(function () {
            var projects = [
                ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dossier"));
        foreach ($context['_seq'] as $context["_key"] => $context["dossiers"]) {
            // line 38
            echo "

                {
                    value:'";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "dossiers"), "idDossier"), "html", null, true);
            echo "',
                    label:'";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "dossiers"), "tDossier"), "html", null, true);
            echo "'
                },
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dossiers'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 45
        echo "            ];

            \$('#dossier_autocomplete').autocomplete({
                minLength:0,
                source:projects,
                select:function (event, ui) {
                    \$('#dossier_autocomplete').val(ui.item.label);
                    \$('#dossier_idDossier').val(ui.item.value);
                    return false;
                }
            })

        });
    </script>


    <legend>Modifier Dossier</legend>


    <div id=\"coordonee\" class=\"ui-tabs-panel\">

        <form action=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dossier.choisir"), "html", null, true);
        echo "\" method=\"post\">


            ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

            <input class=\"btn btn-success btn-small\" type=\"submit\" name=\"submit\">
        </form>
    </div>











";
    }

    public function getTemplateName()
    {
        return "dossier/remplacer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 69,  126 => 66,  103 => 45,  94 => 42,  90 => 41,  85 => 38,  81 => 37,  61 => 19,  50 => 16,  46 => 15,  41 => 12,  37 => 11,  29 => 5,  26 => 4,);
    }
}
