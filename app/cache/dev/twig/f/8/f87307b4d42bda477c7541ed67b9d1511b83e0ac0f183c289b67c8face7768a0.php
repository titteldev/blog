<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_37978e96efe8b588b913f17281ac18388604ceba0c94af9f676546758a95205f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca484315120fec6ee92ac335aeef7b46d970e39b026d3644c2b6df7bb48979a9 = $this->env->getExtension("native_profiler");
        $__internal_ca484315120fec6ee92ac335aeef7b46d970e39b026d3644c2b6df7bb48979a9->enter($__internal_ca484315120fec6ee92ac335aeef7b46d970e39b026d3644c2b6df7bb48979a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca484315120fec6ee92ac335aeef7b46d970e39b026d3644c2b6df7bb48979a9->leave($__internal_ca484315120fec6ee92ac335aeef7b46d970e39b026d3644c2b6df7bb48979a9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_793d3181f51f37ecf71e2f466c34962a4743951a348820446abbb59f0643e8be = $this->env->getExtension("native_profiler");
        $__internal_793d3181f51f37ecf71e2f466c34962a4743951a348820446abbb59f0643e8be->enter($__internal_793d3181f51f37ecf71e2f466c34962a4743951a348820446abbb59f0643e8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_793d3181f51f37ecf71e2f466c34962a4743951a348820446abbb59f0643e8be->leave($__internal_793d3181f51f37ecf71e2f466c34962a4743951a348820446abbb59f0643e8be_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f38bec9238a0671f8726f3caca05af133dbc44ba52e8694e1af35c7b8fd777f4 = $this->env->getExtension("native_profiler");
        $__internal_f38bec9238a0671f8726f3caca05af133dbc44ba52e8694e1af35c7b8fd777f4->enter($__internal_f38bec9238a0671f8726f3caca05af133dbc44ba52e8694e1af35c7b8fd777f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f38bec9238a0671f8726f3caca05af133dbc44ba52e8694e1af35c7b8fd777f4->leave($__internal_f38bec9238a0671f8726f3caca05af133dbc44ba52e8694e1af35c7b8fd777f4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4934e9540f50226079ddcd8b31b05c79fb071be3d7e64909536b93709c221fe8 = $this->env->getExtension("native_profiler");
        $__internal_4934e9540f50226079ddcd8b31b05c79fb071be3d7e64909536b93709c221fe8->enter($__internal_4934e9540f50226079ddcd8b31b05c79fb071be3d7e64909536b93709c221fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4934e9540f50226079ddcd8b31b05c79fb071be3d7e64909536b93709c221fe8->leave($__internal_4934e9540f50226079ddcd8b31b05c79fb071be3d7e64909536b93709c221fe8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
/* {% extends 'TwigBundle::layout.html.twig' %}*/
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
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
