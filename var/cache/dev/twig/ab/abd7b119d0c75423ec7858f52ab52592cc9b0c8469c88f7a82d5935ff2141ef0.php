<?php

/* about.html.twig */
class __TwigTemplate_0d2a0b4ca7d891ff74cce4fc16f781ae95b34ceb0cb32a259004df009098da9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "about.html.twig", 1);
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
        $__internal_5224313a1cf520cb8740576d835c056750afed9d17ccb03caf6c4d28ae803568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5224313a1cf520cb8740576d835c056750afed9d17ccb03caf6c4d28ae803568->enter($__internal_5224313a1cf520cb8740576d835c056750afed9d17ccb03caf6c4d28ae803568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5224313a1cf520cb8740576d835c056750afed9d17ccb03caf6c4d28ae803568->leave($__internal_5224313a1cf520cb8740576d835c056750afed9d17ccb03caf6c4d28ae803568_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_8f8987b6ad2aeffa1ebd3f27ce461bcd341ef12963d48d44c270d8e3171d46f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f8987b6ad2aeffa1ebd3f27ce461bcd341ef12963d48d44c270d8e3171d46f6->enter($__internal_8f8987b6ad2aeffa1ebd3f27ce461bcd341ef12963d48d44c270d8e3171d46f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "about.html.twig"));

        // line 3
        echo "
    <h1> Voici l'équipe du projet ! </h1>

";
        
        $__internal_8f8987b6ad2aeffa1ebd3f27ce461bcd341ef12963d48d44c270d8e3171d46f6->leave($__internal_8f8987b6ad2aeffa1ebd3f27ce461bcd341ef12963d48d44c270d8e3171d46f6_prof);

    }

    public function getTemplateName()
    {
        return "about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
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

    <h1> Voici l'équipe du projet ! </h1>

{% endblock %}
", "about.html.twig", "/home/sio/public_html/PhpProject1/app/Resources/views/about.html.twig");
    }
}
