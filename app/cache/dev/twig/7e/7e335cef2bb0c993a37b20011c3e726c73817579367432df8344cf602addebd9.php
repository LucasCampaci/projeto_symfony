<?php

/* AppBundle:Post:show.html.twig */
class __TwigTemplate_bbd2071e7a8c7bbd7fa78d9a30c404865fccac9c6bb797e5e16fbf54eb1e59d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Post:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"font-weight-bold\" style=\"font-size: 16pt\">
        ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titulo", array()), "html", null, true);
        echo "
    </div>
    <div style=\"padding: 1%\">
        <div style=\"background-color: #DCDCDC; padding: 1%\">
            <span class=\"font-weight-bold\">Sumario: </span>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sumario", array()), "html", null, true);
        echo "
        </div> 
    </div>
            ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "conteudo", array()), "html", null, true);
        echo "
        
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Post:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  41 => 9,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body -%}
    <div class=\"font-weight-bold\" style=\"font-size: 16pt\">
        {{ entity.titulo }}
    </div>
    <div style=\"padding: 1%\">
        <div style=\"background-color: #DCDCDC; padding: 1%\">
            <span class=\"font-weight-bold\">Sumario: </span>{{ entity.sumario }}
        </div> 
    </div>
            {{ entity.conteudo }}
        
{% endblock %}
", "AppBundle:Post:show.html.twig", "C:\\wamp64\\www\\projeto_symfony\\projeto_symfony\\src\\AppBundle/Resources/views/Post/show.html.twig");
    }
}
