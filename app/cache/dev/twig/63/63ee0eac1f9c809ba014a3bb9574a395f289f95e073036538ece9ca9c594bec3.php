<?php

/* AppBundle:Post:index.html.twig */
class __TwigTemplate_d746fef62589b1485a5b07353191216f23c3e7b4eb84cf1977723cab0af91380 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Post:index.html.twig", 1);
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
        echo "<div style=\"display: inline;\">
        <span  class=\"h1\">Lista de Posts</span>
            <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_new");
        echo "\" class=\"btn btn-info\" style=\"padding: 1%; float:right\">
                <span class=\"fa fa-plus\" style=\"padding-right: 3%\">&nbsp;</span>Criar um novo post
            </a><br/>
    </div><br/><br/>
    <table class=\"records_list table table-striped table-hover\" id=\"table-data\">
        <thead>
            <tr>
                <th>Título</th>
                <th><span class=\"fa fa-calendar-o\">&nbsp;</span>Publicado em</th>
                <th colspan=\"3\"><span class=\"fa fa-wrench\">&nbsp;</span>Ações</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "            <tr>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titulo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["entity"], "dataPublicacao", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dataPublicacao", array()), "M d, Y, H:i A"), "html", null, true);
            }
            echo "</td>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><span class=\"fa fa-eye\">&nbsp;</span>Exibir</a></td>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\"><span class=\"fa fa-edit\">&nbsp;</span>Editar</a></td>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\"><span class=\"fa fa-edit\">&nbsp;</span>Excluir</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </tbody>
    </table>
    ";
    }

    public function getTemplateName()
    {
        return "AppBundle:Post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 28,  76 => 25,  72 => 24,  68 => 23,  62 => 22,  58 => 21,  55 => 20,  51 => 19,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
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
    <div style=\"display: inline;\">
        <span  class=\"h1\">Lista de Posts</span>
            <a href=\"{{ path('post_new') }}\" class=\"btn btn-info\" style=\"padding: 1%; float:right\">
                <span class=\"fa fa-plus\" style=\"padding-right: 3%\">&nbsp;</span>Criar um novo post
            </a><br/>
    </div><br/><br/>
    <table class=\"records_list table table-striped table-hover\" id=\"table-data\">
        <thead>
            <tr>
                <th>Título</th>
                <th><span class=\"fa fa-calendar-o\">&nbsp;</span>Publicado em</th>
                <th colspan=\"3\"><span class=\"fa fa-wrench\">&nbsp;</span>Ações</th>
            </tr>
        </thead>
        <tbody>
        {% for entity in entities %}
            <tr>
                <td>{{ entity.titulo }}</td>
                <td>{% if entity.dataPublicacao %}{{ entity.dataPublicacao|date('M d, Y, H:i A') }}{% endif %}</td>
                <td><a href=\"{{ path('post_show', { 'id': entity.id }) }}\" class=\"btn btn-primary\"><span class=\"fa fa-eye\">&nbsp;</span>Exibir</a></td>
                <td><a href=\"{{ path('post_edit', { 'id': entity.id }) }}\" class=\"btn btn-success\"><span class=\"fa fa-edit\">&nbsp;</span>Editar</a></td>
                <td><a href=\"{{ path('delete', { 'id': entity.id }) }}\" class=\"btn btn-danger\"><span class=\"fa fa-edit\">&nbsp;</span>Excluir</a></td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    {% endblock %}
", "AppBundle:Post:index.html.twig", "C:\\wamp64\\www\\projeto_symfony\\projeto_symfony\\src\\AppBundle/Resources/views/Post/index.html.twig");
    }
}
