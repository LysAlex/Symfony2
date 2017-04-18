<?php

/* login.html.twig */
class __TwigTemplate_617096173157420f4f0addae0ed34437d603231feef21cd5e72410b5d49b2be3 extends Twig_Template
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
        $__internal_5ba3c3a06ac6606a36e3237f2626a3591dccc8fbf0391f6361bf784e30546784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba3c3a06ac6606a36e3237f2626a3591dccc8fbf0391f6361bf784e30546784->enter($__internal_5ba3c3a06ac6606a36e3237f2626a3591dccc8fbf0391f6361bf784e30546784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        // line 1
        echo "

<!DOCTYPE html>
<!--[if lt IE 7]> <html class=\"lt-ie9 lt-ie8 lt-ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 7]> <html class=\"lt-ie9 lt-ie8\" lang=\"en\"> <![endif]-->
<!--[if IE 8]> <html class=\"lt-ie9\" lang=\"en\"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang=\"en\"> <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>TechnoVeille</title>
        <link href =\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/login.css"), "html", null, true);
        echo "\" rel = \"stylesheet\" >
         <link href =\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bouttonLogin.css"), "html", null, true);
        echo "\" rel = \"stylesheet\" >
        <!--[if lt IE 9]><script src=\"//html5shim.googlecode.com/svn/trunk/html5.js\"></script><![endif]-->
    </head>
    <body>
        <section class=\"container\">
            <div class=\"login\">
                <h1>Authentification</h1>
                <form action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"POST\">
                    <label for=\"Login\">Login</label>
                    <input type=\"text\" name=\"username\" class=\"form-control\" id=\"username\" placeholder=\"Username\">
                    <label for=\"password\">Password</label>
                    <input type=\"password\" name=\"password\" class=\"form-control\"
                           id=\"password\" placeholder=\"Password\">
                    <button type=\"submit\" class =\"button red\">Confirm</button>
                </form>
            </div>

            <div class=\"login-help\">
                <p>      &copy; 2016&ndash;2017 : Alex Lys - Franck Xiong<br>
                    Original for Symfony Project.</p>
            </div>
        </section>



    </body>
</html>



































";
        
        $__internal_5ba3c3a06ac6606a36e3237f2626a3591dccc8fbf0391f6361bf784e30546784->leave($__internal_5ba3c3a06ac6606a36e3237f2626a3591dccc8fbf0391f6361bf784e30546784_prof);

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
        return array (  49 => 20,  39 => 13,  35 => 12,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

<!DOCTYPE html>
<!--[if lt IE 7]> <html class=\"lt-ie9 lt-ie8 lt-ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 7]> <html class=\"lt-ie9 lt-ie8\" lang=\"en\"> <![endif]-->
<!--[if IE 8]> <html class=\"lt-ie9\" lang=\"en\"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang=\"en\"> <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>TechnoVeille</title>
        <link href =\"{{asset('assets/css/login.css')}}\" rel = \"stylesheet\" >
         <link href =\"{{asset('assets/css/bouttonLogin.css')}}\" rel = \"stylesheet\" >
        <!--[if lt IE 9]><script src=\"//html5shim.googlecode.com/svn/trunk/html5.js\"></script><![endif]-->
    </head>
    <body>
        <section class=\"container\">
            <div class=\"login\">
                <h1>Authentification</h1>
                <form action=\"{{ path('login') }}\" method=\"POST\">
                    <label for=\"Login\">Login</label>
                    <input type=\"text\" name=\"username\" class=\"form-control\" id=\"username\" placeholder=\"Username\">
                    <label for=\"password\">Password</label>
                    <input type=\"password\" name=\"password\" class=\"form-control\"
                           id=\"password\" placeholder=\"Password\">
                    <button type=\"submit\" class =\"button red\">Confirm</button>
                </form>
            </div>

            <div class=\"login-help\">
                <p>      &copy; 2016&ndash;2017 : Alex Lys - Franck Xiong<br>
                    Original for Symfony Project.</p>
            </div>
        </section>



    </body>
</html>



































", "login.html.twig", "C:\\Users\\KazeK\\BTS\\SIO22\\Symfony\\PhpProject1\\app\\Resources\\views\\login.html.twig");
    }
}
