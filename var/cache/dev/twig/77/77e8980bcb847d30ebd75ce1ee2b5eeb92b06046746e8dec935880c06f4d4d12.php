<?php

/* equipe.html.twig */
class __TwigTemplate_02520e93fa6b47c193f35c7dc131e494459691ca18f006cfb299ca0c534506c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "equipe.html.twig", 1);
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
        $__internal_73d6ef3ca6e50722936756662486141239b57d0e3cefdc25a8f5782281ffa3fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d6ef3ca6e50722936756662486141239b57d0e3cefdc25a8f5782281ffa3fa->enter($__internal_73d6ef3ca6e50722936756662486141239b57d0e3cefdc25a8f5782281ffa3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "equipe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73d6ef3ca6e50722936756662486141239b57d0e3cefdc25a8f5782281ffa3fa->leave($__internal_73d6ef3ca6e50722936756662486141239b57d0e3cefdc25a8f5782281ffa3fa_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_8c8a79c4191dc0b512762c6336da561996885f288fcab2cd394e15b177963421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8a79c4191dc0b512762c6336da561996885f288fcab2cd394e15b177963421->enter($__internal_8c8a79c4191dc0b512762c6336da561996885f288fcab2cd394e15b177963421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "equipe.html.twig"));

        // line 3
        echo "
    <h1> Voici l'équipe du projet ! </h1>

";
        
        $__internal_8c8a79c4191dc0b512762c6336da561996885f288fcab2cd394e15b177963421->leave($__internal_8c8a79c4191dc0b512762c6336da561996885f288fcab2cd394e15b177963421_prof);

    }

    public function getTemplateName()
    {
        return "equipe.html.twig";
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
", "equipe.html.twig", "/home/sio/public_html/PhpProject1/app/Resources/views/equipe.html.twig");
    }
}
