<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_58efa056d0f066525a1d6a946adc7ad1f80036e5a0539a8d991b0f915682d6dd extends Twig_Template
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
        $__internal_20037bf0bbd5d2f7db0963bfd6bb45ecf6e6057c529d5c982b3470af460dad4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20037bf0bbd5d2f7db0963bfd6bb45ecf6e6057c529d5c982b3470af460dad4a->enter($__internal_20037bf0bbd5d2f7db0963bfd6bb45ecf6e6057c529d5c982b3470af460dad4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_64cd0872be88b069a09b2d5b4f3a3a1c225c5272334bf5f0221bac4c423c0198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64cd0872be88b069a09b2d5b4f3a3a1c225c5272334bf5f0221bac4c423c0198->enter($__internal_64cd0872be88b069a09b2d5b4f3a3a1c225c5272334bf5f0221bac4c423c0198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20037bf0bbd5d2f7db0963bfd6bb45ecf6e6057c529d5c982b3470af460dad4a->leave($__internal_20037bf0bbd5d2f7db0963bfd6bb45ecf6e6057c529d5c982b3470af460dad4a_prof);

        
        $__internal_64cd0872be88b069a09b2d5b4f3a3a1c225c5272334bf5f0221bac4c423c0198->leave($__internal_64cd0872be88b069a09b2d5b4f3a3a1c225c5272334bf5f0221bac4c423c0198_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_97bf68151ed0b5cddc0746854c0fda47066fe48985d128a8fdd340c8466f5be1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97bf68151ed0b5cddc0746854c0fda47066fe48985d128a8fdd340c8466f5be1->enter($__internal_97bf68151ed0b5cddc0746854c0fda47066fe48985d128a8fdd340c8466f5be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_891d5ef6ab3e14130c17088e4c0fd633426d29d79c951355ffa10b2514de9901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_891d5ef6ab3e14130c17088e4c0fd633426d29d79c951355ffa10b2514de9901->enter($__internal_891d5ef6ab3e14130c17088e4c0fd633426d29d79c951355ffa10b2514de9901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_891d5ef6ab3e14130c17088e4c0fd633426d29d79c951355ffa10b2514de9901->leave($__internal_891d5ef6ab3e14130c17088e4c0fd633426d29d79c951355ffa10b2514de9901_prof);

        
        $__internal_97bf68151ed0b5cddc0746854c0fda47066fe48985d128a8fdd340c8466f5be1->leave($__internal_97bf68151ed0b5cddc0746854c0fda47066fe48985d128a8fdd340c8466f5be1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_88b79c6752bb9ec85ac64254e06c5df001c88d8781c0b2b92ea5c3059ab16960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b79c6752bb9ec85ac64254e06c5df001c88d8781c0b2b92ea5c3059ab16960->enter($__internal_88b79c6752bb9ec85ac64254e06c5df001c88d8781c0b2b92ea5c3059ab16960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d4d967ffebdc116640ec2c0dcee5fac0e5a219984e016f5888a07cdf8000ecb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4d967ffebdc116640ec2c0dcee5fac0e5a219984e016f5888a07cdf8000ecb2->enter($__internal_d4d967ffebdc116640ec2c0dcee5fac0e5a219984e016f5888a07cdf8000ecb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d4d967ffebdc116640ec2c0dcee5fac0e5a219984e016f5888a07cdf8000ecb2->leave($__internal_d4d967ffebdc116640ec2c0dcee5fac0e5a219984e016f5888a07cdf8000ecb2_prof);

        
        $__internal_88b79c6752bb9ec85ac64254e06c5df001c88d8781c0b2b92ea5c3059ab16960->leave($__internal_88b79c6752bb9ec85ac64254e06c5df001c88d8781c0b2b92ea5c3059ab16960_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f0bdc9288aab805ad8086a338628fd0c0084b79224da1b8208af26fb98e81411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0bdc9288aab805ad8086a338628fd0c0084b79224da1b8208af26fb98e81411->enter($__internal_f0bdc9288aab805ad8086a338628fd0c0084b79224da1b8208af26fb98e81411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_81e0edb03843003b030e7d53d81ac7aecba29e9ad487b683350500a1c0a710fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81e0edb03843003b030e7d53d81ac7aecba29e9ad487b683350500a1c0a710fd->enter($__internal_81e0edb03843003b030e7d53d81ac7aecba29e9ad487b683350500a1c0a710fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_81e0edb03843003b030e7d53d81ac7aecba29e9ad487b683350500a1c0a710fd->leave($__internal_81e0edb03843003b030e7d53d81ac7aecba29e9ad487b683350500a1c0a710fd_prof);

        
        $__internal_f0bdc9288aab805ad8086a338628fd0c0084b79224da1b8208af26fb98e81411->leave($__internal_f0bdc9288aab805ad8086a338628fd0c0084b79224da1b8208af26fb98e81411_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/daniel/Desktop/todo/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
