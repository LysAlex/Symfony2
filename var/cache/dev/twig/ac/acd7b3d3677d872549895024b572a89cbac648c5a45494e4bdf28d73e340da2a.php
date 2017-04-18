<?php

/* news.html.twig */
class __TwigTemplate_cac4e562322361cfd200c4a97972326d8657f7f33d5f83e3ce80f84fd6c8f9bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "news.html.twig", 1);
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
        $__internal_1d0bbf7f89326cc662091bea5e01c823439aaa77dff2b45dad38eaff58ebbabf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d0bbf7f89326cc662091bea5e01c823439aaa77dff2b45dad38eaff58ebbabf->enter($__internal_1d0bbf7f89326cc662091bea5e01c823439aaa77dff2b45dad38eaff58ebbabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "news.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d0bbf7f89326cc662091bea5e01c823439aaa77dff2b45dad38eaff58ebbabf->leave($__internal_1d0bbf7f89326cc662091bea5e01c823439aaa77dff2b45dad38eaff58ebbabf_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_48439fba99f2db631d37d458a37e68e0d06bb9ab177093985c0c7361f01b1762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48439fba99f2db631d37d458a37e68e0d06bb9ab177093985c0c7361f01b1762->enter($__internal_48439fba99f2db631d37d458a37e68e0d06bb9ab177093985c0c7361f01b1762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "news.html.twig"));

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
        
        $__internal_48439fba99f2db631d37d458a37e68e0d06bb9ab177093985c0c7361f01b1762->leave($__internal_48439fba99f2db631d37d458a37e68e0d06bb9ab177093985c0c7361f01b1762_prof);

    }

    public function getTemplateName()
    {
        return "news.html.twig";
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
", "news.html.twig", "/home/sio/public_html/PhpProject1/app/Resources/views/news.html.twig");
    }
}
