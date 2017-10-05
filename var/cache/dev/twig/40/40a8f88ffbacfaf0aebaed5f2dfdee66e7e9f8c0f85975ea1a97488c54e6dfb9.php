<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_041156b9466994864b08079fd89b2bbb723ec90268093911f50f58d96c561f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_041156b9466994864b08079fd89b2bbb723ec90268093911f50f58d96c561f13->enter($__internal_041156b9466994864b08079fd89b2bbb723ec90268093911f50f58d96c561f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3f49b96a0a3cbc50a2e36044c0b82388fc0d550b28f1f308ba53d77f112ba7d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f49b96a0a3cbc50a2e36044c0b82388fc0d550b28f1f308ba53d77f112ba7d4->enter($__internal_3f49b96a0a3cbc50a2e36044c0b82388fc0d550b28f1f308ba53d77f112ba7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_041156b9466994864b08079fd89b2bbb723ec90268093911f50f58d96c561f13->leave($__internal_041156b9466994864b08079fd89b2bbb723ec90268093911f50f58d96c561f13_prof);

        
        $__internal_3f49b96a0a3cbc50a2e36044c0b82388fc0d550b28f1f308ba53d77f112ba7d4->leave($__internal_3f49b96a0a3cbc50a2e36044c0b82388fc0d550b28f1f308ba53d77f112ba7d4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bfd05280fa3b5e94fc5741ec7b2e1d4efc8728743c0689ce2d1435746e554da3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfd05280fa3b5e94fc5741ec7b2e1d4efc8728743c0689ce2d1435746e554da3->enter($__internal_bfd05280fa3b5e94fc5741ec7b2e1d4efc8728743c0689ce2d1435746e554da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_15aaae84b5e7a20b5077d9434f323f46016537a125fc625ad11a913045bcbb98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15aaae84b5e7a20b5077d9434f323f46016537a125fc625ad11a913045bcbb98->enter($__internal_15aaae84b5e7a20b5077d9434f323f46016537a125fc625ad11a913045bcbb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_15aaae84b5e7a20b5077d9434f323f46016537a125fc625ad11a913045bcbb98->leave($__internal_15aaae84b5e7a20b5077d9434f323f46016537a125fc625ad11a913045bcbb98_prof);

        
        $__internal_bfd05280fa3b5e94fc5741ec7b2e1d4efc8728743c0689ce2d1435746e554da3->leave($__internal_bfd05280fa3b5e94fc5741ec7b2e1d4efc8728743c0689ce2d1435746e554da3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_84766661cc03ea009499014ae4851ddc5b4485b33a8a112170eede1795bf85a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84766661cc03ea009499014ae4851ddc5b4485b33a8a112170eede1795bf85a7->enter($__internal_84766661cc03ea009499014ae4851ddc5b4485b33a8a112170eede1795bf85a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2461b5c146617a1ba9a65d906156d633c13ad9148ebf375876c5bb6f998f04e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2461b5c146617a1ba9a65d906156d633c13ad9148ebf375876c5bb6f998f04e5->enter($__internal_2461b5c146617a1ba9a65d906156d633c13ad9148ebf375876c5bb6f998f04e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2461b5c146617a1ba9a65d906156d633c13ad9148ebf375876c5bb6f998f04e5->leave($__internal_2461b5c146617a1ba9a65d906156d633c13ad9148ebf375876c5bb6f998f04e5_prof);

        
        $__internal_84766661cc03ea009499014ae4851ddc5b4485b33a8a112170eede1795bf85a7->leave($__internal_84766661cc03ea009499014ae4851ddc5b4485b33a8a112170eede1795bf85a7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d07cb560c5769940927f456d2155fde60b98ef8ce9306fdffaca5077bfa5cf1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d07cb560c5769940927f456d2155fde60b98ef8ce9306fdffaca5077bfa5cf1a->enter($__internal_d07cb560c5769940927f456d2155fde60b98ef8ce9306fdffaca5077bfa5cf1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e11e854791074eda92c710f075050d72c212adbc640d4008f6337250e6922f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e11e854791074eda92c710f075050d72c212adbc640d4008f6337250e6922f40->enter($__internal_e11e854791074eda92c710f075050d72c212adbc640d4008f6337250e6922f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e11e854791074eda92c710f075050d72c212adbc640d4008f6337250e6922f40->leave($__internal_e11e854791074eda92c710f075050d72c212adbc640d4008f6337250e6922f40_prof);

        
        $__internal_d07cb560c5769940927f456d2155fde60b98ef8ce9306fdffaca5077bfa5cf1a->leave($__internal_d07cb560c5769940927f456d2155fde60b98ef8ce9306fdffaca5077bfa5cf1a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/toure/dev/rest_api_symfony3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
