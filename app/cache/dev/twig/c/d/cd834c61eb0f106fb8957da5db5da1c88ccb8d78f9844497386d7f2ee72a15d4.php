<?php

/* lucky/number.html.twig */
class __TwigTemplate_cb9484852873a5bc6aca2a2f270289d28e63e635c5d7c4ed444bfb479d48e069 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "lucky/number.html.twig", 2);
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
        $__internal_999968673e80f43410bdc69a52c6146c170e035b7792f1f79aefef65c8830ae0 = $this->env->getExtension("native_profiler");
        $__internal_999968673e80f43410bdc69a52c6146c170e035b7792f1f79aefef65c8830ae0->enter($__internal_999968673e80f43410bdc69a52c6146c170e035b7792f1f79aefef65c8830ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_999968673e80f43410bdc69a52c6146c170e035b7792f1f79aefef65c8830ae0->leave($__internal_999968673e80f43410bdc69a52c6146c170e035b7792f1f79aefef65c8830ae0_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_4de0e14c2b5194aa761315cd3fbd189a5aedae3c6a1554cbaf8e010cc48916e9 = $this->env->getExtension("native_profiler");
        $__internal_4de0e14c2b5194aa761315cd3fbd189a5aedae3c6a1554cbaf8e010cc48916e9->enter($__internal_4de0e14c2b5194aa761315cd3fbd189a5aedae3c6a1554cbaf8e010cc48916e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Lucky Numbers: ";
        echo twig_escape_filter($this->env, (isset($context["luckyNumberList"]) ? $context["luckyNumberList"] : $this->getContext($context, "luckyNumberList")), "html", null, true);
        echo "</h1>
";
        
        $__internal_4de0e14c2b5194aa761315cd3fbd189a5aedae3c6a1554cbaf8e010cc48916e9->leave($__internal_4de0e14c2b5194aa761315cd3fbd189a5aedae3c6a1554cbaf8e010cc48916e9_prof);

    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/lucky/number.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Lucky Numbers: {{ luckyNumberList }}</h1>*/
/* {% endblock %}*/
/* */
