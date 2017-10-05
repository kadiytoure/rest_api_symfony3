<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_600ca249d4a6ba7cdee5e89e34e678b1897c9a8ce03239155e0215fd8862ac59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03742988c8aaf6f068aa3153a5b3b95d5493e8dc397dc77af253cc1f97cf67f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03742988c8aaf6f068aa3153a5b3b95d5493e8dc397dc77af253cc1f97cf67f5->enter($__internal_03742988c8aaf6f068aa3153a5b3b95d5493e8dc397dc77af253cc1f97cf67f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_548054ab4320ddcb741ca6da89c9fe53a5db6d1306eb12aae5e48b230f88a1b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548054ab4320ddcb741ca6da89c9fe53a5db6d1306eb12aae5e48b230f88a1b6->enter($__internal_548054ab4320ddcb741ca6da89c9fe53a5db6d1306eb12aae5e48b230f88a1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_03742988c8aaf6f068aa3153a5b3b95d5493e8dc397dc77af253cc1f97cf67f5->leave($__internal_03742988c8aaf6f068aa3153a5b3b95d5493e8dc397dc77af253cc1f97cf67f5_prof);

        
        $__internal_548054ab4320ddcb741ca6da89c9fe53a5db6d1306eb12aae5e48b230f88a1b6->leave($__internal_548054ab4320ddcb741ca6da89c9fe53a5db6d1306eb12aae5e48b230f88a1b6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b185e3c8807b0c9807dfde29219473309f7f9774c8bc16af1ad8ddd710bf69d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b185e3c8807b0c9807dfde29219473309f7f9774c8bc16af1ad8ddd710bf69d->enter($__internal_7b185e3c8807b0c9807dfde29219473309f7f9774c8bc16af1ad8ddd710bf69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ce22455afd0777474df758360df7d8b22bba93107c18e99a162a52d36c7d1dab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce22455afd0777474df758360df7d8b22bba93107c18e99a162a52d36c7d1dab->enter($__internal_ce22455afd0777474df758360df7d8b22bba93107c18e99a162a52d36c7d1dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ce22455afd0777474df758360df7d8b22bba93107c18e99a162a52d36c7d1dab->leave($__internal_ce22455afd0777474df758360df7d8b22bba93107c18e99a162a52d36c7d1dab_prof);

        
        $__internal_7b185e3c8807b0c9807dfde29219473309f7f9774c8bc16af1ad8ddd710bf69d->leave($__internal_7b185e3c8807b0c9807dfde29219473309f7f9774c8bc16af1ad8ddd710bf69d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_816dd0662b9efa59028a2bc651e62f22b373ba677834f609598cdbe6c9b1b0cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_816dd0662b9efa59028a2bc651e62f22b373ba677834f609598cdbe6c9b1b0cf->enter($__internal_816dd0662b9efa59028a2bc651e62f22b373ba677834f609598cdbe6c9b1b0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_791a9f486e008eae9c4a0ef180d019c67611a149db5e370085beff45d48dbb27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_791a9f486e008eae9c4a0ef180d019c67611a149db5e370085beff45d48dbb27->enter($__internal_791a9f486e008eae9c4a0ef180d019c67611a149db5e370085beff45d48dbb27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_791a9f486e008eae9c4a0ef180d019c67611a149db5e370085beff45d48dbb27->leave($__internal_791a9f486e008eae9c4a0ef180d019c67611a149db5e370085beff45d48dbb27_prof);

        
        $__internal_816dd0662b9efa59028a2bc651e62f22b373ba677834f609598cdbe6c9b1b0cf->leave($__internal_816dd0662b9efa59028a2bc651e62f22b373ba677834f609598cdbe6c9b1b0cf_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad6fe50e67ff2759a3d108d811a4845f1e00f1e111058a5b330ab638728623eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad6fe50e67ff2759a3d108d811a4845f1e00f1e111058a5b330ab638728623eb->enter($__internal_ad6fe50e67ff2759a3d108d811a4845f1e00f1e111058a5b330ab638728623eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_50de784dc2e27d9a785603a67fbf150185bc213410ace0b7c88afa67aedc082a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50de784dc2e27d9a785603a67fbf150185bc213410ace0b7c88afa67aedc082a->enter($__internal_50de784dc2e27d9a785603a67fbf150185bc213410ace0b7c88afa67aedc082a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_50de784dc2e27d9a785603a67fbf150185bc213410ace0b7c88afa67aedc082a->leave($__internal_50de784dc2e27d9a785603a67fbf150185bc213410ace0b7c88afa67aedc082a_prof);

        
        $__internal_ad6fe50e67ff2759a3d108d811a4845f1e00f1e111058a5b330ab638728623eb->leave($__internal_ad6fe50e67ff2759a3d108d811a4845f1e00f1e111058a5b330ab638728623eb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/toure/dev/rest_api_symfony3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
