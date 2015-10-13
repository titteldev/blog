<?php

/* base.html.twig */
class __TwigTemplate_7a705b9f1476cba706ca55b3e01bef552ebd11b342641797679684a96cc4cff0 extends Twig_Template
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
        $__internal_f4fa4b51125d91d122a0f3283a12b91e92641fc0ef952002b235ab4d2592246c = $this->env->getExtension("native_profiler");
        $__internal_f4fa4b51125d91d122a0f3283a12b91e92641fc0ef952002b235ab4d2592246c->enter($__internal_f4fa4b51125d91d122a0f3283a12b91e92641fc0ef952002b235ab4d2592246c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f4fa4b51125d91d122a0f3283a12b91e92641fc0ef952002b235ab4d2592246c->leave($__internal_f4fa4b51125d91d122a0f3283a12b91e92641fc0ef952002b235ab4d2592246c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4dd61ada15a39abc8f5b8c7e5bc7d1459a75cf178de9b5bbdd5f0d51db7215be = $this->env->getExtension("native_profiler");
        $__internal_4dd61ada15a39abc8f5b8c7e5bc7d1459a75cf178de9b5bbdd5f0d51db7215be->enter($__internal_4dd61ada15a39abc8f5b8c7e5bc7d1459a75cf178de9b5bbdd5f0d51db7215be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4dd61ada15a39abc8f5b8c7e5bc7d1459a75cf178de9b5bbdd5f0d51db7215be->leave($__internal_4dd61ada15a39abc8f5b8c7e5bc7d1459a75cf178de9b5bbdd5f0d51db7215be_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_55581aa7951bb9fbe261dd85894ca6baa9ed79b6584ecd7299fd2e4288bb945a = $this->env->getExtension("native_profiler");
        $__internal_55581aa7951bb9fbe261dd85894ca6baa9ed79b6584ecd7299fd2e4288bb945a->enter($__internal_55581aa7951bb9fbe261dd85894ca6baa9ed79b6584ecd7299fd2e4288bb945a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_55581aa7951bb9fbe261dd85894ca6baa9ed79b6584ecd7299fd2e4288bb945a->leave($__internal_55581aa7951bb9fbe261dd85894ca6baa9ed79b6584ecd7299fd2e4288bb945a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_752cd929b6b3d0bcd0fac0da2149a68e4b737de2ec14a099b8f94c5a818867fe = $this->env->getExtension("native_profiler");
        $__internal_752cd929b6b3d0bcd0fac0da2149a68e4b737de2ec14a099b8f94c5a818867fe->enter($__internal_752cd929b6b3d0bcd0fac0da2149a68e4b737de2ec14a099b8f94c5a818867fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_752cd929b6b3d0bcd0fac0da2149a68e4b737de2ec14a099b8f94c5a818867fe->leave($__internal_752cd929b6b3d0bcd0fac0da2149a68e4b737de2ec14a099b8f94c5a818867fe_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_153e298d60472f3457cbaf3af78df5fce6e714f7f648f21ce6551a67176f56db = $this->env->getExtension("native_profiler");
        $__internal_153e298d60472f3457cbaf3af78df5fce6e714f7f648f21ce6551a67176f56db->enter($__internal_153e298d60472f3457cbaf3af78df5fce6e714f7f648f21ce6551a67176f56db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_153e298d60472f3457cbaf3af78df5fce6e714f7f648f21ce6551a67176f56db->leave($__internal_153e298d60472f3457cbaf3af78df5fce6e714f7f648f21ce6551a67176f56db_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
