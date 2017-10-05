<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cf7706c416b3cd469acab90c3254bc1c3067848e1cba22ce48f7f6bcc68a10f3 extends Twig_Template
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
        $__internal_777ddd58bb092a3ee4c982631a946a964af5c59fb508e1e03d796131c9b6b4e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_777ddd58bb092a3ee4c982631a946a964af5c59fb508e1e03d796131c9b6b4e5->enter($__internal_777ddd58bb092a3ee4c982631a946a964af5c59fb508e1e03d796131c9b6b4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_10b94c381145aba8dc165e296d63f4fa823f8cb40cc48a57da04a290a009cae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b94c381145aba8dc165e296d63f4fa823f8cb40cc48a57da04a290a009cae0->enter($__internal_10b94c381145aba8dc165e296d63f4fa823f8cb40cc48a57da04a290a009cae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_777ddd58bb092a3ee4c982631a946a964af5c59fb508e1e03d796131c9b6b4e5->leave($__internal_777ddd58bb092a3ee4c982631a946a964af5c59fb508e1e03d796131c9b6b4e5_prof);

        
        $__internal_10b94c381145aba8dc165e296d63f4fa823f8cb40cc48a57da04a290a009cae0->leave($__internal_10b94c381145aba8dc165e296d63f4fa823f8cb40cc48a57da04a290a009cae0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_67f0b52d9c8dcea72b1f755a605e24f820395da1cd552cf6f31eedc5b3193330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67f0b52d9c8dcea72b1f755a605e24f820395da1cd552cf6f31eedc5b3193330->enter($__internal_67f0b52d9c8dcea72b1f755a605e24f820395da1cd552cf6f31eedc5b3193330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c6579654e69b1cf80839e4c5a71a0bccc713896fb338a3fda05c1d06f59b2bb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6579654e69b1cf80839e4c5a71a0bccc713896fb338a3fda05c1d06f59b2bb7->enter($__internal_c6579654e69b1cf80839e4c5a71a0bccc713896fb338a3fda05c1d06f59b2bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_c6579654e69b1cf80839e4c5a71a0bccc713896fb338a3fda05c1d06f59b2bb7->leave($__internal_c6579654e69b1cf80839e4c5a71a0bccc713896fb338a3fda05c1d06f59b2bb7_prof);

        
        $__internal_67f0b52d9c8dcea72b1f755a605e24f820395da1cd552cf6f31eedc5b3193330->leave($__internal_67f0b52d9c8dcea72b1f755a605e24f820395da1cd552cf6f31eedc5b3193330_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc42814722d9db956920d3058e0dc7b63e20e1cd6762422eda1e6fbf7acd5b0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc42814722d9db956920d3058e0dc7b63e20e1cd6762422eda1e6fbf7acd5b0b->enter($__internal_dc42814722d9db956920d3058e0dc7b63e20e1cd6762422eda1e6fbf7acd5b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e517995c8362a3ed72e9a7845d5eb2e8bb612e1ee42cec3183cc8517f2d52065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e517995c8362a3ed72e9a7845d5eb2e8bb612e1ee42cec3183cc8517f2d52065->enter($__internal_e517995c8362a3ed72e9a7845d5eb2e8bb612e1ee42cec3183cc8517f2d52065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e517995c8362a3ed72e9a7845d5eb2e8bb612e1ee42cec3183cc8517f2d52065->leave($__internal_e517995c8362a3ed72e9a7845d5eb2e8bb612e1ee42cec3183cc8517f2d52065_prof);

        
        $__internal_dc42814722d9db956920d3058e0dc7b63e20e1cd6762422eda1e6fbf7acd5b0b->leave($__internal_dc42814722d9db956920d3058e0dc7b63e20e1cd6762422eda1e6fbf7acd5b0b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d3e2252b3a70f86b2f85b2dfe6a5ea6cdc146d2429936309868fe0f80cf3a2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d3e2252b3a70f86b2f85b2dfe6a5ea6cdc146d2429936309868fe0f80cf3a2c->enter($__internal_2d3e2252b3a70f86b2f85b2dfe6a5ea6cdc146d2429936309868fe0f80cf3a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d65f008084b711272a5d6f0d12662a763daece66d6336cf2bbd4377711c43c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d65f008084b711272a5d6f0d12662a763daece66d6336cf2bbd4377711c43c4a->enter($__internal_d65f008084b711272a5d6f0d12662a763daece66d6336cf2bbd4377711c43c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d65f008084b711272a5d6f0d12662a763daece66d6336cf2bbd4377711c43c4a->leave($__internal_d65f008084b711272a5d6f0d12662a763daece66d6336cf2bbd4377711c43c4a_prof);

        
        $__internal_2d3e2252b3a70f86b2f85b2dfe6a5ea6cdc146d2429936309868fe0f80cf3a2c->leave($__internal_2d3e2252b3a70f86b2f85b2dfe6a5ea6cdc146d2429936309868fe0f80cf3a2c_prof);

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
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/toure/dev/rest_api_symfony3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
