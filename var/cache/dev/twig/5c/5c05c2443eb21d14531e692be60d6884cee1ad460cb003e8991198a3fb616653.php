<?php

/* links.html.twig */
class __TwigTemplate_b5e6ad8937f86b13d062d18762a94c27a71f5272d587e2aa701c14f98a0063b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "links.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68f20b95738df46002b361060adbbf0d08d97956dec5518a716100dd4b547b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68f20b95738df46002b361060adbbf0d08d97956dec5518a716100dd4b547b07->enter($__internal_68f20b95738df46002b361060adbbf0d08d97956dec5518a716100dd4b547b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68f20b95738df46002b361060adbbf0d08d97956dec5518a716100dd4b547b07->leave($__internal_68f20b95738df46002b361060adbbf0d08d97956dec5518a716100dd4b547b07_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_4470bc235e18b01517277ae28449bd5d260fbc826eae0a8dd3f7f66cc53ab66f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4470bc235e18b01517277ae28449bd5d260fbc826eae0a8dd3f7f66cc53ab66f->enter($__internal_4470bc235e18b01517277ae28449bd5d260fbc826eae0a8dd3f7f66cc53ab66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links.html.twig"));

        // line 3
        echo "    <ul>

        <h1> <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("links");
        echo "\" id =\"refresh\" title=\"Par défaut\"> <span class=\"glyphicon glyphicon-refresh\"></span>  </a> </h1>


        </ul>
    <center>
        <table id =\"tableLinkTag\">

            <tr>
                <th> <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_link_alph_desc");
        echo "\" title =\"De Z à A \"id=\"nomLink\"> Nom du lien   </th>
                <th> Description </th>
                <th> Tag(s) </th>
                <th><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_date_desc");
        echo "\" title =\"Du + récent au + vieux \"id =\"dateLink\"> Date (Y-M-D)</a> </th>

                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : $this->getContext($context, "links")));
        foreach ($context['_seq'] as $context["_key"] => $context["news_link"]) {
            // line 19
            echo "                </tr>
                <tr>
                    <td id=\"link\"> <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["news_link"], "link", array()), "html", null, true);
            echo "\" target=\"_blank\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["news_link"], "link", array()), "html", null, true);
            echo " </a> </td>
                    <td> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["news_link"], "description", array()), "html", null, true);
            echo "

                    <td>
                        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["news_link"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 26
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "nom", array()), "html", null, true);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                    </td>

                    <td> ";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["news_link"], "date", array()), "Y-m-d"), "html", null, true);
            echo " </td>
                    ";
            // line 31
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 32
                echo "                        <td> <h3><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updates", array("id" => $this->getAttribute($context["news_link"], "id", array()))), "html", null, true);
                echo "\" onclick=\"return(confirm('Voulez vous modifiez ?'));\" > <span class=\"glyphicon glyphicon-upload\"></span>  </a> </h3> </td>
                        <td> <h3> <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deletes", array("id" => $this->getAttribute($context["news_link"], "id", array()))), "html", null, true);
                echo "\" onclick=\"return(confirm('Etes-vous sûr de vouloir supprimer cette entrée ?'));\"> <span class=\"glyphicon glyphicon-erase\"></span> </a> </h3> </td>
                    ";
            }
            // line 35
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news_link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
        </table>

    </center>
";
        
        $__internal_4470bc235e18b01517277ae28449bd5d260fbc826eae0a8dd3f7f66cc53ab66f->leave($__internal_4470bc235e18b01517277ae28449bd5d260fbc826eae0a8dd3f7f66cc53ab66f_prof);

    }

    public function getTemplateName()
    {
        return "links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 37,  119 => 35,  114 => 33,  109 => 32,  107 => 31,  103 => 30,  99 => 28,  90 => 26,  86 => 25,  80 => 22,  74 => 21,  70 => 19,  66 => 18,  61 => 16,  55 => 13,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}
{% block container %}
    <ul>

        <h1> <a href=\"{{path('links')}}\" id =\"refresh\" title=\"Par défaut\"> <span class=\"glyphicon glyphicon-refresh\"></span>  </a> </h1>


        </ul>
    <center>
        <table id =\"tableLinkTag\">

            <tr>
                <th> <a href=\"{{path('order_link_alph_desc')}}\" title =\"De Z à A \"id=\"nomLink\"> Nom du lien   </th>
                <th> Description </th>
                <th> Tag(s) </th>
                <th><a href=\"{{path('order_date_desc')}}\" title =\"Du + récent au + vieux \"id =\"dateLink\"> Date (Y-M-D)</a> </th>

                {% for news_link in links %}
                </tr>
                <tr>
                    <td id=\"link\"> <a href=\"{{news_link.link}}\" target=\"_blank\"> {{news_link.link}} </a> </td>
                    <td> {{ news_link.description}}

                    <td>
                        {% for tag in news_link.tags %}
                            {{tag.nom }}
                        {%endfor %}
                    </td>

                    <td> {{news_link.date|date('Y-m-d')}} </td>
                    {% if is_granted('ROLE_SUPER_ADMIN') %}
                        <td> <h3><a href=\"{{ path('updates',{'id': news_link.id}) }}\" onclick=\"return(confirm('Voulez vous modifiez ?'));\" > <span class=\"glyphicon glyphicon-upload\"></span>  </a> </h3> </td>
                        <td> <h3> <a href=\"{{ path('deletes',{'id': news_link.id}) }}\" onclick=\"return(confirm('Etes-vous sûr de vouloir supprimer cette entrée ?'));\"> <span class=\"glyphicon glyphicon-erase\"></span> </a> </h3> </td>
                    {% endif %}
                </tr>
            {% endfor %}

        </table>

    </center>
{% endblock %}
", "links.html.twig", "C:\\Users\\KazeK\\BTS\\SIO22\\Symfony\\PhpProject1\\app\\Resources\\views\\links.html.twig");
    }
}
