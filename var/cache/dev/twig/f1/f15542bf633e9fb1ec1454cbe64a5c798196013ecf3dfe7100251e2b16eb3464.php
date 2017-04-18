<?php

/* tags.html.twig */
class __TwigTemplate_4e4a9a4283fee2138150f6dce48ea4c44ddc2a62b06195707f77947a173346d7 extends Twig_Template
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
        $__internal_4f63baf280fa1f793d63b31cfb21562d77d7a064212f717d93d5615e0c7a306e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f63baf280fa1f793d63b31cfb21562d77d7a064212f717d93d5615e0c7a306e->enter($__internal_4f63baf280fa1f793d63b31cfb21562d77d7a064212f717d93d5615e0c7a306e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f63baf280fa1f793d63b31cfb21562d77d7a064212f717d93d5615e0c7a306e->leave($__internal_4f63baf280fa1f793d63b31cfb21562d77d7a064212f717d93d5615e0c7a306e_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_5a76a528e7fba322c9031cf33832825ecfe1586408b5477723b25a494e9f462b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a76a528e7fba322c9031cf33832825ecfe1586408b5477723b25a494e9f462b->enter($__internal_5a76a528e7fba322c9031cf33832825ecfe1586408b5477723b25a494e9f462b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tags.html.twig"));

        // line 3
        echo "    <table class =\"table\"> 
        <tr> <strong> Nom Tag </strong> </td>
        </tr>
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["news_tag"]) {
            // line 7
            echo "
            <tr>

                <td>  ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["news_tag"], "nom", array()), "html", null, true);
            echo "                 </td>

                <td> <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update", array("id" => $this->getAttribute($context["news_tag"], "id", array()))), "html", null, true);
            echo "\">update</a>                 </td>

                <td> <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => $this->getAttribute($context["news_tag"], "id", array()))), "html", null, true);
            echo "\">delete</a>                 </td>


            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news_tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    </table>


";
        
        $__internal_5a76a528e7fba322c9031cf33832825ecfe1586408b5477723b25a494e9f462b->leave($__internal_5a76a528e7fba322c9031cf33832825ecfe1586408b5477723b25a494e9f462b_prof);

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
        return array (  76 => 20,  64 => 14,  59 => 12,  54 => 10,  49 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
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
    <table class =\"table\"> 
        <tr> <strong> Nom Tag </strong> </td>
        </tr>
        {% for news_tag in tags %}

            <tr>

                <td>  {{news_tag.nom}}                 </td>

                <td> <a href=\"{{ path('update',{'id': news_tag.id}) }}\">update</a>                 </td>

                <td> <a href=\"{{ path('delete',{'id': news_tag.id}) }}\">delete</a>                 </td>


            </tr>

        {% endfor %}

    </table>


{% endblock %}




", "tags.html.twig", "/home/sio/public_html/PhpProject1/app/Resources/views/tags.html.twig");
    }
}
