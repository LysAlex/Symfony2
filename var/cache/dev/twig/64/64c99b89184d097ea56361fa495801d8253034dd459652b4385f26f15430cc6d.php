<?php

/* tags.html.twig */
class __TwigTemplate_4804449ff03eaa63f99c9a10c80f2310b5cb500b589187ee04371f1eee584490 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "tags.html.twig", 1);
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
        $__internal_78a3e5403f13c3c2a4acba7549320c472925690b6e1ede081407093ed12ca206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78a3e5403f13c3c2a4acba7549320c472925690b6e1ede081407093ed12ca206->enter($__internal_78a3e5403f13c3c2a4acba7549320c472925690b6e1ede081407093ed12ca206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78a3e5403f13c3c2a4acba7549320c472925690b6e1ede081407093ed12ca206->leave($__internal_78a3e5403f13c3c2a4acba7549320c472925690b6e1ede081407093ed12ca206_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_b49253982b2d5ee75a5fc7beab8d6fcea86efde30524039ea301b65ef39223ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b49253982b2d5ee75a5fc7beab8d6fcea86efde30524039ea301b65ef39223ae->enter($__internal_b49253982b2d5ee75a5fc7beab8d6fcea86efde30524039ea301b65ef39223ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tags.html.twig"));

        // line 3
        echo "    <center>
        <ul>
        <li><a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tags");
        echo "\">Par défault</a></li>
        <li><a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_tag_alph_desc");
        echo "\">Z-A</a></li>
        </ul>
    <table id =\"tableLinkTag\"> 
        
        <tr>
        <th> Nom du Tag </th>
        </tr>
       
</tr>
";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["news_tag"]) {
            // line 16
            echo "
    <tr>

        <td>  ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["news_tag"], "nom", array()), "html", null, true);
            echo "                 </td>

        ";
            // line 21
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 22
                echo "

            <td> <h4> <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update", array("id" => $this->getAttribute($context["news_tag"], "id", array()))), "html", null, true);
                echo "\" onclick=\"return(confirm('Voulez vous modifier ?'));\"> <span class=\"glyphicon glyphicon-upload\"></span> </a> </h4>  </td>

            <td> <h4><a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => $this->getAttribute($context["news_tag"], "id", array()))), "html", null, true);
                echo "\" onclick=\"return(confirm('Etes-vous sûr de vouloir supprimer cette entrée ?'));\" > <span class=\"glyphicon glyphicon-erase\"></span> </a>  </h4> </td>
        ";
            }
            // line 28
            echo "

    </tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news_tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
</table>
    </center>


";
        
        $__internal_b49253982b2d5ee75a5fc7beab8d6fcea86efde30524039ea301b65ef39223ae->leave($__internal_b49253982b2d5ee75a5fc7beab8d6fcea86efde30524039ea301b65ef39223ae_prof);

    }

    public function getTemplateName()
    {
        return "tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 33,  90 => 28,  85 => 26,  80 => 24,  76 => 22,  74 => 21,  69 => 19,  64 => 16,  60 => 15,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
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
    <center>
        <ul>
        <li><a href=\"{{path('tags')}}\">Par défault</a></li>
        <li><a href=\"{{path('order_tag_alph_desc')}}\">Z-A</a></li>
        </ul>
    <table id =\"tableLinkTag\"> 
        
        <tr>
        <th> Nom du Tag </th>
        </tr>
       
</tr>
{% for news_tag in tags %}

    <tr>

        <td>  {{news_tag.nom}}                 </td>

        {% if is_granted('ROLE_SUPER_ADMIN') %}


            <td> <h4> <a href=\"{{ path('update',{'id': news_tag.id}) }}\" onclick=\"return(confirm('Voulez vous modifier ?'));\"> <span class=\"glyphicon glyphicon-upload\"></span> </a> </h4>  </td>

            <td> <h4><a href=\"{{ path('delete',{'id': news_tag.id}) }}\" onclick=\"return(confirm('Etes-vous sûr de vouloir supprimer cette entrée ?'));\" > <span class=\"glyphicon glyphicon-erase\"></span> </a>  </h4> </td>
        {% endif %}


    </tr>

{% endfor %}

</table>
    </center>


{% endblock %}




", "tags.html.twig", "C:\\Users\\KazeK\\BTS\\SIO22\\Symfony\\PhpProject1\\app\\Resources\\views\\tags.html.twig");
    }
}
