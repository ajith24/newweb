<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_37018469affbad5647ef0ea4ec712d6cfb6ae75ae2e329a4c4b313153e06f18a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_045cd311f847a68c8816721bf93dad4c964b20ee456ba456a9fa148f0d0093a8 = $this->env->getExtension("native_profiler");
        $__internal_045cd311f847a68c8816721bf93dad4c964b20ee456ba456a9fa148f0d0093a8->enter($__internal_045cd311f847a68c8816721bf93dad4c964b20ee456ba456a9fa148f0d0093a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_045cd311f847a68c8816721bf93dad4c964b20ee456ba456a9fa148f0d0093a8->leave($__internal_045cd311f847a68c8816721bf93dad4c964b20ee456ba456a9fa148f0d0093a8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5e9a7c7d62c2493f102d3a6b0f49644c769543ca7bec77d4b9cd66aeda9d1748 = $this->env->getExtension("native_profiler");
        $__internal_5e9a7c7d62c2493f102d3a6b0f49644c769543ca7bec77d4b9cd66aeda9d1748->enter($__internal_5e9a7c7d62c2493f102d3a6b0f49644c769543ca7bec77d4b9cd66aeda9d1748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5e9a7c7d62c2493f102d3a6b0f49644c769543ca7bec77d4b9cd66aeda9d1748->leave($__internal_5e9a7c7d62c2493f102d3a6b0f49644c769543ca7bec77d4b9cd66aeda9d1748_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c2599531a425382faa7327c1fd8fb456d1d2a59e63ded181af6f5a9a86aac0e = $this->env->getExtension("native_profiler");
        $__internal_7c2599531a425382faa7327c1fd8fb456d1d2a59e63ded181af6f5a9a86aac0e->enter($__internal_7c2599531a425382faa7327c1fd8fb456d1d2a59e63ded181af6f5a9a86aac0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7c2599531a425382faa7327c1fd8fb456d1d2a59e63ded181af6f5a9a86aac0e->leave($__internal_7c2599531a425382faa7327c1fd8fb456d1d2a59e63ded181af6f5a9a86aac0e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ef0f383d396c66ca8662823c50e76909538208b788dbf5ec1fb4371211f62c0 = $this->env->getExtension("native_profiler");
        $__internal_3ef0f383d396c66ca8662823c50e76909538208b788dbf5ec1fb4371211f62c0->enter($__internal_3ef0f383d396c66ca8662823c50e76909538208b788dbf5ec1fb4371211f62c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3ef0f383d396c66ca8662823c50e76909538208b788dbf5ec1fb4371211f62c0->leave($__internal_3ef0f383d396c66ca8662823c50e76909538208b788dbf5ec1fb4371211f62c0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
