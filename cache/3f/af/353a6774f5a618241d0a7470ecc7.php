<?php

/* client/modifier.twig */
class __TwigTemplate_3faf353a6774f5a618241d0a7470ecc7 extends Twig_Template
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
    </ul>

    <form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client.client"), "html", null, true);
        echo "\" method=\"post\">
        <legend>Modifier Client</legend>
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "

        <input class=\"btn btn-success btn-small\"  type=\"submit\" name=\"submit\">
    </form>

";
    }

    public function getTemplateName()
    {
        return "client/modifier.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  34 => 8,  29 => 5,  26 => 4,);
    }
}
