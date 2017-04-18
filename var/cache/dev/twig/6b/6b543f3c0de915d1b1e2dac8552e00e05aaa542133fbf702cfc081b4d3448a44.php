<?php

/* about.html.twig */
class __TwigTemplate_4e34b8ac4f88035028f547aa8294263685dbdc472fb65ea0c788ed04408957e2 extends Twig_Template
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
        $__internal_78ad7ad36e2be42e001c88aa748ba1d21baf637995254d7b02005b573524a00f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ad7ad36e2be42e001c88aa748ba1d21baf637995254d7b02005b573524a00f->enter($__internal_78ad7ad36e2be42e001c88aa748ba1d21baf637995254d7b02005b573524a00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78ad7ad36e2be42e001c88aa748ba1d21baf637995254d7b02005b573524a00f->leave($__internal_78ad7ad36e2be42e001c88aa748ba1d21baf637995254d7b02005b573524a00f_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_01bd701082a286f5338989a38b7fa016ffa8f2fc46478a3412b5e27d793f60f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01bd701082a286f5338989a38b7fa016ffa8f2fc46478a3412b5e27d793f60f1->enter($__internal_01bd701082a286f5338989a38b7fa016ffa8f2fc46478a3412b5e27d793f60f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "about.html.twig"));

        // line 3
        echo "
    <h1> Voici l'équipe du projet ! </h1>

";
        
        $__internal_01bd701082a286f5338989a38b7fa016ffa8f2fc46478a3412b5e27d793f60f1->leave($__internal_01bd701082a286f5338989a38b7fa016ffa8f2fc46478a3412b5e27d793f60f1_prof);

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
", "about.html.twig", "C:\\Users\\KazeK\\BTS\\SIO22\\Symfony\\PhpProject1\\app\\Resources\\views\\about.html.twig");
    }
}
