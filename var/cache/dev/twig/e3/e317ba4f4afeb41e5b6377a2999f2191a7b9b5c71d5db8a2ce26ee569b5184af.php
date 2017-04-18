<?php

/* newLink.html.twig */
class __TwigTemplate_595fd25ef5dd6390a8053cc9b7159ae9c9d80923d267e37ad9866eddc56e048e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "newLink.html.twig", 1);
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
        $__internal_ffe21accc566e3e23d3a82d69b7137a607a768d5b64ddcbc8a8ec4a17be9db88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe21accc566e3e23d3a82d69b7137a607a768d5b64ddcbc8a8ec4a17be9db88->enter($__internal_ffe21accc566e3e23d3a82d69b7137a607a768d5b64ddcbc8a8ec4a17be9db88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "newLink.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffe21accc566e3e23d3a82d69b7137a607a768d5b64ddcbc8a8ec4a17be9db88->leave($__internal_ffe21accc566e3e23d3a82d69b7137a607a768d5b64ddcbc8a8ec4a17be9db88_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_b8ebb22756ee79209fd61c29fcd8944ffa2156ea740041648dc92a6fc1e9427e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ebb22756ee79209fd61c29fcd8944ffa2156ea740041648dc92a6fc1e9427e->enter($__internal_b8ebb22756ee79209fd61c29fcd8944ffa2156ea740041648dc92a6fc1e9427e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "newLink.html.twig"));

        // line 3
        echo "    
    ";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_b8ebb22756ee79209fd61c29fcd8944ffa2156ea740041648dc92a6fc1e9427e->leave($__internal_b8ebb22756ee79209fd61c29fcd8944ffa2156ea740041648dc92a6fc1e9427e_prof);

    }

    public function getTemplateName()
    {
        return "newLink.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 6,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
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
    
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}

{% endblock %}
", "newLink.html.twig", "/home/sio/public_html/PhpProject1/app/Resources/views/newLink.html.twig");
    }
}
