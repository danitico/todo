<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2b0ca155660c7f9727796fc68e4c6951a8af132f635ca1b874cae5eeefcee5a9 extends Twig_Template
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
        $__internal_cc4b2e8fb7db139a3aaeaa19259911a565fd7913c4f2cd4c6fcf8809e0cfa624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc4b2e8fb7db139a3aaeaa19259911a565fd7913c4f2cd4c6fcf8809e0cfa624->enter($__internal_cc4b2e8fb7db139a3aaeaa19259911a565fd7913c4f2cd4c6fcf8809e0cfa624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_888277cb2b9aac1549f9efa7a5614b2611489a48ee898db8fbdaf540755bb665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_888277cb2b9aac1549f9efa7a5614b2611489a48ee898db8fbdaf540755bb665->enter($__internal_888277cb2b9aac1549f9efa7a5614b2611489a48ee898db8fbdaf540755bb665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc4b2e8fb7db139a3aaeaa19259911a565fd7913c4f2cd4c6fcf8809e0cfa624->leave($__internal_cc4b2e8fb7db139a3aaeaa19259911a565fd7913c4f2cd4c6fcf8809e0cfa624_prof);

        
        $__internal_888277cb2b9aac1549f9efa7a5614b2611489a48ee898db8fbdaf540755bb665->leave($__internal_888277cb2b9aac1549f9efa7a5614b2611489a48ee898db8fbdaf540755bb665_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1623b5a72785ec7cb0f52a586eee6b49e306ecf4c8b12d4d7fbf36387eb01593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1623b5a72785ec7cb0f52a586eee6b49e306ecf4c8b12d4d7fbf36387eb01593->enter($__internal_1623b5a72785ec7cb0f52a586eee6b49e306ecf4c8b12d4d7fbf36387eb01593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2f6467434bc30fc0341cd3542fece131dabf9e8ab82523886cdee6e65a5df156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f6467434bc30fc0341cd3542fece131dabf9e8ab82523886cdee6e65a5df156->enter($__internal_2f6467434bc30fc0341cd3542fece131dabf9e8ab82523886cdee6e65a5df156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2f6467434bc30fc0341cd3542fece131dabf9e8ab82523886cdee6e65a5df156->leave($__internal_2f6467434bc30fc0341cd3542fece131dabf9e8ab82523886cdee6e65a5df156_prof);

        
        $__internal_1623b5a72785ec7cb0f52a586eee6b49e306ecf4c8b12d4d7fbf36387eb01593->leave($__internal_1623b5a72785ec7cb0f52a586eee6b49e306ecf4c8b12d4d7fbf36387eb01593_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9c707894a4776334b030bf16bada592af8ae10029a40a83684ed5a3c1e1b9bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c707894a4776334b030bf16bada592af8ae10029a40a83684ed5a3c1e1b9bce->enter($__internal_9c707894a4776334b030bf16bada592af8ae10029a40a83684ed5a3c1e1b9bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b1b4b35052c305004bce89d7ab0067e379bcd128c4501307ab47eaa4b717aea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1b4b35052c305004bce89d7ab0067e379bcd128c4501307ab47eaa4b717aea0->enter($__internal_b1b4b35052c305004bce89d7ab0067e379bcd128c4501307ab47eaa4b717aea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b1b4b35052c305004bce89d7ab0067e379bcd128c4501307ab47eaa4b717aea0->leave($__internal_b1b4b35052c305004bce89d7ab0067e379bcd128c4501307ab47eaa4b717aea0_prof);

        
        $__internal_9c707894a4776334b030bf16bada592af8ae10029a40a83684ed5a3c1e1b9bce->leave($__internal_9c707894a4776334b030bf16bada592af8ae10029a40a83684ed5a3c1e1b9bce_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_919bd1028a24641b7ca96445378ad76e3370879fe91900e0ad9dc68d13733609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_919bd1028a24641b7ca96445378ad76e3370879fe91900e0ad9dc68d13733609->enter($__internal_919bd1028a24641b7ca96445378ad76e3370879fe91900e0ad9dc68d13733609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b834bf5029723db5857b362fe97cec037013e60d35cd9db00dde3eb8eab81162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b834bf5029723db5857b362fe97cec037013e60d35cd9db00dde3eb8eab81162->enter($__internal_b834bf5029723db5857b362fe97cec037013e60d35cd9db00dde3eb8eab81162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_b834bf5029723db5857b362fe97cec037013e60d35cd9db00dde3eb8eab81162->leave($__internal_b834bf5029723db5857b362fe97cec037013e60d35cd9db00dde3eb8eab81162_prof);

        
        $__internal_919bd1028a24641b7ca96445378ad76e3370879fe91900e0ad9dc68d13733609->leave($__internal_919bd1028a24641b7ca96445378ad76e3370879fe91900e0ad9dc68d13733609_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/daniel/Desktop/todo/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
