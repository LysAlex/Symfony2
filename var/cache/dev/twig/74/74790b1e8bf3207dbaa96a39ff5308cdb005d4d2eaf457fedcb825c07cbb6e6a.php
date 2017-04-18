<?php

/* default/index.html.twig */
class __TwigTemplate_2f2ffaa4c498013ca8b33cc295798ee26ded9070a5baad5a059dc5c195b27c2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/index.html.twig", 1);
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
        $__internal_0f732762c1d9240c42825b1bb50d4eb157f2f9ed08406e1c4b23474b3aee289c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f732762c1d9240c42825b1bb50d4eb157f2f9ed08406e1c4b23474b3aee289c->enter($__internal_0f732762c1d9240c42825b1bb50d4eb157f2f9ed08406e1c4b23474b3aee289c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f732762c1d9240c42825b1bb50d4eb157f2f9ed08406e1c4b23474b3aee289c->leave($__internal_0f732762c1d9240c42825b1bb50d4eb157f2f9ed08406e1c4b23474b3aee289c_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_0706dbc5a9cc272c2c126eecd9ee3c296499e3ddaa9404bcbab4282fe97079b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0706dbc5a9cc272c2c126eecd9ee3c296499e3ddaa9404bcbab4282fe97079b6->enter($__internal_0706dbc5a9cc272c2c126eecd9ee3c296499e3ddaa9404bcbab4282fe97079b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "default/index.html.twig"));

        // line 3
        echo "
    <p> BIENVENUE ! </P>

    <p> Notre site TechnoVeille vous permet de suivre l'actualité numérique ! </p>

";
        
        $__internal_0706dbc5a9cc272c2c126eecd9ee3c296499e3ddaa9404bcbab4282fe97079b6->leave($__internal_0706dbc5a9cc272c2c126eecd9ee3c296499e3ddaa9404bcbab4282fe97079b6_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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

    <p> BIENVENUE ! </P>

    <p> Notre site TechnoVeille vous permet de suivre l'actualité numérique ! </p>

{% endblock %}
", "default/index.html.twig", "C:\\Users\\KazeK\\BTS\\SIO22\\Symfony\\PhpProject1\\app\\Resources\\views\\default\\index.html.twig");
    }
}
