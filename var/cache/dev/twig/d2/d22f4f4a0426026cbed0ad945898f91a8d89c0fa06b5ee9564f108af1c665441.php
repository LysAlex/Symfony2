<?php

/* new.html.twig */
class __TwigTemplate_a4089670a9b73f5761835023a0fd93c1008b042385fcd0c8f534f19cbb7101a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "new.html.twig", 1);
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
        $__internal_38402dac0e014e7934b486da3eb3abff751c7d7db1c21983eb31f0791cf65c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38402dac0e014e7934b486da3eb3abff751c7d7db1c21983eb31f0791cf65c17->enter($__internal_38402dac0e014e7934b486da3eb3abff751c7d7db1c21983eb31f0791cf65c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38402dac0e014e7934b486da3eb3abff751c7d7db1c21983eb31f0791cf65c17->leave($__internal_38402dac0e014e7934b486da3eb3abff751c7d7db1c21983eb31f0791cf65c17_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_0ff8548be1b00bbb895619bdf2d65b76aabf755279aa78055d78200c3d10aacb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff8548be1b00bbb895619bdf2d65b76aabf755279aa78055d78200c3d10aacb->enter($__internal_0ff8548be1b00bbb895619bdf2d65b76aabf755279aa78055d78200c3d10aacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new.html.twig"));

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
        
        $__internal_0ff8548be1b00bbb895619bdf2d65b76aabf755279aa78055d78200c3d10aacb->leave($__internal_0ff8548be1b00bbb895619bdf2d65b76aabf755279aa78055d78200c3d10aacb_prof);

    }

    public function getTemplateName()
    {
        return "new.html.twig";
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
", "new.html.twig", "/home/sio/public_html/PhpProject1/app/Resources/views/new.html.twig");
    }
}
