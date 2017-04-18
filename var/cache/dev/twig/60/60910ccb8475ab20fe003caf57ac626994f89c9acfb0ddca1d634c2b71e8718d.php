<?php

/* default/hello.html.twig */
class __TwigTemplate_048e3d1131e83b5d29db9f642183748d1fc38934c9205c412622068d5135c912 extends Twig_Template
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
        $__internal_798e40db524ee51f896f7caec041212694290d313a14f478042b80a517b0d2dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_798e40db524ee51f896f7caec041212694290d313a14f478042b80a517b0d2dd->enter($__internal_798e40db524ee51f896f7caec041212694290d313a14f478042b80a517b0d2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/hello.html.twig"));

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
        echo "        <h1> Hello ";
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " </h1>
    </body>
</html>
";
        
        $__internal_798e40db524ee51f896f7caec041212694290d313a14f478042b80a517b0d2dd->leave($__internal_798e40db524ee51f896f7caec041212694290d313a14f478042b80a517b0d2dd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c24eb0867b9669fb642ca61be00f5a5013361c88017822ce8e49d904977a8c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24eb0867b9669fb642ca61be00f5a5013361c88017822ce8e49d904977a8c8f->enter($__internal_c24eb0867b9669fb642ca61be00f5a5013361c88017822ce8e49d904977a8c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "default/hello.html.twig"));

        echo "Welcome!";
        
        $__internal_c24eb0867b9669fb642ca61be00f5a5013361c88017822ce8e49d904977a8c8f->leave($__internal_c24eb0867b9669fb642ca61be00f5a5013361c88017822ce8e49d904977a8c8f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0345e27fdb598ce6c468dda35f1dcdc031d5ffba1c5522f7081dbafb9109253a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0345e27fdb598ce6c468dda35f1dcdc031d5ffba1c5522f7081dbafb9109253a->enter($__internal_0345e27fdb598ce6c468dda35f1dcdc031d5ffba1c5522f7081dbafb9109253a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "default/hello.html.twig"));

        
        $__internal_0345e27fdb598ce6c468dda35f1dcdc031d5ffba1c5522f7081dbafb9109253a->leave($__internal_0345e27fdb598ce6c468dda35f1dcdc031d5ffba1c5522f7081dbafb9109253a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5528249512b0794fdd6d0dafc80992f9dd643cdbdf1bc78efbc1301973b962f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5528249512b0794fdd6d0dafc80992f9dd643cdbdf1bc78efbc1301973b962f8->enter($__internal_5528249512b0794fdd6d0dafc80992f9dd643cdbdf1bc78efbc1301973b962f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "default/hello.html.twig"));

        
        $__internal_5528249512b0794fdd6d0dafc80992f9dd643cdbdf1bc78efbc1301973b962f8->leave($__internal_5528249512b0794fdd6d0dafc80992f9dd643cdbdf1bc78efbc1301973b962f8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4c51530feb69c448acb5015e007e1c59ed2236a2d6586dfeb2c5ea0c7b39b836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c51530feb69c448acb5015e007e1c59ed2236a2d6586dfeb2c5ea0c7b39b836->enter($__internal_4c51530feb69c448acb5015e007e1c59ed2236a2d6586dfeb2c5ea0c7b39b836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "default/hello.html.twig"));

        
        $__internal_4c51530feb69c448acb5015e007e1c59ed2236a2d6586dfeb2c5ea0c7b39b836->leave($__internal_4c51530feb69c448acb5015e007e1c59ed2236a2d6586dfeb2c5ea0c7b39b836_prof);

    }

    public function getTemplateName()
    {
        return "default/hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 11,  85 => 10,  74 => 6,  62 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        <h1> Hello {{nom}} </h1>
    </body>
</html>
", "default/hello.html.twig", "/home/sio/public_html/PhpProject1/app/Resources/views/default/hello.html.twig");
    }
}
