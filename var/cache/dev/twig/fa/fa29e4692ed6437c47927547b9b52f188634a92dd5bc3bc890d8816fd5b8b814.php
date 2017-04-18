<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f9f28cf2630be94728a22a10311e53789bf04c2777d8cad1cccf02afd0cf077d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc4492ae98f7e247fbb7fcecc697a29f848ac3f33269d042c041b3f4cdca9172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc4492ae98f7e247fbb7fcecc697a29f848ac3f33269d042c041b3f4cdca9172->enter($__internal_bc4492ae98f7e247fbb7fcecc697a29f848ac3f33269d042c041b3f4cdca9172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc4492ae98f7e247fbb7fcecc697a29f848ac3f33269d042c041b3f4cdca9172->leave($__internal_bc4492ae98f7e247fbb7fcecc697a29f848ac3f33269d042c041b3f4cdca9172_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8eec78169d473a122378810210881c2cb2acb8fdaf7bf74aa29f147258fc6eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eec78169d473a122378810210881c2cb2acb8fdaf7bf74aa29f147258fc6eb1->enter($__internal_8eec78169d473a122378810210881c2cb2acb8fdaf7bf74aa29f147258fc6eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8eec78169d473a122378810210881c2cb2acb8fdaf7bf74aa29f147258fc6eb1->leave($__internal_8eec78169d473a122378810210881c2cb2acb8fdaf7bf74aa29f147258fc6eb1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b8db16b8e6986f0453798cfefaddcaefce5dd19474dd57b091aa8ace80dcece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b8db16b8e6986f0453798cfefaddcaefce5dd19474dd57b091aa8ace80dcece->enter($__internal_5b8db16b8e6986f0453798cfefaddcaefce5dd19474dd57b091aa8ace80dcece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5b8db16b8e6986f0453798cfefaddcaefce5dd19474dd57b091aa8ace80dcece->leave($__internal_5b8db16b8e6986f0453798cfefaddcaefce5dd19474dd57b091aa8ace80dcece_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4db7fc8a0bbd90ebbdb8f796ca70cd0f188a082dfea360e99f1af31fe98177d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db7fc8a0bbd90ebbdb8f796ca70cd0f188a082dfea360e99f1af31fe98177d5->enter($__internal_4db7fc8a0bbd90ebbdb8f796ca70cd0f188a082dfea360e99f1af31fe98177d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4db7fc8a0bbd90ebbdb8f796ca70cd0f188a082dfea360e99f1af31fe98177d5->leave($__internal_4db7fc8a0bbd90ebbdb8f796ca70cd0f188a082dfea360e99f1af31fe98177d5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\KazeK\\BTS\\SIO22\\Symfony\\PhpProject1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
