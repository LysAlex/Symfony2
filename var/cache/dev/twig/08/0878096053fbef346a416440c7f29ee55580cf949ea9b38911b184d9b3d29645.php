<?php

/* base.html.twig */
class __TwigTemplate_ddd3795d29c9444a38d7ca6c02ec22247f74dfc0a32f9d08994f7ff51e3a04b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8f620a6f0b05ca5df119607997c6fd94bd0128aa95439ca58a53f5d46dfcf6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f620a6f0b05ca5df119607997c6fd94bd0128aa95439ca58a53f5d46dfcf6b->enter($__internal_e8f620a6f0b05ca5df119607997c6fd94bd0128aa95439ca58a53f5d46dfcf6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e8f620a6f0b05ca5df119607997c6fd94bd0128aa95439ca58a53f5d46dfcf6b->leave($__internal_e8f620a6f0b05ca5df119607997c6fd94bd0128aa95439ca58a53f5d46dfcf6b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7f154ca048235bb35b446d9f633d19ac7c9a76a270a9c3d0cf9708a0f7c0c79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7f154ca048235bb35b446d9f633d19ac7c9a76a270a9c3d0cf9708a0f7c0c79->enter($__internal_f7f154ca048235bb35b446d9f633d19ac7c9a76a270a9c3d0cf9708a0f7c0c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_f7f154ca048235bb35b446d9f633d19ac7c9a76a270a9c3d0cf9708a0f7c0c79->leave($__internal_f7f154ca048235bb35b446d9f633d19ac7c9a76a270a9c3d0cf9708a0f7c0c79_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7076b3286b9cd60290bdcc5a558df203e7879603a4c6a14bf8984a98dc81710c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7076b3286b9cd60290bdcc5a558df203e7879603a4c6a14bf8984a98dc81710c->enter($__internal_7076b3286b9cd60290bdcc5a558df203e7879603a4c6a14bf8984a98dc81710c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_7076b3286b9cd60290bdcc5a558df203e7879603a4c6a14bf8984a98dc81710c->leave($__internal_7076b3286b9cd60290bdcc5a558df203e7879603a4c6a14bf8984a98dc81710c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_37adafdeed625b7237ff2b6fb9f2f94ab2a5cadc2b17702395cde1c9b33ec3d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37adafdeed625b7237ff2b6fb9f2f94ab2a5cadc2b17702395cde1c9b33ec3d1->enter($__internal_37adafdeed625b7237ff2b6fb9f2f94ab2a5cadc2b17702395cde1c9b33ec3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_37adafdeed625b7237ff2b6fb9f2f94ab2a5cadc2b17702395cde1c9b33ec3d1->leave($__internal_37adafdeed625b7237ff2b6fb9f2f94ab2a5cadc2b17702395cde1c9b33ec3d1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3c07bee4eaedb02a989d6e70e269d8797c7525cb6a77e1b501de69f5b7cec6d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c07bee4eaedb02a989d6e70e269d8797c7525cb6a77e1b501de69f5b7cec6d2->enter($__internal_3c07bee4eaedb02a989d6e70e269d8797c7525cb6a77e1b501de69f5b7cec6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_3c07bee4eaedb02a989d6e70e269d8797c7525cb6a77e1b501de69f5b7cec6d2->leave($__internal_3c07bee4eaedb02a989d6e70e269d8797c7525cb6a77e1b501de69f5b7cec6d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\KazeK\\BTS\\SIO22\\Symfony\\PhpProject1\\app\\Resources\\views\\base.html.twig");
    }
}
