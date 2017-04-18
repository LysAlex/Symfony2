<?php

/* base.html.twig */
class __TwigTemplate_482bbecfcaeb825487c0c2f92c195da075762e6a46622aeb4d39be1e5ddeab05 extends Twig_Template
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
        $__internal_7cbb924c2b0fc2b0fad592b6028b2280250f233baf6aaee41b72fe11886938b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cbb924c2b0fc2b0fad592b6028b2280250f233baf6aaee41b72fe11886938b0->enter($__internal_7cbb924c2b0fc2b0fad592b6028b2280250f233baf6aaee41b72fe11886938b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7cbb924c2b0fc2b0fad592b6028b2280250f233baf6aaee41b72fe11886938b0->leave($__internal_7cbb924c2b0fc2b0fad592b6028b2280250f233baf6aaee41b72fe11886938b0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d493920f3bd193e69c6a885cf25aa6ac7b1a24a5fbc68f4efb4b3f228387388d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d493920f3bd193e69c6a885cf25aa6ac7b1a24a5fbc68f4efb4b3f228387388d->enter($__internal_d493920f3bd193e69c6a885cf25aa6ac7b1a24a5fbc68f4efb4b3f228387388d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_d493920f3bd193e69c6a885cf25aa6ac7b1a24a5fbc68f4efb4b3f228387388d->leave($__internal_d493920f3bd193e69c6a885cf25aa6ac7b1a24a5fbc68f4efb4b3f228387388d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_28b5c40ab1eea7af26369c2105d4cbb56cb8f07429119a886cb0316105091037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28b5c40ab1eea7af26369c2105d4cbb56cb8f07429119a886cb0316105091037->enter($__internal_28b5c40ab1eea7af26369c2105d4cbb56cb8f07429119a886cb0316105091037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_28b5c40ab1eea7af26369c2105d4cbb56cb8f07429119a886cb0316105091037->leave($__internal_28b5c40ab1eea7af26369c2105d4cbb56cb8f07429119a886cb0316105091037_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_18048ea52f7719aeafd14cc9fb1cd52b19b1175ee4ec0a27c36c1c6b45909349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18048ea52f7719aeafd14cc9fb1cd52b19b1175ee4ec0a27c36c1c6b45909349->enter($__internal_18048ea52f7719aeafd14cc9fb1cd52b19b1175ee4ec0a27c36c1c6b45909349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_18048ea52f7719aeafd14cc9fb1cd52b19b1175ee4ec0a27c36c1c6b45909349->leave($__internal_18048ea52f7719aeafd14cc9fb1cd52b19b1175ee4ec0a27c36c1c6b45909349_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0fa479eaa83b0df27e4e7c1cdea81e3f35d62a9fb905f513e487b104ab7cb5ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa479eaa83b0df27e4e7c1cdea81e3f35d62a9fb905f513e487b104ab7cb5ed->enter($__internal_0fa479eaa83b0df27e4e7c1cdea81e3f35d62a9fb905f513e487b104ab7cb5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_0fa479eaa83b0df27e4e7c1cdea81e3f35d62a9fb905f513e487b104ab7cb5ed->leave($__internal_0fa479eaa83b0df27e4e7c1cdea81e3f35d62a9fb905f513e487b104ab7cb5ed_prof);

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
", "base.html.twig", "/home/sio/public_html/PhpProject1/app/Resources/views/base.html.twig");
    }
}
