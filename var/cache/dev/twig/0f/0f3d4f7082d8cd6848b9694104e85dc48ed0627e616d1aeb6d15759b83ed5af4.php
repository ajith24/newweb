<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_273b37c5e08ecf95701244c1053df9fa77820ad48bcd69bb47ac6b9b3737345f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2beab62af64081e069dcffaab05c7654184c8551a5e8e21f539d405344358e38 = $this->env->getExtension("native_profiler");
        $__internal_2beab62af64081e069dcffaab05c7654184c8551a5e8e21f539d405344358e38->enter($__internal_2beab62af64081e069dcffaab05c7654184c8551a5e8e21f539d405344358e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2beab62af64081e069dcffaab05c7654184c8551a5e8e21f539d405344358e38->leave($__internal_2beab62af64081e069dcffaab05c7654184c8551a5e8e21f539d405344358e38_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1ed0d92a0c0a7b52fb55ed088b746f0fdc746effdb936fafbbd5a5edcd84aa1b = $this->env->getExtension("native_profiler");
        $__internal_1ed0d92a0c0a7b52fb55ed088b746f0fdc746effdb936fafbbd5a5edcd84aa1b->enter($__internal_1ed0d92a0c0a7b52fb55ed088b746f0fdc746effdb936fafbbd5a5edcd84aa1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1ed0d92a0c0a7b52fb55ed088b746f0fdc746effdb936fafbbd5a5edcd84aa1b->leave($__internal_1ed0d92a0c0a7b52fb55ed088b746f0fdc746effdb936fafbbd5a5edcd84aa1b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eb2ff79b5034e03ef6bd894e3b0c2bc022076e145ccbf2436162674f60dfc3ff = $this->env->getExtension("native_profiler");
        $__internal_eb2ff79b5034e03ef6bd894e3b0c2bc022076e145ccbf2436162674f60dfc3ff->enter($__internal_eb2ff79b5034e03ef6bd894e3b0c2bc022076e145ccbf2436162674f60dfc3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eb2ff79b5034e03ef6bd894e3b0c2bc022076e145ccbf2436162674f60dfc3ff->leave($__internal_eb2ff79b5034e03ef6bd894e3b0c2bc022076e145ccbf2436162674f60dfc3ff_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a71328937a5c724c44f52769637679534eedb15aa2070167bd4d1a50d9ef4ec3 = $this->env->getExtension("native_profiler");
        $__internal_a71328937a5c724c44f52769637679534eedb15aa2070167bd4d1a50d9ef4ec3->enter($__internal_a71328937a5c724c44f52769637679534eedb15aa2070167bd4d1a50d9ef4ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a71328937a5c724c44f52769637679534eedb15aa2070167bd4d1a50d9ef4ec3->leave($__internal_a71328937a5c724c44f52769637679534eedb15aa2070167bd4d1a50d9ef4ec3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
