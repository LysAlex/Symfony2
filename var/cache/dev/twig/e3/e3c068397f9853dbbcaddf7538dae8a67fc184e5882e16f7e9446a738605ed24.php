<?php

/* login.html.twig */
class __TwigTemplate_0f210d27efb7712c8ed25200ca6dc5aba6e3ad43fec042070472d966dc65c7e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15de25362f7cd76f0f95388b74c620ffcc39e91fa525df3abe56b55e2c92b7c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15de25362f7cd76f0f95388b74c620ffcc39e91fa525df3abe56b55e2c92b7c1->enter($__internal_15de25362f7cd76f0f95388b74c620ffcc39e91fa525df3abe56b55e2c92b7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
        echo "

<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"POST\">
    <label for=\"username\">Username</label>
    <input type=\"text\" name=\"username\" class=\"form-control\" id=\"username\" placeholder=\"Username\">
    <label for=\"password\">Password</label>
    <input type=\"password\" name=\"password\" class=\"form-control\"
           id=\"password\" placeholder=\"Password\">
    <button type=\"submit\">Login</button>
</form>
";
        
        $__internal_15de25362f7cd76f0f95388b74c620ffcc39e91fa525df3abe56b55e2c92b7c1->leave($__internal_15de25362f7cd76f0f95388b74c620ffcc39e91fa525df3abe56b55e2c92b7c1_prof);

    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ error }}

<form action=\"{{ path('login') }}\" method=\"POST\">
    <label for=\"username\">Username</label>
    <input type=\"text\" name=\"username\" class=\"form-control\" id=\"username\" placeholder=\"Username\">
    <label for=\"password\">Password</label>
    <input type=\"password\" name=\"password\" class=\"form-control\"
           id=\"password\" placeholder=\"Password\">
    <button type=\"submit\">Login</button>
</form>
", "login.html.twig", "/home/sio/public_html/PhpProject1/app/Resources/views/login.html.twig");
    }
}
