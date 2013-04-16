<?php

/* client/autocomplete.twig */
class __TwigTemplate_1e45319aa99b380e7c09e620ac7065ee extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <script type=\"text/javascript\">
        \$(function () {
            var projects = [
                ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")));
        foreach ($context['_seq'] as $context["_key"] => $context["clients"]) {
            // line 9
            echo "

                {
                    value: '";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")), "idClient"), "html", null, true);
            echo "',
                    label: '";
            // line 13
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
        // line 16
        echo "            ];

            \$('#client_autocomplete').autocomplete({
                minLength:0,
                source:projects,
                select:function (event, ui) {
                    \$('#client_autocomplete').val(ui.item.label);
                    \$('#client_idclient').val(ui.item.value);
                    return false;
                }
            })

        });
    </script>

    <form action=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client.clientAutocomplete", array("chemin" => (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")))), "html", null, true);
        echo "\" method=\"post\">
        <legend>Modifier Client</legend>
        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

        <input class=\"btn btn-success btn-small\"  type=\"submit\" name=\"submit\">
    </form>





";
    }

    public function getTemplateName()
    {
        return "client/autocomplete.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 33,  78 => 31,  61 => 16,  50 => 13,  46 => 12,  41 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
