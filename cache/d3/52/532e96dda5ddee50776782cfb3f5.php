<?php

/* prestation/ajouter.twig */
class __TwigTemplate_d352532e96dda5ddee50776782cfb3f5 extends Twig_Template
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
        echo "<script>
    \$.datepicker.setDefaults({
        dateFormat: 'dd-mm-yy',
        selectOtherMonths: true,
        changeMonth: true,
        changeYear: true,
        dayNamesMin: ['Di', 'Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa'],
        firstDay: 1
    });
    // Fonction datepicker pour la date de naissance
    \$(function(){
        \$('#livre_tDate').datepicker({
            yearRange: '-100:+10'
        }).attr(\"readonly\",\"readonly\");
    });
</script>

<script type=\"text/javascript\">
    \$(function () {
        var projects = [
            ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")));
        foreach ($context['_seq'] as $context["_key"] => $context["dossiers"]) {
            // line 26
            echo "

            {
                value: '";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dossiers"]) ? $context["dossiers"] : $this->getContext($context, "dossiers")), "idDossier"), "html", null, true);
            echo "',
                label: '";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dossiers"]) ? $context["dossiers"] : $this->getContext($context, "dossiers")), "tDossier"), "html", null, true);
            echo "'
            },
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dossiers'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 33
        echo "        ];

        \$('#dossier_autocomplete').autocomplete({
            minLength:0,
            source:projects,
            select:function (event, ui) {
                \$('#dossier_autocomplete').val(ui.item.label);
                \$('#dossier_dossier').val(ui.item.value);
                return false;
            }
        })

    });
</script>

<legend>";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["legend"]) ? $context["legend"] : $this->getContext($context, "legend")), "html", null, true);
        echo "</legend>


<div id=\"coordonee\" class=\"ui-tabs-panel\">

    <form action=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "html", null, true);
        echo "\" method=\"post\">


        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "



        <input class=\"btn btn-success btn-small\" type=\"submit\" name=\"submit\">
    </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "prestation/ajouter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 56,  100 => 53,  92 => 48,  75 => 33,  66 => 30,  62 => 29,  57 => 26,  53 => 25,  31 => 5,  28 => 4,);
    }
}
