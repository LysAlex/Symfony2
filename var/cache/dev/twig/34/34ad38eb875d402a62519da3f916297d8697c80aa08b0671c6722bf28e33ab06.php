<?php

/* newLink.html.twig */
class __TwigTemplate_721042493528ea0cfa7141c7f91113c27a2194d97381ad28af2305d1005a9e96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "newLink.html.twig", 1);
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
        $__internal_bcd24584ac35af63f1e48ee0df2c9063b467fecda10e63326e8e837f0382416e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcd24584ac35af63f1e48ee0df2c9063b467fecda10e63326e8e837f0382416e->enter($__internal_bcd24584ac35af63f1e48ee0df2c9063b467fecda10e63326e8e837f0382416e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "newLink.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcd24584ac35af63f1e48ee0df2c9063b467fecda10e63326e8e837f0382416e->leave($__internal_bcd24584ac35af63f1e48ee0df2c9063b467fecda10e63326e8e837f0382416e_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_56e4ab278cda747dd916b1f95a29a107098b6e66a850c89ced84aa099bcc4cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e4ab278cda747dd916b1f95a29a107098b6e66a850c89ced84aa099bcc4cfd->enter($__internal_56e4ab278cda747dd916b1f95a29a107098b6e66a850c89ced84aa099bcc4cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "newLink.html.twig"));

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
        
        $__internal_56e4ab278cda747dd916b1f95a29a107098b6e66a850c89ced84aa099bcc4cfd->leave($__internal_56e4ab278cda747dd916b1f95a29a107098b6e66a850c89ced84aa099bcc4cfd_prof);

    }

    public function getTemplateName()
    {
        return "newLink.html.twig";
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
", "newLink.html.twig", "C:\\Users\\KazeK\\BTS\\SIO22\\Symfony\\PhpProject1\\app\\Resources\\views\\newLink.html.twig");
    }
}
