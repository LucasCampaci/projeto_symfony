<?php

/* AppBundle:Post:edit.html.twig */
class __TwigTemplate_3d55317254a5aa229ad65532d583d419ed45decaa40afa26873617c800f6a129 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Post:edit.html.twig", 1);
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
        echo "<h1>Formulário</h1>
    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "
    <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post");
        echo "\" ><span class=\"fa fa-arrow-circle-left\"></span>
            Voltar para a lista de posts
    </a>
    <script>
        var titulo = document.getElementById(\"appbundle_post_titulo\");
        var sumario = document.getElementById(\"appbundle_post_sumario\");
        var conteudo = document.getElementById(\"appbundle_post_conteudo\");
        var btnSubmit = document.getElementById(\"appbundle_post_submit\");

        document.addEventListener(\"DOMContentLoaded\", function () {
            titulo.addEventListener(\"keyup\", validar);
            sumario.addEventListener(\"keyup\", validar);
            conteudo.addEventListener(\"keyup\", validar);
            validar();
        });

        function validar() {
            if(titulo.value.length > 0 && sumario.value.length > 0 && conteudo.value.length > 0) {
                btnSubmit.disabled = false;
            } else {
                btnSubmit.disabled = true;
            }
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Post:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
    <h1>Formulário</h1>
    {{ form(edit_form) }}
    <a href=\"{{ path('post') }}\" ><span class=\"fa fa-arrow-circle-left\"></span>
            Voltar para a lista de posts
    </a>
    <script>
        var titulo = document.getElementById(\"appbundle_post_titulo\");
        var sumario = document.getElementById(\"appbundle_post_sumario\");
        var conteudo = document.getElementById(\"appbundle_post_conteudo\");
        var btnSubmit = document.getElementById(\"appbundle_post_submit\");

        document.addEventListener(\"DOMContentLoaded\", function () {
            titulo.addEventListener(\"keyup\", validar);
            sumario.addEventListener(\"keyup\", validar);
            conteudo.addEventListener(\"keyup\", validar);
            validar();
        });

        function validar() {
            if(titulo.value.length > 0 && sumario.value.length > 0 && conteudo.value.length > 0) {
                btnSubmit.disabled = false;
            } else {
                btnSubmit.disabled = true;
            }
        }
    </script>
{% endblock %}
", "AppBundle:Post:edit.html.twig", "C:\\wamp64\\www\\projeto_symfony\\projeto_symfony\\src\\AppBundle/Resources/views/Post/edit.html.twig");
    }
}
