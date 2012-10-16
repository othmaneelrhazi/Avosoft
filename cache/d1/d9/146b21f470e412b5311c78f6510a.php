<?php

/* client/adresse.twig */
class __TwigTemplate_d1d9146b21f470e412b5311c78f6510a extends Twig_Template
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
    <form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client.adresse"), "html", null, true);
        echo "\" method=\"post\">
        <legend>Adresse de ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "tNom", array(), "array"), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "tPrenom", array(), "array"), "html", null, true);
        echo " </legend>
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "

        <input class=\"btn btn-success btn-small\"  type=\"submit\" name=\"submit\">
    </form>

";
    }

    public function getTemplateName()
    {
        return "client/adresse.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  36 => 6,  32 => 5,  29 => 4,  26 => 3,);
    }
}
