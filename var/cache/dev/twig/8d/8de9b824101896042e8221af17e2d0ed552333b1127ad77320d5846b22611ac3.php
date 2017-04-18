<?php

/* newTag.html.twig */
class __TwigTemplate_08ff3d7744ae0e3c5aba8faac323a20599ddc4dbba00d136312a5599434e833f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "newTag.html.twig", 1);
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
        $__internal_fa9de413f74173e69db175fee1aa15c905d752171fb25d8cd3c683fb91fbf184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa9de413f74173e69db175fee1aa15c905d752171fb25d8cd3c683fb91fbf184->enter($__internal_fa9de413f74173e69db175fee1aa15c905d752171fb25d8cd3c683fb91fbf184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "newTag.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa9de413f74173e69db175fee1aa15c905d752171fb25d8cd3c683fb91fbf184->leave($__internal_fa9de413f74173e69db175fee1aa15c905d752171fb25d8cd3c683fb91fbf184_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_6130c77cdc2b30debad701011cdf19fa2ac5f12de69f62de77c5ac28d590c30e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6130c77cdc2b30debad701011cdf19fa2ac5f12de69f62de77c5ac28d590c30e->enter($__internal_6130c77cdc2b30debad701011cdf19fa2ac5f12de69f62de77c5ac28d590c30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "newTag.html.twig"));

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
        
        $__internal_6130c77cdc2b30debad701011cdf19fa2ac5f12de69f62de77c5ac28d590c30e->leave($__internal_6130c77cdc2b30debad701011cdf19fa2ac5f12de69f62de77c5ac28d590c30e_prof);

    }

    public function getTemplateName()
    {
        return "newTag.html.twig";
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
", "newTag.html.twig", "C:\\Users\\KazeK\\BTS\\SIO22\\Symfony\\PhpProject1\\app\\Resources\\views\\newTag.html.twig");
    }
}
