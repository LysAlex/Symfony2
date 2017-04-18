<?php

/* links.html.twig */
class __TwigTemplate_f031c768ca465ce34f46a857c8216fa5708a0dcd17e7956bbb7e7b3fca13b1ae extends Twig_Template
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
        $__internal_ac322b3e04deaefb41217c7174726b9c83b306aa9305995d27b4a2cf8bf84a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac322b3e04deaefb41217c7174726b9c83b306aa9305995d27b4a2cf8bf84a6e->enter($__internal_ac322b3e04deaefb41217c7174726b9c83b306aa9305995d27b4a2cf8bf84a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac322b3e04deaefb41217c7174726b9c83b306aa9305995d27b4a2cf8bf84a6e->leave($__internal_ac322b3e04deaefb41217c7174726b9c83b306aa9305995d27b4a2cf8bf84a6e_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_25a306a39717d605057a85cb2ab17f4ea30ed8c0aaa20716c785456f1ac2a57d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a306a39717d605057a85cb2ab17f4ea30ed8c0aaa20716c785456f1ac2a57d->enter($__internal_25a306a39717d605057a85cb2ab17f4ea30ed8c0aaa20716c785456f1ac2a57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links.html.twig"));

        // line 3
        echo "    <table class =\"table\"> 
        <tr> <strong> Nom du lien </strong></tr>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : $this->getContext($context, "links")));
        foreach ($context['_seq'] as $context["_key"] => $context["news_link"]) {
            // line 6
            echo "        <tr>
            <td> ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["news_link"], "link", array()), "html", null, true);
            echo " </td>
            <td> <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updates", array("id" => $this->getAttribute($context["news_link"], "id", array()))), "html", null, true);
            echo "\">update</a>  </td>
            <td> <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deletes", array("id" => $this->getAttribute($context["news_link"], "id", array()))), "html", null, true);
            echo "\">delete</a> </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news_link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "

";
        
        $__internal_25a306a39717d605057a85cb2ab17f4ea30ed8c0aaa20716c785456f1ac2a57d->leave($__internal_25a306a39717d605057a85cb2ab17f4ea30ed8c0aaa20716c785456f1ac2a57d_prof);

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
        return array (  68 => 12,  59 => 9,  55 => 8,  51 => 7,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
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
        <tr> <strong> Nom du lien </strong></tr>
        {% for news_link in links %}
        <tr>
            <td> {{news_link.link}} </td>
            <td> <a href=\"{{ path('updates',{'id': news_link.id}) }}\">update</a>  </td>
            <td> <a href=\"{{ path('deletes',{'id': news_link.id}) }}\">delete</a> </td>
        </tr>
    {% endfor %}


{% endblock %}







", "links.html.twig", "/home/sio/public_html/PhpProject1/app/Resources/views/links.html.twig");
    }
}
