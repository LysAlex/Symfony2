<?php

/* layout.html.twig */
class __TwigTemplate_6b499de7fd114fa167408d2d4a7dcb3430b92f2caf968d2dc91a6cd5b9bc5377 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a0ff27cf7fde4e0bd2848a6289aa154dc4f4fc94bab4a175fd3a053f091332f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a0ff27cf7fde4e0bd2848a6289aa154dc4f4fc94bab4a175fd3a053f091332f->enter($__internal_7a0ff27cf7fde4e0bd2848a6289aa154dc4f4fc94bab4a175fd3a053f091332f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link rel=\"icon\" href=\"../../favicon.ico\">
        
        <link href =\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/starter-template.css"), "html", null, true);
        echo "\" rel = \"stylesheet\" >

        <title>TechnoVeille</title>

        <!-- Bootstrap core CSS -->
        <link rel=\"stylesheet\" 
              href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">

   

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
          <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>

    <body>
";
        // line 30
        $this->loadTemplate("menunav.html.twig", "layout.html.twig", 30)->display($context);
        echo "    


        <div class=\"starter-template\">
            ";
        // line 34
        $this->displayBlock('container', $context, $blocks);
        // line 36
        echo "
            

        </div><!-- /.container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
        <script src=\"../../dist/js/bootstrap.min.js\"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
    </body>
</html>
";
        
        $__internal_7a0ff27cf7fde4e0bd2848a6289aa154dc4f4fc94bab4a175fd3a053f091332f->leave($__internal_7a0ff27cf7fde4e0bd2848a6289aa154dc4f4fc94bab4a175fd3a053f091332f_prof);

    }

    // line 34
    public function block_container($context, array $blocks = array())
    {
        $__internal_c2e454e5e1b684e4cd406fb050607638aa79dc34b1484d72dadb9631a166b3d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e454e5e1b684e4cd406fb050607638aa79dc34b1484d72dadb9631a166b3d8->enter($__internal_c2e454e5e1b684e4cd406fb050607638aa79dc34b1484d72dadb9631a166b3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout.html.twig"));

        // line 35
        echo "            ";
        
        $__internal_c2e454e5e1b684e4cd406fb050607638aa79dc34b1484d72dadb9631a166b3d8->leave($__internal_c2e454e5e1b684e4cd406fb050607638aa79dc34b1484d72dadb9631a166b3d8_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 35,  92 => 34,  69 => 36,  67 => 34,  60 => 30,  45 => 18,  36 => 12,  23 => 1,);
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
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link rel=\"icon\" href=\"../../favicon.ico\">
        
        <link href =\"{{asset('assets/css/starter-template.css')}}\" rel = \"stylesheet\" >

        <title>TechnoVeille</title>

        <!-- Bootstrap core CSS -->
        <link rel=\"stylesheet\" 
              href=\"{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}\">

   

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
          <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>

    <body>
{%include \"menunav.html.twig\" %}    


        <div class=\"starter-template\">
            {% block container %}
            {%endblock%}

            

        </div><!-- /.container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
        <script src=\"../../dist/js/bootstrap.min.js\"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
    </body>
</html>
", "layout.html.twig", "C:\\Users\\KazeK\\BTS\\SIO22\\Symfony\\PhpProject1\\app\\Resources\\views\\layout.html.twig");
    }
}
