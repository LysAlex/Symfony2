<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4d60ba855a5c690224381bdfe666eb8caaced3ae6cabcd783a2399b77e120a6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a9909ecdec8ada05326cbe738f7a9aa90495b1317eafe154a43e559013a6ccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a9909ecdec8ada05326cbe738f7a9aa90495b1317eafe154a43e559013a6ccf->enter($__internal_7a9909ecdec8ada05326cbe738f7a9aa90495b1317eafe154a43e559013a6ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a9909ecdec8ada05326cbe738f7a9aa90495b1317eafe154a43e559013a6ccf->leave($__internal_7a9909ecdec8ada05326cbe738f7a9aa90495b1317eafe154a43e559013a6ccf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_71179b9674e5b86065d035bea6e94d136163834c3c7dcb10a6d103eefd154b74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71179b9674e5b86065d035bea6e94d136163834c3c7dcb10a6d103eefd154b74->enter($__internal_71179b9674e5b86065d035bea6e94d136163834c3c7dcb10a6d103eefd154b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_71179b9674e5b86065d035bea6e94d136163834c3c7dcb10a6d103eefd154b74->leave($__internal_71179b9674e5b86065d035bea6e94d136163834c3c7dcb10a6d103eefd154b74_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c48e9cbfb8e8f609a7939477c498df757aacbdc456142077c707b6da46b1a955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c48e9cbfb8e8f609a7939477c498df757aacbdc456142077c707b6da46b1a955->enter($__internal_c48e9cbfb8e8f609a7939477c498df757aacbdc456142077c707b6da46b1a955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c48e9cbfb8e8f609a7939477c498df757aacbdc456142077c707b6da46b1a955->leave($__internal_c48e9cbfb8e8f609a7939477c498df757aacbdc456142077c707b6da46b1a955_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_286f0a13417d6d3151d4b883a4f8106139e5e5299b67d0d9d0506714fbd63d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_286f0a13417d6d3151d4b883a4f8106139e5e5299b67d0d9d0506714fbd63d0c->enter($__internal_286f0a13417d6d3151d4b883a4f8106139e5e5299b67d0d9d0506714fbd63d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_286f0a13417d6d3151d4b883a4f8106139e5e5299b67d0d9d0506714fbd63d0c->leave($__internal_286f0a13417d6d3151d4b883a4f8106139e5e5299b67d0d9d0506714fbd63d0c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/sio/public_html/PhpProject1/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
