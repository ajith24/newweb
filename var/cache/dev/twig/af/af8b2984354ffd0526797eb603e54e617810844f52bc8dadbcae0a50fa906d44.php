<?php

/* AcmeBundleLoginBundle:Default:index.html.twig */
class __TwigTemplate_4acf4b3eaf8ccd30e2d30be56d118b6e399f44febc1a9a8a05c01b56fa60a40b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AcmeBundleLoginBundle:Default:index.html.twig", 1);
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
        $__internal_8b3197720643b13717534573bfaafc76546249b08e1adca44af3e8965a62cfe3 = $this->env->getExtension("native_profiler");
        $__internal_8b3197720643b13717534573bfaafc76546249b08e1adca44af3e8965a62cfe3->enter($__internal_8b3197720643b13717534573bfaafc76546249b08e1adca44af3e8965a62cfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeBundleLoginBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b3197720643b13717534573bfaafc76546249b08e1adca44af3e8965a62cfe3->leave($__internal_8b3197720643b13717534573bfaafc76546249b08e1adca44af3e8965a62cfe3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_13382b8d4020f8bf4a9c924d4d28922de2ded53caedbdc7037f5961c24219f79 = $this->env->getExtension("native_profiler");
        $__internal_13382b8d4020f8bf4a9c924d4d28922de2ded53caedbdc7037f5961c24219f79->enter($__internal_13382b8d4020f8bf4a9c924d4d28922de2ded53caedbdc7037f5961c24219f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_13382b8d4020f8bf4a9c924d4d28922de2ded53caedbdc7037f5961c24219f79->leave($__internal_13382b8d4020f8bf4a9c924d4d28922de2ded53caedbdc7037f5961c24219f79_prof);

    }

    public function getTemplateName()
    {
        return "AcmeBundleLoginBundle:Default:index.html.twig";
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
