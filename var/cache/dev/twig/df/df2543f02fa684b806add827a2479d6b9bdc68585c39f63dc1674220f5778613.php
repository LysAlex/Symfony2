<?php

/* menunav.html.twig */
class __TwigTemplate_7b01ef206901c80a0deeb845d08bf124a4539612bbbe3d2dcf6783d596fcdd13 extends Twig_Template
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
        $__internal_6a955ef2467e5abc548d48da6ae3c31ce3f5fcc0394dfe4326ae0ecf107bedd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a955ef2467e5abc548d48da6ae3c31ce3f5fcc0394dfe4326ae0ecf107bedd7->enter($__internal_6a955ef2467e5abc548d48da6ae3c31ce3f5fcc0394dfe4326ae0ecf107bedd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menunav.html.twig"));

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
            <a class=\"navbar-brand\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">TechnoVeille</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("links");
        echo "\">Lien</a></li>
                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tags");
        echo "\">Tag</a></li> 
                ";
        // line 16
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 17
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addlink");
            echo "\">Ajouter un Lien</a></li>
                <li><a href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addtag");
            echo "\">Ajouter un Tag</a></li>
                ";
        }
        // line 20
        echo "                <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\">A propos de nous</a></li>
                <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\" onclick=\"return(confirm('Etes vous sur de vouloir vous déconnecter ?'));\">Se déconnecter</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>";
        
        $__internal_6a955ef2467e5abc548d48da6ae3c31ce3f5fcc0394dfe4326ae0ecf107bedd7->leave($__internal_6a955ef2467e5abc548d48da6ae3c31ce3f5fcc0394dfe4326ae0ecf107bedd7_prof);

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
        return array (  65 => 21,  60 => 20,  55 => 18,  50 => 17,  48 => 16,  44 => 15,  40 => 14,  33 => 10,  22 => 1,);
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
            <a class=\"navbar-brand\" href=\"{{path('homepage')}}\">TechnoVeille</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"{{path('links')}}\">Lien</a></li>
                <li><a href=\"{{path('tags')}}\">Tag</a></li> 
                {% if is_granted('ROLE_SUPER_ADMIN') %}
                <li><a href=\"{{path('addlink')}}\">Ajouter un Lien</a></li>
                <li><a href=\"{{path('addtag')}}\">Ajouter un Tag</a></li>
                {% endif %}
                <li><a href=\"{{path('about')}}\">A propos de nous</a></li>
                <li><a href=\"{{path('logout')}}\" onclick=\"return(confirm('Etes vous sur de vouloir vous déconnecter ?'));\">Se déconnecter</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>", "menunav.html.twig", "C:\\Users\\KazeK\\BTS\\SIO22\\Symfony\\PhpProject1\\app\\Resources\\views\\menunav.html.twig");
    }
}
