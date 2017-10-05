<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
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
        $__internal_f55e8eeb6f17f1a2e4fdc396f9b749e6b988ceed7cbed8069a8d1203d77a687c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f55e8eeb6f17f1a2e4fdc396f9b749e6b988ceed7cbed8069a8d1203d77a687c->enter($__internal_f55e8eeb6f17f1a2e4fdc396f9b749e6b988ceed7cbed8069a8d1203d77a687c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_228603f37d5bd2d12a9839514c57401802f69816841260e253b688a5e48642a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_228603f37d5bd2d12a9839514c57401802f69816841260e253b688a5e48642a5->enter($__internal_228603f37d5bd2d12a9839514c57401802f69816841260e253b688a5e48642a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f55e8eeb6f17f1a2e4fdc396f9b749e6b988ceed7cbed8069a8d1203d77a687c->leave($__internal_f55e8eeb6f17f1a2e4fdc396f9b749e6b988ceed7cbed8069a8d1203d77a687c_prof);

        
        $__internal_228603f37d5bd2d12a9839514c57401802f69816841260e253b688a5e48642a5->leave($__internal_228603f37d5bd2d12a9839514c57401802f69816841260e253b688a5e48642a5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ce4a844759a6d521d4c24f5de0d14d428c871bb1409418875e6d61eae22b5e69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce4a844759a6d521d4c24f5de0d14d428c871bb1409418875e6d61eae22b5e69->enter($__internal_ce4a844759a6d521d4c24f5de0d14d428c871bb1409418875e6d61eae22b5e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b20eb7dc04ad925f962d7d5170f8d5a2d851bba39a3f9698d176f01af409537d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20eb7dc04ad925f962d7d5170f8d5a2d851bba39a3f9698d176f01af409537d->enter($__internal_b20eb7dc04ad925f962d7d5170f8d5a2d851bba39a3f9698d176f01af409537d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b20eb7dc04ad925f962d7d5170f8d5a2d851bba39a3f9698d176f01af409537d->leave($__internal_b20eb7dc04ad925f962d7d5170f8d5a2d851bba39a3f9698d176f01af409537d_prof);

        
        $__internal_ce4a844759a6d521d4c24f5de0d14d428c871bb1409418875e6d61eae22b5e69->leave($__internal_ce4a844759a6d521d4c24f5de0d14d428c871bb1409418875e6d61eae22b5e69_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8b750c43e5ee7b317cc18f870dcef6cffddaca47983a91887ee63db4f60d3d27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b750c43e5ee7b317cc18f870dcef6cffddaca47983a91887ee63db4f60d3d27->enter($__internal_8b750c43e5ee7b317cc18f870dcef6cffddaca47983a91887ee63db4f60d3d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0fc75d5e430dcfe05ac9cbf156eda0f57fda3195540b6bf34e071cf78dc23f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc75d5e430dcfe05ac9cbf156eda0f57fda3195540b6bf34e071cf78dc23f0b->enter($__internal_0fc75d5e430dcfe05ac9cbf156eda0f57fda3195540b6bf34e071cf78dc23f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0fc75d5e430dcfe05ac9cbf156eda0f57fda3195540b6bf34e071cf78dc23f0b->leave($__internal_0fc75d5e430dcfe05ac9cbf156eda0f57fda3195540b6bf34e071cf78dc23f0b_prof);

        
        $__internal_8b750c43e5ee7b317cc18f870dcef6cffddaca47983a91887ee63db4f60d3d27->leave($__internal_8b750c43e5ee7b317cc18f870dcef6cffddaca47983a91887ee63db4f60d3d27_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_32d4a919df0ab899a1c7f032ffa91a3f3dce38f840618e37ee7f7e1cc9590423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32d4a919df0ab899a1c7f032ffa91a3f3dce38f840618e37ee7f7e1cc9590423->enter($__internal_32d4a919df0ab899a1c7f032ffa91a3f3dce38f840618e37ee7f7e1cc9590423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2a03642abb29933081d78793a916a88f628ea785bb7339798fa0d0576f6cd774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a03642abb29933081d78793a916a88f628ea785bb7339798fa0d0576f6cd774->enter($__internal_2a03642abb29933081d78793a916a88f628ea785bb7339798fa0d0576f6cd774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2a03642abb29933081d78793a916a88f628ea785bb7339798fa0d0576f6cd774->leave($__internal_2a03642abb29933081d78793a916a88f628ea785bb7339798fa0d0576f6cd774_prof);

        
        $__internal_32d4a919df0ab899a1c7f032ffa91a3f3dce38f840618e37ee7f7e1cc9590423->leave($__internal_32d4a919df0ab899a1c7f032ffa91a3f3dce38f840618e37ee7f7e1cc9590423_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/toure/dev/rest_api_symfony3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
