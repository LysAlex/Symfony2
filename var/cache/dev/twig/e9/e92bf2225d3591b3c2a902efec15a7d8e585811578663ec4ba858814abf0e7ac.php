<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c70c7ceb86c9b7610a9adc3513b9abc69e4f68002eb99aaae0771a9baf943551 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_7ad4a2a70681ed939612d4d2c83e88261fe1e9f5c8d0fd40e6f23d2791cabe76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ad4a2a70681ed939612d4d2c83e88261fe1e9f5c8d0fd40e6f23d2791cabe76->enter($__internal_7ad4a2a70681ed939612d4d2c83e88261fe1e9f5c8d0fd40e6f23d2791cabe76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ad4a2a70681ed939612d4d2c83e88261fe1e9f5c8d0fd40e6f23d2791cabe76->leave($__internal_7ad4a2a70681ed939612d4d2c83e88261fe1e9f5c8d0fd40e6f23d2791cabe76_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3ff4c7beea408ff762c5ae25ac54d50f38e70801ee32e9ce6dffebf1d0d1c1a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff4c7beea408ff762c5ae25ac54d50f38e70801ee32e9ce6dffebf1d0d1c1a1->enter($__internal_3ff4c7beea408ff762c5ae25ac54d50f38e70801ee32e9ce6dffebf1d0d1c1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3ff4c7beea408ff762c5ae25ac54d50f38e70801ee32e9ce6dffebf1d0d1c1a1->leave($__internal_3ff4c7beea408ff762c5ae25ac54d50f38e70801ee32e9ce6dffebf1d0d1c1a1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1a833c0145e6a1e857ae983ea67a40d7af8c598e19ff599c1c16a45d66af6444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a833c0145e6a1e857ae983ea67a40d7af8c598e19ff599c1c16a45d66af6444->enter($__internal_1a833c0145e6a1e857ae983ea67a40d7af8c598e19ff599c1c16a45d66af6444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1a833c0145e6a1e857ae983ea67a40d7af8c598e19ff599c1c16a45d66af6444->leave($__internal_1a833c0145e6a1e857ae983ea67a40d7af8c598e19ff599c1c16a45d66af6444_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_13b42d7752620c781298545b30d29ec2f456a8a64dbec5876078968b5d54f0f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b42d7752620c781298545b30d29ec2f456a8a64dbec5876078968b5d54f0f4->enter($__internal_13b42d7752620c781298545b30d29ec2f456a8a64dbec5876078968b5d54f0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_13b42d7752620c781298545b30d29ec2f456a8a64dbec5876078968b5d54f0f4->leave($__internal_13b42d7752620c781298545b30d29ec2f456a8a64dbec5876078968b5d54f0f4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/sio/public_html/PhpProject1/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
