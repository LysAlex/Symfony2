<?php

/* newTag.html.twig */
class __TwigTemplate_1e30830cca1f07f74124003573c23ae1d9a7b7dac00f2b3f09918f71cf5fc8e1 extends Twig_Template
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
        $__internal_0185bc313cf5a8ba523bd58b18ba0d8aed2de16f13b864836fef72a0eb26c71b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0185bc313cf5a8ba523bd58b18ba0d8aed2de16f13b864836fef72a0eb26c71b->enter($__internal_0185bc313cf5a8ba523bd58b18ba0d8aed2de16f13b864836fef72a0eb26c71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "newTag.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0185bc313cf5a8ba523bd58b18ba0d8aed2de16f13b864836fef72a0eb26c71b->leave($__internal_0185bc313cf5a8ba523bd58b18ba0d8aed2de16f13b864836fef72a0eb26c71b_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_98d23058adb296cf90e65f26c7989ba15a25a5a156d5df90270127d8f7bff412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98d23058adb296cf90e65f26c7989ba15a25a5a156d5df90270127d8f7bff412->enter($__internal_98d23058adb296cf90e65f26c7989ba15a25a5a156d5df90270127d8f7bff412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "newTag.html.twig"));

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
        
        $__internal_98d23058adb296cf90e65f26c7989ba15a25a5a156d5df90270127d8f7bff412->leave($__internal_98d23058adb296cf90e65f26c7989ba15a25a5a156d5df90270127d8f7bff412_prof);

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
", "newTag.html.twig", "/home/sio/public_html/PhpProject1/app/Resources/views/newTag.html.twig");
    }
}
