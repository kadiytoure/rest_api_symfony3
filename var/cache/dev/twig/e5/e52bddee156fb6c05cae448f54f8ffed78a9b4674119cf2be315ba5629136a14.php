<?php

/* base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
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
        $__internal_6025c3489b7fba97951e81b5d3df623b8325d45e39c1ef2ab73699eafc79ede7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6025c3489b7fba97951e81b5d3df623b8325d45e39c1ef2ab73699eafc79ede7->enter($__internal_6025c3489b7fba97951e81b5d3df623b8325d45e39c1ef2ab73699eafc79ede7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_58e24926e48b79dc1b516b6f71972466cb17d083a0903ac263e1c741a4ff23ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58e24926e48b79dc1b516b6f71972466cb17d083a0903ac263e1c741a4ff23ba->enter($__internal_58e24926e48b79dc1b516b6f71972466cb17d083a0903ac263e1c741a4ff23ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_6025c3489b7fba97951e81b5d3df623b8325d45e39c1ef2ab73699eafc79ede7->leave($__internal_6025c3489b7fba97951e81b5d3df623b8325d45e39c1ef2ab73699eafc79ede7_prof);

        
        $__internal_58e24926e48b79dc1b516b6f71972466cb17d083a0903ac263e1c741a4ff23ba->leave($__internal_58e24926e48b79dc1b516b6f71972466cb17d083a0903ac263e1c741a4ff23ba_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b8d2d1c8ef2583f068868c90e15b071f3392a3cb5ca49f9ae4da8a0f97fd0d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b8d2d1c8ef2583f068868c90e15b071f3392a3cb5ca49f9ae4da8a0f97fd0d7->enter($__internal_8b8d2d1c8ef2583f068868c90e15b071f3392a3cb5ca49f9ae4da8a0f97fd0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_71116ff86bc3e5d30ffae5a6056dbc4d36625963ced27f205e27df316ceef751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71116ff86bc3e5d30ffae5a6056dbc4d36625963ced27f205e27df316ceef751->enter($__internal_71116ff86bc3e5d30ffae5a6056dbc4d36625963ced27f205e27df316ceef751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_71116ff86bc3e5d30ffae5a6056dbc4d36625963ced27f205e27df316ceef751->leave($__internal_71116ff86bc3e5d30ffae5a6056dbc4d36625963ced27f205e27df316ceef751_prof);

        
        $__internal_8b8d2d1c8ef2583f068868c90e15b071f3392a3cb5ca49f9ae4da8a0f97fd0d7->leave($__internal_8b8d2d1c8ef2583f068868c90e15b071f3392a3cb5ca49f9ae4da8a0f97fd0d7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ea46bda480a24f88f49fc622b2e72105bc2404f3332cfe76fd840dea62c899b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea46bda480a24f88f49fc622b2e72105bc2404f3332cfe76fd840dea62c899b3->enter($__internal_ea46bda480a24f88f49fc622b2e72105bc2404f3332cfe76fd840dea62c899b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_435413972b139645e80a3bf93ab4f4873596e9dd6adf2d8feb3af97a3504c70e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_435413972b139645e80a3bf93ab4f4873596e9dd6adf2d8feb3af97a3504c70e->enter($__internal_435413972b139645e80a3bf93ab4f4873596e9dd6adf2d8feb3af97a3504c70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_435413972b139645e80a3bf93ab4f4873596e9dd6adf2d8feb3af97a3504c70e->leave($__internal_435413972b139645e80a3bf93ab4f4873596e9dd6adf2d8feb3af97a3504c70e_prof);

        
        $__internal_ea46bda480a24f88f49fc622b2e72105bc2404f3332cfe76fd840dea62c899b3->leave($__internal_ea46bda480a24f88f49fc622b2e72105bc2404f3332cfe76fd840dea62c899b3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d66b2cadfcce1b5d0b4ad53273555b4db2c6ae368897cc3ea9b249e742c89004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d66b2cadfcce1b5d0b4ad53273555b4db2c6ae368897cc3ea9b249e742c89004->enter($__internal_d66b2cadfcce1b5d0b4ad53273555b4db2c6ae368897cc3ea9b249e742c89004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f75eeff8c70a5ffdf28af8608e5abf5b6bbaabc8a1510cad855e46682f371a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75eeff8c70a5ffdf28af8608e5abf5b6bbaabc8a1510cad855e46682f371a96->enter($__internal_f75eeff8c70a5ffdf28af8608e5abf5b6bbaabc8a1510cad855e46682f371a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f75eeff8c70a5ffdf28af8608e5abf5b6bbaabc8a1510cad855e46682f371a96->leave($__internal_f75eeff8c70a5ffdf28af8608e5abf5b6bbaabc8a1510cad855e46682f371a96_prof);

        
        $__internal_d66b2cadfcce1b5d0b4ad53273555b4db2c6ae368897cc3ea9b249e742c89004->leave($__internal_d66b2cadfcce1b5d0b4ad53273555b4db2c6ae368897cc3ea9b249e742c89004_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1dee6c84bf5d84a19b05fd9902c60a149540830ee8cfb75a31ff3143024cced9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dee6c84bf5d84a19b05fd9902c60a149540830ee8cfb75a31ff3143024cced9->enter($__internal_1dee6c84bf5d84a19b05fd9902c60a149540830ee8cfb75a31ff3143024cced9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f0d625cb9a873e73cce892bbac4e8feb06562a87ec5c2893cb65af4a01a28119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d625cb9a873e73cce892bbac4e8feb06562a87ec5c2893cb65af4a01a28119->enter($__internal_f0d625cb9a873e73cce892bbac4e8feb06562a87ec5c2893cb65af4a01a28119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f0d625cb9a873e73cce892bbac4e8feb06562a87ec5c2893cb65af4a01a28119->leave($__internal_f0d625cb9a873e73cce892bbac4e8feb06562a87ec5c2893cb65af4a01a28119_prof);

        
        $__internal_1dee6c84bf5d84a19b05fd9902c60a149540830ee8cfb75a31ff3143024cced9->leave($__internal_1dee6c84bf5d84a19b05fd9902c60a149540830ee8cfb75a31ff3143024cced9_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/toure/dev/rest_api_symfony3/app/Resources/views/base.html.twig");
    }
}
