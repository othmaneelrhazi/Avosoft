<?php

/* dossier/ajouter.twig */
class __TwigTemplate_8ef732d87c448890afddea7552301fc9 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")));
        foreach ($context['_seq'] as $context["_key"] => $context["clients"]) {
            // line 12
            echo "

                {
                    value:'";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")), "idClient"), "html", null, true);
            echo "',
                    label:'";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")), "tNom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")), "tPrenom"), "html", null, true);
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


    <legend>";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["legend"]) ? $context["legend"] : $this->getContext($context, "legend")), "html", null, true);
        echo "</legend>


    <div id=\"coordonee\" class=\"ui-tabs-panel\">

        <form action=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "html", null, true);
        echo "\" method=\"post\">


            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            <input class=\"btn btn-success btn-small\" type=\"submit\" name=\"submit\">
        </form>
    </div>











";
    }

    public function getTemplateName()
    {
        return "dossier/ajouter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 43,  89 => 40,  81 => 35,  63 => 19,  52 => 16,  48 => 15,  43 => 12,  39 => 11,  31 => 5,  28 => 4,);
    }
}
