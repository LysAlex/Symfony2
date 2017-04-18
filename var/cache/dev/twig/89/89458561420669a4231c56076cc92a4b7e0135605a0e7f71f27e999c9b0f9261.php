<?php

/* menunav.html.twig */
class __TwigTemplate_7d97dd6377138bdd0a5d25c702382b8b084f1af0bcedfa830aed775c6de92dbb extends Twig_Template
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
        $__internal_656dc0404aa4ef098c74f69808cd327b49c6ef973048861672c0572ab086f281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656dc0404aa4ef098c74f69808cd327b49c6ef973048861672c0572ab086f281->enter($__internal_656dc0404aa4ef098c74f69808cd327b49c6ef973048861672c0572ab086f281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menunav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Project name</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"#\">Home</a></li>
                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("links");
        echo "\">Lien</a></li>
                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tags");
        echo "\">Tag</a></li> 
                <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addlink");
        echo "\">Ajouter un Lien</a></li>
                <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addtag");
        echo "\">Ajouter un Tag</a></li>
                <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\">About</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>";
        
        $__internal_656dc0404aa4ef098c74f69808cd327b49c6ef973048861672c0572ab086f281->leave($__internal_656dc0404aa4ef098c74f69808cd327b49c6ef973048861672c0572ab086f281_prof);

    }

    public function getTemplateName()
    {
        return "menunav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 19,  50 => 18,  46 => 17,  42 => 16,  38 => 15,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Project name</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"#\">Home</a></li>
                <li><a href=\"{{path('links')}}\">Lien</a></li>
                <li><a href=\"{{path('tags')}}\">Tag</a></li> 
                <li><a href=\"{{path('addlink')}}\">Ajouter un Lien</a></li>
                <li><a href=\"{{path('addtag')}}\">Ajouter un Tag</a></li>
                <li><a href=\"{{path('about')}}\">About</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>", "menunav.html.twig", "/home/sio/public_html/PhpProject1/app/Resources/views/menunav.html.twig");
    }
}
