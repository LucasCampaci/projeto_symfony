<?php

/* ::base.html.twig */
class __TwigTemplate_fe747daf4399d072a73d252e379a7908db501737cf9b2a4dea8af81731f251e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\">
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        <script>
           function search() {
            var input, filter, table, tr, td, i;
                input = document.getElementById(\"input-pesquisa\");
                filter = input.value.toUpperCase();
                table = document.getElementById(\"table-data\");
                if(table) {
                    tr = table.getElementsByTagName(\"tr\");
                    for (i = 0; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName(\"td\")[0];
                            if (td) {
                                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                                    tr[i].style.display = \"\";
                                } else {
                                    tr[i].style.display = \"none\";
                            }
                        }
                    }
                }
            }
        </script>
</head>
    <body>
        <nav class=\"navbar navbar-expand-lg navbar-dark\" style=\"background-color: #005286\">
            <span class=\"navbar-brand\" href=\"#\">SoftVision Symfony Demo</span>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#conteudoNavbarSuportado\" aria-controls=\"conteudoNavbarSuportado\" aria-expanded=\"false\" aria-label=\"Alterna navegação\">
              <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"conteudoNavbarSuportado\">
                
 
                <form class=\"form-inline my-2 my-lg-0\" style=\"position:absolute; right:1px\">
                  <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\" st>
                        <a class=\"nav-link\" href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post");
        echo "\"><span class=\"fa fa-list-ul\">&nbsp;</span>Lista de posts</a>
                    </li>
                    <li class=\"nav-item active\">
                      <a class=\"nav-link\" href=\"#\"><span class=\"fa fa-sign-out\">&nbsp;</span>Sair</a>
                    </li>
                </ul>
                <input id=\"input-pesquisa\" onkeyup=\"search()\" class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\">
              </form>
            </div>
          </nav>
        <div style=\"padding-top:5% ;padding-left: 5%; width: 70%\">
            ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 56,  113 => 55,  108 => 6,  102 => 5,  95 => 57,  92 => 56,  90 => 55,  76 => 44,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\">
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        <script>
           function search() {
            var input, filter, table, tr, td, i;
                input = document.getElementById(\"input-pesquisa\");
                filter = input.value.toUpperCase();
                table = document.getElementById(\"table-data\");
                if(table) {
                    tr = table.getElementsByTagName(\"tr\");
                    for (i = 0; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName(\"td\")[0];
                            if (td) {
                                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                                    tr[i].style.display = \"\";
                                } else {
                                    tr[i].style.display = \"none\";
                            }
                        }
                    }
                }
            }
        </script>
</head>
    <body>
        <nav class=\"navbar navbar-expand-lg navbar-dark\" style=\"background-color: #005286\">
            <span class=\"navbar-brand\" href=\"#\">SoftVision Symfony Demo</span>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#conteudoNavbarSuportado\" aria-controls=\"conteudoNavbarSuportado\" aria-expanded=\"false\" aria-label=\"Alterna navegação\">
              <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"conteudoNavbarSuportado\">
                
 
                <form class=\"form-inline my-2 my-lg-0\" style=\"position:absolute; right:1px\">
                  <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\" st>
                        <a class=\"nav-link\" href=\"{{ path('post')}}\"><span class=\"fa fa-list-ul\">&nbsp;</span>Lista de posts</a>
                    </li>
                    <li class=\"nav-item active\">
                      <a class=\"nav-link\" href=\"#\"><span class=\"fa fa-sign-out\">&nbsp;</span>Sair</a>
                    </li>
                </ul>
                <input id=\"input-pesquisa\" onkeyup=\"search()\" class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\">
              </form>
            </div>
          </nav>
        <div style=\"padding-top:5% ;padding-left: 5%; width: 70%\">
            {% block body %}{% endblock %}
            {% block javascripts %}{% endblock %}
        </div>
    </body>
</html>
", "::base.html.twig", "C:\\wamp64\\www\\projeto_symfony\\projeto_symfony\\app/Resources\\views/base.html.twig");
    }
}
