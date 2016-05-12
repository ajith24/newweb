<?php

/* base.html.twig */
class __TwigTemplate_78763001f76484d760e609f6834d05e2f202f629ed8a5548e8c16702c373ef47 extends Twig_Template
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
        $__internal_39431a85f46e1327fb8937ec7c1ab978c7d983c9b339b9095d917e2cbdb5ef72 = $this->env->getExtension("native_profiler");
        $__internal_39431a85f46e1327fb8937ec7c1ab978c7d983c9b339b9095d917e2cbdb5ef72->enter($__internal_39431a85f46e1327fb8937ec7c1ab978c7d983c9b339b9095d917e2cbdb5ef72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
   
\t    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">  
\t   
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"templatemo\">
        <!-- 
        Visual Admin Template
        http://www.templatemo.com/preview/templatemo_455_visual_admin
        -->
\t    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
\t    <link href=\"css/font-awesome.min.css\" rel=\"stylesheet\">
\t    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
\t    <link href=\"css/templatemo-style.css\" rel=\"stylesheet\">
\t    
\t    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t    <!--[if lt IE 9]>
\t      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
\t      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t    <![endif]-->
    </head>
    <body>
        ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "    </body>
</html>
";
        
        $__internal_39431a85f46e1327fb8937ec7c1ab978c7d983c9b339b9095d917e2cbdb5ef72->leave($__internal_39431a85f46e1327fb8937ec7c1ab978c7d983c9b339b9095d917e2cbdb5ef72_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ceb7b0e4db9bfdc10ef33f172fb80a2bf69fd179b95f52e18bd96a2d369616f = $this->env->getExtension("native_profiler");
        $__internal_7ceb7b0e4db9bfdc10ef33f172fb80a2bf69fd179b95f52e18bd96a2d369616f->enter($__internal_7ceb7b0e4db9bfdc10ef33f172fb80a2bf69fd179b95f52e18bd96a2d369616f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7ceb7b0e4db9bfdc10ef33f172fb80a2bf69fd179b95f52e18bd96a2d369616f->leave($__internal_7ceb7b0e4db9bfdc10ef33f172fb80a2bf69fd179b95f52e18bd96a2d369616f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_24abab90681091a7dda0c9c7d28a36b182afe2b0c26dd3fd1471c8f971a70b9e = $this->env->getExtension("native_profiler");
        $__internal_24abab90681091a7dda0c9c7d28a36b182afe2b0c26dd3fd1471c8f971a70b9e->enter($__internal_24abab90681091a7dda0c9c7d28a36b182afe2b0c26dd3fd1471c8f971a70b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_24abab90681091a7dda0c9c7d28a36b182afe2b0c26dd3fd1471c8f971a70b9e->leave($__internal_24abab90681091a7dda0c9c7d28a36b182afe2b0c26dd3fd1471c8f971a70b9e_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e306bdccc2ccd2b5ea165826f3ce06ef273443d72c3ef6ded2744ef34a07ae3 = $this->env->getExtension("native_profiler");
        $__internal_3e306bdccc2ccd2b5ea165826f3ce06ef273443d72c3ef6ded2744ef34a07ae3->enter($__internal_3e306bdccc2ccd2b5ea165826f3ce06ef273443d72c3ef6ded2744ef34a07ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3e306bdccc2ccd2b5ea165826f3ce06ef273443d72c3ef6ded2744ef34a07ae3->leave($__internal_3e306bdccc2ccd2b5ea165826f3ce06ef273443d72c3ef6ded2744ef34a07ae3_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9daeb6b1031153cc25dc19412026fc6368350acfee82379c535f72ecb109d2d6 = $this->env->getExtension("native_profiler");
        $__internal_9daeb6b1031153cc25dc19412026fc6368350acfee82379c535f72ecb109d2d6->enter($__internal_9daeb6b1031153cc25dc19412026fc6368350acfee82379c535f72ecb109d2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9daeb6b1031153cc25dc19412026fc6368350acfee82379c535f72ecb109d2d6->leave($__internal_9daeb6b1031153cc25dc19412026fc6368350acfee82379c535f72ecb109d2d6_prof);

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
        return array (  114 => 32,  103 => 31,  92 => 6,  80 => 5,  71 => 33,  68 => 32,  66 => 31,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*    */
/* 	    <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* 	    <meta name="viewport" content="width=device-width, initial-scale=1">  */
/* 	   */
/*         <meta name="description" content="">*/
/*         <meta name="author" content="templatemo">*/
/*         <!-- */
/*         Visual Admin Template*/
/*         http://www.templatemo.com/preview/templatemo_455_visual_admin*/
/*         -->*/
/* 	    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>*/
/* 	    <link href="css/font-awesome.min.css" rel="stylesheet">*/
/* 	    <link href="css/bootstrap.min.css" rel="stylesheet">*/
/* 	    <link href="css/templatemo-style.css" rel="stylesheet">*/
/* 	    */
/* 	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/* 	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/* 	    <!--[if lt IE 9]>*/
/* 	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/* 	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/* 	    <![endif]-->*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
