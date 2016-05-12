<?php

/* AcmeBundleLoginBundle:Default:signup.html.twig */
class __TwigTemplate_16056e7f4b0134c08a44a82416af0e47e47d685c5aa59221e52c161b055c6092 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AcmeBundleLoginBundle:Default:signup.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e558f5f1e2ad2a91307fbd6a9746495ac20dbf6726983bfd447ac49aa28fa2c2 = $this->env->getExtension("native_profiler");
        $__internal_e558f5f1e2ad2a91307fbd6a9746495ac20dbf6726983bfd447ac49aa28fa2c2->enter($__internal_e558f5f1e2ad2a91307fbd6a9746495ac20dbf6726983bfd447ac49aa28fa2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeBundleLoginBundle:Default:signup.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e558f5f1e2ad2a91307fbd6a9746495ac20dbf6726983bfd447ac49aa28fa2c2->leave($__internal_e558f5f1e2ad2a91307fbd6a9746495ac20dbf6726983bfd447ac49aa28fa2c2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_95d9cb8ac084e27f41d3446c536bb951d448d8c8016d84188b64d72ba701027d = $this->env->getExtension("native_profiler");
        $__internal_95d9cb8ac084e27f41d3446c536bb951d448d8c8016d84188b64d72ba701027d->enter($__internal_95d9cb8ac084e27f41d3446c536bb951d448d8c8016d84188b64d72ba701027d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"templatemo-content-widget templatemo-login-widget white-bg\">
\t\t\t<header class=\"text-center\">
\t          <div class=\"square\"></div>
\t          <h1>Admin</h1>
\t        </header>
\t        <form action=\"phpcode/signin.php\" class=\"templatemo-login-form\" method=\"post\">
\t        \t<div class=\"form-group\">
\t        \t\t<div class=\"input-group\">
\t\t        \t\t<div class=\"input-group-addon\"><i class=\"fa fa-user fa-fw\"></i></div>\t        \t\t
\t\t              \t<input type=\"text\" name=\"txtname\" class=\"form-control\" placeholder=\"Full Name\">           
\t\t          \t</div>\t
\t        \t</div>
\t        \t<div class=\"form-group\">
\t        \t\t<div class=\"input-group\">
\t\t        \t\t<div class=\"input-group-addon\"><i class=\"fa fa-envelope-square fa-fw\"></i></div>\t        \t\t
\t\t              \t<input type=\"text\" name=\"txtmail\" class=\"form-control\" placeholder=\"E-mail ID\">           
\t\t          \t</div>\t
\t        \t</div>
\t        \t<div class=\"form-group\">
\t        \t\t<div class=\"input-group\">
\t\t        \t\t<div class=\"input-group-addon\"><i class=\"fa fa-home fa-fw\"></i></div>\t        \t\t
\t\t              \t<input type=\"text\" name=\"txtcountry\" class=\"form-control\" placeholder=\"Country\">           
\t\t          \t</div>\t
\t        \t</div>
\t        \t<div class=\"form-group\">
\t        \t\t<div class=\"input-group\">
\t\t        \t\t<div class=\"input-group-addon\"><i class=\"fa fa-user fa-fw\"></i></div>\t        \t\t
\t\t              \t<input type=\"text\" name=\"txtusername\" class=\"form-control\" placeholder=\"Username\">           
\t\t          \t</div>\t
\t        \t</div>
\t        \t
\t        \t<div class=\"form-group\">
\t        \t\t<div class=\"input-group\">
\t\t        \t\t<div class=\"input-group-addon\"><i class=\"fa fa-key fa-fw\"></i></div>\t        \t\t
\t\t              \t<input type=\"password\" name=\"txtpassword\" class=\"form-control\" placeholder=\"******\">           
\t\t          \t</div>\t
\t        \t</div>\t          \t
\t          \t<div class=\"form-group\">
\t\t\t\t    <div class=\"checkbox squaredTwo\">
\t\t\t\t        <input type=\"checkbox\" id=\"c1\" name=\"cc\" />
\t\t\t\t\t\t<label for=\"c1\"><span></span>Remember me</label>
\t\t\t\t    </div>\t\t\t\t    
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<button type=\"submit\" class=\"templatemo-blue-button width-100\">Create Account</button>
\t\t\t\t</div>
\t        </form>
\t\t</div>
\t\t<div class=\"templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg\">
\t\t\t<p>Registered user Please<strong><a href=\"#\" class=\"blue-text\"> Login Here</a></strong></p>
\t\t</div>
";
        
        $__internal_95d9cb8ac084e27f41d3446c536bb951d448d8c8016d84188b64d72ba701027d->leave($__internal_95d9cb8ac084e27f41d3446c536bb951d448d8c8016d84188b64d72ba701027d_prof);

    }

    public function getTemplateName()
    {
        return "AcmeBundleLoginBundle:Default:signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <div class="templatemo-content-widget templatemo-login-widget white-bg">*/
/* 			<header class="text-center">*/
/* 	          <div class="square"></div>*/
/* 	          <h1>Admin</h1>*/
/* 	        </header>*/
/* 	        <form action="phpcode/signin.php" class="templatemo-login-form" method="post">*/
/* 	        	<div class="form-group">*/
/* 	        		<div class="input-group">*/
/* 		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		*/
/* 		              	<input type="text" name="txtname" class="form-control" placeholder="Full Name">           */
/* 		          	</div>	*/
/* 	        	</div>*/
/* 	        	<div class="form-group">*/
/* 	        		<div class="input-group">*/
/* 		        		<div class="input-group-addon"><i class="fa fa-envelope-square fa-fw"></i></div>	        		*/
/* 		              	<input type="text" name="txtmail" class="form-control" placeholder="E-mail ID">           */
/* 		          	</div>	*/
/* 	        	</div>*/
/* 	        	<div class="form-group">*/
/* 	        		<div class="input-group">*/
/* 		        		<div class="input-group-addon"><i class="fa fa-home fa-fw"></i></div>	        		*/
/* 		              	<input type="text" name="txtcountry" class="form-control" placeholder="Country">           */
/* 		          	</div>	*/
/* 	        	</div>*/
/* 	        	<div class="form-group">*/
/* 	        		<div class="input-group">*/
/* 		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		*/
/* 		              	<input type="text" name="txtusername" class="form-control" placeholder="Username">           */
/* 		          	</div>	*/
/* 	        	</div>*/
/* 	        	*/
/* 	        	<div class="form-group">*/
/* 	        		<div class="input-group">*/
/* 		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        		*/
/* 		              	<input type="password" name="txtpassword" class="form-control" placeholder="******">           */
/* 		          	</div>	*/
/* 	        	</div>	          	*/
/* 	          	<div class="form-group">*/
/* 				    <div class="checkbox squaredTwo">*/
/* 				        <input type="checkbox" id="c1" name="cc" />*/
/* 						<label for="c1"><span></span>Remember me</label>*/
/* 				    </div>				    */
/* 				</div>*/
/* 				<div class="form-group">*/
/* 					<button type="submit" class="templatemo-blue-button width-100">Create Account</button>*/
/* 				</div>*/
/* 	        </form>*/
/* 		</div>*/
/* 		<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">*/
/* 			<p>Registered user Please<strong><a href="#" class="blue-text"> Login Here</a></strong></p>*/
/* 		</div>*/
/* {% endblock %}*/
