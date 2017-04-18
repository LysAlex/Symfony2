<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_30f71ba4abad10c537867094b641d0d453a83f635bae93881efc418280ff0451 extends Twig_Template
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
        $__internal_615174d03170f5d740c9f5bab3403cfa089aae04f6d700d2f815cebc4765adc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_615174d03170f5d740c9f5bab3403cfa089aae04f6d700d2f815cebc4765adc8->enter($__internal_615174d03170f5d740c9f5bab3403cfa089aae04f6d700d2f815cebc4765adc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_615174d03170f5d740c9f5bab3403cfa089aae04f6d700d2f815cebc4765adc8->leave($__internal_615174d03170f5d740c9f5bab3403cfa089aae04f6d700d2f815cebc4765adc8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6ea760a9cf4f74e8cb004b7ced84b03cae3eb34e01c8b0278b9a195e1133d2d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ea760a9cf4f74e8cb004b7ced84b03cae3eb34e01c8b0278b9a195e1133d2d1->enter($__internal_6ea760a9cf4f74e8cb004b7ced84b03cae3eb34e01c8b0278b9a195e1133d2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_6ea760a9cf4f74e8cb004b7ced84b03cae3eb34e01c8b0278b9a195e1133d2d1->leave($__internal_6ea760a9cf4f74e8cb004b7ced84b03cae3eb34e01c8b0278b9a195e1133d2d1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4d59a611e6b35e0bf64fa43e06e689099be7a6f3f9ef95129926422f791b77fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d59a611e6b35e0bf64fa43e06e689099be7a6f3f9ef95129926422f791b77fa->enter($__internal_4d59a611e6b35e0bf64fa43e06e689099be7a6f3f9ef95129926422f791b77fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4d59a611e6b35e0bf64fa43e06e689099be7a6f3f9ef95129926422f791b77fa->leave($__internal_4d59a611e6b35e0bf64fa43e06e689099be7a6f3f9ef95129926422f791b77fa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c30e8e5b4c36008d2602c7af40976ba96da37ecbc871021031ff24f7ef219549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30e8e5b4c36008d2602c7af40976ba96da37ecbc871021031ff24f7ef219549->enter($__internal_c30e8e5b4c36008d2602c7af40976ba96da37ecbc871021031ff24f7ef219549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c30e8e5b4c36008d2602c7af40976ba96da37ecbc871021031ff24f7ef219549->leave($__internal_c30e8e5b4c36008d2602c7af40976ba96da37ecbc871021031ff24f7ef219549_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\KazeK\\BTS\\SIO22\\Symfony\\PhpProject1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
