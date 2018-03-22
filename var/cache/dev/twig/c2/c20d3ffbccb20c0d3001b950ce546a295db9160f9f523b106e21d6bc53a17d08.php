<?php

/* base.html.twig */
class __TwigTemplate_7131e8cc1616b114a4c8b1ca94d59192c38d0ddc533142ef9506fadcd143ba7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad45944b6412ac853fe38b0658415be4fc1969f93c16adfcaa933266a2923915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad45944b6412ac853fe38b0658415be4fc1969f93c16adfcaa933266a2923915->enter($__internal_ad45944b6412ac853fe38b0658415be4fc1969f93c16adfcaa933266a2923915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d3319eeefcc9c6649b0c2c755b53ce7cbbae18a6e2a07414507d7f879c68cb13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3319eeefcc9c6649b0c2c755b53ce7cbbae18a6e2a07414507d7f879c68cb13->enter($__internal_d3319eeefcc9c6649b0c2c755b53ce7cbbae18a6e2a07414507d7f879c68cb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "</head>
<body>

";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "</body>
</html>";
        
        $__internal_ad45944b6412ac853fe38b0658415be4fc1969f93c16adfcaa933266a2923915->leave($__internal_ad45944b6412ac853fe38b0658415be4fc1969f93c16adfcaa933266a2923915_prof);

        
        $__internal_d3319eeefcc9c6649b0c2c755b53ce7cbbae18a6e2a07414507d7f879c68cb13->leave($__internal_d3319eeefcc9c6649b0c2c755b53ce7cbbae18a6e2a07414507d7f879c68cb13_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b1aaafd1a89e6b882f4b36a942120c1c42ccbc753ea40073fa3efa80ffb2f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b1aaafd1a89e6b882f4b36a942120c1c42ccbc753ea40073fa3efa80ffb2f39->enter($__internal_5b1aaafd1a89e6b882f4b36a942120c1c42ccbc753ea40073fa3efa80ffb2f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_50abd2914829fb78bba667b450dab0e40162dbc1714ec1b662b63ccfe27e8aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50abd2914829fb78bba667b450dab0e40162dbc1714ec1b662b63ccfe27e8aed->enter($__internal_50abd2914829fb78bba667b450dab0e40162dbc1714ec1b662b63ccfe27e8aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_50abd2914829fb78bba667b450dab0e40162dbc1714ec1b662b63ccfe27e8aed->leave($__internal_50abd2914829fb78bba667b450dab0e40162dbc1714ec1b662b63ccfe27e8aed_prof);

        
        $__internal_5b1aaafd1a89e6b882f4b36a942120c1c42ccbc753ea40073fa3efa80ffb2f39->leave($__internal_5b1aaafd1a89e6b882f4b36a942120c1c42ccbc753ea40073fa3efa80ffb2f39_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7263536f4fb45f65fff709d3cd76e7048da80900f47c79cdb99d71fa60884fae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7263536f4fb45f65fff709d3cd76e7048da80900f47c79cdb99d71fa60884fae->enter($__internal_7263536f4fb45f65fff709d3cd76e7048da80900f47c79cdb99d71fa60884fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d688801f0afb4b026d41e2faf93bbc9b42b2adaa2c6f70dcb4a6d8306727dfc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d688801f0afb4b026d41e2faf93bbc9b42b2adaa2c6f70dcb4a6d8306727dfc9->enter($__internal_d688801f0afb4b026d41e2faf93bbc9b42b2adaa2c6f70dcb4a6d8306727dfc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.css\"/>
    ";
        
        $__internal_d688801f0afb4b026d41e2faf93bbc9b42b2adaa2c6f70dcb4a6d8306727dfc9->leave($__internal_d688801f0afb4b026d41e2faf93bbc9b42b2adaa2c6f70dcb4a6d8306727dfc9_prof);

        
        $__internal_7263536f4fb45f65fff709d3cd76e7048da80900f47c79cdb99d71fa60884fae->leave($__internal_7263536f4fb45f65fff709d3cd76e7048da80900f47c79cdb99d71fa60884fae_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_e699b0247d508fa14d725692a639383206e649209a42a0309a9a309a4c907989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e699b0247d508fa14d725692a639383206e649209a42a0309a9a309a4c907989->enter($__internal_e699b0247d508fa14d725692a639383206e649209a42a0309a9a309a4c907989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7685018a840c289e0324110d7965184365d1c4f37bd1c3aa9baf4ef4b71243e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7685018a840c289e0324110d7965184365d1c4f37bd1c3aa9baf4ef4b71243e->enter($__internal_a7685018a840c289e0324110d7965184365d1c4f37bd1c3aa9baf4ef4b71243e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div class=\"ui container\">
        ";
        // line 15
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->getSourceContext()); })()), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 16
            echo "            <div class=\"ui ";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo " message\">
                <ul class=\"list\">
                    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 19
                echo "                        <li>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                </ul>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
        ";
        // line 25
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "    </div>
";
        
        $__internal_a7685018a840c289e0324110d7965184365d1c4f37bd1c3aa9baf4ef4b71243e->leave($__internal_a7685018a840c289e0324110d7965184365d1c4f37bd1c3aa9baf4ef4b71243e_prof);

        
        $__internal_e699b0247d508fa14d725692a639383206e649209a42a0309a9a309a4c907989->leave($__internal_e699b0247d508fa14d725692a639383206e649209a42a0309a9a309a4c907989_prof);

    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        $__internal_69c87cbe8fbbfd70b6a1181cff162089125a40ac4f658f0fb9e516cce6d10d64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69c87cbe8fbbfd70b6a1181cff162089125a40ac4f658f0fb9e516cce6d10d64->enter($__internal_69c87cbe8fbbfd70b6a1181cff162089125a40ac4f658f0fb9e516cce6d10d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ff7061331714911fb71a2c31f450b686c459a17d8a427df9ced4285c230e6c67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff7061331714911fb71a2c31f450b686c459a17d8a427df9ced4285c230e6c67->enter($__internal_ff7061331714911fb71a2c31f450b686c459a17d8a427df9ced4285c230e6c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ff7061331714911fb71a2c31f450b686c459a17d8a427df9ced4285c230e6c67->leave($__internal_ff7061331714911fb71a2c31f450b686c459a17d8a427df9ced4285c230e6c67_prof);

        
        $__internal_69c87cbe8fbbfd70b6a1181cff162089125a40ac4f658f0fb9e516cce6d10d64->leave($__internal_69c87cbe8fbbfd70b6a1181cff162089125a40ac4f658f0fb9e516cce6d10d64_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_86fba9c9f47026728f9f67229293a9d02b6aee68900a0e021b48776fbad1fe8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86fba9c9f47026728f9f67229293a9d02b6aee68900a0e021b48776fbad1fe8b->enter($__internal_86fba9c9f47026728f9f67229293a9d02b6aee68900a0e021b48776fbad1fe8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_30810e2a84cf6d4d03b0ebee02361e66930745e2f263ea3f52debabc50a4bf6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30810e2a84cf6d4d03b0ebee02361e66930745e2f263ea3f52debabc50a4bf6e->enter($__internal_30810e2a84cf6d4d03b0ebee02361e66930745e2f263ea3f52debabc50a4bf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.js\"></script>
";
        
        $__internal_30810e2a84cf6d4d03b0ebee02361e66930745e2f263ea3f52debabc50a4bf6e->leave($__internal_30810e2a84cf6d4d03b0ebee02361e66930745e2f263ea3f52debabc50a4bf6e_prof);

        
        $__internal_86fba9c9f47026728f9f67229293a9d02b6aee68900a0e021b48776fbad1fe8b->leave($__internal_86fba9c9f47026728f9f67229293a9d02b6aee68900a0e021b48776fbad1fe8b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  186 => 29,  177 => 28,  160 => 25,  149 => 26,  147 => 25,  144 => 24,  136 => 21,  127 => 19,  123 => 18,  117 => 16,  112 => 15,  109 => 13,  100 => 12,  89 => 7,  80 => 6,  62 => 5,  51 => 32,  49 => 28,  47 => 12,  42 => 9,  40 => 6,  36 => 5,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.css\"/>
    {% endblock %}
</head>
<body>

{% block body %}
    <div class=\"ui container\">
        {# you can read and display just one flash message type... #}
        {% for label, messages in app.flashes %}
            <div class=\"ui {{ label }} message\">
                <ul class=\"list\">
                    {% for message in messages %}
                        <li>{{ message }}</li>
                    {% endfor %}
                </ul>
            </div>
        {% endfor %}

        {% block content %}{% endblock %}
    </div>
{% endblock %}
{% block javascripts %}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.js\"></script>
{% endblock %}
</body>
</html>", "base.html.twig", "/home/daniel/Desktop/SEGUNDO_CARRERA/todo/templates/base.html.twig");
    }
}
